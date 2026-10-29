<?php
/** Event info. @package Pubcrawl_Zurich */
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>

<section class="other-events">
  <div class="container">
    <div class="fade-up visible" style="text-align:center;">
      <div class="section-label">Une autre occasion&nbsp;?</div>
      <h2 class="section-title" style="margin-left:auto; margin-right:auto;">Plus de pub crawls<br>privés</h2>
      <p class="section-desc" style="margin-left:auto; margin-right:auto;">On n’organise pas que des EVG et EVJF. Les anniversaires et les événements d’entreprise ont chacun leur propre page avec tous les détails.</p>
    </div>
    <div class="event-cards fade-up visible">
      <a href="<?php echo home_url('/fr/tours-prives/anniversaire/'); ?>" class="event-card">
        <div class="event-card-icon">🎂</div>
        <h3>Anniversaire</h3>
        <p>Fêtez votre anniversaire avec un pub crawl privé à travers Zurich — organisé pour votre groupe.</p>
        <span class="event-card-link">Voir la page anniversaire →</span>
      </a>
      <a href="<?php echo home_url('/fr/tours-prives/evenement-dentreprise/'); ?>" class="event-card">
        <div class="event-card-icon">🏢</div>
        <h3>Événement d’entreprise</h3>
        <p>Team building, sortie d’association ou fête d’entreprise — un tour guidé qui soude votre groupe.</p>
        <span class="event-card-link">Voir la page événements d’entreprise →</span>
      </a>
    </div>
  </div>
</section>
