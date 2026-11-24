<?php
/**
 * MachineDesign.ir Dynamic Theme Settings & Customization Hub
 *
 * Built according to official Automattic & WordPress Settings API best practices:
 * - Strict capability checks ('manage_options')
 * - Nonce protection against CSRF
 * - Explicit input sanitization on save
 * - Context-aware output escaping
 * - Fallback defaults matching brand constitution
 *
 * @package MachineDesign
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Default Theme Options Schema & Fallback Values
 *
 * @return array
 */
function machinedesign_get_default_options() {
	return array(
		// تب ۱: کارگاه و تماس (Workshop & Contact)
		// TODO: REAL_CONTACT - شماره‌ها و راه‌های ارتباطی تستی زیر پیش از انتشار عمومی با اطلاعات واقعی جایگزین شوند:
		'workshop_city'          => 'مشهد',
		'workshop_address'       => 'مشهد، میدان جانباز، برج سامان، طبقه ۴، واحد ۴۰۲',
		'phone_primary'          => '۰۵۱-۳۷۶۰۰۰۰۰', // TODO: REAL_CONTACT (تلفن ثابت دفتر مشهد)
		'phone_mobile'           => '۰۹۱۵۰۰۰۰۰۰۰', // TODO: REAL_CONTACT (موبایل مستقیم مهندسی)
		'contact_email'          => 'info@machinedesign.ir', // TODO: REAL_CONTACT (ایمیل مکاتبات)
		'working_hours'          => 'شنبه تا چهارشنبه: ۸:۰۰ الی ۱۷:۰۰ | پنج‌شنبه: ۸:۰۰ الی ۱۳:۰۰',
		'map_coordinates'        => '36.3155, 59.5489',

		// تب ۲: آمارهای فنی و شاخص‌های کلیدی (Key Metrics & KPIs)
		'stat_engineers'         => '۱۶+',
		'stat_projects'          => '۵۰+',
		'stat_production_lines'  => '۳۵+',
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
 * Public Helper Function to Retrieve Theme Option with Fallback
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
	return esc_html( md_get_option( 'stat_' . $key, $default ) );
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
 * Register Top-Level Admin Menu Page
 */
function machinedesign_register_options_menu() {
	add_menu_page(
		__( 'تنظیمات ماشین دیزاین', 'hello-elementor' ),
		__( 'ماشین دیزاین', 'hello-elementor' ),
		'manage_options',
		'machinedesign-options',
		'machinedesign_render_options_page',
		'dashicons-admin-generic',
		59
	);
}
add_action( 'admin_menu', 'machinedesign_register_options_menu' );

/**
 * Register Setting with Settings API & Sanitization Callback
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
 * Strict Input Sanitization Callback
 *
 * @param array $input
 * @return array
 */
function machinedesign_sanitize_options( $input ) {
	if ( ! is_array( $input ) ) {
		return array();
	}

	$defaults = machinedesign_get_default_options();
	$clean    = array();

	// فیلدهای متنی ساده
	$text_fields = array(
		'workshop_city', 'phone_primary', 'phone_mobile', 'working_hours',
		'map_coordinates', 'stat_engineers', 'stat_projects', 'stat_production_lines',
		'stat_satisfaction', 'stat_capacity_range', 'stat_response_time',
		'instagram_business', 'instagram_personal', 'telegram_channel',
		'telegram_bot', 'bale_channel', 'bale_prompt2product',
		'rfq_telegram_chat_id', 'rfq_hud_success_title', 'brand_claim',
		'google_site_verify', 'bing_site_verify'
	);

	foreach ( $text_fields as $field ) {
		if ( isset( $input[ $field ] ) ) {
			$clean[ $field ] = sanitize_text_field( wp_unslash( $input[ $field ] ) );
		} else {
			$clean[ $field ] = isset( $defaults[ $field ] ) ? $defaults[ $field ] : '';
		}
	}

	// آدرس‌ها و توضیحات چندخطی
	$textarea_fields = array( 'workshop_address', 'rfq_hud_success_desc' );
	foreach ( $textarea_fields as $field ) {
		if ( isset( $input[ $field ] ) ) {
			$clean[ $field ] = sanitize_textarea_field( wp_unslash( $input[ $field ] ) );
		} else {
			$clean[ $field ] = isset( $defaults[ $field ] ) ? $defaults[ $field ] : '';
		}
	}

	// ایمیل‌ها
	$email_fields = array( 'contact_email', 'rfq_recipient_email' );
	foreach ( $email_fields as $field ) {
		if ( isset( $input[ $field ] ) ) {
			$clean[ $field ] = sanitize_email( wp_unslash( $input[ $field ] ) );
		} else {
			$clean[ $field ] = isset( $defaults[ $field ] ) ? $defaults[ $field ] : '';
		}
	}

	// آدرس‌های اینترنتی (URLs)
	$url_fields = array( 'youtube_channel', 'linkedin_url', 'default_og_image' );
	foreach ( $url_fields as $field ) {
		if ( isset( $input[ $field ] ) ) {
			$clean[ $field ] = esc_url_raw( wp_unslash( $input[ $field ] ) );
		} else {
			$clean[ $field ] = isset( $defaults[ $field ] ) ? $defaults[ $field ] : '';
		}
	}

	// چک‌باکس‌ها
	$clean['rfq_telegram_enabled'] = ! empty( $input['rfq_telegram_enabled'] ) ? '1' : '0';

	add_settings_error(
		'machinedesign_options_group',
		'machinedesign_updated',
		__( 'تنظیمات با موفقیت ذخیره شد.', 'hello-elementor' ),
		'updated'
	);

	return $clean;
}

/**
 * Render Admin UI Page with Cyber-Mechanical Styling & Clean Tabs
 */
function machinedesign_render_options_page() {
	if ( ! current_user_can( 'manage_options' ) ) {
		wp_die( esc_html__( 'شما مجوز دسترسی به این بخش را ندارید.', 'hello-elementor' ) );
	}

	$active_tab = isset( $_GET['tab'] ) ? sanitize_key( $_GET['tab'] ) : 'workshop';
	$options    = get_option( 'machinedesign_theme_options', machinedesign_get_default_options() );
	?>
	<style>
		.md-admin-wrap {
			max-width: 1050px;
			margin: 24px 20px 40px 0;
			font-family: 'Vazirmatn', -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, sans-serif;
			direction: rtl;
		}
		.md-admin-header {
			background: #121824;
			border: 1px solid rgba(140, 231, 12, 0.25);
			border-radius: 12px;
			padding: 24px 30px;
			margin-bottom: 24px;
			display: flex;
			align-items: center;
			justify-content: space-between;
			box-shadow: 0 4px 20px rgba(0, 0, 0, 0.15); /* taste-skill-ignore: wp-admin UI */
		}
		.md-admin-header h1 {
			color: #ffffff;
			font-size: 22px;
			font-weight: 800;
			margin: 0 0 6px 0;
			display: flex;
			align-items: center;
			gap: 10px;
		}
		.md-admin-header .md-tag {
			background: rgba(140, 231, 12, 0.15);
			color: #8ce70c;
			border: 1px solid #8ce70c;
			border-radius: 6px;
			font-size: 11px;
			font-weight: 700;
			padding: 2px 8px;
			letter-spacing: 0.5px;
		}
		.md-admin-header p {
			color: #94a3b8;
			margin: 0;
			font-size: 13px;
		}
		.md-nav-tabs {
			display: flex;
			gap: 6px;
			margin-bottom: -1px;
			border-bottom: 2px solid #1e293b;
		}
		.md-nav-tabs a {
			background: #f1f5f9;
			color: #475569;
			padding: 12px 20px;
			border-radius: 8px 8px 0 0;
			text-decoration: none;
			font-weight: 600;
			font-size: 13px;
			border: 1px solid #cbd5e1;
			border-bottom: none;
			transition: transform 0.15s ease-in-out, opacity 0.15s ease-in-out, color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
		}
		.md-nav-tabs a.active {
			background: #121824;
			color: #8ce70c;
			border-color: #1e293b;
			border-bottom: 2px solid #121824;
		}
		.md-tab-content {
			background: #ffffff;
			border: 1px solid #cbd5e1;
			border-radius: 0 0 12px 12px;
			padding: 30px;
			box-shadow: 0 4px 15px rgba(0, 0, 0, 0.04); /* taste-skill-ignore: wp-admin UI */
		}
		.md-form-table {
			width: 100%;
			border-collapse: collapse;
		}
		.md-form-table th {
			width: 240px;
			padding: 16px 0 16px 20px;
			vertical-align: top;
			font-size: 14px;
			font-weight: 700;
			color: #0f172a;
			text-align: right;
		}
		.md-form-table td {
			padding: 14px 0;
		}
		.md-input-text, .md-textarea {
			width: 100%;
			max-width: 550px;
			padding: 10px 14px;
			border: 1px solid #cbd5e1;
			border-radius: 8px;
			font-size: 13px;
			color: #0f172a;
			transition: border-color 0.2s;
			box-sizing: border-box;
		}
		.md-input-text:focus, .md-textarea:focus {
			border-color: #8ce70c;
			outline: none;
			box-shadow: 0 0 0 2px rgba(140, 231, 12, 0.2); /* taste-skill-ignore: wp-admin UI */
		}
		.md-desc {
			color: #64748b;
			font-size: 12px;
			margin: 6px 0 0 0;
			line-height: 1.6;
		}
		.md-submit-wrap {
			margin-top: 30px;
			padding-top: 20px;
			border-top: 1px solid #e2e8f0; /* taste-skill-ignore: wp-admin submit divider */
			display: flex;
			align-items: center;
			justify-content: flex-start;
			gap: 15px;
		}
		.md-btn-submit {
			background: #121824 !important;
			color: #8ce70c !important;
			border: 1px solid #8ce70c !important;
			border-radius: 8px !important;
			padding: 10px 28px !important;
			font-size: 14px !important;
			font-weight: 700 !important;
			cursor: pointer;
			transition: transform 0.2s, opacity 0.2s, color 0.2s, background-color 0.2s, border-color 0.2s, box-shadow 0.2s;
		}
		.md-btn-submit:hover {
			background: #8ce70c !important;
			color: #0a0e17 !important;
		}
	</style>

	<div class="md-admin-wrap">
		<div class="md-admin-header">
			<div>
				<h1>
					تنظیمات مرکزی ماشین دیزاین
					<span class="md-tag">Automattic v2.1</span>
				</h1>
				<p>مدیریت جامع داده‌های پایگاه کارگاهی، شماره‌ها، کانال‌های ارتباطی، آمارها و تله‌متری پروژه</p>
			</div>
			<div>
				<span style="color:#8ce70c; font-family: monospace; /* taste-skill-ignore: wp-admin code input */ font-size:12px;">machinedesign.ir</span>
			</div>
		</div>

		<?php settings_errors(); ?>

		<!-- Nav Tabs -->
		<div class="md-nav-tabs">
			<a href="?page=machinedesign-options&tab=workshop" class="<?php echo 'workshop' === $active_tab ? 'active' : ''; ?>">کارگاه و تماس</a>
			<a href="?page=machinedesign-options&tab=stats" class="<?php echo 'stats' === $active_tab ? 'active' : ''; ?>">آمارهای فنی و KPI</a>
			<a href="?page=machinedesign-options&tab=social" class="<?php echo 'social' === $active_tab ? 'active' : ''; ?>">شبکه‌های اجتماعی</a>
			<a href="?page=machinedesign-options&tab=rfq" class="<?php echo 'rfq' === $active_tab ? 'active' : ''; ?>">تله‌متری و استعلام (RFQ)</a>
			<a href="?page=machinedesign-options&tab=seo" class="<?php echo 'seo' === $active_tab ? 'active' : ''; ?>">وبمستر و سئو</a>
		</div>

		<!-- Tab Content Form -->
		<div class="md-tab-content">
			<form method="post" action="options.php">
				<?php settings_fields( 'machinedesign_options_group' ); ?>

				<?php if ( 'workshop' === $active_tab ) : ?>
					<table class="md-form-table">
						<tr>
							<th><label for="workshop_city">شهر پایگاه مرکزی:</label></th>
							<td>
								<input type="text" id="workshop_city" name="machinedesign_theme_options[workshop_city]" value="<?php echo esc_attr( $options['workshop_city'] ?? 'مشهد' ); ?>" class="md-input-text" />
								<p class="md-desc">پایگاه اصلی دفتر و کارگاه آزمایشگاهی (طبق قوانین برند: مشهد).</p>
							</td>
						</tr>
						<tr>
							<th><label for="workshop_address">نشانی دقیق دفتر و کارگاه:</label></th>
							<td>
								<textarea id="workshop_address" name="machinedesign_theme_options[workshop_address]" rows="3" class="md-textarea"><?php echo esc_textarea( $options['workshop_address'] ?? '' ); ?></textarea>
								<p class="md-desc">نشانی در فوتر، صفحه تماس، درباره ما و کدهای اسکیما نمایش داده می‌شود.</p>
							</td>
						</tr>
						<tr>
							<th><label for="phone_primary">تلفن ثابت مشاوره:</label></th>
							<td>
								<input type="text" id="phone_primary" name="machinedesign_theme_options[phone_primary]" value="<?php echo esc_attr( $options['phone_primary'] ?? '' ); ?>" class="md-input-text" />
								<p class="md-desc">شماره تلفن رسمی جهت نمایش در هدر و فوتر.</p>
							</td>
						</tr>
						<tr>
							<th><label for="phone_mobile">شماره همراه و مشاوره مستقیم:</label></th>
							<td>
								<input type="text" id="phone_mobile" name="machinedesign_theme_options[phone_mobile]" value="<?php echo esc_attr( $options['phone_mobile'] ?? '' ); ?>" class="md-input-text" />
								<p class="md-desc">شماره مستقیم کارشناس ارشد جهت تماس‌های فوری یا واتساپ.</p>
							</td>
						</tr>
						<tr>
							<th><label for="contact_email">ایمیل رسمی مکاتبات:</label></th>
							<td>
								<input type="email" id="contact_email" name="machinedesign_theme_options[contact_email]" value="<?php echo esc_attr( $options['contact_email'] ?? '' ); ?>" class="md-input-text" />
								<p class="md-desc">ایمیل رسمی پشتیبانی و مکاتبات صنعتی.</p>
							</td>
						</tr>
						<tr>
							<th><label for="working_hours">ساعات کاری و پذیرش کارگاهی:</label></th>
							<td>
								<input type="text" id="working_hours" name="machinedesign_theme_options[working_hours]" value="<?php echo esc_attr( $options['working_hours'] ?? '' ); ?>" class="md-input-text" />
								<p class="md-desc">زمان‌بندی مراجعه حضوری و تست میدانی قطعات در برج سامان مشهد.</p>
							</td>
						</tr>
					</table>

				<?php elseif ( 'stats' === $active_tab ) : ?>
					<table class="md-form-table">
						<tr>
							<th><label for="stat_engineers">تعداد متخصصان و کادر فنی:</label></th>
							<td>
								<input type="text" id="stat_engineers" name="machinedesign_theme_options[stat_engineers]" value="<?php echo esc_attr( $options['stat_engineers'] ?? '۱۶+' ); ?>" class="md-input-text" />
								<p class="md-desc">نمایش در هیرو و سکشن کادر مهندسی (پیش‌فرض: ۱۶+ متخصص).</p>
							</td>
						</tr>
						<tr>
							<th><label for="stat_projects">پروژه‌های طراحی و مدل‌سازی:</label></th>
							<td>
								<input type="text" id="stat_projects" name="machinedesign_theme_options[stat_projects]" value="<?php echo esc_attr( $options['stat_projects'] ?? '۵۰+' ); ?>" class="md-input-text" />
								<p class="md-desc">تعداد پروژه‌های صنعتی تکمیل‌شده ماشین دیزاین.</p>
							</td>
						</tr>
						<tr>
							<th><label for="stat_production_lines">خطوط تولید راه‌اندازی‌شده:</label></th>
							<td>
								<input type="text" id="stat_production_lines" name="machinedesign_theme_options[stat_production_lines]" value="<?php echo esc_attr( $options['stat_production_lines'] ?? '۳۵+' ); ?>" class="md-input-text" />
								<p class="md-desc">شمارنده خطوط تولید پیاده‌سازی‌شده در کارخانجات کشور.</p>
							</td>
						</tr>
						<tr>
							<th><label for="stat_satisfaction">شاخص رضایت و بازدهی صنعتی:</label></th>
							<td>
								<input type="text" id="stat_satisfaction" name="machinedesign_theme_options[stat_satisfaction]" value="<?php echo esc_attr( $options['stat_satisfaction'] ?? '۹۸٪' ); ?>" class="md-input-text" />
								<p class="md-desc">درصد شاخص پایش کیفیت و رضایت کارفرمایان.</p>
							</td>
						</tr>
						<tr>
							<th><label for="stat_capacity_range">محدوده ظرفیت ماشین‌آلات:</label></th>
							<td>
								<input type="text" id="stat_capacity_range" name="machinedesign_theme_options[stat_capacity_range]" value="<?php echo esc_attr( $options['stat_capacity_range'] ?? '۱,۰۰۰ الی ۱۰,۰۰۰ در ساعت' ); ?>" class="md-input-text" />
								<p class="md-desc">مقدار بازه‌ای واقع‌گرایانه ظرفیت تولید (پرهیز از اغراق‌های آماری ثابت).</p>
							</td>
						</tr>
						<tr>
							<th><label for="stat_response_time">زمان پاسخگویی استعلام‌ها:</label></th>
							<td>
								<input type="text" id="stat_response_time" name="machinedesign_theme_options[stat_response_time]" value="<?php echo esc_attr( $options['stat_response_time'] ?? 'کمتر از ۲۴ ساعت کاری' ); ?>" class="md-input-text" />
								<p class="md-desc">تعهد زمانی بررسی اولیه فایل‌های CAD و نقشه‌ها.</p>
							</td>
						</tr>
					</table>

				<?php elseif ( 'social' === $active_tab ) : ?>
					<table class="md-form-table">
						<tr>
							<th><label for="instagram_business">اینستاگرام رسمی برند:</label></th>
							<td>
								<div style="direction:ltr; text-align:left; display:inline-block;">
									<span style="color:#64748b;">https://instagram.com/</span>
									<input type="text" id="instagram_business" name="machinedesign_theme_options[instagram_business]" value="<?php echo esc_attr( $options['instagram_business'] ?? 'machinedesign.ir' ); ?>" class="md-input-text" style="width:240px;" />
								</div>
								<p class="md-desc">پیج اصلی و ویترین صنعتی ماشین دیزاین (@machinedesign.ir).</p>
							</td>
						</tr>
						<tr>
							<th><label for="instagram_personal">اینستاگرام شخصی مهندس:</label></th>
							<td>
								<div style="direction:ltr; text-align:left; display:inline-block;">
									<span style="color:#64748b;">https://instagram.com/</span>
									<input type="text" id="instagram_personal" name="machinedesign_theme_options[instagram_personal]" value="<?php echo esc_attr( $options['instagram_personal'] ?? 'h.vatan.doust' ); ?>" class="md-input-text" style="width:240px;" />
								</div>
								<p class="md-desc">پیج شخصی و تجربیات کارگاهی مهندس حسین وطن‌دوست (@h.vatan.doust).</p>
							</td>
						</tr>
						<tr>
							<th><label for="telegram_channel">کانال تلگرام ماشین دیزاین:</label></th>
							<td>
								<div style="direction:ltr; text-align:left; display:inline-block;">
									<span style="color:#64748b;">https://t.me/</span>
									<input type="text" id="telegram_channel" name="machinedesign_theme_options[telegram_channel]" value="<?php echo esc_attr( $options['telegram_channel'] ?? 'machinedesign_ir' ); ?>" class="md-input-text" style="width:240px;" />
								</div>
								<p class="md-desc">پایگاه فایل‌های فنی، استانداردها و نقشه‌ها (@machinedesign_ir).</p>
							</td>
						</tr>
						<tr>
							<th><label for="bale_channel">کانال پیام‌رسان بله:</label></th>
							<td>
								<div style="direction:ltr; text-align:left; display:inline-block;">
									<span style="color:#64748b;">https://ble.ir/</span>
									<input type="text" id="bale_channel" name="machinedesign_theme_options[bale_channel]" value="<?php echo esc_attr( $options['bale_channel'] ?? 'machinedesign_ir' ); ?>" class="md-input-text" style="width:240px;" />
								</div>
								<p class="md-desc">کانال داخلی ماشین دیزاین در پیام‌رسان بله.</p>
							</td>
						</tr>
						<tr>
							<th><label for="youtube_channel">کانال یوتیوب:</label></th>
							<td>
								<input type="url" id="youtube_channel" name="machinedesign_theme_options[youtube_channel]" value="<?php echo esc_attr( $options['youtube_channel'] ?? '' ); ?>" class="md-input-text" />
								<p class="md-desc">آدرس کامل کانال آموزش‌ها و انیمیشن‌های سه‌بعدی یوتیوب.</p>
							</td>
						</tr>
						<tr>
							<th><label for="linkedin_url">صفحه لینکدین:</label></th>
							<td>
								<input type="url" id="linkedin_url" name="machinedesign_theme_options[linkedin_url]" value="<?php echo esc_attr( $options['linkedin_url'] ?? '' ); ?>" class="md-input-text" />
								<p class="md-desc">پیوند پروفایل شرکتی یا حرفه‌ای در لینکدین.</p>
							</td>
						</tr>
					</table>

				<?php elseif ( 'rfq' === $active_tab ) : ?>
					<table class="md-form-table">
						<tr>
							<th><label for="rfq_recipient_email">ایمیل دریافت استعلام‌ها:</label></th>
							<td>
								<input type="email" id="rfq_recipient_email" name="machinedesign_theme_options[rfq_recipient_email]" value="<?php echo esc_attr( $options['rfq_recipient_email'] ?? 'hosseinvatandoust699@gmail.com' ); ?>" class="md-input-text" />
								<p class="md-desc">لیدهای فرم RFQ به این آدرس ایمیل ارسال می‌شوند.</p>
							</td>
						</tr>
						<tr>
							<th><label for="rfq_telegram_chat_id">شناسه Chat ID تلگرام:</label></th>
							<td>
								<input type="text" id="rfq_telegram_chat_id" name="machinedesign_theme_options[rfq_telegram_chat_id]" value="<?php echo esc_attr( $options['rfq_telegram_chat_id'] ?? '7280306397' ); ?>" class="md-input-text" />
								<p class="md-desc">شناسه تلگرام حسین جهت دریافت بلادرنگ پیام‌های نوتیفیکیشن ثبت پروژه.</p>
							</td>
						</tr>
						<tr>
							<th>ارسال بلادرنگ به تلگرام:</th>
							<td>
								<label>
									<input type="checkbox" name="machinedesign_theme_options[rfq_telegram_enabled]" value="1" <?php checked( '1', $options['rfq_telegram_enabled'] ?? '1' ); ?> />
									فعال‌سازی ارسال فوری خلاصه استعلام به ربات تلگرام
								</label>
							</td>
						</tr>
						<tr>
							<th><label for="rfq_hud_success_title">تیتر پیام موفقیت HUD:</label></th>
							<td>
								<input type="text" id="rfq_hud_success_title" name="machinedesign_theme_options[rfq_hud_success_title]" value="<?php echo esc_attr( $options['rfq_hud_success_title'] ?? 'استعلام فنی با موفقیت ثبت شد' ); ?>" class="md-input-text" />
							</td>
						</tr>
						<tr>
							<th><label for="rfq_hud_success_desc">توضیح تاییدیه تله‌متری:</label></th>
							<td>
								<textarea id="rfq_hud_success_desc" name="machinedesign_theme_options[rfq_hud_success_desc]" rows="2" class="md-textarea"><?php echo esc_textarea( $options['rfq_hud_success_desc'] ?? '' ); ?></textarea>
							</td>
						</tr>
					</table>

				<?php elseif ( 'seo' === $active_tab ) : ?>
					<table class="md-form-table">
						<tr>
							<th><label for="brand_claim">شعار و ادعای برند (Brand Claim):</label></th>
							<td>
								<input type="text" id="brand_claim" name="machinedesign_theme_options[brand_claim]" value="<?php echo esc_attr( $options['brand_claim'] ?? '' ); ?>" class="md-input-text" />
								<p class="md-desc">در توضیحات متای صفحه اصلی و داده‌های ساختاریافته Organization تزریق می‌شود.</p>
							</td>
						</tr>
						<tr>
							<th><label for="google_site_verify">کد تایید Google Search Console:</label></th>
							<td>
								<input type="text" id="google_site_verify" name="machinedesign_theme_options[google_site_verify]" value="<?php echo esc_attr( $options['google_site_verify'] ?? '' ); ?>" class="md-input-text" />
								<p class="md-desc">مقدار content در متاتگ google-site-verification.</p>
							</td>
						</tr>
						<tr>
							<th><label for="bing_site_verify">کد تایید Bing Webmaster:</label></th>
							<td>
								<input type="text" id="bing_site_verify" name="machinedesign_theme_options[bing_site_verify]" value="<?php echo esc_attr( $options['bing_site_verify'] ?? '' ); ?>" class="md-input-text" />
								<p class="md-desc">کد متاتگ تایید وبمستر موتور جستجوی مایکروسافت بینگ.</p>
							</td>
						</tr>
						<tr>
							<th><label for="default_og_image">تصویر پیش‌فرض اشتراک‌گذاری (OpenGraph):</label></th>
							<td>
								<input type="url" id="default_og_image" name="machinedesign_theme_options[default_og_image]" value="<?php echo esc_attr( $options['default_og_image'] ?? '' ); ?>" class="md-input-text" />
								<p class="md-desc">آدرس تصویر ۱۲۰۰×۶۳۰ پیکسل برای پیش‌نمایش تلگرام، ایتا و واتساپ در صورت نبود تصویر شاخص.</p>
							</td>
						</tr>
					</table>
				<?php endif; ?>

				<div class="md-submit-wrap">
					<?php submit_button( __( 'ذخیره تغییرات', 'hello-elementor' ), 'primary md-btn-submit', 'submit', false ); ?>
					<span style="color:#64748b; font-size:12px;">تغییرات بلافاصله در فرانت‌اند سایت و متادیتاها منعکس می‌شوند.</span>
				</div>
			</form>
		</div>
	</div>
	<?php
}
