# MachineDesign.ir — Brownfield Redesign Project Brief (wp-blueprint-studio)

## 1. Executive Summary & Benchmark
- **Project:** Complete Zero-Static WordPress Architecture, Flat Taxonomy & TRUMPF-Inspired UX Redesign for **MachineDesign.ir** (`fa_IR`, RTL).
- **Mode:** **Brownfield Redesign** (Preserves 100% of existing 20 published pages, 5 technical posts, 8 projects, 16 team members, 12 RFQ leads, 58 media files, `machinedesign-rfq-manager`, `seo-by-rank-math`, `novamira`, and integrates `motion-catalogs` v1.1.0).
- **Visual & UX Benchmark:** **TRUMPF (`trumpf.com`)** — German precision industrial authority: crisp architectural light-first surfaces (`#FFFFFF` / `#F3F5F8`), deep obsidian hardware hero stages (`#0B0D11`), razor-sharp `1px` hairlines (`#DDE3EC`), Signal Amber (`#D97706`) conversion CTAs, CAD Steel Blue (`#0284C7` / `#0033A0`) technical links/tabs, zero bloat, and zero AI-slop gradients.
- **Scope:** Full-featured unified rollout (all modules active in a single release — no Phase 1/Phase 2 split).

## 2. Active Modules & Plugin Ecosystem
1. **`machinedesign-core` (New Zero-Static Core Plugin):** Houses all CPTs (`project`, `team_member`), new flat taxonomies (`industry`, `engineering_standard`, cleaned `project_category`), `machinedesign_theme_options`, Dynamic 3D Hero Media Engine (`delta_robot_final_opt.webm` + Media Library override), 3-Layer SEO & Rank Math Schema Bridge, and **Dynamic Server-Side Gutenberg Blocks + Elementor-Compatible Shortcodes** for every section.
2. **`machinedesign-rfq-manager` (Preserved Untouched):** Existing hardened AJAX RFQ & NDA lead capture system (`rfq_lead` CPT, Nonce, Honeypot, IP Rate Limit, Telegram alerts).
3. **`motion-catalogs` v1.1.0 (Integrated):** Interactive digital motion catalogs embedded via `[motion_catalog id="..."]` shortcode and native Gutenberg block on Home, Services, and Catalogs Hub.
4. **`seo-by-rank-math` & `novamira` (Preserved Untouched):** Full filter coexistence (`wp_robots`, `rank_math/frontend/robots`, `rank_math/json_ld`).
5. **`machinedesign-theme` (Lightweight Zero-Static Theme):** `theme.json` v3, pure scoped CSS (`assets/css/trumpf-precision.css`, zero Tailwind CDN), `front-page.php` rendering `the_content()`, dynamic `wp_nav_menu()`, and `elementor_theme_do_location()` hooks.

## 3. UI Upgrade Workflow (Google Stitch Gate)
1. Upload the 5 canonical HTML wireframes in `screens/` + `STITCH_MASTER_PROMPT.md` to **Google Stitch**.
2. Export the polished Stitch ZIP and return it to Claude/Gemini for **Stage 4 (Zero-Tailwind-CDN Scoped CSS Integration)** and **Stage 5 (Full `machinedesign-starter-kit.zip` Build + Static PHP Audit + XAMPP NTFS Junction Setup + Smoke Tests)**.
