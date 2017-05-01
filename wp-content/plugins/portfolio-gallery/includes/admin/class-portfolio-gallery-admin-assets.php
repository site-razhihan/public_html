<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}
//todo: correct urls
class Portfolio_Gallery_Admin_Assets {

	/**
	 * Portfolio_Gallery_Admin_Assets constructor.
	 */
	public function __construct() {
		add_action( 'admin_enqueue_scripts', array( $this, 'admin_styles' ) );
		add_action( 'admin_enqueue_scripts', array( $this, 'admin_scripts' ) );
	}

	/**
	 * @param $hook hook of current page
	 */
	public function admin_styles( $hook ){
		if( in_array($hook, Portfolio_Gallery()->admin->pages ) ){
			wp_enqueue_style( "admin_css", Portfolio_Gallery()->plugin_url()."/assets/style/admin.style.css", false );
			wp_enqueue_style( "jquery_ui",  Portfolio_Gallery()->plugin_url()."/assets/style/jquery-ui.css", false );
			wp_enqueue_style( "simple_slider_css", Portfolio_Gallery()->plugin_url()."/assets/style/simple-slider.css",  false );
			wp_enqueue_style( "featured_plugins", Portfolio_Gallery()->plugin_url()."/assets/style/featured-plugins.css",  false );
			wp_enqueue_style( "licensing_css", Portfolio_Gallery()->plugin_url()."/assets/style/licensing.css",  false );
		}
	}

	public function admin_scripts( $hook ) {
		$ajax_url              = admin_url( "admin-ajax.php" );
		if( in_array($hook, Portfolio_Gallery()->admin->pages ) ){
			wp_enqueue_media();
			wp_enqueue_script( "portfolio_gallery_admin_js", Portfolio_Gallery()->plugin_url()."/assets/js/admin.js", false );
			wp_enqueue_script( "jquery-ui-core" );
			wp_enqueue_script( "simple_slider_js", Portfolio_Gallery()->plugin_url().'/assets/js/simple-slider.js', false );
			wp_enqueue_script( 'param_block2', Portfolio_Gallery()->plugin_url()."/assets/js/jscolor.js");
            wp_localize_script( 'portfolio_gallery_admin_js', 'imagesUrl', PORTFOLIO_GALLERY_IMAGES_URL );
            wp_localize_script( 'portfolio_gallery_admin_js', 'ajaxUrl', $ajax_url );
		}
		$edit_pages = array('post.php','post-new.php');
		if ( in_array( $hook, $edit_pages ) ){
			wp_enqueue_script( "portfolio_gallery_add_shortecode", Portfolio_Gallery()->plugin_url() . "/assets/js/shortecode.js", false );
			wp_localize_script( 'portfolio_gallery_add_shortecode', 'ajax_object_shortecode', $ajax_url );
		}
	}

	public function localize_scripts(){

	}
}
