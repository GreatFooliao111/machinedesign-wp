<?php
/**
 * The template for displaying the header
 *
 * Displays all of the <head> section and everything up until <main id="content">
 * Fully integrated MachineDesign Axima Corporate Flagship Header
 *
 * @package HelloElementor
 */
defined( 'ABSPATH' ) || exit;
?>
<!doctype html>
<html <?php language_attributes(); ?> dir="rtl">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link rel="profile" href="https://gmpg.org/xfn/11" />
	<?php wp_head(); ?>
</head>
<body <?php body_class( 'axima-flagship-body' ); ?>>
<?php wp_body_open(); ?>

<!-- ========================================================================
     TWO-TIER CORPORATE HEADER (TOP BAR + MAIN NAVIGATION)
     ======================================================================== -->
<header class="site-header header-full-width dynamic-header" id="header">
  
  <!-- Top Contact Bar -->
  <div class="top-bar">
    <div class="container-fluid top-bar-inner">
      <div class="top-bar-contact">
        <div class="top-bar-item">
          <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2">
            <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/>
          </svg>
          <span>مشاوره مستقیم کارشناسی: <strong class="mono top-bar-phone"><?php echo md_get_contact( 'phone_primary', '۰۵۱-۳۷۶۰۰۰۰۰' ); ?></strong> // <strong class="mono top-bar-phone"><?php echo md_get_contact( 'phone_mobile', '۰۹۱۵۰۰۰۰۰۰۰' ); ?></strong></span>
        </div>
        <div class="top-bar-item d-none d-xl-flex">
          <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2">
            <rect width="20" height="16" x="2" y="4" rx="2"/><path d="m22 7-8.97 5.7a1.94 1.94 0 0 1-2.06 0L2 7"/>
          </svg>
          <span>مکاتبات فنی: <span class="mono"><?php echo md_get_contact( 'contact_email', 'info@machinedesign.ir' ); ?></span></span>
        </div>
        <div class="top-bar-item d-none d-xl-flex">
          <span>کارگاه مرکزی: <?php echo esc_html( md_get_option( 'workshop_city', 'مشهد (برج سامان)' ) ); ?> • دفتر بازرسی فنی</span>
        </div>
      </div>

      <div class="top-bar-actions">
        <span class="top-badge-nda"><svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" aria-hidden="true"><polyline points="20 6 9 17 4 12"/></svg> پروتکل محرمانگی NDA</span>
      </div>
    </div>
  </div>

  <!-- Main Navigation Bar -->
  <nav class="navbar-main" aria-label="منوی اصلی">
    <div class="container-fluid navbar-inner">
      
      <!-- 1. Right Flank: Brand Identity -->
      <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="brand-link" aria-label="ماشین دیزاین - صفحه اصلی">
        <div class="brand-emblem-wrap">
          <svg class="brand-gear-svg" width="28" height="28" viewBox="0 0 40 40" fill="none">
            <circle cx="20" cy="20" r="14" stroke="#D97706" stroke-width="2.2" stroke-dasharray="4 3" />
            <path d="M20 2V7M20 33V38M2 20H7M33 20H38M7.3 7.3L10.8 10.8M29.2 29.2L32.7 32.7M32.7 7.3L29.2 10.8M10.8 29.2L7.3 32.7" stroke="#D97706" stroke-width="2" stroke-linecap="round"/>
            <circle cx="20" cy="20" r="4.5" fill="#D97706" />
          </svg>
        </div>
        <div class="brand-text-block">
          <span class="brand-title">ماشین دیزاین</span>
          <span class="brand-tagline">MACHINEDESIGN.IR // INDUSTRIAL R&amp;D</span>
        </div>
      </a>

      <!-- 2. Center Flank: Clean Single-Line Navigation Menu (WordPress Native Dynamic) -->
      <?php
      if ( has_nav_menu( 'menu-1' ) ) {
          wp_nav_menu( [
              'theme_location' => 'menu-1',
              'container'      => false,
              'menu_class'     => 'nav-menu',
              'fallback_cb'    => false,
              'depth'          => 3,
          ] );
      } else {
          ?>
          <ul class="nav-menu">
            <li class="menu-item"><a href="<?php echo esc_url( home_url( '/' ) ); ?>">صفحه اصلی</a></li>
            <li class="menu-item menu-item-has-children">
              <a href="<?php echo esc_url( home_url( '/services/' ) ); ?>">خدمات مهندسی</a>
              <ul class="sub-menu">
                <li><a href="<?php echo esc_url( home_url( '/services/machine-design/' ) ); ?>">۰۱. طراحی ماشین‌آلات و خطوط تولید (DFMA)</a></li>
                <li><a href="<?php echo esc_url( home_url( '/services/factory-troubleshooting/' ) ); ?>">۰۲. عیب‌یابی خط و آنالیز ارتعاشات</a></li>
                <li><a href="<?php echo esc_url( home_url( '/services/rd-prototyping/' ) ); ?>">۰۳. تحقیق و توسعه (R&amp;D) و نمونه‌سازی</a></li>
                <li><a href="<?php echo esc_url( home_url( '/services/engineering-mentorship/' ) ); ?>">۰۴. منتورینگ SolidWorks، FEA و GD&amp;T</a></li>
                <li><a href="<?php echo esc_url( home_url( '/services/corporate-training/' ) ); ?>">۰۵. ارتقای تیم‌های فنی کارخانجات</a></li>
                <li><a href="<?php echo esc_url( home_url( '/services/machinery-inspection/' ) ); ?>">۰۶. کارشناسی خرید ماشین‌آلات (چین/دبی)</a></li>
              </ul>
            </li>
            <li class="menu-item"><a href="<?php echo esc_url( home_url( '/projects/' ) ); ?>">نمونه پروژه‌ها</a></li>
            <li class="menu-item"><a href="<?php echo esc_url( home_url( '/insights/' ) ); ?>">مقالات و استانداردها</a></li>
            <li class="menu-item menu-item-has-children">
              <a href="<?php echo esc_url( home_url( '/about/' ) ); ?>">درباره ما</a>
              <ul class="sub-menu">
                <li><a href="<?php echo esc_url( home_url( '/about/team/' ) ); ?>">تیم ما</a></li>
              </ul>
            </li>
          </ul>
          <?php
      }
      ?>

      <!-- 3. Left Flank: Action Area (Phone + Single CTA Button) -->
      <div class="header-actions">
        <!-- Single Official Header CTA Button -->
        <a href="<?php echo is_front_page() ? '#rfq-section' : esc_url( home_url( '/contact/' ) ); ?>" class="btn btn-accent btn-sm header-cta-btn">
          <span>ثبت استعلام فنی</span>
          <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4" aria-hidden="true"><path d="M19 12H5M12 19l-7-7 7-7"/></svg>
        </a>

        <!-- Mobile Navigation Toggle (Strictly hidden on desktop >= 1024px) -->
        <button class="mobile-nav-toggle" id="axima-mobile-btn" aria-label="منوی موبایل">
          <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M4 6h16M4 12h16M4 18h16"/></svg>
        </button>
      </div>

    </div>
  </nav>
</header>

<main id="content" class="site-main">