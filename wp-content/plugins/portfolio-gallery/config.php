<?php
/**
 * Plugin configurations
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

$GLOBALS['hugeit_portfolio_aliases'] = array(
	'Portfolio_Gallery_Install'          => 'includes/class-portfolio-gallery-install',
	'Portfolio_Gallery_Template_Loader'  => 'includes/class-portfolio-gallery-template-loader',
	'Portfolio_Gallery_Ajax'             => 'includes/class-portfolio-gallery-ajax',
	'Portfolio_Gallery_Widgets'          => 'includes/class-portfolio-gallery-widgets',
	'Portfolio_Gallery_Widget'           => 'includes/class-portfolio-gallery-huge-it-portfolio-widget',
	'Portfolio_Gallery_Shortcode'        => 'includes/class-portfolio-gallery-shortcode',
	'Portfolio_Gallery_Frontend_Scripts' => 'includes/class-portfolio-gallery-frontend-scripts',
	'Portfolio_Gallery_Admin'            => 'includes/admin/class-portfolio-gallery-admin',
	'Portfolio_Gallery_Admin_Assets'     => 'includes/admin/class-portfolio-gallery-admin-assets',
	'Portfolio_Gallery_General_Options'  => 'includes/admin/class-portfolio-gallery-general-options',
	'Portfolio_Gallery_Portfolios'       => 'includes/admin/class-portfolio-gallery-portfolios',
	'Portfolio_Gallery_Lightbox_Options' => 'includes/admin/class-portfolio-gallery-lightbox-options',
	'Portfolio_Gallery_Featured_Plugins' => 'includes/admin/class-portfolio-gallery-featured-plugins',
	'Portfolio_Gallery_Licensing'        => 'includes/admin/class-portfolio-gallery-licensing'
);

/**
 * @param $classname
 *
 * @throws Exception
 */
function portfolio_gallery_autoload( $classname ) {
	global $hugeit_portfolio_aliases;

	/**
	 * We do not touch classes that are not related to us
	 */
	if ( ! strstr( $classname, 'Portfolio_Gallery_' ) ) {
		return;
	}

	if ( ! key_exists( $classname, $hugeit_portfolio_aliases ) ) {
		throw new Exception( 'trying to load "' . $classname . '" class that is not registered in config file.' );
	}

	$path = Portfolio_Gallery()->plugin_path() . '/' . $hugeit_portfolio_aliases[ $classname ] . '.php';

	if ( ! file_exists( $path ) ) {

		throw new Exception( 'the given path for class "' . $classname . '" is wrong, trying to load from ' . $path );

	}

	require_once $path;

	if ( ! interface_exists( $classname ) && ! class_exists( $classname ) ) {

		throw new Exception( 'The class "' . $classname . '" is not declared in "' . $path . '" file.' );

	}
}

spl_autoload_register( 'portfolio_gallery_autoload' );