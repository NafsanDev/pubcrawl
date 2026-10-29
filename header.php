<?php
/**
 * Header.
 *
 * @package Pubcrawl_Zurich
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="https://sibforms.com/forms/end-form/build/sib-styles.css">
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<nav id="navbar">
	<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="nav-logo">
		<?php if ( has_custom_logo() ) : ?>
			<?php echo wp_get_attachment_image( get_theme_mod( 'custom_logo' ), 'full', false, array( 'class' => 'custom-logo' ) ); ?>
		<?php else : ?>
			<img src="<?php echo PCZ_URI . '/assets/images/Pub-Crawl-Zurich.webp'; ?>" alt="Seb's Pub Crawl Zurich">
		<?php endif; ?>
		<div class="nav-name">
			<?php bloginfo( 'name' ); ?>
			<?php if ( get_bloginfo( 'description' ) ) : ?>
				<span style="color:var(--red); font-weight:700;"><?php bloginfo( 'description' ); ?></span>
			<?php endif; ?>
		</div>
	</a>

	<?php
	if ( has_nav_menu( 'primary' ) ) {
		wp_nav_menu( array( 'theme_location' => 'primary', 'container' => false, 'menu_class' => 'primary-menu pcz-fallback-menu' ) );
	} else {
		pcz_fallback_menu();
	}
	pcz_language_switcher( 'desktop' );
	?>

	<button class="nav-hamburger" id="nav-hamburger-btn" aria-label="<?php esc_attr_e( 'Menu', 'pubcrawl-zurich' ); ?>" aria-expanded="false" aria-controls="mob-menu">
		<span></span><span></span><span></span>
	</button>

	<div id="mob-menu" class="mob-menu">
		<?php
		if ( has_nav_menu( 'primary' ) ) {
			wp_nav_menu( array( 'theme_location' => 'primary', 'container' => false, 'menu_class' => 'mob-menu-list pcz-fallback-menu', 'menu_id' => 'mob-menu-list' ) );
		} else {
			pcz_fallback_menu();
		}
		pcz_language_switcher( 'mobile' );
		?>
	</div>
</nav>
