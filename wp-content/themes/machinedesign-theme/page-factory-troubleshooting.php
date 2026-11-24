<?php
/**
 * Template Name: Factory Troubleshooting Pillar (ستون ۲: عیب‌یابی خط و آنالیز ارتعاشات)
 * Template Post Type: page
 *
 * Description: Dedicated Landing Page for Pillar 02: Industrial Troubleshooting, Vibration Analysis & Condition Monitoring
 * Follows Cyber-Mechanical Dark Design System + Ponytail Doctrine + Strict Symmetry Rules
 *
 * @package HelloElementor
 */

defined( 'ABSPATH' ) || exit;

get_header();
?>

<!-- ========================================================================
     1. PILLAR 02 HERO BANNER
     ======================================================================== -->
<section class="page-hero-banner pillar-hero-wrap" aria-label="هیدر عیب‌یابی خط و آنالیز ارتعاشات کارخانجات">
  <div class="container">
    <div class="pillar-hero-grid">

      <!-- Right Column: Text & Conversion CTAs -->
      <div class="pillar-hero-content">
        <!-- Breadcrumb Navigation -->
        <nav class="page-hero-breadcrumb" aria-label="مسیر راهنما">
          <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="breadcrumb-item">صفحه اصلی</a>
          <span class="breadcrumb-separator" aria-hidden="true">/</span>
          <a href="<?php echo esc_url( home_url( '/services/' ) ); ?>" class="breadcrumb-item">خدمات ۶ گانه مهندسی</a>
          <span class="breadcrumb-separator" aria-hidden="true">/</span>
          <span class="breadcrumb-current" aria-current="page">مشاوره فنی و عیب‌یابی خطوط تولید</span>
        </nav>

        <!-- Corporate Sub-badge -->
        <div class="page-hero-badge">
          <span class="pulse-indicator" aria-hidden="true"></span>
          <span class="mono">PILLAR 02 // CONDITION MONITORING &amp; ROOT CAUSE ANALYSIS</span>
        </div>

        <!-- Main Page Title (Split in 2 Lines for Compact Width) -->
        <h1 class="page-hero-title pillar-hero-title-split">
          <span class="title-line-1">مشاوره فنی، عیب‌یابی تخصصی خطوط تولید</span>
          <span class="title-line-2 text-accent">و پایش وضعیت ارتعاشات تجهیزات دوار کارخانجات</span>
        </h1>

        <!-- Summary Lead Text -->
        <div class="page-hero-excerpt">
          اعزام فوری کارشناسان مهندسی مکانیک به کارخانجات سراسر کشور جهت ریشه‌یابی و رفع توقف خطوط تولید، داده‌برداری و آنالیز ارتعاشات FFT، بالانس دینامیکی درجا، عیب‌یابی یاتاقان‌ها و گیربکس‌ها منطبق بر استاندارد بین‌المللی ISO 10816 / ISO 20816.
        </div>

        <!-- Hero Action Buttons -->
        <div class="pillar-hero-actions">
          <a href="#emergency-dispatch" class="btn btn-primary">
            <span>درخواست اعزام فوری کارشناس عیب‌یابی</span>
            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true">
              <path d="M19 12H5M12 19l-7-7 7-7"/>
            </svg>
          </a>
          <a href="#troubleshooting-scopes" class="btn btn-outline">
            <span>مشاهده سرفصل‌های بازرسی فنی</span>
          </a>
        </div>
      </div>

      <!-- Left Column: Delta Robot 3D Interactive Stage (Transparent WebM & Differential HUD) -->
      <div class="pillar-hero-visual-col">
        <div
          class="delta-robot-stage"
          data-delta-stage
          tabindex="0"
          role="img"
          aria-label="مکانیزم متحرک صنعتی با قابلیت پایش وضعیت ارتعاشات و عیب‌یابی ریشه‌ای"
        >
          <!-- Ambient Volumetric Backlight -->
          <div class="delta-robot-glow" aria-hidden="true"></div>

          <!-- Physics-Driven Opposite Cast Shadow -->
          <div class="delta-robot-shadow" data-delta-shadow aria-hidden="true"></div>

          <!-- 3D Animated Transparent WebM Mechanism -->
          <div class="delta-robot-anim-wrap" data-delta-robot>
            <video
              class="delta-robot-img delta-robot-video"
              autoplay
              loop
              muted
              playsinline
              aria-label="مکانیزم متحرک ربات دلتا صنعتی با تلرانس میکرونی"
            >
              <source src="<?php echo esc_url( home_url( '/wp-content/uploads/2026/07/delta_robot_final_opt.webm' ) ); ?>" type="video/webm">
            </video>
          </div>

          <!-- Detached Floating HUD Glass Badge (Independent Differential Parallax) -->
          <div class="delta-robot-hud" data-delta-hud dir="ltr">
            <div class="delta-robot-hud-col">
              <span class="delta-robot-hud-label">CONDITION MONITORING</span>
              <span class="delta-robot-hud-value">VIBRATION FFT &amp; SPECTRUM</span>
            </div>
            <div class="delta-robot-hud-sep" aria-hidden="true"></div>
            <div class="delta-robot-hud-col">
              <span class="delta-robot-hud-label">RESPONSE TIME</span>
              <span class="delta-robot-hud-value">EMERGENCY DISPATCH</span>
            </div>
            <div class="delta-robot-hud-tag">
              <span class="delta-robot-hud-led" aria-hidden="true"></span>
              <span>ISO 10816 / ISO 20816 VERIFIED</span>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>

    <div class="container md-hero-standalone-visual">
      <?php if ( function_exists( 'md_render_hero_3d_stage' ) ) { md_render_hero_3d_stage( 'factory-troubleshooting' ); } ?>
    </div>
  </section>

<!-- ========================================================================
     2. INDUSTRIAL METRICS STRIP
     ======================================================================== -->
<section class="services-stats-strip pillar-stats-strip" aria-label="شاخص‌های دپارتمان عیب‌یابی و حل مسئله کارخانجات">
  <div class="container">
    <div class="services-stats-grid">
      
      <div class="stat-item-box">
        <div class="stat-icon-wrap" aria-hidden="true">
          <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2">
            <path d="M22 12h-4l-3 9L9 3l-3 9H2"/>
          </svg>
        </div>
        <div>
          <span class="stat-value">۱۵۰+ پروژه</span>
          <span class="stat-label">پایش میدانی و رفع توقف در صنایع سنگین و غذایی</span>
        </div>
      </div>

      <div class="stat-item-box">
        <div class="stat-icon-wrap" aria-hidden="true">
          <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2">
            <circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/>
          </svg>
        </div>
        <div>
          <span class="stat-value">۴۸ ساعت</span>
          <span class="stat-label">حداکثر زمان اعزام کارشناس به شهرک‌های صنعتی</span>
        </div>
      </div>

      <div class="stat-item-box">
        <div class="stat-icon-wrap" aria-hidden="true">
          <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2">
            <path d="M12 2v20M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"/>
          </svg>
        </div>
        <div>
          <span class="stat-value">۸۵٪</span>
          <span class="stat-label">کاهش توقفات ناخواسته خط (Downtime)</span>
        </div>
      </div>

      <div class="stat-item-box">
        <div class="stat-icon-wrap" aria-hidden="true">
          <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2">
            <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/>
          </svg>
        </div>
        <div>
          <span class="stat-value">ISO 10816 / 20816 &amp; 12100</span>
          <span class="stat-label">انطباق با استانداردهای ارتعاشی و ایمنی ماشین‌آلات</span>
        </div>
      </div>

    </div>
  </div>
</section>

<!-- ========================================================================
     3. 4 KEY TROUBLESHOOTING SCOPES
     ======================================================================== -->
<section class="machinery-categories-section" id="troubleshooting-scopes" aria-label="حوزه‌های تخصصی عیب‌یابی">
  <div class="container">
    
    <div class="services-section-header">
      <h2>۴ حوزه کلیدی حل مسئله و رفع توقف در خطوط تولید</h2>
      <p>
        رویکرد ما کشف و ریشه‌کنی عیوب مکانیکی پیش از تحمیل هزینه‌های سنگین خواب خط، تعویض‌های غیرضروری و آسیب به تجهیزات گران‌قیمت کارخانه است.
      </p>
    </div>

    <div class="categories-grid-4">
      
      <!-- Scope 1: Vibration Analysis & Dynamic Balancing -->
      <article class="category-spec-card">
        <div class="card-top-header">
          <span class="cat-num mono">FFT SPECTRUM</span>
          <div class="cat-icon-wrap" aria-hidden="true">
            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
              <path d="M22 12h-4l-3 9L9 3l-3 9H2"/>
            </svg>
          </div>
        </div>
        <h3>آنالیز ارتعاشات FFT و بالانس دینامیکی درجا</h3>
        <p>اندازه‌گیری پارامترهای سرعت (RMS)، شتاب و جابجایی ارتعاشی، شناسایی نابالانسی روتورها در سرعت نامی و هم‌راستاسازی لیزری شفت‌ها و کوپلینگ‌ها بدون نیاز به دمونتاژ کامل تجهیزات.</p>
        <ul class="cat-feature-list">
          <li>بالانس دینامیکی در ۱ و ۲ صفحه بدون خارج کردن روتور</li>
          <li>شناسایی عیوب ناهم‌راستایی زاویه‌ای و موازی (Misalignment)</li>
          <li>رفع پدیده‌های لقی مکانیکی و رزونانس فرکانس طبیعی</li>
        </ul>
      </article>

      <!-- Scope 2: Bearings & Gearbox Diagnostics -->
      <article class="category-spec-card">
        <div class="card-top-header">
          <span class="cat-num mono">BEARING &amp; GEAR</span>
          <div class="cat-icon-wrap" aria-hidden="true">
            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
              <circle cx="12" cy="12" r="3"/>
              <path d="M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 0 1 0 2.83 2 2 0 0 1-2.83 0l-.06-.06a1.65 1.65 0 0 0-1.82-.33 1.65 1.65 0 0 0-1 1.51V21a2 2 0 0 1-2 2 2 2 0 0 1-2-2v-.09A1.65 1.65 0 0 0 9 19.4a1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 0 1-2.83 0 2 2 0 0 1 0-2.83l.06-.06a1.65 1.65 0 0 0 .33-1.82 1.65 1.65 0 0 0-1.51-1H3a2 2 0 0 1-2-2 2 2 0 0 1 2-2h.09A1.65 1.65 0 0 0 4.6 9a1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 0 1 0-2.83 2 2 0 0 1 2.83 0l.06.06a1.65 1.65 0 0 0 1.82.33H9a1.65 1.65 0 0 0 1-1.51V3a2 2 0 0 1 2-2 2 2 0 0 1 2 2v.09a1.65 1.65 0 0 0 1 1.51 1.65 1.65 0 0 0 1.82-.33l.06-.06a2 2 0 0 1 2.83 0 2 2 0 0 1 0 2.83l-.06.06a1.65 1.65 0 0 0-.33 1.82V9a1.65 1.65 0 0 0 1.51 1H21a2 2 0 0 1 2 2 2 2 0 0 1-2 2h-.09a1.65 1.65 0 0 0-1.51 1z"/>
            </svg>
          </div>
        </div>
        <h3>کالبدشکافی عیوب یاتاقان‌ها، بیرینگ‌ها و گیربکس</h3>
        <p>تحلیل فرکانس‌های ویژه تخریب رینگ داخلی، خارجی و ساچمه‌ها (BPFO, BPFI, BSF, FTF)، عیب‌یابی لقی یاتاقان، سایش و تماس نامناسب دندانه‌های گیربکس و پیشگیری قطعی از قفل شدن ناگهانی شفت.</p>
        <ul class="cat-feature-list">
          <li>تشخیص پدیده‌های سایش، Pitting و Spalling دندانه‌ها</li>
          <li>پایش انولوپ شتاب (Acceleration Enveloping) برای بیرینگ‌ها</li>
          <li>تحلیل لقی هوزینگ، کمانش شفت و ارزیابی بارگذاری محوری</li>
        </ul>
      </article>

      <!-- Scope 3: RCFA & Metallurgical Failure Analysis -->
      <article class="category-spec-card">
        <div class="card-top-header">
          <span class="cat-num mono">RCFA &amp; MATERIALS</span>
          <div class="cat-icon-wrap" aria-hidden="true">
            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
              <polygon points="12 2 2 7 12 12 22 7 12 2"/>
              <polyline points="2 17 12 22 22 17"/>
              <polyline points="2 12 12 17 22 12"/>
            </svg>
          </div>
        </div>
        <h3>تحلیل علل ریشه خرابی (RCFA) و متالورژی شکست</h3>
        <p>بررسی تخصصی عیوب متالورژیکی، شکست شفت‌ها، خستگی (Fatigue)، خوردگی و سایش غیرعادی و اصلاح متریال قطعات جهت پایان دادن به تکرار خرابی قطعات یدکی خط تولید.</p>
        <ul class="cat-feature-list">
          <li>ریشه‌یابی شکست مقاطع تحت تنش‌های دینامیکی و ارتعاشی</li>
          <li>اصلاح جنس آلیاژی (Alloy Steels) و عملیات حرارتی سطحی</li>
          <li>بازطراحی تمرکز تنش‌ها (Stress Concentrations) با شبیه‌سازی FEA</li>
        </ul>
      </article>

      <!-- Scope 4: Bottleneck Removal & Line Speed Optimization -->
      <article class="category-spec-card">
        <div class="card-top-header">
          <span class="cat-num mono">SPEED &amp; EFFICIENCY</span>
          <div class="cat-icon-wrap" aria-hidden="true">
            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
              <line x1="6" y1="3" x2="6" y2="15"/>
              <circle cx="18" cy="6" r="3"/>
              <circle cx="6" cy="18" r="3"/>
              <path d="M18 9a9 9 0 0 1-9 9"/>
            </svg>
          </div>
        </div>
        <h3>بهینه‌سازی فرآیند، سرعت خط و رفع گلوگاه‌ها</h3>
        <p>تحلیل سینماتیکی سرعت کانوایرها و مکانیزم‌های ایندکسینگ، تنظیم دقیق تایمینگ عملگرهای پنوماتیک، هیدرولیک و سروو، و کاهش ضایعات تولیدی ناشی از نوسانات مکانیزمی خط.</p>
        <ul class="cat-feature-list">
          <li>هماهنگ‌سازی سرعت خطوط تولید پیوسته و کانوایرهای واسط</li>
          <li>رفع گیرپاژ، جامپ و ضربات دینامیکی در نقاط انتقال بسته</li>
          <li>بهینه‌سازی مصرف انرژی الکتروموتورها و درایوها تحت بار کامل</li>
        </ul>
      </article>

    </div>

  </div>
</section>

<!-- ========================================================================
     4. EMERGENCY LINE-STOP PROTOCOL BANNER
     ======================================================================== -->
<section class="container" id="emergency-dispatch" aria-label="پروتکل اعزام اضطراری کارشناس عیب‌یابی">
  <div class="emergency-protocol-banner">
    <div class="emergency-banner-content">
      <div class="emergency-tag-wrap">
        <span class="pulse-indicator-red" aria-hidden="true"></span>
        <span class="mono">EMERGENCY LINE-STOP PROTOCOL // اعزام اورژانسی</span>
      </div>
      <h3 class="emergency-title">خط تولید شما متوقف شده یا دستگاه دچار لرزش و صدای غیرعادی است؟</h3>
      <p class="emergency-desc">
        توقف هر ساعت خط تولید در صنایع پیوسته غذایی، دارویی، بسته‌بندی و فولاد، خسارات سنگین مالی در پی دارد. دپارتمان حل مسئله ماشین دیزاین در سریع‌ترین زمان ممکن، با تجهیزات پرتابل آنالایزر ارتعاشات FFT و ابزارآلات دقیق در محل کارخانه شما حاضر می‌شود تا عیب ریشه‌ای را بدون حدس و گمان تشخیص داده و خط را به مدار تولید بازگرداند.
      </p>
      
      <div class="emergency-features-row">
        <div class="emergency-feat-item">
          <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="var(--color-accent)" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg>
          <span>اعزام فوری به تمام شهرک‌های صنعتی ایران</span>
        </div>
        <div class="emergency-feat-item">
          <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="var(--color-accent)" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg>
          <span>تجهیزات پرتابل اندازه‌گیری ارتعاشات FFT</span>
        </div>
        <div class="emergency-feat-item">
          <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="var(--color-accent)" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg>
          <span>بالانس درجا بدون باز کردن خط</span>
        </div>
      </div>
    </div>

    <?php 
    $trouble_phone = function_exists('md_get_contact') ? md_get_contact('phone', '') : '';
    $trouble_mobile = function_exists('md_get_contact') ? md_get_contact('mobile', '') : '';
    $trouble_display = $trouble_phone ?: ($trouble_mobile ?: '۰۵۱-XXXXXXXX');
    $trouble_clean = md_tel_uri( $trouble_display );
    $trouble_telegram = function_exists('md_get_social') ? md_get_social('telegram', 'https://t.me/machinedesign_ir') : 'https://t.me/machinedesign_ir';
    ?>
    <div class="emergency-banner-cta">
      <a href="tel:<?php echo esc_attr($trouble_clean); ?>" class="btn btn-primary emergency-btn-pulse">
        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
          <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/>
        </svg>
        <span>تماس اضطراری (<?php echo esc_html($trouble_display); ?>)</span>
      </a>
      <a href="<?php echo esc_url($trouble_telegram); ?>" target="_blank" rel="noopener noreferrer" class="btn btn-outline" style="border-color: rgba(255,255,255,0.25); color: #ffffff;">
        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
          <line x1="22" y1="2" x2="11" y2="13"/><polygon points="22 2 15 22 11 13 2 9 22 2"/>
        </svg>
        <span>ارسال ویدیو و صدای خرابی در تلگرام</span>
      </a>
      <a href="#rfq-section" class="btn btn-outline" style="border-color: var(--color-accent-border); color: var(--color-accent);">
        <span>تکمیل فرم درخواست پایش وضعیت</span>
      </a>
    </div>
  </div>
</section>

<!-- ========================================================================
     5. 4-STAGE SYSTEMATIC WORKFLOW
     ======================================================================== -->
<section class="pillar-workflow-section" aria-label="فرآیند ۴ مرحله‌ای عیب‌یابی ارتعاشی و حل مسئله">
  <div class="container">
    
    <div class="section-title-wrap text-center" style="margin-bottom: 56px;">
      <span class="badge badge-accent mono" style="margin-bottom: 12px; display: inline-block;">RCFA METHODOLOGY // متدولوژی حل مسئله</span>
      <h2 class="section-title" style="color: #ffffff;">فرآیند ۴ مرحله‌ای داده‌محور از پایش تا رفع قطعی عیب</h2>
      <p class="section-subtitle" style="color: #94a3b8; max-width: 720px; margin: 0 auto;">
        عیب‌یابی مهندسی با ابزارهای دقیق محاسباتی انجام می‌شود و روش‌های سنتی آزمون و خطا در پروتکل‌های ما جایی ندارند.
      </p>
    </div>

    <div class="workflow-grid-4">
      
      <div class="workflow-card">
        <div class="workflow-step-num">۰۱</div>
        <h4>داده‌برداری میدانی و ثبت طیف FFT</h4>
        <p>نصب سنسورهای پیزوالکتریک شتاب‌سنج روی یاتاقان‌ها در ۳ راستای افقی، عمودی و محوری، اندازه‌گیری سرعت خط و ثبت طیف در حین کارکرد عادی دستگاه.</p>
      </div>

      <div class="workflow-card">
        <div class="workflow-step-num">۰۲</div>
        <h4>تحلیل طیف فرکانسی و کشف علت ریشه (RCFA)</h4>
        <p>تحلیل پیک‌های هارمونیک (1X, 2X, 3X)، باندهای جانبی فرکانس درگیری چرخدنده‌ها و تفکیک قطعی میان نابالانسی، ناهم‌راستایی، لقی مکانیکی یا نقص بیرینگ.</p>
      </div>

      <div class="workflow-card">
        <div class="workflow-step-num">۰۳</div>
        <h4>اقدام اصلاحی مهندسی و بازطراحی قطعه</h4>
        <p>اجرای بالانس دینامیکی درجا، تصحیح تراز لیزری شفت‌ها با شیم‌گذاری دقیق، یا در صورت نیاز بازطراحی و اصلاح جنس قطعه در نرم‌افزار SolidWorks.</p>
      </div>

      <div class="workflow-card">
        <div class="workflow-step-num">۰۴</div>
        <h4>تست صحه‌گذاری زیر بار و شناسنامه پایش</h4>
        <p>راه‌اندازی مجدد خط تحت بار کامل، اندازه‌گیری مجدد سطوح ارتعاشی جهت اطمینان از قرارگیری در محدوده مجاز ISO 10816 / ISO 20816 و تحویل مستندات نهایی به کارفرما.</p>
      </div>

    </div>

  </div>
</section>

<!-- ========================================================================
     6. DELIVERABLES PACKAGE
     ======================================================================== -->
<section class="deliverables-section" aria-label="پکیج گزارش‌های تحویلی به کارخانه">
  <div class="container">
    
    <div class="section-title-wrap text-center">
      <span class="badge badge-accent mono" style="margin-bottom: 12px; display: inline-block;">INSPECTION DELIVERABLES // پکیج اسناد تحویلی</span>
      <h2 class="section-title" style="color: #121824;">مستنداتی که پس از اتمام عیب‌یابی دریافت می‌کنید</h2>
      <p class="section-subtitle" style="color: #64748b; max-width: 720px; margin: 0 auto;">
        کلیه اقدامات انجام‌شده همراه با گزارش‌های مستند مهندسی و راهنماهای قابل اتکا برای تیم تعمیرات (نت) تحویل داده می‌شود.
      </p>
    </div>

    <div class="deliverables-grid-3">
      
      <div class="deliverable-box">
        <div class="deliv-icon" aria-hidden="true">
          <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
            <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/>
            <polyline points="14 2 14 8 20 8"/>
            <line x1="16" y1="13" x2="8" y2="13"/>
            <line x1="16" y1="17" x2="8" y2="17"/>
            <polyline points="10 9 9 9 8 9"/>
          </svg>
        </div>
        <h4>گزارش رسمی آنالیز ارتعاشات و طیف FFT</h4>
        <p>دفترچه تحلیلی جامع شامل نمودارهای طیفی زمان و فرکانس، مقایسه با جدول حدود مجاز استاندارد بین‌المللی ISO 10816 / ISO 20816 و گواهی کالیبراسیون و سلامت تجهیز.</p>
      </div>

      <div class="deliverable-box">
        <div class="deliv-icon" aria-hidden="true">
          <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
            <circle cx="12" cy="12" r="3"/>
            <path d="M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 0 1 0 2.83 2 2 0 0 1-2.83 0l-.06-.06a1.65 1.65 0 0 0-1.82-.33 1.65 1.65 0 0 0-1 1.51V21a2 2 0 0 1-2 2 2 2 0 0 1-2-2v-.09A1.65 1.65 0 0 0 9 19.4a1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 0 1-2.83 0 2 2 0 0 1 0-2.83l.06-.06a1.65 1.65 0 0 0 .33-1.82 1.65 1.65 0 0 0-1.51-1H3a2 2 0 0 1-2-2 2 2 0 0 1 2-2h.09A1.65 1.65 0 0 0 4.6 9a1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 0 1 0-2.83 2 2 0 0 1 2.83 0l.06.06a1.65 1.65 0 0 0 1.82.33H9a1.65 1.65 0 0 0 1-1.51V3a2 2 0 0 1 2-2 2 2 0 0 1 2 2v.09a1.65 1.65 0 0 0 1 1.51 1.65 1.65 0 0 0 1.82-.33l.06-.06a2 2 0 0 1 2.83 0 2 2 0 0 1 0 2.83l-.06.06a1.65 1.65 0 0 0-.33 1.82V9a1.65 1.65 0 0 0 1.51 1H21a2 2 0 0 1 2 2 2 2 0 0 1-2 2h-.09a1.65 1.65 0 0 0-1.51 1z"/>
          </svg>
        </div>
        <h4>دستورالعمل نگهداری و روانکاری استاندارد</h4>
        <p>چک‌لیست عملیاتی برای تیم نگهداری و تعمیرات (نت) کارخانه، مشخصات دقیق گرید روغن و گریس بیرینگ‌ها، فواصل زمانی گریسکاری و حدود هشدار ارتعاشی.</p>
      </div>

      <div class="deliverable-box">
        <div class="deliv-icon" aria-hidden="true">
          <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
            <polygon points="12 2 2 7 12 12 22 7 12 2"/>
            <polyline points="2 17 12 22 22 17"/>
            <polyline points="2 12 12 17 22 12"/>
          </svg>
        </div>
        <h4>نقشه‌های ساخت قطعات بهینه‌شده و متالورژی</h4>
        <p>در صورت نیاز به تعویض قطعه معیوب با قطعه مقاوم‌تر، نقشه‌های مهندسی ۲ بعدی و سه‌بعدی GD&amp;T به همراه مشخصات متالورژیکی و عملیات حرارتی ارائه می‌شود.</p>
      </div>

    </div>

  </div>
</section>

<!-- ========================================================================
     7. HIGH-CONVERSION DUAL-PANEL RFQ & CONSULTATION (طراحی مرتب و دو ستونه متقارن)
     ======================================================================== -->
<section class="pillar-rfq-dual-section" id="rfq-section" aria-label="استعلام و اعزام کارشناس عیب‌یابی و پایش وضعیت">
  <div class="container">
    <div class="rfq-dual-grid">

      <!-- Column 1: Visual Incentive & Trust Showcase (شاخص‌های اعتماد صنعتی) -->
      <div class="rfq-incentive-panel">
        <div>
          <div class="rfq-trust-badge mono">
            <span class="rfq-led" aria-hidden="true"></span>
            <span>RAPID DISPATCH // ISO 10816 / ISO 20816 ACCREDITED</span>
          </div>

          <h3 class="rfq-incentive-title">
            عیب‌یابی ریشه‌ای، پایش ارتعاشات و رفع فوری توقف خطوط تولید صنعتی
          </h3>

          <p class="rfq-incentive-subtitle">
            با بهره‌گیری از تجهیزات پرتابل آنالیز ارتعاشات، ترموگرافی و الاینمنت لیزری، عیوب پنهان بیرینگ‌ها، گیربکس‌ها و شفت‌ها را پیش از شکست فاجعه‌بار مهار می‌کنیم.
          </p>

          <!-- 3 Value Proposition Chips -->
          <div class="rfq-incentives-list">
            <div class="rfq-incentive-item">
              <div class="rfq-incentive-icon" aria-hidden="true">
                <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2">
                  <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/>
                </svg>
              </div>
              <div class="rfq-incentive-text">
                <h4>پایش استاندارد ISO 10816 / ISO 20816 و تحلیل طیف FFT</h4>
                <p>تحلیل طیف‌های دامنه فرکانسی، دمدولاسیون پاکت بیرینگ و تراز لیزری شفت‌ها با دقت صدم میلیمتر در محل کارخانه.</p>
              </div>
            </div>

            <div class="rfq-incentive-item">
              <div class="rfq-incentive-icon" aria-hidden="true">
                <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2">
                  <circle cx="12" cy="12" r="10"/>
                  <polyline points="12 6 12 12 16 14"/>
                </svg>
              </div>
              <div class="rfq-incentive-text">
                <h4>پاسخگویی اضطراری (کمتر از ۲ ساعت) و اعزام فوری به کارخانه</h4>
                <p>در شرایط توقف بحرانی خطوط تولید، کارشناس مجهز به پکیج پرتابل تست ارتعاشی در سریع‌ترین زمان در کارخانه مستقر می‌شود.</p>
              </div>
            </div>

            <div class="rfq-incentive-item">
              <div class="rfq-incentive-icon" aria-hidden="true">
                <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2">
                  <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/>
                  <polyline points="22 4 12 14.01 9 11.01"/>
                </svg>
              </div>
              <div class="rfq-incentive-text">
                <h4>تضمین شناسایی علل بنیادین خرابی (تحلیل RCFA)</h4>
                <p>به جای تعویض قطعه و تکرار خرابی، ریشه اصلی نابالانسی، ناهم‌راستایی، لقی سازه‌ای یا روانکاری نامناسب برطرف می‌گردد.</p>
              </div>
            </div>
          </div>
        </div>

        <!-- Fast Track Phone Chip -->
        <div class="rfq-direct-consult-chip">
          <div class="consult-chip-text">
            <span class="consult-chip-label">نیاز به اعزام فوری کارشناس یا مشاوره تلفنی دارید؟</span>
            <span class="consult-chip-title">گفتگوی مستقیم با مهندس حسین وطن‌دوست</span>
          </div>
          <a href="tel:<?php echo esc_attr($trouble_clean); ?>" class="consult-phone-btn mono" dir="ltr" title="تماس مستقیم با کارشناس عیب‌یابی">
            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2">
              <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/>
            </svg>
            <span><?php echo esc_html($trouble_display); ?></span>
          </a>
        </div>
      </div>

      <!-- Column 2: Streamlined Industrial Form Panel (ستون فرم منظم و متقارن) -->
      <div class="rfq-form-panel-custom">
        <div id="pillarRfqContainer">
          <div class="rfq-form-custom-header">
            <span class="rfq-form-tag mono">// RAPID INDUSTRIAL TROUBLESHOOTING INQUIRY</span>
            <h3>ثبت درخواست عیب‌یابی و پایش وضعیت تجهیزات</h3>
            <p>علائم خرابی و شرایط کارکرد دستگاه را ثبت فرمایید؛ کارشناس فنی جهت بررسی اولیه ظرف ۲ ساعت کاری با شما تماس می‌گیرد.</p>
          </div>

          <div id="pillarRfqNotice" class="rfq-hud-notice" style="display:none;" role="alert"></div>

          <form id="pillarRfqForm" class="rfq-form-grid-inner" method="POST">
            <input type="hidden" name="action" value="machinedesign_rfq_submit">
            <input type="hidden" name="source_pillar" value="factory-troubleshooting">
            <input type="hidden" name="source_url" value="<?php echo esc_url( get_permalink() ); ?>">
            
            <div class="rfq-input-group">
              <label for="rfq-name">نام و نام خانوادگی / شرکت و کارخانه <span class="req-star">*</span></label>
              <input type="text" id="rfq-name" name="rfq_name" class="rfq-input-field" required placeholder="مثال: مهندس اکبری - سرپرست نت کارخانه">
            </div>

            <div class="rfq-input-group">
              <label for="rfq-phone">شماره همراه مستقیم مسئول فنی <span class="req-star">*</span></label>
              <input type="tel" id="rfq-phone" name="rfq_phone" class="rfq-input-field" required placeholder="۰۹۱۲XXXXXXX" dir="ltr">
            </div>

            <div class="rfq-input-group rfq-field-full">
              <label for="rfq-service-type">نوع نقص فنی یا فرآیند مورد نیاز <span class="req-star">*</span></label>
              <select id="rfq-service-type" name="rfq_service_type" class="rfq-input-field" required>
                <option value="" disabled selected>انتخاب نوع نقص فنی...</option>
                <option value="vibration_fft">آنالیز ارتعاشات طیف FFT، نابالانسی دینامیکی و تشدید مکانیکی</option>
                <option value="bearing_failure">عیب‌یابی خرابی مکرر یاتاقان‌ها، بیرینگ‌ها و روانکاری نامناسب</option>
                <option value="laser_alignment">تراز و الاینمنت لیزری شفت‌ها، کوپلینگ‌ها و هم‌راستاسازی پمپ/الکتروموتور</option>
                <option value="gearbox_defect">عیب‌یابی گیربکس‌های صنعتی، سایش دنده‌ها و صدای غیرعادی</option>
                <option value="emergency_stop">توقف اضطراری خط تولید و نیاز به اعزام کارشناس فوری</option>
              </select>
            </div>

            <div class="rfq-input-group rfq-field-full">
              <label for="rfq-stage">فوریت عملیاتی و وضعیت فعلی تجهیز</label>
              <select id="rfq-stage" name="rfq_stage" class="rfq-input-field">
                <option value="" disabled selected>انتخاب سطح فوریت و وضعیت تجهیز...</option>
                <option value="emergency_halt">توقف کامل خط تولید / شرایط اضطراری (نیاز به اقدام فوری)</option>
                <option value="critical_running">تجهیز با ارتعاش یا دمای شدید در مدار است / ریسک توقف قریب‌الوقوع</option>
                <option value="recurring_issue">خرابی متناوب و مکرر / نیاز به ریشه‌یابی و آنالیز RCFA</option>
                <option value="scheduled_pm">پایش دوره‌ای وضعیت (CBM) و نگهداری پیشگیرانه برنامه‌ریزی‌شده</option>
              </select>
            </div>

            <div class="rfq-input-group rfq-field-full">
              <label for="rfq-desc">شرح علائم خرابی، صدا، ارتعاش یا دمای غیرعادی</label>
              <textarea id="rfq-desc" name="rfq_desc" class="rfq-input-field" rows="3" placeholder="نوع دستگاه، توان الکتروموتور/گیربکس، علائم مشاهده‌شده (صدا، لرزش، قفل کردن) و سوابق تعویض قطعه را بنویسید..."></textarea>
            </div>

            <div class="rfq-field-full">
              <button type="submit" id="pillarRfqSubmitBtn" class="btn-rfq-submit-large">
                <span>ثبت درخواست و اعزام کارشناس عیب‌یابی</span>
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" aria-hidden="true">
                  <path d="M19 12H5M12 19l-7-7 7-7"/>
                </svg>
              </button>
            </div>

          </form>

          <!-- Success HUD (Rendered upon successful submission) -->
          <div id="pillarRfqSuccessHud" class="rfq-success-hud" style="display:none;">
            <div class="rfq-success-icon-wrap" aria-hidden="true">
              <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
                <polyline points="20 6 9 17 4 12"/>
              </svg>
            </div>
            <div class="rfq-success-badge mono">// INQUIRY REGISTERED // RAPID RESPONSE DISPATCHED</div>
            <h4 class="rfq-success-title">درخواست عیب‌یابی صنعتی با موفقیت ثبت گردید</h4>
            <div class="rfq-success-code-wrap">
              <span>کد رهگیری سیستمی:</span>
              <span id="rfqTrackingPill" class="rfq-tracking-pill mono">MD-FIX-2026-0000</span>
            </div>
            <p class="rfq-success-desc">
              مشخصات فنی و علائم خرابی در دپارتمان عیب‌یابی و پایش وضعیت ماشین دیزاین ثبت شد. کارشناس ارشد عیب‌یابی ظرف کمتر از ۲ ساعت کاری جهت بررسی پارامترهای ارتعاشی و هماهنگی اعزام با شما تماس خواهد گرفت.
            </p>
            <button type="button" id="pillarRfqResetBtn" class="rfq-reset-btn">
              + ثبت درخواست عیب‌یابی دیگر
            </button>
          </div>
        </div>

        <!-- Security & NDA Guarantee Chip (Symmetrical to Fast-Track Phone Chip) -->
        <div class="rfq-form-guarantee-chip">
          <div class="guarantee-chip-text">
            <span class="consult-chip-label">استاندارد ایمنی و محرمانگی خط تولید</span>
            <span class="consult-chip-title">تضمین ۱۰۰٪ محرمانگی فرآیندها تحت پروتکل حقوقی NDA</span>
          </div>
          <div class="guarantee-lock-badge mono" dir="ltr">
            <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2">
              <rect x="3" y="11" width="18" height="11" rx="2" ry="2"/>
              <path d="M7 11V7a5 5 0 0 1 10 0v4"/>
            </svg>
            <span>SECURE // NDA</span>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>

<script>
(function() {
  var form = document.getElementById('pillarRfqForm');
  var submitBtn = document.getElementById('pillarRfqSubmitBtn');
  var notice = document.getElementById('pillarRfqNotice');
  var successHud = document.getElementById('pillarRfqSuccessHud');
  var trackingPill = document.getElementById('rfqTrackingPill');
  var resetBtn = document.getElementById('pillarRfqResetBtn');
  var header = document.querySelector('.rfq-form-custom-header');

  if (!form) return;

  form.addEventListener('submit', function(e) {
    e.preventDefault();

    var nameInput = document.getElementById('rfq-name');
    var phoneInput = document.getElementById('rfq-phone');
    var serviceInput = document.getElementById('rfq-service-type');

    if (!phoneInput || !phoneInput.value.trim()) {
      showNotice('لطفاً شماره همراه معتبر خود را وارد فرمایید.', 'error');
      return;
    }

    // UI Loading state
    submitBtn.disabled = true;
    submitBtn.style.opacity = '0.7';
    submitBtn.innerHTML = '<span>در حال ثبت امن و اعزام کارشناس...</span>';
    if (notice) notice.style.display = 'none';

    var formData = new FormData(form);
    var ajaxUrl = (typeof md_vars !== 'undefined' && md_vars.ajax_url) ? md_vars.ajax_url : '/machinedesign/wp-admin/admin-ajax.php';

    fetch(ajaxUrl, {
      method: 'POST',
      body: formData
    })
    .then(function(res) { return res.json(); })
    .then(function(data) {
      submitBtn.disabled = false;
      submitBtn.style.opacity = '1';
      submitBtn.innerHTML = '<span>ثبت درخواست و اعزام کارشناس عیب‌یابی</span><svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" aria-hidden="true"><path d="M19 12H5M12 19l-7-7 7-7"/></svg>';

      if (data && data.success) {
        var code = data.data && (data.data.tracking_code || data.data.tracking) ? (data.data.tracking_code || data.data.tracking) : 'MD-FIX-2026';
        if (trackingPill) trackingPill.textContent = code;

        // Hide form & header, show success HUD
        form.style.display = 'none';
        if (header) header.style.display = 'none';
        if (notice) notice.style.display = 'none';
        if (successHud) successHud.style.display = 'block';

        form.reset();
      } else {
        var msg = data && data.data && data.data.message ? data.data.message : 'خطایی در ثبت استعلام رخ داد. لطفاً مجدداً تلاش فرمایید.';
        showNotice(msg, 'error');
      }
    })
    .catch(function(err) {
      submitBtn.disabled = false;
      submitBtn.style.opacity = '1';
      submitBtn.innerHTML = '<span>ثبت درخواست و اعزام کارشناس عیب‌یابی</span><svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" aria-hidden="true"><path d="M19 12H5M12 19l-7-7 7-7"/></svg>';
      showNotice('ارتباط با سرور برقرار نشد. لطفاً اتصال اینترنت خود را بررسی کرده یا مستقیماً تماس بگیرید.', 'error');
    });
  });

  if (resetBtn) {
    resetBtn.addEventListener('click', function() {
      if (successHud) successHud.style.display = 'none';
      if (header) header.style.display = 'block';
      form.style.display = 'grid';
    });
  }

  function showNotice(text, type) {
    if (!notice) return;
    notice.className = 'rfq-hud-notice ' + type;
    notice.textContent = text;
    notice.style.display = 'block';
  }
})();
</script>

<?php
md_render_optional_gutenberg_slot();
get_footer();
