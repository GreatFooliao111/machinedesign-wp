<?php
defined( 'ABSPATH' ) || exit;

class MD_Core_SEO_Bridge {

    public static function init() {
        add_filter( 'wp_robots', array( __CLASS__, 'filter_wp_robots' ), 20 );
        add_filter( 'rank_math/frontend/robots', array( __CLASS__, 'filter_rank_math_robots' ), 20 );
        add_filter( 'rank_math/json_ld', array( __CLASS__, 'extend_rank_math_json_ld' ), 99, 2 );
        add_action( 'template_redirect', array( __CLASS__, 'handle_brownfield_redirects' ), 1 );
    }

    public static function is_layer3_noindex() {
        if ( is_search() ) {
            return true;
        }
        if ( is_tax() || is_category() || is_tag() ) {
            $term = get_queried_object();
            if ( $term && isset( $term->count ) && (int) $term->count === 0 ) {
                return true;
            }
        }
        if ( ! empty( $_GET['industry'] ) && ! empty( $_GET['pillar'] ) ) {
            return true;
        }
        return false;
    }

    public static function filter_wp_robots( $robots ) {
        if ( self::is_layer3_noindex() ) {
            $robots['noindex'] = true;
            $robots['follow']  = true;
            unset( $robots['index'] );
        }
        return $robots;
    }

    public static function filter_rank_math_robots( $robots ) {
        if ( self::is_layer3_noindex() ) {
            $robots['index']  = 'noindex';
            $robots['follow'] = 'follow';
        }
        return $robots;
    }

    public static function handle_brownfield_redirects() {
        if ( is_admin() ) {
            return;
        }
        $req = isset( $_SERVER['REQUEST_URI'] ) ? urldecode( sanitize_text_field( wp_unslash( $_SERVER['REQUEST_URI'] ) ) ) : '';
        $map = array(
            '/category/طراحی-ماشین‌آلات/'   => home_url( '/services/machine-design/' ),
            '/category/عیب‌یابی-و-ارتعاشات/' => home_url( '/services/factory-troubleshooting/' ),
        );
        foreach ( $map as $old => $target ) {
            if ( false !== strpos( $req, $old ) ) {
                wp_safe_redirect( $target, 301 );
                exit;
            }
        }
    }

    public static function extend_rank_math_json_ld( $data, $jsonld ) {
        if ( ! is_singular() && ! is_front_page() ) {
            return $data;
        }
        $org_id = trailingslashit( home_url( '/' ) ) . '#organization';
        if ( ! isset( $data['Organization'] ) && ! isset( $data['publisher'] ) ) {
            $data['md_organization'] = array(
                '@type'     => 'Organization',
                '@id'       => $org_id,
                'name'      => 'ماشین دیزاین (MachineDesign.ir)',
                'url'       => home_url( '/' ),
                'telephone' => md_get_option( 'phone_primary' ),
                'email'     => md_get_option( 'contact_email' ),
            );
        }
        return $data;
    }
}
MD_Core_SEO_Bridge::init();
