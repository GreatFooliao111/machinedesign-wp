<?php
/**
 * Template Name: Contact & RFQ Hub (مرکز جامع تماس و استعلام صنعتی)
 * Template Post Type: page
 *
 * Description: Dedicated Contact, Workshop Coordinates & RFQ Lead Hub for MachineDesign.ir
 * Follows Cyber-Mechanical Dark Design System + Autonomous Spec Kit Protocol + Preline Split Layout
 *
 * @package HelloElementor
 */

defined( 'ABSPATH' ) || exit;

get_header();
?>

<!-- Structured Schema.org JSON-LD injected centrally via includes/seo-schema-bridge.php (Rank Math compatible) -->

<!-- ========================================================================
     1. CONTACT & RFQ HUB HERO BANNER
     ======================================================================== -->
<section class="page-hero-banner contact-hero-wrap" aria-label="هیدر مرکز تماس و استعلام">
  <div class="container">
    <div class="page-hero-grid">

      <!-- Right Column: Text & Breadcrumb -->
      <div class="page-hero-content">
        <!-- Breadcrumb Navigation -->
        <nav class="page-hero-breadcrumb" aria-label="مسیر راهنما">
          <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="breadcrumb-item">صفحه اصلی</a>
          <span class="breadcrumb-separator" aria-hidden="true">/</span>
          <span class="breadcrumb-current" aria-current="page">تماس و استعلام پروژه</span>
        </nav>

        <!-- Corporate Sub-badge -->
        <div class="page-hero-badge">
          <span class="pulse-indicator" aria-hidden="true"></span>
          <span class="mono">MACHINEDESIGN.IR // INDUSTRIAL INQUIRY & CONTACT HUB</span>
        </div>

        <!-- Main Page Title (Split in 2 Lines for Compact Width) -->
        <h1 class="page-hero-title page-hero-title-split">
          <span class="title-line-1">تماس با ماشین دیزاین،</span>
          <span class="title-line-2 text-accent">مشاوره فنی صنعتی و استعلام پروژه</span>
        </h1>

        <!-- Summary Lead Text -->
        <div class="page-hero-excerpt">
          جهت ثبت استعلام ساخت ماشین‌آلات، مهندسی معکوس خطوط تولید، رفع توقف اضطراری کارخانه یا هماهنگی جلسه حضوری در دفتر مهندسی و کارگاه ساخت، اطلاعات پروژه خود را ثبت فرمایید یا مستقیماً با کارشناسان ارشد تماس بگیرید.
        </div>

        <!-- Metric Badges Strip -->
        <div class="contact-hero-stats">
          <div class="contact-stat-item">
            <span class="contact-stat-num mono">&lt; 24h</span>
            <span class="contact-stat-lbl">زمان بررسی و تماس مهندسی</span>
          </div>
          <div class="contact-stat-sep" aria-hidden="true"></div>
          <div class="contact-stat-item">
            <span class="contact-stat-num mono">100% NDA</span>
            <span class="contact-stat-lbl">تضمین محرمانگی اسرار تجاری</span>
          </div>
          <div class="contact-stat-sep" aria-hidden="true"></div>
          <div class="contact-stat-item">
            <span class="contact-stat-num mono">ISO 12100</span>
            <span class="contact-stat-lbl">انطباق استانداردهای بین‌المللی</span>
          </div>
        </div>
      </div>

      <!-- Left Column: Delta Robot 3D Interactive Stage -->
      <div class="page-hero-visual-col">
        <div
          class="delta-robot-stage"
          data-delta-stage
          tabindex="0"
          role="img"
          aria-label="مکانیزم سه‌بعدی تعاملی استعلام و ارتباطات فنی ماشین دیزاین"
        >
          <!-- Ambient Volumetric Backlight -->
          <div class="delta-robot-glow" aria-hidden="true"></div>

          <!-- Physics-Driven Cast Shadow -->
          <div class="delta-robot-shadow" data-delta-shadow aria-hidden="true"></div>

          <!-- 3D Animated Transparent WebM Mechanism -->
          <div class="delta-robot-anim-wrap" data-delta-robot>
            <video
              class="delta-robot-img delta-robot-video"
              autoplay
              loop
              muted
              playsinline
              aria-label="مکانیزم متحرک ربات دلتا صنعتی با تلرانس میکرونی و خدمات جامع مهندسی"
            >
              <source src="<?php echo esc_url( home_url( '/wp-content/uploads/2026/07/delta_robot_final_opt.webm' ) ); ?>" type="video/webm">
            </video>
          </div>

          <!-- Detached Floating HUD Glass Badge -->
          <div class="delta-robot-hud" data-delta-hud dir="ltr">
            <div class="delta-robot-hud-col">
              <span class="delta-robot-hud-label">RESPONSE SLA</span>
              <span class="delta-robot-hud-value">WITHIN 24 HOURS</span>
            </div>
            <div class="delta-robot-hud-sep" aria-hidden="true"></div>
            <div class="delta-robot-hud-col">
              <span class="delta-robot-hud-label">TELEMETRY</span>
              <span class="delta-robot-hud-value">DIRECT RFQ ENGINE</span>
            </div>
            <div class="delta-robot-hud-tag">
              <span class="delta-robot-hud-led" aria-hidden="true"></span>
              <span>VERIFIED DESK</span>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>

    <div class="container md-hero-standalone-visual">
      <?php if ( function_exists( 'md_render_hero_3d_stage' ) ) { md_render_hero_3d_stage( 'contact' ); } ?>
    </div>
  </section>

<!-- ========================================================================
     2. MAIN DUAL-COLUMN SPLIT: CARDS (RIGHT) & RFQ FORM (LEFT) - LIGHT THEME
     ======================================================================== -->
<section class="contact-main-section contact-main-light" aria-label="بخش استعلام و ارتباط مستقیم">
  <div class="container">
    <div class="contact-split-grid">

      <!-- RIGHT COLUMN: Direct Technical Cards + NDA Protocol -->
      <div class="contact-info-col">
        <div class="contact-info-container">
        
          <!-- Column Header -->
          <div class="contact-col-heading">
            <span class="section-subtitle contact-subtitle-badge">ارتباط بدون واسطه</span>
            <h2 class="contact-col-title">پل‌های ارتباطی دفتر فنی و کارگاه ساخت</h2>
            <p class="contact-col-desc">
              پروژه‌های مهندسی مستلزم دقت و شفافیت کامل هستند. کارشناسان ما آماده پاسخ‌گویی به استعلامات فنی و بررسی نقشه‌ها می‌باشند.
            </p>
          </div>

          <!-- 3 Technical Cards Stack -->
          <div class="contact-cards-stack">

            <!-- Card 1: Direct Calling & Working Hours -->
            <div class="contact-feature-card">
              <div class="contact-card-icon-wrap" aria-hidden="true">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                  <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path>
                </svg>
              </div>
              <div class="contact-card-body">
                <div class="contact-card-badge-row">
                  <span class="contact-card-tag">مشاوره مستقیم تلفنی</span>
                  <span class="contact-card-status-pill mono">۸:۰۰ الی ۱۸:۰۰</span>
                </div>
                <h3 class="contact-card-title">تماس با سرپرست دفتر طراحی</h3>
                <p class="contact-card-text">جهت مشاوره فوری، ارزیابی توقف خط یا راهنمایی پیش از خرید ماشین‌آلات:</p>
                <div class="contact-info-list">
                  <div class="contact-info-row">
                    <span class="contact-row-label">موبایل مهندسی:</span>
                    <span class="contact-row-val mono contact-copyable" data-copy="<?php echo esc_attr( md_get_contact( 'phone_mobile', '۰۹۱۵۰۰۰۰۰۰۰' ) ); ?>" data-tooltip="کلیک جهت کپی" dir="ltr" tabindex="0" role="button" aria-label="کپی شماره موبایل مهندسی"><?php echo esc_html( md_get_contact( 'phone_mobile', '۰۹۱۵۰۰۰۰۰۰۰' ) ); ?></span>
                  </div>
                  <div class="contact-info-row">
                    <span class="contact-row-label">دفتر کارگاهی و هماهنگی:</span>
                    <span class="contact-row-val mono contact-copyable" data-copy="<?php echo esc_attr( md_get_contact( 'phone_primary', '۰۵۱-۳۷۶۰۰۰۰۰' ) ); ?>" data-tooltip="کلیک جهت کپی" dir="ltr" tabindex="0" role="button" aria-label="کپی شماره تلفن دفتر"><?php echo esc_html( md_get_contact( 'phone_primary', '۰۵۱-۳۷۶۰۰۰۰۰' ) ); ?></span>
                  </div>
                </div>
              </div>
            </div>

            <!-- Card 2: Workshop Coordinates & Factory Visits -->
            <div class="contact-feature-card">
              <div class="contact-card-icon-wrap" aria-hidden="true">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                  <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path>
                  <circle cx="12" cy="10" r="3"></circle>
                </svg>
              </div>
              <div class="contact-card-body">
                <div class="contact-card-badge-row">
                  <span class="contact-card-tag">موقعیت دفتر و کارگاه</span>
                  <span class="contact-card-status-pill mono">هماهنگی قبلی</span>
                </div>
                <h3 class="contact-card-title">دفتر مهندسی و کارگاه ساخت</h3>
                <p class="contact-card-text">
                  <?php echo esc_html( md_get_option( 'workshop_address' ) ); ?>
                </p>
                <div class="contact-info-list">
                  <div class="contact-info-row">
                    <span class="contact-row-label">پست الکترونیک رسمی:</span>
                    <span class="contact-row-val mono contact-copyable" data-copy="<?php echo esc_attr( md_get_contact( 'contact_email', 'info@machinedesign.ir' ) ); ?>" data-tooltip="کلیک جهت کپی" dir="ltr" tabindex="0" role="button" aria-label="کپی ایمیل رسمی"><?php echo esc_html( md_get_contact( 'contact_email', 'info@machinedesign.ir' ) ); ?></span>
                  </div>
                </div>
              </div>
            </div>

            <!-- Card 3: Digital Channels (Telegram & Bale) -->
            <div class="contact-feature-card">
              <div class="contact-card-icon-wrap" aria-hidden="true">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                  <line x1="22" y1="2" x2="11" y2="13"></line>
                  <polygon points="22 2 15 22 11 13 2 9 22 2"></polygon>
                </svg>
              </div>
              <div class="contact-card-body">
                <div class="contact-card-badge-row">
                  <span class="contact-card-tag">شبکه‌های مهندسی و ارسال نقشه</span>
                  <span class="contact-card-status-pill mono">پاسخگویی سریع</span>
                </div>
                <h3 class="contact-card-title">کانال‌های پیام‌رسان تخصصی</h3>
                <p class="contact-card-text">جهت ارسال فایل‌های سنگین CAD، مدل‌های 3D و ویدیوهای ارتعاشات دستگاه:</p>
                <div class="contact-info-list">
                  <div class="contact-info-row">
                    <span class="contact-row-label">کانال رسمی تلگرام:</span>
                    <span class="contact-row-val mono contact-copyable" data-copy="@machinedesign_ir" data-tooltip="کلیک جهت کپی" dir="ltr" tabindex="0" role="button" aria-label="کپی شناسه کانال تلگرام">@machinedesign_ir</span>
                  </div>
                  <div class="contact-info-row">
                    <span class="contact-row-label">کانال در پیام‌رسان بله:</span>
                    <span class="contact-row-val mono contact-copyable" data-copy="@machinedesign_ir" data-tooltip="کلیک جهت کپی" dir="ltr" tabindex="0" role="button" aria-label="کپی شناسه کانال بله">@machinedesign_ir</span>
                  </div>
                </div>
              </div>
            </div>

          </div>

          <!-- Symmetrical Footer Chip: NDA Assurance Protocol -->
          <div class="contact-footer-chip nda-chip" title="پروتکل رسمی تضمین ۱۰۰٪ محرمانگی صنعتی">
            <div class="nda-chip-icon" aria-hidden="true">
              <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <rect x="3" y="11" width="18" height="11" rx="2" ry="2"></rect>
                <path d="M7 11V7a5 5 0 0 1 10 0v4"></path>
              </svg>
            </div>
            <div class="nda-chip-content">
              <div class="nda-chip-header-line">
                <span class="nda-chip-title">تضمین ۱۰۰٪ محرمانگی صنعتی (NDA Protocol)</span>
                <span class="nda-chip-action-pill mono">پروتکل دوجانبه ممهور</span>
              </div>
              <span class="nda-chip-desc">تمامی اطلاعات فنی، نقشه‌ها و داده‌های خط تولید پیش از شروع پروژه تحت قرارداد محرمانگی رسمی قرار می‌گیرند.</span>
            </div>
          </div>

        </div>
      </div>

      <!-- LEFT COLUMN: RFQ Submission Form Container + OpenStreetMap -->
      <div class="contact-form-col">
        <div class="contact-form-container">
          
          <!-- Industrial Drawing Title Block HUD (The One Live Thing) -->
          <div class="drawing-title-block" id="dwg-title-block" dir="ltr" aria-label="شناسنامه فنی و تله‌متری نقشه استعلام">
            <div class="dtb-row dtb-header">
              <span class="dtb-cell dtb-brand">MACHINEDESIGN.IR</span>
              <span class="dtb-cell dtb-doc">ENG-REQ-SPEC // REV.01</span>
              <span class="dtb-cell dtb-dwg-no" id="dtb-dwg-val">DWG: RFQ-2026-INIT</span>
            </div>
            <div class="dtb-row dtb-sub">
              <span class="dtb-cell">TOL: ISO 2768-mK</span>
              <span class="dtb-cell">SLA: &lt;24H</span>
              <span class="dtb-cell">CONFIDENTIALITY: 100% NDA</span>
              <span class="dtb-cell dtb-status" id="dtb-status-val">● READY</span>
            </div>
          </div>

          <!-- Form Header -->
          <div class="contact-form-header">
            <div class="contact-form-badge">
              <span class="pulse-indicator" aria-hidden="true"></span>
              <span class="mono">ONLINE RFQ & PROJECT INTAKE DOSSIER</span>
            </div>
            <h2 class="contact-form-title">فرم ثبت استعلام و درخواست مشاوره فنی</h2>
            <p class="contact-form-subtitle">
              مشخصات پروژه یا چالش خط تولید را در فرم زیر وارد نمایید تا کارشناس ارشد دفتر فنی ظرف ۲۴ ساعت جهت هماهنگی جلسه و بررسی اولیه تماس بگیرد.
            </p>
          </div>

          <!-- Alert Notice Box (Hidden by default, shown on AJAX success/error) -->
          <div id="contact-rfq-notice" class="contact-alert-box" style="display: none;" role="alert"></div>

          <!-- The RFQ Form -->
          <form id="contact-rfq-form" class="contact-rfq-form-body" novalidate>
            
            <!-- Row 1: Name & Phone -->
            <div class="contact-form-row">
              <div class="contact-form-field">
                <label for="contact-name" class="contact-field-label">نام و نام خانوادگی / شرکت</label>
                <div class="contact-input-wrap">
                  <input
                    type="text"
                    id="contact-name"
                    name="rfq_name"
                    class="contact-input"
                    placeholder="مثال: مهندس رضوانی - صنایع غذایی آریا"
                    required
                  >
                </div>
              </div>

              <div class="contact-form-field">
                <label for="contact-phone" class="contact-field-label">
                  <span>شماره تماس مستقیم</span>
                  <span class="contact-required-mark" aria-hidden="true">*</span>
                </label>
                <div class="contact-input-wrap">
                  <input
                    type="tel"
                    id="contact-phone"
                    name="rfq_phone"
                    class="contact-input mono"
                    dir="ltr"
                    placeholder="0912XXXXXXX"
                    required
                  >
                </div>
              </div>
            </div>

            <!-- Row 2: Service Pillar Selection (6 Core Pillars) -->
            <div class="contact-form-field">
              <label for="contact-service" class="contact-field-label">
                <span>حوزه تخصصی مورد استعلام</span>
                <span class="contact-required-mark" aria-hidden="true">*</span>
              </label>
              <div class="contact-select-wrap">
                <select id="contact-service" name="rfq_service_type" class="contact-select" required>
                  <option value="" disabled selected>لطفاً ستون خدمت مورد نظر را انتخاب نمایید...</option>
                  <option value="pillar1-machine-design">۱. طراحی ماشین‌آلات و خطوط تولید صنعتی (مکانیزم‌ها، کانوایر، DFMA)</option>
                  <option value="pillar2-troubleshooting">۲. مشاوره فنی و حل مسئله کارخانه‌ها (رفع توقف خط و ارتعاشات)</option>
                  <option value="pillar3-rd-prototyping">۳. مشاوره سازمانی و تحقیق و توسعه (R&D و نمونه‌سازی سریع)</option>
                  <option value="pillar4-engineering-mentorship">۴. آموزش و منتورشیپ فردی مهندسی (سالیدورکس و تحلیل FEA)</option>
                  <option value="pillar5-corporate-training">۵. آموزش سازمانی کادر فنی کارخانه‌ها (نقشه‌خوانی و تلرانس)</option>
                  <option value="pillar6-machinery-inspection">۶. مشاوره و کارشناسی خرید و بازرسی ماشین‌آلات</option>
                  <option value="other-inquiry">سایر نیازمندی‌های مهندسی مکانیک</option>
                </select>
              </div>
            </div>

            <!-- Contextual Technical Scope Chips -->
            <div class="contact-scope-field" id="contact-scope-field">
              <label class="contact-field-label">
                <span>دسته‌بندی و دامنه فنی پروژه</span>
                <span class="contact-optional-tag">انتخاب سریع نیازمندی</span>
              </label>
              <div class="contact-scope-chips" id="contact-scope-chips">
                <button type="button" class="contact-scope-chip" data-scope="صنایع غذایی و بسته‌بندی">صنایع غذایی و بسته‌بندی</button>
                <button type="button" class="contact-scope-chip" data-scope="سیستم‌های کانوایر و انتقال مواد">سیستم‌های کانوایر و انتقال</button>
                <button type="button" class="contact-scope-chip" data-scope="رفع توقف خط و عیب‌یابی ارتعاشات">رفع توقف و ارتعاشات خط</button>
                <button type="button" class="contact-scope-chip" data-scope="مهندسی معکوس و ساخت قطعات">مهندسی معکوس و DFMA</button>
                <button type="button" class="contact-scope-chip" data-scope="نمونه‌سازی سریع R&D">نمونه‌سازی سریع (R&D)</button>
                <button type="button" class="contact-scope-chip" data-scope="کارشناسی خرید و بازرسی ماشین‌آلات">کارشناسی خرید ماشین‌آلات</button>
              </div>
            </div>

            <!-- Row 3: Project Details / Description -->
            <div class="contact-form-field">
              <label for="contact-details" class="contact-field-label">خلاصه نیازمندی، ابعاد یا چالش خط تولید</label>
              <div class="contact-input-wrap">
                <textarea
                  id="contact-details"
                  name="rfq_desc"
                  class="contact-textarea"
                  rows="4"
                  placeholder="توضیحاتی مانند نوع محصول، ظرفیت تولید در ساعت، نوع مکانیزم یا مشکل فعلی دستگاه را مرقوم فرمایید..."
                ></textarea>
              </div>
            </div>

            <!-- Row 4: Submit Button -->
            <div class="contact-form-action-row">
              <button type="submit" id="contact-rfq-submit" class="btn btn-accent contact-submit-btn">
                <span>ثبت رسمی استعلام و صدور پرونده فنی</span>
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                  <line x1="5" y1="12" x2="19" y2="12"></line>
                  <polyline points="12 5 19 12 12 19"></polyline>
                </svg>
              </button>
            </div>

          </form>

          <!-- OpenStreetMap Container (fills remaining vertical space) -->
          <div class="contact-map-card">
            <div class="contact-map-header">
              <div class="contact-map-title">
                <span class="pulse-indicator" aria-hidden="true"></span>
                <span>موقعیت مکانی برج سامان (دفتر مهندسی ماشین دیزاین)</span>
              </div>
              <a
                href="https://www.openstreetmap.org/?mlat=36.36645&amp;mlon=59.53751#map=17/36.36645/59.53751"
                target="_blank"
                rel="noopener noreferrer"
                class="contact-map-link mono"
                title="مشاهده در نقشه جهانی OpenStreetMap"
              >
                OSM 36.3664, 59.5375 &nearr;
              </a>
            </div>
            <div class="contact-map-frame-wrap">
              <iframe
                class="contact-osm-iframe"
                title="نقشه موقعیت دفتر مهندسی ماشین دیزاین در برج سامان مشهد"
                src="https://www.openstreetmap.org/export/embed.html?bbox=59.5320%2C36.3620%2C59.5430%2C36.3710&amp;layer=mapnik&amp;marker=36.36645%2C59.53751"
                loading="lazy"
              ></iframe>
            </div>
          </div>

        </div>
      </div>

    </div>
  </div>
</section>

<!-- ========================================================================
     3. THE 4-STEP INDUSTRIAL MILESTONES PROCESS (GANTT & ROADMAP)
     ======================================================================== -->
<section class="contact-process-section" aria-label="فرآیند همکاری و تحقق پروژه‌های مهندسی">
  <div class="container">
    
    <!-- Split Header: Right-Aligned Text & Left-Aligned Looped Animation Stage -->
    <div class="contact-process-header-grid">
      
      <!-- Right: Subtitle, Title & Description (Strict Right-Alignment & High Contrast) -->
      <div class="contact-process-header-text">
        <div class="process-header-badge">
          <span class="pulse-indicator" aria-hidden="true"></span>
          <span class="mono">WORKFLOW TELEMETRY // مسیر تعامل مهندسی</span>
        </div>
        <h2 class="section-title process-section-title">
          <span class="title-line-1 text-white">۴ گام شفاف تعامل،</span><br>
          <span class="title-line-2 text-accent">از ثبت استعلام تا تحویل ماشین‌آلات</span>
        </h2>
        <p class="section-desc process-section-desc">
          فرآیند همکاری در ماشین دیزاین بر اساس استانداردهای مهندسی سیستماتیک، شفافیت مالی و محرمانگی مطلق طراحی شده است.
        </p>
      </div>

      <!-- Left: Borderless Transparent Looped WhatsApp Chat Motion Stage -->
      <div class="contact-process-anim-col">
        <div class="process-anim-stage" id="process-anim-stage" aria-label="استیج انیمیشن شبیه‌ساز گفتگوی مهندسی واتساپ">
          <!-- WhatsApp Floating Chat Widget (Borderless, Lighter Background, Top Fade Mask) -->
          <div class="wa-chat-widget" id="wa-chat-widget">
            <div class="wa-chat-stream-wrap">
              <div class="wa-chat-stream" id="wa-chat-stream"></div>
            </div>
          </div>
        </div>
      </div>

    </div>

    <!-- 4 Industrial Process Cards Stack -->
    <div class="contact-process-grid">
      
      <!-- Step 1 -->
      <div class="contact-process-card" data-step="1">
        <div class="process-card-header">
          <div class="process-card-step-badge mono">
            <span class="step-badge-prefix">PHASE</span>
          </div>
          <span class="process-card-duration mono">روز ۱</span>
        </div>
        <div class="process-card-content">
          <h3 class="process-card-title">ثبت استعلام و تریاژ فنی</h3>
          <p class="process-card-text">
            اطلاعات ورودی توسط مهندس ارشد طراح بازبینی شده و قابلیت‌سنجی اولیه و الزامات استاندارد خط بررسی می‌گردد.
          </p>
          <div class="process-card-deliverable">
            <span class="deliverable-label">خروجی این گام:</span>
            <span class="deliverable-val mono">گزارش تریاژ فاز صفر</span>
          </div>
        </div>
      </div>

      <!-- Step 2 -->
      <div class="contact-process-card" data-step="2">
        <div class="process-card-header">
          <div class="process-card-step-badge mono">
            <span class="step-badge-prefix">PHASE</span>
          </div>
          <span class="process-card-duration mono">روز ۲</span>
        </div>
        <div class="process-card-content">
          <h3 class="process-card-title">تفاهم‌نامه NDA و جلسه فنی</h3>
          <p class="process-card-text">
            پیش از بررسی نقشه‌ها و اسرار فرآیند، قرارداد محرمانگی ممهور امضا شده و جلسه حضوری یا آنلاین کارگاهی برگزار می‌شود.
          </p>
          <div class="process-card-deliverable">
            <span class="deliverable-label">خروجی این گام:</span>
            <span class="deliverable-val mono">تفاهم‌نامه محرمانگی رسمی</span>
          </div>
        </div>
      </div>

      <!-- Step 3 -->
      <div class="contact-process-card" data-step="3">
        <div class="process-card-header">
          <div class="process-card-step-badge mono">
            <span class="step-badge-prefix">PHASE</span>
          </div>
          <span class="process-card-duration mono">روز ۴</span>
        </div>
        <div class="process-card-content">
          <h3 class="process-card-title">پروپوزال DFMA و برآورد هزینه</h3>
          <p class="process-card-text">
            برنامه زمان‌بندی فازبندی‌شده، شرح تعهدات مهندسی، آنالیز DFMA ساخت، و مدل مالی شفاف تحویل کارفرما می‌گردد.
          </p>
          <div class="process-card-deliverable">
            <span class="deliverable-label">خروجی این گام:</span>
            <span class="deliverable-val mono">پروپوزال فنی و مالی مصوب</span>
          </div>
        </div>
      </div>

      <!-- Step 4 -->
      <div class="contact-process-card" data-step="4">
        <div class="process-card-header">
          <div class="process-card-step-badge mono">
            <span class="step-badge-prefix">PHASE</span>
          </div>
          <span class="process-card-duration mono">روز ۷</span>
        </div>
        <div class="process-card-content">
          <h3 class="process-card-title">عقد قرارداد و آغاز ساخت/طراحی</h3>
          <p class="process-card-text">
            مدل‌سازی سه‌بعدی CAD، نقشه‌کشی کارگاهی، ماشین‌کاری قطعات و کنترل کیفیت در سالن مونتاژ آغاز می‌شود.
          </p>
          <div class="process-card-deliverable">
            <span class="deliverable-label">خروجی این گام:</span>
            <span class="deliverable-val mono">آغاز تولید و پکیج CAD</span>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>

<!-- ========================================================================
     4. FREQUENTLY ASKED QUESTIONS (FAQ ACCORDION)
     ======================================================================== -->
<section class="contact-faq-section" id="faq" aria-label="پرسش‌های متداول استعلام مهندسی">
  <div class="container">
    <div class="contact-faq-header text-center">
      <div class="faq-header-badge">
        <span class="pulse-indicator" aria-hidden="true"></span>
        <span class="mono">KNOWLEDGE BASE // پاسخ‌های شفاف و رسمی</span>
      </div>
      <h2 class="section-title faq-section-title">
        <span class="title-line-1">پرسش‌های متداول</span>
        <span class="title-line-2 text-accent-dark">کارفرمایان و مدیران کارخانجات</span>
      </h2>
      <p class="section-desc faq-section-desc">
        پاسخ مستند به سوالات کلیدی در خصوص قراردادهای رسمی محرمانگی (NDA)، ارزیابی حضوری، بسته تحویل‌شدنی‌های CAD و پشتیبانی اضطراری خط تولید.
      </p>
    </div>

    <!-- 2-Column Responsive Industrial Grid for 6 Questions without Increasing Vertical Height -->
    <div class="contact-faq-grid">
      
      <!-- FAQ 1 -->
      <div class="contact-faq-item" data-faq>
        <button type="button" class="contact-faq-question" aria-expanded="false">
          <div class="contact-faq-question-inner">
            <span class="faq-index-badge mono">Q.01</span>
            <span class="faq-question-text">آیا پیش از ارسال نقشه‌ها، قرارداد محرمانگی (NDA) منعقد می‌شود؟</span>
          </div>
          <div class="faq-icon-wrapper">
            <svg class="contact-faq-icon" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
              <polyline points="6 9 12 15 18 9"></polyline>
            </svg>
          </div>
        </button>
        <div class="contact-faq-answer">
          <div class="faq-answer-inner">
            <p>
              بله، بدون استثنا. پیش از دریافت هرگونه فایل فنی یا نقشه ساخت، قرارداد رسمی محرمانگی دوجانبه (Bilateral NDA) با مهر شرکتی منعقد می‌گردد. تمامی حقوق مادی و معنوی خروجی‌ها ۱۰۰٪ متعلق به کارفرماست.
            </p>
            <div class="faq-answer-meta">
              <span class="faq-meta-chip accent mono">BILATERAL NDA // ماده ۴۸</span>
              <span class="faq-meta-chip">مالکیت فکری ۱۰۰٪ کارفرما</span>
            </div>
          </div>
        </div>
      </div>

      <!-- FAQ 2 -->
      <div class="contact-faq-item" data-faq>
        <button type="button" class="contact-faq-question" aria-expanded="false">
          <div class="contact-faq-question-inner">
            <span class="faq-index-badge mono">Q.02</span>
            <span class="faq-question-text">آیا امکان بازدید حضوری از دفتر طراحی فراهم است؟</span>
          </div>
          <div class="faq-icon-wrapper">
            <svg class="contact-faq-icon" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
              <polyline points="6 9 12 15 18 9"></polyline>
            </svg>
          </div>
        </button>
        <div class="contact-faq-answer">
          <div class="faq-answer-inner">
            <p>
              بله. پس از ثبت استعلام اولیه و تریاژ فنی، هماهنگی‌های لازم جهت بازدید حضوری از دفتر مرکزی طراحی مهندسی (واقع در برج سامان مشهد) و سالن‌های مونتاژ و ساخت انجام می‌پذیرد تا توان فنی مجموعه را از نزدیک ارزیابی فرمایید.
            </p>
            <div class="faq-answer-meta">
              <span class="faq-meta-chip accent mono">ON-SITE AUDIT // برج سامان</span>
              <span class="faq-meta-chip">بازدید از سالن‌های مونتاژ</span>
            </div>
          </div>
        </div>
      </div>

      <!-- FAQ 3 -->
      <div class="contact-faq-item" data-faq>
        <button type="button" class="contact-faq-question" aria-expanded="false">
          <div class="contact-faq-question-inner">
            <span class="faq-index-badge mono">Q.03</span>
            <span class="faq-question-text">اسناد تحویل‌شدنی نهایی در پروژه‌های طراحی ماشین‌آلات چیست؟</span>
          </div>
          <div class="faq-icon-wrapper">
            <svg class="contact-faq-icon" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
              <polyline points="6 9 12 15 18 9"></polyline>
            </svg>
          </div>
        </button>
        <div class="contact-faq-answer">
          <div class="faq-answer-inner">
            <p>
              مدل سه‌بعدی بومی SolidWorks و STEP، نقشه‌های ساخت دوبعدی با تلرانس‌گذاری کامل GD&T طبق DIN/ISO، لیست خرید قطعات استاندارد (BOM)، گزارش تحلیل تنش FEA و دفترچه راهنمای نگهداری (O&M).
            </p>
            <div class="faq-answer-meta">
              <span class="faq-meta-chip accent mono">CAD // SolidWorks + STEP</span>
              <span class="faq-meta-chip">GD&T استاندارد DIN/ISO</span>
            </div>
          </div>
        </div>
      </div>

      <!-- FAQ 4 -->
      <div class="contact-faq-item" data-faq>
        <button type="button" class="contact-faq-question" aria-expanded="false">
          <div class="contact-faq-question-inner">
            <span class="faq-index-badge mono">Q.04</span>
            <span class="faq-question-text">در صورت توقف ناگهانی خط تولید کارخانه، سرعت رسیدگی چقدر است؟</span>
          </div>
          <div class="faq-icon-wrapper">
            <svg class="contact-faq-icon" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
              <polyline points="6 9 12 15 18 9"></polyline>
            </svg>
          </div>
        </button>
        <div class="contact-faq-answer">
          <div class="faq-answer-inner">
            <p>
              درخواست‌های توقف خط در اولویت اضطراری قرار می‌گیرند و ظرف کمتر از ۲۴ ساعت کاری بررسی می‌شوند. هماهنگی جلسه آنلاین یا اعزام فوری کارشناس ارشد به محل واحد صنعتی بدون معطلی انجام می‌پذیرد.
            </p>
            <div class="faq-answer-meta">
              <span class="faq-meta-chip accent mono">SLA &lt; 24H // تریاژ فوری</span>
              <span class="faq-meta-chip">اعزام کارشناس به شهرک‌های صنعتی</span>
            </div>
          </div>
        </div>
      </div>

      <!-- FAQ 5 -->
      <div class="contact-faq-item" data-faq>
        <button type="button" class="contact-faq-question" aria-expanded="false">
          <div class="contact-faq-question-inner">
            <span class="faq-index-badge mono">Q.05</span>
            <span class="faq-question-text">فرآیند مهندسی معکوس قطعات و ماشین‌آلات وارداتی چگونه است؟</span>
          </div>
          <div class="faq-icon-wrapper">
            <svg class="contact-faq-icon" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
              <polyline points="6 9 12 15 18 9"></polyline>
            </svg>
          </div>
        </button>
        <div class="contact-faq-answer">
          <div class="faq-answer-inner">
            <p>
              اسکن سه‌بعدی اپتیکال میکرونی، آنالیز کوانتومتری متالورژی مواد، بهینه‌سازی نقاط شکست و خستگی فلز و صدور پکیج ساخت داخلی با تضمین کارکرد پیوسته و پایدار در خط تولید.
            </p>
            <div class="faq-answer-meta">
              <span class="faq-meta-chip accent mono">REVERSE ENG // اپتیک + متالورژی</span>
              <span class="faq-meta-chip">رفع نقاط ضعف و شکست قطعه</span>
            </div>
          </div>
        </div>
      </div>

      <!-- FAQ 6 -->
      <div class="contact-faq-item" data-faq>
        <button type="button" class="contact-faq-question" aria-expanded="false">
          <div class="contact-faq-question-inner">
            <span class="faq-index-badge mono">Q.06</span>
            <span class="faq-question-text">نحوه فازبندی پرداخت و تسویه‌حساب در قراردادهای طراحی چیست؟</span>
          </div>
          <div class="faq-icon-wrapper">
            <svg class="contact-faq-icon" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
              <polyline points="6 9 12 15 18 9"></polyline>
            </svg>
          </div>
        </button>
        <div class="contact-faq-answer">
          <div class="faq-answer-inner">
            <p>
              پرداخت‌ها کاملاً فازبندی‌شده بر اساس پیشرفت واقعی پروژه و تایید فنی تحویل‌شدنی‌های هر مرحله (تریاژ، مدل سه‌بعدی، نقشه‌های ساخت و تایید نهایی پس از تست سرد/گرم) انجام می‌شود.
            </p>
            <div class="faq-answer-meta">
              <span class="faq-meta-chip accent mono">MILESTONE PAYMENTS // فازبندی شده</span>
              <span class="faq-meta-chip">تسویه منوط به تایید خروجی فنی</span>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>



<!-- ========================================================================
     INLINE COMPACT SCRIPT: CONTACT RFQ, TITLE BLOCK HUD & FAQ HANDLER
     ======================================================================== -->
<script>
document.addEventListener('DOMContentLoaded', function() {
  const contactForm = document.getElementById('contact-rfq-form');
  const submitBtn = document.getElementById('contact-rfq-submit');
  const noticeBox = document.getElementById('contact-rfq-notice');
  const dwgVal = document.getElementById('dtb-dwg-val');
  const statusVal = document.getElementById('dtb-status-val');
  const nameInput = document.getElementById('contact-name');
  const serviceSelect = document.getElementById('contact-service');
  const detailsTextarea = document.getElementById('contact-details');
  const scopeChips = document.querySelectorAll('.contact-scope-chip');

  // Interactive Title Block HUD live updater
  function updateTitleBlock() {
    if (!dwgVal) return;
    const sVal = serviceSelect?.value || 'INIT';
    let code = 'INIT';
    if (sVal.indexOf('pillar1') !== -1) code = 'P1-MCH';
    else if (sVal.indexOf('pillar2') !== -1) code = 'P2-TRB';
    else if (sVal.indexOf('pillar3') !== -1) code = 'P3-RND';
    else if (sVal.indexOf('pillar4') !== -1) code = 'P4-MNT';
    else if (sVal.indexOf('pillar5') !== -1) code = 'P5-TRN';
    else if (sVal.indexOf('pillar6') !== -1) code = 'P6-INS';
    else if (sVal) code = 'GEN';

    const randNum = Math.floor(1000 + Math.random() * 9000);
    dwgVal.textContent = 'DWG: RFQ-2026-' + code;
    if (statusVal) {
      statusVal.textContent = '● CONFIGURING';
      statusVal.style.color = '#D97706';
    }
  }

  if (serviceSelect) {
    serviceSelect.addEventListener('change', updateTitleBlock);

    // URL Query Parameter Routing (?service=SRV-01 to SRV-06 or pillar key)
    const urlParams = new URLSearchParams(window.location.search);
    const srvParam = urlParams.get('service');
    if (srvParam) {
      const srvMap = {
        'SRV-01': 'pillar1-machine-design',
        'SRV-02': 'pillar2-troubleshooting',
        'SRV-03': 'pillar3-rd-prototyping',
        'SRV-04': 'pillar4-engineering-mentorship',
        'SRV-05': 'pillar5-corporate-training',
        'SRV-06': 'pillar6-machinery-inspection'
      };
      const targetVal = srvMap[srvParam.toUpperCase()] || srvParam;
      const matchedOption = serviceSelect.querySelector('option[value="' + targetVal + '"]');
      if (matchedOption) {
        serviceSelect.value = targetVal;
        updateTitleBlock();
      }
    }
  }

  // Interactive Scope Chips: toggle & append into textarea
  scopeChips.forEach(function(chip) {
    chip.addEventListener('click', function() {
      chip.classList.toggle('active');
      const activeScopes = Array.from(document.querySelectorAll('.contact-scope-chip.active'))
        .map(function(el) { return el.getAttribute('data-scope'); });
      
      if (detailsTextarea) {
        let currentText = detailsTextarea.value;
        const prefix = 'دامنه انتخابی پروژه: ';
        const splitIdx = currentText.indexOf('\n---\n');
        let userNotes = splitIdx !== -1 ? currentText.substring(splitIdx + 5) : currentText;
        
        if (activeScopes.length > 0) {
          detailsTextarea.value = prefix + activeScopes.join(' | ') + '\n---\n' + userNotes.trim();
        }
      }
      updateTitleBlock();
    });
  });



  // Click-to-Copy with Interactive Tooltip for Contact Rows
  const copyElements = document.querySelectorAll('.contact-copyable');
  copyElements.forEach(function(el) {
    el.addEventListener('click', function() {
      const textToCopy = el.getAttribute('data-copy') || el.textContent.trim();
      if (!textToCopy) return;

      function onCopySuccess() {
        const originalTooltip = el.getAttribute('data-tooltip') || 'کلیک جهت کپی';
        el.setAttribute('data-tooltip', 'کپی شد');
        el.classList.add('copied');

        setTimeout(function() {
          el.setAttribute('data-tooltip', originalTooltip);
          el.classList.remove('copied');
        }, 2200);
      }

      if (navigator.clipboard && navigator.clipboard.writeText) {
        navigator.clipboard.writeText(textToCopy).then(onCopySuccess).catch(function() {
          fallbackCopyText(textToCopy, onCopySuccess);
        });
      } else {
        fallbackCopyText(textToCopy, onCopySuccess);
      }
    });

    el.addEventListener('keydown', function(e) {
      if (e.key === 'Enter' || e.key === ' ') {
        e.preventDefault();
        el.click();
      }
    });
  });

  function fallbackCopyText(text, callback) {
    const textArea = document.createElement('textarea');
    textArea.value = text;
    textArea.style.position = 'fixed';
    textArea.style.top = '0';
    textArea.style.left = '0';
    textArea.style.opacity = '0';
    document.body.appendChild(textArea);
    textArea.focus();
    textArea.select();
    try {
      document.execCommand('copy');
      if (callback) callback();
    } catch (err) {
      console.error('Fallback copy failed', err);
    }
    document.body.removeChild(textArea);
  }

  // FAQ Accordion Handlers with 3D Elevated Popover & Background Blur
  const faqGrid = document.querySelector('.contact-faq-grid');
  const faqItems = document.querySelectorAll('[data-faq]');

  faqItems.forEach(function(item) {
    const questionBtn = item.querySelector('.contact-faq-question');
    if (questionBtn) {
      questionBtn.addEventListener('click', function(e) {
        e.stopPropagation();
        const isExpanded = item.classList.contains('active');
        
        // close others
        faqItems.forEach(function(other) {
          other.classList.remove('active');
          const otherBtn = other.querySelector('.contact-faq-question');
          if (otherBtn) otherBtn.setAttribute('aria-expanded', 'false');
        });

        if (!isExpanded) {
          item.classList.add('active');
          questionBtn.setAttribute('aria-expanded', 'true');
          if (faqGrid) faqGrid.classList.add('has-active');
        } else {
          if (faqGrid) faqGrid.classList.remove('has-active');
        }
      });
    }

    // Keep active when clicking inside the answer
    item.addEventListener('click', function(e) {
      e.stopPropagation();
    });
  });

  // Click outside closes the active FAQ card and clears blur
  document.addEventListener('click', function() {
    faqItems.forEach(function(item) {
      item.classList.remove('active');
      const btn = item.querySelector('.contact-faq-question');
      if (btn) btn.setAttribute('aria-expanded', 'false');
    });
    if (faqGrid) faqGrid.classList.remove('has-active');
  });

  // Form AJAX submission
  if (!contactForm) return;

  contactForm.addEventListener('submit', function(e) {
    e.preventDefault();

    const name = nameInput?.value.trim() || '';
    const phone = document.getElementById('contact-phone')?.value.trim() || '';
    const service = serviceSelect?.value || '';
    const details = detailsTextarea?.value.trim() || '';

    if (!phone) {
      if (noticeBox) {
        noticeBox.style.display = 'block';
        noticeBox.className = 'contact-alert-box alert-error';
        noticeBox.innerHTML = 'لطفاً شماره تماس مستقیم خود را جهت هماهنگی جلسه وارد فرمایید.';
      }
      return;
    }

    if (!service) {
      if (noticeBox) {
        noticeBox.style.display = 'block';
        noticeBox.className = 'contact-alert-box alert-error';
        noticeBox.innerHTML = 'لطفاً حوزه تخصصی مورد استعلام را از لیست انتخاب فرمایید.';
      }
      return;
    }

    if (submitBtn) {
      submitBtn.disabled = true;
      submitBtn.style.opacity = '0.75';
      submitBtn.innerHTML = '<span>در حال ثبت امن و ایجاد پرونده فنی...</span>';
    }

    const formData = new FormData();
    formData.append('action', 'machinedesign_rfq_submit');
    formData.append('rfq_name', name);
    formData.append('rfq_phone', phone);
    formData.append('rfq_service_type', service);
    formData.append('rfq_desc', details);
    formData.append('source_pillar', 'contact-page');
    formData.append('source_url', window.location.href);
    formData.append('service', service);
    formData.append('phone', phone + (name ? ' | نام: ' + name : '') + (details ? ' | شرح: ' + details : ''));

    const ajaxUrl = (typeof md_vars !== 'undefined' && md_vars.ajax_url) ? md_vars.ajax_url : '<?php echo esc_url( admin_url( 'admin-ajax.php' ) ); ?>';

    fetch(ajaxUrl, {
      method: 'POST',
      body: formData
    })
    .then(function(res) { return res.json(); })
    .then(function(data) {
      if (submitBtn) {
        submitBtn.disabled = false;
        submitBtn.style.opacity = '1';
        submitBtn.innerHTML = '<span>استعلام ثبت شد</span>';
      }

      const trackingCode = (data && data.data && data.data.tracking) ? data.data.tracking : 'MD-RFQ-<?php echo esc_attr( wp_rand( 1000, 9999 ) ); ?>';

      if (dwgVal) dwgVal.textContent = 'DWG: ' + trackingCode;
      if (statusVal) {
        statusVal.textContent = '● SUBMITTED';
        statusVal.style.color = '#D97706';
      }

      if (noticeBox) {
        noticeBox.style.display = 'block';
        noticeBox.className = 'contact-alert-box alert-success';
        noticeBox.innerHTML = 'استعلام شما با موفقیت ثبت شد و پرونده فنی در سامانه ایجاد گردید.<br>' +
          'کد پیگیری رسمی: <strong class="mono" style="color: #D97706; font-size: 1.15rem; letter-spacing: 0.05em;">' + trackingCode + '</strong><br>' +
          'سرپرست دفتر طراحی مهندسی ظرف حداکثر ۲۴ ساعت کاری جهت بررسی ابعاد پروژه و هماهنگی جلسه با شما تماس خواهد گرفت.';
      }

      contactForm.reset();
      scopeChips.forEach(function(c) { c.classList.remove('active'); });
    })
    .catch(function() {
      if (submitBtn) {
        submitBtn.disabled = false;
        submitBtn.style.opacity = '1';
        submitBtn.innerHTML = '<span>تلاش مجدد برای ثبت استعلام</span>';
      }
      if (noticeBox) {
        noticeBox.style.display = 'block';
        noticeBox.className = 'contact-alert-box alert-error';
        noticeBox.innerHTML = 'در برقراری ارتباط با سرور خطایی رخ داد. لطفاً مستقیماً با شماره تلفن دفتر تماس حاصل فرمایید.';
      }
    });
  });
  // ========================================================================
  // WhatsApp Looped Motion Simulator (Section 3) - Lightweight & Vanilla
  // ========================================================================
  const waStream = document.getElementById('wa-chat-stream');

  if (waStream) {
    const dialogScript = [
      { sender: 'user', text: 'سلام وقت بخیر' },
      { sender: 'expert', text: 'سلام و درود مهندس عزیز، خداقوت. در خدمتتون هستیم' },
      { sender: 'user', text: 'شما در زمینه رفع توقف و مهندسی خطوط تولید هم کار می‌کنید؟' },
      { sender: 'expert', text: 'بله دقیقاً، تخصص اصلی ما طراحی، تحلیل ارتعاشات و بومی‌سازی مکانیزم‌های صنعتیه.' },
      { sender: 'user', text: 'راستش از طریق سایت با مجموعه‌تون آشنا شدم' },
      { sender: 'expert', text: 'بسیار خوشحالیم و باعث افتخاره، خیر مقدم' },
      { sender: 'user', text: 'ما کارخانه صنایع غذایی در شهرک صنعتی توس مشهد داریم' },
      { sender: 'expert', text: 'عالیه! دفتر مرکزی ما در برج سامان مشهده و به شهرک‌های صنعتی دسترسی فوری داریم.' },
      { sender: 'user', text: 'یک خط بسته‌بندی پیوسته داریم که دستگاه اصلیش ایتالیاییه' },
      { sender: 'expert', text: 'بله متوجهم؛ چه چالشی در عملکرد خط پیش اومده؟' },
      { sender: 'user', text: 'حدود ۲ هفته‌ست لرزش شدید پیدا کرده و مرتب متوقف میشه' },
      { sender: 'expert', text: 'توقف در کدوم بخش مکانیزم رخ میده؟ بخش گیربکس انتقال یا بازوهای فیدر؟' },
      { sender: 'user', text: 'دقیقاً در بخش شفت هرزگرد و کوپلینگ گیربکس' },
      { sender: 'expert', text: 'اوپراتورها فرکانس یا الگوی ارتعاشات رو ثبت کردن؟' },
      { sender: 'user', text: 'نه متاسفانه؛ فقط یاتاقان‌ها داغ میکنن و شفت لق می‌زنه' },
      { sender: 'expert', text: 'کاملاً مشخصه؛ احتمالاً دچار تشدید رزونانس یا خطای هم‌محوری میکرونی شده.' },
      { sender: 'user', text: 'دقیقاً! کارشناسان فنی کارخونه هم همینو حدس زدن' },
      { sender: 'expert', text: 'از شرکت سازنده خارجی استعلام قطعه یدکی گرفتین؟' },
      { sender: 'user', text: 'بله، گفتن تحویلش ۶ ماه طول میکشه با هزینه دلاری سرسام‌آور!' },
      { sender: 'expert', text: 'متاسفانه الان اکثر کارخانجات با همین معضل مواجهن؛ هر روز خواب خط یعنی زیان سنگین.' },
      { sender: 'user', text: 'امکانش هست خودتون برامون مهندسی معکوس و ساخت داخلش کنید؟' },
      { sender: 'expert', text: 'صد در صد؛ ما قطعات بسیار حساس‌تر از این رو با گرید متالورژی دقیق‌تر بومی‌سازی کردیم.' },
      { sender: 'user', text: 'چقدر عالی، واقعاً خیالمون راحت شد' },
      { sender: 'expert', text: 'حتی می‌تونیم با بهینه‌سازی پروفیل، کاری کنیم که دیگه دچار خستگی فلز و شکست نشه.' },
      { sender: 'user', text: 'واقعاً این کار شدنیه؟ فوق‌العاده‌ست!' },
      { sender: 'expert', text: 'بله، رسالت ما صرفاً کپی نیست؛ ارتقای راندمان و پایداری دستگاه تعهد مهندسی ماست.' },
      { sender: 'user', text: 'مهندس جان فقط یک نگرانی مهم داریم...' },
      { sender: 'expert', text: 'جانم، بفرمایید در خدمتم' },
      { sender: 'user', text: 'فرآیند خط تولید و نقشه‌های محصول ما شدیداً محرمانه‌ست' },
      { sender: 'expert', text: 'کاملاً به جا و درسته؛ پیش از هر اقدامی قرارداد رسمی محرمانگی (NDA) امضا میشه.' },
      { sender: 'user', text: 'یعنی حتی قبل از ارسال مشخصات و بازدید؟' },
      { sender: 'expert', text: 'بله دقیقاً؛ تفاهم‌نامه ممهور دوجانبه صادر میشه و مالکیت فکری ۱۰۰٪ متعلق به شماست.' },
      { sender: 'user', text: 'واقعاً احسنت به این انضباط، شفافیت و اخلاق حرفه‌ای' },
      { sender: 'expert', text: 'حفظ منافع و اعتماد کارفرما اصل اول ماشین دیزاینه' },
      { sender: 'user', text: 'من الان فیلم لرزش شفت و عکس پلاک دستگاه رو بفرستم؟' },
      { sender: 'expert', text: 'بله با کمال میل، همینجا ارسال بفرمایید تا تیم ارشد دفتر طراحی فوراً بررسی کنه.' },
      { sender: 'user', text: '[فایل ویدیو] ارسال ویدیو کارکرد دستگاه (۱۸ مگابایت)' },
      { sender: 'expert', text: 'فایل دریافت شد؛ سرپرست طراحی شخصاً در حال تحلیل اولیه دور حرکتی هستند.' },
      { sender: 'user', text: 'کی می‌تونیم برای بازدید حضوری هماهنگ بشیم؟' },
      { sender: 'expert', text: 'فردا ساعت ۱۰ صبح برای ارزیابی میدانی در محل کارخانه در خدمتتونیم' },
      { sender: 'user', text: 'خیلی ممنون از همراهی، سرعت عمل و احترامی که برای مشتری قائلید' },
      { sender: 'expert', text: 'باعث افتخار ماست جناب مهندس؛ فردا در خط تولید می‌بینیمتون' }
    ];

    let currentMsgIdx = 0;

    function runWaSimulation() {
      if (currentMsgIdx >= dialogScript.length) {
        setTimeout(function() {
          waStream.innerHTML = '';
          currentMsgIdx = 0;
          runWaSimulation();
        }, 6000);
        return;
      }

      const msgData = dialogScript[currentMsgIdx];
      currentMsgIdx++;

      if (msgData.sender === 'user') {
        // Customer typewriter effect (Right aligned in Persian RTL)
        const bubble = document.createElement('div');
        bubble.className = 'wa-msg wa-msg-out';
        bubble.innerHTML = '<span class="wa-msg-text"></span><span class="wa-msg-meta"><span class="wa-msg-time">۱۰:۴۲</span><span class="wa-ticks"></span></span>';
        waStream.appendChild(bubble);
        waStream.scrollTop = waStream.scrollHeight;

        const textSpan = bubble.querySelector('.wa-msg-text');
        const ticksSpan = bubble.querySelector('.wa-ticks');
        let charIndex = 0;

        function typeNextChar() {
          if (charIndex < msgData.text.length) {
            textSpan.textContent += msgData.text[charIndex];
            charIndex++;
            waStream.scrollTop = waStream.scrollHeight;
            setTimeout(typeNextChar, 26 + Math.random() * 14);
          } else {
            // Step 1: Single sent tick
            ticksSpan.innerHTML = '<span class="wa-tick"><svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"/></svg></span>';
            setTimeout(function() {
              // Step 2: Double read receipt ticks (green/blue)
              ticksSpan.innerHTML = '<span class="wa-tick wa-tick-read"><svg width="16" height="12" viewBox="0 0 28 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="18 6 7 17 2 12"/><polyline points="26 6 15 17 11 13"/></svg></span>';
              setTimeout(runWaSimulation, 550);
            }, 300);
          }
        }
        typeNextChar();
      } else {
        // MachineDesign response (Left aligned in Persian RTL)
        setTimeout(function() {
          const bubble = document.createElement('div');
          bubble.className = 'wa-msg wa-msg-in';
          bubble.innerHTML = '<span class="wa-msg-sender">ماشین دیزاین</span><span class="wa-msg-text">' + msgData.text + '</span><span class="wa-msg-meta"><span class="wa-msg-time">۱۰:۴۳</span></span>';
          waStream.appendChild(bubble);
          waStream.scrollTop = waStream.scrollHeight;
          setTimeout(runWaSimulation, 1250);
        }, 480);
      }
    }

    runWaSimulation();
  }
});
</script>

<?php
md_render_optional_gutenberg_slot();
get_footer();
