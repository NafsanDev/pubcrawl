<?php
/**
 * Multilingual support.
 *
 * - All strings use the 'pubcrawl-zurich' text domain (Loco Translate, Poedit,
 *   WPML String Translation, Polylang "Strings translations").
 * - Language switcher auto-uses Polylang or WPML when active.
 * - Without a plugin a static EN/DE/FR fallback is shown (filterable).
 *
 * @package Pubcrawl_Zurich
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

function pcz_multilingual_plugin() {
	if ( function_exists( 'pll_the_languages' ) ) {
		return 'polylang';
	}
	if ( defined( 'ICL_SITEPRESS_VERSION' ) ) {
		return 'wpml';
	}
	return 'none';
}

function pcz_fallback_languages() {
	return apply_filters(
		'pcz_fallback_languages',
		array(
			'en' => array( 'label' => 'EN', 'url' => home_url( '/' ) ),
			'fr' => array( 'label' => 'FR', 'url' => home_url( '/fr/' ) ),
			'de' => array( 'label' => 'DE', 'url' => 'https://www.zurichpubcrawl.ch/' ),
			
		)
	);
}

/**
 * Define mapping URLs for EN and FR to German
 */

// add_filter( 'pll_the_languages', 'pcz_map_german_url', 10, 2 );
function pcz_map_german_url() {
	// 1. Get the current active Polylang language slug ('en' or 'fr')
    $current_lang = function_exists('pll_current_language') ? pll_current_language() : 'en';
    // 2. Get the current page path relative to the language root
    global $wp;
    $current_path = !empty($wp->request) ? trim($wp->request, '/') : '';
    // 3. Define mapping arrays for EN and FR to German
    $en_map = array(
        'languageexchange'             => 'sprachaustausch',
		'bartour'                      => 'bartour',
        'private-tours'                => 'private-touren',
        'private-tours/bachelor-party' => 'private-touren/polterabend',
        'private-tours/birthday-party' => 'private-touren/geburtstag',
        'private-tours/company-event'  => 'private-touren/firmenevent',
		'terms-and-conditions'         => 'allgemeine-geschaftsbedingungen'
    );
    $fr_map = array(
        'fr/echange-linguistique'                => 'sprachaustausch',
		'fr/details-visite'                      => 'bartour',
        'fr/tours-prives'                        => 'private-touren',
        'fr/tours-prives/enterrement-de-garcon'  => 'private-touren/polterabend',
        'fr/tours-prives/anniversaire'           => 'private-touren/geburtstag',
        'fr/tours-prives/evenement-dentreprise'  => 'private-touren/firmenevent',
		'fr/termes-et-conditions'                => 'allgemeine-geschaftsbedingungen'
    );
    // 4. Select the correct map stack based on Polylang's active state
    $active_map = ($current_lang === 'fr') ? $fr_map : $en_map;
    // 5. Look up the German path. If not found, default to an empty string (Home page)
    $de_path = isset($active_map[$current_path]) ? $active_map[$current_path] : '';
    // 6. Construct the external German target URL (Update with your actual German domain)
    $german_base_url = 'https://german.dltbonlinebooking.ph/';
    $german_url = user_trailingslashit( rtrim($german_base_url, '/') . '/' . $de_path );

	return $german_url;
}

/**
 * Normalised list of [ 'code', 'url', 'active' ] for the active provider.
 */
function pcz_get_languages() {
	$output = array();

	switch ( pcz_multilingual_plugin() ) {
		case 'polylang':
			$langs = pll_the_languages( array( 'raw' => 1, 'hide_if_empty' => 0 ) );		
			if ( is_array( $langs ) ) {	
				foreach ( $langs as $l ) {
					$output[] = array( 'code' => strtoupper( $l['slug'] ), 'url' => $l['url'], 'active' => ! empty( $l['current_lang'] ) );
				}
			}
			break;

		case 'wpml':
			$langs = apply_filters( 'wpml_active_languages', null, array( 'skip_missing' => 0 ) );
			if ( is_array( $langs ) ) {
				foreach ( $langs as $code => $l ) {
					$output[] = array( 'code' => strtoupper( $code ), 'url' => $l['url'], 'active' => ! empty( $l['active'] ) );
				}
			}
			break;

		default:
			$current = substr( determine_locale(), 0, 2 );
			foreach ( pcz_fallback_languages() as $code => $l ) {
				$output[] = array( 'code' => $l['label'], 'url' => $l['url'], 'active' => ( $code === $current ) );
			}
	}

	return $output;
}

/**
 * Print the language switcher. $context: 'desktop' or 'mobile'.
 */
function pcz_language_switcher( $context = 'desktop' ) {
	$langs = pcz_get_languages();
	if ( count( $langs ) < 2 ) {
		return;
	}
	$class = ( 'mobile' === $context ) ? 'lang-selector-mobile' : 'lang-selector';
	echo '<div class="' . esc_attr( $class ) . '">';
	foreach ( $langs as $l ) {
		printf(
			'<a href="%s" class="lang-btn%s" lang="%s" hreflang="%s">%s</a>',
			esc_url( $l['url'] ),
			$l['active'] ? ' active' : '',
			esc_attr( strtolower( $l['code'] ) ),
			esc_attr( strtolower( $l['code'] ) ),
			esc_html( $l['code'] )
		);
	}
	echo '<a href="' . pcz_map_german_url() . '" class="lang-btn" lang="de" hreflang="de">DE</a>';
	echo '</div>';
}

/** Admin hint when no multilingual plugin is installed. */
function pcz_multilingual_admin_notice() {
	if ( 'none' !== pcz_multilingual_plugin() || ! current_user_can( 'install_plugins' ) ) {
		return;
	}
	$screen = get_current_screen();
	if ( ! $screen || 'themes' !== $screen->id ) {
		return;
	}
	echo '<div class="notice notice-info is-dismissible"><p>' . esc_html__( 'Pub Crawl Zurich is translation-ready. Install Polylang or WPML to manage EN/DE/FR content and the language switcher.', 'pubcrawl-zurich' ) . '</p></div>';
}
add_action( 'admin_notices', 'pcz_multilingual_admin_notice' );

function pcz_translated_string($optionName, $optionValue) {
	$stringName = get_theme_mod($optionName, $optionValue);
	$translated = function_exists('pll__') ? pll__($stringName) : $stringName;

	return $translated;
}

/*add_action('init', function() {
    // Syntax: pll_register_string($name, $string, $group, $multiline);
    pll_register_string('October English', 'October', 'Theme Strings');
    //pll_register_string('pubcrawl-zurich', 'Search results for:', 'Theme Strings');
    //pll_register_string('pubcrawl-zurich', 'Page not found', 'Theme Strings');
});*/
