import re

path = r'C:\xampp\htdocs\machinedesign\wp-content\themes\hello-elementor\page-about.php'
with open(path, 'r', encoding='utf-8') as f:
    text = f.read()

# Replace overlay and status badge
old_block = """          <figure class="crew-photo-figure">
            <img src="<?php echo esc_url( home_url( '/wp-content/uploads/2026/07/machinedesign-engineering-crew-hannover.webp' ) ); ?>"
                 alt="کادر مهندسی و مدیران ارشد ماشین دیزاین در نمایشگاه بین‌المللی هانوفر"
                 class="crew-photo-img"
                 loading="lazy"
                 width="720"
                 height="560">
            <div class="crew-photo-overlay" aria-hidden="true"></div>
          </figure>

          <!-- Floating Glass HUD Status Badge with Metrics -->
          <div class="crew-hud-status-badge">
            <div class="crew-badge-top-row">
              <span class="hud-status-led" aria-hidden="true"></span>
              <span class="crew-badge-title mono">STATUS: +15 SENIOR SPECIALISTS // MATRIX ORGANIZATION</span>
            </div>
            <div class="crew-badge-meta-row">
              <span class="crew-badge-sub mono">COLLABORATIVE WORKSHOP SUPERVISION &amp; R&amp;D</span>
              <div class="crew-badge-chips">
                <span class="badge-micro-chip mono">+150 PROJECTS</span>
                <span class="badge-micro-chip mono">99.4% QUALITY</span>
              </div>
            </div>
          </div>"""

new_block = """          <figure class="crew-photo-figure">
            <img src="<?php echo esc_url( home_url( '/wp-content/uploads/2026/07/machinedesign-engineering-crew-hannover.webp' ) ); ?>"
                 alt="کادر مهندسی و هیئت مدیران ارشد ماشین دیزاین در نمایشگاه بین‌المللی هانوفر آلمان"
                 class="crew-photo-img"
                 loading="lazy"
                 width="720"
                 height="1280">
          </figure>"""

text_norm = text.replace('\r\n', '\n')
old_norm = old_block.replace('\r\n', '\n')
new_norm = new_block.replace('\r\n', '\n')

if old_norm in text_norm:
    text_norm = text_norm.replace(old_norm, new_norm)
    with open(path, 'w', encoding='utf-8') as f:
        f.write(text_norm)
    print("SUCCESS: Removed dark HUD card and overlay!")
else:
    print("ERROR: old_norm not found")
