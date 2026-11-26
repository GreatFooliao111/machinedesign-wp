<?php
/** Template Name: TRUMPF Technical Insights Hub (پایگاه دانش) */
defined( 'ABSPATH' ) || exit;
get_header();
$q = new WP_Query( array( 'post_type' => 'post', 'post_status' => 'publish', 'posts_per_page' => 18 ) );
?>
<section class="md-tr-sec" style="padding-bottom:36px;">
  <div class="md-container">
    <span class="md-tr-kicker mono" dir="ltr">KNOWLEDGE BASE // ISO &amp; DFMA WHITEPAPERS</span>
    <h1 class="md-tr-sec-title">مقالات تخصصی، استانداردهای ساخت و راهنماهای مهندسی</h1>
  </div>
</section>
<section class="md-tr-sec md-tr-sec-mist">
  <div class="md-container md-tr-card-grid-3">
    <?php while ( $q->have_posts() ) : $q->the_post();
      $pid   = get_the_ID();
      $thumb = has_post_thumbnail( $pid ) ? get_the_post_thumbnail_url( $pid, 'large' ) : get_template_directory_uri() . '/assets/images/heroes/hero-fea-analysis.webp';
    ?>
      <article class="md-tr-editorial-card md-reveal">
        <a href="<?php the_permalink(); ?>" class="md-tr-card-img-wrap"><img src="<?php echo esc_url( $thumb ); ?>" alt="<?php the_title_attribute(); ?>" loading="lazy" /></a>
        <div class="md-tr-card-body">
          <span class="md-tr-card-meta"><?php echo esc_html( md_get_reading_time( $pid ) ); ?></span>
          <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
          <p><?php echo esc_html( has_excerpt() ? get_the_excerpt() : wp_trim_words( wp_strip_all_tags( get_the_content() ), 22, '...' ) ); ?></p>
          <a href="<?php the_permalink(); ?>" class="md-tr-card-more">مطالعه مقاله <span class="md-tr-arrow">←</span></a>
        </div>
      </article>
    <?php endwhile; wp_reset_postdata(); ?>
  </div>
</section>
<?php echo do_shortcode( '[md_rfq_desk]' ); get_footer();
