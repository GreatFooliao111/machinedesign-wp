<?php
/** Template Name: TRUMPF About & 4-Member Core Team (درباره ما) */
defined( 'ABSPATH' ) || exit;
get_header();
?>
<section class="md-tr-sec" style="border-bottom:1px solid var(--tr-line);">
  <div class="md-container">
    <span class="md-tr-kicker mono" dir="ltr">COMPANY PROFILE // TEHRAN · MASHHAD · SHANGHAI · DUBAI</span>
    <h1 class="md-tr-hero-title" style="text-align:right;margin:0 0 20px;max-width:none;">پیوند دانش مهندسی محاسباتی با واقعیت ساخت کارگاهی</h1>
    <div class="md-tr-prose"><?php while ( have_posts() ) { the_post(); the_content(); } ?></div>
  </div>
</section>
<?php echo do_shortcode( '[md_metrics_strip][md_team_quartet][md_rfq_desk]' ); get_footer();
