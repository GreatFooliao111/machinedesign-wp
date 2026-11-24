# MachineDesign Precision v2.4 — Upgrade & Deployment Guide

## What Was Upgraded
1. **Standalone Update-Proof Theme (`wp-content/themes/machinedesign-theme/`)**:
   - Decoupled from legacy starter theme so WordPress theme updates never overwrite your site.
   - Stripped Elementor admin-home upsell banners and unnecessary scripts.
2. **Swiss-German Precision Design System (`assets/css/swiss-precision.css` + `theme.json`)**:
   - Replaced legacy neon-lime/cyber palette with matte Anodized Carbon (`#0B0D11`), Machined Slate (`#12161E`), Signal Amber (`#D97706`), and CAD Steel Blue (`#38BDF8`).
   - Added self-hosted font architecture (`assets/css/fonts-local.css` + `scripts/fetch-fonts.ps1`) for `Vazirmatn` & `JetBrains Mono`.
3. **Dynamic 3D Hero Media Engine (`includes/hero-media.php`) + 8 Industrial WebP Renders**:
   - Added a native WP-Admin Meta Box on every Page ("تصویر سه‌بعدی هیرو صفحه") + Featured Image fallback.
   - Replaced external Unsplash Hero in `front-page.php` and added 3D Hero visuals across all service pillars & sub-services.
4. **Native Gutenberg Editability & 6-Pillar Taxonomy**:
   - Registered 4 Gutenberg Block Patterns (`patterns/`) + optional Gutenberg content slot (`md_render_optional_gutenberg_slot()`) on all page templates.
   - Added `stat_years_experience` (`۱۵+ سال`) & `md_get_contact` alias fixes in `includes/theme-options.php`, and 6-pillar auto-seeding in `includes/cpt-project.php`.
5. **Unified Rank Math SEO & Schema Bridge (`includes/seo-schema-bridge.php`)**:
   - Removed duplicate `<meta name="description">`, hardcoded title overrides, and 4 inline JSON-LD template blocks.
   - Automatically feeds `Organization`, `Service` (all 6 pillars + 4 technical sub-services), and `ContactPage` into `rank_math/json_ld`.
6. **Hardened RFQ Plugin (`wp-content/plugins/machinedesign-rfq-manager/`)**:
   - Added CSRF nonce check, honeypot anti-spam, per-IP rate limiting (6/10min), and non-blocking Telegram Bot alerts (using `MD_TELEGRAM_BOT_TOKEN` in `wp-config.php`).

## Quick Install on XAMPP
1. Extract this ZIP into `C:\xampp\htdocs\machinedesign\` (merges cleanly into `wp-content/` and `scripts/`).
2. Run `powershell -ExecutionPolicy Bypass -File scripts\fetch-fonts.ps1` to download self-hosted WOFF2 fonts locally.
3. In WordPress Admin → **Appearance → Themes**, activate **MachineDesign Precision (v2.4.0)**.
4. Go to **Settings → Permalinks** and click **Save Changes** (flushes rewrite rules).
5. Verify PHP syntax with `C:\xampp\php\php.exe -l` and push `main` to GitHub.
