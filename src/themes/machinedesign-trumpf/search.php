<?php
defined( 'ABSPATH' ) || exit;
get_header();
?>
<section class="md-tr-sec" style="padding:48px 0;background:var(--tr-mist);border-bottom:1px solid var(--tr-line);">
  <div class="md-container">
    <span class="md-tr-kicker mono" dir="ltr">SEARCH RESULTS</span>
    <h1 class="md-tr-sec-title">نتایج جستجو برای: «<?php echo esc_html( get_search_query() ); ?>»</h1>
  </div>
</section>
<section class="md-tr-sec">
  <div class="md-container md-tr-card-grid-3">
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
      <article class="md-tr-editorial-card">
        <div class="md-tr-card-body">
          <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
          <p><?php echo esc_html( wp_trim_words( wp_strip_all_tags( get_the_content() ), 22, '...' ) ); ?></p>
          <a href="<?php the_permalink(); ?>" class="md-tr-card-more">مشاهده صفحه <span class="md-tr-arrow">←</span></a>
        </div>
      </article>
    <?php endwhile; else : ?>
      <p>نتیجه‌ای یافت نشد. لطفاً با کلیدواژه‌های مهندسی فارسی (مانند «بسته‌بندی»، «گیربکس»، «ارتعاشات») جستجو کنید.</p>
    <?php endif; ?>
  </div>
</section>
<?php get_footer();
