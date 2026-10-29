<?php
/** Prices + what's included. @package Pubcrawl_Zurich */
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>

<section class="faq-section" id="faq">
  <div class="container">
    <div class="faq-header fade-up visible">
      <div class="eyebrow">FAQ</div>
      <h2 class="big-title" style="font-size:clamp(1.8rem,4vw,2.6rem);">Questions &amp; réponses</h2>
    </div>

    <div class="expl-faq fade-up visible" id="faq-list" style="display:grid; grid-template-columns:1fr 1fr; gap:0 2.5rem;">

      <div class="expl-faq-item">
        <button class="expl-faq-q" onclick="faqToggle(0)">
          Dois-je parler couramment la langue que je veux pratiquer&nbsp;?
          <span class="expl-faq-chevron">▾</span>
        </button>
        <div class="expl-faq-a">Non. Mais si tu ne comprends rien ou ne peux pas former une seule phrase, il sera difficile de suivre une conversation. On recommande des bases suffisantes pour construire des phrases simples.</div>
      </div>

      <div class="expl-faq-item">
        <button class="expl-faq-q" onclick="faqToggle(1)">
          Et si personne d’autre ne veut pratiquer ma langue&nbsp;?
          <span class="expl-faq-chevron">▾</span>
        </button>
        <div class="expl-faq-a">Avec une vingtaine de participants, ta langue est presque toujours représentée. Tu es aussi le bienvenu pour aider les autres dans ta langue maternelle – après tout, il s’agit aussi de rencontrer du monde et de s’amuser avec les langues.</div>
      </div>

      <div class="expl-faq-item">
        <button class="expl-faq-q" onclick="faqToggle(2)">
          Je peux venir seul(e)&nbsp;?
          <span class="expl-faq-chevron">▾</span>
        </button>
        <div class="expl-faq-a">Bien sûr — la plupart viennent seuls. C’est même le moyen le plus simple de rencontrer du monde, puisque tout le monde à la table est là pour discuter.</div>
      </div>

      <div class="expl-faq-item">
        <button class="expl-faq-q" onclick="faqToggle(3)">
          Dois-je réserver un billet à l’avance&nbsp;?
          <span class="expl-faq-chevron">▾</span>
        </button>
        <div class="expl-faq-a">Ça nous aide pour l’organisation, mais tu peux aussi passer spontanément et payer sur place.</div>
      </div>

      <div class="expl-faq-item">
        <button class="expl-faq-q" onclick="faqToggle(4)">
          J’arrive plus tard — c’est un problème&nbsp;?
          <span class="expl-faq-chevron">▾</span>
        </button>
        <div class="expl-faq-a">Pas du tout, tu peux simplement t’installer à une table de langue déjà en cours.</div>
      </div>

      <div class="expl-faq-item">
        <button class="expl-faq-q" onclick="faqToggle(5)">
          Je peux rejoindre le pub crawl ensuite&nbsp;?
          <span class="expl-faq-chevron">▾</span>
        </button>
        <div class="expl-faq-a">Oui — à 22 h, l’échange linguistique se transforme directement en pub crawl, dans le même bar. Les participants à l’échange linguistique bénéficient de CHF 10 de réduction sur le billet combiné. Plus d’infos dans les <a href="https://www.zurichpubcrawl.ch/bartour?lang=fr" target="_blank" rel="noopener" style="color:var(--red); font-weight:600;">détails du barathon</a>.</div>
      </div>

    </div>
    <div class="faq-more-v2 fade-up visible">
      <a href="<?php echo esc_url( 'https://wa.me/' . preg_replace( '/\D/', '', pcz_get( 'pcz_whatsapp_href' ) ) ); ?>" target="_blank" rel="noopener">D’autres questions&nbsp;? Écris-nous sur WhatsApp →</a>
    </div>
  </div>
</section>

<script>
	const faqItems = document.querySelectorAll('#faq-list .expl-faq-item');
	function faqToggle(i) {
		faqItems[i].classList.toggle('open');
	}

	function toggleLxVideoSound() {
		const video = document.querySelector('.lx-video-wrap video');
		const btn   = document.getElementById('lx-sound-btn');
		video.muted = !video.muted;
		btn.textContent = video.muted ? '🔇' : '🔊';
	}

	/* Make the hero photo fill the viewport exactly down to the fold */
	function sizeHeroPhoto() {
		var photo = document.querySelector('.lx-hero-photo');
		var wrap = document.querySelector('.lx-hero-wrap');
		if (!photo || !wrap) return;
		var top = wrap.getBoundingClientRect().top + window.scrollY;
		var available = window.innerHeight - top;
		if (available < 220) available = 220; // sensible floor
		photo.style.maxHeight = 'none';
		photo.style.height = available + 'px';
	}
	window.addEventListener('load', sizeHeroPhoto);
	window.addEventListener('resize', sizeHeroPhoto);

</script>
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "FAQPage",
  "mainEntity": [
    { "@type": "Question", "name": "Dois-je parler couramment la langue que je veux pratiquer ?", "acceptedAnswer": { "@type": "Answer", "text": "Non. Mais si tu ne comprends rien ou ne peux pas former une seule phrase, il sera difficile de suivre une conversation. On recommande des bases suffisantes pour construire des phrases simples." } },
    { "@type": "Question", "name": "Et si personne d’autre ne veut pratiquer ma langue ?", "acceptedAnswer": { "@type": "Answer", "text": "Avec une vingtaine de participants, ta langue est presque toujours représentée. Tu es aussi le bienvenu pour aider les autres dans ta langue maternelle – après tout, il s’agit aussi de rencontrer du monde et de s’amuser avec les langues." } },
    { "@type": "Question", "name": "Je peux venir seul(e) ?", "acceptedAnswer": { "@type": "Answer", "text": "Bien sûr — la plupart viennent seuls. C’est même le moyen le plus simple de rencontrer du monde, puisque tout le monde à la table est là pour discuter." } },
    { "@type": "Question", "name": "Dois-je réserver un billet à l’avance ?", "acceptedAnswer": { "@type": "Answer", "text": "Ça nous aide pour l’organisation, mais tu peux aussi passer spontanément et payer sur place." } },
    { "@type": "Question", "name": "J’arrive plus tard — c’est un problème ?", "acceptedAnswer": { "@type": "Answer", "text": "Pas du tout, tu peux simplement t’installer à une table de langue déjà en cours." } },
    { "@type": "Question", "name": "Je peux rejoindre le pub crawl ensuite ?", "acceptedAnswer": { "@type": "Answer", "text": "Oui — à 22 h, l’échange linguistique se transforme directement en pub crawl, dans le même bar. Les participants à l’échange linguistique bénéficient de CHF 10 de réduction sur le billet combiné." } }
  ]
}
</script>
