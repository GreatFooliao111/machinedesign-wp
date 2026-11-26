<?php
/** Template Name: TRUMPF Founder Profile (پروفایل مهندس حسین وطن‌دوست) */
defined( 'ABSPATH' ) || exit;

$member_post = get_page_by_path( 'hossein-vatandoust', OBJECT, 'team_member' );
if ( $member_post ) {
    global $wp_query, $post;
    $orig_query = $wp_query;
    $wp_query   = new WP_Query( array(
        'post_type'      => 'team_member',
        'p'              => $member_post->ID,
        'posts_per_page' => 1,
    ) );
    include get_template_directory() . '/single-team_member.php';
    $wp_query = $orig_query;
    wp_reset_postdata();
    return;
}

get_header();
?>
<section class="md-tr-sec">
  <div class="md-container">
    <h1 class="md-tr-sec-title">پروفایل مهندس حسین وطن‌دوست</h1>
    <p>اطلاعات پروفایل یافت نشد. لطفاً از <a href="<?php echo esc_url( home_url( '/team/' ) ); ?>">صفحه تیم مهندسی</a> بازدید نمایید.</p>
  </div>
</section>
<?php get_footer();
