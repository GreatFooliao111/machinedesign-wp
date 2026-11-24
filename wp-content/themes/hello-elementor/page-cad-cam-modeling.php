<?php
/**
 * Template Name: CAD/CAM Modeling & GD&T (مدل‌سازی سه‌بعدی CAD/CAM و تلرانس‌گذاری)
 * Template Post Type: page
 *
 * Description: Dedicated Specialized Page for Advanced SolidWorks 3D Modeling, ISO 1101 GD&T & CAM Blueprinting
 * Follows Cyber-Mechanical Dark Design System + Ponytail Doctrine + Strict Symmetry Rules
 *
 * @package HelloElementor
 */

defined( 'ABSPATH' ) || exit;

get_header();

$cad_phone = function_exists('md_get_contact') ? md_get_contact('phone', '') : '';
$cad_mobile = function_exists('md_get_contact') ? md_get_contact('mobile', '') : '';
$cad_display = $cad_phone ?: ($cad_mobile ?: '۰۵۱-XXXXXXXX');
$cad_clean = md_tel_uri( $cad_display );
?>

<!-- ========================================================================
     1. CAD/CAM HERO BANNER
     ======================================================================== -->
<section class="page-hero-banner pillar-hero-wrap" aria-label="هیدر مدل‌سازی سه‌بعدی CAD/CAM و تلرانس‌گذاری هندسی">
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
          <span class="breadcrumb-current" aria-current="page">مدل‌سازی CAD/CAM و GD&amp;T</span>
        </nav>

        <!-- Corporate Sub-badge -->
        <div class="page-hero-badge">
          <span class="pulse-indicator" aria-hidden="true"></span>
          <span class="mono">SPECIALIZED DESIGN // ADVANCED CAD/CAM &amp; GD&amp;T</span>
        </div>

        <!-- Main Page Title -->
        <h1 class="page-hero-title pillar-hero-title-split">
          <span class="title-line-1">مدل‌سازی سه‌بعدی صنعتی CAD/CAM</span>
          <span class="title-line-2 text-accent">تلرانس‌گذاری هندسی GD&amp;T و پکیج نقشه‌های اجرایی ساخت</span>
        </h1>

        <!-- Summary Lead Text -->
        <div class="page-hero-excerpt">
          توسعه مدل‌های سه‌بعدی پارامتریک در SolidWorks از مجموعه‌های پیچیده ماشین‌آلات، تحلیل انباشت تلرانسی (Tolerance Stack-up) منطبق بر استانداردهای بین‌المللی ISO 1101 و ASME Y14.5، استخراج فایل‌های برش و ماشین‌کاری CNC و تضمین مونتاژ قطعات بدون سوهان‌کاری و دوباره‌کاری.
        </div>

        <!-- Hero Action Buttons -->
        <div class="pillar-hero-actions">
          <a href="#rfq-section" class="btn btn-primary">
            <span>استعلام مدل‌سازی و پکیج نقشه‌کشی</span>
            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
              <path d="M5 12h14M12 5l7 7-7 7"/>
            </svg>
          </a>
          <a href="#gdt-standards" class="btn btn-outline">
            <span>استانداردهای تلرانس‌گذاری GD&amp;T</span>
          </a>
        </div>
      </div>

      <!-- Left Column: CAD Geometry HUD Schematic Stage -->
      <div class="pillar-hero-visual-col">
        <div class="delta-robot-stage" tabindex="0" role="img" aria-label="شماتیک دیجیتال تلرانس‌گذاری هندسی و مدل‌سازی سالیدورکس">
          <div class="delta-robot-glow" aria-hidden="true"></div>
          
          <div class="inspection-hud-board" dir="ltr">
            <div class="hud-board-head">
              <span class="mono hud-board-title">● PARAMETRIC CAD MODELING</span>
              <span class="mono hud-board-meta">STANDARD: ISO 1101</span>
            </div>

            <div class="hud-board-grid">
              <div class="hud-board-cell">
                <span class="mono hud-cell-label">GD&amp;T CONTROLS</span>
                <span class="mono hud-cell-value">POS // RUNOUT // PERP</span>
              </div>
              <div class="hud-board-cell">
                <span class="mono hud-cell-label">CAM STRATEGIES</span>
                <span class="mono hud-cell-value hud-cell-accent">3/5-AXIS CNC G-CODE</span>
              </div>
            </div>

            <div class="hud-board-foot">
              <span class="mono hud-board-meta">BOM AUTOMATION READY</span>
              <span class="mono hud-board-meta hud-cell-accent">ZERO ASSEMBLY CLASH</span>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>

<!-- ========================================================================
     2. KEY METRICS STRIP
     ======================================================================== -->
<section class="services-stats-strip pillar-stats-strip" aria-label="شاخص‌های دقت مدل‌سازی CAD و تلرانس‌گذاری">
  <div class="container">
    <div class="stats-strip-grid">
      <div class="stat-cell">
        <span class="stat-number mono text-accent">۱۰۰٪</span>
        <span class="stat-unit">سازگاری</span>
        <span class="stat-label">انطباق نقشه‌ها با استاندارد جهانی ISO 1101 و DIN</span>
      </div>
      <div class="stat-cell">
        <span class="stat-number mono text-white">صفر</span>
        <span class="stat-unit">تداخل مونتاژ</span>
        <span class="stat-label">تضمین عدم نیاز به سوهان‌کاری و اصلاح در سالن ساخت</span>
      </div>
      <div class="stat-cell">
        <span class="stat-number mono text-accent">۳۰-۴۵٪</span>
        <span class="stat-unit">کاهش ضایعات</span>
        <span class="stat-label">بهینه‌سازی برش شیت‌متال و نستینگ هوشمند لیزر</span>
      </div>
      <div class="stat-cell">
        <span class="stat-number mono text-white">Full</span>
        <span class="stat-unit">فرمت‌های خروجی</span>
        <span class="stat-label">تحویل پکیج STEP, SLDPRT, DWG, PDF و BOM اکسل</span>
      </div>
    </div>
  </div>
</section>

<!-- ========================================================================
     3. GD&T & CAD CAPABILITIES
     ======================================================================== -->
<section class="machinery-categories-section" id="gdt-standards" aria-label="خدمات تخصصی مدل‌سازی CAD/CAM">
  <div class="container">
    <div class="section-header-centered">
      <h2 class="section-title">خدمات تخصصی مدل‌سازی CAD و تلرانس‌گذاری ساخت</h2>
      <p class="section-desc">
        ارائه پکیج کامل مهندسی که کارگاه ساخت را از هرگونه سوال یا حدس و گمان بی‌نیاز می‌کند.
      </p>
    </div>

    <div class="machinery-categories-grid">
      <div class="machinery-card">
        <div class="machinery-card-badge mono">MODULE 01</div>
        <h3 class="machinery-card-title">تلرانس‌گذاری هندسی و ابعادی (GD&amp;T)</h3>
        <p class="machinery-card-text">
          تعیین دقیق مبناهای اندازه‌گیری (Datums)، تلرانس‌های موقعیت، هم‌محوری، تعامد، لنگی و تخمین شرایط حداکثر ماده (MMC) برای کاهش هزینه ماشین‌کاری.
        </p>
        <ul class="machinery-card-specs mono">
          <li>ISO 1101 &amp; ASME Y14.5 Compliance</li>
          <li>Tolerance Stack-up Statistical Analysis</li>
          <li>Fit Classes (H7/g6, H7/p6, etc.)</li>
        </ul>
      </div>

      <div class="machinery-card">
        <div class="machinery-card-badge mono">MODULE 02</div>
        <h3 class="machinery-card-title">طراحی شیت‌متال و گسترده‌سازی ورق</h3>
        <p class="machinery-card-text">
          محاسبه دقیق K-Factor خمکاری، استخراج فایل‌های تمیز DXF برای برش لیزر و واترژت، و نقشه‌های راهنمای زاویه و شعاع خم اپراتور گیوتین و پرس‌برک.
        </p>
        <ul class="machinery-card-specs mono">
          <li>Exact K-Factor &amp; Bend Allowance</li>
          <li>Laser Cutting Clean DXF Export</li>
          <li>Press Brake Step-by-Step Bending Maps</li>
        </ul>
      </div>

      <div class="machinery-card">
        <div class="machinery-card-badge mono">MODULE 03</div>
        <h3 class="machinery-card-title">آماده‌سازی CAM و استراتژی‌های CNC</h3>
        <p class="machinery-card-text">
          طراحی فیکسچرها و کلمپ‌های نگهدارنده، انتخاب بهینه ابزار و مسیر ابزار (Toolpaths) ۳ و ۵ محوره برای ماشین‌کاری با حداقل تعویض ستاپ و بالاترین صافی سطح.
        </p>
        <ul class="machinery-card-specs mono">
          <li>CNC Milling &amp; Turning Toolpath Prep</li>
          <li>Modular Jig &amp; Fixture Modeling</li>
          <li>Machining Setup Time Reduction</li>
        </ul>
      </div>
    </div>
  </div>
</section>

<!-- ========================================================================
     4. 4-STAGE SYSTEMATIC WORKFLOW
     ======================================================================== -->
<section class="pillar-workflow-section" aria-label="فرآیند ۴ مرحله‌ای طراحی CAD/CAM">
  <div class="container">
    <div class="section-header-centered">
      <h2 class="section-title">فرآیند ۴ مرحله‌ای از طرح اولیه تا پکیج آماده ساخت</h2>
    </div>

    <div class="workflow-steps-grid">
      <div class="workflow-step-card">
        <h3 class="step-title">مدل‌سازی پارامتریک در SolidWorks</h3>
        <p class="step-desc">ایجاد مدل‌های سه‌بعدی تماماً قیدگذاری‌شده با ساختار منطقی درختی (Feature Tree) جهت سهولت در تغییرات آتی.</p>
      </div>

      <div class="workflow-step-card">
        <h3 class="step-title">تست برخورد و دینامیک مونتاژ</h3>
        <p class="step-desc">شبیه‌سازی حرکتی مکانیزم‌ها، بررسی دقیق تداخل فیزیکی در زوایای بحرانی و بهینه‌سازی دسترسی ابزار برای آچارکشی.</p>
      </div>

      <div class="workflow-step-card">
        <h3 class="step-title">نقشه‌کشی اجرایی و GD&amp;T</h3>
        <p class="step-desc">تهیه نقشه‌های کارگاهی دو‌بعدی با جزئیات کامل جوشکاری، علائم صافی سطح، تلرانس‌های فرم و موقعیت و نماهای برش استاندارد.</p>
      </div>

      <div class="workflow-step-card">
        <h3 class="step-title">استخراج لیست قطعات و BOM</h3>
        <p class="step-desc">تولید جدول تفکیک‌شده قطعات ساختنی و خریدنی (بلبرینگ، پیچ، کاسه‌نمد، سیلندر) همراه با استانداردهای DIN و کدهای کاتالوگی.</p>
      </div>
    </div>
  </div>
</section>

<!-- ========================================================================
     5. DUAL RFQ & TRUST SECTION (Symmetrical Baseline)
     ======================================================================== -->
<section class="pillar-rfq-dual-section" id="rfq-section" aria-label="استعلام و سفارش مدل‌سازی CAD و تلرانس‌گذاری">
  <div class="container">
    <div class="rfq-dual-grid">

      <!-- Column 1: Trust & Contact Information -->
      <div class="rfq-incentive-panel">
        <div>
          <div class="rfq-trust-badge mono">
            <span class="rfq-led" aria-hidden="true"></span>
            <span>STANDARD BLUEPRINTS // FULL BOM INCLUDED</span>
          </div>

          <h3 class="rfq-incentive-title">
            نقشه‌های آماده ساخت با تضمین عدم ابهام در کارگاه ماشین‌کاری
          </h3>
          <p class="rfq-incentive-lead">
            پکیج نقشه‌های خروجی ماشین دیزاین بر اساس سال‌ها تجربه کارگاهی طراحی می‌شود؛ به‌طوری‌که تراشکار و فرزکار بدون نیاز به سوال از طراح، مستقیماً فرآیند ساخت را آغاز کنند.
          </p>

          <div class="rfq-incentive-points">
            <div class="rfq-incentive-item">
              <div class="rfq-incentive-icon">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg>
              </div>
              <div class="rfq-incentive-text">
                <h4>تحویل سورس‌کامل فایل‌های سه‌بعدی و دوبعدی</h4>
                <p>تحویل فایل‌های اصلی SolidWorks (SLDPRT, SLDASM, SLDDRW) به همراه خروجی‌های خنثی STEP, IGES و PDF نقشه‌ها.</p>
              </div>
            </div>

            <div class="rfq-incentive-item">
              <div class="rfq-incentive-icon">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg>
              </div>
              <div class="rfq-incentive-text">
                <h4>تطابق کامل با استاندارد کارگاهی و تلرانس‌های اقتصادی</h4>
                <p>انتخاب تلرانس‌ها به گونه‌ای است که کیفیت مونتاژ حفظ شده و هزینه‌های اضافی تراشکاری به کارفرما تحمیل نگردد.</p>
              </div>
            </div>
          </div>
        </div>

        <!-- Fast Track Phone Chip -->
        <div class="rfq-direct-consult-chip">
          <div class="consult-chip-text">
            <span class="consult-chip-label">نیاز به مشاوره فوری یا ارسال فایل اولیه پروژه دارید؟</span>
            <span class="consult-chip-title">گفتگوی مستقیم با مهندس حسین وطن‌دوست</span>
          </div>
          <a href="tel:<?php echo esc_attr($cad_clean); ?>" class="consult-phone-btn mono" dir="ltr" title="تماس تلفنی مستقیم">
            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2">
              <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/>
            </svg>
            <span><?php echo esc_html($cad_display); ?></span>
          </a>
        </div>
      </div>

      <!-- Column 2: Streamlined Industrial Form Panel -->
      <div class="rfq-form-panel-custom">
        <div id="pillarRfqContainer">
          <div class="rfq-form-custom-header">
            <span class="rfq-form-tag mono">// CAD/CAM ENGINEERING INTAKE</span>
            <h3>ثبت استعلام مدل‌سازی سه‌بعدی و نقشه‌کشی</h3>
            <p>مشخصات پروژه را ثبت فرمایید؛ بررسی مدل و برآورد زمان‌بندی ظرف ۲۴ ساعت کاری ارسال می‌گردد.</p>
          </div>

          <div id="pillarRfqNotice" class="rfq-hud-notice" style="display:none;" role="alert"></div>

          <form id="pillarRfqForm" class="rfq-form-grid-inner" method="POST">
            <input type="hidden" name="action" value="machinedesign_rfq_submit">
            <input type="hidden" name="source_pillar" value="cad-cam-modeling">
            <input type="hidden" name="source_url" value="<?php echo esc_url( get_permalink() ); ?>">
            
            <div class="rfq-input-group">
              <label for="rfq-name">نام و نام خانوادگی / نام شرکت <span class="req-star">*</span></label>
              <input type="text" id="rfq-name" name="rfq_name" class="rfq-input-field" required placeholder="مثال: مهندس رضوانی - صنایع بسته‌بندی">
            </div>

            <div class="rfq-input-group">
              <label for="rfq-phone">شماره همراه مستقیم کارشناس <span class="req-star">*</span></label>
              <input type="tel" id="rfq-phone" name="rfq_phone" class="rfq-input-field" required placeholder="۰۹۱۲XXXXXXX" dir="ltr">
            </div>

            <div class="rfq-input-group rfq-field-full">
              <label for="rfq-service-type">نوع خدمت مد نظر در حوزه CAD/CAM <span class="req-star">*</span></label>
              <select id="rfq-service-type" name="rfq_service_type" class="rfq-select-field" required>
                <option value="" disabled selected>نوع خدمت را انتخاب فرمایید...</option>
                <option value="solidworks-assembly">مدل‌سازی کامل مجموعه ماشین‌آلات و مکانیزم‌ها در SolidWorks</option>
                <option value="gdt-drafting">تلرانس‌گذاری هندسی (GD&amp;T) و تدوین نقشه‌های ساخت کارگاهی</option>
                <option value="sheet-metal-laser">طراحی و گسترده‌سازی شیت‌متال و استخراج فایل‌های برش لیزر</option>
                <option value="cam-cnc-strategy">طراحی فیکسچر و آماده‌سازی کدهای ماشین‌کاری CNC</option>
                <option value="paper-to-cad">تبدیل نقشه‌های قدیمی کاغذی و دست‌کشیده به مدل سه‌بعدی CAD</option>
                <option value="other-cad">سایر پروژه‌های طراحی و مدل‌سازی</option>
              </select>
            </div>

            <div class="rfq-input-group rfq-field-full">
              <label for="rfq-details">توضیحات و نیازمندی‌های پروژه مدل‌سازی</label>
              <textarea id="rfq-details" name="rfq_details" class="rfq-textarea-field" rows="3" placeholder="توضیح درباره ابعاد مکانیزم، تعداد قطعات فرضی، فرمت مورد نظر فایل‌ها و استانداردهای مد نظر کارخانه..."></textarea>
            </div>

            <button type="submit" id="pillarRfqSubmit" class="btn btn-primary rfq-submit-btn">
              <span>ارسال مشخصات پروژه و دریافت برآورد فنی</span>
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
            <h4 class="rfq-success-title">استعلام مدل‌سازی با موفقیت ثبت شد</h4>
            <p class="rfq-success-text">
              اطلاعات پروژه در دپارتمان CAD/CAM ماشین دیزاین ثبت شد. کارشناسان جهت هماهنگی بررسی فایل‌ها ظرف ۲۴ ساعت کاری با شما تماس خواهند گرفت.
            </p>
            <div class="rfq-success-code mono">
              <span>کد پیگیری: </span>
              <strong id="rfqTrackingPill">MD-CAD-2026</strong>
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
            <span>تضمین مالکیت قطعی و محرمانگی فایل‌های CAD</span>
            <small>کلیه سورس‌های مدل‌سازی منحصراً متعلق به کارفرما بوده و به اشخاص ثالث ارائه نمی‌شود.</small>
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
      submitBtn.innerHTML = '<span>در حال ثبت استعلام CAD...</span>';
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
        submitBtn.innerHTML = '<span>ارسال مشخصات پروژه و دریافت برآورد فنی</span><svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14M12 5l7 7-7 7"/></svg>';

        if (data && data.success) {
          var code = data.data && (data.data.tracking_code || data.data.tracking) ? (data.data.tracking_code || data.data.tracking) : 'MD-CAD-2026';
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
        submitBtn.innerHTML = '<span>ارسال مشخصات پروژه و دریافت برآورد فنی</span><svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14M12 5l7 7-7 7"/></svg>';
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
get_footer();
