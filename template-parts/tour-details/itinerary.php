<?php
/** Itinerary. @package Pubcrawl_Zurich */
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

?>
<!-- DETAILED ITINERARY -->
<section class="itin-section" id="itinerary">
  <div class="container">
    <div class="fade-up" style="display:flex; align-items:flex-end; justify-content:space-between; flex-wrap:wrap; gap:1.5rem; margin-bottom:0;">
      <div>
        <div class="section-label">The Night</div>
        <h1 class="section-title">Your Zurich Bar<br>Hopping Itinerary</h1>
        <p class="section-desc">Every stop on this bar crawl has a purpose. Here's exactly what happens from the moment you arrive — Zurich nightlife, one bar at a time.</p>
      </div>
      <a href="<?php echo esc_url( pcz_get( 'pcz_ticket_url' ) ); ?>" class="btn-primary fade-up" target="_blank" rel="noopener" style="flex-shrink:0;">🎟 Book Now</a>
    </div>

    <div class="itin-portrait fade-up">

      <!-- ── STOP 1: MEETING BAR ── -->
      <div class="itin-stop">
        <div class="itin-dot-col">
          <div class="itin-dot meeting">1</div>
          <div class="itin-spacer-line" style="background:linear-gradient(to bottom, var(--red), rgba(200,16,46,0.35)); flex:1; min-height:20px; width:3px; margin-top:4px;"></div>
        </div>
        <div class="itin-card">
          <div class="itin-card-top">
            <div>
              <span class="itin-badge badge-meeting">Stop 1 · Meeting Bar</span>
              <h3><?php echo esc_html( pcz_truncate_address() ); ?></h3>
              <div class="itin-card-location">📍 <?php echo esc_html( pcz_truncate_address_last() ); ?></div>
            </div>
            <span class="itin-time"><?php echo esc_html( pcz_get( 'pcz_meeting_time' ) ); ?></span>
          </div>
          <p><?php echo esc_html( pcz_get( 'pcz_meeting_time' ) ); ?> · This is where it all begins. Your Red Hosts welcome you with the whole group — a mix of travellers, expats, and locals ready for the night. Free snacks are on the table. Games kick off depending on the evening: beer pong, drinking games, ice-breaking rounds to get the energy going and make sure nobody stays a stranger for long.</p></div>
      </div>

      <!-- ── TRANSFER ── -->
      <div class="itin-stop">
        <div class="itin-dot-col">
          <div class="itin-dot transfer">→</div>
          <div class="itin-spacer-line" style="background:linear-gradient(to bottom, rgba(200,16,46,0.35), rgba(200,16,46,0.35)); flex:1; min-height:12px; width:3px; margin-top:4px;"></div>
        </div>
        <div class="itin-transfer-card">
          ~20 min transfer by tram or walk
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
              <span class="itin-badge badge-bar">Stop 2 · Warming Up</span>
              <h3>Bar #2 — Into the Night</h3>
              <div class="itin-card-location">📍 Zurich city centre</div>
            </div>

          </div>
          <p>The group is warmed up, the energy is building. This stop is about getting properly into the party atmosphere — more pub crawl shots, more conversation, and the group starting to feel like a real crew. By now you know a few names.</p></div>
      </div>

      <!-- ── TRANSFER ── -->
      <div class="itin-stop">
        <div class="itin-dot-col">
          <div class="itin-dot transfer">→</div>
          <div class="itin-spacer-line" style="background:linear-gradient(to bottom, rgba(200,16,46,0.35), rgba(200,16,46,0.35)); flex:1; min-height:12px; width:3px; margin-top:4px;"></div>
        </div>
        <div class="itin-transfer-card">
          ~5 min short walk &nbsp;·&nbsp; Group photo 📸
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
              <span class="itin-badge badge-party">Stop 3 · Route Dependent</span>
              <h3>Bar #3 — Optional Bar</h3>
              <div class="itin-card-location">📍 Zurich city centre</div>
            </div>
          </div>
          <p>Depending on the theme and route of the night, we either visit a karaoke bar, a lively party bar, or skip and go straight to the Nightclub. The atmosphere is at its peak either way.</p></div>
      </div>


      <!-- ── TRANSFER TO CLUB ── -->
      <div class="itin-stop">
        <div class="itin-dot-col">
          <div class="itin-dot transfer">→</div>
          <div class="itin-spacer-line" style="background:linear-gradient(to bottom, var(--red), rgba(200,16,46,0.35)); flex:1; min-height:12px; width:3px; margin-top:4px;"></div>
        </div>
        <div class="itin-transfer-card">
          ~5 min short walk &nbsp;·&nbsp; Shot on the move 🥃
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
              <span class="itin-badge" style="background:rgba(212,160,23,0.2); color:var(--gold); border: 1px solid rgba(212,160,23,0.4);">Club Finale 🎉</span>
              <h3 style="color:var(--white);">The Legendary Nightclub</h3>
              <div class="itin-card-location" style="color:rgba(255,255,255,0.45);">📍 Zurich's best club — location varies by Saturday</div>
            </div>
            <span class="itin-time dark" style="background:rgba(255,255,255,0.1); border:1px solid rgba(255,255,255,0.2);">~Midnight</span>
          </div>
          <p style="color:rgba(255,255,255,0.7);">Skip the lines with our VIP Club Access. Expect DJs with a packed dance floor — and depending on the club, there may be a lounge and a final Prosecco to close the night in style. This is the official end of the guided crawl, but you are free to stay until the morning hours.</p>
          <div style="margin-top:1rem; padding:1rem; background:rgba(255,255,255,0.06); border-radius:10px; border:1px solid rgba(255,255,255,0.1);">
            <div style="font-size:0.72rem; font-weight:700; letter-spacing:0.1em; text-transform:uppercase; color:rgba(255,255,255,0.4); margin-bottom:0.6rem;">Good to know</div>
            <div style="display:flex; flex-direction:column; gap:0.45rem;">
              <div style="display:flex; align-items:flex-start; gap:0.6rem; font-size:0.82rem; color:rgba(255,255,255,0.7);">
                <span style="flex-shrink:0;">🪪</span> Prepare to show your ID at the door
              </div>
            </div>
          </div></div>
      </div>

    </div><!-- end itin-portrait -->
  </div>
</section>
