<?php
/**
 * Helper functions for using ACF on the site.
 *
 * @package  Vatu\Project
 * @author   Vatu <hello@vatu.dev>
 * @since    1.0.0
 */

/**
 * Set ACF JSON save point.
 *
 * @since  1.0.0
 * @return string
 * @link   https://www.advancedcustomfields.com/resources/local-json/
 */
function acf_json_save_point() {
	return get_stylesheet_directory() . '/acf-json';
}

/**
 * Filter: acf_json_save_point.
 *
 * @since  1.0.0
 * @hooked acf/settings/save_json - 10
 */
add_filter( 'acf/settings/save_json', 'acf_json_save_point' );

/**
 * Set ACF JSON load point.
 *
 * @since  1.0.0
 * @return array
 * @link   https://www.advancedcustomfields.com/resources/local-json/
 * @param  array $paths ACF JSON load paths.
 */
function acf_json_load_point( $paths ) {
	unset( $paths[0] ); // Remove original path (optional).
	$paths[] = get_stylesheet_directory() . '/acf-json'; // Locate new path.
	return $paths;
}

/**
 * Filter: acf_json_load_point.
 *
 * @since  1.0.0
 * @hooked acf/settings/load_json - 10
 */
add_filter( 'acf/settings/load_json', 'acf_json_load_point' );
