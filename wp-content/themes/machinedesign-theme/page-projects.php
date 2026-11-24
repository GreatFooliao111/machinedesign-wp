<?php
/**
 * Template Name: پورتفولیوی پروژه‌های مهندسی (Engineering Projects Portfolio)
 * Description: Executive corporate engineering portfolio featuring a flagship featured project hero, dynamic toolbar with category & sort dropdowns, live search, light catalog theme, minimal high-discipline cards, real industrial imagery, and interactive pagination.
 *
 * @package HelloElementor
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

get_header();

// 1. Filter Taxonomy Configuration
$project_categories = array(
    'all'             => array( 'title' => 'همه پروژه‌ها', 'count' => 8 ),
    'packaging'       => array( 'title' => 'ماشین‌آلات بسته‌بندی', 'count' => 3 ),
    'automation'      => array( 'title' => 'اتوماسیون و کانوایر', 'count' => 2 ),
    'tooling'         => array( 'title' => 'قالب‌سازی و معکوس', 'count' => 1 ),
    'troubleshooting' => array( 'title' => 'عیب‌یابی و ارتعاشات', 'count' => 1 ),
    'inspection'      => array( 'title' => 'کارشناسی و بازرسی FAT', 'count' => 1 ),
);

// 2. Structured Engineering Case Studies (Baseline)
$projects_data = array(
    array(
        'id'          => 'prj-01',
        'category'    => 'packaging',
        'cat_label'   => 'ماشین‌آلات بسته‌بندی',
        'standard'    => 'DIN EN 415-4',
        'title'       => 'خط بسته‌بندی اتوماتیک پیلوپک افقی پرسرعت (Flow Pack)',
        'client'      => 'صنایع دارویی و بهداشتی',
        'challenge'   => 'استهلاک مداوم فک‌های حرارتی مکانیکی در سرعت بالای ۱۲۰ بسته در دقیقه و چروکیدگی لفاف فیلم.',
        'solution'    => 'طراحی صفر تا صد مکانیزم سیلینگ دوار سروودرایو با پروفیل حرکت الکترونیک، کنترل کشش فیلم و سنسور مارک‌بین نوری.',
        'result'      => 'افزایش سرعت خط به ۱۸۰ بسته در دقیقه، کاهش ۹۵٪ ضایعات سلفون و دستیابی به استاندارد بهداشتی فارما.',
        'badge'       => '180 PPM',
        'date'        => date( 'j M Y', strtotime( '2026-10-20' ) ),
        'raw_date'    => '2026-10-20',
    ),
    array(
        'id'          => 'prj-02',
        'category'    => 'automation',
        'cat_label'   => 'اتوماسیون و کانوایر',
        'standard'    => 'DIN EN 1672-2',
        'title'       => 'سیستم کانوایر اسپیرال و انتقال پیوسته قوطی و بطری',
        'client'      => 'مجتمع فرآوری صنایع غذایی و لبنی',
        'challenge'   => 'کمبود فضا برای خنک‌سازی محصول بعد از پاستوریزاتور و لزوم انتقال عمودی بدون پرتاب یا آسیب به ظروف.',
        'solution'    => 'طراحی برج اسپیرال چندطبقه با درایو مرکزی هماهنگ، زنجیرهای استنلس استیل ۳۰۴ ضدسایش و سیستم شستشوی درجا CIP.',
        'result'      => 'صرفه‌جویی ۶۵ درصدی در سطح اشغال سالن تولید و انتقال بدون توقف ۵۰۰۰ قوطی در ساعت.',
        'badge'       => '5000 BPH',
        'date'        => date( 'j M Y', strtotime( '2026-09-14' ) ),
        'raw_date'    => '2026-09-14',
    ),
    array(
        'id'          => 'prj-03',
        'category'    => 'tooling',
        'cat_label'   => 'قالب‌سازی و معکوس',
        'standard'    => 'ASME Y14.5',
        'title'       => 'مهندسی معکوس و ساخت قالب تزریق بادی ۶ کویته بطری دارویی',
        'client'      => 'شرکت داروسازی',
        'challenge'   => 'توقف خط به دلیل شکست قالب آلمانی وارداتی و عدم ارائه نقشه ساخت و تلرانس‌های فرم‌دهی از سوی سازنده خارجی.',
        'solution'    => 'اسکن نوری دقیق با رزولوشن میکرونی، بازسازی سطوح NURBS در کتیا، شبیه‌سازی حرارت و ماشین‌کاری آلیاژ 7075.',
        'result'      => 'تحویل قالب ظرف ۲۵ روز کاری با دقت ابعادی ۵ میکرون و صرفه‌جویی ۷۰ درصدی نسبت به خرید خارجی.',
        'badge'       => '6-CAVITY MOLD',
        'date'        => date( 'j M Y', strtotime( '2026-08-05' ) ),
        'raw_date'    => '2026-08-05',
    ),
    array(
        'id'          => 'prj-04',
        'category'    => 'troubleshooting',
        'cat_label'   => 'عیب‌یابی و ارتعاشات',
        'standard'    => 'ISO 10816-3',
        'title'       => 'عیب‌یابی ارتعاشات و رفع تشدید (Resonance) کمپرسور گریز از مرکز',
        'client'      => 'مجتمع پتروشیمی',
        'challenge'   => 'آلارم مداوم تریپ سیستم ارتعاش‌سنجی کمپرسور در دور نامی و توقف‌های پرهزینه اضطراری خط پلیمریزاسیون.',
        'solution'    => 'تحلیل طیف فرکانسی FFT، آزمون ضربه جهت استخراج فرکانس طبیعی، مدل‌سازی المان محدود شاسی و تقویت پایه‌ها.',
        'result'      => 'افت ارتعاشات روتور از ۱۱.۲ mm/s RMS به زیر ۱.۸ mm/s (محدوده مجاز Class A) و جلوگیری از توقف خط.',
        'badge'       => '-84% VIBRATION',
        'date'        => date( 'j M Y', strtotime( '2026-07-22' ) ),
        'raw_date'    => '2026-07-22',
    ),
    array(
        'id'          => 'prj-05',
        'category'    => 'packaging',
        'cat_label'   => 'ماشین‌آلات بسته‌بندی',
        'standard'    => 'ISO 12100',
        'title'       => 'سلول رباتیک بسته‌بندی کارتن (Pick & Place) با مکانیزم دلتا',
        'client'      => 'تولیدکننده مواد شوینده و بهداشتی',
        'challenge'   => 'نیاز به بسته‌بندی پرسرعت محصولات انعطاف‌پذیر با شکل‌های نامنظم و کاهش دخالت دست اپراتور در بخش پکینگ.',
        'solution'    => 'تلفیق ربات دلتای ۴ محوره بومی با گریپر خلاء سفارشی، بینایی ماشین جهت ره‌گیری موقعیت محصول روی کانوایر متحرک.',
        'result'      => 'نرخ بسته‌بندی ۱۱۰ عدد در دقیقه با دقت موقعیت‌یابی ۰.۵ میلی‌متر و ارتقای ۱۰۰ درصدی ایمنی ایستگاه کاری.',
        'badge'       => '110 PPM DELTA',
        'date'        => date( 'j M Y', strtotime( '2026-06-18' ) ),
        'raw_date'    => '2026-06-18',
    ),
    array(
        'id'          => 'prj-06',
        'category'    => 'inspection',
        'cat_label'   => 'کارشناسی و بازرسی FAT',
        'standard'    => 'CE DIRECTIVE',
        'title'       => 'کارشناسی فنی خرید و بازرسی آزمون پذیرش کارخانه (FAT) خط نورد در چین',
        'client'      => 'هلدینگ فولاد و لوله‌سازی',
        'challenge'   => 'ریسک عدم تطابق آلیاژ رولیک‌ها، موتورها و تلرانس‌های مونتاژ در قرارداد خط نورد پیش از حمل به ایران.',
        'solution'    => 'اعزام کارشناس ارشد ماشین دیزاین به شاندونگ چین، آزمون متالورژی پرتابل XRF، ممیزی ابعادی لیزری و آزمون بارداری.',
        'result'      => 'کشف و رفع ۱۸ مورد مغایرت بحرانی در تلرانس بیرینگ‌ها و گیربکس قبل از تسویه نهایی، و تضمین سلامت در گمرک.',
        'badge'       => 'FAT AUDIT',
        'date'        => date( 'j M Y', strtotime( '2026-05-30' ) ),
        'raw_date'    => '2026-05-30',
    ),
);

// 3. Query Dynamic Published Projects from Database
$db_projects = get_posts( array(
    'post_type'      => 'project',
    'post_status'    => 'publish',
    'posts_per_page' => 20,
    'orderby'        => 'date',
    'order'          => 'DESC',
) );

$cat_label_map = array(
    'packaging'       => 'ماشین‌آلات بسته‌بندی',
    'automation'      => 'اتوماسیون و کانوایر',
    'tooling'         => 'قالب‌سازی و معکوس',
    'troubleshooting' => 'عیب‌یابی و ارتعاشات',
    'inspection'      => 'کارشناسی و بازرسی FAT',
);

$dynamic_projects = array();
if ( ! empty( $db_projects ) ) {
    foreach ( $db_projects as $dp ) {
        $cat_terms = get_the_terms( $dp->ID, 'project_category' );
        $cat_slug = ! empty( $cat_terms ) ? $cat_terms[0]->slug : get_post_meta( $dp->ID, '_md_project_category', true );
        if ( empty( $cat_slug ) ) {
            $cat_slug = 'packaging';
        }
        $cat_label = isset( $cat_label_map[ $cat_slug ] ) ? $cat_label_map[ $cat_slug ] : 'پروژه مهندسی';

        $client    = get_post_meta( $dp->ID, '_md_project_client', true );
        $challenge = get_post_meta( $dp->ID, '_md_project_challenge', true );
        $solution  = get_post_meta( $dp->ID, '_md_project_solution', true );
        $result    = get_post_meta( $dp->ID, '_md_project_result', true );
        $standard  = get_post_meta( $dp->ID, '_md_project_standard', true );
        $badge     = get_post_meta( $dp->ID, '_md_project_badge', true );

        if ( empty( $client ) ) {
            $client = 'صنایع تولیدی و صنعتی';
        }
        if ( empty( $challenge ) ) {
            $challenge = ! empty( $dp->post_excerpt ) ? $dp->post_excerpt : 'طراحی سفارشی و بهینه‌سازی عملکرد خط تولید.';
        }
        if ( empty( $solution ) ) {
            $solution = wp_trim_words( strip_tags( $dp->post_content ), 25, '...' );
        }
        if ( empty( $result ) ) {
            $result = 'تحویل موفقیت‌آمیز پروژه و تضمین کارکرد ۱۰۰٪ بر اساس استانداردهای بین‌المللی.';
        }
        if ( empty( $standard ) ) {
            $standard = 'DIN / ISO VERIFIED';
        }
        if ( empty( $badge ) ) {
            $badge = 'COMMISSIONED';
        }

        $dynamic_projects[] = array(
            'id'          => 'prj-db-' . $dp->ID,
            'category'    => $cat_slug,
            'cat_label'   => $cat_label,
            'standard'    => $standard,
            'title'       => $dp->post_title,
            'client'      => $client,
            'challenge'   => $challenge,
            'solution'    => $solution,
            'result'      => $result,
            'badge'       => $badge,
            'date'        => date( 'j M Y', strtotime( $dp->post_date ) ),
            'raw_date'    => $dp->post_date,
        );
    }
}

// Merge: DB projects first, followed by baseline case studies
$projects_data = array_merge( $dynamic_projects, $projects_data );

// Dynamically compute category counts
foreach ( $project_categories as $key => &$cat_info ) {
    if ( 'all' === $key ) {
        $cat_info['count'] = count( $projects_data );
    } else {
        $cnt = 0;
        foreach ( $projects_data as $item ) {
            if ( $item['category'] === $key ) {
                $cnt++;
            }
        }
        $cat_info['count'] = $cnt;
    }
}
unset( $cat_info );

// Real Image Mapping
$real_image_map = array(
    'prj-01'     => 'about-industry-packaging-600x400.webp',
    'prj-02'     => 'portfolio-conveyor-800x600.webp',
    'prj-03'     => 'about-industry-parts-600x400.webp',
    'prj-04'     => 'portfolio-fea-800x600.webp',
    'prj-05'     => 'delta_robot_final.avif',
    'prj-06'     => 'pillar6-module1-china-audit.webp',
    'prj-db-202' => 'about-industry-production-600x400.webp',
    'prj-db-203' => 'about-industry-machining-600x400.webp',
);

// Popularity View Count Mapping
$views_map = array(
    'prj-01'     => 4820,
    'prj-02'     => 3650,
    'prj-03'     => 3120,
    'prj-04'     => 4450,
    'prj-05'     => 5230,
    'prj-06'     => 3980,
    'prj-db-202' => 2740,
    'prj-db-203' => 3410,
);

// Engineering Spec Mapping
$spec_map = array(
    'prj-01'     => array( 'key' => 'ظرفیت نامی', 'val' => '۱۸۰ بسته در دقیقه' ),
    'prj-02'     => array( 'key' => 'نرخ انتقال', 'val' => '۵,۰۰۰ قوطی در ساعت' ),
    'prj-03'     => array( 'key' => 'دقت ساخت', 'val' => '۵ میکرون CMM' ),
    'prj-04'     => array( 'key' => 'افت ارتعاش', 'val' => '۸۴٪ کاهش دامنه RMS' ),
    'prj-05'     => array( 'key' => 'نرخ چینش', 'val' => '۱۱۰ عدد در دقیقه' ),
    'prj-06'     => array( 'key' => 'آزمون متالورژی', 'val' => 'کوانتومتری و XRF پرتابل' ),
    'prj-db-202' => array( 'key' => 'راندمان شرینک', 'val' => '۸۵ بسته در دقیقه' ),
    'prj-db-203' => array( 'key' => 'فشار تست هیدرولیک', 'val' => '۳۵۰ بار کاری' ),
);
?>

<!-- ========================================================================
     1. FEATURED ENGINEERING PROJECT HERO
     ======================================================================== -->
<section class="featured-hero-wrap" aria-label="پروژه پرچمدار و برگزیده مهندسی">
  <div class="container">
    <div class="featured-hero-grid">

      <!-- Right Column: Featured Project Details -->
      <div class="featured-hero-content">
        <!-- Breadcrumb Navigation -->
        <nav class="page-hero-breadcrumb" aria-label="مسیر راهنما">
          <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="breadcrumb-item">صفحه اصلی</a>
          <span class="breadcrumb-separator" aria-hidden="true">/</span>
          <span class="breadcrumb-current" aria-current="page">سوابق و پروژه‌های تحویل‌شده</span>
        </nav>

        <!-- Flagship Badge -->
        <div class="featured-hero-badge">
          <span class="pulse-indicator" aria-hidden="true"></span>
          <span>پروژه پرچمدار مهندسی ماشین دیزاین</span>
        </div>

        <h1 class="featured-hero-title">
          خط بسته‌بندی اتوماتیک پیلوپک افقی پرسرعت (Flow Pack 180 PPM)
        </h1>

        <p class="featured-hero-lead">
          طراحی و ساخت صفر تا صد مکانیزم سیلینگ دوار سروودرایو (Rotary Servo Sealing) با پروفیل شتاب ملایم الکترونیک، کنترل کشش فیلم و سنسور مارک‌بین نوری با ظرفیت ۱۸۰ بسته در دقیقه و کاهش ۹۵٪ ضایعات لفاف.
        </p>

        <!-- Authentic Technical Dossier Ledger (Replacing 4 superficial boxes) -->
        <div class="featured-dossier-ledger" aria-label="مشخصات مهندسی پروژه پرچمدار">
          <div class="dossier-grid">
            <div class="dossier-item">
              <span class="dossier-label">مکانیزم محرک سیلینگ:</span>
              <span class="dossier-val">سیلینگ دوار پیوسته با سروودرایو سنکرون (Rotary Sealing)</span>
            </div>
            <div class="dossier-item">
              <span class="dossier-label">کنترلر حرکت و همگام‌سازی:</span>
              <span class="dossier-val mono">موشن کنترلر چندمحوره Trio Motion (دقت ±۰.۰۵mm)</span>
            </div>
            <div class="dossier-item">
              <span class="dossier-label">نرخ تولید پایدار تست‌شده:</span>
              <span class="dossier-val mono">۱۸۰ بسته در دقیقه (کاهش ۹۵٪ ضایعات سلفون)</span>
            </div>
            <div class="dossier-item">
              <span class="dossier-label">استاندارد ایمنی و بهداشتی:</span>
              <span class="dossier-val">انطباق کامل با استاندارد بسته‌بندی DIN EN 415-4</span>
            </div>
          </div>
        </div>

        <!-- Action Buttons -->
        <div class="featured-hero-actions">
          <a href="<?php echo esc_url( home_url( '/contact/?project=' . urlencode('خط پیلوپک پرسرعت') ) ); ?>" class="btn btn-accent btn-lg">
            درخواست استعلام فنی و مشاوره خط مشابه ←
          </a>
          <a href="#projectsGrid" class="featured-secondary-link">
            <span>کاتالوگ پروژه‌ها و جستجو</span>
            <svg viewBox="0 0 20 20" fill="currentColor" style="width: 16px; height: 16px;" aria-hidden="true">
              <path fill-rule="evenodd" d="M10 3a.75.75 0 01.75.75v10.638l3.96-4.158a.75.75 0 111.08 1.04l-5.25 5.5a.75.75 0 01-1.08 0l-5.25-5.5a.75.75 0 111.08-1.04l3.96 4.158V3.75A.75.75 0 0110 3z" clip-rule="evenodd" />
            </svg>
          </a>
        </div>
      </div>

      <!-- Left Column: Featured Project Real Visual Box -->
      <div class="featured-hero-visual md-hero-visual-col">
        <?php if ( function_exists( 'md_render_hero_3d_stage' ) ) { md_render_hero_3d_stage( 'projects' ); } ?>
      </div>

    </div>
  </div>
</section>

<!-- ========================================================================
     2. LIGHT CATALOG SECTION (SEARCH, DROPDOWNS, GRID & PAGINATION)
     ======================================================================== -->
<section class="projects-catalog-section" aria-label="کاتالوگ پروژه‌ها و فیلتر دسته‌بندی">
  <div class="container">

    <!-- Professional Control Toolbar -->
    <div class="catalog-control-toolbar" role="search" aria-label="ابزارهای جستجو، فیلتر و مرتب‌سازی پروژه‌ها">
      <div class="catalog-toolbar-grid">

        <!-- 1. Live Search Field -->
        <div class="catalog-toolbar-col col-search">
          <label for="projectsSearch" class="catalog-filter-label">
            <svg viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
              <path fill-rule="evenodd" d="M9 3.5a5.5 5.5 0 100 11 5.5 5.5 0 000-11zM2 9a7 7 0 1112.452 4.391l3.328 3.329a.75.75 0 11-1.06 1.06l-3.329-3.328A7 7 0 012 9z" clip-rule="evenodd" />
            </svg>
            <span>جستجو در پروژه‌ها:</span>
          </label>
          <div class="search-input-box">
            <svg class="search-icon" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
              <path fill-rule="evenodd" d="M9 3.5a5.5 5.5 0 100 11 5.5 5.5 0 000-11zM2 9a7 7 0 1112.452 4.391l3.328 3.329a.75.75 0 11-1.06 1.06l-3.329-3.328A7 7 0 012 9z" clip-rule="evenodd" />
            </svg>
            <input
              type="text"
              id="projectsSearch"
              class="catalog-search-input"
              placeholder="جستجو بر اساس عنوان، کارفرما، استاندارد یا کلمات کلیدی..."
              autocomplete="off"
              aria-label="جستجو در پروژه‌های مهندسی"
            />
            <button type="button" id="clearProjectsSearchBtn" class="clear-search-btn" aria-label="پاک کردن متن جستجو" style="display: none;">
              <svg viewBox="0 0 20 20" fill="currentColor" style="width: 12px; height: 12px;" aria-hidden="true">
                <path d="M6.28 5.22a.75.75 0 00-1.06 1.06L8.94 10l-3.72 3.72a.75.75 0 101.06 1.06L10 11.06l3.72 3.72a.75.75 0 101.06-1.06L11.06 10l3.72-3.72a.75.75 0 00-1.06-1.06L10 8.94 6.28 5.22z" />
              </svg>
            </button>
          </div>
        </div>

        <!-- 2. Category Dropdown -->
        <div class="catalog-toolbar-col col-category">
          <label for="projectsCategorySelect" class="catalog-filter-label">
            <svg viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
              <path d="M2 4.75A.75.75 0 012.75 4h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 4.75zm0 5.25a.75.75 0 01.75-.75h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 10zm0 5.25a.75.75 0 01.75-.75h14.5a.75.75 0 010 1.5H2.75a.75.75 0 01-.75-.75z" />
            </svg>
            <span>دسته‌بندی حوزه صنعتی:</span>
          </label>
          <div class="select-field-box">
            <svg class="select-icon" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
              <path fill-rule="evenodd" d="M4.25 2A2.25 2.25 0 002 4.25v11.5A2.25 2.25 0 004.25 18h11.5A2.25 2.25 0 0018 15.75V4.25A2.25 2.25 0 0015.75 2H4.25zm4.03 6.28a.75.75 0 00-1.06-1.06L4.97 9.47a.75.75 0 000 1.06l2.25 2.25a.75.75 0 001.06-1.06L6.56 10l1.72-1.72zm3.44-1.06a.75.75 0 111.06 1.06L14.44 10l-1.72 1.72a.75.75 0 11-1.06-1.06L13.38 10l-1.66-1.78z" clip-rule="evenodd" />
            </svg>
            <select id="projectsCategorySelect" class="catalog-select" aria-label="فیلتر بر اساس حوزه پروژه">
              <?php foreach ( $project_categories as $key => $cat ) : ?>
                <option value="<?php echo esc_attr( $key ); ?>">
                  <?php echo esc_html( $cat['title'] ); ?> (<?php echo esc_html( $cat['count'] ); ?>)
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
          <label for="projectsSortSelect" class="catalog-filter-label">
            <svg viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
              <path d="M2.5 3a.5.5 0 01.5-.5h14a.5.5 0 010 1H3a.5.5 0 01-.5-.5zm2 4.5a.5.5 0 01.5-.5h10a.5.5 0 010 1H5a.5.5 0 01-.5-.5zm2 4.5a.5.5 0 01.5-.5h6a.5.5 0 010 1H7a.5.5 0 01-.5-.5zm2 4.5a.5.5 0 01.5-.5h2a.5.5 0 010 1H9a.5.5 0 01-.5-.5z" />
            </svg>
            <span>مرتب‌سازی پروژه‌ها:</span>
          </label>
          <div class="select-field-box">
            <svg class="select-icon" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
              <path fill-rule="evenodd" d="M10 3a.75.75 0 01.75.75v10.638l3.96-4.158a.75.75 0 111.08 1.04l-5.25 5.5a.75.75 0 01-1.08 0l-5.25-5.5a.75.75 0 111.08-1.04l3.96 4.158V3.75A.75.75 0 0110 3z" clip-rule="evenodd" />
            </svg>
            <select id="projectsSortSelect" class="catalog-select" aria-label="مرتب‌سازی پروژه‌ها">
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
          نمایش <strong id="projectsCount"><?php echo count( $projects_data ); ?></strong> پروژه مهندسی راستی‌آزمایی‌شده
        </span>
        <button type="button" id="resetProjectsFilters" class="meta-reset-btn" style="display: none;">
          بازنشانی همه فیلترها
        </button>
      </div>
    </div>

    <!-- Minimal Corporate Cards Grid -->
    <div class="projects-portfolio-grid" id="projectsGrid">
      <?php 
      $p_index = 0;
      foreach ( $projects_data as $p ) : 
        $p_index++;
        $img_file = isset( $real_image_map[ $p['id'] ] ) ? $real_image_map[ $p['id'] ] : 'about-industry-production-600x400.webp';
        $img_url = content_url( '/uploads/2026/07/' . $img_file );
        $views = isset( $views_map[ $p['id'] ] ) ? $views_map[ $p['id'] ] : 2000;
        $spec = isset( $spec_map[ $p['id'] ] ) ? $spec_map[ $p['id'] ] : array( 'key' => 'استاندارد مرجع', 'val' => $p['standard'] );
        $brief_summary = ! empty( $p['solution'] ) ? wp_trim_words( $p['solution'], 20, '...' ) : wp_trim_words( $p['challenge'], 20, '...' );
        $std_parts = explode( '//', ! empty( $p['standard'] ) ? $p['standard'] : 'DIN / ISO' );
        $short_standard = trim( $std_parts[0] );
      ?>
        <article
          class="project-engineering-card"
          data-category="<?php echo esc_attr( $p['category'] ); ?>"
          data-title="<?php echo esc_attr( $p['title'] ); ?>"
          data-client="<?php echo esc_attr( $p['client'] ); ?>"
          data-challenge="<?php echo esc_attr( $p['challenge'] ); ?>"
          data-solution="<?php echo esc_attr( $p['solution'] ); ?>"
          data-standard="<?php echo esc_attr( $p['standard'] ); ?>"
          data-views="<?php echo esc_attr( $views ); ?>"
          data-index="<?php echo esc_attr( $p_index ); ?>"
          id="<?php echo esc_attr( $p['id'] ); ?>"
        >
          <!-- Real Image Banner -->
          <div class="project-card-visual">
            <img
              src="<?php echo esc_url( $img_url ); ?>"
              alt="<?php echo esc_attr( $p['title'] ); ?>"
              class="project-card-real-img"
              loading="lazy"
            />
            <div class="card-top-chips-overlay">
              <span class="card-chip-standard"><?php echo esc_html( $short_standard ); ?></span>
            </div>
          </div>

          <!-- Minimal Disciplined Corporate Body -->
          <div class="project-card-body">
            <div class="project-meta-subline">
              <span class="project-client-tag">کارفرما: <?php echo esc_html( $p['client'] ); ?></span>
              <span class="project-pub-date"><?php echo esc_html( $p['date'] ); ?></span>
            </div>

            <h3 class="project-card-title">
              <?php echo esc_html( $p['title'] ); ?>
            </h3>

            <p class="project-card-excerpt">
              <?php echo esc_html( $brief_summary ); ?>
            </p>

            <!-- Key Engineering Spec -->
            <div class="card-spec-row">
              <span class="spec-key"><?php echo esc_html( $spec['key'] ); ?>:</span>
              <span class="spec-val mono"><?php echo esc_html( $spec['val'] ); ?></span>
            </div>

            <!-- Card Bottom Action -->
            <div class="project-card-footer">
              <a
                href="<?php echo esc_url( home_url( '/contact/?project=' . urlencode( $p['title'] ) ) ); ?>"
                class="btn project-inquire-btn"
              >
                درخواست استعلام فنی پروژه ←
              </a>
            </div>
          </div>
        </article>
      <?php endforeach; ?>

      <!-- Empty State Card (When no search/filter matches) -->
      <div class="catalog-empty-state" id="projectsEmptyState" style="display: none;">
        <svg class="catalog-empty-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
          <circle cx="11" cy="11" r="8"></circle>
          <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
        </svg>
        <h3 class="catalog-empty-title">پروژه‌ای با این مشخصات یافت نشد</h3>
        <p class="catalog-empty-desc">عبارت جستجو یا فیلتر حوزه صنعتی را تغییر دهید تا نتایج بازگردند.</p>
        <button type="button" class="btn btn-accent" id="emptyProjectsResetBtn">
          بازنشانی همه فیلترها
        </button>
      </div>

    </div>

    <!-- Bottom Pagination Component -->
    <nav class="catalog-pagination-wrap" id="projectsPagination" aria-label="صفحات پروژه‌ها">
      <button type="button" class="pagination-btn pagination-nav-btn" id="prevProjectsPageBtn" aria-label="صفحه قبلی" disabled>
        <svg viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
          <path fill-rule="evenodd" d="M7.21 14.77a.75.75 0 01.02-1.06L11.168 10 7.23 6.29a.75.75 0 111.04-1.08l4.5 4.25a.75.75 0 010 1.08l-4.5 4.25a.75.75 0 01-1.06-.02z" clip-rule="evenodd" />
        </svg>
        <span>قبلی</span>
      </button>

      <div class="pagination-pages" id="projectsPaginationPages" style="display: flex; gap: 8px;">
        <!-- Injected via JavaScript: 1, 2, ... -->
      </div>

      <button type="button" class="pagination-btn pagination-nav-btn" id="nextProjectsPageBtn" aria-label="صفحه بعدی">
        <span>بعدی</span>
        <svg viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
          <path fill-rule="evenodd" d="M12.79 5.23a.75.75 0 01-.02 1.06L8.832 10l3.938 3.71a.75.75 0 11-1.04 1.08l-4.5-4.25a.75.75 0 010-1.08l4.5-4.25a.75.75 0 011.06.02z" clip-rule="evenodd" />
        </svg>
      </button>
    </nav>

  </div>
</section>

<!-- ========================================================================
     3. BOTTOM ENGINEERING CONSULTATION CALLOUT
     ======================================================================== -->
<section class="projects-cta-callout" aria-label="مشاوره پروژه‌های صنعتی">
  <div class="container">
    <div class="callout-glass-card">
      <div class="callout-grid">
        <div class="callout-text-col">
          <div class="page-hero-badge">
            <span class="pulse-indicator" aria-hidden="true"></span>
            <span class="badge-text">طراحی سفارشی و مهندسی خطوط تولید</span>
          </div>
          <h3 class="callout-heading">پروژه صنعتی یا ایده ماشین‌آلات جدیدی در دستور کار دارید؟</h3>
          <p class="callout-description">
            تیم مهندسی ماشین دیزاین با تجربه ده‌ها خط بسته‌بندی، اتوماسیون و تجهیزات خاص صنعتی، آماده ارزیابی امکان‌سنجی فنی و محاسبات اقتصادی اولیه خط تولید شماست.
          </p>
        </div>
        <div class="callout-action-col">
          <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="btn btn-accent btn-lg">
            جلسه مشاوره مهندسی در کارگاه مشهد ←
          </a>
          <span class="callout-sub-note mono text-muted">مشهد، شانگهای، دبی · تحت پروتکل رسمی NDA</span>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Client-side Interactive Search, Filter, Sort & Pagination Script -->
<script>
document.addEventListener('DOMContentLoaded', function() {
  const searchInput     = document.getElementById('projectsSearch');
  const clearSearchBtn   = document.getElementById('clearProjectsSearchBtn');
  const categorySelect  = document.getElementById('projectsCategorySelect');
  const sortSelect      = document.getElementById('projectsSortSelect');
  const countDisplay    = document.getElementById('projectsCount');
  const resetBtn        = document.getElementById('resetProjectsFilters');
  const emptyResetBtn   = document.getElementById('emptyProjectsResetBtn');
  const gridContainer   = document.getElementById('projectsGrid');
  const emptyState      = document.getElementById('projectsEmptyState');
  const paginationWrap  = document.getElementById('projectsPagination');
  const prevPageBtn     = document.getElementById('prevProjectsPageBtn');
  const nextPageBtn     = document.getElementById('nextProjectsPageBtn');
  const paginationPages = document.getElementById('projectsPaginationPages');

  if (!gridContainer) return;

  const originalCards = Array.from(gridContainer.querySelectorAll('.project-engineering-card'));
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
      const cat       = card.getAttribute('data-category') || '';
      const title     = (card.getAttribute('data-title') || '').toLowerCase();
      const client    = (card.getAttribute('data-client') || '').toLowerCase();
      const challenge = (card.getAttribute('data-challenge') || '').toLowerCase();
      const solution  = (card.getAttribute('data-solution') || '').toLowerCase();
      const standard  = (card.getAttribute('data-standard') || '').toLowerCase();

      const matchesCat    = (selectedCategory === 'all' || cat === selectedCategory);
      const matchesSearch = !searchQuery || (
        title.includes(searchQuery) ||
        client.includes(searchQuery) ||
        challenge.includes(searchQuery) ||
        solution.includes(searchQuery) ||
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
md_render_optional_gutenberg_slot();
get_footer();
