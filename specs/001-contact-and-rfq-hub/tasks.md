# Tasks: Contact & RFQ Hub (`page-contact.php`)

**Input**: Design documents from `specs/001-contact-and-rfq-hub/`  
**Prerequisites**: [plan.md](plan.md) (approved Option 1: Preline Split Layout), [spec.md](spec.md) (User Stories P1, P2, P3)  
**Target File**: `C:\xampp\htdocs\machinedesign\wp-content\themes\hello-elementor\page-contact.php`

---

## Standard MachineDesign Workflow Phases
- **Phase 1: Setup & SEO Context** (Verify Autoclaw keywords, H1/H2s, and target URL slug)
- **Phase 2: UI Section Scout (if UI)** (Option 1 Selected: Preline UI Split Cards & Form)
- **Phase 3: Implementation & Transpilation** (Semantic PHP/CSS, #8ce70c neon accent, Vazirmatn typography, Schema.org injection)
- **Phase 4: Localhost Verification & QA** (`php -l` syntax check, XAMPP test, zero horizontal scroll overflow)

## Format: `[ID] [P?] [Story] Description`
- **[P]**: Can run in parallel (different files, no dependencies)
- **[Story]**: Which user story this task belongs to (US1, US2, US3, Foundation)

---

## Phase 1: Setup & SEO Context (Shared Infrastructure)

**Purpose**: Establish metadata, JSON-LD schema, and page container foundation.

- [x] T001 [Foundation] Verify target SEO keywords (`مشاوره فنی صنعتی`, `استعلام طراحی ماشین‌آلات`) and H1/H2 hierarchy from `D:\Machinedesign.ir\Autoclaw\`.
- [x] T002 [Foundation] Create initial `page-contact.php` with WordPress template header (`Template Name: Contact & RFQ Hub`) and enqueue Google Fonts / theme styles.
- [x] T003 [P] [Foundation] Embed Schema.org JSON-LD structured data (`ContactPage`, `Organization`, `LocalBusiness`) in `page-contact.php` header.

---

## Phase 2: Foundational Architecture & Styles (Blocking Prerequisites)

**Purpose**: Core grid, CSS root variables, and baseline symmetry containers in `style.css`.

- [x] T004 [Foundation] Implement `.contact-hero-banner` styling with Vazirmatn headline, industrial badge, and breadcrumb navigation.
- [x] T005 [P] [Foundation] Define dual-column CSS grid (`.contact-split-grid`) with `align-items: stretch` and matching border-radius (`20px`) for both columns.
- [x] T006 [Foundation] Define baseline symmetry chip styles (`.contact-footer-chip`) with neon dashed border (`rgba(140, 231, 12, 0.35)`) and 0.00px vertical deviation.

---

## Phase 3: User Story 1 - فرم هوشمند استعلام و دریافت کد رهگیری (Priority: P1) ★ MVP

**Goal**: پیاده‌سازی فرم استعلام فنی در ستون چپ با ارسال ایجکس و تولید کد یکتای `MD-RFQ-xxxx`.

- [x] T007 [US1] Build HTML markup for the RFQ form in `page-contact.php` (Name, Phone, Service Pillar dropdown with 6 pillars, Project Details textarea, Submit button).
- [x] T008 [US1] Add HUD telemetry badge and success alert box (`#contact-rfq-notice`) for displaying the tracking code and 24h SLA.
- [x] T009 [US1] Ensure JavaScript AJAX handler in `assets/js/main.js` or inline controller connects form submission to `admin-ajax.php` (`machinedesign_rfq_submit`).
- [x] T010 [US1] Style input fields with dark surface `#121824`, subtle border, focus ring `#8ce70c`, and `.btn-accent` action button.

**Checkpoint**: User Story 1 is functional: users can fill the form, submit via AJAX, and see the tracking code without page reload.

---

## Phase 4: User Story 2 - کارت‌های اطلاعات تماس مستقیم و کانال‌های دیجیتال (Priority: P2)

**Goal**: پیاده‌سازی ۳ کارت مستقل اطلاعات تماس، کارگاه و کانال‌های پیام‌رسان در ستون راست.

- [x] T011 [P] [US2] Build Card 1: Direct phone numbers (تلفن ثابت دفتر و همراه مهندسی) with `tel:` links and working hours badge.
- [x] T012 [P] [US2] Build Card 2: Workshop & Engineering Office address with CAD crosshair badges and location vector icon.
- [x] T013 [P] [US2] Build Card 3: Digital channels card with official links and icons for Telegram (`@machinedesign_ir`) and Bale Messenger.

**Checkpoint**: Direct communication channels and workshop details are fully accessible and interactive.

---

## Phase 5: User Story 3 - پروتکل محرمانگی صنعتی و تقارن خط مبنا (Priority: P3)

**Goal**: پیاده‌سازی چیپ و کارت تعهدنامه رازداری (NDA) در کف ستون راست جهت تضمین تقارن ۰.۰۰ پیکسل با فرم.

- [x] T014 [US3] Build NDA Assurance Chip with lock icon, confidentiality protocol summary, and bilateral contract guarantee.
- [x] T015 [US3] Verify vertical baseline symmetry: ensure bottom edge of NDA chip aligns with bottom edge of RFQ form on a shared 0.00px horizontal line.
- [x] T016 [US3] Add 3-step NDA workflow modal or collapsible drawer (دریافت اطلاعات اولیه -> پیش‌نویس قرارداد -> جلسه حضوری).

---

## Phase 6: Polish, XAMPP Verification & Quality Assurance

**Purpose**: اعتبارسنجی سینتکس، تست محلی و بررسی عملکرد ریسپانسیو.

- [x] T017 Execute PHP syntax check with `C:\xampp\php\php.exe -l page-contact.php`.
- [x] T018 Verify local server response at `http://localhost/machinedesign/contact/` (HTTP 200 OK).
- [x] T019 Conduct automated check for horizontal scroll overflow (`hasHorizontalOverflow = False`) on desktop (1440px), tablet (768px), and mobile (375px).
- [x] T020 Verify WCAG 2.1 AA contrast math: confirm all text on dark surfaces exceeds 4.5:1 ratio.
- [x] T021 Sync completed files with `D:\Machinedesign.ir\cpanel-deploy\` and update documentation.

---

## Verification Summary
- **PHP Syntax**: Validated with `C:\xampp\php\php.exe -l` (0 errors).
- **HTTP Response**: 200 OK at `http://localhost/machinedesign/contact/`.
- **Horizontal Overflow**: `scrollWidth <= clientWidth` across 1440px, 768px, and mobile viewports (`hasHorizontalOverflow = false`).
- **Baseline Symmetry**: 0.00px deviation between `.nda-chip` and `.tracking-chip` (`chipBottomDiff = 0px`, `containerBottomDiff = 0px`, `ndaHeight = 102px`, `trackingHeight = 102px`).
- **Design System Compliance**: 100% compliant with Cyber-Mechanical Dark tokens, `--color-accent: #8ce70c;`, Vazirmatn typography, and JetBrains Mono technical specifications.
