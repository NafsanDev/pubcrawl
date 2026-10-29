<?php
/** Event info. @package Pubcrawl_Zurich */
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>
<section class="other-events">
  <div class="container">
    <div class="fade-up visible" style="text-align:center;">
      <div class="section-label">Different Occasion?</div>
      <h2 class="section-title" style="margin-left:auto; margin-right:auto;">More Private<br>Pub Crawl Tours</h2>
      <p class="section-desc" style="margin-left:auto; margin-right:auto;">We don't just organize bachelor parties. Birthdays and corporate events each have their own dedicated page with all the details.</p>
    </div>
    <div class="event-cards fade-up visible">
      <a href="<?php echo home_url('/private-tours/birthday-party/'); ?>" class="event-card">
        <div class="event-card-icon">🎂</div>
        <h3>Birthday</h3>
        <p>Celebrate your birthday with a private pub crawl tour through Zurich — planned around your group.</p>
        <span class="event-card-link">Go to Birthday Page →</span>
      </a>
      <a href="<?php echo home_url('/private-tours/company-event/'); ?>" class="event-card">
        <div class="event-card-icon">🏢</div>
        <h3>Corporate Event</h3>
        <p>Team event, club outing, or company celebration — a guided tour that brings your group together.</p>
        <span class="event-card-link">Go to Corporate Event Page →</span>
      </a>
    </div>
  </div>
</section>
