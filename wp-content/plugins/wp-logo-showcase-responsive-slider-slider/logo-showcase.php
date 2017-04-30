<?php
/**
 * Plugin Name: WP Logo Showcase Responsive Slider
 * Plugin URI: http://www.wponlinesupport.com/
 * Description: Easy to add and display Logo Showcase Responsive Slider on your website. 
 * Author: WP Online Support 
 * Text Domain: wp-logo-showcase-responsive-slider-slider
 * Domain Path: /languages/
 * Version: 1.2.6
 * Author URI: http://www.wponlinesupport.com/
 *
 * @package WordPress
 * @author SP Technolab
 */

if( !defined( 'WPLS_VERSION' ) ) {
    define( 'WPLS_VERSION', '1.2.6' ); // Version of plugin
}
if( !defined( 'WPLS_DIR' ) ) {
    define( 'WPLS_DIR', dirname( __FILE__ ) ); // Plugin dir
}
if( !defined( 'WPLS_URL' ) ) {
    define( 'WPLS_URL', plugin_dir_url( __FILE__ ) ); // Plugin url
}
if( !defined( 'WPLS_POST_TYPE' ) ) {
    define( 'WPLS_POST_TYPE', 'logoshowcase' ); // Plugin Post Type
}

/**
 * Activation Hook
 * 
 * Register plugin activation hook.
 * 
 * @package WP Logo Showcase Responsive Slider
 * @since 1.0.0
 */
register_activation_hook( __FILE__, 'wpls_install' );

/**
 * Deactivation Hook
 * 
 * Register plugin deactivation hook.
 * 
 * @package WP Logo Showcase Responsive Slider
 * @since 1.0.0
 */
register_deactivation_hook( __FILE__, 'wpls_uninstall');

/**
 * Plugin Activation Function
 * Does the initial setup, sets the default values for the plugin options
 * 
 * @package WP Logo Showcase Responsive Slider
 * @since 1.0.0
 */
function wpls_install() {

	// Register post type function
	wplss_logo_showcase_post_types();
	wplss_logo_showcase_taxonomies();

	// IMP need to flush rules for custom registered post type
    flush_rewrite_rules();

    // Deactivate free version
    if( is_plugin_active('wp-logo-showcase-responsive-slider-pro/logo-showcase.php') ){
        add_action('update_option_active_plugins', 'wpls_deactivate_free_version');
    }
}

/**
 * Plugin Deactivation Function
 * Delete  plugin options
 * 
 * @package WP Logo Showcase Responsive Slider
 * @since 1.0.0
 */
function wpls_uninstall() {
	
	// IMP need to flush rules for custom registered post type
    flush_rewrite_rules();
}

/**
 * Deactivate free plugin
 * 
 * @package WP Logo Showcase Responsive Slider
 * @since 1.2.4
 */
function wpls_deactivate_free_version() {
    deactivate_plugins('wp-logo-showcase-responsive-slider-pro/logo-showcase.php', true);
}

/**
 * Function to display admin notice of activated plugin.
 * 
 * @package WP Logo Showcase Responsive Slider
 * @since 1.2.4
 */
function wpls_admin_notice() {
    
    $dir = ABSPATH . 'wp-content/plugins/wp-logo-showcase-responsive-slider-pro/logo-showcase.php';
    
    // If Free plugin is active and PRO plugin exist
    if( is_plugin_active( 'wp-logo-showcase-responsive-slider-slider/logo-showcase.php' ) && file_exists($dir)) {
        
        global $pagenow;
        
        if ( $pagenow == 'plugins.php' && current_user_can( 'install_plugins' ) ) {
            echo '<div id="message" class="updated notice is-dismissible"><p><strong>Thank you for activating WP Logo Showcase Responsive Slider</strong>.<br /> It looks like you had PRO version <strong>(<em>WP Logo Showcase Responsive Slider Pro</em>)</strong> of this plugin activated. To avoid conflicts the extra version has been deactivated and we recommend you delete it. </p></div>';
        }
    }
}

// Action to display notice
add_action( 'admin_notices', 'wpls_admin_notice');

/**
 * Load Text Domain
 * This gets the plugin ready for translation
 * 
 * @package WP Logo Showcase Responsive Slider
 * @since 1.0.0
 */
function wpls_load_textdomain() {
	load_plugin_textdomain( 'wp-logo-showcase-responsive-slider-slider', false, dirname( plugin_basename(__FILE__) ) . '/languages/' );
}
add_action('plugins_loaded', 'wpls_load_textdomain');

/**
 * Function to get plugin image sizes array
 * 
 * @package WP Logo Showcase Responsive Slider
 * @since 1.2.1
 */
function wplss_get_unique() {
	static $unique = 0;
	$unique++;
	
	return $unique;
}

add_action( 'wp_enqueue_scripts','wplss_logoshowcase_style_css' );
function wplss_logoshowcase_style_css() {
	
	// Registring slick slider script
	if( !wp_script_is( 'wpos-slick-jquery', 'registered' ) ) {
		wp_register_script( 'wpos-slick-jquery', WPLS_URL.'assets/js/slick.min.js', array('jquery'), WPLS_VERSION, true );		
	}
	
	wp_enqueue_style( 'logo_showcase_slick_style',  WPLS_URL . 'assets/css/slick.css', array(), WPLS_VERSION);
	wp_enqueue_style( 'logo_showcase_style',  WPLS_URL . 'assets/css/logo-showcase.css', array(), WPLS_VERSION);
}
require_once( 'includes/logo-showcase-functions.php' );

// Load admin files
if ( is_admin() || ( defined( 'WP_CLI' ) && WP_CLI ) ) {
	require_once( WPLS_DIR . '/includes/admin/wpls-how-it-work.php' );	
}