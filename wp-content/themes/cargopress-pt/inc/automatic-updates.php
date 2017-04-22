<?php

/**
 * Trigger automatic theme updates notifications
 */
if ( ! function_exists( 'cargopress_check_for_updates' ) ) {
	function cargopress_check_for_updates() {
		$username = trim( get_theme_mod( 'tf_username', '' ) );
		$api_key  = trim( get_theme_mod( 'tf_api_key', '' ) );

		if ( ! empty( $username ) && ! empty( $api_key ) ) {
			Envato_WP_Theme_Updater::init( $username, $api_key, 'ProteusThemes' );
		}
	}
	add_action( 'after_setup_theme', 'cargopress_check_for_updates' );
}