<?php
/**
 * Template Name: پروتکل محرمانگی صنعتی NDA (Industrial NDA Protocol)
 * Description: Official Industrial Non-Disclosure Agreement & Intellectual Property Protection protocol for MachineDesign.ir manufacturing clients, CAD models, and proprietary production processes.
 *
 * @package HelloElementor
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

get_header();
?>

<!-- ========================================================================
     1. NDA PROTOCOL HERO BANNER
     ======================================================================== -->
<section class="page-hero-banner nda-hero-wrap" aria-label="سربرگ پروتکل محرمانگی صنعتی">
  <div class="container">
    <div class="page-hero-grid">

      <!-- Right Column: Text & Breadcrumb -->
      <div class="page-hero-content">
        <!-- Breadcrumb Navigation -->
        <nav class="page-hero-breadcrumb" aria-label="مسیر راهنما">
          <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="breadcrumb-item">صفحه اصلی</a>
          <span class="breadcrumb-separator" aria-hidden="true">/</span>
          <span class="breadcrumb-current" aria-current="page">پروتکل تضمین محرمانگی (NDA)</span>
        </nav>

        <!-- Corporate Sub-badge -->
        <div class="page-hero-badge">
          <span class="pulse-indicator" aria-hidden="true"></span>
          <span class="mono">MACHINEDESIGN.IR // STRICT NDA &amp; IP PROTECTION</span>
        </div>

        <!-- Main Page Title -->
        <h1 class="page-hero-title page-hero-title-split">
          <span class="title-line-1">پروتکل رسمی تضمین محرمانگی،</span>
          <span class="title-line-2 text-accent">حفاظت از مالکیت فکری و نقشه‌های صنعتی</span>
        </h1>

        <!-- Summary Lead Text -->
        <div class="page-hero-excerpt">
          تیم مهندسی ماشین دیزاین متعهد است تمامی مدل‌های سه‌بعدی CAD، نقشه‌های ساخت، مکانیزم‌های خط تولید، فرمول‌های فرآیندی و اطلاعات تجاری کارخانجات همکار را تحت قوی‌ترین پروتکل‌های حقوقی عدم افشا (NDA) و استاندارد ایزولاسیون اطلاعات حفاظت نماید.
        </div>
      </div>

      <!-- Left Column: Security HUD Badge -->
      <div class="page-hero-visual-col">
        <div class="nda-security-hud" role="region" aria-label="خلاصه ارکان امنیتی قرارداد">
          <div class="hud-board-head">
            <span class="mono text-accent">LEGAL IP FRAMEWORK // 100% ENFORCEABLE</span>
            <span class="hud-status-led" aria-hidden="true"></span>
          </div>
          <div class="security-pillars-list">
            <div class="sec-pillar-row">
              <span class="sec-bullet text-accent" aria-hidden="true">&#9679;</span>
              <span class="sec-text">امضای رسمی قرارداد فیزیکی پیش از دریافت هرگونه نقشه</span>
            </div>
            <div class="sec-pillar-row">
              <span class="sec-bullet text-accent" aria-hidden="true">&#9679;</span>
              <span class="sec-text">سرورهای ایزوله و رمزنگاری‌شده آفلاین بدون دسترسی خارجی</span>
            </div>
            <div class="sec-pillar-row">
              <span class="sec-bullet text-accent" aria-hidden="true">&#9679;</span>
              <span class="sec-text">تست زنده محرمانه در کارگاه مشهد با ورود اختصاصی کارفرما</span>
            </div>
            <div class="sec-pillar-row">
              <span class="sec-bullet text-accent" aria-hidden="true">&#9679;</span>
              <span class="sec-text">امحای رسمی و عودت فایل‌ها پس از اتمام دوره پروژه</span>
            </div>
          </div>
          <div class="hud-board-foot">
            <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="btn btn-primary btn-block">
              درخواست تبادل قرارداد رسمی NDA ←
            </a>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>

<!-- ========================================================================
     2. DETAILED ARTICLES OF THE NDA PROTOCOL
     ======================================================================== -->
<section class="nda-articles-section" aria-label="مفاد ۶ گانه تعهدنامه محرمانگی">
  <div class="container">
    <div class="nda-content-wrapper">

      <!-- Article 1 -->
      <div class="nda-article-card">
        <div class="article-num-chip mono">ARTICLE 01</div>
        <h2 class="nda-article-title">ماده اول: دامنه و تعریف اطلاعات محرمانه (Confidential Information)</h2>
        <p class="nda-article-text">
          تمامی داده‌های فنی دریافتی از کارفرما از جمله مدل‌های سه‌بعدی CAD (با فرمت‌های SLDPRT، STEP، IGES)، نقشه‌های دوبعدی کارگاهی، تلرانس‌های GD&amp;T، گزارش‌های تحلیل اجزای محدود (FEA)، مشخصات متالورژی آلیاژها، فرآیندهای تولید، فیلم‌های عیب‌یابی خط، و اطلاعات مربوط به بهای تمام‌شده و نرخ تولید ماشین‌آلات، به عنوان اطلاعات کاملاً محرمانه تلقی می‌شوند.
        </p>
      </div>

      <!-- Article 2 -->
      <div class="nda-article-card">
        <div class="article-num-chip mono">ARTICLE 02</div>
        <h2 class="nda-article-title">ماده دوم: تعهد عدم افشا و عدم بهره‌برداری غیرمجاز</h2>
        <p class="nda-article-text">
          ماشین دیزاین و کلیه مهندسان، مشاوران و تکنسین‌های همکار متعهد می‌شوند هیچ بخشی از داده‌های کارفرما را تحت هیچ شرایطی، چه به صورت مستقیم یا غیرمستقیم، به اشخاص ثالث، شرکت‌های رقیب، سازندگان یا پیمانکاران دیگر افشا نکنند. هرگونه استفاده از داده‌های کارفرما منحصراً به اهداف توافق‌شده در قرارداد پروژه محدود خواهد بود.
        </p>
      </div>

      <!-- Article 3 -->
      <div class="nda-article-card">
        <div class="article-num-chip mono">ARTICLE 03</div>
        <h2 class="nda-article-title">ماده سوم: ایزولاسیون سرورها و پروتکل‌های امنیت سایبری</h2>
        <p class="nda-article-text">
          تمامی داده‌های پروژه‌ها در سرورهای محلی اختصاصی و بدون اتصال به شبکه‌های عمومی ناامن ذخیره می‌شوند. تبادل فایل‌ها صرفاً از طریق بسترهای رمزنگاری‌شده صورت گرفته و دسترسی اعضای تیم به فایل‌های پروژه بر اساس اصل «نیاز به دانستن» (Need-to-Know Basis) کنترل و لاگ می‌گردد.
        </p>
      </div>

      <!-- Article 4 -->
      <div class="nda-article-card">
        <div class="article-num-chip mono">ARTICLE 04</div>
        <h2 class="nda-article-title">ماده چهارم: محرمانگی تست زنده در کارگاه مشهد</h2>
        <p class="nda-article-text">
          در پروژه‌هایی که نیازمند ساخت نمونه اولیه یا تست زنده دستگاه با مواد اولیه کارفرما در کارگاه تست مشهد (برج سامان) هستند، ورود و بازدید از ایستگاه تست صرفاً با هماهنگی قبلی و در سانس‌های ایزوله صورت می‌پذیرد تا از مشاهده فرآیند توسط سایر مراجعان کارگاه به صورت کامل جلوگیری شود.
        </p>
      </div>

      <!-- Article 5 -->
      <div class="nda-article-card">
        <div class="article-num-chip mono">ARTICLE 05</div>
        <h2 class="nda-article-title">ماده پنجم: مدت اعتبار و قابلیت پیگیری حقوقی</h2>
        <p class="nda-article-text">
          تعهدات این پروتکل از لحظه نخستین تبادل داده یا تماس فنی آغاز شده و تا ۵ سال پس از تحویل نهایی ماشین‌آلات یا پایان قرارداد معتبر باقی خواهد ماند. این سند قابلیت پیگیری قانونی در مراجع قضایی و داوری اتاق بازرگانی، صنایع، معادن و کشاورزی ایران را دارا می‌باشد.
        </p>
      </div>

      <!-- Article 6 -->
      <div class="nda-article-card">
        <div class="article-num-chip mono">ARTICLE 06</div>
        <h2 class="nda-article-title">ماده ششم: عودت و امحای کامل داده‌ها پس از پایان پروژه</h2>
        <p class="nda-article-text">
          در صورت اعلام کتبی کارفرما یا پس از تحویل قطعی پروژه‌های ساخت و مهندسی معکوس، ماشین دیزاین موظف است کلیه نسخه‌های دیجیتال یا فیزیکی نقشه‌ها و اسناد را به کارفرما بازگردانده و فایل‌های موقت را از فضاهای ذخیره‌سازی پاکسازی نماید.
        </p>
      </div>

    </div>
  </div>
</section>

<!-- ========================================================================
     3. BOTTOM ACTION CALLOUT
     ======================================================================== -->
<section class="nda-action-callout" aria-label="دریافت نسخه رسمی قرارداد">
  <div class="container">
    <div class="callout-glass-card">
      <div class="callout-grid">
        <div class="callout-text-col">
          <div class="page-hero-badge">
            <span class="pulse-indicator" aria-hidden="true"></span>
            <span class="mono">LEGAL DISPATCH // READY FOR SIGNATURE</span>
          </div>
          <h3 class="callout-heading">نیاز به انعقاد قرارداد رسمی محرمانگی با مهر و سربرگ دارید؟</h3>
          <p class="callout-description">
            پیش از ارسال فایل‌ها یا نمونه قطعه، مشخصات شرکت خود را ارسال فرمایید تا نسخه رسمی دوجانبه NDA ظرف ۲ ساعت کاری برای امضا تقدیم گردد.
          </p>
        </div>
        <div class="callout-action-col">
          <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="btn btn-accent btn-lg">
            درخواست تبادل قرارداد رسمی NDA ←
          </a>
          <span class="callout-sub-note mono text-muted">LEGAL TEAM // RESPONSE WITHIN 2 HOURS</span>
        </div>
      </div>
    </div>
  </div>
</section>

<?php
get_footer();
