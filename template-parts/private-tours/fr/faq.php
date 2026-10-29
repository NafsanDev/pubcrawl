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
      <h2 class="section-title">EVG &amp; EVJF Zurich — questions &amp; réponses</h2>
    </div>
    <div class="faq-grid fade-up visible" id="faq-list">

      <div class="faq-item">
        <button class="faq-q" onclick="faqToggle(this)">Combien de temps à l’avance faut-il réserver&nbsp;? <span class="faq-chevron">▾</span></button>
        <div class="faq-a">On recommande de nous contacter 4 à 6 semaines avant la date souhaitée — les vendredis et samedis partent le plus vite. Cela dit, une demande de dernière minute vaut toujours la peine&nbsp;: on fait tout pour trouver une solution.</div>
      </div>

      <div class="faq-item">
        <button class="faq-q" onclick="faqToggle(this)">À partir de combien de personnes un tour privé est-il possible&nbsp;? <span class="faq-chevron">▾</span></button>
        <div class="faq-a">Les tours privés sont en général possibles à partir d’environ 8 personnes. Les plus petits groupes peuvent rejoindre notre pub crawl du samedi et faire la fête avec le groupe.</div>
      </div>

      <div class="faq-item">
        <button class="faq-q" onclick="faqToggle(this)">Combien coûte un EVG ou EVJF chez vous&nbsp;? <span class="faq-chevron">▾</span></button>
        <div class="faq-a">Le prix dépend si vous souhaitez un tour privé sur mesure ou rejoindre notre pub crawl habituel. Les deux options fonctionnent très bien. Pour un tour privé, le prix dépend surtout de la taille du groupe. Remplissez simplement le formulaire ou envoyez-nous votre budget et vos souhaits — vous recevrez un devis sur mesure et sans engagement.</div>
      </div>

      <div class="faq-item">
        <button class="faq-q" onclick="faqToggle(this)">Pouvons-nous choisir l’itinéraire&nbsp;? <span class="faq-chevron">▾</span></button>
        <div class="faq-a">Bien sûr. Dites-nous simplement vos préférences — par exemple si vous préférez des bars animés ou des bars plus cosy où l’on peut s’asseoir, ou si l’on doit inclure un bar karaoké. On veille toujours à ce que le tour corresponde à votre groupe et à votre tranche d’âge.</div>
      </div>

      <div class="faq-item">
        <button class="faq-q" onclick="faqToggle(this)">C’est seulement pour les EVG et EVJF&nbsp;? <span class="faq-chevron">▾</span></button>
        <div class="faq-a">Non — en plus des enterrements de vie de garçon et de jeune fille, on organise aussi des tours privés pour les anniversaires, les événements d’entreprise et les associations. Les anniversaires et les événements d’entreprise ont chacun leur propre page avec tous les détails.</div>
      </div>

      <div class="faq-item">
        <button class="faq-q" onclick="faqToggle(this)">Un guide est-il inclus&nbsp;? <span class="faq-chevron">▾</span></button>
        <div class="faq-a">Oui, chaque tour privé comprend votre propre Red Host — il guide le groupe toute la soirée, s’occupe de l’itinéraire et des bars, et veille à ce que tout se passe bien du premier shot jusqu’à la boîte.</div>
      </div>

      <div class="faq-item">
        <button class="faq-q" onclick="faqToggle(this)">Comment obtenir un devis&nbsp;? <span class="faq-chevron">▾</span></button>
        <div class="faq-a">Remplissez le <a href="#anfrage" style="color:var(--red); font-weight:600;">formulaire de demande</a> ou écrivez-nous sur <a href="https://wa.me/41792858671" target="_blank" rel="noopener" style="color:var(--red); font-weight:600;">WhatsApp</a> — avec la taille du groupe, la date souhaitée et un budget approximatif. Vous recevez en général un devis sur mesure en un jour.</div>
      </div>

      <div class="faq-item">
        <button class="faq-q" onclick="faqToggle(this)">Pouvons-nous plutôt rejoindre le pub crawl habituel&nbsp;? <span class="faq-chevron">▾</span></button>
        <div class="faq-a">Bien sûr — beaucoup de groupes EVG / EVJF rejoignent simplement notre pub crawl du samedi et profitent de la soirée avec le grand groupe. Dans ce cas, on ajoute des extras que vous n’auriez pas autrement (tour à bière, beer pong, shots supplémentaires, prosecco, lounge VIP en boîte, etc.), alors contactez-nous d’abord. Si vous ne voulez aucun extra, vous pouvez bien sûr réserver directement les billets normaux <a href="/fr" target="_blank" rel="noopener" style="color:var(--red); font-weight:600;">ici →</a></div>
      </div>

    </div>
    <div class="faq-more fade-up visible">
      <a href="<?php echo esc_url( 'https://wa.me/' . preg_replace( '/\D/', '', pcz_get( 'pcz_whatsapp_href' ) ) ); ?>" target="_blank" rel="noopener" style="font-size:0.9rem; font-weight:600; color:var(--navy); text-decoration:underline; text-underline-offset:4px;">D’autres questions&nbsp;? Écrivez-nous sur WhatsApp →</a>
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
      "name": "Combien de temps à l’avance faut-il réserver notre EVG ou EVJF à Zurich ?",
      "acceptedAnswer": { "@type": "Answer", "text": "On recommande de nous contacter 4 à 6 semaines avant la date souhaitée — les vendredis et samedis partent le plus vite. Cela dit, une demande de dernière minute vaut toujours la peine : on fait tout pour trouver une solution." }
    },
    {
      "@type": "Question",
      "name": "À partir de combien de personnes un enterrement de vie de garçon ou de jeune fille privé est-il possible ?",
      "acceptedAnswer": { "@type": "Answer", "text": "Les tours privés sont en général possibles à partir d’environ 8 personnes. Les plus petits groupes peuvent rejoindre notre pub crawl du samedi et faire la fête avec le groupe." }
    },
    {
      "@type": "Question",
      "name": "Combien coûte un EVG ou un EVJF à Zurich chez vous ?",
      "acceptedAnswer": { "@type": "Answer", "text": "Le prix dépend si vous souhaitez un tour privé sur mesure ou rejoindre notre pub crawl habituel. Les deux options fonctionnent très bien. Pour un tour privé, le prix dépend surtout de la taille du groupe. Remplissez simplement le formulaire ou envoyez-nous votre budget et vos souhaits — vous recevrez un devis sur mesure et sans engagement." }
    },
    {
      "@type": "Question",
      "name": "Pouvons-nous choisir nous-mêmes l’itinéraire et les bars ?",
      "acceptedAnswer": { "@type": "Answer", "text": "Bien sûr. Dites-nous simplement vos préférences — par exemple si vous préférez des bars animés ou des bars plus cosy où l’on peut s’asseoir, ou si l’on doit inclure un bar karaoké. On veille toujours à ce que le tour corresponde à votre groupe et à votre tranche d’âge." }
    },
    {
      "@type": "Question",
      "name": "Cette offre est-elle réservée aux EVG et EVJF ?",
      "acceptedAnswer": { "@type": "Answer", "text": "Non — en plus des enterrements de vie de garçon et de jeune fille, on organise aussi des tours privés pour les anniversaires, les événements d’entreprise et les associations. Les anniversaires et les événements d’entreprise ont chacun leur propre page avec tous les détails." }
    },
    {
      "@type": "Question",
      "name": "Un guide est-il inclus ?",
      "acceptedAnswer": { "@type": "Answer", "text": "Oui, chaque tour privé comprend votre propre Red Host — il guide le groupe toute la soirée, s’occupe de l’itinéraire et des bars, et veille à ce que tout se passe bien du premier shot jusqu’à la boîte." }
    },
    {
      "@type": "Question",
      "name": "Comment obtenir un devis ?",
      "acceptedAnswer": { "@type": "Answer", "text": "Remplissez le formulaire de demande sur cette page ou écrivez-nous sur WhatsApp — avec la taille du groupe, la date souhaitée et un budget approximatif. Vous recevez en général un devis sur mesure en un jour." }
    }
  ]
}
</script>

