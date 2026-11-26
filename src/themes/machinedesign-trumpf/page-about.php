<?php
/** Template Name: TRUMPF About & Core Team (درباره ما) */
defined( 'ABSPATH' ) || exit;
get_header();
?>
<section class="md-tr-sec" style="border-bottom:1px solid var(--tr-line);">
  <div class="md-container md-tr-split-2" style="align-items:start;">
    <div>
      <span class="md-tr-kicker mono" dir="ltr">COMPANY PROFILE // TEHRAN · MASHHAD · SHANGHAI · DUBAI</span>
      <h1 class="md-tr-hero-title" style="text-align:right;margin:0 0 20px;max-width:none;">پر کردن شکاف تاریخی میان تئوری دانشگاهی و واقعیت کف کارگاه</h1>
      <div class="md-tr-prose"><?php while ( have_posts() ) { the_post(); the_content(); } ?></div>
    </div>
    <div class="md-tr-card-grid-2">
      <div class="md-tr-arch-card">
        <span class="md-tr-step-num" dir="ltr">MHD-01 // DESIGN &amp; LAB</span>
        <h3>مشهد (Mashhad)</h3>
        <p>دفتر مرکزی طراحی مهندسی، آزمایشگاه تست نمونه اولیه و سالن مونتاژ و راه‌اندازی ماشین‌آلات (برج سامان).</p>
      </div>
      <div class="md-tr-arch-card">
        <span class="md-tr-step-num" dir="ltr">THR-02 // CONSULTING</span>
        <h3>تهران (Tehran)</h3>
        <p>دفتر مشاوره صنعتی، جلسات کلان مدیران کارخانجات، عقد قراردادهای NDA و پایش شهرک‌های صنعتی مرکز.</p>
      </div>
      <div class="md-tr-arch-card">
        <span class="md-tr-step-num" dir="ltr">SHA-03 // FAT AUDIT</span>
        <h3>شانگهای (Shanghai)</h3>
        <p>دفتر بازرسی فنی بین‌المللی، سورسینگ خطوط تولید تخصصی و نظارت حضوری بر آزمون‌های تحویل کارخانه (FAT) در چین.</p>
      </div>
      <div class="md-tr-arch-card">
        <span class="md-tr-step-num" dir="ltr">DXB-04 // LOGISTICS</span>
        <h3>دبی (Dubai)</h3>
        <p>هاب لجستیک، تامین قطعات های‌تک هیدرولیک و پنوماتیک اروپایی و بازرسی بارگیری و ترخیص تجهیزات صنعتی در امارات.</p>
      </div>
    </div>
  </div>
</section>

<section class="md-tr-sec md-tr-sec-mist">
  <div class="md-container">
    <div class="md-tr-sec-head">
      <div>
        <span class="md-tr-kicker mono" dir="ltr">ENGINEERING MANIFESTO // 4 FOUNDATIONAL PILLARS</span>
        <h2 class="md-tr-sec-title">چهار اصل بنیادی در مهندسی ماشین‌آلات ماشین دیزاین</h2>
      </div>
    </div>
    <div class="md-tr-card-grid-2">
      <article class="md-tr-arch-card md-reveal">
        <span class="md-tr-step-num" dir="ltr">PILLAR-A // DFMA</span>
        <h3>طراحی برای ساخت و مونتاژ (DFMA)</h3>
        <p>طرحی که روی مانیتور زیبا باشد اما تراشکار نتواند آن را ببندد شکست خورده است. ما از روز اول قطعه را منطبق با دستگاه‌های تراش، فرز، برش لیزر و خم‌کاری موجود در کارگاه‌های ایران، با حذف انباشت تلرانسی و دسترسی کامل اپراتور نت طراحی می‌کنیم.</p>
      </article>
      <article class="md-tr-arch-card md-reveal">
        <span class="md-tr-step-num" dir="ltr">PILLAR-B // DIN &amp; ISO</span>
        <h3>انطباق خدشه‌ناپذیر با استانداردهای بین‌المللی</h3>
        <p>تمامی محاسبات مقاومت مصالح، انتخاب بیرینگ‌ها، طراحی شفت‌ها و جوشکاری‌ها منطبق با مراجع معتبر DIN 743، استانداردهای ارتعاشی ISO 10816 / ISO 20816، الزامات ایمنی ISO 12100 و نقشه‌های ۲ بعدی ISO 286 تدوین و مستندسازی می‌گردد.</p>
      </article>
      <article class="md-tr-arch-card md-reveal">
        <span class="md-tr-step-num" dir="ltr">PILLAR-C // RCFA</span>
        <h3>ریشه‌یابی بنیادین خرابی به جای تعویض قطعه (RCFA)</h3>
        <p>در خرابی‌های مکرر یاتاقان‌ها و شفت‌ها، تعویض مکرر قطعه هدر دادن بودجه است. ما با آنالیز طیف ارتعاشات FFT، الاینمنت لیزری شفت‌ها و اصلاح متالورژی و عملیات حرارتی، علت بنیادین سایش یا تشدید سازه‌ای را رفع می‌کنیم.</p>
      </article>
      <article class="md-tr-arch-card md-reveal">
        <span class="md-tr-step-num" dir="ltr">PILLAR-D // NDA</span>
        <h3>تضمین حقوقی محرمانگی اسرار و ایده‌ها (NDA)</h3>
        <p>پیش از دریافت هرگونه نقشه، کاتالوگ یا ایده خط تولید، پیمان‌نامه رسمی دوطرفه حفظ اسرار (NDA) با مالکیت فکری ۱۰۰٪ کارفرما منعقد شده و فایل‌های CAD در سرورهای رمزنگاری‌شده نگهداری می‌شوند.</p>
      </article>
    </div>
  </div>
</section>

<section class="md-tr-sec">
  <div class="md-container">
    <div class="md-tr-sec-head">
      <div>
        <span class="md-tr-kicker mono" dir="ltr">INTEGRATED ENGINEERING NETWORK // 5 PODS · 16 SPECIALISTS</span>
        <h2 class="md-tr-sec-title">شبکه یکپارچه مهندسان؛ از تحلیل ریاضی و FEA تا سرپرستی ساخت و اتوماسیون</h2>
      </div>
      <a href="<?php echo esc_url( home_url( '/team/' ) ); ?>" class="md-tr-btn md-tr-btn-outline"><span>مشاهده تمام ۱۶ متخصص</span><span class="md-tr-arrow">←</span></a>
    </div>
    <div class="md-tr-process-grid" style="grid-template-columns:repeat(5, minmax(0, 1fr));">
      <div class="md-tr-process-step">
        <span class="md-tr-step-num">DEP-01 // LEAD POD</span>
        <h3>طراحی مکانیزم و DFMA</h3>
        <p>سنتز سینماتیک • مدل‌سازی سالیدورکس • ممیزی تلرانس‌های GD&amp;T</p>
      </div>
      <div class="md-tr-process-step">
        <span class="md-tr-step-num">DEP-02 // FEA SOLVER</span>
        <h3>شبیه‌سازی عددی و تنش</h3>
        <p>اجزای محدود Ansys • تحلیل ارتعاشات • خستگی و ضربه</p>
      </div>
      <div class="md-tr-process-step">
        <span class="md-tr-step-num">DEP-03 // DIAGNOSTIC</span>
        <h3>عیب‌یابی ارتعاشات و RCFA</h3>
        <p>آنالیز طیف FFT • بالانس درجا • استاندارد ISO 10816 / ISO 20816</p>
      </div>
      <div class="md-tr-process-step">
        <span class="md-tr-step-num">DEP-04 // SHOP-FLOOR</span>
        <h3>نظارت ساخت و متالورژی</h3>
        <p>فرزکاری و تراش CNC • عملیات حرارتی • آزمون FAT و SAT</p>
      </div>
      <div class="md-tr-process-step">
        <span class="md-tr-step-num">DEP-05 // MECHATRONICS</span>
        <h3>اتوماسیون صنعتی و کنترل PLC</h3>
        <p>برنامه‌نویسی زیمنس • درایو و سروو موتورها • مانیتورینگ HMI و ایمنی خط</p>
      </div>
    </div>
  </div>
</section>

<?php echo do_shortcode( '[md_metrics_strip][md_team_quartet][md_rfq_desk]' ); get_footer();
