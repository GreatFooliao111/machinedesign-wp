<?php
/** Template Name: TRUMPF Sub-Pillar — Rotary & Industrial Mold Design */
defined( 'ABSPATH' ) || exit;
get_header();
while ( have_posts() ) : the_post();
?>
<section class="md-tr-sec" style="padding-bottom:48px;border-bottom:1px solid var(--tr-line);">
  <div class="md-container">
    <span class="md-tr-kicker mono" dir="ltr">SPECIALIZED ENGINEERING // ROTARY DIE &amp; MOLD CNC</span>
    <h1 class="md-tr-hero-title" style="text-align:right;margin:0 0 18px;max-width:none;"><?php the_title(); ?></h1>
    <?php if ( has_excerpt() ) : ?><p class="md-tr-hero-lead" style="text-align:right;margin:0 0 28px;"><?php echo esc_html( get_the_excerpt() ); ?></p><?php endif; ?>
    <div style="display:flex;gap:14px;flex-wrap:wrap;">
      <a href="#rfq-desk" class="md-tr-btn md-tr-btn-primary"><span>ثبت استعلام طراحی و ساخت قالب صنعتی</span><span class="md-tr-arrow">←</span></a>
      <a href="#mold-workflow" class="md-tr-btn md-tr-btn-outline">فرآیند ۴ مرحله‌ای ساخت قالب</a>
    </div>
  </div>
</section>

<section class="md-tr-sec md-tr-sec-mist">
  <div class="md-container">
    <div class="md-tr-sec-head">
      <div>
        <span class="md-tr-kicker mono" dir="ltr">ROTARY MOLD ANATOMY // 5-AXIS CNC ENGRAVING</span>
        <h2 class="md-tr-sec-title">کالبدشکافی مهندسی قالب‌های استوانه‌ای روتاری</h2>
      </div>
    </div>
    <div class="md-tr-card-grid-3">
      <div class="md-tr-arch-card">
        <span class="md-tr-step-num" dir="ltr">FEATURE 01 // CuSn8 BRONZE</span>
        <h3>درام استوانه‌ای برنجی CNC</h3>
        <p>استوانه ماشین‌کاری‌شده از بلوک یکپارچه برنز/برنج فسفردار مهندسی با ماشین‌کاری ۵ محوره و پرداخت آینه‌ای (Ra &lt; 0.2 µm) مقاوم در برابر خوردگی و سایش مداوم.</p>
      </div>
      <div class="md-tr-arch-card">
        <span class="md-tr-step-num" dir="ltr">FEATURE 02 // SS304 ROLLER</span>
        <h3>غلتک تقابلی استیل ضدزنگ</h3>
        <p>سیلندر سنگ‌خورده از جنس استنلس استیل ۳۰۴ که با نسبت دور یک‌به‌یک و لنگی نزدیک به صفر (TIR &lt; 0.01mm) نیروی پرس یکنواخت ایجاد می‌کند.</p>
      </div>
      <div class="md-tr-arch-card">
        <span class="md-tr-step-num" dir="ltr">FEATURE 03 // DRAFT ANGLES</span>
        <h3>زوایای رهایی و رانش خودکار</h3>
        <p>محاسبه دقیق زاویه خروج (Draft Angle) متناسب با رئولوژی خمیر برای تضمین جداشدن خودکار محصول بدون پارگی روی کانوایر خروجی.</p>
      </div>
    </div>
  </div>
</section>

<section class="md-tr-sec" id="mold-workflow">
  <div class="md-container">
    <div class="md-tr-sec-head">
      <div>
        <span class="md-tr-kicker mono" dir="ltr">4-STAGE MOLD LIFECYCLE</span>
        <h2 class="md-tr-sec-title">فرآیند ۴ مرحله‌ای مهندسی و ساخت قالب در ماشین دیزاین</h2>
      </div>
    </div>
    <div class="md-tr-process-grid">
      <div class="md-tr-process-step">
        <span class="md-tr-step-num">STAGE // 01</span>
        <h3>طراحی هندسه محصول و حفره</h3>
        <p>مدل‌سازی سه‌بعدی محصول غذایی یا صنعتی، اعمال ضریب انقباض (Shrinkage) و تقسیم‌بندی دقیق درام روتاری.</p>
      </div>
      <div class="md-tr-process-step">
        <span class="md-tr-step-num">STAGE // 02</span>
        <h3>شبیه‌سازی دینامیکی و CAM</h3>
        <p>بررسی سینماتیک درگیری غلتک‌ها، استخراج استراتژی‌های ماشین‌کاری ۵ محوره و کنترل عدم برخورد ابزار.</p>
      </div>
      <div class="md-tr-process-step">
        <span class="md-tr-step-num">STAGE // 03</span>
        <h3>تراش و فرزکاری CNC برنج</h3>
        <p>ماشین‌کاری فوق دقیق درام، حکاکی نقوش لبه‌ها، پولیش پرداخت دستی آینه‌ای و تست بدون لقی.</p>
      </div>
      <div class="md-tr-process-step">
        <span class="md-tr-step-num">STAGE // 04</span>
        <h3>تست عملیاتی با خمیر مشتری</h3>
        <p>تست فیزیکی زنده قالب با خمیر واقعی مشتری در کارگاه مشهد (برج سامان)، تنظیم ضخامت و تحویل نهایی.</p>
      </div>
    </div>
  </div>
</section>
<?php endwhile;
echo do_shortcode( '[md_rfq_desk]' );
get_footer();
