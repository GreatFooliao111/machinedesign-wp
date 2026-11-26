<?php
/** Template Name: TRUMPF Sub-Pillar — CAD/CAM Modeling & GD&T */
defined( 'ABSPATH' ) || exit;
get_header();
while ( have_posts() ) : the_post();
?>
<section class="md-tr-sec" style="padding-bottom:48px;border-bottom:1px solid var(--tr-line);">
  <div class="md-container">
    <span class="md-tr-kicker mono" dir="ltr">SPECIALIZED ENGINEERING // SOLIDWORKS CAD/CAM &amp; GD&amp;T</span>
    <h1 class="md-tr-hero-title" style="text-align:right;margin:0 0 18px;max-width:none;"><?php the_title(); ?></h1>
    <?php if ( has_excerpt() ) : ?><p class="md-tr-hero-lead" style="text-align:right;margin:0 0 28px;"><?php echo esc_html( get_the_excerpt() ); ?></p><?php endif; ?>
    <div style="display:flex;gap:14px;flex-wrap:wrap;">
      <a href="#rfq-desk" class="md-tr-btn md-tr-btn-primary"><span>ثبت استعلام مدل‌سازی سه‌بعدی و نقشه‌کشی</span><span class="md-tr-arrow">←</span></a>
      <a href="#cad-workflow" class="md-tr-btn md-tr-btn-outline">فرآیند ۴ مرحله‌ای CAD/CAM</a>
    </div>
  </div>
</section>

<section class="md-tr-sec md-tr-sec-mist">
  <div class="md-container">
    <div class="md-tr-sec-head">
      <div>
        <span class="md-tr-kicker mono" dir="ltr">3 TECHNICAL MODULES // ZERO WORKSHOP AMBIGUITY</span>
        <h2 class="md-tr-sec-title">خدمات تخصصی مدل‌سازی CAD و تلرانس‌گذاری ساخت</h2>
      </div>
    </div>
    <div class="md-tr-card-grid-3">
      <div class="md-tr-arch-card">
        <span class="md-tr-step-num" dir="ltr">MODULE 01 // ISO 1101 &amp; ASME Y14.5</span>
        <h3>تلرانس‌گذاری هندسی و ابعادی (GD&amp;T)</h3>
        <p>تعیین دقیق مبناهای اندازه‌گیری (Datums)، تلرانس‌های موقعیت، هم‌محوری، تعامد، لنگی، تحلیل Stack-up و کلاس‌های انطباق استاندارد H7/g6 و H7/p6.</p>
      </div>
      <div class="md-tr-arch-card">
        <span class="md-tr-step-num" dir="ltr">MODULE 02 // SHEET METAL DXF</span>
        <h3>طراحی شیت‌متال و گسترده‌سازی ورق</h3>
        <p>محاسبه دقیق K-Factor خمکاری، استخراج فایل‌های تمیز DXF برای برش لیزر و واترژت، و نقشه‌های راهنمای زاویه و شعاع خم اپراتور پرس‌بریک.</p>
      </div>
      <div class="md-tr-arch-card">
        <span class="md-tr-step-num" dir="ltr">MODULE 03 // 3 &amp; 5-AXIS CAM</span>
        <h3>آماده‌سازی CAM و استراتژی‌های CNC</h3>
        <p>طراحی فیکسچرها و جیگ‌های نگهدارنده، انتخاب بهینه ابزار و مسیر ابزار ۳ و ۵ محوره برای ماشین‌کاری با حداقل تعویض ستاپ و بالاترین صافی سطح.</p>
      </div>
    </div>
  </div>
</section>

<section class="md-tr-sec" id="cad-workflow">
  <div class="md-container">
    <div class="md-tr-sec-head">
      <div>
        <span class="md-tr-kicker mono" dir="ltr">4-STAGE CAD/CAM DELIVERY</span>
        <h2 class="md-tr-sec-title">فرآیند ۴ مرحله‌ای از طرح اولیه تا پکیج آماده ساخت</h2>
      </div>
    </div>
    <div class="md-tr-process-grid">
      <div class="md-tr-process-step">
        <span class="md-tr-step-num">STAGE // 01</span>
        <h3>مدل‌سازی پارامتریک در SolidWorks</h3>
        <p>ایجاد مدل‌های سه‌بعدی تماماً قیدگذاری‌شده با ساختار منطقی درختی (Feature Tree) جهت سهولت تغییرات آتی.</p>
      </div>
      <div class="md-tr-process-step">
        <span class="md-tr-step-num">STAGE // 02</span>
        <h3>تست برخورد و دینامیک مونتاژ</h3>
        <p>شبیه‌سازی حرکتی مکانیزم‌ها، بررسی تداخل فیزیکی در زوایای بحرانی و بهینه‌سازی دسترسی ابزار آچارکشی.</p>
      </div>
      <div class="md-tr-process-step">
        <span class="md-tr-step-num">STAGE // 03</span>
        <h3>نقشه‌کشی اجرایی و GD&amp;T</h3>
        <p>تهیه نقشه‌های کارگاهی دو‌بعدی با جزئیات کامل جوشکاری، علائم صافی سطح و نماهای برش استاندارد.</p>
      </div>
      <div class="md-tr-process-step">
        <span class="md-tr-step-num">STAGE // 04</span>
        <h3>استخراج لیست قطعات و BOM</h3>
        <p>تولید جدول تفکیک‌شده قطعات ساختنی و خریدنی (بلبرینگ، پیچ، کاسه‌نمد، سیلندر) با کدهای کاتالوگی DIN.</p>
      </div>
    </div>
  </div>
</section>
<?php endwhile;
echo do_shortcode( '[md_rfq_desk]' );
get_footer();
