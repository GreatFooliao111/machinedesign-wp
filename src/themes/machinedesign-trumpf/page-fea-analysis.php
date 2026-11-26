<?php
/** Template Name: TRUMPF Sub-Pillar — Ansys FEA Stress & Modal Analysis */
defined( 'ABSPATH' ) || exit;
get_header();
while ( have_posts() ) : the_post();
?>
<section class="md-tr-sec" style="padding-bottom:48px;border-bottom:1px solid var(--tr-line);">
  <div class="md-container">
    <span class="md-tr-kicker mono" dir="ltr">SPECIALIZED ENGINEERING // ANSYS FEA &amp; FATIGUE SOLVER</span>
    <h1 class="md-tr-hero-title" style="text-align:right;margin:0 0 18px;max-width:none;"><?php the_title(); ?></h1>
    <?php if ( has_excerpt() ) : ?><p class="md-tr-hero-lead" style="text-align:right;margin:0 0 28px;"><?php echo esc_html( get_the_excerpt() ); ?></p><?php endif; ?>
    <div style="display:flex;gap:14px;flex-wrap:wrap;">
      <a href="#rfq-desk" class="md-tr-btn md-tr-btn-primary"><span>ثبت استعلام شبیه‌سازی و تحلیل تنش Ansys</span><span class="md-tr-arrow">←</span></a>
      <a href="#fea-workflow" class="md-tr-btn md-tr-btn-outline">فرآیند ۴ مرحله‌ای شبیه‌سازی</a>
    </div>
  </div>
</section>

<section class="md-tr-sec md-tr-sec-mist">
  <div class="md-container">
    <div class="md-tr-sec-head">
      <div>
        <span class="md-tr-kicker mono" dir="ltr">3 FEA DISCIPLINES // MATHEMATICAL SAFETY ASSURANCE</span>
        <h2 class="md-tr-sec-title">حوزه‌های تخصصی تحلیل عددی و شبیه‌سازی در Ansys</h2>
      </div>
    </div>
    <div class="md-tr-card-grid-3">
      <div class="md-tr-arch-card">
        <span class="md-tr-step-num" dir="ltr">DISCIPLINE 01 // STATIC &amp; NON-LINEAR</span>
        <h3>تحلیل تنش استاتیکی و غیرخطی</h3>
        <p>بررسی توزیع تنش‌های فون‌مایزز، کرنش‌های پلاستیک و قیدهای غیرخطی تماس اصطکاکی بین قطعات مونتاژی تحت بیشینه بارهای کاری و ضربه‌ای.</p>
      </div>
      <div class="md-tr-arch-card">
        <span class="md-tr-step-num" dir="ltr">DISCIPLINE 02 // MODAL &amp; HARMONIC</span>
        <h3>تحلیل مودال و رزونانس ارتعاشی</h3>
        <p>استخراج فرکانس‌های طبیعی، شکل مودهای ارتعاشی و نمودارهای کمپل برای جلوگیری از تشدید خطرناک ناشی از دور کاری پمپ‌ها و موتورها.</p>
      </div>
      <div class="md-tr-arch-card">
        <span class="md-tr-step-num" dir="ltr">DISCIPLINE 03 // S-N FATIGUE</span>
        <h3>تحلیل خستگی و عمر کاری (Fatigue)</h3>
        <p>محاسبه عمر باقی‌مانده و آسیب انباشته خستگی شفت‌ها، اتصالات جوشی (IIW) و محورهای انتقال قدرت تحت بارهای سیکلی مداوم.</p>
      </div>
    </div>
  </div>
</section>

<section class="md-tr-sec" id="fea-workflow">
  <div class="md-container">
    <div class="md-tr-sec-head">
      <div>
        <span class="md-tr-kicker mono" dir="ltr">4-STAGE SIMULATION PROTOCOL</span>
        <h2 class="md-tr-sec-title">فرآیند ۴ مرحله‌ای شبیه‌سازی دقیق و قابل اتکا</h2>
      </div>
    </div>
    <div class="md-tr-process-grid">
      <div class="md-tr-process-step">
        <span class="md-tr-step-num">STAGE // 01</span>
        <h3>آماده‌سازی هندسه و مش‌بندی</h3>
        <p>ساده‌سازی هوشمندانه هندسه (Defeaturing)، تولید مش‌های شش‌وجهی منظم و تست استقلال حل از شبکه (Mesh Convergence).</p>
      </div>
      <div class="md-tr-process-step">
        <span class="md-tr-step-num">STAGE // 02</span>
        <h3>تعریف شرایط مرزی و بارگذاری</h3>
        <p>اعمال دقیق قیدهای تکیه‌گاهی، نیروهای اینرسی، گشتاور و شرایط تماسی اصطکاکی مطابق واقعیت کارگاه.</p>
      </div>
      <div class="md-tr-process-step">
        <span class="md-tr-step-num">STAGE // 03</span>
        <h3>حل عددی و بهینه‌سازی توپولوژی</h3>
        <p>اجرای حل‌کننده‌های المان محدود Ansys، استخراج کانتورهای تنش و حذف مواد اضافه جهت کاهش وزن.</p>
      </div>
      <div class="md-tr-process-step">
        <span class="md-tr-step-num">STAGE // 04</span>
        <h3>گزارش مهندسی و راهکار اصلاحی</h3>
        <p>ارائه گزارش جامع تحلیلی با تفسیر نمودارها، تایید ضریب اطمینان و پیشنهاد اصلاحات ابعادی جهت مقاوم‌سازی.</p>
      </div>
    </div>
  </div>
</section>
<?php endwhile;
echo do_shortcode( '[md_rfq_desk]' );
get_footer();
