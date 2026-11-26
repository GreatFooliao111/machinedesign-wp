<?php
/**
 * Plugin Name: MachineDesign Core (Zero-Static Architecture)
 * Plugin URI: https://machinedesign.ir/
 * Description: Modular Zero-Static core plugin for MachineDesign.ir — CPTs (project, team_member), 3-axis flat taxonomies, 3-layer SEO & Rank Math Schema bridge, central Theme Options, dynamic Gutenberg blocks + Elementor shortcodes, and idempotent brownfield-safe seeder.
 * Version: 3.0.0
 * Author: MachineDesign Engineering Team
 * Requires at least: 6.5
 * Requires PHP: 8.1
 * Text Domain: machinedesign-core
 */

defined( 'ABSPATH' ) || exit;

define( 'MD_CORE_VERSION', '3.0.0' );
define( 'MD_CORE_PATH', plugin_dir_path( __FILE__ ) );
define( 'MD_CORE_URL', plugin_dir_url( __FILE__ ) );

require_once MD_CORE_PATH . 'includes/class-theme-options.php';
require_once MD_CORE_PATH . 'includes/class-cpts-taxonomies.php';
require_once MD_CORE_PATH . 'includes/class-seo-bridge.php';
require_once MD_CORE_PATH . 'includes/class-blocks-shortcodes.php';
require_once MD_CORE_PATH . 'includes/class-seeder.php';

register_activation_hook( __FILE__, function () {
    MD_Core_CPTs::register_all();
    MD_Core_Seeder::run_idempotent();
    flush_rewrite_rules();
} );

register_deactivation_hook( __FILE__, function () {
    flush_rewrite_rules();
} );
