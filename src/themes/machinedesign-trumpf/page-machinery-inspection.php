<?php
/** Template Name: TRUMPF Pillar 6 — Machinery Inspection & Procurement Audit */
defined( 'ABSPATH' ) || exit;
get_header();
$sch_uri = get_template_directory_uri() . '/assets/images/schematics/';
while ( have_posts() ) : the_post();
?>
<section class="md-tr-sec" style="padding-bottom:48px;border-bottom:1px solid var(--tr-line);">
  <div class="md-container">
    <span class="md-tr-kicker mono" dir="ltr">SERVICE PILLAR 06 // CHINA &amp; DUBAI FAT INSPECTION · RFQ AUDIT</span>
    <h1 class="md-tr-hero-title" style="text-align:right;margin:0 0 18px;max-width:none;"><?php the_title(); ?></h1>
    <?php if ( has_excerpt() ) : ?><p class="md-tr-hero-lead" style="text-align:right;margin:0 0 28px;"><?php echo esc_html( get_the_excerpt() ); ?></p><?php endif; ?>
    <div style="display:flex;gap:14px;flex-wrap:wrap;">
      <a href="#rfq-desk" class="md-tr-btn md-tr-btn-primary"><span>هماهنگی اعزام بازرس فنی یا تدوین RFQ</span><span class="md-tr-arrow">←</span></a>
      <a href="#inspection-vectors" class="md-tr-btn md-tr-btn-outline">۴ بردار تخصصی کارشناسی خرید</a>
    </div>
  </div>
</section>

<section class="md-tr-sec md-tr-sec-mist">
  <div class="md-container">
    <div class="md-tr-sec-head">
      <div>
        <span class="md-tr-kicker mono" dir="ltr">PROCUREMENT RISK COMPARISON</span>
        <h2 class="md-tr-sec-title">چرا خرید ماشین‌آلات بدون کارشناسی فنی، ریسک فاجعه‌باری دارد؟</h2>
      </div>
    </div>
    <div class="md-tr-card-grid-2">
      <div class="md-tr-arch-card" style="border-top-color:#B91C1C;">
        <span class="md-tr-step-num" style="color:#B91C1C;" dir="ltr">HIGH RISK // رویه پرخطر بازار تجاری</span>
        <h3>اعتماد به کاتالوگ، فیلم‌های بدون بار و قرارداد بازرگانی ساده</h3>
        <p>فریب فیلم‌های ادیت‌شده No-load، نصب قطعات الکتریکال و PLC کپی یا ریبرند شده، استهلاک شدید بال‌اسکروها در خطوط استوک و قراردادهای یک‌طرفه فاقد ضمانت عملکرد و تلرانس قطعه خروجی.</p>
      </div>
      <div class="md-tr-arch-card" style="border-top-color:var(--tr-blue);">
        <span class="md-tr-step-num" dir="ltr">ENGINEERED AUDIT // بازرسی توسط طراح ماشین‌آلات</span>
        <h3>ممیزی کارگاهی FAT، راستی‌آزمایی سریال و پرداخت مشروط (Escrow)</h3>
        <p>تست دینامیکی و بارگذاری پیوسته در سالن مونتاژ، استعلام سریال PLC/سروو در پورتال سازنده اصلی، آنالیز ارتعاشات FFT روی دستگاه‌های دست‌دوم و مشروط کردن تسویه نهایی به تایید مهندس ناظر.</p>
      </div>
    </div>
  </div>
</section>

<section class="md-tr-sec" id="inspection-vectors" data-md-tabs>
  <div class="md-container">
    <div class="md-tr-sec-head">
      <div>
        <span class="md-tr-kicker mono" dir="ltr">4 INSPECTION VECTORS // CHINA · DUBAI · USED · RFQ</span>
        <h2 class="md-tr-sec-title">۴ بردار تخصصی کارشناسی، تست و عقد قرارداد خرید ماشین‌آلات</h2>
      </div>
    </div>

    <div class="md-tr-tab-nav" role="tablist">
      <button type="button" class="md-tr-tab-btn is-active" data-tab-target="p6-m1" role="tab" aria-selected="true">۰۱ // کارشناسی خرید از چین (FAT)</button>
      <button type="button" class="md-tr-tab-btn" data-tab-target="p6-m2" role="tab" aria-selected="false">۰۲ // عیب‌یابی ماشین‌آلات دست‌دوم</button>
      <button type="button" class="md-tr-tab-btn" data-tab-target="p6-m3" role="tab" aria-selected="false">۰۳ // کارشناسی دبی و مناطق آزاد</button>
      <button type="button" class="md-tr-tab-btn" data-tab-target="p6-m4" role="tab" aria-selected="false">۰۴ // تدوین RFQ و قرارداد مهندسی</button>
    </div>

    <div class="md-tr-tab-pane is-active" data-tab-pane="p6-m1" role="tabpanel">
      <div>
        <span class="md-tr-step-num" dir="ltr">MODULE 01 // ۲ الی ۴ روز کاری در کارخانه سازنده</span>
        <h3 style="margin:6px 0 12px;font-size:1.25rem;">کارشناسی، ممیزی کارخانه و تست تحویل ماشین‌آلات صنعتی در چین (FAT)</h3>
        <p style="line-height:1.85;color:var(--tr-ink2);margin-bottom:16px;">راستی‌آزمایی سوابق سازنده، کالیبراسیون لیزری محورها، تست استقامت زیر بار نامی و استعلام اصالت قطعات در سالن مونتاژ سازنده چینی.</p>
        <ul style="margin:0;padding-right:18px;line-height:1.9;color:var(--tr-ink2);">
          <li>استعلام شماره سریال سرووها و PLCها در پورتال رسمی برند</li>
          <li>کالیبراسیون ابعادی و لیزر اینترفرومتر مطابق ISO 230-2</li>
          <li>تست مداوم ۴۸ ساعته زیر بار نامی و نظارت بر مهاربندی کانتینر</li>
        </ul>
      </div>
      <div class="md-tr-schematic-frame">
        <img src="<?php echo esc_url( $sch_uri . 'pillar6-module1-china-audit.webp' ); ?>" alt="شماتیک بازرسی و تست ماشین‌آلات در کارخانجات چین" loading="lazy" />
      </div>
    </div>

    <div class="md-tr-tab-pane" data-tab-pane="p6-m2" role="tabpanel">
      <div>
        <span class="md-tr-step-num" dir="ltr">MODULE 02 // ۱ الی ۲ روز کاری به ازای هر خط</span>
        <h3 style="margin:6px 0 12px;font-size:1.25rem;">ارزیابی فنی، عیب‌یابی ارتعاشاتی و سنجش سایش ماشین‌آلات دست‌دوم</h3>
        <p style="line-height:1.85;color:var(--tr-ink2);margin-bottom:16px;">کالبدشکافی وضعیت واقعی قطعات درونی، سنجش لقی بال‌اسکروها، آنالیز طیف ارتعاشات گیربکس‌ها و تخمین مهندسی هزینه اورهال پیش از خرید.</p>
        <ul style="margin:0;padding-right:18px;line-height:1.9;color:var(--tr-ink2);">
          <li>آنالیز ارتعاشات FFT و سلامت بیرینگ‌ها بدون دمونتاژ فیزیکی</li>
          <li>تست لقی میکرونی (Backlash) و آزمون غیرمخرب ترک‌های خستگی (NDT)</li>
          <li>ارائه کارت سلامت فنی (۰ تا ۱۰۰) و برآورد هزینه نوسازی</li>
        </ul>
      </div>
      <div class="md-tr-schematic-frame">
        <img src="<?php echo esc_url( $sch_uri . 'pillar6-module2-used-machinery.webp' ); ?>" alt="شماتیک عیب‌یابی و تست ارتعاشات ماشین‌آلات دست‌دوم" loading="lazy" />
      </div>
    </div>

    <div class="md-tr-tab-pane" data-tab-pane="p6-m3" role="tabpanel">
      <div>
        <span class="md-tr-step-num" dir="ltr">MODULE 03 // ۱ الی ۳ روز کاری در امارات</span>
        <h3 style="margin:6px 0 12px;font-size:1.25rem;">کارشناسی خرید تجهیزات صنعتی از دبی و انبارهای منطقه آزاد</h3>
        <p style="line-height:1.85;color:var(--tr-ink2);margin-bottom:16px;">بازرسی حضوری در انبارهای جبل‌علی (JAFZA) و شارجه، انطباق با استاندارد برق ۳ فاز ایران و پایش صدمات ناشی از رطوبت شرجی.</p>
        <ul style="margin:0;padding-right:18px;line-height:1.9;color:var(--tr-ink2);">
          <li>تطبیق پلاک و شماره سریال با مانیفست گمرکی جهت رد دستگاه‌های ریبرند شده</li>
          <li>پایش اکسیداسیون بردها و تست سازگاری ترانس‌ها با 400V / 50Hz</li>
          <li>نظارت بر تخلیه سیالات، مهار شفت‌ها و بسته‌بندی ضدضربه دریایی</li>
        </ul>
      </div>
      <div class="md-tr-schematic-frame">
        <img src="<?php echo esc_url( $sch_uri . 'pillar6-module3-dubai-freezone.webp' ); ?>" alt="شماتیک بازرسی ماشین‌آلات وارداتی از دبی و مناطق آزاد" loading="lazy" />
      </div>
    </div>

    <div class="md-tr-tab-pane" data-tab-pane="p6-m4" role="tabpanel">
      <div>
        <span class="md-tr-step-num" dir="ltr">MODULE 04 // ۳ الی ۵ روز کاری</span>
        <h3 style="margin:6px 0 12px;font-size:1.25rem;">تدوین مشخصات خرید (RFQ) و قراردادهای مهندسی خرید خارجی</h3>
        <p style="line-height:1.85;color:var(--tr-ink2);margin-bottom:16px;">قفل کردن الزامات فنی، تلرانس‌های قطعه خروجی، بندهای تست پذیرش کارخانه‌ای (FAT) و شرایط پرداخت مشروط در متن قرارداد تجاری.</p>
        <ul style="margin:0;padding-right:18px;line-height:1.9;color:var(--tr-ink2);">
          <li>تدوین استعلام فنی مستند (Technical RFQ) و لیست برند قطعات مجاز</li>
          <li>ضمانت تلرانسی محصول خروجی با پیوست چک‌لیست CMM</li>
          <li>پروتکل پرداخت مشروط (Escrow) وابسته به امضای FAT و جرایم تاخیر</li>
        </ul>
      </div>
      <div class="md-tr-schematic-frame">
        <img src="<?php echo esc_url( $sch_uri . 'pillar6-module4-rfq-contract.webp' ); ?>" alt="شماتیک تدوین RFQ و قرارداد مهندسی خرید ماشین‌آلات" loading="lazy" />
      </div>
    </div>
  </div>
</section>

<section class="md-tr-sec md-tr-sec-mist">
  <div class="md-container">
    <div class="md-tr-sec-head">
      <div>
        <span class="md-tr-kicker mono" dir="ltr">AUDIT CASE STUDY // PHARMACEUTICAL BLISTER LINE</span>
        <h2 class="md-tr-sec-title">کالبدشکافی عیب پنهان در خرید خط تولید دارویی از چین</h2>
      </div>
    </div>
    <div class="md-tr-card-grid-2">
      <div class="md-tr-arch-card" style="border-top-color:#B91C1C;">
        <span class="md-tr-step-num" style="color:#B91C1C;" dir="ltr">BEFORE // ریسک پیش از تسویه حساب</span>
        <h3>خط بسته‌بندی بلیستر: ظاهر نو، باطن پر از خطای ساخت</h3>
        <p>در بازرسی قبل از تسویه حساب مشخص شد فروشنده به جای استیل ۳۱۶L دارویی از ورق گرید ۲۰۱ خورنده استفاده کرده، سنبه دوخت فویل در دمای ۱۴۰ درجه ۱۲۰ میکرون لقی دارد و PLC نصب‌شده استوک با سورس‌کد قفل‌شده است (خطر ۲.۵ میلیارد تومان خسارت).</p>
      </div>
      <div class="md-tr-arch-card" style="border-top-color:var(--tr-blue);">
        <span class="md-tr-step-num" dir="ltr">AUDIT RESOLUTION // مداخله مهندسی در شاندونگ</span>
        <h3>اصلاح فنی پیش از پرداخت قسط نهایی و ترخیص کالا</h3>
        <p>با مستندسازی متالورژی پرتابل و تعلیق پرداخت نهایی، کل بخش‌های تماس به استیل ۳۱۶L تاییدشده تغییر یافت، فک دوخت مجدداً سنگ‌زنی شد و PLC نو زیمنس همراه با سورس‌کد باز تحویل گردید.</p>
      </div>
    </div>
  </div>
</section>

<section class="md-tr-sec">
  <div class="md-container">
    <div class="md-tr-sec-head">
      <div>
        <span class="md-tr-kicker mono" dir="ltr">4-STEP PROCUREMENT PATH</span>
        <h2 class="md-tr-sec-title">مسیر گام‌به‌گام کارشناسی و خرید مطمئن تجهیزات صنعتی</h2>
      </div>
    </div>
    <div class="md-tr-process-grid" style="margin-bottom:44px;">
      <div class="md-tr-process-step">
        <span class="md-tr-step-num">STEP // 01</span>
        <h3>تدوین RFQ و بررسی کاتالوگ‌ها</h3>
        <p>ممیزی فنی پیشنهادهای فروشندگان، تطبیق ظرفیت و حذف گزینه‌های نامعتبر پیش از پیش‌پرداخت.</p>
      </div>
      <div class="md-tr-process-step">
        <span class="md-tr-step-num">STEP // 02</span>
        <h3>اصلاح قرارداد و شرط FAT</h3>
        <p>افزودن پیوست فنی، برند قطعات اجباری و مشروط کردن پرداخت نهایی به تایید مهندس ناظر.</p>
      </div>
      <div class="md-tr-process-step">
        <span class="md-tr-step-num">STEP // 03</span>
        <h3>بازرسی حضوری و تست ۴۸ ساعته</h3>
        <p>سنجش ارتعاشات، تست لیزری دقت، بررسی متریال و استعلام سریال در محل کارخانه چین یا دبی.</p>
      </div>
      <div class="md-tr-process-step">
        <span class="md-tr-step-num">STEP // 04</span>
        <h3>گزارش سلامت و نظارت بارگیری</h3>
        <p>صدور گواهی ترخیص، نظارت بر بسته‌بندی دریایی/کانتینری و تحویل آرشیو ویدیویی آزمون‌های میکرونی.</p>
      </div>
    </div>

    <div class="md-tr-sec-head">
      <div>
        <span class="md-tr-kicker mono" dir="ltr">DELIVERABLES &amp; BUYER FAQ</span>
        <h2 class="md-tr-sec-title">دستاوردهای ملموس کارشناسی و پاسخ به دغدغه‌های مدیران خرید</h2>
      </div>
    </div>
    <div class="md-tr-accordion" data-md-accordion style="max-width:920px;">
      <div class="md-tr-acc-item is-open">
        <button type="button" class="md-tr-acc-btn"><span>آیا امکان بازرسی فیزیکی و حضوری در کارخانجات چین یا دبی وجود دارد؟</span><span class="md-tr-acc-icon">−</span></button>
        <div class="md-tr-acc-panel">بله؛ هم اعزام مستقیم مهندس ناظر ارشد ایرانی به شهرهای صنعتی چین و مناطق آزاد دبی و هم ارزیابی ویدئویی زنده چنددوربینه با هدایت تیم بازرسی محلی پشتیبانی می‌شود.</div>
      </div>
      <div class="md-tr-acc-item">
        <button type="button" class="md-tr-acc-btn"><span>چگونه از اصالت و غیراستوک بودن قطعات اصلی دستگاه مطمئن می‌شوید؟</span><span class="md-tr-acc-icon">+</span></button>
        <div class="md-tr-acc-panel">کلیه قطعات کلیدی (PLC، درایو، سروو و پمپ‌ها) با بارکدخوان و استعلام شماره سریال در دیتابیس رسمی سازندگانی چون Siemens، Schneider، Rexroth و Festo راستی‌آزمایی می‌شوند.</div>
      </div>
      <div class="md-tr-acc-item">
        <button type="button" class="md-tr-acc-btn"><span>هزینه و تعرفه خدمات کارشناسی خرید چگونه محاسبه می‌شود؟</span><span class="md-tr-acc-icon">+</span></button>
        <div class="md-tr-acc-panel">تعرفه کاملاً شفاف، مقطوع و متناسب با ابعاد پروژه و مبدأ بازرسی تعیین می‌شود و ما برخلاف دلالان تجاری هیچ کمیسیون یا درصدی از ارزش دستگاه دریافت نمی‌کنیم تا استقلال نظر حفظ شود.</div>
      </div>
    </div>
  </div>
</section>
<?php endwhile;
echo do_shortcode( '[md_rfq_desk]' );
get_footer();
