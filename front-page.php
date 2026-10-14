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
	foreach ( array( 'hero', 'itinerary', 'gallery', 'included', 'event-info', 'reviews', 'contact', 'newsletter' ) as $pcz_part ) {
		get_template_part( 'template-parts/front-page/' . $pcz_part );
	}
	?>
</main>
<?php
get_footer();
