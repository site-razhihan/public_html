<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}
/**
 * Class Portfolio_Gallery_Widgets
 */
class Portfolio_Gallery_Widgets{

	/**
	 * Register Huge-IT Portfolio Gallery Widget
	 */
	public static function init(){
		register_widget( 'Portfolio_Gallery_Widget' );
	}
}
