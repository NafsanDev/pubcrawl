<?php
/**
 * Fallback template (blog index, archives).
 *
 * @package Pubcrawl_Zurich
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

get_header();
?>
<main id="main-content">
	<div class="pcz-results-list">
		<?php if ( have_posts() ) : ?>

			<?php if ( is_home() && ! is_front_page() ) : ?>
				<h1 class="section-title"><?php single_post_title(); ?></h1>
			<?php elseif ( is_archive() ) : ?>
				<h1 class="section-title"><?php the_archive_title(); ?></h1>
				<?php the_archive_description( '<div class="section-desc">', '</div>' ); ?>
			<?php endif; ?>

			<?php while ( have_posts() ) : the_post(); ?>
				<article <?php post_class( 'pcz-result-item' ); ?> id="post-<?php the_ID(); ?>">
					<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
					<div class="pcz-result-meta"><?php echo esc_html( get_the_date() ); ?></div>
					<div class="pcz-result-excerpt"><?php the_excerpt(); ?></div>
				</article>
			<?php endwhile; ?>

			<?php the_posts_pagination(); ?>

		<?php else : ?>
			<p class="pcz-utility-desc"><?php esc_html_e( 'Nothing found here yet.', 'pubcrawl-zurich' ); ?></p>
		<?php endif; ?>
	</div>
</main>
<?php
get_footer();
