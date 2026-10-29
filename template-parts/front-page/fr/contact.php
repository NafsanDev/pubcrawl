<?php
/** Contact. @package Pubcrawl_Zurich */
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>
<section class="contact-section" id="contact">
	<div class="container">
		<div class="fade-up">
			<div class="section-label"><?php esc_html_e( 'Prendre contact', 'pubcrawl-zurich' ); ?></div>
			<h2 class="section-title"><?php esc_html_e( 'Contacte-nous', 'pubcrawl-zurich' ); ?></h2>
			<p style="color:rgba(255,255,255,0.55); font-size:1rem; max-width:480px; line-height:1.7; margin-top:0.5rem;"><?php esc_html_e( 'Des questions sur le pub crawl, les réservations privées ou les partenariats ? On répond vite.', 'pubcrawl-zurich' ); ?></p>
		</div>

		<div class="contact-layout">
			<div class="contact-cards fade-up">

				<?php if ( pcz_get( 'pcz_whatsapp_href' ) ) : ?>
				<a href="<?php echo esc_url( 'https://wa.me/' . preg_replace( '/\D/', '', pcz_get( 'pcz_whatsapp_href' ) ) ); ?>" target="_blank" rel="noopener" class="contact-card">
					<div class="contact-card-icon whatsapp">
						<svg width="26" height="26" viewBox="0 0 24 24" fill="#25D366" aria-hidden="true"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/></svg>
					</div>
					<div>
						<div class="contact-card-label">WhatsApp</div>
						<div class="contact-card-value"><?php echo esc_html( pcz_get( 'pcz_phone' ) ); ?></div>
						<div class="contact-card-sub"><?php esc_html_e( 'Réponse la plus rapide · en général en moins d’une heure', 'pubcrawl-zurich' ); ?></div>
					</div>
					<div class="contact-card-arrow">→</div>
				</a>
				<?php endif; ?>

				<?php if ( pcz_get( 'pcz_phone_href' ) ) : ?>
				<a href="<?php echo esc_url( 'tel:' . pcz_get( 'pcz_phone_href' ), array( 'tel' ) ); ?>" class="contact-card">
					<div class="contact-card-icon phone">📞</div>
					<div>
						<div class="contact-card-label"><?php esc_html_e( 'Téléphone', 'pubcrawl-zurich' ); ?></div>
						<div class="contact-card-value"><?php echo esc_html( pcz_get( 'pcz_phone' ) ); ?></div>
						<div class="contact-card-sub"><?php esc_html_e( 'Appelle-nous directement', 'pubcrawl-zurich' ); ?></div>
					</div>
					<div class="contact-card-arrow">→</div>
				</a>
				<?php endif; ?>

				<?php if ( pcz_get( 'pcz_email' ) ) : ?>
				<a href="mailto:<?php echo esc_attr( antispambot( pcz_get( 'pcz_email' ) ) ); ?>" class="contact-card">
					<div class="contact-card-icon email">✉️</div>
					<div>
						<div class="contact-card-label"><?php esc_html_e( 'E-mail', 'pubcrawl-zurich' ); ?></div>
						<div class="contact-card-value"><?php echo esc_html( pcz_get( 'pcz_email' ) ); ?></div>
						<div class="contact-card-sub"><?php esc_html_e( 'Pour les groupes, partenariats & la presse', 'pubcrawl-zurich' ); ?></div>
					</div>
					<div class="contact-card-arrow">→</div>
				</a>
				<?php endif; ?>

			</div>

			<div class="contact-right fade-up" style="width:100%; height:100%;">
				<div style="background:rgba(255,255,255,0.05); border:1px solid rgba(255,255,255,0.12); border-radius:14px; padding:1.5rem; width:100%; height:100%; box-sizing:border-box; display:flex; flex-direction:column;">
					<div style="display:flex; align-items:center; gap:0.75rem; margin-bottom:0.85rem;">
						<img src="<?php echo esc_url( PCZ_URI . '/assets/images/home/red-photo.png' ); ?>" alt="<?php esc_attr_e( 'Pub Crawl Zurich Red Hosts', 'pubcrawl-zurich' ); ?>" style="width:76px; height:76px; object-fit:cover; object-position:top center; border-radius:50%; border:2px solid rgba(255,255,255,0.2); flex-shrink:0;">
						<h3 style="font-family:'Playfair Display', serif; font-size:1.05rem; color:var(--white); margin:0;"><?php esc_html_e( 'Tu veux nous écrire directement ici?', 'pubcrawl-zurich' ); ?></h3>
					</div>

					<form id="contact-message-form" data-mailto="<?php echo esc_attr( pcz_get( 'pcz_email' ) ); ?>" style="display:flex; flex-direction:column; flex:1;">
						<div style="display:flex; align-items:center; gap:0.6rem; margin-bottom:0.6rem; padding:0 0.85rem; border-radius:8px; border:1px solid rgba(255,255,255,0.2); background:rgba(255,255,255,0.06); flex-shrink:0;">
							<span style="flex-shrink:0; font-size:0.95rem; opacity:0.7;">✉️</span>
							<input type="email" id="contact-email" name="email" placeholder="<?php esc_attr_e( 'Ton e-mail', 'pubcrawl-zurich' ); ?>" required style="flex:1; min-width:0; width:100%; box-sizing:border-box; padding:0.65rem 0; border:none; background:transparent; color:var(--white); font-family:'DM Sans', sans-serif; font-size:0.88rem; outline:none;">
						</div>
						<div style="margin-bottom:0.75rem; flex:1; min-height:0;">
							<textarea id="contact-message" name="message" placeholder="<?php esc_attr_e( 'Ton message', 'pubcrawl-zurich' ); ?>" required style="width:100%; height:100%; min-height:60px; box-sizing:border-box; padding:0.65rem 0.85rem; border-radius:8px; border:1px solid rgba(255,255,255,0.2); background:rgba(255,255,255,0.06); color:var(--white); font-family:'DM Sans', sans-serif; font-size:0.88rem; resize:none;"></textarea>
						</div>
						<button type="submit" style="width:100%; font-size:0.88rem; font-weight:700; font-family:'DM Sans', sans-serif; color:#FFFFFF; background-color:rgba(255,255,255,0.08); border-radius:8px; border:1.5px solid rgba(255,255,255,0.25); padding:0.65rem; cursor:pointer; flex-shrink:0;"><?php esc_html_e( 'Envoyer le message', 'pubcrawl-zurich' ); ?></button>
					</form>
				</div>
			</div>
		</div>
	</div>
</section>
