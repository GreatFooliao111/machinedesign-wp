<?php
/** Template Name: TRUMPF Pillar 2 — Factory Troubleshooting & Vibration */
defined( 'ABSPATH' ) || exit;
get_header();
while ( have_posts() ) : the_post();
$phone_display = md_get_contact( 'phone_primary', '۰۵۱-۳۷۶۰۰۰۰۰' );
$phone_clean   = preg_replace( '/[^0-9+]/', '', strtr( $phone_display, array( '۰'=>'0','۱'=>'1','۲'=>'2','۳'=>'3','۴'=>'4','۵'=>'5','۶'=>'6','۷'=>'7','۸'=>'8','۹'=>'9' ) ) );
?>
<section class="md-tr-sec" style="padding-bottom:48px;border-bottom:1px solid var(--tr-line);">
  <div class="md-container">
    <span class="md-tr-kicker mono" dir="ltr">SERVICE PILLAR 02 // VIBRATION DIAGNOSTICS &amp; RCFA</span>
    <h1 class="md-tr-hero-title" style="text-align:right;margin:0 0 18px;max-width:none;"><?php the_title(); ?></h1>
    <?php if ( has_excerpt() ) : ?><p class="md-tr-hero-lead" style="text-align:right;margin:0 0 28px;"><?php echo esc_html( get_the_excerpt() ); ?></p><?php endif; ?>
    <div style="display:flex;gap:14px;flex-wrap:wrap;">
      <a href="#rfq-desk" class="md-tr-btn md-tr-btn-primary"><span>تکمیل فرم درخواست پایش وضعیت</span><span class="md-tr-arrow">←</span></a>
      <a href="#workflow-rcfa" class="md-tr-btn md-tr-btn-outline">فرآیند ۴ مرحله‌ای RCFA</a>
    </div>
  </div>
</section>

<section class="md-tr-sec md-tr-sec-mist">
  <div class="md-container">
    <div class="md-tr-sec-head">
      <div>
        <span class="md-tr-kicker mono" dir="ltr">4 DIAGNOSTIC DOMAINS // ISO 10816 / 20816</span>
        <h2 class="md-tr-sec-title">۴ حوزه کلیدی حل مسئله و رفع توقف در خطوط تولید</h2>
      </div>
    </div>
    <div class="md-tr-card-grid-4">
      <article class="md-tr-arch-card md-reveal">
        <span class="md-tr-step-num" dir="ltr">FFT SPECTRUM</span>
        <h3>آنالیز ارتعاشات FFT و بالانس دینامیکی درجا</h3>
        <p>اندازه‌گیری سرعت (RMS)، شتاب و جابجایی، بالانس دینامیکی ۱ و ۲ صفحه بدون خارج کردن روتور، و هم‌راستاسازی لیزری شفت‌ها و کوپلینگ‌ها.</p>
      </article>
      <article class="md-tr-arch-card md-reveal">
        <span class="md-tr-step-num" dir="ltr">BEARING &amp; GEAR</span>
        <h3>کالبدشکافی عیوب یاتاقان‌ها، بیرینگ‌ها و گیربکس</h3>
        <p>تحلیل فرکانس‌های تخریب رینگ داخلی، خارجی و ساچمه‌ها (BPFO, BPFI, BSF, FTF)، تشخیص Pitting دندانه‌ها و پیشگیری از قفل ناگهانی شفت.</p>
      </article>
      <article class="md-tr-arch-card md-reveal">
        <span class="md-tr-step-num" dir="ltr">RCFA &amp; MATERIALS</span>
        <h3>تحلیل علل ریشه خرابی (RCFA) و متالورژی شکست</h3>
        <p>بررسی شکست شفت‌ها، خستگی (Fatigue)، اصلاح جنس فولاد آلیاژی و عملیات حرارتی و بازطراحی تمرکز تنش‌ها در Ansys FEA.</p>
      </article>
      <article class="md-tr-arch-card md-reveal">
        <span class="md-tr-step-num" dir="ltr">SPEED &amp; EFFICIENCY</span>
        <h3>بهینه‌سازی فرآیند، سرعت خط و رفع گلوگاه‌ها</h3>
        <p>هماهنگ‌سازی سرعت کانوایرها و مکانیزم‌های ایندکسینگ، تنظیم تایمینگ عملگرهای پنوماتیک و سروو و رفع گیرپاژ در نقاط انتقال بسته.</p>
      </article>
    </div>

    <div class="md-tr-callout-box" style="margin-top:36px;">
      <div>
        <span class="md-tr-kicker mono" style="color:var(--tr-amber);" dir="ltr">EMERGENCY LINE-STOP PROTOCOL // اعزام اورژانسی</span>
        <h3>خط تولید شما متوقف شده یا دستگاه دچار لرزش و صدای غیرعادی است؟</h3>
        <p>دپارتمان حل مسئله با تجهیزات پرتابل آنالایزر ارتعاشات FFT در محل کارخانه شما حاضر می‌شود تا عیب ریشه‌ای را بدون حدس و گمان تشخیص داده و خط را به مدار تولید بازگرداند.</p>
      </div>
      <div style="display:flex;gap:12px;flex-wrap:wrap;">
        <a href="tel:<?php echo esc_attr( $phone_clean ?: '05137600000' ); ?>" class="md-tr-btn md-tr-btn-amber"><span>تماس اضطراری (<?php echo esc_html( $phone_display ); ?>)</span></a>
        <a href="https://t.me/machinedesign_ir" target="_blank" rel="noopener noreferrer" class="md-tr-btn md-tr-btn-outline" style="color:#FFF;border-color:#FFF;"><span>ارسال ویدیو در تلگرام</span></a>
      </div>
    </div>
  </div>
</section>

<section class="md-tr-sec" id="workflow-rcfa">
  <div class="md-container">
    <div class="md-tr-sec-head">
      <div>
        <span class="md-tr-kicker mono" dir="ltr">RCFA METHODOLOGY // DATA-DRIVEN DIAGNOSTICS</span>
        <h2 class="md-tr-sec-title">فرآیند ۴ مرحله‌ای داده‌محور از پایش تا رفع قطعی عیب</h2>
      </div>
    </div>
    <div class="md-tr-process-grid">
      <div class="md-tr-process-step">
        <span class="md-tr-step-num">STAGE // 01</span>
        <h3>داده‌برداری میدانی و ثبت طیف FFT</h3>
        <p>نصب سنسورهای شتاب‌سنج روی یاتاقان‌ها در ۳ راستای افقی، عمودی و محوری در حین کارکرد عادی خط.</p>
      </div>
      <div class="md-tr-process-step">
        <span class="md-tr-step-num">STAGE // 02</span>
        <h3>تحلیل طیف فرکانسی و کشف علت ریشه</h3>
        <p>تحلیل پیک‌های هارمونیک (1X, 2X, 3X) و تفکیک قطعی میان نابالانسی، ناهم‌راستایی، لقی مکانیکی یا نقص بیرینگ.</p>
      </div>
      <div class="md-tr-process-step">
        <span class="md-tr-step-num">STAGE // 03</span>
        <h3>اقدام اصلاحی مهندسی و بازطراحی قطعه</h3>
        <p>اجرای بالانس دینامیکی درجا، تراز لیزری شفت‌ها با شیم‌گذاری دقیق، یا بازطراحی قطعه در SolidWorks.</p>
      </div>
      <div class="md-tr-process-step">
        <span class="md-tr-step-num">STAGE // 04</span>
        <h3>تست صحه‌گذاری زیر بار و شناسنامه پایش</h3>
        <p>راه‌اندازی مجدد خط تحت بار کامل و تایید قرارگیری سطوح ارتعاشی در محدوده مجاز ISO 10816 / ISO 20816.</p>
      </div>
    </div>
  </div>
</section>

<section class="md-tr-sec md-tr-sec-mist">
  <div class="md-container">
    <div class="md-tr-sec-head">
      <div>
        <span class="md-tr-kicker mono" dir="ltr">INSPECTION DELIVERABLES</span>
        <h2 class="md-tr-sec-title">مستنداتی که پس از اتمام عیب‌یابی دریافت می‌کنید</h2>
      </div>
    </div>
    <div class="md-tr-card-grid-3">
      <div class="md-tr-arch-card">
        <span class="md-tr-step-num" dir="ltr">01 // FFT REPORT</span>
        <h3>گزارش رسمی آنالیز ارتعاشات و طیف FFT</h3>
        <p>دفترچه تحلیلی شامل نمودارهای طیفی زمان و فرکانس، مقایسه با جدول حدود مجاز ISO 10816 / ISO 20816 و گواهی سلامت تجهیز.</p>
      </div>
      <div class="md-tr-arch-card">
        <span class="md-tr-step-num" dir="ltr">02 // PM MANUAL</span>
        <h3>دستورالعمل نگهداری و روانکاری استاندارد</h3>
        <p>چک‌لیست عملیاتی برای تیم نت کارخانه، مشخصات دقیق گرید روغن و گریس بیرینگ‌ها، فواصل گریسکاری و حدود هشدار ارتعاشی.</p>
      </div>
      <div class="md-tr-arch-card">
        <span class="md-tr-step-num" dir="ltr">03 // REDESIGN CAD</span>
        <h3>نقشه‌های ساخت قطعات بهینه‌شده و متالورژی</h3>
        <p>در صورت نیاز به تعویض قطعه معیوب با قطعه مقاوم‌تر، نقشه‌های ۲ بعدی و سه‌بعدی GD&amp;T به همراه مشخصات عملیات حرارتی ارائه می‌شود.</p>
      </div>
    </div>
  </div>
</section>
<?php endwhile;
echo do_shortcode( '[md_rfq_desk]' );
get_footer();
