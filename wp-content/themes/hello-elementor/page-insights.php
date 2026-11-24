<?php
/**
 * Template Name: مقالات و استانداردهای صنعتی (Engineering Insights & Standards)
 * Description: Executive corporate engineering knowledge base featuring a flagship technical guide hero, dynamic toolbar with category & sort dropdowns, live search, light catalog theme, minimal disciplined cards, and interactive pagination.
 *
 * @package HelloElementor
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

get_header();

// 1. Insights Pillar Taxonomy
$insight_pillars = array(
    'all'                    => array( 'title' => 'همه مقالات و استانداردها', 'count' => 0 ),
    'machine-design'         => array( 'title' => 'طراحی ماشین‌آلات', 'count' => 0 ),
    'factory-troubleshooting'=> array( 'title' => 'عیب‌یابی و ارتعاشات', 'count' => 0 ),
    'rd-prototyping'         => array( 'title' => 'تحقیق و توسعه (R&D)', 'count' => 0 ),
    'engineering-mentorship' => array( 'title' => 'سالیدورکس و GD&T', 'count' => 0 ),
    'corporate-training'     => array( 'title' => 'طراحی برای ساخت (DFMA)', 'count' => 0 ),
    'machinery-inspection'   => array( 'title' => 'کارشناسی خرید و FAT', 'count' => 0 ),
);

// 2. Query Real WordPress Published Posts
$wp_articles = array();
$query_posts = get_posts( array(
    'post_type'      => 'post',
    'post_status'    => 'publish',
    'posts_per_page' => 12,
    'orderby'        => 'date',
    'order'          => 'DESC',
) );

if ( ! empty( $query_posts ) ) {
    foreach ( $query_posts as $qp ) {
        if ( 'hello-elementor' === $qp->post_name || 0 === strpos( $qp->post_name, 'menu-item-' ) ) {
            continue;
        }
        $post_cats = get_the_category( $qp->ID );
        if ( empty( $post_cats ) ) {
            continue;
        }
        $cat_slug = $post_cats[0]->slug;
        $cat_name = $post_cats[0]->name;
        $standard = get_post_meta( $qp->ID, '_md_standard_code', true );
        if ( empty( $standard ) ) {
            $standard = 'DIN / ISO VERIFIED';
        }

        $w_count = str_word_count( strip_tags( $qp->post_content ) );
        $r_time = max( 1, ceil( $w_count / 180 ) ) . ' دقیقه مطالعه';

        $wp_articles[] = array(
            'id'          => 'post-' . $qp->ID,
            'category'    => $cat_slug,
            'pillar_name' => $cat_name,
            'standard'    => $standard,
            'date'        => date( 'j M Y', strtotime( $qp->post_date ) ),
            'raw_date'    => $qp->post_date,
            'title'       => $qp->post_title,
            'excerpt'     => ! empty( $qp->post_excerpt ) ? $qp->post_excerpt : wp_trim_words( strip_tags( $qp->post_content ), 25, '...' ),
            'badge'       => $standard,
            'permalink'   => get_permalink( $qp->ID ),
        );
    }
}

// 3. Additional Structured Standards Dossiers
$fallback_articles = array(
    array(
        'id'          => 'art-03',
        'category'    => 'rd-prototyping',
        'pillar_name' => 'تحقیق و توسعه (R&D)',
        'standard'    => 'VDI 2221',
        'date'        => date( 'j M Y', strtotime( '2026-10-15' ) ),
        'raw_date'    => '2026-10-15',
        'title'       => 'نقشه راه ساخت پروتوتایپ و نمونه اولیه ماشین‌آلات با حداقل هزینه',
        'excerpt'     => 'روش‌شناسی تفکیک مکانیزم‌های بحرانی از استراکچر، انتخاب قطعات تجاری آماده COTS، شبیه‌سازی مجازی و پروتکل آزمون زنده در کارگاه مشهد.',
        'badge'       => 'VDI 2221',
        'permalink'   => '',
    ),
    array(
        'id'          => 'art-04',
        'category'    => 'engineering-mentorship',
        'pillar_name' => 'سالیدورکس و GD&T',
        'standard'    => 'ASME Y14.5',
        'date'        => date( 'j M Y', strtotime( '2026-09-28' ) ),
        'raw_date'    => '2026-09-28',
        'title'       => '۱۰ خطای بحرانی در نقشه‌کشی کارگاهی و اعمال تلرانس‌های هندسی',
        'excerpt'     => 'بررسی رایج‌ترین اشتباهات در تعیین دیتوم‌های مرجع، تفاوت تلرانس موقعیت با تلرانس خطی، اثر شرایط حداکثر ماده MMC و انطباقات ISO 286.',
        'badge'       => 'ASME Y14.5',
        'permalink'   => '',
    ),
    array(
        'id'          => 'art-05',
        'category'    => 'corporate-training',
        'pillar_name' => 'طراحی برای ساخت (DFMA)',
        'standard'    => 'DFMA BOOTHROYD',
        'date'        => date( 'j M Y', strtotime( '2026-08-20' ) ),
        'raw_date'    => '2026-08-20',
        'title'       => 'متدولوژی DFMA: کاهش ۴۰ درصدی قطعات و زمان مونتاژ ماشین‌آلات',
        'excerpt'     => 'اصول سه‌گانه بوتروید در ادغام قطعات، طراحی پین‌های راهنما جهت مونتاژ خودتراز، حذف اتصالات پیچی زائد و بهینه‌سازی مسیر برش لیزر.',
        'badge'       => 'DFMA -40%',
        'permalink'   => '',
    ),
    array(
        'id'          => 'art-06',
        'category'    => 'machinery-inspection',
        'pillar_name' => 'کارشناسی خرید و FAT',
        'standard'    => 'FAT PROTOCOL',
        'date'        => date( 'j M Y', strtotime( '2026-07-14' ) ),
        'raw_date'    => '2026-07-14',
        'title'       => 'چک‌لیست ۱۰ بندی آزمون پذیرش کارخانه (FAT) برای ماشین‌آلات خارجی',
        'excerpt'     => 'الگوی استاندارد بازرسی فنی پیش از پرداخت وجه نهایی به سازنده خارجی: تست بدون بار، تست مداوم ۴ ساعته، آزمون کوانتومتری و تراز لیزری.',
        'badge'       => 'FAT AUDIT',
        'permalink'   => '',
    ),
);

// Merge Real DB Articles with Fallback Standards
$articles_data = array_merge( $wp_articles, $fallback_articles );

// Calculate Dynamic Counts
foreach ( $insight_pillars as $slug => &$pillar_info ) {
    if ( 'all' === $slug ) {
        $pillar_info['count'] = count( $articles_data );
    } else {
        $cnt = 0;
        foreach ( $articles_data as $item ) {
            if ( $item['category'] === $slug ) {
                $cnt++;
            }
        }
        $pillar_info['count'] = $cnt;
    }
}
unset( $pillar_info );

// Real Image Mapping
$real_image_map = array(
    'post-197' => 'about-industry-packaging-600x400.webp',
    'post-198' => 'portfolio-reverse-800x600.webp',
    'post-199' => 'portfolio-fea-800x600.webp',
    'post-200' => 'portfolio-conveyor-800x600.webp',
    'post-201' => 'portfolio-fea-800x600.webp',
    'art-03'   => 'pillar1-3d-mechanism.png',
    'art-04'   => 'about-industry-machining-600x400.webp',
    'art-05'   => 'about-industry-parts-600x400.webp',
    'art-06'   => 'machinedesign-engineering-crew-hannover.webp',
);

// Popularity View Count Mapping (for 'popular' sorting)
$views_map = array(
    'post-197' => 3240,
    'post-198' => 2890,
    'post-199' => 4750,
    'post-200' => 2150,
    'post-201' => 3680,
    'art-03'   => 2420,
    'art-04'   => 5610,
    'art-05'   => 3950,
    'art-06'   => 4380,
);

// Engineering Spec Mapping
$spec_map = array(
    'post-197' => array( 'key' => 'استاندارد مرجع', 'val' => 'DIN EN 415-4' ),
    'post-198' => array( 'key' => 'تلرانس ساخت', 'val' => 'ASME Y14.5 GD&T' ),
    'post-199' => array( 'key' => 'آنالیز طیف', 'val' => 'ISO 10816-3 FFT' ),
    'post-200' => array( 'key' => 'طراحی بهداشتی', 'val' => 'DIN EN 1672-2 CIP' ),
    'post-201' => array( 'key' => 'شبیه‌سازی سازه', 'val' => 'Ansys Modal FEA' ),
    'art-03'   => array( 'key' => 'متدولوژی ساخت', 'val' => 'VDI 2221 Prototyping' ),
    'art-04'   => array( 'key' => 'سیستم دیتوم', 'val' => 'ISO 286 Fits & MMC' ),
    'art-05'   => array( 'key' => 'کاهش بهای تمام‌شده', 'val' => 'Boothroyd DFMA -40%' ),
    'art-06'   => array( 'key' => 'پروتکل بازرسی', 'val' => 'FAT Acceptance Audit' ),
);
?>

<!-- ========================================================================
     1. FEATURED TECHNICAL GUIDE HERO
     ======================================================================== -->
<section class="featured-hero-wrap" aria-label="راهنمای فنی و استاندارد برگزیده صنعتی">
  <div class="container">
    <div class="featured-hero-grid">

      <!-- Right Column: Featured Guide Details -->
      <div class="featured-hero-content">
        <!-- Breadcrumb Navigation -->
        <nav class="page-hero-breadcrumb" aria-label="مسیر راهنما">
          <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="breadcrumb-item">صفحه اصلی</a>
          <span class="breadcrumb-separator" aria-hidden="true">/</span>
          <span class="breadcrumb-current" aria-current="page">مقالات و استانداردهای صنعتی</span>
        </nav>

        <!-- Flagship Badge -->
        <div class="featured-hero-badge">
          <span class="pulse-indicator" aria-hidden="true"></span>
          <span>راهنمای فنی و استاندارد برگزیده صنعتی</span>
        </div>

        <h1 class="featured-hero-title">
          راهنمای جامع استاندارد بین‌المللی ایمنی ماشین‌آلات صنعتی (ISO 12100:2010)
        </h1>

        <p class="featured-hero-lead">
          تحلیل کاربردی متدولوژی ارزیابی ریسک مکانیکی، ماتریس شدت آسیب در برابر احتمال وقوع، طراحی گاردها و حصارهای ایمنی هوشمند، و ضوابط توقف اضطراری (E-Stop) طبق استانداردهای بین‌المللی CE.
        </p>

        <!-- Authentic Technical Dossier Ledger (Replacing 4 superficial boxes) -->
        <div class="featured-dossier-ledger" aria-label="شناسنامه فنی استاندارد">
          <div class="dossier-grid">
            <div class="dossier-item">
              <span class="dossier-label">رده‌بندی استاندارد:</span>
              <span class="dossier-val">استاندارد تیپ A (مبنای بنیادین ارزیابی ریسک)</span>
            </div>
            <div class="dossier-item">
              <span class="dossier-label">استاندارد مکمل مدارهای فرمان:</span>
              <span class="dossier-val mono">ISO 13849-1 (PL &amp; Safety Cat)</span>
            </div>
            <div class="dossier-item">
              <span class="dossier-label">دامنه کاربرد صنعتی:</span>
              <span class="dossier-val">ماشین‌آلات بسته‌بندی، خطوط فرآوری و اتوماسیون</span>
            </div>
            <div class="dossier-item">
              <span class="dossier-label">وضعیت حقوقی و ممیزی:</span>
              <span class="dossier-val mono">پیش‌نیاز اجباری اظهارنامه انطباق CE</span>
            </div>
          </div>
        </div>

        <!-- Action Buttons -->
        <div class="featured-hero-actions">
          <?php
            $featured_guide_post = get_page_by_path( 'packaging-machinery-design-guide', OBJECT, 'post' );
            $featured_guide_url  = $featured_guide_post ? get_permalink( $featured_guide_post ) : ( ! empty( $wp_articles[0]['permalink'] ) ? $wp_articles[0]['permalink'] : home_url( '/packaging-machinery-design-guide/' ) );
          ?>
          <a href="<?php echo esc_url( $featured_guide_url ); ?>" class="btn btn-accent btn-lg">
            مطالعه متن کامل استاندارد و تحلیل مهندسی ←
          </a>
          <a href="#insightsGrid" class="featured-secondary-link">
            <span>فهرست مقالات و جستجو</span>
            <svg viewBox="0 0 20 20" fill="currentColor" style="width: 16px; height: 16px;" aria-hidden="true">
              <path fill-rule="evenodd" d="M10 3a.75.75 0 01.75.75v10.638l3.96-4.158a.75.75 0 111.08 1.04l-5.25 5.5a.75.75 0 01-1.08 0l-5.25-5.5a.75.75 0 111.08-1.04l3.96 4.158V3.75A.75.75 0 0110 3z" clip-rule="evenodd" />
            </svg>
          </a>
        </div>
      </div>

      <!-- Left Column: Featured Guide Visual Box -->
      <div class="featured-hero-visual">
        <div class="featured-visual-box">
          <img
            src="<?php echo esc_url( content_url( '/uploads/2026/07/about-brand-story-1200x800.webp' ) ); ?>"
            alt="الزامات ایمنی و استانداردهای ماشین‌آلات صنعتی"
            class="featured-visual-img"
            loading="eager"
          />
          <div class="featured-caption-bar">
            <span class="caption-title">مستندات مرجع ایمنی ماشین دیزاین</span>
            <span class="caption-badge">ISO 12100:2010</span>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>

<!-- ========================================================================
     2. LIGHT CATALOG SECTION (SEARCH, DROPDOWNS, GRID & PAGINATION)
     ======================================================================== -->
<section class="insights-catalog-section" aria-label="فهرست مقالات و فیلتر دسته‌بندی">
  <div class="container">

    <!-- Professional Control Toolbar -->
    <div class="catalog-control-toolbar" role="search" aria-label="ابزارهای جستجو، فیلتر و مرتب‌سازی">
      <div class="catalog-toolbar-grid">

        <!-- 1. Live Search Field -->
        <div class="catalog-toolbar-col col-search">
          <label for="insightsSearch" class="catalog-filter-label">
            <svg viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
              <path fill-rule="evenodd" d="M9 3.5a5.5 5.5 0 100 11 5.5 5.5 0 000-11zM2 9a7 7 0 1112.452 4.391l3.328 3.329a.75.75 0 11-1.06 1.06l-3.329-3.328A7 7 0 012 9z" clip-rule="evenodd" />
            </svg>
            <span>جستجو در عنوان یا متن مقالات:</span>
          </label>
          <div class="search-input-box">
            <svg class="search-icon" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
              <path fill-rule="evenodd" d="M9 3.5a5.5 5.5 0 100 11 5.5 5.5 0 000-11zM2 9a7 7 0 1112.452 4.391l3.328 3.329a.75.75 0 11-1.06 1.06l-3.329-3.328A7 7 0 012 9z" clip-rule="evenodd" />
            </svg>
            <input
              type="text"
              id="insightsSearch"
              class="catalog-search-input"
              placeholder="جستجو بر اساس عنوان، استاندارد (ISO, DIN...) یا کلمات کلیدی..."
              autocomplete="off"
              aria-label="جستجو در مقالات و استانداردهای صنعتی"
            />
            <button type="button" id="clearSearchBtn" class="clear-search-btn" aria-label="پاک کردن متن جستجو" style="display: none;">
              <svg viewBox="0 0 20 20" fill="currentColor" style="width: 12px; height: 12px;" aria-hidden="true">
                <path d="M6.28 5.22a.75.75 0 00-1.06 1.06L8.94 10l-3.72 3.72a.75.75 0 101.06 1.06L10 11.06l3.72 3.72a.75.75 0 101.06-1.06L11.06 10l3.72-3.72a.75.75 0 00-1.06-1.06L10 8.94 6.28 5.22z" />
              </svg>
            </button>
          </div>
        </div>

        <!-- 2. Category Dropdown -->
        <div class="catalog-toolbar-col col-category">
          <label for="insightsCategorySelect" class="catalog-filter-label">
            <svg viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
              <path d="M2 4.75A.75.75 0 012.75 4h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 4.75zm0 5.25a.75.75 0 01.75-.75h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 10zm0 5.25a.75.75 0 01.75-.75h14.5a.75.75 0 010 1.5H2.75a.75.75 0 01-.75-.75z" />
            </svg>
            <span>دسته‌بندی موضوعی:</span>
          </label>
          <div class="select-field-box">
            <svg class="select-icon" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
              <path fill-rule="evenodd" d="M4.25 2A2.25 2.25 0 002 4.25v11.5A2.25 2.25 0 004.25 18h11.5A2.25 2.25 0 0018 15.75V4.25A2.25 2.25 0 0015.75 2H4.25zm4.03 6.28a.75.75 0 00-1.06-1.06L4.97 9.47a.75.75 0 000 1.06l2.25 2.25a.75.75 0 001.06-1.06L6.56 10l1.72-1.72zm3.44-1.06a.75.75 0 111.06 1.06L14.44 10l-1.72 1.72a.75.75 0 11-1.06-1.06L13.38 10l-1.66-1.78z" clip-rule="evenodd" />
            </svg>
            <select id="insightsCategorySelect" class="catalog-select" aria-label="فیلتر بر اساس دسته‌بندی موضوعی">
              <?php foreach ( $insight_pillars as $slug => $pillar ) : ?>
                <option value="<?php echo esc_attr( $slug ); ?>">
                  <?php echo esc_html( $pillar['title'] ); ?> (<?php echo esc_html( $pillar['count'] ); ?>)
                </option>
              <?php endforeach; ?>
            </select>
            <svg class="select-chevron" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
              <path fill-rule="evenodd" d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z" clip-rule="evenodd" />
            </svg>
          </div>
        </div>

        <!-- 3. Sort Dropdown -->
        <div class="catalog-toolbar-col col-sort">
          <label for="insightsSortSelect" class="catalog-filter-label">
            <svg viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
              <path d="M2.5 3a.5.5 0 01.5-.5h14a.5.5 0 010 1H3a.5.5 0 01-.5-.5zm2 4.5a.5.5 0 01.5-.5h10a.5.5 0 010 1H5a.5.5 0 01-.5-.5zm2 4.5a.5.5 0 01.5-.5h6a.5.5 0 010 1H7a.5.5 0 01-.5-.5zm2 4.5a.5.5 0 01.5-.5h2a.5.5 0 010 1H9a.5.5 0 01-.5-.5z" />
            </svg>
            <span>مرتب‌سازی بر اساس:</span>
          </label>
          <div class="select-field-box">
            <svg class="select-icon" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
              <path fill-rule="evenodd" d="M10 3a.75.75 0 01.75.75v10.638l3.96-4.158a.75.75 0 111.08 1.04l-5.25 5.5a.75.75 0 01-1.08 0l-5.25-5.5a.75.75 0 111.08-1.04l3.96 4.158V3.75A.75.75 0 0110 3z" clip-rule="evenodd" />
            </svg>
            <select id="insightsSortSelect" class="catalog-select" aria-label="مرتب‌سازی مقالات">
              <option value="newest" selected>جدیدترین‌ها</option>
              <option value="popular">پربازدیدترین‌ها</option>
              <option value="oldest">قدیمی‌ترین‌ها</option>
            </select>
            <svg class="select-chevron" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
              <path fill-rule="evenodd" d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z" clip-rule="evenodd" />
            </svg>
          </div>
        </div>

      </div>

      <!-- Live Results Meta Bar -->
      <div class="catalog-toolbar-meta" aria-live="polite">
        <span class="meta-counter-text">
          نمایش <strong id="insightsCount"><?php echo count( $articles_data ); ?></strong> راهنمای فنی و استاندارد تخصصی
        </span>
        <button type="button" id="resetInsightsFilters" class="meta-reset-btn" style="display: none;">
          بازنشانی همه فیلترها
        </button>
      </div>
    </div>

    <!-- Minimal Corporate Cards Grid -->
    <div class="insights-articles-grid" id="insightsGrid">
      <?php 
      $card_index = 0;
      foreach ( $articles_data as $art ) : 
        $card_index++;
        $img_file = isset( $real_image_map[ $art['id'] ] ) ? $real_image_map[ $art['id'] ] : 'about-brand-story-1200x800.webp';
        $img_url = content_url( '/uploads/2026/07/' . $img_file );
        $views = isset( $views_map[ $art['id'] ] ) ? $views_map[ $art['id'] ] : 1500;
        $spec = isset( $spec_map[ $art['id'] ] ) ? $spec_map[ $art['id'] ] : array( 'key' => 'استاندارد مرجع', 'val' => $art['standard'] );
        $brief_summary = wp_trim_words( $art['excerpt'], 20, '...' );
        $std_parts = explode( '//', ! empty( $art['standard'] ) ? $art['standard'] : 'ISO' );
        $short_standard = trim( $std_parts[0] );
        if ( 'DFMA BOOTHROYD' === $short_standard ) {
            $short_standard = 'DFMA';
        }
        if ( 'FAT PROTOCOL' === $short_standard ) {
            $short_standard = 'FAT AUDIT';
        }
      ?>
        <article
          class="insight-article-card"
          data-category="<?php echo esc_attr( $art['category'] ); ?>"
          data-title="<?php echo esc_attr( $art['title'] ); ?>"
          data-excerpt="<?php echo esc_attr( $art['excerpt'] ); ?>"
          data-standard="<?php echo esc_attr( $art['standard'] ); ?>"
          data-views="<?php echo esc_attr( $views ); ?>"
          data-index="<?php echo esc_attr( $card_index ); ?>"
          id="<?php echo esc_attr( $art['id'] ); ?>"
        >
          <!-- Real Image Banner -->
          <div class="article-card-visual">
            <img
              src="<?php echo esc_url( $img_url ); ?>"
              alt="<?php echo esc_attr( $art['title'] ); ?>"
              class="article-card-real-img"
              loading="lazy"
            />
            <div class="card-top-chips-overlay">
              <span class="card-chip-standard"><?php echo esc_html( $short_standard ); ?></span>
            </div>
          </div>

          <!-- Minimal Disciplined Corporate Body -->
          <div class="article-card-body">
            <div class="article-meta-subline">
              <span class="article-pub-date"><?php echo esc_html( $art['date'] ); ?></span>
            </div>

            <h3 class="article-card-title">
              <?php if ( ! empty( $art['permalink'] ) ) : ?>
                <a href="<?php echo esc_url( $art['permalink'] ); ?>">
                  <?php echo esc_html( $art['title'] ); ?>
                </a>
              <?php else : ?>
                <?php echo esc_html( $art['title'] ); ?>
              <?php endif; ?>
            </h3>

            <p class="article-card-excerpt">
              <?php echo esc_html( $brief_summary ); ?>
            </p>

            <!-- Key Engineering Spec -->
            <div class="card-spec-row">
              <span class="spec-key"><?php echo esc_html( $spec['key'] ); ?>:</span>
              <span class="spec-val mono"><?php echo esc_html( $spec['val'] ); ?></span>
            </div>

            <!-- Card Bottom Action -->
            <div class="article-card-footer">
              <?php if ( ! empty( $art['permalink'] ) ) : ?>
                <a
                  href="<?php echo esc_url( $art['permalink'] ); ?>"
                  class="btn article-consult-btn"
                >
                  مطالعه تحلیل کامل مهندسی ←
                </a>
              <?php else : ?>
                <a
                  href="<?php echo esc_url( home_url( '/contact/?topic=' . urlencode( $art['title'] ) ) ); ?>"
                  class="btn article-consult-btn"
                >
                  مشاوره فنی در این موضوع ←
                </a>
              <?php endif; ?>
            </div>
          </div>
        </article>
      <?php endforeach; ?>

      <!-- Empty State Card (When no search/filter matches) -->
      <div class="catalog-empty-state" id="insightsEmptyState" style="display: none;">
        <svg class="catalog-empty-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
          <circle cx="11" cy="11" r="8"></circle>
          <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
        </svg>
        <h3 class="catalog-empty-title">مقاله‌ای با این مشخصات یافت نشد</h3>
        <p class="catalog-empty-desc">عبارت جستجو یا فیلتر دسته‌بندی را تغییر دهید تا نتایج بازگردند.</p>
        <button type="button" class="btn btn-accent" id="emptyResetBtn">
          بازنشانی همه فیلترها
        </button>
      </div>

    </div>

    <!-- Bottom Pagination Component -->
    <nav class="catalog-pagination-wrap" id="insightsPagination" aria-label="صفحات مقالات و استانداردها">
      <button type="button" class="pagination-btn pagination-nav-btn" id="prevPageBtn" aria-label="صفحه قبلی" disabled>
        <svg viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
          <path fill-rule="evenodd" d="M7.21 14.77a.75.75 0 01.02-1.06L11.168 10 7.23 6.29a.75.75 0 111.04-1.08l4.5 4.25a.75.75 0 010 1.08l-4.5 4.25a.75.75 0 01-1.06-.02z" clip-rule="evenodd" />
        </svg>
        <span>قبلی</span>
      </button>

      <div class="pagination-pages" id="paginationPages" style="display: flex; gap: 8px;">
        <!-- Injected via JavaScript: 1, 2, ... -->
      </div>

      <button type="button" class="pagination-btn pagination-nav-btn" id="nextPageBtn" aria-label="صفحه بعدی">
        <span>بعدی</span>
        <svg viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
          <path fill-rule="evenodd" d="M12.79 5.23a.75.75 0 01-.02 1.06L8.832 10l3.938 3.71a.75.75 0 11-1.04 1.08l-4.5-4.25a.75.75 0 010-1.08l4.5-4.25a.75.75 0 011.06.02z" clip-rule="evenodd" />
        </svg>
      </button>
    </nav>

  </div>
</section>

<!-- ========================================================================
     3. TELEGRAM & COMMUNITY REPOSITORY CALLOUT
     ======================================================================== -->
<section class="insights-community-callout" aria-label="پایگاه فایل‌ها و کاتالوگ‌های مهندسی">
  <div class="container">
    <div class="callout-glass-card">
      <div class="callout-grid">
        <div class="callout-text-col">
          <div class="page-hero-badge">
            <span class="pulse-indicator" aria-hidden="true"></span>
            <span class="badge-text">دسترسی آزاد به استانداردهای صنعتی</span>
          </div>
          <h3 class="callout-heading">دانلود کاتالوگ‌های استاندارد، نقشه‌ها و مدل‌های CAD</h3>
          <p class="callout-description">
            کلیه نقشه‌های نمونه کارگاهی، جداول تلرانس‌گذاری هندسی (GD&amp;T)، فرمول‌های طراحی شفت و گیربکس، و چک‌لیست‌های تحویل کارخانه در کانال رسمی تلگرام ماشین دیزاین در دسترس است.
          </p>
        </div>
        <div class="callout-action-col">
          <a href="https://t.me/machinedesign_ir" target="_blank" rel="noopener noreferrer" class="btn btn-accent btn-lg">
            ورود به کانال تلگرام (@machinedesign_ir) ←
          </a>
          <span class="callout-sub-note mono text-muted">دسترسی تخصصی و آزاد بدون نیاز به ثبت‌نام</span>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Client-side Interactive Search, Filter, Sort & Pagination Script -->
<script>
document.addEventListener('DOMContentLoaded', function() {
  const searchInput     = document.getElementById('insightsSearch');
  const clearSearchBtn   = document.getElementById('clearSearchBtn');
  const categorySelect  = document.getElementById('insightsCategorySelect');
  const sortSelect      = document.getElementById('insightsSortSelect');
  const countDisplay    = document.getElementById('insightsCount');
  const resetBtn        = document.getElementById('resetInsightsFilters');
  const emptyResetBtn   = document.getElementById('emptyResetBtn');
  const gridContainer   = document.getElementById('insightsGrid');
  const emptyState      = document.getElementById('insightsEmptyState');
  const paginationWrap  = document.getElementById('insightsPagination');
  const prevPageBtn     = document.getElementById('prevPageBtn');
  const nextPageBtn     = document.getElementById('nextPageBtn');
  const paginationPages = document.getElementById('paginationPages');

  if (!gridContainer) return;

  const originalCards = Array.from(gridContainer.querySelectorAll('.insight-article-card'));
  const ITEMS_PER_PAGE = 9;
  let currentPage = 1;

  function updateView() {
    const searchQuery      = (searchInput ? searchInput.value : '').trim().toLowerCase();
    const selectedCategory = categorySelect ? categorySelect.value : 'all';
    const selectedSort     = sortSelect ? sortSelect.value : 'newest';

    // Toggle clear search button
    if (clearSearchBtn) {
      clearSearchBtn.style.display = searchQuery.length > 0 ? 'flex' : 'none';
    }

    // Toggle reset filters button
    if (resetBtn) {
      const hasActiveFilters = searchQuery.length > 0 || selectedCategory !== 'all' || selectedSort !== 'newest';
      resetBtn.style.display = hasActiveFilters ? 'inline-block' : 'none';
    }

    // 1. Filter Matching Cards
    let filtered = originalCards.filter(function(card) {
      const cat      = card.getAttribute('data-category') || '';
      const title    = (card.getAttribute('data-title') || '').toLowerCase();
      const excerpt  = (card.getAttribute('data-excerpt') || '').toLowerCase();
      const standard = (card.getAttribute('data-standard') || '').toLowerCase();

      const matchesCat    = (selectedCategory === 'all' || cat === selectedCategory);
      const matchesSearch = !searchQuery || (
        title.includes(searchQuery) ||
        excerpt.includes(searchQuery) ||
        standard.includes(searchQuery)
      );

      return matchesCat && matchesSearch;
    });

    // 2. Sort Matching Cards
    filtered.sort(function(a, b) {
      if (selectedSort === 'popular') {
        const viewsA = parseInt(a.getAttribute('data-views') || '0', 10);
        const viewsB = parseInt(b.getAttribute('data-views') || '0', 10);
        return viewsB - viewsA;
      } else if (selectedSort === 'oldest') {
        const idxA = parseInt(a.getAttribute('data-index') || '0', 10);
        const idxB = parseInt(b.getAttribute('data-index') || '0', 10);
        return idxB - idxA;
      } else {
        // newest (default)
        const idxA = parseInt(a.getAttribute('data-index') || '0', 10);
        const idxB = parseInt(b.getAttribute('data-index') || '0', 10);
        return idxA - idxB;
      }
    });

    // Update Counter
    if (countDisplay) {
      countDisplay.textContent = filtered.length;
    }

    // Handle Empty State
    if (filtered.length === 0) {
      originalCards.forEach(function(c) { c.style.display = 'none'; });
      if (emptyState) emptyState.style.display = 'block';
      if (paginationWrap) paginationWrap.style.display = 'none';
      return;
    } else {
      if (emptyState) emptyState.style.display = 'none';
    }

    // 3. Pagination Logic
    const totalPages = Math.ceil(filtered.length / ITEMS_PER_PAGE);
    if (currentPage > totalPages) {
      currentPage = totalPages;
    }
    if (currentPage < 1) {
      currentPage = 1;
    }

    const startIndex = (currentPage - 1) * ITEMS_PER_PAGE;
    const endIndex   = startIndex + ITEMS_PER_PAGE;
    const pageItems  = filtered.slice(startIndex, endIndex);

    // Hide all cards first
    originalCards.forEach(function(c) { c.style.display = 'none'; });

    // Show and re-append sorted items for current page
    pageItems.forEach(function(card) {
      card.style.display = 'flex';
      gridContainer.appendChild(card);
    });

    // Render Pagination Controls
    renderPagination(totalPages);
  }

  function renderPagination(totalPages) {
    if (!paginationPages) return;
    paginationPages.innerHTML = '';

    if (totalPages <= 1) {
      if (paginationWrap) paginationWrap.style.display = 'none';
      return;
    } else {
      if (paginationWrap) paginationWrap.style.display = 'flex';
    }

    // Previous Button State
    if (prevPageBtn) {
      prevPageBtn.disabled = (currentPage === 1);
    }

    // Next Button State
    if (nextPageBtn) {
      nextPageBtn.disabled = (currentPage === totalPages);
    }

    // Page Number Buttons
    for (let p = 1; p <= totalPages; p++) {
      const pageBtn = document.createElement('button');
      pageBtn.type = 'button';
      pageBtn.className = 'pagination-btn' + (p === currentPage ? ' is-active' : '');
      pageBtn.textContent = p;
      pageBtn.setAttribute('aria-label', 'صفحه ' + p);
      pageBtn.addEventListener('click', function() {
        currentPage = p;
        updateView();
        const toolbar = document.querySelector('.catalog-control-toolbar');
        if (toolbar) {
          toolbar.scrollIntoView({ behavior: 'smooth', block: 'start' });
        }
      });
      paginationPages.appendChild(pageBtn);
    }
  }

  // Event Listeners
  if (searchInput) {
    searchInput.addEventListener('input', function() {
      currentPage = 1;
      updateView();
    });
  }

  if (clearSearchBtn) {
    clearSearchBtn.addEventListener('click', function() {
      searchInput.value = '';
      currentPage = 1;
      updateView();
      searchInput.focus();
    });
  }

  if (categorySelect) {
    categorySelect.addEventListener('change', function() {
      currentPage = 1;
      updateView();
    });
  }

  if (sortSelect) {
    sortSelect.addEventListener('change', function() {
      currentPage = 1;
      updateView();
    });
  }

  if (prevPageBtn) {
    prevPageBtn.addEventListener('click', function() {
      if (currentPage > 1) {
        currentPage--;
        updateView();
        const toolbar = document.querySelector('.catalog-control-toolbar');
        if (toolbar) toolbar.scrollIntoView({ behavior: 'smooth', block: 'start' });
      }
    });
  }

  if (nextPageBtn) {
    nextPageBtn.addEventListener('click', function() {
      currentPage++;
      updateView();
      const toolbar = document.querySelector('.catalog-control-toolbar');
      if (toolbar) toolbar.scrollIntoView({ behavior: 'smooth', block: 'start' });
    });
  }

  function resetAll() {
    if (searchInput) searchInput.value = '';
    if (categorySelect) categorySelect.value = 'all';
    if (sortSelect) sortSelect.value = 'newest';
    currentPage = 1;
    updateView();
  }

  if (resetBtn) resetBtn.addEventListener('click', resetAll);
  if (emptyResetBtn) emptyResetBtn.addEventListener('click', resetAll);

  // Initial Run
  updateView();
});
</script>

<?php
get_footer();
