<?php
/**
 * Template Name: Reverse Engineering & Localization (مهندسی معکوس و بومی‌سازی قطعات)
 * Template Post Type: page
 *
 * Description: Dedicated Specialized Page for 3D Optical Scanning, Metallurgy Analysis & Industrial Localization
 * Follows Cyber-Mechanical Dark Design System + Ponytail Doctrine + Strict Symmetry Rules
 *
 * @package HelloElementor
 */

defined( 'ABSPATH' ) || exit;

get_header();

$rev_phone = function_exists('md_get_contact') ? md_get_contact('phone', '') : '';
$rev_mobile = function_exists('md_get_contact') ? md_get_contact('mobile', '') : '';
$rev_display = $rev_phone ?: ($rev_mobile ?: '۰۵۱-XXXXXXXX');
$rev_clean = md_tel_uri( $rev_display );
?>

<!-- ========================================================================
     1. REVERSE ENGINEERING HERO BANNER
     ======================================================================== -->
<section class="page-hero-banner pillar-hero-wrap" aria-label="هیدر مهندسی معکوس و بومی‌سازی قطعات">
  <div class="container">
    <div class="pillar-hero-grid">

      <!-- Right Column: Text & Conversion CTAs -->
      <div class="pillar-hero-content">
        <!-- Breadcrumb Navigation -->
        <nav class="page-hero-breadcrumb" aria-label="مسیر راهنما">
          <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="breadcrumb-item">صفحه اصلی</a>
          <span class="breadcrumb-separator" aria-hidden="true">/</span>
          <a href="<?php echo esc_url( home_url( '/services/' ) ); ?>" class="breadcrumb-item">خدمات مهندسی</a>
          <span class="breadcrumb-separator" aria-hidden="true">/</span>
          <span class="breadcrumb-current" aria-current="page">مهندسی معکوس و بومی‌سازی</span>
        </nav>

        <!-- Corporate Sub-badge -->
        <div class="page-hero-badge">
          <span class="pulse-indicator" aria-hidden="true"></span>
          <span class="mono">SPECIALIZED SERVICE // REVERSE ENGINEERING &amp; LOCALIZATION</span>
        </div>

        <!-- Main Page Title -->
        <h1 class="page-hero-title pillar-hero-title-split">
          <span class="title-line-1">مهندسی معکوس، اسکن اپتیکال سه‌بعدی</span>
          <span class="title-line-2 text-accent">و بومی‌سازی قطعات و ماشین‌آلات پیچیده صنعتی</span>
        </h1>

        <!-- Summary Lead Text -->
        <div class="page-hero-excerpt">
          تبدیل قطعات وارداتی مستهلک، مکانیزم‌های تحریمی و ماشین‌آلات فاقد مستندات به پکیج نقشه‌های کامل ساخت منطبق بر استاندارد ساخت و مونتاژ اقتصادی (DFMA) با اسکن لیزری و اپتیکال سه‌بعدی، آنالیز کوانتومتری متالورژی و تطابق ابعادی CMM.
        </div>

        <!-- Hero Action Buttons -->
        <div class="pillar-hero-actions">
          <a href="#rfq-section" class="btn btn-primary">
            <span>استعلام هزینه و زمان مهندسی معکوس</span>
            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
              <path d="M5 12h14M12 5l7 7-7 7"/>
            </svg>
          </a>
          <a href="#workflow-stages" class="btn btn-outline">
            <span>فرآیند ۴ مرحله‌ای بومی‌سازی</span>
          </a>
        </div>
      </div>

      <!-- Left Column: High-Precision HUD Schematic Visual Stage -->
      <div class="pillar-hero-visual-col md-hero-visual-col">
        <?php if ( function_exists( 'md_render_hero_3d_stage' ) ) { md_render_hero_3d_stage( 'reverse-engineering' ); } ?>
      </div>

    </div>
  </div>
</section>

<!-- ========================================================================
     2. KEY METRICS STRIP
     ======================================================================== -->
<section class="services-stats-strip pillar-stats-strip" aria-label="شاخص‌های دقت و عملکرد مهندسی معکوس">
  <div class="container">
    <div class="stats-strip-grid">
      <div class="stat-cell">
        <span class="stat-number mono text-accent">±۰.۰۲</span>
        <span class="stat-unit">میلی‌متر</span>
        <span class="stat-label">دقت اسکن نوری و اندازه‌گیری ابعادی CMM</span>
      </div>
      <div class="stat-cell">
        <span class="stat-number mono text-white">۱۰۰٪</span>
        <span class="stat-unit">کوانتومتری</span>
        <span class="stat-label">شناسایی دقیق آلیاژ و سختی‌سنجی متالورژی</span>
      </div>
      <div class="stat-cell">
        <span class="stat-number mono text-accent">۴۰-۶۵٪</span>
        <span class="stat-unit">صرفه‌جویی</span>
        <span class="stat-label">کاهش هزینه‌های تامین در مقایسه با خرید خارجی</span>
      </div>
      <div class="stat-cell">
        <span class="stat-number mono text-white">۳-۷</span>
        <span class="stat-unit">روز کاری</span>
        <span class="stat-label">زمان تحویل پکیج مدل‌سازی و نقشه‌های ساخت</span>
      </div>
    </div>
  </div>
</section>

<!-- ========================================================================
     3. 3 PILLARS OF SUCCESSFUL LOCALIZATION
     ======================================================================== -->
<section class="machinery-categories-section" aria-label="ارکان فنی بومی‌سازی قطعات در ماشین دیزاین">
  <div class="container">
    <div class="section-header-centered">
      <h2 class="section-title">۳ رکن مهندسی برای بومی‌سازی بدون خطا</h2>
      <p class="section-desc">
        تفاوت مهندسی معکوس آکادمیک با ساخت کارگاهی در درک عمیق از فرآیندهای ساخت، عملیات حرارتی و انطباقات هندسی است.
      </p>
    </div>

    <div class="machinery-categories-grid">
      <div class="machinery-card">
        <h3 class="machinery-card-title">اسکن سه‌بعدی و ثبت ابرنقاط میکرونی</h3>
        <p class="machinery-card-text">
          استفاده از اسکنرهای اپتیکال پیشرفته با دقت ۰.۰۲ میلی‌متر جهت داده‌برداری از سطوح پیچیده منحنی، تیغه‌ها، قالب‌ها و قطعات دفرمه‌شده صنعتی.
        </p>
        <ul class="machinery-card-specs mono">
          <li>Optical Blue Light &amp; Laser Scan</li>
          <li>Point Cloud to NURBS Surfacing</li>
          <li>Wear &amp; Deformation Compensation</li>
        </ul>
      </div>

      <div class="machinery-card">
        <h3 class="machinery-card-title">آنالیز متالورژی و مهندسی مواد</h3>
        <p class="machinery-card-text">
          شناسایی ترکیب شیمیایی دقیق فولاد، آلیاژهای پایه مس و آلومینیوم با آزمون کوانتومتری و تعیین عملیات حرارتی معادل در استانداردهای DIN و AISI.
        </p>
        <ul class="machinery-card-specs mono">
          <li>Spectrometry &amp; Material Grade ID</li>
          <li>Case Hardening &amp; Nitriding Profiling</li>
          <li>Domestic Alloy Equivalents Mapping</li>
        </ul>
      </div>

      <div class="machinery-card">
        <h3 class="machinery-card-title">مدل‌سازی پارامتریک و تلرانس ساخت (DFMA)</h3>
        <p class="machinery-card-text">
          تولید مدل CAD کاملاً ویرایش‌پذیر در SolidWorks به همراه نقشه‌های اجرایی دو‌بعدی دارای تلرانس‌های هندسی GD&amp;T جهت ماشین‌کاری بدون ابهام CNC.
        </p>
        <ul class="machinery-card-specs mono">
          <li>Feature-Based SolidWorks CAD Tree</li>
          <li>ISO 1101 &amp; ISO 2768 Tolerancing</li>
          <li>Machining CAM Toolpath Ready</li>
        </ul>
      </div>
    </div>
  </div>
</section>

<!-- ========================================================================
     4. ECONOMIC COMPARISON TABLE
     ======================================================================== -->
<section class="pillar-dfma-section" aria-label="مقایسه اقتصادی واردات با بومی‌سازی">
  <div class="container">
    <div class="section-header-centered">
      <h2 class="section-title">مقایسه واردات در شرایط تحریم در برابر بومی‌سازی مهندسی</h2>
    </div>

    <div class="roi-table-wrap">
      <table class="roi-compare-table">
        <thead>
          <tr class="roi-head-row">
            <th>شاخص ارزیابی</th>
            <th class="roi-col-import">واردات خارجی در شرایط تحریم</th>
            <th class="roi-col-local">بومی‌سازی در ماشین دیزاین</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td class="roi-label">زمان دسترسی به قطعه</td>
            <td>۶۰ الی ۱۲۰ روز کاری (ریسک توقف خط)</td>
            <td class="roi-col-local">۷ الی ۲۰ روز کاری</td>
          </tr>
          <tr>
            <td class="roi-label">هزینه تمام‌شده (ارز / ریال)</td>
            <td>هزینه سرسام‌آور ارزی + کارمزد صرافی و گمرک</td>
            <td class="roi-col-local">صرفه‌جویی ۴۰ تا ۶۵ درصدی ریالی</td>
          </tr>
          <tr>
            <td class="roi-label">مالکیت نقشه‌ها و کدهای ساخت</td>
            <td>فاقد هرگونه نقشه و وابستگی دائم به تامین‌کننده</td>
            <td class="roi-col-local">تحویل پکیج کامل فایل‌های CAD و ساخت</td>
          </tr>
          <tr>
            <td class="roi-label">خدمات پس از فروش و اصلاح</td>
            <td>عدم پذیرش مرجوعی در صورت عدم تطابق</td>
            <td class="roi-col-local">گارانتی عملکرد و تست عملیاتی در کارخانه</td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
</section>

<!-- ========================================================================
     5. 4-STAGE SYSTEMATIC WORKFLOW
     ======================================================================== -->
<section class="pillar-workflow-section" id="workflow-stages" aria-label="فرآیند ۴ مرحله‌ای مهندسی معکوس">
  <div class="container">
    <div class="section-header-centered">
      <h2 class="section-title">فرآیند سیستماتیک ۴ مرحله‌ای از قطعه تا تولید</h2>
    </div>

    <div class="workflow-steps-grid">
      <div class="workflow-step-card">
        <h3 class="step-title">تحویل قطعه و اسکن اپتیکال</h3>
        <p class="step-desc">ارزیابی سایش، داده‌برداری نوری سه‌بعدی و استخراج ابرنقاط با میکرون‌متر و CMM در کارگاه مشهد.</p>
      </div>

      <div class="workflow-step-card">
        <h3 class="step-title">کوانتومتری و مهندسی مواد</h3>
        <p class="step-desc">ارسال پلیسه نمونه به آزمایشگاه متالورژی، تعیین آنالیز عناصر آلیاژی و دستورالعمل عملیات حرارتی.</p>
      </div>

      <div class="workflow-step-card">
        <h3 class="step-title">مدل‌سازی و تلرانس‌گذاری</h3>
        <p class="step-desc">بازسازی پارامتریک در SolidWorks، اعمال اصلاحات سایش، تلرانس‌های GD&amp;T و خروجی نقشه‌های ساخت.</p>
      </div>

      <div class="workflow-step-card">
        <h3 class="step-title">ساخت نمونه اولیه و تست</h3>
        <p class="step-desc">ماشین‌کاری CNC نمونه، تست تجربی روی خط تولید کارخانه، صحه‌گذاری و صدور مجوز تولید انبوه.</p>
      </div>
    </div>
  </div>
</section>

<!-- ========================================================================
     6. DUAL RFQ & TRUST SECTION (Symmetrical Baseline)
     ======================================================================== -->
<section class="pillar-rfq-dual-section" id="rfq-section" aria-label="استعلام و ارسال قطعه جهت مهندسی معکوس">
  <div class="container">
    <div class="rfq-dual-grid">

      <!-- Column 1: Trust & Contact Information -->
      <div class="rfq-incentive-panel">
        <div>
          <div class="rfq-trust-badge mono">
            <span class="rfq-led" aria-hidden="true"></span>
            <span>STRICT CONFIDENTIALITY // ISO 1101 VERIFIED</span>
          </div>

          <h3 class="rfq-incentive-title">
            مهندسی معکوس با تضمین عدم تداخل، تطابق آلیاژ و گارانتی عملکرد
          </h3>
          <p class="rfq-incentive-lead">
            پیش از ارسال قطعه یا اطلاعات، توافق‌نامه رسمی عدم افشا (NDA) ممهور صادر می‌گردد. تمامی حقوق مادی و معنوی نقشه‌ها متعلق به کارفرما خواهد بود.
          </p>

          <div class="rfq-incentive-points">
            <div class="rfq-incentive-item">
              <div class="rfq-incentive-icon">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg>
              </div>
              <div class="rfq-incentive-text">
                <h4>تحویل فایل‌های سه‌بعدی و نقشه‌های اجرایی ساخت</h4>
                <p>خروجی در فرمت‌های STEP, SLDPRT, SLDDRW, DXF به همراه دستورالعمل متریال و عملیات حرارتی.</p>
              </div>
            </div>

            <div class="rfq-incentive-item">
              <div class="rfq-incentive-icon">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg>
              </div>
              <div class="rfq-incentive-text">
                <h4>امکان تست و بررسی حضوری در کارگاه مشهد (برج سامان)</h4>
                <p>تجهیزات اندازه‌گیری ابعادی، تست انطباقات و تحویل فیزیکی قطعات بومی‌سازی‌شده.</p>
              </div>
            </div>
          </div>
        </div>

        <!-- Fast Track Phone Chip -->
        <div class="rfq-direct-consult-chip">
          <div class="consult-chip-text">
            <span class="consult-chip-label">نیاز به هماهنگی فوری جهت ارسال قطعه یا نقشه دارید؟</span>
            <span class="consult-chip-title">گفتگوی مستقیم با مهندس حسین وطن‌دوست</span>
          </div>
          <a href="tel:<?php echo esc_attr($rev_clean); ?>" class="consult-phone-btn mono" dir="ltr" title="تماس تلفنی مستقیم">
            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2">
              <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/>
            </svg>
            <span><?php echo esc_html($rev_display); ?></span>
          </a>
        </div>
      </div>

      <!-- Column 2: Streamlined Industrial Form Panel -->
      <div class="rfq-form-panel-custom">
        <div id="pillarRfqContainer">
          <div class="rfq-form-custom-header">
            <span class="rfq-form-tag mono">// REVERSE ENGINEERING INTAKE</span>
            <h3>ثبت استعلام مهندسی معکوس و ساخت قطعه</h3>
            <p>مشخصات اولیه قطعه را ثبت فرمایید؛ پیش‌نویس توافق‌نامه محرمانگی (NDA) و برآورد زمان‌بندی ظرف ۲۴ ساعت کاری ارسال می‌گردد.</p>
          </div>

          <div id="pillarRfqNotice" class="rfq-hud-notice" style="display:none;" role="alert"></div>

          <form id="pillarRfqForm" class="rfq-form-grid-inner" method="POST">
            <input type="hidden" name="action" value="machinedesign_rfq_submit">
            <input type="hidden" name="source_pillar" value="reverse-engineering">
            <input type="hidden" name="source_url" value="<?php echo esc_url( get_permalink() ); ?>">
            
            <div class="rfq-input-group">
              <label for="rfq-name">نام و نام خانوادگی / شرکت و کارخانه <span class="req-star">*</span></label>
              <input type="text" id="rfq-name" name="rfq_name" class="rfq-input-field" required placeholder="مثال: مهندس رضوانی - صنایع خودروسازی">
            </div>

            <div class="rfq-input-group">
              <label for="rfq-phone">شماره همراه مستقیم کارشناس <span class="req-star">*</span></label>
              <input type="tel" id="rfq-phone" name="rfq_phone" class="rfq-input-field" required placeholder="۰۹۱۲XXXXXXX" dir="ltr">
            </div>

            <div class="rfq-input-group rfq-field-full">
              <label for="rfq-service-type">نوع قطعه یا تجهیز مد نظر جهت مهندسی معکوس <span class="req-star">*</span></label>
              <select id="rfq-service-type" name="rfq_service_type" class="rfq-select-field" required>
                <option value="" disabled selected>لطفاً نوع قطعه را انتخاب فرمایید...</option>
                <option value="impeller-rotary">پروانه‌ها، روتورها و قطعات دوار پیچیده</option>
                <option value="gear-transmission">چرخ‌دنده‌ها، گیربکس‌های خاص و مکانیزم‌های انتقال قدرت</option>
                <option value="valve-hydraulic">شیرآلات، سیلندرهای هیدرولیک و پنوماتیک تحریمی</option>
                <option value="mold-forming-die">قالب‌ها، سنبه و ماتریس‌های فرمینگ و برش</option>
                <option value="machine-assembly">مجموعه کامل ماشین‌آلات بسته‌بندی یا خط تولید</option>
                <option value="other-custom">سایر قطعات صنعتی سفارشی</option>
              </select>
            </div>

            <div class="rfq-input-group rfq-field-full">
              <label for="rfq-details">توضیحات فنی، جنس فرضی، ابعاد و شرایط کاری قطعه</label>
              <textarea id="rfq-details" name="rfq_details" class="rfq-textarea-field" rows="3" placeholder="توضیحات درباره تعداد قطعه مورد نیاز، شرایط بارگذاری، دمای کاری و سابقه خرابی نمونه قبلی..."></textarea>
            </div>

            <button type="submit" id="pillarRfqSubmit" class="btn btn-primary rfq-submit-btn">
              <span>ارسال مشخصات و دریافت پیش‌نویس قرارداد NDA</span>
              <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
                <path d="M5 12h14M12 5l7 7-7 7"/>
              </svg>
            </button>
          </form>

          <!-- Symmetrical Success HUD Card -->
          <div id="pillarRfqSuccess" class="rfq-success-hud" style="display:none;">
            <div class="rfq-success-icon-wrap">
              <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="var(--color-accent)" stroke-width="2.5">
                <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/>
                <polyline points="22 4 12 14.01 9 11.01"/>
              </svg>
            </div>
            <span class="rfq-success-badge mono">// INTAKE CONFIRMED</span>
            <h4 class="rfq-success-title">استعلام مهندسی معکوس با موفقیت ثبت شد</h4>
            <p class="rfq-success-text">
              پرونده فنی قطعه تشکیل گردید. کارشناسان ماشین دیزاین ظرف ۲۴ ساعت کاری جهت هماهنگی بررسی قطعه یا اسکن با شما تماس خواهند گرفت.
            </p>
            <div class="rfq-success-code mono">
              <span>کد پیگیری: </span>
              <strong id="rfqTrackingPill">MD-REV-2026</strong>
            </div>
            <button type="button" id="pillarRfqReset" class="btn btn-outline rfq-reset-btn-spaced">
              <span>ثبت استعلام جدید</span>
            </button>
          </div>
        </div>

        <!-- Symmetrical Confidentiality Guarantee Chip -->
        <div class="rfq-nda-guarantee-chip">
          <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="var(--color-accent)" stroke-width="2">
            <rect x="3" y="11" width="18" height="11" rx="2" ry="2"/>
            <path d="M7 11V7a5 5 0 0 1 10 0v4"/>
          </svg>
          <div class="nda-chip-text">
            <span>تضمین رسمی محرمانگی صنعتی (Strict NDA Protocol)</span>
            <small>تمامی نقشه‌ها و اسرار فرآیند تولید کارخانه شما محفوظ خواهد ماند.</small>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>

<!-- ========================================================================
     7. INLINE FORM AJAX HANDLER
     ======================================================================== -->
<script>
document.addEventListener('DOMContentLoaded', function() {
  var form = document.getElementById('pillarRfqForm');
  var submitBtn = document.getElementById('pillarRfqSubmit');
  var notice = document.getElementById('pillarRfqNotice');
  var header = document.querySelector('.rfq-form-custom-header');
  var successHud = document.getElementById('pillarRfqSuccess');
  var trackingPill = document.getElementById('rfqTrackingPill');
  var resetBtn = document.getElementById('pillarRfqReset');

  function showNotice(msg, type) {
    if (!notice) return;
    notice.textContent = msg;
    notice.style.display = 'block';
    notice.className = 'rfq-hud-notice ' + (type === 'error' ? 'notice-error' : 'notice-success');
  }

  if (form) {
    form.addEventListener('submit', function(e) {
      e.preventDefault();
      var phoneInput = document.getElementById('rfq-phone');

      if (!phoneInput || !phoneInput.value.trim()) {
        showNotice('لطفاً شماره همراه معتبر خود را وارد فرمایید.', 'error');
        return;
      }

      submitBtn.disabled = true;
      submitBtn.style.opacity = '0.7';
      submitBtn.innerHTML = '<span>در حال ثبت امن استعلام...</span>';
      if (notice) notice.style.display = 'none';

      var formData = new FormData(form);
      var ajaxUrl = (typeof md_vars !== 'undefined' && md_vars.ajax_url) ? md_vars.ajax_url : '/machinedesign/wp-admin/admin-ajax.php';

      fetch(ajaxUrl, {
        method: 'POST',
        body: formData
      })
      .then(function(res) { return res.json(); })
      .then(function(data) {
        submitBtn.disabled = false;
        submitBtn.style.opacity = '1';
        submitBtn.innerHTML = '<span>ارسال مشخصات و دریافت پیش‌نویس قرارداد NDA</span><svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14M12 5l7 7-7 7"/></svg>';

        if (data && data.success) {
          var code = data.data && (data.data.tracking_code || data.data.tracking) ? (data.data.tracking_code || data.data.tracking) : 'MD-REV-2026';
          if (trackingPill) trackingPill.textContent = code;

          form.style.display = 'none';
          if (header) header.style.display = 'none';
          if (notice) notice.style.display = 'none';
          if (successHud) successHud.style.display = 'block';
          form.reset();
        } else {
          var msg = data && data.data && data.data.message ? data.data.message : 'خطایی در ثبت استعلام رخ داد. لطفاً مجدداً تلاش فرمایید.';
          showNotice(msg, 'error');
        }
      })
      .catch(function(err) {
        submitBtn.disabled = false;
        submitBtn.style.opacity = '1';
        submitBtn.innerHTML = '<span>ارسال مشخصات و دریافت پیش‌نویس قرارداد NDA</span><svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14M12 5l7 7-7 7"/></svg>';
        showNotice('ارتباط با سرور برقرار نشد. لطفاً اتصال اینترنت خود را بررسی کرده یا مستقیماً تماس بگیرید.', 'error');
      });
    });
  }

  if (resetBtn) {
    resetBtn.addEventListener('click', function() {
      if (successHud) successHud.style.display = 'none';
      if (header) header.style.display = 'block';
      form.style.display = 'grid';
    });
  }
});
</script>

<?php
md_render_optional_gutenberg_slot();
get_footer();
