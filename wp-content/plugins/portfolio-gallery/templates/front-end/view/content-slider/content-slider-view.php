<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}
?>
<div id="p-main-slider_<?php echo esc_attr($portfolioID); ?>"
     class="portfolio-gallery-content p-main-slider liquid-slider view-<?php echo $view_slug; ?>"
     data-pause-hover="<?php echo esc_attr($portfolio[0]->pause_on_hover); ?>"
     data-autoslide="<?php echo esc_attr($portfolio[0]->autoslide); ?>"
     data-slide-duration="<?php echo esc_attr($portfolio[0]->param); ?>"
     data-slide-interval="<?php echo esc_attr($portfolio[0]->description); ?>"
     data-slide-effect="<?php echo esc_attr($portfolio[0]->sl_position); ?>"
     data-portfolio-id="<?php echo esc_attr($portfolioID); ?>"
	data-show-loading="<?php echo esc_attr($portfolioShowLoading); ?>">

	<?php
	$group_key = 0;
	foreach ( $images as $key => $row ) {
		$group_key ++;
		$group_key1 = (string) $group_key;
		$imgurl     = explode( ";", $row->image_url );
		array_pop( $imgurl );
		$link       = $row->sl_url;
		$descnohtml = strip_tags( $row->description );
		$result     = substr( $descnohtml, 0, 50 );
		?>
		<div class="slider-content">
			<div class="slider-content-wrapper slide_number<?php echo esc_attr($group_key1); ?>">
				<div class="image-block_<?php echo esc_attr($portfolioID); ?>">
					<?php
					if ( $row->image_url != ';' ) {
						switch ( portfolio_gallery_youtube_or_vimeo_portfolio( $imgurl[0] ) ) {
							case 'image':

								?>
								<a class="portfolio-group<?php echo esc_attr($group_key1); ?> portfolio-group-slider_<?php echo esc_attr($portfolioID); ?>_<?php echo esc_attr($group_key1); ?>"
								   href="<?php echo esc_url( $imgurl[0] ); ?>"
								   title="<?php echo esc_attr( $row->name ); ?>" data-groupID="<?php echo esc_attr($group_key1);?>"><img
										alt="<?php echo esc_attr( $row->name ); ?>" class="main-image"
										src="<?php echo esc_url( portfolio_gallery_get_image_by_sizes_and_src( $imgurl[0], array(
											$portfolio_gallery_get_options['portfolio_gallery_ht_view5_main_image_width'],
											''
										), false ) ); ?>"/></a>
								<?php
								break;
							case 'youtube':
								$videourl = portfolio_gallery_get_video_id_from_url( $imgurl[0] ); ?>
								<a href="https://www.youtube.com/embed/<?php echo $videourl[0]; ?>"
								   class="portfolio-group<?php echo esc_attr($group_key1); ?> huge_it_portfolio_item pyoutube portfolio-group-slider_<?php echo esc_attr($portfolioID); ?>_<?php echo esc_attr($group_key1); ?> add-H-relative add-H-block"
								   title="<?php echo esc_attr( $row->name ); ?>" data-groupID="<?php echo esc_attr($group_key1);?>">
									<img class="main-image" alt="<?php echo esc_attr($row->name); ?>"
										src="//img.youtube.com/vi/<?php echo esc_attr($videourl[0]); ?>/mqdefault.jpg">
									<div class="play-icon <?php echo esc_attr($videourl[1]); ?>-icon"></div>
								</a>
								<?php
								break;
							case 'vimeo':
								$videourl = portfolio_gallery_get_video_id_from_url( $imgurl[0] );
								$hash = unserialize( wp_remote_fopen( "http://vimeo.com/api/v2/video/" . $videourl[0] . ".php" ) );
								$imgsrc = $hash[0]['thumbnail_large'];
								?>
								<a class="portfolio-group<?php echo esc_attr($group_key1); ?> huge_it_portfolio_item pvimeo portfolio-group-slider_<?php echo esc_attr($portfolioID); ?>_<?php echo esc_attr($group_key1); ?>   add-H-relative add-H-block"
								   href="http://player.vimeo.com/video/<?php echo esc_attr($videourl[0]); ?>"
								   title="<?php echo esc_attr($row->name); ?>" data-groupID="<?php echo esc_attr($group_key1);?>">
									<img src="<?php echo esc_attr( $imgsrc ); ?>" class="main-image"
									     alt="<?php echo esc_attr( $row->name ); ?>"/>
									<div class="play-icon <?php echo esc_attr($videourl[1]); ?>-icon"></div>
								</a>
								<?php break;
						}
					} else { ?>
						<img alt="<?php echo esc_attr( $row->name ); ?>" class="main-image"
						     src="images/noimage.jpg"/>
						<?php
					} ?>

					<?php if ( $portfolio_gallery_get_options["portfolio_gallery_ht_view5_show_thumbs"] ) { ?>
						<div>
							<ul class="thumbs-list_<?php echo esc_attr($portfolioID); ?>">
								<?php
								array_shift( $imgurl );
								foreach ( $imgurl as $key => $img ) {
									switch ( portfolio_gallery_youtube_or_vimeo_portfolio( $img ) ) {
										case 'image':
											?>
											<li>
												<a class="portfolio-group<?php echo esc_attr($group_key1); ?> portfolio-group-slider_<?php echo esc_attr($portfolioID); ?>_<?php echo esc_attr($group_key1); ?>"
												   href="<?php echo esc_url( $img ); ?>" data-groupID="<?php echo esc_attr($group_key1);?>"><img alt="<?php echo esc_attr( $row->name ); ?>"
														src="<?php echo esc_url( portfolio_gallery_get_image_by_sizes_and_src( $img, array(
															$portfolio_gallery_get_options['portfolio_gallery_ht_view5_thumbs_width'],
															$portfolio_gallery_get_options['portfolio_gallery_ht_view5_thumbs_height']
														), true ) ); ?>"></a>
											</li>
											<?php
											break;
										case 'youtube':
											$videourl = portfolio_gallery_get_video_id_from_url( $img ); ?>
											<li>
												<a href="https://www.youtube.com/embed/<?php echo esc_attr($videourl[0]); ?>"
												   class="portfolio-group<?php echo $group_key1; ?> huge_it_portfolio_item pyoutube portfolio-group-slider_<?php echo esc_attr($portfolioID); ?>_<?php echo esc_attr($group_key1); ?>  add-H-relative" data-groupID="<?php echo esc_attr($group_key1);?>">
													<img alt="<?php echo esc_attr($row->name); ?>"
														src="//img.youtube.com/vi/<?php echo esc_attr($videourl[0]); ?>/mqdefault.jpg">
													<div
														class="play-icon <?php echo esc_attr($videourl[1]); ?>-icon"></div>
												</a>
											</li>
											<?php
											break;
										case 'vimeo':
											$videourl = portfolio_gallery_get_video_id_from_url( $img );
											$hash = unserialize( wp_remote_fopen( "http://vimeo.com/api/v2/video/" . $videourl[0] . ".php" ) );
											$imgsrc = $hash[0]['thumbnail_large']; ?>
											<li>
												<a class="portfolio-group<?php echo esc_attr($group_key1); ?> huge_it_portfolio_item pvimeo portfolio-group-slider_<?php echo esc_attr($portfolioID); ?>_<?php echo esc_attr($group_key1); ?>  add-H-relative"
												   href="http://player.vimeo.com/video/<?php echo esc_attr($videourl[0]); ?> "
												   title="<?php echo esc_attr( $row->name ); ?>"
												   style="position:relative" data-groupID="<?php echo esc_attr($group_key1);?>">
													<img src="<?php echo esc_attr( $imgsrc ); ?>"
													     alt="<?php echo esc_attr( $row->name ); ?>"/>
													<div
														class="play-icon <?php echo esc_attr($videourl[1]); ?>-icon"></div>
												</a>
											</li>
											<?php
											break;
									}
								} ?>
							</ul>
						</div>
					<?php } ?>
				</div>
				<div class="right-block">
					<div><h2 class="title"><?php echo $row->name; ?></h2></div>
					<?php if ( $portfolio_gallery_get_options["portfolio_gallery_ht_view5_show_description"] == 'on' ) { ?>
						<div class="description"><?php echo $row->description; ?></div><?php } ?>
					<?php if ( $portfolio_gallery_get_options["portfolio_gallery_ht_view5_show_linkbutton"] == 'on' && $portfolio_gallery_get_options["portfolio_gallery_ht_view5_linkbutton_text"] != '' && $link != '' ) { ?>
						<div class="button-block">
							<a class=""
							   href="<?php echo esc_url( $link ); ?>" <?php if ( $row->link_target == "on" ) {
								echo 'target="_blank"';
							} ?>><?php echo esc_attr($portfolio_gallery_get_options["portfolio_gallery_ht_view5_linkbutton_text"]); ?></a>
						</div>
					<?php } ?>
				</div>
			</div>
		</div>
		<?php
	}
	?>
</div>