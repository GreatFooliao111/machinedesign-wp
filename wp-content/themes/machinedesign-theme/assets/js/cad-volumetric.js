(() => {
  'use strict';

  /**
   * Vertex Shader: Fullscreen frameless quad in object space
   */
  const VERTEX_SHADER = `
    attribute vec2 a_position;
    varying vec2 v_uv;
    void main() {
      v_uv = vec2(a_position.x * 0.5 + 0.5, 0.5 - a_position.y * 0.5);
      gl_Position = vec4(a_position, 0.0, 1.0);
    }
  `;

  /**
   * Fragment Shader:
   * 1. Synthesizes a 3D volumetric heightfield from any transparent CAD PNG
   *    by combining multi-ring silhouette distance (inflating the core volume)
   *    with metallic luminance relief.
   * 2. Performs Iterative Ray-Marched Parallax Occlusion Mapping (14 steps)
   *    so foreground mechanical features shift across background features with
   *    non-linear depth distortion rather than rotating like a flat card.
   * 3. Reconstructs per-pixel 3D surface normals from the heightfield gradient
   *    to compute physical metallic specular highlights and Laser-Lime (#8ce70c)
   *    Fresnel rim lighting exclusively on the 3D contours of the mechanism.
   */
  const FRAGMENT_SHADER = `
    precision highp float;
    varying vec2 v_uv;
    uniform sampler2D u_tex;
    uniform vec2 u_tilt;
    uniform vec2 u_light;
    uniform float u_hover;

    float sampleHeight(vec2 uv) {
      vec4 c = texture2D(u_tex, uv);
      float luma = dot(c.rgb, vec3(0.299, 0.587, 0.114));
      
      // Multi-ring silhouette volume estimation for rounded 3D mechanical depth
      float r1 = 0.018;
      float r2 = 0.042;
      float hull1 = (
        texture2D(u_tex, uv + vec2(r1, 0.0)).a +
        texture2D(u_tex, uv - vec2(r1, 0.0)).a +
        texture2D(u_tex, uv + vec2(0.0, r1)).a +
        texture2D(u_tex, uv - vec2(0.0, r1)).a
      ) * 0.25;

      float hull2 = (
        texture2D(u_tex, uv + vec2(r2, r2)).a +
        texture2D(u_tex, uv + vec2(-r2, r2)).a +
        texture2D(u_tex, uv + vec2(r2, -r2)).a +
        texture2D(u_tex, uv + vec2(-r2, -r2)).a
      ) * 0.25;

      float domeVolume = smoothstep(0.0, 1.0, (c.a * 0.45 + hull1 * 0.35 + hull2 * 0.20));
      return (domeVolume * 0.65 + luma * 0.35) * c.a;
    }

    void main() {
      // Scale UV slightly inward so parallax displacement never clips at edges
      vec2 baseUv = (v_uv - 0.5) * 1.12 + 0.5;
      if (baseUv.x < 0.0 || baseUv.x > 1.0 || baseUv.y < 0.0 || baseUv.y > 1.0) {
        gl_FragColor = vec4(0.0);
        return;
      }

      // Ray-marched Parallax Occlusion Mapping
      float parallaxScale = 0.052;
      vec2 viewDir = u_tilt * parallaxScale;
      const int STEPS = 14;
      float stepSize = 1.0 / float(STEPS);
      vec2 deltaUv = viewDir * stepSize;

      vec2 currUv = baseUv - viewDir * 0.5;
      float currLayerHeight = 1.0;
      float currSampleHeight = sampleHeight(currUv);

      for (int i = 0; i < STEPS; i++) {
        if (currLayerHeight <= currSampleHeight) break;
        currUv += deltaUv;
        currSampleHeight = sampleHeight(currUv);
        currLayerHeight -= stepSize;
      }

      // Linear refinement between last two marched steps for smooth relief
      vec2 prevUv = currUv - deltaUv;
      float afterDepth = currSampleHeight - currLayerHeight;
      float beforeDepth = sampleHeight(prevUv) - (currLayerHeight + stepSize);
      float weight = clamp(afterDepth / (afterDepth - beforeDepth + 0.0001), 0.0, 1.0);
      vec2 displacedUv = mix(currUv, prevUv, weight);

      if (displacedUv.x < 0.0 || displacedUv.x > 1.0 || displacedUv.y < 0.0 || displacedUv.y > 1.0) {
        gl_FragColor = vec4(0.0);
        return;
      }

      vec4 texColor = texture2D(u_tex, displacedUv);
      if (texColor.a < 0.01) {
        gl_FragColor = vec4(0.0);
        return;
      }

      // Reconstruct 3D surface normal from heightfield finite differences
      float eps = 0.0045;
      float hL = sampleHeight(displacedUv - vec2(eps, 0.0));
      float hR = sampleHeight(displacedUv + vec2(eps, 0.0));
      float hD = sampleHeight(displacedUv - vec2(0.0, eps));
      float hU = sampleHeight(displacedUv + vec2(0.0, eps));

      vec3 normal = normalize(vec3((hL - hR) * 4.2, (hD - hU) * 4.2, 1.0));

      // Dynamic 3D studio light & half-vector specular
      vec3 lightPos = vec3(u_light.x * 1.35, -u_light.y * 1.35, 0.85);
      vec3 lightDir = normalize(lightPos - vec3(v_uv - 0.5, 0.0));
      vec3 viewVec = normalize(vec3(-u_tilt.x * 0.45, u_tilt.y * 0.45, 1.0));
      vec3 halfVec = normalize(lightDir + viewVec);

      float diff = max(dot(normal, lightDir), 0.0);
      float spec = pow(max(dot(normal, halfVec), 0.0), 36.0);
      float fresnel = pow(1.0 - max(dot(normal, viewVec), 0.0), 3.2);

      // Laser Lime (#8ce70c) contour rim light + brushed steel specular
      vec3 limeAccent = vec3(0.549, 0.906, 0.047);
      vec3 studioSpec = mix(vec3(0.92, 0.96, 1.0), limeAccent, 0.28) * spec * (0.55 + u_hover * 0.55);
      vec3 rimGlow = limeAccent * fresnel * (0.42 + u_hover * 0.45);

      // Self-shadowing in crevices + 3D directional illumination
      float ambientOcclusion = mix(0.76, 1.16, diff);
      vec3 shadedRgb = texColor.rgb * ambientOcclusion + studioSpec + rimGlow;

      gl_FragColor = vec4(shadedRgb, texColor.a);
    }
  `;

  class VolumetricCADStage {
    constructor(rootEl) {
      if (!(rootEl instanceof HTMLElement)) return;
      this.root = rootEl;
      this.img = rootEl.querySelector('[data-cad-source]');
      this.canvas = rootEl.querySelector('[data-cad-canvas]');
      this.telemetryEl = rootEl.querySelector('[data-cad-telemetry]');
      this.reducedMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;

      this.gl = null;
      this.program = null;
      this.uniforms = {};
      this.rect = null;
      this.isHovered = false;

      // Normalized target pointer [-1, 1]
      this.pointer = { x: 0, y: 0 };

      // Heavy Mechanical Spring State (Primary Assembly)
      this.mech = {
        x: 0, y: 0, rx: 0, ry: 0, rz: 0, scale: 1,
        vx: 0, vy: 0, vrx: 0, vry: 0, vrz: 0, vscale: 0,
        tiltX: 0, tiltY: 0, hover: 0
      };

      // High-Z Detached HUD Spring State (Faster, Wider Differential Parallax)
      this.hud = {
        x: 0, y: 0, rx: 0, ry: 0,
        vx: 0, vy: 0, vrx: 0, vry: 0
      };

      this.init();
    }

    init() {
      this.updateBounds();
      this.initWebGL();
      this.bindEvents();
      this.startLoop();
    }

    updateBounds() {
      const rect = this.root.getBoundingClientRect();
      if (rect.width > 0 && rect.height > 0) {
        this.rect = rect;
      }
      if (this.canvas && this.gl && this.rect) {
        const dpr = Math.min(window.devicePixelRatio || 1, 2);
        const w = Math.round(this.rect.width * dpr);
        const h = Math.round(this.rect.height * dpr);
        if (this.canvas.width !== w || this.canvas.height !== h) {
          this.canvas.width = w;
          this.canvas.height = h;
          this.gl.viewport(0, 0, w, h);
        }
      }
    }

    compileShader(type, source) {
      const shader = this.gl.createShader(type);
      this.gl.shaderSource(shader, source);
      this.gl.compileShader(shader);
      if (!this.gl.getShaderParameter(shader, this.gl.COMPILE_STATUS)) {
        this.gl.deleteShader(shader);
        return null;
      }
      return shader;
    }

    initWebGL() {
      if (!this.canvas || !this.img) return;
      const gl = this.canvas.getContext('webgl', {
        alpha: true,
        premultipliedAlpha: false,
        antialias: true
      });
      if (!gl) return;
      this.gl = gl;

      const vs = this.compileShader(gl.VERTEX_SHADER, VERTEX_SHADER);
      const fs = this.compileShader(gl.FRAGMENT_SHADER, FRAGMENT_SHADER);
      if (!vs || !fs) return;

      const program = gl.createProgram();
      gl.attachShader(program, vs);
      gl.attachShader(program, fs);
      gl.linkProgram(program);
      if (!gl.getProgramParameter(program, gl.LINK_STATUS)) return;

      this.program = program;
      gl.useProgram(program);

      const posBuffer = gl.createBuffer();
      gl.bindBuffer(gl.ARRAY_BUFFER, posBuffer);
      gl.bufferData(
        gl.ARRAY_BUFFER,
        new Float32Array([-1, -1, 1, -1, -1, 1, -1, 1, 1, -1, 1, 1]),
        gl.STATIC_DRAW
      );

      const posLoc = gl.getAttribLocation(program, 'a_position');
      gl.enableVertexAttribArray(posLoc);
      gl.vertexAttribPointer(posLoc, 2, gl.FLOAT, false, 0, 0);

      this.uniforms = {
        tilt: gl.getUniformLocation(program, 'u_tilt'),
        light: gl.getUniformLocation(program, 'u_light'),
        hover: gl.getUniformLocation(program, 'u_hover')
      };

      const loadTextureFromImg = () => {
        try {
          // Rasterize image onto an Aspect-Ratio Preserving square canvas first
          // so any arbitrary CAD PNG aspect ratio stays perfectly proportioned
          const size = 1024;
          const offscreen = document.createElement('canvas');
          offscreen.width = size;
          offscreen.height = size;
          const ctx = offscreen.getContext('2d');
          const iw = this.img.naturalWidth || 800;
          const ih = this.img.naturalHeight || 800;
          const scale = Math.min((size * 0.88) / iw, (size * 0.88) / ih);
          const dw = iw * scale;
          const dh = ih * scale;
          ctx.drawImage(this.img, (size - dw) * 0.5, (size - dh) * 0.5, dw, dh);

          const tex = gl.createTexture();
          gl.bindTexture(gl.TEXTURE_2D, tex);
          gl.texParameteri(gl.TEXTURE_2D, gl.TEXTURE_WRAP_S, gl.CLAMP_TO_EDGE);
          gl.texParameteri(gl.TEXTURE_2D, gl.TEXTURE_WRAP_T, gl.CLAMP_TO_EDGE);
          gl.texParameteri(gl.TEXTURE_2D, gl.TEXTURE_MIN_FILTER, gl.LINEAR);
          gl.texParameteri(gl.TEXTURE_2D, gl.TEXTURE_MAG_FILTER, gl.LINEAR);
          gl.texImage2D(gl.TEXTURE_2D, 0, gl.RGBA, gl.RGBA, gl.UNSIGNED_BYTE, offscreen);

          this.updateBounds();
          this.root.classList.add('cad-volumetric--webgl-ready');
        } catch (_) {
          // If cross-origin image taints canvas, keep the CSS 3D fallback active
          this.gl = null;
        }
      };

      if (this.img.complete && this.img.naturalWidth > 0) {
        loadTextureFromImg();
      }
      this.img.addEventListener('load', loadTextureFromImg);
    }

    bindEvents() {
      this.root.addEventListener('pointerenter', () => {
        this.updateBounds();
        this.isHovered = true;
      }, { passive: true });

      this.root.addEventListener('pointermove', (e) => {
        if (!this.rect || this.reducedMotion) return;
        const nx = ((e.clientX - this.rect.left) / this.rect.width) * 2 - 1;
        const ny = ((e.clientY - this.rect.top) / this.rect.height) * 2 - 1;
        this.pointer.x = Math.max(-1, Math.min(1, nx));
        this.pointer.y = Math.max(-1, Math.min(1, ny));
      }, { passive: true });

      this.root.addEventListener('pointerleave', () => {
        this.isHovered = false;
        this.pointer.x = 0;
        this.pointer.y = 0;
      }, { passive: true });

      window.addEventListener('resize', () => this.updateBounds(), { passive: true });
      window.addEventListener('scroll', () => this.updateBounds(), { passive: true });
    }

    stepSpring(current, target, velocity, stiffness, damping) {
      const force = (target - current) * stiffness;
      const nextVel = (velocity + force) * damping;
      return [current + nextVel, nextVel];
    }

    startLoop() {
      const tick = (time) => {
        if (!document.hidden) {
          this.updatePhysics(time);
        }
        window.requestAnimationFrame(tick);
      };
      window.requestAnimationFrame(tick);
    }

    updatePhysics(time) {
      const t = time * 0.0016;

      // Idle organic respiration when pointer is outside
      const idleX = this.isHovered || this.reducedMotion ? 0 : Math.sin(t * 0.9) * 0.22;
      const idleY = this.isHovered || this.reducedMotion ? 0 : Math.cos(t * 0.7) * 0.22;
      const idleFloatY = this.isHovered || this.reducedMotion ? 0 : Math.sin(t * 1.15) * -9;

      const px = this.isHovered ? this.pointer.x : idleX;
      const py = this.isHovered ? this.pointer.y : idleY;

      // 1. Heavy Mechanical Assembly Target State (High inertia, deliberate response)
      const targetMechX = px * -14;
      const targetMechY = py * -14 + idleFloatY;
      const targetMechRx = -py * 13;
      const targetMechRy = px * 16;
      const targetMechRz = -px * py * 2.2;
      const targetScale = this.isHovered ? 1.04 : 1.0;

      const mStiff = 0.045;
      const mDamp = 0.82;

      [this.mech.x, this.mech.vx] = this.stepSpring(this.mech.x, targetMechX, this.mech.vx, mStiff, mDamp);
      [this.mech.y, this.mech.vy] = this.stepSpring(this.mech.y, targetMechY, this.mech.vy, mStiff, mDamp);
      [this.mech.rx, this.mech.vrx] = this.stepSpring(this.mech.rx, targetMechRx, this.mech.vrx, mStiff, mDamp);
      [this.mech.ry, this.mech.vry] = this.stepSpring(this.mech.ry, targetMechRy, this.mech.vry, mStiff, mDamp);
      [this.mech.rz, this.mech.vrz] = this.stepSpring(this.mech.rz, targetMechRz, this.mech.vrz, mStiff, mDamp);
      [this.mech.scale, this.mech.vscale] = this.stepSpring(this.mech.scale, targetScale, this.mech.vscale, mStiff, mDamp);

      this.mech.tiltX += (px - this.mech.tiltX) * 0.085;
      this.mech.tiltY += (py - this.mech.tiltY) * 0.085;
      this.mech.hover += ((this.isHovered ? 1 : 0) - this.mech.hover) * 0.08;

      // 2. Detached Foreground HUD Target State (Differential Parallax: Faster & Wider Amplitude)
      const targetHudX = px * 32;
      const targetHudY = py * 22 + idleFloatY * 0.35;
      const targetHudRx = -py * 19;
      const targetHudRy = px * 24;

      const hStiff = 0.085;
      const hDamp = 0.78;

      [this.hud.x, this.hud.vx] = this.stepSpring(this.hud.x, targetHudX, this.hud.vx, hStiff, hDamp);
      [this.hud.y, this.hud.vy] = this.stepSpring(this.hud.y, targetHudY, this.hud.vy, hStiff, hDamp);
      [this.hud.rx, this.hud.vrx] = this.stepSpring(this.hud.rx, targetHudRx, this.hud.vrx, hStiff, hDamp);
      [this.hud.ry, this.hud.vry] = this.stepSpring(this.hud.ry, targetHudRy, this.hud.vry, hStiff, hDamp);

      // 3. Inverse Cast Shadow & Ambient Backlight
      const shadowX = -this.mech.ry * 2.1;
      const shadowY = 36 + this.mech.rx * 1.8 - this.mech.y * 0.5;
      const tiltMag = Math.hypot(this.mech.tiltX, this.mech.tiltY);
      const shadowBlur = 32 + tiltMag * 16;
      const shadowScale = 0.94 + tiltMag * 0.08;

      const style = this.root.style;
      style.setProperty('--obj-x', `${this.mech.x.toFixed(2)}px`);
      style.setProperty('--obj-y', `${this.mech.y.toFixed(2)}px`);
      style.setProperty('--obj-rx', `${this.mech.rx.toFixed(2)}deg`);
      style.setProperty('--obj-ry', `${this.mech.ry.toFixed(2)}deg`);
      style.setProperty('--obj-rz', `${this.mech.rz.toFixed(2)}deg`);
      style.setProperty('--obj-scale', this.mech.scale.toFixed(4));

      style.setProperty('--glow-x', `${(-this.mech.ry * 1.4).toFixed(2)}px`);
      style.setProperty('--glow-y', `${(this.mech.rx * 1.4).toFixed(2)}px`);

      style.setProperty('--shadow-x', `${shadowX.toFixed(2)}px`);
      style.setProperty('--shadow-y', `${shadowY.toFixed(2)}px`);
      style.setProperty('--shadow-blur', `${shadowBlur.toFixed(2)}px`);
      style.setProperty('--shadow-scale', shadowScale.toFixed(3));

      style.setProperty('--hud-x', `${this.hud.x.toFixed(2)}px`);
      style.setProperty('--hud-y', `${this.hud.y.toFixed(2)}px`);
      style.setProperty('--hud-rx', `${this.hud.rx.toFixed(2)}deg`);
      style.setProperty('--hud-ry', `${this.hud.ry.toFixed(2)}deg`);

      if (this.telemetryEl) {
        const pSign = this.mech.rx >= 0 ? '+' : '';
        const ySign = this.mech.ry >= 0 ? '+' : '';
        this.telemetryEl.textContent = `PITCH: ${pSign}${this.mech.rx.toFixed(1)}° // YAW: ${ySign}${this.mech.ry.toFixed(1)}°`;
      }

      // 4. Render WebGL Volumetric Relief Frame
      if (this.gl && this.program) {
        this.gl.clearColor(0, 0, 0, 0);
        this.gl.clear(this.gl.COLOR_BUFFER_BIT);
        this.gl.uniform2f(this.uniforms.tilt, this.mech.tiltX, this.mech.tiltY);
        this.gl.uniform2f(this.uniforms.light, this.mech.tiltX, this.mech.tiltY);
        this.gl.uniform1f(this.uniforms.hover, this.mech.hover);
        this.gl.drawArrays(this.gl.TRIANGLES, 0, 6);
      }
    }
  }

  const initAll = () => {
    document.querySelectorAll('[data-cad-volumetric]').forEach((el) => new VolumetricCADStage(el));
  };

  if (document.readyState === 'loading') {
    document.addEventListener('DOMContentLoaded', initAll);
  } else {
    initAll();
  }
})();