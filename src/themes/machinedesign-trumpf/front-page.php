<?php
/**
 * Zero-Static Front Page: renders Gutenberg blocks if composed in WP-Admin,
 * otherwise executes the canonical TRUMPF 7-Band Flow via core shortcodes.
 */
defined( 'ABSPATH' ) || exit;
get_header();
$raw = get_post_field( 'post_content', get_queried_object_id() );
if ( ! empty( $raw ) && false !== strpos( $raw, '<!-- wp:machinedesign/' ) ) {
    while ( have_posts() ) { the_post(); the_content(); }
} else {
    echo do_shortcode( '[md_trumpf_hero][md_bento_pillars][md_metrics_strip][md_industries_horizon][md_delta_kinematics_lab][md_projects_grid limit="6"][md_team_quartet][md_rfq_desk]' );
}
get_footer();
