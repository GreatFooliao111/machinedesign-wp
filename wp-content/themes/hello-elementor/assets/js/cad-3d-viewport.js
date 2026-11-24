(() => {
  'use strict';

  const CONFIG = Object.freeze({
    maxPitch: 14,       // rotateX limit (±14deg)
    maxYaw: 18,         // rotateY limit (±18deg)
    maxRoll: 2,         // rotateZ limit (±2deg)
    hoverScale: 1.03,   // Active scale
    lerpActive: 0.08,   // Heavy mechanical damping on hover (0.07 - 0.09 range)
    lerpSnapback: 0.06, // Elastic return damping when cursor leaves
    idleAmplitudeY: 7,  // Idle vertical respiration (px)
    idlePitchAmp: 1.8,  // Idle subtle pitch (deg)
    idleYawAmp: 2.4,    // Idle subtle yaw (deg)
    idleSpeed: 0.0018   // Idle oscillation frequency
  });

  const clamp = (val, min, max) => Math.min(Math.max(val, min), max);
  const lerp = (start, end, factor) => start + (end - start) * factor;

  class Cad3DViewport {
    constructor(viewportEl) {
      if (!(viewportEl instanceof HTMLElement)) return;
      this.viewport = viewportEl;
      this.telemetryEl = viewportEl.querySelector('[data-cad-telemetry]');
      this.reducedMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;

      this.rect = null;
      this.isHovered = false;
      this.rafId = null;

      // Normalized pointer coordinates [-1, 1]
      this.pointer = { x: 0, y: 0 };

      // Current interpolated state
      this.current = {
        rx: 0,
        ry: 0,
        rz: 0,
        scale: 1,
        floatY: 0,
        sheenX: 50,
        sheenY: 50,
        sheenOpacity: 0.15
      };

      // Target state
      this.target = { ...this.current };

      this.init();
    }

    init() {
      this.updateBounds();

      this.onPointerEnter = this.handlePointerEnter.bind(this);
      this.onPointerMove = this.handlePointerMove.bind(this);
      this.onPointerLeave = this.handlePointerLeave.bind(this);
      this.onResize = this.updateBounds.bind(this);

      this.viewport.addEventListener('pointerenter', this.onPointerEnter, { passive: true });
      this.viewport.addEventListener('pointermove', this.onPointerMove, { passive: true });
      this.viewport.addEventListener('pointerleave', this.onPointerLeave, { passive: true });
      window.addEventListener('resize', this.onResize, { passive: true });
      window.addEventListener('scroll', this.onResize, { passive: true });

      if (!this.reducedMotion) {
        this.startLoop();
      }
    }

    updateBounds() {
      const rect = this.viewport.getBoundingClientRect();
      if (rect.width > 0 && rect.height > 0) {
        this.rect = rect;
      }
    }

    handlePointerEnter() {
      this.updateBounds();
      this.isHovered = true;
    }

    handlePointerMove(e) {
      if (!this.rect || this.reducedMotion) return;

      const relX = e.clientX - this.rect.left;
      const relY = e.clientY - this.rect.top;

      // Normalize cursor position to [-1, +1] from center
      const nx = clamp((relX / this.rect.width) * 2 - 1, -1, 1);
      const ny = clamp((relY / this.rect.height) * 2 - 1, -1, 1);

      this.pointer.x = nx;
      this.pointer.y = ny;

      this.target.rx = -ny * CONFIG.maxPitch;
      this.target.ry = nx * CONFIG.maxYaw;
      this.target.rz = -nx * ny * CONFIG.maxRoll;
      this.target.scale = CONFIG.hoverScale;
      this.target.floatY = 0;
      this.target.sheenX = ((nx + 1) * 0.5) * 100;
      this.target.sheenY = ((ny + 1) * 0.5) * 100;
      this.target.sheenOpacity = 0.55;
    }

    handlePointerLeave() {
      this.isHovered = false;
      this.pointer.x = 0;
      this.pointer.y = 0;
      this.target.scale = 1;
      this.target.rz = 0;
      this.target.sheenX = 50;
      this.target.sheenY = 50;
      this.target.sheenOpacity = 0.15;
    }

    startLoop() {
      const tick = (timestamp) => {
        if (!document.hidden) {
          this.stepPhysics(timestamp);
        }
        this.rafId = window.requestAnimationFrame(tick);
      };
      this.rafId = window.requestAnimationFrame(tick);
    }

    stepPhysics(timestamp) {
      // Seamless Idle Respiration when not hovered
      if (!this.isHovered) {
        const t = timestamp * CONFIG.idleSpeed;
        this.target.floatY = Math.sin(t) * CONFIG.idleAmplitudeY;
        this.target.rx = Math.cos(t * 0.8) * CONFIG.idlePitchAmp;
        this.target.ry = Math.sin(t * 0.6) * CONFIG.idleYawAmp;
      }

      const damping = this.isHovered ? CONFIG.lerpActive : CONFIG.lerpSnapback;

      this.current.rx = lerp(this.current.rx, this.target.rx, damping);
      this.current.ry = lerp(this.current.ry, this.target.ry, damping);
      this.current.rz = lerp(this.current.rz, this.target.rz, damping);
      this.current.scale = lerp(this.current.scale, this.target.scale, damping);
      this.current.floatY = lerp(this.current.floatY, this.target.floatY, damping);
      this.current.sheenX = lerp(this.current.sheenX, this.target.sheenX, damping);
      this.current.sheenY = lerp(this.current.sheenY, this.target.sheenY, damping);
      this.current.sheenOpacity = lerp(this.current.sheenOpacity, this.target.sheenOpacity, damping);

      // Inverse Volumetric Backlight shift (Layer -2)
      const glowX = (-this.current.ry / CONFIG.maxYaw) * 22;
      const glowY = (this.current.rx / CONFIG.maxPitch) * 22;

      // Opposite Cast Shadow projection (Layer -1)
      const shadowX = (-this.current.ry / CONFIG.maxYaw) * 28;
      const shadowY = 18 + (this.current.rx / CONFIG.maxPitch) * 24 - this.current.floatY * 0.6;
      const tiltMagnitude = Math.hypot(this.current.rx / CONFIG.maxPitch, this.current.ry / CONFIG.maxYaw);
      const shadowBlur = 26 + tiltMagnitude * 14;
      const shadowScale = 0.92 + tiltMagnitude * 0.06;

      const style = this.viewport.style;
      style.setProperty('--rx', `${this.current.rx.toFixed(3)}deg`);
      style.setProperty('--ry', `${this.current.ry.toFixed(3)}deg`);
      style.setProperty('--rz', `${this.current.rz.toFixed(3)}deg`);
      style.setProperty('--scale', this.current.scale.toFixed(4));
      style.setProperty('--float-y', `${this.current.floatY.toFixed(2)}px`);
      style.setProperty('--glow-x', `${glowX.toFixed(2)}px`);
      style.setProperty('--glow-y', `${glowY.toFixed(2)}px`);
      style.setProperty('--shadow-x', `${shadowX.toFixed(2)}px`);
      style.setProperty('--shadow-y', `${shadowY.toFixed(2)}px`);
      style.setProperty('--shadow-blur', `${shadowBlur.toFixed(2)}px`);
      style.setProperty('--shadow-scale', shadowScale.toFixed(3));
      style.setProperty('--sheen-x', `${this.current.sheenX.toFixed(2)}%`);
      style.setProperty('--sheen-y', `${this.current.sheenY.toFixed(2)}%`);
      style.setProperty('--sheen-opacity', this.current.sheenOpacity.toFixed(3));

      if (this.telemetryEl) {
        this.telemetryEl.textContent = `X: ${this.current.rx.toFixed(1)}° | Y: ${this.current.ry.toFixed(1)}°`;
      }
    }
  }

  const initViewports = () => {
    document.querySelectorAll('[data-cad-viewport]').forEach((el) => new Cad3DViewport(el));
  };

  if (document.readyState === 'loading') {
    document.addEventListener('DOMContentLoaded', initViewports);
  } else {
    initViewports();
  }
})();