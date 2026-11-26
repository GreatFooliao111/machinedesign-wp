<?php
defined( 'ABSPATH' ) || exit;

define( 'MD_TRUMPF_VER', '3.0.0' );

add_action( 'after_setup_theme', function () {
    register_nav_menus( array(
        'menu-1' => 'منوی اصلی هدر (TRUMPF)',
        'menu-2' => 'منوی فوتر',
    ) );
    add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'align-wide' );
    add_theme_support( 'responsive-embeds' );
    add_theme_support( 'html5', array( 'search-form', 'gallery', 'caption', 'script', 'style' ) );
    add_theme_support( 'editor-styles' );
    add_editor_style( 'assets/css/trumpf-motion.css' );
} );

add_action( 'wp_enqueue_scripts', function () {
    $dir = get_template_directory();
    $uri = get_template_directory_uri();

    // Self-hosted fonts if installed via setup-xampp.ps1, else clean Google Fonts fallback
    if ( file_exists( $dir . '/assets/fonts/Vazirmatn-Variable.woff2' ) ) {
        wp_enqueue_style( 'md-fonts-local', $uri . '/assets/css/fonts-local.css', array(), MD_TRUMPF_VER );
    } else {
        wp_enqueue_style( 'md-fonts-google', 'https://fonts.googleapis.com/css2?family=JetBrains+Mono:wght@400;500;700&family=Vazirmatn:wght@300;400;500;600;700;800;900&display=swap', array(), null );
    }

    $css_file = $dir . '/assets/css/trumpf-motion.css';
    wp_enqueue_style( 'md-trumpf-motion', $uri . '/assets/css/trumpf-motion.css', array(), file_exists( $css_file ) ? (string) filemtime( $css_file ) : MD_TRUMPF_VER );

    $js_file = $dir . '/assets/js/trumpf-motion.js';
    wp_enqueue_script( 'md-trumpf-motion', $uri . '/assets/js/trumpf-motion.js', array(), file_exists( $js_file ) ? (string) filemtime( $js_file ) : MD_TRUMPF_VER, array( 'in_footer' => true, 'strategy' => 'defer' ) );
    wp_localize_script( 'md-trumpf-motion', 'md_vars', array(
        'ajax_url' => admin_url( 'admin-ajax.php' ),
        'nonce'    => wp_create_nonce( 'md_rfq_nonce' ),
    ) );

    if ( is_front_page() || is_page_template( array( 'page-service-pillar.php', 'page-machine-design.php', 'page-rd-prototyping.php' ) ) ) {
        if ( file_exists( $dir . '/assets/js/delta-robot-3d.js' ) ) {
            wp_enqueue_script( 'md-delta-3d', $uri . '/assets/js/delta-robot-3d.js', array(), MD_TRUMPF_VER, array( 'in_footer' => true, 'strategy' => 'defer' ) );
        }
    }
}, 20 );

if ( ! function_exists( 'md_get_reading_time' ) ) {
    function md_get_reading_time( $post = null ) {
        $post = get_post( $post );
        if ( ! $post ) { return '۵ دقیقه مطالعه'; }
        $words = preg_split( '/\s+/u', trim( wp_strip_all_tags( (string) $post->post_content ) ), -1, PREG_SPLIT_NO_EMPTY );
        $mins  = max( 1, (int) ceil( ( is_array( $words ) ? count( $words ) : 0 ) / 180 ) );
        $fa    = array( '۰', '۱', '۲', '۳', '۴', '۵', '۶', '۷', '۸', '۹' );
        $en    = array( '0', '1', '2', '3', '4', '5', '6', '7', '8', '9' );
        return str_replace( $en, $fa, (string) $mins ) . ' دقیقه مطالعه';
    }
}
