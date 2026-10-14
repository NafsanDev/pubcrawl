<?php
/**
 * 404 (page not found) template.
 *
 * @package Pubcrawl_Zurich
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

get_header();
?>
<main id="main-content">
	<section class="pcz-utility-section">
		<div class="pcz-utility-content">
			<div class="pcz-utility-eyebrow"><?php esc_html_e( '404 · Page Not Found', 'pubcrawl-zurich' ); ?></div>
			<h1 class="pcz-utility-title"><?php esc_html_e( "Looks like this bar isn't on the map.", 'pubcrawl-zurich' ); ?></h1>
			<p class="pcz-utility-desc"><?php esc_html_e( "The page you're looking for doesn't exist or may have moved. Let's get you back to the party.", 'pubcrawl-zurich' ); ?></p>

			<?php get_search_form(); ?>

			<div class="hero-actions" style="margin-top:1.5rem;">
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="btn-primary">🏠 <?php esc_html_e( 'Back to Home', 'pubcrawl-zurich' ); ?></a>
				<?php if ( pcz_get( 'pcz_ticket_url' ) ) : ?>
					<a href="<?php echo esc_url( pcz_get( 'pcz_ticket_url' ) ); ?>" target="_blank" rel="noopener" class="btn-secondary on-light">🎟 <?php esc_html_e( 'Book a Tour Instead', 'pubcrawl-zurich' ); ?></a>
				<?php endif; ?>
			</div>
		</div>
	</section>
</main>
<?php
get_footer();
