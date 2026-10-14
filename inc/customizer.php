<?php
/**
 * Customizer: all editable business content (links, contact, prices, hero).
 *
 * @package Pubcrawl_Zurich
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Get a theme_mod. Filterable so multilingual plugins can swap per-language values.
 */
function pcz_opt( $key, $default = '' ) {
	$value = get_theme_mod( $key, $default );
	return apply_filters( 'pcz_option_' . $key, $value );
}

/**
 * Defaults (single source of truth, matches the original static template).
 */
function pcz_defaults() {
	return array(
		'pcz_hero_video_url'     => 'https://video.wixstatic.com/video/dfa67d_f12799cc6f0d47a7b974656a7936b0f4/1080p/mp4/file.mp4',
		'pcz_hero_title'         => 'Pub Crawl Zurich',
		'pcz_next_event'         => 'Next Event — July 27, 2026',
		'pcz_ticket_price_note'  => 'from Fr. 25.-',
		'pcz_ticket_url'         => 'https://eventfrog.ch/en/p/gruppen/pub-crawl-zurich-7262837580701343532.html',
		'pcz_tour_details_url'   => 'https://www.zurichpubcrawl.ch/bartour?lang=en',
		'pcz_lang_exchange_url'  => 'https://www.zurichpubcrawl.ch/sprachaustausch?lang=en',
		'pcz_private_tours_url'  => 'https://www.pubcrawlzurich.com/polterabend',
		'pcz_lucerne_url'        => 'https://www.luzernpubcrawl.ch',
		'pcz_google_reviews_url' => 'https://www.google.com/search?q=pub+crawl+zurich+reviews',
		'pcz_maps_url'           => 'https://maps.app.goo.gl/fV8a8uWt6DnrxNJ46',
		'pcz_phone'              => '+41 79 285 86 71',
		'pcz_phone_href'         => '+41792858671',
		'pcz_whatsapp_href'      => '41792858671',
		'pcz_email'              => 'pubcrawlzurich@gmail.com',
		'pcz_instagram_url'      => 'https://www.instagram.com/pubcrawlzurich',
		'pcz_facebook_url'       => 'https://www.facebook.com/pubcrawlzurich',
		'pcz_meetup_url'         => 'https://www.meetup.com/pubcrawlzurich/events/',
		'pcz_tripadvisor_url'    => 'https://www.tripadvisor.com/Attraction_Review-g188113-d4468347-Reviews-Pub_Crawl_Zurich-Zurich.html',
		'pcz_meeting_bar'        => '2.Akt Sportsbar, Selnaustrasse 2, 8001 Zürich',
		'pcz_meeting_time'       => '9:00 PM',
		'pcz_meeting_day'        => 'Every Saturday',
		'pcz_price_student'      => 'CHF 19.-',
		'pcz_price_early'        => 'CHF 25.-',
		'pcz_price_regular'      => 'CHF 29.-',
		'pcz_price_vip'          => 'CHF 35.-',
		'pcz_newsletter_embed'   => '',
	);
}

/**
 * Get an option falling back to the built-in default.
 * Text defaults are translatable through the theme text domain.
 */
function pcz_get( $key ) {
	$defaults = pcz_defaults();
	$default  = isset( $defaults[ $key ] ) ? $defaults[ $key ] : '';
	$translatable = array(
		'pcz_hero_title'        => __( 'Pub Crawl Zurich', 'pubcrawl-zurich' ),
		'pcz_next_event'        => __( 'Next Event — July 27, 2026', 'pubcrawl-zurich' ),
		'pcz_ticket_price_note' => __( 'from Fr. 25.-', 'pubcrawl-zurich' ),
		'pcz_meeting_bar'       => __( '2.Akt Sportsbar, Selnaustrasse 2, 8001 Zürich', 'pubcrawl-zurich' ),
		'pcz_meeting_time'      => __( '9:00 PM', 'pubcrawl-zurich' ),
		'pcz_meeting_day'       => __( 'Every Saturday', 'pubcrawl-zurich' ),
	);
	if ( isset( $translatable[ $key ] ) ) {
		$default = $translatable[ $key ];
	}
	$value = pcz_opt( $key, $default );
	// If the saved value equals the English default, show the translated default.
	if ( isset( $translatable[ $key ] ) && $value === $defaults[ $key ] ) {
		return $translatable[ $key ];
	}
	return $value;
}

function pcz_customize_register( $wp_customize ) {
	$d = pcz_defaults();

	$wp_customize->add_panel( 'pcz_panel', array( 'title' => __( 'Pub Crawl Zurich Settings', 'pubcrawl-zurich' ), 'priority' => 30 ) );

	$sections = array(
		'pcz_hero'    => __( 'Hero Section', 'pubcrawl-zurich' ),
		'pcz_links'   => __( 'External Links', 'pubcrawl-zurich' ),
		'pcz_contact' => __( 'Contact & Social', 'pubcrawl-zurich' ),
		'pcz_meeting' => __( 'Meeting Point & Schedule', 'pubcrawl-zurich' ),
		'pcz_prices'  => __( 'Ticket Prices', 'pubcrawl-zurich' ),
		'pcz_news'    => __( 'Newsletter Embed', 'pubcrawl-zurich' ),
	);
	foreach ( $sections as $id => $title ) {
		$wp_customize->add_section( $id, array( 'title' => $title, 'panel' => 'pcz_panel' ) );
	}

	// key => [section, label, type, sanitize]
	$fields = array(
		'pcz_hero_video_url'     => array( 'pcz_hero', __( 'Hero background video URL (MP4)', 'pubcrawl-zurich' ), 'url', 'esc_url_raw' ),
		'pcz_hero_title'         => array( 'pcz_hero', __( 'Hero title', 'pubcrawl-zurich' ), 'text', 'sanitize_text_field' ),
		'pcz_next_event'         => array( 'pcz_hero', __( 'Next event line', 'pubcrawl-zurich' ), 'text', 'sanitize_text_field' ),
		'pcz_ticket_price_note'  => array( 'pcz_hero', __( 'Hero ticket price note', 'pubcrawl-zurich' ), 'text', 'sanitize_text_field' ),
		'pcz_ticket_url'         => array( 'pcz_links', __( 'Ticket / booking URL', 'pubcrawl-zurich' ), 'url', 'esc_url_raw' ),
		'pcz_tour_details_url'   => array( 'pcz_links', __( 'Tour details URL', 'pubcrawl-zurich' ), 'url', 'esc_url_raw' ),
		'pcz_lang_exchange_url'  => array( 'pcz_links', __( 'Language Exchange URL', 'pubcrawl-zurich' ), 'url', 'esc_url_raw' ),
		'pcz_private_tours_url'  => array( 'pcz_links', __( 'Private Tours URL', 'pubcrawl-zurich' ), 'url', 'esc_url_raw' ),
		'pcz_lucerne_url'        => array( 'pcz_links', __( 'Sister site URL (Lucerne)', 'pubcrawl-zurich' ), 'url', 'esc_url_raw' ),
		'pcz_google_reviews_url' => array( 'pcz_links', __( 'Google Reviews URL', 'pubcrawl-zurich' ), 'url', 'esc_url_raw' ),
		'pcz_maps_url'           => array( 'pcz_links', __( 'Google Maps link to meeting bar', 'pubcrawl-zurich' ), 'url', 'esc_url_raw' ),
		'pcz_phone'              => array( 'pcz_contact', __( 'Phone (display)', 'pubcrawl-zurich' ), 'text', 'sanitize_text_field' ),
		'pcz_phone_href'         => array( 'pcz_contact', __( 'Phone (tel: link, e.g. +41792858671)', 'pubcrawl-zurich' ), 'text', 'sanitize_text_field' ),
		'pcz_whatsapp_href'      => array( 'pcz_contact', __( 'WhatsApp number (digits only, no +)', 'pubcrawl-zurich' ), 'text', 'sanitize_text_field' ),
		'pcz_email'              => array( 'pcz_contact', __( 'Contact email', 'pubcrawl-zurich' ), 'email', 'sanitize_email' ),
		'pcz_instagram_url'      => array( 'pcz_contact', __( 'Instagram URL', 'pubcrawl-zurich' ), 'url', 'esc_url_raw' ),
		'pcz_facebook_url'       => array( 'pcz_contact', __( 'Facebook URL', 'pubcrawl-zurich' ), 'url', 'esc_url_raw' ),
		'pcz_meetup_url'         => array( 'pcz_contact', __( 'Meetup URL', 'pubcrawl-zurich' ), 'url', 'esc_url_raw' ),
		'pcz_tripadvisor_url'    => array( 'pcz_contact', __( 'TripAdvisor URL', 'pubcrawl-zurich' ), 'url', 'esc_url_raw' ),
		'pcz_meeting_bar'        => array( 'pcz_meeting', __( 'Meeting bar name & address', 'pubcrawl-zurich' ), 'text', 'sanitize_text_field' ),
		'pcz_meeting_time'       => array( 'pcz_meeting', __( 'Meeting time', 'pubcrawl-zurich' ), 'text', 'sanitize_text_field' ),
		'pcz_meeting_day'        => array( 'pcz_meeting', __( 'Recurring day label', 'pubcrawl-zurich' ), 'text', 'sanitize_text_field' ),
		'pcz_price_student'      => array( 'pcz_prices', __( 'Students price', 'pubcrawl-zurich' ), 'text', 'sanitize_text_field' ),
		'pcz_price_early'        => array( 'pcz_prices', __( 'Early bird price', 'pubcrawl-zurich' ), 'text', 'sanitize_text_field' ),
		'pcz_price_regular'      => array( 'pcz_prices', __( 'Regular price', 'pubcrawl-zurich' ), 'text', 'sanitize_text_field' ),
		'pcz_price_vip'          => array( 'pcz_prices', __( 'VIP price', 'pubcrawl-zurich' ), 'text', 'sanitize_text_field' ),
		'pcz_newsletter_embed'   => array( 'pcz_news', __( 'Newsletter signup embed HTML (e.g. Brevo). Leave empty to hide.', 'pubcrawl-zurich' ), 'textarea', 'pcz_sanitize_embed' ),
	);

	foreach ( $fields as $id => $f ) {
		$wp_customize->add_setting( $id, array( 'default' => $d[ $id ], 'sanitize_callback' => $f[3] ) );
		$wp_customize->add_control( $id, array( 'label' => $f[1], 'section' => $f[0], 'type' => $f[2] ) );
	}
}
add_action( 'customize_register', 'pcz_customize_register' );

/**
 * Allow form/script markup from administrators only (newsletter embeds need it);
 * everyone else is limited to normal post HTML.
 */
function pcz_sanitize_embed( $value ) {
	if ( current_user_can( 'unfiltered_html' ) ) {
		return $value;
	}
	return wp_kses_post( $value );
}
