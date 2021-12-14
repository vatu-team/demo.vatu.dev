<?php

function enqueue_styles() {

	wp_enqueue_style( 'vatu-gp-child-theme', get_stylesheet_uri(), ['generate'], wp_get_theme()->get( 'Version' )
	);

}

add_action( 'wp_enqueue_scripts', 'enqueue_styles' );
