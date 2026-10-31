<?php
/** Event info. @package Pubcrawl_Zurich */
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>
<section class="event-info" id="event-info">
	<div class="event-info-bg"></div>
	<div class="container">
		<ul class="event-details-list fade-up">
			<li>
				<div class="detail-icon">📅</div>
				<div class="detail-content">
					<div class="label"><?php esc_html_e( 'Prochaine date', 'pubcrawl-zurich' ); ?></div>
					<div class="value"><?php echo esc_html( pcz_translated_string( 'pcz_meeting_day', pcz_get('pcz_meeting_day') ) ); ?></div>
					<a href="<?php echo esc_url( pcz_get( 'pcz_ticket_url' ) ); ?>" target="_blank" rel="noopener" style="display:inline-flex; align-items:center; gap:6px; margin-top:10px; font-size:0.78rem; font-weight:600; color:var(--navy); background:var(--cream); border:1px solid rgba(33,49,128,0.2); padding:4px 12px; border-radius:100px; text-decoration:none; letter-spacing:0.04em;">📅 <?php esc_html_e( 'Voir tout l’agenda →', 'pubcrawl-zurich' ); ?></a>
				</div>
			</li>
			<li>
				<div class="detail-icon">🕘</div>
				<div class="detail-content"><div class="label"><?php esc_html_e( 'Heure de rendez-vous', 'pubcrawl-zurich' ); ?></div><div class="value"><?php echo esc_html( pcz_translated_string( 'pcz_meeting_time', pcz_get('pcz_meeting_time') ) ); ?></div></div>
			</li>
			<li>
				<div class="detail-icon">📍</div>
				<div class="detail-content"><div class="label"><?php esc_html_e( 'Bar de rendez-vous', 'pubcrawl-zurich' ); ?></div><div class="value"><a href="<?php echo esc_url( pcz_get( 'pcz_maps_url' ) ); ?>" target="_blank" rel="noopener" style="color:var(--white);"><?php echo esc_html( pcz_get( 'pcz_meeting_bar' ) ); ?> →</a></div></div>
			</li>
			<li>
				<div class="detail-icon" style="display:flex;align-items:center;justify-content:center;"><?php pcz_host_svg( 34 ); ?></div>
				<div class="detail-content"><div class="label"><?php esc_html_e( 'Ton host', 'pubcrawl-zurich' ); ?></div><div class="value"><?php esc_html_e( 'Cherche les guides en t-shirt rouge.', 'pubcrawl-zurich' ); ?></div></div>
			</li>
		</ul>
	</div>
</section>
