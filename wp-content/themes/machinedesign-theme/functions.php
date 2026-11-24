<?php
/**
 * MachineDesign Precision Theme — Core Bootstrapper
 *
 * Standalone, update-proof, Elementor-free WordPress theme engineered for
 * sub-second performance, native Gutenberg & WP-Admin editability, and full
 * Rank Math SEO & Form Plugin compatibility.
 *
 * @package MachineDesign
 * @version 2.0.0
 */

defined( 'ABSPATH' ) || exit;

define( 'MD_THEME_VERSION', '2.0.0' );
define( 'MD_THEME_PATH', get_template_directory() );
define( 'MD_THEME_URL', get_template_directory_uri() );

if ( ! isset( $content_width ) ) {
	$content_width = 860;
}

/**
 * 1. Core Theme Supports & Navigation Menus
 */
function md_theme_setup() {
	register_nav_menus(
		array(
			'menu-1' => 'منوی اصلی هدر',
			'menu-2' => 'منوی فوتر',
		)
	);

	add_post_type_support( 'page', 'excerpt' );

	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'automatic-feed-links' );
	add_theme_support( 'title-tag' );
	add_theme_support( 'align-wide' );
	add_theme_support( 'responsive-embeds' );
	add_theme_support( 'editor-styles' );
	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'script',
			'style',
			'navigation-widgets',
		)
	);
	add_theme_support(
		'custom-logo',
		array(
			'height'      => 100,
			'width'       => 350,
			'flex-height' => true,
			'flex-width'  => true,
		)
	);

	add_editor_style( 'assets/css/swiss-precision.css' );
}
add_action( 'after_setup_theme', 'md_theme_setup' );

/**
 * Backward compatibility shim for legacy templates referencing hello_elementor_body_open().
 */
if ( ! function_exists( 'hello_elementor_body_open' ) ) {
	function hello_elementor_body_open() {
		wp_body_open();
	}
}

/**
 * 2. Load Modular Theme Subsystems
 */
require_once MD_THEME_PATH . '/includes/theme-options.php';
require_once MD_THEME_PATH . '/includes/hero-media.php';
require_once MD_THEME_PATH . '/includes/cpt-team.php';
require_once MD_THEME_PATH . '/includes/cpt-project.php';
require_once MD_THEME_PATH . '/includes/block-patterns.php';
require_once MD_THEME_PATH . '/includes/seo-schema-bridge.php';

/**
 * 3. Conditional Asset Enqueuing (Self-Hosted Fonts + Swiss-German Precision CSS + Deferred JS)
 */
function md_enqueue_assets() {
	// Self-hosted Vazirmatn + JetBrains Mono if local WOFF2 files exist; graceful fallback otherwise.
	$local_font_file = MD_THEME_PATH . '/assets/fonts/Vazirmatn-Variable.woff2';
	if ( file_exists( $local_font_file ) ) {
		$font_css_path = MD_THEME_PATH . '/assets/css/fonts-local.css';
		wp_enqueue_style(
			'md-fonts-local',
			MD_THEME_URL . '/assets/css/fonts-local.css',
			array(),
			file_exists( $font_css_path ) ? (string) filemtime( $font_css_path ) : MD_THEME_VERSION
		);
	} else {
		wp_enqueue_style(
			'md-fonts-fallback',
			'https://fonts.googleapis.com/css2?family=JetBrains+Mono:wght@400;500;700&family=Vazirmatn:wght@300;400;500;600;700;800;900&display=swap',
			array(),
			null
		);
	}

	// Base reset stylesheet
	$reset_path = MD_THEME_PATH . '/assets/css/reset.css';
	if ( file_exists( $reset_path ) ) {
		wp_enqueue_style(
			'md-reset',
			MD_THEME_URL . '/assets/css/reset.css',
			array(),
			(string) filemtime( $reset_path )
		);
	}

	// Core theme structural stylesheet
	$style_path = MD_THEME_PATH . '/style.css';
	wp_enqueue_style(
		'md-theme-style',
		get_stylesheet_uri(),
		array( 'md-reset' ),
		file_exists( $style_path ) ? (string) filemtime( $style_path ) : MD_THEME_VERSION
	);

	// Swiss-German Precision Design System Layer (v2.0)
	$swiss_path = MD_THEME_PATH . '/assets/css/swiss-precision.css';
	if ( file_exists( $swiss_path ) ) {
		wp_enqueue_style(
			'md-swiss-precision',
			MD_THEME_URL . '/assets/css/swiss-precision.css',
			array( 'md-theme-style' ),
			(string) filemtime( $swiss_path )
		);
	}

	// Main interactive JS (deferred, cache-busted via filemtime)
	$main_js_path = MD_THEME_PATH . '/assets/js/main.js';
	if ( file_exists( $main_js_path ) ) {
		wp_enqueue_script(
			'md-main',
			MD_THEME_URL . '/assets/js/main.js',
			array(),
			(string) filemtime( $main_js_path ),
			array(
				'in_footer' => true,
				'strategy'  => 'defer',
			)
		);
		wp_localize_script(
			'md-main',
			'md_vars',
			array(
				'ajax_url' => admin_url( 'admin-ajax.php' ),
				'nonce'    => wp_create_nonce( 'md_rfq_nonce' ),
			)
		);
	}

	// Conditional 3D Stage Script (only on pages that actually render the 3D stage)
	if ( is_front_page() || is_page_template( array( 'page-machine-design.php', 'page-rd-prototyping.php' ) ) ) {
		$delta_js_path = MD_THEME_PATH . '/assets/js/delta-robot-3d.js';
		if ( file_exists( $delta_js_path ) ) {
			wp_enqueue_script(
				'md-delta-robot-3d',
				MD_THEME_URL . '/assets/js/delta-robot-3d.js',
				array(),
				(string) filemtime( $delta_js_path ),
				array(
					'in_footer' => true,
					'strategy'  => 'defer',
				)
			);
		}
	}
}
add_action( 'wp_enqueue_scripts', 'md_enqueue_assets', 20 );

/**
 * 4. Enable Modern Industrial Media & CAD Upload MIME Types
 */
function md_allow_industrial_mimes( $mimes ) {
	$mimes['avif'] = 'image/avif';
	$mimes['webp'] = 'image/webp';
	$mimes['dwg']  = 'application/acad';
	$mimes['step'] = 'application/step';
	$mimes['stp']  = 'application/step';
	return $mimes;
}
add_filter( 'upload_mimes', 'md_allow_industrial_mimes' );

/**
 * 5. Clean SEO Title Separator (Delegates all meta/titles cleanly to Rank Math when active)
 */
add_filter(
	'document_title_separator',
	function () {
		return '|';
	}
);

/**
 * Helper: Render optional Gutenberg content slot inside custom page templates
 * so editors can append/customize native blocks in WP-Admin without touching PHP.
 */
function md_render_optional_gutenberg_slot() {
	if ( ! is_singular( 'page' ) ) {
		return;
	}
	$raw_content = get_post_field( 'post_content', get_queried_object_id() );
	if ( empty( trim( wp_strip_all_tags( (string) $raw_content ) ) ) && false === strpos( (string) $raw_content, '<!-- wp:' ) ) {
		return;
	}
	echo '<section class="md-gutenberg-extension-slot"><div class="container entry-content">';
	the_content();
	echo '</div></section>';
}
