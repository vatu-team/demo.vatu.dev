<?php
/**
 * Enqueue external assets
 *
 * @package  Vatu\Project
 * @author   Vatu <hello@vatu.dev>
 * @since    1.0.0
 */

/**
 * Enqueue stylesheets into theme.
 *
 * @since  1.0.0
 * @return void
 *
 * <code>
 * function project_admin_enqueue() {
 * wp_enqueue_style( 'project-admin-styles', get_stylesheet_directory_uri() . '/admin.css', '', '1.0' );
 * </code>
 * }
 */

/**
 * Action: project_admin_enqueue
 *
 * @since  1.0.0
 */
add_action( 'admin_enqueue_scripts', 'project_admin_enqueue' );

/**
 * Enqueue scripts into theme.
 *
 * @since  1.0.0
 * @return void
 *
 * <code>
 * function project_enqueue() {
 * wp_enqueue_script( 'project-scripts', get_stylesheet_directory_uri() . '/scripts.js', array( 'jquery' ), '1.0', true );
 * }
 * </code>
 */

/**
 * Action: project_enqueue
 *
 * @since  1.0.0
 */
add_action( 'wp_enqueue_scripts', 'project_enqueue' );

/**
 * Enqueue stylesheets into login page.
 *
 * @since  1.0.0
 * @return void
 *
 * <code>
 * function project_login_enqueue() {
 * wp_enqueue_style( 'project-login-styles', get_stylesheet_directory_uri() . '/login.css', '', '1.0' );
 * }
 * </code>
 */

/**
 * Action: project_login_enqueue
 *
 * @since  1.0.0
 */
add_action( 'wp_enqueue_scripts', 'project_login_enqueue' );
