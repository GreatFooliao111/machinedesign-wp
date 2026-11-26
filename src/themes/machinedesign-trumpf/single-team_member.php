<?php
defined( 'ABSPATH' ) || exit;
get_header();
while ( have_posts() ) : the_post();
  $id    = get_the_ID();
  $role  = get_post_meta( $id, '_md_member_role_badge', true ) ?: 'مهندس ارشد مکانیک';
  $sub   = get_post_meta( $id, '_md_member_subtitle', true ) ?: get_the_excerpt();
  $thumb = has_post_thumbnail( $id ) ? get_the_post_thumbnail_url( $id, 'full' ) : get_template_directory_uri() . '/assets/images/team-avatar-placeholder.svg';
?>
<section class="md-tr-sec" style="padding:20px 0;background:var(--tr-mist);border-bottom:1px solid var(--tr-line);">
  <div class="md-container" style="display:flex;justify-content:space-between;align-items:center;font-size:0.86rem;">
    <span><a href="<?php echo esc_url( home_url( '/' ) ); ?>">ماشین دیزاین</a> / <a href="<?php echo esc_url( home_url( '/about/' ) ); ?>">تیم مهندسی</a> / <strong><?php the_title(); ?></strong></span>
    <span class="mono" dir="ltr" style="color:var(--tr-blue);"><?php echo esc_html( get_post_meta( $id, '_md_member_status_badge', true ) ?: 'ENGINEERING LEAD' ); ?></span>
  </div>
</section>
<section class="md-tr-sec">
  <div class="md-container" style="display:grid;grid-template-columns:340px 1fr;gap:48px;align-items:start;">
    <div style="border:1px solid var(--tr-line);aspect-ratio:3/4;overflow:hidden;background:var(--tr-mist);">
      <img src="<?php echo esc_url( $thumb ); ?>" alt="<?php the_title_attribute(); ?>" style="width:100%;height:100%;object-fit:cover;display:block;" />
    </div>
    <div>
      <span class="md-tr-kicker"><?php echo esc_html( $role ); ?></span>
      <h1 class="md-tr-sec-title" style="margin-bottom:10px;"><?php the_title(); ?></h1>
      <p style="font-size:1.05rem;color:var(--tr-ink2);margin-bottom:28px;"><?php echo esc_html( $sub ); ?></p>
      <div class="md-tr-prose" style="margin-bottom:32px;"><?php the_content(); ?></div>

      <!-- 4 Dynamic Hairline KPIs -->
      <div class="md-tr-kpi-grid" style="text-align:right;border-top:1px solid var(--tr-line);border-bottom:1px solid var(--tr-line);padding:20px 0;margin-bottom:32px;">
        <?php for ( $i = 1; $i <= 4; $i++ ) :
          $mv = get_post_meta( $id, "_md_metric{$i}_val", true );
          $ml = get_post_meta( $id, "_md_metric{$i}_label", true );
          if ( ! $mv && ! $ml ) { continue; }
        ?>
          <div class="md-tr-kpi-item" style="padding:0 14px;">
            <span class="md-tr-kpi-num mono" style="font-size:1.65rem;color:var(--tr-blue);"><?php echo esc_html( $mv ); ?></span>
            <span class="md-tr-kpi-label"><?php echo esc_html( $ml ); ?></span>
          </div>
        <?php endfor; ?>
      </div>

      <!-- 5 Dynamic Skill Bars -->
      <div style="max-width:640px;">
        <h2 style="font-size:1.15rem;margin-bottom:16px;">صلاحیت‌های تخصصی مهندسی</h2>
        <?php for ( $i = 1; $i <= 5; $i++ ) :
          $sn = get_post_meta( $id, "_md_skill{$i}_name", true );
          $sp = (int) get_post_meta( $id, "_md_skill{$i}_pct", true );
          if ( ! $sn ) { continue; }
        ?>
          <div style="margin-bottom:14px;">
            <div style="display:flex;justify-content:space-between;font-size:0.88rem;font-weight:600;margin-bottom:4px;">
              <span><?php echo esc_html( $sn ); ?></span><span class="mono" style="color:var(--tr-blue);"><?php echo esc_html( $sp ); ?>%</span>
            </div>
            <div style="height:6px;background:var(--tr-mist);"><div style="height:100%;background:var(--tr-blue);width:<?php echo esc_attr( min( 100, max( 0, $sp ) ) ); ?>%;"></div></div>
          </div>
        <?php endfor; ?>
      </div>
    </div>
  </div>
</section>
<?php endwhile;
echo do_shortcode( '[md_rfq_desk]' );
get_footer();
