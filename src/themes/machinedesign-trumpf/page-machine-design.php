<?php
/** Template Name: TRUMPF Pillar 1 — Machine Design & DFMA */
defined( 'ABSPATH' ) || exit;
get_header();
while ( have_posts() ) : the_post();
?>
<section class="md-tr-sec" style="padding-bottom:48px;border-bottom:1px solid var(--tr-line);">
  <div class="md-container">
    <span class="md-tr-kicker mono" dir="ltr">SERVICE PILLAR 01 // MACHINE DESIGN &amp; DFMA</span>
    <h1 class="md-tr-hero-title" style="text-align:right;margin:0 0 18px;max-width:none;"><?php the_title(); ?></h1>
    <?php if ( has_excerpt() ) : ?><p class="md-tr-hero-lead" style="text-align:right;margin:0 0 28px;"><?php echo esc_html( get_the_excerpt() ); ?></p><?php endif; ?>
    <div style="display:flex;gap:14px;flex-wrap:wrap;">
      <a href="#rfq-desk" class="md-tr-btn md-tr-btn-primary"><span>درخواست برآورد هزینه طراحی ماشین</span><span class="md-tr-arrow">←</span></a>
      <a href="#workflow-stages" class="md-tr-btn md-tr-btn-outline">مراحل ۴ گانه طراحی تا تحویل</a>
    </div>
  </div>
</section>

<section class="md-tr-sec md-tr-sec-mist" id="machinery-types">
  <div class="md-container">
    <div class="md-tr-sec-head">
      <div>
        <span class="md-tr-kicker mono" dir="ltr">EQUIPMENT COVERAGE // 4 SPECIALIZED DOMAINS</span>
        <h2 class="md-tr-sec-title">دسته‌بندی تجهیزات و خطوط تولید تحت پوشش طراحی مهندسی</h2>
      </div>
    </div>
    <div class="md-tr-card-grid-4">
      <article class="md-tr-arch-card md-reveal">
        <span class="md-tr-step-num" dir="ltr">FOOD &amp; PACKAGING</span>
        <h3>ماشین‌آلات صنایع غذایی، دارویی و بسته‌بندی</h3>
        <p>طراحی دستگاه‌های پرکن مایعات و پودر، توزین‌های مولتی‌هد، خطوط بسته‌بندی پیوسته، تری‌سیلر و شرینک پک با متریال استنلس استیل 304 و 316 و انطباق با استانداردهای CIP/SIP.</p>
      </article>
      <article class="md-tr-arch-card md-reveal">
        <span class="md-tr-step-num" dir="ltr">MATERIAL HANDLING</span>
        <h3>سیستم‌های کانوایر و انتقال مواد پیوسته</h3>
        <p>طراحی مهندسی بلت کانوایر تخت و آجدار، رولر کانوایرهای ثقلی و زنجیری، کانوایرهای مدولار پلاستیکی، اسکرو و باکت الواتورهای صنعتی با محاسبات دقیق کشش نوار و گشتاور.</p>
      </article>
      <article class="md-tr-arch-card md-reveal">
        <span class="md-tr-step-num" dir="ltr">AUTOMATION &amp; MECHANISMS</span>
        <h3>مکانیزم‌های اختصاصی، فیدرها و ایستگاه‌های مونتاژ</h3>
        <p>سنتز مکانیزم‌های بادامکی، مفاصل ۴ میله‌ای، سیستم‌های Pick &amp; Place پنوماتیک و سروو، ایندکسرهای دوار و فیدرهای ارتعاشی با شبیه‌سازی SolidWorks Motion.</p>
      </article>
      <article class="md-tr-arch-card md-reveal">
        <span class="md-tr-step-num" dir="ltr">REVERSE ENGINEERING</span>
        <h3>مهندسی معکوس و بومی‌سازی ماشین‌آلات وارداتی</h3>
        <p>اسکن سه‌بعدی و اندازه‌برداری CMM، آنالیز آلیاژها، بازسازی مدل CAD و انطباق قطعات با زنجیره تأمین بازار آهن و بیرینگ‌های استاندارد ایران.</p>
      </article>
    </div>
  </div>
</section>

<section class="md-tr-sec" id="dfma-philosophy">
  <div class="md-container md-tr-split-2" style="align-items:center;">
    <div>
      <span class="md-tr-kicker mono" dir="ltr">SOLIDWORKS &amp; ANSYS CERTIFIED // DFMA METHODOLOGY</span>
      <h2 class="md-tr-sec-title" style="margin-bottom:16px;">رویکرد DFMA؛ تفاوت یک نقشه کاغذی با ماشینی که در خط می‌درخشد</h2>
      <p style="font-size:0.98rem;line-height:1.9;color:var(--tr-ink2);margin-bottom:20px;">
        بسیاری از طرح‌های مهندسی بر روی مانیتور بی‌نقص به نظر می‌رسند، اما در کارگاه تراشکاری به دلیل هزینه سرسام‌آور یا عدم امکان ماشین‌کاری به بن‌بست می‌خورند. ما قطعات را طوری طراحی می‌کنیم که با حداقل ستاپ CNC و کمترین دورریز ورق ساخته شوند.
      </p>
      <div class="md-tr-checklist-grid" style="grid-template-columns:1fr;">
        <div class="md-tr-checklist-item">
          <span class="md-tr-checklist-badge">01</span>
          <div><strong>انتخاب متریال و استاندارد قطعات در دسترس بازار ایران:</strong> استفاده از مقاطع استاندارد لوله، پروفیل‌های ST37/ST52، آلیاژهای Mo40/VCN و بیرینگ‌های SKF/FAG.</div>
        </div>
        <div class="md-tr-checklist-item">
          <span class="md-tr-checklist-badge">02</span>
          <div><strong>کاهش ۳۰٪ هزینه‌های ساخت:</strong> جایگزینی قطعات جوشکاری‌شده صلب به جای بلوک‌های حجیم ماشین‌کاری و استفاده حداکثری از برش لیزر CNC.</div>
        </div>
        <div class="md-tr-checklist-item">
          <span class="md-tr-checklist-badge">03</span>
          <div><strong>تلرانس‌گذاری هندسی (GD&amp;T) طبق ISO 1101:</strong> تعیین دقیق هم‌محوری، تعامد و لنگی دورانی شفت‌ها برای افزایش ۵ برابری عمر یاتاقان‌ها.</div>
        </div>
      </div>
    </div>
    <div style="border:1px solid var(--tr-line);background:var(--tr-mist);padding:14px;">
      <img src="<?php echo esc_url( home_url( '/wp-content/uploads/2026/07/pillar1-machine-design-case.png' ) ); ?>" alt="طراحی ماشین‌آلات صنعتی و سیستم‌های DFMA" style="width:100%;height:auto;display:block;" loading="lazy" />
    </div>
  </div>
</section>

<section class="md-tr-sec md-tr-sec-mist" id="workflow-stages">
  <div class="md-container">
    <div class="md-tr-sec-head">
      <div>
        <span class="md-tr-kicker mono" dir="ltr">SYSTEMATIC DESIGN WORKFLOW // 4 STAGES</span>
        <h2 class="md-tr-sec-title">فرآیند سیستماتیک طراحی ماشین‌آلات از ایده تا راه‌اندازی کارخانه</h2>
      </div>
    </div>
    <div class="md-tr-process-grid">
      <div class="md-tr-process-step">
        <span class="md-tr-step-num">STAGE // 01</span>
        <h3>دریافت URS و محاسبات تئوری</h3>
        <p>تدوین مشخصات الزامی ماشین (URS)، تعیین ظرفیت خط و محاسبات سینماتیکی، توان موتور و گشتاور گیربکس‌ها.</p>
      </div>
      <div class="md-tr-process-step">
        <span class="md-tr-step-num">STAGE // 02</span>
        <h3>مدل‌سازی سه‌بعدی جامع CAD</h3>
        <p>طراحی تمام اجزا در SolidWorks و شبیه‌سازی حرکت (Motion Study) جهت کشف و رفع تداخلات ابعادی مکانیزم‌ها.</p>
      </div>
      <div class="md-tr-process-step">
        <span class="md-tr-step-num">STAGE // 03</span>
        <h3>شبیه‌سازی المان محدود (ANSYS FEA)</h3>
        <p>تحلیل تنش استاتیکی و دینامیکی شاسی، بررسی فرکانس طبیعی جهت جلوگیری از تشدید (Resonance) و بهینه‌سازی ایمنی.</p>
      </div>
      <div class="md-tr-process-step">
        <span class="md-tr-step-num">STAGE // 04</span>
        <h3>پکیج نقشه‌های کارگاهی و نظارت ساخت</h3>
        <p>تدوین نقشه‌های دو‌بعدی GD&amp;T، پارت‌لیست BOM خریدنی‌ها، فرآیندبرگه ساخت (OPC) و همراهی کارگاهی تا تست FAT.</p>
      </div>
    </div>
  </div>
</section>

<section class="md-tr-sec" id="deliverables">
  <div class="md-container">
    <div class="md-tr-sec-head">
      <div>
        <span class="md-tr-kicker mono" dir="ltr">CLIENT DELIVERABLES PACKAGE</span>
        <h2 class="md-tr-sec-title">پکیج نهایی اسناد مهندسی که به کارفرما تحویل داده می‌شود</h2>
      </div>
    </div>
    <div class="md-tr-card-grid-3">
      <div class="md-tr-arch-card">
        <span class="md-tr-step-num" dir="ltr">01 // CAD SOURCE</span>
        <h3>مدل سه‌بعدی کامل Native &amp; Neutral</h3>
        <p>فایل کامل سورس در SolidWorks به همراه خروجی‌های خنثی استاندارد STEP، IGES و Parasolid برای انتقال مستقیم به CAM ماشین‌کاری.</p>
      </div>
      <div class="md-tr-arch-card">
        <span class="md-tr-step-num" dir="ltr">02 // 2D GD&amp;T</span>
        <h3>آلبوم نقشه‌های دو‌بعدی ساخت GD&amp;T</h3>
        <p>دفترچه نقشه‌های اجرایی در فرمت‌های PDF و DWG شامل نقشه‌های تک‌تک قطعات ماشین‌کاری، مونتاژی و جوشکاری با جدول تلرانس‌ها.</p>
      </div>
      <div class="md-tr-arch-card">
        <span class="md-tr-step-num" dir="ltr">03 // BOM LIST</span>
        <h3>فهرست کامل قطعات و خریدنی‌ها (BOM)</h3>
        <p>فایل اکسل جامع پارت‌لیست با کدهای استاندارد تجاری قطعات، سایز پیچ و مهره‌ها، مدل بیرینگ‌ها، سیل‌ها و تجهیزات پنوماتیک.</p>
      </div>
    </div>
  </div>
</section>
<?php endwhile;
echo do_shortcode( '[md_delta_kinematics_lab][md_rfq_desk]' );
get_footer();
