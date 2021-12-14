<?php

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
 * @hooked after_setup_theme - 10
 */
add_action( 'after_setup_theme', 'tu_remove_gp_premium_notices' );
