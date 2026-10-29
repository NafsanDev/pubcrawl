<?php
/**
 * Template Name: Private Tours Page
 *
 * @package Pubcrawl_Zurich
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

get_header();
?>
<main id="main-content">
	<?php
	$current_lang = function_exists('pll_current_language') ? pll_current_language() : 'en';
	if ( $current_lang == 'fr' ) {
		// Get fr template parts
		foreach ( array( 'hero', 'intro', 'party', 'inclusive', 'jotform', 'faq', 'contact', 'event-info' ) as $pcz_part ) {
			get_template_part( 'template-parts/private-tours/fr/' . $pcz_part );
		}
	} else {
		// Get en template parts
		foreach ( array( 'hero', 'intro', 'party', 'inclusive', 'jotform', 'faq', 'contact', 'event-info' ) as $pcz_part ) {
			get_template_part( 'template-parts/private-tours/' . $pcz_part );
		}
	}
	?>
</main>
<?php
get_footer();
