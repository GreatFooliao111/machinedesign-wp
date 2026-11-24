<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the <main id="content"> tag and all content after
 * Fully integrated MachineDesign Axima Corporate Flagship Footer
 *
 * @package HelloElementor
 */
defined( 'ABSPATH' ) || exit;
?>
</main><!-- #content -->

<!-- ========================================================================
     COMPREHENSIVE 4-COLUMN INDUSTRIAL FOOTER (AXIMA MODEL)
     ======================================================================== -->
<footer class="site-footer footer-full-width dynamic-footer" id="footer">
  <div class="footer-top">
    <div class="container">
      <div class="footer-grid">
        
        <!-- Column 1: Identity -->
        <div>
          <div class="footer-identity">
            <div class="brand-emblem-wrap footer-emblem">
              <svg width="22" height="22" viewBox="0 0 40 40" fill="none">
                <circle cx="20" cy="20" r="14" stroke="#D97706" stroke-width="2.2" stroke-dasharray="4 3" />
                <circle cx="20" cy="20" r="4.5" fill="#D97706" />
              </svg>
            </div>
            <div>
              <h4 class="footer-brand-name">ماشین دیزاین</h4>
              <span class="mono footer-brand-sub">PRECISION MECHANICAL ENGINEERING</span>
            </div>
          </div>
          <p class="footer-bio">
            مرجع تخصصی مهندسی مکانیک، طراحی ماشین‌آلات و خطوط تولید، پایش وضعیت و رفع ارتعاشات صنعتی و کارشناسی خرید تجهیزات از چین و امارات.
          </p>
          <a href="<?php echo esc_url( home_url( '/#rfq-section' ) ); ?>" class="btn btn-outline-white footer-catalog-btn">
            <span>درخواست ارسال کاتالوگ فنی ←</span>
          </a>
        </div>

        <!-- Column 2: 6 Service Pillars -->
        <div>
          <h5 class="footer-col-header">خدمات ۶ گانه مهندسی</h5>
          <ul class="footer-links-list">
            <li><a href="<?php echo esc_url( home_url( '/services/machine-design/' ) ); ?>">طراحی ماشین‌آلات و خطوط (DFMA)</a></li>
            <li><a href="<?php echo esc_url( home_url( '/services/factory-troubleshooting/' ) ); ?>">عیب‌یابی خط و آنالیز ارتعاشات</a></li>
            <li><a href="<?php echo esc_url( home_url( '/services/rd-prototyping/' ) ); ?>">مشاوره سازمانی و نمونه‌سازی (R&amp;D)</a></li>
            <li><a href="<?php echo esc_url( home_url( '/services/engineering-mentorship/' ) ); ?>">منتورینگ فردی SolidWorks و FEA</a></li>
            <li><a href="<?php echo esc_url( home_url( '/services/corporate-training/' ) ); ?>">آموزش درون‌سازمانی تیم‌های فنی</a></li>
            <li><a href="<?php echo esc_url( home_url( '/services/machinery-inspection/' ) ); ?>">کارشناسی خرید در چین و دبی (FAT)</a></li>
          </ul>
        </div>

        <!-- Column 3: Standards & Knowledge -->
        <div>
          <h5 class="footer-col-header">استانداردهای مرجع صنعتی</h5>
          <ul class="footer-links-list">
            <li><a href="<?php echo esc_url( home_url( '/services/factory-troubleshooting/' ) ); ?>">استاندارد ارتعاشات ماشین‌آلات ISO 10816 / ISO 20816</a></li>
            <li><a href="<?php echo esc_url( home_url( '/services/machine-design/' ) ); ?>">استاندارد ایمنی ماشین‌آلات ISO 12100</a></li>
            <li><a href="<?php echo esc_url( home_url( '/services/engineering-mentorship/' ) ); ?>">تلرانس‌گذاری هندسی ASME Y14.5</a></li>
            <li><a href="<?php echo esc_url( home_url( '/services/machine-design/' ) ); ?>">متدولوژی طراحی برای ساخت VDI 2221</a></li>
            <li><a href="<?php echo esc_url( home_url( '/services/machinery-inspection/' ) ); ?>">دستورالعمل آزمون تحویل کارخانه (FAT)</a></li>
            <li><a href="<?php echo esc_url( home_url( '/services/rd-prototyping/' ) ); ?>">جداول انطباقات و تلرانس‌های ISO 286</a></li>
          </ul>
        </div>

        <!-- Column 4: Contact & Operations -->
        <div>
          <h5 class="footer-col-header">ارتباط مستقیم با دفتر فنی</h5>
          <div class="footer-contact-box">
            <div class="footer-contact-item">
              <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>
              <div>
                <span class="footer-contact-label">تلفن پذیرش پروژه‌ها:</span>
                <strong class="mono footer-contact-value"><?php echo md_get_contact( 'phone_primary', '۰۵۱-۳۷۶۰۰۰۰۰' ); ?> // <?php echo md_get_contact( 'phone_mobile', '۰۹۳۵۸۶۸۹۸۲۹' ); ?></strong>
              </div>
            </div>

            <div class="footer-contact-item">
              <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect width="20" height="16" x="2" y="4" rx="2"/><path d="m22 7-8.97 5.7a1.94 1.94 0 0 1-2.06 0L2 7"/></svg>
              <div>
                <span class="footer-contact-label">ارسال اسناد محرمانه (NDA):</span>
                <span class="mono footer-contact-email"><?php echo md_get_contact( 'contact_email', 'info@machinedesign.ir' ); // TODO: REAL_CONTACT ?></span>
              </div>
            </div>

            <div class="footer-contact-item">
              <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 10c0 6-8 12-8 12s-8-6-8-12a8 8 0 0 1 16 0Z"/><circle cx="12" cy="10" r="3"/></svg>
              <div>
                <span class="footer-contact-label">کارگاه مرکزی و استقرار:</span>
                <span class="footer-contact-value"><?php echo esc_html( md_get_option( 'workshop_address' ) ); ?></span>
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>

  <!-- Bottom Bar -->
  <div class="footer-bottom">
    <div class="container footer-bottom-inner">
      <div>
        <span>© ۲۰۲۶ <strong>ماشین دیزاین (MachineDesign.ir)</strong> — کلیه حقوق مهندسی و برند محفوظ است.</span>
      </div>
      <div class="footer-bottom-links">
        <a href="<?php echo esc_url( home_url( '/privacy-policy/' ) ); ?>">حریم خصوصی</a>
        <a href="<?php echo esc_url( home_url( '/nda-protocol/' ) ); ?>">پروتکل NDA</a>
        <a href="<?php echo esc_url( home_url( '/wp-sitemap.xml' ) ); ?>" target="_blank" rel="noopener">نقشه سایت</a>
        <a href="#header" class="footer-top-link">بالای صفحه ↑</a>
      </div>
    </div>
  </div>
</footer>

<!-- ========================================================================
     MOBILE NAVIGATION DRAWER
     ======================================================================== -->
<div class="mobile-drawer-overlay" id="mobile-drawer-overlay" aria-hidden="true"></div>
<aside class="mobile-drawer" id="mobile-drawer" aria-label="منوی موبایل" aria-hidden="true">
  <div>
    <div class="drawer-head">
      <span class="drawer-brand">ماشین دیزاین</span>
      <button id="drawer-close-btn" class="drawer-close-btn" aria-label="بستن منو"><svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" aria-hidden="true"><path d="M18 6 6 18M6 6l12 12"/></svg></button>
    </div>

    <?php
    if ( has_nav_menu( 'menu-1' ) ) {
        wp_nav_menu( [
            'theme_location' => 'menu-1',
            'container'      => 'nav',
            'container_class'=> 'drawer-nav-container',
            'menu_class'     => 'drawer-nav-menu',
            'fallback_cb'    => false,
            'depth'          => 2,
        ] );
    } else {
        ?>
        <nav class="drawer-fallback-nav">
          <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="drawer-nav-link">صفحه اصلی</a>
          <a href="<?php echo esc_url( home_url( '/#services' ) ); ?>" class="drawer-nav-link">خدمات ۶ گانه مهندسی</a>
          <a href="<?php echo esc_url( home_url( '/#about' ) ); ?>" class="drawer-nav-link">درباره ماشین دیزاین</a>
          <a href="<?php echo esc_url( home_url( '/projects/' ) ); ?>" class="drawer-nav-link">نمونه پروژه‌ها و سوابق</a>
          <a href="<?php echo esc_url( home_url( '/insights/' ) ); ?>" class="drawer-nav-link">مقالات و استانداردها</a>
          <a href="<?php echo esc_url( home_url( '/#rfq-section' ) ); ?>" class="drawer-nav-link drawer-nav-link-accent">ثبت استعلام فنی (RFQ) ←</a>
        </nav>
        <?php
    }
    ?>
  </div>

  <div class="drawer-foot">
    <span class="drawer-foot-label">تلفن مستقیم کارشناسی:</span>
    <strong class="mono drawer-foot-phone"><?php echo md_get_contact( 'phone_primary', '۰۵۱-۳۷۶۰۰۰۰۰' ); ?></strong>
  </div>
</aside>

<?php wp_footer(); ?>
</body>
</html>