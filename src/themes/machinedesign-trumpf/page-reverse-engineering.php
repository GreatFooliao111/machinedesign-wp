<?php
/** Template Name: TRUMPF Sub-Pillar — Reverse Engineering & Localization */
defined( 'ABSPATH' ) || exit;
get_header();
while ( have_posts() ) : the_post();
?>
<section class="md-tr-sec" style="padding-bottom:48px;border-bottom:1px solid var(--tr-line);">
  <div class="md-container">
    <span class="md-tr-kicker mono" dir="ltr">SPECIALIZED ENGINEERING // 3D METROLOGY &amp; LOCALIZATION</span>
    <h1 class="md-tr-hero-title" style="text-align:right;margin:0 0 18px;max-width:none;"><?php the_title(); ?></h1>
    <?php if ( has_excerpt() ) : ?><p class="md-tr-hero-lead" style="text-align:right;margin:0 0 28px;"><?php echo esc_html( get_the_excerpt() ); ?></p><?php endif; ?>
    <div style="display:flex;gap:14px;flex-wrap:wrap;">
      <a href="#rfq-desk" class="md-tr-btn md-tr-btn-primary"><span>ثبت استعلام مهندسی معکوس</span><span class="md-tr-arrow">←</span></a>
      <a href="#re-workflow" class="md-tr-btn md-tr-btn-outline">مراحل ۴ گانه بومی‌سازی</a>
    </div>
  </div>
</section>

<section class="md-tr-sec md-tr-sec-mist">
  <div class="md-container">
    <div class="md-tr-sec-head">
      <div>
        <span class="md-tr-kicker mono" dir="ltr">3 CORE PILLARS // ZERO-ERROR LOCALIZATION</span>
        <h2 class="md-tr-sec-title">۳ رکن مهندسی برای بومی‌سازی بدون خطا</h2>
      </div>
    </div>
    <div class="md-tr-card-grid-3">
      <div class="md-tr-arch-card">
        <span class="md-tr-step-num" dir="ltr">01 // 0.02mm SCAN</span>
        <h3>اسکن سه‌بعدی و ثبت ابرنقاط میکرونی</h3>
        <p>استفاده از اسکنرهای اپتیکال پیشرفته با دقت ۰.۰۲ میلی‌متر جهت داده‌برداری از سطوح پیچیده منحنی، تیغه‌ها، قالب‌ها و قطعات دفرمه‌شده صنعتی و تبدیل ابرنقاط به سطوح NURBS.</p>
      </div>
      <div class="md-tr-arch-card">
        <span class="md-tr-step-num" dir="ltr">02 // METALLURGY</span>
        <h3>آنالیز متالورژی و مهندسی مواد</h3>
        <p>شناسایی ترکیب شیمیایی دقیق فولاد، آلیاژهای پایه مس و آلومینیوم با آزمون کوانتومتری و تعیین عملیات حرارتی معادل در استانداردهای DIN و AISI.</p>
      </div>
      <div class="md-tr-arch-card">
        <span class="md-tr-step-num" dir="ltr">03 // DFMA CAD</span>
        <h3>مدل‌سازی پارامتریک و تلرانس ساخت (DFMA)</h3>
        <p>تولید مدل CAD کاملاً ویرایش‌پذیر در SolidWorks به همراه نقشه‌های اجرایی دو‌بعدی دارای تلرانس‌های هندسی GD&amp;T جهت ماشین‌کاری بدون ابهام CNC.</p>
      </div>
    </div>
  </div>
</section>

<section class="md-tr-sec">
  <div class="md-container">
    <div class="md-tr-sec-head">
      <div>
        <span class="md-tr-kicker mono" dir="ltr">ECONOMIC BENCHMARK // ROI ANALYSIS</span>
        <h2 class="md-tr-sec-title">مقایسه واردات در شرایط تحریم در برابر بومی‌سازی مهندسی</h2>
      </div>
    </div>
    <div class="md-tr-table-wrap">
      <table class="md-tr-table">
        <thead>
          <tr>
            <th>شاخص ارزیابی</th>
            <th>واردات خارجی در شرایط تحریم</th>
            <th>بومی‌سازی در ماشین دیزاین</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td><strong>زمان دسترسی به قطعه</strong></td>
            <td>۶۰ الی ۱۲۰ روز کاری (ریسک توقف خط)</td>
            <td><strong>۷ الی ۲۰ روز کاری</strong></td>
          </tr>
          <tr>
            <td><strong>هزینه تمام‌شده (ارز / ریال)</strong></td>
            <td>هزینه سرسام‌آور ارزی + کارمزد صرافی و گمرک</td>
            <td><strong>صرفه‌جویی ۴۰ تا ۶۵ درصدی ریالی</strong></td>
          </tr>
          <tr>
            <td><strong>مالکیت نقشه‌ها و کدهای ساخت</strong></td>
            <td>فاقد هرگونه نقشه و وابستگی دائم به تامین‌کننده</td>
            <td><strong>تحویل پکیج کامل فایل‌های CAD و ساخت</strong></td>
          </tr>
          <tr>
            <td><strong>خدمات پس از فروش و اصلاح</strong></td>
            <td>عدم پذیرش مرجوعی در صورت عدم تطابق</td>
            <td><strong>گارانتی عملکرد و تست عملیاتی در کارخانه</strong></td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
</section>

<section class="md-tr-sec md-tr-sec-mist" id="re-workflow">
  <div class="md-container">
    <div class="md-tr-sec-head">
      <div>
        <span class="md-tr-kicker mono" dir="ltr">4-STAGE LOCALIZATION WORKFLOW</span>
        <h2 class="md-tr-sec-title">فرآیند سیستماتیک ۴ مرحله‌ای از قطعه تا تولید</h2>
      </div>
    </div>
    <div class="md-tr-process-grid">
      <div class="md-tr-process-step">
        <span class="md-tr-step-num">STAGE // 01</span>
        <h3>تحویل قطعه و اسکن اپتیکال</h3>
        <p>ارزیابی سایش، داده‌برداری نوری سه‌بعدی و استخراج ابرنقاط با میکرون‌متر و CMM در کارگاه مشهد.</p>
      </div>
      <div class="md-tr-process-step">
        <span class="md-tr-step-num">STAGE // 02</span>
        <h3>کوانتومتری و مهندسی مواد</h3>
        <p>ارسال پلیسه نمونه به آزمایشگاه متالورژی، تعیین آنالیز عناصر آلیاژی و دستورالعمل عملیات حرارتی.</p>
      </div>
      <div class="md-tr-process-step">
        <span class="md-tr-step-num">STAGE // 03</span>
        <h3>مدل‌سازی و تلرانس‌گذاری</h3>
        <p>بازسازی پارامتریک در SolidWorks، اعمال اصلاحات سایش، تلرانس‌های GD&amp;T و خروجی نقشه‌های ساخت.</p>
      </div>
      <div class="md-tr-process-step">
        <span class="md-tr-step-num">STAGE // 04</span>
        <h3>ساخت نمونه اولیه و تست</h3>
        <p>ماشین‌کاری CNC نمونه، تست تجربی روی خط تولید کارخانه، صحه‌گذاری و صدور مجوز تولید انبوه.</p>
      </div>
    </div>
  </div>
</section>
<?php endwhile;
echo do_shortcode( '[md_rfq_desk]' );
get_footer();
