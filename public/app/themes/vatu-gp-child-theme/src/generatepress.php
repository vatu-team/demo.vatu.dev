<?php
/**
 * GeneratePress helper functions.
 *
 * @package  Vatu\Project
 * @author   Vatu <hello@vatu.dev>
 * @since    1.0.0
 */

/**
 * Remove GeneratePress Premium notice
 *
 * @since   1.0.0
 * @return  void
 */
function tu_remove_gp_premium_notices() {
	remove_action( 'admin_notices', 'generate_premium_theme_information' );
}

/**
 * Action: Remove GeneratePress Premium notice
 *
 * @since   1.0.0
 * @return  void
 * @hooked after_setup_theme - 10
 */
add_action( 'after_setup_theme', 'tu_remove_gp_premium_notices' );
