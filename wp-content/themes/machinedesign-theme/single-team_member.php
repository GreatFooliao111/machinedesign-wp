<?php
/**
 * Single Team Member Template (Dynamic Bento Portfolio Architecture)
 * Renders individual team member profiles dynamically from WordPress Admin (اعضای تیم / team_member).
 *
 * @package HelloElementor
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

get_header();

// 1. Resolve Target Member ID or Slug
if ( empty( $target_member_slug_or_id ) ) {
    $target_member_slug_or_id = is_singular( 'team_member' ) ? get_the_ID() : 'hossein-vatandoust';
}

// 2. Retrieve Dynamic Team Member Data
$member_data = function_exists( 'md_get_team_member_profile_data' ) 
    ? md_get_team_member_profile_data( $target_member_slug_or_id ) 
    : [];

// 3. Extract & Sanitize
$member_name          = $member_data['name'] ?? 'عضو تیم مهندسی';
$member_name          = preg_replace( '/وطن[\s\x{200c}]+دوست/u', 'وطن' . "\xE2\x80\x8C" . 'دوست', $member_name );
$member_photo_url     = $member_data['photo_url'] ?? home_url( '/wp-content/uploads/2026/07/founder-portrait-placeholder.webp' );
$role_badge           = $member_data['role_badge'] ?? 'متخصص طراحی و مهندسی ماشین دیزاین';
$member_subtitle      = $member_data['subtitle'] ?? 'مهندس مکانیک و طراح ماشین‌آلات صنعتی';
$org_hierarchy_raw    = $member_data['org_hierarchy'] ?? 'ماشین دیزاین / تیم مهندسی / متخصص فنی';
$status_badge         = $member_data['status_badge'] ?? 'ENGINEERING TEAM // SPECIALIST // MASHHAD';
$photo_badge          = $member_data['photo_badge'] ?? 'ACTIVE // STUDIO & WORKSHOP';
$manifesto_paragraphs = $member_data['manifesto'] ?? [];
if ( function_exists( 'md_enforce_manifesto_balance' ) ) {
    $manifesto_paragraphs = md_enforce_manifesto_balance( $manifesto_paragraphs, 1100 );
}
$metrics              = $member_data['metrics'] ?? [];
$social               = $member_data['social'] ?? [];
$pillars_heading      = $member_data['pillars_heading'] ?? 'ارکان چهارگانه رهبری فنی';
$pillars              = $member_data['pillars'] ?? [];
$guarantee            = $member_data['guarantee'] ?? [];
$skills               = $member_data['skills'] ?? [];
$project_slides       = $member_data['projects'] ?? [];

// Parse Hierarchy Nodes
$hierarchy_nodes   = array_map( 'trim', explode( '/', $org_hierarchy_raw ) );
$total_nodes       = count( $hierarchy_nodes );
$projects_count_fa = function_exists( 'md_persian_num' ) 
    ? md_persian_num( sprintf( '%02d', count( $project_slides ) ) ) 
    : sprintf( '%02d', count( $project_slides ) );
?>

<div class="founder-portfolio-page" id="founder-main">
  <div class="founder-bento-container">

    <!-- ====================================================================
         1. TOP BAR: ORGANIZATIONAL LEADERSHIP HIERARCHY
         ==================================================================== -->
    <header class="founder-top-nav" aria-label="سلسله‌مراتب سازمانی و جایگاه">
      <div class="founder-org-hierarchy" aria-label="سلسله‌مراتب سازمانی ماشین دیزاین" dir="rtl">
        <?php foreach ( $hierarchy_nodes as $n_idx => $node_text ) : 
            $is_last = ( $n_idx === $total_nodes - 1 );
        ?>
            <?php if ( $is_last ) : ?>
                <span class="org-current"><?php echo esc_html( $node_text ); ?></span>
            <?php else : ?>
                <span class="org-node"><?php echo esc_html( $node_text ); ?></span>
                <span class="sep" aria-hidden="true">/</span>
            <?php endif; ?>
        <?php endforeach; ?>
      </div>

      <div class="founder-status-badge mono" dir="ltr">
        <span class="founder-status-dot" aria-hidden="true"></span>
        <span><?php echo esc_html( $status_badge ); ?></span>
      </div>
    </header>

    <!-- ====================================================================
         2. ASYMMETRICAL BENTO GRID (100% LIGHT THEME)
         ==================================================================== -->
    <div class="founder-bento-grid">

      <!-- ================= CARD 1: HERO & IDENTITY (8 COLS - LIGHT) ================= -->
      <article class="bento-card bento-card-light bento-hero-card" aria-label="شناسنامه و بیانیه تخصصی مهندس">
        
        <!-- Portrait Image Column -->
        <div class="founder-portrait-col">
          <div class="founder-portrait-wrap">
            <img src="<?php echo esc_url( $member_photo_url ); ?>"
                 alt="<?php echo esc_attr( $member_name ); ?> - <?php echo esc_attr( $member_subtitle ); ?>"
                 class="founder-portrait-img"
                 loading="eager"
                 width="400"
                 height="500">
            <div class="founder-portrait-badge mono" dir="ltr">
              <span><?php echo esc_html( $photo_badge ); ?></span>
            </div>
          </div>
        </div>

        <!-- Identity & Extended Manifesto Column -->
        <div class="founder-info-col">
          <div class="founder-identity-block">
            <div class="founder-role-tag" dir="rtl">
              <span><?php echo esc_html( $role_badge ); ?></span>
            </div>
            <h1 class="founder-name"><?php echo esc_html( $member_name ); ?></h1>
            <p class="founder-subtitle"><?php echo esc_html( $member_subtitle ); ?></p>
          </div>

          <blockquote class="founder-thesis-quote">
            <?php if ( ! empty( $manifesto_paragraphs ) ) : ?>
              <?php foreach ( $manifesto_paragraphs as $m_idx => $p_text ) : 
                  if ( empty( trim( $p_text ) ) ) continue;
                  $is_last = ( $m_idx === count( $manifesto_paragraphs ) - 1 );
              ?>
                <p class="founder-manifesto-p<?php echo $is_last ? ' last' : ''; ?>"><?php echo esc_html( $p_text ); ?></p>
              <?php endforeach; ?>
            <?php else : ?>
              <p class="founder-manifesto-p">طراحی مهندسی در ماشین دیزاین بر یک اصل پایدار استوار است: <strong>حداکثر بهره‌وری اقتصادی خط تولید و انطباق کامل با استاندارد ساخت کارگاهی</strong>.</p>
            <?php endif; ?>
          </blockquote>

          <!-- Social & Direct Channels Row (Polished RTL) -->
          <?php 
          $has_social = ! empty( $social['linkedin'] ) || ! empty( $social['instagram'] ) || ! empty( $social['grabcad'] ) || ! empty( $social['email'] ) || ! empty( $social['phone'] );
          if ( $has_social ) : 
          ?>
          <div class="founder-social-row" dir="rtl">
            <span class="founder-social-label">
              <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true" style="color: #15803d;">
                <path d="M10 13a5 5 0 0 0 7.54.54l3-3a5 5 0 0 0-7.07-7.07l-1.72 1.71"/>
                <path d="M14 11a5 5 0 0 0-7.54-.54l-3 3a5 5 0 0 0 7.07 7.07l1.71-1.71"/>
              </svg>
              <span>راه‌های ارتباط مستقیم:</span>
            </span>

            <div class="founder-social-icons-group">
              <?php if ( ! empty( $social['linkedin'] ) ) : ?>
                <a href="<?php echo esc_url( $social['linkedin'] ); ?>" target="_blank" rel="noopener noreferrer" class="founder-social-btn" title="پروفایل لینکدین <?php echo esc_attr( $member_name ); ?>" aria-label="لینکدین">
                  <svg viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M16 8a6 6 0 0 1 6 6v7h-4v-7a2 2 0 0 0-2-2 2 2 0 0 0-2 2v7h-4v-7a6 6 0 0 1 6-6z"/>
                    <rect x="2" y="9" width="4" height="12"/>
                    <circle cx="4" cy="4" r="2"/>
                  </svg>
                </a>
              <?php endif; ?>

              <?php if ( ! empty( $social['instagram'] ) ) : ?>
                <a href="<?php echo esc_url( $social['instagram'] ); ?>" target="_blank" rel="noopener noreferrer" class="founder-social-btn" title="صفحه اینستاگرام <?php echo esc_attr( $member_name ); ?>" aria-label="اینستاگرام">
                  <svg viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <rect x="2" y="2" width="20" height="20" rx="5" ry="5"/>
                    <path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"/>
                    <line x1="17.5" y1="6.5" x2="17.51" y2="6.5"/>
                  </svg>
                </a>
              <?php endif; ?>

              <?php if ( ! empty( $social['grabcad'] ) ) : ?>
                <a href="<?php echo esc_url( $social['grabcad'] ); ?>" target="_blank" rel="noopener noreferrer" class="founder-social-btn" title="پایگاه مدل‌های سه‌بعدی و کد قطعات در GrabCAD" aria-label="گراب‌کد">
                  <svg viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z"/>
                    <polyline points="3.27 6.96 12 12.01 20.73 6.96"/>
                    <line x1="12" y1="22.08" x2="12" y2="12"/>
                  </svg>
                </a>
              <?php endif; ?>

              <?php if ( ! empty( $social['email'] ) ) : ?>
                <a href="mailto:<?php echo esc_attr( $social['email'] ); ?>" class="founder-social-btn" title="ارسال ایمیل مستقیم: <?php echo esc_attr( $social['email'] ); ?>" aria-label="ایمیل">
                  <svg viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/>
                    <polyline points="22,6 12,13 2,6"/>
                  </svg>
                </a>
              <?php endif; ?>

              <?php if ( ! empty( $social['phone'] ) ) : ?>
                <?php $phone_fa = function_exists('md_persian_num') ? md_persian_num($social['phone']) : $social['phone']; ?>
                <a href="tel:<?php echo esc_attr( $social['phone'] ); ?>" class="founder-social-btn" title="تماس تلفنی مستقیم: <?php echo esc_attr( $phone_fa ); ?>" aria-label="تلفن همراه">
                  <svg viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/>
                  </svg>
                </a>
              <?php endif; ?>
            </div>
          </div>
          <?php endif; ?>
        </div>

      </article>

      <!-- ================= CARD 2: FOUR PILLARS OF AGENCY & GUARANTEE (4 COLS - LIGHT) ================= -->
      <article class="bento-card bento-card-light bento-pillars-card" aria-label="ارکان چهارگانه رهبری فنی">
        <div>
          <div class="bento-card-header">
            <h2 class="bento-card-title">
              <span class="title-fa"><?php echo esc_html( $pillars_heading ); ?></span>
              <span class="title-en mono" dir="ltr">// FOUR PILLARS</span>
            </h2>
            <span class="bento-card-index">۰۱</span>
          </div>

          <div class="founder-pillars-stack">
            <?php foreach ( $pillars as $p_idx => $pillar_item ) : 
                $p_num_persian = function_exists( 'md_persian_num' ) ? md_persian_num( sprintf( '%02d', $p_idx + 1 ) ) : '۰' . ( $p_idx + 1 );
            ?>
              <div class="pillar-item-light">
                <h3 class="pillar-item-title-light">
                  <span class="num"><?php echo esc_html( $p_num_persian ); ?></span>
                  <span><?php echo esc_html( $pillar_item['title'] ); ?></span>
                </h3>
                <p class="pillar-item-desc-light">
                  <?php echo esc_html( $pillar_item['desc'] ); ?>
                </p>
              </div>
            <?php endforeach; ?>
          </div>
        </div>

        <!-- Executive Engineering Quality & Standards Guarantee Console (Anchored at Card Bottom) -->
        <div class="founder-card-footer-guarantee">
          <div class="guarantee-icon-wrap" aria-hidden="true">
            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round">
              <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/>
              <polyline points="9 12 11 14 15 10"/>
            </svg>
          </div>
          <div class="guarantee-content">
            <div class="guarantee-title"><?php echo esc_html( $guarantee['title'] ?? 'تضمین ساخت‌پذیری قطعات و انطباق استاندارد' ); ?></div>
            <p class="guarantee-desc"><?php echo esc_html( $guarantee['desc'] ?? 'تعهد طراحی بدون خطا بر پایه استانداردهای ایمنی ISO 12100 و فرآیندهای براده‌برداری کارگاهی' ); ?></p>
          </div>
        </div>
      </article>

      <!-- ================= CARD 3: PSYCHOLOGICAL TRUST METRICS CONSOLE (12 COLS - LIGHT) ================= -->
      <section class="bento-card bento-card-light bento-metrics-strip" aria-label="سنجه‌های اعتمادساز و شاخص‌های اعتباری مهندسی">
        <div class="metrics-strip-grid">
          <?php foreach ( $metrics as $m_item ) : 
              $is_latin = preg_match( '/[a-zA-Z]/', $m_item['val'] );
              $val_dir  = $is_latin ? 'ltr' : 'rtl';
          ?>
            <div class="metric-strip-item">
              <div class="metric-strip-val-light <?php echo $is_latin ? 'mono' : 'num-fa'; ?>" dir="<?php echo esc_attr( $val_dir ); ?>">
                <bdi><?php echo esc_html( $m_item['val'] ); ?></bdi>
              </div>
              <div class="metric-strip-label-light"><?php echo esc_html( $m_item['label'] ); ?></div>
            </div>
          <?php endforeach; ?>
        </div>
      </section>

      <!-- ================= CARD 4: FULL-BLEED INDUSTRIAL CAD SLIDER (7 COLS - FRAMELESS) ================= -->
      <?php if ( ! empty( $project_slides ) ) : ?>
      <article class="bento-card bento-card-light bento-slider-card bento-slider-frameless" aria-label="ویترین تصویری پروژه‌های صنعتی">
        
        <!-- Floating HUD Corner Indicator -->
        <div class="slider-hud-badge mono" dir="ltr">
          <span class="slider-hud-dot" aria-hidden="true"></span>
          <span>FLAGSHIP PROJECTS // <?php echo esc_html( $projects_count_fa ); ?></span>
        </div>

        <!-- Frameless Full-Bleed Slider Stage -->
        <div class="founder-slider-container">
          <div class="founder-slider-track">
            <?php foreach ( $project_slides as $idx => $slide ) : ?>
              <div class="founder-slider-item <?php echo 0 === $idx ? 'active' : ''; ?>" data-slide-index="<?php echo esc_attr( $idx ); ?>">
                <img src="<?php echo esc_url( $slide['image'] ); ?>"
                     alt="<?php echo esc_attr( $slide['title'] ); ?>"
                     class="founder-slider-img"
                     loading="lazy"
                     width="900"
                     height="540">
                <div class="founder-slider-caption">
                  <div class="slider-caption-text">
                    <h4><?php echo esc_html( $slide['title'] ); ?></h4>
                    <span><?php echo esc_html( $slide['category'] ); ?></span>
                  </div>
                </div>
              </div>
            <?php endforeach; ?>
          </div>

          <!-- Floating Chevron Buttons Directly on Image Sides (Frameless, Box-free) -->
          <button type="button" class="slider-float-btn prev-btn" id="prevProjectSlide" aria-label="اسلاید قبلی" title="اسلاید قبلی">
            <svg width="34" height="34" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.6" stroke-linecap="round" stroke-linejoin="round">
              <path d="M9 18l6-6-6-6"/>
            </svg>
          </button>
          <button type="button" class="slider-float-btn next-btn" id="nextProjectSlide" aria-label="اسلاید بعدی" title="اسلاید بعدی">
            <svg width="34" height="34" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.6" stroke-linecap="round" stroke-linejoin="round">
              <path d="M15 18l-6-6 6-6"/>
            </svg>
          </button>

          <!-- Floating Interactive Slide Dots -->
          <div class="slider-dots-float" aria-label="کنترل اسلایدها">
            <?php foreach ( $project_slides as $idx => $slide ) : ?>
              <span class="slider-dot <?php echo 0 === $idx ? 'active' : ''; ?>" data-dot-index="<?php echo esc_attr( $idx ); ?>" title="اسلاید <?php echo esc_attr( $idx + 1 ); ?>"></span>
            <?php endforeach; ?>
          </div>

        </div><!-- /.founder-slider-container -->
      </article>
      <?php else : ?>
      <article class="bento-card bento-card-light bento-slider-card md-empty-projects-card" aria-label="پروژه‌های شاخص مهندسی">
        <div style="color:#64748B;font-size:0.95rem;text-align:center;">
          <p style="margin:0 0 8px 0;font-weight:600;color:#1E293B;font-size:1.05rem;">پروژه‌های تخصصی در دست تدوین و انتشار</p>
          <span style="font-size:0.875rem;line-height:1.6;">مستندات و سوابق پروژه‌های صنعتی این عضو تیم پس از ممیزی فنی و حقوقی بارگذاری خواهد شد.</span>
        </div>
      </article>
      <?php endif; ?>

      <!-- ================= CARD 5: TECHNICAL & MANAGEMENT SKILLS MATRIX (5 COLS - LIGHT) ================= -->
      <article class="bento-card bento-card-light bento-skills-card" aria-label="نمودارهای سطح مهارت و شایستگی">
        <div>
          <div class="bento-card-header">
            <h2 class="bento-card-title">
              <span class="title-fa">ماتریس تسلط فنی و مدیریتی</span>
              <span class="title-en mono" dir="ltr">// SKILLS MATRIX</span>
            </h2>
            <span class="bento-card-index">۰۳</span>
          </div>

          <div class="skills-matrix-stack">
            <?php foreach ( $skills as $s_item ) : 
                $pct_persian = function_exists( 'md_persian_num' ) ? md_persian_num( $s_item['pct'] ) . '٪' : $s_item['pct'] . '%';
            ?>
              <div class="skill-bar-row">
                <div class="skill-bar-header">
                  <span class="skill-title"><?php echo esc_html( $s_item['name'] ); ?></span>
                  <span class="skill-percent" dir="rtl"><bdi><?php echo esc_html( $pct_persian ); ?></bdi></span>
                </div>
                <div class="skill-track">
                  <div class="skill-fill-neon" style="width: <?php echo esc_attr( $s_item['pct'] ); ?>%;"></div>
                </div>
              </div>
            <?php endforeach; ?>
          </div>
        </div>
      </article>

    </div><!-- /.founder-bento-grid -->

  </div><!-- /.founder-bento-container -->
</main>

<script>
/**
 * Flagship Industrial Project Slider Controller
 * Vanilla JS with pause-on-hover, dot navigation, and chevrons
 */
document.addEventListener('DOMContentLoaded', function () {
  const slides = document.querySelectorAll('.founder-slider-item');
  const dots = document.querySelectorAll('.slider-dot');
  const prevBtn = document.getElementById('prevProjectSlide');
  const nextBtn = document.getElementById('nextProjectSlide');

  if (!slides.length) return;

  let currentIndex = 0;
  const totalSlides = slides.length;
  let autoplayInterval = null;

  function showSlide(index) {
    if (index >= totalSlides) index = 0;
    if (index < 0) index = totalSlides - 1;
    currentIndex = index;

    slides.forEach((slide, idx) => {
      slide.classList.toggle('active', idx === currentIndex);
    });

    dots.forEach((dot, idx) => {
      dot.classList.toggle('active', idx === currentIndex);
    });
  }

  function nextSlide() {
    showSlide(currentIndex + 1);
  }

  function prevSlide() {
    showSlide(currentIndex - 1);
  }

  if (nextBtn) nextBtn.addEventListener('click', nextSlide);
  if (prevBtn) prevBtn.addEventListener('click', prevSlide);

  dots.forEach(dot => {
    dot.addEventListener('click', function () {
      const idx = parseInt(this.getAttribute('data-dot-index'), 10);
      showSlide(idx);
    });
  });

  function startAutoplay() {
    stopAutoplay();
    autoplayInterval = setInterval(nextSlide, 5000);
  }

  function stopAutoplay() {
    if (autoplayInterval) {
      clearInterval(autoplayInterval);
      autoplayInterval = null;
    }
  }

  const sliderCard = document.querySelector('.bento-slider-card');
  if (sliderCard) {
    sliderCard.addEventListener('mouseenter', stopAutoplay);
    sliderCard.addEventListener('mouseleave', startAutoplay);
    startAutoplay();
  }
});
</script>

<?php
get_footer();
