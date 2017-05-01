<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}
?>
<section id="huge_it_portfolio_content_<?php echo esc_attr($portfolioID); ?>"
         style="clear: both"
         class="portfolio-gallery-content <?php if ( $portfolioShowSorting == 'on' ) {
	         echo 'sortingActive ';
         }
         if ( $portfolioShowFiltering == 'on' ) {
	         echo 'filteringActive';
         } ?>"
         data-portfolio-id="<?php echo esc_attr($portfolioID); ?>">
	<div id="huge-it-container-loading-overlay_<?php echo esc_attr($portfolioID); ?>"></div>
	<?php if ( ( $sortingFloatFullWidth == 'left' && $filteringFloatFullWidth == 'left' ) || ( $sortingFloatFullWidth == 'right' && $filteringFloatFullWidth == 'right' ) ) { ?>
	<div id="huge_it_portfolio_options_and_filters_<?php echo esc_attr($portfolioID); ?>">
		<?php } ?>
		<?php if ( $portfolioShowSorting == "on" ) { ?>
			<div id="huge_it_portfolio_options_<?php echo esc_attr($portfolioID); ?>"
			     data-sorting-position="<?php echo esc_attr($portfolio_gallery_get_options["portfolio_gallery_ht_view1_sorting_float"]); ?>">
				<ul id="sort-by" class="option-set clearfix" data-option-key="sortBy">
					<?php if ( $portfolio_gallery_get_options["portfolio_gallery_ht_view3_sorting_name_by_default"] != '' ): ?>
						<li><a href="#sortBy=original-order" data-option-value="original-order" class="selected"
						       data><?php echo esc_attr($portfolio_gallery_get_options["portfolio_gallery_ht_view3_sorting_name_by_default"]); ?></a></li>
					<?php endif; ?>
					<?php if ( $portfolio_gallery_get_options["portfolio_gallery_ht_view3_sorting_name_by_id"] != '' ): ?>
						<li><a href="#sortBy=id"
						       data-option-value="id"><?php echo esc_attr($portfolio_gallery_get_options["portfolio_gallery_ht_view3_sorting_name_by_id"]); ?></a>
						</li>
					<?php endif; ?>
					<?php if ( $portfolio_gallery_get_options["portfolio_gallery_ht_view3_sorting_name_by_name"] != '' ): ?>
						<li><a href="#sortBy=symbol"
						       data-option-value="symbol"><?php echo esc_attr($portfolio_gallery_get_options["portfolio_gallery_ht_view3_sorting_name_by_name"]); ?></a>
						</li>
					<?php endif; ?>
					<?php if ( $portfolio_gallery_get_options["portfolio_gallery_ht_view3_sorting_name_by_random"] != '' ): ?>
						<li id="shuffle"><a
								href='#shuffle'><?php echo esc_attr($portfolio_gallery_get_options["portfolio_gallery_ht_view3_sorting_name_by_random"]); ?></a>
						</li>
					<?php endif; ?>
				</ul>
				<ul id="port-sort-direction" class="option-set clearfix" data-option-key="sortAscending">
					<?php if ( $portfolio_gallery_get_options["portfolio_gallery_ht_view3_sorting_name_by_asc"] != '' ): ?>
						<li><a href="#sortAscending=true" data-option-value="true"
						       class="selected"><?php echo esc_attr($portfolio_gallery_get_options["portfolio_gallery_ht_view3_sorting_name_by_asc"]); ?></a>
						</li>
					<?php endif; ?>
					<?php if ( $portfolio_gallery_get_options["portfolio_gallery_ht_view3_sorting_name_by_desc"] != '' ): ?>
						<li><a href="#sortAscending=false"
						       data-option-value="false"><?php echo esc_attr($portfolio_gallery_get_options["portfolio_gallery_ht_view3_sorting_name_by_desc"]); ?></a>
						</li>
					<?php endif; ?>
				</ul>
			</div>
		<?php }
		if ( $portfolioShowFiltering == "on" ) { ?>
			<div id="huge_it_portfolio_filters_<?php echo esc_attr($portfolioID); ?>"
			     data-filtering-position="<?php echo esc_attr($portfolio_gallery_get_options["portfolio_gallery_ht_view1_filtering_float"]); ?>">
				<ul>
					<li rel="*"><a><?php echo esc_attr($portfolio_gallery_get_options["portfolio_gallery_ht_view3_cat_all"]); ?></a></li>
					<?php
					$portfolioCats = explode( ",", $portfolioCats );
					foreach ( $portfolioCats as $portfolioCatsValue ) {
						if ( ! empty( $portfolioCatsValue ) ) {
							?>
							<li rel=".<?php echo str_replace( " ", "_", $portfolioCatsValue ); ?>">
								<a><?php echo str_replace( "_", " ", $portfolioCatsValue ); ?></a></li>
							<?php
						}
					}
					?>
				</ul>
			</div>
		<?php } ?>
		<?php if ( ( $sortingFloatFullWidth == 'left' && $filteringFloatFullWidth == 'left' ) || ( $sortingFloatFullWidth == 'right' && $filteringFloatFullWidth == 'right' ) ) { ?>
	</div>
<?php } ?>
	<div id="huge_it_portfolio_container_<?php echo esc_attr($portfolioID); ?>"
	     data-show-loading="<?php echo esc_attr($portfolioShowLoading); ?>"
	     data-show-center="<?php echo esc_attr($portfolioposition); ?>"
	     class="huge_it_portfolio_container super-list variable-sizes clearfix view-<?php echo $view_slug; ?>" <?php if ( $portfolio_gallery_get_options["portfolio_gallery_ht_view3_sorting_float"] == "top" && $portfolio_gallery_get_options["portfolio_gallery_ht_view3_filtering_float"] == "top" ) {
		echo "style='clear: both;'";
	} ?>>
		<?php
		$group_key1 = 0;
		foreach ( $images as $key => $row ) {
			$group_key1 ++;
			$group_key    = (string) $group_key1;
			$portfolioID1 = (string) $portfolioID;
			$group_key    = $group_key . "-" . $portfolioID;
			$link         = $row->sl_url;
			$catForFilter = explode( ",", $row->category );
			?>
			<div
				class="portelement portelement_<?php echo esc_attr($portfolioID); ?> colorbox_grouping  <?php foreach ( $catForFilter as $catForFilterValue ) {
					echo str_replace( " ", "_", $catForFilterValue ) . " ";
				} ?>" data-symbol="<?php echo esc_attr( $row->name ); ?>" data-category="alkaline-earth">
				<div class="left-block_<?php echo $portfolioID; ?>">
					<div class="main-image-block_<?php echo $portfolioID; ?> add-H-relative">
						<?php $imgurl = explode( ";", $row->image_url ); ?>
						<?php
						if ( $row->image_url != ';' ) {
							switch ( portfolio_gallery_youtube_or_vimeo_portfolio( $imgurl[0] ) ) {
								case 'image':

									?>
									<a href="<?php echo esc_url( $imgurl[0] ); ?>"
									   class=" portfolio-group<?php echo esc_attr($group_key); ?>"
									   title="<?php echo esc_attr( $row->name ); ?>" data-groupID="<?php echo esc_attr($group_key);?>"><img
											alt="<?php echo esc_attr( $row->name ); ?>"
											id="wd-cl-img<?php echo esc_attr($key); ?>"
											src="<?php echo esc_url( portfolio_gallery_get_image_by_sizes_and_src( $imgurl[0], array(
												$portfolio_gallery_get_options['portfolio_gallery_ht_view3_mainimage_width'],
												''
											), false ) ); ?>"></a>
									<?php
									break;
								case 'youtube':
									$videourl = portfolio_gallery_get_video_id_from_url( $imgurl[0] ); ?>
									<a href="https://www.youtube.com/embed/<?php echo esc_attr($videourl[0]); ?>"
									   class="huge_it_portfolio_item pyoutube portfolio-group<?php echo esc_attr($group_key); ?> add-H-block"
									   title="<?php echo esc_attr( $row->name ); ?>" data-groupID="<?php echo esc_attr($group_key);?>">
										<img
											src="//img.youtube.com/vi/<?php echo esc_attr($videourl[0]); ?>/mqdefault.jpg">
										<div class="play-icon <?php echo esc_attr($videourl[1]); ?>-icon"></div>
									</a>

									<?php break;
								case 'vimeo':
									$videourl = portfolio_gallery_get_video_id_from_url( $imgurl[0] );
									$hash = unserialize( wp_remote_fopen( "http://vimeo.com/api/v2/video/" . $videourl[0] . ".php" ) );
									$imgsrc = $hash[0]['thumbnail_large']; ?>
									<a class="huge_it_portfolio_item pvimeo portfolio-group<?php echo esc_attr($group_key); ?> add-H-block"
									   href="http://player.vimeo.com/video/<?php echo esc_attr($videourl[0]); ?>"
									   title="<?php echo esc_attr( $row->name ); ?>" data-groupID="<?php echo esc_attr($group_key);?>">
										<img src="<?php echo esc_attr( $imgsrc ); ?>"
										     alt="<?php echo esc_attr( $row->name ); ?>"/>
										<div class="play-icon <?php echo esc_attr($videourl[1]); ?>-icon"></div>
									</a>
									<?php
							}
						} else { ?>
							<a href="<?php echo esc_url( $imgurl[0] ); ?>"
							   class=" portfolio-group<?php echo esc_attr($group_key); ?>" data-groupID="<?php echo esc_attr($group_key);?>"><img
									alt="<?php echo esc_attr( $row->name ); ?>"
									id="wd-cl-img<?php echo esc_attr($key); ?>" src="images/noimage.jpg"></a>
							<?php
						}
						?>
					</div>
					<div class="thumbs-block">
						<?php
						if ( $portfolio_gallery_get_options["portfolio_gallery_ht_view3_show_thumbs"] == 'on' ) {
							?>
							<ul class="thumbs-list_<?php echo esc_attr($portfolioID); ?>">
								<?php
								$imgurl             = explode( ";", $row->image_url );
								array_pop( $imgurl );
								array_shift( $imgurl );

								foreach ( $imgurl as $key => $img ) {
									switch ( portfolio_gallery_youtube_or_vimeo_portfolio( $img ) ) {
										case 'image':
											?>
											<li><a href="<?php echo esc_url( $img ); ?>"
											       class=" portfolio-group<?php echo esc_attr($group_key); ?> " data-groupID="<?php echo esc_attr($group_key);?>"><img alt="<?php echo esc_attr( $row->name ); ?>"
														src="<?php echo esc_url( portfolio_gallery_get_image_by_sizes_and_src( $img, array(
															$portfolio_gallery_get_options['portfolio_gallery_ht_view3_thumbs_width'],
															$portfolio_gallery_get_options['portfolio_gallery_ht_view3_thumbs_height']
														), true ) ); ?>"></a>
											</li>
											<?php break;
										case 'youtube':
											$videourl = portfolio_gallery_get_video_id_from_url( $img ); ?>
											<li>
												<a href="https://www.youtube.com/embed/<?php echo esc_attr($videourl[0]); ?>"
												   class="huge_it_portfolio_item pyoutube portfolio-group<?php echo $group_key; ?>  add-H-relative"
												   title="<?php echo esc_attr( $row->name ); ?>" data-groupID="<?php echo esc_attr($group_key);?>">
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
											$hash   = unserialize( wp_remote_fopen( "http://vimeo.com/api/v2/video/" . $videourl[0] . ".php" ) );
											$imgsrc = $hash[0]['thumbnail_large']; ?>
											<li>
												<a class="huge_it_portfolio_item pvimeo portfolio-group<?php echo esc_attr($group_key); ?>  add-H-relative"
												   href="http://player.vimeo.com/video/<?php echo esc_attr($videourl[0]); ?>"
												   title="<?php echo esc_attr( $row->name ); ?>" data-groupID="<?php echo esc_attr($group_key);?>">
													<img src="<?php echo esc_attr( $imgsrc ); ?>"
													     alt="<?php echo esc_attr( $row->name ); ?>"/>
													<div
														class="play-icon <?php echo esc_attr($videourl[1]); ?>-icon"></div>
												</a>
											</li>
											<?php
											break;
									}

								}
								?>
							</ul>
							<?php
						}
						?>
					</div>
				</div>
				<div class="right-block">
					<?php if ( $row->name != '' ) { ?>
					<div class="title-block_<?php echo esc_attr( $portfolioID); ?>">
						<h3><?php echo $row->name; ?></h3></div><?php } ?>
					<?php
					if ( $portfolio_gallery_get_options["portfolio_gallery_ht_view3_show_description"] == 'on' ) {
						if ( $row->description != '' ) { ?>
							<div class="description-block_<?php echo esc_attr($portfolioID); ?>">
								<p><?php echo $row->description ; ?></p></div>
						<?php } ?>
					<?php }

					if ( $link != '' ) {
						if ( $portfolio_gallery_get_options["portfolio_gallery_ht_view3_show_linkbutton"] == 'on' && $portfolio_gallery_get_options["portfolio_gallery_ht_view3_linkbutton_text"] != '' && $link != '' ) {
							?>
							<div class="button-block">
								<a href="<?php echo esc_url( $link ); ?>" <?php if ( $row->link_target == "on" ) {
									echo 'target="_blank"';
								} ?>><?php echo esc_attr($portfolio_gallery_get_options["portfolio_gallery_ht_view3_linkbutton_text"]); ?></a>
							</div>
						<?php }
					} ?>
				</div>
			</div>

			<?php
		}
		?>

	</div>
</section>