<?php
defined( 'ABSPATH' ) || exit;
get_header();
?>
<section class="md-tr-sec" style="padding:48px 0;background:var(--tr-mist);border-bottom:1px solid var(--tr-line);">
  <div class="md-container">
    <span class="md-tr-kicker mono" dir="ltr">ARCHIVE // TECHNICAL INDEX</span>
    <h1 class="md-tr-sec-title"><?php the_archive_title(); ?></h1>
    <?php the_archive_description( '<p class="md-tr-hero-lead" style="text-align:right;margin:12px 0 0;">', '</p>' ); ?>
  </div>
</section>
<section class="md-tr-sec">
  <div class="md-container md-tr-card-grid-3">
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post();
      $thumb = has_post_thumbnail() ? get_the_post_thumbnail_url( get_the_ID(), 'large' ) : get_template_directory_uri() . '/assets/images/heroes/hero-machine-design.webp';
    ?>
      <article class="md-tr-editorial-card md-reveal">
        <a href="<?php the_permalink(); ?>" class="md-tr-card-img-wrap"><img src="<?php echo esc_url( $thumb ); ?>" alt="<?php the_title_attribute(); ?>" loading="lazy" /></a>
        <div class="md-tr-card-body">
          <span class="md-tr-card-meta"><?php echo esc_html( md_get_reading_time( get_the_ID() ) ); ?></span>
          <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
          <p><?php echo esc_html( wp_trim_words( wp_strip_all_tags( get_the_content() ), 22, '...' ) ); ?></p>
          <a href="<?php the_permalink(); ?>" class="md-tr-card-more">مشاهده جزئیات <span class="md-tr-arrow">←</span></a>
        </div>
      </article>
    <?php endwhile; else : ?>
      <p>موردی در این دسته‌بندی یافت نشد.</p>
    <?php endif; ?>
  </div>
</section>
<?php get_footer();
