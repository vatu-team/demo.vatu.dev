<?php
/**
 * Main plugin class
 *
 * @package ZeroSpam
 */

namespace ZeroSpam;

// Security Note: Blocks direct access to the plugin PHP files.
defined( 'ABSPATH' ) || die();

/**
 * Main plugin class
 */
class Plugin {

	/**
	 * Instance
	 *
	 * @var Plugin
	 */
	public static $instance = null;

	/**
	 * Constructor
	 */
	private function __construct() {
		$this->register_autoloader();
		$this->init_modules();

		add_filter( 'zerospam_types', array( $this, 'types' ), 10, 1 );
		add_filter( 'zerospam_failed_types', array( $this, 'failed_types' ), 10, 1 );
		add_action( 'zero_spam_flagged_attempt', array( $this, 'flagged_attempt' ), 10, 3 );
	}

	/**
	 * Register autoloader
	 */
	private function register_autoloader() {
		require_once ZEROSPAM_PATH . 'includes/class-autoloader.php';

		Autoloader::run();
	}

	/**
	 * Instance
	 */
	public static function instance() {
		if ( is_null( self::$instance ) ) {
			self::$instance = new self();
		}

		return self::$instance;
	}

	/**
	 * Add to failed types
	 *
	 * @param array $types Array of failed types.
	 */
	public function failed_types( $types ) {
		$types['honeypot']             = __( 'Honeypot', 'zero-spam' );
		$types['blocked_email_domain'] = __( 'Blocked Email Domain', 'zero-spam' );
		$types['blocked']              = __( 'Blocked IP', 'zero-spam' );

		return $types;
	}

	/**
	 * Initializes modules
	 */
	private function init_modules() {
		if ( is_admin() ) {
			// Plugin admin module.
			new \ZeroSpam\Core\Admin\Admin();
		}

		// Preform the firewall access check.
		new \ZeroSpam\Core\Access();

		// Database functionality.
		new \ZeroSpam\Includes\DB();

		// Updates functionality.
		new \ZeroSpam\Includes\Updates();

		// Site security
		new \ZeroSpam\Modules\Security\Security();

		// Zero Spam module.
		new \ZeroSpam\Modules\Zero_Spam();

		// Stop Forum Spam module.
		new \ZeroSpam\Modules\StopForumSpam();

		// Project Honeypot module.
		new \ZeroSpam\Modules\ProjectHoneypot();

		// ipbase module
		new \ZeroSpam\Modules\ipbase\ipbase();

		// IPinfo module.
		new \ZeroSpam\Modules\IPinfoModule();

		// ipstack module.
		new \ZeroSpam\Modules\ipstack();

		if ( is_admin() ) {
			// Google API module.
			new \ZeroSpam\Modules\Google();
		}

		// David Walsh module.
		new \ZeroSpam\Modules\DavidWalsh\DavidWalsh();

		// WordPress comments module.
		new \ZeroSpam\Modules\Comments\Comments();

		// WordPress registration module.
		new \ZeroSpam\Modules\Registration\Registration();

		// WordPress login module.
		new \ZeroSpam\Modules\Login\Login();

		// Used to check if a plugin is installed & active.
		include_once ABSPATH . 'wp-admin/includes/plugin.php';

		// Elementor plugin module.
		/*if ( is_plugin_active( 'elementor-pro/elementor-pro.php' ) ) {
			new \ZeroSpam\Modules\Elementor\Elementor();
		}*/

		// GiveWP plugin module.
		if ( is_plugin_active( 'give/give.php' ) ) {
			new \ZeroSpam\Modules\Give\Give();
		}

		// Contact Form 7 plugin module.
		if ( is_plugin_active( 'contact-form-7/wp-contact-form-7.php' ) ) {
			new \ZeroSpam\Modules\ContactForm7\ContactForm7();
		}

		// WPForms plugin module.
		if (
			is_plugin_active( 'wpforms-lite/wpforms.php' ) ||
			is_plugin_active( 'wpforms/wpforms.php' )
		) {
			new \ZeroSpam\Modules\WPForms\WPForms();
		}

		// Formidable plugin module.
		if ( is_plugin_active( 'formidable/formidable.php' ) ) {
			new \ZeroSpam\Modules\Formidable\Formidable();
		}

		// Fluent Forms plugin module.
		if ( is_plugin_active( 'fluentform/fluentform.php' ) ) {
			new \ZeroSpam\Modules\FluentForms\FluentForms();
		}

		// Mailchimp for WordPress plugin module.
		if ( is_plugin_active( 'mailchimp-for-wp/mailchimp-for-wp.php' ) ) {
			new \ZeroSpam\Modules\MailchimpForWP\MailchimpForWP();
		}

		// Zero Spam WooCommerce module.
		if ( is_plugin_active( 'woocommerce/woocommerce.php' ) ) {
			new \ZeroSpam\Modules\WooCommerce\WooCommerce();
		}

		// Zero Spam Gravity Forms module.
		if ( is_plugin_active( 'gravityforms/gravityforms.php' ) ) {
			new \ZeroSpam\Modules\GravityForms\GravityForms();
		}

		// Debug module.
		new \ZeroSpam\Modules\Debug();
	}

	/**
	 * Add to the types array
	 *
	 * @param array $types Types of detections.
	 */
	public function types( $types ) {
		$types['blocked'] = array(
			'label' => __( 'Blocked', 'zero-spam' ),
		);

		return $types;
	}

	/**
	 * Action taken for flagged attempts
	 *
	 * @param string $module The associated module.
	 * @param string $signal The associated signal.
	 * @param array  $data   Additional attempt data.
	 */
	public function flagged_attempt( $module, $signal, $data ) {
		$details = array(
			'type'   => $module,
			'failed' => $signal,
			'data'   => $data,
		);

		if ( 'enabled' === \ZeroSpam\Core\Settings::get_settings( $module . '_log_flagged_attempts' ) ) {
			\ZeroSpam\Includes\DB::log( $module, $details );
		}

		if ( 'enabled' === \ZeroSpam\Core\Settings::get_settings( 'share_data' ) ) {
			do_action( 'zerospam_share_detection', $details );
		}
	}
}

Plugin::instance();
