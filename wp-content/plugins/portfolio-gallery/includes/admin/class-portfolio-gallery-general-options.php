<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}
class Portfolio_Gallery_General_Options {
	
	public function __construct() {
		add_action( 'portfolio_gallery_save_general_options', array($this,'save_options') );
	}

	/**
	 * Loads General options page
	 */
	public function load_page(){
		if ( isset( $_GET['page'] ) && $_GET['page'] == 'Options_portfolio_styles' ) {
            $this->show_page();
		}
	}

	/**
	 * Shows General options page
	 */
	public function show_page(){
		require( PORTFOLIO_GALLERY_TEMPLATES_PATH.DIRECTORY_SEPARATOR.'admin'.DIRECTORY_SEPARATOR.'portfolio-gallery-admin-general-options-html.php' );
	}
}