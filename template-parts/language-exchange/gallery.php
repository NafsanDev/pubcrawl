<?php
/** Gallery + lightbox. @package Pubcrawl_Zurich */
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
$pcz_images = pcz_get_gallery_images();
$pcz_insta  = pcz_get( 'pcz_instagram_url' );
?>
<section class="gallery-strip" id="gallery">
	<div class="container">
		<div class="gallery-strip-header">
			<div class="fade-up">
				<div class="section-label"><?php esc_html_e( 'Gallery', 'pubcrawl-zurich' ); ?></div>
				<h2 class="section-title"><?php esc_html_e( 'Real Exchanges,', 'pubcrawl-zurich' ); ?><br><?php esc_html_e( 'Real Conversations.', 'pubcrawl-zurich' ); ?></h2>
				<p class="section-desc"><?php esc_html_e( 'A glimpse of what happens every Saturday.', 'pubcrawl-zurich' ); ?></p>
			</div>
			<?php if ( $pcz_insta ) : ?>
			<a href="<?php echo esc_url( $pcz_insta ); ?>" target="_blank" rel="noopener" class="gallery-insta-link gallery-insta-desktop fade-up">
				<?php pcz_instagram_svg(); ?>
				<span><?php esc_html_e( 'More pictures on Instagram', 'pubcrawl-zurich' ); ?></span>
			</a>
			<?php endif; ?>
		</div>

		<div class="gallery-grid fade-up">
			<?php foreach ( $pcz_images as $pcz_i => $pcz_image ) : ?>
				<div class="g-item pcz-gallery-item" data-index="<?php echo esc_attr( $pcz_i ); ?>" role="button" tabindex="0" aria-label="<?php esc_attr_e( 'Open photo', 'pubcrawl-zurich' ); ?>">
					<img src="<?php echo esc_url( $pcz_image['src'] ); ?>" alt="<?php echo esc_attr( $pcz_image['alt'] ); ?>" loading="lazy">
					<div class="g-item-overlay"></div>
				</div>
			<?php endforeach; ?>
		</div>

		<?php if ( $pcz_insta ) : ?>
		<a href="<?php echo esc_url( $pcz_insta ); ?>" target="_blank" rel="noopener" class="gallery-insta-link gallery-insta-mobile fade-up">
			<?php pcz_instagram_svg(); ?>
			<span><?php esc_html_e( 'More pictures on Instagram', 'pubcrawl-zurich' ); ?></span>
		</a>
		<?php endif; ?>
	</div>
</section>

<div class="g-lightbox" id="gLightbox">
	<button class="g-lightbox-close" id="gLightboxClose" type="button" aria-label="<?php esc_attr_e( 'Close', 'pubcrawl-zurich' ); ?>">&times;</button>
	<button class="g-lightbox-nav g-lightbox-prev" id="gLightboxPrev" type="button" aria-label="<?php esc_attr_e( 'Previous photo', 'pubcrawl-zurich' ); ?>">&#8249;</button>
	<img class="g-lightbox-img" id="gLightboxImg" src="" alt="<?php esc_attr_e( 'Pub Crawl Zurich photo', 'pubcrawl-zurich' ); ?>">
	<button class="g-lightbox-nav g-lightbox-next" id="gLightboxNext" type="button" aria-label="<?php esc_attr_e( 'Next photo', 'pubcrawl-zurich' ); ?>">&#8250;</button>
	<div class="g-lightbox-counter" id="gLightboxCounter"></div>
</div>

<script>window.pczGalleryPhotos = <?php echo wp_json_encode( wp_list_pluck( $pcz_images, 'full' ) ); ?>;</script>
