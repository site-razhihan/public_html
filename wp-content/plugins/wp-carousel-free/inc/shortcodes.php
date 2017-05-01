<?php
// Registering shortcode
function wp_carousel_free_shortcode( $attr ) {
	$post = get_post();

	static $instance = 0;
	$instance ++;

	if ( ! empty( $attr['ids'] ) ) {
		if ( empty( $attr['orderby'] ) ) {
			$attr['orderby'] = 'post__in';
		}
		$attr['include'] = $attr['ids'];
	}

	$output = apply_filters( 'sp_wcfgallery_shortcode', '', $attr );
	if ( $output != '' ) {
		return $output;
	}

	if ( isset( $attr['orderby'] ) ) {
		$attr['orderby'] = sanitize_sql_orderby( $attr['orderby'] );
		if ( ! $attr['orderby'] ) {
			unset( $attr['orderby'] );
		}
	}

	extract( shortcode_atts( array(
		'id'     => '1',
		'ids'     => '',
		'size'    => 'thumbnail',
		'include' => '',
		'exclude' => '',
	), $attr, 'gallery' ) );


	// helper function to return shortcode regex match on instance occurring on page or post
	if ( ! function_exists( 'get_match' ) ) {
		function get_match( $regex, $content, $instance ) {
			preg_match_all( $regex, $content, $matches );

			return $matches[1][ $instance ];
		}
	}

	// Extract the shortcode arguments from the $page or $post
	$shortcode_args = shortcode_parse_atts( get_match( '/\[wcfgallery\s(.*)\]/isU', $post->post_content, $instance - 1 ) );

	// get the ids specified in the shortcode call
	if ( is_array( $ids ) ) {
		$ids = $shortcode_args["ids"];
	}


	$order   = 'DESC';
	$orderby = 'title';

	$id = intval( $id );
	if ( 'RAND' == $order ) {
		$orderby = 'none';
	}

	if ( ! empty( $ids ) ) {
		$_attachments = get_posts( array(
			'include'        => $ids,
			'post_status'    => 'inherit',
			'post_type'      => 'attachment',
			'post_mime_type' => 'image',
			'order'          => $order,
			'orderby'        => $orderby
		) );

		$attachments = array();
		foreach ( $_attachments as $key => $val ) {
			$attachments[ $val->ID ] = $_attachments[ $key ];
		}
	} elseif ( ! empty( $exclude ) ) {
		$attachments = get_children( array(
			'post_parent'    => $id,
			'exclude'        => $exclude,
			'post_status'    => 'inherit',
			'post_type'      => 'attachment',
			'post_mime_type' => 'image',
			'order'          => $order,
			'orderby'        => $orderby
		) );
	} else {

	}

	if ( empty( $attachments ) ) {
		return '';
	}

	if ( is_feed() ) {
		$output = "\n";
		foreach ( $attachments as $att_id => $attachment ) {
			$output .= wp_get_attachment_link( $att_id, $size, true ) . "\n";
		}

		return $output;
	}


	$gallery_style = $gallery_div = '';


	$size_class  = sanitize_html_class( $size );
	$gallery_div = "

	<style type='text/css'>
		div#wordpress-carousel-free-$id div.single_wcf_item img{box-shadow:0 0 0;border-radius:0;float:left;width:100%;height:auto}
	</style>

    <script type='text/javascript'>
    jQuery(document).ready(function() {
		jQuery('#wordpress-carousel-free-$id').owlCarousel({
			navigation: true,
			autoPlay: true,
			navigationText: ['<i class=\"fa fa-angle-left\"></i>','<i class=\"fa fa-angle-right\"></i>']
		});
    });
    </script>

	<div id='wordpress-carousel-free-$id' class='owl-carousel wordpress-carousel-free-section'>";

	$output = apply_filters( 'gallery_style', $gallery_style . $gallery_div );

	foreach ( $attachments as $id => $attachment ) {

		$wcf_image_url = wp_get_attachment_image_src( $id, 'medium', false );

		$wcf_image_title = $attachment->post_title;


		$output .= "
		<div class='single_wcf_item'>
			<img src='$wcf_image_url[0]' alt='$wcf_image_title' />
		</div>
		";

	}

	$output .= "
		</div>\n";

	return $output;
}

add_shortcode( 'wcfgallery', 'wp_carousel_free_shortcode' );