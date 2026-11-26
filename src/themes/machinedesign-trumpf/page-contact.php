<?php
/** Template Name: TRUMPF Direct Contact & RFQ Desk (تماس با ما) */
defined( 'ABSPATH' ) || exit;
get_header();

$phone_mobile  = md_get_contact( 'phone_mobile', '۰۹۳۵۸۶۸۹۸۲۹' );
$phone_primary = md_get_contact( 'phone_primary', '۰۵۱-۳۷۶۰۰۰۰۰' );
$contact_email = md_get_contact( 'contact_email', 'info@machinedesign.ir' );
$address       = md_get_option( 'workshop_address', 'مشهد، میدان جانباز، برج سامان، طبقه ۴ | دفتر فنی تهران' );
$tg_handle     = '@' . ltrim( md_get_option( 'telegram_channel', 'machinedesign_ir' ), '@' );
?>
<section class="md-tr-sec" style="padding-bottom:44px;border-bottom:1px solid var(--tr-line);">
  <div class="md-container">
    <span class="md-tr-kicker mono" dir="ltr">DIRECT ENGINEERING DESK // SLA &lt; 24H</span>
    <h1 class="md-tr-hero-title" style="text-align:right;margin:0 0 18px;max-width:none;">پل‌های ارتباطی دفتر فنی و کارگاه ساخت</h1>
    <p class="md-tr-hero-lead" style="text-align:right;margin:0 0 32px;max-width:70ch;">
      جهت مشاوره فوری رفع توقف خط، ارسال نقشه‌های فنی تحت قرارداد محرمانگی NDA و یا هماهنگی بازدید حضوری از دفتر طراحی و سالن مونتاژ با ما در ارتباط باشید.
    </p>
    <div class="md-tr-card-grid-3">
      <div class="md-tr-arch-card">
        <span class="md-tr-step-num" dir="ltr">DIRECT LINE // ۸:۰۰ الی ۱۸:۰۰</span>
        <h3>تماس با سرپرست دفتر طراحی</h3>
        <p>مشاوره فوری ارزیابی توقف خط یا راهنمایی پیش از خرید ماشین‌آلات:</p>
        <p class="mono" dir="ltr" style="margin-top:14px;font-weight:700;color:var(--tr-blue);"><?php echo esc_html( $phone_mobile ); ?> | <?php echo esc_html( $phone_primary ); ?></p>
      </div>
      <div class="md-tr-arch-card">
        <span class="md-tr-step-num" dir="ltr">OFFICE &amp; WORKSHOP</span>
        <h3>دفتر مهندسی و کارگاه ساخت</h3>
        <p><?php echo esc_html( $address ); ?></p>
        <p class="mono" dir="ltr" style="margin-top:14px;font-weight:700;color:var(--tr-blue);"><?php echo esc_html( $contact_email ); ?></p>
      </div>
      <div class="md-tr-arch-card">
        <span class="md-tr-step-num" dir="ltr">CAD &amp; MEDIA CHANNELS</span>
        <h3>کانال‌های پیام‌رسان تخصصی</h3>
        <p>جهت ارسال فایل‌های سنگین CAD، مدل‌های 3D و ویدیوهای ارتعاشات دستگاه:</p>
        <p class="mono" dir="ltr" style="margin-top:14px;font-weight:700;color:var(--tr-blue);">Telegram / Bale: <?php echo esc_html( $tg_handle ); ?></p>
      </div>
    </div>
  </div>
</section>

<?php echo do_shortcode( '[md_rfq_desk]' ); ?>

<section class="md-tr-sec">
  <div class="md-container">
    <div class="md-tr-sec-head">
      <div>
        <span class="md-tr-kicker mono" dir="ltr">TRANSPARENT ENGAGEMENT // 4 STEPS</span>
        <h2 class="md-tr-sec-title">۴ گام شفاف تعامل، از ثبت استعلام تا تحویل ماشین‌آلات</h2>
      </div>
    </div>
    <div class="md-tr-process-grid">
      <div class="md-tr-process-step">
        <span class="md-tr-step-num">STEP 01</span>
        <h3>ثبت استعلام و تریاژ فنی</h3>
        <p>دریافت نیاز فنی، ویدئو یا نمونه اولیه و بررسی امکان‌سنجی مهندسی ظرف کمتر از ۲۴ ساعت کاری.</p>
      </div>
      <div class="md-tr-process-step">
        <span class="md-tr-step-num">STEP 02</span>
        <h3>تفاهم‌نامه NDA و جلسه فنی</h3>
        <p>انعقاد قرارداد رسمی عدم افشای اطلاعات و برگزاری جلسه کارشناسی با سرپرست دفتر طراحی.</p>
      </div>
      <div class="md-tr-process-step">
        <span class="md-tr-step-num">STEP 03</span>
        <h3>پروپوزال DFMA و برآورد هزینه</h3>
        <p>ارائه معماری پیشنهادی مکانیزم، زمان‌بندی فازبندی‌شده، لیست اسناد تحویلی و برآورد شفاف هزینه.</p>
      </div>
      <div class="md-tr-process-step">
        <span class="md-tr-step-num">STEP 04</span>
        <h3>عقد قرارداد و آغاز ساخت/طراحی</h3>
        <p>شروع طراحی، شبیه‌سازی FEA، نظارت کارگاهی CNC و تحویل نهایی همراه با آزمون عملکرد FAT/SAT.</p>
      </div>
    </div>
  </div>
</section>

<section class="md-tr-sec md-tr-sec-mist" id="faq">
  <div class="md-container" style="max-width:980px;">
    <div class="md-tr-sec-head">
      <div>
        <span class="md-tr-kicker mono" dir="ltr">FREQUENTLY ASKED QUESTIONS</span>
        <h2 class="md-tr-sec-title">پرسش‌های متداول کارفرمایان و مدیران کارخانجات</h2>
      </div>
    </div>
    <div class="md-tr-accordion" data-md-accordion>
      <div class="md-tr-acc-item is-open">
        <button type="button" class="md-tr-acc-btn"><span>Q.01 — آیا پیش از ارسال نقشه‌ها، قرارداد محرمانگی (NDA) منعقد می‌شود؟</span><span class="md-tr-acc-icon">−</span></button>
        <div class="md-tr-acc-panel">بله، بدون استثنا. پیش از دریافت هرگونه فایل فنی یا نقشه ساخت، قرارداد رسمی محرمانگی دوجانبه (Bilateral NDA) با مهر شرکتی منعقد می‌گردد. تمامی حقوق مادی و معنوی خروجی‌ها ۱۰۰٪ متعلق به کارفرماست.</div>
      </div>
      <div class="md-tr-acc-item">
        <button type="button" class="md-tr-acc-btn"><span>Q.02 — آیا امکان بازدید حضوری از دفتر طراحی فراهم است؟</span><span class="md-tr-acc-icon">+</span></button>
        <div class="md-tr-acc-panel">بله. پس از ثبت استعلام اولیه و تریاژ فنی، هماهنگی‌های لازم جهت بازدید حضوری از دفتر مرکزی طراحی مهندسی (واقع در برج سامان مشهد) و سالن‌های مونتاژ و ساخت انجام می‌پذیرد.</div>
      </div>
      <div class="md-tr-acc-item">
        <button type="button" class="md-tr-acc-btn"><span>Q.03 — اسناد تحویل‌شدنی نهایی در پروژه‌های طراحی ماشین‌آلات چیست؟</span><span class="md-tr-acc-icon">+</span></button>
        <div class="md-tr-acc-panel">مدل سه‌بعدی بومی SolidWorks و STEP، نقشه‌های ساخت دوبعدی با تلرانس‌گذاری کامل GD&amp;T طبق DIN/ISO، لیست خرید قطعات استاندارد (BOM)، گزارش تحلیل تنش FEA و دفترچه راهنمای نگهداری (O&amp;M).</div>
      </div>
      <div class="md-tr-acc-item">
        <button type="button" class="md-tr-acc-btn"><span>Q.04 — در صورت توقف ناگهانی خط تولید کارخانه، سرعت رسیدگی چقدر است؟</span><span class="md-tr-acc-icon">+</span></button>
        <div class="md-tr-acc-panel">درخواست‌های توقف خط در اولویت اضطراری قرار می‌گیرند و ظرف کمتر از ۲۴ ساعت کاری بررسی می‌شوند. هماهنگی جلسه آنلاین یا اعزام فوری کارشناس ارشد به محل واحد صنعتی بدون معطلی انجام می‌پذیرد.</div>
      </div>
      <div class="md-tr-acc-item">
        <button type="button" class="md-tr-acc-btn"><span>Q.05 — فرآیند مهندسی معکوس قطعات و ماشین‌آلات وارداتی چگونه است؟</span><span class="md-tr-acc-icon">+</span></button>
        <div class="md-tr-acc-panel">اسکن سه‌بعدی اپتیکال میکرونی، آنالیز کوانتومتری متالورژی مواد، بهینه‌سازی نقاط شکست و خستگی فلز و صدور پکیج ساخت داخلی با تضمین کارکرد پیوسته و پایدار در خط تولید.</div>
      </div>
      <div class="md-tr-acc-item">
        <button type="button" class="md-tr-acc-btn"><span>Q.06 — نحوه فازبندی پرداخت و تسویه‌حساب در قراردادهای طراحی چیست؟</span><span class="md-tr-acc-icon">+</span></button>
        <div class="md-tr-acc-panel">پرداخت‌ها کاملاً فازبندی‌شده بر اساس پیشرفت واقعی پروژه و تایید فنی تحویل‌شدنی‌های هر مرحله (تریاژ، مدل سه‌بعدی، نقشه‌های ساخت و تایید نهایی پس از تست سرد/گرم) انجام می‌شود.</div>
      </div>
    </div>
  </div>
</section>
<?php get_footer();
