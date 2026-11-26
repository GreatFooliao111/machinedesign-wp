<?php defined( 'ABSPATH' ) || exit; ?>
<!doctype html>
<html <?php language_attributes(); ?> dir="rtl">
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<?php if ( ! function_exists( 'elementor_theme_do_location' ) || ! elementor_theme_do_location( 'header' ) ) : ?>
<header class="md-tr-header" id="site-header">
  <div class="md-container md-tr-header-inner">
    <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="md-tr-brand" aria-label="ماشین دیزاین">
      <span class="md-tr-logo-box mono" dir="ltr">MD</span>
      <span>
        <span class="md-tr-brand-name">ماشین دیزاین</span>
        <span class="md-tr-brand-sub mono" dir="ltr">MachineDesign.ir</span>
      </span>
    </a>

    <nav aria-label="ناوبری اصلی">
      <ul class="md-tr-nav">
        <li>
          <a href="<?php echo esc_url( home_url( '/services/' ) ); ?>">خدمات مهندسی</a>
          <div class="md-tr-megamenu" aria-label="مگامنو خدمات ۶گانه">
            <div class="md-container md-tr-mega-grid">
              <a class="md-tr-mega-item" href="<?php echo esc_url( home_url( '/services/machine-design/' ) ); ?>"><strong>۰۱. طراحی ماشین‌آلات و خطوط تولید (DFMA)</strong><span>خطوط بسته‌بندی، غذایی و مکانیزم‌های دقیق</span></a>
              <a class="md-tr-mega-item" href="<?php echo esc_url( home_url( '/services/factory-troubleshooting/' ) ); ?>"><strong>۰۲. عیب‌یابی کارخانه و آنالیز ارتعاشات</strong><span>پایش وضعیت یاتاقان و بالانس ISO 20816</span></a>
              <a class="md-tr-mega-item" href="<?php echo esc_url( home_url( '/services/rd-prototyping/' ) ); ?>"><strong>۰۳. تحقیق و توسعه (R&amp;D) و پروتوتایپ</strong><span>DFMEA و ساخت نمونه اولیه صنعتی</span></a>
              <a class="md-tr-mega-item" href="<?php echo esc_url( home_url( '/services/engineering-mentorship/' ) ); ?>"><strong>۰۴. منتورشیپ SolidWorks و Ansys</strong><span>آموزش پروژه‌محور طراحی ماشین و GD&amp;T</span></a>
              <a class="md-tr-mega-item" href="<?php echo esc_url( home_url( '/services/corporate-training/' ) ); ?>"><strong>۰۵. آموزش سازمانی کارخانجات</strong><span>ارتقای تیم‌های نگهداری و تولید در محل</span></a>
              <a class="md-tr-mega-item" href="<?php echo esc_url( home_url( '/services/machinery-inspection/' ) ); ?>"><strong>۰۶. کارشناسی خرید و بازرسی (چین/دبی)</strong><span>تست FAT/SAT و تدوین پیوست فنی قرارداد</span></a>
            </div>
          </div>
        </li>
        <li><a href="<?php echo esc_url( home_url( '/projects/' ) ); ?>">پروژه‌ها و صنایع</a></li>
        <li><a href="<?php echo esc_url( home_url( '/insights/' ) ); ?>">پایگاه دانش</a></li>
        <li><a href="<?php echo esc_url( home_url( '/about/' ) ); ?>">درباره ما و تیم</a></li>
        <li><a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>">تماس و استعلام</a></li>
      </ul>
    </nav>

    <div class="md-tr-header-actions">
      <form role="search" method="get" action="<?php echo esc_url( home_url( '/' ) ); ?>" class="md-tr-search-inline">
        <input type="search" name="s" placeholder="جستجوی فنی..." value="<?php echo esc_attr( get_search_query() ); ?>" />
        <button type="submit" aria-label="جستجو">←</button>
      </form>
      <a href="<?php echo is_front_page() ? '#rfq-desk' : esc_url( home_url( '/contact/' ) ); ?>" class="md-tr-btn md-tr-btn-primary" style="padding:9px 18px;">
        <span>ثبت استعلام</span>
      </a>
    </div>
  </div>
</header>

<aside class="md-tr-utility-rail" aria-label="دسترسی سریع مهندسی">
  <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="md-tr-rail-btn" title="ثبت استعلام فنی">RFQ</a>
  <a href="tel:<?php echo esc_attr( function_exists( 'md_tel_uri' ) ? md_tel_uri( md_get_contact( 'phone_primary' ) ) : '05137600000' ); ?>" class="md-tr-rail-btn" title="تماس مستقیم">☎</a>
  <a href="#site-header" class="md-tr-rail-btn" title="بالای صفحه">↑</a>
</aside>
<?php endif; ?>

<main id="content" class="site-main">
