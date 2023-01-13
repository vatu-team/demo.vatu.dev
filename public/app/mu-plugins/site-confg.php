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
