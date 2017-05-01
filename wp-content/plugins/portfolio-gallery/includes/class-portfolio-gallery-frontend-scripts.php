<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

/**
 * Class Portfolio_Gallery
 */
class Portfolio_Gallery_Frontend_Scripts {

	/**
	 * Portfolio_Gallery_Frontend_Scripts constructor.
	 */
	public function __construct() {
		add_action( 'portfolio_gallery_shortcode_scripts', array( $this, 'frontend_scripts' ), 10, 2 );
		add_action( 'portfolio_gallery_shortcode_scripts', array( $this, 'frontend_styles' ), 10, 2 );
		add_action( 'portfolio_gallery_localize_scripts', array( $this, 'localize_scripts' ), 10, 1 );
	}

	/**
	 * Enqueue styles
	 */
	public function frontend_styles( $id, $portfolio_view ) {
		$general_options = portfolio_gallery_get_default_general_options();

		wp_register_style( 'portfolio-all-css', plugins_url( '../assets/style/portfolio-all.css', __FILE__ ) );
		wp_enqueue_style( 'portfolio-all-css' );

		wp_register_style( 'style2-os-css', plugins_url( '../assets/style/style2-os.css', __FILE__ ) );
		wp_enqueue_style( 'style2-os-css' );

		if ( get_option('portfolio_gallery_lightbox_type') == 'old_type' ) {
			wp_register_style( 'lightbox-css', plugins_url( '../assets/style/lightbox.css', __FILE__ ) );
			wp_enqueue_style( 'lightbox-css' );

			wp_register_style( 'portfolio_gallery_colorbox_css', untrailingslashit( Portfolio_Gallery()->plugin_url() ) . '/assets/style/colorbox-' . $general_options['portfolio_gallery_light_box_style'] . '.css' );
			wp_enqueue_style( 'portfolio_gallery_colorbox_css' );
		} elseif ( get_option('portfolio_gallery_lightbox_type') == 'new_type' ) {
			wp_register_style( 'portfolio_gallery_resp_lightbox_css', untrailingslashit( Portfolio_Gallery()->plugin_url() ) . '/assets/style/responsive_lightbox.css' );
			wp_enqueue_style( 'portfolio_gallery_resp_lightbox_css' );
		}

		wp_enqueue_style( 'portfolio_gallery_colorbox_css', untrailingslashit( Portfolio_Gallery()->plugin_url() ) . '/assets/style/colorbox-' . $general_options['portfolio_gallery_light_box_style'] . '.css' );

		if ( $portfolio_view == '5' ) {
			wp_register_style( 'animate-css', plugins_url( '../assets/style/animate.min.css', __FILE__ ) );
			wp_enqueue_style( 'animate-css' );
			wp_register_style( 'liquid-slider-css', plugins_url( '../assets/style/liquid-slider.css', __FILE__ ) );
			wp_enqueue_style( 'liquid-slider-css' );
		}
		if ( $portfolio_view == '7' ) {
			wp_register_style( 'elastic-grid-css', plugins_url( '../assets/style/elastic_grid.css', __FILE__ ) );
			wp_enqueue_style( 'elastic-grid-css' );
		}
	}

	/**
	 * Enqueue scripts
	 */
	public function frontend_scripts( $id, $portfolio_view ) {
		$view_slug       = portfolio_gallery_get_view_slag_by_id( $id );
		$general_options = portfolio_gallery_get_default_general_options();

		if ( ! wp_script_is( 'jquery' ) ) {
			wp_enqueue_script( 'jquery' );
		}
		if ( get_option('portfolio_gallery_lightbox_type') == 'old_type' ) {
			wp_register_script( 'jquery.pcolorbox-js', plugins_url( '../assets/js/jquery.colorbox.js', __FILE__ ), array( 'jquery' ), '1.0.0', true );
			wp_enqueue_script( 'jquery.pcolorbox-js' );
		} elseif ( get_option('portfolio_gallery_lightbox_type') == 'new_type' ) {
            if ($view_slug !== 'faq') {
			wp_register_script( 'portfolio-resp-lightbox-js', plugins_url( '../assets/js/lightbox.js', __FILE__ ), array( 'jquery' ), '1.0.0', true );
			wp_enqueue_script( 'portfolio-resp-lightbox-js' );

			wp_register_script( 'mousewheel-min-js', plugins_url( '../assets/js/mousewheel.min.js', __FILE__ ), array( 'jquery' ), '1.0.0', true );
			wp_enqueue_script( 'mousewheel-min-js' );

			wp_register_script( 'froogaloop2-min-js', plugins_url( '../assets/js/froogaloop2.min.js', __FILE__ ), array( 'jquery' ), '1.0.0', true );
			wp_enqueue_script( 'froogaloop2-min-js' );
		}}

		wp_register_script( 'hugeitmicro-min-js', plugins_url( '../assets/js/jquery.hugeitmicro.min.js', __FILE__ ), array( 'jquery' ), '1.0.0', true );
		wp_enqueue_script( 'hugeitmicro-min-js' );

		wp_register_script( 'front-end-js-' . $view_slug, plugins_url( '../assets/js/view-' . $view_slug . '.js', __FILE__ ), array( 'jquery' ), '1.0.0', true );
		wp_enqueue_script( 'front-end-js-' . $view_slug );

		wp_register_script( 'portfolio-custom-js', plugins_url( '../assets/js/custom.js', __FILE__ ), array( 'jquery' ), '1.0.0', true );
		wp_enqueue_script( 'portfolio-custom-js' );

		if ( $portfolio_view == '5' ) {
			wp_register_script( 'easing-js', plugins_url( '../assets/js/jquery.easing.min.js', __FILE__ ), array( 'jquery' ), '1.3.0', true );
			wp_enqueue_script( 'easing-js' );
			wp_register_script( 'touch_swipe-js', plugins_url( '../assets/js/jquery.touchSwipe.min.js', __FILE__ ), array( 'jquery' ), '1.0.0', true );
			wp_enqueue_script( 'touch_swipe-js' );
			wp_register_script( 'liquid-slider-js', plugins_url( '../assets/js/jquery.liquid-slider.min.js', __FILE__ ), array( 'jquery' ), '1.0.0', true );
			wp_enqueue_script( 'liquid-slider-js' );
		}

		if ( $portfolio_view == '7' ) {
			wp_register_script( 'modernizr.custom-js', plugins_url( '../assets/js/modernizr.custom.js', __FILE__ ), array( 'jquery' ), '1.0.0', false );
			wp_enqueue_script( 'modernizr.custom-js' );
			wp_register_script( 'classie-js', plugins_url( '../assets/js/classie.js', __FILE__ ), array( 'jquery' ), '1.3.0', false );
			wp_enqueue_script( 'classie-js' );
			wp_register_script( 'jquery.elastislide-js', plugins_url( '../assets/js/jquery.elastislide.js', __FILE__ ), array( 'jquery' ), '1.0.0', false );
			wp_enqueue_script( 'jquery.elastislide-js' );
			wp_register_script( 'jquery.hoverdir-js', plugins_url( '../assets/js/jquery.hoverdir.js', __FILE__ ), array( 'jquery' ), '1.0.0', false );
			wp_enqueue_script( 'jquery.hoverdir-js' );
			wp_register_script( 'portfolio-gallery-elastic_grid-js', plugins_url( '../assets/js/elastic_grid.js', __FILE__ ), array( 'jquery' ), '1.3.0', false );
			wp_enqueue_script( 'portfolio-gallery-elastic_grid-js' );
		}
	}

	public function localize_scripts( $id ) {
		$portfolio_param = portfolio_gallery_get_default_general_options();
		$view_slug       = portfolio_gallery_get_view_slag_by_id( $id );
		global $wpdb;
		$query         = $wpdb->prepare( "SELECT * FROM " . $wpdb->prefix . "huge_itportfolio_images  WHERE portfolio_id = '%d' ORDER BY ordering ASC", $id );
		$images[ $id ] = $wpdb->get_results( $query );

		$lightbox = array(
			'lightbox_transition'     => $portfolio_param['portfolio_gallery_light_box_transition'],
			'lightbox_speed'          => $portfolio_param['portfolio_gallery_light_box_speed'],
			'lightbox_fadeOut'        => $portfolio_param['portfolio_gallery_light_box_fadeout'],
			'lightbox_title'          => $portfolio_param['portfolio_gallery_light_box_title'],
			'lightbox_scalePhotos'    => $portfolio_param['portfolio_gallery_light_box_scalephotos'],
			'lightbox_scrolling'      => $portfolio_param['portfolio_gallery_light_box_scrolling'],
			'lightbox_opacity'        => ( $portfolio_param['portfolio_gallery_light_box_opacity'] / 100 ) + 0.001,
			'lightbox_open'           => $portfolio_param['portfolio_gallery_light_box_open'],
			'lightbox_returnFocus'    => $portfolio_param['portfolio_gallery_light_box_returnfocus'],
			'lightbox_trapFocus'      => $portfolio_param['portfolio_gallery_light_box_trapfocus'],
			'lightbox_fastIframe'     => $portfolio_param['portfolio_gallery_light_box_fastiframe'],
			'lightbox_preloading'     => $portfolio_param['portfolio_gallery_light_box_preloading'],
			'lightbox_overlayClose'   => $portfolio_param['portfolio_gallery_light_box_overlayclose'],
			'lightbox_escKey'         => $portfolio_param['portfolio_gallery_light_box_esckey'],
			'lightbox_arrowKey'       => $portfolio_param['portfolio_gallery_light_box_arrowkey'],
			'lightbox_loop'           => $portfolio_param['portfolio_gallery_light_box_loop'],
			'lightbox_closeButton'    => $portfolio_param['portfolio_gallery_light_box_closebutton'],
			'lightbox_previous'       => $portfolio_param['portfolio_gallery_light_box_previous'],
			'lightbox_next'           => $portfolio_param['portfolio_gallery_light_box_next'],
			'lightbox_close'          => $portfolio_param['portfolio_gallery_light_box_close'],
			'lightbox_html'           => $portfolio_param['portfolio_gallery_light_box_html'],
			'lightbox_photo'          => $portfolio_param['portfolio_gallery_light_box_photo'],
			'lightbox_innerWidth'     => $portfolio_param['portfolio_gallery_light_box_innerwidth'],
			'lightbox_innerHeight'    => $portfolio_param['portfolio_gallery_light_box_innerheight'],
			'lightbox_initialWidth'   => $portfolio_param['portfolio_gallery_light_box_initialwidth'],
			'lightbox_initialHeight'  => $portfolio_param['portfolio_gallery_light_box_initialheight'],
			'lightbox_slideshow'      => $portfolio_param['portfolio_gallery_light_box_slideshow'],
			'lightbox_slideshowSpeed' => $portfolio_param['portfolio_gallery_light_box_slideshowspeed'],
			'lightbox_slideshowAuto'  => $portfolio_param['portfolio_gallery_light_box_slideshowauto'],
			'lightbox_slideshowStart' => $portfolio_param['portfolio_gallery_light_box_slideshowstart'],
			'lightbox_slideshowStop'  => $portfolio_param['portfolio_gallery_light_box_slideshowstop'],
			'lightbox_fixed'          => $portfolio_param['portfolio_gallery_light_box_fixed'],
			'lightbox_reposition'     => $portfolio_param['portfolio_gallery_light_box_reposition'],
			'lightbox_retinaImage'    => $portfolio_param['portfolio_gallery_light_box_retinaimage'],
			'lightbox_retinaUrl'      => $portfolio_param['portfolio_gallery_light_box_retinaurl'],
			'lightbox_retinaSuffix'   => $portfolio_param['portfolio_gallery_light_box_retinasuffix'],
			'lightbox_maxWidth'       => $portfolio_param['portfolio_gallery_light_box_maxwidth'],
			'lightbox_maxHeight'      => $portfolio_param['portfolio_gallery_light_box_maxheight'],
			'lightbox_sizeFix'        => $portfolio_param['portfolio_gallery_light_box_size_fix']
		);

		if ( $portfolio_param['portfolio_gallery_light_box_size_fix'] == 'false' ) {
			$lightbox['lightbox_width'] = '';
		} else {
			$lightbox['lightbox_width'] = $portfolio_param['portfolio_gallery_light_box_width'];
		}

		if ( $portfolio_param['portfolio_gallery_light_box_size_fix'] == 'false' ) {
			$lightbox['lightbox_height'] = '';
		} else {
			$lightbox['lightbox_height'] = $portfolio_param['portfolio_gallery_light_box_height'];
		}

		$pos = $portfolio_param['portfolio_gallery_slider_title_position'];
		switch ( $pos ) {
			case 1:
				$lightbox['lightbox_top']    = '10%';
				$lightbox['lightbox_bottom'] = 'false';
				$lightbox['lightbox_left']   = '10%';
				$lightbox['lightbox_right']  = 'false';
				break;
			case 2:
				$lightbox['lightbox_top']    = '10%';
				$lightbox['lightbox_bottom'] = 'false';
				$lightbox['lightbox_left']   = 'false';
				$lightbox['lightbox_right']  = 'false';
				break;
			case 3:
				$lightbox['lightbox_top']    = '10%';
				$lightbox['lightbox_bottom'] = 'false';
				$lightbox['lightbox_left']   = 'false';
				$lightbox['lightbox_right']  = '10%';
				break;
			case 4:
				$lightbox['lightbox_top']    = 'false';
				$lightbox['lightbox_bottom'] = 'false';
				$lightbox['lightbox_left']   = '10%';
				$lightbox['lightbox_right']  = 'false';
				break;
			case 5:
				$lightbox['lightbox_top']    = 'false';
				$lightbox['lightbox_bottom'] = 'false';
				$lightbox['lightbox_left']   = 'false';
				$lightbox['lightbox_right']  = 'false';
				break;
			case 6:
				$lightbox['lightbox_top']    = 'false';
				$lightbox['lightbox_bottom'] = 'false';
				$lightbox['lightbox_left']   = 'false';
				$lightbox['lightbox_right']  = '10%';
				break;
			case 7:
				$lightbox['lightbox_top']    = 'false';
				$lightbox['lightbox_bottom'] = '10%';
				$lightbox['lightbox_left']   = '10%';
				$lightbox['lightbox_right']  = 'false';
				break;
			case 8:
				$lightbox['lightbox_top']    = 'false';
				$lightbox['lightbox_bottom'] = '10%';
				$lightbox['lightbox_left']   = 'false';
				$lightbox['lightbox_right']  = 'false';
				break;
			case 9:
				$lightbox['lightbox_top']    = 'false';
				$lightbox['lightbox_bottom'] = '10%';
				$lightbox['lightbox_left']   = 'false';
				$lightbox['lightbox_right']  = '10%';
				break;
		}

		$images_obj = array();

		foreach ( $images[ $id ] as $image ) {
			$thumbnails  = $image->image_url;
			$thumbnails  = substr( $thumbnails, 0, - 1 );
			$thumbnails  = explode( ';', $thumbnails );
			$thumbs      = array();
			$larg_images = array();
			foreach ( $thumbnails as $key => $thumbnail ) {
				if ( portfolio_gallery_youtube_or_vimeo_portfolio( $thumbnail ) == 'image' ) {
					if ( $key == 0 ) {
						$smal_img = esc_url( portfolio_gallery_get_image_by_sizes_and_src( $thumbnail, 'medium', false ) );
					} else {
						$smal_img = esc_url( portfolio_gallery_get_image_by_sizes_and_src( $thumbnail, array(), true ) );
					}
					$big_img = $thumbnail;
				} elseif ( portfolio_gallery_youtube_or_vimeo_portfolio( $thumbnail ) == 'youtube' ) {
					$videourl = portfolio_gallery_get_video_id_from_url( $thumbnail );
					$smal_img = esc_url( "//img.youtube.com/vi/" . $videourl[0] . "/mqdefault.jpg" );
					$videourl = portfolio_gallery_get_video_id_from_url( $thumbnail );
					$big_img  = "https://www.youtube.com/embed/" . $videourl[0];
				} elseif ( portfolio_gallery_youtube_or_vimeo_portfolio( $thumbnail ) == 'vimeo' ) {
					$videourl = portfolio_gallery_get_video_id_from_url( $thumbnail );
					$hash     = unserialize( wp_remote_fopen( "http://vimeo.com/api/v2/video/" . $videourl[0] . ".php" ) );
					$smal_img = esc_url( $hash[0]['thumbnail_large'] );
					$videourl = portfolio_gallery_get_video_id_from_url( $thumbnail );
					$big_img  = "http://player.vimeo.com/video/" . $videourl[0];
				}
				array_push( $thumbs, $smal_img );
				array_push( $larg_images, $big_img );
			}
			$categories = str_replace( " ", "_", $image->category );
			$categories = explode( ',', $categories );
			if ( $image->link_target == 'on' ) {
				$target = '_blank';
			} else {
				$target = '';
			}
			$images_parent_obj = array(
				'title'       => $image->name,
				'description' => $image->description,
				'thumbnail'   => $thumbs,
				'large'       => $larg_images,
				'button_list' => array(
					array(
						'title'      => $portfolio_param['portfolio_gallery_ht_view7_expand_block_button_text'],
						'url'        => $image->sl_url,
						'new_window' => $target
					),
				),
				'tags'        => $categories
			);
			array_push( $images_obj, $images_parent_obj );
		}

		$lightbox_options = array(
			'portfolio_gallery_lightbox_slideAnimationType'            => $portfolio_param['portfolio_gallery_lightbox_slideAnimationType'],
			'portfolio_gallery_lightbox_lightboxView'                  => get_option('portfolio_gallery_lightbox_lightboxView'),
			'portfolio_gallery_lightbox_speed_new'                     => get_option('portfolio_gallery_lightbox_speed_new'),
			'portfolio_gallery_lightbox_width_new'                     => $portfolio_param['portfolio_gallery_lightbox_width_new'],
			'portfolio_gallery_lightbox_height_new'                    => $portfolio_param['portfolio_gallery_lightbox_height_new'],
			'portfolio_gallery_lightbox_videoMaxWidth'                 => $portfolio_param['portfolio_gallery_lightbox_videoMaxWidth'],
			'portfolio_gallery_lightbox_overlayDuration'               => $portfolio_param['portfolio_gallery_lightbox_overlayDuration'],
			'portfolio_gallery_lightbox_overlayClose_new'              => get_option('portfolio_gallery_lightbox_overlayClose_new'),
			'portfolio_gallery_lightbox_loop_new'                      => get_option('portfolio_gallery_lightbox_loop_new'),
			'portfolio_gallery_lightbox_escKey_new'                    => $portfolio_param['portfolio_gallery_lightbox_escKey_new'],
			'portfolio_gallery_lightbox_keyPress_new'                  => $portfolio_param['portfolio_gallery_lightbox_keyPress_new'],
			'portfolio_gallery_lightbox_arrows'                        => $portfolio_param['portfolio_gallery_lightbox_arrows'],
			'portfolio_gallery_lightbox_mouseWheel'                    => $portfolio_param['portfolio_gallery_lightbox_mouseWheel'],
			'portfolio_gallery_lightbox_download'                      => $portfolio_param['portfolio_gallery_lightbox_download'],
			'portfolio_gallery_lightbox_showCounter'                   => $portfolio_param['portfolio_gallery_lightbox_showCounter'],
			'portfolio_gallery_lightbox_nextHtml'                      => $portfolio_param['portfolio_gallery_lightbox_nextHtml'],
			'portfolio_gallery_lightbox_prevHtml'                      => $portfolio_param['portfolio_gallery_lightbox_prevHtml'],
			'portfolio_gallery_lightbox_sequence_info'                 => $portfolio_param['portfolio_gallery_lightbox_sequence_info'],
			'portfolio_gallery_lightbox_sequenceInfo'                  => $portfolio_param['portfolio_gallery_lightbox_sequenceInfo'],
			'portfolio_gallery_lightbox_slideshow_new'                 => $portfolio_param['portfolio_gallery_lightbox_slideshow_new'],
			'portfolio_gallery_lightbox_slideshow_auto_new'            => $portfolio_param['portfolio_gallery_lightbox_slideshow_auto_new'],
			'portfolio_gallery_lightbox_slideshow_speed_new'           => $portfolio_param['portfolio_gallery_lightbox_slideshow_speed_new'],
			'portfolio_gallery_lightbox_slideshow_start_new'           => $portfolio_param['portfolio_gallery_lightbox_slideshow_start_new'],
			'portfolio_gallery_lightbox_slideshow_stop_new'            => $portfolio_param['portfolio_gallery_lightbox_slideshow_stop_new'],
			'portfolio_gallery_lightbox_watermark'                     => $portfolio_param['portfolio_gallery_lightbox_watermark'],
			'portfolio_gallery_lightbox_socialSharing'                 => $portfolio_param['portfolio_gallery_lightbox_socialSharing'],
			'portfolio_gallery_lightbox_facebookButton'                => $portfolio_param['portfolio_gallery_lightbox_facebookButton'],
			'portfolio_gallery_lightbox_twitterButton'                 => $portfolio_param['portfolio_gallery_lightbox_twitterButton'],
			'portfolio_gallery_lightbox_googleplusButton'              => $portfolio_param['portfolio_gallery_lightbox_googleplusButton'],
			'portfolio_gallery_lightbox_pinterestButton'               => $portfolio_param['portfolio_gallery_lightbox_pinterestButton'],
			'portfolio_gallery_lightbox_linkedinButton'                => $portfolio_param['portfolio_gallery_lightbox_linkedinButton'],
			'portfolio_gallery_lightbox_tumblrButton'                  => $portfolio_param['portfolio_gallery_lightbox_tumblrButton'],
			'portfolio_gallery_lightbox_redditButton'                  => $portfolio_param['portfolio_gallery_lightbox_redditButton'],
			'portfolio_gallery_lightbox_bufferButton'                  => $portfolio_param['portfolio_gallery_lightbox_bufferButton'],
			'portfolio_gallery_lightbox_diggButton'                    => $portfolio_param['portfolio_gallery_lightbox_diggButton'],
			'portfolio_gallery_lightbox_vkButton'                      => $portfolio_param['portfolio_gallery_lightbox_vkButton'],
			'portfolio_gallery_lightbox_yummlyButton'                  => $portfolio_param['portfolio_gallery_lightbox_yummlyButton'],
			'portfolio_gallery_lightbox_watermark_text'                => $portfolio_param['portfolio_gallery_lightbox_watermark_text'],
			'portfolio_gallery_lightbox_watermark_textColor'           => $portfolio_param['portfolio_gallery_lightbox_watermark_textColor'],
			'portfolio_gallery_lightbox_watermark_textFontSize'        => $portfolio_param['portfolio_gallery_lightbox_watermark_textFontSize'],
			'portfolio_gallery_lightbox_watermark_containerBackground' => $portfolio_param['portfolio_gallery_lightbox_watermark_containerBackground'],
			'portfolio_gallery_lightbox_watermark_containerOpacity'    => $portfolio_param['portfolio_gallery_lightbox_watermark_containerOpacity'],
			'portfolio_gallery_lightbox_watermark_containerWidth'      => $portfolio_param['portfolio_gallery_lightbox_watermark_containerWidth'],
			'portfolio_gallery_lightbox_watermark_position_new'        => $portfolio_param['portfolio_gallery_lightbox_watermark_position_new'],
			'portfolio_gallery_lightbox_watermark_opacity'             => $portfolio_param['portfolio_gallery_lightbox_watermark_opacity'],
			'portfolio_gallery_lightbox_watermark_margin'              => $portfolio_param['portfolio_gallery_lightbox_watermark_margin'],
			'portfolio_gallery_lightbox_watermark_img_src_new'         => $portfolio_param['portfolio_gallery_lightbox_watermark_img_src_new'],
		);

		if ( get_option('portfolio_gallery_lightbox_type') == 'old_type' ) {
			wp_localize_script( 'jquery.pcolorbox-js', 'lightbox_obj', $lightbox );
		} elseif ( get_option('portfolio_gallery_lightbox_type') == 'new_type' ) {
			list( $r, $g, $b ) = array_map( 'hexdec', str_split( $portfolio_param['portfolio_gallery_lightbox_watermark_containerBackground'], 2 ) );
			$titleopacity                                                       = $portfolio_param["portfolio_gallery_lightbox_watermark_containerOpacity"] / 100;
			$lightbox_options['portfolio_gallery_watermark_container_bg_color'] = 'rgba(' . $r . ',' . $g . ',' . $b . ',' . $titleopacity . ')';
			wp_localize_script( 'portfolio-resp-lightbox-js', 'portfolio_resp_lightbox_obj', $lightbox_options );
			wp_localize_script( 'portfolio-custom-js', 'is_watermark', $portfolio_param['portfolio_gallery_lightbox_watermark'] );
			wp_localize_script( 'portfolio-resp-lightbox-js', 'portfolioGalleryDisableRightClickLightbox', get_option( 'portfolio_gallery_disable_right_click' ) );
		}

		wp_localize_script( 'portfolio-custom-js', 'portfolio_lightbox_type', get_option('portfolio_gallery_lightbox_type') );
		wp_localize_script( 'front-end-js-' . $view_slug, 'param_obj', $portfolio_param );
		wp_localize_script( 'front-end-js-' . $view_slug, 'images_obj_' . $id, $images_obj );
		wp_localize_script( 'portfolio-gallery-elastic_grid-js', 'show_filter_all_text', $portfolio_param['portfolio_gallery_ht_view7_show_all_filter_button'] );
		wp_localize_script( 'portfolio-gallery-elastic_grid-js', 'elements_margin', $portfolio_param['portfolio_gallery_ht_view7_element_margin'] );
		wp_localize_script( 'portfolio-custom-js', 'portfolioGalleryDisableRightClick', get_option( 'portfolio_gallery_disable_right_click' ) );
		wp_localize_script( 'portfolio-gallery-elastic_grid-js', 'portfolioGalleryDisableRightClickElastic', get_option( 'portfolio_gallery_disable_right_click' ) );
	}
}