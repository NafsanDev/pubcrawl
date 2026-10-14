<?php
/**
 * Search results template.
 *
 * @package Pubcrawl_Zurich
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

get_header();
?>
<main id="main-content">

	<?php if ( have_posts() ) : ?>

		<div class="pcz-results-list">
			<div class="pcz-utility-eyebrow"><?php esc_html_e( 'Search Results', 'pubcrawl-zurich' ); ?></div>
			<h1 class="section-title">
				<?php
				printf(
					/* translators: %s: search query */
					esc_html__( 'Results for: %s', 'pubcrawl-zurich' ),
					'<span>' . esc_html( get_search_query() ) . '</span>'
				);
				?>
			</h1>

			<div style="margin:1.5rem 0 2.5rem;"><?php get_search_form(); ?></div>

			<?php while ( have_posts() ) : the_post(); ?>
				<article <?php post_class( 'pcz-result-item' ); ?> id="post-<?php the_ID(); ?>">
					<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
					<div class="pcz-result-meta">
						<?php
						$pcz_type = get_post_type_object( get_post_type() );
						echo esc_html( get_the_date() );
						if ( $pcz_type ) {
							echo ' &middot; ' . esc_html( $pcz_type->labels->singular_name );
						}
						?>
					</div>
					<div class="pcz-result-excerpt"><?php the_excerpt(); ?></div>
				</article>
			<?php endwhile; ?>

			<?php the_posts_pagination(); ?>
		</div>

	<?php else : ?>

		<section class="pcz-utility-section">
			<div class="pcz-utility-content">
				<div class="pcz-utility-eyebrow"><?php esc_html_e( 'Search Results', 'pubcrawl-zurich' ); ?></div>
				<h1 class="pcz-utility-title"><?php esc_html_e( 'Nothing found for that search', 'pubcrawl-zurich' ); ?></h1>
				<p class="pcz-utility-desc">
					<?php
					printf(
						/* translators: %s: search query */
						esc_html__( 'We couldn\'t find anything matching "%s". Try different keywords, or head back to the tour info.', 'pubcrawl-zurich' ),
						esc_html( get_search_query() )
					);
					?>
				</p>

				<?php get_search_form(); ?>

				<div class="hero-actions" style="margin-top:1.5rem;">
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="btn-primary">🏠 <?php esc_html_e( 'Back to Home', 'pubcrawl-zurich' ); ?></a>
				</div>
			</div>
		</section>

	<?php endif; ?>

</main>
<?php
get_footer();
