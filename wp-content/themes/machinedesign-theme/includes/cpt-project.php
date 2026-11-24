<?php
/**
 * Custom Post Type: Engineering Projects (پروژه‌های مهندسی)
 *
 * Provides dynamic project management via the WordPress Admin panel,
 * including client info, challenge, solution, result, and standard badges.
 *
 * @package HelloElementor
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

/**
 * 1. Register Custom Post Type: project
 */
function md_register_project_cpt() {
    $labels = array(
        'name'               => 'پروژه‌های مهندسی',
        'singular_name'      => 'پروژه مهندسی',
        'menu_name'          => 'پروژه‌های مهندسی',
        'name_admin_bar'     => 'پروژه مهندسی',
        'add_new'            => 'افزودن پروژه جدید',
        'add_new_item'       => 'افزودن پروژه مهندسی جدید',
        'new_item'           => 'پروژه جدید',
        'edit_item'          => 'ویرایش مشخصات پروژه',
        'view_item'          => 'مشاهده پروژه',
        'all_items'          => 'همه پروژه‌ها',
        'search_items'       => 'جستجوی پروژه‌ها',
        'parent_item_colon'  => 'پروژه والد:',
        'not_found'          => 'هیچ پروژه‌ای یافت نشد.',
        'not_found_in_trash' => 'در زباله‌دان پروژه‌ای یافت نشد.',
    );

    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'project', 'with_front' => false ),
        'capability_type'    => 'post',
        'has_archive'        => false,
        'hierarchical'       => false,
        'menu_position'      => 6,
        'menu_icon'          => 'dashicons-hammer',
        'supports'           => array( 'title', 'editor', 'thumbnail', 'excerpt', 'custom-fields' ),
        'show_in_rest'       => true,
    );

    register_post_type( 'project', $args );

    // Register Custom Taxonomy: project_category
    $tax_labels = array(
        'name'              => 'دسته‌بندی پروژه‌ها',
        'singular_name'     => 'دسته‌بندی پروژه',
        'search_items'      => 'جستجوی دسته‌بندی‌ها',
        'all_items'         => 'همه دسته‌ها',
        'edit_item'         => 'ویرایش دسته‌بندی',
        'update_item'       => 'به‌روزرسانی دسته‌بندی',
        'add_new_item'      => 'افزودن دسته‌بندی جدید',
        'new_item_name'     => 'نام دسته‌بندی جدید',
        'menu_name'         => 'دسته‌بندی پروژه‌ها',
    );

    $tax_args = array(
        'hierarchical'      => true,
        'labels'            => $tax_labels,
        'show_ui'           => true,
        'show_admin_column' => true,
        'query_var'         => true,
        'rewrite'           => array( 'slug' => 'project-category' ),
        'show_in_rest'      => true,
    );

    register_taxonomy( 'project_category', array( 'project' ), $tax_args );
}
add_action( 'init', 'md_register_project_cpt' );

/**
 * 2. Register Custom Meta Boxes for project
 */
function md_add_project_meta_boxes() {
    add_meta_box(
        'md_project_specs_meta',
        'مشخصات فنی و شاخص‌های پروژه مهندسی (Engineering Specs & KPI)',
        'md_render_project_meta_box',
        'project',
        'normal',
        'high'
    );
}
add_action( 'add_meta_boxes', 'md_add_project_meta_boxes' );

/**
 * 3. Render Meta Box Fields in WP Admin
 */
function md_render_project_meta_box( $post ) {
    wp_nonce_field( 'md_save_project_meta_action', 'md_project_meta_nonce' );

    $kpi  = get_post_meta( $post->ID, '_md_project_kpi', true );
    $spec = get_post_meta( $post->ID, '_md_project_spec', true );
    ?>
    <style>
        .md-project-meta-wrap {
            padding: 12px 0;
            direction: rtl;
            font-family: inherit;
        }
        .md-meta-field-row {
            margin-bottom: 18px;
        }
        .md-meta-field-row label {
            display: block;
            font-weight: 700;
            margin-bottom: 6px;
            color: #0B0D11;
        }
        .md-meta-field-row input[type="text"] {
            width: 100%;
            max-width: 650px;
            padding: 8px 12px;
            border: 1px solid #cbd5e1;
            border-radius: 4px;
            font-size: 0.92rem;
        }
        .md-meta-hint {
            margin-top: 4px;
            font-size: 0.82rem;
            color: #64748b;
        }
    </style>
    <div class="md-project-meta-wrap">
        <div class="md-meta-field-row">
            <label for="md_project_kpi">شاخص کلیدی یا دستاورد عملکردی (KPI):</label>
            <input type="text" id="md_project_kpi" name="_md_project_kpi" value="<?php echo esc_attr( $kpi ); ?>" placeholder="مثال: سرعت ۱۲۰ بسته/دقیقه | کاهش ۳۰٪ ضایعات" />
            <div class="md-meta-hint">شاخص عملکردی یا دستاورد کلیدی پروژه که در باکس متمایز کارت نمایش داده می‌شود.</div>
        </div>

        <div class="md-meta-field-row">
            <label for="md_project_spec">برچسب مشخصات فنی کوتاه (حداکثر ۱۵ کاراکتر):</label>
            <input type="text" id="md_project_spec" name="_md_project_spec" value="<?php echo esc_attr( $spec ); ?>" maxlength="15" placeholder="مثال: 120 PPM یا 316L CIP یا DIN 3962" />
            <div class="md-meta-hint">برچسب متای فنی در فوتر کارت (سمت چپ دکمه CTA). حداکثر ۱۵ کاراکتر انگلیسی یا فارسی.</div>
        </div>
    </div>
    <?php
}

/**
 * 4. Save Project Meta Data
 */
function md_save_project_meta( $post_id ) {
    if ( ! isset( $_POST['md_project_meta_nonce'] ) || ! wp_verify_nonce( $_POST['md_project_meta_nonce'], 'md_save_project_meta_action' ) ) {
        return;
    }

    if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) {
        return;
    }

    if ( ! current_user_can( 'edit_post', $post_id ) ) {
        return;
    }

    if ( isset( $_POST['_md_project_kpi'] ) ) {
        update_post_meta( $post_id, '_md_project_kpi', sanitize_text_field( wp_unslash( $_POST['_md_project_kpi'] ) ) );
    }

    if ( isset( $_POST['_md_project_spec'] ) ) {
        $spec_val = sanitize_text_field( wp_unslash( $_POST['_md_project_spec'] ) );
        if ( mb_strlen( $spec_val ) > 15 ) {
            $spec_val = mb_substr( $spec_val, 0, 15 );
        }
        update_post_meta( $post_id, '_md_project_spec', $spec_val );
    }
}
add_action( 'save_post_project', 'md_save_project_meta' );

/**
 * 5. Add custom columns to Project Admin List
 */
function md_project_admin_columns( $columns ) {
    $new_cols = array();
    foreach ( $columns as $k => $v ) {
        $new_cols[ $k ] = $v;
        if ( 'title' === $k ) {
            $new_cols['project_category'] = 'دسته‌بندی';
            $new_cols['project_kpi']      = 'شاخص KPI';
            $new_cols['project_spec']     = 'مشخصه فنی';
        }
    }
    return $new_cols;
}
add_filter( 'manage_project_posts_columns', 'md_project_admin_columns' );

function md_project_admin_custom_column( $column, $post_id ) {
    if ( 'project_category' === $column ) {
        $terms = get_the_term_list( $post_id, 'project_category', '', '، ', '' );
        echo ! empty( $terms ) ? $terms : '—';
    } elseif ( 'project_kpi' === $column ) {
        $kpi = get_post_meta( $post_id, '_md_project_kpi', true );
        echo ! empty( $kpi ) ? esc_html( $kpi ) : '—';
    } elseif ( 'project_spec' === $column ) {
        $spec = get_post_meta( $post_id, '_md_project_spec', true );
        echo ! empty( $spec ) ? '<code>' . esc_html( $spec ) . '</code>' : '—';
    }
}
add_action( 'manage_project_posts_custom_column', 'md_project_admin_custom_column', 10, 2 );

/**
 * Auto-seed the 6 canonical engineering service pillars into project_category taxonomy.
 * Runs idempotently once (controlled by option flag).
 */
function md_seed_six_pillar_project_categories() {
	if ( get_option( 'md_project_pillars_seeded_v2' ) ) {
		return;
	}
	if ( ! taxonomy_exists( 'project_category' ) ) {
		return;
	}
	$pillars = array(
		'machine-design'          => 'طراحی ماشین‌آلات و خطوط تولید',
		'factory-troubleshooting' => 'عیب‌یابی کارخانه و آنالیز ارتعاشات',
		'rd-prototyping'          => 'تحقیق و توسعه (R&D) و نمونه‌سازی',
		'engineering-mentorship'  => 'منتورشیپ و آموزش فردی مهندسی',
		'corporate-training'      => 'آموزش سازمانی تیم‌های فنی',
		'machinery-inspection'    => 'کارشناسی خرید و بازرسی ماشین‌آلات',
	);
	foreach ( $pillars as $slug => $name ) {
		if ( ! term_exists( $slug, 'project_category' ) ) {
			wp_insert_term( $name, 'project_category', array( 'slug' => $slug ) );
		}
	}
	update_option( 'md_project_pillars_seeded_v2', '1', false );
}
add_action( 'init', 'md_seed_six_pillar_project_categories', 25 );
