<?php
/** Event info. @package Pubcrawl_Zurich */
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>
<section class="ticket-section" id="event-info">
  <div class="container">
    <div class="ticket-header fade-up visible">
      <div class="eyebrow">Next Event</div>
      <h2 class="big-title" style="font-size:clamp(1.8rem,4vw,2.6rem);">Your Ticket – a Trip to a Foreign Culture</h2>
      <p style="color:var(--gray); font-size:1rem; max-width:480px; margin:0.75rem auto 0; line-height:1.6;">✈️ We make you travel without leaving Zurich.</p>
      <div style="margin-top:1.25rem;">
        <div style="font-weight:700; color:var(--navy); font-size:1rem;">Next Language Exchange: <?php echo _e(do_shortcode('[eventfrog_date]'), 'pubcrawl-zurich'); ?></div>
        <a href="<?php echo esc_url( pcz_get( 'pcz_ticket_url' ) ); ?>" target="_blank" rel="noopener" style="display:inline-flex; align-items:center; gap:6px; margin-top:8px; font-size:0.78rem; font-weight:600; color:var(--navy); background:var(--cream); border:1px solid rgba(33,49,128,0.2); padding:4px 12px; border-radius:100px; text-decoration:none; letter-spacing:0.04em; transition:background 0.2s;">📅 View Full Agenda →</a>
      </div>
    </div>
    <div class="ticket-stub fade-up visible">
      <div class="ticket-main">
        <div class="eyebrow ticket-venue"><?php echo esc_html( pcz_truncate_address() ); ?></div>
        <h3 class="ticket-title">Language Exchange</h3>
        <div class="ticket-rows">
          <div class="ticket-row"><div class="label">Date</div><div class="value"><?php echo esc_html( pcz_get('pcz_meeting_day') ); ?></div></div>
          <div class="ticket-row"><div class="label">Time</div><div class="value">8:00 – 10:00 PM</div></div>
          <div class="ticket-row"><div class="label">Location</div><div class="value"><a href="<?php echo esc_url( pcz_get( 'pcz_maps_url' ) ); ?>" target="_blank" rel="noopener"><span class="ticket-address-full"><?php echo esc_html( pcz_truncate_address_last() ); ?></span><span class="ticket-address-short"><?php echo esc_html( pcz_truncate_address() ); ?></span> →</a></div></div>
          <div class="ticket-row ticket-row-groupsize"><div class="label">Group Size</div><div class="value">20 participants</div></div>
          <div class="ticket-row ticket-row-destination"><div class="label">Destination Country</div><div class="value">Choose Language upon arrival</div></div>
          <div class="ticket-row ticket-row-included"><div class="label">Included</div><div class="value">✓ Conversation Partners<br>✓ Nachos &amp; Fries</div></div>
        </div>
      </div>
      <div class="ticket-side">
        <div class="price">CHF <?php echo esc_html( pcz_get( 'pcz_le_price_note' ) ); ?></div>
        <div class="price-note">Standard Ticket</div>
        <a href="<?php echo esc_url( pcz_get( 'pcz_ticket_url' ) ); ?>" target="_blank" rel="noopener">🎟 Book Now</a>
      </div>
    </div>
    <p class="ticket-combo fade-up visible">🍻 Want to keep the night going? At 10PM we turn the event into a <a href="https://www.zurichpubcrawl.ch/bartour/" target="_blank" rel="noopener">Pub Crawl</a> — Get the combo ticket and save CHF 10.-</p>
  </div>
</section>
