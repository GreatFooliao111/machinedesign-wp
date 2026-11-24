<?php
/**
 * Plugin Name: مدیریت استعلام‌های فنی و پروژه‌های ماشین دیزاین (MachineDesign RFQ Manager)
 * Plugin URI: https://machinedesign.ir
 * Description: ثبت، ذخیره‌سازی، دسته‌بندی ستونی و مدیریت یکپارچه استعلام‌های فنی پروژه‌ها و قراردادهای محرمانگی (NDA) در ماشین دیزاین
 * Version: 1.0.0
 * Author: حسین وطن‌دوست (MachineDesign.ir)
 * Author URI: https://machinedesign.ir
 * Text Domain: machinedesign-rfq
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

class MachineDesign_RFQ_Manager {

    private static $instance = null;

    public static function instance() {
        if ( is_null( self::$instance ) ) {
            self::$instance = new self();
        }
        return self::$instance;
    }

    public function __construct() {
        // Register Post Type & Taxonomy
        add_action( 'init', array( $this, 'register_cpt_and_taxonomy' ), 0 );

        // AJAX Handlers
        add_action( 'wp_ajax_machinedesign_rfq_submit', array( $this, 'handle_rfq_submission' ) );
        add_action( 'wp_ajax_nopriv_machinedesign_rfq_submit', array( $this, 'handle_rfq_submission' ) );

        // Backward compatibility for front-page action name
        add_action( 'wp_ajax_machinedesign_rfq', array( $this, 'handle_rfq_submission' ) );
        add_action( 'wp_ajax_nopriv_machinedesign_rfq', array( $this, 'handle_rfq_submission' ) );

        // Admin Customizations
        add_filter( 'manage_rfq_lead_posts_columns', array( $this, 'set_custom_columns' ) );
        add_action( 'manage_rfq_lead_posts_custom_column', array( $this, 'render_custom_column' ), 10, 2 );
        add_filter( 'manage_edit-rfq_lead_sortable_columns', array( $this, 'set_sortable_columns' ) );
        add_action( 'restrict_manage_posts', array( $this, 'add_taxonomy_filters' ) );
        add_filter( 'posts_search', array( $this, 'extend_admin_search' ), 10, 2 );

        // Meta Box
        add_action( 'add_meta_boxes', array( $this, 'add_lead_meta_boxes' ) );
        add_action( 'save_post_rfq_lead', array( $this, 'save_lead_meta' ) );

        // Menu Notification Bubble
        add_action( 'admin_menu', array( $this, 'add_admin_menu_bubble' ), 99 );

        // Admin Settings Page
        add_action( 'admin_menu', array( $this, 'register_settings_submenu' ) );
        add_action( 'admin_init', array( $this, 'register_settings' ) );

        // Activation hook setup
        register_activation_hook( __FILE__, array( $this, 'activate' ) );
    }

    /**
     * Register Post Type and Taxonomy
     */
    public function register_cpt_and_taxonomy() {
        // 1. Post Type: rfq_lead
        $labels = array(
            'name'                  => 'استعلام‌های فنی (RFQ)',
            'singular_name'         => 'استعلام فنی',
            'menu_name'             => 'استعلام‌های فنی (RFQ)',
            'name_admin_bar'        => 'استعلام فنی جدید',
            'archives'              => 'بایگانی استعلام‌ها',
            'attributes'            => 'ویژگی‌های استعلام',
            'all_items'             => 'همه استعلام‌ها',
            'add_new_item'          => 'افزودن استعلام دستی',
            'add_new'               => 'افزودن جدید',
            'new_item'              => 'استعلام جدید',
            'edit_item'             => 'بررسی و ویرایش پرونده استعلام',
            'update_item'           => 'بروزرسانی استعلام',
            'view_item'             => 'مشاهده استعلام',
            'view_items'            => 'مشاهده استعلام‌ها',
            'search_items'          => 'جستجوی استعلام‌ها...',
            'not_found'             => 'هیچ استعلامی یافت نشد.',
            'not_found_in_trash'    => 'هیچ استعلامی در سطل زباله نیست.',
        );

        $args = array(
            'label'                 => 'استعلام فنی',
            'labels'                => $labels,
            'supports'              => array( 'title' ),
            'hierarchical'          => false,
            'public'                => false,
            'show_ui'               => true,
            'show_in_menu'          => true,
            'menu_position'         => 25,
            'menu_icon'             => 'dashicons-clipboard',
            'show_in_admin_bar'     => true,
            'show_in_nav_menus'     => false,
            'can_export'            => true,
            'has_archive'           => false,
            'exclude_from_search'   => true,
            'publicly_queryable'    => false,
            'capability_type'       => 'post',
        );
        register_post_type( 'rfq_lead', $args );

        // 2. Taxonomy: rfq_pillar
        $tax_labels = array(
            'name'              => 'دسته‌بندی ستون‌های خدمات',
            'singular_name'     => 'ستون خدمت',
            'search_items'      => 'جستجوی ستون‌ها',
            'all_items'         => 'همه ستون‌های خدمات',
            'parent_item'       => 'ستون مادر',
            'parent_item_colon' => 'ستون مادر:',
            'edit_item'         => 'ویرایش ستون',
            'update_item'       => 'بروزرسانی ستون',
            'add_new_item'      => 'افزودن ستون جدید',
            'new_item_name'     => 'نام ستون جدید',
            'menu_name'         => 'دسته‌بندی خدمات ۶ گانه',
        );

        $tax_args = array(
            'hierarchical'      => true,
            'labels'            => $tax_labels,
            'show_ui'           => true,
            'show_admin_column' => true,
            'query_var'         => true,
            'rewrite'           => array( 'slug' => 'rfq-pillar' ),
        );
        register_taxonomy( 'rfq_pillar', array( 'rfq_lead' ), $tax_args );
    }

    /**
     * Pre-populate standard taxonomy terms on activation
     */
    public function activate() {
        $this->register_cpt_and_taxonomy();

        $pillars = array(
            'rd-prototyping' => array(
                'name' => 'تحقیق و توسعه و نمونه‌سازی (Pillar 3)',
                'desc' => 'ساخت پروتوتایپ، تحلیل DFMEA و امکان‌سنجی خطوط تولید',
                'children' => array(
                    'prototyping' => 'ساخت نمونه اولیه فیزیکی و POC',
                    'dfmea'       => 'تحلیل ریسک و عیب‌یابی کانسپت با DFMEA',
                    'feasibility' => 'امکان‌سنجی فنی و اقتصادی خط تولید (CAPEX/OPEX)',
                    'redesign'    => 'مهندسی مجدد و بازطراحی کانسپت ناکارآمد',
                    'consulting'  => 'مشاوره تخصصی و عارضه‌یابی تیم R&D',
                )
            ),
            'machine-design' => array(
                'name' => 'طراحی ماشین‌آلات و خطوط تولید (Pillar 1)',
                'desc' => 'طراحی مکانیزم‌ها، کانوایر، صنایع غذایی، بسته‌بندی و DFMA',
            ),
            'factory-troubleshooting' => array(
                'name' => 'مشاوره فنی و حل مسئله کارخانجات (Pillar 2)',
                'desc' => 'رفع توقف خط، عیب‌یابی ارتعاشات/یاتاقان، بهینه‌سازی فرآیند',
            ),
            'training-mentorship' => array(
                'name' => 'آموزش و منتورشیپ فردی (Pillar 4)',
                'desc' => 'سالیدورک پیشرفته، شبیه‌سازی FEA، تلرانس‌گذاری GD&T',
            ),
            'corporate-training' => array(
                'name' => 'آموزش سازمانی کارخانه‌ها (Pillar 5)',
                'desc' => 'ارتقای تیم‌های فنی کارگاهی و استانداردسازی فرآیند ساخت',
            ),
            'procurement-consulting' => array(
                'name' => 'مشاوره و کارشناسی خرید ماشین‌آلات (Pillar 6)',
                'desc' => 'کارشناسی خرید از چین/دبی، ارزیابی فنی و تدوین RFQ',
            ),
            'general-rfq' => array(
                'name' => 'استعلام عمومی صفحه اصلی',
                'desc' => 'استعلام‌های ورودی از فرم سریع صفحه نخست',
            ),
        );

        foreach ( $pillars as $slug => $data ) {
            $parent_term = term_exists( $slug, 'rfq_pillar' );
            if ( ! $parent_term ) {
                $inserted = wp_insert_term( $data['name'], 'rfq_pillar', array(
                    'slug'        => $slug,
                    'description' => $data['desc'] ?? '',
                ) );
                $parent_id = ! is_wp_error( $inserted ) ? $inserted['term_id'] : 0;
            } else {
                $parent_id = is_array( $parent_term ) ? $parent_term['term_id'] : $parent_term;
            }

            if ( ! empty( $data['children'] ) && $parent_id ) {
                foreach ( $data['children'] as $child_slug => $child_name ) {
                    if ( ! term_exists( $child_slug, 'rfq_pillar' ) ) {
                        wp_insert_term( $child_name, 'rfq_pillar', array(
                            'slug'   => $child_slug,
                            'parent' => $parent_id,
                        ) );
                    }
                }
            }
        }

        flush_rewrite_rules();
    }

    /**
     * Handle AJAX Submission from both Pillar pages and Front Page
     */
    public function handle_rfq_submission() {
        // Collect & sanitize inputs
        $name         = isset( $_POST['rfq_name'] ) ? sanitize_text_field( wp_unslash( $_POST['rfq_name'] ) ) : '';
        $phone        = isset( $_POST['rfq_phone'] ) ? sanitize_text_field( wp_unslash( $_POST['rfq_phone'] ) ) : '';
        $service_type = isset( $_POST['rfq_service_type'] ) ? sanitize_text_field( wp_unslash( $_POST['rfq_service_type'] ) ) : '';
        $desc         = isset( $_POST['rfq_desc'] ) ? sanitize_textarea_field( wp_unslash( $_POST['rfq_desc'] ) ) : '';
        $pillar_slug  = isset( $_POST['source_pillar'] ) ? sanitize_text_field( wp_unslash( $_POST['source_pillar'] ) ) : '';
        $source_url   = isset( $_POST['source_url'] ) ? esc_url_raw( wp_unslash( $_POST['source_url'] ) ) : '';

        // Fallback for front-page legacy payload: 'service' & combined 'phone'
        if ( empty( $phone ) && isset( $_POST['phone'] ) ) {
            $raw_phone = sanitize_text_field( wp_unslash( $_POST['phone'] ) );
            // Parse combined string if present: "0912... | نام: ... | شرح: ..."
            if ( strpos( $raw_phone, '|' ) !== false ) {
                $parts = explode( '|', $raw_phone );
                $phone = trim( $parts[0] );
                foreach ( $parts as $p ) {
                    if ( strpos( $p, 'نام:' ) !== false && empty( $name ) ) {
                        $name = trim( str_replace( 'نام:', '', $p ) );
                    }
                    if ( strpos( $p, 'شرح:' ) !== false && empty( $desc ) ) {
                        $desc = trim( str_replace( 'شرح:', '', $p ) );
                    }
                }
            } else {
                $phone = $raw_phone;
            }
        }

        if ( empty( $service_type ) && isset( $_POST['service'] ) ) {
            $service_type = sanitize_text_field( wp_unslash( $_POST['service'] ) );
        }

        // Clean Persian/Arabic numbers in phone
        $persian_nums = array('۰', '۱', '۲', '۳', '۴', '۵', '۶', '۷', '۸', '۹');
        $arabic_nums  = array('٠', '١', '٢', '٣', '٤', '٥', '٦', '٧', '٨', '٩');
        $latin_nums   = array('0', '1', '2', '3', '4', '5', '6', '7', '8', '9');
        $clean_phone  = str_replace( $persian_nums, $latin_nums, $phone );
        $clean_phone  = str_replace( $arabic_nums, $latin_nums, $clean_phone );
        $clean_phone  = preg_replace( '/[^0-9+]/', '', $clean_phone );

        // Validation
        if ( empty( $clean_phone ) || strlen( $clean_phone ) < 8 ) {
            wp_send_json_error( array(
                'message' => 'لطفاً یک شماره تماس معتبر (همراه یا ثابت) وارد فرمایید.'
            ) );
        }

        // Map service_type or pillar_slug to Taxonomy Term & Tracking Prefix
        $tracking_prefix = 'MD-RFQ-2026-';
        $assigned_term   = 'general-rfq';

        if ( $pillar_slug === 'rd-prototyping' || in_array( $service_type, array('prototyping', 'dfmea', 'feasibility', 'redesign', 'consulting', 'SRV-03') ) ) {
            $tracking_prefix = 'MD-RD-2026-';
            $assigned_term   = ! empty( $service_type ) && term_exists( $service_type, 'rfq_pillar' ) ? $service_type : 'rd-prototyping';
        } elseif ( $pillar_slug === 'machine-design' || $service_type === 'SRV-01' ) {
            $tracking_prefix = 'MD-DES-2026-';
            $assigned_term   = 'machine-design';
        } elseif ( $pillar_slug === 'factory-troubleshooting' || $service_type === 'SRV-02' ) {
            $tracking_prefix = 'MD-FIX-2026-';
            $assigned_term   = 'factory-troubleshooting';
        } elseif ( $pillar_slug === 'training-mentorship' || $service_type === 'SRV-04' ) {
            $tracking_prefix = 'MD-EDU-2026-';
            $assigned_term   = 'training-mentorship';
        } elseif ( $pillar_slug === 'corporate-training' || $service_type === 'SRV-05' ) {
            $tracking_prefix = 'MD-CORP-2026-';
            $assigned_term   = 'corporate-training';
        } elseif ( $pillar_slug === 'procurement-consulting' || $service_type === 'SRV-06' ) {
            $tracking_prefix = 'MD-BUY-2026-';
            $assigned_term   = 'procurement-consulting';
        }

        // Generate unique tracking code
        $random_digits = wp_rand( 1000, 9999 );
        $tracking_code = $tracking_prefix . $random_digits;

        // Post Title
        $display_name = ! empty( $name ) ? $name : 'متقاضی استعلام ناشناس';
        $post_title   = $tracking_code . ' // ' . $display_name;

        // Insert Post
        $post_id = wp_insert_post( array(
            'post_title'   => $post_title,
            'post_type'    => 'rfq_lead',
            'post_status'  => 'publish',
            'post_content' => $desc,
        ) );

        if ( is_wp_error( $post_id ) || ! $post_id ) {
            wp_send_json_error( array(
                'message' => 'متأسفانه در ثبت اطلاعات خطایی رخ داد. لطفاً مجدداً تلاش فرمایید یا مستقیماً تماس بگیرید.'
            ) );
        }

        // Assign Taxonomy Term
        if ( term_exists( $assigned_term, 'rfq_pillar' ) ) {
            wp_set_object_terms( $post_id, array( $assigned_term ), 'rfq_pillar' );
        }

        // Store Meta
        update_post_meta( $post_id, '_rfq_tracking_code', $tracking_code );
        update_post_meta( $post_id, '_rfq_client_name', $name );
        update_post_meta( $post_id, '_rfq_phone', $clean_phone );
        update_post_meta( $post_id, '_rfq_service_type', $service_type );
        update_post_meta( $post_id, '_rfq_desc', $desc );
        update_post_meta( $post_id, '_rfq_source_pillar', $pillar_slug );
        update_post_meta( $post_id, '_rfq_source_url', $source_url );
        update_post_meta( $post_id, '_rfq_status', 'new' );
        update_post_meta( $post_id, '_rfq_ip', $_SERVER['REMOTE_ADDR'] ?? '' );
        update_post_meta( $post_id, '_rfq_user_agent', substr( $_SERVER['HTTP_USER_AGENT'] ?? '', 0, 255 ) );
        update_post_meta( $post_id, '_rfq_submitted_at', current_time( 'mysql' ) );

        // Optional Technical File Upload Handling (.pdf, .dwg, .step, .stp, .jpg, .png max 10MB)
        $file_url  = '';
        $file_name = '';
        if ( ! empty( $_FILES['rfq_file']['name'] ) ) {
            $uploaded_file = $_FILES['rfq_file'];
            $file_ext = strtolower( pathinfo( $uploaded_file['name'], PATHINFO_EXTENSION ) );
            $allowed_exts = array( 'pdf', 'dwg', 'step', 'stp', 'jpg', 'jpeg', 'png' );

            if ( in_array( $file_ext, $allowed_exts, true ) && $uploaded_file['size'] <= 10 * 1024 * 1024 ) {
                require_once ABSPATH . 'wp-admin/includes/file.php';
                $upload_overrides = array( 'test_form' => false );
                $movefile = wp_handle_upload( $uploaded_file, $upload_overrides );

                if ( $movefile && ! isset( $movefile['error'] ) ) {
                    $file_url  = $movefile['url'];
                    $file_name = sanitize_file_name( $uploaded_file['name'] );
                    update_post_meta( $post_id, '_rfq_file_url', esc_url_raw( $file_url ) );
                    update_post_meta( $post_id, '_rfq_file_name', sanitize_text_field( $file_name ) );
                }
            }
        }

        // Maintain legacy option array for backward compatibility
        $leads = get_option( 'machinedesign_rfq_leads', array() );
        $leads[] = array(
            'tracking' => $tracking_code,
            'service'  => $service_type,
            'phone'    => $clean_phone . ( ! empty( $name ) ? ' | ' . $name : '' ),
            'file_url' => $file_url,
            'date'     => current_time( 'mysql' ),
            'ip'       => $_SERVER['REMOTE_ADDR'] ?? '',
        );
        update_option( 'machinedesign_rfq_leads', $leads );

        // Optional email notification to admin
        $admin_email = get_option( 'machinedesign_rfq_admin_email', 'hosseinvatandoust699@gmail.com' );
        $send_email  = get_option( 'machinedesign_rfq_email_notify', '1' );

        if ( $send_email && is_email( $admin_email ) ) {
            $subject = '⚡ استعلام فنی جدید در ماشین دیزاین: ' . $tracking_code;
            $body    = "استعلام فنی جدیدی در وب‌سایت MachineDesign.ir ثبت گردید:\n\n";
            $body   .= "کد پیگیری: " . $tracking_code . "\n";
            $body   .= "نام متقاضی/شرکت: " . ( $name ?: 'ذکر نشده' ) . "\n";
            $body   .= "شماره تماس مستقیم: " . $clean_phone . "\n";
            $body   .= "حوزه خدمت: " . $service_type . "\n";
            $body   .= "ستون مبدا: " . ( $pillar_slug ?: 'عمومی' ) . "\n";
            $body   .= "شرح چالش/پروژه:\n" . ( $desc ?: 'توضیحی ثبت نشده است.' ) . "\n";
            if ( ! empty( $file_url ) ) {
                $body .= "فایل فنی ضمیمه (NDA Protected): " . esc_url( $file_url ) . " (" . $file_name . ")\n";
            }
            $body   .= "\nلینک مشاهده و مدیریت در وردپرس:\n" . admin_url( 'post.php?post=' . $post_id . '&action=edit' ) . "\n";

            wp_mail( $admin_email, $subject, $body );
        }

        wp_send_json_success( array(
            'message'       => 'استعلام شما با موفقیت ثبت شد.',
            'tracking_code' => $tracking_code,
            'tracking'      => $tracking_code, // backward compat
            'client_name'   => $name,
        ) );
    }

    /**
     * Custom Columns in Admin List View
     */
    public function set_custom_columns( $columns ) {
        $new_columns = array();
        $new_columns['cb']            = $columns['cb'];
        $new_columns['tracking_code'] = 'کد پیگیری';
        $new_columns['client_info']   = 'نام کارفرما / شرکت';
        $new_columns['phone']         = 'شماره تماس';
        $new_columns['rfq_pillar']    = 'ستون و حوزه خدمت';
        $new_columns['rfq_status']    = 'وضعیت رسیدگی';
        $new_columns['date']          = 'تاریخ و زمان ثبت';
        return $new_columns;
    }

    public function render_custom_column( $column, $post_id ) {
        switch ( $column ) {
            case 'tracking_code':
                $code = get_post_meta( $post_id, '_rfq_tracking_code', true );
                if ( ! $code ) {
                    $code = 'MD-' . $post_id;
                }
                echo '<strong style="font-family:monospace; font-size:12px; color:#16a34a; background:#f0fdf4; padding:3px 6px; border:1px solid #bbf7d0; border-radius:3px;">' . esc_html( $code ) . '</strong>';
                break;

            case 'client_info':
                $name = get_post_meta( $post_id, '_rfq_client_name', true );
                echo '<strong>' . esc_html( $name ?: '—' ) . '</strong>';
                break;

            case 'phone':
                $phone = get_post_meta( $post_id, '_rfq_phone', true );
                if ( $phone ) {
                    echo '<a href="tel:' . esc_attr( $phone ) . '" dir="ltr" style="font-family:monospace; font-weight:700; color:#0f172a; text-decoration:none;">' . esc_html( $phone ) . '</a>';
                } else {
                    echo '—';
                }
                break;

            case 'rfq_pillar':
                $terms = wp_get_post_terms( $post_id, 'rfq_pillar' );
                if ( ! empty( $terms ) && ! is_wp_error( $terms ) ) {
                    $names = array();
                    foreach ( $terms as $term ) {
                        $names[] = '<span style="display:inline-block; background:#eff6ff; color:#1d4ed8; border:1px solid #bfdbfe; padding:2px 8px; border-radius:4px; font-size:11px; font-weight:700; margin:2px 0;">' . esc_html( $term->name ) . '</span>';
                    }
                    echo implode( ' ', $names );
                } else {
                    $service_type = get_post_meta( $post_id, '_rfq_service_type', true );
                    echo '<span style="color:#64748b;">' . esc_html( $service_type ?: '—' ) . '</span>';
                }
                break;

            case 'rfq_status':
                $status = get_post_meta( $post_id, '_rfq_status', true ) ?: 'new';
                $labels = array(
                    'new'         => array('title' => 'جدید // نیاز به تماس', 'bg' => '#16a34a', 'fg' => '#ffffff'),
                    'contacted'   => array('title' => 'تماس برقرار شد', 'bg' => '#eab308', 'fg' => '#000000'),
                    'nda_sent'    => array('title' => 'ارسال پیش‌نویس NDA', 'bg' => '#2563eb', 'fg' => '#ffffff'),
                    'in_progress' => array('title' => 'جلسه فنی / امکان‌سنجی', 'bg' => '#9333ea', 'fg' => '#ffffff'),
                    'completed'   => array('title' => 'بسته شد // عقد قرارداد', 'bg' => '#475569', 'fg' => '#ffffff'),
                );
                $info = $labels[ $status ] ?? $labels['new'];
                echo '<span style="display:inline-block; padding:4px 8px; border-radius:4px; font-size:11px; font-weight:700; background:' . esc_attr( $info['bg'] ) . '; color:' . esc_attr( $info['fg'] ) . ';">' . esc_html( $info['title'] ) . '</span>';
                break;
        }
    }

    public function set_sortable_columns( $columns ) {
        $columns['tracking_code'] = 'title';
        return $columns;
    }

    /**
     * Add Taxonomy Filter dropdown in edit.php
     */
    public function add_taxonomy_filters( $post_type ) {
        if ( 'rfq_lead' !== $post_type ) {
            return;
        }
        $taxonomy = 'rfq_pillar';
        $selected = isset( $_GET[ $taxonomy ] ) ? $_GET[ $taxonomy ] : '';
        wp_dropdown_categories( array(
            'show_option_all' => 'همه ستون‌های خدمات (۶ گانه)',
            'taxonomy'        => $taxonomy,
            'name'            => $taxonomy,
            'orderby'         => 'name',
            'selected'        => $selected,
            'hierarchical'    => true,
            'depth'           => 3,
            'show_count'      => true,
            'hide_empty'      => false,
            'value_field'     => 'slug',
        ) );
    }

    /**
     * Extend search in Admin to search by phone & tracking code
     */
    public function extend_admin_search( $search, $query ) {
        global $wpdb;
        if ( ! is_admin() || ! $query->is_main_query() || $query->get( 'post_type' ) !== 'rfq_lead' ) {
            return $search;
        }
        $s = $query->get( 's' );
        if ( empty( $s ) ) {
            return $search;
        }

        $term = '%' . $wpdb->esc_like( $s ) . '%';
        $search = " AND (
            ({$wpdb->posts}.post_title LIKE '{$term}') OR
            ({$wpdb->posts}.post_content LIKE '{$term}') OR
            EXISTS (
                SELECT * FROM {$wpdb->postmeta}
                WHERE {$wpdb->postmeta}.post_id = {$wpdb->posts}.ID
                AND {$wpdb->postmeta}.meta_key IN ('_rfq_tracking_code', '_rfq_client_name', '_rfq_phone')
                AND {$wpdb->postmeta}.meta_value LIKE '{$term}'
            )
        )";
        return $search;
    }

    /**
     * Admin Menu Notification Bubble
     */
    public function add_admin_menu_bubble() {
        global $menu;
        $count = count( get_posts( array(
            'post_type'   => 'rfq_lead',
            'post_status' => 'publish',
            'meta_key'    => '_rfq_status',
            'meta_value'  => 'new',
            'fields'      => 'ids',
            'numberposts' => -1,
        ) ) );

        if ( $count > 0 ) {
            foreach ( $menu as $key => $item ) {
                if ( $item[2] === 'edit.php?post_type=rfq_lead' ) {
                    $menu[ $key ][0] .= ' <span class="update-plugins count-' . $count . '"><span class="plugin-count">' . number_format_i18n( $count ) . '</span></span>';
                    break;
                }
            }
        }
    }

    /**
     * Meta Box on Single Lead Edit Screen
     */
    public function add_lead_meta_boxes() {
        add_meta_box(
            'machinedesign_lead_details',
            'مشخصات کامل پرونده استعلام و اقدامات فنی (RFQ File)',
            array( $this, 'render_lead_details_metabox' ),
            'rfq_lead',
            'normal',
            'high'
        );
    }

    public function render_lead_details_metabox( $post ) {
        wp_nonce_field( 'machinedesign_rfq_save_meta', 'machinedesign_rfq_nonce' );

        $tracking_code = get_post_meta( $post->ID, '_rfq_tracking_code', true );
        $client_name   = get_post_meta( $post->ID, '_rfq_client_name', true );
        $phone         = get_post_meta( $post->ID, '_rfq_phone', true );
        $service_type  = get_post_meta( $post->ID, '_rfq_service_type', true );
        $source_pillar = get_post_meta( $post->ID, '_rfq_source_pillar', true );
        $source_url    = get_post_meta( $post->ID, '_rfq_source_url', true );
        $desc          = get_post_meta( $post->ID, '_rfq_desc', true ) ?: $post->post_content;
        $status        = get_post_meta( $post->ID, '_rfq_status', true ) ?: 'new';
        $ip            = get_post_meta( $post->ID, '_rfq_ip', true );
        $submitted_at  = get_post_meta( $post->ID, '_rfq_submitted_at', true );
        $admin_notes   = get_post_meta( $post->ID, '_rfq_admin_notes', true );

        ?>
        <style>
            .rfq-admin-grid { display: grid; grid-template-columns: 1fr 1fr; gap: 16px; margin-bottom: 20px; }
            .rfq-admin-box { background: #f8fafc; border: 1px solid #e2e8f0; border-radius: 6px; padding: 14px; }
            .rfq-admin-box h4 { margin: 0 0 10px 0; font-size: 13px; color: #475569; text-transform: uppercase; }
            .rfq-admin-row { display: flex; justify-content: space-between; margin-bottom: 8px; font-size: 13px; }
            .rfq-admin-label { color: #64748b; font-weight: 600; }
            .rfq-admin-value { color: #0f172a; font-weight: 700; }
            .rfq-call-btn { display: inline-flex; align-items: center; gap: 6px; background: #16a34a; color: #fff; text-decoration: none; padding: 6px 14px; border-radius: 4px; font-weight: 700; font-size: 13px; margin-top: 6px; }
            .rfq-call-btn:hover { background: #15803d; color: #fff; }
        </style>

        <div class="rfq-admin-grid">
            <div class="rfq-admin-box">
                <h4>اطلاعات هویتی و تماس کارفرما</h4>
                <div class="rfq-admin-row">
                    <span class="rfq-admin-label">کد پیگیری سیستمی:</span>
                    <span class="rfq-admin-value" style="font-family:monospace; color:#16a34a;"><?php echo esc_html( $tracking_code ); ?></span>
                </div>
                <div class="rfq-admin-row">
                    <span class="rfq-admin-label">نام و شرکت متقاضی:</span>
                    <span class="rfq-admin-value"><?php echo esc_html( $client_name ?: 'ذکر نشده' ); ?></span>
                </div>
                <div class="rfq-admin-row">
                    <span class="rfq-admin-label">شماره همراه مستقیم:</span>
                    <span class="rfq-admin-value" dir="ltr" style="font-family:monospace;"><?php echo esc_html( $phone ?: 'ذکر نشده' ); ?></span>
                </div>
                <?php if ( $phone ) : ?>
                    <div>
                        <a href="tel:<?php echo esc_attr( $phone ); ?>" class="rfq-call-btn">
                            📞 تماس تلفنی مستقیم با متقاضی
                        </a>
                    </div>
                <?php endif; ?>
            </div>

            <div class="rfq-admin-box">
                <h4>مشخصات مبدا و زمان ثبت</h4>
                <div class="rfq-admin-row">
                    <span class="rfq-admin-label">ستون خدمت مرجع:</span>
                    <span class="rfq-admin-value"><?php echo esc_html( $source_pillar ?: 'عمومی' ); ?></span>
                </div>
                <div class="rfq-admin-row">
                    <span class="rfq-admin-label">کد سرویس درخواستی:</span>
                    <span class="rfq-admin-value"><?php echo esc_html( $service_type ?: 'کلی' ); ?></span>
                </div>
                <div class="rfq-admin-row">
                    <span class="rfq-admin-label">تاریخ و ساعت ثبت:</span>
                    <span class="rfq-admin-value" dir="ltr"><?php echo esc_html( $submitted_at ); ?></span>
                </div>
                <div class="rfq-admin-row">
                    <span class="rfq-admin-label">آدرس IP درخواست‌دهنده:</span>
                    <span class="rfq-admin-value" dir="ltr"><?php echo esc_html( $ip ); ?></span>
                </div>
            </div>
        </div>

        <div class="rfq-admin-box" style="margin-bottom: 20px;">
            <h4>شرح فنی پروژه و چالش مطرح شده توسط کارفرما</h4>
            <div style="background:#fff; border:1px solid #cbd5e1; border-radius:4px; padding:12px; font-size:13px; line-height:1.7; min-height:60px;">
                <?php echo nl2br( esc_html( $desc ?: 'توضیحات تکمیلی توسط کاربر ثبت نشده است.' ) ); ?>
            </div>
        </div>

        <div class="rfq-admin-grid">
            <div class="rfq-admin-box">
                <h4>وضعیت پرونده و اقدامات بعدی</h4>
                <label for="rfq_lead_status" style="display:block; margin-bottom:6px; font-weight:600;">وضعیت فرآیند پیگیری:</label>
                <select name="rfq_lead_status" id="rfq_lead_status" style="width:100%; padding:6px; font-size:13px;">
                    <option value="new" <?php selected( $status, 'new' ); ?>>🟢 جدید (نیاز به تماس اولیه)</option>
                    <option value="contacted" <?php selected( $status, 'contacted' ); ?>>🟡 تماس اولیه برقرار شد</option>
                    <option value="nda_sent" <?php selected( $status, 'nda_sent' ); ?>>🔵 پیش‌نویس توافق‌نامه NDA ارسال شد</option>
                    <option value="in_progress" <?php selected( $status, 'in_progress' ); ?>>🟣 جلسه ارزیابی کانسپت و امکان‌سنجی</option>
                    <option value="completed" <?php selected( $status, 'completed' ); ?>>⚪ تکمیل شد // قرارداد نهایی منعقد گردید</option>
                </select>
            </div>

            <div class="rfq-admin-box">
                <h4>یادداشت‌های داخلی تیم مهندسی (محرمانه)</h4>
                <textarea name="rfq_lead_notes" rows="3" style="width:100%; font-size:12px;" placeholder="نکات توافق‌شده در تماس، الزامات تلرانس، تاریخ تحویل و سوابق پیگیری..."><?php echo esc_textarea( $admin_notes ); ?></textarea>
            </div>
        </div>
        <?php
    }

    public function save_lead_meta( $post_id ) {
        if ( ! isset( $_POST['machinedesign_rfq_nonce'] ) || ! wp_verify_nonce( $_POST['machinedesign_rfq_nonce'], 'machinedesign_rfq_save_meta' ) ) {
            return;
        }
        if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) {
            return;
        }
        if ( ! current_user_can( 'edit_post', $post_id ) ) {
            return;
        }

        if ( isset( $_POST['rfq_lead_status'] ) ) {
            update_post_meta( $post_id, '_rfq_status', sanitize_text_field( $_POST['rfq_lead_status'] ) );
        }
        if ( isset( $_POST['rfq_lead_notes'] ) ) {
            update_post_meta( $post_id, '_rfq_admin_notes', sanitize_textarea_field( $_POST['rfq_lead_notes'] ) );
        }
    }

    /**
     * Settings Submenu Page
     */
    public function register_settings_submenu() {
        add_submenu_page(
            'edit.php?post_type=rfq_lead',
            'تنظیمات سیستم استعلام و اعلان‌ها',
            'تنظیمات و اعلان‌ها',
            'manage_options',
            'rfq-settings',
            array( $this, 'render_settings_page' )
        );
    }

    public function register_settings() {
        register_setting( 'machinedesign_rfq_group', 'machinedesign_rfq_admin_email' );
        register_setting( 'machinedesign_rfq_group', 'machinedesign_rfq_email_notify' );
        register_setting( 'machinedesign_rfq_group', 'machinedesign_rfq_prefix' );
    }

    public function render_settings_page() {
        ?>
        <div class="wrap" dir="rtl">
            <h1 style="margin-bottom:20px;">⚙️ تنظیمات سیستم مدیریت استعلام‌های فنی (RFQ Manager)</h1>
            <div style="background:#fff; border:1px solid #cbd5e1; border-radius:8px; padding:24px; max-width:760px; box-shadow:0 1px 3px rgba(0,0,0,0.05);">
                <form method="post" action="options.php">
                    <?php
                    settings_fields( 'machinedesign_rfq_group' );
                    do_settings_sections( 'machinedesign_rfq_group' );
                    $email  = get_option( 'machinedesign_rfq_admin_email', 'hosseinvatandoust699@gmail.com' );
                    $notify = get_option( 'machinedesign_rfq_email_notify', '1' );
                    $prefix = get_option( 'machinedesign_rfq_prefix', 'MD-RFQ-2026-' );
                    ?>
                    <table class="form-table" role="presentation">
                        <tr>
                            <th scope="row"><label for="machinedesign_rfq_admin_email">ایمیل دریافت اعلانات استعلام جدید</label></th>
                            <td>
                                <input name="machinedesign_rfq_admin_email" type="email" id="machinedesign_rfq_admin_email" value="<?php echo esc_attr( $email ); ?>" class="regular-text" dir="ltr">
                                <p class="description">پس از ثبت هر درخواست توسط کارفرمایان، خلاصه اطلاعات به این آدرس ارسال خواهد شد.</p>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">اعلان خودکار ایمیلی</th>
                            <td>
                                <label for="machinedesign_rfq_email_notify">
                                    <input name="machinedesign_rfq_email_notify" type="checkbox" id="machinedesign_rfq_email_notify" value="1" <?php checked( $notify, '1' ); ?>>
                                    ارسال فوری ایمیل به مدیر فنی پس از ثبت استعلام
                                </label>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row"><label for="machinedesign_rfq_prefix">پیشوند کدهای رهگیری عمومی</label></th>
                            <td>
                                <input name="machinedesign_rfq_prefix" type="text" id="machinedesign_rfq_prefix" value="<?php echo esc_attr( $prefix ); ?>" class="regular-text" dir="ltr">
                                <p class="description">پیش‌فرض کدهای پیگیری صادر شده برای مشتریان (مانند MD-RFQ-2026- یا MD-RD-2026-).</p>
                            </td>
                        </tr>
                    </table>

                    <div style="margin-top:24px; padding:16px; background:#f0fdf4; border:1px solid #bbf7d0; border-radius:6px;">
                        <h4 style="margin:0 0 8px 0; color:#16a34a;">⚡ همگام‌سازی ربات تلگرام و پیام‌رسان بله</h4>
                        <p style="margin:0; font-size:13px; color:#334155;">
                            این افزونه به گونه‌ای طراحی شده که اطلاعات استعلام‌های جدید مستقیماً از طریق پایگاه داده و هوک‌های وردپرس توسط ربات تلگرام <code>@hosseincomposio_bot</code> یا پیام‌رسان بله <code>@machinedesignbot</code> به راحتی دریافت و مانیتور می‌شود.
                        </p>
                    </div>

                    <?php submit_button( 'ذخیره تنظیمات RFQ' ); ?>
                </form>
            </div>
        </div>
        <?php
    }
}

// Initialize Plugin
MachineDesign_RFQ_Manager::instance();
