<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

if ( ! function_exists( 'youtube_or_vimeo_portfolio' ) ) {

	/**
	 * Detecting youtube or video link
	 * 
	 * @param $url
	 *
	 * @return string
	 */
	function portfolio_gallery_youtube_or_vimeo_portfolio ($url ) {
		if ( strpos( $url, 'youtube' ) !== false || strpos( $url, 'youtu' ) !== false ) {
			if ( preg_match( '%(?:youtube(?:-nocookie)?\.com/(?:[^/]+/.+/|(?:v|e(?:mbed)?)/|.*[?&]v=)|youtu\.be/)([^"&?/ ]{11})%i', $url, $match ) ) {
				return 'youtube';
			}
		} elseif ( strpos( $url, 'vimeo' ) !== false ) {
			$explode = explode( "/", $url );
			$end     = end( $explode );
			if ( strlen( $end ) == 7 || strlen( $end ) == 8 || strlen( $end ) == 9 ) {
				return 'vimeo';
			}
		}

		return 'image';
	}

}

	/**
	 * Returns Youtube or Vimeo URL ID
	 *
	 * @param $url
	 *
	 * @return array
	 */
	function portfolio_gallery_get_video_id_from_url( $url ) {
		if ( strpos( $url, 'youtube' ) !== false || strpos( $url, 'youtu' ) !== false ) {
			if ( preg_match( '%(?:youtube(?:-nocookie)?\.com/(?:[^/]+/.+/|(?:v|e(?:mbed)?)/|.*[?&]v=)|youtu\.be/)([^"&?/ ]{11})%i', $url, $match ) ) {
				return array( $match[1], 'youtube' );
			}
		} else {
			$url = untrailingslashit($url);

			$vimeoid = explode( "/", $url );
			$vimeoid = end( $vimeoid );

			return array( $vimeoid, 'vimeo' );
		}
	}

	/**
	 * Return thumbnail img url from url
	 *
	 * @param $image_url
	 *
	 * @return string
	 */
	function portfolio_gallery_get_image_from_video( $image_url ) {
		if ( strpos( $image_url, 'youtube' ) !== false || strpos( $image_url, 'youtu' ) !== false ) {
			$video_thumb     = portfolio_gallery_get_video_id_from_url( $image_url );
			$video_thumb_url = $video_thumb[0];
			$thumburl        = 'http://img.youtube.com/vi/' . $video_thumb_url . '/mqdefault.jpg';
		} else if ( strpos( $image_url, 'vimeo' ) !== false ) {
			$vimeo         = $image_url;
			$vimeo_explode = explode( "/", $vimeo );
			$imgid         = end( $vimeo_explode );
			$hash          = unserialize( wp_remote_fopen( "http://vimeo.com/api/v2/video/" . $imgid . ".php" ) );
			$imgsrc        = $hash[0]['thumbnail_large'];
			$thumburl      = $imgsrc;
		}

		return $thumburl;
	}


