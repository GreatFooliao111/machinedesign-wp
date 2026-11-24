<?php
/**
 * Template Name: Pillar 4: Engineering Mentorship (ستون ۴: آموزش و منتورشیپ فردی مهندسی مکانیک)
 * Template Post Type: page
 *
 * Description: Dedicated Landing Page for Pillar 04: Advanced SolidWorks, Ansys FEA, GD&T ASME Y14.5 & DFMA
 * Follows Cyber-Mechanical Dark Design System + Ponytail Doctrine + Strict Symmetry Rules
 *
 * @package HelloElementor
 */

defined( 'ABSPATH' ) || exit;

get_header();
?>

<!-- ========================================================================
     1. PILLAR 04 HERO BANNER
     ======================================================================== -->
<section class="page-hero-banner pillar-hero-wrap" aria-label="هیدر آموزش و منتورشیپ فردی مهندسی مکانیک">
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
          <span class="breadcrumb-current" aria-current="page">آموزش و منتورشیپ فردی مهندسی مکانیک</span>
        </nav>

        <!-- Corporate Sub-badge & Mode of Conduction Badge -->
        <div class="page-hero-badge">
          <span class="pulse-indicator" aria-hidden="true"></span>
          <span class="mono">PILLAR 04 // ENGINEERING MENTORSHIP &amp; TECHNICAL COACHING</span>
        </div>

        <div class="mentorship-format-badge">
          <span class="pulse-indicator" aria-hidden="true"></span>
          <span>برگزاری آنلاین تعاملی (سراسر ایران و خارج از کشور) + امکان جلسات حضوری در مشهد</span>
        </div>

        <!-- Main Page Title (Split in 2 Lines for Compact Width) -->
        <h1 class="page-hero-title pillar-hero-title-split">
          <span class="title-line-1">آموزش و منتورشیپ فردی مهندسی مکانیک</span>
          <span class="title-line-2 text-accent">از مدل‌سازی نرم‌افزاری تا ساخت بدون خطای کارگاهی</span>
        </h1>

        <!-- Summary Lead Text -->
        <div class="page-hero-excerpt">
          کوچینگ تخصصی و تک‌به‌تک مهندسان طراح برای تسلط بر سالیدورکس پیشرفته صنعتی، تحلیل المان محدود با Ansys، تلرانس‌گذاری ابعادی و هندسی (GD&amp;T ASME Y14.5) و اصول طراحی برای ساخت (DFMA)، با اجرای زنده روی پروژه‌های واقعی کارگاهی تحت هدایت مستقیم مهندس حسین وطن‌دوست.
        </div>

        <!-- Hero Action Buttons -->
        <div class="pillar-hero-actions">
          <a href="#rfq-section" class="btn btn-primary">
            <span>رزرو جلسه تعیین سطح و مشاوره فنی</span>
            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
              <path d="M5 12h14M12 5l7 7-7 7"/>
            </svg>
          </a>
          <a href="#mentorship-modules" class="btn btn-outline">
            <span>بررسی سرفصل‌های تخصصی</span>
          </a>
        </div>
      </div>

      <!-- Left Column: 3D Interactive Stage Engine (Off-DOM Canvas Mechanism & Detached HUD) -->
      <div class="pillar-hero-visual-col">
        <div
          class="delta-robot-stage"
          data-delta-stage
          tabindex="0"
          role="img"
          aria-label="مکانیزم سه‌بعدی تعاملی آموزش و شبیه‌سازی مهندسی مکانیک"
        >
          <!-- Ambient Volumetric Backlight -->
          <div class="delta-robot-glow" aria-hidden="true"></div>

          <!-- Physics-Driven Opposite Cast Shadow -->
          <div class="delta-robot-shadow" data-delta-shadow aria-hidden="true"></div>

          <!-- 3D Animated Transparent WebM Mechanism (Auto-converted to Canvas) -->
          <div class="delta-robot-anim-wrap" data-delta-robot>
            <video
              class="delta-robot-img delta-robot-video"
              autoplay
              loop
              muted
              playsinline
              aria-label="مدل‌سازی و شبیه‌سازی دینامیکی قطعات مهندسی"
            >
              <source src="<?php echo esc_url( home_url( '/wp-content/uploads/2026/07/delta_robot_final_opt.webm' ) ); ?>" type="video/webm">
            </video>
          </div>

          <!-- Detached Floating HUD Glass Badge (Independent Differential Parallax) -->
          <div class="delta-robot-hud" data-delta-hud dir="ltr">
            <div class="delta-robot-hud-col">
              <span class="delta-robot-hud-label">ADVANCED CAD</span>
              <span class="delta-robot-hud-value">SOLIDWORKS &amp; ANSYS</span>
            </div>
            <div class="delta-robot-hud-sep" aria-hidden="true"></div>
            <div class="delta-robot-hud-col">
              <span class="delta-robot-hud-label">STANDARD</span>
              <span class="delta-robot-hud-value">ASME Y14.5 GD&amp;T</span>
            </div>
            <div class="delta-robot-hud-tag">
              <span class="delta-robot-hud-led" aria-hidden="true"></span>
              <span>1-ON-1 COACHING</span>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>

<!-- ========================================================================
     2. INDUSTRIAL METRICS STRIP (شاخص‌های عملکردی و اعتماد)
     ======================================================================== -->
<section class="services-stats-strip pillar-stats-strip" aria-label="شاخص‌های عملکردی دپارتمان آموزش و منتورشیپ">
  <div class="container">
    <div class="services-stats-grid">
      
      <div class="stat-item-box">
        <div class="stat-icon-wrap" aria-hidden="true">
          <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2">
            <circle cx="12" cy="12" r="10"/>
            <polyline points="12 6 12 12 16 14"/>
          </svg>
        </div>
        <div>
          <span class="stat-value">+۱۲۰ ساعت</span>
          <span class="stat-label">مجموع سرفصل ۴ ماژول + منتورینگ پروژه عملی و رفع اشکال</span>
        </div>
      </div>

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
          <span class="stat-value">۴ استاندارد</span>
          <span class="stat-label">آموزش بر مبنای ASME Y14.5 ،ISO 1101 ،DIN و DFMA</span>
        </div>
      </div>

      <div class="stat-item-box">
        <div class="stat-icon-wrap" aria-hidden="true">
          <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2">
            <polygon points="12 2 2 7 12 12 22 7 12 2"/>
            <polyline points="2 17 12 22 22 17"/>
            <polyline points="2 12 12 17 22 12"/>
          </svg>
        </div>
        <div>
          <span class="stat-value">پروژه ۱۰۰٪ واقعی</span>
          <span class="stat-label">پیاده‌سازی کیس‌استادی‌های میدانی خطوط تولید صنعتی</span>
        </div>
      </div>

      <div class="stat-item-box">
        <div class="stat-icon-wrap" aria-hidden="true">
          <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2">
            <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/>
            <polyline points="22 4 12 14.01 9 11.01"/>
          </svg>
        </div>
        <div>
          <span class="stat-value">پشتیبانی تا ساخت</span>
          <span class="stat-label">رفع اشکال و همراهی تا مرحله خروجی CNC، مونتاژ و تست</span>
        </div>
      </div>

    </div>
  </div>
</section>

<!-- ========================================================================
     3. CORE MENTORSHIP MODULES (ماژول‌های ۴ گانه آموزش تخصصی)
     ======================================================================== -->
<section class="machinery-categories-section" id="mentorship-modules" aria-label="سرفصل‌ها و ماژول‌های منتورشیپ مهندسی">
  <div class="container">
    
    <div class="services-section-header">
      <h2>ماژول‌های ۴ گانه منتورشیپ فردی و تخصصی مهندسی مکانیک</h2>
      <p>
        طراحی‌شده برای مهندسانی که می‌خواهند از اپراتوری مقدماتی نرم‌افزار عبور کرده و به جایگاه طراح ارشد کارخانجات صنعتی برسند.
      </p>
      <div class="mentorship-choice-note" style="display:inline-flex; align-items:center; gap:8px; background:#f1f5f9; border:1px solid #cbd5e1; color:#334155; padding:8px 16px; border-radius:6px; font-size:0.86rem; margin-top:14px; font-weight:600; letter-spacing:0 !important;">
        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#15803D" stroke-width="2.4" aria-hidden="true"><polyline points="20 6 9 17 4 12"/></svg>
        <span style="color:#334155; letter-spacing:0 !important;">امکان گذراندن دوره به‌صورت انتخابی (تک‌ماژول متناسب با نیاز شغلی) یا مسیر جامع ۴ ماژولی وجود دارد.</span>
      </div>
    </div>

    <div class="categories-grid-4">

      <!-- Module 01 -->
      <article class="category-spec-card">
        <div class="card-top-header">
          <span class="cat-num mono">ADVANCED SOLIDWORKS</span>
          <div class="cat-icon-wrap" aria-hidden="true">
            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
              <polygon points="12 2 2 7 12 12 22 7 12 2"/>
              <polyline points="2 17 12 22 22 17"/>
              <polyline points="2 12 12 17 22 12"/>
            </svg>
          </div>
        </div>
        <h3>سالیدورکس پیشرفته و اسمبلی مکانیزم‌های صنعتی</h3>
        <p>تسلط کامل بر تکنیک‌های مدل‌سازی سطوح پیچیده (Surfacing)، طراحی سازه و استراکچرهای جوشی (Weldments)، ورق‌کاری دقیق خم و برش (Sheet Metal) و مدیریت اصولی اسمبلی‌های چند هزار قطعه‌ای بدون افت سرعت سیستم.</p>
        <ul class="cat-feature-list">
          <li>مدل‌سازی پارامتریک و ایجاد فرمول‌های طراحی وابسته به معادله (Equations)</li>
          <li>طراحی اتصالات پیچ، جوش و خارهای انطباقی بر پایه استاندارد DIN</li>
          <li>پیکربندی هوشمند (Configurations) و طراحی قطعات استاندارد با Design Table</li>
        </ul>
      </article>

      <!-- Module 02 -->
      <article class="category-spec-card">
        <div class="card-top-header">
          <span class="cat-num mono">ANSYS FEA SIMULATION</span>
          <div class="cat-icon-wrap" aria-hidden="true">
            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
              <path d="M18 20V10M12 20V4M6 20v-6"/>
            </svg>
          </div>
        </div>
        <h3>شبیه‌سازی عددی و تحلیل المان محدود با Ansys</h3>
        <p>اعتبارسنجی مقاومت سازه تحت بارهای استاتیکی و دینامیکی، تحلیل تمرکز تنش در شفت‌ها و جوش‌ها، آنالیز ارتعاشات مودال و فرکانس تشدید (Resonance)، تخمین عمر خستگی قطعات (Fatigue) و کاهش وزن اصولی قطعات سنگین.</p>
        <ul class="cat-feature-list">
          <li>مش‌بندی بهینه و بررسی استقلال شبکه از جواب (Mesh Convergence Study)</li>
          <li>تعریف دقیق شرایط تکیه‌گاهی و قیدهای غیرخطی تماس (Nonlinear Contacts)</li>
          <li>تحلیل استحکام و ضریب اطمینان واقعی بر اساس تئوری ون‌مایزز (Von Mises) و معیارهای شکست و گسیختگی</li>
        </ul>
      </article>

      <!-- Module 03 -->
      <article class="category-spec-card">
        <div class="card-top-header">
          <span class="cat-num mono">PRACTICAL GD&amp;T</span>
          <div class="cat-icon-wrap" aria-hidden="true">
            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
              <circle cx="12" cy="12" r="10"/>
              <line x1="22" y1="12" x2="18" y2="12"/>
              <line x1="6" y1="12" x2="2" y2="12"/>
              <line x1="12" y1="6" x2="12" y2="2"/>
              <line x1="12" y1="22" x2="12" y2="18"/>
            </svg>
          </div>
        </div>
        <h3>تلرانس‌گذاری ابعادی و هندسی کاربردی (ASME Y14.5)</h3>
        <p>پایان دادن به خطاهای مونتاژ و سوهان‌کاری در کارگاه؛ آموزش استاندارد بین‌المللی ASME Y14.5-2018 و ISO 1101 برای تعیین چارچوب دیتوم (Datum Reference Frame)، کنترل تلرانس موقعیت (True Position)، تختی، هم‌محوری، تعامد و لنگی.</p>
        <ul class="cat-feature-list">
          <li>تحلیل زنجیره تلرانسی خطی و زاویه‌ای در شرایط حداکثر ماده (MMC Stack-up)</li>
          <li>انطباقات شفت و سوراخ (ISO Fits &amp; Tolerances) برای قطعات محرک و ثابت</li>
          <li>نقشه‌خوانی و نقشه‌کشی کارگاهی با علائم صافی سطح، زبری Ra و علائم جوشکاری</li>
        </ul>
      </article>

      <!-- Module 04 -->
      <article class="category-spec-card">
        <div class="card-top-header">
          <span class="cat-num mono">DFMA &amp; SHOP REALITY</span>
          <div class="cat-icon-wrap" aria-hidden="true">
            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
              <path d="M14.7 6.3a1 1 0 0 0 0 1.4l1.6 1.6a1 1 0 0 0 1.4 0l3.77-3.77a6 6 0 0 1-7.94 7.94l-6.91 6.91a2.12 2.12 0 0 1-3-3l6.91-6.91a6 6 0 0 1 7.94-7.94l-3.76 3.76z"/>
            </svg>
          </div>
        </div>
        <h3>طراحی برای ساخت و مونتاژ اقتصادی (DFMA)</h3>
        <p>همگام‌سازی طرح با واقعیت خطوط قطعه‌سازی ایران؛ انتخاب صحیح آلیاژهای فولادی و آلومینیومی، طراحی منطبق با محدودیت‌های ماشین‌کاری تراش و فرز CNC، برش لیزر، خم CNC، و حذف قطعات اضافی جهت کاهش هزینه‌های ساخت.</p>
        <ul class="cat-feature-list">
          <li>انتخاب متریال مهندسی و الزامات عملیات حرارتی (سخت‌کاری القایی، سمانتاسیون)</li>
          <li>رعایت زوایای خروج قالب، حداقل شعاع‌های مجاز خم و پخ‌های هدایت‌کننده ابزار</li>
          <li>مهندسی معکوس تجهیزات صنعتی موجود و تهیه نقشه‌های ساخت بی عیب و نقص</li>
        </ul>
      </article>

    </div>
  </div>
</section>

<!-- ========================================================================
     4. SYMMETRICAL SPLIT SECTION: THEORY VS WORKSHOP REALITY
     ======================================================================== -->
<section class="pillar-split-section" aria-label="تفاوت آموزش تئوری با واقعیت صنعت کارگاهی">
  <div class="container">
    <div class="pillar-split-grid">

      <!-- Right Column: Engineering Insight & Comparison -->
      <div class="split-text-col">
        <h2>چرا تسلط بر دکمه‌های نرم‌افزار شما را برای خط تولید کارخانه آماده نمی‌کند؟</h2>
        <p class="lead-text">
          در فضای صنعتی ایران، تفاوت یک مدل‌ساز آماتور با مهندس طراح ارشد، در درک عمیق فرآیند قطعه‌سازی، تلرانس‌های ماشین‌کاری و رفتار واقعی فلز تحت بارهای دینامیکی است.
        </p>

        <div class="split-feature-list">
          
          <div class="split-feature-item">
            <div class="feature-desc">
              <h3>نقشه دکوراتیو در برابر نقشه ساختنی کارگاهی</h3>
              <p>یک مدل سه‌بعدی جذاب بدون مشخصات دقیق صافی سطح (Ra)، انطباقات فیت (ISO Fits) و تلرانس‌های هندسی، در کارگاه منجر به دوباره‌کاری و ضایعات سنگین متریال خواهد شد.</p>
            </div>
          </div>

          <div class="split-feature-item">
            <div class="feature-desc">
              <h3>تنش ساده الاستیک در برابر تمرکز تنش و خستگی</h3>
              <p>بیش از ۹۰٪ شکست قطعات صنعتی در اثر خستگی در محل پخ‌ها، جای خارها یا تنش‌های پسماند جوش رخ می‌دهد؛ موضوعی که در کتاب‌های تئوری دانشگاهی تدریس نمی‌شود.</p>
            </div>
          </div>

          <div class="split-feature-item">
            <div class="feature-desc">
              <h3>ابعاد اسمی در برابر انباشت خطاهای تلرانسی (Stack-up)</h3>
              <p>در مکانیزم‌های چند محوره، جمع جبری تلرانس‌های ماشین‌کاری منجر به گریپاژ یاتاقان‌ها و قفل شدن مکانیزم می‌شود؛ مگر اینکه طراح از محاسبات GD&amp;T استفاده کرده باشد.</p>
            </div>
          </div>

        </div>
      </div>

      <!-- Left Column: Symmetrical CAD Graphic & Action Panel -->
      <div class="split-visual-col">
        <div class="visual-col-frame">
          <div class="cad-crosshair ch-tl" aria-hidden="true"></div>
          <div class="cad-crosshair ch-tr" aria-hidden="true"></div>
          <div class="cad-crosshair ch-bl" aria-hidden="true"></div>
          <div class="cad-crosshair ch-br" aria-hidden="true"></div>

          <!-- Metadata Strip above the visual -->
          <div class="visual-meta-bar mono" dir="ltr">
            <span>MENTORSHIP CORE // 1-ON-1 COACHING</span>
            <span>SYSTEM AUDIT: VERIFIED</span>
          </div>

          <div class="visual-img-wrap">
            <img
              src="<?php echo esc_url( home_url( '/wp-content/uploads/2026/07/portfolio-fea-800x600.webp' ) ); ?>"
              alt="مدل‌سازی و تحلیل تنش مکانیزم صنعتی با سالیدورکس و Ansys"
              class="split-feature-img"
              width="800"
              height="600"
              loading="lazy"
            >

            <!-- Single HUD Glass Badge (Zero-Overlap Standard) -->
            <div class="visual-hud-badge" dir="ltr">
              <div class="hud-badge-indicator" aria-hidden="true"></div>
              <div class="hud-badge-content">
                <span class="hud-badge-title">PRACTICAL CAD / FEA / GD&amp;T</span>
                <span class="hud-badge-sub">100% PRODUCTION-READY METHODOLOGY</span>
              </div>
            </div>
          </div>
        </div>

        <!-- Action Buttons placed below the image to balance column height -->
        <div class="visual-col-actions">
          <a href="#rfq-section" class="btn btn-primary">
            <span>درخواست برنامه منتورشیپ فردی</span>
            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
              <path d="M5 12h14M12 5l7 7-7 7"/>
            </svg>
          </a>
          <a href="#mentorship-roadmap" class="btn btn-outline">
            <span>نقشه راه ۴ مرحله‌ای منتورینگ</span>
          </a>
        </div>
      </div>

    </div>
  </div>
</section>

<!-- ========================================================================
     5. 4-STAGE MENTORSHIP ROADMAP (نقشه راه ۴ مرحله‌ای منتورینگ)
     ======================================================================== -->
<section class="pillar-workflow-section" id="mentorship-roadmap" aria-label="نقشه راه سیستماتیک ۴ مرحله‌ای منتورینگ فردی">
  <div class="container">
    
    <div class="section-title-wrap text-center" style="margin-bottom: 56px;">
      <span class="badge badge-accent mono" style="margin-bottom: 12px; display: inline-block;">STEP-BY-STEP ROADMAP // نقشه راه ۴ مرحله‌ای</span>
      <h2 class="section-title" style="color: #ffffff;">مسیر گام‌به‌گام از سطح فعلی شما تا تسلط بر طراحی صنعتی</h2>
      <p class="section-subtitle" style="color: #94a3b8; max-width: 760px; margin: 0 auto; letter-spacing: 0 !important;">
        یک فرآیند شخصی‌سازی‌شده و ساختاریافته بر مبنای توانمندی‌ها، اهداف و پروژه‌های اختصاصی هر مهندس. مدت استاندارد هر ماژول ۱۶ جلسه تعاملی (متناسب با سطح و تعداد ماژول‌های انتخابی) است.
      </p>
    </div>

    <div class="workflow-grid-4">

      <!-- Stage 01 -->
      <div class="workflow-card">
        <div class="workflow-step-num mono">۰۱</div>
        <h3>ارزیابی سطح و نیازسنجی تخصصی</h3>
        <p>سنجش عمیق مهارت‌های فعلی CAD/FEA، بررسی نقاط ضعف در نقشه‌کشی و تدوین سیلابس اختصاصی بر اساس زمینه کاری یا صنعت هدف شما.</p>
        <div class="step-time-pill mono">جلسه ۱ // تعیین هدف</div>
      </div>

      <!-- Stage 02 -->
      <div class="workflow-card">
        <div class="workflow-step-num mono">۰۲</div>
        <h3>آموزش مفاهیم و حل زنده کیس‌استادی</h3>
        <p>انتقال تکنیک‌های مدل‌سازی پیشرفته و شبیه‌سازی عددی روی قطعات سنگین کارگاهی، کانوایرها، گیربکس‌ها و استراکچرهای واقعی صنعتی.</p>
        <div class="step-time-pill mono">جلسات ۲ تا ۱۰ // مدل و تحلیل</div>
      </div>

      <!-- Stage 03 -->
      <div class="workflow-card">
        <div class="workflow-step-num mono">۰۳</div>
        <h3>جلسات زنده بازبینی کانسپت (Design Review)</h3>
        <p>نقد موشکافانه طرح‌های ترسیم‌شده توسط شما؛ اصلاح خطاهای تلرانسی، بهبود استحکام سازه و بازنگری متریال تحت نظر مستقیم منتور ارشد.</p>
        <div class="step-time-pill mono">جلسات ۱۱ تا ۱۵ // عیب‌یابی نقشه</div>
      </div>

      <!-- Stage 04 -->
      <div class="workflow-card">
        <div class="workflow-step-num mono">۰۴</div>
        <h3>پورتفولیو مهندسی و آمادگی بازار کار</h3>
        <p>استخراج بسته نقشه‌های ساخت کامل همراه با دفترچه محاسبات فنی جهت ارائه مقتدرانه در جلسات استخدامی، مصاحبه‌های مهاجرت کاری یا قراردادها.</p>
        <div class="step-time-pill mono">جلسه پایانی // خروجی استاندارد</div>
      </div>

    </div>
  </div>
</section>

<!-- ========================================================================
     6. MENTORSHIP DELIVERABLES (خروجی‌ها و ابزارهای تحویلی)
     ======================================================================== -->
<section class="pillar-deliverables-section" aria-label="پکیج اسناد و ابزارهای تحویلی منتورشیپ">
  <div class="container">

    <div class="services-section-header">
      <h2>پکیج دارایی‌ها و ابزارهای مهندسی تحویل داده شده به دانش‌آموخته</h2>
      <p>
        ابزارهایی ملموس که روند طراحی روزمره شما در کارخانجات را برای همیشه متحول و استاندارد می‌کنند.
      </p>
    </div>

    <div class="deliverables-grid-3">

      <!-- Item 01 -->
      <div class="deliverable-card">
        <div class="deliverable-header">
          <span class="deliverable-code mono">// DOC-01: PORTFOLIO</span>
          <div class="deliverable-icon-wrap" aria-hidden="true">
            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2">
              <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/>
              <polyline points="14 2 14 8 20 8"/>
            </svg>
          </div>
        </div>
        <h3>پورتفولیوی پروژه‌محور و قابل دفاع مهندسی</h3>
        <p>مجموعه‌ای کامل از نقشه‌های ساخت انفجاری، جزئیات انطباقات GD&amp;T و دفترچه‌های تحلیل تنش شبیه‌سازی شده روی پروژه‌های واقعی جهت ارائه به کارفرمایان داخلی و خارجی.</p>
        <div class="deliverable-badge mono">CAREER ADVANCEMENT ASSET</div>
      </div>

      <!-- Item 02 -->
      <div class="deliverable-card">
        <div class="deliverable-header">
          <span class="deliverable-code mono">// TOOL-02: LIBRARIES</span>
          <div class="deliverable-icon-wrap" aria-hidden="true">
            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2">
              <rect x="3" y="3" width="18" height="18" rx="2" ry="2"/>
              <line x1="3" y1="9" x2="21" y2="9"/>
              <line x1="9" y1="21" x2="9" y2="9"/>
            </svg>
          </div>
        </div>
        <h3>کتابخانه قطعات، قالب‌ها و ماکروهای سالیدورکس</h3>
        <p>دسترسی به قالب‌های استاندارد نقشه‌کشی (Sheet Formats)، جداول انطباقات آماده، کتابخانه اختصاصی مقاطع فولادی استاندارد DIN و اتوماسیون قطعه‌سازی جهت افزایش ۵ برابری سرعت مدل‌سازی.</p>
        <div class="deliverable-badge mono">READY-TO-USE ASSET PACK</div>
      </div>

      <!-- Item 03 -->
      <div class="deliverable-card">
        <div class="deliverable-header">
          <span class="deliverable-code mono">// CHECK-03: DFMA AUDIT</span>
          <div class="deliverable-icon-wrap" aria-hidden="true">
            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2">
              <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/>
              <polyline points="22 4 12 14.01 9 11.01"/>
            </svg>
          </div>
        </div>
        <h3>چک‌لیست‌های اختصاصی ممیزی و صحه‌گذاری نقشه</h3>
        <p>چک‌لیست‌های کاربردی بررسی دیتوم‌ها، کنترل زنجیره تلرانس، انطباقات ساخت با دستگاه‌های تراش/فرز CNC و صحه‌گذاری نهایی نقشه قبل از ارسال به کارگاه قطعه‌سازی.</p>
        <div class="deliverable-badge mono">SHOP-FLOOR AUDIT PROTOCOL</div>
      </div>

    </div>
  </div>
</section>

<!-- ========================================================================
     7. MENTOR PROFILE CARD (معرفی منتور دوره)
     ======================================================================== -->
<section class="pillar-mentor-section" aria-label="معرفی منتور دوره" style="background-color:#ffffff; padding:60px 0 40px;">
  <div class="container">
    <div class="mentor-profile-card" style="background:#f8fafc; border:1px solid #e2e8f0; border-radius:20px; padding:40px;">
      <div class="mentor-profile-grid">
        <div class="mentor-avatar-col">
          <div class="mentor-avatar-frame" style="border:1px solid #cbd5e1; background:#ffffff;">
            <img
              src="<?php echo esc_url( home_url( '/wp-content/uploads/2026/07/hossein-vatandoust-founder.webp' ) ); ?>"
              alt="مهندس حسین وطن‌دوست — طراح ارشد ماشین‌آلات صنعتی و منتور دوره"
              class="mentor-avatar-img"
              width="280"
              height="280"
              loading="lazy"
            />
            <div class="mentor-status-chip" style="background:#0F172A; color:#ffffff; border:1px solid #334155;">
              <span class="status-dot" style="background:#8ce70c;" aria-hidden="true"></span>
              <span style="letter-spacing:0 !important;">منتور ارشد دپارتمان مکانیک</span>
            </div>
          </div>
        </div>
        <div class="mentor-bio-col">
          <div class="section-badge mono" style="background:#0F172A; color:#8ce70c; border:none; padding:5px 14px; border-radius:4px; font-size:0.75rem; font-weight:700; display:inline-block; margin-bottom:12px;">LEAD MENTOR PROFILE // هدایت مستقیم</div>
          <h2 class="mentor-name" style="color:#0F172A; font-size:1.6rem; font-weight:900; margin-bottom:6px; letter-spacing:0 !important;">منتور شما در این مسیر: مهندس حسین وطن‌دوست</h2>
          <span class="mentor-role" style="color:#15803D; font-size:0.95rem; font-weight:700; margin-bottom:16px; display:block; letter-spacing:0 !important;">طراح ارشد ماشین‌آلات صنعتی و خطوط تولید</span>
          <p class="mentor-summary" style="color:#334155; font-size:0.95rem; line-height:1.75; margin-bottom:24px; letter-spacing:0 !important;">
            بیش از ۱۵ سال سابقه طراحی ماشین‌آلات صنعتی، مهندسی معکوس، تحلیل المان محدود (FEA) و اجرای پروژه‌های خطوط تولید در صنایع غذایی، دارویی و بسته‌بندی. رویکرد منتورشیپ بر انتقال تجربیات حل مسئله در کف کارگاه و تبدیل دانش نرم‌افزاری به ماشین‌آلات قابل ساخت استوار است.
          </p>
          <div class="mentor-highlights-grid">
            <div class="highlight-item" style="background:#ffffff; border:1px solid #e2e8f0; border-radius:8px; padding:12px 14px;">
              <span class="highlight-num mono" style="color:#15803D; font-size:1.3rem; font-weight:900;">+۱۵۰</span>
              <span class="highlight-text" style="color:#334155; font-size:0.76rem; font-weight:600; letter-spacing:0 !important;">پروژه صنعتی موفق</span>
            </div>
            <div class="highlight-item" style="background:#ffffff; border:1px solid #e2e8f0; border-radius:8px; padding:12px 14px;">
              <span class="highlight-num mono" style="color:#15803D; font-size:1.3rem; font-weight:900;">+۴۰</span>
              <span class="highlight-text" style="color:#334155; font-size:0.76rem; font-weight:600; letter-spacing:0 !important;">خط تولید فعال در کشور</span>
            </div>
            <div class="highlight-item" style="background:#ffffff; border:1px solid #e2e8f0; border-radius:8px; padding:12px 14px;">
              <span class="highlight-num mono" style="color:#15803D; font-size:1.3rem; font-weight:900;">۱۰۰٪</span>
              <span class="highlight-text" style="color:#334155; font-size:0.76rem; font-weight:600; letter-spacing:0 !important;">انتقال تجربه کارگاهی زنده</span>
            </div>
          </div>
          <div class="mentor-cta-row">
            <a href="<?php echo esc_url( home_url( '/about/team/' ) ); ?>" class="btn btn-outline btn-sm" style="color:#0F172A; border-color:#0F172A; font-weight:700; background:transparent;">
              <span>مشاهده سوابق کامل و تیم فنی ←</span>
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ========================================================================
     8. FREQUENTLY ASKED QUESTIONS (سؤالات متداول منتورشیپ + اسکیما)
     ======================================================================== -->
<section class="pillar-faq-section" id="mentorship-faq" aria-label="سؤالات متداول دوره منتورشیپ مهندسی مکانیک" style="background-color:#ffffff; padding:60px 0 84px;">
  <div class="container">
    <div class="services-section-header text-center" style="max-width:760px; margin:0 auto 40px;">
      <span class="badge mono" style="background:#0F172A; color:#8ce70c; border:none; padding:5px 14px; border-radius:4px; font-size:0.75rem; font-weight:700; margin-bottom:12px; display:inline-block;">FAQ // سؤالات متداول مهندسان</span>
      <h2 style="color:#0F172A; font-size:1.85rem; font-weight:800; margin-bottom:12px; letter-spacing:0 !important;">سؤالات متداول درباره دوره منتورشیپ فردی</h2>
      <p style="color:#334155; font-size:0.95rem; line-height:1.75; letter-spacing:0 !important;">پاسخ به پرتکرارترین سؤالات مهندسان طراح درباره پیش‌نیازها، شیوه برگزاری، پروژه‌ها و سیستم مورد نیاز.</p>
    </div>

    <div class="faq-accordion-list" style="max-width:860px; margin:0 auto;">
      <!-- FAQ 1 -->
      <div class="faq-accordion-item" style="background:#f8fafc; border:1px solid #e2e8f0; border-radius:10px; margin-bottom:12px; overflow:hidden;">
        <button type="button" class="faq-accordion-trigger" aria-expanded="false" aria-controls="faq-ans-1" id="faq-q-1" style="background:none; border:none; width:100%; display:flex; align-items:center; justify-content:space-between; gap:16px; padding:18px 22px; cursor:pointer;">
          <span class="faq-q-text" style="color:#0F172A; font-weight:800; font-size:1.02rem; text-align:right;">۱. آیا برای شرکت در منتورشیپ باید از قبل به سالیدورکس یا انسیس مسلط باشم؟</span>
          <svg class="faq-chevron" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="#15803D" stroke-width="2.4" aria-hidden="true"><polyline points="6 9 12 15 18 9"/></svg>
        </button>
        <div class="faq-accordion-panel" id="faq-ans-1" role="region" aria-labelledby="faq-q-1" style="padding:0 22px 20px;" hidden>
          <p style="color:#334155; font-size:0.92rem; line-height:1.8; margin:0; letter-spacing:0 !important;">خیر. پیش از شروع دوره یک جلسه ارزیابی و تعیین سطح برگزار می‌شود و نقشه راه دقیقاً بر اساس دانش فعلی شما (از سطح مبانی تا مهندس طراح ارشد) شخصی‌سازی می‌شود.</p>
        </div>
      </div>

      <!-- FAQ 2 -->
      <div class="faq-accordion-item" style="background:#f8fafc; border:1px solid #e2e8f0; border-radius:10px; margin-bottom:12px; overflow:hidden;">
        <button type="button" class="faq-accordion-trigger" aria-expanded="false" aria-controls="faq-ans-2" id="faq-q-2" style="background:none; border:none; width:100%; display:flex; align-items:center; justify-content:space-between; gap:16px; padding:18px 22px; cursor:pointer;">
          <span class="faq-q-text" style="color:#0F172A; font-weight:800; font-size:1.02rem; text-align:right;">۲. آیا می‌توانم فقط یک ماژول (مثلاً فقط تحلیل در Ansys یا فقط GD&amp;T) را انتخاب کنم؟</span>
          <svg class="faq-chevron" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="#15803D" stroke-width="2.4" aria-hidden="true"><polyline points="6 9 12 15 18 9"/></svg>
        </button>
        <div class="faq-accordion-panel" id="faq-ans-2" role="region" aria-labelledby="faq-q-2" style="padding:0 22px 20px;" hidden>
          <p style="color:#334155; font-size:0.92rem; line-height:1.8; margin:0; letter-spacing:0 !important;">بله. اگر در بخش مدل‌سازی مسلط هستید و فقط قصد ارتقای مهارت در شبیه‌سازی FEA، استاندارد نقشه‌کشی ASME Y14.5 یا طراحی مکانیزم‌ها را دارید، امکان ثبت‌نام در تک‌ماژول تخصصی وجود دارد.</p>
        </div>
      </div>

      <!-- FAQ 3 -->
      <div class="faq-accordion-item" style="background:#f8fafc; border:1px solid #e2e8f0; border-radius:10px; margin-bottom:12px; overflow:hidden;">
        <button type="button" class="faq-accordion-trigger" aria-expanded="false" aria-controls="faq-ans-3" id="faq-q-3" style="background:none; border:none; width:100%; display:flex; align-items:center; justify-content:space-between; gap:16px; padding:18px 22px; cursor:pointer;">
          <span class="faq-q-text" style="color:#0F172A; font-weight:800; font-size:1.02rem; text-align:right;">۳. جلسات برای افراد خارج از مشهد چگونه برگزار می‌شود و آیا ضبط می‌شوند؟</span>
          <svg class="faq-chevron" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="#15803D" stroke-width="2.4" aria-hidden="true"><polyline points="6 9 12 15 18 9"/></svg>
        </button>
        <div class="faq-accordion-panel" id="faq-ans-3" role="region" aria-labelledby="faq-q-3" style="padding:0 22px 20px;" hidden>
          <p style="color:#334155; font-size:0.92rem; line-height:1.8; margin:0; letter-spacing:0 !important;">تمامی جلسات به‌صورت آنلاین تعاملی با اشتراک‌گذاری صفحه و کنترل مستقیم فایل‌های CAD/CAE برگزار می‌شود و فایل ویدیویی و مدل‌های هر جلسه برای مرور در اختیار شما قرار می‌گیرد. امکان برگزاری جلسات حضوری در مشهد نیز فراهم است.</p>
        </div>
      </div>

      <!-- FAQ 4 -->
      <div class="faq-accordion-item" style="background:#f8fafc; border:1px solid #e2e8f0; border-radius:10px; margin-bottom:12px; overflow:hidden;">
        <button type="button" class="faq-accordion-trigger" aria-expanded="false" aria-controls="faq-ans-4" id="faq-q-4" style="background:none; border:none; width:100%; display:flex; align-items:center; justify-content:space-between; gap:16px; padding:18px 22px; cursor:pointer;">
          <span class="faq-q-text" style="color:#0F172A; font-weight:800; font-size:1.02rem; text-align:right;">۴. آیا می‌توانم روی پروژه واقعی محل کار یا پایان‌نامه خود در جلسات کار کنم؟</span>
          <svg class="faq-chevron" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="#15803D" stroke-width="2.4" aria-hidden="true"><polyline points="6 9 12 15 18 9"/></svg>
        </button>
        <div class="faq-accordion-panel" id="faq-ans-4" role="region" aria-labelledby="faq-q-4" style="padding:0 22px 20px;" hidden>
          <p style="color:#334155; font-size:0.92rem; line-height:1.8; margin:0; letter-spacing:0 !important;">بله، یکی از مزیت‌های اصلی منتورشیپ تک‌به‌تک، کار روی چالش‌ها و پروژه‌های واقعی شماست. در صورت حساسیت صنعتی، تمامی فایل‌ها تحت تعهد محرمانگی (NDA) بررسی می‌شوند.</p>
        </div>
      </div>

      <!-- FAQ 5 -->
      <div class="faq-accordion-item" style="background:#f8fafc; border:1px solid #e2e8f0; border-radius:10px; margin-bottom:12px; overflow:hidden;">
        <button type="button" class="faq-accordion-trigger" aria-expanded="false" aria-controls="faq-ans-5" id="faq-q-5" style="background:none; border:none; width:100%; display:flex; align-items:center; justify-content:space-between; gap:16px; padding:18px 22px; cursor:pointer;">
          <span class="faq-q-text" style="color:#0F172A; font-weight:800; font-size:1.02rem; text-align:right;">۵. حداقل سیستم مورد نیاز و نحوه پرداخت شهریه چگونه است؟</span>
          <svg class="faq-chevron" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="#15803D" stroke-width="2.4" aria-hidden="true"><polyline points="6 9 12 15 18 9"/></svg>
        </button>
        <div class="faq-accordion-panel" id="faq-ans-5" role="region" aria-labelledby="faq-q-5" style="padding:0 22px 20px;" hidden>
          <p style="color:#334155; font-size:0.92rem; line-height:1.8; margin:0; letter-spacing:0 !important;">برای ماژول‌های CAD و نقشه‌کشی یک لپ‌تاپ یا سیستم با رم ۱۶ گیگابایت و پردازنده Core i5/i7 کافی است (برای تحلیل‌های سنگین Ansys رم ۳۲ گیگابایت پیشنهاد می‌شود). جزئیات شهریه و شرایط پرداخت مرحله‌ای متناسب با تعداد ماژول‌ها در جلسه تعیین سطح اعلام می‌شود.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- FAQ Schema.org JSON-LD -->
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "FAQPage",
  "mainEntity": [
    {
      "@type": "Question",
      "name": "آیا برای شرکت در منتورشیپ باید از قبل به سالیدورکس یا انسیس مسلط باشم؟",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "خیر. پیش از شروع دوره یک جلسه ارزیابی و تعیین سطح برگزار می‌شود و نقشه راه دقیقاً بر اساس دانش فعلی شما (از سطح مبانی تا مهندس طراح ارشد) شخصی‌سازی می‌شود."
      }
    },
    {
      "@type": "Question",
      "name": "آیا می‌توانم فقط یک ماژول (مثلاً فقط تحلیل در Ansys یا فقط GD&T) را انتخاب کنم؟",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "بله. اگر در بخش مدل‌سازی مسلط هستید و فقط قصد ارتقای مهارت در شبیه‌سازی FEA، استاندارد نقشه‌کشی ASME Y14.5 یا طراحی مکانیزم‌ها را دارید، امکان ثبت‌نام در تک‌ماژول تخصصی وجود دارد."
      }
    },
    {
      "@type": "Question",
      "name": "جلسات برای افراد خارج از مشهد چگونه برگزار می‌شود و آیا ضبط می‌شوند؟",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "تمامی جلسات به‌صورت آنلاین تعاملی با اشتراک‌گذاری صفحه و کنترل مستقیم فایل‌های CAD/CAE برگزار می‌شود و فایل ویدیویی و مدل‌های هر جلسه برای مرور در اختیار شما قرار می‌گیرد. امکان برگزاری جلسات حضوری در مشهد نیز فراهم است."
      }
    },
    {
      "@type": "Question",
      "name": "آیا می‌توانم روی پروژه واقعی محل کار یا پایان‌نامه خود در جلسات کار کنم؟",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "بله، یکی از مزیت‌های اصلی منتورشیپ تک‌به‌تک، کار روی چالش‌ها و پروژه‌های واقعی شماست. در صورت حساسیت صنعتی، تمامی فایل‌ها تحت تعهد محرمانگی (NDA) بررسی می‌شوند."
      }
    },
    {
      "@type": "Question",
      "name": "حداقل سیستم مورد نیاز و نحوه پرداخت شهریه چگونه است؟",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "برای ماژول‌های CAD و نقشه‌کشی یک لپ‌تاپ یا سیستم با رم ۱۶ گیگابایت و پردازنده Core i5/i7 کافی است (برای تحلیل‌های سنگین Ansys رم ۳۲ گیگابایت پیشنهاد می‌شود). جزئیات شهریه و شرایط پرداخت مرحله‌ای متناسب با تعداد ماژول‌ها در جلسه تعیین سطح اعلام می‌شود."
      }
    }
  ]
}
</script>

<!-- ========================================================================
     9. SYMMETRICAL DUAL-PANEL INTAKE FORM (فرم استعلام و ثبت‌نام منتورشیپ)
     ======================================================================== -->
<section class="pillar-rfq-dual-section" id="rfq-section" aria-label="فرم ثبت‌نام و تعیین سطح منتورشیپ مهندسی">
  <div class="container">
    <div class="rfq-dual-grid">

      <!-- Column 1: Visual Incentive & Trust Showcase -->
      <div class="rfq-incentive-panel">
        <div>
          <div class="rfq-trust-badge mono">
            <span class="rfq-led" aria-hidden="true"></span>
            <span>STRICT CONFIDENTIALITY // 1-ON-1 COACHING</span>
          </div>

          <h2 class="rfq-incentive-title">
            مسیر تبدیل شدن به مهندس طراح ارشد با هدایت مستقیم طراح ماشین‌آلات صنعتی
          </h2>

          <p class="rfq-incentive-subtitle">
            بیش از ۱۵ سال تجربه صنعتی در حل چالش‌های کارگاهی و طراحی مکانیزم‌های پیچیده را در جلسات تک‌به‌تک و متناسب با اهداف خود بیاموزید.
          </p>

          <!-- 4 Value Proposition Chips -->
          <div class="rfq-incentives-list">
            <div class="rfq-incentive-item">
              <div class="rfq-incentive-icon" aria-hidden="true">
                <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2">
                  <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/>
                  <circle cx="9" cy="7" r="4"/>
                  <path d="M23 21v-2a4 4 0 0 0-3-3.87"/>
                  <path d="M16 3.13a4 4 0 0 1 0 7.75"/>
                </svg>
              </div>
              <div class="rfq-incentive-text">
                <h3 style="font-size:1.1rem; font-weight:700; color:#ffffff; margin-bottom:4px; letter-spacing:0 !important;">کوچینگ ۱ به ۱ و رفع اشکال روی پروژه شما</h3>
                <p style="color:#CBD5E1; font-size:0.86rem; line-height:1.6; margin:0; letter-spacing:0 !important;">بررسی مستقیم فایل‌ها، نقشه‌ها و چالش‌های مهندسی شما بدون محدودیت‌های کلاس‌های عمومی یا فیلم‌های از پیش ضبط‌شده.</p>
              </div>
            </div>

            <div class="rfq-incentive-item">
              <div class="rfq-incentive-icon" aria-hidden="true">
                <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2">
                  <circle cx="12" cy="12" r="10"/>
                  <line x1="2" y1="12" x2="22" y2="12"/>
                  <path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"/>
                </svg>
              </div>
              <div class="rfq-incentive-text">
                <h3 style="font-size:1.1rem; font-weight:700; color:#ffffff; margin-bottom:4px; letter-spacing:0 !important;">برگزاری آنلاین سراسری + امکان جلسات حضوری در مشهد</h3>
                <p style="color:#CBD5E1; font-size:0.86rem; line-height:1.6; margin:0; letter-spacing:0 !important;">برگزاری آنلاین تعاملی با اشتراک صفحه CAD/CAE برای مهندسان سراسر ایران و خارج از کشور + امکان جلسات حضوری در مشهد.</p>
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
                <h3 style="font-size:1.1rem; font-weight:700; color:#ffffff; margin-bottom:4px; letter-spacing:0 !important;">انتقال تجربیات خطوط تولید واقعی صنعتی</h3>
                <p style="color:#CBD5E1; font-size:0.86rem; line-height:1.6; margin:0; letter-spacing:0 !important;">یادگیری ناگفته‌های تلرانس‌گذاری، فرآیندهای ماشین‌کاری CNC و استانداردهای ساخت بر پایه پروژه‌های فعال ماشین دیزاین.</p>
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
                <h3 style="font-size:1.1rem; font-weight:700; color:#ffffff; margin-bottom:4px; letter-spacing:0 !important;">زمان‌بندی منعطف و متناسب با مهندسان شاغل</h3>
                <p style="color:#CBD5E1; font-size:0.86rem; line-height:1.6; margin:0; letter-spacing:0 !important;">برگزاری جلسات در ساعات غیراداری و آخر هفته به همراه ضبط کامل جلسات خصوصی برای مرور و تمرین مجدد شما.</p>
              </div>
            </div>
          </div>
        </div>

        <?php 
        $mnt_phone = function_exists('md_get_contact') ? md_get_contact('phone', '') : '';
        $mnt_mobile = function_exists('md_get_contact') ? md_get_contact('mobile', '') : '';
        $mnt_display = $mnt_phone ?: ($mnt_mobile ?: '۰۵۱-۳۷۶۰۰۰۰۰');
        $mnt_clean = function_exists('md_tel_uri') ? md_tel_uri( $mnt_display ) : 'tel:05137600000';
        ?>
        <!-- Fast Track Phone Chip -->
        <div class="rfq-direct-consult-chip">
          <div class="consult-chip-text">
            <span class="consult-chip-label">نیاز به مشاوره تعیین سطح یا جلسه حضوری در مشهد دارید؟</span>
            <span class="consult-chip-title">گفتگوی مستقیم با مهندس حسین وطن‌دوست</span>
          </div>
          <div class="consult-chip-actions" style="display:flex; gap:10px; align-items:center;">
            <a href="tel:<?php echo esc_attr($mnt_clean); ?>" class="consult-phone-btn mono" dir="ltr" title="تماس مستقیم با منتور ارشد">
              <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2">
                <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/>
              </svg>
              <span><?php echo esc_html($mnt_display); ?></span>
            </a>
          </div>
        </div>
      </div>

      <!-- Column 2: Streamlined Industrial Form Panel (Symmetrical to Column 1) -->
      <div class="rfq-form-panel-custom">
        <div id="pillarRfqContainer">
          <div class="rfq-form-custom-header">
            <span class="rfq-form-tag mono">// FAST-TRACK MENTORSHIP INTAKE</span>
            <h2>درخواست جلسه مشاوره و تعیین سطح منتورشیپ</h2>
            <p>مشخصات و اهداف فنی خود را وارد فرمایید؛ ظرف ۲۴ ساعت کاری جهت هماهنگی جلسه ارزیابی با شما تماس گرفته خواهد شد.</p>
          </div>

          <div id="pillarRfqNotice" class="rfq-hud-notice" style="display:none;" role="alert"></div>

          <form id="pillarRfqForm" class="rfq-form-grid-inner" method="POST">
            <input type="hidden" name="action" value="machinedesign_rfq_submit">
            <input type="hidden" name="source_pillar" value="training-mentorship">
            <input type="hidden" name="source_url" value="<?php echo esc_url( get_permalink() ); ?>">
            
            <div class="rfq-input-group">
              <label for="rfq-name">نام و نام خانوادگی <span class="req-star">*</span></label>
              <input type="text" id="rfq-name" name="rfq_name" class="rfq-input-field" required placeholder="مثال: مهندس رضوانی">
            </div>

            <div class="rfq-input-group">
              <label for="rfq-phone">شماره همراه مستقیم مهندس <span class="req-star">*</span></label>
              <input type="tel" id="rfq-phone" name="rfq_phone" class="rfq-input-field" required placeholder="۰۹۱۲XXXXXXX" dir="ltr">
            </div>

            <div class="rfq-input-group rfq-field-full">
              <label for="rfq-service-type">حوزه اولویت آموزش و منتورینگ <span class="req-star">*</span></label>
              <select id="rfq-service-type" name="rfq_service_type" class="rfq-input-field" required>
                <option value="" disabled selected>انتخاب ماژول تخصصی مد نظر...</option>
                <option value="solidworks_adv">سالیدورکس پیشرفته سطوح، سازه و ورق‌کاری (Surfacing &amp; Sheet Metal)</option>
                <option value="ansys_fea">شبیه‌سازی تنش، خستگی و ارتعاشات المان محدود (Ansys FEA)</option>
                <option value="gdt_asme">تلرانس‌گذاری ابعادی و هندسی کاربردی (GD&amp;T ASME Y14.5)</option>
                <option value="dfma_machining">اصول طراحی برای ساخت و انطباق با ماشین‌کاری CNC (DFMA)</option>
                <option value="full_mentorship">منتورینگ جامع طراح ارشد مکانیک (پکیج کامل ۴ ماژول)</option>
              </select>
            </div>

            <div class="rfq-input-group rfq-field-full">
              <label for="rfq-stage">سطح فعلی تسلط بر نرم‌افزارهای مهندسی <span class="req-star">*</span></label>
              <select id="rfq-stage" name="rfq_stage" class="rfq-input-field" required>
                <option value="" disabled selected>انتخاب سطح فعلی...</option>
                <option value="intermediate">آشنا با مبانی CAD / نیازمند ارتقا به مدل‌سازی و نقشه‌کشی کارگاهی</option>
                <option value="employed_engineer">مهندس شاغل در کارخانه / نیازمند حل چالش‌های پروژه و تحلیل FEA</option>
                <option value="student_grad">دانشجو یا فارغ‌التحصیل مکانیک / نیازمند آماده‌سازی برای بازار کار</option>
                <option value="senior_refresher">طراح باسابقه / نیازمند به‌روزرسانی با استانداردهای GD&amp;T و DFMA</option>
              </select>
            </div>

            <div class="rfq-input-group rfq-field-full">
              <label for="rfq-desc">شرح هدف آموزشی، نوع چالش یا پروژه مد نظر شما</label>
              <textarea id="rfq-desc" name="rfq_desc" class="rfq-input-field" rows="3" placeholder="موضوع پروژه جاری، حوزه صنعت فعالیت یا مهارتی که بیشترین نیاز به تقویت آن را دارید بیان فرمایید..."></textarea>
            </div>

            <div class="rfq-field-full">
              <button type="submit" id="pillarRfqSubmitBtn" class="btn-rfq-submit-large">
                <span>ثبت مشخصات و رزرو نوبت مشاوره تعیین سطح</span>
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
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
            <div class="rfq-success-badge mono">// INQUIRY REGISTERED // COACHING INTAKE SCHEDULED</div>
            <h4 class="rfq-success-title">درخواست منتورشیپ شما با موفقیت ثبت گردید</h4>
            <div class="rfq-success-code-wrap">
              <span>کد رهگیری سیستمی:</span>
              <span id="rfqTrackingPill" class="rfq-tracking-pill mono">MD-EDU-2026-0000</span>
            </div>
            <p class="rfq-success-desc">
              مشخصات و سوابق شما در دپارتمان آموزش و منتورشیپ ماشین دیزاین ثبت شد. مهندس حسین وطن‌دوست ظرف حداکثر ۲۴ ساعت کاری جهت هماهنگی جلسه ارزیابی سطح فنی با شما تماس خواهند گرفت.
            </p>
            <button type="button" id="pillarRfqResetBtn" class="rfq-reset-btn">
              + ثبت درخواست دیگر
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
  // 1. FAQ Accordion Handler
  var faqTriggers = document.querySelectorAll('.faq-accordion-trigger');
  faqTriggers.forEach(function(btn) {
    btn.addEventListener('click', function() {
      var expanded = btn.getAttribute('aria-expanded') === 'true';
      var panelId = btn.getAttribute('aria-controls');
      var panel = document.getElementById(panelId);
      var item = btn.closest('.faq-accordion-item');

      btn.setAttribute('aria-expanded', !expanded);
      if (panel) {
        panel.hidden = expanded;
      }
      if (item) {
        item.classList.toggle('is-open', !expanded);
      }
    });
  });

  // 2. Mentorship RFQ Intake Form Handler
  var form = document.getElementById('pillarRfqForm');
  var submitBtn = document.getElementById('pillarRfqSubmitBtn');
  var notice = document.getElementById('pillarRfqNotice');
  var successHud = document.getElementById('pillarRfqSuccessHud');
  var trackingPill = document.getElementById('rfqTrackingPill');
  var resetBtn = document.getElementById('pillarRfqResetBtn');
  var header = document.querySelector('.rfq-form-custom-header');

  if (!form) return;

  function normalizePhoneDigits(str) {
    if (!str) return '';
    var fa = ['۰', '۱', '۲', '۳', '۴', '۵', '۶', '۷', '۸', '۹'];
    var ar = ['٠', '١', '٢', '٣', '٤', '٥', '٦', '٧', '٨', '٩'];
    var res = String(str);
    for (var i = 0; i < 10; i++) {
      res = res.replace(new RegExp(fa[i], 'g'), i).replace(new RegExp(ar[i], 'g'), i);
    }
    return res.replace(/[^0-9+]/g, '');
  }

  function isValidIranPhone(phone) {
    if (!phone) return false;
    var clean = phone.replace(/[\s-]/g, '');
    return /^09[0-9]{9}$/.test(clean) || /^(\+989|00989)[0-9]{9}$/.test(clean) || /^0[1-8][0-9]{9}$/.test(clean);
  }

  form.addEventListener('submit', function(e) {
    e.preventDefault();

    var nameInput = document.getElementById('rfq-name');
    var phoneInput = document.getElementById('rfq-phone');
    var serviceInput = document.getElementById('rfq-service-type');
    var stageInput = document.getElementById('rfq-stage');

    var rawPhone = phoneInput ? phoneInput.value.trim() : '';
    var normalizedPhone = normalizePhoneDigits(rawPhone);

    if (!normalizedPhone || !isValidIranPhone(normalizedPhone)) {
      showNotice('لطفاً یک شماره همراه معتبر (با پیش‌شماره ۰۹) وارد فرمایید.', 'error');
      if (phoneInput) phoneInput.focus();
      return;
    }

    if (phoneInput) {
      phoneInput.value = normalizedPhone;
    }

    // UI Loading state
    submitBtn.disabled = true;
    submitBtn.style.opacity = '0.7';
    submitBtn.innerHTML = '<span>در حال ثبت امن و رزرو نوبت تعیین سطح...</span>';
    if (notice) notice.style.display = 'none';

    var formData = new FormData(form);
    formData.set('rfq_phone', normalizedPhone);
    var ajaxUrl = (typeof md_vars !== 'undefined' && md_vars.ajax_url) ? md_vars.ajax_url : '/machinedesign/wp-admin/admin-ajax.php';

    fetch(ajaxUrl, {
      method: 'POST',
      body: formData
    })
    .then(function(res) { return res.json(); })
    .then(function(data) {
      submitBtn.disabled = false;
      submitBtn.style.opacity = '1';
      submitBtn.innerHTML = '<span>ثبت مشخصات و رزرو نوبت مشاوره تعیین سطح</span><svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M19 12H5M12 19l-7-7 7-7"/></svg>';

      if (data && data.success) {
        var code = data.data && (data.data.tracking_code || data.data.tracking) ? (data.data.tracking_code || data.data.tracking) : 'MD-EDU-2026';
        if (trackingPill) trackingPill.textContent = code;

        // Hide form & header, show success HUD
        form.style.display = 'none';
        if (header) header.style.display = 'none';
        if (notice) notice.style.display = 'none';
        if (successHud) successHud.style.display = 'flex';

        form.reset();
      } else {
        var msg = data && data.data && data.data.message ? data.data.message : 'خطایی در ثبت درخواست رخ داد. لطفاً مجدداً تلاش فرمایید.';
        showNotice(msg, 'error');
      }
    })
    .catch(function(err) {
      submitBtn.disabled = false;
      submitBtn.style.opacity = '1';
      submitBtn.innerHTML = '<span>ثبت مشخصات و رزرو نوبت مشاوره تعیین سطح</span><svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M19 12H5M12 19l-7-7 7-7"/></svg>';
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
get_footer();
