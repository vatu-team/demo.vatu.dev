<?php
/**
 * Demo theme functions file.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Vatu\Demo
 */

/**
 * Load parent template style sheets.
 *
 * @return void
 */
function demo_enqueue_styles() {

	wp_enqueue_style(
		'demo',
		get_stylesheet_uri(),
		[ 'twentytwentyone' ],
		wp_get_theme()->get( 'Version' )
	);

}

add_action(
	'wp_enqueue_scripts',
	'demo_enqueue_styles'
);
