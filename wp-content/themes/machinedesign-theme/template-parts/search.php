<?php
/**
 * MachineDesign Precision v2.3 — Styled Persian Search Results Template
 *
 * Replaces bare unstyled Hello Elementor fallback with Swiss-German Dark Hero,
 * interactive search refinement bar, and high-legibility editorial result cards.
 *
 * @package MachineDesign
 */

defined( 'ABSPATH' ) || exit;

$query_str       = get_search_query();
$fallback_thumbs = array(
	get_template_directory_uri() . '/assets/images/heroes/hero-machine-design.webp',
	get_template_directory_uri() . '/assets/images/heroes/hero-fea-analysis.webp',
	get_template_directory_uri() . '/assets/images/heroes/hero-production-line.webp',
);
global $wp_query;
$total_found = isset( $wp_query->found_posts ) ? (int) $wp_query->found_posts : 0;
?>

<section class="md-subpage-hero" aria-label="نتایج جستجو">
	<div class="container">
		<nav class="page-hero-breadcrumb" aria-label="مسیر راهنما">
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="breadcrumb-item">صفحه اصلی</a>
			<span class="breadcrumb-separator" aria-hidden="true">/</span>
			<span class="breadcrumb-current" aria-current="page">جستجو در پایگاه دانش</span>
		</nav>

		<div class="md-subpage-hero-row">
			<div>
				<span class="md-subpage-kicker mono" dir="ltr">SEARCH // ENGINEERING INDEX</span>
				<h1 class="md-subpage-title">
					نتایج جستجو برای: <span class="md-search-term-accent">«<?php echo esc_html( $query_str ); ?>»</span>
				</h1>
			</div>
			<div class="md-subpage-count-badge">
				<span class="mono"><?php echo esc_html( $total_found ); ?></span>
				<span>نتیجه یافت شد</span>
			</div>
		</div>

		<form role="search" method="get" class="md-inline-search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
			<label for="md-search-field" class="screen-reader-text">جستجو در مقالات و پروژه‌ها</label>
			<input
				type="search"
				id="md-search-field"
				class="md-inline-search-input"
				placeholder="جستجوی کلیدواژه مهندسی، استاندارد ISO، ماشین‌آلات یا فرآیند..."
				value="<?php echo esc_attr( $query_str ); ?>"
				name="s"
			/>
			<button type="submit" class="btn btn-accent md-inline-search-btn">جستجو ←</button>
		</form>
	</div>
</section>

<section class="md-archive-canvas" aria-label="فهرست نتایج جستجو">
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
					$badge    = ( 'project' === $ptype ) ? 'پروژه اجرایی' : ( ( 'page' === $ptype ) ? 'صفحه خدمات' : 'مقاله تخصصی' );
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
								<a href="<?php the_permalink(); ?>" class="md-editorial-card-link">مشاهده صفحه ←</a>
							</div>
						</div>
					</article>
				<?php endwhile; ?>
			</div>

			<?php if ( $wp_query->max_num_pages > 1 ) : ?>
				<nav class="md-archive-pagination" aria-label="صفحه‌بندی نتایج جستجو">
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
				<h2>نتیجه‌ای برای «<?php echo esc_html( $query_str ); ?>» یافت نشد</h2>
				<p>پیشنهاد می‌کنیم با کلیدواژه‌های فارسی (مانند «بسته‌بندی»، «گیربکس»، «ارتعاشات»، «DFMA» یا «قالب») جستجو کنید یا مستقیم به بخش خدمات و مقالات بروید.</p>
				<div class="md-empty-state-actions">
					<a href="<?php echo esc_url( home_url( '/services/' ) ); ?>" class="btn btn-accent">مشاهده خدمات ۶ گانه ←</a>
					<a href="<?php echo esc_url( home_url( '/insights/' ) ); ?>" class="btn md-btn-outline-dark">پایگاه دانش و مقالات</a>
				</div>
			</div>
		<?php endif; ?>
	</div>
</section>
