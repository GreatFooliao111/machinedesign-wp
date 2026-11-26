<?php
/** Template Name: TRUMPF Projects & Industries Hub (آرشیو پروژه‌ها) */
defined( 'ABSPATH' ) || exit;
get_header();
$terms = get_terms( array( 'taxonomy' => 'industry', 'hide_empty' => false ) );
$q = new WP_Query( array( 'post_type' => 'project', 'post_status' => 'publish', 'posts_per_page' => 24 ) );
?>
<section class="md-tr-sec" style="padding-bottom:36px;">
  <div class="md-container">
    <span class="md-tr-kicker mono" dir="ltr">PORTFOLIO // COMMISSIONED BUILDS</span>
    <h1 class="md-tr-sec-title">آرشیو پروژه‌های اجرایی و صنایع هدف</h1>
    <div style="display:flex;gap:10px;flex-wrap:wrap;margin-top:24px;" data-filter-group="#md-projects-list">
      <button type="button" class="md-tr-btn md-tr-btn-outline is-active" data-filter="all">همه پروژه‌ها</button>
      <?php if ( ! is_wp_error( $terms ) ) : foreach ( $terms as $t ) : ?>
        <button type="button" class="md-tr-btn md-tr-btn-outline" data-filter="<?php echo esc_attr( $t->slug ); ?>"><?php echo esc_html( $t->name ); ?></button>
      <?php endforeach; endif; ?>
    </div>
  </div>
</section>
<section class="md-tr-sec md-tr-sec-mist">
  <div class="md-container">
    <div class="md-tr-card-grid-3" id="md-projects-list">
      <?php while ( $q->have_posts() ) : $q->the_post();
        $pid   = get_the_ID();
        $inds  = wp_get_post_terms( $pid, 'industry', array( 'fields' => 'slugs' ) );
        $cats  = is_array( $inds ) ? implode( ',', $inds ) : '';
        $thumb = has_post_thumbnail( $pid ) ? get_the_post_thumbnail_url( $pid, 'large' ) : get_template_directory_uri() . '/assets/images/heroes/hero-machine-design.webp';
      ?>
        <article class="md-tr-editorial-card md-reveal" data-cats="<?php echo esc_attr( $cats ); ?>">
          <a href="<?php the_permalink(); ?>" class="md-tr-card-img-wrap"><img src="<?php echo esc_url( $thumb ); ?>" alt="<?php the_title_attribute(); ?>" loading="lazy" /></a>
          <div class="md-tr-card-body">
            <span class="md-tr-card-meta mono" dir="ltr"><?php echo esc_html( get_post_meta( $pid, '_md_project_standard', true ) ?: 'DIN / ISO' ); ?></span>
            <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
            <p><?php echo esc_html( has_excerpt() ? get_the_excerpt() : wp_trim_words( wp_strip_all_tags( get_the_content() ), 20, '...' ) ); ?></p>
            <a href="<?php the_permalink(); ?>" class="md-tr-card-more">مطالعه کیس‌استادی <span class="md-tr-arrow">←</span></a>
          </div>
        </article>
      <?php endwhile; wp_reset_postdata(); ?>
    </div>
  </div>
</section>
<?php echo do_shortcode( '[md_rfq_desk]' ); get_footer();
