<?php
defined( 'ABSPATH' ) || exit;
get_header();
while ( have_posts() ) : the_post();
  $pid = get_the_ID();
  $std = get_post_meta( $pid, '_md_project_standard', true ) ?: ( get_post_meta( $pid, '_md_standard_code', true ) ?: 'DIN / ISO VERIFIED' );
?>
<section class="md-tr-sec" style="padding:48px 0;background:var(--tr-mist);border-bottom:1px solid var(--tr-line);">
  <div class="md-container">
    <span class="md-tr-kicker mono" dir="ltr"><?php echo esc_html( $std ); ?> · <?php echo esc_html( md_get_reading_time( $pid ) ); ?></span>
    <h1 class="md-tr-sec-title" style="margin-top:8px;"><?php the_title(); ?></h1>
    <?php if ( has_excerpt() ) : ?><p class="md-tr-hero-lead" style="text-align:right;margin:14px 0 0;"><?php echo esc_html( get_the_excerpt() ); ?></p><?php endif; ?>
  </div>
</section>
<section class="md-tr-sec">
  <div class="md-container md-tr-article-grid">
    <aside class="md-tr-toc">
      <strong>اطلاعات فنی سند</strong>
      <ul>
        <li><span class="mono"><?php echo esc_html( $std ); ?></span></li>
        <li><span><?php echo esc_html( get_the_date( 'j F Y' ) ); ?></span></li>
        <li><a href="#rfq-desk" style="color:var(--tr-blue);font-weight:700;">درخواست مشاوره فنی ←</a></li>
      </ul>
    </aside>
    <article class="md-tr-prose"><?php the_content(); ?></article>
  </div>
</section>
<?php endwhile;
echo do_shortcode( '[md_rfq_desk]' );
get_footer();
