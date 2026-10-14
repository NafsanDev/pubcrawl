<?php
/** Prices + what's included. @package Pubcrawl_Zurich */
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
$pcz_tiers = array(
	array( __( 'Students', 'pubcrawl-zurich' ), __( 'With valid student ID, up to 25 years old', 'pubcrawl-zurich' ), 'pcz_price_student', '' ),
	array( __( 'Early Bird', 'pubcrawl-zurich' ), __( 'available up to 48h prior to the Event', 'pubcrawl-zurich' ), 'pcz_price_early', '' ),
	array( __( 'Regular', 'pubcrawl-zurich' ), '', 'pcz_price_regular', '' ),
	array( __( 'VIP', 'pubcrawl-zurich' ), '', 'pcz_price_vip', __( '+2 Shots', 'pubcrawl-zurich' ) ),
);
?>
<section class="included" id="whats-included">
	<div class="container">
		<div class="fade-up">
			<div style="display:flex; align-items:flex-end; justify-content:space-between; flex-wrap:wrap; gap:1rem;">
				<div>
					<div class="section-label"><?php esc_html_e( 'Prices & Inclusions', 'pubcrawl-zurich' ); ?></div>
					<h2 class="section-title"><?php esc_html_e( 'Your all-in Ticket', 'pubcrawl-zurich' ); ?></h2>
					<p class="section-desc ticket-subdesc"><?php esc_html_e( 'One ticket covers your entire evening — no hidden costs, no stress, no waiting in lines.', 'pubcrawl-zurich' ); ?></p>
				</div>
			</div>
		</div>

		<div class="unified-card fade-up" id="prices">
			<div class="unified-columns">

				<div class="unified-col unified-col-prices">
					<h3 class="unified-heading"><span class="prices-heading-full"><?php esc_html_e( 'Ticket & Prices', 'pubcrawl-zurich' ); ?></span><span class="prices-heading-short"><?php esc_html_e( 'Prices', 'pubcrawl-zurich' ); ?></span></h3>
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
					<a href="<?php echo esc_url( pcz_get( 'pcz_ticket_url' ) ); ?>" class="price-cta" target="_blank" rel="noopener">🎟 <?php esc_html_e( 'Get Your Ticket', 'pubcrawl-zurich' ); ?></a>
					<p class="price-cta-note" style="color:rgba(33,49,128,0.4);"><?php esc_html_e( 'Secure booking · Instant confirmation', 'pubcrawl-zurich' ); ?></p>
					<p class="price-cta-note" style="color:var(--red); font-weight:600; margin-top:0.35rem;">⚡ <?php esc_html_e( 'Limited spots', 'pubcrawl-zurich' ); ?></p>
				</div>

				<div class="unified-divider"></div>

				<div class="unified-col unified-col-included">
					<h3 class="unified-heading unified-heading-included"><?php esc_html_e( "What's Included", 'pubcrawl-zurich' ); ?></h3>
					<div class="inc-items-row">
						<div class="inc-item">
							<div class="inc-top"><span class="inc-emoji">🍿</span><div class="inc-check-badge">✓</div></div>
							<h4><?php esc_html_e( 'Welcome Snacks', 'pubcrawl-zurich' ); ?></h4>
							<p><?php esc_html_e( 'Something salty to line your stomach before the drinks start', 'pubcrawl-zurich' ); ?></p>
						</div>
						<div class="inc-item">
							<div class="inc-top"><span class="inc-emoji"><img class="inc-photo" src="<?php echo esc_url( PCZ_URI . '/assets/images/shots-icon.png' ); ?>" alt="<?php esc_attr_e( 'Shots', 'pubcrawl-zurich' ); ?>" loading="lazy"></span><div class="inc-check-badge">✓</div></div>
							<h4><?php esc_html_e( 'Shots', 'pubcrawl-zurich' ); ?></h4>
							<p><?php esc_html_e( 'One at each stop along the way', 'pubcrawl-zurich' ); ?></p>
						</div>
						<div class="inc-item">
							<div class="inc-top"><span class="inc-emoji">🎟</span><div class="inc-check-badge">✓</div></div>
							<h4><?php esc_html_e( 'Club Entry', 'pubcrawl-zurich' ); ?></h4>
							<p><?php esc_html_e( 'Skip the queue, free entry to the club', 'pubcrawl-zurich' ); ?></p>
						</div>
						<div class="inc-item">
							<div class="inc-top"><span class="inc-emoji"><img class="inc-photo" src="<?php echo esc_url( PCZ_URI . '/assets/images/glow-sticks-icon-v2.png' ); ?>" alt="<?php esc_attr_e( 'Glow sticks', 'pubcrawl-zurich' ); ?>" loading="lazy"></span><div class="inc-check-badge">✓</div></div>
							<h4><?php esc_html_e( 'Glow Sticks', 'pubcrawl-zurich' ); ?></h4>
							<p><?php esc_html_e( "Light up Zurich's night", 'pubcrawl-zurich' ); ?></p>
						</div>
						<div class="inc-item">
							<div class="inc-top"><span class="inc-emoji">🏓</span><div class="inc-check-badge">✓</div></div>
							<h4><?php esc_html_e( 'Games', 'pubcrawl-zurich' ); ?></h4>
							<p><?php esc_html_e( 'Icebreakers & party games at the meeting bar', 'pubcrawl-zurich' ); ?></p>
						</div>
						<div class="inc-item">
							<div class="inc-top"><span class="inc-emoji"><?php pcz_host_svg( 22 ); ?></span><div class="inc-check-badge">✓</div></div>
							<h4><?php esc_html_e( 'Red Host', 'pubcrawl-zurich' ); ?></h4>
							<p><?php esc_html_e( 'Your guide in red taking care of you', 'pubcrawl-zurich' ); ?></p>
						</div>
					</div>
				</div>

			</div>
		</div>
	</div>
</section>
