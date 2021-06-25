<?php
/**
 * Demo theme functions file.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Vatu\Demo
 */

/**
 * Load parent template style sheets.
 *
 * @return void
 */
function demo_enqueue_styles() {

	wp_enqueue_style(
		'demo',
		get_stylesheet_uri(),
		[ 'twentytwentyone' ],
		wp_get_theme()->get( 'Version' )
	);

}

add_action(
	'wp_enqueue_scripts',
	'demo_enqueue_styles'
);

/**
 * Test WPCS Missing white space.
 */
if (!defined('EXPECT_1_SPACE_WITH_PARENTHESIS')) {
	// Replace the version number of the theme on each release.
	define('EXPECT_1_SPACE_WITH_PARENTHESIS', '1.0.0');
}

function test_missing_function_comment() {
	return false;
}

/**
 * Test WPCS mismatched text domain.
 *
 * Text domain should match those set in `phpcs.xml`.
 *
 * @return void
 */
function test_mismatched_text_domain() {

	esc_html_e( 'Test mismatched text domain', 'random-string' );

}

/**
 * Test use of short array tags.
 *
 * Should be ignore due to excluding rule in `phpcs.xml`.
 */
function test_short_array_code() {

	$array = [
		'test' => true,
	];

}

/**
 * Test WPCS "Arrays: Multiple Statement Alignment - Double Arrow Not Aligned"
 */
function test_array_double_arrow_alignment() {

	array(
		'one' => true,
		'two' => true,
		'three' => true,
		'four' => true,
		'five' => true,
		'six' => true,
		'seven' => true,
		'eight' => true,
		'nine' => true,
		'ten' => true,
	);

}

/**
 * Test PHP Compatability flags the use of `mysql_select_db()`.
 *
 * This was depreciated in PHP 5.5
 */
function test_compatability_mysql_select_db() {

	$link = mysql_connect('localhost', 'mysql_user', 'mysql_password');
	if (!$link) {
			die('Not connected : ' . mysql_error());
	}

	// make foo the current db
	$db_selected = mysql_select_db('foo', $link);
	if (!$db_selected) {
			die ('Can\'t use foo : ' . mysql_error());
	}

}

/**
 * Test PHP Compatability flags the use of `create_function()`.
 *
 * This was depreciated in PHP 7.2.0
 */
function test_compatability_drepreciated_function() {

	$av = array("the ", "a ", "that ", "this ");
	array_walk($av, create_function('&$v,$k', '$v = $v . "mango";'));
	print_r($av);

}
