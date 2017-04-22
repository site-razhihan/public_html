<?php
/**
 * Version 0.0.2
 *
 * This file is just the example, do to require it directly. Instead copy it to your theme and modify by your own needs.
 */

locate_template( 'vendor/primozcigler/wordpress-one-click-demo-install/importer/radium-importer.php', true ); //load admin theme data importer

if ( class_exists( 'Radium_Theme_Importer' ) && ! class_exists( 'CargoPress_Theme_Demo_Data_Importer' ) ) {
	class CargoPress_Theme_Demo_Data_Importer extends Radium_Theme_Importer {

		/**
		 * Holds a copy of the object for easy reference.
		 *
		 * @since 0.0.1
		 *
		 * @var object
		 */
		private static $instance;

		/**
		 * Set the key to be used to store theme options
		 *
		 * @since 0.0.2
		 *
		 * @var object
		 */
		public $theme_option_name       = '__ignored__';
		public $theme_options_file_name = '__ignored__';
		public $widgets_file_name       = 'widgets.json';
		public $content_demo_file_name  = 'content.xml';
		public $content_demo_url        = 'http://artifacts.proteusthemes.com/xml-exports/cargopress-latest.xml';
		public $widget_demo_url         = 'http://artifacts.proteusthemes.com/json-widgets/cargopress.json';

		/**
		 * Holds a copy of the widget settings
		 *
		 * @since 0.0.2
		 *
		 * @var object
		 */
		public $widget_import_results;

		/**
		 * Constructor. Hooks all interactions to initialize the class.
		 *
		 * @since 0.0.1
		 */
		public function __construct() {

			$upload_dir = wp_upload_dir();

			$this->demo_files_path = trailingslashit( $upload_dir['path'] );

			self::$instance = $this;
			parent::__construct();

		}

		/**
		 * Add menus
		 * ... and many more
		 *
		 * @since 0.0.1
		 */
		public function set_demo_menus(){

			// Menus to Import and assign - you can remove or add as many as you want
			$top_menu  = get_term_by( 'name', 'Top Menu', 'nav_menu' );
			$main_menu = get_term_by( 'name', 'Main Menu', 'nav_menu' );

			set_theme_mod( 'nav_menu_locations', array(
					'top-bar-menu' => $top_menu->term_id,
					'main-menu'    => $main_menu->term_id,
				)
			);

			// Set options for front page and blog page
			$front_page_id = get_page_by_title( 'Home' )->ID;
			$blog_page_id  = get_page_by_title( 'News' )->ID;

			update_option( 'show_on_front', 'page' );
			update_option( 'page_on_front', $front_page_id );
			update_option( 'page_for_posts', $blog_page_id );

			// Set options for Breadcrumbs NavXT
			$breadcrumbs_settings = array( 'hseparator' => '' );
			$shop_page = get_page_by_title( 'Shop' );
			if ( ! is_null( $shop_page ) ) {
				$breadcrumbs_settings['apost_product_root'] = $shop_page->ID;
			}
			add_option( 'bcn_options', $breadcrumbs_settings );

			// Set logo in customizer
			set_theme_mod( 'logo_img', get_template_directory_uri() . '/assets/images/logo.png' );
			set_theme_mod( 'logo2x_img', get_template_directory_uri() . '/assets/images/logo@2x.png' );
		}

		/**
		 * Ignore the theme options import
		 */
		public function set_demo_theme_options( $file ) {}
	}

	new CargoPress_Theme_Demo_Data_Importer;
}