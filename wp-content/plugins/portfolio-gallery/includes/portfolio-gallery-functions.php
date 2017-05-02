<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

/**
 * Change hex color more bright or more dark
 *
 * @param $hex
 * @param $steps
 *
 * @return string
 */
function portfolio_gallery_adjust_brightness($hex, $steps) {
	// Steps should be between -255 and 255. Negative = darker, positive = lighter
	$steps = max(-255, min(255, $steps));

	// Normalize into a six character long hex string
	$hex = str_replace('#', '', $hex);
	if (strlen($hex) == 3) {
		$hex = str_repeat(substr($hex,0,1), 2).str_repeat(substr($hex,1,1), 2).str_repeat(substr($hex,2,1), 2);
	}

	// Split into three parts: R, G and B
	$color_parts = str_split($hex, 2);
	$new_color = '';

	foreach ($color_parts as $color) {
		$color   = hexdec($color); // Convert to decimal
		$color   = max(0,min(255,$color + $steps)); // Adjust color
		$new_color .= str_pad(dechex($color), 2, '0', STR_PAD_LEFT); // Make two char hex code
	}

	return $new_color;
}

/**
 * Get all general options parameters in a single array
 *
 * @return array Array of all general options
 */
function portfolio_gallery_get_default_general_options() {
	$portfolio_gallery_default__params = array(
		'portfolio_gallery_ht_view0_togglebutton_style'                         => 'dark',
		'portfolio_gallery_ht_view0_show_separator_lines'                       => 'on',
		'portfolio_gallery_ht_view0_linkbutton_text'                            => 'View More',
		'portfolio_gallery_ht_view0_show_linkbutton'                            => 'on',
		'portfolio_gallery_ht_view0_linkbutton_background_hover_color'          => 'df2e1b',
		'portfolio_gallery_ht_view0_linkbutton_background_color'                => 'e74c3c',
		'portfolio_gallery_ht_view0_linkbutton_font_hover_color'                => 'ffffff',
		'portfolio_gallery_ht_view0_linkbutton_color'                           => 'ffffff',
		'portfolio_gallery_ht_view0_linkbutton_font_size'                       => '14',
		'portfolio_gallery_ht_view0_description_color'                          => '5b5b5b',
		'portfolio_gallery_ht_view0_description_font_size'                      => '14',
		'portfolio_gallery_ht_view0_show_description'                           => 'on',
		'portfolio_gallery_ht_view0_thumbs_width'                               => '75',
		'portfolio_gallery_ht_view0_thumbs_position'                            => 'before',
		'portfolio_gallery_ht_view0_show_thumbs'                                => 'on',
		'portfolio_gallery_ht_view0_title_font_size'                            => '15',
		'portfolio_gallery_ht_view0_title_font_color'                           => '555555',
		'portfolio_gallery_ht_view0_element_border_width'                       => '1',
		'portfolio_gallery_ht_view0_element_border_color'                       => 'D0D0D0',
		'portfolio_gallery_ht_view0_element_background_color'                   => 'f7f7f7',
		'portfolio_gallery_ht_view0_block_width'                                => '275',
		'portfolio_gallery_ht_view0_block_height'                               => '160',
		'portfolio_gallery_ht_view1_show_separator_lines'                       => 'on',
		'portfolio_gallery_ht_view1_linkbutton_text'                            => 'View More',
		'portfolio_gallery_ht_view1_show_linkbutton'                            => 'on',
		'portfolio_gallery_ht_view1_linkbutton_background_hover_color'          => 'df2e1b',
		'portfolio_gallery_ht_view1_linkbutton_background_color'                => 'e74c3c',
		'portfolio_gallery_ht_view1_linkbutton_font_hover_color'                => 'ffffff',
		'portfolio_gallery_ht_view1_linkbutton_color'                           => 'ffffff',
		'portfolio_gallery_ht_view1_linkbutton_font_size'                       => '14',
		'portfolio_gallery_ht_view1_description_color'                          => '5b5b5b',
		'portfolio_gallery_ht_view1_description_font_size'                      => '14',
		'portfolio_gallery_ht_view1_show_description'                           => 'on',
		'portfolio_gallery_ht_view1_thumbs_width'                               => '75',
		'portfolio_gallery_ht_view1_thumbs_position'                            => 'before',
		'portfolio_gallery_ht_view1_show_thumbs'                                => 'on',
		'portfolio_gallery_ht_view1_title_font_size'                            => '15',
		'portfolio_gallery_ht_view1_title_font_color'                           => '555555',
		'portfolio_gallery_ht_view1_element_border_width'                       => '1',
		'portfolio_gallery_ht_view1_element_border_color'                       => 'D0D0D0',
		'portfolio_gallery_ht_view1_element_background_color'                   => 'f7f7f7',
		'portfolio_gallery_ht_view1_block_width'                                => '275',
		'portfolio_gallery_ht_view2_element_linkbutton_text'                    => 'View More',
		'portfolio_gallery_ht_view2_element_show_linkbutton'                    => 'on',
		'portfolio_gallery_ht_view2_element_linkbutton_color'                   => 'ffffff',
		'portfolio_gallery_ht_view2_element_linkbutton_font_size'               => '14',
		'portfolio_gallery_ht_view2_element_linkbutton_background_color'        => '2ea2cd',
		'portfolio_gallery_ht_view2_show_popup_linkbutton'                      => 'on',
		'portfolio_gallery_ht_view2_popup_linkbutton_text'                      => 'View More',
		'portfolio_gallery_ht_view2_popup_linkbutton_background_hover_color'    => '0074a2',
		'portfolio_gallery_ht_view2_popup_linkbutton_background_color'          => '2ea2cd',
		'portfolio_gallery_ht_view2_popup_linkbutton_font_hover_color'          => 'ffffff',
		'portfolio_gallery_ht_view2_popup_linkbutton_color'                     => 'ffffff',
		'portfolio_gallery_ht_view2_popup_linkbutton_font_size'                 => '14',
		'portfolio_gallery_ht_view2_description_color'                          => '222222',
		'portfolio_gallery_ht_view2_description_font_size'                      => '14',
		'portfolio_gallery_ht_view2_show_description'                           => 'on',
		'portfolio_gallery_ht_view2_thumbs_width'                               => '75',
		'portfolio_gallery_ht_view2_thumbs_height'                              => '75',
		'portfolio_gallery_ht_view2_thumbs_position'                            => 'before',
		'portfolio_gallery_ht_view2_show_thumbs'                                => 'on',
		'portfolio_gallery_ht_view2_popup_background_color'                     => 'FFFFFF',
		'portfolio_gallery_ht_view2_popup_overlay_color'                        => '000000',
		'portfolio_gallery_ht_view2_popup_overlay_transparency_color'           => '70',
		'portfolio_gallery_ht_view2_popup_closebutton_style'                    => 'dark',
		'portfolio_gallery_ht_view2_show_separator_lines'                       => 'on',
		'portfolio_gallery_ht_view2_show_popup_title'                           => 'on',
		'portfolio_gallery_ht_view2_element_title_font_size'                    => '18',
		'portfolio_gallery_ht_view2_element_title_font_color'                   => '222222',
		'portfolio_gallery_ht_view2_popup_title_font_size'                      => '18',
		'portfolio_gallery_ht_view2_popup_title_font_color'                     => '222222',
		'portfolio_gallery_ht_view2_element_overlay_color'                      => 'FFFFFF',
		'portfolio_gallery_ht_view2_element_overlay_transparency'               => '70',
		'portfolio_gallery_ht_view2_zoombutton_style'                           => 'light',
		'portfolio_gallery_ht_view2_element_border_width'                       => '1',
		'portfolio_gallery_ht_view2_element_border_color'                       => 'dedede',
		'portfolio_gallery_ht_view2_element_background_color'                   => 'f9f9f9',
		'portfolio_gallery_ht_view2_element_width'                              => '275',
		'portfolio_gallery_ht_view2_element_height'                             => '160',
		'portfolio_gallery_ht_view3_show_separator_lines'                       => 'on',
		'portfolio_gallery_ht_view3_linkbutton_text'                            => 'View More',
		'portfolio_gallery_ht_view3_show_linkbutton'                            => 'on',
		'portfolio_gallery_ht_view3_linkbutton_background_hover_color'          => '0074a2',
		'portfolio_gallery_ht_view3_linkbutton_background_color'                => '2ea2cd',
		'portfolio_gallery_ht_view3_linkbutton_font_hover_color'                => 'ffffff',
		'portfolio_gallery_ht_view3_linkbutton_color'                           => 'ffffff',
		'portfolio_gallery_ht_view3_linkbutton_font_size'                       => '14',
		'portfolio_gallery_ht_view3_description_color'                          => '555555',
		'portfolio_gallery_ht_view3_description_font_size'                      => '14',
		'portfolio_gallery_ht_view3_show_description'                           => 'on',
		'portfolio_gallery_ht_view3_thumbs_width'                               => '75',
		'portfolio_gallery_ht_view3_thumbs_height'                              => '75',
		'portfolio_gallery_ht_view3_show_thumbs'                                => 'on',
		'portfolio_gallery_ht_view3_title_font_size'                            => '18',
		'portfolio_gallery_ht_view3_title_font_color'                           => '0074a2',
		'portfolio_gallery_ht_view3_mainimage_width'                            => '240',
		'portfolio_gallery_ht_view3_element_border_width'                       => '1',
		'portfolio_gallery_ht_view3_element_border_color'                       => 'dedede',
		'portfolio_gallery_ht_view3_element_background_color'                   => 'f9f9f9',
		'portfolio_gallery_ht_view4_togglebutton_style'                         => 'dark',
		'portfolio_gallery_ht_view4_show_separator_lines'                       => 'on',
		'portfolio_gallery_ht_view4_linkbutton_text'                            => 'View More',
		'portfolio_gallery_ht_view4_show_linkbutton'                            => 'on',
		'portfolio_gallery_ht_view4_linkbutton_background_hover_color'          => 'df2e1b',
		'portfolio_gallery_ht_view4_linkbutton_background_color'                => 'e74c3c',
		'portfolio_gallery_ht_view4_linkbutton_font_hover_color'                => 'ffffff',
		'portfolio_gallery_ht_view4_linkbutton_color'                           => 'ffffff',
		'portfolio_gallery_ht_view4_linkbutton_font_size'                       => '14',
		'portfolio_gallery_ht_view4_description_color'                          => '555555',
		'portfolio_gallery_ht_view4_description_font_size'                      => '14',
		'portfolio_gallery_ht_view4_show_description'                           => 'on',
		'portfolio_gallery_ht_view4_title_font_size'                            => '18',
		'portfolio_gallery_ht_view4_title_font_color'                           => 'E74C3C',
		'portfolio_gallery_ht_view4_element_border_width'                       => '1',
		'portfolio_gallery_ht_view4_element_border_color'                       => 'dedede',
		'portfolio_gallery_ht_view4_element_background_color'                   => 'f9f9f9',
		'portfolio_gallery_ht_view4_block_width'                                => '275',
		'portfolio_gallery_ht_view5_icons_style'                                => 'dark',
		'portfolio_gallery_ht_view5_show_separator_lines'                       => 'on',
		'portfolio_gallery_ht_view5_linkbutton_text'                            => 'View More',
		'portfolio_gallery_ht_view5_show_linkbutton'                            => 'on',
		'portfolio_gallery_ht_view5_linkbutton_background_hover_color'          => '0074a2',
		'portfolio_gallery_ht_view5_linkbutton_background_color'                => '2ea2cd',
		'portfolio_gallery_ht_view5_linkbutton_font_hover_color'                => 'ffffff',
		'portfolio_gallery_ht_view5_linkbutton_color'                           => 'ffffff',
		'portfolio_gallery_ht_view5_linkbutton_font_size'                       => '14',
		'portfolio_gallery_ht_view5_description_color'                          => '555555',
		'portfolio_gallery_ht_view5_description_font_size'                      => '14',
		'portfolio_gallery_ht_view5_show_description'                           => 'on',
		'portfolio_gallery_ht_view5_thumbs_width'                               => '75',
		'portfolio_gallery_ht_view5_thumbs_height'                              => '75',
		'portfolio_gallery_ht_view5_show_thumbs'                                => 'on',
		'portfolio_gallery_ht_view5_title_font_size'                            => '16',
		'portfolio_gallery_ht_view5_title_font_color'                           => '0074a2',
		'portfolio_gallery_ht_view5_main_image_width'                           => '275',
		'portfolio_gallery_ht_view5_slider_tabs_font_color'                     => 'd9d99',
		'portfolio_gallery_ht_view5_slider_tabs_background_color'               => '555555',
		'portfolio_gallery_ht_view5_slider_background_color'                    => 'f9f9f9',
		'portfolio_gallery_ht_view6_title_font_size'                            => '16',
		'portfolio_gallery_ht_view6_title_font_color'                           => '0074A2',
		'portfolio_gallery_ht_view6_title_font_hover_color'                     => '2EA2CD',
		'portfolio_gallery_ht_view6_title_background_color'                     => '000000',
		'portfolio_gallery_ht_view6_title_background_transparency'              => '80',
		'portfolio_gallery_ht_view6_border_radius'                              => '3',
		'portfolio_gallery_ht_view6_border_width'                               => '0',
		'portfolio_gallery_ht_view6_border_color'                               => 'eeeeee',
		'portfolio_gallery_ht_view6_width'                                      => '275',
		'portfolio_gallery_light_box_size'                                      => '17',
		'portfolio_gallery_light_box_width'                                     => '500',
		'portfolio_gallery_light_box_transition'                                => 'elastic',
		'portfolio_gallery_light_box_speed'                                     => '800',
		'portfolio_gallery_light_box_href'                                      => 'False',
		'portfolio_gallery_light_box_title'                                     => 'false',
		'portfolio_gallery_light_box_scalephotos'                               => 'true',
		'portfolio_gallery_light_box_rel'                                       => 'false',
		'portfolio_gallery_light_box_scrolling'                                 => 'false',
		'portfolio_gallery_light_box_opacity'                                   => '20',
		'portfolio_gallery_light_box_open'                                      => 'false',
		'portfolio_gallery_light_box_overlayclose'                              => 'true',
		'portfolio_gallery_light_box_esckey'                                    => 'false',
		'portfolio_gallery_light_box_arrowkey'                                  => 'false',
		'portfolio_gallery_light_box_loop'                                      => 'true',
		'portfolio_gallery_light_box_data'                                      => 'false',
		'portfolio_gallery_light_box_classname'                                 => 'false',
		'portfolio_gallery_light_box_fadeout'                                   => '300',
		'portfolio_gallery_light_box_closebutton'                               => 'false',
		'portfolio_gallery_light_box_current'                                   => 'image',
		'portfolio_gallery_light_box_previous'                                  => 'previous',
		'portfolio_gallery_light_box_next'                                      => 'next',
		'portfolio_gallery_light_box_close'                                     => 'close',
		'portfolio_gallery_light_box_iframe'                                    => 'false',
		'portfolio_gallery_light_box_inline'                                    => 'false',
		'portfolio_gallery_light_box_html'                                      => 'false',
		'portfolio_gallery_light_box_photo'                                     => 'false',
		'portfolio_gallery_light_box_height'                                    => '500',
		'portfolio_gallery_light_box_innerwidth'                                => 'false',
		'portfolio_gallery_light_box_innerheight'                               => 'false',
		'portfolio_gallery_light_box_initialwidth'                              => '300',
		'portfolio_gallery_light_box_initialheight'                             => '100',
		'portfolio_gallery_light_box_maxwidth'                                  => '768',
		'portfolio_gallery_light_box_maxheight'                                 => '500',
		'portfolio_gallery_light_box_slideshow'                                 => 'false',
		'portfolio_gallery_light_box_slideshowspeed'                            => '2500',
		'portfolio_gallery_light_box_slideshowauto'                             => 'true',
		'portfolio_gallery_light_box_slideshowstart'                            => 'start slideshow',
		'portfolio_gallery_light_box_slideshowstop'                             => 'stop slideshow',
		'portfolio_gallery_light_box_fixed'                                     => 'true',
		'portfolio_gallery_light_box_top'                                       => 'false',
		'portfolio_gallery_light_box_bottom'                                    => 'false',
		'portfolio_gallery_light_box_left'                                      => 'false',
		'portfolio_gallery_light_box_right'                                     => 'false',
		'portfolio_gallery_light_box_reposition'                                => 'false',
		'portfolio_gallery_light_box_retinaimage'                               => 'true',
		'portfolio_gallery_light_box_retinaurl'                                 => 'false',
		'portfolio_gallery_light_box_retinasuffix'                              => '@2x.$1',
		'portfolio_gallery_light_box_returnfocus'                               => 'true',
		'portfolio_gallery_light_box_trapfocus'                                 => 'true',
		'portfolio_gallery_light_box_fastiframe'                                => 'true',
		'portfolio_gallery_light_box_preloading'                                => 'true',
		'portfolio_gallery_slider_title_position'                               => '5',
		'portfolio_gallery_light_box_style'                                     => '1',
		'portfolio_gallery_light_box_size_fix'                                  => 'false',
		'portfolio_gallery_ht_view0_show_sorting'                               => 'on',
		'portfolio_gallery_ht_view0_sortbutton_font_size'                       => '14',
		'portfolio_gallery_ht_view0_sortbutton_font_color'                      => '555555',
		'portfolio_gallery_ht_view0_sortbutton_hover_font_color'                => 'ffffff',
		'portfolio_gallery_ht_view0_sortbutton_background_color'                => 'F7F7F7',
		'portfolio_gallery_ht_view0_sortbutton_hover_background_color'          => 'FF3845',
		'portfolio_gallery_ht_view0_sortbutton_border_radius'                   => '0',
		'portfolio_gallery_ht_view0_sortbutton_border_padding'                  => '3',
		'portfolio_gallery_ht_view0_sorting_float'                              => 'top',
		'portfolio_gallery_ht_view0_show_filtering'                             => 'on',
		'portfolio_gallery_ht_view0_filterbutton_font_size'                     => '14',
		'portfolio_gallery_ht_view0_filterbutton_font_color'                    => '555555',
		'portfolio_gallery_ht_view0_filterbutton_background_color'              => 'F7F7F7',
		'portfolio_gallery_ht_view0_filterbutton_hover_font_color'              => 'ffffff',
		'portfolio_gallery_ht_view0_filterbutton_hover_background_color'        => 'FF3845',
		'portfolio_gallery_ht_view0_filterbutton_border_radius'                 => '0',
		'portfolio_gallery_ht_view0_filterbutton_border_padding'                => '3',
		'portfolio_gallery_ht_view0_filtering_float'                            => 'left',
		'portfolio_gallery_ht_view1_show_sorting'                               => 'on',
		'portfolio_gallery_ht_view1_sortbutton_font_size'                       => '14',
		'portfolio_gallery_ht_view1_sortbutton_font_color'                      => '555555',
		'portfolio_gallery_ht_view1_sortbutton_hover_font_color'                => 'ffffff',
		'portfolio_gallery_ht_view1_sortbutton_background_color'                => 'F7F7F7',
		'portfolio_gallery_ht_view1_sortbutton_hover_background_color'          => 'FF3845',
		'portfolio_gallery_ht_view1_sortbutton_border_radius'                   => '0',
		'portfolio_gallery_ht_view1_sortbutton_border_padding'                  => '3',
		'portfolio_gallery_ht_view1_sorting_float'                              => 'top',
		'portfolio_gallery_ht_view1_show_filtering'                             => 'on',
		'portfolio_gallery_ht_view1_filterbutton_font_size'                     => '14',
		'portfolio_gallery_ht_view1_filterbutton_font_color'                    => '555555',
		'portfolio_gallery_ht_view1_filterbutton_background_color'              => 'F7F7F7',
		'portfolio_gallery_ht_view1_filterbutton_hover_font_color'              => 'ffffff',
		'portfolio_gallery_ht_view1_filterbutton_hover_background_color'        => 'FF3845',
		'portfolio_gallery_ht_view1_filterbutton_border_radius'                 => '0',
		'portfolio_gallery_ht_view1_filterbutton_border_padding'                => '3',
		'portfolio_gallery_ht_view1_filtering_float'                            => 'left',
		'portfolio_gallery_ht_view2_show_sorting'                               => 'on',
		'portfolio_gallery_ht_view2_sortbutton_font_size'                       => '14',
		'portfolio_gallery_ht_view2_sortbutton_font_color'                      => '555555',
		'portfolio_gallery_ht_view2_sortbutton_hover_font_color'                => 'ffffff',
		'portfolio_gallery_ht_view2_sortbutton_background_color'                => 'F7F7F7',
		'portfolio_gallery_ht_view2_sortbutton_hover_background_color'          => 'FF3845',
		'portfolio_gallery_ht_view2_sortbutton_border_radius'                   => '0',
		'portfolio_gallery_ht_view2_sortbutton_border_padding'                  => '3',
		'portfolio_gallery_ht_view2_sorting_float'                              => 'top',
		'portfolio_gallery_ht_view2_show_filtering'                             => 'on',
		'portfolio_gallery_ht_view2_filterbutton_font_size'                     => '14',
		'portfolio_gallery_ht_view2_filterbutton_font_color'                    => '555555',
		'portfolio_gallery_ht_view2_filterbutton_background_color'              => 'F7F7F7',
		'portfolio_gallery_ht_view2_filterbutton_hover_font_color'              => 'ffffff',
		'portfolio_gallery_ht_view2_filterbutton_hover_background_color'        => 'FF3845',
		'portfolio_gallery_ht_view2_filterbutton_border_radius'                 => '0',
		'portfolio_gallery_ht_view2_filterbutton_border_padding'                => '3',
		'portfolio_gallery_ht_view2_filtering_float'                            => 'left',
		'portfolio_gallery_ht_view3_show_sorting'                               => 'on',
		'portfolio_gallery_ht_view3_sortbutton_font_size'                       => '14',
		'portfolio_gallery_ht_view3_sortbutton_font_color'                      => '555555',
		'portfolio_gallery_ht_view3_sortbutton_hover_font_color'                => 'ffffff',
		'portfolio_gallery_ht_view3_sortbutton_background_color'                => 'F7F7F7',
		'portfolio_gallery_ht_view3_sortbutton_hover_background_color'          => 'FF3845',
		'portfolio_gallery_ht_view3_sortbutton_border_radius'                   => '0',
		'portfolio_gallery_ht_view3_sortbutton_border_padding'                  => '3',
		'portfolio_gallery_ht_view3_sorting_float'                              => 'top',
		'portfolio_gallery_ht_view3_show_filtering'                             => 'on',
		'portfolio_gallery_ht_view3_filterbutton_font_size'                     => '14',
		'portfolio_gallery_ht_view3_filterbutton_font_color'                    => '555555',
		'portfolio_gallery_ht_view3_filterbutton_background_color'              => 'F7F7F7',
		'portfolio_gallery_ht_view3_filterbutton_hover_font_color'              => 'ffffff',
		'portfolio_gallery_ht_view3_filterbutton_hover_background_color'        => 'FF3845',
		'portfolio_gallery_ht_view3_filterbutton_border_radius'                 => '0',
		'portfolio_gallery_ht_view3_filterbutton_border_padding'                => '3',
		'portfolio_gallery_ht_view3_filtering_float'                            => 'left',
		'portfolio_gallery_ht_view4_show_sorting'                               => 'on',
		'portfolio_gallery_ht_view4_sortbutton_font_size'                       => '14',
		'portfolio_gallery_ht_view4_sortbutton_font_color'                      => '555555',
		'portfolio_gallery_ht_view4_sortbutton_hover_font_color'                => 'ffffff',
		'portfolio_gallery_ht_view4_sortbutton_background_color'                => 'F7F7F7',
		'portfolio_gallery_ht_view4_sortbutton_hover_background_color'          => 'FF3845',
		'portfolio_gallery_ht_view4_sortbutton_border_radius'                   => '0',
		'portfolio_gallery_ht_view4_sortbutton_border_padding'                  => '3',
		'portfolio_gallery_ht_view4_sorting_float'                              => 'top',
		'portfolio_gallery_ht_view4_show_filtering'                             => 'on',
		'portfolio_gallery_ht_view4_filterbutton_font_size'                     => '14',
		'portfolio_gallery_ht_view4_filterbutton_font_color'                    => '555555',
		'portfolio_gallery_ht_view4_filterbutton_background_color'              => 'F7F7F7',
		'portfolio_gallery_ht_view4_filterbutton_hover_font_color'              => 'ffffff',
		'portfolio_gallery_ht_view4_filterbutton_hover_background_color'        => 'FF3845',
		'portfolio_gallery_ht_view4_filterbutton_border_radius'                 => '0',
		'portfolio_gallery_ht_view4_filterbutton_border_padding'                => '3',
		'portfolio_gallery_ht_view4_filtering_float'                            => 'left',
		'portfolio_gallery_ht_view6_show_sorting'                               => 'on',
		'portfolio_gallery_ht_view6_sortbutton_font_size'                       => '14',
		'portfolio_gallery_ht_view6_sortbutton_font_color'                      => '555555',
		'portfolio_gallery_ht_view6_sortbutton_hover_font_color'                => 'ffffff',
		'portfolio_gallery_ht_view6_sortbutton_background_color'                => 'F7F7F7',
		'portfolio_gallery_ht_view6_sortbutton_hover_background_color'          => 'FF3845',
		'portfolio_gallery_ht_view6_sortbutton_border_radius'                   => '0',
		'portfolio_gallery_ht_view6_sortbutton_border_padding'                  => '3',
		'portfolio_gallery_ht_view6_sorting_float'                              => 'top',
		'portfolio_gallery_ht_view6_show_filtering'                             => 'on',
		'portfolio_gallery_ht_view6_filterbutton_font_size'                     => '14',
		'portfolio_gallery_ht_view6_filterbutton_font_color'                    => '555555',
		'portfolio_gallery_ht_view6_filterbutton_background_color'              => 'F7F7F7',
		'portfolio_gallery_ht_view6_filterbutton_hover_font_color'              => 'ffffff',
		'portfolio_gallery_ht_view6_filterbutton_hover_background_color'        => 'FF3845',
		'portfolio_gallery_ht_view6_filterbutton_border_radius'                 => '0',
		'portfolio_gallery_ht_view6_filterbutton_border_padding'                => '3',
		'portfolio_gallery_ht_view6_filtering_float'                            => 'left',
		'portfolio_gallery_ht_view0_sorting_name_by_default'                    => 'Default',
		'portfolio_gallery_ht_view0_sorting_name_by_id'                         => 'Date',
		'portfolio_gallery_ht_view0_sorting_name_by_name'                       => 'Title',
		'portfolio_gallery_ht_view0_sorting_name_by_random'                     => 'Random',
		'portfolio_gallery_ht_view0_sorting_name_by_asc'                        => 'Ascending',
		'portfolio_gallery_ht_view0_sorting_name_by_desc'                       => 'Descending',
		'portfolio_gallery_ht_view1_sorting_name_by_default'                    => 'Default',
		'portfolio_gallery_ht_view1_sorting_name_by_id'                         => 'Date',
		'portfolio_gallery_ht_view1_sorting_name_by_name'                       => 'Title',
		'portfolio_gallery_ht_view1_sorting_name_by_random'                     => 'Random',
		'portfolio_gallery_ht_view1_sorting_name_by_asc'                        => 'Ascending',
		'portfolio_gallery_ht_view1_sorting_name_by_desc'                       => 'Descending',
		'portfolio_gallery_ht_view2_popup_full_width'                           => 'on',
		'portfolio_gallery_ht_view2_sorting_name_by_default'                    => 'Default',
		'portfolio_gallery_ht_view2_sorting_name_by_id'                         => 'Date',
		'portfolio_gallery_ht_view2_sorting_name_by_name'                       => 'Title',
		'portfolio_gallery_ht_view2_sorting_name_by_random'                     => 'Random',
		'portfolio_gallery_ht_view2_sorting_name_by_asc'                        => 'Ascending',
		'portfolio_gallery_ht_view2_sorting_name_by_desc'                       => 'Descending',
		'portfolio_gallery_ht_view3_sorting_name_by_default'                    => 'Default',
		'portfolio_gallery_ht_view3_sorting_name_by_id'                         => 'Date',
		'portfolio_gallery_ht_view3_sorting_name_by_name'                       => 'Title',
		'portfolio_gallery_ht_view3_sorting_name_by_random'                     => 'Random',
		'portfolio_gallery_ht_view3_sorting_name_by_asc'                        => 'Ascending',
		'portfolio_gallery_ht_view3_sorting_name_by_desc'                       => 'Descending',
		'portfolio_gallery_ht_view4_sorting_name_by_default'                    => 'Default',
		'portfolio_gallery_ht_view4_sorting_name_by_id'                         => 'Date',
		'portfolio_gallery_ht_view4_sorting_name_by_name'                       => 'Title',
		'portfolio_gallery_ht_view4_sorting_name_by_random'                     => 'Random',
		'portfolio_gallery_ht_view4_sorting_name_by_asc'                        => 'Ascending',
		'portfolio_gallery_ht_view4_sorting_name_by_desc'                       => 'Descending',
		'portfolio_gallery_ht_view5_sorting_name_by_default'                    => 'Default',
		'portfolio_gallery_ht_view5_sorting_name_by_id'                         => 'Date',
		'portfolio_gallery_ht_view5_sorting_name_by_name'                       => 'Title',
		'portfolio_gallery_ht_view5_sorting_name_by_random'                     => 'Random',
		'portfolio_gallery_ht_view5_sorting_name_by_asc'                        => 'Ascending',
		'portfolio_gallery_ht_view5_sorting_name_by_desc'                       => 'Descending',
		'portfolio_gallery_ht_view6_sorting_name_by_default'                    => 'Default',
		'portfolio_gallery_ht_view6_sorting_name_by_id'                         => 'Date',
		'portfolio_gallery_ht_view6_sorting_name_by_name'                       => 'Title',
		'portfolio_gallery_ht_view6_sorting_name_by_random'                     => 'Random',
		'portfolio_gallery_ht_view6_sorting_name_by_asc'                        => 'Ascending',
		'portfolio_gallery_ht_view6_sorting_name_by_desc'                       => 'Descending',
		'portfolio_gallery_ht_view0_cat_all'                                    => 'all',
		'portfolio_gallery_ht_view1_cat_all'                                    => 'all',
		'portfolio_gallery_ht_view2_cat_all'                                    => 'all',
		'portfolio_gallery_ht_view3_cat_all'                                    => 'all',
		'portfolio_gallery_ht_view4_cat_all'                                    => 'all',
		'portfolio_gallery_ht_view5_cat_all'                                    => 'all',
		'portfolio_gallery_ht_view6_cat_all'                                    => 'all',
		'portfolio_gallery_port_natural_size_thumbnail'                         => 'resize',
		'portfolio_gallery_port_natural_size_contentpopup'                      => 'resize',
		'portfolio_gallery_ht_view0_elements_in_center'                         => 'off',
		'portfolio_gallery_ht_view0_filterbutton_width'                         => '180',
		'portfolio_gallery_ht_view1_filterbutton_width'                         => '180',
		'portfolio_gallery_ht_view2_filterbutton_width'                         => '180',
		'portfolio_gallery_ht_view3_filterbutton_width'                         => '180',
		'portfolio_gallery_ht_view4_filterbutton_width'                         => '180',
		'portfolio_gallery_ht_view6_filterbutton_width'                         => '180',
		'portfolio_gallery_port_natural_size_toggle'                            => 'resize',
		'portfolio_gallery_admin_image_hover_preview'                           => 'on',
		'portfolio_gallery_ht_view7_image_behaviour'                            => 'crop',
		'portfolio_gallery_ht_view7_element_width'                              => '250',
		'portfolio_gallery_ht_view7_element_height'                             => '230',
		'portfolio_gallery_ht_view7_element_margin'                             => '32',
		'portfolio_gallery_ht_view7_element_border_width'                       => '0',
		'portfolio_gallery_ht_view7_element_border_color'                       => 'DEDEDE',
		'portfolio_gallery_ht_view7_element_overlay_background_color_'          => '484848',
		'portfolio_gallery_ht_view7_element_overlay_opacity'                    => '70',
		'portfolio_gallery_ht_view7_element_hover_effect'                       => 'true',
		'portfolio_gallery_ht_view7_filter_all_text'                            => 'All',
		'portfolio_gallery_ht_view7_filter_effect'                              => 'popup',
		'portfolio_gallery_ht_view7_hover_effect_delay'                         => '0',
		'portfolio_gallery_ht_view7_hover_effect_inverse'                       => 'false',
		'portfolio_gallery_ht_view7_expanding_speed'                            => '500',
		'portfolio_gallery_ht_view7_expand_block_height'                        => '500',
		'portfolio_gallery_ht_view7_element_title_font_size'                    => '16',
		'portfolio_gallery_ht_view7_element_title_font_color'                   => 'FFFFFF',
		'portfolio_gallery_ht_view7_element_title_align'                        => 'center',
		'portfolio_gallery_ht_view7_element_title_border_width'                 => '1',
		'portfolio_gallery_ht_view7_element_title_border_color'                 => 'FFFFFF',
		'portfolio_gallery_ht_view7_element_title_margin_top'                   => '100',
		'portfolio_gallery_ht_view7_element_title_padding_top_bottom'           => '10',
		'portfolio_gallery_ht_view7_expand_block_background_color'              => '222222',
		'portfolio_gallery_ht_view7_expand_block_opacity'                       => '100',
		'portfolio_gallery_ht_view7_expand_block_title_color'                   => 'd6d6d6',
		'portfolio_gallery_ht_view7_expand_block_title_font_size'               => '35',
		'portfolio_gallery_ht_view7_expand_block_description_font_size'         => '13',
		'portfolio_gallery_ht_view7_expand_block_description_font_color'        => '999',
		'portfolio_gallery_ht_view7_expand_block_description_font_hover_color'  => '999',
		'portfolio_gallery_ht_view7_expand_block_description_text_align'        => 'left',
		'portfolio_gallery_ht_view7_expand_block_button_background_color'       => '454545',
		'portfolio_gallery_ht_view7_expand_block_button_background_hover_color' => '454545',
		'portfolio_gallery_ht_view7_expand_block_button_text_color'             => '9f9f9f',
		'portfolio_gallery_ht_view7_expand_block_button_font_size'              => '11',
		'portfolio_gallery_ht_view7_expand_block_button_text'                   => 'View More',
		'portfolio_gallery_ht_view7_filter_button_font_hover_color'             => 'fff',
		'portfolio_gallery_ht_view7_filter_button_background_color'             => 'F7F7F7',
		'portfolio_gallery_ht_view7_filter_button_background_hover_color'       => 'FF3845',
		'portfolio_gallery_ht_view7_filter_button_border_radius'                => '0',
		'portfolio_gallery_ht_view7_expand_width'                               => '100',
		'portfolio_gallery_ht_view7_thumbnail_width'                            => '100',
		'portfolio_gallery_ht_view7_thumbnail_height'                           => '100',
		'portfolio_gallery_ht_view7_thumbnail_bg_color'                         => '313131',
		'portfolio_gallery_ht_view7_thumbnail_block_box_shadow'                 => 'on',
		'portfolio_gallery_ht_view7_filter_button_text'                         => 'All',
		'portfolio_gallery_ht_view7_filter_button_font_size'                    => '16',
		'portfolio_gallery_ht_view7_filter_button_font_color'                   => '444444',
		'portfolio_gallery_ht_view7_filter_button_bg_color_active'              => '666',
		'portfolio_gallery_ht_view7_filter_button_padding'                      => '8',
		'portfolio_gallery_ht_view7_filter_button_radius'                       => '4',
		'portfolio_gallery_ht_view7_filter_button_font_active_color'            => 'fff',
		'portfolio_gallery_ht_view7_show_all_filter_button'                     => 'on',
		'portfolio_gallery_lightbox_slideAnimationType'                         => 'effect_1',
		'portfolio_gallery_lightbox_lightboxView'                               => 'view1',
		'portfolio_gallery_lightbox_speed_new'                                  => '600',
		'portfolio_gallery_lightbox_width_new'                                  => '100',
		'portfolio_gallery_lightbox_height_new'                                 => '100',
		'portfolio_gallery_lightbox_videoMaxWidth'                              => '790',
		'portfolio_gallery_lightbox_overlayDuration'                            => '150',
		'portfolio_gallery_lightbox_overlayClose_new'                           => 'true',
		'portfolio_gallery_lightbox_loop_new'                                   => 'true',
		'portfolio_gallery_lightbox_escKey_new'                                 => 'false',
		'portfolio_gallery_lightbox_keyPress_new'                               => 'false',
		'portfolio_gallery_lightbox_arrows'                                     => 'true',
		'portfolio_gallery_lightbox_mouseWheel'                                 => 'false',
		'portfolio_gallery_lightbox_download'                                   => 'false',
		'portfolio_gallery_lightbox_showCounter'                                => 'true',
		'portfolio_gallery_lightbox_nextHtml'                                   => '',     //not used
		'portfolio_gallery_lightbox_prevHtml'                                   => '',     //not used
		'portfolio_gallery_lightbox_sequence_info'                              => 'image',
		'portfolio_gallery_lightbox_sequenceInfo'                               => 'of',
		'portfolio_gallery_lightbox_slideshow_new'                              => 'false',
		'portfolio_gallery_lightbox_slideshow_auto_new'                         => 'false',
		'portfolio_gallery_lightbox_slideshow_speed_new'                        => '2500',
		'portfolio_gallery_lightbox_slideshow_start_new'                        => '',     //not used
		'portfolio_gallery_lightbox_slideshow_stop_new'                         => '',     //not used
		'portfolio_gallery_lightbox_watermark'                                  => 'false',
		'portfolio_gallery_lightbox_socialSharing'                              => 'false',
		'portfolio_gallery_lightbox_facebookButton'                             => 'true',
		'portfolio_gallery_lightbox_twitterButton'                              => 'true',
		'portfolio_gallery_lightbox_googleplusButton'                           => 'true',
		'portfolio_gallery_lightbox_pinterestButton'                            => 'false',
		'portfolio_gallery_lightbox_linkedinButton'                             => 'false',
		'portfolio_gallery_lightbox_tumblrButton'                               => 'false',
		'portfolio_gallery_lightbox_redditButton'                               => 'false',
		'portfolio_gallery_lightbox_bufferButton'                               => 'false',
		'portfolio_gallery_lightbox_diggButton'                                 => 'false',
		'portfolio_gallery_lightbox_vkButton'                                   => 'false',
		'portfolio_gallery_lightbox_yummlyButton'                               => 'false',
		'portfolio_gallery_lightbox_watermark_text'                             => 'WaterMark',
		'portfolio_gallery_lightbox_watermark_textColor'                        => 'ffffff',
		'portfolio_gallery_lightbox_watermark_textFontSize'                     => '30',
		'portfolio_gallery_lightbox_watermark_containerBackground'              => '000000',
		'portfolio_gallery_lightbox_watermark_containerOpacity'                 => '90',
		'portfolio_gallery_lightbox_watermark_containerWidth'                   => '300',
		'portfolio_gallery_lightbox_watermark_position_new'                     => '9',
		'portfolio_gallery_lightbox_watermark_opacity'                          => '70',
		'portfolio_gallery_lightbox_watermark_margin'                           => '10',
		'portfolio_gallery_lightbox_watermark_img_src_new'                      => PORTFOLIO_GALLERY_IMAGES_URL . '/admin_images/No-image-found.jpg',
		'portfolio_gallery_lightbox_type'                                       => 'new_type'
	);

	return $portfolio_gallery_default__params;
}

function portfolio_gallery_get_view_slag_by_id( $id ) {
	global $wpdb;
	$query = $wpdb->prepare( "SELECT portfolio_list_effects_s from " . $wpdb->prefix . "huge_itportfolio_portfolios WHERE id=%d", $id );
	$view  = $wpdb->get_var( $query );
	switch ( $view ) {
		case 0:
			$slug = 'toggle-up-down';
			break;
		case 1:
			$slug = 'full-height';
			break;
		case 2:
			$slug = 'content-popup';
			break;
		case 3:
			$slug = 'full-width';
			break;
		case 4:
			$slug = 'faq';
			break;
		case 5:
			$slug = 'content-slider';
			break;
		case 6:
			$slug = 'lightbox-gallery';
			break;
		case 7:
			$slug = 'elastic-grid';
			break;
	}

	return $slug;
}

/**
 * Get attachment ID by image src
 *
 * @param $image_url
 *
 * @return mixed
 */
function portfolio_gallery_get_image_id( $image_url ) {
	global $wpdb;
	$attachment = $wpdb->get_var( $wpdb->prepare( "SELECT ID FROM " . $wpdb->prefix . "posts WHERE guid=%s", $image_url ) );

	return $attachment;
}


/**
 * Get image url by image src, width, height
 *
 * @param $image_src
 * @param $image_sizes
 * @param $is_thumbnail
 *
 * @return false|string
 */


function portfolio_gallery_get_image_by_sizes_and_src( $image_src, $image_sizes, $is_thumbnail ) {
	$is_attachment = portfolio_gallery_get_image_id( $image_src );

	$is_readable   = is_readable( $image_src );
	if ( $is_readable ) {
		$img_sizes  = getimagesize( $image_src );
		$img_height = $img_sizes[1];
	} else {
		$img_height = null;
	}

	if ( is_string( $image_sizes ) ) {
		$image_sizes = $image_sizes;
	}
	if ( is_object( $image_sizes ) ) {
		// Closures are currently implemented as objects
		$image_sizes = array( $image_sizes, '' );
	}
	if ( ! $is_attachment ) {
		$image_url = $image_src;
	} elseif ( is_string( $image_sizes ) ) {
		$attachment_id     = portfolio_gallery_get_image_id( $image_src );
		$natural_img_width = explode( ',', wp_get_attachment_image_sizes( $attachment_id, 'full' ) );
		$natural_img_width = $natural_img_width[1];
		$natural_img_width = str_replace( ' ', '', $natural_img_width );
		$natural_img_width = intval( str_replace( 'px', '', $natural_img_width ) );
		if ( $img_height == null || $img_height >= $natural_img_width ) {
			$image_url = wp_get_attachment_image_url( $attachment_id, 'large' );
		} else {
			$image_url = wp_get_attachment_image_url( $attachment_id, 'medium' );
		}
	} else {
		$attachment_id     = portfolio_gallery_get_image_id( $image_src );
		$natural_img_width = explode( ',', wp_get_attachment_image_sizes( $attachment_id, 'full' ) );
		$natural_img_width = $natural_img_width[1];
		$natural_img_width = str_replace( ' ', '', $natural_img_width );
		$natural_img_width = intval( str_replace( 'px', '', $natural_img_width ) );
		if ( $is_thumbnail ) {
			$image_url = wp_get_attachment_image_url( $attachment_id, 'thumbnail' );
		} elseif ( $image_sizes[0] <= 300 || $image_sizes[0] == '' ) {
			if ( $img_height == null || $img_height >= $natural_img_width ) {
				$image_url = wp_get_attachment_image_url( $attachment_id, 'large' );
			} else {
				$image_url = wp_get_attachment_image_url( $attachment_id, 'medium' );
			}
		} elseif ( $image_sizes[0] <= 700 ) {
			$image_url = wp_get_attachment_image_url( $attachment_id, 'large' );
		} elseif ( $image_sizes[0] >= $natural_img_width ) {
			$image_url = wp_get_attachment_image_url( $attachment_id, 'full' );
		} else {
			$image_url = wp_get_attachment_image_url( $attachment_id, $image_sizes );
		}
	}

    return $image_url;
}
