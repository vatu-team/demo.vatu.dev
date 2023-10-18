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
 * Disable current theme validation
 *
 * By default, WordPress falls back to a default theme if it can't find
 * the active theme. This is undesirable because it requires manually
 * re-activating the correct theme and can lead to data loss in the form
 * of deactivated widgets and menu location assignments.
 */
add_filter( 'validate_current_theme', '__return_false' );

/**
 * Remove warning about site health statuses.
 */
function vatu_disable_site_health_tests( array $tests ) {
	unset( $tests['direct']['debug_enabled'] );
	unset( $tests['direct']['available_updates_disk_space'] );
	unset( $tests['async']['background_updates'] );
	return $tests;
}

add_filter(
	'site_status_tests',
	'vatu_disable_site_health_tests',
);

/**
 * Set Content Security Policy header.
 */
function vatu_content_security_policy_header() {
	header( "Content-Security-Policy: default-src https: data: 'unsafe-inline'; upgrade-insecure-requests" );
}

add_action(
	'send_headers',
	'vatu_content_security_policy_header',
	10,
	0
);

/**
 * Set Referrer header.
 */
function vatu_referrer_policy_header() {
	header( "Referrer-Policy: origin-when-cross-origin, strict-origin-when-cross-origin" );
}

add_action(
	'send_headers',
	'vatu_referrer_policy_header',
	10,
	0
);

/**
 * Set Permissions Policy header.
 */
function vatu_permission_policy_header() {
	header( "Permissions-Policy: accelerometer=(),autoplay=(),camera=(),display-capture=(),document-domain=(),encrypted-media=(),fullscreen=(),geolocation=(),gyroscope=(),magnetometer=(),microphone=(),midi=(),payment=(),picture-in-picture=(),publickey-credentials-get=(),screen-wake-lock=(),sync-xhr=(self),usb=(),web-share=(),xr-spatial-tracking=()" );
}

add_action(
	'send_headers',
	'vatu_permission_policy_header',
	10,
	0
);
