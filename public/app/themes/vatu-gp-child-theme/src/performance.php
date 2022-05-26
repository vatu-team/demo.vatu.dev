<?php
/**
 * Some performance-based helper functions for the site.
 *
 * @package  Vatu\Project
 * @author   Vatu <hello@vatu.dev>
 * @since    1.0.0
 */

/**
 * Disable the emojis on the site.
 *
 * @since  1.0.0
 * @return void
 */
function disable_emojis() {
	remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
	remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
	remove_action( 'wp_print_styles', 'print_emoji_styles' );
	remove_action( 'admin_print_styles', 'print_emoji_styles' );
	remove_filter( 'the_content_feed', 'wp_staticize_emoji' );
	remove_filter( 'comment_text_rss', 'wp_staticize_emoji' );
	remove_filter( 'wp_mail', 'wp_staticize_emoji_for_email' );
	add_filter( 'tiny_mce_plugins', 'disable_emojis_tinymce', 10, 1 );
}

/**
 * Action: disable_emojis
 *
 * @since  1.0.0
 */
add_action( 'init', 'disable_emojis', 10, 0 );

/**
 * Disable the emojis tinymce on the site.
 *
 * @since  1.0.0
 * @return array
 * @param  mixed $plugins List of plugins.
 */
function disable_emojis_tinymce( $plugins ) {
	if ( is_array( $plugins ) ) {
		return array_diff( $plugins, array( 'wpemoji' ) );
	}
	return array();
}

/**
 * Remove support for comments on these post types.
 *
 * @since  1.0.0
 * @return void
 *
 * <code>
 * remove_post_type_support( 'post', 'comments' );
 * remove_post_type_support( 'page', 'comments' );
 * </code>
 */

/**
 * Remove recent comments style on the site.
 *
 * @since  1.0.0
 * @return void
 *
 * <code>
 * function remove_recent_comments_style() {
 * global $wp_widget_factory;
 * remove_action( 'wp_head', array( $wp_widget_factory->widgets['WP_Widget_Recent_Comments'], 'recent_comments_style' ) );
 * }
 * </code>
 */

/**
 * Action: remove_recent_comments_style
 *
 * @since  1.0.0
 *
 * <code>
 * add_action( 'widgets_init', 'remove_recent_comments_style', 10, 0 );
 * </code>
 */

/**
 * Remove head elements
 *
 * @since  1.0.0
 * @return void
 */
function remove_head_elements() {
	remove_action( 'wp_head', 'wlwmanifest_link' );
	remove_action( 'wp_head', 'rsd_link' );
	remove_action( 'wp_head', 'feed_links', 2 );
	remove_action( 'wp_head', 'wp_generator' );
	remove_action( 'wp_head', 'wp_shortlink_wp_head', 10 );
}

/**
 * Remove dashboard meta
 *
 * @since  1.0.0
 * @return void
 */
function remove_dashboard_meta() {
	remove_meta_box( 'dashboard_incoming_links', 'dashboard', 'normal' );
	remove_meta_box( 'dashboard_plugins', 'dashboard', 'normal' );
	remove_meta_box( 'dashboard_primary', 'dashboard', 'normal' );
	remove_meta_box( 'dashboard_secondary', 'dashboard', 'normal' );
	remove_meta_box( 'dashboard_quick_press', 'dashboard', 'side' );
	remove_meta_box( 'dashboard_recent_drafts', 'dashboard', 'side' );
	remove_meta_box( 'dashboard_recent_comments', 'dashboard', 'normal' );
	remove_meta_box( 'dashboard_right_now', 'dashboard', 'normal' );
	remove_meta_box( 'dashboard_activity', 'dashboard', 'normal' );
	remove_meta_box( 'wpseo-dashboard-overview', 'dashboard', 'normal' );
}

/**
 * Action: remove_dashboard_meta
 *
 * @since  1.0.0
 */
add_action( 'admin_init', 'remove_dashboard_meta', 10, 0 );
