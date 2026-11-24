<?php
/**
 * Template Name: MachineDesign Axima Flagship Landing Page
 * Description: Executive Industrial & Manufacturing Engineering Portal inspired by Axima Architecture
 * Author: MachineDesign.ir // حسین وطن‌دوست
 */
defined( 'ABSPATH' ) || exit;

get_header();
?>

  <!-- ========================================================================
       2. MONUMENTAL INDUSTRIAL HERO SECTION
       ======================================================================== -->
  <section class="hero-slider-section">
    <div class="hero-bg-overlay"></div>
    <?php
      $md_fp_hero = function_exists( 'md_get_page_hero_image' ) ? md_get_page_hero_image( 'front-page' ) : array(
        'url' => get_template_directory_uri() . '/assets/images/heroes/hero-machine-design.webp',
        'alt' => 'طراحی ماشین‌آلات صنعتی ماشین دیزاین',
        'width' => 1376,
        'height' => 768,
      );
    ?>
    <img src="<?php echo esc_url( $md_fp_hero['url'] ); ?>" alt="<?php echo esc_attr( $md_fp_hero['alt'] ); ?>" width="<?php echo esc_attr( $md_fp_hero['width'] ); ?>" height="<?php echo esc_attr( $md_fp_hero['height'] ); ?>" class="hero-bg-image" loading="eager" fetchpriority="high" decoding="async" />

    <div class="container">
      <div class="md-front-hero-grid">
      <div class="hero-content">
        <div class="hero-badge fade-up stagger-1" dir="rtl">
          <span class="pulse-indicator" aria-hidden="true"></span>
          <span>استانداردهای بین‌المللی ISO 12100 &amp; ASME Y14.5</span>
        </div>
        <h1 class="hero-title fade-up stagger-2">
          مهندسی دقیق، طراحی خطوط تولید و <span>بومی‌سازی ماشین‌آلات صنعتی</span>
        </h1>
        <p class="hero-desc fade-up stagger-3">
          ما با ترکیب بیش از ۱۵ سال تجربه عملیاتی در صنایع غذایی و بسته‌بندی، شبیه‌سازی پیشرفته تنش و ارتعاشات FEA، و تسلط کامل به استاندارد ساخت DFMA، ریسک سرمایه‌گذاری و توقف کارخانجات را به صفر می‌رسانیم.
        </p>
        <div class="hero-actions fade-up stagger-4">
          <a href="#rfq-section" class="btn btn-accent">
            <span>درخواست جلسه ارزیابی فنی و امضای NDA</span>
            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4"><path d="M19 12H5M12 19l-7-7 7-7"/></svg>
          </a>
          <a href="#services" class="btn btn-outline-white">
            <span>مشاهده ۶ ستون خدمات و پروژه‌ها</span>
          </a>
        </div>
      </div>
      <div class="md-front-hero-visual md-hero-visual-col">
        <?php if ( function_exists( 'md_render_hero_3d_stage' ) ) { md_render_hero_3d_stage( 'front-page' ); } ?>
      </div>
      </div>
    </div>
  </section>

  <!-- ========================================================================
       3. 4 KEY INDUSTRIAL CHALLENGES WE SOLVE (OVERLAPPING HERO BOTTOM)
       ======================================================================== -->
  <div class="floating-pillars-wrap">
    <div class="container">
      <div class="challenges-section-header" style="margin-bottom: 20px; text-align: center;">
        <span class="section-subtitle" style="color:var(--color-accent); font-size:0.80rem; font-weight:700;">عیب‌یابی، بهینه‌سازی و تضمین تولید</span>
        <h2 style="font-size:1.4rem; font-weight:800; color:#ffffff; margin:4px 0 0 0;">۴ چالش کلیدی کارخانجات صنعتی که حل می‌کنیم</h2>
      </div>
      <div class="floating-pillars-grid">
        
        <!-- Challenge 1 -->
        <div class="floating-card">
          <div>
            <div class="floating-card-icon">
              <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 12h-4l-3 9L9 3l-3 9H2"/></svg>
            </div>
            <h3 class="floating-card-title">توقف ناگهانی خط و ارتعاشات</h3>
            <p class="floating-card-desc">عیب‌یابی ارتعاشات بحرانی، رفع خرابی مکرر یاتاقان‌ها و ناترازی شفت‌ها با پایش دینامیکی و استانداردهای ISO 10816 و ISO 20816.</p>
          </div>
          <a href="<?php echo esc_url( home_url( '/services/factory-troubleshooting/' ) ); ?>" style="font-size:0.82rem; font-weight:700; color:var(--color-primary); margin-top:14px; display:inline-block;">راهکار رفع توقف خط ←</a>
        </div>

        <!-- Challenge 2 -->
        <div class="floating-card">
          <div>
            <div class="floating-card-icon">
              <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><path d="M16 8h-6a2 2 0 1 0 0 4h4a2 2 0 1 1 0 4H8"/><path d="M12 18V6"/></svg>
            </div>
            <h3 class="floating-card-title">هزینه بالای ساخت و دوباره‌کاری</h3>
            <p class="floating-card-desc">کاهش تا ۳۵٪ بهای تمام‌شده ساخت با بازطراحی مکانیزم‌ها، حذف دوباره‌کاری در کارگاه و پیاده‌سازی متدولوژی ساخت DFMA.</p>
          </div>
          <a href="<?php echo esc_url( home_url( '/services/machine-design/' ) ); ?>" style="font-size:0.82rem; font-weight:700; color:var(--color-primary); margin-top:14px; display:inline-block;">راهکار بهینه‌سازی DFMA ←</a>
        </div>

        <!-- Challenge 3 -->
        <div class="floating-card">
          <div>
            <div class="floating-card-icon">
              <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/><path d="m9 12 2 2 4-4"/></svg>
            </div>
            <h3 class="floating-card-title">ریسک خرید ماشین‌آلات (چین/دبی)</h3>
            <p class="floating-card-desc">ممیزی فنی و اعتبارسنجی سازندگان خارجی، تدوین پیوست فنی قرارداد و نظارت بر تست‌های تحویل کارخانه‌ای (FAT) پیش از پرداخت وجه.</p>
          </div>
          <a href="<?php echo esc_url( home_url( '/services/machinery-inspection/' ) ); ?>" style="font-size:0.82rem; font-weight:700; color:var(--color-primary); margin-top:14px; display:inline-block;">راهکار ممیزی خرید خارجی ←</a>
        </div>

        <!-- Challenge 4 -->
        <div class="floating-card">
          <div>
            <div class="floating-card-icon">
              <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/><polyline points="14 2 14 8 20 8"/><line x1="16" y1="13" x2="8" y2="13"/><line x1="16" y1="17" x2="8" y2="17"/><polyline points="10 9 9 9 8 9"/></svg>
            </div>
            <h3 class="floating-card-title">کمبود مستندات ساخت و GD&amp;T</h3>
            <p class="floating-card-desc">تولید کامل پکیج نقشه‌های کارگاهی، تلرانس‌گذاری هندسی ASME Y14.5، انطباقات ISO 286 و تدوین شناسنامه فنی دستگاه‌ها.</p>
          </div>
          <a href="<?php echo esc_url( home_url( '/services/engineering-mentorship/' ) ); ?>" style="font-size:0.82rem; font-weight:700; color:var(--color-primary); margin-top:14px; display:inline-block;">راهکار استانداردسازی نقشه‌ها ←</a>
        </div>

      </div>
    </div>
  </div>

  <!-- ========================================================================
       4. ABOUT & ENGINEERING CREDIBILITY SECTION
       ======================================================================== -->
  <section class="about-section" id="about">
    <div class="container">
      <div class="about-grid">
        
        <!-- Visual Column -->
        <div class="about-visual-col">
          <div class="about-image-frame">
            <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/heroes/hero-production-line.webp' ); ?>" alt="کارگاه ساخت ماشین‌آلات صنعتی ماشین دیزاین">
          </div>
          <div class="about-floating-badge">
            <span class="badge-number">۱۵+</span>
            <div class="badge-text">
              <strong>سال تجربه تخصصی</strong><br>
              در سنتز مکانیزم‌ها، طراحی خطوط و بومی‌سازی قطعات صنعتی
            </div>
          </div>
        </div>

        <!-- Content Column -->
        <div class="about-content-col">
          <div class="section-heading">
            <span class="section-subtitle">استانداردهای جهانی در مهندسی صنعتی</span>
            <h2 class="section-title">پیوند دانش آکادمیک سطح اول با واقعیت‌های اجرایی کف کارگاه</h2>
            <p class="section-desc">
              تیم مهندسی ماشین دیزاین به سرپرستی مهندس حسین وطن‌دوست، با تمرکز بر حل چالش‌های واقعی تولید، پلی مطمئن میان فرضیات تئوری و قطعات ساخته‌شده در کارگاه ایجاد کرده است. رویکرد ما «طراحی برای قابلیت ساخت و مونتاژ» (DFMA) است؛ تا طرح‌ها بدون انحراف و با حداقل هزینه ماشین‌کاری به خط تولید تحویل شوند.
            </p>
          </div>

          <!-- Key Checklist -->
          <div class="about-checklist">
            <div class="checklist-item">
              <svg class="checklist-icon" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M20 6 9 17l-5-5"/></svg>
              <span>تضمین صددرصدی کارکرد بدون لرزش خطوط</span>
            </div>
            <div class="checklist-item">
              <svg class="checklist-icon" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M20 6 9 17l-5-5"/></svg>
              <span>تحویل نقشه‌های کامل ساخت منطبق با GD&amp;T</span>
            </div>
            <div class="checklist-item">
              <svg class="checklist-icon" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M20 6 9 17l-5-5"/></svg>
              <span>پایبندی سخت‌گیرانه به پیمان‌نامه محرمانگی (NDA)</span>
            </div>
            <div class="checklist-item">
              <svg class="checklist-icon" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M20 6 9 17l-5-5"/></svg>
              <span>همراهی و نظارت تا فاز بهره‌برداری آزمایشی (FAT)</span>
            </div>
          </div>

          <!-- Metrics Strip -->
          <div class="about-metrics-strip">
            <div class="metric-item">
              <div class="metric-number">
                <span class="counter-val" data-target="150" data-prefix="+">+۱۵۰</span>
              </div>
              <span class="metric-label">پروژه‌های موفق خطوط و مکانیزم‌ها</span>
            </div>
            <div class="metric-item">
              <div class="metric-number">
                <span class="counter-val" data-target="40" data-prefix="+">+۴۰</span>
              </div>
              <span class="metric-label">خطوط تولید راه‌اندازی‌شده صنعتی</span>
            </div>
            <div class="metric-item">
              <div class="metric-number">
                <span class="counter-val" data-target="98" data-suffix="٪">۹۸٪</span>
              </div>
              <span class="metric-label">رضایت کارخانجات صنعتی معتبر</span>
            </div>
          </div>

        </div>

      </div>
    </div>
  </section>

  <!-- ========================================================================
       5. 6 CORE SERVICE PILLARS (AXIMA INDUSTRIAL SERVICE CARDS)
       ======================================================================== -->
  <section class="services-section" id="services">
    <div class="container">
      
      <div class="section-heading text-center">
        <span class="section-subtitle">سبد جامع خدمات مهندسی مکانیک</span>
        <h2 class="section-title">۶ ستون تخصصی ماشین دیزاین در چرخه عمر ماشین‌آلات</h2>
        <p class="section-desc">
          از مرحله ایده و امکان‌سنجی اولیه تا مهندسی معکوس، ساخت پروتوتایپ و بازرسی خرید خارجی؛ خدمات ما تمام نیازهای فناورانه کارخانجات را پوشش می‌دهد.
        </p>
      </div>

      <div class="services-grid">
        
        <!-- Pillar 01 -->
        <article class="service-card" id="pillar-1">
          <div class="service-card-top">
            <div class="service-card-header">
              <div class="service-icon-box">
                <svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="3"/><path d="M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 0 1 0 2.83 2 2 0 0 1-2.83 0l-.06-.06a1.65 1.65 0 0 0-1.82-.33 1.65 1.65 0 0 0-1 1.51V21a2 2 0 0 1-2 2 2 2 0 0 1-2-2v-.09A1.65 1.65 0 0 0 9 19.4a1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 0 1-2.83 0 2 2 0 0 1 0-2.83l.06-.06a1.65 1.65 0 0 0 .33-1.82 1.65 1.65 0 0 0-1.51-1H3a2 2 0 0 1-2-2 2 2 0 0 1 2-2h.09A1.65 1.65 0 0 0 4.6 9a1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 0 1 0-2.83 2 2 0 0 1 2.83 0l.06.06a1.65 1.65 0 0 0 1.82.33H9a1.65 1.65 0 0 0 1-1.51V3a2 2 0 0 1 2-2 2 2 0 0 1 2 2v.09a1.65 1.65 0 0 0 1 1.51 1.65 1.65 0 0 0 1.82-.33l.06-.06a2 2 0 0 1 2.83 0 2 2 0 0 1 0 2.83l-.06.06a1.65 1.65 0 0 0-.33 1.82V9a1.65 1.65 0 0 0 1.51 1H21a2 2 0 0 1 2 2 2 2 0 0 1-2 2h-.09a1.65 1.65 0 0 0-1.51 1z"/></svg>
              </div>
              <span class="service-code-tag">SRV-01</span>
            </div>
            <h3 class="service-card-title"><a href="<?php echo esc_url( home_url( '/services/machine-design/' ) ); ?>" style="color: inherit; text-decoration: none;">طراحی ماشین‌آلات و خطوط تولید (DFMA)</a></h3>
            <p class="service-card-desc">سنتز مکانیزم‌ها، خطوط بسته‌بندی پیوسته، کانوایرهای اتوماتیک، مهندسی معکوس ماشین‌آلات اروپایی و بومی‌سازی با استانداردهای ساخت کارگاهی.</p>
            <div class="service-bullets">
              <div class="service-bullet-item"><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M20 6 9 17l-5-5"/></svg><span>مدل‌سازی سه‌بعدی و تلرانس‌گذاری ASME Y14.5</span></div>
              <div class="service-bullet-item"><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M20 6 9 17l-5-5"/></svg><span>انتخاب آلیاژها و عملیات حرارتی DIN / AISI</span></div>
              <div class="service-bullet-item"><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M20 6 9 17l-5-5"/></svg><span>دفترچه محاسبات مقاومت مصالح و اجزای ماشین</span></div>
            </div>
          </div>
          <div class="service-card-bottom">
            <a href="<?php echo esc_url( home_url( '/services/machine-design/' ) ); ?>" class="service-link">مشاهده جزئیات و استعلام فنی ←</a>
            <span class="mono" style="font-size:0.75rem; color:var(--text-muted);">VDI-2221</span>
          </div>
        </article>

        <!-- Pillar 02 -->
        <article class="service-card" id="pillar-2">
          <div class="service-card-top">
            <div class="service-card-header">
              <div class="service-icon-box">
                <svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 12h-4l-3 9L9 3l-3 9H2"/></svg>
              </div>
              <span class="service-code-tag">SRV-02</span>
            </div>
            <h3 class="service-card-title"><a href="<?php echo esc_url( home_url( '/services/factory-troubleshooting/' ) ); ?>" style="color: inherit; text-decoration: none;">مشاوره فنی کارخانه‌ها و عیب‌یابی ارتعاشات</a></h3>
            <p class="service-card-desc">حل ریشه‌ای خرابی مکرر یاتاقان‌ها، ارتعاشات غیرمجاز روتورهای دوار، آنالیز طیفی FFT، رفع گلوگاه‌های توقف خط تولید و بهینه‌سازی فرآیند.</p>
            <div class="service-bullets">
              <div class="service-bullet-item"><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M20 6 9 17l-5-5"/></svg><span>پایش وضعیت بر اساس استانداردهای ISO 10816 و ISO 20816</span></div>
              <div class="service-bullet-item"><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M20 6 9 17l-5-5"/></svg><span>بالانس درجا روتورها و الاینمنت لیزری شفت‌ها</span></div>
              <div class="service-bullet-item"><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M20 6 9 17l-5-5"/></svg><span>گزارش ریشه‌یابی خرابی (RCFA) با اقدام اصلاحی</span></div>
            </div>
          </div>
          <div class="service-card-bottom">
            <a href="<?php echo esc_url( home_url( '/services/factory-troubleshooting/' ) ); ?>" class="service-link">مشاهده جزئیات و استعلام فنی ←</a>
            <span class="mono" style="font-size:0.75rem; color:var(--text-muted);">ISO 10816 / 20816</span>
          </div>
        </article>

        <!-- Pillar 03 -->
        <article class="service-card" id="pillar-3">
          <div class="service-card-top">
            <div class="service-card-header">
              <div class="service-icon-box">
                <svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 2v4M12 18v4M4.93 4.93l2.83 2.83M16.24 16.24l2.83 2.83M2 12h4M18 12h4M4.93 19.07l2.83-2.83M16.24 7.76l2.83-2.83"/></svg>
              </div>
              <span class="service-code-tag">SRV-03</span>
            </div>
            <h3 class="service-card-title"><a href="<?php echo esc_url( home_url( '/services/rd-prototyping/' ) ); ?>" style="color: inherit; text-decoration: none;">تحقیق و توسعه (R&amp;D) و ساخت نمونه اولیه</a></h3>
            <p class="service-card-desc">مشاوره سازمانی دپارتمان‌های تحقیق و توسعه، توسعه محصول نوآورانه، امکان‌سنجی خطوط تولید جدید، اجرای DFMEA و ساخت پروتوتایپ‌های صنعتی.</p>
            <div class="service-bullets">
              <div class="service-bullet-item"><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M20 6 9 17l-5-5"/></svg><span>امکان‌سنجی فنی و اقتصادی طرح‌های نوآورانه</span></div>
              <div class="service-bullet-item"><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M20 6 9 17l-5-5"/></svg><span>شبیه‌سازی دینامیکی و سینماتیکی مکانیزم‌ها</span></div>
              <div class="service-bullet-item"><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M20 6 9 17l-5-5"/></svg><span>ساخت نمونه اولیه عملکردی در سطح TRL 7</span></div>
            </div>
          </div>
          <div class="service-card-bottom">
            <a href="<?php echo esc_url( home_url( '/services/rd-prototyping/' ) ); ?>" class="service-link">مشاهده جزئیات و استعلام فنی ←</a>
            <span class="mono" style="font-size:0.75rem; color:var(--text-muted);">DFMEA-STD</span>
          </div>
        </article>

        <!-- Pillar 04 -->
        <article class="service-card" id="pillar-4">
          <div class="service-card-top">
            <div class="service-card-header">
              <div class="service-icon-box">
                <svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M2 3h6a4 4 0 0 1 4 4v14a3 3 0 0 0-3-3H2z"/><path d="M22 3h-6a4 4 0 0 0-4 4v14a3 3 0 0 1 3-3h7z"/></svg>
              </div>
              <span class="service-code-tag">SRV-04</span>
            </div>
            <h3 class="service-card-title"><a href="<?php echo esc_url( home_url( '/services/engineering-mentorship/' ) ); ?>" style="color: inherit; text-decoration: none;">منتورینگ فردی مهندسی و شبیه‌سازی</a></h3>
            <p class="service-card-desc">انتقال تجربیات میدانی به مهندسان مکانیک و طراحان صنعتی در زمینه سالیدورکس پیشرفته، شبیه‌سازی تنش FEA با Ansys، تلرانس‌گذاری هندسی و اصول ساخت.</p>
            <div class="service-bullets">
              <div class="service-bullet-item"><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M20 6 9 17l-5-5"/></svg><span>مدل‌سازی پروژه‌محور و اسمبلی‌های سنگین</span></div>
              <div class="service-bullet-item"><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M20 6 9 17l-5-5"/></svg><span>تحلیل المان محدود استاتیکی و خستگی قطعات</span></div>
              <div class="service-bullet-item"><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M20 6 9 17l-5-5"/></svg><span>آماده‌سازی برای پروژه‌های طراحی بین‌المللی</span></div>
            </div>
          </div>
          <div class="service-card-bottom">
            <a href="<?php echo esc_url( home_url( '/services/engineering-mentorship/' ) ); ?>" class="service-link">مشاهده جزئیات و استعلام فنی ←</a>
            <span class="mono" style="font-size:0.75rem; color:var(--text-muted);">SOLIDWORKS</span>
          </div>
        </article>

        <!-- Pillar 05 -->
        <article class="service-card" id="pillar-5">
          <div class="service-card-top">
            <div class="service-card-header">
              <div class="service-icon-box">
                <svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/></svg>
              </div>
              <span class="service-code-tag">SRV-05</span>
            </div>
            <h3 class="service-card-title"><a href="<?php echo esc_url( home_url( '/services/corporate-training/' ) ); ?>" style="color: inherit; text-decoration: none;">آموزش و ارتقای تیم‌های فنی کارخانجات</a></h3>
            <p class="service-card-desc">دوره‌های تخصصی درون‌سازمانی در محل کارخانه، آموزش نقشه‌خوانی صنعتی به پرسنل تولید، استانداردسازی روش‌های مونتاژ و نگهداری پیشگیرانه (PM).</p>
            <div class="service-bullets">
              <div class="service-bullet-item"><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M20 6 9 17l-5-5"/></svg><span>نقشه‌خوانی صنعتی، علائم انطباقات و صافی سطح</span></div>
              <div class="service-bullet-item"><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M20 6 9 17l-5-5"/></svg><span>استانداردسازی فرآیند ساخت و کنترل کیفیت (QC)</span></div>
              <div class="service-bullet-item"><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M20 6 9 17l-5-5"/></svg><span>آموزش عیب‌یابی مکانیزم‌های هیدرولیک و پنوماتیک</span></div>
            </div>
          </div>
          <div class="service-card-bottom">
            <a href="<?php echo esc_url( home_url( '/services/corporate-training/' ) ); ?>" class="service-link">مشاهده جزئیات و استعلام فنی ←</a>
            <span class="mono" style="font-size:0.75rem; color:var(--text-muted);">CORPORATE</span>
          </div>
        </article>

        <!-- Pillar 06 -->
        <article class="service-card" id="pillar-6">
          <div class="service-card-top">
            <div class="service-card-header">
              <div class="service-icon-box">
                <svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><path d="m2 12 20 0"/><path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"/></svg>
              </div>
              <span class="service-code-tag">SRV-06</span>
            </div>
            <h3 class="service-card-title"><a href="<?php echo esc_url( home_url( '/services/machinery-inspection/' ) ); ?>" style="color: inherit; text-decoration: none;">مشاوره و کارشناسی خرید خارجی (FAT)</a></h3>
            <p class="service-card-desc">کارشناسی خرید ماشین‌آلات و خطوط تولید از چین و دبی، ارزیابی فنی و ممیزی سازندگان خارجی، تدوین پیوست فنی قرارداد و تست‌های پیش از حمل (FAT/SAT).</p>
            <div class="service-bullets">
              <div class="service-bullet-item"><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M20 6 9 17l-5-5"/></svg><span>ممیزی میدانی کارخانجات در شانگهای، شنژن و فوشان</span></div>
              <div class="service-bullet-item"><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M20 6 9 17l-5-5"/></svg><span>تست بارگذاری، انطباق قطعات الکتریکال و مکانیکال</span></div>
              <div class="service-bullet-item"><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M20 6 9 17l-5-5"/></svg><span>جلوگیری از واردات تجهیزات فاقد اصالت و غیراستاندارد</span></div>
            </div>
          </div>
          <div class="service-card-bottom">
            <a href="<?php echo esc_url( home_url( '/services/machinery-inspection/' ) ); ?>" class="service-link">مشاهده جزئیات و استعلام فنی ←</a>
            <span class="mono" style="font-size:0.75rem; color:var(--text-muted);">FAT-INSPECT</span>
          </div>
        </article>

      </div>
    </div>
  </section>

  <!-- ========================================================================
       6. FULL-WIDTH INDUSTRIAL WORKSHOP & STANDARDS BANNER (.md-standards-sec)
       ======================================================================== -->
  <style>
  /* Scoped Standards Section (.md-standards-sec) */
  .md-standards-sec {
    position: relative;
    background-color: var(--color-primary-dark, #0a0e17);
    padding: 90px 0;
    overflow: hidden;
  }
  .md-standards-sec .md-standards-overlay {
    position: absolute;
    inset: 0;
    background: linear-gradient(180deg, rgba(15, 23, 42, 0.90) 0%, rgba(15, 23, 42, 0.96) 100%); /* taste-skill-ignore */
    z-index: 1;
    pointer-events: none;
  }
  .md-standards-sec .md-standards-badge {
    display: inline-flex;
    align-items: center;
    background: rgba(217, 119, 6, 0.12);
    border: 1px solid rgba(217, 119, 6, 0.35); /* taste-skill-ignore */
    color: #D97706;
    letter-spacing: 0;
    font-size: 0.82rem;
    font-weight: 700;
    padding: 6px 14px;
    border-radius: 4px;
    margin-bottom: 16px;
  }
  .md-standards-sec .md-standards-heading {
    color: #FFFFFF;
    font-size: clamp(1.45rem, 2.3vw, 2rem);
    font-weight: 800;
    line-height: 1.45;
    margin: 0 0 16px 0;
  }
  .md-standards-sec .md-standards-desc {
    color: #CBD5E1 !important;
    font-size: 0.95rem;
    line-height: 1.8;
    margin: 0;
  }
  .md-standards-sec .md-standards-cards-grid {
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    gap: 12px;
  }
  .md-standards-sec .md-standards-card {
    background: rgba(30, 41, 59, 0.72);
    backdrop-filter: blur(8px); /* taste-skill-ignore */
    -webkit-backdrop-filter: blur(8px);
    border: 1px solid rgba(148, 163, 184, 0.2); /* taste-skill-ignore */
    border-right: 3px solid #D97706;
    padding: 14px 16px;
    border-radius: 6px;
    display: flex;
    flex-direction: column;
    gap: 6px;
    text-align: right;
  }
  .md-standards-sec .md-standards-card-span {
    grid-column: 1 / -1;
  }
  .md-standards-sec .md-standards-code {
    font-family: var(--font-tech, 'Courier New', monospace);
    font-size: 0.86rem;
    font-weight: 700;
    color: #D97706;
    display: block;
    text-align: right;
    direction: ltr;
  }
  .md-standards-sec .md-standards-title {
    font-family: inherit;
    font-size: 0.86rem;
    font-weight: 600;
    color: #F1F5F9;
    letter-spacing: 0;
    display: block;
  }
  .md-standards-sec .md-standards-cta-banner {
    margin-top: 48px;
    background: rgba(15, 23, 42, 0.85);
    border: 1px solid rgba(217, 119, 6, 0.35); /* taste-skill-ignore */
    border-radius: 8px;
    padding: 24px 32px;
  }
  .md-standards-sec .md-standards-cta-title {
    color: #FFFFFF;
    font-size: 1.15rem;
    font-weight: 800;
    margin: 0 0 8px 0;
  }
  .md-standards-sec .md-standards-cta-desc {
    color: #CBD5E1;
    font-size: 0.88rem;
    line-height: 1.7;
    margin: 0;
  }
  .md-standards-sec .md-standards-cta-btn {
    background: #D97706 !important;
    color: #0B0D11 !important;
    font-weight: 800 !important;
    border: none !important;
    display: inline-flex;
    align-items: center;
    justify-content: center;
    gap: 8px;
    border-radius: 6px;
    text-decoration: none;
    transition: opacity 0.2s ease, transform 0.2s ease;
  }
  .md-standards-sec .md-standards-cta-btn:hover,
  .md-standards-sec .md-standards-cta-btn:focus-visible,
  .md-standards-sec .md-standards-cta-btn:active {
    background: #F59E0B !important;
    color: #0B0D11 !important;
    opacity: 1 !important;
    transform: translateY(-2px);
    box-shadow: 0 10px 26px rgba(217, 119, 6, 0.32) !important;
  }
  .md-standards-sec .md-standards-cta-btn:hover span,
  .md-standards-sec .md-standards-cta-btn:focus-visible span,
  .md-standards-sec .md-standards-cta-btn:active span,
  .md-standards-sec .md-standards-cta-btn:hover svg,
  .md-standards-sec .md-standards-cta-btn:focus-visible svg {
    color: #0B0D11 !important;
    stroke: #0B0D11 !important;
  }
  .md-standards-sec .md-standards-cta-btn span,
  .md-standards-sec .md-standards-cta-btn svg {
    color: #0B0D11 !important;
    stroke: #0B0D11 !important;
  }
  @media (min-width: 1024px) {
    .md-standards-sec .md-standards-top-grid {
      display: grid;
      grid-template-columns: 1fr 1.15fr;
      gap: 3rem;
      align-items: center;
    }
    .md-standards-sec .md-standards-cta-banner {
      display: flex;
      align-items: center;
      justify-content: space-between;
      gap: 2rem;
      text-align: right;
    }
    .md-standards-sec .md-standards-cta-btn {
      width: auto !important;
      flex-shrink: 0;
      white-space: nowrap;
      padding: 14px 28px !important;
    }
  }
  @media (max-width: 1023.98px) {
    .md-standards-sec .md-standards-top-grid {
      display: grid;
      grid-template-columns: 1fr;
      gap: 2rem;
    }
    .md-standards-sec .md-standards-cta-banner {
      display: flex;
      flex-direction: column;
      gap: 1.5rem;
      text-align: right;
    }
    .md-standards-sec .md-standards-cta-btn {
      width: auto;
      align-self: flex-start;
      padding: 12px 24px !important;
    }
  }
  @media (max-width: 767.98px) {
    .md-standards-sec {
      padding: 60px 0;
    }
    .md-standards-sec .md-standards-cta-banner {
      padding: 20px;
    }
    .md-standards-sec .md-standards-cta-btn {
      width: 100% !important;
    }
  }
  @media (max-width: 575.98px) {
    .md-standards-sec .md-standards-cards-grid {
      grid-template-columns: 1fr;
    }
  }
  </style>

  <section class="workshop-banner-section md-standards-sec">
    <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/heroes/hero-machine-design.webp' ); ?>" alt="استانداردهای مهندسی ساخت ماشین دیزاین" class="workshop-bg-img">
    <div class="md-standards-overlay" aria-hidden="true"></div>
    
    <div class="container" style="position:relative; z-index:2;">
      <div class="md-standards-top-grid">
        <div class="md-standards-content">
          <span class="md-standards-badge">تعهد خدشه‌ناپذیر به استانداردهای بین‌المللی</span>
          <h2 class="section-title light md-standards-heading">طراحی مهندسی یعنی انطباق بی قید و شرط با ایمنی و تلرانس</h2>
          <p class="section-desc light md-standards-desc">
            هر ماشینی که در ماشین دیزاین طراحی یا کارشناسی می‌شود، تحت ۵ لایه ارزیابی استانداردهای مرجع بین‌المللی قرار می‌گیرد؛ از ارزیابی ریسک مکانیکی و تابلوبرق تا رفتار خستگی متریال در بارگذاری‌های بحرانی.
          </p>
        </div>

        <div class="md-standards-cards-grid">
          <div class="md-standards-card">
            <code class="md-standards-code" dir="ltr">ISO 12100:2010</code>
            <span class="md-standards-title">ایمنی ماشین‌آلات</span>
          </div>
          <div class="md-standards-card">
            <code class="md-standards-code" dir="ltr">ISO 10816 / ISO 20816</code>
            <span class="md-standards-title">شدت ارتعاشات مجاز</span>
          </div>
          <div class="md-standards-card">
            <code class="md-standards-code" dir="ltr">ASME Y14.5</code>
            <span class="md-standards-title">تلرانس‌گذاری GD&amp;T</span>
          </div>
          <div class="md-standards-card">
            <code class="md-standards-code" dir="ltr">VDI 2221</code>
            <span class="md-standards-title">متدولوژی سنتز ماشین</span>
          </div>
          <div class="md-standards-card md-standards-card-span">
            <code class="md-standards-code" dir="ltr">DIN 743</code>
            <span class="md-standards-title">طراحی محورها و شفت‌ها</span>
          </div>
        </div>
      </div>

      <div class="md-standards-cta-banner">
        <div class="md-standards-cta-info">
          <h4 class="md-standards-cta-title">نیاز به ممیزی خط یا حل معضل ارتعاشات دارید؟</h4>
          <p class="md-standards-cta-desc">تیم ارشد مهندسی ماشین دیزاین ظرف ۴۸ ساعت پس از بررسی اولیه، امکان اعزام به کارخانه جهت پایش ارتعاشات و ارزیابی عیوب را دارد.</p>
        </div>
        <a href="#rfq-section" class="btn btn-accent md-standards-cta-btn">
          <span>هماهنگی جلسه فنی و ممیزی خط</span>
          <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4" aria-hidden="true"><path d="M19 12H5M12 19l-7-7 7-7"/></svg>
        </a>
      </div>
    </div>
  </section>

  <!-- ========================================================================
       7. FEATURED CASE STUDIES & PROJECTS GRID
       ======================================================================== -->
  <section class="projects-section" id="projects">
    <div class="container">
      
      <div class="section-heading text-center">
        <span class="section-subtitle">پروژه‌های اجرا شده و در حال ساخت</span>
        <h2 class="section-title">سوابق طراحی، بومی‌سازی و ممیزی ماشین‌آلات</h2>
        <p class="section-desc">نمونه‌هایی از پروژه‌های تحویل‌شده در صنایع غذایی، بسته‌بندی، خطوط کانوایر و ممیزی تجهیزات خارجی.</p>
      </div>

      <!-- Filter Bar (Dynamic Taxonomy Terms) -->
      <?php
      $project_terms = get_terms( array(
          'taxonomy'   => 'project_category',
          'hide_empty' => true,
      ) );
      ?>
      <div class="projects-filter-bar">
        <button class="filter-btn active" data-filter="all">همه پروژه‌ها</button>
        <?php if ( ! empty( $project_terms ) && ! is_wp_error( $project_terms ) ) : ?>
          <?php foreach ( $project_terms as $p_term ) : ?>
            <button class="filter-btn" data-filter="<?php echo esc_attr( $p_term->slug ); ?>"><?php echo esc_html( $p_term->name ); ?></button>
          <?php endforeach; ?>
        <?php endif; ?>
      </div>

      <!-- Dynamic Projects Grid (WP_Query limit: 6) -->
      <?php
      $projects_query = new WP_Query( array(
          'post_type'           => 'project',
          'post_status'         => 'publish',
          'posts_per_page'      => 6,
          'ignore_sticky_posts' => true,
          'orderby'             => 'date',
          'order'               => 'DESC',
      ) );
      ?>
      <div class="projects-grid">
        <?php if ( $projects_query->have_posts() ) : ?>
          <?php while ( $projects_query->have_posts() ) : $projects_query->the_post();
            $pid = get_the_ID();
            $p_cats = get_the_terms( $pid, 'project_category' );
            $cat_name = ( ! empty( $p_cats ) && ! is_wp_error( $p_cats ) ) ? $p_cats[0]->name : 'پروژه مهندسی';
            $cat_slug = ( ! empty( $p_cats ) && ! is_wp_error( $p_cats ) ) ? $p_cats[0]->slug : 'all';

            if ( has_post_thumbnail() ) {
                $img_url = get_the_post_thumbnail_url( $pid, 'large' );
            } else {
                $custom_img = get_post_meta( $pid, '_md_project_image_url', true );
                $img_url = ! empty( $custom_img ) ? $custom_img : get_template_directory_uri() . '/assets/images/heroes/hero-machine-design.webp';
            }

            $kpi = get_post_meta( $pid, '_md_project_kpi', true );
            $spec = get_post_meta( $pid, '_md_project_spec', true );
            if ( empty( $spec ) ) {
                $spec = 'DIN / ISO';
            }
          ?>
            <article class="project-card md-card-unified" data-category="<?php echo esc_attr( $cat_slug ); ?>">
              <div class="md-card-thumb-wrap">
                <img src="<?php echo esc_url( $img_url ); ?>" alt="<?php the_title_attribute(); ?>" loading="lazy" />
                <span class="md-card-badge"><?php echo esc_html( $cat_name ); ?></span>
              </div>
              <div class="md-card-body">
                <h3 class="md-card-title">
                  <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                </h3>
                <p class="md-card-excerpt">
                  <?php
                  if ( has_excerpt() ) {
                      echo esc_html( get_the_excerpt() );
                  } else {
                      echo esc_html( wp_trim_words( get_the_content(), 20, '...' ) );
                  }
                  ?>
                </p>
                <?php if ( ! empty( $kpi ) ) : ?>
                  <div class="md-card-kpi-box">
                    <span class="md-card-kpi-label">KPI:</span>
                    <span class="md-card-kpi-value"><?php echo esc_html( $kpi ); ?></span>
                  </div>
                <?php endif; ?>
                <div class="md-card-footer">
                  <a href="<?php the_permalink(); ?>" class="md-card-cta">
                    <span>پروفایل پروژه ←</span>
                  </a>
                  <span class="md-card-meta-tag mono" title="<?php echo esc_attr( $spec ); ?>"><?php echo esc_html( $spec ); ?></span>
                </div>
              </div>
            </article>
          <?php endwhile; wp_reset_postdata(); ?>
        <?php endif; ?>
      </div>

      <!-- Archive Action Link (Dynamic Count) -->
      <?php
      $count_obj = wp_count_posts( 'project' );
      $total_projects = isset( $count_obj->publish ) ? (int) $count_obj->publish : 0;
      $total_projects_fa = function_exists( 'md_persian_num' ) ? md_persian_num( $total_projects ) : $total_projects;
      ?>
      <div class="md-section-archive-action">
        <a href="<?php echo esc_url( home_url( '/projects/' ) ); ?>" class="md-archive-cta-btn">
          <span>مشاهده آرشیو کامل پروژه‌ها ←</span>
          <span class="md-archive-count">(<?php echo esc_html( $total_projects_fa ); ?>)</span>
        </a>
      </div>
    </div>
  </section>

  <!-- ========================================================================
       7.1 PORTFOLIO PROJECT DETAILS MODAL (ACCESSIBLE HUD DIALOG)
       ======================================================================== -->
  <div class="project-modal-backdrop" id="project-modal-backdrop" aria-hidden="true">
    <div class="project-modal-card" id="project-modal-dialog" role="dialog" aria-modal="true" aria-labelledby="modal-project-title">
      <button type="button" class="project-modal-close" id="project-modal-close" aria-label="بستن پنجره">
        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M18 6 6 18M6 6l12 12"/></svg>
      </button>
      <div class="project-modal-body">
        <div class="project-modal-img-wrap" style="position:relative; overflow:hidden; border-radius:8px;">
          <img id="modal-project-img" src="" alt="" style="width:100%; height:280px; object-fit:cover; display:block;">
          <span id="modal-project-category" class="project-category-tag" style="top:12px; right:12px;"></span>
        </div>
        <div class="project-modal-info" style="margin-top:20px;">
          <div style="display:flex; justify-content:space-between; align-items:center; margin-bottom:8px;">
            <span id="modal-project-code" class="mono" style="font-size:0.75rem; color:var(--color-accent); font-weight:700;"></span>
            <span class="top-badge-nda" style="font-size:0.70rem;">پروتکل محرمانگی NDA</span>
          </div>
          <h3 id="modal-project-title" style="font-size:1.35rem; font-weight:800; color:#ffffff; margin-bottom:12px;"></h3>
          <p id="modal-project-desc" style="font-size:0.90rem; color:#cbd5e1; line-height:1.7; margin-bottom:18px;"></p>
          
          <!-- Technical Dossier & KPI Summary -->
          <div class="modal-dossier-grid" style="display:grid; grid-template-columns:1fr 1fr; gap:12px; margin-bottom:20px; background:rgba(255,255,255,0.03); padding:16px; border-radius:8px; border:1px solid rgba(217, 119, 6,0.2);">
            <div>
              <span style="display:block; font-size:0.75rem; color:var(--text-muted); margin-bottom:4px;">استاندارد و متدولوژی مهندسی:</span>
              <strong id="modal-project-standard" class="mono" style="font-size:0.85rem; color:#ffffff;"></strong>
            </div>
            <div>
              <span style="display:block; font-size:0.75rem; color:var(--text-muted); margin-bottom:4px;">صنعت هدف:</span>
              <strong id="modal-project-industry" style="font-size:0.85rem; color:#ffffff;"></strong>
            </div>
            <div style="grid-column:1 / -1; background:rgba(255,255,255,0.02); padding:10px 14px; border-radius:6px; margin-top:4px;">
              <span style="display:block; font-size:0.75rem; color:var(--color-accent); font-weight:700; margin-bottom:4px;">دستاورد عددی و شاخص کلیدی عملکرد (KPI):</span>
              <strong id="modal-project-kpi-full" style="font-size:0.92rem; color:#ffffff; line-height:1.5;"></strong>
            </div>
          </div>

          <!-- Action Buttons -->
          <div style="display:flex; gap:12px; align-items:center; flex-wrap:wrap;">
            <button type="button" class="btn btn-accent" id="modal-rfq-action-btn">
              <span>درخواست مشاوره برای پروژه مشابه</span>
              <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4" aria-hidden="true"><path d="M19 12H5M12 19l-7-7 7-7"/></svg>
            </button>
            <button type="button" class="btn btn-outline-white" id="modal-dismiss-btn" style="padding:10px 18px;">
              <span>بستن پنجره</span>
            </button>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- ========================================================================
       8. DUAL RFQ DISPATCH & CLIENT TRUST SECTION
       ======================================================================== -->
  <section class="rfq-trust-section" id="rfq-section">
    <div class="container">
      <div class="rfq-trust-grid">
        
        <!-- Form Column -->
        <div class="rfq-form-panel">
          <div class="rfq-form-header">
            <h3>ثبت استعلام پروژه و دریافت نوبت مشاوره فنی (RFQ)</h3>
            <p>مشخصات اولیه چالش یا پروژه خود را وارد کنید تا کارشناس ارشد ظرف ۲۴ ساعت کاری تماس بگیرد.</p>
          </div>

          <div id="axima-rfq-notice" style="display:none; padding:14px; border-radius:4px; margin-bottom:16px; font-size:0.88rem;"></div>

          <form id="axima-rfq-form">
            <div class="rfq-form-grid">
              
              <div>
                <label for="rfq-name" style="display:block; font-size:0.84rem; font-weight:600; margin-bottom:6px; color:#0B0D11;">نام و نام خانوادگی:</label>
                <input type="text" class="form-control-custom" id="rfq-name" placeholder="مثال: مهندس حسینی" required>
              </div>

              <div>
                <label for="rfq-phone" style="display:block; font-size:0.84rem; font-weight:600; margin-bottom:6px; color:#0B0D11;">شماره تماس مستقیم / واتس‌اپ:</label>
                <input type="tel" class="form-control-custom" id="rfq-phone" placeholder="0912-XXX-XXXX" dir="ltr" required>
              </div>

              <div class="form-group-full">
                <label for="rfq-service" style="display:block; font-size:0.84rem; font-weight:600; margin-bottom:6px; color:#0B0D11;">حوزه خدمت مورد نیاز:</label>
                <select class="form-control-custom" id="rfq-service" required>
                  <option value="">— انتخاب ماژول مهندسی —</option>
                  <option value="SRV-01">۰۱ // طراحی ماشین‌آلات و خطوط تولید (DFMA)</option>
                  <option value="SRV-02">۰۲ // عیب‌یابی خط تولید، پایش وضعیت و آنالیز ارتعاشات</option>
                  <option value="SRV-03">۰۳ // تحقیق و توسعه (R&amp;D) و نمونه‌سازی پروتوتایپ</option>
                  <option value="SRV-04">۰۴ // منتورینگ تخصصی مهندسی مکانیک و FEA</option>
                  <option value="SRV-05">۰۵ // آموزش درون‌سازمانی و ارتقای تیم‌های فنی</option>
                  <option value="SRV-06">۰۶ // مشاوره و کارشناسی خرید ماشین‌آلات (چین/دبی)</option>
                </select>
              </div>

              <div class="form-group-full">
                <label for="rfq-details" style="display:block; font-size:0.84rem; font-weight:600; margin-bottom:6px; color:#0B0D11;">خلاصه چالش فنی یا موضوع پروژه:</label>
                <textarea class="form-control-custom" id="rfq-details" rows="3" placeholder="توضیحات کوتاه در مورد مشخصات خط، ظرفیت مورد نظر یا ایراد موجود در دستگاه..."></textarea>
              </div>

              <!-- Technical File Upload (Optional, max 10MB) -->
              <div class="form-group-full">
                <label for="rfq-file" style="display:block; font-size:0.84rem; font-weight:600; margin-bottom:6px; color:#0B0D11;">پیوست نقشه، مدل سه‌بعدی یا تصویر چالش (اختیاری):</label>
                <div class="rfq-file-dropzone" id="rfq-file-dropzone">
                  <input type="file" id="rfq-file" name="rfq_file" accept=".pdf,.dwg,.step,.stp,.jpg,.jpeg,.png" style="display:none;">
                  <button type="button" class="btn btn-rfq-file btn-sm" id="rfq-file-trigger">
                    <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"/><polyline points="17 8 12 3 7 8"/><line x1="12" y1="3" x2="12" y2="15"/></svg>
                    <span>انتخاب فایل فنی (حداکثر ۱۰ مگابایت)</span>
                  </button>
                  <span class="rfq-file-name" id="rfq-file-name">فرمت‌های مجاز: PDF, DWG, STEP, STP, JPG, PNG</span>
                </div>
                <span class="rfq-nda-notice" style="display:block; font-size:0.78rem; font-weight:600; color:#15803D; margin-top:8px;">
                  کلیه فایل‌ها و اطلاعات فنی ارسالی تحت پروتکل رسمی NDA کاملاً محرمانه می‌مانند.
                </span>
              </div>

              <div class="form-group-full">
                <button type="submit" class="btn btn-accent" id="axima-rfq-submit" style="width:100%;">
                  <span>ارسال امن استعلام و رزرو جلسه فنی</span>
                  <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4"><path d="M19 12H5M12 19l-7-7 7-7"/></svg>
                </button>
              </div>

            </div>
          </form>
        </div>

        <!-- Trust Column -->
        <div class="trust-col">
          <span class="section-subtitle light">پروتکل همکاری مطمئن</span>
          <h2 class="section-title light">آرامش خاطر مدیران صنایع در واگذاری پروژه‌های کلیدی</h2>
          <p class="section-desc light" style="margin-bottom:34px;">
            ما حساسیت اسرار تولید و ریسک مالی توقف خط را کاملاً درک می‌کنیم. به همین جهت ساختار همکاری در ماشین دیزاین بر پایه شفافیت فنی و تعهدات حقوقی محکم بنا شده است.
          </p>

          <div class="trust-item">
            <div class="trust-icon-wrap">
              <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
            </div>
            <div class="trust-text">
              <h5>امضای توافق‌نامه محرمانگی (NDA) پیش از دریافت اسناد</h5>
              <p>تمامی داده‌ها، نمونه قطعات و نقشه‌های خط تولید شما تحت صیانت حقوقی کامل قرار می‌گیرد.</p>
            </div>
          </div>

          <div class="trust-item">
            <div class="trust-icon-wrap">
              <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><path d="m9 12 2 2 4-4"/></svg>
            </div>
            <div class="trust-text">
              <h5>تحویل پکیج کامل نقشه‌های ساخت (Fabrication Drawings)</h5>
              <p>شامل جداول تلرانس، تلرانس‌گذاری ابعادی و هندسی، صافی سطح، فرآیند عملیات حرارتی و متریال دقیق.</p>
            </div>
          </div>

          <div class="trust-item">
            <div class="trust-icon-wrap">
              <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect width="18" height="18" x="3" y="4" rx="2" ry="2"/><line x1="16" y1="2" x2="16" y2="6"/><line x1="8" y1="2" x2="8" y2="6"/><line x1="3" y1="10" x2="21" y2="10"/></svg>
            </div>
            <div class="trust-text">
              <h5>زمان‌بندی فازبندی شده با گانت چارت اجرایی</h5>
              <p>تحویل گام‌به‌گام مراحل طراحی مفهومی، مدل‌سازی تفصیلی، شبیه‌سازی و نظارت کارگاهی بدون تاخیر.</p>
            </div>
          </div>

        </div>

      </div>
    </div>
  </section>

  <!-- ========================================================================
       9. TECHNICAL INSIGHTS & SEO BLOG SECTION
       ======================================================================== -->
  <section class="blog-section" id="insights">
    <div class="container">
      
      <div class="section-heading text-center">
        <span class="section-subtitle">پایگاه دانش مهندسی مکانیک</span>
        <h2 class="section-title">آخرین مقالات تخصصی، استانداردهای ساخت و راهنماها</h2>
        <p class="section-desc">تحلیل‌های کاربردی تیم ماشین دیزاین در خصوص استانداردهای ISO، نکات بازرسی خرید از چین و تکنیک‌های DFMA.</p>
      </div>

      <!-- Dynamic Articles Grid (WP_Query limit: 3) -->
      <?php
      $articles_query = new WP_Query( array(
          'post_type'           => 'post',
          'post_status'         => 'publish',
          'posts_per_page'      => 3,
          'ignore_sticky_posts' => true,
          'orderby'             => 'date',
          'order'               => 'DESC',
          'tax_query'           => array(
              array(
                  'taxonomy' => 'category',
                  'operator' => 'EXISTS',
              ),
          ),
      ) );
      ?>
      <div class="blog-grid">
        <?php if ( $articles_query->have_posts() ) : ?>
          <?php while ( $articles_query->have_posts() ) : $articles_query->the_post();
            $aid = get_the_ID();
            $cats = get_the_category( $aid );
            $cat_name = ! empty( $cats ) ? $cats[0]->name : 'پایگاه دانش';

            if ( has_post_thumbnail() ) {
                $img_url = get_the_post_thumbnail_url( $aid, 'large' );
            } else {
                $default_imgs = array(
                    get_template_directory_uri() . '/assets/images/heroes/hero-machine-design.webp',
                    get_template_directory_uri() . '/assets/images/heroes/hero-fea-analysis.webp',
                    get_template_directory_uri() . '/assets/images/heroes/hero-production-line.webp',
                );
                $img_url = $default_imgs[ $articles_query->current_post % 3 ];
            }

            $reading_time = md_get_reading_time( $aid );
          ?>
            <article class="blog-card md-card-unified">
              <div class="md-card-thumb-wrap">
                <img src="<?php echo esc_url( $img_url ); ?>" alt="<?php the_title_attribute(); ?>" loading="lazy" />
                <span class="md-card-badge"><?php echo esc_html( $cat_name ); ?></span>
              </div>
              <div class="md-card-body">
                <h3 class="md-card-title">
                  <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                </h3>
                <p class="md-card-excerpt">
                  <?php
                  if ( has_excerpt() ) {
                      echo esc_html( get_the_excerpt() );
                  } else {
                      echo esc_html( wp_trim_words( get_the_content(), 22, '...' ) );
                  }
                  ?>
                </p>
                <div class="md-card-footer">
                  <a href="<?php the_permalink(); ?>" class="md-card-cta">
                    <span>مطالعه مقاله ←</span>
                  </a>
                  <span class="md-card-meta-tag is-fa"><?php echo esc_html( $reading_time ); ?></span>
                </div>
              </div>
            </article>
          <?php endwhile; wp_reset_postdata(); ?>
        <?php endif; ?>
      </div>

      <!-- Archive Action Link -->
      <div class="md-section-archive-action">
        <a href="<?php echo esc_url( home_url( '/insights/' ) ); ?>" class="md-archive-cta-btn">
          <span>مشاهده تمام مقالات و استانداردها ←</span>
        </a>
      </div>
    </div>
  </section>

<?php
md_render_optional_gutenberg_slot();
get_footer();

