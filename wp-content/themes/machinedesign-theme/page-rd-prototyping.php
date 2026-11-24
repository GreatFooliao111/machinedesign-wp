<?php
/**
 * Template Name: Pillar 3: R&D & Prototyping (ستون ۳: مشاوره سازمانی، تحقیق و توسعه و ساخت نمونه اولیه)
 * Template Post Type: page
 *
 * Description: Dedicated Landing Page for Pillar 03: Industrial R&D, Feasibility Studies, Functional Prototyping & DFMEA
 * Follows Cyber-Mechanical Dark Design System + Ponytail Doctrine + Strict Symmetry Rules
 *
 * @package HelloElementor
 */

defined( 'ABSPATH' ) || exit;

get_header();
?>

<!-- ========================================================================
     1. PILLAR 03 HERO BANNER
     ======================================================================== -->
<section class="page-hero-banner pillar-hero-wrap" aria-label="هیدر تحقیق و توسعه و ساخت نمونه اولیه">
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
          <span class="breadcrumb-current" aria-current="page">تحقیق و توسعه (R&amp;D) و ساخت نمونه اولیه</span>
        </nav>

        <!-- Corporate Sub-badge -->
        <div class="page-hero-badge">
          <span class="pulse-indicator" aria-hidden="true"></span>
          <span class="mono">PILLAR 03 // R&amp;D, FEASIBILITY &amp; PROTOTYPING</span>
        </div>

        <!-- Main Page Title (Split in 2 Lines for Compact Width) -->
        <h1 class="page-hero-title pillar-hero-title-split">
          <span class="title-line-1">تحقیق و توسعه صنعتی (R&amp;D) و ساخت نمونه اولیه</span>
          <span class="title-line-2 text-accent">از کانسپت تا پروتوتایپ عملکردی با تحلیل ریسک DFMEA</span>
        </h1>

        <!-- Summary Lead Text -->
        <div class="page-hero-excerpt">
          امکان‌سنجی فنی و اقتصادی، مدل‌سازی سریع (Rapid Prototyping)، ساخت فیزیکی نمونه کارگاهی و صحه‌گذاری مکانیزم‌های خاص صنعتی قبل از سرمایه‌گذاری سنگین در خطوط تولید انبوه، تحت قرارداد رسمی محرمانگی (NDA).
        </div>

        <!-- Hero Action Buttons -->
        <div class="pillar-hero-actions">
          <a href="#rfq-section" class="btn btn-primary">
            <span>استعلام پروژه R&amp;D و نمونه‌سازی</span>
            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true">
              <path d="M19 12H5M12 19l-7-7 7-7"/>
            </svg>
          </a>
          <a href="#rd-scopes" class="btn btn-outline">
            <span>مشاهده حوزه‌های پروتوتایپینگ</span>
          </a>
        </div>
      </div>

      <!-- Left Column: Delta Robot 3D Interactive Stage (Off-DOM Canvas Mechanism & Detached HUD) -->
      <div class="pillar-hero-visual-col md-hero-visual-col">
        <?php if ( function_exists( 'md_render_hero_3d_stage' ) ) { md_render_hero_3d_stage( 'rd-prototyping' ); } ?>
      </div>

    </div>
  </div>
</section>

<!-- ========================================================================
     2. INDUSTRIAL METRICS STRIP (شاخص‌های عملکردی و اعتماد)
     ======================================================================== -->
<section class="services-stats-strip pillar-stats-strip" aria-label="شاخص‌های عملکردی دپارتمان تحقیق و توسعه">
  <div class="container">
    <div class="services-stats-grid">
      
      <div class="stat-item-box">
        <div class="stat-icon-wrap" aria-hidden="true">
          <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2">
            <polygon points="12 2 2 7 12 12 22 7 12 2"/>
            <polyline points="2 17 12 22 22 17"/>
            <polyline points="2 12 12 17 22 12"/>
          </svg>
        </div>
        <div>
          <span class="stat-value">+۴۰ پروژه</span>
          <span class="stat-label">ساخت پروتوتایپ صنعتی و تست عملکردی کارگاهی</span>
        </div>
      </div>

      <div class="stat-item-box">
        <div class="stat-icon-wrap" aria-hidden="true">
          <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2">
            <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/>
          </svg>
        </div>
        <div>
          <span class="stat-value">تحلیل DFMEA</span>
          <span class="stat-label">کاهش ۹۰٪ ریسک شکست پیش از ساخت قالب و ابزار</span>
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
          <span class="stat-label">تعهدنامه رسمی و حقوقی عدم افشا (NDA)</span>
        </div>
      </div>

      <div class="stat-item-box">
        <div class="stat-icon-wrap" aria-hidden="true">
          <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2">
            <line x1="18" y1="20" x2="18" y2="10"/><line x1="12" y1="20" x2="12" y2="4"/><line x1="6" y1="20" x2="6" y2="14"/>
          </svg>
        </div>
        <div>
          <span class="stat-value">امکان‌سنجی فنی</span>
          <span class="stat-label">برآورد دقیق هزینه ساخت و توجیه اقتصادی CAPEX</span>
        </div>
      </div>

    </div>
  </div>
</section>
<?php if ( function_exists( 'md_render_pillar_jump_nav' ) ) { md_render_pillar_jump_nav( array( '#rd-scopes' => 'حوزه‌های R&D', '#rd-methodology' => 'متدولوژی DFMEA', '#workflow-stages' => 'فرآیند نمونه‌سازی', '#deliverables' => 'خروجی‌های فنی', '#rfq-section' => 'تعریف پروژه R&D ←' ) ); } ?>


<!-- ========================================================================
     3. R&D & PROTOTYPING SCOPES (حوزه‌های محوری R&D و نمونه‌سازی)
     ======================================================================== -->
<section class="machinery-categories-section" id="rd-scopes" aria-label="حوزه‌های تخصصی تحقیق و توسعه و نمونه‌سازی">
  <div class="container">
    
    <div class="services-section-header">
      <h2>حوزه‌های تخصصی خدمات تحقیق و توسعه و نمونه‌سازی صنعتی</h2>
      <p>
        از صحه‌گذاری محاسبات کانسپت تا تحویل نمونه فیزیکی آماده به کار در خط تولید کارخانه.
      </p>
    </div>

    <div class="categories-grid-4">

      <!-- Scope 01 -->
      <article class="category-spec-card">
        <div class="card-top-header">
          <span class="cat-num mono">FUNCTIONAL PROTOTYPING</span>
          <div class="cat-icon-wrap" aria-hidden="true">
            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
              <polygon points="12 2 2 7 12 12 22 7 12 2"/>
              <polyline points="2 17 12 22 22 17"/>
              <polyline points="2 12 12 17 22 12"/>
            </svg>
          </div>
        </div>
        <h3>ساخت نمونه اولیه عملکردی و تست مکانیزم‌ها (POC)</h3>
        <p>ساخت فیزیکی مقیاس ۱:۱ نمونه‌های اولیه با ترکیبی از فرآیندهای ماشین‌کاری دقیق CNC، ورق‌کاری لیزری و پرینت سه‌بعدی مهندسی جهت تست عملکرد و مونتاژپذیری.</p>
        <ul class="cat-feature-list">
          <li>تست حرکتی مفاصل و کشف تداخلات ابعادی پیش از قالب‌سازی</li>
          <li>استفاده از متریال‌های اصلی فولادی و آلیاژی مطابق محصول نهایی</li>
          <li>تحویل پروتوتایپ قابل لمس و تست‌شده برای ارائه به سرمایه‌گذاران</li>
        </ul>
      </article>

      <!-- Scope 02 -->
      <article class="category-spec-card">
        <div class="card-top-header">
          <span class="cat-num mono">DFMEA RISK ANALYSIS</span>
          <div class="cat-icon-wrap" aria-hidden="true">
            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
              <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/>
            </svg>
          </div>
        </div>
        <h3>تحلیل حالات و اثرات شکست طراحی بر اساس DFMEA</h3>
        <p>شناسایی پیش‌دستانه تمامی نقاط ضعف احتمالی ماشین (سایش، خستگی، شکست ارتعاشی و لقی) و محاسبه نمره اولویت ریسک (RPN) برای رسیدن به بالاترین ضریب اطمینان مکانیکی.</p>
        <ul class="cat-feature-list">
          <li>پیاده‌سازی متدولوژی استاندارد AIAG &amp; VDA در فرآیند طراحی</li>
          <li>بازطراحی اجزای بحرانی قبل از صرف هزینه‌های سنگین قطعه‌سازی</li>
          <li>مستندسازی کامل چک‌لیست‌های بازرسی و قابلیت اطمینان (Reliability)</li>
        </ul>
      </article>

      <!-- Scope 03 -->
      <article class="category-spec-card">
        <div class="card-top-header">
          <span class="cat-num mono">FEASIBILITY STUDIES</span>
          <div class="cat-icon-wrap" aria-hidden="true">
            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
              <line x1="18" y1="20" x2="18" y2="10"/><line x1="12" y1="20" x2="12" y2="4"/><line x1="6" y1="20" x2="6" y2="14"/>
            </svg>
          </div>
        </div>
        <h3>امکان‌سنجی فنی، مالی و فرآیندی خطوط تولید</h3>
        <p>بررسی جامع قابلیت ساخت ایده در صنعت ایران، محاسبه دقیق هزینه‌های سرمایه‌گذاری اولیه (CAPEX) و جاری (OPEX)، برآورد نرخ تولید واقعی و زمان بازگشت سرمایه (ROI).</p>
        <ul class="cat-feature-list">
          <li>ارزیابی دسترسی به تجهیزات ماشین‌کاری و زنجیره تأمین متریال در داخل</li>
          <li>مقایسه اقتصادی ساخت سفارشی در برابر واردات از چین و اروپا</li>
          <li>تدوین گزارش جامع امکان‌سنجی برای ارائه به بانک‌ها و سرمایه‌گذاران</li>
        </ul>
      </article>

      <!-- Scope 04 -->
      <article class="category-spec-card">
        <div class="card-top-header">
          <span class="cat-num mono">CONCEPT REFINEMENT</span>
          <div class="cat-icon-wrap" aria-hidden="true">
            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
              <path d="M21.5 2v6h-6M21.34 15.57a10 10 0 1 1-.57-8.38l5.67-5.67"/>
            </svg>
          </div>
        </div>
        <h3>بهینه‌سازی کانسپت و مهندسی مجدد طرح‌های نوآورانه</h3>
        <p>تبدیل ایده‌های اولیه، طرح‌های شماتیک، اختراعات یا نمونه‌های ناقص کارگاهی به پکیج‌های صنعتی مدل‌سازی‌شده و استاندارد در SolidWorks با در نظر گرفتن سهولت تولید انبوه.</p>
        <ul class="cat-feature-list">
          <li>رفع گلوگاه‌های مکانیکی، لرزش‌ها و توقفات در کانسپت اولیه</li>
          <li>مدل‌سازی مجدد قطعات با در نظر گرفتن استانداردهای مونتاژ DFMA</li>
          <li>ارائه فایل‌های استاندارد آماده جهت ثبت اختراع و پتنت‌های صنعتی</li>
        </ul>
      </article>

    </div>
  </div>
</section>

<!-- ========================================================================
     4. DFMEA METHODOLOGY & STRICT SYMMETRY (قانون تقارن و پیشگیری از شکست)
     ======================================================================== -->
<section class="pillar-dfma-section" id="rd-methodology" aria-label="رویکرد سیستماتیک DFMEA در نمونه‌سازی">
  <div class="container">
    <div class="services-intro-grid">
      
      <!-- Visual Column (Strict Symmetry: Top Bar, Stretched Image, Bottom HUD Badge, Actions) -->
      <div class="services-intro-visual-col">
        <div class="visual-col-top-bar">
          <span class="visual-col-meta mono">AIAG-VDA &amp; ISO 12100 COMPLIANT</span>
        </div>

        <div class="services-intro-image-wrap">
          <div class="services-intro-image-frame">
            <img src="<?php echo esc_url( home_url( '/wp-content/uploads/2026/07/pillar1-machine-design-case.png' ) ); ?>" 
                 alt="تحلیل مهندسی ریسک و ساخت پروتوتایپ مکانیزم صنعتی" 
                 loading="lazy" 
                 width="600" 
                 height="420">
            <div class="cad-frame-crosshair cad-top-left" aria-hidden="true"></div>
            <div class="cad-frame-crosshair cad-top-right" aria-hidden="true"></div>
          </div>

          <!-- Matching Floating HUD Glass Badge -->
          <div class="services-floating-badge">
            <div class="badge-accent-icon" aria-hidden="true">
              <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/>
              </svg>
            </div>
            <div class="badge-text">
              <strong>حذف خطاهای میلیاردی با پروتوتایپینگ و DFMEA</strong>
              <span>تا ۸۵٪ کاهش هزینه دوباره‌کاری و رفع عیوب مکانیکی قبل از تولید انبوه</span>
            </div>
          </div>
        </div>

        <!-- Action Buttons placed below image to balance column height perfectly -->
        <div class="visual-col-actions">
          <a href="#rfq-section" class="btn btn-primary">
            <span>درخواست مشاوره پروژه R&amp;D</span>
            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true">
              <path d="M19 12H5M12 19l-7-7 7-7"/>
            </svg>
          </a>
          <a href="#workflow-stages" class="btn btn-outline">
            <span>مراحل ۴ گانه از ایده تا پروتوتایپ</span>
          </a>
        </div>
      </div>

      <!-- Content Column (Philosophy, SEO Copy, 3 Checkpoints) -->
      <div class="services-intro-content-col">
        <div class="services-intro-header">
          <h2>چرا ساخت نمونه اولیه (پروتوتایپ) ارزان‌ترین راه برای پیشگیری از شکست است؟</h2>
          <p class="services-intro-lead">
            سرمایه‌گذاری میلیاردی روی ساخت قالب‌های فلزی یا ماشین‌کاری مستقیم بدون پروتوتایپ، ریسک فوق‌العاده بالایی دارد. متدولوژی مهندسی ما این ریسک را خنثی می‌کند.
          </p>
          <p class="services-intro-body">
            در بسیاری از پروژه‌های صنعتی، کوچک‌ترین خطای تلرانسی یا برآورد اشتباه در اصطکاک روی مانیتور پنهان می‌ماند و پس از ساخت تیراژ بالا باعث قفل مکانیزم یا سایش فاجعه‌بار می‌شود. با ساخت یک نمونه اولیه عملکردی در کارگاه، رفتار واقعی مکانیزم تحت بار سنجیده شده و تمام نقاط شکست پیش از آغاز تولید انبوه شناسایی و اصلاح می‌شوند.
          </p>
        </div>

        <!-- 3 Feature Highlight Rows -->
        <div class="services-intro-features">
          <div class="intro-feature-row">
            <div class="feature-text">
              <h4>کشف گره‌های حرکتی و خطاهای مونتاژ در مقیاس واقعی ۱:۱</h4>
              <p>مشاهده عینی رفتار مفاصل، روان‌کاری یاتاقان‌ها و راحتی مونتاژ قطعات در دست اپراتور کارگاهی پیش از ماشین‌کاری تیراژ بالا.</p>
            </div>
          </div>

          <div class="intro-feature-row">
            <div class="feature-text">
              <h4>کاهش ۹۰ درصدی هزینه‌های تغییر طراحی با متدولوژی DFMEA در فاز ایده</h4>
              <p>اصلاح ابعاد و متریال روی نقشه و پروتوتایپ تنها کسری از هزینه تغییر قالب فولادی یا شاسی نهایی پس از عملیات حرارتی است.</p>
            </div>
          </div>

          <div class="intro-feature-row">
            <div class="feature-text">
              <h4>بهینه‌سازی فرم قطعات برای ساخت اقتصادی با تجهیزات مرسوم بازار ایران</h4>
              <p>انطباق طرح با توانمندی کارگاه‌های تراشکاری، فرزکاری CNC و برش لیزر داخلی بدون وابستگی به فرآیندهای گران‌قیمت یا نایاب خارجی.</p>
            </div>
          </div>
        </div>

      </div>

    </div>
  </div>
</section>

<!-- ========================================================================
     5. 4-STAGE R&D WORKFLOW (فرآیند ۴ مرحله‌ای از ایده تا پروتوتایپ)
     ======================================================================== -->
<section class="pillar-workflow-section" id="workflow-stages" aria-label="فرآیند ۴ مرحله‌ای تحقیق و توسعه و نمونه‌سازی">
  <div class="container">
    
    <div class="workflow-header-wrap">
      <h2>فرآیند ۴ مرحله‌ای از ایده اولیه تا ساخت نمونه فیزیکی کارگاهی</h2>
      <p>
        نقشه راهی شفاف، فازبندی‌شده و قابل راستی‌آزمایی که گام‌به‌گام مسیر نوآوری تا محصول تست‌شده را تضمین می‌کند.
      </p>
    </div>

    <div class="workflow-grid-4">
      
      <div class="workflow-card">
        <span class="workflow-step-num mono">STAGE // 01</span>
        <h4>تدوین URS و امکان‌سنجی اولیه</h4>
        <p>بررسی نیازهای فرآیندی و کارکردی محصول، تدوین سند مشخصات فنی (URS)، محاسبات مقدماتی توان و گشتاور و سنجش قابلیت ساخت در داخل کشور.</p>
      </div>

      <div class="workflow-card">
        <span class="workflow-step-num mono">STAGE // 02</span>
        <h4>مدل‌سازی سه‌بعدی CAD و تحلیل DFMEA</h4>
        <p>طراحی جامع اجزا در SolidWorks، شبیه‌سازی تنش FEA در ANSYS، ارزیابی حرکتی مکانیزم‌ها و استخراج جدول تحلیل حالات شکست طراحی (DFMEA).</p>
      </div>

      <div class="workflow-card">
        <span class="workflow-step-num mono">STAGE // 03</span>
        <h4>ساخت سریع قطعات و مونتاژ پروتوتایپ</h4>
        <p>قطعه‌سازی با فرآیندهای CNC، ورق‌کاری دقیق و چاپ سه‌بعدی مهندسی، مونتاژ فیزیکی نمونه در کارگاه و ارزیابی اولیه انطباقات و لقی‌ها.</p>
      </div>

      <div class="workflow-card">
        <span class="workflow-step-num mono">STAGE // 04</span>
        <h4>تست عملکردی و بسته تولید انبوه</h4>
        <p>راه‌اندازی میدانی، اعمال بارگذاری شبیه‌سازی‌شده، عیب‌یابی تکمیلی و ارائه گزارش کامل تست به همراه بسته نقشه‌های استاندارد تولید صنعتی.</p>
      </div>

    </div>

  </div>
</section>

<!-- ========================================================================
     6. DELIVERABLES SPECIFICATION (پکیج خروجی‌های تحویلی به کارفرما)
     ======================================================================== -->
<section class="deliverables-section" id="deliverables" aria-label="خروجی‌های تحویلی پروژه R&D">
  <div class="container">
    
    <div class="services-section-header">
      <h2>پکیج نهایی اسناد مهندسی و نمونه فیزیکی تحویلی به کارفرما</h2>
      <p>
        مجموعه‌ای مدون، استاندارد و جامع که طرح شما را از ایده خام به یک دارایی صنعتی ثبت‌شده و آماده سرمایه‌گذاری تبدیل می‌کند.
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
        <h4>نمونه اولیه فیزیکی و تست‌شده (Prototype Unit)</h4>
        <p>تحویل فیزیکی دستگاه یا مکانیزم نمونه در مقیاس عملکردی به همراه ویدیوهای مستند از تست کارگاهی، کالیبراسیون و بررسی تلرانس‌ها.</p>
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
        <h4>گزارش امکان‌سنجی و ماتریس تحلیل DFMEA</h4>
        <p>دفترچه مکتوب مهندسی شامل محاسبات سینماتیکی، نمودارهای شبیه‌سازی اجزای محدود FEA، جداول ارزیابی ریسک RPN و توجیه اقتصادی طرح.</p>
      </div>

      <div class="deliverable-box">
        <div class="deliv-icon" aria-hidden="true">
          <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
            <rect x="2" y="3" width="20" height="14" rx="2" ry="2"/>
            <line x1="8" y1="21" x2="16" y2="21"/>
            <line x1="12" y1="17" x2="12" y2="21"/>
          </svg>
        </div>
        <h4>پکیج نقشه‌های کارگاهی GD&amp;T و اسناد پتنت</h4>
        <p>فایل‌های سورس سه‌بعدی و دوبعدی با رعایت دقیق استاندارد ISO 1101، فایل‌های استاندارد خنثی (STEP/IGES) و نقشه فرمت ثبت اختراع و مالکیت فکری.</p>
      </div>

    </div>

  </div>
</section>

<!-- ========================================================================
     7. HIGH-CONVERSION DUAL-PANEL RFQ & CONSULTATION (طراحی مرتب و دو ستونه)
     ======================================================================== -->
<section class="pillar-rfq-dual-section" id="rfq-section" aria-label="استعلام فنی پروژه تحقیق و توسعه">
  <div class="container">
    <div class="rfq-dual-grid">

      <!-- Column 1: Visual Incentive & Trust Showcase (ستون بهبود بصری و تشویق به ارسال اطلاعات) -->
      <div class="rfq-incentive-panel">
        <div>
          <div class="rfq-trust-badge mono">
            <span class="rfq-led" aria-hidden="true"></span>
            <span>STRICT CONFIDENTIALITY // NDA ASSURED</span>
          </div>

          <h3 class="rfq-incentive-title">
            ایده یا کانسپت شما، با تضمین ۱۰۰٪ محرمانگی به پروتوتایپ صنعتی تبدیل می‌شود
          </h3>

          <p class="rfq-incentive-subtitle">
            پیش از صرف هزینه‌های سنگین در کارگاه، طرح خود را تحت امن‌ترین پروتکل‌های حقوقی اعتبارسنجی کنید.
          </p>

          <!-- 3 Value Proposition Chips / Incentives -->
          <div class="rfq-incentives-list">
            <div class="rfq-incentive-item">
              <div class="rfq-incentive-icon" aria-hidden="true">
                <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2">
                  <rect x="3" y="11" width="18" height="11" rx="2" ry="2"/>
                  <path d="M7 11V7a5 5 0 0 1 10 0v4"/>
                </svg>
              </div>
              <div class="rfq-incentive-text">
                <h4>عقد رسمی پیمان‌نامه محرمانگی (NDA حقوقی)</h4>
                <p>پیش از دریافت هرگونه فایل CAD یا مشخصات، قرارداد رسمی دوطرفه امضا و حقوق مالکیت فکری طرح برای شما محفوظ می‌گردد.</p>
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
                <p>بررسی محاسبات مقدماتی، خطاهای احتمالی مکانیزم و فرآیند ساخت توسط مهندس ارشد طراح ظرف حداکثر ۲۴ ساعت کاری.</p>
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
                <h4>برآورد شفاف هزینه قطعه‌سازی و تست (CAPEX)</h4>
                <p>ارائه پیش‌فاکتور تفکیک‌شده متریال، ماشین‌کاری CNC، قطعات استاندارد خریدنی و مونتاژ بدون هزینه‌های پنهان.</p>
              </div>
            </div>
          </div>
        </div>

        <!-- Fast Track Phone Chip -->
        <?php 
        $rd_phone = function_exists('md_get_contact') ? md_get_contact('phone', '') : '';
        $rd_mobile = function_exists('md_get_contact') ? md_get_contact('mobile', '') : '';
        $rd_display = $rd_phone ?: ($rd_mobile ?: '۰۵۱-XXXXXXXX');
        $rd_clean = md_tel_uri( $rd_display );
        ?>
        <div class="rfq-direct-consult-chip">
          <div class="consult-chip-text">
            <span class="consult-chip-label">نیاز به هماهنگی جلسه در کارگاه مشهد (برج سامان) دارید؟</span>
            <span class="consult-chip-title">گفتگوی مستقیم با مهندس حسین وطن‌دوست</span>
          </div>
          <a href="tel:<?php echo esc_attr($rd_clean); ?>" class="consult-phone-btn mono" dir="ltr" title="تماس مستقیم با کارشناس R&D">
            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2">
              <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/>
            </svg>
            <span><?php echo esc_html($rd_display); ?></span>
          </a>
        </div>
      </div>

      <!-- Column 2: Streamlined Industrial Form Panel (ستون فرم منظم و شفاف) -->
      <div class="rfq-form-panel-custom">
        <div id="pillarRfqContainer">
          <div class="rfq-form-custom-header">
            <span class="rfq-form-tag mono">// FAST-TRACK INQUIRY</span>
            <h3>ثبت استعلام پروژه تحقیق و توسعه و نمونه‌سازی</h3>
            <p>لطفاً اطلاعات اولیه را وارد فرمایید؛ پیش‌نویس توافق‌نامه محرمانگی (NDA) و زمان‌بندی پروژه ظرف ۲۴ ساعت برای شما ارسال خواهد شد.</p>
          </div>

          <div id="pillarRfqNotice" class="rfq-hud-notice" style="display:none;" role="alert"></div>

          <form id="pillarRfqForm" class="rfq-form-grid-inner" method="POST">
            <input type="hidden" name="action" value="machinedesign_rfq_submit">
            <input type="hidden" name="source_pillar" value="rd-prototyping">
            <input type="hidden" name="source_url" value="<?php echo esc_url( get_permalink() ); ?>">
            
            <div class="rfq-input-group">
              <label for="rfq-name">نام و نام خانوادگی / نام شرکت <span class="req-star">*</span></label>
              <input type="text" id="rfq-name" name="rfq_name" class="rfq-input-field" required placeholder="مثال: مهندس رضوانی - صنایع نوین">
            </div>

            <div class="rfq-input-group">
              <label for="rfq-phone">شماره همراه مستقیم کارشناس <span class="req-star">*</span></label>
              <input type="tel" id="rfq-phone" name="rfq_phone" class="rfq-input-field" required placeholder="۰۹۱۲XXXXXXX" dir="ltr">
            </div>

            <div class="rfq-input-group rfq-field-full">
              <label for="rfq-service-type">نوع خدمت R&amp;D مورد نیاز <span class="req-star">*</span></label>
              <select id="rfq-service-type" name="rfq_service_type" class="rfq-input-field" required>
                <option value="" disabled selected>انتخاب حوزه تخصصی پروژه...</option>
                <option value="prototyping">ساخت نمونه اولیه عملکردی و فیزیکی (POC)</option>
                <option value="dfmea">تحلیل ریسک و عیب‌یابی کانسپت با متدولوژی DFMEA</option>
                <option value="feasibility">امکان‌سنجی فنی و اقتصادی خط تولید (CAPEX/OPEX)</option>
                <option value="redesign">مهندسی مجدد و بازطراحی کانسپت ناکارآمد</option>
                <option value="consulting">مشاوره تخصصی و عارضه‌یابی تیم R&amp;D کارخانجات</option>
              </select>
            </div>

            <div class="rfq-input-group rfq-field-full">
              <label for="rfq-stage">مرحله فعلی ایده یا کانسپت فنی</label>
              <select id="rfq-stage" name="rfq_stage" class="rfq-input-field">
                <option value="" disabled selected>انتخاب مرحله فعلی پروژه...</option>
                <option value="concept">ایده و کانسپت اولیه (نیاز به محاسبات مهندسی و طراحی پایه)</option>
                <option value="cad_ready">فایل و نقشه‌های CAD آماده است (نیاز به تحلیل DFMEA و ساخت نمونه)</option>
                <option value="prototype_defect">نمونه قبلی ساخته شده دارای نقص یا شکست عملکردی است (بازطراحی)</option>
                <option value="reverse_eng">مهندسی معکوس و بومی‌سازی مکانیزم خارجی موجود</option>
              </select>
            </div>

            <div class="rfq-input-group rfq-field-full">
              <label for="rfq-desc">شرح مختصر ایده، ابعاد یا چالش فنی پروژه</label>
              <textarea id="rfq-desc" name="rfq_desc" class="rfq-input-field" rows="3" placeholder="نوع محصول، ظرفیت تولید مد نظر، مکانیزم‌های کلیدی یا گلوگاه‌های فنی را به اختصار بیان فرمایید..."></textarea>
            </div>

            <div class="rfq-field-full">
              <button type="submit" id="pillarRfqSubmitBtn" class="btn-rfq-submit-large">
                <span>ارسال مشخصات و دریافت پیش‌نویس قرارداد NDA</span>
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
            <div class="rfq-success-badge mono">// INQUIRY REGISTERED // NDA DISPATCH SCHEDULED</div>
            <h4 class="rfq-success-title">استعلام پروژه با موفقیت در سامانه ثبت گردید</h4>
            <div class="rfq-success-code-wrap">
              <span>کد رهگیری سیستمی:</span>
              <span id="rfqTrackingPill" class="rfq-tracking-pill mono">MD-RD-2026-0000</span>
            </div>
            <p class="rfq-success-desc">
              مشخصات اولیه در واحد تحقیق و توسعه (R&amp;D) ماشین دیزاین ذخیره و دسته‌بندی شد. مهندس حسین وطن‌دوست و تیم مهندسی ظرف حداکثر ۲۴ ساعت کاری جهت هماهنگی جلسه ارزیابی مقدماتی و پیش‌نویس توافق‌نامه محرمانگی (NDA) با شما تماس خواهند گرفت.
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
            <span class="consult-chip-title">تضمین ۱۰۰٪ محرمانگی طرح تحت پروتکل حقوقی NDA</span>
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
            submitBtn.innerHTML = '<span>ارسال مشخصات و دریافت پیش‌نویس قرارداد NDA</span><svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" aria-hidden="true"><path d="M19 12H5M12 19l-7-7 7-7"/></svg>';

            if (data && data.success) {
              var code = data.data && (data.data.tracking_code || data.data.tracking) ? (data.data.tracking_code || data.data.tracking) : 'MD-RD-2026';
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
            submitBtn.innerHTML = '<span>ارسال مشخصات و دریافت پیش‌نویس قرارداد NDA</span><svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" aria-hidden="true"><path d="M19 12H5M12 19l-7-7 7-7"/></svg>';
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

    </div>
  </div>
</section>

<?php
md_render_optional_gutenberg_slot();
get_footer();
