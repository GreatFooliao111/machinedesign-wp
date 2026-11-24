<?php
/**
 * Custom Post Type: Team Members (اعضای تیم)
 * 
 * Provides dynamic team member management via the WordPress Admin panel,
 * including executive telemetry, trust metrics, skills matrix, three pillars,
 * project slider showcase, and dynamic annual experience calculation.
 *
 * @package HelloElementor
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

/**
 * 1. Register Custom Post Type: team_member
 */
function md_register_team_member_cpt() {
    $labels = [
        'name'                  => 'اعضای تیم',
        'singular_name'         => 'عضو تیم',
        'menu_name'             => 'اعضای تیم',
        'name_admin_bar'        => 'عضو تیم',
        'add_new'               => 'افزودن عضو جدید',
        'add_new_item'          => 'افزودن عضو جدید به تیم مهندسی',
        'new_item'              => 'عضو جدید تیم',
        'edit_item'             => 'ویرایش مشخصات و پورتفولیوی عضو تیم',
        'view_item'             => 'مشاهده پورتفولیوی عضو تیم',
        'all_items'             => 'همه اعضای تیم',
        'search_items'          => 'جستجوی اعضای تیم',
        'parent_item_colon'     => 'عضو والد:',
        'not_found'             => 'هیچ عضو تیمی یافت نشد.',
        'not_found_in_trash'    => 'در زباله‌دان عضو تیمی یافت نشد.',
        'featured_image'        => 'تصویر پرتره رسمی / آواتار استودیو',
        'set_featured_image'    => 'انتخاب تصویر پرتره رسمی',
        'remove_featured_image' => 'حذف تصویر پرتره',
        'use_featured_image'    => 'استفاده به عنوان پرتره رسمی',
    ];

    $args = [
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => [ 'slug' => 'team-member', 'with_front' => false ],
        'capability_type'    => 'post',
        'has_archive'        => false,
        'hierarchical'       => false,
        'menu_position'      => 22,
        'menu_icon'          => 'dashicons-groups',
        'supports'           => [ 'title', 'thumbnail' ], // Removed raw editor to eliminate empty block canvas
        'show_in_rest'       => false, // Native classic layout for reliable Bento Control Console
    ];

    register_post_type( 'team_member', $args );
}
add_action( 'init', 'md_register_team_member_cpt' );

/**
 * 2. Helper: Convert digits to Persian glyphs
 */
function md_persian_num( $str ) {
    $western = [ '0', '1', '2', '3', '4', '5', '6', '7', '8', '9' ];
    $persian = [ '۰', '۱', '۲', '۳', '۴', '۵', '۶', '۷', '۸', '۹' ];
    return str_replace( $western, $persian, (string) $str );
}

/**
 * 3. Helper: Calculate dynamic years of experience from start year
 */
function md_calc_experience_years( $start_year = 2011 ) {
    $current_year = (int) current_time( 'Y' );
    $start = (int) $start_year;
    if ( $start <= 1970 || $start > $current_year ) {
        $start = 2011;
    }
    $years = max( 1, $current_year - $start );
    return md_persian_num( $years ) . '+';
}

/**
 * 4. Register Custom Meta Boxes for team_member and Founder Page
 */
function md_add_team_member_meta_boxes( $post_type = '', $post = null ) {
    // 1. Always for team_member CPT
    add_meta_box(
        'md_team_member_details',
        '⚙️ کنسول مدیریت مشخصات مهندسی و پورتفولیو (Bento Portfolio Controls)',
        'md_render_team_member_meta_box',
        'team_member',
        'normal',
        'high'
    );

    // 2. Also register for Founder Profile Page under "برگه‌ها" (Pages)
    if ( 'page' === $post_type && $post ) {
        $template = get_post_meta( $post->ID, '_wp_page_template', true );
        if ( 'page-profile-hossein.php' === $template || 159 === (int) $post->ID || 'hossein-vatandoust' === $post->post_name ) {
            add_meta_box(
                'md_team_member_details',
                '⚙️ کنسول مدیریت مشخصات مهندسی و پورتفولیو (Bento Portfolio Controls)',
                'md_render_team_member_meta_box',
                'page',
                'normal',
                'high'
            );
        }
    }
}
add_action( 'add_meta_boxes', 'md_add_team_member_meta_boxes', 10, 2 );

function md_enqueue_team_media_uploader( $hook ) {
    if ( 'post.php' !== $hook && 'post-new.php' !== $hook ) {
        return;
    }
    $screen = get_current_screen();
    if ( $screen && ( 'team_member' === $screen->post_type || 'page' === $screen->post_type ) ) {
        wp_enqueue_media();
    }
}
add_action( 'admin_enqueue_scripts', 'md_enqueue_team_media_uploader' );


/**
 * 5. Render Meta Box Fields in WP Admin (Tabbed Bento Hub)
 */
function md_render_team_member_meta_box( $post ) {
    wp_nonce_field( 'md_save_team_member_meta', 'md_team_member_nonce' );

    $is_founder = ( $post && ( $post->post_name === 'hossein-vatandoust' || (int) $post->ID === 159 || (int) $post->ID === 160 ) );

    // If editing page 159, fallback to post 160 meta if empty, and vice versa
    $counterpart_id = 0;
    if ( $post && 'page' === $post->post_type ) {
        $cp = get_page_by_path( 'hossein-vatandoust', OBJECT, 'team_member' );
        if ( $cp ) $counterpart_id = $cp->ID;
    } elseif ( $post && 'team_member' === $post->post_type ) {
        $cp = get_page_by_path( 'hossein-vatandoust', OBJECT, 'page' );
        if ( $cp ) $counterpart_id = $cp->ID;
    }

    $get_meta = function( $key, $fallback = '' ) use ( $post, $counterpart_id ) {
        $val = get_post_meta( $post->ID, $key, true );
        if ( ( $val === '' || $val === false ) && $counterpart_id ) {
            $val = get_post_meta( $counterpart_id, $key, true );
        }
        return ( $val !== '' && $val !== false ) ? $val : $fallback;
    };

    // Retrieve saved meta with contextual defaults
    if ( $is_founder ) {
        $role_badge    = $get_meta( '_md_member_role_badge', 'بنیان‌گذار و طراح ارشد مکانیزم‌ها // دانش‌آموخته MBA' );
        $subtitle      = $get_meta( '_md_member_subtitle', 'طراح ارشد ماشین‌آلات صنعتی، معمار اکوسیستم فنی و بنیان‌گذار ماشین دیزاین' );
        $org_hierarchy = $get_meta( '_md_member_org_hierarchy', 'ماشین دیزاین / هیئت موسس / مدیرعامل / سرپرست دپارتمان طراحی ماشین‌آلات و مهندسی معکوس' );
        $status_badge  = $get_meta( '_md_member_status_badge', 'FOUNDER // CHIEF MECHANICAL ARCHITECT // MASHHAD' );
        $photo_badge   = $get_meta( '_md_member_photo_badge', 'ACTIVE // STUDIO & WORKSHOP' );
    } else {
        $role_badge    = $get_meta( '_md_member_role_badge', 'مهندس مکانیک و طراح مکانیزم‌های صنعتی' );
        $subtitle      = $get_meta( '_md_member_subtitle', ( $post->post_excerpt ?: 'کارشناس ارشد طراحی، شبیه‌سازی و مهندسی معکوس تجهیزات صنعتی' ) );
        $org_hierarchy = $get_meta( '_md_member_org_hierarchy', 'ماشین دیزاین / دپارتمان فنی و مهندسی / متخصص ارشد طراحی مکانیزم' );
        $status_badge  = $get_meta( '_md_member_status_badge', 'ENGINEERING TEAM // SPECIALIST // MASHHAD' );
        $photo_badge   = $get_meta( '_md_member_photo_badge', 'ACTIVE // STUDIO & WORKSHOP' );
    }

    $manifesto_p1    = $get_meta( '_md_member_manifesto_p1' );
    $manifesto_p2    = $get_meta( '_md_member_manifesto_p2' );
    $manifesto_p3    = $get_meta( '_md_member_manifesto_p3' );

    // If manifesto is empty, check post_content
    if ( empty( $manifesto_p1 ) && ! empty( trim( $post->post_content ) ) ) {
        $content_paras = array_values( array_filter( array_map( 'trim', explode( "

", strip_tags( $post->post_content ) ) ) ) );
        if ( ! empty( $content_paras[0] ) ) $manifesto_p1 = $content_paras[0];
        if ( ! empty( $content_paras[1] ) ) $manifesto_p2 = $content_paras[1];
        if ( ! empty( $content_paras[2] ) ) $manifesto_p3 = $content_paras[2];
    }

    // 4 Trust Metrics
    $start_year      = $get_meta( '_md_metric_start_year', $is_founder ? '2011' : '2018' );
    $metric1_val     = $get_meta( '_md_metric1_val' );
    $metric1_label   = $get_meta( '_md_metric1_label', $is_founder ? 'سال تسلط میدانی بر طراحی ماشین‌آلات و سرپرستی کارگاهی' : 'سال سابقه طراحی مهندسی و نظارت بر ساخت تجهیزات' );
    $pillars_heading = $get_meta( '_md_pillars_heading', 'ارکان چهارگانه رهبری فنی' );

    $metric2_val     = $get_meta( '_md_metric2_val', 'Grade A' );
    $metric2_label   = $get_meta( '_md_metric2_label', 'ارزیابی و انطباق DFMA (طراحی برای ساخت و مونتاژ اقتصادی)' );

    $metric3_val     = $get_meta( '_md_metric3_val', $is_founder ? 'Tech + MBA' : 'DIN / ISO' );
    $metric3_label   = $get_meta( '_md_metric3_label', $is_founder ? 'همگرایی طراحی مکانیک با مدیریت CAPEX و کاهش ریسک ساخت' : 'تدوین نقشه‌های اجرایی، استاندارد GD&T و تلرانس‌گذاری دقیق' );

    $metric4_val     = $get_meta( '_md_metric4_val', $is_founder ? 'DIN / ISO' : 'FEA Validated' );
    $metric4_label   = $get_meta( '_md_metric4_label', $is_founder ? 'تدوین نقشه‌های اجرایی، استاندارد GD&T و تلرانس‌گذاری دقیق' : 'اعتبارسنجی تحلیلی سازه‌ها و اجزای مکانیکی بحرانی' );

    // Social Links
    $linkedin        = $get_meta( '_md_member_linkedin', $is_founder ? 'https://linkedin.com/in/hosseinvatandoust' : '' );
    $instagram       = $get_meta( '_md_member_instagram', $is_founder ? 'https://instagram.com/h.vatan.doust' : '' );
    $grabcad         = $get_meta( '_md_member_grabcad', $is_founder ? 'https://grabcad.com/hossein.vatandoust-1/models' : '' );
    $email           = $get_meta( '_md_member_email', $is_founder ? 'hosseinvatandoust@machinedesign.ir' : '' );
    $phone           = $get_meta( '_md_member_phone', $is_founder ? '09358689829' : '' );

    // Four Pillars
    $pillar1_title   = $get_meta( '_md_pillar1_title', 'طراحی مقید به ساخت و مونتاژ (DFMA)' );
    $pillar1_desc    = $get_meta( '_md_pillar1_desc', 'طراحی قطعات و مجموعه‌ها با درک مستقیم فرآیندهای تراشکاری، فرزکاری CNC، برش لیزر و مونتاژ، جهت حذف خطاهای کارگاهی پیش از ساخت.' );

    $pillar2_title   = $get_meta( '_md_pillar2_title', $is_founder ? 'مدیریت سرمایه و ریسک ساخت (MBA)' : 'شبیه‌سازی دینامیکی و تحلیل مکانیزم‌ها' );
    $pillar2_desc    = $get_meta( '_md_pillar2_desc', $is_founder ? 'تحلیل اقتصادی بازگشت سرمایه (ROI)، تخمین دقیق بودجه ساخت (CAPEX/OPEX) و تصمیم‌گیری ساخت یا خرید (Make or Buy) بر مبنای داده‌های مالی.' : 'تحلیل دقیق سینماتیکی و دینامیکی قطعات و بهینه‌سازی مسیرهای حرکتی در شرایط کاری سخت.' );

    $pillar3_title   = $get_meta( '_md_pillar3_title', 'شبیه‌سازی تنش و ارتعاشات مکانیزم' );
    $pillar3_desc    = $get_meta( '_md_pillar3_desc', 'اعتبارسنجی مقاومت سازه و اجزای مکانیکی بحرانی با نرم‌افزارهای تحلیلی، پیش‌بینی خستگی قطعات و تعیین دقیق ابعاد یاتاقان‌ها و شفت‌ها.' );

    $pillar4_title   = $get_meta( '_md_pillar4_title', 'تدوین نقشه‌های ساخت، GD&T و تلرانس‌گذاری دقیق' );
    $pillar4_desc    = $get_meta( '_md_pillar4_desc', 'تهیه نقشه‌های دوبعدی دقیق ساخت، انطباقات تلرانسی H7/g6 بر مبنای ASME Y14.5 / DIN ISO 2768 و تعیین دقیق صافی سطح (Ra) جهت حذف ابهام در ماشین‌کاری CNC.' );

    $guarantee_title = $get_meta( '_md_guarantee_title', 'تضمین ساخت‌پذیری قطعات و انطباق استاندارد' );
    $guarantee_desc  = $get_meta( '_md_guarantee_desc', 'تعهد طراحی بدون خطا بر پایه استانداردهای ایمنی ISO 12100 و فرآیندهای براده‌برداری کارگاهی' );

    // Skills Matrix
    $skill1_name     = $get_meta( '_md_skill1_name', 'طراحی صنعتی پیشرفته سالیدورکس و متدولوژی DFMA' );
    $skill1_pct      = $get_meta( '_md_skill1_pct', '95' );

    $skill2_name     = $get_meta( '_md_skill2_name', $is_founder ? 'مدیریت ریسک سرمایه و بودجه‌بندی خطوط تولید (MBA)' : 'طراحی مکانیزم‌های بادامکی و هیدرولیک' );
    $skill2_pct      = $get_meta( '_md_skill2_pct', '92' );

    $skill3_name     = $get_meta( '_md_skill3_name', 'شبیه‌سازی تنش، خستگی و اجزای محدود با Ansys' );
    $skill3_pct      = $get_meta( '_md_skill3_pct', '88' );

    $skill4_name     = $get_meta( '_md_skill4_name', 'استانداردهای شیت‌متال، تلرانس GD&T و برش لیزر' );
    $skill4_pct      = $get_meta( '_md_skill4_pct', '96' );

    $skill5_name     = $get_meta( '_md_skill5_name', 'اتوماسیون، پایش وضعیت و سنسورینگ ماشین‌آلات' );
    $skill5_pct      = $get_meta( '_md_skill5_pct', '82' );

    // 4 Project Slides
    $p1_title        = $get_meta( '_md_p1_title', 'خط رول‌کن دوار بدون مغزی (Coreless Turret Rewinder)' );
    $p1_cat          = $get_meta( '_md_p1_cat', 'صنایع پلیمری، فیلم نایلون و بسته‌بندی پیوسته' );
    $p1_img          = $get_meta( '_md_p1_img', home_url( '/wp-content/uploads/2026/07/founder-project-rewinder.webp' ) );

    $p2_title        = $get_meta( '_md_p2_title', 'میز بالابر قیچی هیدرولیکی صنعتی (Scissor Lift Table)' );
    $p2_cat          = $get_meta( '_md_p2_cat', 'مکانیزم‌های هیدرولیک، ایستگاه‌های کارگاهی و انبارداری' );
    $p2_img          = $get_meta( '_md_p2_img', home_url( '/wp-content/uploads/2026/07/founder-project-scissor-lift.webp' ) );

    $p3_title        = $get_meta( '_md_p3_title', 'خشک‌کن کانوایری صنعتی هوای گرم (Conveyor Belt Dryer)' );
    $p3_cat          = $get_meta( '_md_p3_cat', 'خطوط خشک‌کن تونلی، چاپ سیلک و صنایع فرآوری' );
    $p3_img          = $get_meta( '_md_p3_img', home_url( '/wp-content/uploads/2026/07/founder-project-conveyor-dryer.webp' ) );

    $p4_title        = $get_meta( '_md_p4_title', 'شاسی و استراکچر ماشین دوخت و پرفراژ کیسه پلاستیک' );
    $p4_cat          = $get_meta( '_md_p4_cat', 'سازه‌های شیت‌متال دقیق، برش لیزر و ماشین‌کاری CNC' );
    $p4_img          = $get_meta( '_md_p4_img', home_url( '/wp-content/uploads/2026/07/founder-project-plastic-bag.webp' ) );

    $dynamic_years_preview = md_calc_experience_years( $start_year );
    ?>
    <style>
        .md-bento-admin-wrap { font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Oxygen-Sans, Ubuntu, Cantarell, "Helvetica Neue", sans-serif; direction: rtl; }
        .md-bento-admin-header { display: flex; align-items: center; justify-content: space-between; background: #0B0D11; color: #fff; padding: 12px 18px; border-radius: 8px 8px 0 0; border-bottom: 2px solid #D97706; }
        .md-bento-header-title { font-size: 14px; font-weight: 700; display: flex; align-items: center; gap: 8px; color: #F8FAFC; }
        .md-bento-header-title .dashicons { color: #D97706; font-size: 20px; width: 20px; height: 20px; }
        .md-bento-header-badge { font-family: monospace; font-size: 11px; font-weight: 700; background: rgba(217,119,6,0.18); color: #F59E0B; border: 1px solid rgba(217,119,6,0.4); padding: 3px 10px; border-radius: 20px; letter-spacing: 0.5px; }

        /* TAB NAVIGATION */
        .md-bento-tabs-nav { display: flex; flex-wrap: wrap; gap: 4px; background: #F1F5F9; padding: 8px 10px 0; border: 1px solid #CBD5E1; border-top: none; }
        .md-bento-tab-link { background: #E2E8F0; border: 1px solid #CBD5E1; border-bottom: none; padding: 10px 16px; font-size: 12.5px; font-weight: 700; color: #475569; cursor: pointer; border-radius: 6px 6px 0 0; transition: all 0.15s ease; display: inline-flex; align-items: center; gap: 6px; }
        .md-bento-tab-link:hover { background: #FFFFFF; color: #0F172A; }
        .md-bento-tab-link.is-active { background: #FFFFFF; border-color: #94A3B8; color: #0B0D11; border-bottom: 2px solid #D97706; margin-bottom: -1px; font-weight: 800; }
        .md-bento-tab-link .dashicons { font-size: 16px; width: 16px; height: 16px; line-height: 16px; color: #D97706; }

        /* TAB PANES */
        .md-bento-tab-pane { display: none; background: #FFFFFF; border: 1px solid #CBD5E1; border-top: none; padding: 22px 20px; border-radius: 0 0 8px 8px; }
        .md-bento-tab-pane.is-active { display: block; }

        .md-tab-pane-desc { background: #F8FAFC; border-right: 4px solid #D97706; padding: 10px 14px; font-size: 12px; color: #334155; margin-bottom: 18px; border-radius: 0 4px 4px 0; line-height: 1.6; }
        .md-admin-grid { display: grid; grid-template-columns: 1fr 1fr; gap: 16px; }
        .md-admin-grid-full { grid-column: 1 / -1; }
        .md-admin-field label { display: block; font-weight: 700; font-size: 12.5px; margin-bottom: 6px; color: #1E293B; }
        .md-admin-field input[type="text"], .md-admin-field input[type="number"], .md-admin-field input[type="url"], .md-admin-field textarea { width: 100%; border-radius: 6px; border: 1px solid #CBD5E1; padding: 8px 12px; font-size: 13px; color: #0F172A; transition: border-color 0.2s; box-shadow: inset 0 1px 2px rgba(0,0,0,0.04); }
        .md-admin-field input:focus, .md-admin-field textarea:focus { border-color: #D97706; outline: none; box-shadow: 0 0 0 2px rgba(217,119,6,0.2); }
        .md-admin-field textarea { min-height: 80px; line-height: 1.6; resize: vertical; }
        .md-admin-field .desc { font-size: 11px; color: #64748B; margin-top: 5px; line-height: 1.5; }

        /* Project Slide Card in Admin */
        .md-project-card-box { background: #F8FAFC; border: 1px solid #E2E8F0; border-radius: 8px; padding: 14px 16px; margin-bottom: 14px; }
        .md-project-card-header { font-weight: 800; font-size: 13px; color: #0F172A; margin-bottom: 12px; display: flex; align-items: center; justify-content: space-between; border-bottom: 1px solid #E2E8F0; padding-bottom: 6px; }
        .md-img-preview-box { display: flex; align-items: center; gap: 14px; margin-top: 8px; }
        .md-img-thumb { width: 90px; height: 60px; object-fit: cover; border-radius: 6px; border: 1px solid #CBD5E1; background: #E2E8F0; }
        .md-btn-media { background: #0B0D11 !important; color: #D97706 !important; border-color: #0B0D11 !important; font-weight: 700 !important; font-size: 11.5px !important; border-radius: 6px !important; padding: 4px 12px !important; }
        .md-btn-media:hover { background: #1E293B !important; color: #F59E0B !important; }
    </style>

    <div class="md-bento-admin-wrap">
        <div class="md-bento-admin-header">
            <div class="md-bento-header-title">
                <span class="dashicons dashicons-id-alt"></span>
                <span>کنسول مدیریت اختصاصی پورتفولیو و بنتوگرید (Bento Control Hub)</span>
            </div>
            <div class="md-bento-header-badge" dir="ltr">
                <?php echo $is_founder ? 'FOUNDER PORTFOLIO // SAMAN TOWER' : 'TEAM MEMBER PORTFOLIO'; ?>
            </div>
        </div>

        <!-- TABS BAR -->
        <div class="md-bento-tabs-nav" role="tablist">
            <button type="button" class="md-bento-tab-link is-active" data-tab="tab-identity">
                <span class="dashicons dashicons-admin-users"></span> ۱. هویت سازمانی و مانیفست
            </button>
            <button type="button" class="md-bento-tab-link" data-tab="tab-metrics">
                <span class="dashicons dashicons-chart-bar"></span> ۲. سنجه‌های اعتمادساز
            </button>
            <button type="button" class="md-bento-tab-link" data-tab="tab-pillars">
                <span class="dashicons dashicons-shield"></span> ۳. ارکان چهارگانه و تضمین کیفیت
            </button>
            <button type="button" class="md-bento-tab-link" data-tab="tab-skills">
                <span class="dashicons dashicons-performance"></span> ۴. ماتریس مهارت‌ها
            </button>
            <button type="button" class="md-bento-tab-link" data-tab="tab-projects">
                <span class="dashicons dashicons-portfolio"></span> ۵. گزیده پروژه‌های صنعتی
            </button>
            <button type="button" class="md-bento-tab-link" data-tab="tab-channels">
                <span class="dashicons dashicons-share"></span> ۶. راه‌های ارتباطی
            </button>
        </div>

        <!-- ================= TAB 1: IDENTITY & MANIFESTO ================= -->
        <div class="md-bento-tab-pane is-active" id="tab-identity">
            <div class="md-tab-pane-desc">
                <strong>کارت شماره ۱ بنتوگرید (هویت و بیانیه مهندسی):</strong> این بخش مستقیماً در ستون متنی کنار پرتره رسمی قرار می‌گیرد و اولین نقطه تماس کارفرما با تخصص و دیدگاه این عضو تیم است.
            </div>
            <div class="md-admin-grid">
                <div class="md-admin-field md-admin-grid-full">
                    <label for="_md_member_org_hierarchy">سلسله‌مراتب سازمانی و جایگاه دپارتمان (Hierarchy Path)</label>
                    <input type="text" id="_md_member_org_hierarchy" name="_md_member_org_hierarchy" value="<?php echo esc_attr( $org_hierarchy ); ?>">
                    <div class="desc">گره‌ها با اسلش جدا شوند. مثال: ماشین دیزاین / هیئت موسس / مدیرعامل / سرپرست دپارتمان...</div>
                </div>

                <div class="md-admin-field">
                    <label for="_md_member_role_badge">برچسب سبز تخصصی (بالای نام عضو)</label>
                    <input type="text" id="_md_member_role_badge" name="_md_member_role_badge" value="<?php echo esc_attr( $role_badge ); ?>">
                </div>

                <div class="md-admin-field">
                    <label for="_md_member_subtitle">زیرعنوان و معرفی سمت (زیر نام عضو)</label>
                    <input type="text" id="_md_member_subtitle" name="_md_member_subtitle" value="<?php echo esc_attr( $subtitle ); ?>">
                    <div class="desc">مثال: طراح ارشد ماشین‌آلات صنعتی، معمار اکوسیستم فنی و بنیان‌گذار ماشین دیزاین</div>
                </div>

                <div class="md-admin-field">
                    <label for="_md_member_status_badge">برچسب وضعیت تله‌متری لاتین (نوار هدر بالا سمت چپ)</label>
                    <input type="text" id="_md_member_status_badge" name="_md_member_status_badge" value="<?php echo esc_attr( $status_badge ); ?>" dir="ltr">
                </div>

                <div class="md-admin-field">
                    <label for="_md_member_photo_badge">برچسب روی پرتره رسمی (گوشه پرتره)</label>
                    <input type="text" id="_md_member_photo_badge" name="_md_member_photo_badge" value="<?php echo esc_attr( $photo_badge ); ?>" dir="ltr">
                </div>

                <div class="md-admin-field md-admin-grid-full">
                    <label for="_md_member_manifesto_p1">پاراگراف ۱ مانیفست مهندسی (تجربه میدانی و اصول طراحی)</label>
                    <textarea id="_md_member_manifesto_p1" name="_md_member_manifesto_p1" placeholder="بیش از ۱۵ سال تمرکز بر طراحی مکانیکی و ساخت ماشین‌آلات..."><?php echo esc_textarea( $manifesto_p1 ); ?></textarea>
                </div>

                <div class="md-admin-field md-admin-grid-full">
                    <label for="_md_member_manifesto_p2">پاراگراف ۲ مانیفست مهندسی (متدولوژی DFMA، تحلیل اقتصادی و شبیه‌سازی)</label>
                    <textarea id="_md_member_manifesto_p2" name="_md_member_manifesto_p2" placeholder="رویکرد ما در ماشین دیزاین، همگرایی مستقیم متدولوژی DFMA با تحلیل مالی MBA است..."><?php echo esc_textarea( $manifesto_p2 ); ?></textarea>
                </div>

                <div class="md-admin-field md-admin-grid-full">
                    <label for="_md_member_manifesto_p3">پاراگراف ۳ مانیفست مهندسی (استانداردها، GD&T و تضمین صفر دوباره‌کاری)</label>
                    <textarea id="_md_member_manifesto_p3" name="_md_member_manifesto_p3" placeholder="خروجی نهایی ما نقشه‌های اجرایی کامپکت، استانداردهای تلرانس‌گذاری ASME Y14.5..."><?php echo esc_textarea( $manifesto_p3 ); ?></textarea>
                </div>
            </div>
        </div>

        <!-- ================= TAB 2: TRUST METRICS ================= -->
        <div class="md-bento-tab-pane" id="tab-metrics">
            <div class="md-tab-pane-desc">
                <strong>کارت شماره ۳ بنتوگرید (سنجه‌های اعتمادساز B2B):</strong> کنسول شاخص‌های ۴ گانه صلاحیت صنعتی جهت ایجاد اعتماد روانشناختی در مدیران کارخانجات.
            </div>
            <div class="md-admin-grid">
                <div class="md-admin-field">
                    <label for="_md_metric_start_year">
                        سال میلادی شروع فعالیت (محاسبه‌گر خودکار سابقه):
                        <span id="mdYearsPreview" style="color:#D97706;font-weight:800;">[پیش‌نمایش کنونی: <?php echo esc_html( $dynamic_years_preview ); ?> سال]</span>
                    </label>
                    <input type="number" id="_md_metric_start_year" name="_md_metric_start_year" value="<?php echo esc_attr( $start_year ); ?>" min="1980" max="<?php echo date('Y'); ?>">
                    <div class="desc">با گذشت هر سال میلادی، سابقه به صورت خودکار یک سال افزایش می‌یابد.</div>
                </div>

                <div class="md-admin-field">
                    <label for="_md_metric1_val">مقدار سفارشی سنجه ۱ (اختیاری - در صورت تمایل به جایگزینی سابقه خودکار):</label>
                    <input type="text" id="_md_metric1_val" name="_md_metric1_val" value="<?php echo esc_attr( $metric1_val ); ?>" placeholder="مثلاً: ۱۵+ یا ۱۰+">
                </div>

                <div class="md-admin-field md-admin-grid-full">
                    <label for="_md_metric1_label">زیرعنوان سنجه ۱</label>
                    <input type="text" id="_md_metric1_label" name="_md_metric1_label" value="<?php echo esc_attr( $metric1_label ); ?>">
                </div>

                <div class="md-admin-field">
                    <label for="_md_metric2_val">سنجه ۲ - مقدار / علامت (پیش‌فرض: Grade A یا A+)</label>
                    <input type="text" id="_md_metric2_val" name="_md_metric2_val" value="<?php echo esc_attr( $metric2_val ); ?>" dir="ltr">
                </div>
                <div class="md-admin-field">
                    <label for="_md_metric2_label">زیرعنوان سنجه ۲</label>
                    <input type="text" id="_md_metric2_label" name="_md_metric2_label" value="<?php echo esc_attr( $metric2_label ); ?>">
                </div>

                <div class="md-admin-field">
                    <label for="_md_metric3_val">سنجه ۳ - مقدار / علامت (پیش‌فرض: Tech + MBA یا ISO)</label>
                    <input type="text" id="_md_metric3_val" name="_md_metric3_val" value="<?php echo esc_attr( $metric3_val ); ?>" dir="ltr">
                </div>
                <div class="md-admin-field">
                    <label for="_md_metric3_label">زیرعنوان سنجه ۳</label>
                    <input type="text" id="_md_metric3_label" name="_md_metric3_label" value="<?php echo esc_attr( $metric3_label ); ?>">
                </div>

                <div class="md-admin-field">
                    <label for="_md_metric4_val">سنجه ۴ - مقدار / علامت (پیش‌فرض: DIN / ISO)</label>
                    <input type="text" id="_md_metric4_val" name="_md_metric4_val" value="<?php echo esc_attr( $metric4_val ); ?>" dir="ltr">
                </div>
                <div class="md-admin-field">
                    <label for="_md_metric4_label">زیرعنوان سنجه ۴</label>
                    <input type="text" id="_md_metric4_label" name="_md_metric4_label" value="<?php echo esc_attr( $metric4_label ); ?>">
                </div>
            </div>
        </div>

        <!-- ================= TAB 3: FOUR PILLARS & GUARANTEE ================= -->
        <div class="md-bento-tab-pane" id="tab-pillars">
            <div class="md-tab-pane-desc">
                <strong>کارت شماره ۲ بنتوگرید (ارکان چهارگانه تخصص و نشان تضمین ساخت‌پذیری):</strong> تشریح شایستگی‌های راهبردی این عضو تیم در ۴ ایستگاه مجزا به همراه بیانیه تعهد کیفیت در کف کارت.
            </div>
            <div class="md-admin-grid">
                <div class="md-admin-field md-admin-grid-full">
                    <label for="_md_pillars_heading">عنوان اصلی بخش ارکان چهارگانه</label>
                    <input type="text" id="_md_pillars_heading" name="_md_pillars_heading" value="<?php echo esc_attr( $pillars_heading ); ?>">
                </div>

                <!-- Pillar 1 -->
                <div class="md-admin-field">
                    <label for="_md_pillar1_title">عنوان رکن ۱</label>
                    <input type="text" id="_md_pillar1_title" name="_md_pillar1_title" value="<?php echo esc_attr( $pillar1_title ); ?>">
                </div>
                <div class="md-admin-field">
                    <label for="_md_pillar1_desc">شرح رکن ۱</label>
                    <textarea id="_md_pillar1_desc" name="_md_pillar1_desc"><?php echo esc_textarea( $pillar1_desc ); ?></textarea>
                </div>

                <!-- Pillar 2 -->
                <div class="md-admin-field">
                    <label for="_md_pillar2_title">عنوان رکن ۲</label>
                    <input type="text" id="_md_pillar2_title" name="_md_pillar2_title" value="<?php echo esc_attr( $pillar2_title ); ?>">
                </div>
                <div class="md-admin-field">
                    <label for="_md_pillar2_desc">شرح رکن ۲</label>
                    <textarea id="_md_pillar2_desc" name="_md_pillar2_desc"><?php echo esc_textarea( $pillar2_desc ); ?></textarea>
                </div>

                <!-- Pillar 3 -->
                <div class="md-admin-field">
                    <label for="_md_pillar3_title">عنوان رکن ۳</label>
                    <input type="text" id="_md_pillar3_title" name="_md_pillar3_title" value="<?php echo esc_attr( $pillar3_title ); ?>">
                </div>
                <div class="md-admin-field">
                    <label for="_md_pillar3_desc">شرح رکن ۳</label>
                    <textarea id="_md_pillar3_desc" name="_md_pillar3_desc"><?php echo esc_textarea( $pillar3_desc ); ?></textarea>
                </div>

                <!-- Pillar 4 -->
                <div class="md-admin-field">
                    <label for="_md_pillar4_title">عنوان رکن ۴</label>
                    <input type="text" id="_md_pillar4_title" name="_md_pillar4_title" value="<?php echo esc_attr( $pillar4_title ); ?>">
                </div>
                <div class="md-admin-field">
                    <label for="_md_pillar4_desc">شرح رکن ۴</label>
                    <textarea id="_md_pillar4_desc" name="_md_pillar4_desc"><?php echo esc_textarea( $pillar4_desc ); ?></textarea>
                </div>

                <!-- Guarantee Console -->
                <div class="md-admin-field md-admin-grid-full" style="background:#F8FAFC;border:1px solid #E2E8F0;padding:14px;border-radius:8px;margin-top:10px;">
                    <div style="font-weight:800;color:#0F172A;margin-bottom:10px;display:flex;align-items:center;gap:6px;">
                        <span class="dashicons dashicons-yes-alt" style="color:#15803d;"></span> نشان تضمین کیفیت و ساخت‌پذیری کارگاهی (مستقر در کف کارت ۲)
                    </div>
                    <div class="md-admin-grid">
                        <div class="md-admin-field">
                            <label for="_md_guarantee_title">عنوان نشان تضمین</label>
                            <input type="text" id="_md_guarantee_title" name="_md_guarantee_title" value="<?php echo esc_attr( $guarantee_title ); ?>">
                        </div>
                        <div class="md-admin-field">
                            <label for="_md_guarantee_desc">متن تعهد تضمین کیفیت</label>
                            <textarea id="_md_guarantee_desc" name="_md_guarantee_desc"><?php echo esc_textarea( $guarantee_desc ); ?></textarea>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- ================= TAB 4: SKILLS MATRIX ================= -->
        <div class="md-bento-tab-pane" id="tab-skills">
            <div class="md-tab-pane-desc">
                <strong>کارت شماره ۴ بنتوگرید (ماتریس تسلط نرم‌افزاری و مهارت‌ها):</strong> ۵ مهارت کلیدی این عضو تیم به همراه درصد تسلط (۱ تا ۱۰۰) که به صورت نوارهای پیشرفت تعاملی رندر می‌شوند.
            </div>
            <div class="md-admin-grid">
                <!-- Skill 1 -->
                <div class="md-admin-field">
                    <label for="_md_skill1_name">عنوان مهارت ۱</label>
                    <input type="text" id="_md_skill1_name" name="_md_skill1_name" value="<?php echo esc_attr( $skill1_name ); ?>">
                </div>
                <div class="md-admin-field">
                    <label for="_md_skill1_pct">درصد تسلط مهارت ۱ (۱ تا ۱۰۰)</label>
                    <input type="number" id="_md_skill1_pct" name="_md_skill1_pct" value="<?php echo esc_attr( $skill1_pct ); ?>" min="1" max="100">
                </div>

                <!-- Skill 2 -->
                <div class="md-admin-field">
                    <label for="_md_skill2_name">عنوان مهارت ۲</label>
                    <input type="text" id="_md_skill2_name" name="_md_skill2_name" value="<?php echo esc_attr( $skill2_name ); ?>">
                </div>
                <div class="md-admin-field">
                    <label for="_md_skill2_pct">درصد تسلط مهارت ۲ (۱ تا ۱۰۰)</label>
                    <input type="number" id="_md_skill2_pct" name="_md_skill2_pct" value="<?php echo esc_attr( $skill2_pct ); ?>" min="1" max="100">
                </div>

                <!-- Skill 3 -->
                <div class="md-admin-field">
                    <label for="_md_skill3_name">عنوان مهارت ۳</label>
                    <input type="text" id="_md_skill3_name" name="_md_skill3_name" value="<?php echo esc_attr( $skill3_name ); ?>">
                </div>
                <div class="md-admin-field">
                    <label for="_md_skill3_pct">درصد تسلط مهارت ۳ (۱ تا ۱۰۰)</label>
                    <input type="number" id="_md_skill3_pct" name="_md_skill3_pct" value="<?php echo esc_attr( $skill3_pct ); ?>" min="1" max="100">
                </div>

                <!-- Skill 4 -->
                <div class="md-admin-field">
                    <label for="_md_skill4_name">عنوان مهارت ۴</label>
                    <input type="text" id="_md_skill4_name" name="_md_skill4_name" value="<?php echo esc_attr( $skill4_name ); ?>">
                </div>
                <div class="md-admin-field">
                    <label for="_md_skill4_pct">درصد تسلط مهارت ۴ (۱ تا ۱۰۰)</label>
                    <input type="number" id="_md_skill4_pct" name="_md_skill4_pct" value="<?php echo esc_attr( $skill4_pct ); ?>" min="1" max="100">
                </div>

                <!-- Skill 5 -->
                <div class="md-admin-field">
                    <label for="_md_skill5_name">عنوان مهارت ۵</label>
                    <input type="text" id="_md_skill5_name" name="_md_skill5_name" value="<?php echo esc_attr( $skill5_name ); ?>">
                </div>
                <div class="md-admin-field">
                    <label for="_md_skill5_pct">درصد تسلط مهارت ۵ (۱ تا ۱۰۰)</label>
                    <input type="number" id="_md_skill5_pct" name="_md_skill5_pct" value="<?php echo esc_attr( $skill5_pct ); ?>" min="1" max="100">
                </div>
            </div>
        </div>

        <!-- ================= TAB 5: FLAGSHIP PROJECTS ================= -->
        <div class="md-bento-tab-pane" id="tab-projects">
            <div class="md-tab-pane-desc">
                <strong>کارت شماره ۵ بنتوگرید (اسلایدر پروژه‌های شاخص صنعتی):</strong> ۴ پروژه صنعتی ویژه با تصویر، عنوان و تگ صنعت. می‌توانید مستقیماً از کتابخانه چندرسانه‌ای وردپرس عکس انتخاب کنید.
            </div>

            <!-- Slide 1 -->
            <div class="md-project-card-box">
                <div class="md-project-card-header">
                    <span>اسلاید شماره ۱</span>
                    <span style="font-size:11px;color:#64748B;">SLIDE 01</span>
                </div>
                <div class="md-admin-grid">
                    <div class="md-admin-field">
                        <label for="_md_p1_title">عنوان پروژه ۱</label>
                        <input type="text" id="_md_p1_title" name="_md_p1_title" value="<?php echo esc_attr( $p1_title ); ?>">
                    </div>
                    <div class="md-admin-field">
                        <label for="_md_p1_cat">دسته‌بندی و صنعت پروژه ۱</label>
                        <input type="text" id="_md_p1_cat" name="_md_p1_cat" value="<?php echo esc_attr( $p1_cat ); ?>">
                    </div>
                    <div class="md-admin-field md-admin-grid-full">
                        <label for="_md_p1_img">تصویر پروژه ۱</label>
                        <input type="text" id="_md_p1_img" name="_md_p1_img" value="<?php echo esc_url( $p1_img ); ?>" dir="ltr" class="md-img-input">
                        <div class="md-img-preview-box">
                            <img src="<?php echo esc_url( $p1_img ); ?>" class="md-img-thumb" alt="پیش‌نمایش ۱">
                            <button type="button" class="button md-btn-media" data-target="_md_p1_img">انتخاب تصویر از رسانه وردپرس</button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Slide 2 -->
            <div class="md-project-card-box">
                <div class="md-project-card-header">
                    <span>اسلاید شماره ۲</span>
                    <span style="font-size:11px;color:#64748B;">SLIDE 02</span>
                </div>
                <div class="md-admin-grid">
                    <div class="md-admin-field">
                        <label for="_md_p2_title">عنوان پروژه ۲</label>
                        <input type="text" id="_md_p2_title" name="_md_p2_title" value="<?php echo esc_attr( $p2_title ); ?>">
                    </div>
                    <div class="md-admin-field">
                        <label for="_md_p2_cat">دسته‌بندی و صنعت پروژه ۲</label>
                        <input type="text" id="_md_p2_cat" name="_md_p2_cat" value="<?php echo esc_attr( $p2_cat ); ?>">
                    </div>
                    <div class="md-admin-field md-admin-grid-full">
                        <label for="_md_p2_img">تصویر پروژه ۲</label>
                        <input type="text" id="_md_p2_img" name="_md_p2_img" value="<?php echo esc_url( $p2_img ); ?>" dir="ltr" class="md-img-input">
                        <div class="md-img-preview-box">
                            <img src="<?php echo esc_url( $p2_img ); ?>" class="md-img-thumb" alt="پیش‌نمایش ۲">
                            <button type="button" class="button md-btn-media" data-target="_md_p2_img">انتخاب تصویر از رسانه وردپرس</button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Slide 3 -->
            <div class="md-project-card-box">
                <div class="md-project-card-header">
                    <span>اسلاید شماره ۳</span>
                    <span style="font-size:11px;color:#64748B;">SLIDE 03</span>
                </div>
                <div class="md-admin-grid">
                    <div class="md-admin-field">
                        <label for="_md_p3_title">عنوان پروژه ۳</label>
                        <input type="text" id="_md_p3_title" name="_md_p3_title" value="<?php echo esc_attr( $p3_title ); ?>">
                    </div>
                    <div class="md-admin-field">
                        <label for="_md_p3_cat">دسته‌بندی و صنعت پروژه ۳</label>
                        <input type="text" id="_md_p3_cat" name="_md_p3_cat" value="<?php echo esc_attr( $p3_cat ); ?>">
                    </div>
                    <div class="md-admin-field md-admin-grid-full">
                        <label for="_md_p3_img">تصویر پروژه ۳</label>
                        <input type="text" id="_md_p3_img" name="_md_p3_img" value="<?php echo esc_url( $p3_img ); ?>" dir="ltr" class="md-img-input">
                        <div class="md-img-preview-box">
                            <img src="<?php echo esc_url( $p3_img ); ?>" class="md-img-thumb" alt="پیش‌نمایش ۳">
                            <button type="button" class="button md-btn-media" data-target="_md_p3_img">انتخاب تصویر از رسانه وردپرس</button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Slide 4 -->
            <div class="md-project-card-box">
                <div class="md-project-card-header">
                    <span>اسلاید شماره ۴</span>
                    <span style="font-size:11px;color:#64748B;">SLIDE 04</span>
                </div>
                <div class="md-admin-grid">
                    <div class="md-admin-field">
                        <label for="_md_p4_title">عنوان پروژه ۴</label>
                        <input type="text" id="_md_p4_title" name="_md_p4_title" value="<?php echo esc_attr( $p4_title ); ?>">
                    </div>
                    <div class="md-admin-field">
                        <label for="_md_p4_cat">دسته‌بندی و صنعت پروژه ۴</label>
                        <input type="text" id="_md_p4_cat" name="_md_p4_cat" value="<?php echo esc_attr( $p4_cat ); ?>">
                    </div>
                    <div class="md-admin-field md-admin-grid-full">
                        <label for="_md_p4_img">تصویر پروژه ۴</label>
                        <input type="text" id="_md_p4_img" name="_md_p4_img" value="<?php echo esc_url( $p4_img ); ?>" dir="ltr" class="md-img-input">
                        <div class="md-img-preview-box">
                            <img src="<?php echo esc_url( $p4_img ); ?>" class="md-img-thumb" alt="پیش‌نمایش ۴">
                            <button type="button" class="button md-btn-media" data-target="_md_p4_img">انتخاب تصویر از رسانه وردپرس</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- ================= TAB 6: CHANNELS & SOCIAL ================= -->
        <div class="md-bento-tab-pane" id="tab-channels">
            <div class="md-tab-pane-desc">
                <strong>راه‌های ارتباط مستقیم و شبکه‌های تخصصی:</strong> لینک‌های فعال در پایین بیانیه مهندسی (لینکدین، اینستاگرام، گراب‌کد، ایمیل مستقیم و تماس).
            </div>
            <div class="md-admin-grid">
                <div class="md-admin-field">
                    <label for="_md_member_linkedin">لینک پروفایل لینکدین (LinkedIn URL)</label>
                    <input type="url" id="_md_member_linkedin" name="_md_member_linkedin" value="<?php echo esc_url( $linkedin ); ?>" dir="ltr">
                </div>

                <div class="md-admin-field">
                    <label for="_md_member_instagram">لینک صفحه اینستاگرام (Instagram URL)</label>
                    <input type="url" id="_md_member_instagram" name="_md_member_instagram" value="<?php echo esc_url( $instagram ); ?>" dir="ltr">
                </div>

                <div class="md-admin-field">
                    <label for="_md_member_grabcad">پایگاه مدل‌های سه‌بعدی GrabCAD (URL)</label>
                    <input type="url" id="_md_member_grabcad" name="_md_member_grabcad" value="<?php echo esc_url( $grabcad ); ?>" dir="ltr">
                </div>

                <div class="md-admin-field">
                    <label for="_md_member_email">آدرس ایمیل مستقیم سازمانی</label>
                    <input type="text" id="_md_member_email" name="_md_member_email" value="<?php echo esc_attr( $email ); ?>" dir="ltr">
                </div>

                <div class="md-admin-field">
                    <label for="_md_member_phone">شماره تماس مستقیم (تلفن همراه یا ثابت)</label>
                    <input type="text" id="_md_member_phone" name="_md_member_phone" value="<?php echo esc_attr( $phone ); ?>" dir="ltr">
                </div>
            </div>
        </div>
    </div>

    <!-- TAB SWITCHING & MEDIA UPLOADER JS -->
    <script>
    jQuery(function($){
        // Tab switching
        $('.md-bento-tab-link').on('click', function(e){
            e.preventDefault();
            var targetTab = $(this).data('tab');
            $('.md-bento-tab-link').removeClass('is-active');
            $(this).addClass('is-active');
            $('.md-bento-tab-pane').removeClass('is-active');
            $('#' + targetTab).addClass('is-active');
        });

        // Dynamic Experience Year Calculation Live Preview
        $('#_md_metric_start_year').on('input change', function(){
            var start = parseInt($(this).val(), 10);
            var curr = new Date().getFullYear();
            if (start > 1970 && start <= curr) {
                var yrs = Math.max(1, curr - start);
                var fNum = yrs.toString().replace(/\d/g, function(d){ return ['۰','۱','۲','۳','۴','۵','۶','۷','۸','۹'][d]; });
                $('#mdYearsPreview').text('[پیش‌نمایش کنونی: ' + fNum + '+ سال]');
            }
        });

        // WordPress Media Uploader for Project Images
        $('.md-btn-media').on('click', function(e){
            e.preventDefault();
            var targetInputId = $(this).data('target');
            var $inp = $('#' + targetInputId);
            var $thumb = $(this).siblings('.md-img-thumb');

            var frame = wp.media({
                title: 'انتخاب تصویر پروژه صنعتی',
                button: { text: 'استفاده به عنوان تصویر پروژه' },
                multiple: false,
                library: { type: 'image' }
            });

            frame.on('select', function(){
                var attachment = frame.state().get('selection').first().toJSON();
                $inp.val(attachment.url);
                if ($thumb.length) {
                    $thumb.attr('src', attachment.url);
                }
            });

            frame.open();
        });
    });
    </script>
    <?php
}

/**
 * 6. Save Meta Box Data
 */
function md_save_team_member_meta( $post_id ) {
    if ( ! isset( $_POST['md_team_member_nonce'] ) || ! wp_verify_nonce( $_POST['md_team_member_nonce'], 'md_save_team_member_meta' ) ) {
        return;
    }

    if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) {
        return;
    }

    if ( ! current_user_can( 'edit_post', $post_id ) ) {
        return;
    }

    $fields = [
        '_md_member_role_badge',
        '_md_member_subtitle',
        '_md_member_org_hierarchy',
        '_md_member_status_badge',
        '_md_member_photo_badge',
        '_md_member_manifesto_p1',
        '_md_member_manifesto_p2',
        '_md_member_manifesto_p3',
        '_md_metric_start_year',
        '_md_metric1_val',
        '_md_metric1_label',
        '_md_pillars_heading',
        '_md_metric2_val',
        '_md_metric2_label',
        '_md_metric3_val',
        '_md_metric3_label',
        '_md_metric4_val',
        '_md_metric4_label',
        '_md_member_linkedin',
        '_md_member_instagram',
        '_md_member_grabcad',
        '_md_member_email',
        '_md_member_phone',
        '_md_pillar1_title',
        '_md_pillar1_desc',
        '_md_pillar2_title',
        '_md_pillar2_desc',
        '_md_pillar3_title',
        '_md_pillar3_desc',
        '_md_pillar4_title',
        '_md_pillar4_desc',
        '_md_guarantee_title',
        '_md_guarantee_desc',
        '_md_skill1_name',
        '_md_skill1_pct',
        '_md_skill2_name',
        '_md_skill2_pct',
        '_md_skill3_name',
        '_md_skill3_pct',
        '_md_skill4_name',
        '_md_skill4_pct',
        '_md_skill5_name',
        '_md_skill5_pct',
        '_md_p1_title',
        '_md_p1_cat',
        '_md_p1_img',
        '_md_p2_title',
        '_md_p2_cat',
        '_md_p2_img',
        '_md_p3_title',
        '_md_p3_cat',
        '_md_p3_img',
        '_md_p4_title',
        '_md_p4_cat',
        '_md_p4_img',
    ];

    foreach ( $fields as $field ) {
        if ( isset( $_POST[ $field ] ) ) {
            if ( strpos( $field, '_img' ) !== false || strpos( $field, 'linkedin' ) !== false || strpos( $field, 'instagram' ) !== false || strpos( $field, 'grabcad' ) !== false ) {
                update_post_meta( $post_id, $field, esc_url_raw( trim( $_POST[ $field ] ) ) );
            } elseif ( strpos( $field, '_desc' ) !== false || strpos( $field, '_manifesto' ) !== false ) {
                update_post_meta( $post_id, $field, sanitize_textarea_field( $_POST[ $field ] ) );
            } else {
                update_post_meta( $post_id, $field, sanitize_text_field( $_POST[ $field ] ) );
            }
        }
    }

    // Bidirectional sync between Founder post 160 and Founder page 159
    $post_obj = get_post( $post_id );
    if ( $post_obj ) {
        $counterpart_id = null;
        if ( 'team_member' === $post_obj->post_type && 'hossein-vatandoust' === $post_obj->post_name ) {
            $fp = get_page_by_path( 'hossein-vatandoust', OBJECT, 'page' );
            if ( $fp ) $counterpart_id = (int) $fp->ID;
        } elseif ( 'page' === $post_obj->post_type && ( 'hossein-vatandoust' === $post_obj->post_name || 159 === (int) $post_id ) ) {
            $ft = get_page_by_path( 'hossein-vatandoust', OBJECT, 'team_member' );
            if ( $ft ) $counterpart_id = (int) $ft->ID;
        }

        if ( $counterpart_id && $counterpart_id !== (int) $post_id ) {
            foreach ( $fields as $field ) {
                if ( isset( $_POST[ $field ] ) ) {
                    $saved_val = get_post_meta( $post_id, $field, true );
                    update_post_meta( $counterpart_id, $field, $saved_val );
                }
            }
        }
    }
}
add_action( 'save_post_team_member', 'md_save_team_member_meta' );
add_action( 'save_post_page', 'md_save_team_member_meta' );

/**
 * 7. Helper: Retrieve Team Member Dynamic Data
 */
function md_enforce_manifesto_balance( $paragraphs, $max_total_chars = 1100 ) {
    if ( empty( $paragraphs ) || ! is_array( $paragraphs ) ) {
        return [];
    }

    $balanced = [];
    $current_len = 0;

    foreach ( $paragraphs as $p ) {
        $p = trim( strip_tags( $p ) );
        if ( empty( $p ) ) continue;

        $p_len = mb_strlen( $p, 'UTF-8' );
        if ( $current_len + $p_len <= $max_total_chars ) {
            $balanced[] = $p;
            $current_len += $p_len;
        } else {
            $remaining = $max_total_chars - $current_len;
            if ( $remaining > 60 ) {
                $sub = mb_substr( $p, 0, $remaining, 'UTF-8' );
                $last_space = mb_strrpos( $sub, ' ', 0, 'UTF-8' );
                if ( $last_space !== false && $last_space > 30 ) {
                    $sub = mb_substr( $sub, 0, $last_space, 'UTF-8' );
                }
                $sub = rtrim( $sub, '.,;:؛، ' ) . '...';
                $balanced[] = $sub;
            }
            break;
        }
    }

    return ! empty( $balanced ) ? $balanced : $paragraphs;
}

function md_get_team_member_profile_data( $post_id_or_slug = null ) {
    $post = null;

    if ( is_numeric( $post_id_or_slug ) ) {
        $post = get_post( $post_id_or_slug );
    } elseif ( is_string( $post_id_or_slug ) && ! empty( $post_id_or_slug ) ) {
        $post = get_page_by_path( $post_id_or_slug, OBJECT, 'team_member' );
        if ( ! $post ) {
            $post = get_page_by_path( $post_id_or_slug, OBJECT, 'page' );
        }
    }

    if ( ! $post && is_singular( 'team_member' ) ) {
        $post = get_queried_object();
    }

    if ( ! $post ) {
        $post = get_page_by_path( 'hossein-vatandoust', OBJECT, 'team_member' );
    }

    if ( ! $post ) {
        $members = get_posts( [ 'post_type' => 'team_member', 'numberposts' => 1, 'post_status' => 'publish' ] );
        if ( ! empty( $members ) ) {
            $post = $members[0];
        }
    }

    $id = $post ? $post->ID : 0;
    $is_founder = ( $post && ( $post->post_name === 'hossein-vatandoust' || (int) $id === 159 || (int) $id === 160 ) );

    // If ID is page 159, check if counterpart 160 has more detailed meta, and vice-versa
    $counterpart_id = 0;
    if ( $is_founder ) {
        if ( $post && 'page' === $post->post_type ) {
            $cp = get_page_by_path( 'hossein-vatandoust', OBJECT, 'team_member' );
            if ( $cp ) $counterpart_id = $cp->ID;
        } elseif ( $post && 'team_member' === $post->post_type ) {
            $cp = get_page_by_path( 'hossein-vatandoust', OBJECT, 'page' );
            if ( $cp ) $counterpart_id = $cp->ID;
        }
    }

    $read_meta = function( $key, $fallback = '' ) use ( $id, $counterpart_id ) {
        $val = get_post_meta( $id, $key, true );
        if ( ( $val === '' || $val === false ) && $counterpart_id ) {
            $val = get_post_meta( $counterpart_id, $key, true );
        }
        return ( $val !== '' && $val !== false ) ? $val : $fallback;
    };

    // Portrait image
    $photo_url = '';
    if ( $id && has_post_thumbnail( $id ) ) {
        $photo_url = get_the_post_thumbnail_url( $id, 'full' );
    } elseif ( $counterpart_id && has_post_thumbnail( $counterpart_id ) ) {
        $photo_url = get_the_post_thumbnail_url( $counterpart_id, 'full' );
    }

    if ( empty( $photo_url ) ) {
        $photo_url = $is_founder
            ? home_url( '/wp-content/uploads/2026/07/hossein-vatandoust-founder.webp' )
            : get_template_directory_uri() . '/assets/images/team-avatar-placeholder.svg';
    }

    $start_year = (int) $read_meta( '_md_metric_start_year', $is_founder ? 2011 : 2018 );
    $dynamic_years = md_calc_experience_years( $start_year );

    $raw_name = $post ? $post->post_title : ( $is_founder ? 'حسین وطن‌دوست' : 'عضو تیم مهندسی' );
    $clean_name = preg_replace( '/وطن[\s\x{200c}]+دوست/u', 'وطن' . "\xE2\x80\x8C" . 'دوست', $raw_name );

    // Subtitle
    $subtitle = $read_meta( '_md_member_subtitle' );
    if ( empty( $subtitle ) ) {
        if ( $is_founder ) {
            $subtitle = 'طراح ارشد ماشین‌آلات صنعتی، معمار اکوسیستم فنی و بنیان‌گذار ماشین دیزاین';
        } elseif ( $post && ! empty( $post->post_excerpt ) ) {
            $subtitle = $post->post_excerpt;
        } else {
            $subtitle = 'کارشناس ارشد طراحی، شبیه‌سازی و مهندسی معکوس تجهیزات صنعتی';
        }
    }

    // Manifesto paragraphs
    $m_p1 = $read_meta( '_md_member_manifesto_p1' );
    $m_p2 = $read_meta( '_md_member_manifesto_p2' );
    $m_p3 = $read_meta( '_md_member_manifesto_p3' );
    $raw_manifesto = array_values( array_filter( [ $m_p1, $m_p2, $m_p3 ] ) );

    if ( empty( $raw_manifesto ) && $post && ! empty( trim( $post->post_content ) ) ) {
        $content_paras = array_values( array_filter( array_map( 'trim', explode( "\n\n", strip_tags( $post->post_content ) ) ) ) );
        if ( ! empty( $content_paras ) ) {
            $raw_manifesto = array_slice( $content_paras, 0, 3 );
        }
    }

    if ( empty( $raw_manifesto ) ) {
        if ( $is_founder ) {
            $raw_manifesto = [
                'بیش از ۱۵ سال تمرکز بر طراحی ماشین‌آلات، عیب‌یابی ارتعاشات و ساخت تجهیزات سفارشی خطوط تولید، این باور را در من تثبیت کرده که مهندسی واقعی در درک بی‌واسطه از فرآیندهای براده‌برداری، تلرانس‌های ساخت و رفتار دینامیکی متریال شکل می‌گیرد، نه صرفاً در نرم‌افزار.',
                'رویکرد ما در ماشین دیزاین، همگرایی متدولوژی DFMA (طراحی برای ساخت اقتصادی) با تحلیل مالی MBA است. دغدغه اصلی کارخانه‌دار، اتلاف سرمایه در آزمون‌وخطای کارگاهی است؛ ما با اعتبارسنجی دقیق FEA و تخمین واقعی بودجه ساخت (CAPEX)، ریسک مالی و توقف خط را پیش از شروع براده‌برداری حذف می‌کنیم.',
                'خروجی ما نقشه‌های اجرایی دقیق منطبق بر استانداردهای GD&T (کدهای ASME Y14.5 و DIN ISO 2768) و تضمین ایمنی ISO 12100 است؛ اسنادی بدون ابهام که ریسک دوباره‌کاری را به صفر رسانده و سرمایه صنعتی شما را به دارایی پایدار تبدیل می‌کند.',
            ];
        } else {
            $raw_manifesto = [
                'طراحی ماشین‌آلات و مکانیزم‌های صنعتی در ماشین دیزاین بر متدولوژی DFMA، تحلیل دقیق رفتار متریال و استانداردسازی فرآیندهای ساخت کارگاهی استوار است.',
                'هدف ما ایجاد هماهنگی کامل میان نقشه‌های مهندسی و الزامات تولید اقتصادی است تا از هرگونه دوباره‌کاری و اتلاف هزینه در فرآیند ساخت و مونتاژ جلوگیری شود.',
                'تعهد ما ارائه مستندات دقیق اجرایی بر مبنای استانداردهای بین‌المللی DIN/ISO است که قابلیت اطمینان، دوام بالا و بهره‌وری مستمر خطوط تولید را تضمین می‌نماید.',
            ];
        }
    }

    // Four Pillars
    $pillars = [];
    for ( $i = 1; $i <= 4; $i++ ) {
        $p_title = $read_meta( "_md_pillar{$i}_title" );
        $p_desc  = $read_meta( "_md_pillar{$i}_desc" );
        if ( ! empty( $p_title ) || ! empty( $p_desc ) ) {
            $pillars[] = [
                'title' => $p_title ?: "رکن {$i}",
                'desc'  => $p_desc,
            ];
        }
    }
    if ( empty( $pillars ) ) {
        $pillars = [
            [
                'title' => 'طراحی مقید به ساخت و مونتاژ (DFMA)',
                'desc'  => 'طراحی قطعات و مجموعه‌ها با درک مستقیم فرآیندهای تراشکاری، فرزکاری CNC، برش لیزر و مونتاژ، جهت حذف خطاهای کارگاهی پیش از ساخت.',
            ],
            [
                'title' => $is_founder ? 'مدیریت سرمایه و ریسک ساخت (MBA)' : 'شبیه‌سازی دینامیکی و تحلیل مکانیزم‌ها',
                'desc'  => $is_founder ? 'تحلیل اقتصادی بازگشت سرمایه (ROI)، تخمین دقیق بودجه ساخت (CAPEX/OPEX) و تصمیم‌گیری ساخت یا خرید (Make or Buy) بر مبنای داده‌های مالی.' : 'تحلیل دقیق سینماتیکی و دینامیکی قطعات و بهینه‌سازی مسیرهای حرکتی در شرایط کاری سخت.',
            ],
            [
                'title' => 'شبیه‌سازی تنش و ارتعاشات مکانیزم',
                'desc'  => 'اعتبارسنجی مقاومت سازه و اجزای مکانیکی بحرانی با نرم‌افزارهای تحلیلی، پیش‌بینی خستگی قطعات و تعیین دقیق ابعاد یاتاقان‌ها و شفت‌ها.',
            ],
            [
                'title' => 'تدوین نقشه‌های ساخت، GD&T و تلرانس‌گذاری دقیق',
                'desc'  => 'تهیه نقشه‌های دوبعدی دقیق ساخت، انطباقات تلرانسی H7/g6 بر مبنای ASME Y14.5 / DIN ISO 2768 و تعیین دقیق صافی سطح (Ra) جهت حذف ابهام در ماشین‌کاری CNC.',
            ],
        ];
    }

    // Skills Matrix
    $skills = [];
    for ( $i = 1; $i <= 5; $i++ ) {
        $s_name = $read_meta( "_md_skill{$i}_name" );
        $s_pct  = (int) $read_meta( "_md_skill{$i}_pct" );
        if ( ! empty( $s_name ) ) {
            $skills[] = [
                'name' => $s_name,
                'pct'  => $s_pct > 0 ? min( 100, $s_pct ) : 90,
            ];
        }
    }
    if ( empty( $skills ) ) {
        $skills = [
            [ 'name' => 'طراحی صنعتی پیشرفته سالیدورکس و متدولوژی DFMA', 'pct' => 95 ],
            [ 'name' => $is_founder ? 'مدیریت ریسک سرمایه و بودجه‌بندی خطوط تولید (MBA)' : 'طراحی مکانیزم‌های بادامکی، چرخ‌دنده‌ای و هیدرولیک', 'pct' => 92 ],
            [ 'name' => 'شبیه‌سازی تنش، خستگی و اجزای محدود با Ansys', 'pct' => 88 ],
            [ 'name' => 'استانداردهای شیت‌متال، تلرانس GD&T و برش لیزر', 'pct' => 96 ],
            [ 'name' => 'اتوماسیون، پایش وضعیت و سنسورینگ ماشین‌آلات', 'pct' => 82 ],
        ];
    }

    // Flagship Project Slides
    $projects = [];
    for ( $i = 1; $i <= 4; $i++ ) {
        $p_title = $read_meta( "_md_p{$i}_title" );
        $p_cat   = $read_meta( "_md_p{$i}_cat" );
        $p_img   = $read_meta( "_md_p{$i}_img" );
        if ( ! empty( $p_title ) || ! empty( $p_img ) ) {
            $projects[] = [
                'title'    => $p_title ?: "پروژه مهندسی {$i}",
                'category' => $p_cat ?: 'طراحی و ساخت تجهیزات صنعتی',
                'image'    => $p_img ?: home_url( '/wp-content/uploads/2026/07/founder-project-rewinder.webp' ),
            ];
        }
    }
    if ( empty( $projects ) && $is_founder ) {
        $projects = [
            [
                'title'    => 'خط رول‌کن دوار بدون مغزی (Coreless Turret Rewinder)',
                'category' => 'صنایع پلیمری، فیلم نایلون و بسته‌بندی پیوسته',
                'image'    => home_url( '/wp-content/uploads/2026/07/founder-project-rewinder.webp' ),
            ],
            [
                'title'    => 'میز بالابر قیچی هیدرولیکی صنعتی (Scissor Lift Table)',
                'category' => 'مکانیزم‌های هیدرولیک، ایستگاه‌های کارگاهی و انبارداری',
                'image'    => home_url( '/wp-content/uploads/2026/07/founder-project-scissor-lift.webp' ),
            ],
            [
                'title'    => 'خشک‌کن کانوایری صنعتی هوای گرم (Conveyor Belt Dryer)',
                'category' => 'خطوط خشک‌کن تونلی، چاپ سیلک و صنایع فرآوری',
                'image'    => home_url( '/wp-content/uploads/2026/07/founder-project-conveyor-dryer.webp' ),
            ],
            [
                'title'    => 'شاسی و استراکچر ماشین دوخت و پرفراژ کیسه پلاستیک',
                'category' => 'سازه‌های شیت‌متال دقیق، برش لیزر و ماشین‌کاری CNC',
                'image'    => home_url( '/wp-content/uploads/2026/07/founder-project-plastic-bag.webp' ),
            ],
        ];
    }

    return [
        'id'               => $id,
        'name'             => $clean_name,
        'experience_years' => $dynamic_years,
        'photo_url'        => $photo_url,
        'role_badge'    => $read_meta( '_md_member_role_badge', $is_founder 
            ? 'بنیان‌گذار و طراح ارشد مکانیزم‌ها // دانش‌آموخته MBA' 
            : 'مهندس مکانیک و طراح مکانیزم‌های صنعتی' ),
        'subtitle'      => $subtitle,
        'org_hierarchy' => $read_meta( '_md_member_org_hierarchy', $is_founder 
            ? 'ماشین دیزاین / هیئت موسس / مدیرعامل / سرپرست دپارتمان طراحی ماشین‌آلات و مهندسی معکوس' 
            : 'ماشین دیزاین / دپارتمان فنی و مهندسی / متخصص ارشد طراحی مکانیزم' ),
        'status_badge'  => $read_meta( '_md_member_status_badge', $is_founder 
            ? 'FOUNDER // CHIEF MECHANICAL ARCHITECT // MASHHAD' 
            : 'ENGINEERING TEAM // SPECIALIST // MASHHAD' ),
        'photo_badge'   => $read_meta( '_md_member_photo_badge', 'ACTIVE // STUDIO & WORKSHOP' ),
        
        'manifesto' => md_enforce_manifesto_balance( $raw_manifesto, 1100 ),

        'metrics' => [
            [
                'val'   => $read_meta( '_md_metric1_val', $dynamic_years ),
                'label' => $read_meta( '_md_metric1_label', $is_founder 
                    ? 'سال تسلط میدانی بر طراحی ماشین‌آلات و سرپرستی کارگاهی' 
                    : 'سال سابقه طراحی مهندسی و نظارت بر ساخت تجهیزات' ),
                'mono'  => true,
            ],
            [
                'val'   => $read_meta( '_md_metric2_val', 'Grade A' ),
                'label' => $read_meta( '_md_metric2_label', 'ارزیابی و انطباق DFMA (طراحی برای ساخت و مونتاژ اقتصادی)' ),
                'mono'  => true,
            ],
            [
                'val'   => $read_meta( '_md_metric3_val', $is_founder ? 'Tech + MBA' : 'DIN / ISO' ),
                'label' => $read_meta( '_md_metric3_label', $is_founder 
                    ? 'همگرایی طراحی مکانیک با مدیریت CAPEX و کاهش ریسک ساخت' 
                    : 'تدوین نقشه‌های اجرایی، استاندارد GD&T و تلرانس‌گذاری دقیق' ),
                'mono'  => true,
            ],
            [
                'val'   => $read_meta( '_md_metric4_val', $is_founder ? 'DIN / ISO' : 'FEA Validated' ),
                'label' => $read_meta( '_md_metric4_label', $is_founder 
                    ? 'تدوین نقشه‌های اجرایی، استاندارد GD&T و تلرانس‌گذاری دقیق' 
                    : 'اعتبارسنجی تحلیلی سازه‌ها و اجزای مکانیکی بحرانی' ),
                'mono'  => true,
            ],
        ],

        'social' => [
            'linkedin'  => $read_meta( '_md_member_linkedin', $is_founder ? 'https://linkedin.com/in/hosseinvatandoust' : '' ),
            'instagram' => $read_meta( '_md_member_instagram', $is_founder ? 'https://instagram.com/h.vatan.doust' : '' ),
            'grabcad'   => $read_meta( '_md_member_grabcad', $is_founder ? 'https://grabcad.com/hossein.vatandoust-1/models' : '' ),
            'email'     => $read_meta( '_md_member_email', $is_founder ? 'hosseinvatandoust@machinedesign.ir' : '' ),
            'phone'     => $read_meta( '_md_member_phone', $is_founder ? '09358689829' : '' ),
        ],

        'pillars_heading' => $read_meta( '_md_pillars_heading', 'ارکان چهارگانه رهبری فنی' ),
        'pillars'   => $pillars,
        'guarantee' => [
            'title' => $read_meta( '_md_guarantee_title', 'تضمین ساخت‌پذیری قطعات و انطباق استاندارد' ),
            'desc'  => $read_meta( '_md_guarantee_desc', 'تعهد طراحی بدون خطا بر پایه استانداردهای ایمنی ISO 12100 و فرآیندهای براده‌برداری کارگاهی' ),
        ],
        'skills'    => $skills,
        'projects'  => $projects,
    ];
}

/**
 * 8. Auto-Seed Initial Founder Post (Hossein Vatandoust)
 */
function md_maybe_seed_founder_member() {
    $existing = get_page_by_path( 'hossein-vatandoust', OBJECT, 'team_member' );
    if ( $existing ) {
        return;
    }

    $post_data = [
        'post_title'   => 'مهندس حسین وطن‌دوست',
        'post_name'    => 'hossein-vatandoust',
        'post_status'  => 'publish',
        'post_type'    => 'team_member',
        'post_content' => 'بیش از ۱۵ سال تمرکز بر طراحی مکانیکی، حل مسائل ارتعاشی و ساخت ماشین‌آلات سفارشی خطوط تولید در کارخانجات صنعتی ایران.',
        'post_excerpt' => 'بنیان‌گذار ماشین دیزاین، مهندس مکانیک ساخت و تولید، طراح ارشد ماشین‌آلات صنعتی و دانش‌آموخته MBA با تمرکز بر متدولوژی DFMA.',
    ];

    $post_id = wp_insert_post( $post_data );
    if ( is_wp_error( $post_id ) || ! $post_id ) {
        return;
    }

    // Populate all default metas
    update_post_meta( $post_id, '_md_member_role_badge', 'بنیان‌گذار و طراح ارشد مکانیزم‌ها // دانش‌آموخته MBA' );
    update_post_meta( $post_id, '_md_member_org_hierarchy', 'ماشین دیزاین / هیئت موسس / مدیرعامل / سرپرست دپارتمان طراحی ماشین‌آلات و مهندسی معکوس' );
    update_post_meta( $post_id, '_md_member_status_badge', 'FOUNDER // CHIEF MECHANICAL ARCHITECT // MASHHAD' );
    update_post_meta( $post_id, '_md_member_photo_badge', 'ACTIVE // STUDIO & WORKSHOP' );
    update_post_meta( $post_id, '_md_member_manifesto_p1', 'بیش از ۱۵ سال تمرکز بر طراحی مکانیکی، حل مسائل ارتعاشی و ساخت ماشین‌آلات سفارشی خطوط تولید در کارخانجات صنعتی ایران.' );
    update_post_meta( $post_id, '_md_member_manifesto_p2', 'تمرکز بر پیاده‌سازی متدولوژی DFMA (طراحی مقید به ساخت و مونتاژ)، تحلیل اقتصادی طرح‌ها با پشتوانه MBA و اطمینان از خروجی‌های اجرایی بدون ریسک دوباره‌کاری کارگاهی.' );
    update_post_meta( $post_id, '_md_member_manifesto_p3', 'رویکرد ما تولید مستندات دقیق، نقشه‌های اجرایی منطبق بر استانداردهای DIN/ISO و کاهش حداکثری هزینه‌های سرمایه‌ای (CAPEX) کارفرما پیش از براده‌برداری است.' );

    update_post_meta( $post_id, '_md_metric_start_year', '2011' );
    update_post_meta( $post_id, '_md_metric1_label', 'سال تسلط میدانی بر طراحی ماشین‌آلات و سرپرستی کارگاهی' );
    update_post_meta( $post_id, '_md_metric2_val', 'Grade A' );
    update_post_meta( $post_id, '_md_metric2_label', 'ارزیابی و انطباق DFMA (طراحی برای ساخت و مونتاژ اقتصادی)' );
    update_post_meta( $post_id, '_md_metric3_val', 'Tech + MBA' );
    update_post_meta( $post_id, '_md_metric3_label', 'همگرایی طراحی مکانیک با مدیریت CAPEX و کاهش ریسک ساخت' );
    update_post_meta( $post_id, '_md_metric4_val', 'DIN / ISO' );
    update_post_meta( $post_id, '_md_metric4_label', 'تدوین نقشه‌های اجرایی، استاندارد GD&T و تلرانس‌گذاری دقیق' );

    update_post_meta( $post_id, '_md_member_linkedin', 'https://linkedin.com/in/hosseinvatandoust' );
    update_post_meta( $post_id, '_md_member_instagram', 'https://instagram.com/h.vatan.doust' );
    update_post_meta( $post_id, '_md_member_grabcad', 'https://grabcad.com/hossein.vatandoust-1/models' );
    update_post_meta( $post_id, '_md_member_email', 'hosseinvatandoust@machinedesign.ir' );
    update_post_meta( $post_id, '_md_member_phone', '09358689829' );

    update_post_meta( $post_id, '_md_pillar1_title', 'طراحی مقید به ساخت و مونتاژ (DFMA)' );
    update_post_meta( $post_id, '_md_pillar1_desc', 'طراحی قطعات و مجموعه‌ها با درک مستقیم فرآیندهای تراشکاری، فرزکاری CNC، برش لیزر و مونتاژ، جهت حذف خطاهای کارگاهی پیش از ساخت.' );
    update_post_meta( $post_id, '_md_pillar2_title', 'مدیریت سرمایه و ریسک ساخت (MBA)' );
    update_post_meta( $post_id, '_md_pillar2_desc', 'تحلیل اقتصادی بازگشت سرمایه (ROI)، تخمین دقیق بودجه ساخت (CAPEX/OPEX) و تصمیم‌گیری ساخت یا خرید (Make or Buy) بر مبنای داده‌های مالی.' );
    update_post_meta( $post_id, '_md_pillar3_title', 'شبیه‌سازی تنش و ارتعاشات مکانیزم' );
    update_post_meta( $post_id, '_md_pillar3_desc', 'اعتبارسنجی مقاومت سازه و اجزای مکانیکی بحرانی با نرم‌افزارهای تحلیلی، پیش‌بینی خستگی قطعات و تعیین دقیق ابعاد یاتاقان‌ها و شفت‌ها.' );

    update_post_meta( $post_id, '_md_skill1_name', 'طراحی صنعتی پیشرفته سالیدورکس و متدولوژی DFMA' );
    update_post_meta( $post_id, '_md_skill1_pct', '95' );
    update_post_meta( $post_id, '_md_skill2_name', 'مدیریت ریسک سرمایه و بودجه‌بندی خطوط تولید (MBA)' );
    update_post_meta( $post_id, '_md_skill2_pct', '92' );
    update_post_meta( $post_id, '_md_skill3_name', 'شبیه‌سازی تنش، خستگی و اجزای محدود با Ansys' );
    update_post_meta( $post_id, '_md_skill3_pct', '88' );
    update_post_meta( $post_id, '_md_skill4_name', 'استانداردهای شیت‌متال، تلرانس GD&T و برش لیزر' );
    update_post_meta( $post_id, '_md_skill4_pct', '96' );
    update_post_meta( $post_id, '_md_skill5_name', 'اتوماسیون، پایش وضعیت و سنسورینگ ماشین‌آلات' );
    update_post_meta( $post_id, '_md_skill5_pct', '82' );

    update_post_meta( $post_id, '_md_p1_title', 'خط رول‌کن دوار بدون مغزی (Coreless Turret Rewinder)' );
    update_post_meta( $post_id, '_md_p1_cat', 'صنایع پلیمری، فیلم نایلون و بسته‌بندی پیوسته' );
    update_post_meta( $post_id, '_md_p1_img', home_url( '/wp-content/uploads/2026/07/founder-project-rewinder.webp' ) );

    update_post_meta( $post_id, '_md_p2_title', 'میز بالابر قیچی هیدرولیکی صنعتی (Scissor Lift Table)' );
    update_post_meta( $post_id, '_md_p2_cat', 'مکانیزم‌های هیدرولیک، ایستگاه‌های کارگاهی و انبارداری' );
    update_post_meta( $post_id, '_md_p2_img', home_url( '/wp-content/uploads/2026/07/founder-project-scissor-lift.webp' ) );

    update_post_meta( $post_id, '_md_p3_title', 'خشک‌کن کانوایری صنعتی هوای گرم (Conveyor Belt Dryer)' );
    update_post_meta( $post_id, '_md_p3_cat', 'خطوط خشک‌کن تونلی، چاپ سیلک و صنایع فرآوری' );
    update_post_meta( $post_id, '_md_p3_img', home_url( '/wp-content/uploads/2026/07/founder-project-conveyor-dryer.webp' ) );

    update_post_meta( $post_id, '_md_p4_title', 'شاسی و استراکچر ماشین دوخت و پرفراژ کیسه پلاستیک' );
    update_post_meta( $post_id, '_md_p4_cat', 'سازه‌های شیت‌متال دقیق، برش لیزر و ماشین‌کاری CNC' );
    update_post_meta( $post_id, '_md_p4_img', home_url( '/wp-content/uploads/2026/07/founder-project-plastic-bag.webp' ) );
}
add_action( 'admin_init', 'md_maybe_seed_founder_member' );
add_action( 'init', 'md_maybe_seed_founder_member', 99 );
