<?php
/** Template Name: TRUMPF Service Pillar Hub (قالب اختصاصی ۶ ستون خدمات) */
defined( 'ABSPATH' ) || exit;
get_header();
while ( have_posts() ) : the_post();
?>
<section class="md-tr-sec" style="padding-bottom:48px;border-bottom:1px solid var(--tr-line);">
  <div class="md-container">
    <span class="md-tr-kicker mono" dir="ltr">SERVICE PILLAR // DFMA &amp; ISO COMPLIANT</span>
    <h1 class="md-tr-hero-title" style="text-align:right;margin:0 0 18px;max-width:none;"><?php the_title(); ?></h1>
    <?php if ( has_excerpt() ) : ?><p class="md-tr-hero-lead" style="text-align:right;margin:0 0 28px;"><?php echo esc_html( get_the_excerpt() ); ?></p><?php endif; ?>
    <div style="display:flex;gap:14px;flex-wrap:wrap;">
      <a href="#rfq-desk" class="md-tr-btn md-tr-btn-primary"><span>ثبت استعلام فنی این خدمت</span><span class="md-tr-arrow">←</span></a>
      <a href="#pillar-content" class="md-tr-btn md-tr-btn-outline">مشخصات فنی و فرآیند</a>
    </div>
  </div>
</section>
<section class="md-tr-sec" id="pillar-content">
  <div class="md-container md-tr-prose"><?php the_content(); ?></div>
</section>
<?php endwhile;
echo do_shortcode( '[md_delta_kinematics_lab][md_rfq_desk]' );
get_footer();
