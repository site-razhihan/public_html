<?php
/* Including all files */
function sp_wordpress_carousel_free_script() {
	wp_enqueue_script( 'owl-carousel-min-js', SP_WP_CAROUSEL_FREE_URL . 'inc/owl-carousel/owl.carousel.min.js', array( 'jquery' ), 1.0, true );
	wp_enqueue_style( 'owl-carousel-css', SP_WP_CAROUSEL_FREE_URL . 'inc/owl-carousel/owl.carousel.css' );
	wp_enqueue_style( 'owl-transitions-css', SP_WP_CAROUSEL_FREE_URL . 'inc/owl-carousel/owl.transitions.css' );
	wp_enqueue_style( 'owl-theme-css', SP_WP_CAROUSEL_FREE_URL . 'inc/owl-carousel/owl.theme.css' );
	wp_enqueue_style( 'font-awesome-min', SP_WP_CAROUSEL_FREE_URL . 'assets/css/font-awesome.min.css' );
}
add_action( 'wp_enqueue_scripts', 'sp_wordpress_carousel_free_script' );