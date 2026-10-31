<?php
/** Itinerary. @package Pubcrawl_Zurich */
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
$meeting_bar = pcz_get( 'pcz_meeting_bar' );
$truncated = mb_strimwidth( $meeting_bar, 0, 15, '' );
?>
<!-- DETAILED ITINERARY -->
<section class="itin-section" id="itinerary">
  <div class="container">
    <div class="fade-up" style="display:flex; align-items:flex-end; justify-content:space-between; flex-wrap:wrap; gap:1.5rem; margin-bottom:0;">
      <div>
        <div class="section-label">La soirée</div>
        <h1 class="section-title">Barathon Zurich&nbsp;:<br>ta soirée étape par étape</h1>
        <p class="section-desc">Chaque étape de ce barathon a son rôle. Voici comment se déroule la soirée dès ton arrivée — la vie nocturne zurichoise, un bar après l’autre.</p>
      </div>
      <a href="<?php echo esc_url( pcz_get( 'pcz_ticket_url' ) ); ?>" class="btn-primary fade-up" target="_blank" rel="noopener" style="flex-shrink:0;">🎟 Réserver</a>
    </div>

    <div class="itin-portrait fade-up visible">

      <!-- ── STOP 1: MEETING BAR ── -->
      <div class="itin-stop">
        <div class="itin-dot-col">
          <div class="itin-dot meeting">1</div>
          <div class="itin-spacer-line" style="background:linear-gradient(to bottom, var(--red), rgba(200,16,46,0.35)); flex:1; min-height:20px; width:3px; margin-top:4px;"></div>
        </div>
        <div class="itin-card">
          <div class="itin-card-top">
            <div>
              <span class="itin-badge badge-meeting">Étape 1 · Bar de rendez-vous</span>
              <h3><?php echo esc_html( pcz_truncate_address() ); ?></h3>
              <div class="itin-card-location">📍 <?php echo esc_html( pcz_truncate_address_last() ); ?></div>
            </div>
            <span class="itin-time"><?php echo esc_html( pcz_translated_string( 'pcz_meeting_time', pcz_get('pcz_meeting_time') ) ); ?></span>
          </div>
          <p><?php echo esc_html( pcz_translated_string( 'pcz_meeting_time', pcz_get('pcz_meeting_time') ) ); ?> · Tout commence ici. Tes Red Hosts t’accueillent avec tout le groupe — un mélange de voyageurs, d’expats et de locaux, prêts pour la nuit. Des snacks offerts t’attendent sur la table. Selon la soirée, on lance des jeux comme le beer pong, des jeux à boire ou des tours brise-glace, pour faire monter l’ambiance et que personne ne reste longtemps un inconnu.</p></div>
      </div>

      <!-- ── TRANSFER ── -->
      <div class="itin-stop">
        <div class="itin-dot-col">
          <div class="itin-dot transfer">→</div>
          <div class="itin-spacer-line" style="background:linear-gradient(to bottom, rgba(200,16,46,0.35), rgba(200,16,46,0.35)); flex:1; min-height:12px; width:3px; margin-top:4px;"></div>
        </div>
        <div class="itin-transfer-card">
          ~20 min de trajet en tram ou à pied
        </div>
      </div>

      <!-- ── STOP 2: BAR 2 ── -->
      <div class="itin-stop">
        <div class="itin-dot-col">
          <div class="itin-dot bar">2</div>
          <div class="itin-spacer-line" style="background:linear-gradient(to bottom, var(--red), rgba(200,16,46,0.35)); flex:1; min-height:20px; width:3px; margin-top:4px;"></div>
        </div>
        <div class="itin-card">
          <div class="itin-card-top">
            <div>
              <span class="itin-badge badge-bar">Étape 2 · On se met dans l’ambiance</span>
              <h3>Bar #2 — Cap sur la nuit</h3>
              <div class="itin-card-location">📍 Centre-ville de Zurich</div>
            </div>

          </div>
          <p>Le groupe est lancé, l’énergie monte. À cette étape, on se met vraiment d’humeur festive — plus de shots, plus de discussions, et le groupe devient peu à peu une vraie bande. Tu connais déjà quelques prénoms.</p></div>
      </div>

      <!-- ── TRANSFER ── -->
      <div class="itin-stop">
        <div class="itin-dot-col">
          <div class="itin-dot transfer">→</div>
          <div class="itin-spacer-line" style="background:linear-gradient(to bottom, rgba(200,16,46,0.35), rgba(200,16,46,0.35)); flex:1; min-height:12px; width:3px; margin-top:4px;"></div>
        </div>
        <div class="itin-transfer-card">
          ~5 min à pied &nbsp;·&nbsp; photo de groupe 📸
        </div>
      </div>

      <!-- ── STOP 3: OPTIONAL ── -->
      <div class="itin-stop">
        <div class="itin-dot-col">
          <div class="itin-dot party">3</div>
          <div class="itin-spacer-line" style="background:linear-gradient(to bottom, var(--red), rgba(200,16,46,0.35)); flex:1; min-height:20px; width:3px; margin-top:4px;"></div>
        </div>
        <div class="itin-card">
          <div class="itin-card-top">
            <div>
              <span class="itin-badge badge-party">Étape 3 · Selon l’itinéraire</span>
              <h3>Bar #3 — Bar en option</h3>
              <div class="itin-card-location">📍 Centre-ville de Zurich</div>
            </div>
          </div>
          <p>Selon le thème et l’itinéraire de la soirée, on passe par un bar karaoké, un bar festif animé – ou on file directement en boîte. Dans tous les cas, l’ambiance est à son comble.</p></div>
      </div>


      <!-- ── TRANSFER TO CLUB ── -->
      <div class="itin-stop">
        <div class="itin-dot-col">
          <div class="itin-dot transfer">→</div>
          <div class="itin-spacer-line" style="background:linear-gradient(to bottom, var(--red), rgba(200,16,46,0.35)); flex:1; min-height:12px; width:3px; margin-top:4px;"></div>
        </div>
        <div class="itin-transfer-card">
          ~5 min à pied &nbsp;·&nbsp; shot en route 🥃
        </div>
      </div>

      <!-- ── CLUB ── -->
      <div class="itin-stop">
        <div class="itin-dot-col">
          <div class="itin-dot club">4</div>
        </div>
        <div class="itin-card" style="border-left: 4px solid #1A1A2E; background: linear-gradient(135deg, #1A1A2E 0%, #2d2d4e 100%);">
          <div class="itin-card-top">
            <div>
              <span class="itin-badge" style="background:rgba(212,160,23,0.2); color:var(--gold); border: 1px solid rgba(212,160,23,0.4);">Final en boîte 🎉</span>
              <h3 style="color:var(--white);">La boîte légendaire</h3>
              <div class="itin-card-location" style="color:rgba(255,255,255,0.45);">📍 La meilleure boîte de Zurich — change selon le samedi</div>
            </div>
            <span class="itin-time dark" style="background:rgba(255,255,255,0.1); border:1px solid rgba(255,255,255,0.2);">~minuit</span>
          </div>
          <p style="color:rgba(255,255,255,0.7);">Grâce à notre accès VIP, tu entres sans faire la queue. Au programme&nbsp;: des DJs et une piste de danse pleine — selon la boîte, il y a aussi un lounge et un dernier prosecco pour finir en beauté. C’est ici que se termine officiellement le barathon guidé, mais tu peux rester jusqu’au petit matin.</p>
          <div style="margin-top:1rem; padding:1rem; background:rgba(255,255,255,0.06); border-radius:10px; border:1px solid rgba(255,255,255,0.1);">
            <div style="font-size:0.72rem; font-weight:700; letter-spacing:0.1em; text-transform:uppercase; color:rgba(255,255,255,0.4); margin-bottom:0.6rem;">Bon à savoir</div>
            <div style="display:flex; flex-direction:column; gap:0.45rem;">
              <div style="display:flex; align-items:flex-start; gap:0.6rem; font-size:0.82rem; color:rgba(255,255,255,0.7);">
                <span style="flex-shrink:0;">🪪</span> Garde ta pièce d’identité à portée de main pour l’entrée
              </div>
            </div>
          </div></div>
      </div>

    </div>
  </div>
</section>
