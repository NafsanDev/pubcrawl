<?php
/**
 * Template Name: Exchange Page
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
		foreach ( array( 'hero', 'stamp', 'gallery', 'event-info', 'videos', 'passports', 'contact', 'faq' ) as $pcz_part ) {
			get_template_part( 'template-parts/language-exchange/fr/' . $pcz_part );
		}
	} else {
		// Get en template parts
		foreach ( array( 'hero', 'stamp', 'gallery', 'event-info', 'videos', 'passports', 'contact', 'faq' ) as $pcz_part ) {
			get_template_part( 'template-parts/language-exchange/' . $pcz_part );
		}
	}
	?>
</main>
<?php
get_footer();
