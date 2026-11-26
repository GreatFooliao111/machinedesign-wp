<?php
/** Template Name: TRUMPF Pillar 3 — R&D & Rapid Prototyping */
defined( 'ABSPATH' ) || exit;
get_header();
while ( have_posts() ) : the_post();
?>
<section class="md-tr-sec" style="padding-bottom:48px;border-bottom:1px solid var(--tr-line);">
  <div class="md-container">
    <span class="md-tr-kicker mono" dir="ltr">SERVICE PILLAR 03 // R&amp;D, DFMEA &amp; PROTOTYPING</span>
    <h1 class="md-tr-hero-title" style="text-align:right;margin:0 0 18px;max-width:none;"><?php the_title(); ?></h1>
    <?php if ( has_excerpt() ) : ?><p class="md-tr-hero-lead" style="text-align:right;margin:0 0 28px;"><?php echo esc_html( get_the_excerpt() ); ?></p><?php endif; ?>
    <div style="display:flex;gap:14px;flex-wrap:wrap;">
      <a href="#rfq-desk" class="md-tr-btn md-tr-btn-primary"><span>درخواست مشاوره پروژه R&amp;D</span><span class="md-tr-arrow">←</span></a>
      <a href="#workflow-stages" class="md-tr-btn md-tr-btn-outline">مراحل ۴ گانه از ایده تا پروتوتایپ</a>
    </div>
  </div>
</section>

<section class="md-tr-sec md-tr-sec-mist" id="rd-scopes">
  <div class="md-container">
    <div class="md-tr-sec-head">
      <div>
        <span class="md-tr-kicker mono" dir="ltr">R&amp;D CAPABILITIES // AIAG-VDA DFMEA</span>
        <h2 class="md-tr-sec-title">حوزه‌های تخصصی خدمات تحقیق و توسعه و نمونه‌سازی صنعتی</h2>
      </div>
    </div>
    <div class="md-tr-card-grid-4">
      <article class="md-tr-arch-card md-reveal">
        <span class="md-tr-step-num" dir="ltr">FUNCTIONAL PROTOTYPING</span>
        <h3>ساخت نمونه اولیه عملکردی و تست مکانیزم‌ها (POC)</h3>
        <p>ساخت فیزیکی مقیاس ۱:۱ با ترکیبی از CNC دقیق، ورق‌کاری لیزری و پرینت سه‌بعدی مهندسی جهت تست حرکتی مفاصل و مونتاژپذیری.</p>
      </article>
      <article class="md-tr-arch-card md-reveal">
        <span class="md-tr-step-num" dir="ltr">DFMEA RISK ANALYSIS</span>
        <h3>تحلیل حالات و اثرات شکست طراحی بر اساس DFMEA</h3>
        <p>شناسایی پیش‌دستانه نقاط ضعف (سایش، خستگی، لقی)، محاسبه نمره اولویت ریسک (RPN) طبق استاندارد AIAG &amp; VDA قبل از قطعه‌سازی.</p>
      </article>
      <article class="md-tr-arch-card md-reveal">
        <span class="md-tr-step-num" dir="ltr">FEASIBILITY STUDIES</span>
        <h3>امکان‌سنجی فنی، مالی و فرآیندی خطوط تولید</h3>
        <p>محاسبه هزینه‌های سرمایه‌گذاری (CAPEX) و جاری (OPEX)، برآورد نرخ تولید واقعی، مقایسه ساخت داخل با واردات و زمان بازگشت سرمایه (ROI).</p>
      </article>
      <article class="md-tr-arch-card md-reveal">
        <span class="md-tr-step-num" dir="ltr">CONCEPT REFINEMENT</span>
        <h3>بهینه‌سازی کانسپت و مهندسی مجدد طرح‌های نوآورانه</h3>
        <p>تبدیل ایده‌های اولیه یا اختراعات به پکیج صنعتی مدل‌سازی‌شده در SolidWorks آماده ثبت پتنت و تولید انبوه.</p>
      </article>
    </div>
  </div>
</section>

<section class="md-tr-sec" id="rd-methodology">
  <div class="md-container md-tr-split-2" style="align-items:center;">
    <div>
      <span class="md-tr-kicker mono" dir="ltr">AIAG-VDA &amp; ISO 12100 COMPLIANT</span>
      <h2 class="md-tr-sec-title" style="margin-bottom:16px;">چرا ساخت نمونه اولیه (پروتوتایپ) ارزان‌ترین راه برای پیشگیری از شکست است؟</h2>
      <p style="font-size:0.98rem;line-height:1.9;color:var(--tr-ink2);margin-bottom:20px;">
        سرمایه‌گذاری میلیاردی روی ساخت قالب‌های فلزی یا ماشین‌کاری مستقیم بدون پروتوتایپ، ریسک بالایی دارد. با ساخت یک نمونه اولیه عملکردی در کارگاه، رفتار واقعی مکانیزم تحت بار سنجیده شده و تمام نقاط شکست پیش از تولید انبوه اصلاح می‌شوند.
      </p>
      <div class="md-tr-checklist-grid" style="grid-template-columns:1fr;">
        <div class="md-tr-checklist-item">
          <span class="md-tr-checklist-badge">01</span>
          <div><strong>کشف گره‌های حرکتی و خطاهای مونتاژ در مقیاس واقعی ۱:۱:</strong> مشاهده عینی رفتار مفاصل و راحتی مونتاژ در دست اپراتور کارگاهی.</div>
        </div>
        <div class="md-tr-checklist-item">
          <span class="md-tr-checklist-badge">02</span>
          <div><strong>کاهش ۸۵ تا ۹۰ درصدی هزینه تغییرات با DFMEA:</strong> اصلاح ابعاد در فاز پروتوتایپ کسری از هزینه تغییر قالب فولادی پس از عملیات حرارتی است.</div>
        </div>
        <div class="md-tr-checklist-item">
          <span class="md-tr-checklist-badge">03</span>
          <div><strong>بهینه‌سازی فرم قطعات برای تجهیزات مرسوم ایران:</strong> انطباق طرح با توانمندی کارگاه‌های CNC و برش لیزر داخلی.</div>
        </div>
      </div>
    </div>
    <div style="border:1px solid var(--tr-line);background:var(--tr-mist);padding:14px;">
      <img src="<?php echo esc_url( home_url( '/wp-content/uploads/2026/07/pillar3-rd-3dprinter.webp' ) ); ?>" alt="نمونه‌سازی سریع و تحقیق و توسعه صنعتی" style="width:100%;height:auto;display:block;" loading="lazy" />
    </div>
  </div>
</section>

<section class="md-tr-sec md-tr-sec-mist" id="workflow-stages">
  <div class="md-container">
    <div class="md-tr-sec-head">
      <div>
        <span class="md-tr-kicker mono" dir="ltr">PROTOTYPING WORKFLOW // 4 STAGES</span>
        <h2 class="md-tr-sec-title">فرآیند ۴ مرحله‌ای از ایده اولیه تا ساخت نمونه فیزیکی کارگاهی</h2>
      </div>
    </div>
    <div class="md-tr-process-grid">
      <div class="md-tr-process-step">
        <span class="md-tr-step-num">STAGE // 01</span>
        <h3>تدوین URS و امکان‌سنجی اولیه</h3>
        <p>تدوین سند مشخصات فنی (URS)، محاسبات مقدماتی توان و گشتاور و سنجش قابلیت ساخت در داخل کشور.</p>
      </div>
      <div class="md-tr-process-step">
        <span class="md-tr-step-num">STAGE // 02</span>
        <h3>مدل‌سازی سه‌بعدی CAD و تحلیل DFMEA</h3>
        <p>طراحی جامع اجزا در SolidWorks، شبیه‌سازی تنش در ANSYS و استخراج جدول تحلیل حالات شکست (DFMEA).</p>
      </div>
      <div class="md-tr-process-step">
        <span class="md-tr-step-num">STAGE // 03</span>
        <h3>ساخت سریع قطعات و مونتاژ پروتوتایپ</h3>
        <p>قطعه‌سازی با فرآیندهای CNC، ورق‌کاری دقیق و چاپ سه‌بعدی مهندسی و ارزیابی انطباقات و لقی‌ها در کارگاه.</p>
      </div>
      <div class="md-tr-process-step">
        <span class="md-tr-step-num">STAGE // 04</span>
        <h3>تست عملکردی و بسته تولید انبوه</h3>
        <p>راه‌اندازی میدانی، اعمال بارگذاری شبیه‌سازی‌شده و ارائه گزارش کامل تست به همراه بسته نقشه‌های تولید صنعتی.</p>
      </div>
    </div>
  </div>
</section>

<section class="md-tr-sec" id="deliverables">
  <div class="md-container">
    <div class="md-tr-sec-head">
      <div>
        <span class="md-tr-kicker mono" dir="ltr">R&amp;D DELIVERABLES PACKAGE</span>
        <h2 class="md-tr-sec-title">پکیج نهایی اسناد مهندسی و نمونه فیزیکی تحویلی به کارفرما</h2>
      </div>
    </div>
    <div class="md-tr-card-grid-3">
      <div class="md-tr-arch-card">
        <span class="md-tr-step-num" dir="ltr">01 // PROTOTYPE UNIT</span>
        <h3>نمونه اولیه فیزیکی و تست‌شده</h3>
        <p>تحویل فیزیکی دستگاه یا مکانیزم نمونه در مقیاس عملکردی به همراه ویدیوهای مستند از تست کارگاهی و کالیبراسیون تلرانس‌ها.</p>
      </div>
      <div class="md-tr-arch-card">
        <span class="md-tr-step-num" dir="ltr">02 // DFMEA MATRIX</span>
        <h3>گزارش امکان‌سنجی و ماتریس تحلیل DFMEA</h3>
        <p>دفترچه مکتوب شامل محاسبات سینماتیکی، نمودارهای شبیه‌سازی FEA، جداول ارزیابی ریسک RPN و توجیه اقتصادی طرح.</p>
      </div>
      <div class="md-tr-arch-card">
        <span class="md-tr-step-num" dir="ltr">03 // PATENT &amp; GD&amp;T</span>
        <h3>پکیج نقشه‌های کارگاهی GD&amp;T و اسناد پتنت</h3>
        <p>فایل‌های سورس سه‌بعدی و دوبعدی با استاندارد ISO 1101، فایل‌های خنثی (STEP/IGES) و نقشه فرمت ثبت اختراع و مالکیت فکری.</p>
      </div>
    </div>
  </div>
</section>
<?php endwhile;
echo do_shortcode( '[md_delta_kinematics_lab][md_rfq_desk]' );
get_footer();
