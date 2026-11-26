<?php
/** Template Name: TRUMPF Pillar 4 — Individual Engineering Mentorship */
defined( 'ABSPATH' ) || exit;
get_header();
while ( have_posts() ) : the_post();
?>
<section class="md-tr-sec" style="padding-bottom:48px;border-bottom:1px solid var(--tr-line);">
  <div class="md-container">
    <span class="md-tr-kicker mono" dir="ltr">SERVICE PILLAR 04 // 1-ON-1 ENGINEERING MENTORSHIP</span>
    <h1 class="md-tr-hero-title" style="text-align:right;margin:0 0 18px;max-width:none;"><?php the_title(); ?></h1>
    <?php if ( has_excerpt() ) : ?><p class="md-tr-hero-lead" style="text-align:right;margin:0 0 28px;"><?php echo esc_html( get_the_excerpt() ); ?></p><?php endif; ?>
    <div style="display:flex;gap:14px;flex-wrap:wrap;">
      <a href="#rfq-desk" class="md-tr-btn md-tr-btn-primary"><span>درخواست جلسه مشاوره و تعیین سطح منتورشیپ</span><span class="md-tr-arrow">←</span></a>
      <a href="#mentorship-modules" class="md-tr-btn md-tr-btn-outline">مشاهده ۴ ماژول تخصصی</a>
    </div>
  </div>
</section>

<section class="md-tr-sec md-tr-sec-mist" id="mentorship-modules">
  <div class="md-container">
    <div class="md-tr-sec-head">
      <div>
        <span class="md-tr-kicker mono" dir="ltr">CURRICULUM ARCHITECTURE // 4 CORE MODULES</span>
        <h2 class="md-tr-sec-title">ماژول‌های ۴ گانه منتورشیپ فردی و تخصصی مهندسی مکانیک</h2>
      </div>
    </div>
    <div class="md-tr-card-grid-4">
      <article class="md-tr-arch-card md-reveal">
        <span class="md-tr-step-num" dir="ltr">MODULE 01 // SOLIDWORKS</span>
        <h3>سالیدورکس پیشرفته و اسمبلی مکانیزم‌های صنعتی</h3>
        <p>طراحی پارامتریک، مدیریت اسمبلی‌های سنگین، ورق‌کاری با جدول خمش واقعی، Weldments و شبیه‌سازی حرکتی SolidWorks Motion.</p>
      </article>
      <article class="md-tr-arch-card md-reveal">
        <span class="md-tr-step-num" dir="ltr">MODULE 02 // ANSYS FEA</span>
        <h3>شبیه‌سازی عددی و تحلیل المان محدود با Ansys</h3>
        <p>مدل‌سازی المان محدود، مش‌بندی مهندسی، اعمال شرایط مرزی واقعی کارگاهی، تحلیل تمرکز تنش، خستگی و مودال رزونانس سازه.</p>
      </article>
      <article class="md-tr-arch-card md-reveal">
        <span class="md-tr-step-num" dir="ltr">MODULE 03 // ASME Y14.5</span>
        <h3>تلرانس‌گذاری ابعادی و هندسی کاربردی (GD&amp;T)</h3>
        <p>انتخاب دیتوم‌های واقعی ساخت، کنترل هم‌محوری و تعامد، شرط ماده MMC/LMC، صافی سطح Ra و محاسبه انباشت تلرانسی Stack-up.</p>
      </article>
      <article class="md-tr-arch-card md-reveal">
        <span class="md-tr-step-num" dir="ltr">MODULE 04 // DFMA</span>
        <h3>طراحی برای ساخت و مونتاژ اقتصادی (DFMA)</h3>
        <p>طراحی قطعات قابل ساخت با ماشین‌آلات کارگاهی ایران، انتخاب آلیاژ و یاتاقان‌های بازار و حذف هزینه‌های غیرضروری CNC.</p>
      </article>
    </div>
  </div>
</section>

<section class="md-tr-sec">
  <div class="md-container md-tr-split-2" style="align-items:center;">
    <div>
      <span class="md-tr-kicker mono" dir="ltr">WORKSHOP REALITY // BEYOND SOFTWARE BUTTONS</span>
      <h2 class="md-tr-sec-title" style="margin-bottom:16px;">چرا تسلط بر دکمه‌های نرم‌افزار شما را برای خط تولید کارخانه آماده نمی‌کند؟</h2>
      <p style="font-size:0.98rem;line-height:1.9;color:var(--tr-ink2);margin-bottom:20px;">
        در فضای صنعتی ایران، تفاوت یک مدل‌ساز آماتور با مهندس طراح ارشد، در درک عمیق فرآیند قطعه‌سازی، تلرانس‌های ماشین‌کاری و رفتار واقعی فلز تحت بارهای دینامیکی است.
      </p>
      <div class="md-tr-checklist-grid" style="grid-template-columns:1fr;">
        <div class="md-tr-checklist-item">
          <span class="md-tr-checklist-badge">01</span>
          <div><strong>نقشه دکوراتیو در برابر نقشه ساختنی کارگاهی:</strong> بدون مشخصات صافی سطح (Ra)، انطباقات فیت (ISO Fits) و تلرانس‌های هندسی، قطعه در کارگاه منجر به دوباره‌کاری می‌شود.</div>
        </div>
        <div class="md-tr-checklist-item">
          <span class="md-tr-checklist-badge">02</span>
          <div><strong>تنش ساده الاستیک در برابر تمرکز تنش و خستگی:</strong> بیش از ۹۰٪ شکست قطعات صنعتی در اثر خستگی در محل پخ‌ها، جای خارها یا تنش پسماند جوش رخ می‌دهد.</div>
        </div>
        <div class="md-tr-checklist-item">
          <span class="md-tr-checklist-badge">03</span>
          <div><strong>ابعاد اسمی در برابر انباشت خطاهای تلرانسی (Stack-up):</strong> بی‌توجهی به زنجیره تلرانسی موجب گریپاژ شفت‌ها و عدم مونتاژ در خط تولید کارخانه می‌شود.</div>
        </div>
      </div>
    </div>
    <div style="border:1px solid var(--tr-line);background:var(--tr-mist);padding:14px;">
      <img src="<?php echo esc_url( home_url( '/wp-content/uploads/2026/07/pillar4-mentorship-coaching.webp' ) ); ?>" alt="منتورشیپ فردی و کارگاهی مهندسی مکانیک" style="width:100%;height:auto;display:block;" loading="lazy" />
    </div>
  </div>
</section>

<section class="md-tr-sec md-tr-sec-mist">
  <div class="md-container">
    <div class="md-tr-sec-head">
      <div>
        <span class="md-tr-kicker mono" dir="ltr">4-STEP GROWTH ROADMAP</span>
        <h2 class="md-tr-sec-title">مسیر گام‌به‌گام از سطح فعلی شما تا تسلط بر طراحی صنعتی</h2>
      </div>
    </div>
    <div class="md-tr-process-grid">
      <div class="md-tr-process-step">
        <span class="md-tr-step-num">STEP // 01</span>
        <h3>ارزیابی سطح و نیازسنجی تخصصی</h3>
        <p>برگزاری جلسه تعیین سطح و تدوین سرفصل شخصی‌سازی‌شده دقیقاً متناسب با هدف شغلی یا پروژه واقعی شما.</p>
      </div>
      <div class="md-tr-process-step">
        <span class="md-tr-step-num">STEP // 02</span>
        <h3>آموزش مفاهیم و حل زنده کیس‌استادی</h3>
        <p>اجرای عملی مفاهیم بر روی مکانیزم‌ها و قطعات واقعی صنعتی با اشتراک‌گذاری صفحه و ضبط کامل جلسات.</p>
      </div>
      <div class="md-tr-process-step">
        <span class="md-tr-step-num">STEP // 03</span>
        <h3>جلسات زنده بازبینی کانسپت (Design Review)</h3>
        <p>ممیزی مستقیم مدل‌های شما توسط مهندس طراح ارشد جهت اصلاح ساختار اسمبلی، دیتوم‌ها و قابلیت ساخت.</p>
      </div>
      <div class="md-tr-process-step">
        <span class="md-tr-step-num">STEP // 04</span>
        <h3>پورتفولیو مهندسی و آمادگی بازار کار</h3>
        <p>تحویل پورتفولیوی پروژه‌محور استاندارد، کتابخانه ماکروها و چک‌لیست‌های ممیزی نقشه برای استخدام یا اخذ پروژه.</p>
      </div>
    </div>

    <div class="md-tr-card-grid-3" style="margin-top:32px;">
      <div class="md-tr-arch-card">
        <span class="md-tr-step-num" dir="ltr">ASSET 01</span>
        <h3>پورتفولیوی پروژه‌محور و قابل دفاع مهندسی</h3>
        <p>خروجی‌های مستند CAD، گزارش تحلیل FEA و نقشه‌های ساخت استاندارد برای ارائه در مصاحبه‌های فنی.</p>
      </div>
      <div class="md-tr-arch-card">
        <span class="md-tr-step-num" dir="ltr">ASSET 02</span>
        <h3>کتابخانه قطعات، قالب‌ها و ماکروهای سالیدورکس</h3>
        <p>فایل‌های آماده، شیت‌های استاندارد Title Block و ابزارهای تسریع مدل‌سازی صنعتی.</p>
      </div>
      <div class="md-tr-arch-card">
        <span class="md-tr-step-num" dir="ltr">ASSET 03</span>
        <h3>چک‌لیست‌های اختصاصی ممیزی و صحه‌گذاری نقشه</h3>
        <p>الگوهای حرفه‌ای کنترل کیفیت نقشه‌های ساخت قبل از ارسال به کارگاه تراشکاری یا لیزر.</p>
      </div>
    </div>
  </div>
</section>

<section class="md-tr-sec">
  <div class="md-container" style="max-width:980px;">
    <div class="md-tr-callout-box" style="margin-bottom:48px;">
      <div>
        <span class="md-tr-kicker mono" style="color:var(--tr-amber);" dir="ltr">LEAD MENTOR PROFILE // ۱۵+ YEARS EXPERIENCE</span>
        <h3>منتور شما در این مسیر: مهندس حسین وطن‌دوست</h3>
        <p>طراح ارشد ماشین‌آلات صنعتی با بیش از ۱۵ سال سابقه طراحی، مهندسی معکوس، شبیه‌سازی FEA و اجرای بیش از ۱۵۰ پروژه و ۴۰ خط تولید فعال در صنایع غذایی، دارویی و بسته‌بندی.</p>
      </div>
      <a href="<?php echo esc_url( home_url( '/hossein-vatandoust/' ) ); ?>" class="md-tr-btn md-tr-btn-amber"><span>مشاهده رزومه و سوابق کامل</span><span class="md-tr-arrow">←</span></a>
    </div>

    <div class="md-tr-sec-head">
      <div>
        <span class="md-tr-kicker mono" dir="ltr">FAQ // MENTORSHIP QUESTIONS</span>
        <h2 class="md-tr-sec-title">سؤالات متداول درباره دوره منتورشیپ فردی</h2>
      </div>
    </div>
    <div class="md-tr-accordion" data-md-accordion>
      <div class="md-tr-acc-item is-open">
        <button type="button" class="md-tr-acc-btn"><span>۱. آیا برای شرکت در منتورشیپ باید از قبل به سالیدورکس یا انسیس مسلط باشم؟</span><span class="md-tr-acc-icon">−</span></button>
        <div class="md-tr-acc-panel">خیر. پیش از شروع دوره یک جلسه ارزیابی و تعیین سطح برگزار می‌شود و نقشه راه دقیقاً بر اساس دانش فعلی شما (از سطح مبانی تا مهندس طراح ارشد) شخصی‌سازی می‌شود.</div>
      </div>
      <div class="md-tr-acc-item">
        <button type="button" class="md-tr-acc-btn"><span>۲. آیا می‌توانم فقط یک ماژول (مثلاً فقط تحلیل در Ansys یا فقط GD&amp;T) را انتخاب کنم؟</span><span class="md-tr-acc-icon">+</span></button>
        <div class="md-tr-acc-panel">بله. اگر در بخش مدل‌سازی مسلط هستید و فقط قصد ارتقای مهارت در شبیه‌سازی FEA، استاندارد نقشه‌کشی ASME Y14.5 یا طراحی مکانیزم‌ها را دارید، امکان ثبت‌نام در تک‌ماژول تخصصی وجود دارد.</div>
      </div>
      <div class="md-tr-acc-item">
        <button type="button" class="md-tr-acc-btn"><span>۳. جلسات برای افراد خارج از مشهد چگونه برگزار می‌شود و آیا ضبط می‌شوند؟</span><span class="md-tr-acc-icon">+</span></button>
        <div class="md-tr-acc-panel">تمامی جلسات به‌صورت آنلاین تعاملی با اشتراک‌گذاری صفحه و کنترل مستقیم فایل‌های CAD/CAE برگزار می‌شود و فایل ویدیویی و مدل‌های هر جلسه برای مرور در اختیار شما قرار می‌گیرد. امکان برگزاری جلسات حضوری در مشهد نیز فراهم است.</div>
      </div>
      <div class="md-tr-acc-item">
        <button type="button" class="md-tr-acc-btn"><span>۴. آیا می‌توانم روی پروژه واقعی محل کار یا پایان‌نامه خود در جلسات کار کنم؟</span><span class="md-tr-acc-icon">+</span></button>
        <div class="md-tr-acc-panel">بله، یکی از مزیت‌های اصلی منتورشیپ تک‌به‌تک، کار روی چالش‌ها و پروژه‌های واقعی شماست. در صورت حساسیت صنعتی، تمامی فایل‌ها تحت تعهد محرمانگی (NDA) بررسی می‌شوند.</div>
      </div>
      <div class="md-tr-acc-item">
        <button type="button" class="md-tr-acc-btn"><span>۵. حداقل سیستم مورد نیاز و نحوه پرداخت شهریه چگونه است؟</span><span class="md-tr-acc-icon">+</span></button>
        <div class="md-tr-acc-panel">برای ماژول‌های CAD و نقشه‌کشی یک لپ‌تاپ یا سیستم با رم ۱۶ گیگابایت و پردازنده Core i5/i7 کافی است (برای تحلیل‌های سنگین Ansys رم ۳۲ گیگابایت پیشنهاد می‌شود). جزئیات شهریه و شرایط پرداخت مرحله‌ای متناسب با تعداد ماژول‌ها در جلسه تعیین سطح اعلام می‌شود.</div>
      </div>
    </div>
  </div>
</section>
<?php endwhile;
echo do_shortcode( '[md_rfq_desk]' );
get_footer();
