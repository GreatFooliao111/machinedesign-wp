<?php
defined( 'ABSPATH' ) || exit;

class MD_Core_CPTs {

    public static function init() {
        add_action( 'init', array( __CLASS__, 'register_all' ), 5 );
        add_action( 'add_meta_boxes', array( __CLASS__, 'add_meta_boxes' ) );
        add_action( 'save_post_team_member', array( __CLASS__, 'save_team_meta' ) );
        add_action( 'save_post_project', array( __CLASS__, 'save_project_meta' ) );
        add_action( 'admin_enqueue_scripts', array( __CLASS__, 'enqueue_admin_media' ) );
    }

    public static function register_all() {
        // 1. Engineering Projects CPT (Preserves /project/<slug>/)
        if ( ! post_type_exists( 'project' ) ) {
            register_post_type( 'project', array(
                'labels'       => array( 'name' => 'پروژه‌های مهندسی', 'singular_name' => 'پروژه مهندسی', 'add_new_item' => 'افزودن پروژه جدید' ),
                'public'       => true,
                'show_in_rest' => true,
                'has_archive'  => false,
                'rewrite'      => array( 'slug' => 'project', 'with_front' => false ),
                'menu_icon'    => 'dashicons-hammer',
                'supports'     => array( 'title', 'editor', 'thumbnail', 'excerpt', 'custom-fields' ),
            ) );
        }

        // 2. Team Member CPT (Preserves /team-member/<slug>/)
        if ( ! post_type_exists( 'team_member' ) ) {
            register_post_type( 'team_member', array(
                'labels'       => array( 'name' => 'اعضای تیم', 'singular_name' => 'عضو تیم', 'add_new_item' => 'افزودن عضو جدید' ),
                'public'       => true,
                'show_in_rest' => true,
                'has_archive'  => false,
                'rewrite'      => array( 'slug' => 'team-member', 'with_front' => false ),
                'menu_icon'    => 'dashicons-groups',
                'supports'     => array( 'title', 'editor', 'thumbnail', 'excerpt', 'custom-fields' ),
            ) );
        }

        // 3. Flat 3-Axis Taxonomies (SEO-Driven)
        register_taxonomy( 'project_category', array( 'project' ), array(
            'labels'       => array( 'name' => 'ستون خدمات پروژه', 'singular_name' => 'ستون خدمات' ),
            'hierarchical' => true,
            'show_in_rest' => true,
            'rewrite'      => array( 'slug' => 'project-category', 'with_front' => false ),
        ) );

        register_taxonomy( 'industry', array( 'project', 'post' ), array(
            'labels'       => array( 'name' => 'صنایع هدف', 'singular_name' => 'صنعت هدف' ),
            'hierarchical' => true,
            'show_in_rest' => true,
            'rewrite'      => array( 'slug' => 'industry', 'with_front' => false ),
        ) );

        register_taxonomy( 'engineering_standard', array( 'project', 'post' ), array(
            'labels'       => array( 'name' => 'استانداردها و فناوری‌ها', 'singular_name' => 'استاندارد فنی' ),
            'hierarchical' => false,
            'show_in_rest' => true,
            'rewrite'      => array( 'slug' => 'standard', 'with_front' => false ),
        ) );
    }

    public static function enqueue_admin_media( $hook ) {
        if ( 'post.php' !== $hook && 'post-new.php' !== $hook ) {
            return;
        }
        $screen = get_current_screen();
        if ( $screen && in_array( $screen->post_type, array( 'team_member', 'project' ), true ) ) {
            wp_enqueue_media();
        }
    }

    public static function add_meta_boxes() {
        add_meta_box( 'md_team_meta', 'مشخصات کامل و داینامیک عضو تیم (بدون نشت داده)', array( __CLASS__, 'render_team_meta' ), 'team_member', 'normal', 'high' );
        add_meta_box( 'md_project_meta', 'مشخصات فنی، استاندارد و KPI پروژه', array( __CLASS__, 'render_project_meta' ), 'project', 'normal', 'high' );
    }

    public static function render_team_meta( $post ) {
        wp_nonce_field( 'md_save_team_meta', 'md_team_nonce' );
        $id = $post->ID;
        $g = function ( $k, $d = '' ) use ( $id ) {
            $v = get_post_meta( $id, $k, true );
            return '' !== $v ? $v : $d;
        };
        ?>
        <div dir="rtl" style="display:grid;gap:14px;">
            <div style="display:grid;grid-template-columns:1fr 1fr;gap:12px;">
                <label>سمت کوتاه (Badge):<input type="text" name="_md_member_role_badge" value="<?php echo esc_attr( $g( '_md_member_role_badge' ) ); ?>" class="widefat" /></label>
                <label>زیرعنوان تخصصی:<input type="text" name="_md_member_subtitle" value="<?php echo esc_attr( $g( '_md_member_subtitle' ) ); ?>" class="widefat" /></label>
                <label>مسیر سازمانی:<input type="text" name="_md_member_org_hierarchy" value="<?php echo esc_attr( $g( '_md_member_org_hierarchy' ) ); ?>" class="widefat" /></label>
                <label>کد وضعیت (لاتین):<input type="text" name="_md_member_status_badge" value="<?php echo esc_attr( $g( '_md_member_status_badge' ) ); ?>" class="widefat" dir="ltr" /></label>
            </div>
            <h4>۴ متریک تخصصی (کاملاً داینامیک)</h4>
            <div style="display:grid;grid-template-columns:repeat(4,1fr);gap:10px;">
                <?php for ( $i = 1; $i <= 4; $i++ ) : ?>
                    <div style="border:1px solid #d8dee6;padding:8px;">
                        <input type="text" name="_md_metric<?php echo $i; ?>_val" value="<?php echo esc_attr( $g( "_md_metric{$i}_val" ) ); ?>" placeholder="مقدار <?php echo $i; ?>" class="widefat" style="margin-bottom:6px;" />
                        <input type="text" name="_md_metric<?php echo $i; ?>_label" value="<?php echo esc_attr( $g( "_md_metric{$i}_label" ) ); ?>" placeholder="توضیح <?php echo $i; ?>" class="widefat" />
                    </div>
                <?php endfor; ?>
            </div>
            <h4>۵ مهارت مهندسی و درصد تسلط</h4>
            <div style="display:grid;grid-template-columns:1fr 1fr;gap:10px;">
                <?php for ( $i = 1; $i <= 5; $i++ ) : ?>
                    <div style="display:flex;gap:8px;">
                        <input type="text" name="_md_skill<?php echo $i; ?>_name" value="<?php echo esc_attr( $g( "_md_skill{$i}_name" ) ); ?>" placeholder="عنوان مهارت <?php echo $i; ?>" class="widefat" />
                        <input type="number" min="0" max="100" name="_md_skill<?php echo $i; ?>_pct" value="<?php echo esc_attr( $g( "_md_skill{$i}_pct" ) ); ?>" placeholder="%" style="width:70px;" />
                    </div>
                <?php endfor; ?>
            </div>
            <h4>۴ پروژه اختصاصی اسلایدر (با Media Uploader)</h4>
            <div style="display:grid;grid-template-columns:1fr 1fr;gap:10px;">
                <?php for ( $i = 1; $i <= 4; $i++ ) : ?>
                    <div style="border:1px solid #d8dee6;padding:10px;">
                        <input type="text" name="_md_p<?php echo $i; ?>_title" value="<?php echo esc_attr( $g( "_md_p{$i}_title" ) ); ?>" placeholder="عنوان پروژه <?php echo $i; ?>" class="widefat" style="margin-bottom:6px;" />
                        <input type="text" name="_md_p<?php echo $i; ?>_cat" value="<?php echo esc_attr( $g( "_md_p{$i}_cat" ) ); ?>" placeholder="دسته / استاندارد" class="widefat" style="margin-bottom:6px;" />
                        <input type="text" name="_md_p<?php echo $i; ?>_img" value="<?php echo esc_attr( $g( "_md_p{$i}_img" ) ); ?>" placeholder="لینک تصویر" class="widefat md-media-url" dir="ltr" />
                        <button type="button" class="button md-pick-media" style="margin-top:6px;">انتخاب تصویر از رسانه</button>
                    </div>
                <?php endfor; ?>
            </div>
        </div>
        <script>
        jQuery(function($){
            $('.md-pick-media').on('click', function(e){
                e.preventDefault();
                var $inp = $(this).prev('.md-media-url');
                var frame = wp.media({ title: 'انتخاب تصویر پروژه', button: { text: 'درج' }, multiple: false });
                frame.on('select', function(){ $inp.val(frame.state().get('selection').first().toJSON().url); });
                frame.open();
            });
        });
        </script>
        <?php
    }

    public static function save_team_meta( $post_id ) {
        if ( ! isset( $_POST['md_team_nonce'] ) || ! wp_verify_nonce( sanitize_text_field( wp_unslash( $_POST['md_team_nonce'] ) ), 'md_save_team_meta' ) ) {
            return;
        }
        if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE || ! current_user_can( 'edit_post', $post_id ) ) {
            return;
        }
        $keys = array( '_md_member_role_badge', '_md_member_subtitle', '_md_member_org_hierarchy', '_md_member_status_badge' );
        for ( $i = 1; $i <= 4; $i++ ) {
            $keys[] = "_md_metric{$i}_val";
            $keys[] = "_md_metric{$i}_label";
            $keys[] = "_md_p{$i}_title";
            $keys[] = "_md_p{$i}_cat";
            $keys[] = "_md_p{$i}_img";
        }
        for ( $i = 1; $i <= 5; $i++ ) {
            $keys[] = "_md_skill{$i}_name";
            $keys[] = "_md_skill{$i}_pct";
        }
        foreach ( $keys as $k ) {
            if ( isset( $_POST[ $k ] ) ) {
                $val = ( false !== strpos( $k, '_img' ) )
                    ? esc_url_raw( wp_unslash( $_POST[ $k ] ) )
                    : sanitize_text_field( wp_unslash( $_POST[ $k ] ) );
                update_post_meta( $post_id, $k, $val );
            }
        }
    }

    public static function render_project_meta( $post ) {
        wp_nonce_field( 'md_save_project_meta', 'md_project_nonce' );
        $id = $post->ID;
        $g = function ( $k ) use ( $id ) { return get_post_meta( $id, $k, true ); };
        ?>
        <div dir="rtl" style="display:grid;grid-template-columns:1fr 1fr;gap:12px;">
            <label>شاخص کلیدی عملکرد (KPI):<input type="text" name="_md_project_kpi" value="<?php echo esc_attr( $g( '_md_project_kpi' ) ); ?>" class="widefat" /></label>
            <label>استاندارد فنی (مثلاً DIN EN 415):<input type="text" name="_md_project_standard" value="<?php echo esc_attr( $g( '_md_project_standard' ) ); ?>" class="widefat" dir="ltr" /></label>
            <label>مشخصات فنی و متریال:<input type="text" name="_md_project_spec" value="<?php echo esc_attr( $g( '_md_project_spec' ) ); ?>" class="widefat" /></label>
            <label>نام کارفرما / صنعت:<input type="text" name="_md_project_client" value="<?php echo esc_attr( $g( '_md_project_client' ) ); ?>" class="widefat" /></label>
        </div>
        <?php
    }

    public static function save_project_meta( $post_id ) {
        if ( ! isset( $_POST['md_project_nonce'] ) || ! wp_verify_nonce( sanitize_text_field( wp_unslash( $_POST['md_project_nonce'] ) ), 'md_save_project_meta' ) ) {
            return;
        }
        if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE || ! current_user_can( 'edit_post', $post_id ) ) {
            return;
        }
        foreach ( array( '_md_project_kpi', '_md_project_standard', '_md_project_spec', '_md_project_client' ) as $k ) {
            if ( isset( $_POST[ $k ] ) ) {
                update_post_meta( $post_id, $k, sanitize_text_field( wp_unslash( $_POST[ $k ] ) ) );
            }
        }
    }
}
MD_Core_CPTs::init();
