<?php
defined( 'ABSPATH' ) || exit;
get_header();
while ( have_posts() ) : the_post();
?>
<section class="md-tr-sec" style="padding:48px 0;background:var(--tr-mist);border-bottom:1px solid var(--tr-line);">
  <div class="md-container"><h1 class="md-tr-sec-title"><?php the_title(); ?></h1></div>
</section>
<section class="md-tr-sec">
  <div class="md-container md-tr-prose"><?php the_content(); ?></div>
</section>
<?php endwhile; get_footer();
