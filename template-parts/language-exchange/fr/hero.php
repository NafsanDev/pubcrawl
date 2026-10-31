<?php
/** Hero. @package Pubcrawl_Zurich */
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>
<div class="lx-hero-text">
  <div class="container">
    <h1 class="big-title">Échange linguistique Zurich</h1>
    <div class="lx-hero-flags">
    <img class="hero-flag" src="<?php echo PCZ_URI . '/assets/images/exchange/flag-german.png';?>" alt="Drapeau allemand" width="36" height="24">
    <img class="hero-flag" src="<?php echo PCZ_URI . '/assets/images/exchange/flag-english.png';?>" alt="Drapeau anglais" width="36" height="24">
    <img class="hero-flag" src="<?php echo PCZ_URI . '/assets/images/exchange/flag-spain.png';?>" alt="Drapeau espagnol" width="36" height="24">
    <img class="hero-flag" src="<?php echo PCZ_URI . '/assets/images/exchange/flag-french.png';?>" alt="Drapeau français" width="36" height="24">
    <img class="hero-flag" src="<?php echo PCZ_URI . '/assets/images/exchange/flag-swiss.png';?>" alt="Drapeau suisse" width="36" height="24">
    <img class="hero-flag" src="<?php echo PCZ_URI . '/assets/images/exchange/flag-italy.png';?>" alt="Drapeau italien" width="36" height="24">
    <img class="hero-flag" src="<?php echo PCZ_URI . '/assets/images/exchange/flag-portuguese.png';?>" alt="Drapeau portugais" width="36" height="24">
    <img class="hero-flag" src="<?php echo PCZ_URI . '/assets/images/exchange/flag-russia.png';?>" alt="Drapeau russe" width="36" height="24">
    <img class="hero-flag" src="<?php echo PCZ_URI . '/assets/images/exchange/flag-japan.png';?>" alt="Drapeau japonais" width="36" height="24">
    </div>
    <div class="lx-hero-schedule"><?php echo esc_html( pcz_translated_string( 'pcz_meeting_day', pcz_get('pcz_meeting_day') ) ); ?>, 20–22 h</div>
  </div>
</div>

<div class="lx-hero-wrap">
  <img class="lx-hero-photo" src="<?php echo PCZ_URI . '/assets/images/exchange/language-exchange-hero-3.jpg';?>" alt="Échange linguistique Zurich — tables de langue avec panneaux allemand, espagnol et anglais">
  <img class="lx-hero-logo" src="<?php echo PCZ_URI . '/assets/images/exchange/exchange-logo.png';?>" alt="Seb's Échange linguistique Zurich logo">
  <div class="lx-hero-actions lx-hero-actions-overlay">
    <a href="<?php echo esc_url( pcz_get( 'pcz_ticket_url' ) ); ?>" class="btn-primary" target="_blank" rel="noopener">🎟 Réserver <span style="opacity:0.75; font-weight:400; font-size:0.85em; margin-left:6px; border-left:1px solid rgba(255,255,255,0.4); padding-left:8px;">Fr. <?php echo esc_html( pcz_get( 'pcz_le_price_note' ) ); ?></span></a>
    <a href="#how-it-works" class="btn-secondary">Comment ça marche ↓</a>
  </div>
  <div class="lx-hero-next-event">📅 Prochain événement — <?php echo do_shortcode('[eventfrog_date]'); ?></div>
</div>
