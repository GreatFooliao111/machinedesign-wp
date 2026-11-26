<?php
defined( 'ABSPATH' ) || exit;

if ( ! function_exists( 'machinedesign_get_default_options' ) ) {
    function machinedesign_get_default_options() {
        return array(
            'workshop_city'         => 'تهران و مشهد',
            'workshop_address'      => 'مشهد، میدان جانباز، برج سامان، طبقه ۴ | دفتر فنی تهران',
            'phone_primary'         => '۰۵۱-۳۷۶۰۰۰۰۰',
            'phone_mobile'          => '۰۹۱۵۰۰۰۰۰۰۰',
            'contact_email'         => 'info@machinedesign.ir',
            'working_hours'         => 'شنبه تا چهارشنبه: ۸:۰۰ الی ۱۷:۰۰',
            'stat_years_experience' => '۱۵+',
            'stat_engineers'        => '۴',
            'stat_projects'         => '۱۵۰+',
            'stat_production_lines' => '۴۰+',
            'stat_satisfaction'     => '۹۸٪',
            'instagram_business'    => 'machinedesign.ir',
            'telegram_channel'      => 'machinedesign_ir',
            'linkedin_url'          => 'https://www.linkedin.com/in/hossein-vatandoust',
            'youtube_channel'       => 'https://www.youtube.com/@hosseinvatandoust',
            'rfq_recipient_email'   => 'info@machinedesign.ir',
            'rfq_telegram_chat_id'  => '',
            'rfq_telegram_enabled'  => '0',
        );
    }
}

if ( ! function_exists( 'md_get_option' ) ) {
    function md_get_option( $key, $fallback = '' ) {
        $defaults = machinedesign_get_default_options();
        $saved    = get_option( 'machinedesign_theme_options', array() );
        if ( is_array( $saved ) && isset( $saved[ $key ] ) && '' !== $saved[ $key ] ) {
            return $saved[ $key ];
        }
        if ( '' !== $fallback ) {
            return $fallback;
        }
        return isset( $defaults[ $key ] ) ? $defaults[ $key ] : '';
    }
}

if ( ! function_exists( 'md_get_stat' ) ) {
    function md_get_stat( $key, $fallback = '' ) {
        return esc_html( md_get_option( $key, $fallback ) );
    }
}

if ( ! function_exists( 'md_get_contact' ) ) {
    function md_get_contact( $key, $fallback = '' ) {
        $aliases = array(
            'phone'  => 'phone_primary',
            'mobile' => 'phone_mobile',
            'email'  => 'contact_email',
        );
        if ( isset( $aliases[ $key ] ) ) {
            $key = $aliases[ $key ];
        }
        return esc_html( md_get_option( $key, $fallback ) );
    }
}

if ( ! function_exists( 'md_tel_uri' ) ) {
    function md_tel_uri( $phone ) {
        $fa = array( '۰', '۱', '۲', '۳', '۴', '۵', '۶', '۷', '۸', '۹' );
        $en = array( '0', '1', '2', '3', '4', '5', '6', '7', '8', '9' );
        $clean = str_replace( $fa, $en, (string) $phone );
        return preg_replace( '/[^0-9+]/', '', $clean );
    }
}

add_action( 'admin_menu', function () {
    add_menu_page(
        'تنظیمات ماشین دیزاین',
        'تنظیمات ماشین دیزاین',
        'manage_options',
        'machinedesign-options',
        'md_core_render_options_page',
        'dashicons-admin-generic',
        59
    );
} );

add_action( 'admin_init', function () {
    register_setting( 'md_core_options_group', 'machinedesign_theme_options', function ( $input ) {
        $clean = array();
        if ( is_array( $input ) ) {
            foreach ( $input as $k => $v ) {
                $clean[ sanitize_key( $k ) ] = sanitize_text_field( wp_unslash( $v ) );
            }
        }
        return $clean;
    } );
} );

function md_core_render_options_page() {
    if ( ! current_user_can( 'manage_options' ) ) {
        return;
    }
    $opts = wp_parse_args( get_option( 'machinedesign_theme_options', array() ), machinedesign_get_default_options() );
    ?>
    <div class="wrap" dir="rtl">
        <h1>تنظیمات مرکزی پلتفرم ماشین دیزاین (Zero-Static Hub)</h1>
        <form method="post" action="options.php">
            <?php settings_fields( 'md_core_options_group' ); ?>
            <table class="form-table">
                <tr><th>تلفن دفتر فنی</th><td><input type="text" name="machinedesign_theme_options[phone_primary]" value="<?php echo esc_attr( $opts['phone_primary'] ); ?>" class="regular-text" /></td></tr>
                <tr><th>موبایل مهندسی</th><td><input type="text" name="machinedesign_theme_options[phone_mobile]" value="<?php echo esc_attr( $opts['phone_mobile'] ); ?>" class="regular-text" /></td></tr>
                <tr><th>ایمیل رسمی</th><td><input type="email" name="machinedesign_theme_options[contact_email]" value="<?php echo esc_attr( $opts['contact_email'] ); ?>" class="regular-text" /></td></tr>
                <tr><th>آدرس و شهرها</th><td><input type="text" name="machinedesign_theme_options[workshop_address]" value="<?php echo esc_attr( $opts['workshop_address'] ); ?>" class="large-text" /></td></tr>
                <tr><th>سال‌های سابقه</th><td><input type="text" name="machinedesign_theme_options[stat_years_experience]" value="<?php echo esc_attr( $opts['stat_years_experience'] ); ?>" class="regular-text" /></td></tr>
                <tr><th>تعداد ماشین‌آلات/پروژه‌ها</th><td><input type="text" name="machinedesign_theme_options[stat_projects]" value="<?php echo esc_attr( $opts['stat_projects'] ); ?>" class="regular-text" /></td></tr>
                <tr><th>تعداد خطوط تولید</th><td><input type="text" name="machinedesign_theme_options[stat_production_lines]" value="<?php echo esc_attr( $opts['stat_production_lines'] ); ?>" class="regular-text" /></td></tr>
                <tr><th>درصد رضایت کارخانجات</th><td><input type="text" name="machinedesign_theme_options[stat_satisfaction]" value="<?php echo esc_attr( $opts['stat_satisfaction'] ); ?>" class="regular-text" /></td></tr>
            </table>
            <?php submit_button( 'ذخیره تنظیمات' ); ?>
        </form>
    </div>
    <?php
}
