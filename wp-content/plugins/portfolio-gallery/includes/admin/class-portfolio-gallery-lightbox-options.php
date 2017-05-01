<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

class Portfolio_Gallery_Lightbox_Options {

	/**
	 * Portfolio_Gallery_Lightbox_Options constructor.
	 */
	public function __construct() {
		add_action( 'portfolio_gallery_save_lightbox_options', array( $this, 'save_options' ) );
	}

	/**
	 * Loads Lightbox options page
	 */
	public function load_page() {
		if ( isset( $_GET['page'] ) && $_GET['page'] == 'Options_portfolio_lightbox_styles' ) {
			if ( isset( $_GET['task'] ) ) {
				if ( $_GET['task'] == 'save' ) {
					do_action( 'portfolio_gallery_save_lightbox_options' );
				}
			} else {
				$this->show_page();
			}
		}
	}

	/**
	 * Shows Lightbox options page
	 */
	public function show_page() {
		require( PORTFOLIO_GALLERY_TEMPLATES_PATH.DIRECTORY_SEPARATOR.'admin'.DIRECTORY_SEPARATOR.'portfolio-gallery-admin-lightbox-options-html.php' );
	}

	/**
	 * Save Lightbox Options
	 */
	public function save_options() {
		if ( !isset( $_REQUEST['portfolio_gallery_nonce_save_lightbox_options'] ) || ! wp_verify_nonce( $_REQUEST['portfolio_gallery_nonce_save_lightbox_options'], 'portfolio_gallery_nonce_save_lightbox_options' ) ) {
			wp_die( 'Security check fail' );
		}
		if ( isset( $_POST['params'] ) ) {
			$params = array_map('sanitize_text_field',( $_POST['params'] ));
			foreach ( $params as $name => $value ) {
				update_option( $name, wp_unslash( $value ) );
			}
			?>
			<div class="updated"><p><strong><?php _e( 'Item Saved' ); ?></strong></p></div>
			<?php
		}
		$this->show_page();
	}
}