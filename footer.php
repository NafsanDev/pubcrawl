<?php
/**
 * Footer.
 *
 * @package Pubcrawl_Zurich
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>
<footer id="site-footer">
	<a href="<?php echo esc_url( pcz_get( 'pcz_ticket_url' ) ); ?>" target="_blank" rel="noopener" class="footer-book-mobile">🎟 <?php esc_html_e( 'Tickets', 'pubcrawl-zurich' ); ?></a>

	<div class="social-icons">
		<?php if ( pcz_get( 'pcz_instagram_url' ) ) : ?>
			<a href="<?php echo esc_url( pcz_get( 'pcz_instagram_url' ) ); ?>" target="_blank" rel="noopener" class="social-icon" aria-label="Instagram"><?php pcz_instagram_svg(); ?></a>
		<?php endif; ?>
		<?php if ( pcz_get( 'pcz_facebook_url' ) ) : ?>
			<a href="<?php echo esc_url( pcz_get( 'pcz_facebook_url' ) ); ?>" target="_blank" rel="noopener" class="social-icon" aria-label="Facebook"><svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true"><path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/></svg></a>
		<?php endif; ?>
		<?php if ( pcz_get( 'pcz_meetup_url' ) ) : ?>
			<a href="<?php echo esc_url( pcz_get( 'pcz_meetup_url' ) ); ?>" target="_blank" rel="noopener" class="social-icon" aria-label="Meetup" style="font-size:0.6rem; font-weight:900; letter-spacing:-0.03em; color:rgba(255,255,255,0.8); font-family:sans-serif; width:42px; height:42px;">meetup</a>
		<?php endif; ?>
		<?php if ( pcz_get( 'pcz_tripadvisor_url' ) ) : ?>
			<a href="<?php echo esc_url( pcz_get( 'pcz_tripadvisor_url' ) ); ?>" target="_blank" rel="noopener" class="social-icon" aria-label="TripAdvisor"><svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true"><path d="M12.006 4.295c-2.67 0-5.17.87-7.22 2.38H0l1.99 2.09a5.924 5.924 0 00-1.04 3.4c0 3.28 2.67 5.95 5.95 5.95 1.65 0 3.14-.67 4.23-1.76l.87.92.87-.92a5.944 5.944 0 004.23 1.76c3.28 0 5.95-2.67 5.95-5.95 0-1.28-.41-2.47-1.1-3.44L24 6.67h-4.77a12.6 12.6 0 00-7.22-2.37zM6.9 15.79a4.12 4.12 0 110-8.24 4.12 4.12 0 010 8.24zm5.1-4.12a5.84 5.84 0 01-.07-.92 5.915 5.915 0 011.48-3.9 10.75 10.75 0 00-2.89-.4c-1.03 0-2.02.15-2.96.41a5.92 5.92 0 011.52 3.94c0 .3-.02.59-.07.87zm5.1 4.12a4.12 4.12 0 110-8.24 4.12 4.12 0 010 8.24zm0-6.45a2.33 2.33 0 100 4.66 2.33 2.33 0 000-4.66zM6.9 9.34a2.33 2.33 0 100 4.66 2.33 2.33 0 000-4.66z"/></svg></a>
		<?php endif; ?>
	</div>

	<div class="footer-links">
		<?php if ( has_nav_menu( 'footer' ) ) : ?>
			<?php wp_nav_menu( array( 'theme_location' => 'footer', 'container' => false, 'menu_class' => 'footer-menu', 'depth' => 1 ) ); ?>
		<?php else : ?>
			<?php
			$pcz_terms_page = get_page_by_path( 'terms-and-conditions' );
			$pcz_terms_url  = $pcz_terms_page ? get_permalink( $pcz_terms_page ) : home_url( '/terms-and-conditions/' );
			?>
			<a href="<?php echo esc_url( pcz_get( 'pcz_tour_details_url' ) ); ?>" target="_blank" rel="noopener"><?php esc_html_e( 'Tour Details', 'pubcrawl-zurich' ); ?></a>
			<a href="<?php echo esc_url( pcz_get( 'pcz_lang_exchange_url' ) ); ?>" target="_blank" rel="noopener"><?php esc_html_e( 'Language Exchange', 'pubcrawl-zurich' ); ?></a>
			<a href="<?php echo esc_url( pcz_get( 'pcz_private_tours_url' ) ); ?>" target="_blank" rel="noopener"><?php esc_html_e( 'Private Tours', 'pubcrawl-zurich' ); ?></a>
			<a href="<?php echo esc_url( home_url( '/#video' ) ); ?>"><?php esc_html_e( 'Contact Us', 'pubcrawl-zurich' ); ?></a>
			<a href="<?php echo esc_url( $pcz_terms_url ); ?>"><?php esc_html_e( 'Terms & Conditions', 'pubcrawl-zurich' ); ?></a>
			<?php if ( pcz_get( 'pcz_lucerne_url' ) ) : ?>
				<a href="<?php echo esc_url( pcz_get( 'pcz_lucerne_url' ) ); ?>" target="_blank" rel="noopener"><?php esc_html_e( 'Also in Lucerne →', 'pubcrawl-zurich' ); ?></a>
			<?php endif; ?>
		<?php endif; ?>
	</div>

	<p style="margin-top:0.5rem;">
		<?php
		printf(
			/* translators: 1: year, 2: site name, 3: email, 4: phone */
			esc_html__( '© %1$s %2$s · %3$s · %4$s', 'pubcrawl-zurich' ),
			esc_html( wp_date( 'Y' ) ),
			esc_html( get_bloginfo( 'name' ) ),
			esc_html( pcz_get( 'pcz_email' ) ),
			esc_html( pcz_get( 'pcz_phone' ) )
		);
		?>
	</p>
</footer>

<button id="back-top" aria-label="Back to top" onclick="window.scrollTo({top:0,behavior:'smooth'})" class="visible">
  <svg viewBox="0 0 24 24"><polyline points="18 15 12 9 6 15"></polyline></svg>
</button>

<?php wp_footer(); ?>
</body>
</html>
