<?php
/** Gallery + lightbox. @package Pubcrawl_Zurich */
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>
<!-- FAQ -->
<section class="faq-section" id="faq">
  <div class="container">
    <div class="fade-up">
      <div class="section-label">FAQ</div>
      <h2 class="section-title">Pub Crawling — Questions & Answers</h2>
    </div>
    <div class="faq-grid fade-up" id="faq-list">
      <div>
        <div class="faq-item">
          <button class="faq-q" onclick="faqToggle(this)">Where do we meet? <span class="faq-chevron">▾</span></button>
          <div class="faq-a">At <?php echo esc_html( pcz_truncate_address() ); ?> — easy to find in the city centre. You'll spot our Red Hosts right away in their bright red shirts. Doors open at 8PM for the Language Exchange, and the crawl kicks off at <?php echo esc_html( pcz_get( 'pcz_meeting_time' ) ); ?>.</div>
        </div>

        <div class="faq-item">
          <button class="faq-q" onclick="faqToggle(this)">Do I need to come with friends? <span class="faq-chevron">▾</span></button>
          <div class="faq-a">Not necessarily — plenty of people show up alone or in twos. Meeting new people is the whole idea, and your Red Host makes sure everyone's talking within minutes.</div>
        </div>

        <div class="faq-item">
          <button class="faq-q" onclick="faqToggle(this)">Is it only tourists? <span class="faq-chevron">▾</span></button>
          <div class="faq-a">Far from it — you'll find a genuine blend of travellers, expats, newcomers to the city, and locals looking for a fun night out. The 8PM language exchange pulls in even more locals before the crawl begins.</div>
        </div>

        <div class="faq-item">
          <button class="faq-q" onclick="faqToggle(this)">I'll be arriving late — is that a problem? <span class="faq-chevron">▾</span></button>
          <div class="faq-a">That's fine — the meeting point doubles as our first bar, and we don't move on until 10PM, so there's still time to catch us there. Show up past 10PM, though, and you'll have missed the welcome snacks, the opening shots, and the ice-breakers — you'd be joining the group at the next stop instead.</div>
        </div>

        <div class="faq-item">
          <button class="faq-q" onclick="faqToggle(this)">What if I lose the group during the night? <span class="faq-chevron">▾</span></button>
          <div class="faq-a">Send us a quick <a href="<?php echo esc_url( 'https://wa.me/' . preg_replace( '/\D/', '', pcz_get( 'pcz_whatsapp_href' ) ) ); ?>" target="_blank" rel="noopener" style="color:var(--red); font-weight:600;">WhatsApp</a> message and we'll connect you directly with your tour guide. Better yet, hop into our <a href="https://chat.whatsapp.com/Dttaz9sydMZ0tSqX2MgVjb" target="_blank" rel="noopener" style="color:var(--red); font-weight:600;">WhatsApp group channel</a> beforehand — your host drops their live location there all night, so finding the group again is easy.</div>
        </div>

        <div class="faq-item">
          <button class="faq-q" onclick="faqToggle(this)">How long does the night last? <span class="faq-chevron">▾</span></button>
          <div class="faq-a">The guided part runs from 9PM until around midnight, when we enter the club. From there it's open-ended — stay as long as the club does, typically until 4 or 5AM.</div>
        </div>
      </div>
      <div>
        <div class="faq-item">
          <button class="faq-q" onclick="faqToggle(this)">Can I leave early? <span class="faq-chevron">▾</span></button>
          <div class="faq-a">Yes — you're never obligated to stay. Most people end up staying the whole night because they're having a great time, but you can head home after any stop.</div>
        </div>

        <div class="faq-item">
          <button class="faq-q" onclick="faqToggle(this)">What is the age limit? <span class="faq-chevron">▾</span></button>
          <div class="faq-a">You must be 18 or older to join the pub crawl. Bring a valid ID with you, in case it's requested at the club entrance.</div>
        </div>

        <div class="faq-item">
          <button class="faq-q" onclick="faqToggle(this)">What's included in the ticket? <span class="faq-chevron">▾</span></button>
          <div class="faq-a">Welcome snacks, a shot at every stop, club entry (skip the queue), glow sticks, party games, and your Red Host guiding the group all night. One ticket, no hidden extras.</div>
        </div>

        <div class="faq-item">
          <button class="faq-q" onclick="faqToggle(this)">What if I don't drink alcohol? <span class="faq-chevron">▾</span></button>
          <div class="faq-a">No problem at all — it's about the company, not what's in your glass. Just keep in mind a full ticket is still required, since you're holding a spot in the group; we can't reduce the price for that. On top of everything else, the club entry alone is roughly worth your ticket price.</div>
        </div>

        <div class="faq-item">
          <button class="faq-q" onclick="faqToggle(this)">Can I pay on spot? <span class="faq-chevron">▾</span></button>
          <div class="faq-a">If you can't book ahead of time, you're welcome to buy your ticket directly at the meeting bar. That said, we'd recommend booking online in advance to lock in the lower rate.</div>
        </div>

        <div class="faq-item">
          <button class="faq-q" onclick="faqToggle(this)">I'd like to celebrate my birthday or bachelor party — is this possible? <span class="faq-chevron">▾</span></button>
          <div class="faq-a">Absolutely! You can simply join one of our regular Saturday crawls and celebrate together with the group, or book a fully private pub crawl just for you and your crew. For a private tour, get in touch with us and we'll work out options and a quote tailored to your group. <a href="https://www.pubcrawlzurich.com/polterabend" target="_blank" rel="noopener" style="color:var(--red); font-weight:600;">See more details here →</a></div>
        </div>
      </div>
    </div>
    <div class="faq-more fade-up">
      <a href="<?php echo esc_url( 'https://wa.me/' . preg_replace( '/\D/', '', pcz_get( 'pcz_whatsapp_href' ) ) ); ?>" target="_blank" rel="noopener" style="font-size:0.9rem; font-weight:600; color:var(--navy); text-decoration:underline; text-underline-offset:4px;">Still have questions? Chat on WhatsApp →</a>
    </div>
  </div>
</section>
<script type="text/javascript">
  // FAQ TOGGLE
  function faqToggle(btn) {
    btn.closest('.faq-item').classList.toggle('open');
  }
</script>
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "FAQPage",
  "mainEntity": [
    {
      "@type": "Question",
      "name": "Where do we meet?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "At 2.AKT Bar, Selnaustrasse 2, 8001 Zürich — easy to find in the city centre. You'll spot our Red Hosts right away in their bright red shirts. Doors open at 8PM for the Language Exchange, and the crawl kicks off at 9PM."
      }
    },
    {
      "@type": "Question",
      "name": "Do I need to come with friends?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Not necessarily — plenty of people show up alone or in twos. Meeting new people is the whole idea, and your Red Host makes sure everyone's talking within minutes."
      }
    },
    {
      "@type": "Question",
      "name": "Is it only tourists?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Far from it — you'll find a genuine blend of travellers, expats, newcomers to the city, and locals looking for a fun night out. The 8PM language exchange pulls in even more locals before the crawl begins."
      }
    },
    {
      "@type": "Question",
      "name": "I'll be arriving late — is that a problem?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "That's fine — the meeting point doubles as our first bar, and we don't move on until 10PM, so there's still time to catch us there. Show up past 10PM, though, and you'll have missed the welcome snacks, the opening shots, and the ice-breakers — you'd be joining the group at the next stop instead."
      }
    },
    {
      "@type": "Question",
      "name": "What if I lose the group during the night?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Send us a quick WhatsApp message and we'll connect you directly with your tour guide. Better yet, hop into our WhatsApp group channel beforehand — your host drops their live location there all night, so finding the group again is easy."
      }
    },
    {
      "@type": "Question",
      "name": "How long does the night last?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "The guided part runs from 9PM until around midnight, when we enter the club. From there it's open-ended — stay as long as the club does, typically until 4 or 5AM."
      }
    },
    {
      "@type": "Question",
      "name": "Can I leave early?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Yes — you're never obligated to stay. Most people end up staying the whole night because they're having a great time, but you can head home after any stop."
      }
    },
    {
      "@type": "Question",
      "name": "What is the age limit?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "You must be 18 or older to join the pub crawl. Bring a valid ID with you, in case it's requested at the club entrance."
      }
    },
    {
      "@type": "Question",
      "name": "What's included in the ticket?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Welcome snacks, a shot at every stop, club entry (skip the queue), glow sticks, party games, and your Red Host guiding the group all night. One ticket, no hidden extras."
      }
    },
    {
      "@type": "Question",
      "name": "What if I don't drink alcohol?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "No problem at all — it's about the company, not what's in your glass. Just keep in mind a full ticket is still required, since you're holding a spot in the group; we can't reduce the price for that. On top of everything else, the club entry alone is roughly worth your ticket price."
      }
    },
    {
      "@type": "Question",
      "name": "Can I pay on spot?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "If you can't book ahead of time, you're welcome to buy your ticket directly at the meeting bar. That said, we'd recommend booking online in advance to lock in the lower rate."
      }
    },
    {
      "@type": "Question",
      "name": "I'd like to celebrate my birthday or bachelor party — is this possible?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Absolutely! You can simply join one of our regular Saturday crawls and celebrate together with the group, or book a fully private pub crawl just for you and your crew. For a private tour, get in touch with us and we'll work out options and a quote tailored to your group. More details at https://www.pubcrawlzurich.com/polterabend"
      }
    }
  ]
}
</script>
