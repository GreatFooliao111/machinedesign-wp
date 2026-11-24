/**
 * Delta Robot 3D Interactive Stage Engine
 * Pure GPU-accelerated CSS 3D transforms with smooth Lerp physics
 * Supports animated WebM/AVIF mechanisms and differential HUD parallax
 * Automatically renders videos via off-DOM HTML5 Canvas to eliminate downloader overlay buttons (e.g. IDM)
 */
document.addEventListener('DOMContentLoaded', function() {
  const stageElements = document.querySelectorAll('[data-delta-stage]');
  if (!stageElements.length) return;

  stageElements.forEach((stage) => {
    const heroSection = stage.closest('.page-hero-banner, .pillar-hero-wrap, .md-hero') || stage;
    const robotEl = stage.querySelector('[data-delta-robot]');
    const shadowEl = stage.querySelector('[data-delta-shadow]');
    const hudEl = stage.querySelector('[data-delta-hud]');
    const videoEl = stage.querySelector('video');

    let canvasEl = null;
    let canvasCtx = null;
    let offVideo = null;

    if (videoEl) {
      const videoSrc = videoEl.currentSrc || (videoEl.querySelector('source') ? videoEl.querySelector('source').src : videoEl.src);

      canvasEl = document.createElement('canvas');
      canvasEl.className = 'delta-robot-img delta-robot-canvas';
      canvasEl.width = videoEl.videoWidth || 608;
      canvasEl.height = videoEl.videoHeight || 600;
      canvasEl.setAttribute('role', 'img');
      canvasEl.setAttribute('aria-label', videoEl.getAttribute('aria-label') || 'Industrial mechanism');

      canvasCtx = canvasEl.getContext('2d');

      // Replace DOM video with canvas to eliminate browser downloader extensions (e.g. IDM)
      if (videoEl.parentNode) {
        videoEl.parentNode.replaceChild(canvasEl, videoEl);
      }

      // Keep playback strictly in memory (off-DOM)
      offVideo = document.createElement('video');
      offVideo.src = videoSrc;
      offVideo.muted = true;
      offVideo.loop = true;
      offVideo.playsInline = true;
      offVideo.autoplay = true;

      offVideo.addEventListener('loadedmetadata', function() {
        if (offVideo.videoWidth > 0 && offVideo.videoHeight > 0) {
          canvasEl.width = offVideo.videoWidth;
          canvasEl.height = offVideo.videoHeight;
        }
      });

      const playPromise = offVideo.play();
      if (playPromise !== undefined) {
        playPromise.catch(() => {
          window.addEventListener('click', () => { offVideo.play(); }, { once: true });
        });
      }
    }

    if (!robotEl) return;

    let mouseX = 0;
    let mouseY = 0;
    let isHovered = false;

    // Separate spring state for robot and detached HUD (differential parallax)
    let robotRotX = 0, robotRotY = 0;
    let hudX = 0, hudY = 0, hudRotX = 0, hudRotY = 0;

    function onMouseMove(e) {
      const rect = heroSection.getBoundingClientRect();
      if (e.clientY >= rect.top - 120 && e.clientY <= rect.bottom + 120) {
        const centerX = rect.left + rect.width / 2;
        const centerY = rect.top + rect.height / 2;
        const normX = (e.clientX - centerX) / (rect.width / 2);
        const normY = (e.clientY - centerY) / (rect.height / 2);

        mouseX = Math.max(-1, Math.min(1, normX));
        mouseY = Math.max(-1, Math.min(1, normY));
        isHovered = true;
      }
    }

    function onMouseLeave() {
      isHovered = false;
      mouseX = 0;
      mouseY = 0;
    }

    window.addEventListener('mousemove', onMouseMove, { passive: true });
    heroSection.addEventListener('mouseleave', onMouseLeave);

    let t = 0;

    function renderLoop() {
      t += 0.02;

      // Gentle harmonic idle breathing when mouse is resting
      const idleFloatY = isHovered ? 0 : Math.sin(t) * 6;
      const idlePitch = isHovered ? 0 : Math.cos(t * 0.8) * 1.5;
      const idleYaw = isHovered ? 0 : Math.sin(t * 0.6) * 2;

      // Damped Lerp for smooth mechanical inertia (0.075 damping)
      const targetRobotRotX = -mouseY * 13 + idlePitch;
      const targetRobotRotY = mouseX * 16 + idleYaw;

      robotRotX += (targetRobotRotX - robotRotX) * 0.075;
      robotRotY += (targetRobotRotY - robotRotY) * 0.075;

      // Apply transform to robot mechanism
      robotEl.style.transform = `perspective(1100px) rotateX(${robotRotX.toFixed(2)}deg) rotateY(${robotRotY.toFixed(2)}deg) translateY(${idleFloatY.toFixed(1)}px) scale3d(1.02, 1.02, 1.02)`;

      // Dynamic Opposite Cast Shadow
      if (shadowEl) {
        const shadowX = -robotRotY * 1.8;
        const shadowY = 32 + robotRotX * 1.5 - idleFloatY * 0.4;
        shadowEl.style.transform = `translate3d(${shadowX.toFixed(1)}px, ${shadowY.toFixed(1)}px, -50px) scale(${1 + Math.abs(robotRotY) * 0.01})`;
      }

      // Detached Floating HUD (Differential Parallax: faster displacement & distinct tilt)
      if (hudEl) {
        const targetHudX = mouseX * 24;
        const targetHudY = mouseY * 16 + idleFloatY * 0.3;
        const targetHudRotX = -mouseY * 18;
        const targetHudRotY = mouseX * 22;

        hudX += (targetHudX - hudX) * 0.09;
        hudY += (targetHudY - hudY) * 0.09;
        hudRotX += (targetHudRotX - hudRotX) * 0.09;
        hudRotY += (targetHudRotY - hudRotY) * 0.09;

        hudEl.style.transform = `translate3d(${hudX.toFixed(1)}px, ${hudY.toFixed(1)}px, 80px) rotateX(${hudRotX.toFixed(2)}deg) rotateY(${hudRotY.toFixed(2)}deg)`;
      }

      // Stream off-DOM video frames to transparent canvas
      if (canvasCtx && offVideo && !offVideo.paused && offVideo.readyState >= 2) {
        if (offVideo.videoWidth > 0 && canvasEl.width !== offVideo.videoWidth) {
          canvasEl.width = offVideo.videoWidth;
          canvasEl.height = offVideo.videoHeight;
        }
        canvasCtx.clearRect(0, 0, canvasEl.width, canvasEl.height);
        canvasCtx.drawImage(offVideo, 0, 0, canvasEl.width, canvasEl.height);
      }

      requestAnimationFrame(renderLoop);
    }

    renderLoop();
  });
});
