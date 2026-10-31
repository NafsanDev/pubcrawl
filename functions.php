<?php
/**
 * Pub Crawl Zurich theme functions.
 *
 * @package Pubcrawl_Zurich
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

define( 'PCZ_VERSION', '1.0.0' );
define( 'PCZ_DIR', get_template_directory() );
define( 'PCZ_URI', get_template_directory_uri() );

function pcz_setup() {
	// Translations: languages/pubcrawl-zurich-{locale}.mo
	load_theme_textdomain( 'pubcrawl-zurich', PCZ_DIR . '/languages' );

	add_theme_support( 'title-tag' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'custom-logo', array( 'height' => 66, 'width' => 66, 'flex-height' => true, 'flex-width' => true ) );
	add_theme_support( 'html5', array( 'search-form', 'comment-form', 'comment-list', 'gallery', 'caption', 'style', 'script' ) );
	add_theme_support( 'responsive-embeds' );
	add_theme_support('editor-styles');
    add_theme_support('wp-block-styles');
    add_editor_style('assets/css/theme-editor.css');

	register_nav_menus(
		array(
			'primary' => esc_html__( 'Primary Menu', 'pubcrawl-zurich' ),
			'footer'  => esc_html__( 'Footer Menu', 'pubcrawl-zurich' ),
			'mobile'  => esc_html__( 'Mobile Menu', 'pubcrawl-zurich' ),
		)
	);
	register_customizer_strings_for_polylang();
}
add_action( 'after_setup_theme', 'pcz_setup' );

function pcz_scripts() {
	wp_enqueue_style( 'pcz-fonts', 'https://fonts.googleapis.com/css2?family=Playfair+Display:wght@700;900&family=DM+Sans:wght@400;500;600&display=swap', array(), null );
	wp_enqueue_style( 'pcz-editor-style', PCZ_URI . '/assets/css/theme-editor.css', PCZ_VERSION, true );
	wp_enqueue_style( 'pcz-style', get_stylesheet_uri(), array( 'pcz-fonts' ), PCZ_VERSION );
	wp_enqueue_script( 'pcz-main', PCZ_URI . '/assets/js/main.js', array(), PCZ_VERSION, true );
	wp_enqueue_script( 'pcz-contact-form', PCZ_URI . '/assets/js/contact-form.js', array(), PCZ_VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
	if ( is_page_template( 'custom-tour-details.php' ) ) {
		wp_enqueue_style( 'pcz-tour-details-style', PCZ_URI . '/assets/css/tour-details.css', PCZ_VERSION, true );
	}
	if ( is_page_template( 'custom-language-exchange.php' ) ) {
		wp_enqueue_style( 'pcz-exchange-style', PCZ_URI . '/assets/css/exchange.css', PCZ_VERSION, true );
	}
	if ( is_page_template( 'custom-private-tours.php' ) ) {
		wp_enqueue_style( 'pcz-private-tours', PCZ_URI . '/assets/css/private-tours.css', PCZ_VERSION, true );
	}
}
add_action( 'wp_enqueue_scripts', 'pcz_scripts' );

function pcz_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Footer Widgets', 'pubcrawl-zurich' ),
			'id'            => 'footer-1',
			'description'   => esc_html__( 'Optional widgets shown in the footer of the 404 and search pages.', 'pubcrawl-zurich' ),
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h3 class="widget-title">',
			'after_title'   => '</h3>',
		)
	);
}
add_action( 'widgets_init', 'pcz_widgets_init' );

// Add nav-link & dropdown-fix classes to the link
add_filter( 'nav_menu_link_attributes', 'custom_menu_link_modifications', 10, 3 );
function custom_menu_link_modifications( $atts, $item, $args ) {
    if ( isset( $args->theme_location ) && in_array( $args->theme_location, ['primary', 'mobile'] ) ) {
        
        $classes = ! empty( $atts['class'] ) ? explode( ' ', $atts['class'] ) : [];
        $classes[] = 'nav-link';

        if ( in_array( 'menu-item-has-children', $item->classes ) ) {
            $classes[] = 'dropdown-fix';
        }

        $atts['class'] = implode( ' ', array_unique( $classes ) );
    }
    return $atts;
}

// Add <button> and modify sub-menu container classes header menu
add_filter( 'wp_nav_menu', 'custom_menu_html_modifications', 10, 2 );
function custom_menu_html_modifications( $nav_menu, $args ) {
    if ( isset( $args->theme_location ) && in_array( $args->theme_location, ['primary', 'mobile'] ) ) {
        
        $button_html = '</a><button class="dropdown-toggle dropdown-fix" aria-expanded="false" aria-label="Toggle Dropdown"></button>';
        
        $nav_menu = preg_replace(
            '/(<li[^>]*class="[^"]*menu-item-has-children[^"]*"[^>]*>.*?<a[^>]*>.*?)(<\/a>)/s', 
            '$1' . $button_html, 
            $nav_menu
        );

        $nav_menu = str_replace( 'class="sub-menu"', 'class="sub-menu dropdown-fix"', $nav_menu );
    }
    return $nav_menu;
}

require PCZ_DIR . '/inc/customizer.php';
require PCZ_DIR . '/inc/template-tags.php';
require PCZ_DIR . '/inc/multilingual.php';
require PCZ_DIR . '/inc/eventfrog-api.php';

function register_customizer_strings_for_polylang() {
    if ( function_exists('pll_register_string') ) {
        
        // Pull the active values from the customizer to seed the dictionary
        $string_one = get_theme_mod('pcz_meeting_time', pcz_get('pcz_meeting_time'));
        $string_two = get_theme_mod('pcz_meeting_day', pcz_get('pcz_meeting_day'));

        // Register strings: pll_register_string( $label, $string, $group )
        pll_register_string('meeting_time', $string_one, 'Theme Strings');
        pll_register_string('meeting_date', $string_two, 'Theme Strings');
    }
}

