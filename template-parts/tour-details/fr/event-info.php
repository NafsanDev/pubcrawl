<?php
/** Event info. @package Pubcrawl_Zurich */
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

?>
<!-- EVENT INFO -->
<section class="event-info" id="event-info">
  <div class="event-info-bg"></div>
  <div class="container">
    <div class="event-layout">
      <div class="fade-up visible">
        <div class="section-label" style="color:#FF6B82;">Prochains événements</div>
        <h2 class="section-title" style="color:white;">Prochain barathon —<br>quand &amp; où</h2>
        <p style="color:rgba(255,255,255,0.6); line-height:1.7; max-width:420px;">Rendez-vous à la <?php echo esc_html( pcz_truncate_address() ); ?>, au centre de Zurich, pour un barathon guidé dans les meilleurs bars et boîtes de la ville — l’avant-goût parfait de la vie nocturne zurichoise.</p>
        <ul class="event-details-list">
          <li>
            <div class="detail-icon">📅</div>
            <div class="detail-content">
              <div class="label">Prochaine date</div>
              <div class="value"><?php echo esc_html( pcz_get( 'pcz_meeting_day' ) ); ?></div>
              <a href="<?php echo esc_url( pcz_get( 'pcz_ticket_url' ) ); ?>" target="_blank" rel="noopener" style="display:inline-flex; align-items:center; gap:6px; margin-top:8px; font-size:0.78rem; font-weight:600; color:var(--navy); background:var(--cream); border:1px solid rgba(33,49,128,0.2); padding:4px 12px; border-radius:100px; text-decoration:none; letter-spacing:0.04em; transition:background 0.2s;">📅 Voir tout l’agenda →</a>
            </div>
          </li>
          <li>
            <div class="detail-icon">🕘</div>
            <div class="detail-content"><div class="label">Heure de rendez-vous</div><div class="value"><?php echo esc_html( pcz_get( 'pcz_meeting_time' ) ); ?></div></div>
          </li>
          <li>
            <div class="detail-icon">📍</div>
            <div class="detail-content"><div class="label">Bar de rendez-vous</div><div class="value"><a href="<?php echo esc_url( pcz_get( 'pcz_maps_url' ) ); ?>" target="_blank" rel="noopener" style="color:var(--white);"><?php echo esc_html( pcz_get( 'pcz_meeting_bar' ) ); ?> →</a></div></div>
          </li>
          <li>
            <div class="detail-icon" style="display:flex;align-items:center;justify-content:center;">
              <svg width="22" height="22" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M8 2 C8 2 6 3.5 4 4.5 L2 8 L5.5 9.5 L5.5 22 L18.5 22 L18.5 9.5 L22 8 L20 4.5 C18 3.5 16 2 16 2 C15 4 13.5 5 12 5 C10.5 5 9 4 8 2Z" fill="#C8102E" stroke="#9B0B21" stroke-width="0.5"></path>
                <path d="M9 2.5 C9.5 4.5 10.8 6 12 6 C13.2 6 14.5 4.5 15 2.5" fill="none" stroke="#9B0B21" stroke-width="0.8"></path>
                <path d="M11 5.5 L11 8.5 C11 9.3 13 9.3 13 8.5 L13 5.5" fill="#FAF7F2" stroke="#9B0B21" stroke-width="0.5"></path>
              </svg>
            </div>
            <div class="detail-content"><div class="label">Ton host</div><div class="value">Cherche les guides en t-shirt rouge.</div></div>
          </li>
        </ul>
      </div>
      <div class="price-box fade-up visible">
        <h3>Réserve ta place</h3>
        <div class="price-tier">
          <div>
            <span class="price-tier-name">Étudiants</span>
            <div style="font-size:0.68rem; color:rgba(255,255,255,0.45); margin-top:2px;">Avec carte d’étudiant valable, jusqu’à 25 ans</div>
          </div>
          <div class="price-amount"><?php echo esc_html( pcz_get( 'pcz_price_student' ) ); ?></div>
        </div>
        <div class="price-tier">
          <div>
            <span class="price-tier-name">Early Bird</span>
            <div style="font-size:0.68rem; color:rgba(255,255,255,0.45); margin-top:2px;">Jusqu’à 48 h avant l’événement</div>
          </div>
          <div class="price-amount"><?php echo esc_html( pcz_get( 'pcz_price_early' ) ); ?></div>
        </div>
        <div class="price-tier">
          <div><span class="price-tier-name">Normal</span></div>
          <div class="price-amount"><?php echo esc_html( pcz_get( 'pcz_price_regular' ) ); ?></div>
        </div>
        <div class="price-tier">
          <div><span class="price-tier-name">VIP</span><span class="price-tier-badge">+2 Shots</span></div>
          <div class="price-amount"><?php echo esc_html( pcz_get( 'pcz_price_vip' ) ); ?></div>
        </div>
        <div style="margin:1.5rem 0; padding:1rem; background:rgba(255,255,255,0.05); border-radius:10px; border:1px dashed rgba(255,255,255,0.15);">
          <p style="font-size:0.8rem; color:rgba(255,255,255,0.5); line-height:1.6;"><span class="inc-line-desktop">✓ Snacks de bienvenue &nbsp;·&nbsp; ✓ Shots &nbsp;·&nbsp; ✓ Entrée en boîte<br>✓ Bâtons lumineux &nbsp;·&nbsp; ✓ Jeux &nbsp;·&nbsp; ✓ Red Host</span><span class="inc-line-mobile">✓ Snacks de bienvenue &nbsp;·&nbsp; ✓ Shots<br>✓ Entrée en boîte &nbsp;·&nbsp; ✓ Bâtons lumineux<br>✓ Jeux &nbsp;·&nbsp; ✓ Red Host</span></p>
        </div>
        <a href="<?php echo esc_url( pcz_get( 'pcz_ticket_url' ) ); ?>" class="price-cta" target="_blank" rel="noopener">🎟 Réserver sur Eventfrog</a>
        <p class="price-cta-note">Paiement sécurisé · Confirmation immédiate</p>
      </div>
    </div>
  </div>
</section>
