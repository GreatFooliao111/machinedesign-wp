# MachineDesign.ir — Repository Map & Architecture Blueprint

> **Repository:** `GreatFooliao111/machinedesign-wp`  
> **Target Audience:** AI Architects, WordPress Core Developers, and Engineering Teams.  
> **Status:** Code-First Export of Theme, Custom Plugins, Spec-Kit Governance, and Frontend Tooling.

---

## 1. Environment & Runtime Summary

| Component | Version / Identifier | Notes |
| :--- | :--- | :--- |
| **WordPress Core** | `7.0.9` | Local runtime running on XAMPP. Core files are intentionally excluded from Git. |
| **PHP Runtime** | `8.2.12 (CLI / ZTS)` | Compatible with PHP 8.1+ modern typing and WordPress 6.x/7.x APIs. |
| **Active Theme** | `hello-elementor` | Located at `wp-content/themes/hello-elementor/`. **Heavily customized code-first theme** with 12,700+ lines of custom CSS (`style.css`), 16+ custom page templates, and native PHP modules. Does **not** require the proprietary Elementor builder to function. |
| **In-House Plugins** | `machinedesign-rfq-manager` | Custom engineering RFQ (Request for Quotation) and NDA inquiry handler. Located at `wp-content/plugins/machinedesign-rfq-manager/`. |
| **Must-Use Plugins** | `design-gallery.php` | Located at `wp-content/mu-plugins/design-gallery.php`. System-wide asset enqueuing and HUD component registration. |
| **Spec-Kit Governance** | Spec-Kit v1.2.3 / Constitution v2.1 | Located in `.specify/` and `specs/`. Enforces Gate 0 anti-slop rules and strict design specifications. |
| **Excluded Vendors** | `seo-by-rank-math`, `novamira` | Excluded via `.gitignore` to keep repository clean, lightweight, and focused purely on custom proprietary code. |

---

## 2. Tracked File Tree & Architecture

The repository tracks only proprietary, custom-built application code, configuration, governance, and styling:

```text
machinedesign/
├── .agents/                                # AI Agent skills, prompts & automation definitions
│   └── skills/
│       ├── design-taste-frontend/          # Visual design system & inspection rules
│       ├── machinedesign-project-manager/  # Project delivery orchestrator
│       ├── speckit-*/                      # Spec-Kit command skills (analyze, plan, tasks, implement, etc.)
│       └── wp-platform-architect/          # Full-stack WordPress architecture skill
├── .specify/                               # Spec-Kit SDD engine & constitution
│   ├── memory/constitution.md              # Supreme system directive (Gate 0 anti-slop, token safety)
│   └── scripts/powershell/                 # Automation scripts (check-prerequisites, setup-plan, etc.)
├── design/                                 # UI mockups, visual guidelines & asset references
├── scripts/                                # Verification and batch automation scripts
├── specs/                                  # Feature specifications, task breakdowns & plans
├── wp-content/
│   ├── mu-plugins/
│   │   └── design-gallery.php              # Must-use plugin for global styling & components
│   ├── plugins/
│   │   └── machinedesign-rfq-manager/      # Custom engineering RFQ submission & telemetry engine
│   │       ├── machinedesign-rfq-manager.php
│   │       └── ...
│   └── themes/
│       └── hello-elementor/                # Active customized code-first theme
│           ├── front-page.php              # Homepage template (Hero, 6 Pillars, Projects, Insights, RFQ)
│           ├── header.php                  # RTL semantic header with navigation & CTA
│           ├── footer.php                  # Industrial footer with channel synergy & legal links
│           ├── functions.php               # Theme bootstrapper, asset enqueuing & module loaders
│           ├── style.css                   # Master stylesheet (Cyber-Mechanical Dark theme, #8ce70c)
│           ├── theme.json                  # Block editor styling & palette configuration
│           ├── single.php                  # Single blog post template
│           ├── single-team_member.php      # Single team member profile template
│           ├── includes/
│           │   ├── cpt-project.php         # Custom Post Type: 'project' + taxonomy 'project_category'
│           │   ├── cpt-team.php            # Custom Post Type: 'team_member' + skills & projects meta
│           │   ├── theme-options.php       # Native WP Admin Theme Options panel (5 tabs)
│           │   ├── seo-schema-bridge.php   # JSON-LD structured data injector
│           │   └── ...
│           ├── template-parts/             # Reusable header, footer, and loop parts
│           └── page-*.php                  # Custom page templates for all engineering pillars
├── .gitignore                              # Comprehensive exclusion rules (WP core, secrets, uploads, caches)
├── .htaccess                               # Apache rewrite rules & security headers
├── package.json                            # Frontend linting & taste validation scripts
├── taste-lint.bat                          # Quick runner for taste:lint
├── taste-inspect.bat                       # Quick runner for taste:inspect
└── REPO_MAP.md                             # This architectural documentation
```

---

## 3. WP-Admin Editability & Architecture Map

For external AI architects refactoring the UI and wiring data into native WordPress Admin editable controls, this section details all existing data structures and the migration roadmap:

### 3.1. Theme Options Panel (`machinedesign_theme_options`)
Accessible in WP-Admin via **Settings → Theme Options** (or dedicated menu). All options are stored in the single serialized WordPress option array `machinedesign_theme_options`:

| Tab | Option Key | Field Label / Usage | Current Type |
| :--- | :--- | :--- | :--- |
| **1. Workshop & Contact** | `workshop_city` | کارگاه / شهر مستقر (e.g., مشهد / تهران) | Text |
| | `workshop_address` | آدرس دقیق کارگاه و دفتر فنی | Text / Textarea |
| | `phone_primary` | شماره تلفن ثابت دفتر | Text |
| | `phone_mobile` | شماره همراه مستقیم کارشناس | Text |
| | `contact_email` | ایمیل رسمی ارتباطات | Email |
| | `working_hours` | ساعات کاری و پذیرش پروژه‌ها | Text |
| | `map_coordinates` | مختصات جغرافیایی نقشه | Text |
| **2. Key Metrics & Stats** | `stat_engineers` | تعداد مهندسین و متخصصین ارشد | Number / Text |
| | `stat_projects` | پروژه‌های موفق اجرا شده | Number / Text |
| | `stat_production_lines` | خطوط تولید راه‌اندازی شده | Number / Text |
| | `stat_satisfaction` | درصد رضایت مشتریان صنعتی | Text (e.g. 98%) |
| | `stat_capacity_range` | بازه ظرفیت ساخت (تن/ماه) | Text |
| | `stat_response_time` | زمان میانگین پاسخگویی اولیه (ساعت) | Text |
| **3. Social & Channels** | `instagram_business` | اینستاگرام بیزینسی (`@machinedesign.ir`) | URL |
| | `instagram_personal` | اینستاگرام شخصی (`@h.vatan.doust`) | URL |
| | `telegram_channel` | کانال رسمی تلگرام (`@machinedesign_ir`) | URL |
| | `telegram_bot` | ربات تلگرام ارتباط مشتریان | Text |
| | `bale_channel` | کانال پیام‌رسان بله (`@machinedesign_ir`) | URL |
| | `bale_prompt2product` | کانال بله «از پرامپت تا محصول» | URL |
| | `youtube_channel` | کانال یوتیوب | URL |
| | `linkedin_url` | صفحه رسمی لینکدین | URL |
| **4. RFQ Telemetry** | `rfq_recipient_email` | ایمیل مقصد اعلان استعلام‌های فنی | Email |
| | `rfq_telegram_chat_id` | شناسه چت تلگرام دریافت آنی RFQ | Text |
| | `rfq_telegram_enabled` | فعال‌سازی اعلان تلگرامی | Checkbox (0/1) |
| | `rfq_hud_success_title` | تیتر پیام موفقیت HUD استعلام | Text |
| | `rfq_hud_success_desc` | متن توضیحی پیام موفقیت HUD | Textarea |
| **5. Webmaster & SEO** | `google_site_verify` | کد تایید سرچ کنسول گوگل | Text |
| | `bing_site_verify` | کد تایید موتور جستجوی بینگ | Text |
| | `default_og_image` | تصویر پیش‌فرض شبکه‌های اجتماعی (OG) | URL / Media ID |
| | `brand_claim` | بیانیه رسمی هویت برند | Text |

---

### 3.2. Custom Post Types & Meta Fields

#### A. Custom Post Type: `project` (`includes/cpt-project.php`)
- **Post Type Slug:** `project`
- **Taxonomy:** `project_category` (دسته بندی پروژه‌ها: ماشین‌آلات بسته‌بندی، خطوط صنایع غذایی، مکانیزم‌های خاص، مهندسی معکوس)
- **Supported Fields:** `title`, `editor`, `thumbnail`, `excerpt`
- **Custom Meta Keys:**
  - `_md_project_kpi`: شاخص کلیدی عملکرد پروژه (e.g., "افزایش ۱۲۰٪ نرخ بسته‌بندی", "دقت ۵ میکرون")
  - `_md_project_spec`: خلاصه مشخصات فنی و متالورژی ساخت

#### B. Custom Post Type: `team_member` (`includes/cpt-team.php`)
- **Post Type Slug:** `team_member`
- **Supported Fields:** `title`, `editor`, `thumbnail`, `excerpt`
- **Custom Meta Keys:**
  - `_md_member_role`: عنوان و نقش سازمانی
  - `_md_member_experience`: سال‌های سابقه تخصصی
  - `_md_skill1_name` to `_md_skill5_name`: نام مهارت‌های ۵ گانه مهندسی
  - `_md_skill1_pct` to `_md_skill5_pct`: درصد تسلط بر مهارت‌ها (۰ تا ۱۰۰)
  - `_md_p1_title` to `_md_p4_title`: نام پروژه‌های شاخص اجرا شده
  - `_md_p1_cat` to `_md_p4_cat`: دسته‌بندی پروژه‌های شاخص
  - `_md_p1_img` to `_md_p4_img`: URL تصویر پروژه شاخص

---

### 3.3. Page Templates & Hardcoded Copy Status (Refactoring Roadmap)

Currently, the following 19 custom page templates in `wp-content/themes/hello-elementor/` bypass `the_content()` and output PHP/HTML layouts directly:

1. `front-page.php` — صفحه اصلی (Hero, 6 Service Pillars, Dynamic Projects WP_Query, Dynamic Articles WP_Query, RFQ Section)
2. `page-services.php` — صفحه اصلی معرفی خدمات ۶ گانه
3. `page-machine-design.php` — ستون ۱: طراحی ماشین‌آلات و خطوط تولید
4. `page-factory-troubleshooting.php` — ستون ۲: عیب‌یابی خطوط تولید، بالانس دینامیکی و آنالیز ارتعاشات
5. `page-rd-prototyping.php` — ستون ۳: تحقیق و توسعه صنعتی (R&D)، نمونه‌سازی و DFMEA
6. `page-engineering-mentorship.php` — ستون ۴: آموزش و منتورشیپ فردی مهندسی
7. `page-corporate-training.php` — ستون ۵: آموزش سازمانی و ارتقای کادر فنی کارخانجات
8. `page-machinery-inspection.php` — ستون ۶: کارشناسی خرید ماشین‌آلات داخلی و خارجی
9. `page-about.php` — درباره ماشین دیزاین و بیانیه ماموریت
10. `page-contact.php` — تماس با ما، موقعیت کارگاه و فرم RFQ
11. `page-projects.php` — آرشیو کامل پروژه‌ها با قابلیت فیلتر
12. `page-team.php` — معرفی اعضای تیم فنی و متخصصین
13. `page-profile-hossein.php` — پروفایل شخصی مهندس حسین وطن‌دوست
14. `page-cad-cam-modeling.php` — خدمات مدل‌سازی CAD و ماشین‌کاری CAM
15. `page-fea-analysis.php` — تحلیل اجزای محدود (FEA) و شبیه‌سازی مکانیکی
16. `page-mold-design.php` — طراحی قالب‌های صنعتی و سنبه‌ماتریس
17. `page-reverse-engineering.php` — خدمات اسکن سه‌بعدی و مهندسی معکوس
18. `page-insights.php` — مقالات تحلیلی، ترندهای صنعتی و پایگاه دانش
19. `page-nda-protocol.php` — پروتکل‌های تضمین محرمانگی و امنیت مالکیت فکری

#### Architectural Recommendation for AI Architect:
- **Phase 1 (Theme Options Binding):** Bind hardcoded phone numbers, emails, addresses, stats, and social channel URLs across all `page-*.php` templates to `machinedesign_theme_options` using helper functions (`get_option('machinedesign_theme_options')`).
- **Phase 2 (Gutenberg Block Patterns):** Deconstruct hardcoded page sections into modular Gutenberg Block Patterns (located in `patterns/`), allowing clients and editors to customize copy and layout directly in the native block editor while preserving the Cyber-Mechanical Dark design system.
- **Phase 3 (Full Dynamic CPT Loop):** Expand the `project` and `insights` dynamic loops implemented in `front-page.php` across category archives and single templates.

---

## 4. Tooling & Development Guidelines

- **Taste & Visual Linting:**
  ```bash
  npm run taste:lint       # Validates zero AI-slop and CSS compliance
  npm run taste:inspect    # Visual inspection and headless browser check
  ```
- **Design System Palette:**
  - Background Base: `#0F172A` / `#0A0F1D` (Deep Navy / Industrial Dark)
  - Card & Container Surface: `#131C31` with `rgba(140, 231, 12, 0.22)` neon border
  - Primary Accent: `#8CE70C` (Cyber Neon Lime / High Contrast)
  - Primary Text: `#FFFFFF` / High-Contrast Headings
  - Muted Text: `#94A3B8` / `#CBD5E1`
  - Typography: Vazirmatn (Farsi RTL) & Orbitron / JetBrains Mono (Technical LTR numbers & codes)
- **Exclusions Policy:**
  - `wp-config.php`, `.env*`, and database dumps (`*.sql`) are strictly ignored.
  - `wp-content/uploads/` is excluded; media should be managed via standard WordPress Media Library or S3/CDN in production.
  - Third-party vendor folders (`node_modules/`, `vendor/`) are excluded to preserve repository cleanliness.
