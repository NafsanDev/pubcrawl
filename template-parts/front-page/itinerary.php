<?php
/** Itinerary. @package Pubcrawl_Zurich */
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>
<section class="itinerary" id="itinerary">
	<div class="container">
		<div class="itinerary-header">
			<div class="fade-up">
				<div class="section-label"><?php esc_html_e( 'The Night', 'pubcrawl-zurich' ); ?></div>
				<h2 class="section-title"><?php esc_html_e( 'Your Journey through', 'pubcrawl-zurich' ); ?><br><?php esc_html_e( "Zurich's Nightlife Scene", 'pubcrawl-zurich' ); ?></h2>
				<p class="section-desc"><?php esc_html_e( 'We take you to 4 legendary spots — no planning needed, just show up and let the Red Hosts guide you.', 'pubcrawl-zurich' ); ?></p>
			</div>
			<div class="itin-book-desktop fade-up" style="gap:0.75rem; flex-shrink:0; align-items:center;">
				<a href="<?php echo esc_url( pcz_get( 'pcz_tour_details_url' ) ); ?>" target="_blank" rel="noopener" class="btn-secondary-navy"><?php esc_html_e( 'See Tour Details', 'pubcrawl-zurich' ); ?></a>
				<a href="<?php echo esc_url( pcz_get( 'pcz_ticket_url' ) ); ?>" class="btn-primary" target="_blank" rel="noopener">🎟 <?php esc_html_e( 'Book Now', 'pubcrawl-zurich' ); ?></a>
			</div>
		</div>

		<div class="itinerary-mobile-wrap fade-up">
			<div class="stops-path-row">
				<div class="path-node"><div class="path-circle">1</div></div>
				<div class="path-connector"></div>
				<div class="path-node"><div class="path-circle">2</div></div>
				<div class="path-connector"></div>
				<div class="path-node"><div class="path-circle">3</div></div>
				<div class="path-connector"></div>
				<div class="path-node"><div class="path-circle">4</div></div>
			</div>

			<div class="stops-grid">
				<div class="stop-col">
					<span class="stop-badge start"><?php esc_html_e( 'Meeting Point', 'pubcrawl-zurich' ); ?></span>
					<h3><?php esc_html_e( 'Bar #1 — 2.AKT Sportsbar', 'pubcrawl-zurich' ); ?></h3>
					<p><?php esc_html_e( '9PM · Meet your fellow crawlers. Welcome snacks, shots, and ice-breaking games. Optional: Language Exchange from 8PM.', 'pubcrawl-zurich' ); ?></p>
				</div>
				<div class="stop-col">
					<span class="stop-badge bar"><?php esc_html_e( 'Bar Stop', 'pubcrawl-zurich' ); ?></span>
					<h3><?php esc_html_e( 'Bar #2 — Heating Up', 'pubcrawl-zurich' ); ?></h3>
					<p><?php esc_html_e( 'Warming up, getting into the party mood and enjoy your free shots.', 'pubcrawl-zurich' ); ?></p>
				</div>
				<div class="stop-col">
					<span class="stop-badge bar"><?php esc_html_e( 'Optional', 'pubcrawl-zurich' ); ?></span>
					<h3><?php esc_html_e( 'Bar #3 — Optional Bar', 'pubcrawl-zurich' ); ?></h3>
					<p><?php esc_html_e( 'Depending on the theme of the night, we either do a karaoke, a party bar, or skip and go straight to the Club.', 'pubcrawl-zurich' ); ?></p>
				</div>
				<div class="stop-col">
					<span class="stop-badge club"><?php esc_html_e( 'Nightclub Finale 🎉', 'pubcrawl-zurich' ); ?></span>
					<h3><?php esc_html_e( 'The Legendary Nightclub', 'pubcrawl-zurich' ); ?></h3>
					<p><?php esc_html_e( 'Skip the queue. International DJ, dancing all night. A last shot is waiting.', 'pubcrawl-zurich' ); ?></p>
				</div>
			</div>
		</div>

		<div class="itin-book-mobile" style="text-align:center; margin-top:2rem;">
			<a href="<?php echo esc_url( pcz_get( 'pcz_tour_details_url' ) ); ?>" target="_blank" rel="noopener" class="btn-secondary-navy" style="flex:1; justify-content:center; padding:0.9rem 1rem; font-size:0.92rem;"><?php esc_html_e( 'See Tour Details', 'pubcrawl-zurich' ); ?></a>
			<a href="<?php echo esc_url( pcz_get( 'pcz_ticket_url' ) ); ?>" class="btn-primary" target="_blank" rel="noopener" style="flex:1; justify-content:center; padding:0.9rem 1rem; font-size:0.92rem;">🎟 <?php esc_html_e( 'Book Now', 'pubcrawl-zurich' ); ?></a>
		</div>
	</div>
</section>
