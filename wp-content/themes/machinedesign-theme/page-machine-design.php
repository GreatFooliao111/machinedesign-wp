<?php
/**
 * Template Name: Machine Design Pillar (ستون ۱: طراحی ماشین‌آلات و خطوط تولید)
 * Template Post Type: page
 *
 * Description: Dedicated Landing Page for Pillar 01: Industrial Machinery & Assembly Lines (DFMA)
 * Follows Cyber-Mechanical Dark Design System + Ponytail Doctrine + Strict Symmetry Rules
 *
 * @package HelloElementor
 */

defined( 'ABSPATH' ) || exit;

get_header();
?>

<!-- ========================================================================
     1. PILLAR 01 HERO BANNER
     ======================================================================== -->
<section class="page-hero-banner pillar-hero-wrap" aria-label="هیدر طراحی ماشین‌آلات و خطوط تولید">
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
          <span class="breadcrumb-current" aria-current="page">طراحی ماشین‌آلات و خطوط تولید</span>
        </nav>

        <!-- Corporate Sub-badge -->
        <div class="page-hero-badge">
          <span class="pulse-indicator" aria-hidden="true"></span>
          <span class="mono">PILLAR 01 // DFMA &amp; MACHINERY ENGINEERING</span>
        </div>

        <!-- Main Page Title (Split in 2 Lines for Compact Width) -->
        <h1 class="page-hero-title pillar-hero-title-split">
          <span class="title-line-1">طراحی ماشین‌آلات صنعتی و خطوط تولید پیوسته</span>
          <span class="title-line-2 text-accent">و توسعه مکانیزم‌های خاص مهندسی (DFMA)</span>
        </h1>

        <!-- Summary Lead Text -->
        <div class="page-hero-excerpt">
          طراحی جامع مهندسی، مدل‌سازی سه‌بعدی CAD در SolidWorks، محاسبات سینماتیک و دینامیک، تحلیل المان محدود (FEA) و تحویل پکیج کامل نقشه‌های ساخت منطبق بر تلرانس‌گذاری هندسی GD&amp;T با رعایت کامل قابلیت ساخت و مونتاژ اقتصادی (DFMA).
        </div>

        <!-- Hero Action Buttons -->
        <div class="pillar-hero-actions">
          <a href="#rfq-section" class="btn btn-primary">
            <span>استعلام زمان و برآورد هزینه (RFQ)</span>
            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
              <path d="M5 12h14M12 5l7 7-7 7"/>
            </svg>
          </a>
          <a href="#machinery-types" class="btn btn-outline">
            <span>مشاهده دسته‌بندی ماشین‌آلات</span>
          </a>
        </div>
      </div>

      <!-- Left Column: Delta Robot 3D Interactive Stage (Animated AVIF & Differential HUD) -->
      <div class="pillar-hero-visual-col md-hero-visual-col">
        <?php if ( function_exists( 'md_render_hero_3d_stage' ) ) { md_render_hero_3d_stage( 'machine-design' ); } ?>
      </div>

    </div>
  </div>
</section>

<!-- ========================================================================
     2. INDUSTRIAL METRICS STRIP
     ======================================================================== -->
<section class="services-stats-strip pillar-stats-strip" aria-label="شاخص‌های دپارتمان طراحی ماشین‌آلات">
  <div class="container">
    <div class="services-stats-grid">
      
      <div class="stat-item-box">
        <div class="stat-icon-wrap" aria-hidden="true">
          <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2">
            <circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/>
          </svg>
        </div>
        <div>
          <span class="stat-value">۱۵۰+ پروژه</span>
          <span class="stat-label">ماشین‌آلات و مکانیزم‌های موفق صنعتی</span>
        </div>
      </div>

      <div class="stat-item-box">
        <div class="stat-icon-wrap" aria-hidden="true">
          <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2">
            <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/>
          </svg>
        </div>
        <div>
          <span class="stat-value">DFMA استاندارد</span>
          <span class="stat-label">کاهش هزینه‌های ساخت و دوباره‌کاری مونتاژ</span>
        </div>
      </div>

      <div class="stat-item-box">
        <div class="stat-icon-wrap" aria-hidden="true">
          <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2">
            <rect x="3" y="11" width="18" height="11" rx="2" ry="2"/><path d="M7 11V7a5 5 0 0 1 10 0v4"/>
          </svg>
        </div>
        <div>
          <span class="stat-value">GD&amp;T کامل</span>
          <span class="stat-label">نقشه‌های اجرایی با انطباقات تلرانسی ISO/DIN</span>
        </div>
      </div>

      <div class="stat-item-box">
        <div class="stat-icon-wrap" aria-hidden="true">
          <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2">
            <path d="M14.7 6.3a1 1 0 0 0 0 1.4l1.6 1.6a1 1 0 0 0 1.4 0l3.77-3.77a6 6 0 0 1-7.94 7.94l-6.91 6.91a2.12 2.12 0 0 1-3-3l6.91-6.91a6 6 0 0 1 7.94-7.94l-3.76 3.76z"/>
          </svg>
        </div>
        <div>
          <span class="stat-value">FAT &amp; SAT</span>
          <span class="stat-label">نظارت کارگاهی تا راه‌اندازی در خط تولید</span>
        </div>
      </div>

    </div>
  </div>
</section>
<?php if ( function_exists( 'md_render_pillar_jump_nav' ) ) { md_render_pillar_jump_nav( array( '#machinery-types' => 'دسته‌بندی تجهیزات', '#dfma-philosophy' => 'رویکرد DFMA', '#workflow-stages' => 'فرآیند اجرا', '#deliverables' => 'اسناد تحویلی', '#rfq-section' => 'ثبت استعلام فنی ←' ) ); } ?>


<!-- ========================================================================
     3. MACHINERY CATEGORIES & SPECS (دسته‌بندی ماشین‌آلات)
     ======================================================================== -->
<section class="machinery-categories-section" id="machinery-types" aria-label="دسته‌بندی ماشین‌آلات طراحی‌شده">
  <div class="container">
    
    <div class="services-section-header">
      <h2>دسته‌بندی تجهیزات و خطوط تولید تحت پوشش طراحی مهندسی</h2>
      <p>
        از کانسپت‌های کاملاً سفارشی تا سیستم‌های صنعتی تست‌شده با بالاترین ضریب اطمینان مکانیکی و ایمنی عملکردی.
      </p>
    </div>

    <div class="categories-grid-4">

      <!-- Category 01 -->
      <article class="category-spec-card">
        <div class="card-top-header">
          <span class="cat-num mono">FOOD &amp; PACKAGING</span>
          <div class="cat-icon-wrap" aria-hidden="true">
            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
              <path d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z"/>
            </svg>
          </div>
        </div>
        <h3>ماشین‌آلات صنایع غذایی، دارویی و بسته‌بندی</h3>
        <p>طراحی دستگاه‌های پرکن مایعات و پودر، توزین‌های مولتی‌هد، خطوط بسته‌بندی پیوسته، تری‌سیلر و شرینک پک با رعایت الزامات متریال استنلس استیل 304 و 316.</p>
        <ul class="cat-feature-list">
          <li>انطباق کامل با استانداردهای بهداشتی CIP/SIP</li>
          <li>بهینه‌سازی سیستم‌های محرک سروو و کنترل دقیق کورس</li>
          <li>طراحی شاسی‌های بدون درز و شستشوپذیر</li>
        </ul>
      </article>

      <!-- Category 02 -->
      <article class="category-spec-card">
        <div class="card-top-header">
          <span class="cat-num mono">MATERIAL HANDLING</span>
          <div class="cat-icon-wrap" aria-hidden="true">
            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
              <rect x="2" y="7" width="20" height="14" rx="2" ry="2"/><path d="M16 21V5a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v16"/>
            </svg>
          </div>
        </div>
        <h3>سیستم‌های کانوایر و انتقال مواد پیوسته</h3>
        <p>طراحی مهندسی انواع بلت کانوایر تخت و آجدار، رولر کانوایرهای محرک ثقلی و زنجیری، کانوایرهای مدولار پلاستیکی، اسکرو و باکت الواتورهای صنعتی سنگین.</p>
        <ul class="cat-feature-list">
          <li>محاسبات دقیق توان موتور، گشتاور و کشش نوار</li>
          <li>طراحی سیستم‌های رگلاژ، هدایت بار و سنسورینگ موقعیت</li>
          <li>کاهش سایش غلطک‌ها و تضمین عمر بلبرینگ‌ها</li>
        </ul>
      </article>

      <!-- Category 03 -->
      <article class="category-spec-card">
        <div class="card-top-header">
          <span class="cat-num mono">AUTOMATION &amp; MECHANISMS</span>
          <div class="cat-icon-wrap" aria-hidden="true">
            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
              <circle cx="12" cy="12" r="3"/><path d="M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 0 1 0 2.83 2 2 0 0 1-2.83 0l-.06-.06a1.65 1.65 0 0 0-1.82-.33 1.65 1.65 0 0 0-1 1.51V21a2 2 0 0 1-2 2 2 2 0 0 1-2-2v-.09A1.65 1.65 0 0 0 9 19.4a1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 0 1-2.83 0 2 2 0 0 1 0-2.83l.06-.06a1.65 1.65 0 0 0 .33-1.82 1.65 1.65 0 0 0-1.51-1H3a2 2 0 0 1-2-2 2 2 0 0 1 2-2h.09A1.65 1.65 0 0 0 4.6 9a1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 0 1 0-2.83 2 2 0 0 1 2.83 0l.06.06a1.65 1.65 0 0 0 1.82.33H9a1.65 1.65 0 0 0 1-1.51V3a2 2 0 0 1 2-2 2 2 0 0 1 2 2v.09a1.65 1.65 0 0 0 1 1.51 1.65 1.65 0 0 0 1.82-.33l.06-.06a2 2 0 0 1 2.83 0 2 2 0 0 1 0 2.83l-.06.06a1.65 1.65 0 0 0-.33 1.82V9a1.65 1.65 0 0 0 1.51 1H21a2 2 0 0 1 2 2 2 2 0 0 1-2 2h-.09a1.65 1.65 0 0 0-1.51 1z"/>
            </svg>
          </div>
        </div>
        <h3>مکانیزم‌های اختصاصی، فیدرها و ایستگاه‌های مونتاژ</h3>
        <p>سنتز مکانیزم‌های بادامکی، مفاصل ۴ میله‌ای، سیستم‌های جابجایی Pick &amp; Place پنوماتیک و سروو، ایندکسرهای دوار و فیدرهای ارتعاشی قطعات صنعتی.</p>
        <ul class="cat-feature-list">
          <li>شبیه‌سازی دینامیکی و آنالیز شتاب در نرم‌افزار SolidWorks Motion</li>
          <li>طراحی فیکسچرهای دقیق نگه‌دارنده و گریپرهای ارگونومیک</li>
          <li>کاهش ضربه و استهلاک در سیکل‌های کاری سرعت‌بالا</li>
        </ul>
      </article>

      <!-- Category 04 -->
      <article class="category-spec-card">
        <div class="card-top-header">
          <span class="cat-num mono">REVERSE ENGINEERING</span>
          <div class="cat-icon-wrap" aria-hidden="true">
            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
              <path d="M21.5 2v6h-6M21.34 15.57a10 10 0 1 1-.57-8.38l5.67-5.67"/>
            </svg>
          </div>
        </div>
        <h3>مهندسی معکوس و بومی‌سازی ماشین‌آلات وارداتی</h3>
        <p>اسکن سه‌بعدی و اندازه‌برداری CMM، متالورژی و آنالیز آلیاژها، بازسازی مدل CAD، اصلاح گلوگاه‌های طراحی اصلی و انطباق قطعات با زنجیره تأمین بازار ایران.</p>
        <ul class="cat-feature-list">
          <li>تغییر قطعات نایاب خارجی به اقلام استاندارد در دسترس داخلی</li>
          <li>رفع نواقص کارخانه‌ای دستگاه‌های اروپایی و چینی</li>
          <li>تولید بسته کامل نقشه‌های کارگاهی جهت ساخت موازی در کارخانجات</li>
        </ul>
      </article>

    </div>
  </div>
</section>

<!-- ========================================================================
     4. THE DFMA METHODOLOGY & SYMMETRICAL 2-COLUMN SECTION (قانون تقارن و عدم تداخل)
     ======================================================================== -->
<section class="pillar-dfma-section" id="dfma-philosophy" aria-label="رویکرد طراحی برای ساخت DFMA">
  <div class="container">
    <div class="services-intro-grid">
      
      <!-- Visual Column (Strict Symmetry: Top Bar, Stretched Image, Bottom Floating Badge, Actions) -->
      <div class="services-intro-visual-col">
        <div class="visual-col-top-bar">
          <span class="visual-col-meta mono">SOLIDWORKS &amp; ANSYS CERTIFIED</span>
        </div>

        <div class="services-intro-image-wrap">
          <div class="services-intro-image-frame">
            <img src="<?php echo esc_url( home_url( '/wp-content/uploads/2026/07/pillar1-machine-design-case.png' ) ); ?>" 
                 alt="مهندسی و طراحی اجزای ماشین‌آلات و گیربکس صنعتی" 
                 loading="lazy" 
                 width="600" 
                 height="420">
            <div class="cad-frame-crosshair cad-top-left" aria-hidden="true"></div>
            <div class="cad-frame-crosshair cad-top-right" aria-hidden="true"></div>
          </div>

          <!-- Matching Floating Badge (Home Page Section 2 Style) -->
          <div class="services-floating-badge">
            <div class="badge-accent-icon" aria-hidden="true">
              <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                <circle cx="12" cy="12" r="3"/>
                <path d="M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 0 1 0 2.83 2 2 0 0 1-2.83 0l-.06-.06a1.65 1.65 0 0 0-1.82-.33 1.65 1.65 0 0 0-1 1.51V21a2 2 0 0 1-2 2 2 2 0 0 1-2-2v-.09A1.65 1.65 0 0 0 9 19.4a1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 0 1-2.83 0 2 2 0 0 1 0-2.83l.06-.06a1.65 1.65 0 0 0 .33-1.82 1.65 1.65 0 0 0-1.51-1H3a2 2 0 0 1-2-2 2 2 0 0 1 2-2h.09A1.65 1.65 0 0 0 4.6 9a1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 0 1 0-2.83 2 2 0 0 1 2.83 0l.06.06a1.65 1.65 0 0 0 1.82.33H9a1.65 1.65 0 0 0 1-1.51V3a2 2 0 0 1 2-2 2 2 0 0 1 2 2v.09a1.65 1.65 0 0 0 1 1.51 1.65 1.65 0 0 0 1.82-.33l.06-.06a2 2 0 0 1 2.83 0 2 2 0 0 1 0 2.83l-.06.06a1.65 1.65 0 0 0-.33 1.82V9a1.65 1.65 0 0 0 1.51 1H21a2 2 0 0 1 2 2 2 2 0 0 1-2 2h-.09a1.65 1.65 0 0 0-1.51 1z"/>
              </svg>
            </div>
            <div class="badge-text">
              <strong>طراحی برای ساخت و مونتاژ اقتصادی (DFMA)</strong>
              <span>کاهش ۳۰٪ هزینه‌های تراشکاری و حذف خطاهای مونتاژ کارگاهی</span>
            </div>
          </div>
        </div>

        <!-- Action Buttons placed below the image to balance column height -->
        <div class="visual-col-actions">
          <a href="#rfq-section" class="btn btn-primary">
            <span>درخواست برآورد هزینه طراحی ماشین</span>
            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
              <path d="M5 12h14M12 5l7 7-7 7"/>
            </svg>
          </a>
          <a href="#workflow-stages" class="btn btn-outline">
            <span>مراحل ۴ گانه طراحی تا تحویل</span>
          </a>
        </div>
      </div>

      <!-- Content Column (Philosophy, SEO Copy, 3 Checkpoints) -->
      <div class="services-intro-content-col">
        <div class="services-intro-header">
          <h2>رویکرد DFMA؛ تفاوت یک نقشه کاغذی با ماشینی که در خط می‌درخشد</h2>
          <p class="services-intro-lead">
            بسیاری از طرح‌های مهندسی بر روی مانیتور بی‌نقص به نظر می‌رسند، اما در کارگاه تراشکاری به دلیل هزینه سرسام‌آور یا عدم امکان ماشین‌کاری به بن‌بست می‌خورند. متدولوژی ماشین دیزاین این چالش را از ریشه حل می‌کند.
          </p>
          <p class="services-intro-body">
            ما قطعات را به گونه‌ای طراحی می‌کنیم که با حداقل تعداد ستاپ ماشین‌کاری CNC، کمترین دورریز ورق و متریال در دسترس بازار آهن ایران ساخته شوند. همچنین با تلرانس‌گذاری هندسی (GD&amp;T)، انطباقات شفت و یاتاقان‌ها را طوری تعیین می‌کنیم که در فاز مونتاژ هیچ قطعه‌ای نیازمند سوهان‌کاری دستی یا اصلاح کارگاهی نباشد.
          </p>
        </div>

        <!-- 3 Feature Highlight Rows -->
        <div class="services-intro-features">
          <div class="intro-feature-row">
            <div class="feature-text">
              <h4>انتخاب متریال و استاندارد قطعات در دسترس بازار آهن و صنعت ایران</h4>
              <p>استفاده از مقاطع استاندارد لوله، پروفیل‌های فولادی ST37/ST52، آلیاژهای Mo40/VCN و بیرینگ‌های استاندارد SKF/FAG موجود در بازار داخلی جهت تضمین سهولت ساخت و قطعات یدکی.</p>
            </div>
          </div>

          <div class="intro-feature-row">
            <div class="feature-text">
              <h4>کاهش هزینه‌های ساخت ماشین با تکنیک‌های بهینه‌سازی فرم قطعات</h4>
              <p>کاهش حجم براده‌برداری با جایگزینی قطعات جوشکاری‌شده صلب به جای بلوک‌های حجیم ماشین‌کاری و استفاده حداکثری از برش لیزر دقیق CNC به جای تراشکاری پرهزینه.</p>
            </div>
          </div>

          <div class="intro-feature-row">
            <div class="feature-text">
              <h4>تلرانس‌گذاری هندسی (GD&amp;T) طبق استاندارد ISO 1101</h4>
              <p>تعیین دقیق خطاهای تختی، هم‌محوری، تعامد و لنگی دورانی شفت‌ها برای تضمین کارکرد بی‌صدا، بدون ارتعاش و افزایش ۵ برابری طول عمر مفید یاتاقان‌ها.</p>
            </div>
          </div>
        </div>

      </div>

    </div>
  </div>
</section>

<!-- ========================================================================
     5. 4-STAGE SYSTEMATIC ENGINEERING WORKFLOW (فرآیند ۴ مرحله‌ای طراحی)
     ======================================================================== -->
<section class="pillar-workflow-section" id="workflow-stages" aria-label="فرآیند اجرای طراحی ماشین‌آلات">
  <div class="container">
    
    <div class="workflow-header-wrap">
      <h2>فرآیند سیستماتیک طراحی ماشین‌آلات از ایده تا راه‌اندازی کارخانه</h2>
      <p>
        نقشه راه شفاف، گام‌به‌گام و قابل پایش که اطمینان حاصل می‌کند کارفرما در تمام مراحل بر پیشرفت فنی و مالی پروژه اشراف کامل دارد.
      </p>
    </div>

    <div class="workflow-grid-4">
      
      <div class="workflow-card">
        <span class="workflow-step-num mono">STAGE // 01</span>
        <h4>دریافت URS و محاسبات تئوری</h4>
        <p>بررسی نیازهای فرآیندی کارفرما، تدوین مشخصات الزامی ماشین (URS)، تعیین سرعت و ظرفیت خط، و محاسبات سینماتیکی، توان موتور و گشتاور گیربکس‌ها.</p>
      </div>

      <div class="workflow-card">
        <span class="workflow-step-num mono">STAGE // 02</span>
        <h4>مدل‌سازی سه‌بعدی جامع CAD</h4>
        <p>طراحی تمام اجزا در نرم‌افزار SolidWorks، ایجاد مونتاژ دینامیکی، شبیه‌سازی حرکت (Motion Study) جهت کشف و رفع تداخلات ابعادی مکانیزم‌ها.</p>
      </div>

      <div class="workflow-card">
        <span class="workflow-step-num mono">STAGE // 03</span>
        <h4>شبیه‌سازی المان محدود (ANSYS FEA)</h4>
        <p>تحلیل تنش استاتیکی و دینامیکی شاسی، محاسبات فرکانس طبیعی جهت جلوگیری از تشدید (Resonance) و بهینه‌سازی ضریب ایمنی زیر بارگذاری‌های بحرانی.</p>
      </div>

      <div class="workflow-card">
        <span class="workflow-step-num mono">STAGE // 04</span>
        <h4>پکیج نقشه‌های کارگاهی و نظارت ساخت</h4>
        <p>تدوین نقشه‌های دو‌بعدی ساخت با جزئیات GD&amp;T، پارت‌لیست BOM خریدنی‌ها، فرآیندبرگه ساخت (OPC) و همراهی کارگاهی تا تست عملکرد آزمایشی (FAT).</p>
      </div>

    </div>

  </div>
</section>

<!-- ========================================================================
     6. DELIVERABLES PACKAGE TO CLIENT (پکیج تحویلی به کارفرما)
     ======================================================================== -->
<section class="deliverables-section" id="deliverables" aria-label="خروجی‌های تحویلی به کارفرما">
  <div class="container">
    
    <div class="services-section-header">
      <h2>پکیج نهایی اسناد مهندسی که به کارفرما تحویل داده می‌شود</h2>
      <p>
        مجموعه‌ای جامع و استاندارد از فایل‌های دیجیتال و نقشه‌های صنعتی که هر کارگاه تراشکاری یا کارخانه سازنده‌ای بدون نیاز به حضور طراح می‌تواند آن را بسازد.
      </p>
    </div>

    <div class="deliverables-grid-3">

      <div class="deliverable-box">
        <div class="deliv-icon" aria-hidden="true">
          <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
            <polygon points="12 2 2 7 12 12 22 7 12 2"/>
            <polyline points="2 17 12 22 22 17"/>
            <polyline points="2 12 12 17 22 12"/>
          </svg>
        </div>
        <h4>مدل سه‌بعدی کامل Native &amp; Neutral</h4>
        <p>ارائه فایل کامل سورس در نرم‌افزار SolidWorks به همراه خروجی‌های خنثی استاندارد STEP, IGES و Parasolid برای انتقال آسان به نرم‌افزارهای CAM ماشین‌کاری.</p>
      </div>

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
        <h4>آلبوم نقشه‌های دو‌بعدی ساخت GD&amp;T</h4>
        <p>دفترچه نقشه‌های اجرایی در فرمت‌های PDF و DWG، شامل نقشه‌های تک‌تک قطعات ماشین‌کاری، نقشه‌های مونتاژی و جوشکاری با جدول تلرانس‌های استاندارد بین‌المللی.</p>
      </div>

      <div class="deliverable-box">
        <div class="deliv-icon" aria-hidden="true">
          <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
            <path d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z"/>
            <polyline points="3.27 6.96 12 12.01 20.73 6.96"/>
            <line x1="12" y1="22.08" x2="12" y2="12"/>
          </svg>
        </div>
        <h4>فهرست کامل قطعات و خریدنی‌ها (BOM)</h4>
        <p>فایل اکسل جامع پارت‌لیست (Bill of Materials) با کدهای استاندارد تجاری قطعات، سایز پیچ و مهره‌ها، مدل بیرینگ‌ها، سیل‌ها و قطعات پنوماتیک موجود در بازار ایران.</p>
      </div>

    </div>

  </div>
</section>

<!-- ========================================================================
     7. HIGH-CONVERSION DUAL-PANEL RFQ & CONSULTATION (طراحی مرتب و دو ستونه متقارن)
     ======================================================================== -->
<section class="pillar-rfq-dual-section" id="rfq-section" aria-label="استعلام و ارسال مشخصات پروژه طراحی ماشین‌آلات">
  <div class="container">
    <div class="rfq-dual-grid">

      <!-- Column 1: Visual Incentive & Trust Showcase (شاخص‌های اعتماد صنعتی) -->
      <div class="rfq-incentive-panel">
        <div>
          <div class="rfq-trust-badge mono">
            <span class="rfq-led" aria-hidden="true"></span>
            <span>STRICT CONFIDENTIALITY // DFMA VERIFIED</span>
          </div>

          <h3 class="rfq-incentive-title">
            طراحی استاندارد، تضمین عدم تداخل ابعادی و خروجی ۱۰۰٪ ساختنی در کارگاه
          </h3>

          <p class="rfq-incentive-subtitle">
            پروژه ساخت یا بازطراحی ماشین صنعتی خود را به تیمی بسپارید که چالش‌های قطعه‌سازی، تلرانس‌های ماشین‌کاری و محدودیت‌های واقعی کارگاه‌های ایران را می‌شناسد.
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
                <h4>پیمان‌نامه رسمی محرمانگی (NDA دوطرفه)</h4>
                <p>تمامی مشخصات فنی، کاتالوگ‌ها، ایده‌ها و نقشه‌های کارفرما پیش از هرگونه بررسی تحت تعهد حقوقی حفظ اسرار صنعتی قرار می‌گیرد.</p>
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
                <h4>جلسه اولیه ارزیابی و امکان‌سنجی فنی (رایگان)</h4>
                <p>بررسی محاسبات مقدماتی توان، انتخاب مکانیزم و فرآیند ساخت توسط مهندس ارشد طراح ظرف حداکثر ۲۴ ساعت کاری.</p>
              </div>
            </div>

            <div class="rfq-incentive-item">
              <div class="rfq-incentive-icon" aria-hidden="true">
                <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2">
                  <line x1="12" y1="1" x2="12" y2="23"/>
                  <path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"/>
                </svg>
              </div>
              <div class="rfq-incentive-text">
                <h4>برآورد شفاف هزینه طراحی و ساخت (BOM &amp; CAPEX)</h4>
                <p>ارائه پروپوزال مهندسی تفکیک‌شده شامل مراحل مدل‌سازی CAD، تحلیل FEA، پکیج نقشه‌ها و نظارت بر ساخت بدون هزینه‌های پنهان.</p>
              </div>
            </div>
          </div>
        </div>

        <!-- Fast Track Phone Chip -->
        <?php 
        $pillar_phone = function_exists('md_get_contact') ? md_get_contact('phone', '') : '';
        $pillar_mobile = function_exists('md_get_contact') ? md_get_contact('mobile', '') : '';
        $display_phone = $pillar_phone ?: ($pillar_mobile ?: '۰۵۱-XXXXXXXX');
        $clean_phone = md_tel_uri( $display_phone );
        ?>
        <div class="rfq-direct-consult-chip">
          <div class="consult-chip-text">
            <span class="consult-chip-label">نیاز به مشاوره فوری یا هماهنگی جلسه در کارگاه مشهد دارید؟</span>
            <span class="consult-chip-title">گفتگوی مستقیم با مهندس حسین وطن‌دوست</span>
          </div>
          <a href="tel:<?php echo esc_attr($clean_phone); ?>" class="consult-phone-btn mono" dir="ltr" title="تماس مستقیم با کارشناس">
            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2">
              <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/>
            </svg>
            <span><?php echo esc_html($display_phone); ?></span>
          </a>
        </div>
      </div>

      <!-- Column 2: Streamlined Industrial Form Panel (ستون فرم منظم و متقارن) -->
      <div class="rfq-form-panel-custom">
        <div id="pillarRfqContainer">
          <div class="rfq-form-custom-header">
            <span class="rfq-form-tag mono">// FAST-TRACK MACHINE DESIGN INQUIRY</span>
            <h3>ثبت استعلام طراحی ماشین‌آلات و خطوط تولید</h3>
            <p>مشخصات اولیه دستگاه را ثبت فرمایید؛ پیش‌نویس توافق‌نامه محرمانگی (NDA) و برآورد زمان‌بندی ظرف ۲۴ ساعت کاری ارسال می‌گردد.</p>
          </div>

          <div id="pillarRfqNotice" class="rfq-hud-notice" style="display:none;" role="alert"></div>

          <form id="pillarRfqForm" class="rfq-form-grid-inner" method="POST">
            <input type="hidden" name="action" value="machinedesign_rfq_submit">
            <input type="hidden" name="source_pillar" value="machine-design">
            <input type="hidden" name="source_url" value="<?php echo esc_url( get_permalink() ); ?>">
            
            <div class="rfq-input-group">
              <label for="rfq-name">نام و نام خانوادگی / شرکت <span class="req-star">*</span></label>
              <input type="text" id="rfq-name" name="rfq_name" class="rfq-input-field" required placeholder="مثال: مهندس رضوانی - صنایع بسته‌بندی">
            </div>

            <div class="rfq-input-group">
              <label for="rfq-phone">شماره همراه مستقیم کارشناس <span class="req-star">*</span></label>
              <input type="tel" id="rfq-phone" name="rfq_phone" class="rfq-input-field" required placeholder="۰۹۱۲XXXXXXX" dir="ltr">
            </div>

            <div class="rfq-input-group rfq-field-full">
              <label for="rfq-service-type">نوع ماشین یا خط تولید مد نظر <span class="req-star">*</span></label>
              <select id="rfq-service-type" name="rfq_service_type" class="rfq-input-field" required>
                <option value="" disabled selected>انتخاب حوزه تخصصی ماشین‌آلات...</option>
                <option value="packaging_conveyor">خطوط بسته‌بندی پیوسته، کانوایرهای اتوماتیک و انتقال مواد</option>
                <option value="custom_mechanism">سنتز و طراحی مکانیزم‌های بادامکی، اهرمی و سینماتیک خاص</option>
                <option value="reverse_engineering">مهندسی معکوس و بومی‌سازی ماشین‌آلات و خطوط اروپایی</option>
                <option value="dfma_redesign">اصلاح، بازطراحی و بهینه‌سازی ماشین موجود جهت کاهش هزینه ساخت</option>
                <option value="full_production_line">طراحی جامع خط تولید صنعتی از کانسپت تا نقشه‌های کارگاهی</option>
              </select>
            </div>

            <div class="rfq-input-group rfq-field-full">
              <label for="rfq-stage">مرحله فعلی پروژه یا کانسپت دستگاه</label>
              <select id="rfq-stage" name="rfq_stage" class="rfq-input-field">
                <option value="" disabled selected>انتخاب مرحله فعلی پروژه...</option>
                <option value="raw_idea">ایده خام / نیاز به امکان‌سنجی، تدوین مشخصات (URS) و محاسبات</option>
                <option value="sample_available">نمونه فیزیکی یا کاتالوگ خارجی موجود است / نیاز به مهندسی معکوس</option>
                <option value="cad_in_progress">مدل‌سازی اولیه CAD انجام شده / نیاز به شبیه‌سازی FEA و نقشه‌های ساخت</option>
                <option value="drawing_ready">نقشه‌ها آماده است / نیاز به ممیزی تلرانس‌های GD&amp;T و نظارت بر ساخت</option>
              </select>
            </div>

            <div class="rfq-input-group rfq-field-full">
              <label for="rfq-desc">شرح مشخصات، ظرفیت تولید یا ابعاد دستگاه</label>
              <textarea id="rfq-desc" name="rfq_desc" class="rfq-input-field" rows="3" placeholder="ظرفیت خروجی خط (تعداد در ساعت/دقیقه)، ابعاد قطعه یا محصول و الزامات کلیدی کارفرما را بیان فرمایید..."></textarea>
            </div>

            <div class="rfq-field-full">
              <button type="submit" id="pillarRfqSubmitBtn" class="btn-rfq-submit-large">
                <span>ارسال مشخصات و دریافت پیش‌نویس قرارداد NDA</span>
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
                  <path d="M5 12h14M12 5l7 7-7 7"/>
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
            <div class="rfq-success-badge mono">// INQUIRY REGISTERED // MACHINE DESIGN SCHEDULED</div>
            <h4 class="rfq-success-title">استعلام پروژه طراحی با موفقیت ثبت گردید</h4>
            <div class="rfq-success-code-wrap">
              <span>کد رهگیری سیستمی:</span>
              <span id="rfqTrackingPill" class="rfq-tracking-pill mono">MD-DES-2026-0000</span>
            </div>
            <p class="rfq-success-desc">
              مشخصات اولیه دستگاه در دپارتمان طراحی ماشین‌آلات و خطوط تولید ماشین دیزاین ذخیره شد. مهندس حسین وطن‌دوست و تیم مهندسی ظرف حداکثر ۲۴ ساعت کاری جهت هماهنگی جلسه ارزیابی مقدماتی و پیش‌نویس NDA با شما تماس خواهند گرفت.
            </p>
            <button type="button" id="pillarRfqResetBtn" class="rfq-reset-btn">
              + ثبت استعلام پروژه دیگر
            </button>
          </div>
        </div>

        <!-- Security & NDA Guarantee Chip (Symmetrical to Fast-Track Phone Chip) -->
        <div class="rfq-form-guarantee-chip">
          <div class="guarantee-chip-text">
            <span class="consult-chip-label">استاندارد امنیت اطلاعات و حقوق معنوی</span>
            <span class="consult-chip-title">تضمین ۱۰۰٪ محرمانگی پروژه‌ها تحت پروتکل حقوقی NDA</span>
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
    submitBtn.innerHTML = '<span>در حال ثبت امن و دسته‌بندی استعلام...</span>';
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
      submitBtn.innerHTML = '<span>ارسال مشخصات و دریافت پیش‌نویس قرارداد NDA</span><svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14M12 5l7 7-7 7"/></svg>';

      if (data && data.success) {
        var code = data.data && (data.data.tracking_code || data.data.tracking) ? (data.data.tracking_code || data.data.tracking) : 'MD-DES-2026';
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
      submitBtn.innerHTML = '<span>ارسال مشخصات و دریافت پیش‌نویس قرارداد NDA</span><svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14M12 5l7 7-7 7"/></svg>';
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
