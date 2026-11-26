<?php defined( 'ABSPATH' ) || exit; ?>
</main>
<?php if ( ! function_exists( 'elementor_theme_do_location' ) || ! elementor_theme_do_location( 'footer' ) ) : ?>
<footer class="md-tr-footer">
  <div class="md-container">
    <div class="md-tr-footer-grid">
      <div>
        <h4>ماشین دیزاین (MachineDesign.ir)</h4>
        <p>مرجع مهندسی مکانیک ساخت، طراحی ماشین‌آلات صنعتی، شبیه‌سازی FEA و عیب‌یابی خطوط تولید مطابق استانداردهای ISO 12100 و ASME Y14.5.</p>
      </div>
      <div>
        <h4>۶ ستون خدمات</h4>
        <ul>
          <li><a href="<?php echo esc_url( home_url( '/services/machine-design/' ) ); ?>">طراحی ماشین‌آلات (DFMA)</a></li>
          <li><a href="<?php echo esc_url( home_url( '/services/factory-troubleshooting/' ) ); ?>">عیب‌یابی و آنالیز ارتعاشات</a></li>
          <li><a href="<?php echo esc_url( home_url( '/services/rd-prototyping/' ) ); ?>">تحقیق و توسعه (R&amp;D)</a></li>
          <li><a href="<?php echo esc_url( home_url( '/services/engineering-mentorship/' ) ); ?>">منتورشیپ فردی مهندسی</a></li>
          <li><a href="<?php echo esc_url( home_url( '/services/corporate-training/' ) ); ?>">آموزش سازمانی کارخانجات</a></li>
          <li><a href="<?php echo esc_url( home_url( '/services/machinery-inspection/' ) ); ?>">کارشناسی خرید (چین/دبی)</a></li>
        </ul>
      </div>
      <div>
        <h4>صنایع و پایگاه دانش</h4>
        <ul>
          <li><a href="<?php echo esc_url( home_url( '/projects/' ) ); ?>">آرشیو پروژه‌های اجرایی</a></li>
          <li><a href="<?php echo esc_url( home_url( '/industry/food-beverage/' ) ); ?>">صنایع غذایی و بسته‌بندی</a></li>
          <li><a href="<?php echo esc_url( home_url( '/insights/' ) ); ?>">مقالات و استانداردها</a></li>
          <li><a href="<?php echo esc_url( home_url( '/nda-protocol/' ) ); ?>">پروتکل محرمانگی NDA</a></li>
          <li><a href="<?php echo esc_url( home_url( '/privacy-policy/' ) ); ?>">حریم خصوصی</a></li>
        </ul>
      </div>
      <div>
        <h4>دفاتر مهندسی و تماس</h4>
        <p class="mono"><?php echo function_exists( 'md_get_contact' ) ? md_get_contact( 'phone_primary' ) : '051-37600000'; ?></p>
        <p class="mono"><?php echo function_exists( 'md_get_contact' ) ? md_get_contact( 'contact_email' ) : 'info@machinedesign.ir'; ?></p>
        <p>تهران · مشهد · شانگهای · دبی</p>
      </div>
    </div>
    <div class="md-tr-footer-bottom">
      <span>© <?php echo esc_html( date( 'Y' ) ); ?> ماشین دیزاین (MachineDesign.ir) — تمامی حقوق محفوظ است.</span>
      <span class="mono">ISO 12100 · ISO 20816 · ASME Y14.5</span>
    </div>
  </div>
</footer>
<?php endif; ?>
<?php wp_footer(); ?>
</body>
</html>
