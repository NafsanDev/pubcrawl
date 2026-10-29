<?php
/** Hero. @package Pubcrawl_Zurich */
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>
<section class="hero" id="top">
	<div class="hero-bg-photo"></div>

	<?php if ( pcz_get( 'pcz_hero_video_url' ) ) : ?>
	<div class="hero-video-bg">
		<video autoplay muted loop playsinline preload="auto">
			<source src="<?php echo esc_url( pcz_get( 'pcz_hero_video_url' ) ); ?>" type="video/mp4">
		</video>
	</div>
	<button class="hero-sound-btn" id="sound-btn" type="button" title="<?php esc_attr_e( 'Activer/désactiver le son', 'pubcrawl-zurich' ); ?>">🔇</button>
	<?php endif; ?>

	<div class="hero-top">
		<h1><?php echo esc_html( pcz_get( 'pcz_hero_title' ) ); ?></h1>
		<p class="h1-sub">tous les samedis</p>
	</div>

	<div class="hero-centre"></div>

	<div class="hero-bottom">
		<div class="hero-actions">
			<a href="<?php echo esc_url( pcz_get( 'pcz_ticket_url' ) ); ?>" class="btn-primary" target="_blank" rel="noopener">
				🎟 <?php esc_html_e( 'Réserver', 'pubcrawl-zurich' ); ?>
				<?php if ( pcz_get( 'pcz_ticket_price_note' ) ) : ?>
					<span style="opacity:0.75; font-weight:400; font-size:0.85em; margin-left:6px; border-left:1px solid rgba(255,255,255,0.4); padding-left:8px;">dès <?php echo esc_html( pcz_get( 'pcz_ticket_price_note' ) ); ?></span>
				<?php endif; ?>
			</a>
			<a href="#itinerary" class="btn-secondary"><?php esc_html_e( 'Programme ↓', 'pubcrawl-zurich' ); ?></a>
		</div>
		<div class="hero-next-event">📅 Prochain événement — <?php echo _e(do_shortcode('[eventfrog_date]'), 'pubcrawl-zurich'); ?></div>
	</div>
</section>
