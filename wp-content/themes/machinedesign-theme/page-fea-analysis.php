<?php
/**
 * Template Name: FEA & CFD Simulation (شبیه‌سازی و تحلیل المان محدود Ansys)
 * Template Post Type: page
 *
 * Description: Dedicated Specialized Page for Ansys FEA Structural Stress, Modal Vibration, Fatigue & CFD Simulations
 * Follows Cyber-Mechanical Dark Design System + Ponytail Doctrine + Strict Symmetry Rules
 *
 * @package HelloElementor
 */

defined( 'ABSPATH' ) || exit;

get_header();

$fea_phone = function_exists('md_get_contact') ? md_get_contact('phone', '') : '';
$fea_mobile = function_exists('md_get_contact') ? md_get_contact('mobile', '') : '';
$fea_display = $fea_phone ?: ($fea_mobile ?: '۰۵۱-XXXXXXXX');
$fea_clean = md_tel_uri( $fea_display );
?>

<!-- ========================================================================
     1. FEA SIMULATION HERO BANNER
     ======================================================================== -->
<section class="page-hero-banner pillar-hero-wrap" aria-label="هیدر شبیه‌سازی و تحلیل المان محدود FEA">
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
          <span class="breadcrumb-current" aria-current="page">شبیه‌سازی و تحلیل المان محدود FEA</span>
        </nav>

        <!-- Corporate Sub-badge -->
        <div class="page-hero-badge">
          <span class="pulse-indicator" aria-hidden="true"></span>
          <span class="mono">SPECIALIZED SIMULATION // ANSYS FEA &amp; CFD NUMERICAL MODELING</span>
        </div>

        <!-- Main Page Title -->
        <h1 class="page-hero-title pillar-hero-title-split">
          <span class="title-line-1">شبیه‌سازی و تحلیل المان محدود (FEA)</span>
          <span class="title-line-2 text-accent">تحلیل تنش، ارتعاشات، خستگی و بهینه‌سازی توپولوژی در Ansys</span>
        </h1>

        <!-- Summary Lead Text -->
        <div class="page-hero-excerpt">
          صرفه‌جویی در هزینه‌های میلیاردی ساخت آزمون‌وخطا با شبیه‌سازی دقیق اجزای محدود در نرم‌افزار Ansys Workbench: تحلیل تنش‌های استاتیکی و دینامیکی، فرکانس‌های طبیعی و تشدید ارتعاشی، پیش‌بینی عمر خستگی و بهینه‌سازی توپولوژی سازه‌ها با حفظ قطعی ضریب اطمینان (Safety Factor).
        </div>

        <!-- Hero Action Buttons -->
        <div class="pillar-hero-actions">
          <a href="#rfq-section" class="btn btn-primary">
            <span>استعلام پروژه شبیه‌سازی و تحلیل FEA</span>
            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
              <path d="M5 12h14M12 5l7 7-7 7"/>
            </svg>
          </a>
          <a href="#fea-disciplines" class="btn btn-outline">
            <span>رشته‌های تحلیلی و شبیه‌سازی</span>
          </a>
        </div>
      </div>

      <!-- Left Column: FEA Stress HUD Schematic Stage -->
      <div class="pillar-hero-visual-col">
        <div class="delta-robot-stage" tabindex="0" role="img" aria-label="شماتیک دیجیتال تحلیل تنش فون‌مایزز و المان محدود">
          <div class="delta-robot-glow" aria-hidden="true"></div>
          
          <div class="inspection-hud-board" dir="ltr">
            <div class="hud-board-head">
              <span class="mono hud-board-title">● ANSYS FEA SOLVER</span>
              <span class="mono hud-board-meta">NONLINEAR CONTACTS</span>
            </div>

            <div class="hud-board-grid">
              <div class="hud-board-cell">
                <span class="mono hud-cell-label">VON MISES STRESS</span>
                <span class="mono hud-cell-value">142.6 MPa (SAFE)</span>
              </div>
              <div class="hud-board-cell">
                <span class="mono hud-cell-label">SAFETY FACTOR</span>
                <span class="mono hud-cell-value hud-cell-accent">FoS = 2.45 &gt; 2.0</span>
              </div>
            </div>

            <div class="hud-board-foot">
              <span class="mono hud-board-meta">FATIGUE LIFE: 10^7 CYCLES</span>
              <span class="mono hud-board-meta hud-cell-accent">RESONANCE FREE</span>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>

    <div class="container md-hero-standalone-visual">
      <?php if ( function_exists( 'md_render_hero_3d_stage' ) ) { md_render_hero_3d_stage( 'fea-analysis' ); } ?>
    </div>
  </section>

<!-- ========================================================================
     2. KEY METRICS STRIP
     ======================================================================== -->
<section class="services-stats-strip pillar-stats-strip" aria-label="شاخص‌های عملکرد تحلیل المان محدود در ماشین دیزاین">
  <div class="container">
    <div class="stats-strip-grid">
      <div class="stat-cell">
        <span class="stat-number mono text-accent">&gt; ۲.۰</span>
        <span class="stat-unit">ضریب اطمینان</span>
        <span class="stat-label">تضمین پایداری سازه تحت شدیدترین بارهای دینامیکی</span>
      </div>
      <div class="stat-cell">
        <span class="stat-number mono text-white">۱۵-۳۵٪</span>
        <span class="stat-unit">کاهش وزن</span>
        <span class="stat-label">سبک‌سازی مکانیزم با بهینه‌سازی توپولوژی سازه‌ای</span>
      </div>
      <div class="stat-cell">
        <span class="stat-number mono text-accent">۱۰۰٪</span>
        <span class="stat-unit">پیشگیری از تشدید</span>
        <span class="stat-label">تحلیل مودال و فاصله فرکانسی از دور کاری الکتروموتور</span>
      </div>
      <div class="stat-cell">
        <span class="stat-number mono text-white">۱۰^۷</span>
        <span class="stat-unit">سیکل بارگذاری</span>
        <span class="stat-label">محاسبه عمر خستگی و نمودار Wöhler قطعات دوار</span>
      </div>
    </div>
  </div>
</section>

<!-- ========================================================================
     3. FEA SIMULATION DISCIPLINES
     ======================================================================== -->
<section class="machinery-categories-section" id="fea-disciplines" aria-label="رشته‌ها و شاخه‌های تحلیل عددی المان محدود">
  <div class="container">
    <div class="section-header-centered">
      <h2 class="section-title">حوزه‌های تخصصی تحلیل عددی و شبیه‌سازی در Ansys</h2>
      <p class="section-desc">
        تحلیل المان محدود فراتر از یک کانتور رنگی است؛ تضمین ریاضی عدم شکست قطعه در شرایط کارگاهی واقعی است.
      </p>
    </div>

    <div class="machinery-categories-grid">
      <div class="machinery-card">
        <div class="machinery-card-badge mono">DISCIPLINE 01</div>
        <h3 class="machinery-card-title">تحلیل تنش استاتیکی و غیرخطی</h3>
        <p class="machinery-card-text">
          بررسی توزیع تنش‌های فون‌مایزز، کرنش‌های پلاستیک و قیدهای غیرخطی تماس بین قطعات مونتاژی تحت بیشینه بارهای کاری و بارهای ضربه‌ای ناگهانی.
        </p>
        <ul class="machinery-card-specs mono">
          <li>Von Mises &amp; Tresca Stress Criteria</li>
          <li>Frictional Non-Linear Contact Pairs</li>
          <li>Plastic Deformation &amp; Yielding Bounds</li>
        </ul>
      </div>

      <div class="machinery-card">
        <div class="machinery-card-badge mono">DISCIPLINE 02</div>
        <h3 class="machinery-card-title">تحلیل مودال و رزونانس ارتعاشی</h3>
        <p class="machinery-card-text">
          استخراج فرکانس‌های طبیعی و شکل مودهای ارتعاشی سازه شاسی و مخازن برای جلوگیری از پدیده خطرناک تشدید ناشی از دور کاری پمپ‌ها و موتورها.
        </p>
        <ul class="machinery-card-specs mono">
          <li>Natural Frequencies &amp; Mode Shapes</li>
          <li>Campbell Diagrams &amp; Critical Speeds</li>
          <li>Harmonic Dynamic Response FEA</li>
        </ul>
      </div>

      <div class="machinery-card">
        <div class="machinery-card-badge mono">DISCIPLINE 03</div>
        <h3 class="machinery-card-title">تحلیل خستگی و عمر کاری (Fatigue)</h3>
        <p class="machinery-card-text">
          محاسبه عمر باقی‌مانده و آسیب انباشته خستگی شفت‌ها، اتصالات جوشی و محورهای انتقال قدرت تحت بارهای سیکلی و تناوبی مداوم.
        </p>
        <ul class="machinery-card-specs mono">
          <li>S-N Curve &amp; Goodman-Gerber Criteria</li>
          <li>Weldment Fatigue Assessment (IIW)</li>
          <li>Infinite Life vs Low-Cycle Fatigue</li>
        </ul>
      </div>
    </div>
  </div>
</section>

<!-- ========================================================================
     4. 4-STAGE SYSTEMATIC WORKFLOW
     ======================================================================== -->
<section class="pillar-workflow-section" aria-label="فرآیند ۴ مرحله‌ای شبیه‌سازی FEA">
  <div class="container">
    <div class="section-header-centered">
      <h2 class="section-title">فرآیند ۴ مرحله‌ای شبیه‌سازی دقیق و قابل اتکا</h2>
    </div>

    <div class="workflow-steps-grid">
      <div class="workflow-step-card">
        <h3 class="step-title">آماده‌سازی هندسه و مش‌بندی</h3>
        <p class="step-desc">ساده‌سازی هوشمندانه هندسه (Defeaturing)، تولید مش‌های شش‌وجهی منظم و تست استقلال حل از شبکه (Mesh Convergence).</p>
      </div>

      <div class="workflow-step-card">
        <h3 class="step-title">تعریف شرایط مرزی و بارگذاری</h3>
        <p class="step-desc">اعمال دقیق قیدهای تکیه‌گاهی، نیروهای اینرسی، بارهای فشاری، گشتاور و شرایط تماسی اصطکاکی مطابق واقعیت کارگاه.</p>
      </div>

      <div class="workflow-step-card">
        <h3 class="step-title">حل عددی و بهینه‌سازی توپولوژی</h3>
        <p class="step-desc">اجرای حل‌کننده‌های المان محدود Ansys، استخراج کانتورهای تنش و حذف مواد اضافه در بخش‌های بی‌اثر جهت کاهش وزن.</p>
      </div>

      <div class="workflow-step-card">
        <h3 class="step-title">گزارش مهندسی و راهکار اصلاحی</h3>
        <p class="step-desc">ارائه گزارش جامع تحلیلی با تفسیر نمودارها، تایید ضریب اطمینان و پیشنهاد اصلاحات ابعادی جهت مقاوم‌سازی ساختار.</p>
      </div>
    </div>
  </div>
</section>

<!-- ========================================================================
     5. DUAL RFQ & TRUST SECTION (Symmetrical Baseline)
     ======================================================================== -->
<section class="pillar-rfq-dual-section" id="rfq-section" aria-label="استعلام و سفارش پروژه شبیه‌سازی FEA">
  <div class="container">
    <div class="rfq-dual-grid">

      <!-- Column 1: Trust & Contact Information -->
      <div class="rfq-incentive-panel">
        <div>
          <div class="rfq-trust-badge mono">
            <span class="rfq-led" aria-hidden="true"></span>
            <span>SIMULATION INTEGRITY // STRICT SAFETY FACTOR</span>
          </div>

          <h3 class="rfq-incentive-title">
            شبیه‌سازی بر پایه فیزیک واقعی، نه فقط تصاویر رنگی
          </h3>
          <p class="rfq-incentive-lead">
            تحلیل‌های ماشین دیزاین با آزمون همگرایی مش، در نظر گرفتن تنش‌های پسماند و تطابق با استانداردهای طراحی مخازن (ASME Sec VIII) و سازه‌ها (AISC) ارائه می‌شود.
          </p>

          <div class="rfq-incentive-points">
            <div class="rfq-incentive-item">
              <div class="rfq-incentive-icon">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg>
              </div>
              <div class="rfq-incentive-text">
                <h4>ارائه گزارش جامع تحلیلی و مستندات ریاضی</h4>
                <p>پکیج کامل PDF گزارش فنی شامل نمودارهای همگرایی، معادلات بارگذاری و فایل‌های پروژه حل‌شده در Ansys.</p>
              </div>
            </div>

            <div class="rfq-incentive-item">
              <div class="rfq-incentive-icon">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg>
              </div>
              <div class="rfq-incentive-text">
                <h4>تضمین بازنگری و ارائه راهکار عملی اصلاح سازه</h4>
                <p>در صورت شناسایی تمرکز تنش بحرانی، مدل هندسی اصلاح‌شده با فیلت‌ها و تقویت‌های بهینه به کارفرما تحویل می‌گردد.</p>
              </div>
            </div>
          </div>
        </div>

        <!-- Fast Track Phone Chip -->
        <div class="rfq-direct-consult-chip">
          <div class="consult-chip-text">
            <span class="consult-chip-label">نیاز به ارزیابی فوری مدل یا بررسی شکست قطعه دارید؟</span>
            <span class="consult-chip-title">گفتگوی مستقیم با مهندس حسین وطن‌دوست</span>
          </div>
          <a href="tel:<?php echo esc_attr($fea_clean); ?>" class="consult-phone-btn mono" dir="ltr" title="تماس تلفنی مستقیم">
            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2">
              <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/>
            </svg>
            <span><?php echo esc_html($fea_display); ?></span>
          </a>
        </div>
      </div>

      <!-- Column 2: Streamlined Industrial Form Panel -->
      <div class="rfq-form-panel-custom">
        <div id="pillarRfqContainer">
          <div class="rfq-form-custom-header">
            <span class="rfq-form-tag mono">// FEA SIMULATION INTAKE</span>
            <h3>ثبت استعلام شبیه‌سازی و تحلیل تنش Ansys</h3>
            <p>اطلاعات اولیه سازه یا قطعه را ثبت فرمایید؛ پروپوزال فنی و زمان‌بندی تحلیل ظرف ۲۴ ساعت کاری ارسال می‌گردد.</p>
          </div>

          <div id="pillarRfqNotice" class="rfq-hud-notice" style="display:none;" role="alert"></div>

          <form id="pillarRfqForm" class="rfq-form-grid-inner" method="POST">
            <input type="hidden" name="action" value="machinedesign_rfq_submit">
            <input type="hidden" name="source_pillar" value="fea-analysis">
            <input type="hidden" name="source_url" value="<?php echo esc_url( get_permalink() ); ?>">
            
            <div class="rfq-input-group">
              <label for="rfq-name">نام و نام خانوادگی / شرکت متقاضی <span class="req-star">*</span></label>
              <input type="text" id="rfq-name" name="rfq_name" class="rfq-input-field" required placeholder="مثال: مهندس رضوانی - کارخانه ماشین‌سازی">
            </div>

            <div class="rfq-input-group">
              <label for="rfq-phone">شماره همراه مستقیم کارشناس <span class="req-star">*</span></label>
              <input type="tel" id="rfq-phone" name="rfq_phone" class="rfq-input-field" required placeholder="۰۹۱۲XXXXXXX" dir="ltr">
            </div>

            <div class="rfq-input-group rfq-field-full">
              <label for="rfq-service-type">نوع شبیه‌سازی و تحلیل مد نظر <span class="req-star">*</span></label>
              <select id="rfq-service-type" name="rfq_service_type" class="rfq-select-field" required>
                <option value="" disabled selected>نوع تحلیل را انتخاب فرمایید...</option>
                <option value="static-structural">تحلیل استاتیکی خطی و غیرخطی تنش و تغییرشکل</option>
                <option value="modal-vibration">تحلیل مودال، رزونانس و فرکانس‌های طبیعی ارتعاشی</option>
                <option value="fatigue-life">تخمین عمر خستگی و نمودار Wöhler تحت بارهای دینامیکی</option>
                <option value="topology-opt">بهینه‌سازی توپولوژی و سبک‌سازی وزن قطعه</option>
                <option value="cfd-thermal">تحلیل سیالاتی CFD و انتقال حرارت سازه‌ای</option>
                <option value="other-fea">سایر تحلیل‌های پیشرفته اجزای محدود</option>
              </select>
            </div>

            <div class="rfq-input-group rfq-field-full">
              <label for="rfq-details">شرایط بارگذاری، جنس ماده، فرضیات و هدف تحلیل</label>
              <textarea id="rfq-details" name="rfq_details" class="rfq-textarea-field" rows="3" placeholder="توضیحات درباره مقدار نیروها، شرایط تکیه‌گاهی، جنس متریال، سابقه شکست در نمونه قبلی و هدف از شبیه‌سازی..."></textarea>
            </div>

            <button type="submit" id="pillarRfqSubmit" class="btn btn-primary rfq-submit-btn">
              <span>ارسال مشخصات پروژه و دریافت برآورد شبیه‌سازی</span>
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
            <h4 class="rfq-success-title">استعلام شبیه‌سازی با موفقیت ثبت شد</h4>
            <p class="rfq-success-text">
              پروژه تحلیل در دپارتمان FEA ماشین دیزاین پرونده‌گذاری شد. کارشناسان جهت بررسی فایل CAD و شرایط بارگذاری ظرف ۲۴ ساعت کاری با شما تماس خواهند گرفت.
            </p>
            <div class="rfq-success-code mono">
              <span>کد پیگیری: </span>
              <strong id="rfqTrackingPill">MD-FEA-2026</strong>
            </div>
            <button type="button" id="pillarRfqReset" class="btn btn-outline" style="margin-top:16px;">
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
            <span>تضمین محرمانگی کامل نقشه‌ها و فایل‌های تحلیلی</span>
            <small>تمامی داده‌های شبیه‌سازی تحت توافق‌نامه رسمی عدم افشا (NDA) محافظت می‌شوند.</small>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>

<!-- ========================================================================
     6. INLINE FORM AJAX HANDLER
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
      submitBtn.innerHTML = '<span>در حال ثبت استعلام FEA...</span>';
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
        submitBtn.innerHTML = '<span>ارسال مشخصات پروژه و دریافت برآورد شبیه‌سازی</span><svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14M12 5l7 7-7 7"/></svg>';

        if (data && data.success) {
          var code = data.data && (data.data.tracking_code || data.data.tracking) ? (data.data.tracking_code || data.data.tracking) : 'MD-FEA-2026';
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
        submitBtn.innerHTML = '<span>ارسال مشخصات پروژه و دریافت برآورد شبیه‌سازی</span><svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14M12 5l7 7-7 7"/></svg>';
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
