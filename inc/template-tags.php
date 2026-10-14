<?php
/**
 * Template helpers.
 *
 * @package Pubcrawl_Zurich
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/** Default menu when none is assigned. */
function pcz_fallback_menu() {
	echo '<ul class="pcz-fallback-menu">';
	printf( '<li><a href="%s">%s</a></li>', esc_url( home_url( '/' ) ), esc_html__( 'Home', 'pubcrawl-zurich' ) );
	printf( '<li><a href="%s" target="_blank" rel="noopener">%s</a></li>', esc_url( pcz_get( 'pcz_tour_details_url' ) ), esc_html__( 'Tour Details', 'pubcrawl-zurich' ) );
	printf( '<li><a href="%s" target="_blank" rel="noopener">%s</a></li>', esc_url( pcz_get( 'pcz_ticket_url' ) ), esc_html__( 'Dates & Tickets', 'pubcrawl-zurich' ) );
	printf( '<li><a href="%s" target="_blank" rel="noopener">%s</a></li>', esc_url( pcz_get( 'pcz_lang_exchange_url' ) ), esc_html__( 'Language Exchange', 'pubcrawl-zurich' ) );
	printf( '<li><a href="%s" target="_blank" rel="noopener">%s</a></li>', esc_url( pcz_get( 'pcz_private_tours_url' ) ), esc_html__( 'Private Tours', 'pubcrawl-zurich' ) );
	printf( '<li><a href="%s#video">%s</a></li>', esc_url( home_url( '/' ) ), esc_html__( 'Contact', 'pubcrawl-zurich' ) );
	echo '</ul>';
}

/** Instagram icon path (shared by footer + gallery). */
function pcz_instagram_svg() {
	echo '<svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/></svg>';
}

/** Google "G" icon. */
function pcz_google_g_icon( $size = 22 ) {
	printf(
		'<svg viewBox="0 0 24 24" width="%1$d" height="%1$d" xmlns="http://www.w3.org/2000/svg" aria-hidden="true"><path d="M22.56 12.25c0-.78-.07-1.53-.2-2.25H12v4.26h5.92c-.26 1.37-1.04 2.53-2.21 3.31v2.77h3.57c2.08-1.92 3.28-4.74 3.28-8.09z" fill="#4285F4"/><path d="M12 23c2.97 0 5.46-.98 7.28-2.66l-3.57-2.77c-.98.66-2.23 1.06-3.71 1.06-2.86 0-5.29-1.93-6.16-4.53H2.18v2.84C3.99 20.53 7.7 23 12 23z" fill="#34A853"/><path d="M5.84 14.09c-.22-.66-.35-1.36-.35-2.09s.13-1.43.35-2.09V7.07H2.18C1.43 8.55 1 10.22 1 12s.43 3.45 1.18 4.93l3.66-2.84z" fill="#FBBC05"/><path d="M12 5.38c1.62 0 3.06.56 4.21 1.64l3.15-3.15C17.45 2.09 14.97 1 12 1 7.7 1 3.99 3.47 2.18 7.07l3.66 2.84c.87-2.6 3.3-4.53 6.16-4.53z" fill="#EA4335"/></svg>',
		absint( $size )
	);
}

/** Red-shirt host icon. */
function pcz_host_svg( $size = 22 ) {
	printf(
		'<svg width="%1$d" height="%1$d" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true"><path d="M8 2 C8 2 6 3.5 4 4.5 L2 8 L5.5 9.5 L5.5 22 L18.5 22 L18.5 9.5 L22 8 L20 4.5 C18 3.5 16 2 16 2 C15 4 13.5 5 12 5 C10.5 5 9 4 8 2Z" fill="#C8102E" stroke="#9B0B21" stroke-width="0.5"/><path d="M9 2.5 C9.5 4.5 10.8 6 12 6 C13.2 6 14.5 4.5 15 2.5" fill="none" stroke="#9B0B21" stroke-width="0.8"/><path d="M11 5.5 L11 8.5 C11 9.3 13 9.3 13 8.5 L13 5.5" fill="#FAF7F2" stroke="#9B0B21" stroke-width="0.5"/></svg>',
		absint( $size )
	);
}

/** Reviews (filterable). */
function pcz_get_reviews() {
	$reviews = array(
		array( 'text' => __( 'My night out with pub crawl Zurich was one of the coolest nights I had in the city. I met amazing people, sang and danced all night long. I recommend it to anyone visiting Zurich!', 'pubcrawl-zurich' ), 'name' => 'Ana L.', 'initials' => 'AL', 'color' => '#34A853' ),
		array( 'text' => __( 'Really well spent night, great crowd, nice bars. The mix of tourists and locals gives you the opportunity to meet many new great people and have some interesting conversations!', 'pubcrawl-zurich' ), 'name' => 'Jana K.', 'initials' => 'JK', 'color' => '#EA4335' ),
		array( 'text' => __( 'I met a lot of interesting people and had fun. It was a well organised pub crawl. The guides are all very outgoing and make sure the atmosphere is joyful. Would absolutely recommend!', 'pubcrawl-zurich' ), 'name' => 'Nolan R.', 'initials' => 'NR', 'color' => '#FBBC05' ),
		array( 'text' => __( 'The tour was organised very well by Sebastien and the places we visited were great. I met a lot of great people on the tour. Best night out in Zurich!', 'pubcrawl-zurich' ), 'name' => 'Thomas M.', 'initials' => 'TM', 'color' => '#4285F4' ),
	);
	return apply_filters( 'pcz_reviews', $reviews );
}

/** Gallery images (filterable). Wix IDs → thumb + full-size URLs. */
function pcz_get_gallery_images() {
	$ids = array(
		'dfa67d_aea76048a8234d09a575eabf8c332ad6' => __( 'Together we party — Pub Crawl Zurich', 'pubcrawl-zurich' ),
		'dfa67d_1d373e342896488f88c6ab78bb4c769c' => __( 'Big group of party people Zurich', 'pubcrawl-zurich' ),
		'dfa67d_1d47bd1ae3d546ba8487913676757e64' => __( 'Ausgang in Zürich nightlife', 'pubcrawl-zurich' ),
		'dfa67d_2fb65a60a51f4c59b52b0279173ace36' => __( 'Girls clubbing in Zurich', 'pubcrawl-zurich' ),
		'dfa67d_4c4de610d8d247eb9a589a8d59fc250b' => __( 'Boat party Zurich', 'pubcrawl-zurich' ),
		'dfa67d_da3a439f53fb4b7cb4f789a16ec75dba' => __( 'Meet people at Pub Crawl Zurich', 'pubcrawl-zurich' ),
	);
	$images = array();
	foreach ( $ids as $id => $alt ) {
		$base     = 'https://static.wixstatic.com/media/' . $id . '~mv2.jpg/v1/fill/';
		$images[] = array(
			'src'  => $base . 'w_960,h_720,al_c,q_85/' . $id . '~mv2.jpg',
			'full' => $base . 'w_1600,h_1200,al_c,q_90/' . $id . '~mv2.jpg',
			'alt'  => $alt,
		);
	}
	$local = PCZ_URI . '/assets/images/hero-fallback.jpg';
	$images[] = array( 'src' => $local, 'full' => $local, 'alt' => __( 'Red Hosts and the crowd — Pub Crawl Zurich', 'pubcrawl-zurich' ) );
	return apply_filters( 'pcz_gallery_images', $images );
}
