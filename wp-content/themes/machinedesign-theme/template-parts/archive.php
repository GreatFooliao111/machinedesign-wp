<?php
/**
 * MachineDesign Precision v2.3 — Styled Taxonomy, Category & CPT Archive Template
 *
 * Replaces bare unstyled Hello Elementor fallback with Swiss-German Dark Hero +
 * High-Legibility Light Engineered Platinum Card Grid.
 *
 * @package MachineDesign
 */

defined( 'ABSPATH' ) || exit;

$fallback_thumbs = array(
	get_template_directory_uri() . '/assets/images/heroes/hero-machine-design.webp',
	get_template_directory_uri() . '/assets/images/heroes/hero-fea-analysis.webp',
	get_template_directory_uri() . '/assets/images/heroes/hero-production-line.webp',
);
global $wp_query;
$total_found = isset( $wp_query->found_posts ) ? (int) $wp_query->found_posts : 0;
?>

<section class="md-subpage-hero" aria-label="سربرگ آرشیو">
	<div class="container">
		<nav class="page-hero-breadcrumb" aria-label="مسیر راهنما">
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="breadcrumb-item">صفحه اصلی</a>
			<span class="breadcrumb-separator" aria-hidden="true">/</span>
			<span class="breadcrumb-current" aria-current="page"><?php echo wp_kses_post( get_the_archive_title() ); ?></span>
		</nav>

		<div class="md-subpage-hero-row">
			<div>
				<span class="md-subpage-kicker mono" dir="ltr">ARCHIVE // TECHNICAL INDEX</span>
				<h1 class="md-subpage-title"><?php echo wp_kses_post( get_the_archive_title() ); ?></h1>
				<?php if ( get_the_archive_description() ) : ?>
					<div class="md-subpage-desc"><?php echo wp_kses_post( get_the_archive_description() ); ?></div>
				<?php endif; ?>
			</div>
			<div class="md-subpage-count-badge">
				<span class="mono"><?php echo esc_html( $total_found ); ?></span>
				<span>مورد ثبت‌شده</span>
			</div>
		</div>
	</div>
</section>

<section class="md-archive-canvas" aria-label="فهرست مطالب و پروژه‌ها">
	<div class="container">
		<?php if ( have_posts() ) : ?>
			<div class="md-archive-grid">
				<?php
				$idx = 0;
				while ( have_posts() ) :
					the_post();
					$pid      = get_the_ID();
					$ptype    = get_post_type( $pid );
					$thumb    = has_post_thumbnail( $pid )
						? get_the_post_thumbnail_url( $pid, 'large' )
						: $fallback_thumbs[ $idx % count( $fallback_thumbs ) ];
					$read_str = function_exists( 'md_get_reading_time' ) ? md_get_reading_time( $pid ) : '۵ دقیقه مطالعه';
					$badge    = ( 'project' === $ptype ) ? 'پروژه اجرایی' : 'مقاله تخصصی';
					$idx++;
					?>
					<article class="md-editorial-card">
						<a href="<?php the_permalink(); ?>" class="md-editorial-card-thumb" aria-label="<?php the_title_attribute(); ?>">
							<img src="<?php echo esc_url( $thumb ); ?>" alt="<?php the_title_attribute(); ?>" loading="lazy" width="600" height="360" />
							<span class="md-editorial-card-badge"><?php echo esc_html( $badge ); ?></span>
						</a>
						<div class="md-editorial-card-body">
							<div class="md-editorial-card-meta">
								<span><?php echo esc_html( get_the_date( 'j F Y' ) ); ?></span>
								<span aria-hidden="true">•</span>
								<span><?php echo esc_html( $read_str ); ?></span>
							</div>
							<h2 class="md-editorial-card-title">
								<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
							</h2>
							<p class="md-editorial-card-excerpt">
								<?php
								echo esc_html(
									has_excerpt()
										? get_the_excerpt()
										: wp_trim_words( wp_strip_all_tags( get_the_content() ), 24, '...' )
								);
								?>
							</p>
							<div class="md-editorial-card-foot">
								<a href="<?php the_permalink(); ?>" class="md-editorial-card-link">مطالعه و جزئیات ←</a>
							</div>
						</div>
					</article>
				<?php endwhile; ?>
			</div>

			<?php if ( $wp_query->max_num_pages > 1 ) : ?>
				<nav class="md-archive-pagination" aria-label="صفحه‌بندی آرشیو">
					<?php
					echo wp_kses_post(
						paginate_links(
							array(
								'prev_text' => '« صفحه قبلی',
								'next_text' => 'صفحه بعدی »',
							)
						)
					);
					?>
				</nav>
			<?php endif; ?>

		<?php else : ?>
			<div class="md-empty-state-card">
				<h2>موردی در این دسته‌بندی ثبت نشده است</h2>
				<p>می‌توانید از طریق بخش خدمات مهندسی یا جستجو در پایگاه دانش به مستندات مرتبط دسترسی پیدا کنید.</p>
				<a href="<?php echo esc_url( home_url( '/services/' ) ); ?>" class="btn btn-accent">مشاهده خدمات ۶ گانه ←</a>
			</div>
		<?php endif; ?>
	</div>
</section>
