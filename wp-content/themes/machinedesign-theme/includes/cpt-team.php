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
        'supports'           => [ 'title', 'editor', 'thumbnail', 'excerpt' ],
        'show_in_rest'       => true,
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
 * 4. Register Custom Meta Boxes for team_member
 */
function md_add_team_member_meta_boxes() {
    add_meta_box(
        'md_team_member_details',
        'تنظیمات پورتفولیو و مشخصات مهندسی عضو تیم (Bento Portfolio Controls)',
        'md_render_team_member_meta_box',
        'team_member',
        'normal',
        'high'
    );
}
add_action( 'add_meta_boxes', 'md_add_team_member_meta_boxes' );

function md_enqueue_team_media_uploader( $hook ) {
    if ( 'post.php' !== $hook && 'post-new.php' !== $hook ) {
        return;
    }
    $screen = get_current_screen();
    if ( $screen && 'team_member' === $screen->post_type ) {
        wp_enqueue_media();
    }
}
add_action( 'admin_enqueue_scripts', 'md_enqueue_team_media_uploader' );


/**
 * 5. Render Meta Box Fields in WP Admin
 */
function md_render_team_member_meta_box( $post ) {
    wp_nonce_field( 'md_save_team_member_meta', 'md_team_member_nonce' );

    $is_founder = ( $post && $post->post_name === 'hossein-vatandoust' );

    // Retrieve saved meta with contextual defaults
    if ( $is_founder ) {
        $role_badge    = get_post_meta( $post->ID, '_md_member_role_badge', true ) ?: 'بنیان‌گذار و طراح ارشد مکانیزم‌ها // دانش‌آموخته MBA';
        $subtitle      = get_post_meta( $post->ID, '_md_member_subtitle', true ) ?: 'طراح ارشد ماشین‌آلات صنعتی، معمار اکوسیستم فنی و بنیان‌گذار ماشین دیزاین';
        $org_hierarchy = get_post_meta( $post->ID, '_md_member_org_hierarchy', true ) ?: 'ماشین دیزاین / هیئت موسس / مدیرعامل / سرپرست دپارتمان طراحی ماشین‌آلات و مهندسی معکوس';
        $status_badge  = get_post_meta( $post->ID, '_md_member_status_badge', true ) ?: 'FOUNDER // CHIEF MECHANICAL ARCHITECT // MASHHAD';
        $photo_badge   = get_post_meta( $post->ID, '_md_member_photo_badge', true ) ?: 'ACTIVE // STUDIO & WORKSHOP';
    } else {
        $role_badge    = get_post_meta( $post->ID, '_md_member_role_badge', true ) ?: 'مهندس مکانیک و طراح مکانیزم‌های صنعتی';
        $subtitle      = get_post_meta( $post->ID, '_md_member_subtitle', true ) ?: ( $post->post_excerpt ?: 'کارشناس ارشد طراحی، شبیه‌سازی و مهندسی معکوس تجهیزات صنعتی' );
        $org_hierarchy = get_post_meta( $post->ID, '_md_member_org_hierarchy', true ) ?: 'ماشین دیزاین / دپارتمان فنی و مهندسی / متخصص ارشد طراحی مکانیزم';
        $status_badge  = get_post_meta( $post->ID, '_md_member_status_badge', true ) ?: 'ENGINEERING TEAM // SPECIALIST // MASHHAD';
        $photo_badge   = get_post_meta( $post->ID, '_md_member_photo_badge', true ) ?: 'ACTIVE // STUDIO & WORKSHOP';
    }
    $manifesto_p1    = get_post_meta( $post->ID, '_md_member_manifesto_p1', true );
    $manifesto_p2    = get_post_meta( $post->ID, '_md_member_manifesto_p2', true );
    $manifesto_p3    = get_post_meta( $post->ID, '_md_member_manifesto_p3', true );

    // 4 Trust Metrics
    $start_year      = get_post_meta( $post->ID, '_md_metric_start_year', true ) ?: '2011';
    $metric1_val     = get_post_meta( $post->ID, '_md_metric1_val', true );
    $metric1_label   = get_post_meta( $post->ID, '_md_metric1_label', true ) ?: 'سال تسلط میدانی بر طراحی ماشین‌آلات و سرپرستی کارگاهی';
    $pillars_heading = get_post_meta( $post->ID, '_md_pillars_heading', true ) ?: 'ارکان چهارگانه رهبری فنی';

    $metric2_val     = get_post_meta( $post->ID, '_md_metric2_val', true ) ?: 'Grade A';
    $metric2_label   = get_post_meta( $post->ID, '_md_metric2_label', true ) ?: 'ارزیابی و انطباق DFMA (طراحی برای ساخت و مونتاژ اقتصادی)';

    $metric3_val     = get_post_meta( $post->ID, '_md_metric3_val', true ) ?: 'Tech + MBA';
    $metric3_label   = get_post_meta( $post->ID, '_md_metric3_label', true ) ?: 'همگرایی طراحی مکانیک با مدیریت CAPEX و کاهش ریسک ساخت';

    $metric4_val     = get_post_meta( $post->ID, '_md_metric4_val', true ) ?: 'DIN / ISO';
    $metric4_label   = get_post_meta( $post->ID, '_md_metric4_label', true ) ?: 'تدوین نقشه‌های اجرایی، استاندارد GD&T و تلرانس‌گذاری دقیق';

    // Social Links
    $linkedin        = get_post_meta( $post->ID, '_md_member_linkedin', true ) ?: 'https://linkedin.com/in/hosseinvatandoust';
    $instagram       = get_post_meta( $post->ID, '_md_member_instagram', true ) ?: 'https://instagram.com/h.vatan.doust';
    $grabcad         = get_post_meta( $post->ID, '_md_member_grabcad', true ) ?: 'https://grabcad.com/hossein.vatandoust-1/models';
    $email           = get_post_meta( $post->ID, '_md_member_email', true ) ?: 'hosseinvatandoust@machinedesign.ir';
    $phone           = get_post_meta( $post->ID, '_md_member_phone', true ) ?: '09358689829';

    // Four Pillars
    $pillar1_title   = get_post_meta( $post->ID, '_md_pillar1_title', true ) ?: 'طراحی مقید به ساخت و مونتاژ (DFMA)';
    $pillar1_desc    = get_post_meta( $post->ID, '_md_pillar1_desc', true ) ?: 'طراحی قطعات و مجموعه‌ها با درک مستقیم فرآیندهای تراشکاری، فرزکاری CNC، برش لیزر و مونتاژ، جهت حذف خطاهای کارگاهی پیش از ساخت.';

    $pillar2_title   = get_post_meta( $post->ID, '_md_pillar2_title', true ) ?: 'مدیریت سرمایه و ریسک ساخت (MBA)';
    $pillar2_desc    = get_post_meta( $post->ID, '_md_pillar2_desc', true ) ?: 'تحلیل اقتصادی بازگشت سرمایه (ROI)، تخمین دقیق بودجه ساخت (CAPEX/OPEX) و تصمیم‌گیری ساخت یا خرید (Make or Buy) بر مبنای داده‌های مالی.';

    $pillar3_title   = get_post_meta( $post->ID, '_md_pillar3_title', true ) ?: 'شبیه‌سازی تنش و ارتعاشات مکانیزم';
    $pillar3_desc    = get_post_meta( $post->ID, '_md_pillar3_desc', true ) ?: 'اعتبارسنجی مقاومت سازه و اجزای مکانیکی بحرانی با نرم‌افزارهای تحلیلی، پیش‌بینی خستگی قطعات و تعیین دقیق ابعاد یاتاقان‌ها و شفت‌ها.';

    $pillar4_title   = get_post_meta( $post->ID, '_md_pillar4_title', true ) ?: 'تدوین نقشه‌های ساخت، GD&T و تلرانس‌گذاری دقیق';
    $pillar4_desc    = get_post_meta( $post->ID, '_md_pillar4_desc', true ) ?: 'تهیه نقشه‌های دوبعدی دقیق ساخت، انطباقات تلرانسی H7/g6 بر مبنای ASME Y14.5 / DIN ISO 2768 و تعیین دقیق صافی سطح (Ra) جهت حذف ابهام در ماشین‌کاری CNC.';

    $guarantee_title = get_post_meta( $post->ID, '_md_guarantee_title', true ) ?: 'تضمین ساخت‌پذیری قطعات و انطباق استاندارد';
    $guarantee_desc  = get_post_meta( $post->ID, '_md_guarantee_desc', true ) ?: 'تعهد طراحی بدون خطا بر پایه استانداردهای ایمنی ISO 12100 و فرآیندهای براده‌برداری کارگاهی';

    // Skills Matrix
    $skill1_name     = get_post_meta( $post->ID, '_md_skill1_name', true ) ?: 'طراحی صنعتی پیشرفته سالیدورکس و متدولوژی DFMA';
    $skill1_pct      = get_post_meta( $post->ID, '_md_skill1_pct', true ) ?: '95';

    $skill2_name     = get_post_meta( $post->ID, '_md_skill2_name', true ) ?: 'مدیریت ریسک سرمایه و بودجه‌بندی خطوط تولید (MBA)';
    $skill2_pct      = get_post_meta( $post->ID, '_md_skill2_pct', true ) ?: '92';

    $skill3_name     = get_post_meta( $post->ID, '_md_skill3_name', true ) ?: 'شبیه‌سازی تنش، خستگی و اجزای محدود با Ansys';
    $skill3_pct      = get_post_meta( $post->ID, '_md_skill3_pct', true ) ?: '88';

    $skill4_name     = get_post_meta( $post->ID, '_md_skill4_name', true ) ?: 'استانداردهای شیت‌متال، تلرانس GD&T و برش لیزر';
    $skill4_pct      = get_post_meta( $post->ID, '_md_skill4_pct', true ) ?: '96';

    $skill5_name     = get_post_meta( $post->ID, '_md_skill5_name', true ) ?: 'اتوماسیون، پایش وضعیت و سنسورینگ ماشین‌آلات';
    $skill5_pct      = get_post_meta( $post->ID, '_md_skill5_pct', true ) ?: '82';

    // 4 Project Slides
    $p1_title        = get_post_meta( $post->ID, '_md_p1_title', true ) ?: 'خط رول‌کن دوار بدون مغزی (Coreless Turret Rewinder)';
    $p1_cat          = get_post_meta( $post->ID, '_md_p1_cat', true ) ?: 'صنایع پلیمری، فیلم نایلون و بسته‌بندی پیوسته';
    $p1_img          = get_post_meta( $post->ID, '_md_p1_img', true ) ?: home_url( '/wp-content/uploads/2026/07/founder-project-rewinder.webp' );

    $p2_title        = get_post_meta( $post->ID, '_md_p2_title', true ) ?: 'میز بالابر قیچی هیدرولیکی صنعتی (Scissor Lift Table)';
    $p2_cat          = get_post_meta( $post->ID, '_md_p2_cat', true ) ?: 'مکانیزم‌های هیدرولیک، ایستگاه‌های کارگاهی و انبارداری';
    $p2_img          = get_post_meta( $post->ID, '_md_p2_img', true ) ?: home_url( '/wp-content/uploads/2026/07/founder-project-scissor-lift.webp' );

    $p3_title        = get_post_meta( $post->ID, '_md_p3_title', true ) ?: 'خشک‌کن کانوایری صنعتی هوای گرم (Conveyor Belt Dryer)';
    $p3_cat          = get_post_meta( $post->ID, '_md_p3_cat', true ) ?: 'خطوط خشک‌کن تونلی، چاپ سیلک و صنایع فرآوری';
    $p3_img          = get_post_meta( $post->ID, '_md_p3_img', true ) ?: home_url( '/wp-content/uploads/2026/07/founder-project-conveyor-dryer.webp' );

    $p4_title        = get_post_meta( $post->ID, '_md_p4_title', true ) ?: 'شاسی و استراکچر ماشین دوخت و پرفراژ کیسه پلاستیک';
    $p4_cat          = get_post_meta( $post->ID, '_md_p4_cat', true ) ?: 'سازه‌های شیت‌متال دقیق، برش لیزر و ماشین‌کاری CNC';
    $p4_img          = get_post_meta( $post->ID, '_md_p4_img', true ) ?: home_url( '/wp-content/uploads/2026/07/founder-project-plastic-bag.webp' );

    $dynamic_years_preview = md_calc_experience_years( $start_year );
    ?>
    <style>
        .md-admin-section { background:#fff; border:1px solid #ccd0d4; padding:16px 20px; margin-bottom:18px; border-radius:8px; }
        .md-admin-section h3 { margin-top:0; margin-bottom:14px; font-size:15px; font-weight:700; color:#1d2327; border-bottom:1px solid #f0f0f1; padding-bottom:10px; display:flex; align-items:center; gap:8px; } /* taste-skill-ignore: wp-admin panel header */
        .md-admin-grid { display:grid; grid-template-columns:1fr 1fr; gap:14px; }
        .md-admin-grid-full { grid-column:1 / -1; }
        .md-admin-field label { display:block; font-weight:600; font-size:13px; margin-bottom:5px; color:#2c3338; }
        .md-admin-field input[type="text"], .md-admin-field input[type="number"], .md-admin-field input[type="url"], .md-admin-field textarea { width:100%; border-radius:4px; border:1px solid #8c8f94; padding:6px 10px; }
        .md-admin-field textarea { min-height:65px; line-height:1.6; }
        .md-admin-field .desc { font-size:11px; color:#646970; margin-top:4px; }
        .md-badge-highlight { background:#D97706; color:#0a0e17; font-weight:700; padding:2px 8px; border-radius:4px; font-size:11px; }
    </style>

    <!-- SECTION 1: IDENTITY & ORGANIZATIONAL HIERARCHY -->
    <div class="md-admin-section">
        <h3>
            <span>هویت سازمانی و سلسله‌مراتب مدیریتی</span>
        </h3>
        <div class="md-admin-grid">
            <div class="md-admin-field md-admin-grid-full">
                <label for="_md_member_org_hierarchy">سلسله‌مراتب سازمانی (Hierarchy Path)</label>
                <input type="text" id="_md_member_org_hierarchy" name="_md_member_org_hierarchy" value="<?php echo esc_attr( $org_hierarchy ); ?>">
                <div class="desc">ترتیب گره‌ها با اسلش جدا شوند. مثال: ماشین دیزاین / هیئت موسس / مدیرعامل / سرپرست دپارتمان...</div>
            </div>
            <div class="md-admin-field">
                <label for="_md_member_role_badge">برچسب سبز تخصصی (بالای نام عضو)</label>
                <input type="text" id="_md_member_role_badge" name="_md_member_role_badge" value="<?php echo esc_attr( $role_badge ); ?>">
            </div>
            <div class="md-admin-field">
                <label for="_md_member_subtitle">زیرعنوان و معرفی سمت (زیر نام عضو)</label>
                <input type="text" id="_md_member_subtitle" name="_md_member_subtitle" value="<?php echo esc_attr( $subtitle ); ?>">
                <div class="desc">تک‌سطری. مثال: طراح ارشد ماشین‌آلات صنعتی، معمار اکوسیستم فنی و بنیان‌گذار ماشین دیزاین</div>
            </div>
            <div class="md-admin-field">
                <label for="_md_member_status_badge">برچسب وضعیت تله‌متری لاتین (بالای صفحه)</label>
                <input type="text" id="_md_member_status_badge" name="_md_member_status_badge" value="<?php echo esc_attr( $status_badge ); ?>" dir="ltr">
            </div>
            <div class="md-admin-field">
                <label for="_md_member_photo_badge">برچسب روی پرتره رسمی</label>
                <input type="text" id="_md_member_photo_badge" name="_md_member_photo_badge" value="<?php echo esc_attr( $photo_badge ); ?>" dir="ltr">
            </div>
            <div class="md-admin-field md-admin-grid-full">
                <label for="_md_member_manifesto_p1">پاراگراف ۱ مانیفست مهندسی</label>
                <textarea id="_md_member_manifesto_p1" name="_md_member_manifesto_p1"><?php echo esc_textarea( $manifesto_p1 ); ?></textarea>
            </div>
            <div class="md-admin-field md-admin-grid-full">
                <label for="_md_member_manifesto_p2">پاراگراف ۲ مانیفست مهندسی</label>
                <textarea id="_md_member_manifesto_p2" name="_md_member_manifesto_p2"><?php echo esc_textarea( $manifesto_p2 ); ?></textarea>
            </div>
            <div class="md-admin-field md-admin-grid-full">
                <label for="_md_member_manifesto_p3">پاراگراف ۳ مانیفست مهندسی</label>
                <textarea id="_md_member_manifesto_p3" name="_md_member_manifesto_p3"><?php echo esc_textarea( $manifesto_p3 ); ?></textarea>
            </div>
        </div>
    </div>

    <!-- SECTION 2: 4 TRUST METRICS (DYNAMIC CONSOLE) -->
    <div class="md-admin-section">
        <h3>
            <span>۴ سنجه اعتمادساز و شاخص‌های اعتباری (کنسول سنجه‌ها)</span>
            <span class="md-badge-highlight">روانشناسی B2B و بدون اغراق</span>
        </h3>
        <p style="font-size:12px; color:#50575e; margin-top:-5px; margin-bottom:12px;">
            این سنجه‌ها بر پایه روانشناسی تصمیم‌گیری کارخانه‌داران و مدیران صنعتی تنظیم شده‌اند تا به جای اعداد کاذب (مثل ۱۰۰٪ انطباق)، صلاحیت و استانداردهای واقعی را منعکس کنند.
        </p>

        <div class="md-admin-grid">
            <!-- Metric 1: Dynamic Years -->
            <div class="md-admin-field">
                <label for="_md_metric_start_year">
                    سال میلادی شروع فعالیت (جهت محاسبه خودکار سابقه):
                    <strong>[پیش‌نمایش کنونی: <?php echo esc_html( $dynamic_years_preview ); ?> سال]</strong>
                </label>
                <input type="number" id="_md_metric_start_year" name="_md_metric_start_year" value="<?php echo esc_attr( $start_year ); ?>" min="1980" max="<?php echo date('Y'); ?>">
                <div class="desc">مقدار نمایش‌داده‌شده با گذشت هر سال میلادی به صورت خودکار یک سال افزایش می‌یابد.</div>
            </div>
            <div class="md-admin-field">
                <label for="_md_metric1_label">زیرعنوان سنجه ۱ (سابقه)</label>
                <input type="text" id="_md_metric1_label" name="_md_metric1_label" value="<?php echo esc_attr( $metric1_label ); ?>">
            </div>

            <!-- Metric 2: DFMA Grade -->
            <div class="md-admin-field">
                <label for="_md_metric2_val">سنجه ۲ - مقدار / علامت (پیش‌فرض: Grade A یا A+)</label>
                <input type="text" id="_md_metric2_val" name="_md_metric2_val" value="<?php echo esc_attr( $metric2_val ); ?>" dir="ltr">
            </div>
            <div class="md-admin-field">
                <label for="_md_metric2_label">زیرعنوان سنجه ۲</label>
                <input type="text" id="_md_metric2_label" name="_md_metric2_label" value="<?php echo esc_attr( $metric2_label ); ?>">
            </div>

            <!-- Metric 3: Dual Competency MBA -->
            <div class="md-admin-field">
                <label for="_md_metric3_val">سنجه ۳ - مقدار / علامت (پیش‌فرض: Tech + MBA)</label>
                <input type="text" id="_md_metric3_val" name="_md_metric3_val" value="<?php echo esc_attr( $metric3_val ); ?>" dir="ltr">
            </div>
            <div class="md-admin-field">
                <label for="_md_metric3_label">زیرعنوان سنجه ۳</label>
                <input type="text" id="_md_metric3_label" name="_md_metric3_label" value="<?php echo esc_attr( $metric3_label ); ?>">
            </div>

            <!-- Metric 4: Standards DIN / ISO -->
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

    <!-- SECTION 3: SOCIAL & CONTACT CHANNELS -->
    <div class="md-admin-section">
        <h3>
            <span>راه‌های ارتباطی و شبکه‌های تخصصی</span>
        </h3>
        <div class="md-admin-grid">
            <div class="md-admin-field">
                <label for="_md_member_linkedin">لینک پروفایل لینکدین (LinkedIn)</label>
                <input type="url" id="_md_member_linkedin" name="_md_member_linkedin" value="<?php echo esc_url( $linkedin ); ?>" dir="ltr">
            </div>
            <div class="md-admin-field">
                <label for="_md_member_instagram">لینک صفحه اینستاگرام (Instagram)</label>
                <input type="url" id="_md_member_instagram" name="_md_member_instagram" value="<?php echo esc_url( $instagram ); ?>" dir="ltr">
            </div>
            <div class="md-admin-field">
                <label for="_md_member_grabcad">لینک پایگاه گراب‌کد (GrabCAD Portfolio)</label>
                <input type="url" id="_md_member_grabcad" name="_md_member_grabcad" value="<?php echo esc_url( $grabcad ); ?>" dir="ltr">
            </div>
            <div class="md-admin-field">
                <label for="_md_member_email">آدرس ایمیل مستقیم</label>
                <input type="text" id="_md_member_email" name="_md_member_email" value="<?php echo esc_attr( $email ); ?>" dir="ltr">
            </div>
            <div class="md-admin-field">
                <label for="_md_member_phone">شماره تماس مستقیم (موبایل)</label>
                <input type="text" id="_md_member_phone" name="_md_member_phone" value="<?php echo esc_attr( $phone ); ?>" dir="ltr">
            </div>
        </div>
    </div>

    <!-- SECTION 4: FOUR PILLARS (ارکان چهارگانه) -->
    <div class="md-admin-section">
        <h3>
            <span>ارکان چهارگانه ارزش‌آفرینی مهندسی (Four Pillars)</span>
        </h3>
        <div class="md-admin-grid">
            <div class="md-admin-field">
                <label for="_md_pillar1_title">عنوان رکن ۱</label>
                <input type="text" id="_md_pillar1_title" name="_md_pillar1_title" value="<?php echo esc_attr( $pillar1_title ); ?>">
            </div>
            <div class="md-admin-field">
                <label for="_md_pillar1_desc">شرح رکن ۱</label>
                <textarea id="_md_pillar1_desc" name="_md_pillar1_desc"><?php echo esc_textarea( $pillar1_desc ); ?></textarea>
            </div>

            <div class="md-admin-field">
                <label for="_md_pillar2_title">عنوان رکن ۲</label>
                <input type="text" id="_md_pillar2_title" name="_md_pillar2_title" value="<?php echo esc_attr( $pillar2_title ); ?>">
            </div>
            <div class="md-admin-field">
                <label for="_md_pillar2_desc">شرح رکن ۲</label>
                <textarea id="_md_pillar2_desc" name="_md_pillar2_desc"><?php echo esc_textarea( $pillar2_desc ); ?></textarea>
            </div>

            <div class="md-admin-field">
                <label for="_md_pillar3_title">عنوان رکن ۳</label>
                <input type="text" id="_md_pillar3_title" name="_md_pillar3_title" value="<?php echo esc_attr( $pillar3_title ); ?>">
            </div>
            <div class="md-admin-field">
                <label for="_md_pillar3_desc">شرح رکن ۳</label>
                <textarea id="_md_pillar3_desc" name="_md_pillar3_desc"><?php echo esc_textarea( $pillar3_desc ); ?></textarea>
            </div>

            <div class="md-admin-field">
                <label for="_md_pillar4_title">عنوان رکن ۴</label>
                <input type="text" id="_md_pillar4_title" name="_md_pillar4_title" value="<?php echo esc_attr( $pillar4_title ); ?>">
            </div>
            <div class="md-admin-field">
                <label for="_md_pillar4_desc">شرح رکن ۴</label>
                <textarea id="_md_pillar4_desc" name="_md_pillar4_desc"><?php echo esc_textarea( $pillar4_desc ); ?></textarea>
            </div>

            <div class="md-admin-field">
                <label for="_md_guarantee_title">عنوان نشان تضمین کیفیت مهندسی (کنسول پایانی)</label>
                <input type="text" id="_md_guarantee_title" name="_md_guarantee_title" value="<?php echo esc_attr( $guarantee_title ); ?>">
            </div>
            <div class="md-admin-field">
                <label for="_md_guarantee_desc">شرح نشان تضمین کیفیت مهندسی</label>
                <textarea id="_md_guarantee_desc" name="_md_guarantee_desc"><?php echo esc_textarea( $guarantee_desc ); ?></textarea>
            </div>
        </div>
    </div>

    <!-- SECTION 5: SKILLS MATRIX -->
    <div class="md-admin-section">
        <h3>
            <span>نمودارها و ماتریس مهارت‌های فنی (Skills Matrix)</span>
        </h3>
        <div class="md-admin-grid">
            <div class="md-admin-field">
                <label for="_md_skill1_name">عنوان مهارت ۱</label>
                <input type="text" id="_md_skill1_name" name="_md_skill1_name" value="<?php echo esc_attr( $skill1_name ); ?>">
            </div>
            <div class="md-admin-field">
                <label for="_md_skill1_pct">درصد تسلط مهارت ۱ (۱ تا ۱۰۰)</label>
                <input type="number" id="_md_skill1_pct" name="_md_skill1_pct" value="<?php echo esc_attr( $skill1_pct ); ?>" min="1" max="100">
            </div>

            <div class="md-admin-field">
                <label for="_md_skill2_name">عنوان مهارت ۲</label>
                <input type="text" id="_md_skill2_name" name="_md_skill2_name" value="<?php echo esc_attr( $skill2_name ); ?>">
            </div>
            <div class="md-admin-field">
                <label for="_md_skill2_pct">درصد تسلط مهارت ۲ (۱ تا ۱۰۰)</label>
                <input type="number" id="_md_skill2_pct" name="_md_skill2_pct" value="<?php echo esc_attr( $skill2_pct ); ?>" min="1" max="100">
            </div>

            <div class="md-admin-field">
                <label for="_md_skill3_name">عنوان مهارت ۳</label>
                <input type="text" id="_md_skill3_name" name="_md_skill3_name" value="<?php echo esc_attr( $skill3_name ); ?>">
            </div>
            <div class="md-admin-field">
                <label for="_md_skill3_pct">درصد تسلط مهارت ۳ (۱ تا ۱۰۰)</label>
                <input type="number" id="_md_skill3_pct" name="_md_skill3_pct" value="<?php echo esc_attr( $skill3_pct ); ?>" min="1" max="100">
            </div>

            <div class="md-admin-field">
                <label for="_md_skill4_name">عنوان مهارت ۴</label>
                <input type="text" id="_md_skill4_name" name="_md_skill4_name" value="<?php echo esc_attr( $skill4_name ); ?>">
            </div>
            <div class="md-admin-field">
                <label for="_md_skill4_pct">درصد تسلط مهارت ۴ (۱ تا ۱۰۰)</label>
                <input type="number" id="_md_skill4_pct" name="_md_skill4_pct" value="<?php echo esc_attr( $skill4_pct ); ?>" min="1" max="100">
            </div>

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

    <!-- SECTION 6: FLAGSHIP PROJECT SLIDER -->
    <div class="md-admin-section">
        <h3>
            <span>اسلایدر پروژه‌های شاخص صنعتی (Project Slider)</span>
        </h3>
        <p style="font-size:12px; color:#50575e; margin-top:-5px; margin-bottom:12px;">
            آدرس تصاویر را می‌توانید مستقیماً از بخش «رسانه» وردپرس کپی کرده و در این کادرها قرار دهید.
        </p>
        <div class="md-admin-grid">
            <!-- Slide 1 -->
            <div class="md-admin-field">
                <label for="_md_p1_title">عنوان پروژه ۱</label>
                <input type="text" id="_md_p1_title" name="_md_p1_title" value="<?php echo esc_attr( $p1_title ); ?>">
            </div>
            <div class="md-admin-field">
                <label for="_md_p1_cat">دسته‌بندی / صنعت پروژه ۱</label>
                <input type="text" id="_md_p1_cat" name="_md_p1_cat" value="<?php echo esc_attr( $p1_cat ); ?>">
            </div>
            <div class="md-admin-field md-admin-grid-full">
                <label for="_md_p1_img">آدرس تصویر پروژه ۱ (URL)</label>
                <input type="text" id="_md_p1_img" name="_md_p1_img" value="<?php echo esc_url( $p1_img ); ?>" dir="ltr">
            </div>

            <!-- Slide 2 -->
            <div class="md-admin-field">
                <label for="_md_p2_title">عنوان پروژه ۲</label>
                <input type="text" id="_md_p2_title" name="_md_p2_title" value="<?php echo esc_attr( $p2_title ); ?>">
            </div>
            <div class="md-admin-field">
                <label for="_md_p2_cat">دسته‌بندی / صنعت پروژه ۲</label>
                <input type="text" id="_md_p2_cat" name="_md_p2_cat" value="<?php echo esc_attr( $p2_cat ); ?>">
            </div>
            <div class="md-admin-field md-admin-grid-full">
                <label for="_md_p2_img">آدرس تصویر پروژه ۲ (URL)</label>
                <input type="text" id="_md_p2_img" name="_md_p2_img" value="<?php echo esc_url( $p2_img ); ?>" dir="ltr">
            </div>

            <!-- Slide 3 -->
            <div class="md-admin-field">
                <label for="_md_p3_title">عنوان پروژه ۳</label>
                <input type="text" id="_md_p3_title" name="_md_p3_title" value="<?php echo esc_attr( $p3_title ); ?>">
            </div>
            <div class="md-admin-field">
                <label for="_md_p3_cat">دسته‌بندی / صنعت پروژه ۳</label>
                <input type="text" id="_md_p3_cat" name="_md_p3_cat" value="<?php echo esc_attr( $p3_cat ); ?>">
            </div>
            <div class="md-admin-field md-admin-grid-full">
                <label for="_md_p3_img">آدرس تصویر پروژه ۳ (URL)</label>
                <input type="text" id="_md_p3_img" name="_md_p3_img" value="<?php echo esc_url( $p3_img ); ?>" dir="ltr">
            </div>

            <!-- Slide 4 -->
            <div class="md-admin-field">
                <label for="_md_p4_title">عنوان پروژه ۴</label>
                <input type="text" id="_md_p4_title" name="_md_p4_title" value="<?php echo esc_attr( $p4_title ); ?>">
            </div>
            <div class="md-admin-field">
                <label for="_md_p4_cat">دسته‌بندی / صنعت پروژه ۴</label>
                <input type="text" id="_md_p4_cat" name="_md_p4_cat" value="<?php echo esc_attr( $p4_cat ); ?>">
            </div>
            <div class="md-admin-field md-admin-grid-full">
                <label for="_md_p4_img">آدرس تصویر پروژه ۴ (URL)</label>
                <input type="text" id="_md_p4_img" name="_md_p4_img" value="<?php echo esc_url( $p4_img ); ?>" dir="ltr">
            </div>
        </div>
    
    <div style="margin:14px 0;padding:12px 14px;background:#f8fafc;border:1px solid #cbd5e1;border-radius:6px;">
        <h4 style="margin:0 0 10px 0;">تنظیمات تکمیلی داینامیک (عنوان رکن اول متریک + عنوان بخش ارکان)</h4>
        <div style="display:grid;grid-template-columns:1fr 1fr;gap:12px;">
            <div>
                <label style="display:block;font-weight:600;margin-bottom:4px;">مقدار/عنوان کارت متریک ۱ (اختیاری - جایگزین سال سابقه):</label>
                <input type="text" name="_md_metric1_val" value="<?php echo esc_attr( get_post_meta( $post->ID, '_md_metric1_val', true ) ); ?>" placeholder="مثلاً: ۷+ یا ۱۵+" class="widefat" />
            </div>
            <div>
                <label style="display:block;font-weight:600;margin-bottom:4px;">عنوان بخش ارکان چهارگانه تخصص:</label>
                <input type="text" name="_md_pillars_heading" value="<?php echo esc_attr( get_post_meta( $post->ID, '_md_pillars_heading', true ) ?: 'ارکان چهارگانه رهبری فنی' ); ?>" class="widefat" />
            </div>
        </div>
    </div>
    <script>
    jQuery(function($){
        $('input[name^="_md_p"][name$="_img"]').each(function(){
            var $inp = $(this);
            if ($inp.next('.md-team-media-btn').length) return;
            var $btn = $('<button type="button" class="button md-team-media-btn" style="margin-top:6px;">انتخاب / آپلود تصویر از کتابخانه رسانه</button>');
            $inp.after($btn);
            $btn.on('click', function(e){
                e.preventDefault();
                var frame = wp.media({ title: 'انتخاب تصویر پروژه عضو تیم', button: { text: 'درج تصویر' }, multiple: false, library: { type: 'image' } });
                frame.on('select', function(){
                    var att = frame.state().get('selection').first().toJSON();
                    $inp.val(att.url);
                });
                frame.open();
            });
        });
    });
    </script>
</div>
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
}
add_action( 'save_post_team_member', 'md_save_team_member_meta' );

/**
 * 7. Helper: Retrieve Team Member Dynamic Data
 */
/**
 * Helper: Enforce Baseline Symmetry and Height Balance (Law of Vertical Alignment)
 * Strictly constrains total characters of manifesto paragraphs (max 700 chars)
 * ensuring Card 1 (Identity & Bio) strictly aligns with Card 2 (Four Pillars).
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
    }

    if ( ! $post && is_singular( 'team_member' ) ) {
        $post = get_queried_object();
    }

    if ( ! $post ) {
        // Fallback: look for hossein-vatandoust team member
        $post = get_page_by_path( 'hossein-vatandoust', OBJECT, 'team_member' );
    }

    if ( ! $post ) {
        // Fallback: get the latest published team_member
        $members = get_posts( [ 'post_type' => 'team_member', 'numberposts' => 1, 'post_status' => 'publish' ] );
        if ( ! empty( $members ) ) {
            $post = $members[0];
        }
    }

    $id = $post ? $post->ID : 0;
    $is_founder = ( $post && $post->post_name === 'hossein-vatandoust' );

    // Portrait image
    $photo_url = '';
    if ( $id && has_post_thumbnail( $id ) ) {
        $photo_url = get_the_post_thumbnail_url( $id, 'full' );
    }
    if ( empty( $photo_url ) ) {
        $photo_url = $is_founder
            ? home_url( '/wp-content/uploads/2026/07/hossein-vatandoust-founder.webp' )
            : get_template_directory_uri() . '/assets/images/team-avatar-placeholder.svg';
    }

    $start_year = (int) ( get_post_meta( $id, '_md_metric_start_year', true ) ?: ( $is_founder ? 2011 : 2018 ) );
    $dynamic_years = md_calc_experience_years( $start_year );

    $raw_name = $post ? $post->post_title : ( $is_founder ? 'حسین وطن‌دوست' : 'عضو تیم مهندسی' );
    // Ensure strict ZWNJ between وطن and دوست
    $clean_name = preg_replace( '/وطن[\s\x{200c}]+دوست/u', 'وطن' . "\xE2\x80\x8C" . 'دوست', $raw_name );

    // Subtitle
    $subtitle = get_post_meta( $id, '_md_member_subtitle', true );
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
    $m_p1 = get_post_meta( $id, '_md_member_manifesto_p1', true );
    $m_p2 = get_post_meta( $id, '_md_member_manifesto_p2', true );
    $m_p3 = get_post_meta( $id, '_md_member_manifesto_p3', true );
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
        $p_title = get_post_meta( $id, "_md_pillar{$i}_title", true );
        $p_desc  = get_post_meta( $id, "_md_pillar{$i}_desc", true );
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
        $s_name = get_post_meta( $id, "_md_skill{$i}_name", true );
        $s_pct  = (int) get_post_meta( $id, "_md_skill{$i}_pct", true );
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
        $p_title = get_post_meta( $id, "_md_p{$i}_title", true );
        $p_cat   = get_post_meta( $id, "_md_p{$i}_cat", true );
        $p_img   = get_post_meta( $id, "_md_p{$i}_img", true );
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
        'role_badge'    => get_post_meta( $id, '_md_member_role_badge', true ) ?: ( $is_founder 
            ? 'بنیان‌گذار و طراح ارشد مکانیزم‌ها // دانش‌آموخته MBA' 
            : 'مهندس مکانیک و طراح مکانیزم‌های صنعتی' ),
        'subtitle'      => $subtitle,
        'org_hierarchy' => get_post_meta( $id, '_md_member_org_hierarchy', true ) ?: ( $is_founder 
            ? 'ماشین دیزاین / هیئت موسس / مدیرعامل / سرپرست دپارتمان طراحی ماشین‌آلات و مهندسی معکوس' 
            : 'ماشین دیزاین / دپارتمان فنی و مهندسی / متخصص ارشد طراحی مکانیزم' ),
        'status_badge'  => get_post_meta( $id, '_md_member_status_badge', true ) ?: ( $is_founder 
            ? 'FOUNDER // CHIEF MECHANICAL ARCHITECT // MASHHAD' 
            : 'ENGINEERING TEAM // SPECIALIST // MASHHAD' ),
        'photo_badge'   => get_post_meta( $id, '_md_member_photo_badge', true ) ?: 'ACTIVE // STUDIO & WORKSHOP',
        
        'manifesto' => md_enforce_manifesto_balance( $raw_manifesto, 1100 ),

        'metrics' => [
            [
                'val'   => get_post_meta( $id, '_md_metric1_val', true ) ?: $dynamic_years,
                'label' => get_post_meta( $id, '_md_metric1_label', true ) ?: ( $is_founder 
                    ? 'سال تسلط میدانی بر طراحی ماشین‌آلات و سرپرستی کارگاهی' 
                    : 'سال سابقه طراحی مهندسی و نظارت بر ساخت تجهیزات' ),
                'mono'  => true,
            ],
            [
                'val'   => get_post_meta( $id, '_md_metric2_val', true ) ?: 'Grade A',
                'label' => get_post_meta( $id, '_md_metric2_label', true ) ?: 'ارزیابی و انطباق DFMA (طراحی برای ساخت و مونتاژ اقتصادی)',
                'mono'  => true,
            ],
            [
                'val'   => get_post_meta( $id, '_md_metric3_val', true ) ?: ( $is_founder ? 'Tech + MBA' : 'DIN / ISO' ),
                'label' => get_post_meta( $id, '_md_metric3_label', true ) ?: ( $is_founder 
                    ? 'همگرایی طراحی مکانیک با مدیریت CAPEX و کاهش ریسک ساخت' 
                    : 'تدوین نقشه‌های اجرایی، استاندارد GD&T و تلرانس‌گذاری دقیق' ),
                'mono'  => true,
            ],
            [
                'val'   => get_post_meta( $id, '_md_metric4_val', true ) ?: ( $is_founder ? 'DIN / ISO' : 'FEA Validated' ),
                'label' => get_post_meta( $id, '_md_metric4_label', true ) ?: ( $is_founder 
                    ? 'تدوین نقشه‌های اجرایی، استاندارد GD&T و تلرانس‌گذاری دقیق' 
                    : 'اعتبارسنجی تحلیلی سازه‌ها و اجزای مکانیکی بحرانی' ),
                'mono'  => true,
            ],
        ],

        'social' => [
            'linkedin'  => get_post_meta( $id, '_md_member_linkedin', true ) ?: ( $is_founder ? 'https://linkedin.com/in/hosseinvatandoust' : '' ),
            'instagram' => get_post_meta( $id, '_md_member_instagram', true ) ?: ( $is_founder ? 'https://instagram.com/h.vatan.doust' : '' ),
            'grabcad'   => get_post_meta( $id, '_md_member_grabcad', true ) ?: ( $is_founder ? 'https://grabcad.com/hossein.vatandoust-1/models' : '' ),
            'email'     => get_post_meta( $id, '_md_member_email', true ) ?: ( $is_founder ? 'hosseinvatandoust@machinedesign.ir' : '' ),
            'phone'     => get_post_meta( $id, '_md_member_phone', true ) ?: ( $is_founder ? '09358689829' : '' ),
        ],

        'pillars_heading' => get_post_meta( $id, '_md_pillars_heading', true ) ?: 'ارکان چهارگانه رهبری فنی',
        'pillars'   => $pillars,
        'guarantee' => [
            'title' => get_post_meta( $id, '_md_guarantee_title', true ) ?: 'تضمین ساخت‌پذیری قطعات و انطباق استاندارد',
            'desc'  => get_post_meta( $id, '_md_guarantee_desc', true ) ?: 'تعهد طراحی بدون خطا بر پایه استانداردهای ایمنی ISO 12100 و فرآیندهای براده‌برداری کارگاهی',
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
