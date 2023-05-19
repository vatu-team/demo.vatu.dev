<?php
/**
 * Some performance-based helper functions for the site.
 *
 * @package  Vatu\Project
 * @author   Vatu <hello@vatu.dev>
 * @since    1.0.0
 */

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
 * add_action( 'widgets_init', 'remove_recent_comments_style' );
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
add_action( 'admin_init', 'remove_dashboard_meta' );
