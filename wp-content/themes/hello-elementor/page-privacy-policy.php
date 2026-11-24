<?php
/**
 * Template Name: سیاست حریم خصوصی (Privacy Policy)
 * Description: Standard Privacy Policy page for MachineDesign.ir visitors, RFQ submitters, and corporate clients.
 *
 * @package HelloElementor
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

get_header();
?>

<!-- ========================================================================
     1. PRIVACY HERO BANNER
     ======================================================================== -->
<section class="page-hero-banner privacy-hero-wrap" aria-label="سربرگ سیاست حریم خصوصی">
  <div class="container">
    <div class="page-hero-grid">

      <!-- Right Column: Text & Breadcrumb -->
      <div class="page-hero-content">
        <!-- Breadcrumb Navigation -->
        <nav class="page-hero-breadcrumb" aria-label="مسیر راهنما">
          <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="breadcrumb-item">صفحه اصلی</a>
          <span class="breadcrumb-separator" aria-hidden="true">/</span>
          <span class="breadcrumb-current" aria-current="page">سیاست حریم خصوصی</span>
        </nav>

        <!-- Corporate Sub-badge -->
        <div class="page-hero-badge">
          <span class="pulse-indicator" aria-hidden="true"></span>
          <span class="mono">MACHINEDESIGN.IR // DATA PRIVACY &amp; SECURITY</span>
        </div>

        <!-- Main Page Title -->
        <h1 class="page-hero-title page-hero-title-split">
          <span class="title-line-1">سیاست حفظ حریم خصوصی،</span>
          <span class="title-line-2 text-accent">امنیت داده‌ها و شفافیت اطلاعاتی</span>
        </h1>

        <!-- Summary Lead Text -->
        <div class="page-hero-excerpt">
          ماشین دیزاین برای حریم خصوصی کاربران، اطلاعات تماس مدیران صنایع و داده‌های استعلام فنی ارزش بنیادین قائل است. این سند شفاف تشریح می‌کند که چه اطلاعاتی جمع‌آوری شده، چگونه حفاظت می‌شوند و حقوق شما در خصوص مدیریت آن‌ها چیست.
        </div>
      </div>

      <!-- Left Column: Trust Assurance HUD -->
      <div class="page-hero-visual-col">
        <div class="privacy-trust-hud" role="region" aria-label="تضمین‌های امنیتی حریم خصوصی">
          <div class="hud-board-head">
            <span class="mono text-accent">PRIVACY DIRECTIVES // ZERO SPAM GUARANTEE</span>
            <span class="hud-status-led" aria-hidden="true"></span>
          </div>
          <div class="trust-directives-list">
            <div class="directive-row">
              <span class="dir-bullet mono text-accent">●</span>
              <span class="dir-text">عدم واگذاری اطلاعات تماس به شرکت‌های تبلیغاتی یا اشخاص ثالث</span>
            </div>
            <div class="directive-row">
              <span class="dir-bullet mono text-accent">●</span>
              <span class="dir-text">استفاده از پروتکل‌های رمزنگاری شده برای انتقال امن اطلاعات فرم‌ها</span>
            </div>
            <div class="directive-row">
              <span class="dir-bullet mono text-accent">●</span>
              <span class="dir-text">حذف کامل سوابق مکاتبات و داده‌ها به درخواست کتبی کاربر</span>
            </div>
          </div>
          <div class="hud-board-foot">
            <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="btn btn-outline-white btn-block">
              ارتباط مستقیم با واحد پشتیبانی و حریم خصوصی ←
            </a>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>

<!-- ========================================================================
     2. PRIVACY POLICY SECTIONS
     ======================================================================== -->
<section class="privacy-policy-body-section" aria-label="بخش‌های سیاست حفظ حریم خصوصی">
  <div class="container">
    <div class="privacy-content-wrapper">

      <!-- Section 1 -->
      <div class="privacy-policy-card">
        <h2 class="privacy-section-title">۱. اطلاعاتی که جمع‌آوری می‌کنیم</h2>
        <p class="privacy-text">
          هنگامی که شما از وبسایت ماشین دیزاین بازدید می‌کنید یا فرم‌های استعلام فنی (RFQ) و تماس را تکمیل می‌فرمایید، اطلاعات زیر ممکن است دریافت و ثبت گردد:
        </p>
        <ul class="privacy-list">
          <li>نام و نام خانوادگی، نام شرکت و سمت سازمانی</li>
          <li>شماره تلفن همراه و ایمیل رسمی جهت پیگیری فنی و ارسال پیش‌فاکتور</li>
          <li>مشخصات فنی و فایل‌های اولیه پیوست‌شده به درخواست استعلام</li>
          <li>داده‌های فنی مرورگر (نظیر نوع دستگاه و آدرس IP) صرفاً جهت ارتقای امنیت و پیشگیری از حملات سایبری</li>
        </ul>
      </div>

      <!-- Section 2 -->
      <div class="privacy-policy-card">
        <h2 class="privacy-section-title">۲. نحوه استفاده از اطلاعات</h2>
        <p class="privacy-text">
          اطلاعات ثبت‌شده صرفاً برای اهداف زیر به کار گرفته می‌شوند:
        </p>
        <ul class="privacy-list">
          <li>بررسی دقیق درخواست استعلام فنی و برقراری تماس مشاوره مهندسی</li>
          <li>صدور کد رهگیری استعلام و هماهنگی جلسه حضوری در کارگاه مشهد</li>
          <li>اطلاع‌رسانی وضعیت پروژه و ارسال مدارک فنی به کارفرما</li>
          <li>ارتقای تجربه کاربری، سرعت بارگذاری و رفع مشکلات فنی وبسایت</li>
        </ul>
      </div>

      <!-- Section 3 -->
      <div class="privacy-policy-card">
        <h2 class="privacy-section-title">۳. کوکی‌ها و فایل‌های ردگیری (Cookies)</h2>
        <p class="privacy-text">
          وبسایت ماشین دیزاین از کوکی‌های ضروری برای حفظ نشست‌های کاربری و عملکرد درست فرم‌های استعلام استفاده می‌کند. ما از هیچ‌گونه کوکی تبلیغاتی ردیاب رفتاری یا شبکه‌های اسپم استفاده نمی‌کنیم. شما همواره می‌توانید از طریق تنظیمات مرورگر خود ذخیره کوکی‌ها را مسدود نمایید.
        </p>
      </div>

      <!-- Section 4 -->
      <div class="privacy-policy-card">
        <h2 class="privacy-section-title">۴. تدابیر امنیت سایبری</h2>
        <p class="privacy-text">
          پایگاه داده و سرورهای وبسایت با استفاده از گواهی‌های امنیتی SSL/TLS، فایروال‌های پیشرفته و پایش مستمر ترافیک در برابر نفوذ و دسترسی‌های غیرمجاز محافظت می‌شوند. دسترسی به داده‌های تماس صرفاً محدود به کادر مهندسی و مدیران ارشد پروژه است.
        </p>
      </div>

      <!-- Section 5 -->
      <div class="privacy-policy-card">
        <h2 class="privacy-section-title">۵. حقوق کاربران و ویرایش اطلاعات</h2>
        <p class="privacy-text">
          شما در هر زمان حق دارید نسخه ثبت‌شده از اطلاعات تماس خود را مشاهده، ویرایش یا درخواست امحای کامل آن را از طریق تماس با مدیریت وبسایت اعلام فرمایید.
        </p>
      </div>

    </div>
  </div>
</section>

<!-- ========================================================================
     3. BOTTOM ACTION CALLOUT
     ======================================================================== -->
<section class="privacy-action-callout" aria-label="ارتباط مستقیم با واحد امنیت داده">
  <div class="container">
    <div class="callout-glass-card">
      <div class="callout-grid">
        <div class="callout-text-col">
          <div class="page-hero-badge">
            <span class="pulse-indicator" aria-hidden="true"></span>
            <span class="mono">DATA INTEGRITY // DIRECT CONTACT</span>
          </div>
          <h3 class="callout-heading">پرسشی درباره حریم خصوصی یا نحوه مدیریت داده‌های خود دارید؟</h3>
          <p class="callout-description">
            تیم پشتیبانی ماشین دیزاین همواره پاسخگوی پرسش‌های حقوقی و فنی شما در خصوص پروتکل‌های حریم خصوصی است.
          </p>
        </div>
        <div class="callout-action-col">
          <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="btn btn-accent btn-lg">
            ارسال پیام به واحد پشتیبانی ←
          </a>
          <span class="callout-sub-note mono text-muted">TRANSPARENT POLICY // MASHHAD HQ</span>
        </div>
      </div>
    </div>
  </div>
</section>

<?php
get_footer();
