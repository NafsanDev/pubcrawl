<?php
/**
 * Front page: the one-page layout, one template part per section.
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
		foreach ( array( 'hero', 'itinerary', 'gallery', 'included', 'event-info', 'reviews', 'contact', 'newsletter' ) as $pcz_part ) {
			get_template_part( 'template-parts/front-page/fr/' . $pcz_part );
		}
	} else {
		// Get en template parts
		foreach ( array( 'hero', 'itinerary', 'gallery', 'included', 'event-info', 'reviews', 'contact', 'newsletter' ) as $pcz_part ) {
			get_template_part( 'template-parts/front-page/' . $pcz_part );
		}
	}
	?>
</main>
<?php
get_footer();
