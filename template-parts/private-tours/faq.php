<?php
/** Newsletter (admin-supplied embed; hidden when empty). @package Pubcrawl_Zurich */
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>
<section class="faq-section" id="faq">
  <div class="container">
    <div class="fade-up visible">
      <div class="section-label">FAQ</div>
      <h2 class="section-title">Bachelor Party Zurich — Questions &amp; Answers</h2>
    </div>
    <div class="faq-grid fade-up visible" id="faq-list">

      <div class="faq-item">
        <button class="faq-q" onclick="faqToggle(this)">How early should we book? <span class="faq-chevron">▾</span></button>
        <div class="faq-a">We recommend getting in touch 4–6 weeks before your preferred date — Friday and Saturday nights book up fastest. That said, last-minute requests are always worth a try: we do our best to make something work.</div>
      </div>

      <div class="faq-item">
        <button class="faq-q" onclick="faqToggle(this)">From how many people is a private tour possible? <span class="faq-chevron">▾</span></button>
        <div class="faq-a">Private tours are generally available from about 8 people. Smaller groups are welcome to join our regular Saturday pub crawl and celebrate together with the group.</div>
      </div>

      <div class="faq-item">
        <button class="faq-q" onclick="faqToggle(this)">What does a bachelor party with you cost? <span class="faq-chevron">▾</span></button>
        <div class="faq-a">The price depends on whether you want a private, tailor-made tour or want to join our regular pub crawl. We\'ve had great experiences with both options. For private tours, the price depends heavily on group size. Simply fill out the form or send us your budget and wishes — you\'ll receive a tailor-made, no-obligation quote.</div>
      </div>

      <div class="faq-item">
        <button class="faq-q" onclick="faqToggle(this)">Can we help choose the route? <span class="faq-chevron">▾</span></button>
        <div class="faq-a">Absolutely. Just let us know your preferences — for example, whether you\'d rather visit loud bars or cosy, seated bars, or whether we should include a karaoke bar. We always make sure the tour fits your group and your age range.</div>
      </div>

      <div class="faq-item">
        <button class="faq-q" onclick="faqToggle(this)">Is this only for bachelor and bachelorette parties? <span class="faq-chevron">▾</span></button>
        <div class="faq-a">No — besides bachelor and bachelorette parties, we also organize private tours for birthdays, corporate events, and clubs/associations. Birthdays and corporate events each have their own dedicated page with all the details.</div>
      </div>

      <div class="faq-item">
        <button class="faq-q" onclick="faqToggle(this)">Is a dedicated tour guide included? <span class="faq-chevron">▾</span></button>
        <div class="faq-a">Yes, every private tour comes with your own Red Host — they guide the group through the evening, take care of the route and bars, and make sure everything runs smoothly from the first shot to the club.</div>
      </div>

      <div class="faq-item">
        <button class="faq-q" onclick="faqToggle(this)">How do we get a quote? <span class="faq-chevron">▾</span></button>
        <div class="faq-a">Fill out the <a href="#anfrage" style="color:var(--red); font-weight:600;">request form</a> or message us on <a href="https://wa.me/41792858671" target="_blank" rel="noopener" style="color:var(--red); font-weight:600;">WhatsApp</a> — with your group size, preferred date, and rough budget. You\'ll usually receive a tailor-made quote within a day.</div>
      </div>

      <div class="faq-item">
        <button class="faq-q" onclick="faqToggle(this)">Can we join the regular pub crawl instead? <span class="faq-chevron">▾</span></button>
        <div class="faq-a">Sure — many bachelor/bachelorette groups simply join our regular Saturday pub crawl and enjoy the evening together with the larger group. In this case, we add extras you wouldn\'t otherwise get (beer tower, beer pong, extra shots, Prosecco, VIP lounge at the club, etc.), so please get in touch with us first. If you don\'t want any extras at all, you can of course simply book the regular tickets directly <a href="https://www.zurichpubcrawl.ch" target="_blank" rel="noopener" style="color:var(--red); font-weight:600;">here →</a></div>
      </div>

    </div>
    <div class="faq-more fade-up visible">
      <a href="<?php echo esc_url( 'https://wa.me/' . preg_replace( '/\D/', '', pcz_get( 'pcz_whatsapp_href' ) ) ); ?>" target="_blank" rel="noopener" style="font-size:0.9rem; font-weight:600; color:var(--navy); text-decoration:underline; text-underline-offset:4px;">Still have questions? Message us on WhatsApp →</a>
    </div>
  </div>
</section>
		
<script>
	function faqToggle(btn) {
		btn.closest('.faq-item').classList.toggle('open');
	}

	/* Keep JotForm iframe height matched to its content (prevents small-form-in-big-box on mobile) */
	window.addEventListener('message', function (e) {
		if (typeof e.data !== 'string' || e.data.indexOf('setHeight') === -1) return;
		var parts = e.data.split(':');            // "setHeight:1234:formID"
		var h = parseInt(parts[1], 10);
		if (!h) return;
		var frames = document.querySelectorAll('.form-wrap iframe');
		frames.forEach(function (f) { f.style.height = h + 'px'; });
  });
</script>

<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "FAQPage",
  "mainEntity": [
    {
      "@type": "Question",
      "name": "How early should we book our bachelor party in Zurich?",
      "acceptedAnswer": { "@type": "Answer", "text": "We recommend getting in touch 4–6 weeks before your preferred date — Friday and Saturday nights book up fastest. That said, last-minute requests are always worth a try: we do our best to make something work." }
    },
    {
      "@type": "Question",
      "name": "From how many people is a private bachelor party possible?",
      "acceptedAnswer": { "@type": "Answer", "text": "Private tours are generally available from about 8 people. Smaller groups are welcome to join our regular Saturday pub crawl and celebrate together with the group." }
    },
    {
      "@type": "Question",
      "name": "How much does a bachelor or bachelorette party in Zurich cost with you?",
      "acceptedAnswer": { "@type": "Answer", "text": "The price depends on whether you want a private, tailor-made tour or want to join our regular pub crawl. We've had great experiences with both options. For private tours, the price depends heavily on group size. Simply fill out the form or send us your budget and wishes — you'll receive a tailor-made, no-obligation quote." }
    },
    {
      "@type": "Question",
      "name": "Can we help choose the route and the bars ourselves?",
      "acceptedAnswer": { "@type": "Answer", "text": "Absolutely. Just let us know your preferences — for example, whether you'd rather visit loud bars or cosy, seated bars, or whether we should include a karaoke bar. We always make sure the tour fits your group and your age range." }
    },
    {
      "@type": "Question",
      "name": "Is this offer only for bachelor and bachelorette parties?",
      "acceptedAnswer": { "@type": "Answer", "text": "No — besides bachelor and bachelorette parties, we also organize private tours for birthdays, corporate events, and clubs/associations. Birthdays and corporate events each have their own dedicated page with all the details." }
    },
    {
      "@type": "Question",
      "name": "Is a dedicated tour guide included?",
      "acceptedAnswer": { "@type": "Answer", "text": "Yes, every private tour comes with your own Red Host — they guide the group through the evening, take care of the route and bars, and make sure everything runs smoothly from the first shot to the club." }
    },
    {
      "@type": "Question",
      "name": "How do we get a quote?",
      "acceptedAnswer": { "@type": "Answer", "text": "Fill out the request form on this page or message us on WhatsApp — with your group size, preferred date, and rough budget. You'll usually receive a tailor-made quote within a day." }
    }
  ]
}
</script>

