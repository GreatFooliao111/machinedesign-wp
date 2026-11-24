<?php
/**
 * Template Name: Services Hub (لندینگ‌پیج هاب خدمات ۶ گانه)
 * Template Post Type: page
 *
 * Description: Dedicated Hub Page for MachineDesign.ir 6 Core Engineering Pillars
 * Follows Cyber-Mechanical Dark Design System + Ponytail Doctrine
 *
 * @package HelloElementor
 */

defined( 'ABSPATH' ) || exit;

get_header();
?>

<!-- ========================================================================
     1. SERVICES HUB HERO BANNER
     ======================================================================== -->
<section class="page-hero-banner services-hero-wrap" aria-label="هیدر خدمات ۶ گانه">
  <div class="container">
    <div class="page-hero-grid">

      <!-- Right Column: Text & Breadcrumb -->
      <div class="page-hero-content">
        <!-- Breadcrumb Navigation -->
        <nav class="page-hero-breadcrumb" aria-label="مسیر راهنما">
          <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="breadcrumb-item">صفحه اصلی</a>
          <span class="breadcrumb-separator" aria-hidden="true">/</span>
          <span class="breadcrumb-current" aria-current="page">خدمات ۶ گانه مهندسی</span>
        </nav>

        <!-- Corporate Sub-badge -->
        <div class="page-hero-badge">
          <span class="pulse-indicator" aria-hidden="true"></span>
          <span class="mono">MACHINEDESIGN.IR // 6 CORE SERVICE PILLARS</span>
        </div>

        <!-- Main Page Title (Split in 2 Lines for Compact Width) -->
        <h1 class="page-hero-title page-hero-title-split">
          <span class="title-line-1">خدمات ۶ گانه مهندسی مکانیک،</span>
          <span class="title-line-2 text-accent">طراحی ماشین‌آلات و عیب‌یابی صنعتی</span>
        </h1>

        <!-- Summary Lead Text -->
        <div class="page-hero-excerpt">
          ماشین دیزاین به عنوان بازوی مهندسی صنایع پیشرو کشور، زنجیره کامل خدمات مهندسی مکانیک را از طراحی کانسپت و مدل‌سازی CAD تا شبیه‌سازی‌های پیشرفته المان محدود (FEA)، ساخت نمونه اولیه، پایش وضعیت ارتعاشات و بازرسی فنی خرید خطوط تولید ارائه می‌نماید.
        </div>
      </div>

      <!-- Left Column: Delta Robot 3D Interactive Stage (Animated AVIF & Differential HUD) -->
      <div class="page-hero-visual-col">
        <div
          class="delta-robot-stage"
          data-delta-stage
          tabindex="0"
          role="img"
          aria-label="مکانیزم متحرک ربات دلتا صنعتی با تلرانس میکرونی و خدمات جامع مهندسی"
        >
          <!-- Ambient Volumetric Backlight -->
          <div class="delta-robot-glow" aria-hidden="true"></div>

          <!-- Physics-Driven Opposite Cast Shadow -->
          <div class="delta-robot-shadow" data-delta-shadow aria-hidden="true"></div>

          <!-- 3D Animated Transparent WebM Delta Robot Mechanism -->
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

          <!-- Detached Floating HUD Glass Badge (Independent Differential Parallax) -->
          <div class="delta-robot-hud" data-delta-hud dir="ltr">
            <div class="delta-robot-hud-col">
              <span class="delta-robot-hud-label">HIGH-SPEED KINEMATICS</span>
              <span class="delta-robot-hud-value">PARALLEL DELTA ROBOT</span>
            </div>
            <div class="delta-robot-hud-sep" aria-hidden="true"></div>
            <div class="delta-robot-hud-col">
              <span class="delta-robot-hud-label">PRECISION</span>
              <span class="delta-robot-hud-value">ISO-9001 CAD</span>
            </div>
            <div class="delta-robot-hud-tag">
              <span class="delta-robot-hud-led" aria-hidden="true"></span>
              <span>ENGINEERING HUB</span>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>

<!-- ========================================================================
     2. INDUSTRIAL METRICS STRIP
     ======================================================================== -->
<section class="services-stats-strip" aria-label="شاخص‌های عملکردی">
  <div class="container">
    <div class="services-stats-grid">
      
      <div class="stat-item-box">
        <div class="stat-icon-wrap" aria-hidden="true">
          <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2">
            <circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/>
          </svg>
        </div>
        <div>
          <span class="stat-value">+۱۵ سال</span>
          <span class="stat-label">سابقه میدانی در صنایع سنگین و غذایی</span>
        </div>
      </div>

      <div class="stat-item-box">
        <div class="stat-icon-wrap" aria-hidden="true">
          <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2">
            <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/>
          </svg>
        </div>
        <div>
          <span class="stat-value">ISO 12100 &amp; DIN</span>
          <span class="stat-label">انطباق ۱۰۰٪ نقشه‌ها با استاندارد ساخت</span>
        </div>
      </div>

      <div class="stat-item-box">
        <div class="stat-icon-wrap" aria-hidden="true">
          <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2">
            <rect x="3" y="11" width="18" height="11" rx="2" ry="2"/><path d="M7 11V7a5 5 0 0 1 10 0v4"/>
          </svg>
        </div>
        <div>
          <span class="stat-value">۱۰۰٪ محرمانه</span>
          <span class="stat-label">تعهدنامه حقوقی عدم افشا (NDA)</span>
        </div>
      </div>

      <div class="stat-item-box">
        <div class="stat-icon-wrap" aria-hidden="true">
          <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2">
            <polygon points="13 2 3 14 12 14 11 22 21 10 12 10 13 2"/>
          </svg>
        </div>
        <div>
          <span class="stat-value">۲۴ تا ۴۸ ساعت</span>
          <span class="stat-label">پاسخگویی سریع و امکان اعزام کارشناس</span>
        </div>
      </div>

    </div>
  </div>
</section>

<!-- ========================================================================
     2.5 TRANSITIONAL INTRO & VALUE PROPOSITION (BRIDGE TO PILLARS)
     ======================================================================== -->
<section class="services-intro-overview" id="services-philosophy" aria-label="رویکرد جامع خدمات ماشین دیزاین">
  <div class="container">
    <div class="services-intro-grid">
      
      <!-- Visual Column (Top Bar + Auto-Matched Height Image + Bottom Actions) -->
      <div class="services-intro-visual-col">
        <div class="visual-col-top-bar">
          <span class="visual-col-meta mono">CAD/CAM // VERIFIED REALITY</span>
        </div>

        <div class="services-intro-image-wrap">
          <div class="services-intro-image-frame">
            <img src="<?php echo esc_url( home_url( '/wp-content/uploads/2026/07/services-intro-overview.png' ) ); ?>" 
                 alt="فرآیند مهندسی، طراحی CAD و انطباق کارگاهی ماشین دیزاین" 
                 loading="lazy" 
                 width="600" 
                 height="400">
            <div class="cad-frame-crosshair cad-top-left" aria-hidden="true"></div>
            <div class="cad-frame-crosshair cad-top-right" aria-hidden="true"></div>
          </div>

          <!-- Matching Floating Badge (Home Page Section 2 Style) -->
          <div class="services-floating-badge">
            <div class="badge-accent-icon" aria-hidden="true">
              <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                <path d="M12 2v4M12 18v4M4.93 4.93l2.83 2.83M16.24 16.24l2.83 2.83M2 12h4M18 12h4M4.93 19.07l2.83-2.83M16.24 7.76l2.83-2.83"/>
                <circle cx="12" cy="12" r="4"/>
              </svg>
            </div>
            <div class="badge-text">
              <strong>یکپارچگی مهندسی و انطباق کارگاهی</strong>
              <span>همبستگی مستقیم مدل سه‌بعدی CAD با واقعیت‌های ساخت و ماشین‌کاری</span>
            </div>
          </div>
        </div>

        <!-- Action Buttons placed below the image to balance column height -->
        <div class="visual-col-actions">
          <a href="#pillars-grid" class="btn btn-primary">
            <span>بررسی ستون‌های شش‌گانه خدمات</span>
            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
              <path d="M12 5v14M19 12l-7 7-7-7"/>
            </svg>
          </a>
          <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="btn btn-outline">
            <span>درخواست مشاوره و بررسی فنی</span>
          </a>
        </div>
      </div>

      <!-- Content Column (Headings, Philosophy, 3 Feature Rows) -->
      <div class="services-intro-content-col">
        <div class="services-intro-header">
          <h2>رویکرد جامع ماشین دیزاین؛ پیوند محاسبات دقیق با واقعیت‌های اجرایی ساخت</h2>
          <p class="services-intro-lead">
            در صنعت ماشین‌سازی، فاصله میان یک مدل سه‌بعدی زیبای رایانه‌ای و یک ماشین پایدار و بدون لرزش در کف کارخانه بسیار زیاد است. خدمات ماشین دیزاین بر مبنای پر کردن همین شکاف مهندسی شکل گرفته است.
          </p>
          <p class="services-intro-body">
            تیم ما خدمات خود را به ترسیم نقشه‌های تئوری محدود نمی‌کند. ما با ترکیب محاسبات دینامیکی، شبیه‌سازی اجزای محدود (FEA)، رعایت اصول طراحی برای ساخت و مونتاژ اقتصادی (DFMA) و نظارت مستقیم کارگاهی، خطوط تولیدی خلق می‌کنیم که از روز اول با بالاترین راندمان و حداقل توقف ناخواسته به بهره‌برداری برسند.
          </p>
        </div>

        <!-- 3 Feature Highlight Rows -->
        <div class="services-intro-features">
          <div class="intro-feature-row">
            <div class="feature-text">
              <h4>طراحی با رویکرد متریال و قطعات در دسترس بازار ایران</h4>
              <p>انتخاب بیرینگ‌ها، پروفیل‌های فولادی و سیستم‌های محرک بر اساس زنجیره تأمین واقعی برای تضمین دسترسی آسان به قطعات یدکی در آینده.</p>
            </div>
          </div>

          <div class="intro-feature-row">
            <div class="feature-text">
              <h4>تلرانس‌گذاری هندسی (GD&amp;T) و تضمین مونتاژ بدون انحراف</h4>
              <p>تدوین نقشه‌های دقیق ماشین‌کاری با انطباقات دقیق تا در زمان مونتاژ کارگاهی هیچ قطعه‌ای نیازمند اصلاح دستی یا دوباره‌کاری نباشد.</p>
            </div>
          </div>

          <div class="intro-feature-row">
            <div class="feature-text">
              <h4>نظارت کارگاهی، تست‌های FAT و تحویل تا راه‌اندازی خط</h4>
              <p>حضور در فرآیند ساخت، تست کارگاهی پیش از تحویل و راه‌اندازی نهایی در خط با پایبندی ۱۰۰٪ به قراردادهای عدم افشا (NDA).</p>
            </div>
          </div>
        </div>

      </div>

    </div>
  </div>
</section>

<!-- ========================================================================
     3. THE 6 FLAGSHIP SERVICE PILLARS GRID
     ======================================================================== -->
<section class="services-section-wrap" id="pillars-grid" aria-label="ستون‌های ۶ گانه خدمات">
  <div class="container">
    
    <div class="services-section-header">
      <h2>ستون‌های شش‌گانه خدمات تخصصی ماشین دیزاین</h2>
      <p>
        هر دپارتمان به صورت تخصصی برای پاسخگویی به چالش‌های ملموس کارخانجات، از طراحی خط تولید نو تا رفع توقفات ناخواسته و بهینه‌سازی زنجیره تأمین ماشین‌آلات ساختاربندی شده است.
      </p>
    </div>

    <div class="pillars-grid-container">

      <!-- PILLAR 01 -->
      <article class="pillar-card-flagship">
        <div>
          <div class="pillar-card-top">
            <span class="pillar-num-badge mono">01 // PILLAR</span>
            <div class="pillar-icon-box" aria-hidden="true">
              <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                <circle cx="12" cy="12" r="3"/>
                <path d="M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 0 1 0 2.83 2 2 0 0 1-2.83 0l-.06-.06a1.65 1.65 0 0 0-1.82-.33 1.65 1.65 0 0 0-1 1.51V21a2 2 0 0 1-2 2 2 2 0 0 1-2-2v-.09A1.65 1.65 0 0 0 9 19.4a1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 0 1-2.83 0 2 2 0 0 1 0-2.83l.06-.06a1.65 1.65 0 0 0 .33-1.82 1.65 1.65 0 0 0-1.51-1H3a2 2 0 0 1-2-2 2 2 0 0 1 2-2h.09A1.65 1.65 0 0 0 4.6 9a1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 0 1 0-2.83 2 2 0 0 1 2.83 0l.06.06a1.65 1.65 0 0 0 1.82.33H9a1.65 1.65 0 0 0 1-1.51V3a2 2 0 0 1 2-2 2 2 0 0 1 2 2v.09a1.65 1.65 0 0 0 1 1.51 1.65 1.65 0 0 0 1.82-.33l.06-.06a2 2 0 0 1 2.83 0 2 2 0 0 1 0 2.83l-.06.06a1.65 1.65 0 0 0-.33 1.82V9a1.65 1.65 0 0 0 1.51 1H21a2 2 0 0 1 2 2 2 2 0 0 1-2 2h-.09a1.65 1.65 0 0 0-1.51 1z"/>
              </svg>
            </div>
          </div>
          <h3 class="pillar-card-title">طراحی ماشین‌آلات و خطوط تولید (DFMA)</h3>
          <span class="pillar-card-subtitle">INDUSTRIAL MACHINERY &amp; PACKAGING DESIGN</span>
          <p class="pillar-card-desc">
            طراحی جامع مکانیزم‌های صنعتی، خطوط بسته‌بندی، ماشین‌آلات صنایع غذایی و دارویی و سیستم‌های کانوایر منطبق بر فلسفه طراحی برای ساخت و مونتاژ اقتصادی (DFMA).
          </p>
          <ul class="pillar-capabilities-list">
            <li>
              <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg>
              <span>طراحی خطوط بسته‌بندی پیلوپک، وکیوم و کارتونینگ</span>
            </li>
            <li>
              <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg>
              <span>کانوایرهای مدولار، رولری، اسپیرال و بلت با استانداردهای بهداشتی</span>
            </li>
            <li>
              <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg>
              <span>مهندسی معکوس تجهیزات تحریمی و اسکن سه‌بعدی نوری</span>
            </li>
          </ul>
          <div class="pillar-tags-wrap">
            <span class="pillar-tag">صنایع غذایی</span>
            <span class="pillar-tag">بسته‌بندی</span>
            <span class="pillar-tag">کانوایر</span>
            <span class="pillar-tag">DFMA</span>
            <span class="pillar-tag">SolidWorks</span>
          </div>
        </div>
        <a href="<?php echo esc_url( home_url( '/services/machine-design/' ) ); ?>" class="pillar-btn-link">
          <span>مشاهده دپارتمان طراحی ماشین‌آلات</span>
          <span class="mono">←</span>
        </a>
      </article>

      <!-- PILLAR 02 -->
      <article class="pillar-card-flagship">
        <div>
          <div class="pillar-card-top">
            <span class="pillar-num-badge mono">02 // PILLAR</span>
            <div class="pillar-icon-box" aria-hidden="true">
              <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                <polyline points="22 12 18 12 15 21 9 3 6 12 2 12"/>
              </svg>
            </div>
          </div>
          <h3 class="pillar-card-title">مشاوره فنی، عیب‌یابی خط و آنالیز ارتعاشات</h3>
          <span class="pillar-card-subtitle">VIBRATION ANALYSIS &amp; PLANT TROUBLESHOOTING</span>
          <p class="pillar-card-desc">
            پایش وضعیت (CM)، آنالیز طیف فرکانسی ارتعاشات FFT، بالانس دینامیکی درجا، رفع خرابی تکرارشونده بیرینگ‌ها و تطبیق ایمنی کارگاه با استاندارد ISO 12100.
          </p>
          <ul class="pillar-capabilities-list">
            <li>
              <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg>
              <span>عیب‌یابی سریع و رفع توقف ناخواسته خطوط تولید</span>
            </li>
            <li>
              <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg>
              <span>آنالیز ارتعاشات، تشخیص نابالانسی و خرابی بیرینگ و گیربکس</span>
            </li>
            <li>
              <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg>
              <span>بالانس درجا روتورها و فن‌های صنعتی بدون دمونتاژ</span>
            </li>
          </ul>
          <div class="pillar-tags-wrap">
            <span class="pillar-tag">پایش وضعیت CM</span>
            <span class="pillar-tag">آنالیز ارتعاشات</span>
            <span class="pillar-tag">بالانس درجا</span>
            <span class="pillar-tag">ایمنی ISO 12100</span>
          </div>
        </div>
        <a href="<?php echo esc_url( home_url( '/services/factory-troubleshooting/' ) ); ?>" class="pillar-btn-link">
          <span>مشاهده دپارتمان عیب‌یابی و ارتعاشات</span>
          <span class="mono">←</span>
        </a>
      </article>

      <!-- PILLAR 03 -->
      <article class="pillar-card-flagship">
        <div>
          <div class="pillar-card-top">
            <span class="pillar-num-badge mono">03 // PILLAR</span>
            <div class="pillar-icon-box" aria-hidden="true">
              <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/><polyline points="14 2 14 8 20 8"/><line x1="16" y1="13" x2="8" y2="13"/><line x1="16" y1="17" x2="8" y2="17"/><polyline points="10 9 9 9 8 9"/>
              </svg>
            </div>
          </div>
          <h3 class="pillar-card-title">تحقیق و توسعه (R&amp;D) و نمونه‌سازی سریع</h3>
          <span class="pillar-card-subtitle">INDUSTRIAL R&amp;D, DFMEA &amp; PROTOTYPING</span>
          <p class="pillar-card-desc">
            همراهی با تیم‌های توسعه محصول کارخانجات، امکان‌سنجی فنی-اقتصادی خطوط، اجرای DFMEA سیستماتیک و ساخت پروتوتایپ‌های دقیق پیش از سرمایه‌گذاری انبوه.
          </p>
          <ul class="pillar-capabilities-list">
            <li>
              <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg>
              <span>امکان‌سنجی فنی، برآورد استهلاک و نرخ بازگشت سرمایه (ROI)</span>
            </li>
            <li>
              <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg>
              <span>شناسایی خطرات بالقوه طراحی با ماتریس DFMEA</span>
            </li>
            <li>
              <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg>
              <span>ساخت پروتوتایپ کاربردی و تست‌های مکانیکی بارگذاری</span>
            </li>
          </ul>
          <div class="pillar-tags-wrap">
            <span class="pillar-tag">تحقیق و توسعه R&amp;D</span>
            <span class="pillar-tag">DFMEA</span>
            <span class="pillar-tag">پروتوتایپ</span>
            <span class="pillar-tag">تست بارگذاری</span>
          </div>
        </div>
        <a href="<?php echo esc_url( home_url( '/services/rd-prototyping/' ) ); ?>" class="pillar-btn-link">
          <span>مشاهده دپارتمان R&amp;D و نمونه‌سازی</span>
          <span class="mono">←</span>
        </a>
      </article>

      <!-- PILLAR 04 -->
      <article class="pillar-card-flagship">
        <div>
          <div class="pillar-card-top">
            <span class="pillar-num-badge mono">04 // PILLAR</span>
            <div class="pillar-icon-box" aria-hidden="true">
              <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                <path d="M4 19.5A2.5 2.5 0 0 1 6.5 17H20"/>
                <path d="M6.5 2H20v20H6.5A2.5 2.5 0 0 1 4 19.5v-15A2.5 2.5 0 0 1 6.5 2z"/>
              </svg>
            </div>
          </div>
          <h3 class="pillar-card-title">آموزش و منتورشیپ فردی: SolidWorks و FEA</h3>
          <span class="pillar-card-subtitle">ENGINEERING MENTORSHIP: SOLIDWORKS &amp; ANSYS</span>
          <p class="pillar-card-desc">
            برنامه کوچینگ و منتورشیپ خصوصی یک‌به‌یک ویژه مهندسان مکانیک و طراحان صنعتی با تمرکز بر شبیه‌سازی FEA در ANSYS، سالیدورکس پیشرفته و استانداردهای GD&amp;T.
          </p>
          <ul class="pillar-capabilities-list">
            <li>
              <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg>
              <span>مدل‌سازی پیشرفته سطوح (Surfacing) و ورق‌کاری صنعتی</span>
            </li>
            <li>
              <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg>
              <span>تحلیل تنش، خستگی، کمانش و مودال در ANSYS Workbench</span>
            </li>
            <li>
              <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg>
              <span>تلرانس‌گذاری هندسی و ابعادی طبق استاندارد ASME Y14.5</span>
            </li>
          </ul>
          <div class="pillar-tags-wrap">
            <span class="pillar-tag">منتورشیپ ۱به۱</span>
            <span class="pillar-tag">SolidWorks</span>
            <span class="pillar-tag">ANSYS FEA</span>
            <span class="pillar-tag">تلرانس GD&amp;T</span>
          </div>
        </div>
        <a href="<?php echo esc_url( home_url( '/services/engineering-mentorship/' ) ); ?>" class="pillar-btn-link">
          <span>مشاهده سرفصل‌ها و رزرو منتورینگ</span>
          <span class="mono">←</span>
        </a>
      </article>

      <!-- PILLAR 05 -->
      <article class="pillar-card-flagship">
        <div>
          <div class="pillar-card-top">
            <span class="pillar-num-badge mono">05 // PILLAR</span>
            <div class="pillar-icon-box" aria-hidden="true">
              <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/>
              </svg>
            </div>
          </div>
          <h3 class="pillar-card-title">آموزش سازمانی و ارتقای تیم‌های فنی کارخانجات</h3>
          <span class="pillar-card-subtitle">CORPORATE WORKFORCE &amp; TECHNICAL TRAINING</span>
          <p class="pillar-card-desc">
            طراحی و برگزاری کارگاه‌های آموزشی تخصصی در محل کارخانه با هدف ارتقای مهارت نقشه‌خوانی صنعتی پرسنل نت، تکنسین‌ها و استانداردسازی فرآیند ساخت و مونتاژ.
          </p>
          <ul class="pillar-capabilities-list">
            <li>
              <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg>
              <span>نقشه‌خوانی صنعتی، علائم جوشکاری و زبری سطوح DIN/ISO</span>
            </li>
            <li>
              <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg>
              <span>اصول علمی نگهداری و تعمیرات پیشگیرانه (PM)</span>
            </li>
            <li>
              <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg>
              <span>تدوین فرآیندبرگه ساخت (OPC) و چک‌لیست‌های کنترل کیفیت</span>
            </li>
          </ul>
          <div class="pillar-tags-wrap">
            <span class="pillar-tag">آموزش کارخانه‌ای</span>
            <span class="pillar-tag">نقشه‌خوانی صنعتی</span>
            <span class="pillar-tag">استاندارد DIN/ISO</span>
            <span class="pillar-tag">نت PM</span>
          </div>
        </div>
        <a href="<?php echo esc_url( home_url( '/services/corporate-training/' ) ); ?>" class="pillar-btn-link">
          <span>مشاهده دوره‌ها و اعزام مدرس به کارخانه</span>
          <span class="mono">←</span>
        </a>
      </article>

      <!-- PILLAR 06 -->
      <article class="pillar-card-flagship">
        <div>
          <div class="pillar-card-top">
            <span class="pillar-num-badge mono">06 // PILLAR</span>
            <div class="pillar-icon-box" aria-hidden="true">
              <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                <circle cx="12" cy="12" r="10"/><line x1="2" y1="12" x2="22" y2="12"/><path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"/>
              </svg>
            </div>
          </div>
          <h3 class="pillar-card-title">مشاوره و کارشناسی خرید ماشین‌آلات (چین و دبی)</h3>
          <span class="pillar-card-subtitle">MACHINERY PROCUREMENT &amp; INSPECTION</span>
          <p class="pillar-card-desc">
            بازرسی فنی در کارخانجات سازنده چین و امارات، آزمون پذیرش کارخانه (FAT)، سنجش استهلاک خطوط تولید دست‌دوم و استوک، و تدوین ضمائم فنی قرارداد خرید و RFQ.
          </p>
          <ul class="pillar-capabilities-list">
            <li>
              <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg>
              <span>ممیزی فیزیکی و آزمون عملکرد دستگاه زیر بار در مبدا چین/دبی</span>
            </li>
            <li>
              <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg>
              <span>کارشناسی سلامت ریل‌ها، اسپیندل و گیربکس ماشین‌آلات دست‌دوم</span>
            </li>
            <li>
              <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg>
              <span>نگارش الزامات فنی قرارداد خرید و نظارت بر پکینگ صادراتی</span>
            </li>
          </ul>
          <div class="pillar-tags-wrap">
            <span class="pillar-tag">بازرسی چین و دبی</span>
            <span class="pillar-tag">تست عملکرد FAT</span>
            <span class="pillar-tag">کارشناسی دست‌دوم</span>
            <span class="pillar-tag">تدوین RFQ</span>
          </div>
        </div>
        <a href="<?php echo esc_url( home_url( '/services/machinery-inspection/' ) ); ?>" class="pillar-btn-link">
          <span>مشاهده خدمات بازرسی و کارشناسی خرید</span>
          <span class="mono">←</span>
        </a>
      </article>

    </div>

  </div>
</section>

<!-- ========================================================================
     4. 4-STAGE SYSTEMATIC ENGINEERING WORKFLOW
     ======================================================================== -->
<section class="workflow-section-block" aria-label="فرآیند اجرای مهندسی">
  <div class="container">
    
    <div style="text-align:center; max-width:760px; margin:0 auto;">
      <span class="page-hero-badge">
        <span class="pulse-indicator"></span>
        <span class="mono">ENGINEERING WORKFLOW</span>
      </span>
      <h2 style="font-size:clamp(1.8rem, 2.8vw, 2.2rem); font-weight:900; margin-bottom:14px;">فرآیند سیستماتیک اجرای پروژه در ماشین دیزاین</h2>
      <p style="color:#94a3b8; font-size:1.05rem; line-height:1.8;">
        کلیه خدمات ماشین دیزاین بر اساس استاندارد ۴ مرحله‌ای یکپارچه از کانسپت تا تحویل در محل کارخانه با بالاترین قابلیت اطمینان انجام می‌پذیرد.
      </p>
    </div>

    <div class="workflow-grid-4">
      
      <div class="workflow-card">
        <h4>کانسپت و مدل CAD سه‌بعدی</h4>
        <p>دریافت نیازمندی‌ها، شبیه‌سازی مکانیزم در SolidWorks، طراحی قطعات با دیدگاه DFMA و تهیه اولیه لیست قطعات (BOM).</p>
      </div>

      <div class="workflow-card">
        <h4>شبیه‌سازی و آنالیز المان محدود FEA</h4>
        <p>صحت‌سنجی تنش‌های استاتیکی، خستگی قطعات حساس، تحلیل ارتعاشات و بهینه‌سازی جرم در ANSYS پیش از ساخت فیزیکی.</p>
      </div>

      <div class="workflow-card">
        <h4>نمونه‌سازی سریع و تست عملکرد</h4>
        <p>ساخت قطعات اولیه با پرینت سه‌بعدی صنعتی و ماشین‌کاری CNC دقیق جهت بررسی تجربی مونتاژپذیری و تست بارگذاری.</p>
      </div>

      <div class="workflow-card">
        <h4>پکیج ساخت، مونتاژ و تحویل کارخانه</h4>
        <p>ارائه نقشه‌های ۲ بعدی با تلرانس GD&amp;T، فرآیندبرگه ساخت (OPC)، مونتاژ نهایی و تحویل با گارانتی کارکرد به کارفرما.</p>
      </div>

    </div>

  </div>
</section>

<!-- ========================================================================
     5. SERVICE FINDER MATRIX FOR PLANT MANAGERS
     ======================================================================== -->
<section class="service-finder-section" aria-label="راهنمای سریع انتخاب خدمت">
  <div class="container">
    
    <div class="services-section-header" style="margin-bottom:32px;">
      <h2>راهنمای سریع انتخاب خدمت برای مدیران صنایع</h2>
      <p>بر اساس چالش فوری کارخانه یا خط تولید خود، مسیر مستقیم مهندسی را انتخاب نمایید:</p>
    </div>

    <div class="finder-grid-2x2">
      
      <div class="finder-item-box">
        <div class="finder-icon">
          <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
            <polygon points="13 2 3 14 12 14 11 22 21 10 12 10 13 2"/>
          </svg>
        </div>
        <div class="finder-content">
          <h4>خط تولید دچار توقف، لرزش غیرعادی یا شکست یاتاقان شده؟</h4>
          <p>اعزام فوری کارشناس آنالیز ارتعاشات، بالانس دینامیکی درجا و رفع عیوب مکانیکی بدون نیاز به توقف طولانی پلنت.</p>
          <a href="<?php echo esc_url( home_url( '/services/factory-troubleshooting/' ) ); ?>" class="finder-link-action">
            <span>درخواست اعزام کارشناس عیب‌یابی</span>
            <span class="mono">←</span>
          </a>
        </div>
      </div>

      <div class="finder-item-box">
        <div class="finder-icon">
          <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
            <circle cx="12" cy="12" r="3"/>
            <path d="M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 0 1 0 2.83 2 2 0 0 1-2.83 0l-.06-.06a1.65 1.65 0 0 0-1.82-.33 1.65 1.65 0 0 0-1 1.51V21a2 2 0 0 1-2 2 2 2 0 0 1-2-2v-.09A1.65 1.65 0 0 0 9 19.4a1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 0 1-2.83 0 2 2 0 0 1 0-2.83l.06-.06a1.65 1.65 0 0 0 .33-1.82 1.65 1.65 0 0 0-1.51-1H3a2 2 0 0 1-2-2 2 2 0 0 1 2-2h.09A1.65 1.65 0 0 0 4.6 9a1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 0 1 0-2.83 2 2 0 0 1 2.83 0l.06.06a1.65 1.65 0 0 0 1.82.33H9a1.65 1.65 0 0 0 1-1.51V3a2 2 0 0 1 2-2 2 2 0 0 1 2 2v.09a1.65 1.65 0 0 0 1 1.51 1.65 1.65 0 0 0 1.82-.33l.06-.06a2 2 0 0 1 2.83 0 2 2 0 0 1 0 2.83l-.06.06a1.65 1.65 0 0 0-.33 1.82V9a1.65 1.65 0 0 0 1.51 1H21a2 2 0 0 1 2 2 2 2 0 0 1-2 2h-.09a1.65 1.65 0 0 0-1.51 1z"/>
          </svg>
        </div>
        <div class="finder-content">
          <h4>نیاز به طراحی دستگاه سفارشی یا کانوایر اختصاصی دارید؟</h4>
          <p>طراحی از کانسپت تا ساخت خطوط بسته‌بندی، مکانیزم‌های اتوماسیون و سیستم‌های انتقال مواد با استانداردهای DFMA.</p>
          <a href="<?php echo esc_url( home_url( '/services/machine-design/' ) ); ?>" class="finder-link-action">
            <span>استعلام هزینه و زمان طراحی دستگاه</span>
            <span class="mono">←</span>
          </a>
        </div>
      </div>

      <div class="finder-item-box">
        <div class="finder-icon">
          <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
            <circle cx="12" cy="12" r="10"/><line x1="2" y1="12" x2="22" y2="12"/><path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"/>
          </svg>
        </div>
        <div class="finder-content">
          <h4>قصد خرید یا واردات ماشین‌آلات صنعتی از چین یا دبی دارید؟</h4>
          <p>کارشناسی حضوری و تست FAT در کارخانه سازنده خارجی پیش از حواله ارزی و تضمین سلامت تجهیزات استوک و نو.</p>
          <a href="<?php echo esc_url( home_url( '/services/machinery-inspection/' ) ); ?>" class="finder-link-action">
            <span>هماهنگی بازرسی فنی در چین/دبی</span>
            <span class="mono">←</span>
          </a>
        </div>
      </div>

      <div class="finder-item-box">
        <div class="finder-icon">
          <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
            <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/>
          </svg>
        </div>
        <div class="finder-content">
          <h4>نیاز به ارتقای مهارت تیم فنی و نقشه‌خوانی پرسنل کارخانه دارید؟</h4>
          <p>برگزاری دوره‌های تخصصی کارگاهی در محل کارخانه متناسب با نیاز خط تولید شما با ارائه مستندات و چک‌لیست‌های DIN.</p>
          <a href="<?php echo esc_url( home_url( '/services/corporate-training/' ) ); ?>" class="finder-link-action">
            <span>درخواست سرفصل آموزش سازمانی</span>
            <span class="mono">←</span>
          </a>
        </div>
      </div>

    </div>

  </div>
</section>

<!-- ========================================================================
     6. CONVERSION & NDA ASSURANCE CALLOUT (.md-nda-cta)
     ======================================================================== -->
<style>
/* Scoped NDA Conversion Banner (.md-nda-cta) */
.md-nda-cta {
  background: var(--color-primary-dark, #0a0e17) !important;
  border-radius: 16px !important;
  border: 1px solid rgba(140, 231, 12, 0.3) !important; /* taste-skill-ignore */
  padding: 44px 40px !important;
  margin: 64px 0 32px !important;
  position: relative !important;
  overflow: hidden !important;
}
.md-nda-cta::before {
  content: "";
  position: absolute;
  top: 0;
  right: 0;
  width: 100%;
  height: 4px;
  background: #8ce70c;
}
.md-nda-cta .md-nda-text-wrap {
  text-align: right;
}
.md-nda-cta .md-nda-badge {
  display: inline-flex;
  align-items: center;
  color: #A3E635 !important;
  background: rgba(163, 230, 53, 0.12);
  border: 1px solid rgba(163, 230, 53, 0.3); /* taste-skill-ignore */
  padding: 4px 10px;
  border-radius: 4px;
  font-family: var(--font-tech, monospace); /* taste-skill-ignore */
  font-size: 0.78rem;
  font-weight: 700;
  letter-spacing: 0.04em;
  margin-bottom: 12px;
}
.md-nda-cta h2,
.md-nda-cta h3,
.md-nda-cta .md-nda-title {
  color: #FFFFFF !important;
  font-size: clamp(1.3rem, 2vw, 1.65rem) !important;
  font-weight: 800 !important;
  line-height: 1.4 !important;
  margin: 0 0 12px 0 !important;
}
.md-nda-cta p,
.md-nda-cta .md-nda-desc {
  color: #CBD5E1 !important;
  font-size: 0.95rem !important;
  line-height: 1.8 !important;
  margin: 0 !important;
}
.md-nda-cta .md-nda-btn-rfq {
  background: #8ce70c !important;
  color: #0F172A !important;
  font-weight: 800 !important;
  white-space: nowrap !important;
  padding: 14px 28px !important;
  border: none !important;
  border-radius: 6px !important;
  text-decoration: none !important;
  display: inline-flex;
  align-items: center;
  justify-content: center;
  gap: 8px;
  transition: opacity 0.2s ease, transform 0.2s ease;
}
.md-nda-cta .md-nda-btn-rfq:hover {
  opacity: 0.92;
}
.md-nda-cta .md-nda-btn-rfq * {
  color: #0F172A !important;
}
.md-nda-cta .md-nda-btn-call {
  background: transparent !important;
  color: #FFFFFF !important;
  border: 1px solid rgba(255, 255, 255, 0.24) !important; /* taste-skill-ignore */
  font-weight: 700 !important;
  white-space: nowrap !important;
  padding: 14px 24px !important;
  border-radius: 6px !important;
  text-decoration: none !important;
  display: inline-flex;
  align-items: center;
  justify-content: center;
  gap: 8px;
  transition: color 0.2s ease, border-color 0.2s ease;
}
.md-nda-cta .md-nda-btn-call svg {
  stroke: currentColor;
}
.md-nda-cta .md-nda-btn-call:hover {
  border-color: #A3E635 !important;
  color: #A3E635 !important;
}
@media (min-width: 1024px) {
  .md-nda-cta {
    display: flex !important;
    align-items: center !important;
    justify-content: space-between !important;
    gap: 2.5rem !important;
  }
  .md-nda-cta .md-nda-text-wrap {
    max-width: 620px !important;
    text-align: right !important;
  }
  .md-nda-cta .md-nda-actions-wrap {
    flex-shrink: 0 !important;
    display: flex !important;
    align-items: center !important;
    gap: 12px !important;
  }
}
@media (max-width: 1023.98px) and (min-width: 768px) {
  .md-nda-cta {
    display: flex !important;
    flex-direction: column !important;
    align-items: stretch !important;
    gap: 1.75rem !important;
  }
  .md-nda-cta .md-nda-actions-wrap {
    display: flex !important;
    gap: 12px !important;
    align-items: center !important;
  }
}
@media (max-width: 767.98px) {
  .md-nda-cta {
    padding: 28px 20px !important;
    display: flex !important;
    flex-direction: column !important;
    align-items: stretch !important;
    gap: 1.5rem !important;
  }
  .md-nda-cta .md-nda-actions-wrap {
    display: flex !important;
    flex-direction: column !important;
    gap: 12px !important;
    width: 100% !important;
  }
  .md-nda-cta .md-nda-btn-rfq,
  .md-nda-cta .md-nda-btn-call {
    width: 100% !important;
    justify-content: center !important;
  }
}
</style>

<div class="container">
  <div class="conversion-nda-banner md-nda-cta">
    <div class="md-nda-text-wrap">
      <code class="md-nda-badge" dir="ltr">NDA PROTECTED</code>
      <h2 class="md-nda-title">شروع همکاری مهندسی تحت قرارداد محرمانگی (NDA)</h2>
      <p class="md-nda-desc">
        اسناد فنی، نقشه‌ها و داده‌های خط تولید شما ارزشمندترین سرمایه صنعتی کارخانه هستند. ماشین دیزاین متعهد است پیش از دریافت هرگونه فایل، توافق‌نامه رسمی و الزام‌آور عدم افشا (NDA) را با شما منعقد نماید.
      </p>
    </div>
    <div class="md-nda-actions-wrap">
      <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="btn btn-accent md-nda-btn-rfq">
        <span>ارسال نقشه و استعلام فنی (RFQ) ←</span>
      </a>
      <a href="tel:<?php echo esc_attr( md_tel_uri( md_get_contact( 'phone_primary', '۰۵۱-۳۷۶۰۰۰۰۰' ) ) ); ?>" class="btn md-nda-btn-call">
        <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" aria-hidden="true"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>
        <span>مشاوره تلفنی مستقیم</span>
      </a>
    </div>
  </div>
</div>

<!-- ========================================================================
     7. SEO STRUCTURED DATA (JSON-LD ItemList & Service Schema)
     ======================================================================== -->
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "ItemList",
  "name": "خدمات ۶ گانه مهندسی ماشین دیزاین",
  "description": "دپارتمان‌های شش‌گانه تخصصی طراحی ماشین‌آلات، پایش ارتعاشات، تحقیق و توسعه، آموزش و بازرسی خرید خارجی",
  "url": "<?php echo esc_url( home_url( '/services/' ) ); ?>",
  "itemListElement": [
    {
      "@type": "ListItem",
      "position": 1,
      "name": "طراحی ماشین‌آلات و خطوط تولید (DFMA)",
      "url": "<?php echo esc_url( home_url( '/services/machine-design/' ) ); ?>"
    },
    {
      "@type": "ListItem",
      "position": 2,
      "name": "مشاوره فنی، عیب‌یابی خط و آنالیز ارتعاشات کارخانجات",
      "url": "<?php echo esc_url( home_url( '/services/factory-troubleshooting/' ) ); ?>"
    },
    {
      "@type": "ListItem",
      "position": 3,
      "name": "مشاوره سازمانی، تحقیق و توسعه (R&D) و ساخت نمونه اولیه",
      "url": "<?php echo esc_url( home_url( '/services/rd-prototyping/' ) ); ?>"
    },
    {
      "@type": "ListItem",
      "position": 4,
      "name": "آموزش و منتورشیپ فردی: سالیدورکس، تحلیل FEA و GD&T",
      "url": "<?php echo esc_url( home_url( '/services/engineering-mentorship/' ) ); ?>"
    },
    {
      "@type": "ListItem",
      "position": 5,
      "name": "آموزش سازمانی و ارتقای تیم‌های فنی کارخانجات صنعتی",
      "url": "<?php echo esc_url( home_url( '/services/corporate-training/' ) ); ?>"
    },
    {
      "@type": "ListItem",
      "position": 6,
      "name": "مشاوره و کارشناسی خرید ماشین‌آلات صنعتی (چین و دبی)",
      "url": "<?php echo esc_url( home_url( '/services/machinery-inspection/' ) ); ?>"
    }
  ]
}
</script>

<?php
get_footer();
