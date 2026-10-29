<?php
/** Reviews. @package Pubcrawl_Zurich */
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>
<section class="lx-video-section">
  <div class="container">
    <div class="lx-video-header fade-up visible">
      <h2 class="section-title" style="font-size:clamp(0.7rem,3.4vw,2.3rem); white-space:nowrap;">This Is How a Saturday Night Goes</h2>
    </div>
    <div class="lx-video-wrap fade-up visible">
      <video autoplay="" muted="" loop="" playsinline="" preload="auto">
        <source src="<?php echo PCZ_URI . '/assets/videos/language-exchange-video.mp4'; ?>" type="video/mp4">
      </video>
      <button class="lx-video-sound-btn" id="lx-sound-btn" onclick="toggleLxVideoSound()" title="Toggle sound">🔇</button>
    </div>
  </div>
</section>
