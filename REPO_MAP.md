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
| **Active Theme** | `machinedesign-theme` | Located at `wp-content/themes/machinedesign-theme/`. **MachineDesign Precision v2.4**: Standalone decoupled update-proof theme with Swiss-German Precision design system, self-hosted Persian/Mono fonts (`Vazirmatn`, `JetBrains Mono`), Universal Animated 3D Delta Robot Hero (`includes/hero-media.php` + `delta-robot-3d.js`) default across all 12 Main Header routes (with 1-click WP-Admin Media Library Meta Box & Featured Image overrides + 8 built-in Swiss-German WebP 3D renders), 4 native Gutenberg Block Patterns in `patterns/`, opt-in `_md_enable_gutenberg_slot`, and native Rank Math SEO bridge (`includes/seo-schema-bridge.php`). (Legacy starter theme is preserved on local disk as a rollback safeguard). |
| **In-House Plugins** | `machinedesign-rfq-manager` | Custom engineering RFQ (Request for Quotation) and NDA inquiry handler with CSRF nonce check, honeypot anti-spam, per-IP rate limiting, and non-blocking Telegram Bot dispatch. Located at `wp-content/plugins/machinedesign-rfq-manager/`. |
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
│       ├── wp-brand-architect/             # Wheeler & Meyerson (6e) Brand Identity & Architecture Engine (12 modules)
│       └── wp-platform-architect/          # Full-stack WordPress architecture skill (v2.1.0, Module 08)
├── .specify/                               # Spec-Kit SDD engine & constitution
│   ├── memory/constitution.md              # Supreme system directive (Gate 0 anti-slop, token safety)
│   └── scripts/powershell/                 # Automation scripts (check-prerequisites, setup-plan, etc.)
├── design/                                 # UI mockups, visual guidelines & asset references
│   └── gallery.json                        # Design tokens & color system registry (v2.4)
├── scripts/                                # Verification and batch automation scripts
├── specs/                                  # Feature specifications, task breakdowns & plans
├── wp-content/
│   ├── mu-plugins/
│   │   └── design-gallery.php              # Must-use plugin for global styling & components
│   ├── plugins/
│   │   └── machinedesign-rfq-manager/      # Hardened engineering RFQ submission & telemetry engine
│   │       ├── machinedesign-rfq-manager.php
│   │       └── ...
│   └── themes/
│       └── machinedesign-theme/            # Active MachineDesign Precision v2.4 theme
│           ├── front-page.php              # Homepage template (Hero, 6 Pillars, Projects, Insights, RFQ)
│           ├── header.php                  # RTL semantic header with navigation & CTA
│           ├── footer.php                  # Industrial footer with channel synergy & legal links
│           ├── functions.php               # Theme bootstrapper, asset enqueuing & module loaders
│           ├── style.css                   # Master stylesheet (MachineDesign Precision v2.4)
│           ├── theme.json                  # Block editor styling & palette configuration (v3)
│           ├── patterns/                   # 4 Native Gutenberg Block Patterns
│           ├── single.php                  # Single blog post template (Engineered Platinum canvas)
│           ├── single-team_member.php      # Single team member profile template (Bento Grid)
│           ├── includes/
│           │   ├── hero-media.php          # 3D Hero Media Engine + WP-Admin Meta Box + 8 Renders
│           │   ├── cpt-project.php         # Custom Post Type: 'project' + taxonomy 'project_category'
│           │   ├── cpt-team.php            # Custom Post Type: 'team_member' + skills & projects meta
│           │   ├── theme-options.php       # Native WP Admin Theme Options panel (5 tabs)
│           │   ├── seo-schema-bridge.php   # Rank Math SEO & JSON-LD schema bridge
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
| **1. Workshop & Contact** | `workshop_city` | کارگاه / شهر مستقر (e.g., مشهد / برج سامان) | Text |
| | `workshop_address` | آدرس دقیق کارگاه و دفتر فنی | Text / Textarea |
| | `phone_primary` | شماره تلفن ثابت دفتر | Text |
| | `phone_mobile` | شماره همراه مستقیم کارشناس | Text |
| | `contact_email` | ایمیل رسمی ارتباطات | Email |
| | `working_hours` | ساعات کاری و پذیرش پروژه‌ها | Text |
| | `map_coordinates` | مختصات جغرافیایی نقشه | Text |
| **2. Key Metrics & Stats** | `stat_years_experience` | سابقه تخصصی مهندسی و ساخت (e.g. ۱۵+ سال) | Text |
| | `stat_engineers` | تعداد مهندسین و متخصصین ارشد | Number / Text |
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
- **Taxonomy:** `project_category` (دسته‌بندی پروژه‌ها منطبق بر ۶ ستون خدمات: ماشین‌آلات بسته‌بندی، خطوط صنایع غذایی، مکانیزم‌های خاص، مهندسی معکوس، اتوماسیون صنعتی، قطعه‌سازی دقیق)
- **Supported Fields:** `title`, `editor`, `thumbnail`, `excerpt`
- **Custom Meta Keys:**
  - `_md_project_kpi`: شاخص کلیدی عملکرد پروژه (e.g., "افزایش ۱۲۰٪ نرخ بسته‌بندی", "دقت ۵ میکرون")
  - `_md_project_spec`: خلاصه مشخصات فنی و متالورژی ساخت
  - `_md_project_client`: کارفرما یا صنعت هدف (اختیاری)

#### B. Custom Post Type: `team_member` (`includes/cpt-team.php`)
- **Post Type Slug:** `team_member`
- **Supported Fields:** `title`, `editor`, `thumbnail`, `excerpt`
- **Custom Meta Keys & Controls:**
  - `_md_member_role`: عنوان و نقش سازمانی مهندس
  - `_md_member_experience`: سال‌های سابقه تخصصی
  - `_md_team_metric_1` to `_md_team_metric_4`: ۴ متریک سفارشی عملکرد فنی
  - `_md_team_pillars_heading`: عنوان اختصاصی ستون‌های تحت مدیریت
  - `_md_skill1_name` to `_md_skill5_name`: نام مهارت‌های ۵ گانه مهندسی
  - `_md_skill1_pct` to `_md_skill5_pct`: درصد تسلط بر مهارت‌ها (۰ تا ۱۰۰)
  - `_md_p1_title` to `_md_p4_title`: نام پروژه‌های شاخص اجرا شده
  - `_md_p1_cat` to `_md_p4_cat`: دسته‌بندی پروژه‌های شاخص
  - `_md_p1_img` to `_md_p4_img`: شناسه رسانه / URL تصویر اسلاید پروژه‌ها (با مدیا آپلودر وردپرس)
  - **حفاظت از داده‌های موسس:** پروفایل‌های بنتو فاقد نشت داده‌های خام خصوصی هستند و داده‌ها منحصراً از فیلدهای متای اختصاصی لود می‌شوند.

---

### 3.3. Page Templates & Dynamic Editability State (v2.4 Reality)

Currently, the following 19 custom page templates in `wp-content/themes/machinedesign-theme/` output semantic PHP/HTML layouts and support optional Gutenberg content slots:

1. `front-page.php` — صفحه اصلی (Universal 3D Delta Robot Hero, 6 Service Pillars, Dynamic Projects WP_Query, Dynamic Articles WP_Query, RFQ Section)
2. `page-services.php` — صفحه اصلی معرفی خدمات ۶ گانه
3. `page-machine-design.php` — ستون ۱: طراحی ماشین‌آلات و خطوط تولید
4. `page-factory-troubleshooting.php` — ستون ۲: عیب‌یابی خطوط تولید، بالانس دینامیکی و آنالیز ارتعاشات
5. `page-rd-prototyping.php` — ستون ۳: تحقیق و توسعه صنعتی (R&D)، نمونه‌سازی و DFMEA
6. `page-engineering-mentorship.php` — ستون ۴: آموزش و منتورشیپ فردی مهندسی
7. `page-corporate-training.php` — ستون ۵: آموزش سازمانی و ارتقای کادر فنی کارخانجات
8. `page-machinery-inspection.php` — ستون ۶: کارشناسی خرید ماشین‌آلات داخلی و خارجی
9. `page-about.php` — درباره ماشین دیزاین و بیانیه ماموریت
10. `page-contact.php` — تماس با ما، موقعیت کارگاه و فرم RFQ
11. `page-projects.php` — آرشیو کامل پروژه‌ها با قابلیت فیلتر بر اساس ۶ ستون
12. `page-team.php` — معرفی اعضای تیم فنی و متخصصین (شبکه بنتو)
13. `page-profile-hossein.php` — پروفایل شخصی مهندس حسین وطن‌دوست
14. `page-cad-cam-modeling.php` — خدمات مدل‌سازی CAD و ماشین‌کاری CAM
15. `page-fea-analysis.php` — تحلیل اجزای محدود (FEA) و شبیه‌سازی مکانیکی
16. `page-mold-design.php` — طراحی قالب‌های صنعتی و سنبه‌ماتریس
17. `page-reverse-engineering.php` — خدمات اسکن سه‌بعدی و مهندسی معکوس
18. `page-insights.php` — مقالات تحلیلی، ترندهای صنعتی و پایگاه دانش
19. `page-nda-protocol.php` — پروتکل‌های تضمین محرمانگی و امنیت مالکیت فکری

#### Architectural Features of v2.4:
- **Theme Options Dynamic Binding:** تمام مقادیر تماس، آدرس کارگاه، آمارها و پیوندهای شبکه‌های اجتماعی از `machinedesign_theme_options` بارگذاری می‌شوند.
- **Universal Animated 3D Delta Robot Hero:** هیروی متحرک سه‌بعدی دلتا روبات با `delta-robot-3d.js` به صورت پیش‌فرض در تمام ۱۲ روت اصلی فعال است، با قابلیت جایگزینی تک‌کلیکی از متاباکس مدیریت وردپرس و تصویر شاخص + ۸ رندر وب‌پی داخلی صنعتی.
- **Gutenberg Slot Integration:** پشتیبانی از اسلات اختیاری گوتنبرگ (`md_render_optional_gutenberg_slot()`) و ۴ الگوی بلوک اختصاصی در `patterns/`.
- **Rank Math SEO Bridge:** پل ارتباطی هوشمند در `includes/seo-schema-bridge.php` جهت تولید خودکار اسکیماهای JSON-LD برای سازمان، خدمات ۶ گانه و برگه تماس.
- **Hardened RFQ Engine:** امنیت کامل با Nonce، فیلد Honeypot، محدودیت نرخ درخواست بر پایه IP و ارسال غیرمسدودکننده به ربات تلگرام.

---

## 4. Tooling & Development Guidelines

- **Taste & Visual Linting:**
  ```bash
  npm run taste:lint       # Validates zero AI-slop and CSS compliance against theme
  npm run taste:inspect    # Visual inspection and headless browser check
  ```
- **Design System Palette (Swiss-German Precision Industrial System v2.4):**
  - **Dark Architectural Surfaces:** `#0B0D11` (Anodized Carbon Matte), `#12161E` (Machined Slate), `#1A202B` (Brushed Titanium), `#262E3D` (`1px` Hairline Border).
  - **Engineered Light Editorial Surfaces:** `#F4F6F9` / `#F3F5F8` (Engineered Platinum canvas) + `#FFFFFF` crisp paper/Bento cards with `1px solid #DDE3EC` borders and `#0F172A` / `#1E293B` ink text.
  - **Primary Brand Accent:** `#D97706` (Signal Amber CTA, hover `#F59E0B`, paired with `#0B0D11` dark button text for WCAG AAA contrast) and `#B45309` / `#92400E` (Deep Copper text accent on light surfaces).
  - **Secondary Technical Accent:** `#38BDF8` (CAD Steel Blue on dark) and `#0369A1` (on light) for ISO/DIN tags, status badges, and telemetry.
  - **Typography:** Self-hosted `Vazirmatn` Variable WOFF2 (`assets/fonts/Vazirmatn-Variable.woff2`, `letter-spacing: 0`) for Persian UI/prose and self-hosted `JetBrains Mono` WOFF2 (`Regular` & `Bold`, `tabular-nums`) for technical specs, tolerances, and ISO/DIN codes.
- **Exclusions Policy:**
  - `wp-config.php`, `.env*`, and database dumps (`*.sql`) are strictly ignored.
  - `wp-content/uploads/` is excluded; media is managed via standard WordPress Media Library.
  - Third-party vendor folders (`node_modules/`, `vendor/`) are excluded to preserve repository cleanliness.
