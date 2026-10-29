<?php
/** Gallery + lightbox. @package Pubcrawl_Zurich */
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>
<!-- FAQ -->
<section class="faq-section" id="faq">
  <div class="container">
    <div class="fade-up visible">
      <div class="section-label">FAQ</div>
      <h2 class="section-title">Barathon Zurich — questions &amp; réponses</h2>
    </div>
    <div class="faq-grid fade-up visible" id="faq-list">
    <div>
      <div class="faq-item">
        <button class="faq-q" onclick="faqToggle(this)">Où est le point de rendez-vous&nbsp;? <span class="faq-chevron">▾</span></button>
        <div class="faq-a">Au <?php echo esc_html( pcz_truncate_address() ); ?> — en plein centre-ville et facile à trouver. Tu reconnaîtras tout de suite nos Red Hosts à leurs t-shirts rouge vif. L’échange linguistique commence dès 20 h, le barathon démarre à <?php echo esc_html( pcz_get( 'pcz_meeting_time' ) ); ?>.</div>
      </div>

      <div class="faq-item">
        <button class="faq-q" onclick="faqToggle(this)">Dois-je venir avec des amis&nbsp;? <span class="faq-chevron">▾</span></button>
        <div class="faq-a">Pas du tout — beaucoup viennent seuls ou à deux. Rencontrer de nouvelles personnes, c’est tout l’intérêt, et ton Red Host veille à ce que tout le monde discute ensemble en quelques minutes.</div>
      </div>

      <div class="faq-item">
        <button class="faq-q" onclick="faqToggle(this)">Il n’y a que des touristes&nbsp;? <span class="faq-chevron">▾</span></button>
        <div class="faq-a">Pas du tout — tu rencontres un vrai mélange de voyageurs, d’expats, de nouveaux arrivants et de locaux qui cherchent une soirée sympa. L’échange linguistique de 20 h attire encore plus de locaux avant le barathon.</div>
      </div>

      <div class="faq-item">
        <button class="faq-q" onclick="faqToggle(this)">J’arrive plus tard — c’est un problème&nbsp;? <span class="faq-chevron">▾</span></button>
        <div class="faq-a">Aucun problème — le point de rendez-vous est aussi notre premier bar, et on ne repart qu’à 22 h. Tu peux donc nous rejoindre en route. Si tu arrives après 22 h, tu manqueras par contre les snacks de bienvenue, les premiers shots et les jeux brise-glace — tu rejoindras alors le groupe à l’étape suivante.</div>
      </div>

      <div class="faq-item">
        <button class="faq-q" onclick="faqToggle(this)">Et si je perds le groupe pendant la soirée&nbsp;? <span class="faq-chevron">▾</span></button>
        <div class="faq-a">Envoie-nous vite un message <a href="<?php echo esc_url( 'https://wa.me/' . preg_replace( '/\D/', '', pcz_get( 'pcz_whatsapp_href' ) ) ); ?>" target="_blank" rel="noopener" style="color:var(--red); font-weight:600;">WhatsApp</a> et on te met directement en contact avec ton guide. Encore mieux&nbsp;: rejoins à l’avance notre <a href="https://chat.whatsapp.com/Dttaz9sydMZ0tSqX2MgVjb" target="_blank" rel="noopener" style="color:var(--red); font-weight:600;">canal de groupe WhatsApp</a> — ton host y partage sa position en direct toute la soirée, pour que tu retrouves facilement le groupe.</div>
      </div>

      <div class="faq-item">
        <button class="faq-q" onclick="faqToggle(this)">Combien de temps dure la soirée&nbsp;? <span class="faq-chevron">▾</span></button>
        <div class="faq-a">La partie guidée dure de 21 h à environ minuit, puis on file en boîte. Ensuite, c’est toi qui décides — reste aussi longtemps que la boîte est ouverte, en général jusqu’à 4 ou 5 h du matin.</div>
      </div>
    </div>
    <div>
      <div class="faq-item">
        <button class="faq-q" onclick="faqToggle(this)">Je peux partir plus tôt&nbsp;? <span class="faq-chevron">▾</span></button>
        <div class="faq-a">Oui — rien ne t’oblige à rester. La plupart restent toute la nuit parce qu’ils s’amusent trop, mais tu peux rentrer après n’importe quelle étape.</div>
      </div>

      <div class="faq-item">
        <button class="faq-q" onclick="faqToggle(this)">Y a-t-il une limite d’âge&nbsp;? <span class="faq-chevron">▾</span></button>
        <div class="faq-a">Tu dois avoir au moins 18 ans pour participer au barathon. Prends une pièce d’identité valable, elle peut être demandée à l’entrée de la boîte.</div>
      </div>

      <div class="faq-item">
        <button class="faq-q" onclick="faqToggle(this)">Qu’est-ce qui est inclus dans le billet&nbsp;? <span class="faq-chevron">▾</span></button>
        <div class="faq-a">Snacks de bienvenue, un shot à chaque étape, l’entrée en boîte (sans file d’attente), des bâtons lumineux, des jeux de soirée et ton Red Host qui accompagne le groupe toute la soirée. Un seul billet, pas de frais cachés.</div>
      </div>

      <div class="faq-item">
        <button class="faq-q" onclick="faqToggle(this)">Et si je ne bois pas d’alcool&nbsp;? <span class="faq-chevron">▾</span></button>
        <div class="faq-a">Aucun problème — ce qui compte, c’est l’ambiance, pas ce qu’il y a dans ton verre. Note toutefois qu’un billet complet reste nécessaire, puisque tu occupes une place dans le groupe&nbsp;; on ne peut donc pas réduire le prix. Et d’ailleurs&nbsp;: l’entrée en boîte vaut à elle seule à peu près le prix de ton billet.</div>
      </div>

      <div class="faq-item">
        <button class="faq-q" onclick="faqToggle(this)">Je peux payer sur place&nbsp;? <span class="faq-chevron">▾</span></button>
        <div class="faq-a">Si tu ne peux pas réserver à l’avance, tu peux aussi acheter ton billet directement au bar de rendez-vous. On te conseille quand même de réserver en ligne à l’avance pour profiter du meilleur prix.</div>
      </div>

      <div class="faq-item">
        <button class="faq-q" onclick="faqToggle(this)">Je veux fêter mon anniversaire ou un enterrement de vie de garçon/jeune fille — c’est possible&nbsp;? <span class="faq-chevron">▾</span></button>
        <div class="faq-a">Bien sûr&nbsp;! Tu peux simplement rejoindre l’un de nos barathons du samedi et faire la fête avec le groupe, ou réserver un pub crawl entièrement privé rien que pour toi et ta bande. Pour un tour privé, contacte-nous — on te prépare des options et une offre adaptées à ton groupe. <a href="https://www.pubcrawlzurich.com/polterabend" target="_blank" rel="noopener" style="color:var(--red); font-weight:600;">Plus d’infos ici →</a></div>
      </div>
    </div>
    </div>
    <div class="faq-more fade-up visible">
      <a href="<?php echo esc_url( 'https://wa.me/' . preg_replace( '/\D/', '', pcz_get( 'pcz_whatsapp_href' ) ) ); ?>" target="_blank" rel="noopener" style="font-size:0.9rem; font-weight:600; color:var(--navy); text-decoration:underline; text-underline-offset:4px;">D’autres questions&nbsp;? Écris-nous sur WhatsApp →</a>
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
