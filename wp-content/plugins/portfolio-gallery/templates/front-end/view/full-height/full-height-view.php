<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}
?>
<section id="huge_it_portfolio_content_<?php echo esc_attr($portfolioID); ?>"
         class="portfolio-gallery-content <?php if ( $portfolioShowSorting == 'on' ) {
	         echo 'sortingActive ';
         }
         if ( $portfolioShowFiltering == 'on' ) {
	         echo 'filteringActive';
         } ?>"
         data-portfolio-id="<?php echo esc_attr($portfolioID); ?>">
	<div id="huge-it-container-loading-overlay_<?php echo esc_attr($portfolioID); ?>"></div>
	<?php if ( ( $sortingFloatFullHeight == 'left' && $filteringFloatFullHeight == 'left' ) || ( $sortingFloatFullHeight == 'right' && $filteringFloatFullHeight == 'right' ) ) { ?>
	<div id="huge_it_portfolio_options_and_filters_<?php echo esc_attr($portfolioID); ?>">
		<?php } ?>
		<?php if ( $portfolioShowSorting == "on" ) { ?>
			<div id="huge_it_portfolio_options_<?php echo esc_attr($portfolioID); ?>"
			     data-sorting-position="<?php echo esc_attr($portfolio_gallery_get_options["portfolio_gallery_ht_view1_sorting_float"]); ?>">
				<ul id="sort-by" class="option-set clearfix" data-option-key="sortBy">
					<?php if ( $portfolio_gallery_get_options["portfolio_gallery_ht_view1_sorting_name_by_default"] != '' ): ?>
						<li><a href="#sortBy=original-order" data-option-value="original-order" class="selected"
						       data><?php echo esc_attr($portfolio_gallery_get_options["portfolio_gallery_ht_view1_sorting_name_by_default"]); ?></a></li>
					<?php endif; ?>
					<?php if ( $portfolio_gallery_get_options["portfolio_gallery_ht_view1_sorting_name_by_id"] != '' ): ?>
						<li><a href="#sortBy=id"
						       data-option-value="id"><?php echo esc_attr($portfolio_gallery_get_options["portfolio_gallery_ht_view1_sorting_name_by_id"]); ?></a>
						</li>
					<?php endif; ?>
					<?php if ( $portfolio_gallery_get_options["portfolio_gallery_ht_view1_sorting_name_by_name"] != '' ): ?>
						<li><a href="#sortBy=symbol"
						       data-option-value="symbol"><?php echo esc_attr($portfolio_gallery_get_options["portfolio_gallery_ht_view1_sorting_name_by_name"]); ?></a>
						</li>
					<?php endif; ?>
					<?php if ( $portfolio_gallery_get_options["portfolio_gallery_ht_view1_sorting_name_by_random"] != '' ): ?>
						<li id="shuffle"><a
								href='#shuffle'><?php echo esc_attr($portfolio_gallery_get_options["portfolio_gallery_ht_view1_sorting_name_by_random"]); ?></a>
						</li>
					<?php endif; ?>
				</ul>
				<ul id="port-sort-direction" class="option-set clearfix" data-option-key="sortAscending">
					<?php if ( $portfolio_gallery_get_options["portfolio_gallery_ht_view1_sorting_name_by_asc"] != '' ): ?>
						<li><a href="#sortAscending=true" data-option-value="true"
						       class="selected"><?php echo esc_attr($portfolio_gallery_get_options["portfolio_gallery_ht_view1_sorting_name_by_asc"]); ?></a>
						</li>
					<?php endif; ?>
					<?php if ( $portfolio_gallery_get_options["portfolio_gallery_ht_view1_sorting_name_by_desc"] != '' ): ?>
						<li><a href="#sortAscending=false"
						       data-option-value="false"><?php echo esc_attr($portfolio_gallery_get_options["portfolio_gallery_ht_view1_sorting_name_by_desc"]); ?></a>
						</li>
					<?php endif; ?>
				</ul>
			</div>
		<?php }
		if ( $portfolioShowFiltering == "on" ) { ?>
			<div id="huge_it_portfolio_filters_<?php echo esc_attr($portfolioID); ?>"
			     data-filtering-position="<?php echo esc_attr($portfolio_gallery_get_options["portfolio_gallery_ht_view1_filtering_float"]); ?>">
				<ul>
					<li rel="*"><a><?php echo esc_attr($portfolio_gallery_get_options["portfolio_gallery_ht_view1_cat_all"]); ?></a></li>
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
		<?php if ( ( $sortingFloatFullHeight == 'left' && $filteringFloatFullHeight == 'left' ) || ( $sortingFloatFullHeight == 'right' && $filteringFloatFullHeight == 'right' ) ) { ?>
	</div>
<?php } ?>
	<div id="huge_it_portfolio_container_<?php echo esc_attr($portfolioID); ?>"
	     class="huge_it_portfolio_container super-list variable-sizes clearfix view-<?php echo esc_attr($view_slug); ?>"
	     data-show-loading="<?php echo esc_attr($portfolioShowLoading); ?>"
	     data-show-center="<?php echo esc_attr($portfolioposition); ?>" <?php if ( $portfolio_gallery_get_options["portfolio_gallery_ht_view1_sorting_float"] == "top" && $portfolio_gallery_get_options["portfolio_gallery_ht_view1_filtering_float"] == "top" ) {
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
			$descnohtml   = strip_tags( $row->description );
			$result       = substr( $descnohtml, 0, 50 );
			$catForFilter = explode( ",", $row->category );
			?>
			<div
				class="portelement portelement_<?php echo esc_attr($portfolioID); ?> colorbox_grouping <?php foreach ( $catForFilter as $catForFilterValue ) {
					echo str_replace( " ", "_", $catForFilterValue ) . " ";
				} ?>" data-symbol="<?php echo esc_attr(esc_attr( $row->name )); ?>" data-category="alkaline-earth">
				<div class="default-block_<?php echo esc_attr($portfolioID); ?>">
					<div class="image-block_<?php echo esc_attr($portfolioID); ?> add-H-relative">
						<?php $imgurl = explode( ";", $row->image_url ); ?>
						<?php
						if ( $row->image_url != ';' ) {
							switch ( portfolio_gallery_youtube_or_vimeo_portfolio( $imgurl[0] ) ) {
								case 'image': ?>
									<a href="<?php echo esc_url( $imgurl[0] ); ?>"
									   class=" portfolio-group<?php echo esc_attr($group_key); ?> "
									   title="<?php echo esc_attr( $row->name ); ?>" data-groupID="<?php echo esc_attr($group_key);?>">
										<img alt="<?php echo esc_attr( $row->name ); ?>"
										     id="wd-cl-img<?php echo esc_attr($key); ?>"
										     src="<?php echo esc_url( portfolio_gallery_get_image_by_sizes_and_src( $imgurl[0], array(
											     $portfolio_gallery_get_options['portfolio_gallery_ht_view1_block_width'],
											     ''
										     ), false ) ); ?>"/>
									</a>
									<?php
									break;
								case 'youtube':
									$videourl = portfolio_gallery_get_video_id_from_url( $imgurl[0] ); ?>
									<a href="https://www.youtube.com/embed/<?php echo $videourl[0]; ?>"
									   class="huge_it_portfolio_item pyoutube portfolio-group<?php echo esc_attr($group_key); ?>"
									   title="<?php echo esc_attr( $row->name ); ?>"data-groupID="<?php echo esc_attr($group_key);?>">
										<img alt="<?php echo esc_attr( $row->name ); ?>"
										     id="wd-cl-img<?php echo esc_attr($key); ?>"
										     src="//img.youtube.com/vi/<?php echo esc_attr($videourl[0]); ?>/mqdefault.jpg"/>
										<div class="play-icon <?php echo esc_attr($videourl[1]); ?>-icon"></div>
									</a>
									<?php
									break;
								case 'vimeo':
									$videourl = portfolio_gallery_get_video_id_from_url( $imgurl[0] );
									$hash = unserialize( wp_remote_fopen( "http://vimeo.com/api/v2/video/" . $videourl[0] . ".php" ) );
									$imgsrc = $hash[0]['thumbnail_large'];
									?>
									<a class="huge_it_portfolio_item pvimeo portfolio-group<?php echo esc_attr($group_key); ?> "
									   href="http://player.vimeo.com/video/<?php echo esc_attr($videourl[0]); ?>"
									   title="<?php echo esc_attr( $row->name ); ?>"data-groupID="<?php echo esc_attr($group_key);?>">
										<img alt="<?php echo esc_attr( $row->name ); ?>"
										     src="<?php echo esc_attr( $imgsrc ); ?>"/>
										<div class="play-icon <?php echo esc_attr($videourl[1]); ?>-icon"></div>
									</a>
									<?php break;

							}
						} else { ?>
							<img alt="<?php echo esc_attr( $row->name ); ?>" id="wd-cl-img<?php echo $key; ?>"
							     src="images/noimage.jpg"/>
							<?php
						} ?>
					</div>
					<?php if ( $row->name != '' ) { ?>
						<div class="title-block_<?php echo esc_attr($portfolioID); ?>">
							<h3 class="title"><?php echo $row->name; ?></h3>
						</div>
					<?php } ?>
				</div>

				<div class="wd-portfolio-panel_<?php echo esc_attr($portfolioID); ?>" id="panel<?php echo esc_attr($key); ?>">
					<?php $imgurl = explode( ";", $row->image_url );
					array_shift( $imgurl );
					if ( $portfolio_gallery_get_options['portfolio_gallery_ht_view1_show_thumbs'] == 'on' and $portfolio_gallery_get_options['portfolio_gallery_ht_view1_thumbs_position'] == "before" && count( $imgurl ) != 1 ) {
						?>
						<div>
							<ul class="thumbs-list_<?php echo esc_attr($portfolioID); ?>">
								<?php
								array_pop( $imgurl );
								foreach ( $imgurl as $key1 => $img ) {
									?>
									<li>
										<?php
										switch ( portfolio_gallery_youtube_or_vimeo_portfolio( $img ) ) {
											case 'image':
												?>
												<a href="<?php echo esc_url( $img ); ?>"
												   class=" portfolio-group<?php echo esc_attr($group_key); ?> "data-groupID="<?php echo esc_attr($group_key);?>"><img alt="<?php echo esc_attr( $row->name ); ?>"
														src="<?php echo esc_url( portfolio_gallery_get_image_by_sizes_and_src( $img, $portfolio_gallery_get_options['portfolio_gallery_ht_view1_thumbs_width'], true ) ); ?>"></a>
												<?php
												break;
											case 'youtube':
												$videourl = portfolio_gallery_get_video_id_from_url( $img ); ?>
												<a href="https://www.youtube.com/embed/<?php echo esc_attr($videourl[0]); ?>"
												   class="huge_it_portfolio_item pyoutube portfolio-group<?php echo esc_attr($group_key); ?> "
												   title="<?php echo esc_attr($row->name); ?>" style="position:relative"data-groupID="<?php echo esc_attr($group_key);?>">
													<img alt="<?php echo esc_attr($row->name); ?>"
														src="//img.youtube.com/vi/<?php echo esc_attr($videourl[0]); ?>/mqdefault.jpg">
													<div class="play-icon youtube-icon"></div>
												</a>

												<?php
												break;
											case 'vimeo':
												$videourl = portfolio_gallery_get_video_id_from_url( $img );
												$hash = unserialize( wp_remote_fopen( "http://vimeo.com/api/v2/video/" . $videourl[0] . ".php" ) );
												$imgsrc = $hash[0]['thumbnail_large']; ?>
												<a class="huge_it_portfolio_item pvimeo portfolio-group<?php echo $group_key; ?> "
												   href="http://player.vimeo.com/video/<?php echo esc_attr($videourl[0]); ?>"
												   title="<?php echo esc_attr( $row->name ); ?>"
												   style="position:relative"data-groupID="<?php echo esc_attr($group_key);?>">
													<img src="<?php echo esc_attr( $imgsrc ); ?>"
													     alt="<?php echo esc_attr( $row->name ); ?>"/>
													<div class="play-icon vimeo-icon"></div>
												</a>
												<?php
												break;
										} ?>
									</li>
									<?php
								}
								?>
							</ul>
						</div>
					<?php }
					if ( $portfolio_gallery_get_options['portfolio_gallery_ht_view1_show_description'] == 'on' && $row->description != '' ) {
						?>
						<div class="description-block_<?php echo esc_attr($portfolioID); ?>">
							<p><?php echo $row->description; ?></p>
						</div>
					<?php }
					$imgurl = explode( ";", $row->image_url );
					array_shift( $imgurl );
					if ( $portfolio_gallery_get_options['portfolio_gallery_ht_view1_show_thumbs'] == 'on' and $portfolio_gallery_get_options['portfolio_gallery_ht_view1_thumbs_position'] == "after" && count( $imgurl ) != 1 ) {
						?>
						<div>
							<ul class="thumbs-list_<?php echo esc_attr($portfolioID); ?>">
								<?php
								array_pop( $imgurl );
								foreach ( $imgurl as $key1 => $img ) {
									?>
									<li>
										<?php
										switch ( portfolio_gallery_youtube_or_vimeo_portfolio( $img ) ) {
											case 'image':
												?>
												<a href="<?php echo esc_url( $img ); ?>"
												   class=" portfolio-group<?php echo esc_attr($group_key); ?> "data-groupID="<?php echo esc_attr($group_key);?>"><img alt="<?php echo esc_attr( $row->name ); ?>"
														src="<?php echo esc_url( portfolio_gallery_get_image_by_sizes_and_src( $img, $portfolio_gallery_get_options['portfolio_gallery_ht_view1_thumbs_width'], true ) ); ?>"></a>
												<?php
												break;
											case 'youtube':
												$videourl = portfolio_gallery_get_video_id_from_url( $img ); ?>
												<a href="https://www.youtube.com/embed/<?php echo esc_attr($videourl[0]); ?>"
												   class="huge_it_portfolio_item pyoutube portfolio-group<?php echo esc_attr($group_key); ?> "
												   title="<?php echo esc_attr( $row->name ); ?>"
												   style="position:relative"data-groupID="<?php echo esc_attr($group_key);?>">
													<img alt="<?php echo esc_attr($row->name); ?>"
														src="//img.youtube.com/vi/<?php echo esc_attr($videourl[0]); ?>/mqdefault.jpg">
													<div class="play-icon youtube-icon"></div>
												</a>

												<?php
												break;
											case 'vimeo':
												$videourl = portfolio_gallery_get_video_id_from_url( $img );
												$hash = unserialize( wp_remote_fopen( "http://vimeo.com/api/v2/video/" . $videourl[0] . ".php" ) );
												$imgsrc = $hash[0]['thumbnail_large']; ?>
												<a class="huge_it_portfolio_item pvimeo portfolio-group<?php echo esc_attr($group_key); ?> "
												   href="http://player.vimeo.com/video/<?php echo esc_attr($videourl[0]); ?>"
												   title="<?php echo esc_attr($row->name); ?>" style="position:relative" data-groupID="<?php echo esc_attr($group_key);?>">
													<img src="<?php echo esc_attr( $imgsrc ); ?>"
													     alt="<?php echo esc_attr( $row->name ); ?>"/>
													<div class="play-icon vimeo-icon"></div>
												</a>
												<?php
												break;
										} ?>
									</li>
									<?php
								}
								?>
							</ul>
						</div>
					<?php }
					if ( $portfolio_gallery_get_options['portfolio_gallery_ht_view1_show_linkbutton'] == 'on' && $link != '' ) {
						?>
						<div class="button-block">
							<a href="<?php echo esc_url( $link ); ?>" <?php if ( $row->link_target == "on" ) {
								echo 'target="_blank"';
							} ?>><?php echo $portfolio_gallery_get_options['portfolio_gallery_ht_view1_linkbutton_text']; ?></a>
						</div>
					<?php } ?>
				</div>
			</div>

			<?php
		}
		?>
	</div>
</section>