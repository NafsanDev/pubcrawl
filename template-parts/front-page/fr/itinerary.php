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
				<div class="section-label"><?php esc_html_e( 'La soirée', 'pubcrawl-zurich' ); ?></div>
				<h2 class="section-title"><?php esc_html_e( 'Tournée des bars Zurich:', 'pubcrawl-zurich' ); ?><br><?php esc_html_e( "ta virée dans la nuit zurichoise", 'pubcrawl-zurich' ); ?></h2>
				<p class="section-desc"><?php esc_html_e( 'Avec le Zurich Pub Crawl, on t’emmène dans 4 lieux légendaires — rien à organiser, viens simplement et laisse-toi guider par les Red Hosts.', 'pubcrawl-zurich' ); ?></p>
			</div>
			<div class="itin-book-desktop fade-up" style="gap:0.75rem; flex-shrink:0; align-items:center;">
				<a href="https://www.zurichpubcrawl.ch/bartour/" target="_blank" rel="noopener" class="btn-secondary-navy"><?php esc_html_e( 'Voir les détails du barathon', 'pubcrawl-zurich' ); ?></a>
				<a href="<?php echo esc_url( pcz_get( 'pcz_ticket_url' ) ); ?>" class="btn-primary" target="_blank" rel="noopener">🎟 <?php esc_html_e( 'Réserver', 'pubcrawl-zurich' ); ?></a>
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
					<span class="stop-badge start"><?php esc_html_e( 'Point de rencontre', 'pubcrawl-zurich' ); ?></span>
					<h3>Bar #1 — <?php echo esc_html( pcz_truncate_address() ); ?></h3>
					<p><?php echo esc_html( pcz_translated_string( 'pcz_meeting_time', pcz_get('pcz_meeting_time') ) ); ?> · Fais connaissance avec les autres participants. Snacks de bienvenue, shots et jeux brise-glace. En option : échange linguistique dès 20 h.</p>
				</div>
				<div class="stop-col">
					<span class="stop-badge bar"><?php esc_html_e( 'Étape bar', 'pubcrawl-zurich' ); ?></span>
					<h3><?php esc_html_e( 'Bar #2 — On se met dans l’ambiance', 'pubcrawl-zurich' ); ?></h3>
					<p><?php esc_html_e( 'La fête monte en puissance – et tes shots offerts t’attendent.', 'pubcrawl-zurich' ); ?></p>
				</div>
				<div class="stop-col">
					<span class="stop-badge bar"><?php esc_html_e( 'En option', 'pubcrawl-zurich' ); ?></span>
					<h3><?php esc_html_e( 'Bar #3 — Bar en option', 'pubcrawl-zurich' ); ?></h3>
					<p><?php esc_html_e( 'Selon le thème de la soirée : karaoké, bar festif – ou direct en boîte.', 'pubcrawl-zurich' ); ?></p>
				</div>
				<div class="stop-col">
					<span class="stop-badge club"><?php esc_html_e( 'Final en boîte 🎉', 'pubcrawl-zurich' ); ?></span>
					<h3><?php esc_html_e( 'La boîte légendaire', 'pubcrawl-zurich' ); ?></h3>
					<p><?php esc_html_e( 'Entrée sans file d’attente. DJ international, danse toute la nuit. Un dernier shot t’attend.', 'pubcrawl-zurich' ); ?></p>
				</div>
			</div>
		</div>

		<div class="itin-book-mobile" style="text-align:center; margin-top:2rem;">
			<a href="<?php echo esc_url( pcz_get( 'pcz_tour_details_url' ) ); ?>" target="_blank" rel="noopener" class="btn-secondary-navy" style="flex:1; justify-content:center; padding:0.9rem 1rem; font-size:0.92rem;"><?php esc_html_e( 'See Tour Details', 'pubcrawl-zurich' ); ?></a>
			<a href="<?php echo esc_url( pcz_get( 'pcz_ticket_url' ) ); ?>" class="btn-primary" target="_blank" rel="noopener" style="flex:1; justify-content:center; padding:0.9rem 1rem; font-size:0.92rem;">🎟 <?php esc_html_e( 'Book Now', 'pubcrawl-zurich' ); ?></a>
		</div>
	</div>
</section>
