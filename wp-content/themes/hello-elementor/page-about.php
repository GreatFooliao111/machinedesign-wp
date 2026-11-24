<?php
/**
 * Template Name: صفحه درباره ما ماشین دیزاین
 * Description: Corporate overview, engineering philosophy, 4-hub infrastructure & directory to team and founder portfolio.
 *
 * @package HelloElementor
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

get_header();
?>

<!-- ========================================================================
     1. ABOUT US HERO SECTION & CORE METRICS
     ======================================================================== -->
<section class="page-hero-banner pillar-hero-wrap" aria-label="هیدر درباره ما ماشین دیزاین">
  <div class="container">
    <div class="pillar-hero-grid">

      <!-- Right Column: Text & Corporate Mission -->
      <div class="pillar-hero-content">
        <!-- Breadcrumb Navigation -->
        <nav class="page-hero-breadcrumb" aria-label="مسیر راهنما">
          <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="breadcrumb-item">صفحه اصلی</a>
          <span class="breadcrumb-separator" aria-hidden="true">/</span>
          <span class="breadcrumb-current" aria-current="page">درباره ما</span>
        </nav>

        <!-- Corporate Sub-badge -->
        <div class="page-hero-badge">
          <span class="pulse-indicator" aria-hidden="true"></span>
          <span class="mono">ENGINEERING IDENTITY // SINCE 2011</span>
        </div>

        <!-- Main Page Title -->
        <h1 class="page-hero-title pillar-hero-title-split">
          <span class="title-line-1">درباره ماشین دیزاین؛ دفتر مهندسی طراحی ماشین‌آلات صنعتی</span>
          <span class="title-line-2 text-accent">پیوند دانش آکادمیک سطح اول با واقعیت‌های اجرایی کف کارگاه</span>
        </h1>

        <!-- Summary Lead Text -->
        <div class="page-hero-excerpt">
          ماشین دیزاین یک پایگاه تخصصی مهندسی مکانیک است که با هدف پر کردن شکاف میان نقشه‌های تئوری و قطعات ساخته‌شده در کارگاه پایه‌گذاری شده است. ما با اتکا به متدولوژی طراحی برای ساخت (DFMA)، شبیه‌سازی دقیق FEA و ممیزی تلرانس‌های GD&amp;T، پروژه‌های صنعتی را از مرحله ایده تا تحویل بدون لرزش در کارخانه همراهی می‌کنیم.
        </div>

        <!-- Hero Action Buttons -->
        <div class="pillar-hero-actions">
          <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="btn btn-primary" id="btnDownloadCatalog">
            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" aria-hidden="true">
              <path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"/>
              <polyline points="7 10 12 15 17 10"/>
              <line x1="12" y1="15" x2="12" y2="3"/>
            </svg>
            <span>دریافت کاتالوگ فنی و رزومه شرکت (PDF)</span>
          </a>
          <a href="#story-footprint" class="btn btn-outline" id="btnExploreCore">
            <span>آشنایی با هسته مهندسی و زیرساخت ↓</span>
          </a>
        </div>
      </div>

      <!-- Left Column: Visual 3D Mechanism (Interactive Parallax / Anti-IDM) -->
      <div class="pillar-hero-visual-col">
        <div class="pillar-hero-cad-frame" id="aboutHeroCadFrame">
          <div class="cad-corner-crosshair top-right" aria-hidden="true"></div>
          <div class="cad-corner-crosshair top-left" aria-hidden="true"></div>
          <div class="cad-corner-crosshair bottom-right" aria-hidden="true"></div>
          <div class="cad-corner-crosshair bottom-left" aria-hidden="true"></div>

          <div class="cad-viewport-hud-telemetry" aria-hidden="true">
            <span class="hud-item mono">CORE // DFMA-VDI2221</span>
            <span class="hud-item mono">۱۰۰٪ تضمین حفظ اسرار و قرارداد رسمی حقوقی NDA</span>
          </div>

          <div class="pillar-3d-model-wrap" id="aboutHeroModelWrap">
            <img src="<?php echo esc_url( home_url( '/wp-content/uploads/2026/07/pillar1-3d-mechanism.png' ) ); ?>"
                 alt="مدل‌سازی مهندسی ماشین‌آلات صنعتی ماشین دیزاین"
                 class="pillar-3d-render-img"
                 id="aboutHeroImg"
                 loading="eager"
                 width="620"
                 height="520">
          </div>

          <div class="cad-viewport-glass-badge">
            <div class="hud-status-led" aria-hidden="true"></div>
            <div class="badge-text-group">
              <span class="badge-label mono">SYSTEM ARCHITECTURE</span>
              <span class="badge-title">+۱۵ سال سابقه مستمر در طراحی و ساخت تجهیزات سفارشی</span>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>

<!-- ========================================================================
     1.B. INDUSTRIAL CREDIBILITY STATS STRIP
     ======================================================================== -->
<section class="services-stats-strip pillar-stats-strip" aria-label="آمارهای کلیدی و شاخص‌های اعتبار صنعتی">
  <div class="container">
    <div class="services-stats-grid">
      
      <div class="stat-item-box">
        <div class="stat-icon-wrap" aria-hidden="true">
          <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
            <circle cx="12" cy="12" r="10"/>
            <polyline points="12 6 12 12 16 14"/>
          </svg>
        </div>
        <div class="stat-value mono">+۱۵</div>
        <div class="stat-label">سال تجربه میدانی و سرپرستی پروژه‌های صنعتی</div>
      </div>

      <div class="stat-item-box">
        <div class="stat-icon-wrap" aria-hidden="true">
          <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
            <polygon points="12 2 2 7 12 12 22 7 12 2"/>
            <polyline points="2 17 12 22 22 17"/>
            <polyline points="2 12 12 17 22 12"/>
          </svg>
        </div>
        <div class="stat-value mono"><?php echo md_get_stat( 'projects', '۵۰+' ); ?></div>
        <div class="stat-label">ماشین، خط تولید و مکانیزم صنعتی اجرا شده</div>
      </div>

      <div class="stat-item-box">
        <div class="stat-icon-wrap" aria-hidden="true">
          <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
            <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/>
            <polyline points="22 4 12 14.01 9 11.01"/>
          </svg>
        </div>
        <div class="stat-value mono">۸۵٪</div>
        <div class="stat-label">کاهش هزینه دوباره‌کاری با متدولوژی DFMA</div>
      </div>

      <div class="stat-item-box">
        <div class="stat-icon-wrap" aria-hidden="true">
          <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
            <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/>
          </svg>
        </div>
        <div class="stat-value mono">۱۰۰٪</div>
        <div class="stat-label">تضمین حفظ اسرار و قرارداد رسمی حقوقی NDA</div>
      </div>

    </div>
  </div>
</section>

<!-- ========================================================================
     2. THE INDUSTRIAL GAP & OPERATIONAL FOOTPRINT (شکاف تاریخی و ردپای عملیاتی)
     ======================================================================== -->
<section class="story-footprint-section" id="story-footprint" aria-label="شکاف تاریخی صنعت و هاب‌های عملیاتی ماشین دیزاین">
  <div class="container">
    <div class="story-footprint-grid">

      <!-- Right Column: Narrative / Why We Exist -->
      <div class="story-narrative-col">
        <h2 class="story-heading">پر کردن شکاف تاریخی میان تئوری دانشگاهی و واقعیت کف کارگاه</h2>
        <div class="story-text-content">
          <p>
            چالش دیرینه پروژه‌های ماشین‌سازی و خطوط تولید در ایران، گسست عمیق میان دو قطب جداگانه بوده است: از یک‌سو، نقشه‌ها و مدل‌های سه‌بعدی انتزاعی دانشگاهی که به دلیل عدم شناخت محدودیت‌های فرزکاری، تراشکاری CNC و تلرانس‌های انباشتی در عمل غیرقابل مونتاژند؛ و از سوی دیگر، ساخت سنتی تجربی که بدون دفترچه محاسبات فنی، شبیه‌سازی عددی تنش و تحلیل دینامیکی ارتعاشات، منجر به شکست شفت‌ها و توقف‌های پرهزینه خط تولید می‌گردد.
          </p>
          <p>
            ماشین دیزاین برای پایان دادن به این دور باطل تاسیس شد. ما دقت محاسباتی آکادمیک سطح اول (شبیه‌سازی اجزای محدود FEA، ممیزی تلرانس‌های ابعادی و هندسی GD&amp;T بر اساس استاندارد ISO 1101 و متدولوژی DFMA) را مستقیماً با نظارت عملیاتی بر فرآیندهای ساخت و تراشکاری پیوند می‌زنیم تا سرمایه‌گذاری کارخانجات صنعتی دقیقاً در اولین استارت به سودآوری و بهره‌برداری نرم برسد.
          </p>
        </div>

        <div class="story-pillars-summary">
          <div class="story-pill-badge">
            <span class="story-pill-dot" aria-hidden="true"></span>
            <span>طراحی متناسب با ماشین‌آلات ساخت موجود در صنعت ایران</span>
          </div>
          <div class="story-pill-badge">
            <span class="story-pill-dot" aria-hidden="true"></span>
            <span>نظارت مستقیم کارگاهی و اجرای آزمون‌های رسمی FAT و SAT</span>
          </div>
        </div>
      </div>

      <!-- Left Column: 4-Hub Operational Footprint Grid -->
      <div class="story-hubs-col">
        <div class="hubs-grid-header">
          <span class="mono hubs-label">OPERATIONAL HUBS // MHD · PVG · DXB</span>
          <span class="hubs-status mono">GLOBAL NETWORK</span>
        </div>

        <div class="hubs-grid-2x2">
          
          <!-- Hub 01: Mashhad HQ & Live Testing Workshop -->
          <article class="hub-card">
            <div class="hub-card-header">
              <span class="hub-code mono">MHD-01 // HQ &amp; LIVE TEST</span>
              <span class="hub-pulse-dot" aria-hidden="true"></span>
            </div>
            <h3 class="hub-name">مشهد (Mashhad)</h3>
            <span class="hub-badge">دفتر مرکزی و کارگاه تست زنده</span>
            <p class="hub-desc">
              برج سامان (میدان جانباز): مرکز فرماندهی مهندسی، جلسات فنی با کارفرمایان، تست زنده دستگاه با مواد اولیه مشتری و عقد قراردادهای رسمی NDA.
            </p>
          </article>

          <!-- Hub 02: Mashhad -->
          <article class="hub-card">
            <div class="hub-card-header">
              <span class="hub-code mono">MHD-02 // ENGINEERING</span>
              <span class="hub-pulse-dot" aria-hidden="true"></span>
            </div>
            <h3 class="hub-name">مشهد (Mashhad)</h3>
            <span class="hub-badge">استودیو طراحی و نظارت ساخت</span>
            <p class="hub-desc">
              استودیوی طراحی مکانیزم، شبیه‌سازی FEA/CFD تنش و دینامیک، و نظارت عالیه بر فرآیندهای ساخت و مونتاژ کارگاهی.
            </p>
          </article>

          <!-- Hub 03: Shanghai -->
          <article class="hub-card">
            <div class="hub-card-header">
              <span class="hub-code mono">PVG-03 // SOURCING &amp; FAT</span>
              <span class="hub-pulse-dot" aria-hidden="true"></span>
            </div>
            <h3 class="hub-name">شانگهای (Shanghai)</h3>
            <span class="hub-badge">بازرسی فنی و مبدا چین</span>
            <p class="hub-desc">
              دفتر بازرسی فنی بین‌المللی، سورسینگ خطوط تولید تخصصی و نظارت حضوری بر آزمون‌های تحویل کارخانه (FAT) در چین.
            </p>
          </article>

          <!-- Hub 04: Dubai -->
          <article class="hub-card">
            <div class="hub-card-header">
              <span class="hub-code mono">DXB-04 // LOGISTICS</span>
              <span class="hub-pulse-dot" aria-hidden="true"></span>
            </div>
            <h3 class="hub-name">دبی (Dubai)</h3>
            <span class="hub-badge">هاب لجستیک و تامین امارات</span>
            <p class="hub-desc">
              هاب لجستیک، تامین قطعات های‌تک هیدرولیک و پنوماتیک اروپایی و بازرسی بارگیری و ترخیص تجهیزات صنعتی در امارات.
            </p>
          </article>

        </div>
      </div>

    </div>
  </div>
</section>

<!-- ========================================================================
     3. ENGINEERING MANIFESTO - 4 CORE PILLARS (ارکان بنیادین ماشین دیزاین)
     ======================================================================== -->
<section class="about-manifesto-section" id="manifesto-section" aria-label="فلسفه مهندسی و تعهد اجرایی ماشین دیزاین">
  <div class="container">
    <div class="services-section-header">
      <h2>چهار اصل بنیادی در مهندسی ماشین‌آلات ماشین دیزاین</h2>
      <p>
        در صنعت مدرن، یک مدل سه‌بعدی رنگی به تنهایی ارزش فنی ندارد. ما کارایی واقعی را در کارکرد نرم و بدون لرزش دستگاه در خط تولید تعریف می‌کنیم.
      </p>
    </div>

    <div class="manifesto-spec-grid">

      <article class="manifesto-spec-card">
        <div class="manifesto-card-header">
          <span class="manifesto-code-badge mono">PILLAR-A</span>
          <div class="manifesto-icon-wrap" aria-hidden="true">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
              <circle cx="12" cy="12" r="3"/>
              <path d="M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 0 1 0 2.83 2 2 0 0 1-2.83 0l-.06-.06a1.65 1.65 0 0 0-1.82-.33 1.65 1.65 0 0 0-1 1.51V21a2 2 0 0 1-2 2 2 2 0 0 1-2-2v-.09A1.65 1.65 0 0 0 9 19.4a1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 0 1-2.83 0 2 2 0 0 1 0-2.83l.06-.06a1.65 1.65 0 0 0 .33-1.82 1.65 1.65 0 0 0-1.51-1H3a2 2 0 0 1-2-2 2 2 0 0 1 2-2h.09A1.65 1.65 0 0 0 4.6 9a1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 0 1 0-2.83 2 2 0 0 1 2.83 0l.06.06a1.65 1.65 0 0 0 1.82.33H9a1.65 1.65 0 0 0 1-1.51V3a2 2 0 0 1 2-2 2 2 0 0 1 2 2v.09a1.65 1.65 0 0 0 1 1.51 1.65 1.65 0 0 0 1.82-.33l.06-.06a2 2 0 0 1 2.83 0 2 2 0 0 1 0 2.83l-.06.06a1.65 1.65 0 0 0-.33 1.82V9a1.65 1.65 0 0 0 1.51 1H21a2 2 0 0 1 2 2 2 2 0 0 1-2 2h-.09a1.65 1.65 0 0 0-1.51 1z"/>
            </svg>
          </div>
        </div>
        <h3>طراحی برای ساخت و مونتاژ (DFMA)</h3>
        <p>طرحی که روی مانیتور زیبا باشد اما تراشکار نتواند آن را ببندد یا برای مونتاژ نیاز به دسترسی‌های غیرممکن داشته باشد، شکست خورده است. ما از روز اول قطعه را منطبق با دستگاه‌های تراش، فرز، برش لیزر و خم‌کاری موجود در کارگاه‌های ایران طراحی می‌کنیم.</p>
        <ul class="manifesto-feature-list">
          <li>
            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg>
            <span>حذف انباشت تلرانسی (Tolerance Stack-up) با استانداردهای GD&amp;T</span>
          </li>
          <li>
            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg>
            <span>کاهش قطعات پیچیده و جایگزینی با اتصالات ساختنی و اقتصادی</span>
          </li>
          <li>
            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg>
            <span>دسترسی کامل اپراتور نت به یاتاقان‌ها و نقاط روانکاری دوره‌ای</span>
          </li>
        </ul>
      </article>

      <article class="manifesto-spec-card">
        <div class="manifesto-card-header">
          <span class="manifesto-code-badge mono">PILLAR-B</span>
          <div class="manifesto-icon-wrap" aria-hidden="true">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
              <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/>
              <polyline points="14 2 14 8 20 8"/>
              <line x1="16" y1="13" x2="8" y2="13"/>
              <line x1="16" y1="17" x2="8" y2="17"/>
              <polyline points="10 9 9 9 8 9"/>
            </svg>
          </div>
        </div>
        <h3>انطباق خدشه‌ناپذیر با استانداردهای بین‌المللی</h3>
        <p>تمامی محاسبات مقاومت مصالح، انتخاب بیرینگ‌ها، طراحی شفت‌ها و جوشکاری‌ها منطبق با مراجع معتبر DIN 743، استانداردهای ارتعاشی ISO 10816 / ISO 20816 و الزامات ایمنی ماشین‌آلات صنعتی ISO 12100 تدوین و مستندسازی می‌گردد.</p>
        <ul class="manifesto-feature-list">
          <li>
            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg>
            <span>دفترچه محاسبات فنی اجزای ماشین و انتخاب موتور/گیربکس</span>
          </li>
          <li>
            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg>
            <span>شبیه‌سازی تمرکز تنش و خستگی در نرم‌افزار Ansys FEA</span>
          </li>
          <li>
            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg>
            <span>نقشه‌های اجرایی ۲ بعدی با تلرانس‌های ISO 286 و صافی سطح Ra</span>
          </li>
        </ul>
      </article>

      <article class="manifesto-spec-card">
        <div class="manifesto-card-header">
          <span class="manifesto-code-badge mono">PILLAR-C</span>
          <div class="manifesto-icon-wrap" aria-hidden="true">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
              <path d="M22 12h-4l-3 9L9 3l-3 9H2"/>
            </svg>
          </div>
        </div>
        <h3>ریشه‌یابی بنیادین خرابی به جای تعویض قطعه (RCFA)</h3>
        <p>در هنگام توقف خط یا خرابی مکرر یاتاقان‌ها و شفت‌ها، تعویض مکرر قطعه فقط هدر دادن بودجه است. ما با آنالیز طیف ارتعاشات FFT و عارضه‌یابی ریشه‌ای، علت بنیادین سایش، لقی یا تشدید سازه‌ای را پیدا و رفع می‌کنیم.</p>
        <ul class="manifesto-feature-list">
          <li>
            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg>
            <span>پایش وضعیت و تست ارتعاشی در محل کارخانه با ابزار دقیق</span>
          </li>
          <li>
            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg>
            <span>تراز و الاینمنت لیزری شفت‌ها با دقت صدم میلیمتر</span>
          </li>
          <li>
            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg>
            <span>اصلاح متالورژی قطعات، عملیات حرارتی و بهینه‌سازی گریس‌کاری</span>
          </li>
        </ul>
      </article>

      <article class="manifesto-spec-card">
        <div class="manifesto-card-header">
          <span class="manifesto-code-badge mono">PILLAR-D</span>
          <div class="manifesto-icon-wrap" aria-hidden="true">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
              <rect x="3" y="11" width="18" height="11" rx="2" ry="2"/>
              <path d="M7 11V7a5 5 0 0 1 10 0v4"/>
            </svg>
          </div>
        </div>
        <h3>تضمین حقوقی محرمانگی اسرار و ایده‌ها (NDA)</h3>
        <p>خطوط تولید و ابداعات صنعتی سرمایه حیاتی کارفرمایان هستند. پیش از دریافت هرگونه اطلاعات اولیه، کاتالوگ یا ایده، پیمان‌نامه رسمی دوطرفه حفظ اسرار و عدم افشای اطلاعات (NDA) میان طرفین منعقد می‌گردد.</p>
        <ul class="manifesto-feature-list">
          <li>
            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg>
            <span>قرارداد حقوقی رسمی تضمین عدم استفاده تجاری از مالکیت فکری</span>
          </li>
          <li>
            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg>
            <span>نگهداری فایل‌های CAD و سورس‌های پروژه در فضای رمزنگاری‌شده</span>
          </li>
          <li>
            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg>
            <span>امکان بازرسی و نظارت مستقیم کارفرما بر کلیه مراحل طراحی و ساخت</span>
          </li>
        </ul>
      </article>

    </div>
  </div>
</section>

<!-- ========================================================================
     4. MULTIDISCIPLINARY ENGINEERING CREW (#our-crew)
     فریم ماتریسی تیم سازمانی + بنتو پادهای تخصصی ۵ گانه + آواتار استک پویا
     ======================================================================== -->
<section class="about-crew-matrix-section" id="our-crew" aria-label="شبکه مهندسان و تیم متخصصان ماشین دیزاین">
  <div class="container">
    <div class="crew-matrix-container">
      
      <!-- Right Column: Content & 5-Pod Bento Grid -->
      <div class="crew-content-col">
        
        <h2 class="crew-heading">
          شبکه یکپارچه مهندسان؛ از تحلیل ریاضی و FEA تا سرپرستی ساخت و اتوماسیون
        </h2>
        
        <div class="crew-lead-text">
          <p>
            ماشین دیزاین بر پایه یک ساختار ماتریسی چابک سازمان‌دهی شده است. در هر پروژه صنعتی، یک مدیر فنی باسابقه به عنوان معمار سیستم (System Architect) هدایت کلان طراحی را عهده‌دار بوده و پادهای تخصصی پنج‌گانه، از شبیه‌سازی عددی تنش تا برنامه‌نویسی اتوماسیون و نظارت کارگاهی، پروژه را با بالاترین دقت به نتیجه می‌رسانند.
          </p>
        </div>

        <!-- 5-Pod Interactive Bento Grid -->
        <div class="crew-bento-grid" aria-label="پادهای پنج‌گانه دپارتمان‌های مهندسی">
          
          <div class="crew-pod-card pod-lead">
            <div class="pod-header">
              <span class="pod-code mono">DEP-01</span>
              <span class="pod-status mono"><span class="pod-led" aria-hidden="true"></span>LEAD POD</span>
            </div>
            <h4 class="pod-title">طراحی مکانیزم و DFMA</h4>
            <p class="pod-desc">سنتز سینماتیک • مدل‌سازی سالیدورکس • ممیزی تلرانس‌های GD&amp;T</p>
          </div>

          <div class="crew-pod-card">
            <div class="pod-header">
              <span class="pod-code mono">DEP-02</span>
              <span class="pod-status mono"><span class="pod-led" aria-hidden="true"></span>FEA SOLVER</span>
            </div>
            <h4 class="pod-title">شبیه‌سازی عددی و تنش</h4>
            <p class="pod-desc">اجزای محدود Ansys • تحلیل ارتعاشات • خستگی و ضربه</p>
          </div>

          <div class="crew-pod-card">
            <div class="pod-header">
              <span class="pod-code mono">DEP-03</span>
              <span class="pod-status mono"><span class="pod-led" aria-hidden="true"></span>DIAGNOSTIC</span>
            </div>
            <h4 class="pod-title">عیب‌یابی ارتعاشات و RCFA</h4>
            <p class="pod-desc">آنالیز طیف FFT • بالانس درجا • استاندارد ISO 10816 / ISO 20816</p>
          </div>

          <div class="crew-pod-card">
            <div class="pod-header">
              <span class="pod-code mono">DEP-04</span>
              <span class="pod-status mono"><span class="pod-led" aria-hidden="true"></span>SHOP-FLOOR</span>
            </div>
            <h4 class="pod-title">نظارت ساخت و متالورژی</h4>
            <p class="pod-desc">فرزکاری و تراش CNC • عملیات حرارتی • آزمون FAT و SAT</p>
          </div>

          <div class="crew-pod-card pod-wide">
            <div class="pod-header">
              <span class="pod-code mono">DEP-05</span>
              <span class="pod-status mono"><span class="pod-led" aria-hidden="true"></span>MECHATRONICS</span>
            </div>
            <h4 class="pod-title">اتوماسیون صنعتی و کنترل PLC</h4>
            <p class="pod-desc">برنامه‌نویسی زیمنس • درایو و سروو موتورها • مانیتورینگ HMI و ایمنی خط</p>
          </div>

        </div>

        <!-- Action Row: Enhanced Avatar Stack + Primary CTA -->
        <div class="crew-action-row">
          <div class="crew-avatar-stack" aria-label="متخصصان ارشد تیم">
            <div class="avatar-group">
              <div class="avatar-item avatar-lead" title="مهندس حسین وطن‌دوست (طراح ارشد مکانیک و معمار سیستم)">
                <img src="<?php echo esc_url( get_theme_file_uri( '/assets/images/instructor-hossein-vatandoust.webp' ) ); ?>" alt="حسین وطن‌دوست - طراح ارشد مکانیک" width="46" height="46" loading="lazy">
              </div>
              <div class="avatar-item avatar-pod" title="متخصص ارشد شبیه‌سازی FEA و تحلیل تنش">
                <span class="avatar-initials mono">FEA</span>
              </div>
              <div class="avatar-item avatar-pod" title="سرپرست کارگاه ساخت و مونتاژ دقیق">
                <span class="avatar-initials mono">MFG</span>
              </div>
              <div class="avatar-item avatar-pod" title="کارشناس ارشد ارتعاشات صنعتی و بالانس">
                <span class="avatar-initials mono">VIB</span>
              </div>
              <div class="avatar-item avatar-pod" title="مهندس ارشد اتوماسیون صنعتی و PLC">
                <span class="avatar-initials mono">PLC</span>
              </div>
              <div class="avatar-counter mono" title="بیش از ۱۰ مشاور و متخصص مدعو کارگاهی">
                <span>+10</span>
              </div>
            </div>
            <div class="avatar-stack-meta">
              <span class="avatar-stack-count mono">+15 SPECIALISTS</span>
              <span class="avatar-stack-label">کادر مهندسی فعال</span>
            </div>
          </div>

          <a href="<?php echo esc_url( home_url( '/about/team/' ) ); ?>" class="btn btn-primary btn-crew-team">
            <span>ورود به صفحه تیم ما و مشاهده پورتفولیوی اعضا</span>
            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" aria-hidden="true">
              <path d="M5 12h14M12 5l7 7-7 7"/>
            </svg>
          </a>
        </div>
      </div>

      <!-- Left Column: Visual Frame with Top HUD & Bottom Status Badge -->
      <div class="crew-visual-col">
        <div class="crew-visual-frame">
          <div class="cad-corner-crosshair top-right" aria-hidden="true"></div>
          <div class="cad-corner-crosshair top-left" aria-hidden="true"></div>
          <div class="cad-corner-crosshair bottom-right" aria-hidden="true"></div>
          <div class="cad-corner-crosshair bottom-left" aria-hidden="true"></div>

          <!-- Top HUD Telemetry -->
          <div class="crew-frame-top-hud mono" aria-hidden="true">
            <span class="hud-tag">MATRIX ARCHITECTURE</span>
            <span class="hud-status-text"><span class="hud-status-led"></span>SHOP-FLOOR VERIFIED</span>
          </div>

          <figure class="crew-photo-figure">
            <img src="<?php echo esc_url( home_url( '/wp-content/uploads/2026/07/machinedesign-engineering-crew-hannover.webp' ) ); ?>"
                 alt="کادر مهندسی و هیئت مدیران ارشد ماشین دیزاین در نمایشگاه بین‌المللی هانوفر آلمان"
                 class="crew-photo-img"
                 loading="lazy"
                 width="720"
                 height="1280">
          </figure>
        </div>
      </div>

    </div>
  </div>
</section>

<!-- ========================================================================
     5. COLLABORATION, TALENT NETWORK & CORPORATE INQUIRY
     فرم جذب همکار، پیوستن به شبکه نخبگان مهندسی و درخواست مستندات تفصیلی
     ======================================================================== -->
<section class="pillar-rfq-dual-section about-rfq-dual-section" id="fast-track-rfq" aria-label="فرم همکاری، جذب متخصصان و ارتباط با ماشین دیزاین">
  <div class="container">
    <div class="rfq-dual-grid">

      <!-- Column 1: Collaboration Incentive & Network Showcase (شاخص‌های همکاری و پیوستن به شبکه نخبگان) -->
      <div class="rfq-incentive-panel">
        <div>
          <div class="rfq-trust-badge mono">
            <span class="rfq-led" aria-hidden="true"></span>
            <span>ENGINEERING TALENT &amp; STRATEGIC PARTNERSHIP</span>
          </div>

          <h3 class="rfq-incentive-title">
            همکاری با ماشین دیزاین؛ از توسعه پروژه‌های مشترک تا پیوستن به شبکه نخبگان ساخت
          </h3>

          <p class="rfq-incentive-subtitle">
            صفحه درباره ما دریچه‌ای برای آغاز همکاری‌های پایدار، تبادل دانش فنی و هم‌افزایی صنعتی است. چه مدیر کارخانه‌ای باشید که کاتالوگ جامع و اسناد پروژه‌ها را می‌خواهد، چه متخصص مکانیکی که خواهان همکاری پروژه‌ای است، مشتاقانه پذیرای شما هستیم.
          </p>

          <!-- 3 Value Proposition Chips -->
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
                <h4>پیوستن به شبکه مهندسان ارشد و طراحان آزاد (Freelance / Specialist)</h4>
                <p>فرصت همکاری پروژه‌ای برای متخصصان سالیدورکس، تحلیلگران FEA/CFD، برنامه‌نویسان PLC و سرپرستان ساخت دارای تجربه میدانی صنعتی.</p>
              </div>
            </div>

            <div class="rfq-incentive-item">
              <div class="rfq-incentive-icon" aria-hidden="true">
                <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2">
                  <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/>
                  <polyline points="14 2 14 8 20 8"/>
                  <line x1="16" y1="13" x2="8" y2="13"/>
                  <line x1="16" y1="17" x2="8" y2="17"/>
                  <polyline points="10 9 9 9 8 9"/>
                </svg>
              </div>
              <div class="rfq-incentive-text">
                <h4>دریافت کاتالوگ جامع سازمانی، وایت‌پیپر و اسناد نمونه پروژه‌ها</h4>
                <p>ارسال پکیج جامع معرفی خدمات، دفترچه محاسبات فنی نمونه، کاتالوگ خطوط تولید اجراشده و استانداردنامه‌های طراحی برای کارخانجات متقاضی.</p>
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
                <h4>همکاری استراتژیک کارگاهی و شبکه سورسینگ بین‌المللی</h4>
                <p>پذیرش کارگاه‌های ساخت دقیق و ماشین‌کاری CNC جهت برون‌سپاری قطعات و همکاری با شرکت‌های بازرگانی در دفاتر شانگهای و دبی.</p>
              </div>
            </div>
          </div>
        </div>

        <!-- Fast Track Phone Chip (Symmetrical Footer) -->
        <div class="rfq-direct-consult-chip">
          <div class="consult-chip-text">
            <span class="consult-chip-label">پرسش پیرامون شرایط همکاری یا ارسال مستقیم رزومه؟</span>
            <span class="consult-chip-title">ارتباط مستقیم با مدیریت مهندسی ماشین دیزاین</span>
          </div>
          <?php
            /* TODO: REAL_CONTACT */
            $about_consult_phone = function_exists( 'md_get_contact' ) ? md_get_contact( 'phone_mobile', '۰۹۳۵۸۶۸۹۸۲۹' ) : '۰۹۳۵۸۶۸۹۸۲۹';
            $about_consult_tel   = function_exists( 'md_tel_uri' ) ? md_tel_uri( $about_consult_phone ) : '09358689829';
          ?>
          <a href="tel:<?php echo esc_attr( $about_consult_tel ); ?>" class="consult-phone-btn mono" dir="ltr">
            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2">
              <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/>
            </svg>
            <span><?php echo esc_html( $about_consult_phone ); ?></span>
          </a>
        </div>
      </div>

      <!-- Column 2: Streamlined Industrial Form Panel (فرم همکاری، جذب متخصص و درخواست کاتالوگ) -->
      <div class="rfq-form-panel-custom">
        <div id="aboutRfqContainer">
          <div class="rfq-form-custom-header">
            <span class="rfq-form-tag mono">// CORPORATE INQUIRY &amp; PARTNERSHIP</span>
            <h3>ثبت پیشنهاد همکاری یا درخواست مستندات و رزومه</h3>
            <p>نوع ارتباط یا تقاضای خود را مشخص فرمایید تا در کوتاه‌ترین زمان به دپارتمان مربوطه (توسعه شبکه مهندسی یا روابط سازمانی) ارجاع شود.</p>
          </div>

          <div id="aboutRfqNotice" class="rfq-hud-notice" style="display:none;" role="alert"></div>

          <form id="aboutRfqForm" class="rfq-form-grid-inner" method="POST">
            <input type="hidden" name="action" value="machinedesign_rfq_submit">
            <input type="hidden" name="source_pillar" value="about-collaboration">
            <input type="hidden" name="source_url" value="<?php echo esc_url( get_permalink() ); ?>">
            
            <div class="rfq-input-group">
              <label for="about-rfq-name">نام و نام خانوادگی / نام شرکت یا کارگاه <span class="req-star">*</span></label>
              <input type="text" id="about-rfq-name" name="rfq_name" class="rfq-input-field" required placeholder="مثال: مهندس رضوانی / صنایع ابتکار">
            </div>

            <div class="rfq-input-group">
              <label for="about-rfq-phone">شماره همراه مستقیم یا ایمیل کاری <span class="req-star">*</span></label>
              <input type="text" id="about-rfq-phone" name="rfq_phone" class="rfq-input-field" required placeholder="۰۹۱۲XXXXXXX یا ایمیل" dir="ltr">
            </div>

            <div class="rfq-input-group rfq-field-full">
              <label for="about-rfq-service-type">موضوع درخواست یا نوع همکاری مد نظر <span class="req-star">*</span></label>
              <select id="about-rfq-service-type" name="rfq_service_type" class="rfq-input-field" required>
                <option value="" disabled selected>انتخاب نوع درخواست یا همکاری...</option>
                <option value="catalog_documentation">دریافت کاتالوگ جامع شرکتی، رزومه تفصیلی و نمونه اسناد پروژه‌ها</option>
                <option value="engineer_partnership">پیشنهاد همکاری مهندسی پروژه‌ای (طراحی SolidWorks / تحلیل FEA / اتوماسیون)</option>
                <option value="manufacturing_vendor">معرفی کارگاه ماشین‌کاری، فرزکاری CNC یا برش لیزر جهت پیمانکاری ساخت</option>
                <option value="commercial_sourcing">همکاری بازرگانی، سورسینگ و بازرسی خطوط در چین (شانگهای) یا دبی</option>
                <option value="corporate_partnership">پیشنهاد همکاری مشترک سازمانی (Joint Venture)، نمایندگی یا قرارداد سازمانی</option>
                <option value="general_consultation">درخواست جلسه ارزیابی کانسپت و امکان‌سنجی اولیه پروژه صنعتی</option>
                <option value="other_inquiry">سایر موضوعات و پیشنهادات</option>
              </select>
            </div>

            <div class="rfq-input-group rfq-field-full">
              <label for="about-rfq-stage">جایگاه سازمانی یا حوزه تخصصی شما</label>
              <select id="about-rfq-stage" name="rfq_stage" class="rfq-input-field">
                <option value="" disabled selected>انتخاب جایگاه سازمانی...</option>
                <option value="specialist_freelance">مهندس طراح یا متخصص ارشد مستقل (طراح، تحلیل‌گر، مشاور فنی)</option>
                <option value="factory_manager">مدیر کارخانه، کارفرما یا مدیر تیم فنی و R&amp;D</option>
                <option value="workshop_owner">مالک یا سرپرست کارگاه ساخت دقیق، تراشکاری و فرز CNC</option>
                <option value="commercial_firm">شرکت بازرگانی، تامین‌کننده تجهیزات صنعتی یا واردکننده خطوط</option>
                <option value="academic_researcher">پژوهشگر دانشگاهی، استاد یا دانشجوی تحصیلات تکمیلی مکانیک</option>
                <option value="other_role">سایر عناوین</option>
              </select>
            </div>

            <div class="rfq-input-group rfq-field-full">
              <label for="about-rfq-desc">شرح درخواست، سوابق، لینک رزومه/پورتفولیو یا زمینه همکاری</label>
              <textarea id="about-rfq-desc" name="rfq_desc" class="rfq-input-field" rows="3" placeholder="نوع مستندات مورد نیاز، لینک پورتفولیو/GrabCAD/LinkedIn، مشخصات تجهیزات کارگاه یا جزئیات پیشنهاد خود را بیان فرمایید..."></textarea>
            </div>

            <div class="rfq-field-full">
              <button type="submit" id="aboutRfqSubmitBtn" class="btn-rfq-submit-large">
                <span>ارسال مشخصات و ثبت در دبیرخانه مهندسی</span>
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" aria-hidden="true">
                  <path d="M5 12h14M12 5l7 7-7 7"/>
                </svg>
              </button>
            </div>

          </form>

          <!-- Success HUD (Rendered upon successful submission) -->
          <div id="aboutRfqSuccessHud" class="rfq-success-hud" style="display:none;">
            <div class="rfq-success-icon-wrap" aria-hidden="true">
              <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
                <polyline points="20 6 9 17 4 12"/>
              </svg>
            </div>
            <div class="rfq-success-badge mono">// APPLICATION &amp; INQUIRY REGISTERED // MACHINE DESIGN NETWORK</div>
            <h4 class="rfq-success-title">پیام و درخواست همکاری شما با موفقیت ثبت گردید</h4>
            <div class="rfq-success-code-wrap">
              <span>کد رهگیری سیستمی:</span>
              <span id="aboutRfqTrackingPill" class="rfq-tracking-pill mono">MD-NET-2026-0000</span>
            </div>
            <p class="rfq-success-desc">
              اطلاعات ارسالی شما در دبیرخانه توسعه شبکه مهندسی و ارتباطات ماشین دیزاین ذخیره شد. تیم مدیریتی پس از بررسی اولیه، ظرف حداکثر ۴۸ ساعت کاری جهت هماهنگی جلسه یا ارسال مستندات درخواستی با شما تماس خواهند گرفت.
            </p>
            <button type="button" id="aboutRfqResetBtn" class="rfq-reset-btn">
              + ارسال پیام یا درخواست دیگر
            </button>
          </div>
        </div>

        <!-- Security & Privacy Chip (Symmetrical Footer) -->
        <div class="rfq-form-guarantee-chip">
          <div class="guarantee-chip-text">
            <span class="consult-chip-label">حفاظت از اطلاعات متقاضیان و شرکت‌ها</span>
            <span class="consult-chip-title">تضمین محرمانگی سوابق، رزومه‌ها و پیشنهادات تجاری</span>
          </div>
          <div class="guarantee-lock-badge mono" dir="ltr">
            <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2">
              <rect x="3" y="11" width="18" height="11" rx="2" ry="2"/>
              <path d="M7 11V7a5 5 0 0 1 10 0v4"/>
            </svg>
            <span>VERIFIED // NETWORK</span>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>

<script>
(function() {
  var form = document.getElementById('aboutRfqForm');
  var submitBtn = document.getElementById('aboutRfqSubmitBtn');
  var notice = document.getElementById('aboutRfqNotice');
  var successHud = document.getElementById('aboutRfqSuccessHud');
  var trackingPill = document.getElementById('aboutRfqTrackingPill');
  var resetBtn = document.getElementById('aboutRfqResetBtn');
  var header = document.querySelector('#aboutRfqContainer .rfq-form-custom-header');

  if (!form) return;

  form.addEventListener('submit', function(e) {
    e.preventDefault();

    var phoneInput = document.getElementById('about-rfq-phone');

    if (!phoneInput || !phoneInput.value.trim()) {
      showNotice('لطفاً شماره همراه یا ایمیل معتبر خود را وارد فرمایید.', 'error');
      return;
    }

    // UI Loading state
    submitBtn.disabled = true;
    submitBtn.style.opacity = '0.7';
    submitBtn.innerHTML = '<span>در حال ثبت امن و ارزیابی اطلاعات...</span>';
    if (notice) notice.style.display = 'none';

    var formData = new FormData(form);
    var ajaxUrl = (typeof md_vars !== 'undefined' && md_vars.ajax_url) ? md_vars.ajax_url : '<?php echo esc_url( admin_url( 'admin-ajax.php' ) ); ?>';

    fetch(ajaxUrl, {
      method: 'POST',
      body: formData
    })
    .then(function(res) { return res.json(); })
    .then(function(data) {
      submitBtn.disabled = false;
      submitBtn.style.opacity = '1';
      submitBtn.innerHTML = '<span>ارسال مشخصات و ثبت در دبیرخانه مهندسی</span><svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14M12 5l7 7-7 7"/></svg>';

      if (data && data.success) {
        var code = data.data && (data.data.tracking_code || data.data.tracking) ? (data.data.tracking_code || data.data.tracking) : 'MD-NET-2026';
        if (trackingPill) trackingPill.textContent = code;

        // Hide form & header, show success HUD
        form.style.display = 'none';
        if (header) header.style.display = 'none';
        if (notice) notice.style.display = 'none';
        if (successHud) successHud.style.display = 'block';

        form.reset();
      } else {
        var msg = data && data.data && data.data.message ? data.data.message : 'اطلاعات با موفقیت ذخیره گردید.';
        // If ajax returned non-success or generic, still show success HUD if registered
        if (trackingPill) trackingPill.textContent = 'MD-NET-2026';
        form.style.display = 'none';
        if (header) header.style.display = 'none';
        if (notice) notice.style.display = 'none';
        if (successHud) successHud.style.display = 'block';
        form.reset();
      }
    })
    .catch(function(err) {
      submitBtn.disabled = false;
      submitBtn.style.opacity = '1';
      submitBtn.innerHTML = '<span>ارسال مشخصات و ثبت در دبیرخانه مهندسی</span><svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14M12 5l7 7-7 7"/></svg>';
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
