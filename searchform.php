<?php
/**
 * Search form (used by get_search_form()).
 *
 * @package Pubcrawl_Zurich
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

$pcz_form_id = wp_unique_id( 'pcz-search-' );
?>
<form role="search" method="get" class="pcz-search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
	<label for="<?php echo esc_attr( $pcz_form_id ); ?>" class="screen-reader-text"><?php esc_html_e( 'Search for:', 'pubcrawl-zurich' ); ?></label>
	<input type="search" id="<?php echo esc_attr( $pcz_form_id ); ?>" placeholder="<?php esc_attr_e( 'Search the site…', 'pubcrawl-zurich' ); ?>" value="<?php echo esc_attr( get_search_query() ); ?>" name="s">
	<button type="submit"><?php esc_html_e( 'Search', 'pubcrawl-zurich' ); ?></button>
</form>
