<?php
/**
 * Template Name: تمپلیت تک مقاله مهندسی و استانداردهای صنعتی (Single Technical Article)
 * Description: Dedicated high-craft engineering template featuring breadcrumbs, auto-generated Table of Contents (TOC), ISO/DIN standards HUD, author attribution, and technical RFQ integration.
 *
 * @package HelloElementor
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

get_header();

while ( have_posts() ) :
    the_post();

    // 1. Reading Time Calculation
    $content = get_post_field( 'post_content', get_the_ID() );
    $word_count = str_word_count( strip_tags( $content ) );
    $reading_time = max( 1, ceil( $word_count / 180 ) );

    // 2. Extract Categories
    $categories = get_the_category();
    $primary_cat = ! empty( $categories ) ? $categories[0]->name : 'استانداردهای صنعتی';
    $cat_link = ! empty( $categories ) ? get_category_link( $categories[0]->term_id ) : home_url( '/insights/' );

    // 3. Standards Metadata
    $standard_code = get_post_meta( get_the_ID(), '_md_standard_code', true );
    if ( empty( $standard_code ) ) {
        $standard_code = 'DIN / ISO VERIFIED';
    }

    // 4. Extract Headings for Auto-TOC
    preg_match_all( '/<h2[^>]*>(.*?)<\/h2>/i', $content, $headings );
    $toc_items = array();
    if ( ! empty( $headings[1] ) ) {
        foreach ( $headings[1] as $idx => $heading_text ) {
            $anchor = 'section-' . ( $idx + 1 );
            $toc_items[] = array(
                'id'    => $anchor,
                'title' => strip_tags( $heading_text ),
            );
        }
    }
?>

<!-- ========================================================================
     1. ARTICLE HERO HEADER
     ======================================================================== -->
<section class="single-insight-hero" aria-label="سربرگ مقاله مهندسی">
  <div class="container">
    <div class="single-hero-inner">

      <!-- Breadcrumbs -->
      <nav class="page-hero-breadcrumb" aria-label="مسیر راهنما">
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="breadcrumb-item">صفحه اصلی</a>
        <span class="breadcrumb-separator" aria-hidden="true">/</span>
        <a href="<?php echo esc_url( home_url( '/insights/' ) ); ?>" class="breadcrumb-item">مقالات و استانداردهای صنعتی</a>
        <span class="breadcrumb-separator" aria-hidden="true">/</span>
        <span class="breadcrumb-current" aria-current="page"><?php the_title(); ?></span>
      </nav>

      <!-- Category & Meta Row -->
      <div class="single-article-meta-row">
        <span class="category-chip mono"><?php echo esc_html( $primary_cat ); ?></span>
        <span class="standard-chip mono text-accent"><?php echo esc_html( $standard_code ); ?></span>
        <span class="article-read-time mono text-muted"><?php echo esc_html( $reading_time ); ?> دقیقه مطالعه</span>
        <span class="article-meta-sep text-muted">//</span>
        <span class="article-pub-date mono text-muted"><?php echo esc_html( get_the_date( 'j F Y' ) ); ?></span>
      </div>

      <!-- Main Article Title -->
      <h1 class="single-article-title"><?php the_title(); ?></h1>

      <?php if ( has_excerpt() ) : ?>
        <div class="single-article-lead">
          <?php the_excerpt(); ?>
        </div>
      <?php endif; ?>

    </div>
  </div>
</section>

<!-- ========================================================================
     2. ARTICLE BODY & STICKY SIDEBAR
     ======================================================================== -->
<section class="single-article-layout" aria-label="متن مقاله و ابزارهای مهندسی">
  <div class="container">
    <div class="single-article-grid">

      <!-- Right Column (RTL Sticky Sidebar) -->
      <aside class="article-sidebar-sticky" aria-label="فهرست و مشخصات فنی مقاله">

        <!-- Table of Contents HUD -->
        <?php if ( ! empty( $toc_items ) ) : ?>
          <div class="article-toc-box">
            <h3 class="sidebar-box-title">
              <span class="pulse-indicator" aria-hidden="true"></span>
              فهرست سرفصل‌های فنی
            </h3>
            <ul class="toc-list">
              <?php foreach ( $toc_items as $item ) : ?>
                <li>
                  <a href="#<?php echo esc_attr( $item['id'] ); ?>" class="toc-link">
                    <?php echo esc_html( $item['title'] ); ?>
                  </a>
                </li>
              <?php endforeach; ?>
            </ul>
          </div>
        <?php endif; ?>

        <!-- Standards Reference Box -->
        <div class="article-standards-box">
          <h3 class="sidebar-box-title">
            <span class="pulse-indicator" aria-hidden="true"></span>
            اعتبارسنجی و مراجع استاندارد
          </h3>
          <p class="text-muted" style="font-size: 0.88rem; line-height: 1.7; margin: 0 0 12px;">
            این راهنما بر مبنای آخرین تجدیدنظر استانداردهای بین‌المللی DIN، ISO و ضوابط ایمنی ماشین‌آلات CE تدوین شده است.
          </p>
          <span class="standard-chip mono text-accent"><?php echo esc_html( $standard_code ); ?></span>
        </div>

        <!-- Author Profile Box -->
        <div class="article-author-box">
          <h3 class="sidebar-box-title">
            <span class="pulse-indicator" aria-hidden="true"></span>
            تدوین و کارشناسی فنی
          </h3>
          <div style="display: flex; align-items: center; gap: 14px; margin-bottom: 12px;">
            <div style="width: 44px; height: 44px; border-radius: 50%; background: rgba(140, 231, 12, 0.15); border: 1px solid rgba(140, 231, 12, 0.4); display: flex; align-items: center; justify-content: center; font-weight: 800; color: #8ce70c;">HV</div>
            <div>
              <div style="font-weight: 800; color: #f8fafc; font-size: 0.95rem;">مهندس حسین وطن‌دوست</div>
              <div style="font-size: 0.78rem; color: #94a3b8;">سرپرست طراحی ماشین‌آلات و بنیان‌گذار</div>
            </div>
          </div>
          <p class="text-muted" style="font-size: 0.84rem; line-height: 1.6; margin: 0 0 14px;">
            طراح و مشاور ارشد سیستم‌های مکانیزه، اتوماسیون صنعتی و خطوط تولید در کارگاه تست مشهد (برج سامان).
          </p>
          <a href="<?php echo esc_url( home_url( '/profile-hossein/' ) ); ?>" class="text-accent mono" style="font-size: 0.82rem; text-decoration: none;">
            مشاهده سوابق و رزومه مهندسی ←
          </a>
        </div>

      </aside>

      <!-- Left Column (RTL Main Content) -->
      <main class="article-main-content" id="articleMainContent">

        <?php
        // Render content with auto-injected heading IDs for TOC matching
        $rendered_content = get_the_content();
        if ( ! empty( $headings[1] ) ) {
            foreach ( $headings[1] as $idx => $heading_text ) {
                $target_h2 = $headings[0][$idx];
                $anchor = 'section-' . ( $idx + 1 );
                $replacement_h2 = '<h2 id="' . esc_attr( $anchor ) . '">' . $heading_text . '</h2>';
                $rendered_content = str_replace( $target_h2, $replacement_h2, $rendered_content );
            }
        }
        echo apply_filters( 'the_content', $rendered_content );
        ?>

        <!-- Article Technical Consultation CTA Box -->
        <div class="article-cta-box">
          <div class="article-cta-text">
            <h4>نیاز به مشاوره فنی یا حل مسئله در این زمینه دارید؟</h4>
            <p>تیم مهندسی ماشین دیزاین آماده ارزیابی تخصصی خط تولید و اجرای پروژه‌های مشابه در کارخانه شماست.</p>
          </div>
          <div class="article-cta-btn">
            <a href="<?php echo esc_url( home_url( '/contact/?topic=' . urlencode( get_the_title() ) ) ); ?>" class="btn btn-accent">
              درخواست استعلام فنی و مشاوره ←
            </a>
          </div>
        </div>

      </main>

    </div>
  </div>
</section>

<?php
endwhile;

get_footer();
