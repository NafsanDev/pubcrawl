<?php
/** Prices + what's included. @package Pubcrawl_Zurich */
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
$pcz_tiers = array(
	array( __( 'Étudiants', 'pubcrawl-zurich' ), __( 'Avec carte d’étudiant valable, jusqu’à 25 ans', 'pubcrawl-zurich' ), 'pcz_price_student', '' ),
	array( __( 'Early Bird', 'pubcrawl-zurich' ), __( 'disponible jusqu’à 48 h avant l’événement', 'pubcrawl-zurich' ), 'pcz_price_early', '' ),
	array( __( 'Normal', 'pubcrawl-zurich' ), '', 'pcz_price_regular', '' ),
	array( __( 'VIP', 'pubcrawl-zurich' ), '', 'pcz_price_vip', __( '+2 Shots', 'pubcrawl-zurich' ) ),
);
?>
<section class="included" id="whats-included">
	<div class="container">
		<div class="fade-up">
			<div style="display:flex; align-items:flex-end; justify-content:space-between; flex-wrap:wrap; gap:1rem;">
				<div>
					<div class="section-label"><?php esc_html_e( 'Prix & prestations', 'pubcrawl-zurich' ); ?></div>
					<h2 class="section-title"><?php esc_html_e( 'Ton billet tout compris', 'pubcrawl-zurich' ); ?></h2>
					<p class="section-desc ticket-subdesc"><?php esc_html_e( 'Un seul billet pour toute la soirée — pas de frais cachés, pas de stress, pas de file d’attente.', 'pubcrawl-zurich' ); ?></p>
				</div>
			</div>
		</div>

		<div class="unified-card fade-up" id="prices">
			<div class="unified-columns">

				<div class="unified-col unified-col-prices">
					<h3 class="unified-heading"><span class="prices-heading-full"><?php esc_html_e( 'Billets & prix', 'pubcrawl-zurich' ); ?></span><span class="prices-heading-short"><?php esc_html_e( 'prix', 'pubcrawl-zurich' ); ?></span></h3>
					<div class="rates-tiers-row">
						<?php foreach ( $pcz_tiers as $pcz_tier ) : ?>
						<div class="price-tier rates-tier-item" style="border-bottom-color:rgba(33,49,128,0.18);">
							<div>
								<span class="price-tier-name" style="color:var(--navy);"><?php echo esc_html( $pcz_tier[0] ); ?></span>
								<?php if ( $pcz_tier[3] ) : ?><span class="price-tier-badge"><?php echo esc_html( $pcz_tier[3] ); ?></span><?php endif; ?>
								<?php if ( $pcz_tier[1] ) : ?><div style="font-size:0.68rem; color:var(--gray); margin-top:2px;"><?php echo esc_html( $pcz_tier[1] ); ?></div><?php endif; ?>
							</div>
							<div class="price-amount" style="color:var(--navy);"><?php echo esc_html( pcz_get( $pcz_tier[2] ) ); ?></div>
						</div>
						<?php endforeach; ?>
					</div>
					<a href="<?php echo esc_url( pcz_get( 'pcz_ticket_url' ) ); ?>" class="price-cta" target="_blank" rel="noopener">🎟 <?php esc_html_e( 'Réserver ma place', 'pubcrawl-zurich' ); ?></a>
					<p class="price-cta-note" style="color:rgba(33,49,128,0.4);"><?php esc_html_e( 'Paiement sécurisé · Confirmation immédiate', 'pubcrawl-zurich' ); ?></p>
					<p class="price-cta-note" style="color:var(--red); font-weight:600; margin-top:0.35rem;">⚡ <?php esc_html_e( 'Places limitées', 'pubcrawl-zurich' ); ?></p>
				</div>

				<div class="unified-divider"></div>

				<div class="unified-col unified-col-included">
					<h3 class="unified-heading unified-heading-included"><?php esc_html_e( "Inclus", 'pubcrawl-zurich' ); ?></h3>
					<div class="inc-items-row">
						<div class="inc-item">
							<div class="inc-top"><span class="inc-emoji">🍿</span><div class="inc-check-badge">✓</div></div>
							<h4><?php esc_html_e( 'Snacks de bienvenue', 'pubcrawl-zurich' ); ?></h4>
							<p><?php esc_html_e( 'Un petit quelque chose de salé avant les premiers verres', 'pubcrawl-zurich' ); ?></p>
						</div>
						<div class="inc-item">
							<div class="inc-top"><span class="inc-emoji">🍷</span><div class="inc-check-badge">✓</div></div>
							<h4><?php esc_html_e( 'Shots', 'pubcrawl-zurich' ); ?></h4>
							<p><?php esc_html_e( 'Un à chaque étape', 'pubcrawl-zurich' ); ?></p>
						</div>
						<div class="inc-item">
							<div class="inc-top"><span class="inc-emoji">🎟</span><div class="inc-check-badge">✓</div></div>
							<h4><?php esc_html_e( 'Entrée en boîte', 'pubcrawl-zurich' ); ?></h4>
							<p><?php esc_html_e( 'Entrée gratuite, sans file d’attente', 'pubcrawl-zurich' ); ?></p>
						</div>
						<div class="inc-item">
							<div class="inc-top"><span class="inc-emoji">🧪</span><div class="inc-check-badge">✓</div></div>
							<h4><?php esc_html_e( 'Bâtons lumineux', 'pubcrawl-zurich' ); ?></h4>
							<p><?php esc_html_e( "Fais briller la nuit zurichoise", 'pubcrawl-zurich' ); ?></p>
						</div>
						<div class="inc-item">
							<div class="inc-top"><span class="inc-emoji">🏓</span><div class="inc-check-badge">✓</div></div>
							<h4><?php esc_html_e( 'Jeux', 'pubcrawl-zurich' ); ?></h4>
							<p><?php esc_html_e( 'Jeux brise-glace & jeux de soirée au bar de rendez-vous', 'pubcrawl-zurich' ); ?></p>
						</div>
						<div class="inc-item">
							<div class="inc-top"><span class="inc-emoji"><?php pcz_host_svg( 22 ); ?></span><div class="inc-check-badge">✓</div></div>
							<h4><?php esc_html_e( 'Red Host', 'pubcrawl-zurich' ); ?></h4>
							<p><?php esc_html_e( 'Ton guide en rouge qui s’occupe de toi', 'pubcrawl-zurich' ); ?></p>
						</div>
					</div>
				</div>

			</div>
		</div>
	</div>
</section>
