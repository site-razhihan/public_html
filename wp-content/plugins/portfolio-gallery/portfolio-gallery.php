<?php

/*
Plugin Name: Portfolio Gallery Auto
Plugin URI: https://huge-it.com/portfolio-gallery
Description: Portfolio Gallery is a great plugin for adding specialized portfolio galleriey, video portfolio gallery of just a gallery with single images.
Version: 2.3.3
Author: Gallery By Huge IT
License: GNU/GPLv3 https://www.gnu.org/licenses/gpl-3.0.html
Text Domain: portfolio-gallery
Domain Path: /languages
*/

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

include_once('config.php');

if ( ! class_exists( 'Portfolio_Gallery' ) ) :

final class Portfolio_Gallery {

	/**
	 * Version of plugin
	 * @var float
	 */
	public $version = '2.3.3';

	/**
	 * Instance of Portfolio_Gallery_Admin class to manage admin
	 * @var Portfolio_Gallery_Admin instance
	 */
	public $admin = null;

	/**
	 * Instance of Portfolio_Gallery_Template_Loader class to manage admin
	 * @var Portfolio_Gallery_Template_Loader instance
	 */
	public $template_loader = null;

	/**
	 * The single instance of the class.
	 *
	 * @var Portfolio_Gallery
	 */
	protected static $_instance = null;

	/**
	 * Main Portfolio_Gallery Instance.
	 *
	 * Ensures only one instance of Portfolio_Gallery is loaded or can be loaded.
	 *
	 * @static
	 * @see Portfolio_Gallery()
	 * @return Portfolio_Gallery - Main instance.
	 */
	public static function instance() {
		if ( is_null( self::$_instance ) ) {
			self::$_instance = new self();
		}
		return self::$_instance;
	}

	private function __clone() {
		_doing_it_wrong( __FUNCTION__, __( 'Cheatin&#8217; huh?', 'portfolio-gallery' ), '2.1' );
	}

	/**
	 * Unserializing instances of this class is forbidden.
	 */
	private function __wakeup() {
		_doing_it_wrong( __FUNCTION__, __( 'Cheatin&#8217; huh?', 'portfolio-gallery' ), '2.1' );
	}

	/**
	 * Portfolio_Gallery Constructor.
	 */
	private function __construct() {
		$this->define_constants();
		$this->includes();
		$this->init_hooks();
		global $portfolio_gallery_url,$portfolio_gallery_path;
		$portfolio_gallery_path = untrailingslashit( plugin_dir_path( __FILE__ ) );
		$portfolio_gallery_url = plugins_url('', __FILE__ );
		do_action( 'portfolio_gallery_loaded' );
	}

	/**
	 * Hook into actions and filters.
	 */
	private function init_hooks() {
		register_activation_hook( __FILE__, array( 'Portfolio_Gallery_Install', 'install' ) );
		add_action( 'init', array( $this, 'init' ), 0 );
		add_action( 'plugins_loaded', array($this,'load_plugin_textdomain') );
		add_action( 'widgets_init', array( 'Portfolio_Gallery_Widgets', 'init' ) );
	}

	/**
	 * Define Portfolio Gallery Constants.
	 */
	private function define_constants() {
		$this->define( 'PORTFOLIO_GALLERY_PLUGIN_FILE', __FILE__ );
		$this->define( 'PORTFOLIO_GALLERY_PLUGIN_BASENAME', plugin_basename( __FILE__ ) );
		$this->define( 'PORTFOLIO_GALLERY_VERSION', $this->version );
		$this->define( 'PORTFOLIO_GALLERY_IMAGES_PATH', $this->plugin_path(). DIRECTORY_SEPARATOR . 'images' . DIRECTORY_SEPARATOR );
		$this->define( 'PORTFOLIO_GALLERY_IMAGES_URL', untrailingslashit($this->plugin_url() . '/assets/images/' ));
		$this->define( 'PORTFOLIO_GALLERY_TEMPLATES_PATH', $this->plugin_path() . DIRECTORY_SEPARATOR . 'templates');
		$this->define( 'PORTFOLIO_GALLERY_TEMPLATES_URL', untrailingslashit($this->plugin_url()) . '/templates/');
	}

	/**
	 * Define constant if not already set.
	 *
	 * @param  string $name
	 * @param  string|bool $value
	 */
	private function define( $name, $value ) {
		if ( ! defined( $name ) ) {
			define( $name, $value );
		}
	}
	
	/**
	 * What type of request is this?
	 * string $type ajax, frontend or admin.
	 *
	 * @return bool
	 */
	private function is_request( $type ) {
		switch ( $type ) {
			case 'admin' :
				return is_admin();
			case 'ajax' :
				return defined( 'DOING_AJAX' );
			case 'cron' :
				return defined( 'DOING_CRON' );
			case 'frontend' :
				return  ! is_admin() && ! defined( 'DOING_CRON' );
		}
	}
	
	/**
	 * Include required core files used in admin and on the frontend.
	 */
	public function includes() {
		include_once( 'includes/portfolio-gallery-functions.php' );
		include_once( 'includes/portfolio-gallery-video-function.php' );
		if ( $this->is_request( 'admin' ) ) {
			include_once( 'includes/admin/portfolio-gallery-admin-functions.php' );
		}
		if ( $this->is_request( 'frontend' ) ) {
			$this->frontend_includes();
		}

	}

	/**
	 * Include required core files used in front end
	 */
	public function frontend_includes(){

	}

	/**
	 * Load plugin text domain
	 */
	public function load_plugin_textdomain(){
		load_plugin_textdomain( 'portfolio-gallery', false, $this->plugin_path() . '/languages/' );
	}

	/**
	 * Init Portfolio gallery when WordPress `initialises.
	 */
	public function init() {
		// Before init action.
		do_action( 'before_portfolio_gallery_init' );

        Portfolio_Gallery_Install::init();

		$this->template_loader = new Portfolio_Gallery_Template_Loader();

		if ( $this->is_request( 'admin' ) ) {

			$this->admin = new Portfolio_Gallery_Admin();

			new Portfolio_Gallery_Admin_Assets();

		}

		new Portfolio_Gallery_Frontend_Scripts();

		new Portfolio_Gallery_Ajax();

		new Portfolio_Gallery_Shortcode();



		// Init action.
		do_action( 'portfolio_gallery_init' );
	}

	/**
	 * Get Ajax URL.
	 * @return string
	 */
	public function ajax_url() {
		return admin_url( 'admin-ajax.php', 'relative' );
	}

	/**
	 * Portfolio Gallery Plugin Path.
	 *
	 * @return string
	 */
	public function plugin_path() {
		return untrailingslashit( plugin_dir_path( __FILE__ ) );
	}

	/**
	 * Portfolio Gallery Plugin Url.
	 * @return string
	 */
	public function plugin_url() {
		return plugins_url( '', __FILE__ );
	}
}

endif;

function Portfolio_Gallery(){
	return Portfolio_Gallery::instance();
}

$GLOBALS['Portfolio_Gallery'] = Portfolio_Gallery();