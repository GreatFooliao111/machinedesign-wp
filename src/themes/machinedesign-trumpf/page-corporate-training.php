<?php
/** Template Name: TRUMPF Pillar 5 — Corporate Factory Training */
defined( 'ABSPATH' ) || exit;
get_header();
$sch_uri = get_template_directory_uri() . '/assets/images/schematics/';
while ( have_posts() ) : the_post();
?>
<section class="md-tr-sec" style="padding-bottom:48px;border-bottom:1px solid var(--tr-line);">
  <div class="md-container">
    <span class="md-tr-kicker mono" dir="ltr">SERVICE PILLAR 05 // IN-PLANT CORPORATE TRAINING</span>
    <h1 class="md-tr-hero-title" style="text-align:right;margin:0 0 18px;max-width:none;"><?php the_title(); ?></h1>
    <?php if ( has_excerpt() ) : ?><p class="md-tr-hero-lead" style="text-align:right;margin:0 0 28px;"><?php echo esc_html( get_the_excerpt() ); ?></p><?php endif; ?>
    <div style="display:flex;gap:14px;flex-wrap:wrap;">
      <a href="#rfq-desk" class="md-tr-btn md-tr-btn-primary"><span>استعلام سرفصل و زمان‌بندی دوره سازمانی</span><span class="md-tr-arrow">←</span></a>
      <a href="#training-modules" class="md-tr-btn md-tr-btn-outline">مشاهده ماژول‌های ۴ گانه کارگاه</a>
    </div>
  </div>
</section>

<section class="md-tr-sec md-tr-sec-mist">
  <div class="md-container">
    <div class="md-tr-sec-head">
      <div>
        <span class="md-tr-kicker mono" dir="ltr">SHOP-FLOOR GAP ANALYSIS</span>
        <h2 class="md-tr-sec-title">چرا دوره‌های عمومی آموزشگاهی تغییری در کیفیت ساخت کارخانه‌ها ایجاد نمی‌کنند؟</h2>
      </div>
    </div>
    <div class="md-tr-card-grid-2">
      <div class="md-tr-arch-card">
        <span class="md-tr-step-num" style="color:#B91C1C;" dir="ltr">GENERIC COURSES // LIMITATION</span>
        <h3>دوره‌های پکیجی و آموزشگاهی متفرقه</h3>
        <p>فایل‌های تمرینی فانتزی اینترنتی، تلرانس‌گذاری کتابی و غیراقتصادی بدون توجه به تلرانس قابل دسترس ماشین‌های CNC کارخانه، و عدم هم‌سویی میان واحد طراحی و کنترل کیفیت (QC).</p>
      </div>
      <div class="md-tr-arch-card" style="border-top-color:var(--tr-blue);">
        <span class="md-tr-step-num" dir="ltr">IN-PLANT TRAINING // MACHINEDESIGN</span>
        <h3>کارگاه اختصاصی روی نقشه‌ها و خطوط واقعی کارخانه شما</h3>
        <p>آموزش تیم طراحی، سرپرستان ساخت و QC بر پایه فایل‌های واقعی کارخانه تحت NDA، استانداردسازی جدول خمش پرس‌بریک شرکت و حذف ابهامات نقشه بین مهندس و تراشکار.</p>
      </div>
    </div>
  </div>
</section>

<section class="md-tr-sec" id="training-modules" data-md-tabs>
  <div class="md-container">
    <div class="md-tr-sec-head">
      <div>
        <span class="md-tr-kicker mono" dir="ltr">MODULAR CURRICULUM // 4 SPECIALIZED TRACKS</span>
        <h2 class="md-tr-sec-title">ماژول‌های ۴ گانه ارتقای مهارت پرسنل مهندسی، تولید و کنترل کیفیت</h2>
      </div>
    </div>

    <div class="md-tr-tab-nav" role="tablist">
      <button type="button" class="md-tr-tab-btn is-active" data-tab-target="p5-m1" role="tab" aria-selected="true">۰۱ // نقشه‌خوانی صنعتی و جوشکاری</button>
      <button type="button" class="md-tr-tab-btn" data-tab-target="p5-m2" role="tab" aria-selected="false">۰۲ // SolidWorks و ورق‌کاری DFMA</button>
      <button type="button" class="md-tr-tab-btn" data-tab-target="p5-m3" role="tab" aria-selected="false">۰۳ // تلرانس‌گذاری کف کارگاه GD&amp;T</button>
      <button type="button" class="md-tr-tab-btn" data-tab-target="p5-m4" role="tab" aria-selected="false">۰۴ // تحلیل تنش کاربردی Production FEA</button>
    </div>

    <div class="md-tr-tab-pane is-active" data-tab-pane="p5-m1" role="tabpanel">
      <div>
        <span class="md-tr-step-num" dir="ltr">MODULE 01 // ۱۶ الی ۲۴ ساعت کارگاهی</span>
        <h3 style="margin:6px 0 12px;font-size:1.25rem;">نقشه‌خوانی صنعتی پیشرفته، علائم جوشکاری و استانداردسازی نقشه‌ها</h3>
        <p style="line-height:1.85;color:var(--tr-ink2);margin-bottom:16px;">آموزش تفسیر بدون ابهام علائم نقشه‌کشی بین‌المللی برای اپراتورهای ماشین‌کاری، سرپرستان ساخت و بازرسان QC جهت جلوگیری از تفسیرهای سلیقه‌ای در کارگاه.</p>
        <ul style="margin:0;padding-right:18px;line-height:1.9;color:var(--tr-ink2);">
          <li>علائم جوشکاری AWS A2.4 و ISO 2553 در شاسی‌های صنعتی سنگین</li>
          <li>علائم صافی سطح و زبری (Ra / Rz) متناسب با سنگ‌زنی و تراشکاری</li>
          <li>فرمت استاندارد لایه‌ها، کدگذاری قطعات و جدول BOM</li>
        </ul>
      </div>
      <div class="md-tr-schematic-frame">
        <img src="<?php echo esc_url( $sch_uri . 'pillar5-module1-schematic.webp' ); ?>" alt="شماتیک ماژول ۱: نقشه‌خوانی صنعتی و علائم جوشکاری" loading="lazy" />
      </div>
    </div>

    <div class="md-tr-tab-pane" data-tab-pane="p5-m2" role="tabpanel">
      <div>
        <span class="md-tr-step-num" dir="ltr">MODULE 02 // ۲۴ الی ۳۶ ساعت کارگاهی</span>
        <h3 style="margin:6px 0 12px;font-size:1.25rem;">مدل‌سازی پیشرفته SolidWorks بر اساس فرآیند ساخت و ورق‌کاری (DFMA)</h3>
        <p style="line-height:1.85;color:var(--tr-ink2);margin-bottom:16px;">آموزش مدل‌سازی قطعات و ماشین‌آلات به گونه‌ای که هزینه ساخت، زمان برش لیزر، مراحل خم‌کاری و مونتاژ در حداقل ممکن قرار گیرد.</p>
        <ul style="margin:0;padding-right:18px;line-height:1.9;color:var(--tr-ink2);">
          <li>ورق‌کاری و کالیبراسیون تجربی K-Factor بر اساس سنبه‌های پرس‌بریک کارخانه</li>
          <li>سازه‌ها و شاسی جوشکاری (Weldments) و کات‌لیست برش</li>
          <li>مدیریت اسمبلی‌های سنگین بدون افت سرعت سیستم</li>
        </ul>
      </div>
      <div class="md-tr-schematic-frame">
        <img src="<?php echo esc_url( $sch_uri . 'pillar5-module2-schematic.webp' ); ?>" alt="شماتیک ماژول ۲: ورق‌کاری و طراحی DFMA" loading="lazy" />
      </div>
    </div>

    <div class="md-tr-tab-pane" data-tab-pane="p5-m3" role="tabpanel">
      <div>
        <span class="md-tr-step-num" dir="ltr">MODULE 03 // ۱۸ الی ۲۴ ساعت کارگاهی</span>
        <h3 style="margin:6px 0 12px;font-size:1.25rem;">تلرانس‌گذاری ابعادی و هندسی کاربردی کف کارگاه (Shop-Floor GD&amp;T)</h3>
        <p style="line-height:1.85;color:var(--tr-ink2);margin-bottom:16px;">پیاده‌سازی استاندارد مرجع ASME Y14.5 در خطوط ماشین‌کاری و مونتاژ؛ پایان دادن به تناقضات ابعادی بین طراح، تراشکار و واحد کنترل کیفیت.</p>
        <ul style="margin:0;padding-right:18px;line-height:1.9;color:var(--tr-ink2);">
          <li>فریم کنترلی و تعیین دیتوم‌های واقعی بر اساس فیکسچرهای کارگاهی</li>
          <li>تلرانس موقعیت (Position) و شرط ماده MMC / LMC</li>
          <li>محاسبات انباشت تلرانسی (Stack-up) برای جلوگیری از گریپاژ یاتاقان</li>
        </ul>
      </div>
      <div class="md-tr-schematic-frame">
        <img src="<?php echo esc_url( $sch_uri . 'pillar5-module3-schematic.webp' ); ?>" alt="شماتیک ماژول ۳: تلرانس‌گذاری GD&amp;T" loading="lazy" />
      </div>
    </div>

    <div class="md-tr-tab-pane" data-tab-pane="p5-m4" role="tabpanel">
      <div>
        <span class="md-tr-step-num" dir="ltr">MODULE 04 // ۱۶ الی ۲۰ ساعت کارگاهی</span>
        <h3 style="margin:6px 0 12px;font-size:1.25rem;">شبیه‌سازی و تحلیل تنش کاربردی المان محدود (Production FEA)</h3>
        <p style="line-height:1.85;color:var(--tr-ink2);margin-bottom:16px;">توانمندسازی پرسنل مهندسی برای اعتبارسنجی سریع استحکام شاسی‌ها، شفت‌ها و بازوها پیش از صرف هزینه‌های سنگین ساخت فیزیکی.</p>
        <ul style="margin:0;padding-right:18px;line-height:1.9;color:var(--tr-ink2);">
          <li>شرایط مرزی و اعمال دقیق نیروهای ضربه‌ای و گشتاور موتور</li>
          <li>شناسایی نقاط تمرکز تنش و اصلاح فیلت‌ها قبل از برش لیزر</li>
          <li>تحلیل تغییرفرم الاستیک، خیز شفت‌ها و کمانش</li>
        </ul>
      </div>
      <div class="md-tr-schematic-frame">
        <img src="<?php echo esc_url( $sch_uri . 'pillar5-module4-schematic.webp' ); ?>" alt="شماتیک ماژول ۴: تحلیل تنش FEA" loading="lazy" />
      </div>
    </div>
  </div>
</section>

<section class="md-tr-sec md-tr-sec-mist">
  <div class="md-container">
    <div class="md-tr-sec-head">
      <div>
        <span class="md-tr-kicker mono" dir="ltr">SHOP-FLOOR PROOF // REAL CASE STUDY</span>
        <h2 class="md-tr-sec-title">کالبدشکافی یک خطای واقعی در خط تولید: قبل و بعد از کارگاه آموزشی</h2>
      </div>
    </div>
    <div class="md-tr-card-grid-2">
      <div class="md-tr-arch-card" style="border-top-color:#B91C1C;">
        <span class="md-tr-step-num" style="color:#B91C1C;" dir="ltr">BEFORE // نقشه اولیه پرخطا</span>
        <h3>محاسبه ذهنی ضریب K-Factor و دیتوم‌گذاری ناممکن</h3>
        <p>نادیده گرفتن ابزار خم‌کن کارگاه (خطای ۱.۸ میلی‌متر در فلنج ورق ۲ میل)، تعریف دیتوم روی سطح ریخته‌گری ناهموار و عدم محاسبه Stack-up منجر به ۲۴۰ قطعه ضایعات و ۴۸ ساعت توقف خط مونتاژ شد.</p>
      </div>
      <div class="md-tr-arch-card" style="border-top-color:var(--tr-blue);">
        <span class="md-tr-step-num" dir="ltr">AFTER // اصلاح در کارگاه ماشین دیزاین</span>
        <h3>کالیبراسیون تجربی و دیتوم‌گذاری استاندارد بر مبنای فرآیند ساخت</h3>
        <p>با تست نمونه خمش و ثبت جدول K-Factor اختصاصی پرس‌بریک کارخانه، انتقال دیتوم به سطوح ماشین‌کاری‌شده قابل دسترس و تنظیم زنجیره تلرانسی، ضایعات خط به صفر رسید.</p>
      </div>
    </div>
  </div>
</section>

<section class="md-tr-sec">
  <div class="md-container">
    <div class="md-tr-sec-head">
      <div>
        <span class="md-tr-kicker mono" dir="ltr">4-STAGE TRAINING EXECUTION</span>
        <h2 class="md-tr-sec-title">فرآیند سیستماتیک ۴ مرحله‌ای اجرای آموزش درون‌سازمانی</h2>
      </div>
    </div>
    <div class="md-tr-process-grid" style="margin-bottom:44px;">
      <div class="md-tr-process-step">
        <span class="md-tr-step-num">STAGE // 01</span>
        <h3>ممیزی سطح فنی و خط تولید</h3>
        <p>بررسی نقشه‌های فعلی شرکت، مصاحبه با پرسنل و شناسایی گلوگاه‌های تکراری ساخت و کنترل کیفیت.</p>
      </div>
      <div class="md-tr-process-step">
        <span class="md-tr-step-num">STAGE // 02</span>
        <h3>تدوین سرفصل اختصاصی کارخانه</h3>
        <p>طراحی کارگاه عملی دقیقاً منطبق بر ماشین‌آلات موجود (CNC، پرس‌بریک، جوشکاری) و تحت NDA.</p>
      </div>
      <div class="md-tr-process-step">
        <span class="md-tr-step-num">STAGE // 03</span>
        <h3>اجرای کارگاه عملی در محل کارخانه</h3>
        <p>برگزاری جلسات تعاملی هماهنگ با شیفت‌های کاری خط تولید همراه با تمرین مستقیم روی پروژه‌های شرکت.</p>
      </div>
      <div class="md-tr-process-step">
        <span class="md-tr-step-num">STAGE // 04</span>
        <h3>تدوین آیین‌نامه SOP و پشتیبانی</h3>
        <p>تحویل کتابچه استاندارد CAD Manual شرکت، چک‌لیست‌های QC و ۳ ماه پشتیبانی ممیزی نقشه‌ها.</p>
      </div>
    </div>

    <div class="md-tr-sec-head">
      <div>
        <span class="md-tr-kicker mono" dir="ltr">TANGIBLE DELIVERABLES &amp; MANAGER FAQ</span>
        <h2 class="md-tr-sec-title">دستاوردهای ملموس دوره و پاسخ به دغدغه‌های مدیران کارخانجات</h2>
      </div>
    </div>
    <div class="md-tr-split-2">
      <div class="md-tr-checklist-grid" style="grid-template-columns:1fr;">
        <div class="md-tr-checklist-item">
          <span class="md-tr-checklist-badge">01</span>
          <div><strong>کتابچه استاندارد نقشه‌کشی اختصاصی شرکت (CAD Manual):</strong> شامل Title Block استاندارد، کدگذاری و جدول خمش کالیبره‌شده کارگاه.</div>
        </div>
        <div class="md-tr-checklist-item">
          <span class="md-tr-checklist-badge">02</span>
          <div><strong>چک‌لیست‌های صحه‌گذاری نقشه قبل از ارسال به کارگاه:</strong> جلوگیری از ارسال نقشه‌های مبهم یا غیرقابل ساخت به سالن تولید.</div>
        </div>
        <div class="md-tr-checklist-item">
          <span class="md-tr-checklist-badge">03</span>
          <div><strong>استقلال فنی و ۳ ماه پشتیبانی مستمر:</strong> بازبینی دوره‌ای نقشه‌های جدید تیم فنی پس از اتمام دوره.</div>
        </div>
      </div>

      <div class="md-tr-accordion" data-md-accordion>
        <div class="md-tr-acc-item is-open">
          <button type="button" class="md-tr-acc-btn"><span>نحوه هماهنگی ساعات کلاس با شیفت‌های کاری خط تولید چگونه است؟</span><span class="md-tr-acc-icon">−</span></button>
          <div class="md-tr-acc-panel">ساعات برگزاری با هماهنگی کامل مدیریت کارخانه تنظیم می‌شود؛ امکان برگزاری در انتهای شیفت، پنج‌شنبه‌ها یا به‌صورت فشرده دو روز در هفته بدون اختلال در تولید وجود دارد.</div>
        </div>
        <div class="md-tr-acc-item">
          <button type="button" class="md-tr-acc-btn"><span>آیا فایل‌ها و نقشه‌های کارخانه تحت قرارداد محرمانگی (NDA) بررسی می‌شوند؟</span><span class="md-tr-acc-icon">+</span></button>
          <div class="md-tr-acc-panel">بله. پیش از دریافت هرگونه نقشه، قرارداد رسمی NDA امضا می‌شود و تمام فایل‌ها صرفاً روی سیستم‌های کارفرما بررسی شده و هیچ داده‌ای از کارخانه خارج نمی‌شود.</div>
        </div>
        <div class="md-tr-acc-item">
          <button type="button" class="md-tr-acc-btn"><span>پیش‌نیاز سطح علمی و نرم‌افزاری پرسنل چیست؟</span><span class="md-tr-acc-icon">+</span></button>
          <div class="md-tr-acc-panel">دوره‌ها ماژولار هستند؛ سرفصل تکنسین‌های ساخت بر نقشه‌خوانی و تلرانس متمرکز است و سرفصل مهندسان طراح بر مدل‌سازی DFMA و شبیه‌سازی FEA تنظیم می‌شود.</div>
        </div>
        <div class="md-tr-acc-item">
          <button type="button" class="md-tr-acc-btn"><span>نحوه پشتیبانی ۳ ماهه پس از اتمام کارگاه چگونه است؟</span><span class="md-tr-acc-icon">+</span></button>
          <div class="md-tr-acc-panel">یک کانال ارتباطی مستقیم و جلسات بازبینی دوره‌ای به مدت ۳ ماه برقرار است تا نقشه‌های جدید تیم ممیزی و استانداردها در سازمان نهادینه شوند.</div>
        </div>
      </div>
    </div>
  </div>
</section>
<?php endwhile;
echo do_shortcode( '[md_rfq_desk]' );
get_footer();
