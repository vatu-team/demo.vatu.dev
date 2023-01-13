<?php
/**
 * Plugin Name: Site Specific Configuration
 * Plugin URI: https://vatu.dev
 * Description: Site settings independent to the a theme or plugin.
 * Version: 1.0.0
 * Author: Vatu
 * Author URI: https://vatu.dev/
 * License: GPL3
 *
 * @package   Vatu/WordPress/Plugin/SiteConfig
 * @copyright 2023 Vatu
 */

/**
 * Disable indexing for development sites.
 */
if (
	defined( 'WP_ENVIRONMENT_TYPE' ) &&
	in_array( WP_ENVIRONMENT_TYPE, [ 'local', 'development', 'qa', 'staging' ] )
) {
	add_action(
		'pre_option_blog_public',
		'__return_zero'
	);
}

/**
 * Remove warning about site health statuses.
 */
function vatu_disable_site_health_tests( array $tests ) {
	unset( $tests['direct']['debug_enabled'] );
	unset( $tests['async']['background_updates'] );
	return $tests;
}

add_filter(
	'site_status_tests',
	'vatu_disable_site_health_tests',
);
