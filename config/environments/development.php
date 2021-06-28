<?php
/**
 * Configuration overrides for WP_ENVIRONMENT_TYPE === 'development'
 *
 * Note: Use this as a starting point by copying it as `local.php`. this will stop conflicts between developers.
 *
 * @package    Roots
 */

use Roots\WPConfig\Config;

Config::define( 'SAVEQUERIES', true );
Config::define( 'WP_DEBUG', true );
Config::define( 'WP_DISABLE_FATAL_ERROR_HANDLER', true );
