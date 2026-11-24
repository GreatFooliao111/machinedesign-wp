<?php
/**
 * Template Name: Pillar 6: Machinery Purchase Inspection (ستون ۶: مشاوره و کارشناسی خرید ماشین‌آلات صنعتی)
 * Template Post Type: page
 *
 * Description: Dedicated Landing Page for Pillar 06: Industrial Machinery Procurement, China & Dubai Factory Audits, Used Equipment Inspection & Technical Contract Drafting
 * Follows Cyber-Mechanical Dark Design System + Ponytail Doctrine + Strict Symmetry Rules
 *
 * @package HelloElementor
 */

defined( 'ABSPATH' ) || exit;

get_header();
?>

<!-- ========================================================================
     1. PILLAR 06 HERO BANNER & STATS STRIP
     ======================================================================== -->
<section class="page-hero-banner pillar-hero-wrap" aria-label="هیرو کارشناسی و مشاوره خرید ماشین‌آلات صنعتی">
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
          <span class="breadcrumb-current" aria-current="page">مشاوره و کارشناسی خرید ماشین‌آلات صنعتی</span>
        </nav>

        <!-- Corporate Sub-badge -->
        <div class="page-hero-badge">
          <span class="pulse-indicator" aria-hidden="true"></span>
          <span class="mono">PILLAR 06 // MACHINERY PROCUREMENT &amp; TECHNICAL INSPECTION</span>
        </div>

        <!-- Main Page Title (Split in 2 Lines for Compact Width) -->
        <h1 class="page-hero-title pillar-hero-title-split">
          <span class="title-line-1">مشاوره و کارشناسی خرید ماشین‌آلات صنعتی</span>
          <span class="title-line-2 text-accent">بازرسی فنی در چین و دبی، ارزیابی خطوط استوک و تدوین قرارداد مهندسی</span>
        </h1>

        <!-- Summary Lead Text -->
        <div class="page-hero-excerpt">
          جلوگیری از زیان‌های میلیاردی و خواب سرمایه در واردات ماشین‌آلات صنعتی: کارشناسی فنی در مبدأ (چین، دبی و اروپا)، آزمون میکرونی تلرانس‌ها و ارتعاشات، راستی‌آزمایی اصالت برند قطعات، تدوین استعلام فنی (RFQ) و صحه‌گذاری قرارداد خرید پیش از تسویه حساب و بارگیری.
        </div>

        <!-- Action CTA Buttons -->
        <div class="pillar-hero-actions">
          <a href="#rfq-section" class="btn btn-primary">
            <span>ثبت استعلام کارشناسی خرید</span>
            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
              <path d="M5 12h14M12 5l7 7-7 7"/>
            </svg>
          </a>
          <a href="#curriculum-section" class="btn btn-outline">
            <span>بررسی ماژول‌های بازرسی فنی</span>
          </a>
        </div>
      </div>

      <!-- Left Column: 3D Interactive Stage Engine (Off-DOM Canvas Mechanism & Detached HUD) -->
      <div class="pillar-hero-visual-col md-hero-visual-col">
        <?php if ( function_exists( 'md_render_hero_3d_stage' ) ) { md_render_hero_3d_stage( 'machinery-inspection' ); } ?>
      </div>

    </div>
  </div>
</section>

<!-- 1.1 KEY PROCUREMENT METRICS STRIP -->
<section class="services-stats-strip pillar-stats-strip" aria-label="شاخص‌های عملکردی کارشناسی خرید ماشین‌آلات">
  <div class="container">
    <div class="services-stats-grid">

      <!-- Metric 01 -->
      <div class="stat-item-box">
        <div class="stat-icon-wrap" aria-hidden="true">
          <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2">
            <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/>
          </svg>
        </div>
        <div>
          <span class="stat-value">۱۰۰٪</span>
          <span class="stat-label">پیشگیری از خرید دستگاه معیوب، مغایر با پروفرما یا فاقد اصالت</span>
        </div>
      </div>

      <!-- Metric 02 -->
      <div class="stat-item-box">
        <div class="stat-icon-wrap" aria-hidden="true">
          <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2">
            <polyline points="23 18 13.5 8.5 8.5 13.5 1 6"/>
            <polyline points="17 18 23 18 23 12"/>
          </svg>
        </div>
        <div>
          <span class="stat-value">۳۰٪ تا ۵۰٪</span>
          <span class="stat-label">کاهش هزینه‌های راه‌اندازی و تعمیرات پنهان پس از ترخیص و ورود به خط</span>
        </div>
      </div>

      <!-- Metric 03 -->
      <div class="stat-item-box">
        <div class="stat-icon-wrap" aria-hidden="true">
          <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2">
            <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/>
            <polyline points="14 2 14 8 20 8"/>
            <line x1="16" y1="13" x2="8" y2="13"/>
            <line x1="16" y1="17" x2="8" y2="17"/>
            <polyline points="10 9 9 9 8 9"/>
          </svg>
        </div>
        <div>
          <span class="stat-value">+۱۲۰ ایستگاه</span>
          <span class="stat-label">چک‌لیست تخصصی ارزیابی مکانیک، برق، هیدرولیک و دقت ابعادی</span>
        </div>
      </div>

      <!-- Metric 04 -->
      <div class="stat-item-box">
        <div class="stat-icon-wrap" aria-hidden="true">
          <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2">
            <circle cx="12" cy="12" r="10"/>
            <polyline points="12 6 12 12 16 14"/>
          </svg>
        </div>
        <div>
          <span class="stat-value">۲۴ ساعت</span>
          <span class="stat-label">زمان تدوین و ارسال گزارش جامع مهندسی همراه با ویدیوهای تحلیلی</span>
        </div>
      </div>

    </div>
  </div>
</section>
<?php if ( function_exists( 'md_render_pillar_jump_nav' ) ) { md_render_pillar_jump_nav( array( '#comparison-section' => 'مقایسه ریسک', '#curriculum-section' => '۴ بردار بازرسی', '#case-study-proof' => 'کالبدشکافی عیب', '#workflow-stages' => 'مسیر کارشناسی', '#deliverables-faq' => 'دستاوردها و FAQ', '#rfq-section' => 'درخواست کارشناسی ←' ) ); } ?>


<!-- ========================================================================
     2. COMPARISON & PROBLEM SECTION (خرید سنتی واسطه‌ای vs کارشناسی ماشین دیزاین)
     Light Background (#f8fafc) - High Contrast Architectural Section
     ======================================================================== -->
<section class="pillar-vs-section" id="comparison-section" aria-label="مقایسه رویکرد خرید سنتی تجاری با کارشناسی مهندسی ماشین دیزاین">
  <div class="container">

    <div class="pillar-vs-header">
      <h2>چرا خرید ماشین‌آلات بدون کارشناسی فنی، ریسک فاجعه‌باری دارد؟</h2>
      <p>
        تکیه بر بازرگانان واسطه و فیلم‌های ارسالی فروشنده خارجی، علت اصلی واردات صدها خط تولید معیوب، قطعات ریفر شده و خواب سرمایه‌های چند میلیاردی در کارخانجات کشور است.
      </p>
    </div>

    <!-- 2-Column Vs. Matrix -->
    <div class="pillar-vs-grid">

      <!-- Column 1: Generic Outdated Procurement (Clean Light Card) -->
      <div class="vs-card vs-card-outdated">
        <div class="vs-card-top-tag">
          <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
            <circle cx="12" cy="12" r="10"/>
            <line x1="15" y1="9" x2="9" y2="15"/>
            <line x1="9" y1="9" x2="15" y2="15"/>
          </svg>
          <span><span class="mono" dir="ltr">TRADITIONAL //</span> خرید سنتی و تکیه بر واسطه‌های بازرگانی</span>
        </div>

        <h3 class="vs-card-title">رویه پرخطر بازار تجاری</h3>
        <p class="vs-card-desc">
          اتکا به کاتالوگ‌های تبلیغاتی، وعده‌های زبانی تامین‌کننده و واسطه‌هایی که درکی از تحلیل تنش، لقی مکانیکی و استانداردهای اتوماسیون صنعتی ندارند.
        </p>

        <div class="vs-rows-list">
          <div class="vs-item-row">
            <div class="vs-icon-marker" aria-hidden="true">
              <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><line x1="18" y1="6" x2="6" y2="18"/><line x1="6" y1="6" x2="18" y2="18"/></svg>
            </div>
            <div class="vs-item-content">
              <h4>فریب فیلم‌های ادیت‌شده کارکرد بدون بار (No-load)</h4>
              <p>دستگاه در فیلم بی‌نقص کار می‌کند، اما زیر فشار کاری و بار نامی دچار افت گشتاور و انحراف شدید ابعادی می‌شود.</p>
            </div>
          </div>

          <div class="vs-item-row">
            <div class="vs-icon-marker" aria-hidden="true">
              <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><line x1="18" y1="6" x2="6" y2="18"/><line x1="6" y1="6" x2="18" y2="18"/></svg>
            </div>
            <div class="vs-item-content">
              <h4>قطعات الکتریکال فیک و کنترلرهای کپی</h4>
              <p>نصب اینورترها و PLCهای های‌کپی و بدون گارانتی به نام زیمنس و اشنایدر که در هنگام عیب‌یابی غیرقابل آپدیت هستند.</p>
            </div>
          </div>

          <div class="vs-item-row">
            <div class="vs-icon-marker" aria-hidden="true">
              <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><line x1="18" y1="6" x2="6" y2="18"/><line x1="6" y1="6" x2="18" y2="18"/></svg>
            </div>
            <div class="vs-item-content">
              <h4>استهلاک شدید و لقی‌های پنهان در خطوط استوک</h4>
              <p>سایش ریل‌ها، خستگی یاتاقان‌ها و نشت داخلی هیدرولیک که با رنگ‌آمیزی و شستشوی ظاهری پوشانده شده است.</p>
            </div>
          </div>

          <div class="vs-item-row">
            <div class="vs-icon-marker" aria-hidden="true">
              <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><line x1="18" y1="6" x2="6" y2="18"/><line x1="6" y1="6" x2="18" y2="18"/></svg>
            </div>
            <div class="vs-item-content">
              <h4>قراردادهای یک‌طرفه بازرگانی فاقد ضمانت عملکرد</h4>
              <p>تسویه کامل وجه پیش از تست واقعی (FAT) و بی‌اثر بودن اعتراض کارفرما پس از رسیدن کانتینر به گمرک مقصد.</p>
            </div>
          </div>
        </div>
      </div>

      <!-- Column 2: MachineDesign Technical Inspection (Winning Elevated Dark Card) -->
      <div class="vs-card vs-card-machinedesign">
        <div class="vs-card-top-tag">
          <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg>
          <span><span class="mono" dir="ltr">ENGINEERING PROOF //</span> کارشناسی مهندسی خرید ماشین دیزاین</span>
        </div>

        <h3 class="vs-card-title">بازرسی کارگاهی توسط طراح ماشین‌آلات</h3>
        <p class="vs-card-desc">
          تحلیل عمیق متالورژی، ارتعاشات، تلرانس‌های هندسی و الزام حقوقی سازنده به استانداردهای آزمون پذیرش کارخانه‌ای (FAT).
        </p>

        <div class="vs-rows-list">
          <div class="vs-item-row">
            <div class="vs-icon-marker" aria-hidden="true">
              <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg>
            </div>
            <div class="vs-item-content">
              <h4>تست دینامیکی و بارگذاری پیوسته در سالن مونتاژ</h4>
              <p>سنجش انحراف محورها با ساعت میکرونی و لیزر در حداکثر سرعت کاری و تضمین تیراژ خروجی خط تولید.</p>
            </div>
          </div>

          <div class="vs-item-row">
            <div class="vs-icon-marker" aria-hidden="true">
              <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg>
            </div>
            <div class="vs-item-content">
              <h4>راستی‌آزمایی سریال و اصالت قطعات در پورتال سازنده</h4>
              <p>تایید اصالت ۱۰۰٪ سرووها، درایوها و قطعات پنوماتیکی Festo / SMC و عدم استفاده از بردهای ریفر شده.</p>
            </div>
          </div>

          <div class="vs-item-row">
            <div class="vs-icon-marker" aria-hidden="true">
              <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg>
            </div>
            <div class="vs-item-content">
              <h4>آنالیز ارتعاشات FFT و سنجش سایش در دستگاه‌های استوک</h4>
              <p>شناسایی دقیق عیوب پنهان رولربیرینگ‌ها، گیربکس‌ها و تخمین مهندسی هزینه‌های اورهال قبل از هرگونه پرداخت.</p>
            </div>
          </div>

          <div class="vs-item-row">
            <div class="vs-icon-marker" aria-hidden="true">
              <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg>
            </div>
            <div class="vs-item-content">
              <h4>تدوین قرارداد مهندسی و مشروط کردن پرداخت نهایی</h4>
              <p>قفل کردن ۱۰ تا ۲۰ درصد وجه قرارداد تا زمان تاییدیه کتبی تست FAT و نظارت بر بارگیری کانتینری ایمن.</p>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>

<!-- ========================================================================
     3. INTERACTIVE CURRICULUM & INSPECTION VECTORS (ماژول‌های ۴ گانه بازرسی فنی)
     Dark Background (#0a0e17) - Cyber-Mechanical Dark
     ======================================================================== -->
<section class="curriculum-tabbed-section" id="curriculum-section" aria-label="ماژول‌های تخصصی کارشناسی خرید ماشین‌آلات">
  <div class="container">
    <div class="services-section-header">
      <h2>۴ بردار تخصصی کارشناسی، تست و عقد قرارداد خرید ماشین‌آلات</h2>
      <p>
        از بازرسی فنی در سالن‌های مونتاژ چین و انبارهای دبی تا عیب‌یابی خطوط دست‌دوم و تدوین اسناد الزام‌آور RFQ مهندسی.
      </p>
    </div>

    <!-- Tab Navigation Buttons -->
    <div class="curriculum-tab-nav" role="tablist">
      <button type="button" class="curriculum-tab-btn active" data-tab="tab-module-1" role="tab" aria-selected="true">
        <span class="tab-btn-code mono">MODULE // 01</span>
        <span class="tab-btn-title">کارشناسی خرید ماشین‌آلات از چین (کارخانجات سازنده)</span>
      </button>

      <button type="button" class="curriculum-tab-btn" data-tab="tab-module-2" role="tab" aria-selected="false">
        <span class="tab-btn-code mono">MODULE // 02</span>
        <span class="tab-btn-title">ارزیابی فنی و سلامت خطوط دست‌دوم و استوک</span>
      </button>

      <button type="button" class="curriculum-tab-btn" data-tab="tab-module-3" role="tab" aria-selected="false">
        <span class="tab-btn-code mono">MODULE // 03</span>
        <span class="tab-btn-title">کارشناسی خرید تجهیزات صنعتی از دبی و مناطق آزاد</span>
      </button>

      <button type="button" class="curriculum-tab-btn" data-tab="tab-module-4" role="tab" aria-selected="false">
        <span class="tab-btn-code mono">MODULE // 04</span>
        <span class="tab-btn-title">تدوین مشخصات خرید (RFQ) و قراردادهای مهندسی</span>
      </button>
    </div>

    <!-- Tab Content Panes -->
    <div class="curriculum-tab-content-area">

      <!-- Pane 1: China Factory Audit -->
      <div id="tab-module-1" class="tab-pane active" role="tabpanel">
        <div class="tab-pane-header">
          <div class="tab-pane-main-info">
            <div class="tab-pane-title-group">
              <h3>ماژول ۱: کارشناسی، ممیزی کارخانه و تست تحویل ماشین‌آلات صنعتی در چین (FAT)</h3>
              <p>راستی‌آزمایی سوابق سازنده، کالیبراسیون لیزری محورها، تست استقامت زیر بار نامی و راستی‌آزمایی اصالت قطعات در سالن مونتاژ سازنده چینی.</p>
            </div>
            <div class="tab-pane-badges">
              <span class="tab-meta-badge badge-audience">
                <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/></svg>
                <span>مخاطبین: واردکنندگان ماشین‌آلات، کارخانجات تولیدی و سرمایه‌گذاران خطوط نو</span>
              </span>
              <span class="tab-meta-badge badge-duration">
                <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>
                <span>مدت اجرا: ۲ الی ۴ روز کاری در محل کارخانه سازنده</span>
              </span>
            </div>
          </div>
          <div class="tab-pane-image-slot" aria-label="تصویر شماتیک ماژول ۱">
            <img src="<?php echo esc_url( get_stylesheet_directory_uri() . '/assets/images/pillar6-module1-china-audit.png' ); ?>" 
                 alt="شماتیک بازرسی و تست ماشین‌آلات در کارخانجات چین" 
                 loading="lazy" 
                 width="280" 
                 height="146">
          </div>
        </div>

        <div class="tab-syllabus-grid">
          <div class="tab-syllabus-card">
            <h5>۰۱ // اعتبارسنجی کارگاهی و اصالت قطعات</h5>
            <p>راستی‌آزمایی ماشین‌آلات سنگ‌زنی و مونتاژ سازنده و استعلام شماره سریال سرووها و PLCها در پورتال رسمی سازندگان برند.</p>
          </div>
          <div class="tab-syllabus-card">
            <h5>۰۲ // کالیبراسیون ابعادی و لیزر اینترفرومتر</h5>
            <p>اندازه‌گیری دقت موقعیت‌یابی و تکرارپذیری محورهای حرکتی مطابق با استاندارد ISO 230-2 و ساعت‌زدن انحراف اسپیندل.</p>
          </div>
          <div class="tab-syllabus-card">
            <h5>۰۳ // تست مداوم ۴۸ ساعته و نظارت بر بارگیری</h5>
            <p>پایش ارتعاشات، دمای یاتاقان‌ها زیر بار نامی، وکیوم ضد رطوبت قطعات حساس و نظارت بر مهاربندی ایمن در کانتینر (Lashing).</p>
          </div>
        </div>
      </div>

      <!-- Pane 2: Used Machinery Diagnostics -->
      <div id="tab-module-2" class="tab-pane" role="tabpanel">
        <div class="tab-pane-header">
          <div class="tab-pane-main-info">
            <div class="tab-pane-title-group">
              <h3>ماژول ۲: ارزیابی فنی، عیب‌یابی ارتعاشاتی و سنجش سایش ماشین‌آلات دست‌دوم</h3>
              <p>کالبدشکافی وضعیت واقعی قطعات درونی، سنجش لقی بال‌اسکروها، آنالیز طیف ارتعاشات گیربکس‌ها و تخمین مهندسی هزینه‌های اورهال پیش از خرید.</p>
            </div>
            <div class="tab-pane-badges">
              <span class="tab-meta-badge badge-audience">
                <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/></svg>
                <span>مخاطبین: مدیران فنی، خریداران دستگاه‌های استوک و خطوط کارکرده صنعتی</span>
              </span>
              <span class="tab-meta-badge badge-duration">
                <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>
                <span>مدت اجرا: ۱ الی ۲ روز کاری به ازای هر خط تولید</span>
              </span>
            </div>
          </div>
          <div class="tab-pane-image-slot" aria-label="تصویر شماتیک ماژول ۲">
            <img src="<?php echo esc_url( get_stylesheet_directory_uri() . '/assets/images/pillar6-module2-used-machinery.png' ); ?>" 
                 alt="شماتیک عیب‌یابی و تست ارتعاشات ماشین‌آلات دست‌دوم" 
                 loading="lazy" 
                 width="280" 
                 height="146">
          </div>
        </div>

        <div class="tab-syllabus-grid">
          <div class="tab-syllabus-card">
            <h5>۰۱ // آنالیز ارتعاشات FFT و سلامت یاتاقان‌ها</h5>
            <p>شناسایی فرسودگی رولربیرینگ‌ها، نابالانسی شفت‌ها، کاویتاسیون پمپ‌ها و لقی دنده‌های گیربکس بدون دمونتاژ فیزیکی.</p>
          </div>
          <div class="tab-syllabus-card">
            <h5>۰۲ // تست لقی محورها و آزمون غیرمخرب (NDT)</h5>
            <p>سنجش میکرونی پس‌لرزه (Backlash) در بال‌اسکروها، ارزیابی سایش ریل‌ها و آزمون التراسونیک ترک‌های خستگی شاسی.</p>
          </div>
          <div class="tab-syllabus-card">
            <h5>۰۳ // شیت سلامت فنی (Scorecard) و برآورد ROI</h5>
            <p>ارزیابی نمره‌محور سلامت تمام اجزا (۰ تا ۱۰۰)، لیست قطعات نیازمند تعویض فوری و تخمین دقیق هزینه نوسازی خط.</p>
          </div>
        </div>
      </div>

      <!-- Pane 3: Dubai & Freezone Sourcing -->
      <div id="tab-module-3" class="tab-pane" role="tabpanel">
        <div class="tab-pane-header">
          <div class="tab-pane-main-info">
            <div class="tab-pane-title-group">
              <h3>ماژول ۳: کارشناسی خرید تجهیزات صنعتی از دبی و انبارهای منطقه آزاد</h3>
              <p>بازرسی حضوری در انبارهای منطقه آزاد جبل‌علی (JAFZA) و شارجه، انطباق با استاندارد برق ایران و پایش صدمات ناشی از هوای شرجی خلیج فارس.</p>
            </div>
            <div class="tab-pane-badges">
              <span class="tab-meta-badge badge-audience">
                <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/></svg>
                <span>مخاطبین: خریداران ماشین‌آلات اروپایی و آمریکایی موجود در امارات و مناطق آزاد</span>
              </span>
              <span class="tab-meta-badge badge-duration">
                <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>
                <span>مدت اجرا: ۱ الی ۳ روز کاری در انبارهای جبل‌علی و شارجه</span>
              </span>
            </div>
          </div>
          <div class="tab-pane-image-slot" aria-label="تصویر شماتیک ماژول ۳">
            <img src="<?php echo esc_url( get_stylesheet_directory_uri() . '/assets/images/pillar6-module3-dubai-freezone.png' ); ?>" 
                 alt="شماتیک بازرسی ماشین‌آلات وارداتی از دبی و مناطق آزاد" 
                 loading="lazy" 
                 width="280" 
                 height="146">
          </div>
        </div>

        <div class="tab-syllabus-grid">
          <div class="tab-syllabus-card">
            <h5>۰۱ // تطبیق پلاک، سریال و مانیفست گمرکی</h5>
            <p>تطبیق سریال پلاک آلومینیومی دستگاه با اسناد وارداتی جهت ردگیری تاریخچه واقعی کارکرد و رد دستگاه‌های ریبرند شده.</p>
          </div>
          <div class="tab-syllabus-card">
            <h5>۰۲ // پایش اکسیداسیون و انطباق شبکه برق</h5>
            <p>بررسی بردهای الکترونیکی در برابر نمک دریایی و تست سازگاری ترانس‌ها و درایوها با شبکه ۳ فاز ایران (400V / 50Hz).</p>
          </div>
          <div class="tab-syllabus-card">
            <h5>۰۳ // نظارت بر تخلیه روغن، دمونتاژ و بسته‌بندی</h5>
            <p>تخلیه استاندارد سیالات هیدرولیک، مهار شفت‌ها، محافظت گایدها با فوم ضدضربه و نظارت بر ترخیص و بارگیری لنجی/کانتینری.</p>
          </div>
        </div>
      </div>

      <!-- Pane 4: RFQ & Contract Drafting -->
      <div id="tab-module-4" class="tab-pane" role="tabpanel">
        <div class="tab-pane-header">
          <div class="tab-pane-main-info">
            <div class="tab-pane-title-group">
              <h3>ماژول ۴: تدوین مشخصات خرید (RFQ) و قراردادهای مهندسی خرید خارجی</h3>
              <p>قفل کردن الزامات فنی، تلرانس‌های قطعه خروجی، بندهای تست پذیرش کارخانه‌ای (FAT) و شرایط پرداخت مشروط در متن قرارداد تجاری.</p>
            </div>
            <div class="tab-pane-badges">
              <span class="tab-meta-badge badge-audience">
                <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/></svg>
                <span>مخاطبین: مدیران عامل، مدیران تدارکات و دپارتمان‌های بازرگانی خارجی کارخانجات</span>
              </span>
              <span class="tab-meta-badge badge-duration">
                <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>
                <span>مدت اجرا: ۳ الی ۵ روز کاری</span>
              </span>
            </div>
          </div>
          <div class="tab-pane-image-slot" aria-label="تصویر شماتیک ماژول ۴">
            <img src="<?php echo esc_url( get_stylesheet_directory_uri() . '/assets/images/pillar6-module4-rfq-contract.png' ); ?>" 
                 alt="شماتیک تدوین RFQ و قرارداد مهندسی خرید ماشین‌آلات" 
                 loading="lazy" 
                 width="280" 
                 height="146">
          </div>
        </div>

        <div class="tab-syllabus-grid">
          <div class="tab-syllabus-card">
            <h5>۰۱ // تدوین استعلام فنی مستند (Technical RFQ)</h5>
            <p>تعیین دقیق ظرفیت اسمی، حداقل سرعت نامی، برند قطعات مصرفی مجاز و الزامات ایمنی ماشین‌سازی در قالب اسناد شفاف.</p>
          </div>
          <div class="tab-syllabus-card">
            <h5>۰۲ // ضمانت تلرانسی قطعه نهایی با چک‌لیست CMM</h5>
            <p>قید تلرانس‌های مجاز ابعادی و هندسی محصول نهایی دستگاه به عنوان پیوست الزام‌آور با حق فسخ در صورت عدم انطباق.</p>
          </div>
          <div class="tab-syllabus-card">
            <h5>۰۳ // پروتکل پرداخت مشروط (Escrow) و جرایم تاخیر</h5>
            <p>مشروط کردن پرداخت ۲۰٪ نهایی به امضای صورت‌جلسه تست FAT در مبدأ و تعیین خسارت روزانه افت راندمان یا تاخیر تحویل.</p>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>

<!-- ========================================================================
     4. LIVE BLUEPRINT CASE-STUDY / PROOF (کالبدشکافی پرونده واقعی کارشناسی خرید)
     Light Background (#ffffff) - Crisp Engineering Callout
     ======================================================================== -->
<section class="blueprint-case-section" id="case-study-proof" aria-label="کالبدشکافی نمونه واقعی عیب‌یابی خطوط وارداتی">
  <div class="container">

    <div class="pillar-vs-header">
      <h2>کالبدشکافی عیب پنهان در خرید خط تولید دارویی از چین</h2>
      <p>
        چگونه کارشناسی فنی پیش از تسویه حساب نهایی، از ضرر ۲.۵ میلیارد تومانی و خواب ۶ ماهه خط تولید یک شرکت داروسازی جلوگیری کرد؟
      </p>
    </div>

    <!-- 2-Column Before / After Callout -->
    <div class="case-study-grid">

      <!-- Card Before: Flawed Purchase Risk -->
      <div class="case-col case-col-before">
        <div class="case-col-badge">
          <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><circle cx="12" cy="12" r="10"/><line x1="12" y1="8" x2="12" y2="12"/><line x1="12" y1="16" x2="12.01" y2="16"/></svg>
          <span><span class="mono" dir="ltr">BEFORE //</span> ریسک خرید بدون کارشناسی مهندسی</span>
        </div>

        <h3>خط بسته‌بندی بلیستر: ظاهر نو، باطن پر از خطای ساخت</h3>
        <p class="case-col-desc">
          کارفرما در آستانه تسویه حساب یک خط بسته‌بندی بلیستر قرص با بدنه تمام استیل و ادعای PLC زیمنس آلمان بود. فیلم ارسالی فروشنده در دور پایین بی‌نقص به نظر می‌رسید.
        </p>

        <div class="case-breakdown-list">
          <div class="case-point-row">
            <svg class="case-point-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><line x1="18" y1="6" x2="6" y2="18"/><line x1="6" y1="6" x2="18" y2="18"/></svg>
            <div class="case-point-text">
              <strong>مغایرت آلیاژ با استاندارد بهداشتی:</strong>
              <span>استفاده از ورق استیل متفرقه (گرید ۲۰۱ با خواص خورنده) به جای استیل ۳۱۶L دارویی تاییدشده در تمام بخش‌های تماس با قرص.</span>
            </div>
          </div>

          <div class="case-point-row">
            <svg class="case-point-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><line x1="18" y1="6" x2="6" y2="18"/><line x1="6" y1="6" x2="18" y2="18"/></svg>
            <div class="case-point-text">
              <strong>لقی فک‌های دوخت در دمای بالا:</strong>
              <span>لقی ۱۲۰ میکرونی در سنبه دوخت فویل آلومینیومی در دمای کاری ۱۴۰ درجه که باعث نشتی هوای قرص‌ها و فساد دارو می‌شد.</span>
            </div>
          </div>

          <div class="case-point-row">
            <svg class="case-point-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><line x1="18" y1="6" x2="6" y2="18"/><line x1="6" y1="6" x2="18" y2="18"/></svg>
            <div class="case-point-text">
              <strong>کنترلر ریفر شده با سورس‌کد قفل‌شده:</strong>
              <span>نصب پی‌ال‌سی دست‌دوم ریفر شده بدون ارائه سورس برنامه، که هرگونه تغییر در ابعاد بسته‌بندی را غیرممکن می‌ساخت.</span>
            </div>
          </div>
        </div>

        <div class="case-outcome-pill">
          <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2"><path d="M10.29 3.86L1.82 18a2 2 0 0 0 1.71 3h16.94a2 2 0 0 0 1.71-3L13.71 3.86a2 2 0 0 0-3.42 0z"/><line x1="12" y1="9" x2="12" y2="13"/><line x1="12" y1="17" x2="12.01" y2="17"/></svg>
          <span>خسارت حتمی در صورت تسویه: ۲.۵ میلیارد تومان ضایعات فویل + ۶ ماه توقف خط + رد شدن در بازرسی غذا و دارو</span>
        </div>
      </div>

      <!-- Card After: MachineDesign Solution & Recovery -->
      <div class="case-col case-col-after">
        <div class="case-col-badge">
          <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg>
          <span><span class="mono" dir="ltr">AUDIT RESOLUTION //</span> مداخله مهندسی و رفع کامل مغایرت‌ها</span>
        </div>

        <h3>اصلاح فنی پیش از پرداخت قسط نهایی و ترخیص کالا</h3>
        <p class="case-col-desc">
          با اعزام کارشناس ماشین دیزاین به کارخانه شاندونگ، کلیه مغایرت‌ها با متالورژی پرتابل مستند و پرداخت نهایی تا رفع کامل ایرادات تعلیق گردید.
        </p>

        <div class="case-breakdown-list">
          <div class="case-point-row">
            <svg class="case-point-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg>
            <div class="case-point-text">
              <strong>تعویض کامل متریال با نظارت کارشناس:</strong>
              <span>تراشکاری مجدد تمام فک‌ها و محفظه‌های تغذیه با استیل ۳۱۶L دارویی همراه با گواهی آنالیز متالورژی کوانتومتری معتبر.</span>
            </div>
          </div>

          <div class="case-point-row">
            <svg class="case-point-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg>
            <div class="case-point-text">
              <strong>فیلرگیری و کالیبراسیون حرارتی:</strong>
              <span>اصلاح تلرانس گایدها و رفع لقی حرارتی سنبه‌ها به نحوی که هوابندی بلیسترها در فشار ۳ اتمسفر ۱۰۰٪ تست و تایید شد.</span>
            </div>
          </div>

          <div class="case-point-row">
            <svg class="case-point-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg>
            <div class="case-point-text">
              <strong>تحویل سخت‌افزار پلمپ با سورس‌کد باز:</strong>
              <span>نصب پی‌ال‌سی اورجینال زیمنس آلمان، تحویل کدهای منبع به مدیر فنی خریدار و تدوین کتابچه راهنمای تنظیمات به زبان فارسی.</span>
            </div>
          </div>
        </div>

        <div class="case-outcome-pill">
          <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2"><polyline points="20 6 9 17 4 12"/></svg>
          <span>نتیجه قطعی کارشناسی: راه‌اندازی با راندمان ۹۹.۴٪، اخذ تاییدیه بهداشتی GMP و جلوگیری از ۲.۵ میلیارد تومان زیان</span>
        </div>
      </div>

    </div>
  </div>
</section>

<!-- ========================================================================
     5. TIMELINE WORKFLOW (فرآیند ۴ مرحله‌ای سیستماتیک کارشناسی خرید)
     Dark Background (#121824) - Matches pillar-workflow-section across site
     ======================================================================== -->
<section class="stepper-timeline-section" id="workflow-stages" aria-label="فرآیند سیستماتیک ۴ مرحله‌ای کارشناسی خرید ماشین‌آلات">
  <div class="container">

    <div class="services-section-header">
      <h2>مسیر گام‌به‌گام کارشناسی و خرید مطمئن تجهیزات صنعتی</h2>
      <p>
        رویکردی مرحله‌به‌مرحله و مهندسی برای مدیریت ریسک، از استعلام اولیه تا بازرسی نهایی در کارخانه و نظارت بر بارگیری.
      </p>
    </div>

    <!-- Connected Linear Stepper -->
    <div class="stepper-linear-wrap">

      <!-- Step 01 -->
      <div class="stepper-item-card">
        <span class="stepper-stage-tag mono">STAGE // 01</span>
        <h4>ارزیابی نیاز فنی و تدوین RFQ اختصاصی</h4>
        <p>تحلیل نیازمندی‌های خط تولید شما، استخراج پارامترهای ظرفیت نامی، نوع متریال مصرفی و تدوین سند استاندارد استعلام فنی جهت مذاکره با سازندگان.</p>
      </div>

      <!-- Step 02 -->
      <div class="stepper-item-card">
        <span class="stepper-stage-tag mono">STAGE // 02</span>
        <h4>ارزیابی سوابق سازندگان و فیلترینگ پروپوزال‌ها</h4>
        <p>راستی‌آزمایی کارگاه و خطوط تولید سازندگان، استعلام از مشتریان قبلی، بررسی تطابق پیش‌فاکتورها و حذف شرکت‌های واسطه‌ای فاقد صلاحیت فنی.</p>
      </div>

      <!-- Step 03 -->
      <div class="stepper-item-card">
        <span class="stepper-stage-tag mono">STAGE // 03</span>
        <h4>بازرسی میدانی و آزمون پذیرش کارخانه‌ای (FAT)</h4>
        <p>اعزام کارشناس به سالن مونتاژ در چین یا دبی، کالیبراسیون ابعادی با لیزر، آزمون ارتعاشات دینامیکی، تست بار نامی و عیب‌یابی اجزای پنهان.</p>
      </div>

      <!-- Step 04 -->
      <div class="stepper-item-card">
        <span class="stepper-stage-tag mono">STAGE // 04</span>
        <h4>تدوین گزارش جامع و نظارت بر بارگیری کانتینری</h4>
        <p>ارائه گزارش تفصیلی ۱۲۰ بندی با ویدیوها، تایید آزادسازی مشروط وجه، نظارت مستقیم بر بسته‌بندی وکیوم ضد زنگ و مهار اصولی در کانتینر.</p>
      </div>

    </div>
  </div>
</section>

<!-- ========================================================================
     6. DELIVERABLES & FAQ SPLIT SECTION (دستاوردهای کارشناسی + سوالات متداول مدیران)
     Light Background (#f8fafc) - Matches deliverables-section across site
     ======================================================================== -->
<section class="deliv-faq-split-section" id="deliverables-faq" aria-label="دستاوردهای ملموس کارشناسی خرید و سوالات متداول مدیران">
  <div class="container">

    <div class="services-section-header">
      <h2>دستاوردهای ملموس کارشناسی و پاسخ به دغدغه‌های مدیران خرید</h2>
      <p>
        تضمین شفافیت فنی، کاهش ریسک حقوقی و مالی، و پاسخ روشن به سوالات کلیدی مدیران عامل و کارخانجات صنعتی.
      </p>
    </div>

    <!-- 2-Column Split Grid: Right Deliverables / Left FAQ -->
    <div class="deliv-faq-grid">

      <!-- Right Column: 3 Tangible Deliverables -->
      <div class="deliv-stack-col">

        <!-- Item 01 -->
        <div class="deliv-compact-item">
          <div class="deliv-item-icon" aria-hidden="true">
            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
              <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/>
              <polyline points="14 2 14 8 20 8"/>
              <line x1="16" y1="13" x2="8" y2="13"/>
              <line x1="16" y1="17" x2="8" y2="17"/>
            </svg>
          </div>
          <div class="deliv-item-content">
            <h4>کتابچه گزارش جامع کارشناسی ۱۲۰ بندی (Detailed Audit Dossier)</h4>
            <p>مستندسازی پیکسلی وضعیت تمام اجزای دستگاه، نمودارهای کالیبراسیون ابعادی، تست ارتعاشات FFT و آلبوم ویدیوهای باکیفیت از تست زیر بار.</p>
          </div>
        </div>

        <!-- Item 02 -->
        <div class="deliv-compact-item">
          <div class="deliv-item-icon" aria-hidden="true">
            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
              <rect x="2" y="3" width="20" height="14" rx="2" ry="2"/>
              <line x1="8" y1="21" x2="16" y2="21"/>
              <line x1="12" y1="17" x2="12" y2="21"/>
            </svg>
          </div>
          <div class="deliv-item-content">
            <h4>ماتریس ارزیابی ریسک و سلامت فنی (Machinery Risk Scorecard)</h4>
            <p>نمره‌دهی علمی به اجزای مکانیکی، هیدرولیکی و برقی دستگاه، تخمین عمر باقیمانده قطعات مصرفی و برآورد واقعی هزینه‌های نگهداری.</p>
          </div>
        </div>

        <!-- Item 03 -->
        <div class="deliv-compact-item">
          <div class="deliv-item-icon" aria-hidden="true">
            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
              <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/>
              <polyline points="22 4 12 14.01 9 11.01"/>
            </svg>
          </div>
          <div class="deliv-item-content">
            <h4>پروتکل مهندسی قرارداد خرید و چک‌لیست تحویل (FAT Protocol)</h4>
            <p>پیش‌نویس پیوست‌های فنی قرارداد پروفرما، جدول شرایط پذیرش قطعی، مکانیزم مشروط‌سازی آزادسازی وجه و شروط تعویض قطعه معیوب.</p>
          </div>
        </div>

        <!-- Item 04 -->
        <div class="deliv-compact-item">
          <div class="deliv-item-icon" aria-hidden="true">
            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
              <polygon points="23 7 16 12 23 17 23 7"/>
              <rect x="1" y="5" width="15" height="14" rx="2" ry="2"/>
            </svg>
          </div>
          <div class="deliv-item-content">
            <h4>آرشیو ویدیوهای تست میکرونی و تاییدیه‌های بازرسی (FAT Video &amp; Test Archive)</h4>
            <p>مستندات تصویری آزمون ساعت‌زدن لقی، کالیبراسیون لیزری، آزمون بار نامی و تاییدیه‌های مکتوب تحویل پیش از مهاربندی کانتینر.</p>
          </div>
        </div>

      </div>

      <!-- Left Column: FAQ Accordion -->
      <div class="faq-accordion-col">
        <div class="faq-col-header">
          <h3>پاسخ به سوالات و دغدغه‌های پرتکرار مدیران خرید</h3>
        </div>

        <div class="faq-accordion-list" id="machineryFaqList">

          <!-- FAQ Item 1 -->
          <div class="faq-accordion-item open">
            <button type="button" class="faq-question-btn" aria-expanded="true">
              <span>آیا امکان بازرسی فیزیکی و حضوری در کارخانجات چین یا دبی وجود دارد؟</span>
              <svg class="faq-arrow-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" aria-hidden="true">
                <polyline points="6 9 12 15 18 9"/>
              </svg>
            </button>
            <div class="faq-answer-body">
              بله، ماشین دیزاین هر دو روش را پشتیبانی می‌کند: ۱. اعزام مستقیم مهندس ناظر ارشد ایرانی به کارخانجات سازنده در شهرهای صنعتی چین (شنژن، جینان، شاندونگ و...) و مناطق آزاد دبی؛ ۲. ارزیابی ویدئویی زنده چنددوربینه و هدایت آزمون‌های تلرانسی توسط تیم بازرسی محلی با نظارت برخط دفتر فنی.
            </div>
          </div>

          <!-- FAQ Item 2 -->
          <div class="faq-accordion-item">
            <button type="button" class="faq-question-btn" aria-expanded="false">
              <span>چگونه از اصالت و غیراستوک بودن قطعات اصلی دستگاه مطمئن می‌شوید؟</span>
              <svg class="faq-arrow-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" aria-hidden="true">
                <polyline points="6 9 12 15 18 9"/>
              </svg>
            </button>
            <div class="faq-answer-body">
              تمامی قطعات کلیدی اعم از پی‌ال‌سی‌ها، درایوها، سرووموتورها و پمپ‌های هیدرولیک با استفاده از بارکدخوان و بررسی شماره سریال در دیتابیس رسمی سازندگان برند (مانند Siemens, Schneider, Rexroth, Festo, SMC) استعلام اصالت می‌شوند و از دستگاه‌های کپی یا بازسازی‌شده به طور کامل جلوگیری به عمل می‌آید.
            </div>
          </div>

          <!-- FAQ Item 3 -->
          <div class="faq-accordion-item">
            <button type="button" class="faq-question-btn" aria-expanded="false">
              <span>هزینه و تعرفه خدمات کارشناسی خرید چگونه محاسبه می‌شود؟</span>
              <svg class="faq-arrow-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" aria-hidden="true">
                <polyline points="6 9 12 15 18 9"/>
              </svg>
            </button>
            <div class="faq-answer-body">
              تعرفه خدمات ماشین دیزاین کاملاً شفاف، مقطوع و متناسب با ابعاد پروژه، تعداد ایستگاه‌های آزمون و مبدأ بازرسی (چین، دبی، اروپا یا کارخانجات داخلی) تدوین می‌شود. بر خلاف دلالان تجاری، ما هیچ‌گونه کمیسیون یا درصدی از ارزش دستگاه دریافت نمی‌کنیم تا استقلال نظر کارشناسی ۱۰۰٪ حفظ گردد.
            </div>
          </div>

          <!-- FAQ Item 4 -->
          <div class="faq-accordion-item">
            <button type="button" class="faq-question-btn" aria-expanded="false">
              <span>ضمانت ماشین دیزاین برای انطباق دستگاه با گزارش کارشناسی چیست؟</span>
              <svg class="faq-arrow-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" aria-hidden="true">
                <polyline points="6 9 12 15 18 9"/>
              </svg>
            </button>
            <div class="faq-answer-body">
              گزارش کارشناسی ما به عنوان یک سند رسمی مهندسی همراه با امضای مهندس ناظر تحویل می‌گردد و بندهای مشروط پرداخت در قرارداد فروشنده بر پایه همین گزارش قفل می‌شود. در صورتی که پس از تحویل در کارخانه خریدار مغایرتی با گزارش وجود داشته باشد، پشتیبانی مهندسی جهت الزام سازنده به رفع عیب یا جبران خسارت ارائه خواهد شد.
            </div>
          </div>

        </div>
      </div>

    </div>
  </div>
</section>

<!-- ========================================================================
     7. INTAKE FORM & INSTRUCTOR AUTHORITY CARD (فرم استعلام و کارت اعتبار کارشناس)
     Dark Background - Cyber-Mechanical Dark
     ======================================================================== -->
<section class="pillar-rfq-dual-section" id="rfq-section" aria-label="فرم استعلام کارشناسی خرید ماشین‌آلات و پروفایل کارشناس">
  <div class="container">
    <div class="rfq-dual-grid">

      <!-- Column 1: Instructor Authority Card (کارت اعتبار کارشناس و سوابق صنعتی) -->
      <div class="instructor-authority-panel">
        <div>
          <div class="rfq-trust-badge mono">
            <span class="rfq-led" aria-hidden="true"></span>
            <span>ACCREDITED INSPECTOR // LEAD INDUSTRIAL DESIGNER</span>
          </div>

          <div class="instructor-profile-header">
            <div class="instructor-avatar-wrap">
              <img src="<?php echo esc_url( get_stylesheet_directory_uri() . '/assets/images/instructor-hossein-vatandoust.webp' ); ?>" 
                   alt="مهندس حسین وطن‌دوست - کارشناس ارشد ارزیابی فنی و خرید ماشین‌آلات صنعتی" 
                   loading="lazy" 
                   width="84" 
                   height="84">
            </div>
            <div class="instructor-title-info">
              <h3>مهندس حسین وطن‌دوست</h3>
              <span class="instructor-role-badge mono">LEAD INDUSTRIAL DESIGNER &amp; MACHINERY AUDITOR</span>
            </div>
          </div>

          <p class="instructor-bio-text">
            طراح ارشد ماشین‌آلات صنعتی، خطوط بسته‌بندی و مکانیزم‌های دقیق؛ متخصص آزمون پذیرش کارخانه‌ای (FAT/SAT بر پایه DIN EN ISO)، بازرسی فنی تجهیزات خطوط تولید در چین، دبی و اروپا و مشاور فنی ده‌ها هلدینگ معتبر تولیدی در خرید و راه‌اندازی ماشین‌آلات پیشرفته.
          </p>

          <div class="instructor-stats-mini-grid">
            <div class="mini-stat-card">
              <div class="mini-stat-value">
                <span class="stat-number">۱۵+</span>
                <span class="stat-unit">سال</span>
              </div>
              <span class="mini-stat-label">تجربه مستقیم طراحی و بازرسی فنی ماشین‌آلات</span>
            </div>
            <div class="mini-stat-card">
              <div class="mini-stat-value">
                <span class="stat-number">۱۰۰٪</span>
                <span class="stat-unit">تضمین</span>
              </div>
              <span class="mini-stat-label">انطباق گزارش کارشناسی با واقعیت کارگاهی</span>
            </div>
          </div>

          <div class="instructor-guarantee-box">
            <svg class="guarantee-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2">
              <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/>
            </svg>
            <div class="guarantee-text">
              <strong>تضمین جلوگیری از خواب سرمایه (Zero Procurement Regret)</strong>
              <p>کشف زودهنگام لقی‌ها، مغایرت‌های متالورژی و عیوب الکتریکال پیش از تسویه حساب، ارزش سرمایه‌گذاری کارشناسی را در همان مذاکره اول صدها برابر بازمی‌گرداند.</p>
            </div>
          </div>

          <!-- Concrete In-Plant Commitments (توازن چگالی محتوا و حذف فضای مرده) -->
          <div class="instructor-commitments-list">
            <div class="instructor-commitment-item">
              <svg class="commitment-check" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg>
              <span>بررسی و ارزیابی رایگان پروفرما و کاتالوگ سازنده پیش از عقد قرارداد کارشناسی</span>
            </div>
            <div class="instructor-commitment-item">
              <svg class="commitment-check" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg>
              <span>ارائه کتابچه گزارش جامع ۱۲۰ بندی با ویدیوهای میکرونی از تست زیر بار</span>
            </div>
            <div class="instructor-commitment-item">
              <svg class="commitment-check" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg>
              <span>تدوین الزامات فنی قرارداد خرید جهت مشروط‌سازی آزادسازی اقساط مالی به تست FAT</span>
            </div>
          </div>
        </div>

        <!-- Fast Track Direct Phone/Telegram Chip (Symmetrical baseline to NDA chip) -->
        <?php 
        $ins_phone = function_exists('md_get_contact') ? md_get_contact('phone', '') : '';
        $ins_mobile = function_exists('md_get_contact') ? md_get_contact('mobile', '') : '';
        $ins_display = $ins_phone ?: ($ins_mobile ?: '۰۵۱-XXXXXXXX');
        $ins_clean = md_tel_uri( $ins_display );
        ?>
        <div class="rfq-direct-consult-chip">
          <div class="consult-chip-text">
            <span class="consult-chip-label">نیاز به هماهنگی فوری برای سفر بازرسی یا بررسی پروفرما دارید؟</span>
            <span class="consult-chip-title">گفتگوی مستقیم با مهندس حسین وطن‌دوست</span>
          </div>
          <div class="consult-chip-actions" style="display:flex; flex-wrap:wrap; gap:8px; align-items:center;">
            <a href="tel:<?php echo esc_attr($ins_clean); ?>" class="consult-phone-btn mono" dir="ltr" title="تماس تلفنی مستقیم">
              <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2">
                <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/>
              </svg>
              <span><?php echo esc_html($ins_display); ?></span>
            </a>
            <a href="https://t.me/Hoseinvatandoust" target="_blank" rel="noopener noreferrer" class="consult-phone-btn mono" dir="ltr" title="ارتباط مستقیم در تلگرام">
              <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2">
                <line x1="22" y1="2" x2="11" y2="13"/>
                <polygon points="22 2 15 22 11 13 2 9 22 2"/>
              </svg>
              <span>تلگرام</span>
            </a>
          </div>
        </div>
      </div>

      <!-- Column 2: Streamlined Industrial Form Panel (Symmetrical to Column 1) -->
      <div class="rfq-form-panel-custom">
        <div id="pillarRfqContainer">
          <div class="rfq-form-custom-header">
            <span class="rfq-form-tag mono">// MACHINERY AUDIT INTAKE</span>
            <h3>استعلام کارشناسی، بازرسی فنی و تدوین قرارداد خرید</h3>
            <p>اطلاعات اولیه دستگاه یا خط تولید مدنظر را ثبت فرمایید؛ بررسی کاتالوگ و شرایط کارشناسی ظرف ۲۴ ساعت تقدیم می‌گردد.</p>
          </div>

          <div id="pillarRfqNotice" class="rfq-hud-notice" style="display:none;" role="alert"></div>

          <form id="pillarRfqForm" class="rfq-form-grid-inner" method="POST">
            <input type="hidden" name="action" value="machinedesign_rfq_submit">
            <input type="hidden" name="source_pillar" value="machinery-inspection">
            <input type="hidden" name="source_url" value="<?php echo esc_url( get_permalink() ); ?>">
            
            <div class="rfq-input-group">
              <label for="rfq-name">نام و سمت متقاضی (مدیر کارخانه / مدیر بازرگانی) <span class="req-star">*</span></label>
              <input type="text" id="rfq-name" name="rfq_name" class="rfq-input-field" required placeholder="مثال: مهندس رضوانی - مدیر خرید هلدینگ">
            </div>

            <div class="rfq-input-group">
              <label for="rfq-phone">شماره همراه مستقیم هماهنگی فنی <span class="req-star">*</span></label>
              <input type="tel" id="rfq-phone" name="rfq_phone" class="rfq-input-field" required placeholder="۰۹۱۲XXXXXXX" dir="ltr">
            </div>

            <div class="rfq-input-group rfq-field-full">
              <label for="rfq-scope">نوع خدمت کارشناسی و مبدأ خرید <span class="req-star">*</span></label>
              <select id="rfq-scope" name="rfq_service_type" class="rfq-input-field" required>
                <option value="" disabled selected>انتخاب حوزه بازرسی فنی مد نظر...</option>
                <option value="china_audit">کارشناسی خرید ماشین‌آلات از کارخانجات چین (شنژن، جینان و...)</option>
                <option value="used_inspection">ارزیابی فنی و سلامت خطوط دست‌دوم و استوک</option>
                <option value="dubai_audit">کارشناسی خرید تجهیزات صنعتی از دبی و مناطق آزاد (JAFZA)</option>
                <option value="rfq_contract">تدوین استعلام فنی (RFQ) و قراردادهای مهندسی خرید</option>
                <option value="full_audit_pack">پکیج جامع مشاوره، بازرسی FAT در مبدأ و نظارت بر بارگیری</option>
              </select>
            </div>

            <div class="rfq-input-group rfq-field-full">
              <label for="rfq-stage">وضعیت جاری پروژه خرید ماشین‌آلات</label>
              <select id="rfq-stage" name="rfq_stage" class="rfq-input-field">
                <option value="" disabled selected>انتخاب وضعیت پروژه...</option>
                <option value="pre_proforma">در حال استعلام قیمت و دریافت پیش‌فاکتور (پروفرما)</option>
                <option value="proforma_ready">پروفرما صادر شده و در آستانه پرداخت بیعانه هستیم</option>
                <option value="ready_for_fat">دستگاه در حال ساخت است و نیاز به اعزام کارشناس جهت تست تحویل داریم</option>
                <option value="used_inspect_now">دستگاه استوک آماده بازدید حضوری و کارشناسی عیوب است</option>
              </select>
            </div>

            <div class="rfq-input-group rfq-field-full">
              <label for="rfq-desc">شرح نوع دستگاه، مشخصات نامی یا لینک کاتالوگ فروشنده</label>
              <textarea id="rfq-desc" name="rfq_desc" class="rfq-input-field" rows="3" placeholder="نوع دستگاه یا خط تولید، برند پیشنهادی، کشور سازنده، زمان‌بندی تسویه و دغدغه‌های اصلی خود را به اختصار شرح دهید..."></textarea>
            </div>

            <div class="rfq-field-full">
              <button type="submit" id="pillarRfqSubmitBtn" class="btn-rfq-submit-large">
                <span>ثبت درخواست ارزیابی فنی و مشاوره خرید</span>
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
            <div class="rfq-success-badge mono">// MACHINERY AUDIT REGISTERED // INSPECTION DOSSIER</div>
            <h4 class="rfq-success-title">درخواست کارشناسی خرید ماشین‌آلات با موفقیت ثبت گردید</h4>
            <div class="rfq-success-code-wrap">
              <span>کد رهگیری سیستمی:</span>
              <span id="rfqTrackingPill" class="rfq-tracking-pill mono">MD-INSPECT-2026-0000</span>
            </div>
            <p class="rfq-success-desc">
              مشخصات خط تولید و درخواست کارشناسی شما در دپارتمان ارزیابی خرید ماشین دیزاین ثبت گردید. کارشناسان ارشد ظرف حداکثر ۲۴ ساعت کاری جهت بررسی پروفرما و هماهنگی با شما تماس خواهند گرفت.
            </p>
            <button type="button" id="pillarRfqResetBtn" class="rfq-reset-btn">
              + ثبت درخواست دیگر
            </button>
          </div>
        </div>

        <!-- Security & NDA Guarantee Chip (Symmetrical to Fast-Track Phone Chip) -->
        <div class="rfq-form-guarantee-chip">
          <div class="guarantee-chip-text">
            <span class="consult-chip-label">پروتکل حفظ محرمانگی تجاری و استعلامات سازمانی</span>
            <span class="consult-chip-title">تضمین ۱۰۰٪ محرمانگی اطلاعات خرید و قیمت‌ها (NDA)</span>
          </div>
          <div class="guarantee-lock-badge mono" dir="ltr">
            <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2">
              <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/>
            </svg>
            <span>100% CONFIDENTIAL</span>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>

<!-- ========================================================================
     8. CLIENT-SIDE INTERACTIVE BEHAVIORS: TABS, FAQ ACCORDION & RFQ SUBMISSION
     ======================================================================== -->
<script>
(function() {
  // 1. Tabbed Modules Switcher
  var tabButtons = document.querySelectorAll('.curriculum-tab-btn');
  var tabPanes = document.querySelectorAll('.tab-pane');

  tabButtons.forEach(function(btn) {
    btn.addEventListener('click', function() {
      var targetId = btn.getAttribute('data-tab');

      tabButtons.forEach(function(b) {
        b.classList.remove('active');
        b.setAttribute('aria-selected', 'false');
      });
      tabPanes.forEach(function(p) {
        p.classList.remove('active');
      });

      btn.classList.add('active');
      btn.setAttribute('aria-selected', 'true');
      var activePane = document.getElementById(targetId);
      if (activePane) {
        activePane.classList.add('active');
      }
    });
  });

  // 2. FAQ Accordion Toggle
  var faqItems = document.querySelectorAll('.faq-accordion-item');
  faqItems.forEach(function(item) {
    var btn = item.querySelector('.faq-question-btn');
    if (!btn) return;
    btn.addEventListener('click', function() {
      var isOpen = item.classList.contains('open');

      // Close other items
      faqItems.forEach(function(other) {
        other.classList.remove('open');
        var otherBtn = other.querySelector('.faq-question-btn');
        if (otherBtn) otherBtn.setAttribute('aria-expanded', 'false');
      });

      if (!isOpen) {
        item.classList.add('open');
        btn.setAttribute('aria-expanded', 'true');
      }
    });
  });

  // 3. Symmetrical RFQ AJAX Handling
  var form = document.getElementById('pillarRfqForm');
  var submitBtn = document.getElementById('pillarRfqSubmitBtn');
  var notice = document.getElementById('pillarRfqNotice');
  var successHud = document.getElementById('pillarRfqSuccessHud');
  var trackingPill = document.getElementById('rfqTrackingPill');
  var resetBtn = document.getElementById('pillarRfqResetBtn');
  var header = document.querySelector('.rfq-form-custom-header');

  if (form) {
    form.addEventListener('submit', function(e) {
      e.preventDefault();

      var phoneInput = document.getElementById('rfq-phone');
      if (!phoneInput || !phoneInput.value.trim()) {
        showNotice('لطفاً شماره همراه معتبر خود را وارد فرمایید.', 'error');
        return;
      }

      submitBtn.disabled = true;
      submitBtn.style.opacity = '0.7';
      submitBtn.innerHTML = '<span>در حال ثبت استعلام کارشناسی و بررسی...</span>';
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
        submitBtn.innerHTML = '<span>ثبت درخواست ارزیابی فنی و مشاوره خرید</span><svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14M12 5l7 7-7 7"/></svg>';

        if (data && data.success) {
          var code = (data.data && data.data.tracking_code) ? data.data.tracking_code : 'MD-INSPECT-2026';
          if (trackingPill) trackingPill.textContent = code;

          form.style.display = 'none';
          if (header) header.style.display = 'none';
          if (successHud) successHud.style.display = 'block';

          var rfqSec = document.getElementById('rfq-section');
          if (rfqSec) {
            rfqSec.scrollIntoView({ behavior: 'smooth', block: 'center' });
          }
        } else {
          var errMsg = (data && data.data && data.data.message) ? data.data.message : 'خطایی در ثبت اطلاعات رخ داد. لطفاً مجدداً تلاش فرمایید.';
          showNotice(errMsg, 'error');
        }
      })
      .catch(function(err) {
        submitBtn.disabled = false;
        submitBtn.style.opacity = '1';
        submitBtn.innerHTML = '<span>ثبت درخواست ارزیابی فنی و مشاوره خرید</span><svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14M12 5l7 7-7 7"/></svg>';
        showNotice('خطا در برقراری ارتباط با سرور. لطفاً مجدداً تلاش نمایید.', 'error');
      });
    });
  }

  if (resetBtn) {
    resetBtn.addEventListener('click', function() {
      form.reset();
      form.style.display = 'grid';
      if (header) header.style.display = 'block';
      if (successHud) successHud.style.display = 'none';
      if (notice) notice.style.display = 'none';
    });
  }

  function showNotice(msg, type) {
    if (!notice) return;
    notice.textContent = msg;
    notice.style.display = 'block';
  }

  // 4. Parallax Tilt 3D Stage on Mousemove
  var stage = document.querySelector('[data-delta-stage]');
  var robot = document.querySelector('[data-delta-robot]');
  var shadowEl = document.querySelector('[data-delta-shadow]'); // parallax ground plane element
  var hud = document.querySelector('[data-delta-hud]');

  if (stage && robot) {
    stage.addEventListener('mousemove', function (e) {
      var rect = stage.getBoundingClientRect();
      var x = e.clientX - rect.left;
      var y = e.clientY - rect.top;
      var cx = rect.width / 2;
      var cy = rect.height / 2;
      var dx = (x - cx) / cx;
      var dy = (y - cy) / cy;

      var rotX = -dy * 12;
      var rotY = dx * 16;

      robot.style.transform = 'perspective(1000px) rotateX(' + rotX + 'deg) rotateY(' + rotY + 'deg) translateZ(20px)';
      if (shadowEl) {
        shadowEl.style.transform = 'translate(' + (-dx * 18) + 'px, ' + (-dy * 8) + 'px) scale(' + (1 - Math.abs(dy) * 0.1) + ')';
      }
      if (hud) {
        hud.style.transform = 'perspective(1000px) rotateX(' + (rotX * 0.6) + 'deg) rotateY(' + (rotY * 0.6) + 'deg) translateZ(40px)';
      }
    });

    stage.addEventListener('mouseleave', function () {
      robot.style.transform = 'perspective(1000px) rotateX(0deg) rotateY(0deg) translateZ(0)';
      if (shadowEl) shadowEl.style.transform = 'translate(0, 0) scale(1)';
      if (hud) hud.style.transform = 'perspective(1000px) rotateX(0deg) rotateY(0deg) translateZ(0)';
    });
  }
})();
</script>

<?php
md_render_optional_gutenberg_slot();
get_footer();
