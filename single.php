<?php
/**
 * Template for singles.
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
		<?php while ( have_posts() ) : the_post(); ?>
			<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">
				<h1 class="section-title"><?php the_title(); ?></h1>
				<?php if ( 'single' === 'single' ) : ?>
					<div class="pcz-result-meta"><?php echo esc_html( get_the_date() ); ?> &middot; <?php the_author(); ?></div>
					<?php if ( has_post_thumbnail() ) : ?>
						<div style="margin:1.5rem 0;"><?php the_post_thumbnail( 'large' ); ?></div>
					<?php endif; ?>
				<?php endif; ?>
				<div class="pcz-page-content"><?php the_content(); ?></div>
				<?php wp_link_pages( array( 'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'pubcrawl-zurich' ), 'after' => '</div>' ) ); ?>
			</article>
			<?php
			if ( comments_open() || get_comments_number() ) {
				comments_template();
			}
			?>
		<?php endwhile; ?>
	</div>
</main>
<?php
get_footer();
