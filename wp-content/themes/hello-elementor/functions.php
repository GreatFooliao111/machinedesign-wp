<?php
/**
 * Theme functions and definitions
 *
 * @package HelloElementor
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

define( 'HELLO_ELEMENTOR_VERSION', '3.4.9' );
define( 'EHP_THEME_SLUG', 'hello-elementor' );

define( 'HELLO_THEME_PATH', get_template_directory() );
define( 'HELLO_THEME_URL', get_template_directory_uri() );
define( 'HELLO_THEME_ASSETS_PATH', HELLO_THEME_PATH . '/assets/' );
define( 'HELLO_THEME_ASSETS_URL', HELLO_THEME_URL . '/assets/' );
define( 'HELLO_THEME_SCRIPTS_PATH', HELLO_THEME_ASSETS_PATH . 'js/' );
define( 'HELLO_THEME_SCRIPTS_URL', HELLO_THEME_ASSETS_URL . 'js/' );
define( 'HELLO_THEME_STYLE_PATH', HELLO_THEME_ASSETS_PATH . 'css/' );
define( 'HELLO_THEME_STYLE_URL', HELLO_THEME_ASSETS_URL . 'css/' );
define( 'HELLO_THEME_IMAGES_PATH', HELLO_THEME_ASSETS_PATH . 'images/' );
define( 'HELLO_THEME_IMAGES_URL', HELLO_THEME_ASSETS_URL . 'images/' );

if ( ! isset( $content_width ) ) {
	$content_width = 800; // Pixels.
}

if ( ! function_exists( 'hello_elementor_setup' ) ) {
	/**
	 * Set up theme support.
	 *
	 * @return void
	 */
	function hello_elementor_setup() {
		if ( is_admin() ) {
			hello_maybe_update_theme_version_in_db();
		}

		if ( apply_filters( 'hello_elementor_register_menus', true ) ) {
			register_nav_menus( [ 'menu-1' => esc_html__( 'Header', 'hello-elementor' ) ] );
			register_nav_menus( [ 'menu-2' => esc_html__( 'Footer', 'hello-elementor' ) ] );
		}

		if ( apply_filters( 'hello_elementor_post_type_support', true ) ) {
			add_post_type_support( 'page', 'excerpt' );
		}

		if ( apply_filters( 'hello_elementor_add_theme_support', true ) ) {
			add_theme_support( 'post-thumbnails' );
			add_theme_support( 'automatic-feed-links' );
			add_theme_support( 'title-tag' );
			add_theme_support(
				'html5',
				[
					'search-form',
					'comment-form',
					'comment-list',
					'gallery',
					'caption',
					'script',
					'style',
					'navigation-widgets',
				]
			);
			add_theme_support(
				'custom-logo',
				[
					'height'      => 100,
					'width'       => 350,
					'flex-height' => true,
					'flex-width'  => true,
				]
			);
			add_theme_support( 'align-wide' );
			add_theme_support( 'responsive-embeds' );

			/*
			 * Editor Styles
			 */
			add_theme_support( 'editor-styles' );
			add_editor_style( 'assets/css/editor-styles.css' );

			/*
			 * WooCommerce.
			 */
			if ( apply_filters( 'hello_elementor_add_woocommerce_support', true ) ) {
				// WooCommerce in general.
				add_theme_support( 'woocommerce' );
				// Enabling WooCommerce product gallery features (are off by default since WC 3.0.0).
				// zoom.
				add_theme_support( 'wc-product-gallery-zoom' );
				// lightbox.
				add_theme_support( 'wc-product-gallery-lightbox' );
				// swipe.
				add_theme_support( 'wc-product-gallery-slider' );
			}
		}
	}
}
add_action( 'after_setup_theme', 'hello_elementor_setup' );

function hello_maybe_update_theme_version_in_db() {
	$theme_version_option_name = 'hello_theme_version';
	// The theme version saved in the database.
	$hello_theme_db_version = get_option( $theme_version_option_name );

	// If the 'hello_theme_version' option does not exist in the DB, or the version needs to be updated, do the update.
	if ( ! $hello_theme_db_version || version_compare( $hello_theme_db_version, HELLO_ELEMENTOR_VERSION, '<' ) ) {
		update_option( $theme_version_option_name, HELLO_ELEMENTOR_VERSION );
	}
}

if ( ! function_exists( 'hello_elementor_display_header_footer' ) ) {
	/**
	 * Check whether to display header footer.
	 *
	 * @return bool
	 */
	function hello_elementor_display_header_footer() {
		$hello_elementor_header_footer = true;

		return apply_filters( 'hello_elementor_header_footer', $hello_elementor_header_footer );
	}
}

if ( ! function_exists( 'hello_elementor_scripts_styles' ) ) {
	/**
	 * Theme Scripts & Styles.
	 *
	 * @return void
	 */
	function hello_elementor_scripts_styles() {
		if ( apply_filters( 'hello_elementor_enqueue_style', true ) ) {
			wp_enqueue_style(
				'hello-elementor',
				HELLO_THEME_STYLE_URL . 'reset.css',
				[],
				HELLO_ELEMENTOR_VERSION
			);
		}

		if ( apply_filters( 'hello_elementor_enqueue_theme_style', true ) ) {
			wp_enqueue_style(
				'hello-elementor-theme-style',
				HELLO_THEME_STYLE_URL . 'theme.css',
				[],
				HELLO_ELEMENTOR_VERSION
			);
		}

		if ( hello_elementor_display_header_footer() ) {
			wp_enqueue_style(
				'hello-elementor-header-footer',
				HELLO_THEME_STYLE_URL . 'header-footer.css',
				[],
				HELLO_ELEMENTOR_VERSION
			);
		}

		// Delta Robot 3D Interactive Stage Engine (AVIF & Differential HUD Parallax)
		wp_enqueue_script(
			'delta-robot-3d',
			get_template_directory_uri() . '/assets/js/delta-robot-3d.js',
			[],
			'3.0.0',
			true
		);
	}
}
add_action( 'wp_enqueue_scripts', 'hello_elementor_scripts_styles' );

if ( ! function_exists( 'hello_elementor_register_elementor_locations' ) ) {
	/**
	 * Register Elementor Locations.
	 *
	 * @param ElementorPro\Modules\ThemeBuilder\Classes\Locations_Manager $elementor_theme_manager theme manager.
	 *
	 * @return void
	 */
	function hello_elementor_register_elementor_locations( $elementor_theme_manager ) {
		if ( apply_filters( 'hello_elementor_register_elementor_locations', true ) ) {
			$elementor_theme_manager->register_all_core_location();
		}
	}
}
add_action( 'elementor/theme/register_locations', 'hello_elementor_register_elementor_locations' );

if ( ! function_exists( 'hello_elementor_content_width' ) ) {
	/**
	 * Set default content width.
	 *
	 * @return void
	 */
	function hello_elementor_content_width() {
		$GLOBALS['content_width'] = apply_filters( 'hello_elementor_content_width', 800 );
	}
}
add_action( 'after_setup_theme', 'hello_elementor_content_width', 0 );

if ( ! function_exists( 'hello_elementor_add_description_meta_tag' ) ) {
	/**
	 * Add description meta tag with excerpt text.
	 *
	 * @return void
	 */
	function hello_elementor_add_description_meta_tag() {
		if ( ! apply_filters( 'hello_elementor_description_meta_tag', true ) ) {
			return;
		}

		if ( ! is_singular() ) {
			return;
		}

		$post = get_queried_object();
		if ( empty( $post->post_excerpt ) ) {
			return;
		}

		echo '<meta name="description" content="' . esc_attr( wp_strip_all_tags( $post->post_excerpt ) ) . '">' . "\n";
	}
}
add_action( 'wp_head', 'hello_elementor_add_description_meta_tag' );

// Settings page
require get_template_directory() . '/includes/settings-functions.php';

// MachineDesign Central Theme Options & Customization Hub (Automattic / Settings API)
require get_template_directory() . '/includes/theme-options.php';

// Team Members Custom Post Type & Dynamic Meta Controls
require get_template_directory() . '/includes/cpt-team.php';

// Engineering Projects Custom Post Type & Portfolio Controls
require get_template_directory() . '/includes/cpt-project.php';

// Header & footer styling option, inside Elementor
require get_template_directory() . '/includes/elementor-functions.php';

if ( ! function_exists( 'hello_elementor_customizer' ) ) {
	// Customizer controls
	function hello_elementor_customizer() {
		if ( ! is_customize_preview() ) {
			return;
		}

		if ( ! hello_elementor_display_header_footer() ) {
			return;
		}

		require get_template_directory() . '/includes/customizer-functions.php';
	}
}
add_action( 'init', 'hello_elementor_customizer' );

if ( ! function_exists( 'hello_elementor_check_hide_title' ) ) {
	/**
	 * Check whether to display the page title.
	 *
	 * @param bool $val default value.
	 *
	 * @return bool
	 */
	function hello_elementor_check_hide_title( $val ) {
		if ( defined( 'ELEMENTOR_VERSION' ) ) {
			$current_doc = Elementor\Plugin::instance()->documents->get( get_the_ID() );
			if ( $current_doc && 'yes' === $current_doc->get_settings( 'hide_title' ) ) {
				$val = false;
			}
		}
		return $val;
	}
}
add_filter( 'hello_elementor_page_title', 'hello_elementor_check_hide_title' );

/**
 * BC:
 * In v2.7.0 the theme removed the `hello_elementor_body_open()` from `header.php` replacing it with `wp_body_open()`.
 * The following code prevents fatal errors in child themes that still use this function.
 */
if ( ! function_exists( 'hello_elementor_body_open' ) ) {
	function hello_elementor_body_open() {
		wp_body_open();
	}
}

require HELLO_THEME_PATH . '/theme.php';

HelloTheme\Theme::instance();

// Disable obsolete Hello Elementor default header-footer styling globally since MachineDesign provides its own complete standard header & footer
add_filter( 'hello_elementor_header_footer', '__return_false' );

// Disable Hello Elementor default theme.css to prevent boxing .site-main to 1140px
add_filter( 'hello_elementor_enqueue_theme_style', '__return_false' );

// MachineDesign.ir Standard Unified Styling & Interactive Enqueue
function machinedesign_enqueue_custom_styles() {
    // Fonts: Vazirmatn (Persian) + brand technical mono face
    wp_enqueue_style( 'google-fonts-md', 'https://fonts.googleapis.com/css2?family=JetBrains+Mono:ital,wght@0,400;0,500;0,700;1,400&family=Vazirmatn:wght@300;400;500;600;700;800;900&display=swap', array(), null ); // taste-skill-ignore: JetBrains Mono is the constitution technical face
    
    // MachineDesign.ir Primary Unified Theme Stylesheet (Auto cache-busting on file change)
    $theme_style_path = get_stylesheet_directory() . '/style.css';
    $style_version = file_exists( $theme_style_path ) ? filemtime( $theme_style_path ) : '5.6.0';
    wp_enqueue_style( 'machinedesign-theme-style', get_stylesheet_uri(), array( 'hello-elementor' ), $style_version );
    
    // MachineDesign.ir Primary Interactive JS
    wp_enqueue_script( 'machinedesign-main', get_template_directory_uri() . '/assets/js/main.js', array(), '5.5.0', true );
    wp_localize_script( 'machinedesign-main', 'md_vars', array(
        'ajax_url' => admin_url( 'admin-ajax.php' ),
        'nonce'    => wp_create_nonce( 'md_rfq_nonce' ),
    ) );
}
add_action( 'wp_enqueue_scripts', 'machinedesign_enqueue_custom_styles', 99999 );
add_action( 'enqueue_block_editor_assets', 'machinedesign_enqueue_custom_styles', 99999 );

// RFQ Lead Management is handled by the dedicated "MachineDesign RFQ Manager" plugin
if ( ! class_exists( 'MachineDesign_RFQ_Manager' ) ) {
    add_action( 'wp_ajax_machinedesign_rfq', 'machinedesign_handle_rfq_submission' );
    add_action( 'wp_ajax_nopriv_machinedesign_rfq', 'machinedesign_handle_rfq_submission' );

    function machinedesign_handle_rfq_submission() {
        $service = isset( $_POST['service'] ) ? sanitize_text_field( $_POST['service'] ) : '';
        $phone   = isset( $_POST['phone'] ) ? sanitize_text_field( $_POST['phone'] ) : '';

        if ( empty( $phone ) ) {
            wp_send_json_error( array( 'message' => 'شماره تماس الزامی است.' ) );
        }

        $tracking_code = 'MD-RFQ-' . wp_rand( 1000, 9999 );
        $leads = get_option( 'machinedesign_rfq_leads', array() );
        $leads[] = array(
            'tracking' => $tracking_code,
            'service'  => $service,
            'phone'    => $phone,
            'date'     => current_time( 'mysql' ),
            'ip'       => $_SERVER['REMOTE_ADDR'] ?? '',
        );
        update_option( 'machinedesign_rfq_leads', $leads );

        wp_send_json_success( array(
            'message'  => 'درخواست با موفقیت ثبت شد',
            'tracking' => $tracking_code,
        ) );
    }
}

// Hide default Hello Elementor title on front page
add_filter( 'hello_elementor_page_title', function( $val ) {
    return is_front_page() ? false : $val;
} );

// Enable AVIF, DWG & CAD Mime Types Support in WordPress
add_filter( 'upload_mimes', function( $mimes ) {
	$mimes['avif'] = 'image/avif';
	$mimes['avis'] = 'image/avif-sequence';
	$mimes['dwg']  = 'application/acad';
	$mimes['step'] = 'application/step';
	$mimes['stp']  = 'application/step';
	return $mimes;
} );

// Standard Dynamic WordPress Document Title Filter (< 60 chars)
add_filter( 'document_title_separator', function() {
	return '|';
} );

add_filter( 'document_title_parts', function( $parts ) {
	if ( is_front_page() ) {
		return $parts;
	}
	// Shorten site suffix across all internal pages to '| ماشین دیزاین'
	$parts['site'] = 'ماشین دیزاین';
	unset( $parts['tagline'] );
	return $parts;
}, 999 );

add_filter( 'pre_get_document_title', function( $title ) {
	if ( is_front_page() ) {
		return 'ماشین دیزاین | طراحی ماشین‌آلات صنعتی و خطوط تولید';
	}
	if ( is_page( 'engineering-mentorship' ) || is_page_template( 'page-engineering-mentorship.php' ) ) {
		return 'منتورشیپ فردی سالیدورکس، Ansys و GD&T | ماشین دیزاین';
	}
	return $title;
}, 999 );

add_filter( 'rank_math/frontend/title', function( $title ) {
	if ( is_front_page() ) {
		return 'ماشین دیزاین | طراحی ماشین‌آلات صنعتی و خطوط تولید';
	}
	if ( is_page( 'engineering-mentorship' ) || is_page_template( 'page-engineering-mentorship.php' ) ) {
		return 'منتورشیپ فردی سالیدورکس، Ansys و GD&T | ماشین دیزاین';
	}
	$long_suffix = 'ماشین دیزاین | مرجع مهندسی، طراحی ماشین‌آلات و خطوط تولید';
	if ( false !== strpos( $title, $long_suffix ) ) {
		$title = str_replace( $long_suffix, 'ماشین دیزاین', $title );
	}
	return $title;
}, 999 );

add_filter( 'wp_check_filetype_and_ext', function( $types, $file, $filename, $mimes ) {
    if ( false !== strpos( $filename, '.avif' ) ) {
        $types['ext']  = 'avif';
        $types['type'] = 'image/avif';
    } elseif ( false !== strpos( $filename, '.avis' ) ) {
        $types['ext']  = 'avis';
        $types['type'] = 'image/avif-sequence';
    }
    return $types;
}, 10, 4 );

// MachineDesign SEO & Schema Integration Bridge (Rank Math JSON-LD Extension)
if ( file_exists( __DIR__ . '/includes/seo-schema-bridge.php' ) ) {
    require_once __DIR__ . '/includes/seo-schema-bridge.php';
}

/**
 * Helper: Calculate dynamic reading time for a post (Persian UTF-8 aware)
 *
 * @param WP_Post|int|null $post Optional post object or ID.
 * @return string Formatted reading time with Persian numerals (e.g. "۸ دقیقه مطالعه").
 */
if ( ! function_exists( 'md_get_reading_time' ) ) {
    function md_get_reading_time( $post = null ) {
        $post = get_post( $post );
        if ( ! $post ) {
            return '۵ دقیقه مطالعه';
        }

        $content = trim( strip_tags( $post->post_content ) );
        if ( empty( $content ) ) {
            return '۳ دقیقه مطالعه';
        }

        $words = preg_split( '/\s+/u', $content, -1, PREG_SPLIT_NO_EMPTY );
        $word_count = is_array( $words ) ? count( $words ) : 0;
        $minutes = max( 1, (int) ceil( $word_count / 180 ) );

        $persian_digits = array( '۰', '۱', '۲', '۳', '۴', '۵', '۶', '۷', '۸', '۹' );
        $latin_digits   = array( '0', '1', '2', '3', '4', '5', '6', '7', '8', '9' );
        $minutes_fa     = str_replace( $latin_digits, $persian_digits, (string) $minutes );

        return $minutes_fa . ' دقیقه مطالعه';
    }
}




