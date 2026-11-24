<?php
/**
 * Template Name: Pillar 5: Corporate Training (ستون ۵: آموزش سازمانی و ارتقای تیم‌های فنی کارخانجات صنعتی)
 * Template Post Type: page
 *
 * Description: Dedicated Landing Page for Pillar 05: On-site & Corporate Technical Training, Blueprint Reading, Shop-floor SolidWorks & GD&T
 * Follows Cyber-Mechanical Dark Design System + Ponytail Doctrine + Strict Symmetry Rules
 *
 * @package HelloElementor
 */

defined( 'ABSPATH' ) || exit;

get_header();
?>

<!-- ========================================================================
     1. PILLAR 05 HERO BANNER & STATS STRIP
     ======================================================================== -->
<section class="page-hero-banner pillar-hero-wrap" aria-label="هیدر آموزش سازمانی و ارتقای تیم‌های فنی کارخانجات">
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
          <span class="breadcrumb-current" aria-current="page">آموزش سازمانی کارخانجات صنعتی</span>
        </nav>

        <!-- Corporate Sub-badge -->
        <div class="page-hero-badge">
          <span class="pulse-indicator" aria-hidden="true"></span>
          <span class="mono">PILLAR 05 // ON-SITE &amp; CORPORATE CAD/CAM/CAE TRAINING</span>
        </div>

        <!-- Main Page Title (Split in 2 Lines for Compact Width) -->
        <h1 class="page-hero-title pillar-hero-title-split">
          <span class="title-line-1">آموزش سازمانی و ارتقای تیم‌های فنی کارخانجات</span>
          <span class="title-line-2 text-accent">از نقشه‌خوانی استاندارد تا سالیدورکس کارگاهی و GD&amp;T در محل خط تولید</span>
        </h1>

        <!-- Summary Lead Text -->
        <div class="page-hero-excerpt">
          برگزاری دوره‌های تخصصی و کاملاً سفارشی در محل کارخانه یا آنلاین متمرکز بر پروژه‌ها و نقشه‌های واقعی خط تولید شما؛ با هدف رفع گسست عمیق بین دفتر فنی و سالن ساخت، کاهش ضایعات تولید، حذف دوباره‌کاری‌ها و ایجاد استاندارد پایدار مستندسازی مهندسی تحت هدایت مستقیم مهندس حسین وطن‌دوست.
        </div>

        <!-- Hero Action Buttons -->
        <div class="pillar-hero-actions">
          <a href="#rfq-section" class="btn btn-primary">
            <span>استعلام دوره سازمانی و اعزام مدرس</span>
            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
              <path d="M5 12h14M12 5l7 7-7 7"/>
            </svg>
          </a>
          <a href="#curriculum-section" class="btn btn-outline">
            <span>بررسی ماژول‌های آموزشی کارخانجات</span>
          </a>
        </div>
      </div>

      <!-- Left Column: 3D Interactive Stage Engine (Off-DOM Canvas Mechanism & Detached HUD) -->
      <div class="pillar-hero-visual-col md-hero-visual-col">
        <?php if ( function_exists( 'md_render_hero_3d_stage' ) ) { md_render_hero_3d_stage( 'corporate-training' ); } ?>
      </div>

    </div>
  </div>
</section>

<!-- 1.1 KEY CORPORATE METRICS STRIP -->
<section class="services-stats-strip pillar-stats-strip" aria-label="شاخص‌های عملکردی آموزش سازمانی کارخانجات">
  <div class="container">
    <div class="services-stats-grid">

      <!-- Metric 01 -->
      <div class="stat-item-box">
        <div class="stat-icon-wrap" aria-hidden="true">
          <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2">
            <polyline points="23 18 13.5 8.5 8.5 13.5 1 6"/>
            <polyline points="17 18 23 18 23 12"/>
          </svg>
        </div>
        <div>
          <span class="stat-value">۴۰٪ تا ۶۰٪</span>
          <span class="stat-label">کاهش خطاهای ابعادی، دوباره‌کاری و ضایعات سالن تولید</span>
        </div>
      </div>

      <!-- Metric 02 -->
      <div class="stat-item-box">
        <div class="stat-icon-wrap" aria-hidden="true">
          <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2">
            <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/>
          </svg>
        </div>
        <div>
          <span class="stat-value">۱۰۰٪ سفارشی</span>
          <span class="stat-label">سفارشی‌سازی کامل سرفصل بر پایه قطعات و ماشین‌آلات کارخانه</span>
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
          </svg>
        </div>
        <div>
          <span class="stat-value">ASME / ISO</span>
          <span class="stat-label">پیاده‌سازی زبان مشترک تلرانس‌گذاری بین طراحی، CNC و QC</span>
        </div>
      </div>

      <!-- Metric 04 -->
      <div class="stat-item-box">
        <div class="stat-icon-wrap" aria-hidden="true">
          <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2">
            <rect x="2" y="7" width="20" height="14" rx="2" ry="2"/>
            <path d="M16 21V5a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v16"/>
          </svg>
        </div>
        <div>
          <span class="stat-value">محل کارخانه</span>
          <span class="stat-label">برگزاری جلسات کارگاهی در محل کارخانه یا آنلاین اختصاصی</span>
        </div>
      </div>

    </div>
  </div>
</section>
<?php if ( function_exists( 'md_render_pillar_jump_nav' ) ) { md_render_pillar_jump_nav( array( '#comparison-section' => 'تفاوت رویکرد', '#curriculum-section' => 'سرفصل‌های ۴گانه', '#case-study-proof' => 'کالبدشکافی خطا', '#workflow-stages' => 'فرآیند اجرا', '#deliverables-faq' => 'دستاوردها و FAQ', '#rfq-section' => 'هماهنگی دوره سازمانی ←' ) ); } ?>


<!-- ========================================================================
     2. COMPARISON & PROBLEM SECTION (جدول مقایسه‌ای دو ستونه - کارگاه درون‌کارخانه‌ای vs آموزشگاه‌های متفرقه)
     ======================================================================== -->
<section class="pillar-vs-section" id="comparison-section" aria-label="مقایسه رویکرد آموزش سازمانی ماشین دیزاین در برابر دوره‌های متفرقه">
  <div class="container">

    <div class="pillar-vs-header">
      <h2>چرا دوره‌های عمومی آموزشگاهی تغییری در کیفیت ساخت کارخانه‌ها ایجاد نمی‌کنند؟</h2>
      <p>
        در بیشتر کارخانه‌ها، مهندسان طراح بر نرم‌افزارهای CAD مسلط‌اند اما از محدودیت‌های کورس ماشین‌کاری، لقی‌ها و خطاهای خم‌کاری کارگاه بی‌اطلاعند. مقایسه زیر تفاوت بنیادی کارگاه درون‌سازمانی ماشین دیزاین را با پکیج‌های تئوری بازار نشان می‌دهد.
      </p>
    </div>

    <div class="pillar-vs-grid">

      <!-- Column 1: Generic Outdated Training -->
      <div class="vs-card vs-card-outdated">
        <div class="vs-card-top-tag">
          <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
            <circle cx="12" cy="12" r="10"/>
            <line x1="15" y1="9" x2="9" y2="15"/>
            <line x1="9" y1="9" x2="15" y2="15"/>
          </svg>
          <span><span class="mono" dir="ltr">OUTDATED //</span> دوره‌های متفرقه و آموزشگاه‌های بیرون</span>
        </div>

        <h3 class="vs-card-title">دوره‌های پکیجی و آموزشگاهی متفرقه</h3>
        <p class="vs-card-desc">
          تدریس مباحث تئوری و انتزاعی نرم‌افزار بدون توجه به ماشین‌آلات و چالش‌های جاری خط تولید.
        </p>

        <div class="vs-rows-list">
          <!-- Row 1 -->
          <div class="vs-item-row">
            <div class="vs-icon-marker" aria-hidden="true">
              <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
                <line x1="18" y1="6" x2="6" y2="18"/>
                <line x1="6" y1="6" x2="18" y2="18"/>
              </svg>
            </div>
            <div class="vs-item-content">
              <h4>فایل‌های تمرینی: نمونه‌های فانتزی اینترنتی</h4>
              <p>طراحی قطعات دکوراتیو (قوری، اسباب‌بازی و جام) بدون کوچک‌ترین شباهت به شاسی‌ها و مکانیزم‌های صنعتی کارخانه شما.</p>
            </div>
          </div>

          <!-- Row 2 -->
          <div class="vs-item-row">
            <div class="vs-icon-marker" aria-hidden="true">
              <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
                <line x1="18" y1="6" x2="6" y2="18"/>
                <line x1="6" y1="6" x2="18" y2="18"/>
              </svg>
            </div>
            <div class="vs-item-content">
              <h4>تلرانس‌گذاری: تئوری کتابی و غیراقتصادی</h4>
              <p>اعمال تلرانس‌های بسیار فشرده و نشدنی بدون توجه به لقی‌ها و دقت واقعی دستگاه‌های تراش و خم‌کن سالن ساخت.</p>
            </div>
          </div>

          <!-- Row 3 -->
          <div class="vs-item-row">
            <div class="vs-icon-marker" aria-hidden="true">
              <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
                <line x1="18" y1="6" x2="6" y2="18"/>
                <line x1="6" y1="6" x2="18" y2="18"/>
              </svg>
            </div>
            <div class="vs-item-content">
              <h4>مخاطب دوره: صرفاً یک طراح به صورت جزیره‌ای</h4>
              <p>عدم مشارکت تیم‌های ساخت و کنترل کیفیت؛ باقی ماندن گسست و اختلافات فنی همیشگی بین دفتر طراحی و کارگاه.</p>
            </div>
          </div>

          <!-- Row 4 -->
          <div class="vs-item-row">
            <div class="vs-icon-marker" aria-hidden="true">
              <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
                <line x1="18" y1="6" x2="6" y2="18"/>
                <line x1="6" y1="6" x2="18" y2="18"/>
              </svg>
            </div>
            <div class="vs-item-content">
              <h4>خروجی دوره: یک مدرک کاغذی بی‌اثر</h4>
              <p>پس از پایان دوره، دوباره‌کاری‌ها، ضایعات فلزی و توقفات خط مونتاژ کارخانه بدون هیچ تغییری ادامه پیدا می‌کند.</p>
            </div>
          </div>
        </div>
      </div>

      <!-- Column 2: MachineDesign In-Plant Workshop -->
      <div class="vs-card vs-card-machinedesign">
        <div class="vs-card-top-tag">
          <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
            <polyline points="20 6 9 17 4 12"/>
          </svg>
          <span><span class="mono" dir="ltr">ENGINEERING PROOF //</span> کارگاه درون‌کارخانه‌ای ماشین دیزاین</span>
        </div>

        <h3 class="vs-card-title">کارگاه اختصاصی در محل خط تولید شما</h3>
        <p class="vs-card-desc">
          آموزش کاربردی ۱۰۰٪ متکی بر نقشه‌ها، مکانیزم‌ها، تجهیزات ساخت و ماشین‌آلات موجود در کارخانه کارفرما.
        </p>

        <div class="vs-rows-list">
          <!-- Row 1 -->
          <div class="vs-item-row">
            <div class="vs-icon-marker" aria-hidden="true">
              <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
                <polyline points="20 6 9 17 4 12"/>
              </svg>
            </div>
            <div class="vs-item-content">
              <h4>فایل‌های تمرینی: نقشه‌ها و پروژه‌های واقعی کارخانه</h4>
              <p>فایل‌های CAD جاری شرکت وارد کلاس شده و در طول دوره مستقیماً عیب‌یابی، بهینه‌سازی و استانداردسازی می‌شوند.</p>
            </div>
          </div>

          <!-- Row 2 -->
          <div class="vs-item-row">
            <div class="vs-icon-marker" aria-hidden="true">
              <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
                <polyline points="20 6 9 17 4 12"/>
              </svg>
            </div>
            <div class="vs-item-content">
              <h4>تلرانس‌گذاری: منطبق بر دقت و ابزار کارگاه (GD&amp;T)</h4>
              <p>دیتوم‌گذاری و تلرانس‌های هندسی دقیقا بر پایه فیکسچرهای تراشکاری، کورس CNC و گیج‌های کنترل کیفیت شما تدوین می‌شود.</p>
            </div>
          </div>

          <!-- Row 3 -->
          <div class="vs-item-row">
            <div class="vs-icon-marker" aria-hidden="true">
              <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
                <polyline points="20 6 9 17 4 12"/>
              </svg>
            </div>
            <div class="vs-item-content">
              <h4>مخاطب دوره: زبان مشترک طراحی، تولید و QC</h4>
              <p>حضور همزمان یا ماژولار مهندسان طراح، سرپرستان کارگاه و کارشناسان QC؛ پایان دادن به تناقضات ساخت برای همیشه.</p>
            </div>
          </div>

          <!-- Row 4 -->
          <div class="vs-item-row">
            <div class="vs-icon-marker" aria-hidden="true">
              <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
                <polyline points="20 6 9 17 4 12"/>
              </svg>
            </div>
            <div class="vs-item-content">
              <h4>خروجی دوره: تدوین کتابچه CAD Manual و کاهش ۴۰٪ ضایعات</h4>
              <p>دستورالعمل جامع نقشه‌کشی اختصاصی شرکت + استقلال کامل فنی تیم و جبران فوری هزینه دوره از محل کاهش ضایعات.</p>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>

<!-- ========================================================================
     3. INTERACTIVE CURRICULUM & AUDIENCE MATRIX (ماژول‌های ۴ گانه با تب‌بندی تعاملی)
     ======================================================================== -->
<section class="curriculum-tabbed-section" id="curriculum-section" aria-label="ماژول‌های تخصصی آموزش سازمانی کارخانجات">
  <div class="container">

    <div class="services-section-header">
      <h2>ماژول‌های ۴ گانه ارتقای مهارت پرسنل مهندسی، تولید و کنترل کیفیت</h2>
      <p>
        سرفصل‌های کارگاهی طراحی‌شده برای حل بزرگ‌ترین گلوگاه‌های ساخت و نقشه‌کشی در صنایع ماشین‌سازی و قطعه‌سازی.
      </p>
    </div>

    <!-- Tab Navigation Buttons -->
    <div class="curriculum-tab-nav" role="tablist">
      <button type="button" class="curriculum-tab-btn active" data-tab="tab-module-1" role="tab" aria-selected="true">
        <span class="tab-btn-code mono">MODULE // 01</span>
        <span class="tab-btn-title">نقشه‌خوانی صنعتی و استانداردسازی (ISO / DIN / ASME)</span>
      </button>

      <button type="button" class="curriculum-tab-btn" data-tab="tab-module-2" role="tab" aria-selected="false">
        <span class="tab-btn-code mono">MODULE // 02</span>
        <span class="tab-btn-title">سالیدورکس کارگاهی بر اساس ساخت و ورق‌کاری (DFMA)</span>
      </button>

      <button type="button" class="curriculum-tab-btn" data-tab="tab-module-3" role="tab" aria-selected="false">
        <span class="tab-btn-code mono">MODULE // 03</span>
        <span class="tab-btn-title">تلرانس‌گذاری هندسی کاربردی کف کارگاه (Shop-Floor GD&amp;T)</span>
      </button>

      <button type="button" class="curriculum-tab-btn" data-tab="tab-module-4" role="tab" aria-selected="false">
        <span class="tab-btn-code mono">MODULE // 04</span>
        <span class="tab-btn-title">شبیه‌سازی و تحلیل تنش کاربردی (Production FEA)</span>
      </button>
    </div>

    <!-- Tab Content Panes -->
    <div class="curriculum-tab-content-area">

      <!-- Pane 01: Blueprint Reading -->
      <div id="tab-module-1" class="tab-pane active" role="tabpanel">
        <div class="tab-pane-header">
          <div class="tab-pane-main-info">
            <div class="tab-pane-title-group">
              <h3>ماژول ۱: نقشه‌خوانی صنعتی پیشرفته، علائم جوشکاری و استانداردسازی نقشه‌ها</h3>
              <p>آموزش تفسیر بدون ابهام علائم نقشه‌کشی بین‌المللی برای اپراتورهای ماشین‌کاری، سرپرستان ساخت و کارشناسان کنترل کیفیت جهت جلوگیری از تفسیرهای سلیقه‌ای در کارگاه.</p>
            </div>
            <div class="tab-pane-badges">
              <span class="tab-meta-badge badge-audience">
                <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/></svg>
                <span>مخاطبین: سرپرستان سالن تولید، اپراتورهای CNC، بازرسان QC</span>
              </span>
              <span class="tab-meta-badge badge-duration">
                <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>
                <span>مدت کارگاه: ۱۶ الی ۲۴ ساعت کارگاهی</span>
              </span>
            </div>
          </div>
          <div class="tab-pane-image-slot" aria-label="تصویر شماتیک ماژول ۱">
            <img src="<?php echo esc_url( get_stylesheet_directory_uri() . '/assets/images/pillar5-module1-schematic.png' ); ?>" 
                 alt="نقشه‌خوانی صنعتی پیشرفته، علائم جوشکاری و استانداردسازی نقشه‌ها" 
                 loading="lazy" 
                 width="280" 
                 height="160">
          </div>
        </div>

        <div class="tab-syllabus-grid">
          <div class="tab-syllabus-card">
            <h5>۰۱ // علائم جوشکاری AWS و ISO</h5>
            <p>تفسیر انواع پاس جوش، علائم گلوگاه جوش، بازرسی چشمی و جوش‌های پیرامونی در شاسی‌های صنعتی سنگین.</p>
          </div>
          <div class="tab-syllabus-card">
            <h5>۰۲ // علائم صافی سطح و زبری (Ra / Rz)</h5>
            <p>انطباق الزامات تلرانسی صافی سطح با فرآیندهای سنگ‌زنی، تراشکاری و سوپرفینیش کارگاه.</p>
          </div>
          <div class="tab-syllabus-card">
            <h5>۰۳ // فرمت استاندارد لایه‌ها و BOM</h5>
            <p>استانداردسازی جدول قطعات (Bill of Materials)، کدگذاری قطعات و قواعد ویرایش نقشه‌ها (Revision Control).</p>
          </div>
        </div>
      </div>

      <!-- Pane 02: Shop-floor SolidWorks & DFMA -->
      <div id="tab-module-2" class="tab-pane" role="tabpanel">
        <div class="tab-pane-header">
          <div class="tab-pane-main-info">
            <div class="tab-pane-title-group">
              <h3>ماژول ۲: مدل‌سازی پیشرفته SolidWorks بر اساس فرآیند ساخت و ورق‌کاری (DFMA)</h3>
              <p>آموزش مدل‌سازی قطعات و ماشین‌آلات به گونه‌ای که هزینه ساخت، زمان برش لیزر، تعداد مراحل خم‌کاری و مونتاژ در حداقل ممکن قرار گیرد.</p>
            </div>
            <div class="tab-pane-badges">
              <span class="tab-meta-badge badge-audience">
                <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/></svg>
                <span>مخاطبین: مهندسان طراح مکانیک، نقشه‌کش‌های صنعتی، مدیران فنی</span>
              </span>
              <span class="tab-meta-badge badge-duration">
                <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>
                <span>مدت کارگاه: ۲۴ الی ۳۶ ساعت کارگاهی</span>
              </span>
            </div>
          </div>
          <div class="tab-pane-image-slot" aria-label="تصویر شماتیک ماژول ۲">
            <img src="<?php echo esc_url( get_stylesheet_directory_uri() . '/assets/images/pillar5-module2-schematic.png' ); ?>" 
                 alt="مدل‌سازی پیشرفته SolidWorks بر اساس فرآیند ساخت و ورق‌کاری DFMA" 
                 loading="lazy" 
                 width="280" 
                 height="160">
          </div>
        </div>

        <div class="tab-syllabus-grid">
          <div class="tab-syllabus-card">
            <h5>۰۱ // ورق‌کاری و کالیبراسیون K-Factor</h5>
            <p>تنظیم جدول خمش (Gauge Table) بر اساس ضخامت، جنس ورق و سنبه‌های موجود در سالن خم‌کاری شرکت.</p>
          </div>
          <div class="tab-syllabus-card">
            <h5>۰۲ // سازه‌ها و شاسی جوشکاری (Weldments)</h5>
            <p>مدل‌سازی پروفیل‌های استاندارد صنعتی، تهیه خودکار کات‌لیست برش و پیش‌بینی اعوجاج حرارتی جوش.</p>
          </div>
          <div class="tab-syllabus-card">
            <h5>۰۳ // مدیریت اسمبلی‌های سنگین (Large Assemblies)</h5>
            <p>روش‌های سبک‌سازی مدل‌های مونتاژی بزرگ ماشین‌آلات بدون افت سرعت سیستم و جلوگیری از کرش نرم‌افزار.</p>
          </div>
        </div>
      </div>

      <!-- Pane 03: Shop-Floor GD&T -->
      <div id="tab-module-3" class="tab-pane" role="tabpanel">
        <div class="tab-pane-header">
          <div class="tab-pane-main-info">
            <div class="tab-pane-title-group">
              <h3>ماژول ۳: تلرانس‌گذاری ابعادی و هندسی کاربردی کف کارگاه (Shop-Floor GD&amp;T)</h3>
              <p>پیاده‌سازی استاندارد مرجع ASME Y14.5 در خطوط ماشین‌کاری و مونتاژ؛ پایان دادن به تناقضات ابعادی بین طراح، تراشکار و واحد QC.</p>
            </div>
            <div class="tab-pane-badges">
              <span class="tab-meta-badge badge-audience">
                <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/></svg>
                <span>مخاطبین: مهندسان مکانیک، برنامه‌نویسان CNC، بازرسان CMM و QC</span>
              </span>
              <span class="tab-meta-badge badge-duration">
                <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>
                <span>مدت کارگاه: ۱۸ الی ۲۴ ساعت کارگاهی</span>
              </span>
            </div>
          </div>
          <div class="tab-pane-image-slot" aria-label="تصویر شماتیک ماژول ۳">
            <img src="<?php echo esc_url( get_stylesheet_directory_uri() . '/assets/images/pillar5-module3-schematic.png' ); ?>" 
                 alt="تلرانس‌گذاری ابعادی و هندسی کاربردی کف کارگاه GD&T" 
                 loading="lazy" 
                 width="280" 
                 height="160">
          </div>
        </div>

        <div class="tab-syllabus-grid">
          <div class="tab-syllabus-card">
            <h5>۰۱ // فریم کنترلی و دیتوم‌های واقعی ساخت</h5>
            <p>تعیین دیتوم‌های اولیه، ثانویه و ثالثه بر اساس فیکسچرها و فرآیند واقعی ماشین‌کاری در کارگاه کارفرما.</p>
          </div>
          <div class="tab-syllabus-card">
            <h5>۰۲ // تلرانس موقعیت (Position) و شرط ماده</h5>
            <p>اعمال شرط حداکثر ماده (MMC) و شرط حداقل ماده (LMC) جهت افزایش چشمگیر نرخ پذیرش قطعات در QC.</p>
          </div>
          <div class="tab-syllabus-card">
            <h5>۰۳ // محاسبات انباشت تلرانسی (Stack-up)</h5>
            <p>محاسبه زنجیره تلرانس در مکانیزم‌های چندقطعه‌ای جهت اطمینان از چرخش بدون گریپاژ شفت و یاتاقان‌ها.</p>
          </div>
        </div>
      </div>

      <!-- Pane 04: Production FEA -->
      <div id="tab-module-4" class="tab-pane" role="tabpanel">
        <div class="tab-pane-header">
          <div class="tab-pane-main-info">
            <div class="tab-pane-title-group">
              <h3>ماژول ۴: شبیه‌سازی و تحلیل تنش کاربردی المان محدود (Production FEA)</h3>
              <p>توانمندسازی پرسنل مهندسی برای اعتبارسنجی سریع استحکام شاسی‌ها، شفت‌ها و مخازن قبل از صرف هزینه‌های سنگین ساخت فیزیکی.</p>
            </div>
            <div class="tab-pane-badges">
              <span class="tab-meta-badge badge-audience">
                <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/></svg>
                <span>مخاطبین: مهندسان R&amp;D، طراحان مکانیزم، کارشناسان عیب‌یابی</span>
              </span>
              <span class="tab-meta-badge badge-duration">
                <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>
                <span>مدت کارگاه: ۱۶ الی ۲۰ ساعت کارگاهی</span>
              </span>
            </div>
          </div>
          <div class="tab-pane-image-slot" aria-label="تصویر شماتیک ماژول ۴">
            <img src="<?php echo esc_url( get_stylesheet_directory_uri() . '/assets/images/pillar5-module4-schematic.png' ); ?>" 
                 alt="شبیه‌سازی و تحلیل تنش کاربردی المان محدود Production FEA" 
                 loading="lazy" 
                 width="280" 
                 height="160">
          </div>
        </div>

        <div class="tab-syllabus-grid">
          <div class="tab-syllabus-card">
            <h5>۰۱ // شرایط مرزی و قیدگذاری واقعی کارگاهی</h5>
            <p>آموزش اعمال دقیق نیروهای ضربه‌ای، ارتعاشی و گشتاور موتور به جای تکیه‌گاه‌های صلب غیرواقعی.</p>
          </div>
          <div class="tab-syllabus-card">
            <h5>۰۲ // شناسایی نقاط تمرکز تنش در شاسی</h5>
            <p>اصلاح گوشه‌ها و فیلت‌ها در مدل CAD پیش از برش لیزر جهت جلوگیری از ترک‌خوردگی‌های خستگی.</p>
          </div>
          <div class="tab-syllabus-card">
            <h5>۰۳ // تحلیل تغییرفرم الاستیک و کمانش</h5>
            <p>پیش‌بینی میزان خیز شفت‌ها و بازوها زیر بار کاری جهت جلوگیری از گیرپاژ چرخ‌دنده‌ها و یاتاقان‌ها.</p>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>

<!-- ========================================================================
     4. LIVE BLUEPRINT CASE-STUDY / PROOF (سکشن جدید: کالبدشکافی یک خطای واقعی از خط تولید)
     ======================================================================== -->
<section class="blueprint-case-section" id="case-study-proof" aria-label="کالبدشکافی خطای واقعی خط تولید و اصلاح آن در کارگاه آموزشی">
  <div class="container">

    <div class="pillar-vs-header">
      <h2>کالبدشکافی یک خطای واقعی در خط تولید: قبل و بعد از کارگاه آموزشی</h2>
      <p>
        چگونه یک اشتباه ساده در محاسبه ضریب خم‌کاری ورق و دیتوم‌گذاری ناممکن در قطعه تراشکاری، باعث توقف ۴۸ ساعته خط مونتاژ کارخانه و ۶۵ میلیون تومان ضایعات شد؟
      </p>
    </div>

    <div class="case-study-grid">

      <!-- Column 1: Before (Error) -->
      <div class="case-col case-col-before">
        <div class="case-col-badge">
          <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><circle cx="12" cy="12" r="10"/><line x1="12" y1="8" x2="12" y2="12"/><line x1="12" y1="16" x2="12.01" y2="16"/></svg>
          <span><span class="mono" dir="ltr">BEFORE //</span> نقشه اولیه پرخطا (قبل از دوره)</span>
        </div>

        <h3>محاسبه ذهنی ضریب K-Factor و دیتوم‌گذاری ناممکن</h3>
        <p class="case-col-desc">
          مهندس طراح شاسی را با ضریب پیش‌فرض نرم‌افزار مدل‌سازی کرده و دیتوم قطعه تراشکاری را روی سطحی تعریف کرده بود که اپراتور تراش CNC به آن دسترسی نداشت.
        </p>

        <div class="case-breakdown-list">
          <div class="case-point-row">
            <svg class="case-point-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><line x1="18" y1="6" x2="6" y2="18"/><line x1="6" y1="6" x2="18" y2="18"/></svg>
            <div class="case-point-text">
              <strong>نادیده گرفتن ابزار خم‌کن کارگاه:</strong>
              <span>ضریب K-Factor به صورت فرضی ۰.۵ وارد شده بود؛ در نتیجه پس از خم‌کاری ورق ۲ میل، فاصله سوراخ‌های فلنج ۱.۸ میلی‌متر خطا داشت.</span>
            </div>
          </div>

          <div class="case-point-row">
            <svg class="case-point-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><line x1="18" y1="6" x2="6" y2="18"/><line x1="6" y1="6" x2="18" y2="18"/></svg>
            <div class="case-point-text">
              <strong>دیتوم مبهم و بدون فیکسچر:</strong>
              <span>دیتوم اولیه روی سطح ناهموار شاسی ریخته‌گری گذاشته شده بود؛ واحد تراشکاری قطعه را بر اساس یک لبه فرضی صفر گرفت که لنگی ۰.۱۵ میلی‌متر ایجاد کرد.</span>
            </div>
          </div>

          <div class="case-point-row">
            <svg class="case-point-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><line x1="18" y1="6" x2="6" y2="18"/><line x1="6" y1="6" x2="18" y2="18"/></svg>
            <div class="case-point-text">
              <strong>تلرانس نامتعادل و گریپاژ محور:</strong>
              <span>عدم انجام محاسبات انباشتگی تلرانس (Tolerance Stack-up) منجر به عدم چرخش بیرینگ‌ها در تست نهایی زیر بار شد.</span>
            </div>
          </div>
        </div>

        <div class="case-outcome-pill">
          <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2"><path d="M10.29 3.86L1.82 18a2 2 0 0 0 1.71 3h16.94a2 2 0 0 0 1.71-3L13.71 3.86a2 2 0 0 0-3.42 0z"/><line x1="12" y1="9" x2="12" y2="13"/><line x1="12" y1="17" x2="12.01" y2="17"/></svg>
          <span>خسارت کارخانه: ۲۴۰ قطعه ضایعات فلزی + ۴۸ ساعت توقف خط مونتاژ + ۶۵ میلیون تومان هزینه دوباره‌کاری</span>
        </div>
      </div>

      <!-- Column 2: After (Corrected) -->
      <div class="case-col case-col-after">
        <div class="case-col-badge">
          <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg>
          <span><span class="mono" dir="ltr">AFTER //</span> اصلاح در کارگاه آموزشی ماشین دیزاین</span>
        </div>

        <h3>کالیبراسیون تجربی و دیتوم‌گذاری استاندارد بر مبنای فرآیند ساخت</h3>
        <p class="case-col-desc">
          در دومین جلسه کارگاه آموزشی، نقشه توسط تیم و با هدایت مهندس وطن‌دوست اصلاح و به عنوان نمونه پایلوت تولید شد.
        </p>

        <div class="case-breakdown-list">
          <div class="case-point-row">
            <svg class="case-point-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg>
            <div class="case-point-text">
              <strong>تست تجربی و ثبت جدول خمش اختصاصی:</strong>
              <span>ضریب واقعی خم‌کن کارگاه (۰.۳۸) با تست فیزیکی قطعه خام استخراج و در قالب استاندارد سالیدورکس شرکت ذخیره شد.</span>
            </div>
          </div>

          <div class="case-point-row">
            <svg class="case-point-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg>
            <div class="case-point-text">
              <strong>دیتوم منطبق بر پین‌های فیکسچر CNC:</strong>
              <span>دیتوم A روی سطح صاف ماشین‌کاری‌شده قرار گرفت و برای موقعیت سوراخ‌ها تلرانس موقعیت (Position) با شرط MMC اعمال شد.</span>
            </div>
          </div>

          <div class="case-point-row">
            <svg class="case-point-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg>
            <div class="case-point-text">
              <strong>تحلیل زنجیره تلرانس و تضمین لقی ۰.۰۲mm:</strong>
              <span>تلرانس‌گذاری انطباقی بیرینگ‌ها بازطراحی شد؛ به گونه‌ای که حتی در بیشترین انحراف ساخت، مونتاژ بدون چکش و روان صورت گرفت.</span>
            </div>
          </div>
        </div>

        <div class="case-outcome-pill">
          <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/><polyline points="22 4 12 14.01 9 11.01"/></svg>
          <span>دستاورد ماندگار: ضایعات به صفر رسید + زمان مونتاژ ۶۰٪ کاهش یافت + استاندارد خم‌کاری برای کلیه پروژه‌ها ثبت شد</span>
        </div>
      </div>

    </div>
  </div>
</section>

<!-- ========================================================================
     5. TIMELINE WORKFLOW (فرآیند سیستماتیک ۴ مرحله‌ای اجرای دوره سازمانی)
     ======================================================================== -->
<section class="stepper-timeline-section" id="workflow-stages" aria-label="فرآیند سیستماتیک ۴ مرحله‌ای اجرای دوره سازمانی">
  <div class="container">

    <div class="workflow-header-wrap">
      <h2>فرآیند سیستماتیک ۴ مرحله‌ای اجرای آموزش درون‌سازمانی</h2>
      <p>
        از عارضه‌یابی نقشه‌های کارخانه تا کارگاه عملی و پشتیبانی مداوم جهت اطمینان از استقرار کامل آموخته‌ها.
      </p>
    </div>

    <!-- Connected Linear Stepper -->
    <div class="stepper-linear-wrap">

      <!-- Step 01 -->
      <div class="stepper-item-card">
        <span class="stepper-stage-tag mono">STAGE // 01</span>
        <h4>عارضه‌یابی میدانی و ارزیابی مهارت (Audit)</h4>
        <p>بررسی نمونه نقشه‌های ساخت جاری کارخانه، شناسایی خطاهای متداول و مصاحبه فنی با سرپرستان تولید جهت استخراج نیازهای فوری.</p>
      </div>

      <!-- Step 02 -->
      <div class="stepper-item-card">
        <span class="stepper-stage-tag mono">STAGE // 02</span>
        <h4>تدوین سرفصل اختصاصی و سناریوهای کارگاهی</h4>
        <p>تنظیم درس‌نامه کاملاً بومی با قطعات، فیکسچرها و مکانیزم‌های واقعی خط تولید شما و هماهنگی ساعات کلاس با شیفت‌های کارخانه.</p>
      </div>

      <!-- Step 03 -->
      <div class="stepper-item-card">
        <span class="stepper-stage-tag mono">STAGE // 03</span>
        <h4>اجرای کارگاه عملی در محل کارخانه یا آنلاین</h4>
        <p>برگزاری جلسات تعاملی همراه با مدل‌سازی زنده، رفع اشکال مستقیم روی فایل‌های تیم و آموزش تکنیک‌های ساخت بدون خطا.</p>
      </div>

      <!-- Step 04 -->
      <div class="stepper-item-card">
        <span class="stepper-stage-tag mono">STAGE // 04</span>
        <h4>تدوین آیین‌نامه SOP و پشتیبانی پس از دوره</h4>
        <p>تدوین کتابچه راهنمای استاندارد نقشه‌کشی کارخانه و ۳ ماه پشتیبانی فنی و نظارت بر نقشه‌های جدید جهت تثبیت کامل مهارت‌ها.</p>
      </div>

    </div>
  </div>
</section>

<!-- ========================================================================
     6. DELIVERABLES & FAQ SPLIT SECTION (ترکیب دستاوردهای دوره با سوالات متداول مدیران)
     ======================================================================== -->
<section class="deliv-faq-split-section" id="deliverables-faq" aria-label="دستاوردهای ملموس دوره سازمانی و پاسخ به سوالات متداول مدیران">
  <div class="container">

    <div class="services-section-header">
      <h2>دستاوردهای ملموس دوره و پاسخ به دغدغه‌های مدیران کارخانجات</h2>
      <p>
        دارایی‌هایی مدون که دانش فنی را درون کارخانه نهادینه ساخته و ابهامات هماهنگی برگزاری کارگاه را برطرف می‌کنند.
      </p>
    </div>

    <div class="deliv-faq-grid">

      <!-- Right Column: Deliverables Compact Stack -->
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
            <h4>کتابچه استاندارد نقشه‌کشی اختصاصی شرکت (CAD Manual)</h4>
            <p>تدوین دستورالعمل مکتوب فرمت نقشه‌ها، تنظیمات لایه‌ها، فرمت جدول قطعات (BOM)، قواعد نام‌گذاری فایل‌ها و استاندارد تلرانس‌های سازمانی متناسب با برند شما.</p>
          </div>
        </div>

        <!-- Item 02 -->
        <div class="deliv-compact-item">
          <div class="deliv-item-icon" aria-hidden="true">
            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
              <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/>
              <polyline points="22 4 12 14.01 9 11.01"/>
            </svg>
          </div>
          <div class="deliv-item-content">
            <h4>چک‌لیست‌های صحه‌گذاری نقشه قبل از ارسال به کارگاه</h4>
            <p>پروتکل رسمی ارزیابی و امضای نقشه‌ها قبل از ساخت؛ شامل بررسی انطباقات، تلرانس‌های هندسی، محدودیت‌های ابزار و تایید نهایی جهت به صفر رساندن دوباره‌کاری.</p>
          </div>
        </div>

        <!-- Item 03 -->
        <div class="deliv-compact-item">
          <div class="deliv-item-icon" aria-hidden="true">
            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
              <rect x="2" y="7" width="20" height="14" rx="2" ry="2"/>
              <path d="M16 21V5a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v16"/>
            </svg>
          </div>
          <div class="deliv-item-content">
            <h4>استقلال فنی و گواهینامه معتبر ارتقای مهارت تیم</h4>
            <p>صدور گواهینامه مهارت فنی برای پرسنل شرکت و ایجاد استقلال کامل تیم جهت طراحی، بازطراحی و پشتیبانی ماشین‌آلات بدون وابستگی به پیمانکاران متفرقه بیرونی.</p>
          </div>
        </div>

      </div>

      <!-- Left Column: Factory Managers FAQ Accordion -->
      <div class="faq-accordion-col">
        <div class="faq-col-header">
          <h3>پاسخ به سوالات و دغدغه‌های پرتکرار مدیران</h3>
        </div>

        <div class="faq-accordion-list" id="corporateFaqList">

          <!-- FAQ 01 -->
          <div class="faq-accordion-item open">
            <button type="button" class="faq-question-btn" aria-expanded="true">
              <span>نحوه هماهنگی ساعات کلاس با شیفت‌های کاری خط تولید چگونه است؟</span>
              <svg class="faq-arrow-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="6 9 12 15 18 9"/></svg>
            </button>
            <div class="faq-answer-body">
              ساعات برگزاری با هماهنگی کامل مدیریت کارخانه و منابع انسانی تنظیم می‌شود. امکان برگزاری در ساعات انتهای شیفت کاری، روزهای پنج‌شنبه، یا برگزاری جلسات به صورت فشرده دو روز در هفته وجود دارد تا خللی در روند جاری تولید کارخانه ایجاد نشود.
            </div>
          </div>

          <!-- FAQ 02 -->
          <div class="faq-accordion-item">
            <button type="button" class="faq-question-btn" aria-expanded="false">
              <span>آیا فایل‌ها و نقشه‌های کارخانه تحت قرارداد محرمانگی (NDA) بررسی می‌شوند؟</span>
              <svg class="faq-arrow-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="6 9 12 15 18 9"/></svg>
            </button>
            <div class="faq-answer-body">
              بله، قطعاً. پیش از دریافت هرگونه فایل، نقشه یا اطلاعات فنی، قرارداد رسمی محرمانگی اطلاعات (NDA) میان شرکت شما و ماشین دیزاین امضا می‌شود. کلیه فایل‌ها صرفاً روی سیستم‌های کارفرما بررسی شده و هیچ داده‌ای از محیط کارخانه خارج نمی‌شود.
            </div>
          </div>

          <!-- FAQ 03 -->
          <div class="faq-accordion-item">
            <button type="button" class="faq-question-btn" aria-expanded="false">
              <span>پیش‌نیاز سطح علمی و نرم‌افزاری پرسنل برای شرکت در دوره چیست؟</span>
              <svg class="faq-arrow-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="6 9 12 15 18 9"/></svg>
            </button>
            <div class="faq-answer-body">
              پیش از شروع، یک جلسه ارزیابی سطح مهارت پرسنل انجام می‌شود. دوره‌ها ماژولار هستند؛ بنابراین سرفصل‌ها به گونه‌ای تفکیک می‌شوند که برای تکنسین‌های ساخت بر نقشه‌خوانی و تلرانس متمرکز باشد و برای مهندسان طراح، بر اصول مدل‌سازی DFMA و شبیه‌سازی تمرکز یابد.
            </div>
          </div>

          <!-- FAQ 04 -->
          <div class="faq-accordion-item">
            <button type="button" class="faq-question-btn" aria-expanded="false">
              <span>نحوه پشتیبانی ۳ ماهه پس از اتمام کارگاه به چه صورت اجرا می‌شود؟</span>
              <svg class="faq-arrow-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="6 9 12 15 18 9"/></svg>
            </button>
            <div class="faq-answer-body">
              پس از پایان جلسات، یک کانال ارتباطی مستقیم و جلسات بازبینی دوره‌ای به مدت ۳ ماه برقرار خواهد بود. در این مدت، نقشه‌های جدید ترسیم‌شده توسط پرسنل ممیزی شده و اشکالات احتمالی برطرف می‌گردد تا استانداردها به صورت پایدار در سازمان نهادینه شوند.
            </div>
          </div>

        </div>
      </div>

    </div>
  </div>
</section>

<!-- ========================================================================
     7. INTAKE FORM & INSTRUCTOR AUTHORITY CARD (فرم استعلام و کارت اعتبار مدرس)
     ======================================================================== -->
<section class="pillar-rfq-dual-section" id="rfq-section" aria-label="فرم استعلام دوره سازمانی و پروفایل مدرس">
  <div class="container">
    <div class="rfq-dual-grid">

      <!-- Column 1: Instructor Authority Card (حذف تکرارها و تقویت اعتبار مدرس) -->
      <div class="instructor-authority-panel">
        <div>
          <div class="rfq-trust-badge mono">
            <span class="rfq-led" aria-hidden="true"></span>
            <span>ACCREDITED INSTRUCTOR // LEAD INDUSTRIAL DESIGNER</span>
          </div>

          <div class="instructor-profile-header">
            <div class="instructor-avatar-wrap">
              <img src="<?php echo esc_url( get_stylesheet_directory_uri() . '/assets/images/instructor-hossein-vatandoust.jpg' ); ?>" 
                   alt="مهندس حسین وطن‌دوست - طراح ارشد ماشین‌آلات و مدرس دوره‌های سازمانی" 
                   loading="lazy" 
                   width="84" 
                   height="84">
            </div>
            <div class="instructor-title-info">
              <h3>مهندس حسین وطن‌دوست</h3>
              <span class="instructor-role-badge mono">LEAD MECHANICAL DESIGNER &amp; INSTRUCTOR</span>
            </div>
          </div>

          <p class="instructor-bio-text">
            طراح ارشد ماشین‌آلات صنعتی، خطوط بسته‌بندی و مکانیزم‌های دقیق؛ متخصص تلرانس‌گذاری ابعادی و هندسی (GD&amp;T بر پایه ASME Y14.5)، مدل‌سازی پیشرفته بر مبنای فرآیند ساخت (DFMA) و مشاور ارتقای مهارت تیم‌های فنی در ده‌ها کارخانه و واحد صنعتی معتبر کشور.
          </p>

          <div class="instructor-stats-mini-grid">
            <div class="mini-stat-card">
              <div class="mini-stat-value">
                <span class="stat-number">۱۵+</span>
                <span class="stat-unit">سال</span>
              </div>
              <span class="mini-stat-label">تجربه مستقیم طراحی و نظارت کارگاهی</span>
            </div>
            <div class="mini-stat-card">
              <div class="mini-stat-value">
                <span class="stat-number">۱۰۰٪</span>
                <span class="stat-unit">تضمین</span>
              </div>
              <span class="mini-stat-label">انطباق آموزش با خط تولید واقعی شما</span>
            </div>
          </div>

          <div class="instructor-guarantee-box">
            <svg class="guarantee-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2">
              <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/>
            </svg>
            <div class="guarantee-text">
              <strong>تضمین بازگشت سرمایه دوره (ROI Guarantee)</strong>
              <p>کاهش عینی خطاهای نقشه‌کشی، دوباره‌کاری‌های مونتاژ و ضایعات قطعه‌سازی در همان نخستین پروژه‌ها هزینه دوره را جبران می‌نماید.</p>
            </div>
          </div>

          <!-- Concrete In-Plant Commitments (توازن چگالی محتوا و حذف فضای مرده) -->
          <div class="instructor-commitments-list">
            <div class="instructor-commitment-item">
              <svg class="commitment-check" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg>
              <span>عارضه‌یابی و بازبینی رایگان نمونه نقشه‌های جاری کارخانه پیش از آغاز کارگاه</span>
            </div>
            <div class="instructor-commitment-item">
              <svg class="commitment-check" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg>
              <span>تدوین کتابچه راهنمای اختصاصی نقشه‌کشی (CAD Manual) منطبق بر تجهیزات ساخت</span>
            </div>
            <div class="instructor-commitment-item">
              <svg class="commitment-check" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg>
              <span>۳ ماه پشتیبانی فنی و نظارت مستقیم مهندس وطن‌دوست بر نقشه‌های جدید تیم</span>
            </div>
          </div>
        </div>

        <!-- Fast Track Direct Phone/Telegram Chip (Symmetrical baseline to NDA chip) -->
        <?php 
        $corp_phone = function_exists('md_get_contact') ? md_get_contact('phone', '') : '';
        $corp_mobile = function_exists('md_get_contact') ? md_get_contact('mobile', '') : '';
        $corp_display = $corp_phone ?: ($corp_mobile ?: '۰۵۱-XXXXXXXX');
        $corp_clean = md_tel_uri( $corp_display );
        ?>
        <div class="rfq-direct-consult-chip">
          <div class="consult-chip-text">
            <span class="consult-chip-label">نیاز به هماهنگی فوری، مشاوره یا اعزام مدرس دارید؟</span>
            <span class="consult-chip-title">گفتگوی مستقیم با مهندس حسین وطن‌دوست</span>
          </div>
          <div class="consult-chip-actions" style="display:flex; flex-wrap:wrap; gap:8px; align-items:center;">
            <a href="tel:<?php echo esc_attr($corp_clean); ?>" class="consult-phone-btn mono" dir="ltr" title="تماس تلفنی مستقیم">
              <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2">
                <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/>
              </svg>
              <span><?php echo esc_html($corp_display); ?></span>
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
            <span class="rfq-form-tag mono">// CORPORATE TRAINING INTAKE</span>
            <h3>استعلام سرفصل، هزینه و زمان‌بندی دوره سازمانی</h3>
            <p>اطلاعات اولیه کارخانه و تیم فنی را ثبت فرمایید؛ پروپوزال سرفصل و هماهنگی جلسه ارزیابی ظرف ۲۴ ساعت تقدیم می‌گردد.</p>
          </div>

          <div id="pillarRfqNotice" class="rfq-hud-notice" style="display:none;" role="alert"></div>

          <form id="pillarRfqForm" class="rfq-form-grid-inner" method="POST">
            <input type="hidden" name="action" value="machinedesign_rfq_submit">
            <input type="hidden" name="source_pillar" value="corporate-training">
            <input type="hidden" name="source_url" value="<?php echo esc_url( get_permalink() ); ?>">
            
            <div class="rfq-input-group">
              <label for="rfq-name">نام و سمت متقاضی (مدیر فنی / مدیر عامل) <span class="req-star">*</span></label>
              <input type="text" id="rfq-name" name="rfq_name" class="rfq-input-field" required placeholder="مثال: مهندس رضوانی - مدیر کارخانه">
            </div>

            <div class="rfq-input-group">
              <label for="rfq-phone">شماره همراه مستقیم هماهنگی <span class="req-star">*</span></label>
              <input type="tel" id="rfq-phone" name="rfq_phone" class="rfq-input-field" required placeholder="۰۹۱۲XXXXXXX" dir="ltr">
            </div>

            <div class="rfq-input-group rfq-field-full">
              <label for="rfq-service-type">ماژول آموزشی دارای اولویت برای کارخانه <span class="req-star">*</span></label>
              <select id="rfq-service-type" name="rfq_service_type" class="rfq-input-field" required>
                <option value="" disabled selected>انتخاب ماژول یا پکیج آموزشی مد نظر...</option>
                <option value="blueprint_reading">نقشه‌خوانی صنعتی پیشرفته و استانداردسازی (ISO / DIN / ASME)</option>
                <option value="solidworks_shop">سالیدورکس کارگاهی بر اساس فرآیند ساخت و ورق‌کاری (DFMA)</option>
                <option value="gdt_shop">تلرانس‌گذاری ابعادی و هندسی کاربردی کف کارگاه (Shop-Floor GD&amp;T)</option>
                <option value="fea_production">شبیه‌سازی و تحلیل تنش کاربردی برای مهندسان تولید</option>
                <option value="full_corporate_pack">پکیج جامع توانمندسازی تیم طراحی و ساخت کارخانه (ترکیبی)</option>
              </select>
            </div>

            <div class="rfq-input-group rfq-field-full">
              <label for="rfq-stage">تعداد پرسنل تیم و شیوه برگزاری مورد نظر</label>
              <select id="rfq-stage" name="rfq_stage" class="rfq-input-field">
                <option value="" disabled selected>انتخاب تعداد پرسنل و شیوه برگزاری...</option>
                <option value="onsite_small">حضوری در محل کارخانه / تیم ۳ تا ۷ نفره</option>
                <option value="onsite_medium">حضوری در محل کارخانه / تیم ۸ تا ۱۵ نفره</option>
                <option value="online_interactive">آنلاین تعاملی اختصاصی شرکت / بدون محدودیت جغرافیایی</option>
                <option value="hybrid">ترکیبی (جلسات آنلاین تئوری + کارگاه حضوری رفع اشکال)</option>
              </select>
            </div>

            <div class="rfq-input-group rfq-field-full">
              <label for="rfq-desc">نام کارخانه، حوزه فعالیت یا چالش اصلی تیم فنی</label>
              <textarea id="rfq-desc" name="rfq_desc" class="rfq-input-field" rows="3" placeholder="نام مجموعه، نوع ماشین‌آلات تولیدی یا مشکلاتی که در ساخت و نقشه‌ها با آن‌ها مواجه هستید بیان فرمایید..."></textarea>
            </div>

            <div class="rfq-field-full">
              <button type="submit" id="pillarRfqSubmitBtn" class="btn-rfq-submit-large">
                <span>ثبت درخواست دوره سازمانی و اعزام کارشناس</span>
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
            <div class="rfq-success-badge mono">// CORPORATE INQUIRY REGISTERED // IN-PLANT TRAINING</div>
            <h4 class="rfq-success-title">درخواست دوره سازمانی کارخانه شما با موفقیت ثبت گردید</h4>
            <div class="rfq-success-code-wrap">
              <span>کد رهگیری سیستمی:</span>
              <span id="rfqTrackingPill" class="rfq-tracking-pill mono">MD-CORP-2026-0000</span>
            </div>
            <p class="rfq-success-desc">
              مشخصات کارخانه و نیازهای آموزشی تیم فنی شما در دپارتمان آموزش سازمانی ماشین دیزاین ثبت شد. کارشناسان ما ظرف حداکثر ۲۴ ساعت کاری جهت هماهنگی جلسه ارزیابی و ارسال سرفصل با شما تماس خواهند گرفت.
            </p>
            <button type="button" id="pillarRfqResetBtn" class="rfq-reset-btn">
              + ثبت درخواست دیگر
            </button>
          </div>
        </div>

        <!-- Security & NDA Guarantee Chip (Symmetrical to Fast-Track Phone Chip) -->
        <div class="rfq-form-guarantee-chip">
          <div class="guarantee-chip-text">
            <span class="consult-chip-label">استاندارد امنیت اطلاعات صنعتی</span>
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

<!-- ========================================================================
     CLIENT-SIDE INTERACTIVE BEHAVIORS: TABS, FAQ ACCORDION & RFQ SUBMISSION
     ======================================================================== -->
<script>
(function() {
  // 1. Tabbed Syllabus Switcher
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

  if (!form) return;

  form.addEventListener('submit', function(e) {
    e.preventDefault();

    var phoneInput = document.getElementById('rfq-phone');
    if (!phoneInput || !phoneInput.value.trim()) {
      showNotice('لطفاً شماره همراه معتبر خود را وارد فرمایید.', 'error');
      return;
    }

    submitBtn.disabled = true;
    submitBtn.style.opacity = '0.7';
    submitBtn.innerHTML = '<span>در حال ثبت استعلام سازمانی و هماهنگی...</span>';
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
      submitBtn.innerHTML = '<span>ثبت درخواست دوره سازمانی و اعزام کارشناس</span><svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14M12 5l7 7-7 7"/></svg>';

      if (data && data.success) {
        var code = (data.data && data.data.tracking_code) ? data.data.tracking_code : 'MD-CORP-2026';
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
      submitBtn.innerHTML = '<span>ثبت درخواست دوره سازمانی و اعزام کارشناس</span><svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14M12 5l7 7-7 7"/></svg>';
      showNotice('خطا در برقراری ارتباط با سرور. لطفاً مجدداً تلاش نمایید.', 'error');
    });
  });

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
    notice.className = 'rfq-hud-notice notice-' + type;
    notice.style.display = 'block';
  }
})();
</script>

<?php
md_render_optional_gutenberg_slot();
get_footer();
