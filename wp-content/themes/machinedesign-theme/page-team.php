<?php
/**
 * Template Name: صفحه تیم ماشین دیزاین (The 16-Member Engineering Powerhouse)
 * Description: Roster of the 16-member multidisciplinary engineering delegation with live real-time search & department filtering, B2B trust metrics, and direct links to individual portfolio pages.
 *
 * @package HelloElementor
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

get_header();

// 1. Department Taxonomy
$departments = [
    'all'           => [ 'title' => 'همه متخصصان', 'count' => 16 ],
    'mechanism'     => [ 'title' => 'طراحی مکانیزم', 'count' => 4 ],
    'simulation'    => [ 'title' => 'شبیه‌سازی و ارتعاشات', 'count' => 3 ],
    'manufacturing' => [ 'title' => 'مهندسی ساخت و DFMA', 'count' => 4 ],
    'automation'    => [ 'title' => 'اتوماسیون و موشن', 'count' => 3 ],
    'safety-capex'  => [ 'title' => 'ایمنی و CAPEX', 'count' => 2 ],
];

// 2. Ordered 16-Member Roster Configuration with Search Keywords
$roster_config = [
    // --- 1. دپارتمان طراحی مکانیزم و مهندسی معکوس ---
    [
        'slug'       => 'hossein-vatandoust',
        'dept'       => 'mechanism',
        'dept_label' => 'طراحی مکانیزم',
        'tag'        => 'FOUNDER // ARCHITECT',
        'featured'   => true,
        'keywords'   => 'حسین وطن دوست حسین وطن‌دوست solidworks سالیدورک سالیدورکس مکانیزم بادامک mba مدیریت طراحی ماشین آلات صنایع غذایی بسته بندی founder',
    ],
    [
        'slug'       => 'alireza-rezvani',
        'dept'       => 'mechanism',
        'dept_label' => 'طراحی مکانیزم',
        'tag'        => 'KINEMATICS // GEARBOX',
        'featured'   => false,
        'keywords'   => 'علیرضا رضوانی گیربکس چرخدنده سینماتیک دینامیک din 3960 zero-backlash انتقال قدرت',
    ],
    [
        'slug'       => 'kamran-rostami',
        'dept'       => 'mechanism',
        'dept_label' => 'مهندسی معکوس',
        'tag'        => 'REVERSE ENG // 3D SCAN',
        'featured'   => false,
        'keywords'   => 'کامران رستمی مهندسی معکوس اسکن سه بعدی ابرنقاط geomagic بومی سازی دقت قطعات',
    ],
    [
        'slug'       => 'nima-sadeghi',
        'dept'       => 'mechanism',
        'dept_label' => 'ماشین‌آلات بسته‌بندی',
        'tag'        => 'PACKAGING // FORMING',
        'featured'   => false,
        'keywords'   => 'نیما صادقی بسته بندی فرم دهی پیوسته فیلینگ پلیمر بهداشتی ehedg ultrasonic اولتراسونیک',
    ],

    // --- 2. آزمایشگاه شبیه‌سازی عددی، تنش و ارتعاشات ---
    [
        'slug'       => 'sara-rad',
        'dept'       => 'simulation',
        'dept_label' => 'شبیه‌سازی سازه و FEA',
        'tag'        => 'FEA SOLVER // STRESS',
        'featured'   => false,
        'keywords'   => 'سارا راد fea ansys انسیس المان محدود تحلیل تنش خستگی شبیه سازی استاتیک دینامیک',
    ],
    [
        'slug'       => 'ehsan-karimi',
        'dept'       => 'simulation',
        'dept_label' => 'سیالات محاسباتی CFD',
        'tag'        => 'CFD & THERMAL // FLUENT',
        'featured'   => false,
        'keywords'   => 'احسان کریمی دکتر cfd fluent فلوئنت سیالات انتقال حرارت خشک کن تونل حرارتی انرژی',
    ],
    [
        'slug'       => 'behnam-farahmand',
        'dept'       => 'simulation',
        'dept_label' => 'عیب‌یابی ارتعاشات',
        'tag'        => 'VIBRATION // ISO 10816',
        'featured'   => false,
        'keywords'   => 'بهنام فرهمند ارتعاشات پایش وضعیت cm بالانس دینامیکی یاتاقان بیرینگ شفت iso 10816 iso 18436',
    ],

    // --- 3. دپارتمان ساخت، DFMA، شیت‌متال و متالورژی ---
    [
        'slug'       => 'morteza-kazemi',
        'dept'       => 'manufacturing',
        'dept_label' => 'مهندسی ساخت و DFMA',
        'tag'        => 'DFMA // 5-AXIS CNC',
        'featured'   => false,
        'keywords'   => 'مرتضی کاظمی ساخت dfma فرزکاری چندمحوره cnc فیکسچر جیگ کارگاه براده برداری تراشکاری',
    ],
    [
        'slug'       => 'maryam-amini',
        'dept'       => 'manufacturing',
        'dept_label' => 'کنترل کیفیت و GD&T',
        'tag'        => 'GD&T // CMM ZEISS',
        'featured'   => false,
        'keywords'   => 'مریم امینی gd&t تلرانس گذاری هندسی cmm zeiss زایس asme y14.5 کنترل کیفیت نقشه خوانی ابعادی',
    ],
    [
        'slug'       => 'davood-hosseini',
        'dept'       => 'manufacturing',
        'dept_label' => 'شیت‌متال و لیزر',
        'tag'        => 'SHEET METAL // LASER',
        'featured'   => false,
        'keywords'   => 'داوود حسینی شیت متال ورق کاری برش لیزر خمکاری cnc نستینگ nesting k-factor استراکچر',
    ],
    [
        'slug'       => 'farhad-najafi',
        'dept'       => 'manufacturing',
        'dept_label' => 'متالورژی و انتخاب مواد',
        'tag'        => 'METALLURGY // TRIBOLOGY',
        'featured'   => false,
        'keywords'   => 'فرهاد نجفی متالورژی علم مواد عملیات حرارتی تریبولوژی سایش شکستdin 17006 فولاد آلیاژی',
    ],

    // --- 4. اتوماسیون صنعتی، مکاترونیک و سیستم‌های قدرت ---
    [
        'slug'       => 'majid-yazdani',
        'dept'       => 'automation',
        'dept_label' => 'اتوماسیون صنعتی PLC',
        'tag'        => 'SIEMENS PLC // MOTION',
        'featured'   => false,
        'keywords'   => 'مجید یزدانی plc اتوماسیون زیمنس siemens tia portal s7-1500 profinet موشن کنترل سروموتور',
    ],
    [
        'slug'       => 'elnaz-pirooz',
        'dept'       => 'automation',
        'dept_label' => 'مکاترونیک و بینایی ماشین',
        'tag'        => 'VISION AI // COGNEX',
        'featured'   => false,
        'keywords'   => 'الناز پیروز پردازش تصویر بینایی ماشین vision ai cognex سنسور سورتینگ اپتیک هوش مصنوعی',
    ],
    [
        'slug'       => 'hamidreza-shams',
        'dept'       => 'automation',
        'dept_label' => 'هیدرولیک و پنوماتیک',
        'tag'        => 'FLUID POWER // REXROTH',
        'featured'   => false,
        'keywords'   => 'حمیدرضا شمس هیدرولیک پنوماتیک پاورپک منیفولد جک rexroth festo پروپشنال شیر هیدرولیک',
    ],

    // --- 5. ایمنی ماشین‌آلات، بودجه‌بندی و مدیریت CAPEX ---
    [
        'slug'       => 'payam-yeganeh',
        'dept'       => 'safety-capex',
        'dept_label' => 'ایمنی و انطباق استاندارد',
        'tag'        => 'SAFETY // ISO 12100 // CE',
        'featured'   => false,
        'keywords'   => 'پیام یگانه ایمنی ماشین آلات iso 12100 ce marking نشان ce ارزیابی ریسک استانداردهای صنعتی',
    ],
    [
        'slug'       => 'keyvan-motamedi',
        'dept'       => 'safety-capex',
        'dept_label' => 'مهندسی هزینه و CAPEX',
        'tag'        => 'CAPEX // RFQ AUDIT',
        'featured'   => false,
        'keywords'   => 'کیوان معتمدی capex rfq تحلیل اقتصادی roi مهندسی هزینه استعلام خرید قرارداد کارشناسی خرید',
    ],
];

// 3. Schema.org Structured Data
$schema_people = [];
foreach ( $roster_config as $cfg ) {
    $profile = function_exists( 'md_get_team_member_profile_data' ) ? md_get_team_member_profile_data( $cfg['slug'] ) : [];
    $schema_people[] = [
        '@type'       => 'Person',
        'name'        => $profile['name'] ?? 'مهندس متخصص',
        'jobTitle'    => $profile['role_badge'] ?? 'متخصص طراحی ماشین دیزاین',
        'description' => $profile['subtitle'] ?? 'عضو دپارتمان مهندسی ماشین دیزاین',
        'image'       => $profile['photo_url'] ?? home_url( '/wp-content/uploads/2026/07/founder-portrait-placeholder.webp' ),
        'url'         => home_url( '/team-member/' . $cfg['slug'] . '/' ),
        'worksFor'    => [
            '@type' => 'Organization',
            'name'  => 'ماشین دیزاین (MachineDesign.ir)',
            'url'   => home_url( '/' ),
        ],
    ];
}
$schema_json = wp_json_encode( [
    '@context'    => 'https://schema.org',
    '@type'       => 'AboutPage',
    'name'        => 'کادر مهندسی و متخصصان ارشد ماشین دیزاین',
    'description' => 'معرفی ۱۶ متخصص ارشد طراحی ماشین‌آلات، شبیه‌سازی عددی، ساخت DFMA و اتوماسیون صنعتی ماشین دیزاین در مشهد.',
    'url'         => home_url( '/about/team/' ),
    'mainEntity'  => [
        '@type'    => 'Organization',
        'name'     => 'ماشین دیزاین (MachineDesign.ir)',
        'url'      => home_url( '/' ),
        'employee' => $schema_people,
    ],
], JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES );
?>

<!-- Structured Schema.org JSON-LD injected centrally via includes/seo-schema-bridge.php (Rank Math compatible) -->

<!-- ========================================================================
     1. TEAM HERO SECTION (HIGH-TECH MATRIX OVERVIEW)
     ======================================================================== -->
<section class="page-hero-banner pillar-hero-wrap team-hub-hero" aria-label="هیدر تیم مهندسی ماشین دیزاین">
  <div class="container">
    <div class="pillar-hero-grid team-hero-split">

      <!-- Right Column: Text & Organizational Identity -->
      <div class="pillar-hero-content">
        <!-- Breadcrumb Navigation -->
        <nav class="page-hero-breadcrumb" aria-label="مسیر راهنما">
          <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="breadcrumb-item">صفحه اصلی</a>
          <span class="breadcrumb-separator" aria-hidden="true">/</span>
          <a href="<?php echo esc_url( home_url( '/about/' ) ); ?>" class="breadcrumb-item">درباره ما</a>
          <span class="breadcrumb-separator" aria-hidden="true">/</span>
          <span class="breadcrumb-current" aria-current="page">تیم مهندسی ما</span>
        </nav>

        <!-- Corporate Sub-badge -->
        <div class="page-hero-badge">
          <span class="pulse-indicator" aria-hidden="true"></span>
          <span class="mono">ENGINEERING ALLIANCE // 16 SENIOR SPECIALISTS // MASHHAD</span>
        </div>

        <!-- Main Page Title -->
        <h1 class="page-hero-title pillar-hero-title-split">
          <span class="title-line-1">کادر مهندسی ماشین دیزاین</span>
          <span class="title-line-2 text-accent">ائتلاف ۱۶ متخصص ارشد طراحی، شبیه‌سازی و ساخت</span>
        </h1>

        <!-- Summary Lead Text -->
        <div class="page-hero-excerpt">
          ماشین دیزاین حاصل هم‌افزایی ۱۶ متخصص ارشد در ۵ دپارتمان مهندسی است؛ از محاسبات سینماتیک و آنالیز المان محدود (FEA) تا برنامه‌نویسی اتوماسیون زیمنس و ممیزی ISO 12100، هر پروژه بر مبنای متدولوژی DFMA به بهره‌برداری پایدار می‌رسد.
        </div>

        <!-- Trust Metrics Row -->
        <div class="team-hero-metrics-strip" aria-label="شاخص‌های آماری تیم">
          <div class="team-metric-chip">
            <span class="metric-num mono">۱۶</span>
            <span class="metric-lbl">متخصص ارشد مهندسی</span>
          </div>
          <div class="team-metric-chip">
            <span class="metric-num mono">۵</span>
            <span class="metric-lbl">دپارتمان تخصصی هم‌افزا</span>
          </div>
          <div class="team-metric-chip">
            <span class="metric-num mono">+۱۵۰</span>
            <span class="metric-lbl">پروژه صنعتی اجرا شده</span>
          </div>
          <div class="team-metric-chip">
            <span class="metric-num mono">۱۰۰٪</span>
            <span class="metric-lbl">تعهد حقوقی قرارداد NDA</span>
          </div>
        </div>

        <!-- Hero Actions -->
        <div class="pillar-hero-actions">
          <a href="#team-matrix" class="btn btn-primary" id="btnExploreRoster">
            <span>مشاهده اعضای تیم و سوابق ↓</span>
            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" aria-hidden="true">
              <path d="M12 5v14M19 12l-7 7-7-7"/>
            </svg>
          </a>
          <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="btn btn-outline" id="btnRequestConsult">
            <span>مشاوره فنی با سرپرستان دپارتمان</span>
          </a>
        </div>
      </div>

      <!-- Left Column: Official Hannover Messe Delegation Photo with Interactive 3D Parallax -->
      <div class="pillar-hero-visual-col">
        <div class="team-delegation-frame" id="delegationFrame" data-parallax="true">
          <div class="cad-corner-crosshair top-right" aria-hidden="true"></div>
          <div class="cad-corner-crosshair top-left" aria-hidden="true"></div>
          <div class="cad-corner-crosshair bottom-right" aria-hidden="true"></div>
          <div class="cad-corner-crosshair bottom-left" aria-hidden="true"></div>

          <div class="delegation-top-hud mono" aria-hidden="true">
            <span class="hud-item-tag">OFFICIAL DELEGATION</span>
            <span class="hud-item-live"><span class="hud-status-led"></span>HANNOVER MESSE // GERMANY</span>
          </div>

          <figure class="delegation-photo-wrap">
            <img src="<?php echo esc_url( home_url( '/wp-content/uploads/2026/07/machinedesign-engineering-crew-hannover.webp' ) ); ?>"
                 alt="کادر مهندسی و مدیران ارشد ماشین دیزاین در نمایشگاه بین‌المللی ماشین‌آلات هانوفر آلمان"
                 class="delegation-photo-img"
                 loading="eager"
                 width="576"
                 height="1024">
          </figure>

          <div class="delegation-bottom-badge">
            <div class="hud-status-led" aria-hidden="true"></div>
            <div class="badge-text-group">
              <span class="badge-label mono">OFFICIAL INDUSTRIAL DELEGATION</span>
              <span class="badge-title">پاویون بین‌المللی ماشین‌آلات و اتوماسیون // هانوفر آلمان</span>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>

<!-- ========================================================================
     2. INTERACTIVE DEPARTMENT FILTER BAR & SEARCH ENGINE (ONE LIVE THING)
     ======================================================================== -->
<section class="team-filter-section" id="team-matrix" aria-label="فیلتر و جستجوی دپارتمان‌های مهندسی">
  <div class="container">
    <div class="team-section-header">
      <h2 class="team-section-title">اعضای کادر مهندسی ماشین دیزاین</h2>
      <p class="team-section-subtitle">
        برای جستجو و فیلتر کردن اعضا، دپارتمان مورد نظر را انتخاب نموده یا نام مهندس، نرم‌افزار و تخصص فنی را جستجو کنید. با کلیک بر روی کارت هر مهندس، وارد پورتفولیوی اختصاصی او خواهید شد.
      </p>
    </div>

    <!-- Live Department Filter Tabs -->
    <div class="team-tabs-wrapper" role="tablist" aria-label="دپارتمان‌های مهندسی">
      <?php foreach ( $departments as $key => $dept ) : ?>
        <button type="button"
                class="team-tab-btn <?php echo 'all' === $key ? 'is-active' : ''; ?>"
                data-filter="<?php echo esc_attr( $key ); ?>"
                role="tab"
                aria-selected="<?php echo 'all' === $key ? 'true' : 'false'; ?>">
          <span class="tab-dot" aria-hidden="true"></span>
          <span class="tab-title"><?php echo esc_html( $dept['title'] ); ?></span>
          <span class="tab-count mono"><?php echo esc_html( $dept['count'] ); ?></span>
        </button>
      <?php endforeach; ?>
    </div>

    <!-- Instant Search & Live Counter Row -->
    <div class="team-filter-controls-row">
      <div class="team-search-bar" role="search" aria-label="جستجوی سریع متخصصان">
        <span class="search-icon" aria-hidden="true">
          <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2">
            <circle cx="11" cy="11" r="8"/>
            <path d="m21 21-4.35-4.35"/>
          </svg>
        </span>
        <input type="search"
               id="teamSearchInput"
               class="team-search-input"
               placeholder="جستجوی نام، نرم‌افزار یا استاندارد تخصصی (مثال: SolidWorks، Ansys، مریم، PLC)..."
               autocomplete="off"
               aria-label="جستجوی مهندس یا مهارت">
        <button type="button" id="teamSearchClear" class="team-search-clear" aria-label="پاک کردن جستجو"><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" aria-hidden="true"><path d="M18 6 6 18M6 6l12 12"/></svg></button>
      </div>

      <div class="team-results-count mono" id="teamResultsCount" aria-live="polite">
        <span class="count-led" aria-hidden="true"></span>
        <span class="count-text">نمایش ۱۶ متخصص فعال</span>
      </div>
    </div>

    <!-- Empty State (Shown when search/filter has zero matches) -->
    <div class="team-empty-state" id="teamEmptyState" style="display: none;">
      <div class="empty-state-icon" aria-hidden="true">
        <svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="rgba(217, 119, 6, 0.6)" stroke-width="1.8">
          <circle cx="12" cy="12" r="10"/>
          <line x1="4.93" y1="4.93" x2="19.07" y2="19.07"/>
        </svg>
      </div>
      <h3 class="empty-state-title">هیچ متخصصی با این مشخصات یافت نشد</h3>
      <p class="empty-state-desc">لطفاً واژه جستجو را کوتاه کنید، املای کلمه را بررسی فرمایید یا دپارتمان فیلتر را روی حالت «همه متخصصان» قرار دهید.</p>
      <button type="button" class="btn btn-outline btn-reset-filters" id="btnResetFilters">
        <span>نمایش مجدد همه ۱۶ عضو کادر مهندسی</span>
      </button>
    </div>

    <!-- ====================================================================
         3. 16-MEMBER ENGINEERING ROSTER GRID
         ==================================================================== -->
    <div class="team-roster-bento-grid" id="teamCardsGrid">
      <?php
      foreach ( $roster_config as $cfg ) :
          $slug = $cfg['slug'];
          $profile_data = function_exists( 'md_get_team_member_profile_data' )
              ? md_get_team_member_profile_data( $slug )
              : [];

          $member_name    = $profile_data['name'] ?? 'مهندس متخصص';
          $member_name    = preg_replace( '/وطن[\s\x{200c}]+دوست/u', 'وطن' . "\xE2\x80\x8C" . 'دوست', $member_name );
          $photo_url      = $profile_data['photo_url'] ?? home_url( '/wp-content/uploads/2026/07/team-avatar-placeholder.svg' );
          $role_badge     = $profile_data['role_badge'] ?? 'متخصص طراحی و ساخت مهندسی';
          $subtitle       = $profile_data['subtitle'] ?? 'کارشناس ارشد مهندسی مکانیک';
          $exp_years      = $profile_data['experience_years'] ?? '+۱۵';
          $metrics        = $profile_data['metrics'] ?? [];
          $top_standard   = $metrics[1]['val'] ?? 'ISO / DIN';
          $second_metric  = $metrics[2]['val'] ?? 'DFMA';
          $single_url     = home_url( '/team-member/' . $slug . '/' );
          $is_founder     = ! empty( $cfg['featured'] );
          $search_corpus  = strtolower( $member_name . ' ' . $cfg['keywords'] . ' ' . $role_badge . ' ' . $subtitle . ' ' . $top_standard . ' ' . $second_metric . ' ' . $cfg['tag'] );
      ?>
        <article class="roster-card bento-card <?php echo $is_founder ? 'is-founder-card' : ''; ?>"
                 data-dept="<?php echo esc_attr( $cfg['dept'] ); ?>"
                 data-slug="<?php echo esc_attr( $slug ); ?>"
                 data-keywords="<?php echo esc_attr( $search_corpus ); ?>">
          
          <!-- Card Portrait Frame -->
          <a href="<?php echo esc_url( $single_url ); ?>" class="roster-photo-link" aria-label="<?php echo esc_attr( $member_name ); ?> - مشاهده پورتفولیو">
            <div class="roster-photo-frame">
              <img src="<?php echo esc_url( $photo_url ); ?>"
                   alt="<?php echo esc_attr( $member_name ); ?> - <?php echo esc_attr( $subtitle ); ?>"
                   class="roster-photo-img"
                   loading="lazy"
                   width="400"
                   height="500">
              
              <!-- Top HUD Chip on Image -->
              <div class="roster-photo-top-chip mono">
                <span class="chip-status-led" aria-hidden="true"></span>
                <span><?php echo esc_html( $cfg['tag'] ); ?></span>
              </div>

              <!-- Experience Pill at Bottom of Photo -->
              <div class="roster-exp-pill mono">
                <span class="exp-val"><?php echo esc_html( $exp_years ); ?> سال</span>
                <span class="exp-sub">سابقه صنعتی</span>
              </div>
            </div>
          </a>

          <!-- Card Content Body -->
          <div class="roster-card-body">
            
            <!-- Department Tag -->
            <div class="roster-dept-row">
              <span class="roster-dept-tag mono"><?php echo esc_html( $cfg['dept_label'] ); ?></span>
              <?php if ( $is_founder ) : ?>
                <span class="founder-badge-mini mono">FOUNDER</span>
              <?php endif; ?>
            </div>

            <!-- Member Name -->
            <h3 class="roster-member-name">
              <a href="<?php echo esc_url( $single_url ); ?>">
                <?php echo esc_html( $member_name ); ?>
              </a>
            </h3>

            <!-- Role Badge -->
            <div class="roster-role-badge">
              <span><?php echo esc_html( $role_badge ); ?></span>
            </div>

            <!-- Specialty Subtitle -->
            <p class="roster-member-subtitle">
              <?php echo esc_html( $subtitle ); ?>
            </p>

            <!-- Technical Trust Indicators -->
            <div class="roster-specs-row mono">
              <span class="spec-pill" title="استاندارد مرجع تخصصی">
                <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" aria-hidden="true"><polyline points="20 6 9 17 4 12"/></svg>
                <?php echo esc_html( $top_standard ); ?>
              </span>
              <span class="spec-pill" title="شاخص عملکردی">
                <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" aria-hidden="true"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>
                <?php echo esc_html( $second_metric ); ?>
              </span>
            </div>

            <!-- Card Bottom Action Link -->
            <div class="roster-card-footer">
              <a href="<?php echo esc_url( $single_url ); ?>" class="btn-roster-profile">
                <span>مشاهده پورتفولیو و سوابق</span>
                <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" aria-hidden="true">
                  <path d="M5 12h14M12 5l7 7-7 7"/>
                </svg>
              </a>
            </div>

          </div>

        </article>
      <?php endforeach; ?>
    </div>

  </div>
</section>

<!-- ========================================================================
     4. CROSS-DISCIPLINARY COLLABORATION WORKFLOW (هم‌افزایی ۵ گانه)
     ======================================================================== -->
<section class="team-workflow-section" aria-label="فرآیند هم‌افزایی چندرشته‌ای در ماشین دیزاین">
  <div class="container">
    <div class="team-section-header">
      <h2 class="team-section-title">چگونه ۱۶ متخصص روی پروژه شما هم‌افزایی می‌کنند؟</h2>
      <p class="team-section-subtitle">
        هیچ قطعه‌ای بدون بازبینی متالورژی ساخته نمی‌شود و هیچ مکانیزمی بدون شبیه‌سازی FEA برش نمی‌خورد. مسیر تولد ماشین در ۵ ایستگاه به هم پیوسته:
      </p>
    </div>

    <div class="team-workflow-grid">
      
      <div class="workflow-step-card">
        <span class="step-num mono">۰۱</span>
        <h4 class="step-title">تحلیل امکان‌سنجی و CAPEX</h4>
        <p class="step-desc">ارزیابی مالی ROI، تدوین دقیق استعلام‌های خرید (RFQ) و تصمیم‌گیری ساخت یا خرید (Make or Buy).</p>
      </div>

      <div class="workflow-step-card">
        <span class="step-num mono">۰۲</span>
        <h4 class="step-title">طراحی کانسپت و سنتز مکانیزم</h4>
        <p class="step-desc">محاسبات سینماتیک، طراحی پروفیل بادامک‌ها، گیربکس‌ها و مدل‌سازی سه‌بعدی سالیدورکس با متدولوژی DFMA.</p>
      </div>

      <div class="workflow-step-card">
        <span class="step-num mono">۰۳</span>
        <h4 class="step-title">اعتبارسنجی تحلیلی FEA و CFD</h4>
        <p class="step-desc">شبیه‌سازی تنش استاتیکی و خستگی، آنالیز ارتعاشات هارمونیک و تحلیل جریان حرارتی و سیالات در Ansys.</p>
      </div>

      <div class="workflow-step-card">
        <span class="step-num mono">۰۴</span>
        <h4 class="step-title">تلرانس‌گذاری GD&amp;T و ساخت CNC</h4>
        <p class="step-desc">نقشه‌های اجرایی منطبق بر ASME Y14.5، انتخاب آلیاژ و عملیات حرارتی، و ماشین‌کاری چندمحوره بدون خطای دوباره‌کاری.</p>
      </div>

      <div class="workflow-step-card">
        <span class="step-num mono">۰۵</span>
        <h4 class="step-title">اتوماسیون، ایمنی CE و آزمون SAT</h4>
        <p class="step-desc">برنامه‌نویسی PLC زیمنس، کنترل سرووها، ممیزی ریسک بر اساس ISO 12100 و تحویل بدون وقفه در خط کارخانه.</p>
      </div>

    </div>
  </div>
</section>

<!-- ========================================================================
     5. DIRECT CONSULTATION CTA (GROUNDED IN SAMAN TOWER, MASHHAD)
     ======================================================================== -->
<section class="team-cta-section" aria-label="شروع پروژه و ارتباط با تیم مهندسی">
  <div class="container">
    <div class="team-cta-box">
      
      <div class="cta-badge mono">READY TO COLLABORATE // ZERO REWORK</div>
      <h3 class="cta-title">پروژه صنعتی یا ایده ماشین‌آلات خود را با تیم ما در میان بگذارید</h3>
      <p class="cta-subtitle">
        از یک قطعه پیچیده نیازمند مهندسی معکوس تا خطوط کامل فرآوری و بسته‌بندی پیوسته؛ پیش از شروع براده‌برداری، قرارداد رسمی عدم افشا (NDA) منعقد می‌گردد.
      </p>
      <div class="cta-actions">
        <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="btn btn-primary btn-cta-main">
          <span>ثبت استعلام فنی و ارسال نقشه (RFQ) ←</span>
        </a>
        <?php
          /* TODO: REAL_CONTACT */
          $team_cta_phone = function_exists( 'md_get_contact' ) ? md_get_contact( 'phone_mobile', '۰۹۳۵۸۶۸۹۸۲۹' ) : '۰۹۳۵۸۶۸۹۸۲۹';
          $team_cta_tel   = function_exists( 'md_tel_uri' ) ? md_tel_uri( $team_cta_phone ) : '09358689829';
        ?>
        <a href="tel:<?php echo esc_attr( $team_cta_tel ); ?>" class="btn btn-outline btn-cta-phone mono" dir="ltr">
          <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" aria-hidden="true">
            <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/>
          </svg>
          <span><?php echo esc_html( $team_cta_phone ); ?></span>
        </a>
      </div>
    </div>
  </div>
</section>

<!-- ========================================================================
     6. EMBEDDED JAVASCRIPT (INSTANT SEARCH, CLIENT FILTERING & 3D PARALLAX)
     ======================================================================== -->
<script>
(function() {
  'use strict';
  
  var tabButtons = document.querySelectorAll('.team-tab-btn');
  var cards = document.querySelectorAll('#teamCardsGrid .roster-card');
  var searchInput = document.getElementById('teamSearchInput');
  var searchClearBtn = document.getElementById('teamSearchClear');
  var countEl = document.getElementById('teamResultsCount');
  var countTextEl = countEl ? countEl.querySelector('.count-text') : null;
  var emptyState = document.getElementById('teamEmptyState');
  var resetBtn = document.getElementById('btnResetFilters');
  var currentFilter = 'all';

  if (!cards.length) return;

  function toPersianDigits(n) {
    var id = ['۰','۱','۲','۳','۴','۵','۶','۷','۸','۹'];
    return String(n).replace(/[0-9]/g, function(w) { return id[+w]; });
  }

  function applyFilters() {
    var query = searchInput ? searchInput.value.trim().toLowerCase() : '';
    var matchCount = 0;

    if (searchClearBtn) {
      searchClearBtn.style.display = query ? 'block' : 'none';
    }

    cards.forEach(function(card) {
      var cardDept = card.getAttribute('data-dept');
      var cardKeywords = card.getAttribute('data-keywords') || '';
      var matchesDept = (currentFilter === 'all' || cardDept === currentFilter);
      var matchesQuery = (!query || cardKeywords.indexOf(query) !== -1);

      if (matchesDept && matchesQuery) {
        card.style.display = '';
        matchCount++;
        setTimeout(function() {
          card.style.opacity = '1';
          card.style.transform = 'translateY(0)';
        }, 10);
      } else {
        card.style.opacity = '0';
        card.style.transform = 'translateY(12px)';
        setTimeout(function() {
          card.style.display = 'none';
        }, 200);
      }
    });

    // Update Counter Text
    if (countTextEl) {
      if (matchCount === 16 && !query && currentFilter === 'all') {
        countTextEl.textContent = 'نمایش ۱۶ متخصص فعال';
      } else {
        countTextEl.textContent = 'نمایش ' + toPersianDigits(matchCount) + ' متخصص یافت‌شده';
      }
    }

    // Toggle Empty State
    if (emptyState) {
      emptyState.style.display = (matchCount === 0) ? 'block' : 'none';
    }
  }

  // Department Tab Click
  if (tabButtons.length) {
    tabButtons.forEach(function(btn) {
      btn.addEventListener('click', function() {
        currentFilter = this.getAttribute('data-filter');
        tabButtons.forEach(function(b) {
          b.classList.remove('is-active');
          b.setAttribute('aria-selected', 'false');
        });
        this.classList.add('is-active');
        this.setAttribute('aria-selected', 'true');
        applyFilters();
      });
    });
  }

  // Instant Live Search
  if (searchInput) {
    searchInput.addEventListener('input', function() {
      applyFilters();
    });
  }

  if (searchClearBtn) {
    searchClearBtn.addEventListener('click', function() {
      if (searchInput) {
        searchInput.value = '';
        searchInput.focus();
      }
      applyFilters();
    });
  }

  if (resetBtn) {
    resetBtn.addEventListener('click', function() {
      currentFilter = 'all';
      if (searchInput) searchInput.value = '';
      tabButtons.forEach(function(b) {
        if (b.getAttribute('data-filter') === 'all') {
          b.classList.add('is-active');
          b.setAttribute('aria-selected', 'true');
        } else {
          b.classList.remove('is-active');
          b.setAttribute('aria-selected', 'false');
        }
      });
      applyFilters();
    });
  }

  // 3D Mouse Parallax on Delegation Photo Frame
  var frame = document.getElementById('delegationFrame');
  if (frame && window.matchMedia('(hover: hover) and (min-width: 992px)').matches) {
    frame.addEventListener('mousemove', function(e) {
      var rect = frame.getBoundingClientRect();
      var x = e.clientX - rect.left - (rect.width / 2);
      var y = e.clientY - rect.top - (rect.height / 2);
      var tiltX = (y / (rect.height / 2)) * -6;
      var tiltY = (x / (rect.width / 2)) * 6;

      frame.style.transform = 'perspective(1000px) rotateX(' + tiltX.toFixed(2) + 'deg) rotateY(' + tiltY.toFixed(2) + 'deg) scale3d(1.02, 1.02, 1.02)';
    });

    frame.addEventListener('mouseleave', function() {
      frame.style.transform = 'perspective(1000px) rotateX(0deg) rotateY(0deg) scale3d(1, 1, 1)';
    });
  }

})();
</script>

<?php md_render_optional_gutenberg_slot();
get_footer(); ?>
