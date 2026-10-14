<?php
/** Reviews. @package Pubcrawl_Zurich */
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>
<section class="reviews" id="reviews">
	<div class="container">
		<div class="reviews-header fade-up">
			<div class="section-label"><?php esc_html_e( 'What People Say', 'pubcrawl-zurich' ); ?></div>
			<h2 class="section-title"><?php esc_html_e( 'What our participants', 'pubcrawl-zurich' ); ?><br><?php esc_html_e( 'say about us', 'pubcrawl-zurich' ); ?></h2>
			<div class="star-row">★★★★★</div>
			<p class="reviews-avg"><?php esc_html_e( '4.7 / 5 average rating · 500+ reviews', 'pubcrawl-zurich' ); ?></p>
		</div>

		<?php if ( pcz_get( 'pcz_google_reviews_url' ) ) : ?>
		<div style="display:flex; align-items:center; justify-content:center; gap:0.75rem; margin-bottom:1.5rem;" class="fade-up">
			<?php pcz_google_g_icon( 22 ); ?>
			<a href="<?php echo esc_url( pcz_get( 'pcz_google_reviews_url' ) ); ?>" target="_blank" rel="noopener" style="font-size:0.8rem; font-weight:600; color:var(--navy); text-decoration:none;"><?php esc_html_e( 'See all reviews on Google →', 'pubcrawl-zurich' ); ?></a>
		</div>
		<?php endif; ?>

		<div class="reviews-grid">
			<?php foreach ( pcz_get_reviews() as $pcz_review ) : ?>
			<div class="review-card fade-up">
				<div style="display:flex; align-items:center; justify-content:space-between; margin-bottom:0.75rem;">
					<div class="review-stars">★★★★★</div>
					<?php pcz_google_g_icon( 16 ); ?>
				</div>
				<p class="review-text">&ldquo;<?php echo esc_html( $pcz_review['text'] ); ?>&rdquo;</p>
				<div class="review-author">
					<div class="review-avatar" style="background:<?php echo esc_attr( $pcz_review['color'] ); ?>;<?php echo ( '#FBBC05' === $pcz_review['color'] ) ? ' color:#333;' : ''; ?>"><?php echo esc_html( $pcz_review['initials'] ); ?></div>
					<div>
						<div class="review-author-name"><?php echo esc_html( $pcz_review['name'] ); ?></div>
						<div class="review-author-meta"><?php esc_html_e( 'Google Review', 'pubcrawl-zurich' ); ?></div>
					</div>
				</div>
			</div>
			<?php endforeach; ?>
		</div>
	</div>
</section>
