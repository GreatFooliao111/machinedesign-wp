<?php
/**
 * The template for displaying all pages
 *
 * MachineDesign.ir Dedicated Page Template
 * Follows Automattic standards & clean WordPress hierarchy
 *
 * @package HelloElementor
 */

defined( 'ABSPATH' ) || exit;

get_header();
?>

<div class="internal-page-wrapper">
	<?php
	while ( have_posts() ) :
		the_post();
		$post_id = get_the_ID();
		$parent_id = wp_get_post_parent_id( $post_id );
		?>
		<article id="post-<?php the_ID(); ?>" <?php post_class( 'entry-page-article' ); ?>>
			
			<!-- Internal Page Hero Banner -->
			<header class="page-hero-banner">
				<div class="container">
					
					<!-- Breadcrumb Navigation -->
					<nav class="page-hero-breadcrumb" aria-label="مسیر راهنما">
						<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="breadcrumb-item">صفحه اصلی</a>
						<span class="breadcrumb-separator" aria-hidden="true">/</span>
						<?php if ( $parent_id ) : ?>
							<a href="<?php echo esc_url( get_permalink( $parent_id ) ); ?>" class="breadcrumb-item">
								<?php echo esc_html( get_the_title( $parent_id ) ); ?>
							</a>
							<span class="breadcrumb-separator" aria-hidden="true">/</span>
						<?php endif; ?>
						<span class="breadcrumb-current" aria-current="page"><?php the_title(); ?></span>
					</nav>

					<!-- Corporate Sub-badge -->
					<div class="page-hero-badge">
						<span class="pulse-indicator" aria-hidden="true"></span>
						<span class="mono">MACHINEDESIGN.IR // INDUSTRIAL R&amp;D</span>
					</div>

					<!-- Main Page Title -->
					<h1 class="page-hero-title"><?php the_title(); ?></h1>

					<!-- Optional Excerpt / Summary -->
					<?php if ( has_excerpt() ) : ?>
						<div class="page-hero-excerpt">
							<?php the_excerpt(); ?>
						</div>
					<?php endif; ?>

				</div>
			</header>

			<!-- Page Main Content Area -->
			<div class="page-content-area">
				<div class="container">
					<div class="entry-content industrial-typography">
						<?php
						the_content();

						wp_link_pages( [
							'before'      => '<nav class="page-pagination" aria-label="' . esc_attr__( 'صفحات', 'hello-elementor' ) . '"><span class="page-links-title">' . esc_html__( 'صفحات:', 'hello-elementor' ) . '</span>',
							'after'       => '</nav>',
							'link_before' => '<span class="page-number">',
							'link_after'  => '</span>',
						] );
						?>
					</div>
				</div>
			</div>

		</article>
		<?php
	endwhile;
	?>
</div>

<?php
get_footer();
