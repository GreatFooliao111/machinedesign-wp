<?php
/**
 * MachineDesign.ir Master Theme Settings & Central Specifications Hub
 *
 * Built according to official WordPress Settings API & Automattic guidelines:
 * - Strict capability checks ('manage_options')
 * - Nonce-protected options.php submission
 * - Unified client-side tabs (All fields saved together without data loss)
 * - Strict sanitization whitelist and safe merging
 * - Context-aware escaping and public helper functions
 *
 * @package MachineDesign
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * 1. Default Theme Options Schema & Fallback Values
 *
 * @return array
 */
function machinedesign_get_default_options() {
	return array(
		// تب ۱: کارگاه و تماس مستقیم (Workshop & Contact)
		'workshop_city'          => 'مشهد',
		'workshop_address'       => 'مشهد، میدان جانباز، برج سامان، طبقه ۴، واحد ۴۰۲',
		'phone_primary'          => '۰۵۱-۳۷۶۰۰۰۰۰', // تلفن ثابت دفتر مرکزی مشهد
		'phone_mobile'           => '۰۹۳۵۸۶۸۹۸۲۹', // تلفن همراه و مشاوره مستقیم مهندسی
		'phone_support'          => '۰۵۱-۳۷۶۰۰۰۰۰', // تلفن پشتیبانی یا کارگاه
		'contact_email'          => 'info@machinedesign.ir', // ایمیل رسمی مکاتبات فنی
		'working_hours'          => 'شنبه تا چهارشنبه: ۸:۰۰ الی ۱۷:۰۰ | پنج‌شنبه: ۸:۰۰ الی ۱۳:۰۰',
		'working_hours_short'    => '۸:۰۰ الی ۱۸:۰۰',
		'map_coordinates'        => '36.3664, 59.5375',
		'map_osm_url'            => 'https://www.openstreetmap.org/?mlat=36.36645&mlon=59.53751#map=17/36.36645/59.53751',

		// تب ۲: آمارهای فنی و شاخص‌های کلیدی (Key Metrics & KPIs)
		'stat_years_experience'  => '۱۵+ سال',
		'stat_engineers'         => '۱۶+',
		'stat_projects'          => '۱۵۰+',
		'stat_production_lines'  => '۴۰+',
		'stat_satisfaction'      => '۹۸٪',
		'stat_capacity_range'    => '۱,۰۰۰ الی ۱۰,۰۰۰ عدد در ساعت',
		'stat_response_time'     => 'کمتر از ۲۴ ساعت کاری',

		// تب ۳: شبکه‌های اجتماعی و پیام‌رسان‌ها (Social & Channels)
		'instagram_business'     => 'machinedesign.ir',
		'instagram_personal'     => 'h.vatan.doust',
		'telegram_channel'       => 'machinedesign_ir',
		'telegram_bot'           => 'hosseincomposio_bot',
		'bale_channel'           => 'machinedesign_ir',
		'bale_prompt2product'    => 'prompt2product',
		'youtube_channel'        => 'https://www.youtube.com/@hosseinvatandoust',
		'linkedin_url'           => 'https://www.linkedin.com/in/hossein-vatandoust',

		// تب ۴: تله‌متری استعلام و نوتیفیکیشن لیدها (RFQ Telemetry)
		'rfq_recipient_email'    => 'hosseinvatandoust699@gmail.com',
		'rfq_telegram_chat_id'   => '7280306397',
		'rfq_telegram_enabled'   => '1',
		'rfq_hud_success_title'  => 'استعلام فنی با موفقیت ثبت شد',
		'rfq_hud_success_desc'   => 'کد پیگیری تله‌متری صادر شد. کارشناسان ارشد طراحی ماشین ظرف ۲۴ ساعت با شما تماس خواهند گرفت.',

		// تب ۵: وبمستر و سئو (Webmaster & SEO)
		'google_site_verify'     => '',
		'bing_site_verify'       => '',
		'default_og_image'       => get_template_directory_uri() . '/assets/images/og-machinedesign-1200x630.png',
		'brand_claim'            => 'طراحی تخصصی ماشین‌آلات صنعتی، خطوط تولید و مهندسی مکانیک پیشرفته',
	);
}

/**
 * 2. Public Helper Function to Retrieve Theme Option with Fallback
 *
 * @param string $key
 * @param mixed  $default
 * @return mixed
 */
function md_get_option( $key, $default = '' ) {
	$options  = get_option( 'machinedesign_theme_options', array() );
	$defaults = machinedesign_get_default_options();

	if ( isset( $options[ $key ] ) && '' !== $options[ $key ] ) {
		return $options[ $key ];
	}

	if ( '' !== $default ) {
		return $default;
	}

	return isset( $defaults[ $key ] ) ? $defaults[ $key ] : '';
}

/**
 * Helper for Statistics
 */
function md_get_stat( $key, $default = '' ) {
	// Support both 'stat_xxx' and 'xxx'
	if ( 0 !== strpos( $key, 'stat_' ) ) {
		$key = 'stat_' . $key;
	}
	return esc_html( md_get_option( $key, $default ) );
}

/**
 * Helper for Contact Info
 */
function md_get_contact( $key, $default = '' ) {
	// Legacy pillar-template keys ('phone'/'mobile') map to the canonical options.
	$aliases = array(
		'phone'  => 'phone_primary',
		'mobile' => 'phone_mobile',
	);
	if ( isset( $aliases[ $key ] ) ) {
		$key = $aliases[ $key ];
	}
	return esc_html( md_get_option( $key, $default ) );
}

/**
 * Normalize a display phone number (Persian/Arabic digits allowed) for a tel: URI.
 *
 * @param string $phone Phone number as shown to the user.
 * @return string ASCII digits (and optional plus) safe for href="tel:...".
 */
function md_tel_uri( $phone ) {
	$persian = array( '۰', '۱', '۲', '۳', '۴', '۵', '۶', '۷', '۸', '۹' );
	$arabic  = array( '٠', '١', '٢', '٣', '٤', '٥', '٦', '٧', '٨', '٩' );
	$ascii   = array( '0', '1', '2', '3', '4', '5', '6', '7', '8', '9' );
	$phone   = str_replace( $persian, $ascii, (string) $phone );
	$phone   = str_replace( $arabic, $ascii, $phone );
	return preg_replace( '/[^0-9+]/', '', $phone );
}

/**
 * Helper for Social Links
 */
function md_get_social( $key, $default = '' ) {
	return esc_attr( md_get_option( $key, $default ) );
}

/**
 * 3. Register Top-Level Admin Menu Page & Quick Submenus
 */
function machinedesign_register_options_menu() {
	// Main top-level menu at position 3 (right below Dashboard)
	add_menu_page(
		__( 'تنظیمات مشخصات سایت | ماشین دیزاین', 'machinedesign' ),
		__( '⚙️ تنظیمات سایت', 'machinedesign' ),
		'manage_options',
		'machinedesign-options',
		'machinedesign_render_options_page',
		'dashicons-admin-settings',
		3
	);

	// Primary Submenu: Site Settings
	add_submenu_page(
		'machinedesign-options',
		__( 'مشخصات و شماره‌های سایت', 'machinedesign' ),
		__( 'اطلاعات تماس و مشخصات', 'machinedesign' ),
		'manage_options',
		'machinedesign-options',
		'machinedesign_render_options_page'
	);

	// Shortcut Submenu: Team Members
	add_submenu_page(
		'machinedesign-options',
		__( 'مدیریت اعضای تیم', 'machinedesign' ),
		__( 'اعضای تیم مهندسی', 'machinedesign' ),
		'edit_posts',
		'edit.php?post_type=team_member'
	);

	// Shortcut Submenu: Founder Profile (Hossein Vatandoust)
	add_submenu_page(
		'machinedesign-options',
		__( 'پروفایل بنیان‌گذار (حسین وطن‌دوست)', 'machinedesign' ),
		__( 'پروفایل بنیان‌گذار', 'machinedesign' ),
		'edit_posts',
		'post.php?post=159&action=edit'
	);
}
add_action( 'admin_menu', 'machinedesign_register_options_menu' );

/**
 * Quick access button in WordPress Admin Bar (top bar) for site administrators
 */
function machinedesign_admin_bar_settings_link( $wp_admin_bar ) {
	if ( ! current_user_can( 'manage_options' ) ) {
		return;
	}
	$wp_admin_bar->add_node( array(
		'id'    => 'md-site-settings',
		'title' => '<span class="ab-icon dashicons dashicons-admin-settings" style="margin-top:2px;"></span> <span class="ab-label">⚙️ تنظیمات سایت</span>',
		'href'  => admin_url( 'admin.php?page=machinedesign-options' ),
		'meta'  => array( 'title' => 'مدیریت تلفن‌ها، آدرس‌ها و مشخصات ماشین دیزاین' ),
	) );
}
add_action( 'admin_bar_menu', 'machinedesign_admin_bar_settings_link', 80 );

/**
 * 4. Register Setting with Settings API & Sanitization Callback
 */
function machinedesign_register_settings() {
	register_setting(
		'machinedesign_options_group',
		'machinedesign_theme_options',
		array(
			'type'              => 'array',
			'sanitize_callback' => 'machinedesign_sanitize_options',
			'default'           => machinedesign_get_default_options(),
		)
	);
}
add_action( 'admin_init', 'machinedesign_register_settings' );

/**
 * Strict Input Sanitization Callback with Safe Merging
 *
 * @param array $input
 * @return array
 */
function machinedesign_sanitize_options( $input ) {
	if ( ! is_array( $input ) ) {
		return array();
	}

	$defaults = machinedesign_get_default_options();
	$existing = get_option( 'machinedesign_theme_options', $defaults );
	$clean    = is_array( $existing ) ? $existing : $defaults;

	// Single-line text fields
	$text_fields = array(
		'workshop_city',
		'phone_primary',
		'phone_mobile',
		'phone_support',
		'working_hours',
		'working_hours_short',
		'map_coordinates',
		'stat_years_experience',
		'stat_engineers',
		'stat_projects',
		'stat_production_lines',
		'stat_satisfaction',
		'stat_capacity_range',
		'stat_response_time',
		'instagram_business',
		'instagram_personal',
		'telegram_channel',
		'telegram_bot',
		'bale_channel',
		'bale_prompt2product',
		'rfq_telegram_chat_id',
		'rfq_hud_success_title',
		'brand_claim',
		'google_site_verify',
		'bing_site_verify',
	);

	foreach ( $text_fields as $field ) {
		if ( isset( $input[ $field ] ) ) {
			$clean[ $field ] = sanitize_text_field( wp_unslash( $input[ $field ] ) );
		}
	}

	// Textarea fields
	$textarea_fields = array( 'workshop_address', 'rfq_hud_success_desc' );
	foreach ( $textarea_fields as $field ) {
		if ( isset( $input[ $field ] ) ) {
			$clean[ $field ] = sanitize_textarea_field( wp_unslash( $input[ $field ] ) );
		}
	}

	// Email fields
	$email_fields = array( 'contact_email', 'rfq_recipient_email' );
	foreach ( $email_fields as $field ) {
		if ( isset( $input[ $field ] ) ) {
			$clean[ $field ] = sanitize_email( wp_unslash( $input[ $field ] ) );
		}
	}

	// URL fields
	$url_fields = array( 'map_osm_url', 'youtube_channel', 'linkedin_url', 'default_og_image' );
	foreach ( $url_fields as $field ) {
		if ( isset( $input[ $field ] ) ) {
			$clean[ $field ] = esc_url_raw( wp_unslash( $input[ $field ] ) );
		}
	}

	// Checkbox fields
	if ( isset( $input['rfq_telegram_enabled'] ) ) {
		$clean['rfq_telegram_enabled'] = '1';
	} else {
		// Only uncheck if the telemetry form section was actually posted
		if ( isset( $input['rfq_recipient_email'] ) ) {
			$clean['rfq_telegram_enabled'] = '0';
		}
	}

	if ( function_exists( 'add_settings_error' ) ) {
		add_settings_error(
			'machinedesign_options_group',
			'machinedesign_updated',
			__( 'تمامی مشخصات و تنظیمات سایت با موفقیت به‌روزرسانی شد.', 'machinedesign' ),
			'updated'
		);
	}

	return $clean;
}

/**
 * 5. Render Cyber-Mechanical Master Admin Console
 */
function machinedesign_render_options_page() {
	if ( ! current_user_can( 'manage_options' ) ) {
		wp_die( esc_html__( 'شما مجوز دسترسی به این بخش را ندارید.', 'machinedesign' ) );
	}

	$defaults = machinedesign_get_default_options();
	$options  = get_option( 'machinedesign_theme_options', $defaults );
	if ( ! is_array( $options ) ) {
		$options = $defaults;
	} else {
		$options = array_merge( $defaults, $options );
	}
	?>
	<div class="wrap md-options-console" dir="rtl">
		<style>
			:root {
				--md-c-bg: #0B0D11;
				--md-c-surface: #121824;
				--md-c-surface-card: #161E2E;
				--md-c-border: rgba(255, 255, 255, 0.08);
				--md-c-border-highlight: rgba(217, 119, 6, 0.35);
				--md-c-amber: #D97706;
				--md-c-amber-hover: #F59E0B;
				--md-c-text: #F1F5F9;
				--md-c-muted: #94A3B8;
				--md-c-subtle: #64748B;
				--md-font: 'Vazirmatn', -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, sans-serif;
			}
			.md-options-console {
				max-width: 1180px;
				margin: 20px 20px 40px 0;
				font-family: var(--md-font);
				color: var(--md-c-text);
			}
			.md-options-console * {
				box-sizing: border-box;
			}
			/* Header HUD */
			.md-opt-hud {
				background: linear-gradient(135deg, #0B0D11 0%, #121824 100%);
				border: 1px solid var(--md-c-border-highlight);
				border-radius: 14px;
				padding: 24px 28px;
				margin-bottom: 22px;
				display: flex;
				align-items: center;
				justify-content: space-between;
				flex-wrap: wrap;
				gap: 16px;
				box-shadow: 0 8px 32px rgba(0, 0, 0, 0.3);
			}
			.md-opt-title-area h1 {
				color: #FFFFFF;
				font-size: 22px;
				font-weight: 800;
				margin: 0 0 6px 0;
				display: flex;
				align-items: center;
				gap: 12px;
				line-height: 1.3;
			}
			.md-opt-badge {
				background: rgba(217, 119, 6, 0.15);
				color: var(--md-c-amber);
				border: 1px solid var(--md-c-amber);
				border-radius: 6px;
				font-size: 11px;
				font-weight: 700;
				padding: 2px 8px;
				letter-spacing: 0.5px;
				vertical-align: middle;
				font-family: monospace;
			}
			.md-opt-title-area p {
				color: var(--md-c-muted);
				font-size: 13px;
				margin: 0;
				line-height: 1.5;
			}
			.md-opt-hud-actions {
				display: flex;
				align-items: center;
				gap: 12px;
			}
			.md-btn-save-master {
				background: var(--md-c-amber) !important;
				color: #0B0D11 !important;
				border: 1px solid var(--md-c-amber-hover) !important;
				font-weight: 800 !important;
				font-size: 14px !important;
				padding: 10px 24px !important;
				border-radius: 8px !important;
				cursor: pointer !important;
				transition: all 0.2s ease !important;
				display: inline-flex !important;
				align-items: center !important;
				gap: 8px !important;
				box-shadow: 0 2px 10px rgba(217, 119, 6, 0.25) !important;
			}
			.md-btn-save-master:hover {
				background: var(--md-c-amber-hover) !important;
				transform: translateY(-1px);
				box-shadow: 0 4px 16px rgba(217, 119, 6, 0.4) !important;
			}
			/* Tab Bar */
			.md-tabs-nav {
				display: flex;
				gap: 8px;
				margin-bottom: -1px;
				overflow-x: auto;
				padding-bottom: 2px;
			}
			.md-tab-trigger {
				background: #0E131C;
				color: var(--md-c-muted);
				border: 1px solid var(--md-c-border);
				border-bottom: none;
				border-radius: 10px 10px 0 0;
				padding: 12px 20px;
				font-size: 13.5px;
				font-weight: 700;
				cursor: pointer;
				display: inline-flex;
				align-items: center;
				gap: 8px;
				transition: all 0.2s ease;
				text-decoration: none;
				user-select: none;
			}
			.md-tab-trigger:hover {
				background: #161E2E;
				color: #FFFFFF;
			}
			.md-tab-trigger.active {
				background: var(--md-c-surface);
				color: var(--md-c-amber);
				border-color: var(--md-c-border-highlight);
				border-bottom: 2px solid var(--md-c-surface);
				position: relative;
				z-index: 2;
			}
			.md-tab-trigger svg {
				width: 17px;
				height: 17px;
				stroke-width: 2.2;
			}
			/* Tab Container */
			.md-console-body {
				background: var(--md-c-surface);
				border: 1px solid var(--md-c-border-highlight);
				border-radius: 0 0 14px 14px;
				padding: 32px 30px;
				position: relative;
				z-index: 1;
				box-shadow: 0 10px 30px rgba(0, 0, 0, 0.25);
			}
			.md-tab-pane {
				display: none;
			}
			.md-tab-pane.active {
				display: block;
				animation: mdFadeIn 0.2s ease-in-out;
			}
			@keyframes mdFadeIn {
				from { opacity: 0; transform: translateY(4px); }
				to { opacity: 1; transform: translateY(0); }
			}
			/* Bento Card Layout */
			.md-bento-grid {
				display: grid;
				grid-template-columns: repeat(auto-fit, minmax(480px, 1fr));
				gap: 22px;
				margin-bottom: 22px;
			}
			@media (max-width: 768px) {
				.md-bento-grid {
					grid-template-columns: 1fr;
				}
			}
			.md-bento-card {
				background: var(--md-c-surface-card);
				border: 1px solid var(--md-c-border);
				border-radius: 12px;
				padding: 22px;
				position: relative;
			}
			.md-bento-card.full-width {
				grid-column: 1 / -1;
			}
			.md-card-header {
				display: flex;
				align-items: center;
				justify-content: space-between;
				margin-bottom: 18px;
				padding-bottom: 12px;
				border-bottom: 1px solid var(--md-c-border);
			}
			.md-card-header h3 {
				color: #FFFFFF;
				font-size: 15px;
				font-weight: 800;
				margin: 0;
				display: flex;
				align-items: center;
				gap: 8px;
			}
			.md-badge-loc {
				background: rgba(255, 255, 255, 0.06);
				color: #CBD5E1;
				border: 1px solid rgba(255, 255, 255, 0.12);
				border-radius: 4px;
				font-size: 11px;
				padding: 2px 7px;
				font-weight: 500;
			}
			.md-field-group {
				margin-bottom: 18px;
			}
			.md-field-group:last-child {
				margin-bottom: 0;
			}
			.md-field-group label {
				display: block;
				color: #F1F5F9;
				font-size: 13.5px;
				font-weight: 700;
				margin-bottom: 6px;
			}
			.md-field-desc {
				color: var(--md-c-muted);
				font-size: 12px;
				line-height: 1.5;
				margin: 6px 0 0 0;
			}
			.md-input-ctrl {
				width: 100%;
				background: #0B0D11 !important;
				border: 1px solid rgba(255, 255, 255, 0.16) !important;
				border-radius: 8px !important;
				padding: 10px 14px !important;
				font-size: 13.5px !important;
				color: #FFFFFF !important;
				transition: all 0.2s ease !important;
				font-family: inherit !important;
			}
			.md-input-ctrl:focus {
				border-color: var(--md-c-amber) !important;
				outline: none !important;
				box-shadow: 0 0 0 3px rgba(217, 119, 6, 0.25) !important;
			}
			.md-input-ctrl.mono {
				font-family: "JetBrains Mono", Consolas, monospace !important;
				direction: ltr !important;
				text-align: left !important;
			}
			.md-textarea-ctrl {
				width: 100%;
				background: #0B0D11 !important;
				border: 1px solid rgba(255, 255, 255, 0.16) !important;
				border-radius: 8px !important;
				padding: 10px 14px !important;
				font-size: 13.5px !important;
				color: #FFFFFF !important;
				transition: all 0.2s ease !important;
				font-family: inherit !important;
				resize: vertical !important;
			}
			.md-textarea-ctrl:focus {
				border-color: var(--md-c-amber) !important;
				outline: none !important;
				box-shadow: 0 0 0 3px rgba(217, 119, 6, 0.25) !important;
			}
			.md-prefix-box {
				display: flex;
				align-items: stretch;
				direction: ltr;
			}
			.md-prefix-box span {
				background: rgba(255, 255, 255, 0.05);
				border: 1px solid rgba(255, 255, 255, 0.16);
				border-right: none;
				border-radius: 8px 0 0 8px;
				color: var(--md-c-subtle);
				font-size: 12px;
				padding: 9px 12px;
				display: inline-flex;
				align-items: center;
				font-family: monospace;
			}
			.md-prefix-box input {
				border-radius: 0 8px 8px 0 !important;
			}
			/* Bottom Save Strip */
			.md-opt-footer {
				margin-top: 26px;
				padding-top: 20px;
				border-top: 1px solid var(--md-c-border);
				display: flex;
				align-items: center;
				justify-content: space-between;
				flex-wrap: wrap;
				gap: 16px;
			}
			.md-save-notice {
				color: var(--md-c-muted);
				font-size: 12.5px;
				display: flex;
				align-items: center;
				gap: 6px;
			}
		</style>

		<!-- Master Form -->
		<form method="post" action="options.php" id="mdThemeOptionsForm">
			<?php settings_fields( 'machinedesign_options_group' ); ?>

			<!-- Header HUD -->
			<div class="md-opt-hud">
				<div class="md-opt-title-area">
					<h1>
						تنظیمات مرکزی ماشین دیزاین
						<span class="md-opt-badge">Control Hub v2.4</span>
					</h1>
					<p>مدیریت یکپارچه شماره‌های تماس، نشانی کارگاه، ساعات پذیرش، شبکه‌های اجتماعی، آمارها و فرم‌های استعلام در سراسر وبسایت</p>
				</div>
				<div class="md-opt-hud-actions">
					<button type="submit" class="button md-btn-save-master">
						<svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M19 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11l5 5v11a2 2 0 0 1-2 2z"/><polyline points="17 21 17 13 7 13 7 21"/><polyline points="7 3 7 8 15 8"/></svg>
						ذخیره کلیه تغییرات سایت
					</button>
				</div>
			</div>

			<?php settings_errors(); ?>

			<!-- Tab Navigation -->
			<div class="md-tabs-nav" role="tablist">
				<button type="button" class="md-tab-trigger active" data-target="tab-contact">
					<svg viewBox="0 0 24 24" fill="none" stroke="currentColor"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>
					کارگاه و تماس مستقیم
				</button>
				<button type="button" class="md-tab-trigger" data-target="tab-stats">
					<svg viewBox="0 0 24 24" fill="none" stroke="currentColor"><line x1="18" y1="20" x2="18" y2="10"/><line x1="12" y1="20" x2="12" y2="4"/><line x1="6" y1="20" x2="6" y2="14"/></svg>
					آمارهای فنی و KPI
				</button>
				<button type="button" class="md-tab-trigger" data-target="tab-social">
					<svg viewBox="0 0 24 24" fill="none" stroke="currentColor"><path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"/></svg>
					شبکه‌های اجتماعی و پیام‌رسان‌ها
				</button>
				<button type="button" class="md-tab-trigger" data-target="tab-rfq">
					<svg viewBox="0 0 24 24" fill="none" stroke="currentColor"><polygon points="13 2 3 14 12 14 11 22 21 10 12 10 13 2"/></svg>
					تله‌متری استعلام و نوتیفیکیشن
				</button>
				<button type="button" class="md-tab-trigger" data-target="tab-seo">
					<svg viewBox="0 0 24 24" fill="none" stroke="currentColor"><circle cx="12" cy="12" r="10"/><line x1="2" y1="12" x2="22" y2="12"/><path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"/></svg>
					وبمستر و سئو
				</button>
			</div>

			<!-- Tab Panes Container -->
			<div class="md-console-body">

				<!-- ==========================================
				     TAB 1: WORKSHOP & DIRECT CONTACT
				     ========================================== -->
				<div class="md-tab-pane active" id="tab-contact">
					<div class="md-bento-grid">

						<!-- Card 1: Phone Numbers -->
						<div class="md-bento-card">
							<div class="md-card-header">
								<h3>
									<svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>
									شماره‌های تماس رسمی و مستقیم
								</h3>
								<span class="md-badge-loc">هدر، فوتر، درباره ما، صفحه تماس</span>
							</div>

							<div class="md-field-group">
								<label for="phone_mobile">شماره همراه و مشاوره مستقیم مهندسی (حسین وطن‌دوست):</label>
								<input type="text" id="phone_mobile" name="machinedesign_theme_options[phone_mobile]" value="<?php echo esc_attr( $options['phone_mobile'] ?? '۰۹۳۵۸۶۸۹۸۲۹' ); ?>" class="md-input-ctrl mono" placeholder="۰۹۳۵۸۶۸۹۸۲۹" />
								<p class="md-field-desc">تلفن مستقیم مهندسی، دکمه تماس صفحه تیم، دراور موبایل و مشاوره فوری.</p>
							</div>

							<div class="md-field-group">
								<label for="phone_primary">تلفن ثابت دفتر مرکزی مشهد:</label>
								<input type="text" id="phone_primary" name="machinedesign_theme_options[phone_primary]" value="<?php echo esc_attr( $options['phone_primary'] ?? '۰۵۱-۳۷۶۰۰۰۰۰' ); ?>" class="md-input-ctrl mono" placeholder="۰۵۱-۳۷۶۰۰۰۰۰" />
								<p class="md-field-desc">تلفن ثابت دفتر و هماهنگی کارفرما (نمایش در هدر سایت، فوتر و صفحه تماس).</p>
							</div>

							<div class="md-field-group">
								<label for="phone_support">تلفن پشتیبانی / کارگاه ساخت (اختیاری):</label>
								<input type="text" id="phone_support" name="machinedesign_theme_options[phone_support]" value="<?php echo esc_attr( $options['phone_support'] ?? '' ); ?>" class="md-input-ctrl mono" placeholder="۰۵۱-۳۷۶۰۰۰۰۰" />
								<p class="md-field-desc">شماره دوم جهت پیگیری پیشرفت ساخت ماشین‌آلات یا آزمون‌های کارگاهی.</p>
							</div>
						</div>

						<!-- Card 2: Physical Address & Workshop -->
						<div class="md-bento-card">
							<div class="md-card-header">
								<h3>
									<svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/><circle cx="12" cy="10" r="3"/></svg>
									پایگاه مرکزی، کارگاه تست و نشانی
								</h3>
								<span class="md-badge-loc">فوتر، صفحه تماس، اسکیما</span>
							</div>

							<div class="md-field-group">
								<label for="workshop_city">شهر پایگاه مرکزی:</label>
								<input type="text" id="workshop_city" name="machinedesign_theme_options[workshop_city]" value="<?php echo esc_attr( $options['workshop_city'] ?? 'مشهد' ); ?>" class="md-input-ctrl" placeholder="مشهد" />
								<p class="md-field-desc">شهر اصلی استقرار دفتر و کارگاه آزمایشی (طبق قانون برند: مشهد).</p>
							</div>

							<div class="md-field-group">
								<label for="workshop_address">نشانی دقیق دفتر و کارگاه تست زنده:</label>
								<textarea id="workshop_address" name="machinedesign_theme_options[workshop_address]" rows="3" class="md-textarea-ctrl"><?php echo esc_textarea( $options['workshop_address'] ?? 'مشهد، میدان جانباز، برج سامان، طبقه ۴، واحد ۴۰۲' ); ?></textarea>
								<p class="md-field-desc">نشانی در ستون چهارم فوتر، صفحه تماس با ما، درباره ما و داده‌های ساختاریافته گوگل.</p>
							</div>

							<div class="md-field-group">
								<label for="working_hours">ساعات کاری و پذیرش حضوری:</label>
								<input type="text" id="working_hours" name="machinedesign_theme_options[working_hours]" value="<?php echo esc_attr( $options['working_hours'] ?? 'شنبه تا چهارشنبه: ۸:۰۰ الی ۱۷:۰۰ | پنج‌شنبه: ۸:۰۰ الی ۱۳:۰۰' ); ?>" class="md-input-ctrl" />
								<p class="md-field-desc">زمان‌بندی مراجعه حضوری کارفرمایان جهت تست میدانی قطعات در برج سامان مشهد.</p>
							</div>
						</div>

						<!-- Card 3: Digital Correspondence & Map -->
						<div class="md-bento-card full-width">
							<div class="md-card-header">
								<h3>
									<svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect width="20" height="16" x="2" y="4" rx="2"/><path d="m22 7-8.97 5.7a1.94 1.94 0 0 1-2.06 0L2 7"/></svg>
									مکاتبات الکترونیک و موقعیت نقشه
								</h3>
								<span class="md-badge-loc">اسکیما، نقشه OSM، هدر</span>
							</div>

							<div style="display:grid; grid-template-columns: repeat(auto-fit, minmax(320px, 1fr)); gap:18px;">
								<div class="md-field-group">
									<label for="contact_email">پست الکترونیک رسمی مکاتبات:</label>
									<input type="email" id="contact_email" name="machinedesign_theme_options[contact_email]" value="<?php echo esc_attr( $options['contact_email'] ?? 'info@machinedesign.ir' ); ?>" class="md-input-ctrl mono" placeholder="info@machinedesign.ir" />
									<p class="md-field-desc">ایمیل رسمی جهت دریافت اسناد محرمانه، نقشه‌ها و استعلام‌های صنعتی.</p>
								</div>

								<div class="md-field-group">
									<label for="map_coordinates">مختصات جغرافیایی (Latitude, Longitude):</label>
									<input type="text" id="map_coordinates" name="machinedesign_theme_options[map_coordinates]" value="<?php echo esc_attr( $options['map_coordinates'] ?? '36.3664, 59.5375' ); ?>" class="md-input-ctrl mono" placeholder="36.3664, 59.5375" />
									<p class="md-field-desc">مختصات برج سامان مشهد جهت کدهای اسکیما GeoCoordinates.</p>
								</div>

								<div class="md-field-group" style="grid-column: 1 / -1;">
									<label for="map_osm_url">پیوند مشاهده نقشه (OpenStreetMap / نشان / بلد):</label>
									<input type="url" id="map_osm_url" name="machinedesign_theme_options[map_osm_url]" value="<?php echo esc_attr( $options['map_osm_url'] ?? '' ); ?>" class="md-input-ctrl mono" placeholder="https://www.openstreetmap.org/..." />
									<p class="md-field-desc">پیوند مستقیم نقشه در بخش موقعیت مکانی صفحه تماس.</p>
								</div>
							</div>
						</div>

					</div>
				</div>

				<!-- ==========================================
				     TAB 2: KEY METRICS & KPIS
				     ========================================== -->
				<div class="md-tab-pane" id="tab-stats">
					<div class="md-bento-grid">

						<!-- Card 1: Experience & Capacity -->
						<div class="md-bento-card">
							<div class="md-card-header">
								<h3>
									<svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="8" r="7"/><polyline points="8.21 13.89 7 23 12 20 17 23 15.79 13.88"/></svg>
									سابقه و توان کادر مهندسی
								</h3>
								<span class="md-badge-loc">هیرو، درباره ما، صفحه اصلی</span>
							</div>

							<div class="md-field-group">
								<label for="stat_years_experience">سال‌های سابقه تخصصی:</label>
								<input type="text" id="stat_years_experience" name="machinedesign_theme_options[stat_years_experience]" value="<?php echo esc_attr( $options['stat_years_experience'] ?? '۱۵+ سال' ); ?>" class="md-input-ctrl" placeholder="۱۵+ سال" />
								<p class="md-field-desc">سابقه طراحی ماشین‌آلات و خطوط تولید در هیرو، صفحات فرود و کارت‌های اعتبار.</p>
							</div>

							<div class="md-field-group">
								<label for="stat_engineers">تعداد متخصصان و کادر فنی:</label>
								<input type="text" id="stat_engineers" name="machinedesign_theme_options[stat_engineers]" value="<?php echo esc_attr( $options['stat_engineers'] ?? '۱۶+' ); ?>" class="md-input-ctrl" placeholder="۱۶+" />
								<p class="md-field-desc">شمارنده متخصصان ارشد مکانیک، مکاترونیک، متالورژی و ساخت.</p>
							</div>

							<div class="md-field-group">
								<label for="stat_projects">پروژه‌های طراحی و مدل‌سازی تکمیل‌شده:</label>
								<input type="text" id="stat_projects" name="machinedesign_theme_options[stat_projects]" value="<?php echo esc_attr( $options['stat_projects'] ?? '۱۵۰+' ); ?>" class="md-input-ctrl" placeholder="۱۵۰+" />
								<p class="md-field-desc">شمارنده پروژه‌های موفق صنعتی اجراشده در سراسر کشور.</p>
							</div>
						</div>

						<!-- Card 2: Production Lines & Quality -->
						<div class="md-bento-card">
							<div class="md-card-header">
								<h3>
									<svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="22 12 18 12 15 21 9 3 6 12 2 12"/></svg>
									شاخص‌های رضایت و خطوط تولید
								</h3>
								<span class="md-badge-loc">صفحات خدمات، KPI</span>
							</div>

							<div class="md-field-group">
								<label for="stat_production_lines">خطوط تولید راه‌اندازی‌شده:</label>
								<input type="text" id="stat_production_lines" name="machinedesign_theme_options[stat_production_lines]" value="<?php echo esc_attr( $options['stat_production_lines'] ?? '۴۰+' ); ?>" class="md-input-ctrl" placeholder="۴۰+" />
								<p class="md-field-desc">تعداد خطوط فرآوری، انتقال، سورتینگ و بسته‌بندی پیوسته تحویل‌شده.</p>
							</div>

							<div class="md-field-group">
								<label for="stat_satisfaction">شاخص رضایت و بازدهی صنعتی:</label>
								<input type="text" id="stat_satisfaction" name="machinedesign_theme_options[stat_satisfaction]" value="<?php echo esc_attr( $options['stat_satisfaction'] ?? '۹۸٪' ); ?>" class="md-input-ctrl" placeholder="۹۸٪" />
								<p class="md-field-desc">درصد شاخص پایش کیفیت تحویل ماشین‌آلات بدون توقف ناخواسته.</p>
							</div>

							<div class="md-field-group">
								<label for="stat_response_time">زمان پاسخگویی و تریاژ استعلام‌ها:</label>
								<input type="text" id="stat_response_time" name="machinedesign_theme_options[stat_response_time]" value="<?php echo esc_attr( $options['stat_response_time'] ?? 'کمتر از ۲۴ ساعت کاری' ); ?>" class="md-input-ctrl" placeholder="کمتر از ۲۴ ساعت کاری" />
								<p class="md-field-desc">تعهد زمانی بررسی اولیه مدل‌های سه‌بعدی، نقشه‌ها و ارسال پروپوزال فنی.</p>
							</div>
						</div>

					</div>
				</div>

				<!-- ==========================================
				     TAB 3: SOCIAL MEDIA & MESSAGING
				     ========================================== -->
				<div class="md-tab-pane" id="tab-social">
					<div class="md-bento-grid">

						<!-- Card 1: Instagram Profiles -->
						<div class="md-bento-card">
							<div class="md-card-header">
								<h3>
									<svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect width="20" height="20" x="2" y="2" rx="5" ry="5"/><path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"/><line x1="17.5" y1="6.5" x2="17.51" y2="6.5"/></svg>
									صفحات رسمی اینستاگرام
								</h3>
								<span class="md-badge-loc">ویترین برند و تجربیات میدانی</span>
							</div>

							<div class="md-field-group">
								<label for="instagram_business">پیج رسمی برند (@machinedesign.ir):</label>
								<div class="md-prefix-box">
									<span>instagram.com/</span>
									<input type="text" id="instagram_business" name="machinedesign_theme_options[instagram_business]" value="<?php echo esc_attr( $options['instagram_business'] ?? 'machinedesign.ir' ); ?>" class="md-input-ctrl mono" />
								</div>
								<p class="md-field-desc">پایگاه رسمی معرفی پروژه‌ها، خطوط تولید و خدمات ۶ گانه ماشین دیزاین.</p>
							</div>

							<div class="md-field-group">
								<label for="instagram_personal">پیج شخصی/کریتور مهندس (@h.vatan.doust):</label>
								<div class="md-prefix-box">
									<span>instagram.com/</span>
									<input type="text" id="instagram_personal" name="machinedesign_theme_options[instagram_personal]" value="<?php echo esc_attr( $options['instagram_personal'] ?? 'h.vatan.doust' ); ?>" class="md-input-ctrl mono" />
								</div>
								<p class="md-field-desc">پیج شخصی مهندس حسین وطن‌دوست (پشت صحنه کارگاهی و ویدیوهای فنی).</p>
							</div>
						</div>

						<!-- Card 2: Telegram & Bale Channels -->
						<div class="md-bento-card">
							<div class="md-card-header">
								<h3>
									<svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="22" y1="2" x2="11" y2="13"/><polygon points="22 2 15 22 11 13 2 9 22 2"/></svg>
									کانال‌های تلگرام و بله
								</h3>
								<span class="md-badge-loc">پایگاه فایل‌های مهندسی و نقشه‌ها</span>
							</div>

							<div class="md-field-group">
								<label for="telegram_channel">کانال رسمی تلگرام ماشین دیزاین:</label>
								<div class="md-prefix-box">
									<span>t.me/</span>
									<input type="text" id="telegram_channel" name="machinedesign_theme_options[telegram_channel]" value="<?php echo esc_attr( $options['telegram_channel'] ?? 'machinedesign_ir' ); ?>" class="md-input-ctrl mono" />
								</div>
								<p class="md-field-desc">مرجع دانلود جداول استاندارد، نقشه‌های ساخت و کاتالوگ‌های صنعتی (@machinedesign_ir).</p>
							</div>

							<div class="md-field-group">
								<label for="bale_channel">کانال ماشین دیزاین در پیام‌رسان بله:</label>
								<div class="md-prefix-box">
									<span>ble.ir/</span>
									<input type="text" id="bale_channel" name="machinedesign_theme_options[bale_channel]" value="<?php echo esc_attr( $options['bale_channel'] ?? 'machinedesign_ir' ); ?>" class="md-input-ctrl mono" />
								</div>
								<p class="md-field-desc">کانال داخلی ماشین دیزاین در پیام‌رسان ایرانی بله (@machinedesign_ir).</p>
							</div>

							<div class="md-field-group">
								<label for="telegram_bot">شناسه ربات تلگرام:</label>
								<div class="md-prefix-box">
									<span>t.me/</span>
									<input type="text" id="telegram_bot" name="machinedesign_theme_options[telegram_bot]" value="<?php echo esc_attr( $options['telegram_bot'] ?? 'hosseincomposio_bot' ); ?>" class="md-input-ctrl mono" />
								</div>
								<p class="md-field-desc">ربات دریافت تله‌متری و ارسال اعلان‌ها (@hosseincomposio_bot).</p>
							</div>
						</div>

						<!-- Card 3: YouTube & Professional Links -->
						<div class="md-bento-card full-width">
							<div class="md-card-header">
								<h3>
									<svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M16 8a6 6 0 0 1 6 6v7h-4v-7a2 2 0 0 0-2-2 2 2 0 0 0-2 2v7h-4v-7a6 6 0 0 1 6-6z"/><rect width="4" height="12" x="2" y="9"/><circle cx="4" cy="4" r="2"/></svg>
									کانال یوتیوب و لینکدین
								</h3>
								<span class="md-badge-loc">آموزش‌ها، انیمیشن‌های صنعتی و رزومه</span>
							</div>

							<div style="display:grid; grid-template-columns: repeat(auto-fit, minmax(360px, 1fr)); gap:18px;">
								<div class="md-field-group">
									<label for="youtube_channel">آدرس کامل کانال یوتیوب:</label>
									<input type="url" id="youtube_channel" name="machinedesign_theme_options[youtube_channel]" value="<?php echo esc_attr( $options['youtube_channel'] ?? '' ); ?>" class="md-input-ctrl mono" placeholder="https://www.youtube.com/@hosseinvatandoust" />
									<p class="md-field-desc">ویدیوهای شبیه‌سازی مکانیزم‌ها، رندرهای سه‌بعدی و انیمیشن خطوط تولید.</p>
								</div>

								<div class="md-field-group">
									<label for="linkedin_url">پیوند صفحه یا پروفایل لینکدین:</label>
									<input type="url" id="linkedin_url" name="machinedesign_theme_options[linkedin_url]" value="<?php echo esc_attr( $options['linkedin_url'] ?? '' ); ?>" class="md-input-ctrl mono" placeholder="https://www.linkedin.com/in/hossein-vatandoust" />
									<p class="md-field-desc">ارتباط شبکه‌ای با مدیران کارخانجات، مهندسان مشاور و تامین‌کنندگان قطعات.</p>
								</div>
							</div>
						</div>

					</div>
				</div>

				<!-- ==========================================
				     TAB 4: RFQ TELEMETRY & NOTIFICATIONS
				     ========================================== -->
				<div class="md-tab-pane" id="tab-rfq">
					<div class="md-bento-grid">

						<!-- Card 1: Lead Routing -->
						<div class="md-bento-card">
							<div class="md-card-header">
								<h3>
									<svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="m22 2-7 20-4-9-9-4Z"/><path d="M22 2 11 13"/></svg>
									مقصدهای دریافت بلادرنگ استعلام‌ها (RFQ)
								</h3>
								<span class="md-badge-loc">تله‌متری فرم‌ها</span>
							</div>

							<div class="md-field-group">
								<label for="rfq_recipient_email">ایمیل اصلی دریافت لیدها:</label>
								<input type="email" id="rfq_recipient_email" name="machinedesign_theme_options[rfq_recipient_email]" value="<?php echo esc_attr( $options['rfq_recipient_email'] ?? 'hosseinvatandoust699@gmail.com' ); ?>" class="md-input-ctrl mono" />
								<p class="md-field-desc">کلیه اطلاعات پروژه‌ها و درخواست‌های تماس به این ایمیل مخابره می‌شوند.</p>
							</div>

							<div class="md-field-group">
								<label for="rfq_telegram_chat_id">شناسه عددی تلگرام حسین (Chat ID):</label>
								<input type="text" id="rfq_telegram_chat_id" name="machinedesign_theme_options[rfq_telegram_chat_id]" value="<?php echo esc_attr( $options['rfq_telegram_chat_id'] ?? '7280306397' ); ?>" class="md-input-ctrl mono" />
								<p class="md-field-desc">شناسه عددی اکانت تلگرام @Hoseinvatandoust جهت دریافت نوتیفیکیشن فوری (پیش‌فرض: 7280306397).</p>
							</div>

							<div class="md-field-group" style="margin-top:16px;">
								<label style="display:flex; align-items:center; gap:8px; cursor:pointer;">
									<input type="checkbox" name="machinedesign_theme_options[rfq_telegram_enabled]" value="1" <?php checked( '1', $options['rfq_telegram_enabled'] ?? '1' ); ?> style="accent-color: var(--md-c-amber); width:18px; height:18px;" />
									<span style="color:#FFFFFF; font-size:13.5px; font-weight:700;">ارسال فوری خلاصه استعلام به ربات تلگرام فعال باشد</span>
								</label>
								<p class="md-field-desc" style="margin-right:26px;">به محض ثبت فرم توسط کارفرما، پیام هشدار حاوی شماره تلفن و خلاصه پروژه در تلگرام دریافت می‌شود.</p>
							</div>
						</div>

						<!-- Card 2: HUD Confirmation Messages -->
						<div class="md-bento-card">
							<div class="md-card-header">
								<h3>
									<svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/><polyline points="22 4 12 14.01 9 11.01"/></svg>
									پیام تاییدیه فرم استعلام (HUD Feedback)
								</h3>
								<span class="md-badge-loc">بازخورد بصری کاربر</span>
							</div>

							<div class="md-field-group">
								<label for="rfq_hud_success_title">تیتر پیام ثبت موفق:</label>
								<input type="text" id="rfq_hud_success_title" name="machinedesign_theme_options[rfq_hud_success_title]" value="<?php echo esc_attr( $options['rfq_hud_success_title'] ?? 'استعلام فنی با موفقیت ثبت شد' ); ?>" class="md-input-ctrl" />
								<p class="md-field-desc">متنی که پس از ثبت موفقیت‌آمیز فرم استعلام در کادر سبز/نئون نمایش می‌یابد.</p>
							</div>

							<div class="md-field-group">
								<label for="rfq_hud_success_desc">متن توضیح تله‌متری استعلام:</label>
								<textarea id="rfq_hud_success_desc" name="machinedesign_theme_options[rfq_hud_success_desc]" rows="3" class="md-textarea-ctrl"><?php echo esc_textarea( $options['rfq_hud_success_desc'] ?? 'کد پیگیری تله‌متری صادر شد. کارشناسان ارشد طراحی ماشین ظرف ۲۴ ساعت با شما تماس خواهند گرفت.' ); ?></textarea>
								<p class="md-field-desc">توضیحات فرآیند تماس و صدور تله‌متری پیگیری استعلام.</p>
							</div>
						</div>

					</div>
				</div>

				<!-- ==========================================
				     TAB 5: WEBMASTER & SEO
				     ========================================== -->
				<div class="md-tab-pane" id="tab-seo">
					<div class="md-bento-grid">

						<!-- Card 1: Brand Claim & Meta -->
						<div class="md-bento-card">
							<div class="md-card-header">
								<h3>
									<svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
									بیانیه برند و داده‌های ساختاریافته
								</h3>
								<span class="md-badge-loc">Schema Organization</span>
							</div>

							<div class="md-field-group">
								<label for="brand_claim">شعار و ادعای رسمی برند (Brand Claim):</label>
								<input type="text" id="brand_claim" name="machinedesign_theme_options[brand_claim]" value="<?php echo esc_attr( $options['brand_claim'] ?? 'طراحی تخصصی ماشین‌آلات صنعتی، خطوط تولید و مهندسی مکانیک پیشرفته' ); ?>" class="md-input-ctrl" />
								<p class="md-field-desc">تزریق مستقیم در اسکیماهای Organization و متاتگ‌های پیش‌فرض موتورهای جستجو.</p>
							</div>

							<div class="md-field-group">
								<label for="default_og_image">تصویر پیش‌فرض پیش‌نمایش شبکه‌های اجتماعی (OpenGraph 1200x630):</label>
								<input type="url" id="default_og_image" name="machinedesign_theme_options[default_og_image]" value="<?php echo esc_attr( $options['default_og_image'] ?? '' ); ?>" class="md-input-ctrl mono" />
								<p class="md-field-desc">آدرس تصویر ۱۲۰۰×۶۳۰ پیکسل با هویت سازمانی ماشین دیزاین در زمان اشتراک پیوند در تلگرام یا پیام‌رسان‌ها.</p>
							</div>
						</div>

						<!-- Card 2: Webmaster Verification Tags -->
						<div class="md-bento-card">
							<div class="md-card-header">
								<h3>
									<svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
									تاییدیه وبمسترهای بین‌المللی
								</h3>
								<span class="md-badge-loc">Search Console & Bing</span>
							</div>

							<div class="md-field-group">
								<label for="google_site_verify">کد تایید Google Search Console:</label>
								<input type="text" id="google_site_verify" name="machinedesign_theme_options[google_site_verify]" value="<?php echo esc_attr( $options['google_site_verify'] ?? '' ); ?>" class="md-input-ctrl mono" placeholder="google-site-verification=..." />
								<p class="md-field-desc">مقدار متاتگ اختصاصی سرچ کنسول گوگل جهت تایید هویت دامنه machinedesign.ir.</p>
							</div>

							<div class="md-field-group">
								<label for="bing_site_verify">کد تایید Bing Webmaster Tools:</label>
								<input type="text" id="bing_site_verify" name="machinedesign_theme_options[bing_site_verify]" value="<?php echo esc_attr( $options['bing_site_verify'] ?? '' ); ?>" class="md-input-ctrl mono" />
								<p class="md-field-desc">کد احراز هویت وبمستر موتور جستجوی مایکروسافت بینگ.</p>
							</div>
						</div>

					</div>
				</div>

				<!-- Save Action Strip at bottom -->
				<div class="md-opt-footer">
					<div class="md-save-notice">
						<svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><line x1="12" y1="16" x2="12" y2="12"/><line x1="12" y1="8" x2="12.01" y2="8"/></svg>
						تمامی فیلدهای هر ۵ تب در یک مرحله ذخیره می‌شوند و تغییرات بلافاصله در ۱۰۰٪ بخش‌های وبسایت اعمال خواهد شد.
					</div>
					<button type="submit" class="button md-btn-save-master">
						<svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M19 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11l5 5v11a2 2 0 0 1-2 2z"/><polyline points="17 21 17 13 7 13 7 21"/><polyline points="7 3 7 8 15 8"/></svg>
						ذخیره کلیه تغییرات سایت
					</button>
				</div>

			</div>
		</form>
	</div>

	<!-- Instant Client-Side Tab Switching & URL Hash Sync -->
	<script>
	(function() {
		'use strict';
		var triggers = document.querySelectorAll('.md-tab-trigger');
		var panes = document.querySelectorAll('.md-tab-pane');

		function activateTab(tabId) {
			if (!tabId) return;
			var targetPane = document.getElementById(tabId);
			if (!targetPane) return;

			triggers.forEach(function(btn) {
				if (btn.getAttribute('data-target') === tabId) {
					btn.classList.add('active');
				} else {
					btn.classList.remove('active');
				}
			});

			panes.forEach(function(pane) {
				if (pane.id === tabId) {
					pane.classList.add('active');
				} else {
					pane.classList.remove('active');
				}
			});

			try {
				if (history.replaceState) {
					history.replaceState(null, null, '#' + tabId);
				} else {
					location.hash = '#' + tabId;
				}
			} catch (e) {}
		}

		triggers.forEach(function(btn) {
			btn.addEventListener('click', function(e) {
				e.preventDefault();
				var targetId = this.getAttribute('data-target');
				activateTab(targetId);
			});
		});

		// Auto restore tab from URL Hash on page load
		var initialHash = (window.location.hash || '').replace('#', '');
		if (initialHash && document.getElementById(initialHash)) {
			activateTab(initialHash);
		}
	})();
	</script>
	<?php
}
