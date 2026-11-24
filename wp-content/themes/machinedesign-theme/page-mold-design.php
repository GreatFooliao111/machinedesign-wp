<?php
/**
 * Template Name: Mold & Rotary Die Design (طراحی و ساخت قالب‌های صنعتی و روتاری)
 * Template Post Type: page
 *
 * Description: Dedicated Specialized Page for High-Precision Rotary Drum Forming Dies (Phosphor Bronze/Brass) & Industrial Tooling
 * Follows Cyber-Mechanical Dark Design System + Ponytail Doctrine + Strict Symmetry Rules
 *
 * @package HelloElementor
 */

defined( 'ABSPATH' ) || exit;

get_header();

$mold_phone = function_exists('md_get_contact') ? md_get_contact('phone', '') : '';
$mold_mobile = function_exists('md_get_contact') ? md_get_contact('mobile', '') : '';
$mold_display = $mold_phone ?: ($mold_mobile ?: '۰۵۱-XXXXXXXX');
$mold_clean = md_tel_uri( $mold_display );
?>

<!-- ========================================================================
     1. MOLD DESIGN HERO BANNER
     ======================================================================== -->
<section class="page-hero-banner pillar-hero-wrap" aria-label="هیدر طراحی و ساخت قالب‌های صنعتی و روتاری">
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
          <span class="breadcrumb-current" aria-current="page">طراحی قالب‌های صنعتی و روتاری</span>
        </nav>

        <!-- Corporate Sub-badge -->
        <div class="page-hero-badge">
          <span class="pulse-indicator" aria-hidden="true"></span>
          <span class="mono">SPECIALIZED TOOLING // ROTARY DRUM FORMING DIES</span>
        </div>

        <!-- Main Page Title -->
        <h1 class="page-hero-title pillar-hero-title-split">
          <span class="title-line-1">طراحی و ساخت قالب‌های روتاری استوانه‌ای</span>
          <span class="title-line-2 text-accent">قالب‌های فرمینگ پیوسته، مکانیزم‌های برش و اکستروژن برنجی</span>
        </h1>

        <!-- Summary Lead Text -->
        <div class="page-hero-excerpt">
          مهندسی و ساخت تخصصی قالب‌های استوانه‌ای روتاری (Rotary Cylindrical Drum Forming Dies) از آلیاژ فسفر برنز و برنج صنعتی، ماشین‌کاری ۵ محوره CNC با پرداخت سطحی آینه‌ای، زوایای رهایی مهندسی‌شده و تضمین رهایش کامل خمیر و مواد بدون پارگی یا افت ظرفیت در خطوط تولید پیوسته.
        </div>

        <!-- Hero Action Buttons -->
        <div class="pillar-hero-actions">
          <a href="#rfq-section" class="btn btn-primary">
            <span>استعلام ساخت قالب روتاری و فرمینگ</span>
            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
              <path d="M5 12h14M12 5l7 7-7 7"/>
            </svg>
          </a>
          <a href="#rotary-specs" class="btn btn-outline">
            <span>مشخصات فنی قالب‌های درام برنجی</span>
          </a>
        </div>
      </div>

      <!-- Left Column: High-Precision Rotary Drum HUD Schematic -->
      <div class="pillar-hero-visual-col">
        <div class="delta-robot-stage" tabindex="0" role="img" aria-label="شماتیک دیجیتال قالب استوانه‌ای روتاری برنجی و غلتک تقابلی فولادی">
          <div class="delta-robot-glow" aria-hidden="true"></div>
          
          <div class="inspection-hud-board" dir="ltr">
            <div class="hud-board-head">
              <span class="mono hud-board-title">● ROTARY DRUM FORMING DIE</span>
              <span class="mono hud-board-meta">SYNCHRO: 1:1 RATIO</span>
            </div>

            <div class="hud-board-grid">
              <div class="hud-board-cell">
                <span class="mono hud-cell-label">DRUM ALLOY</span>
                <span class="mono hud-cell-value">BRONZE / BRASS</span>
              </div>
              <div class="hud-board-cell">
                <span class="mono hud-cell-label">COUNTER ROLLER</span>
                <span class="mono hud-cell-value hud-cell-accent">STAINLESS 304</span>
              </div>
            </div>

            <div class="hud-board-foot">
              <span class="mono hud-board-meta">DRAFT ANGLE: OPTIMIZED</span>
              <span class="mono hud-board-meta hud-cell-accent">TESTED WITH DOUGH</span>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>

    <div class="container md-hero-standalone-visual">
      <?php if ( function_exists( 'md_render_hero_3d_stage' ) ) { md_render_hero_3d_stage( 'mold-design' ); } ?>
    </div>
  </section>

<!-- ========================================================================
     2. KEY METRICS STRIP
     ======================================================================== -->
<section class="services-stats-strip pillar-stats-strip" aria-label="شاخص‌های عملکرد قالب‌های روتاری ماشین دیزاین">
  <div class="container">
    <div class="stats-strip-grid">
      <div class="stat-cell">
        <span class="stat-number mono text-accent">۱,۰۰۰-۱۰,۰۰۰</span>
        <span class="stat-unit">عدد در ساعت</span>
        <span class="stat-label">ظرفیت شکل‌دهی متغیر متناسب با ابعاد محصول</span>
      </div>
      <div class="stat-cell">
        <span class="stat-number mono text-white">۱۰۰٪</span>
        <span class="stat-unit">برنز و برنج</span>
        <span class="stat-label">آلیاژ بهداشتی ضد سایش و نچسب به مواد</span>
      </div>
      <div class="stat-cell">
        <span class="stat-number mono text-accent">±۰.۰۱</span>
        <span class="stat-unit">میلی‌متر</span>
        <span class="stat-label">دقت ماشین‌کاری CNC حفره‌های درام استوانه‌ای</span>
      </div>
      <div class="stat-cell">
        <span class="stat-number mono text-white">صفر</span>
        <span class="stat-unit">چسبندگی خمیر</span>
        <span class="stat-label">طراحی مهندسی زوایای خروج و رهایش سریع قطعه</span>
      </div>
    </div>
  </div>
</section>

<!-- ========================================================================
     3. ROTARY FORMING ANATOMY & RIGID GUARDRAILS
     ======================================================================== -->
<section class="machinery-categories-section" id="rotary-specs" aria-label="اصول مهندسی قالب‌های استوانه‌ای روتاری">
  <div class="container">
    <div class="section-header-centered">
      <h2 class="section-title">کالبدشکافی مهندسی قالب‌های استوانه‌ای روتاری</h2>
      <p class="section-desc">
        قالب‌گیری پیوسته دورانی بر خلاف سیستم‌های رفت‌وبرگشتی، استهلاک مکانیکی را به حداقل رسانده و سرعت خطوط تولید را چند برابر می‌سازد.
      </p>
    </div>

    <div class="machinery-categories-grid">
      <div class="machinery-card">
        <div class="machinery-card-badge mono">FEATURE 01</div>
        <h3 class="machinery-card-title">درام استوانه‌ای برنجی CNC</h3>
        <p class="machinery-card-text">
          استوانه ماشین‌کاری‌شده از بلوک یکپارچه برنز/برنج فسفردار مهندسی با مقاومت فوق‌العاده در برابر خوردگی اسیدی خمیر و سایش‌های مداوم با سرعت بالا.
        </p>
        <ul class="machinery-card-specs mono">
          <li>Phosphor Bronze Alloy CuSn8</li>
          <li>5-Axis CNC Precision Engraving</li>
          <li>Mirror Hand Polishing Ra &lt; 0.2 µm</li>
        </ul>
      </div>

      <div class="machinery-card">
        <div class="machinery-card-badge mono">FEATURE 02</div>
        <h3 class="machinery-card-title">غلتک تقابلی استیل ضدزنگ</h3>
        <p class="machinery-card-text">
          سیلندر سنگ‌خورده از جنس استنلس استیل ۳۰۴ که با نسبت دور یک‌به‌یک مقابل درام برنجی می‌چرخد و نیروی پرس یکنواخت و بدون لغزش ایجاد می‌کند.
        </p>
        <ul class="machinery-card-specs mono">
          <li>Mirror-Finished Steel Cylinder</li>
          <li>Precision Bearing Housing Alignment</li>
          <li>Zero-Radial Runout (TIR &lt; 0.01mm)</li>
        </ul>
      </div>

      <div class="machinery-card">
        <div class="machinery-card-badge mono">FEATURE 03</div>
        <h3 class="machinery-card-title">زوایای رهایی و رانش خودکار</h3>
        <p class="machinery-card-text">
          محاسبه دقیق زاویه خروج (Draft Angle) متناسب با رئولوژی خمیر و فرمولاسیون آرد؛ تضمین جداشدن خودکار محصول و سقوط آرام روی کانوایر خروجی.
        </p>
        <ul class="machinery-card-specs mono">
          <li>Custom Rheology Draft Angles</li>
          <li>Zero-Tear Dough Ejection Geometry</li>
          <li>Hygienic Clean-in-Place Compatible</li>
        </ul>
      </div>
    </div>
  </div>
</section>

<!-- ========================================================================
     4. 4-STAGE MOLD MANUFACTURING LIFECYCLE
     ======================================================================== -->
<section class="pillar-workflow-section" aria-label="فرآیند ۴ مرحله‌ای ساخت قالب‌های صنعتی">
  <div class="container">
    <div class="section-header-centered">
      <h2 class="section-title">فرآیند ۴ مرحله‌ای مهندسی و ساخت قالب در ماشین دیزاین</h2>
    </div>

    <div class="workflow-steps-grid">
      <div class="workflow-step-card">
        <h3 class="step-title">طراحی هندسه محصول و حفره</h3>
        <p class="step-desc">مدل‌سازی سه‌بعدی محصول غذایی یا صنعتی، اعمال ضریب انقباض (Shrinkage) و تعیین تقسیم‌بندی درام روتاری.</p>
      </div>

      <div class="workflow-step-card">
        <h3 class="step-title">شبیه‌سازی دینامیکی و CAM</h3>
        <p class="step-desc">بررسی سینماتیک درگیری غلتک‌ها، استخراج استراتژی‌های ماشین‌کاری ۵ محوره و شبیه‌سازی عدم برخورد ابزار.</p>
      </div>

      <div class="workflow-step-card">
        <h3 class="step-title">تراش و فرزکاری CNC برنج</h3>
        <p class="step-desc">ماشین‌کاری فوق دقیق درام، حکاکی نقوش تزئینی لبه‌ها، پولیش پرداخت دستی آینه‌ای و تست راه‌اندازی بدون لقی.</p>
      </div>

      <div class="workflow-step-card">
        <h3 class="step-title">تست عملیاتی با خمیر مشتری</h3>
        <p class="step-desc">تست فیزیکی زنده قالب با خمیر واقعی مشتری در کارگاه مشهد (برج سامان)، تنظیم ضخامت و تحویل نهایی.</p>
      </div>
    </div>
  </div>
</section>

<!-- ========================================================================
     5. DUAL RFQ & TRUST SECTION (Symmetrical Baseline)
     ======================================================================== -->
<section class="pillar-rfq-dual-section" id="rfq-section" aria-label="استعلام و سفارش ساخت قالب‌های روتاری و صنعتی">
  <div class="container">
    <div class="rfq-dual-grid">

      <!-- Column 1: Trust & Contact Information -->
      <div class="rfq-incentive-panel">
        <div>
          <div class="rfq-trust-badge mono">
            <span class="rfq-led" aria-hidden="true"></span>
            <span>FOOD-GRADE ALLOY // ROTARY ACCURACY</span>
          </div>

          <h3 class="rfq-incentive-title">
            تضمین رهایش قطعه، عدم تغییر طعم و گارانتی کارکرد بدون سایش
          </h3>
          <p class="rfq-incentive-lead">
            تمام قالب‌های روتاری ساخته‌شده در ماشین دیزاین دارای ضمانت کتبی عدم چسبندگی خمیر و گارانتی کیفیت متریال برنج و برنز اروپایی هستند.
          </p>

          <div class="rfq-incentive-points">
            <div class="rfq-incentive-item">
              <div class="rfq-incentive-icon">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg>
              </div>
              <div class="rfq-incentive-text">
                <h4>امکان تست قالب با خمیر اختصاصی شما در مشهد</h4>
                <p>در کارگاه و شوروم ماشین دیزاین در برج سامان مشهد، پیش از تحویل، تست عملکرد قالب را از نزدیک مشاهده کنید.</p>
              </div>
            </div>

            <div class="rfq-incentive-item">
              <div class="rfq-incentive-icon">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg>
              </div>
              <div class="rfq-incentive-text">
                <h4>محرمانگی طرح و فرم انحصاری محصول غذایی</h4>
                <p>طرح ظاهری و نقوش قالب منحصراً برای کارخانه شما محفوظ مانده و به هیچ رقیبی واگذار نخواهد شد.</p>
              </div>
            </div>
          </div>
        </div>

        <!-- Fast Track Phone Chip -->
        <div class="rfq-direct-consult-chip">
          <div class="consult-chip-text">
            <span class="consult-chip-label">نیاز به مشاوره فنی یا ارسال نمونه محصول دارید؟</span>
            <span class="consult-chip-title">گفتگوی مستقیم با مهندس حسین وطن‌دوست</span>
          </div>
          <a href="tel:<?php echo esc_attr($mold_clean); ?>" class="consult-phone-btn mono" dir="ltr" title="تماس تلفنی مستقیم">
            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2">
              <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/>
            </svg>
            <span><?php echo esc_html($mold_display); ?></span>
          </a>
        </div>
      </div>

      <!-- Column 2: Streamlined Industrial Form Panel -->
      <div class="rfq-form-panel-custom">
        <div id="pillarRfqContainer">
          <div class="rfq-form-custom-header">
            <span class="rfq-form-tag mono">// MOLD &amp; TOOLING INTAKE</span>
            <h3>ثبت استعلام طراحی و ساخت قالب صنعتی</h3>
            <p>مشخصات اولیه محصول یا دستگاه خود را ثبت فرمایید؛ برآورد فنی و پیش‌نویس قرارداد ظرف ۲۴ ساعت کاری ارسال می‌گردد.</p>
          </div>

          <div id="pillarRfqNotice" class="rfq-hud-notice" style="display:none;" role="alert"></div>

          <form id="pillarRfqForm" class="rfq-form-grid-inner" method="POST">
            <input type="hidden" name="action" value="machinedesign_rfq_submit">
            <input type="hidden" name="source_pillar" value="mold-design">
            <input type="hidden" name="source_url" value="<?php echo esc_url( get_permalink() ); ?>">
            
            <div class="rfq-input-group">
              <label for="rfq-name">نام و نام خانوادگی / کارخانه متقاضی <span class="req-star">*</span></label>
              <input type="text" id="rfq-name" name="rfq_name" class="rfq-input-field" required placeholder="مثال: مهندس کاظمی - صنایع غذایی و بسته‌بندی">
            </div>

            <div class="rfq-input-group">
              <label for="rfq-phone">شماره همراه مستقیم کارشناس <span class="req-star">*</span></label>
              <input type="tel" id="rfq-phone" name="rfq_phone" class="rfq-input-field" required placeholder="۰۹۱۲XXXXXXX" dir="ltr">
            </div>

            <div class="rfq-input-group rfq-field-full">
              <label for="rfq-service-type">نوع قالب یا مکانیزم فرمینگ مد نظر <span class="req-star">*</span></label>
              <select id="rfq-service-type" name="rfq_service_type" class="rfq-select-field" required>
                <option value="" disabled selected>نوع قالب را انتخاب فرمایید...</option>
                <option value="rotary-drum-die">قالب‌های استوانه‌ای روتاری برنجی (دامپلینگ، پیراشکی، کلوچه و بیسکویت)</option>
                <option value="press-cutting-die">قالب‌های سنبه ماتریس، برش و پرس شیت‌متال</option>
                <option value="extrusion-die">قالب‌های اکستروژن و فرم‌دهی پروفیل‌های صنعتی</option>
                <option value="injection-mold">قالب‌های تزریق پلاستیک و قطعات پلیمری دقیق</option>
                <option value="other-tooling">سایر قالب‌ها و مکانیزم‌های خاص شکل‌دهی</option>
              </select>
            </div>

            <div class="rfq-input-group rfq-field-full">
              <label for="rfq-details">ابعاد، وزن محصول، ظرفیت تولید در ساعت و ویژگی‌های ماده</label>
              <textarea id="rfq-details" name="rfq_details" class="rfq-textarea-field" rows="3" placeholder="توضیحات درباره ابعاد مورد نظر محصول، جنس ماده اولیه (خمیر، ورق، پلیمر)، سرعت خط و نوع دستگاه موجود..."></textarea>
            </div>

            <button type="submit" id="pillarRfqSubmit" class="btn btn-primary rfq-submit-btn">
              <span>ارسال استعلام ساخت قالب و هماهنگی جلسه فنی</span>
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
            <h4 class="rfq-success-title">استعلام ساخت قالب با موفقیت ثبت شد</h4>
            <p class="rfq-success-text">
              اطلاعات قالب در سامانه پرونده‌های مهندسی ماشین دیزاین ذخیره گردید. کارشناسان فنی جهت بررسی ابعاد و هماهنگی تست با شما تماس خواهند گرفت.
            </p>
            <div class="rfq-success-code mono">
              <span>کد پیگیری: </span>
              <strong id="rfqTrackingPill">MD-MLD-2026</strong>
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
            <span>تضمین انحصار طرح قالب و محرمانگی صنعتی (NDA)</span>
            <small>طرح‌های اختصاصی قالب‌های غذایی و صنعتی مشتریان هرگز بازتولید نمی‌شوند.</small>
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
      submitBtn.innerHTML = '<span>در حال ثبت استعلام قالب...</span>';
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
        submitBtn.innerHTML = '<span>ارسال استعلام ساخت قالب و هماهنگی جلسه فنی</span><svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14M12 5l7 7-7 7"/></svg>';

        if (data && data.success) {
          var code = data.data && (data.data.tracking_code || data.data.tracking) ? (data.data.tracking_code || data.data.tracking) : 'MD-MLD-2026';
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
        submitBtn.innerHTML = '<span>ارسال استعلام ساخت قالب و هماهنگی جلسه فنی</span><svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14M12 5l7 7-7 7"/></svg>';
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
