<?php

$blog_id    = absint( get_option( 'page_for_posts' ) );
$style_attr = '';
$shop_id = absint( get_option( 'woocommerce_shop_page_id', 0 ) );

// custom bg
$bg_id = get_the_ID();

if ( is_home() || is_singular( 'post' ) ) {
	$bg_id = $blog_id;
}

// woocommerce
if ( CargoPressHelpers::is_woocommerce_active() && is_woocommerce() ) {
	$bg_id = $shop_id;
}

$style_array = array();

if ( get_field( 'background_image', $bg_id ) ) {
	$style_array = array(
		'background-image'      => get_field( 'background_image', $bg_id ),
		'background-position'   => get_field( 'background_image_horizontal_position', $bg_id ) . ' ' . get_field( 'background_image_vertical_position', $bg_id ),
		'background-repeat'     => get_field( 'background_image_repeat', $bg_id ),
		'background-attachment' => get_field( 'background_image_attachment', $bg_id ),
	);
}

$style_array['background-color'] = get_field( 'background_color', $bg_id );

$style_attr = CargoPressHelpers::create_background_style_attr( $style_array );

?>
<?php if(!is_front_page()) : ?>
<?php $background_head = get_post_meta($post->ID, 'background-head', true); ?>
<div class="main-title" style="
<?php 
	echo esc_attr( $style_attr ); 
	if(!empty($background_head)){
		echo 'background:url('.$background_head["guid"].') no-repeat; 
		background-size: cover; 
		background-position: top center;';
	} else{
		echo 'background:url(/wp-content/uploads/2017/04/fon-head.png) no-repeat; 
		background-size: cover; 
		background-position: top center;';
	}

?> ">
	<div class="container">
		<?php

		$main_tag = 'h1';
		$subtitle = false;

		if ( is_home() || ( is_single() && 'post' === get_post_type() ) ) {
			$title    = get_the_title( $blog_id );
			$subtitle = get_field( 'subtitle', $blog_id );

			if ( is_single() ) {
				$main_tag = 'h2';
			}
		} elseif ( CargoPressHelpers::is_woocommerce_active() && is_woocommerce() ) {
				ob_start();
				woocommerce_page_title();
				$title    = ob_get_clean();
				$subtitle = get_field( 'subtitle', (int) get_option( 'woocommerce_shop_page_id' ) );
		} elseif ( is_category() || is_tag() || is_author() || is_post_type_archive() || is_tax() || is_day() || is_month() || is_year() ) {
			$title = get_the_archive_title();
		} elseif ( is_search() ) {
			$title = __( 'Search Results For' , 'cargopress-pt' ) . ' &quot;' . get_search_query() . '&quot;';
		} elseif ( is_404() ) {
			$title = __( 'Error 404' , 'cargopress-pt' );
		} else {
			$title    = get_the_title();
			$subtitle = get_field( 'subtitle' );
		}

		?>

		<?php printf( '<%1$s class="main-title__primary">%2$s</%1$s>', tag_escape( $main_tag ), esc_html( $title ) ); ?>
		<img src="/wp-content/uploads/2017/04/bottom-line.png">
	</div>
</div>
<?php else: ?>
	<div class="slider-block">
	<?php layerslider(1) ?>
	</div>
<?php endif; ?>