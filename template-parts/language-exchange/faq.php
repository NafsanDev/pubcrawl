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
      <h2 class="big-title" style="font-size:clamp(1.8rem,4vw,2.6rem);">Questions &amp; Answers</h2>
    </div>

    <div class="expl-faq fade-up visible" id="faq-list" style="display:grid; grid-template-columns:1fr 1fr; gap:0 2.5rem;">

      <div class="expl-faq-item">
        <button class="expl-faq-q" onclick="faqToggle(0)">
          Do I need to be fluent in the language I want to practice?
          <span class="expl-faq-chevron">▾</span>
        </button>
        <div class="expl-faq-a">No, but if you don't understand anything or can't make a single sentence, it will be difficult to keep up with a conversation. We recommend having a base to make simple sentences.</div>
      </div>

      <div class="expl-faq-item">
        <button class="expl-faq-q" onclick="faqToggle(1)">
          What if no one else wants to practice my language?
          <span class="expl-faq-chevron">▾</span>
        </button>
        <div class="expl-faq-a">With around 20 participants, your language is covered most of the time. You're always welcome to help others in your mother tongue, as the aim is also to meet new people and have fun with languages.</div>
      </div>

      <div class="expl-faq-item">
        <button class="expl-faq-q" onclick="faqToggle(2)">
          Can I come alone?
          <span class="expl-faq-chevron">▾</span>
        </button>
        <div class="expl-faq-a">Absolutely — most people come solo. It's actually the easiest way to meet people, since everyone at the table is already there to chat.</div>
      </div>

      <div class="expl-faq-item">
        <button class="expl-faq-q" onclick="faqToggle(3)">
          Do I need to book a ticket in advance?
          <span class="expl-faq-chevron">▾</span>
        </button>
        <div class="expl-faq-a">This helps us organize the night, but you can also join spontaneously and pay on the spot.</div>
      </div>

      <div class="expl-faq-item">
        <button class="expl-faq-q" onclick="faqToggle(4)">
          I am late — is this a problem?
          <span class="expl-faq-chevron">▾</span>
        </button>
        <div class="expl-faq-a">Not at all, you can just join an existing language table.</div>
      </div>

      <div class="expl-faq-item">
        <button class="expl-faq-q" onclick="faqToggle(5)">
          Can I join the Pub Crawl afterward?
          <span class="expl-faq-chevron">▾</span>
        </button>
        <div class="expl-faq-a">Yes — at 10PM the Language Exchange flows straight into the Pub Crawl from the same bar. Language Exchange guests get CHF 10 off the combo ticket. See the <a href="https://www.zurichpubcrawl.ch/bartour?lang=en" target="_blank" rel="noopener" style="color:var(--red); font-weight:600;">Bar Tour Details</a> for more.</div>
      </div>

    </div>
    <div class="faq-more-v2 fade-up visible">
      <a href="<?php echo esc_url( 'https://wa.me/' . preg_replace( '/\D/', '', pcz_get( 'pcz_whatsapp_href' ) ) ); ?>" target="_blank" rel="noopener">Still have questions? Chat on WhatsApp →</a>
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
    { "@type": "Question", "name": "Do I need to be fluent in the language that I want to practice?", "acceptedAnswer": { "@type": "Answer", "text": "No, but if you don't understand anything or can't make a single sentence, it will be difficult to keep up with a conversation. We recommend having a base to make simple sentences." } },
    { "@type": "Question", "name": "What if no one else wants to practice my language?", "acceptedAnswer": { "@type": "Answer", "text": "With around 20 participants, your language is covered most of the time. You're always welcome to help others in your mother tongue, as the aim is also to meet new people and have fun with languages." } },
    { "@type": "Question", "name": "Can I come alone?", "acceptedAnswer": { "@type": "Answer", "text": "Absolutely — most people come solo. It's actually the easiest way to meet people, since everyone at the table is already there to chat." } },
    { "@type": "Question", "name": "Do I need to book a ticket in advance?", "acceptedAnswer": { "@type": "Answer", "text": "This helps us organize the night, but you can also join spontaneously and pay on the spot." } },
    { "@type": "Question", "name": "I am late — is this a problem?", "acceptedAnswer": { "@type": "Answer", "text": "Not at all, you can just join an existing language table." } },
    { "@type": "Question", "name": "Can I join the Pub Crawl afterward?", "acceptedAnswer": { "@type": "Answer", "text": "Yes — at 10PM the Language Exchange flows straight into the Pub Crawl from the same bar. Language Exchange guests get CHF 10 off the combo ticket." } }
  ]
}
</script>
