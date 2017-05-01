<?php
/*
Plugin Name: WordPress Carousel
Plugin URI: https://shapedplugin.com/plugin/wordpress-carousel-pro
Description: This plugin will enable carousel features in your WordPress site.
Author: ShapedPlugin
Author URI: http://shapedplugin.com
Version: 1.4.2
*/


/**
 * Directory Constant
 */
define( 'SP_WP_CAROUSEL_FREE_URL', plugins_url( '/' ) . plugin_basename( dirname( __FILE__ ) ) . '/' );
define( 'SP_WP_CAROUSEL_FREE_DIR', plugin_dir_path( __FILE__ ) );

/**
 * Include files
 */
require_once( SP_WP_CAROUSEL_FREE_DIR . 'inc/functions.php' );

/* Plugin Action Links */
function sp_wp_carousel_free_action_links( $links ) {
	$links[] = '<a target="_blank" href="https://shapedplugin.com/plugin/wordpress-carousel-pro" style="color: red; font-weight: 600;">Go
Pro!</a>';

	return $links;
}
add_filter( 'plugin_action_links_' . plugin_basename( __FILE__ ), 'sp_wp_carousel_free_action_links' );

// Redirect after active
function sp_wp_carousel_free_active_redirect( $plugin ) {
	if ( $plugin == plugin_basename( __FILE__ ) ) {
		exit( wp_redirect( admin_url( 'options-general.php' ) ) );
	}
}
add_action( 'activated_plugin', 'sp_wp_carousel_free_active_redirect' );


function add_wcffree_options_framwrork() {
	add_options_page( 'WP Carousel Free Help', 'WPC Pro info', 'manage_options', 'wcf-settings', 'wcf_options_framwrork' );
}
add_action( 'admin_menu', 'add_wcffree_options_framwrork' );

// Default options values
$wcf_options = array(
	'cursor_color'   => '#666',
	'cursor_width'   => '10px',
	'border_radius'  => '0px',
	'cursor_border'  => '0px solid #000',
	'scroll_speed'   => '60',
	'auto_hide_mode' => 'true'
);

if ( is_admin() ) : // Load only if we are viewing an admin page

	function wcf_register_settings() {
		// Register settings and call sanitation functions
		register_setting( 'wcf_p_options', 'wcf_options', 'wcf_validate_options' );
	}
	add_action( 'admin_init', 'wcf_register_settings' );


// Store layouts views in array
	$auto_hide_mode = array(
		'auto_hide_yes' => array(
			'value' => 'true',
			'label' => 'Activate auto hide'
		),
		'auto_hide_no'  => array(
			'value' => 'false',
			'label' => 'Deactivate auto hide'
		),
	);


// Function to generate options page
	function wcf_options_framwrork() {
		global $wcf_options, $auto_hide_mode;

		if ( ! isset( $_REQUEST['updated'] ) ) {
			$_REQUEST['updated'] = false;
		} // This checks whether the form has just been submitted. ?>


        <div class="wrap">
            <style type="text/css">
                .welcome-panel-column p {
                    padding-right: 20px
                }

                .installing_message h2 {
                    background: none repeat scroll 0 0 green;
                    color: #fff;
                    line-height: 30px;
                    padding: 20px;
                    text-align: center;
                }

                .wcp-purchase-btn-area {
                    clear: both;
                    text-align: center;
                    padding-top: 60px;
                    padding-bottom: 30px;
                }

                .welcome-panel-column img {
                    width: 90%;
                }
            </style>
            <div class="installing_message">
                <h2>Thank you for installing WordPress Carousel Free</h2>
            </div>


            <div class="welcome-panel" id="welcome-panel">

                <div class="welcome-panel-content">
                    <h2>Want some cool features of this plugin?</h2>
                    <p class="about-description">We've added 100+ extra features in our premium version of this plugin.
                        Let see some amazing features.</p>
                    <br>
                    <div class="welcome-panel-column-container">
                        <div class="welcome-panel-column">
                            <h3>Link to carousel items</h3>
                            <p>You can link to each carousel item easily. You can add link to each carousel in media
                                manager. Just add your link there, your carousel items will lined to that URL.</p>
                            <a href="https://shapedplugin.com/demo/wordpress-carousel-pro/#logo-caruosel"
                               target="_blank" class="button button-primary">See Link to Carousel Items Demo</a>
                        </div>

                        <div class="welcome-panel-column">
                            <h3>Items customization</h3>
                            <p>You can customize how many carousel item will show in your carousel. You just have to add
                                an attribute in carousel shortcode wherever you want.</p>
                            <a href="https://shapedplugin.com/demo/wordpress-carousel-pro/#items-customization"
                               target="_blank" class="button button-primary">See Item Customization Demo</a>
                        </div>

                        <div class="welcome-panel-column welcome-panel-last">
                            <h3>One page Carousel Slider</h3>
                            <p>You are able to build one item carousel slider. Its like image slider. You can add slider
                                title & description too. You can change slider colors with your dream color!</p>
                            <a href="https://shapedplugin.com/demo/wordpress-carousel-pro/#one-pages-arousel-slider"
                               target="_blank" class="button button-primary">See One page Carousel Slider Demo</a>
                        </div>
                    </div>


                    <div class="welcome-panel-column-container">

                        <div class="welcome-panel-column">
                            <h3>Slider with Different Effects</h3>
                            <p>Different types of slider effect can make your slider unique & stunning to look. You are
                                able to set your desired effect easily using attribute in shortcodes.</p>
                            <a href="https://shapedplugin.com/demo/wordpress-carousel-pro/#one-pages-arousel-slider"
                               target="_blank" class="button button-primary">See Slider with Different Effects Demo</a>
                        </div>

                        <div class="welcome-panel-column">
                            <h3>Unlimited Colors</h3>
                            <p>Premium version of this plugin supports unlimited colors! You can add any color that
                                match your current theme. You can use color name or color HEX code.</p>
                            <a href="https://shapedplugin.com/demo/wordpress-carousel-pro/#logo-caruosel"
                               target="_blank" class="button button-primary">See Unlimited Colors Demo</a>
                        </div>

                        <div class="welcome-panel-column welcome-panel-last">
                            <h3>Post Carousel Slider with Excerpt</h3>
                            <p>You can create post excerpt carousel slider as well. This will show featured image, some
                                amount of post content & a readmore button. This is cool for large type of post! </p>
                            <a href="https://shapedplugin.com/demo/wordpress-carousel-pro/#post-carousel"
                               target="_blank" class="button button-primary">See Post Carousel Slider with Excerpt
                                Demo</a>
                        </div>

                    </div>

                    <div class="welcome-panel-column-container">

                        <div class="welcome-panel-column">
                            <h3>Post slider without Readmore</h3>
                            <p>You can also create post carousel slider without readmore as well. This will show
                                featured image, text of your post without a readmore button. This is cool for small
                                post!</p>
                            <a href="https://shapedplugin.com/demo/wordpress-carousel-pro/#" target="_blank"
                               class="button button-primary">See Post slider without Readmore Demo</a>
                        </div>

                        <div class="welcome-panel-column">
                            <h3>Custom Post Excerpt Slider</h3>
                            <p>You can build excerpt slider form different page or custom post too. Just you have to
                                define post type in carousel shortcode. Its super easy to use!</p>
                            <a href="https://shapedplugin.com/demo/wordpress-carousel-pro/#Woocommerce" target="_blank"
                               class="button button-primary">See Custom Post Excerpt Slider Demo</a>
                        </div>

                        <div class="welcome-panel-column welcome-panel-last">
                            <h3>Testimonial Slider with different Styles</h3>
                            <p>There are many styles of clients testimonials. You can show your client's testimonials in
                                your site as well. Hence you need define attribute in carousel shortcode.</p>
                            <a href="https://shapedplugin.com/demo/wordpress-carousel-pro/#testimonial" target="_blank"
                               class="button button-primary">See Testimonial Slider Demo</a>
                        </div>

                    </div>

                    <div class="welcome-panel-column-container">

                        <div class="welcome-panel-column">
                            <h3>Carousel from WooCommerce Product</h3>
                            <p>Using this premium version plugin, you can add woocommerce product slider too. This will
                                show product image, product description & read more button.</p>
                            <a href="https://shapedplugin.com/demo/wordpress-carousel-pro/#Woocommerce" target="_blank"
                               class="button button-primary">See Carousel from WooCommerce Product Demo</a>
                        </div>

                        <div class="welcome-panel-column">
                            <h3>Carousel from WooCommerce Product Category</h3>
                            <p>This is a fantastic features for premium version, you can show woocommerce product slider
                                from category with product image, t description & read more button.</p>
                            <a href="https://shapedplugin.com/demo/wordpress-carousel-pro/#Woocommerce" target="_blank"
                               class="button button-primary">See Carousel WooCom Product Category Demo</a>
                        </div>

                        <div class="welcome-panel-column welcome-panel-last">
                            <h3>Carousel with Lightbox</h3>
                            <p>We've added lightbox features in premium version of this plugin. You only have to turn on
                                lightbox via shortcode. Its fully responsive and super easy to use!</p>
                            <a href="https://shapedplugin.com/demo/wordpress-carousel-pro/#lightbox" target="_blank"
                               class="button button-primary">See Carousel with Lightbox Demo</a>
                        </div>

                    </div>
                    <br/><br/><br>

                    <div class="wcp-purchase-btn-area">
                        <h3>Cool! you are ready to enable those features in only $29. </h3>
                        <p class="about-description">Watch demo before purchase. I know you must like the demos. Thanks
                            for reading features. Good luck with creating carousels in your WordPress site.</p>

                        <a href="https://shapedplugin.com/plugin/wordpress-carousel-pro" class="button button-primary
			button-hero">Buy Premium Version Now. Only $29</a>
                    </div>

                    <br/><br/>
                </div>
            </div>
        </div>

		<?php
	}

endif;  // EndIf is_admin()


register_activation_hook( __FILE__, 'sp_wp_carousel_free_plugin_activate' );
add_action( 'admin_init', 'sp_wp_carousel_free_plugin_redirect' );

function sp_wp_carousel_free_plugin_activate() {
	add_option( 'sp_wp_carousel_free_do_activation_redirect', true );
}

function sp_wp_carousel_free_plugin_redirect() {
	if ( get_option( 'sp_wp_carousel_free_do_activation_redirect', false ) ) {
		delete_option( 'sp_wp_carousel_free_do_activation_redirect' );
		if ( ! isset( $_GET['activate-multi'] ) ) {
			wp_redirect( "options-general.php?page=wcf-settings" );
		}
	}
}