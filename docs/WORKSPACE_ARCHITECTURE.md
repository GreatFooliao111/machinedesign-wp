# MachineDesign.ir — Workspace Architecture, Flat Taxonomy & Brownfield 301 Preservation Matrix

## 1. Flat 3-Axis Taxonomy Architecture (Derived from 133 SEO Keywords)
Grounded in `Final_SEO_Strategy_Report_Local (2).csv` (100 High-Priority, 30 Medium, 3 Low keywords):

| Taxonomy Slug | Persian Label | Attached Post Types | Canonical Terms (Flat Slugs) |
| :--- | :--- | :--- | :--- |
| `project_category` (Cleaned) | ستون خدمات / نوع پروژه | `project` | `machine-design`, `factory-troubleshooting`, `rd-prototyping`, `engineering-mentorship`, `corporate-training`, `machinery-inspection` (plus existing active terms mapped cleanly) |
| `industry` (NEW) | صنایع هدف | `project`, `post` | `food-beverage` (صنایع غذایی), `packaging` (بسته‌بندی و پیلوپک), `pharma-hygienic` (دارویی و کلین‌روم), `polymer-plastics` (پلیمر و قالب‌سازی), `solar-automotive-heavy` (پنل خورشیدی و خطوط مونتاژ) |
| `engineering_standard` (NEW) | استانداردها و فناوری‌ها | `project`, `post` | `solidworks-cad`, `ansys-fea`, `gdt-asme-y145`, `iso-20816-vibration`, `iso-12100-safety`, `dfma-dfmea`, `reverse-engineering-3d`, `pneumatics-automation` |

## 2. Three-Layer SEO Index Control (`wp_robots` + Rank Math Coexistence)
- **Layer 1 (Index + Canonical + Unified JSON-LD via `rank_math/json_ld`):**
  - All 20 preserved pages (`/`, `/services/*`, `/projects/`, `/insights/`, `/about/*`, `/contact/`, `/nda-protocol/`, `/privacy-policy/`).
  - All published `post` articles (5+), `project` case studies (8+), `team_member` profiles (16), and populated `/industry/<slug>/` + `/project-category/<slug>/` hubs (`count >= 2`).
- **Layer 2 (Brownfield Cleanup & 301 Redirects for Empty/Duplicate Terms):**
  - `/category/طراحی-ماشین‌آلات/` (`count=0`) -> `301` to `/services/machine-design/`
  - `/category/عیب‌یابی-و-ارتعاشات/` (`count=0`) -> `301` to `/services/factory-troubleshooting/`
  - `/category/uncategorized/` (`count=0`) -> `noindex, follow`
- **Layer 3 (`noindex, follow` via `wp_robots` & `rank_math/frontend/robots`):**
  - Search results (`?s=`), multi-parameter filtered URLs (`?industry=...&pillar=...`), empty taxonomy archives (`count == 0`), and private `rfq_lead` CPT.

## 3. Brownfield Preservation Matrix (ZERO Lost Work / ZERO Broken URLs)
| Existing Asset (`SITE_SNAPSHOT.md`) | Status | Handling Strategy |
| :--- | :--- | :--- |
| All 20 published Pages (`IDs 2–196`) | **KEEP URL 100%** | Exact slugs preserved; page content migrated to dynamic Zero-Static Gutenberg blocks + shortcodes. |
| All 5 published Blog Posts & 8 Projects | **KEEP 100%** | Zero DB deletion; enriched with `industry` & `engineering_standard` taxonomy terms. |
| All 16 `team_member` CPT posts + meta | **KEEP 100%** | All `_md_member_*`, `_md_metric*`, `_md_pillar*`, `_md_skill*`, `_md_p1..4_*` meta keys preserved verbatim. |
| `machinedesign-rfq-manager` (12 leads) | **KEEP UNTOUCHED** | Preserved as-is; AJAX hooks `machinedesign_rfq_submit` & `machinedesign_rfq` bound to new Stitch RFQ UI. |
| `motion-catalogs` v1.1.0 | **INTEGRATE** | Activated alongside core; rendered via `[motion_catalog]` block/shortcode in TRUMPF showcase band. |
| `machinedesign_theme_options` | **KEEP 100%** | Migrated cleanly into `machinedesign-core` with identical option key so zero settings are lost. |
| 58 Media Library files + 8 WebP Heroes + `delta_robot_final_opt.webm` | **KEEP 100%** | Reused directly via `includes/hero-media.php` override & Delta Robot stage engine. |

## 4. Zero-Static Dynamic Block & Shortcode Contract (`machinedesign-core`)
Every canonical section in the Stitch UI kit maps 1-to-1 to a dynamic Gutenberg Block (`machinedesign/<block>`) AND an Elementor-compatible Shortcode (`[md_<block>]`):
1. `machinedesign/trumpf-hero` / `[md_trumpf_hero]` — 2-column hardware/3D Delta Robot hero + quick-jump bar
2. `machinedesign/pillars-grid` / `[md_pillars_grid]` — 6 Engineering Pillars architectural matrix
3. `machinedesign/industry-switcher` / `[md_industry_switcher]` — TRUMPF-style Industry Applications switcher
4. `machinedesign/projects-hub` / `[md_projects_hub]` — Filterable `project` CPT showcase (Pillar × Industry)
5. `machinedesign/motion-catalog-showcase` / `[md_motion_catalog_showcase]` — Interactive wrapper for `[motion_catalog]`
6. `machinedesign/team-bento` / `[md_team_bento]` — Dynamic `team_member` archive & single Bento portfolio
7. `machinedesign/rfq-desk` / `[md_rfq_desk]` — NDA-protected RFQ form bound to `machinedesign-rfq-manager` AJAX
