<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}
global $wpdb;
$portfolio_wp_nonce = wp_create_nonce( 'huge_it_portfolio_nonce' );
$id                 = intval( $_GET['id'] );
?>
	<div id="gallery-image-zoom">
		<img src=""/>
	</div>
	<div class="wrap">
		<?php require( PORTFOLIO_GALLERY_TEMPLATES_PATH . DIRECTORY_SEPARATOR . 'admin' . DIRECTORY_SEPARATOR . 'portfolio-gallery-admin-free-banner.php' ); ?>
		<?php
		$path_site2  = PORTFOLIO_GALLERY_IMAGES_URL;
		$form_action = wp_nonce_url( 'admin.php?page=portfolios_huge_it_portfolio&id=' . $id, 'apply_portfolio_' . $row->id, 'hugeit_portfolio_apply_portfolio_nonce' );
		?>
		<form action="<?php echo $form_action; ?>" method="post" name="adminForm"
		      id="adminForm">
			<input type="hidden" class="changedvalues" value="" name="changedvalues" size="80">
			<div id="poststuff">
				<div id="portfolio-header">
					<ul id="portfolios-list">
						<?php
						foreach ( $rowsld as $rowsldires ) {
							if ( $rowsldires->id != $row->id ) {
								$edit_portfolio_safe_link = wp_nonce_url(
									'admin.php?page=portfolios_huge_it_portfolio&task=edit_cat&id=' . $rowsldires->id,
									'edit_portfolio_' . $rowsldires->id,
									'hugeit_portfolio_edit_portfolio_nonce'
								);
								?>
								<li>
									<a href="#"
									   onclick="window.location.href='<?php echo esc_url( 'admin.php?page=portfolios_huge_it_portfolio&task=edit_cat&id=' . $rowsldires->id ) ?>'"><?php echo esc_html($rowsldires->name); ?></a>
								</li>
								<?php
							} else { ?>
								<li class="active"
								    onclick="this.firstElementChild.style.width = ((this.firstElementChild.value.length + 1) * 8) + 'px';"
								    style="background-image:url(<?php echo PORTFOLIO_GALLERY_IMAGES_URL . '/admin_images/edit.png'; ?>);cursor: pointer;">
									<input class="text_area" onkeyup="portfoliosListNameChange(this)"
									       onfocus="this.style.width = ((this.value.length + 1) * 8) + 'px'" type="text"
									       name="name" id="name" maxlength="250"
									       value="<?php echo esc_html( stripslashes( $row->name ) ); ?>"/>
								</li>
								<?php
							}
						}
						$add_new_portfolio_safe_link = wp_nonce_url(
							'admin.php?page=portfolios_huge_it_portfolio&task=add_portfolio',
							'add_new_portfolio',
							'hugeit_portfolio_add_portfolio_nonce'
						);
						$add_video_nonce             = wp_create_nonce( 'portfolio_add_video_nonce' . $row->id );
						?>
						<li class="add-new">
							<a onclick="window.location.href='<?php echo $add_new_portfolio_safe_link; ?>'">+</a>
						</li>
					</ul>
				</div>
				<div id="post-body" class="metabox-holder columns-2">
					<!-- Content -->
					<div id="post-body-content">
						<?php add_thickbox(); ?>
						<div id="post-body">
							<div id="post-body-heading">
								<div id="img_preview">
									<h3><?php echo __( 'Projects / Images', 'portfolio-gallery' ); ?></h3>
									<input type="hidden" name="imagess" id="_unique_name"/>
									<input type="hidden" name="portfolio_gallery_admin_image_hover_preview"
									       value="off"/>
									<label
										for="img_hover_preview"><?php _e( 'Image preview on hover', 'portfolio-gallery' ); ?>
										<input type="checkbox" id="img_hover_preview"
										       name="portfolio_gallery_admin_image_hover_preview"
										       value="on" <?php if ( get_option( 'portfolio_gallery_admin_image_hover_preview' ) == 'on' )
											echo 'checked' ?>>
									</label>
								</div>
								<div class="huge-it-newuploader uploader  add-new-image">
									<input type="button" class="button button-primary wp-media-buttons-icon"
									       name="_unique_name_button"
									       id="_unique_name_button" value="Add Project / Image"/>
								</div>

								<a href="#TB_inline?width=700&height=500&inlineId=portfolio_gallery_add_videos"
								   class="button button-primary add-video-slide thickbox" id="slideup3s"
								   value="iframepop" data-portfolio-gallery-id="<?php echo $row->id; ?>"
								   data-add-video-nonce="<?php echo $add_video_nonce; ?>">
									<span class="wp-media-buttons-icon"></span>
									<?php echo __( 'Add Video', 'portfolio-gallery' ); ?>
								</a>
							</div>
							<ul id="images-list" data-portfolio-gallery-id="<?php echo $row->id; ?>">
								<?php
								$j      = 2;
								$myrows = explode( ",", $row->categories );

								foreach ( $rowim as $key => $rowimages ) {
									if ( $rowimages->sl_type == '' ) {
										$rowimages->sl_type = 'image';
									}
									$add_thumb_video_nonce = wp_create_nonce( 'add_thumb_video_nonce' . $rowimages->id );
									switch ( $rowimages->sl_type ) {
										case 'image': ?>
											<li class='portfolio-item <?php if ( $j % 2 == 0 ) {
												echo "has-background";
											}
											$j ++; ?>' data-portfolio-item-id="<?php echo $rowimages->id; ?>">
												<input class="order_by" type="hidden"
												       name="order_by_<?php echo $rowimages->id; ?>"
												       value="<?php echo $rowimages->ordering; ?>"/>
												<div class="image-container">
													<ul class="widget-images-list">
														<?php $imgurl = explode( ";", $rowimages->image_url );
														array_pop( $imgurl );
														$i = 0;
														foreach ( $imgurl as $key1 => $img ) {
															$edit_thumb_video_nonce = wp_create_nonce( 'edit_thumb_video_nonce' . $rowimages->id . $i );
															if ( portfolio_gallery_youtube_or_vimeo_portfolio( $img ) != 'image' ) {
																$video_id = portfolio_gallery_get_video_id_from_url( $img );
																if ( portfolio_gallery_youtube_or_vimeo_portfolio( $img ) == 'youtube' ) {
																	$iframe_video_src = "//www.youtube.com/embed/" . $video_id[0] . "?modestbranding=1&showinfo=0&controls=0";
																} else {
																	$iframe_video_src = "//player.vimeo.com/video/" . $video_id[0] . "?title=0&amp;byline=0&amp;portrait=0";
																}
																?>
																<li class="editthisvideo editthisimage<?php echo $key; ?><?php if ( $i == 0 ) {
																	echo 'first';
																} ?>" data-video-index="<?php echo $i; ?>"
																    data-iframe-src="<?php echo $iframe_video_src; ?>">
																	<img class="editthisvideo"
																	     src="<?php echo portfolio_gallery_get_image_from_video( $img ); ?>"
																	     data-video-src="<?php echo esc_attr( $img ); ?>"
																	     alt="<?php echo esc_attr( $img ); ?>"/>
																	<div
																		class="play-icon <?php echo portfolio_gallery_youtube_or_vimeo_portfolio( $img ) == 'youtube' ? 'youtube-icon' : 'vimeo-icon'; ?>"></div>
																	<a class="thickbox edit-video-button"
																	   data-edit-thumb-video="<?php echo $edit_thumb_video_nonce; ?>"
																	   href="#TB_inline?width=700&height=500&inlineId=portfolio-gallery-edit-video">
																		<input type="button" class="edit-video"
																		       id="edit-video_<?php echo $rowimages->id; ?>_<?php echo $key; ?>"
																		       value="Edit"/>
																	</a>
																	<a href="#remove" title="<?php echo $i; ?>"
																	   class="remove-image">remove</a>
																</li>
																<?php
															} else { ?>
																<li class="editthisimage editthisimage<?php echo $key; ?> <?php if ( $i == 0 ) {
																	echo 'first';
																	if ( strpos( $img, 'projects' ) != false ) {
																		echo ' default-image';
																	}
																} ?>">
																	<img
																		src="<?php echo esc_attr( portfolio_gallery_get_image_by_sizes_and_src( $img, array(), true ) ); ?>"
																		data-img-src="<?php echo esc_attr( $img ); ?>"/>
																	<input type="button" class="edit-image" id=""
																	       value="Edit"/>
																	<a href="#remove" title="<?php echo $i; ?>"
																	   class="remove-image">remove</a>
																</li>
																<?php
															}
															$i ++;
														} ?>
														<li class="add-image-box">
															<div class="add-thumb-project">
																<img
																	src="<?php echo Portfolio_Gallery()->plugin_url() . '/assets/images/admin_images/plus.png'; ?>"
																	class="plus" alt=""/>
															</div>
															<div class="add-image-video">
																<input type="hidden"
																       name="imagess<?php echo $rowimages->id; ?>"
																       id="unique_name<?php echo $rowimages->id; ?>"
																       class="all-urls"
																       value="<?php echo $rowimages->image_url; ?>"/>
																<a title="Add video" class="add-video-slide thickbox"
																   data-add-thumb-video-nonce="<?php echo $add_thumb_video_nonce; ?>"
																   href="#TB_inline?width=700&height=500&inlineId=portfolio_gallery_add_videos">
																	<img
																		src="<?php echo Portfolio_Gallery()->plugin_url() . '/assets/images/admin_images/icon-video.png'; ?>"
																		title="Add video" alt="" class="plus"/>
																	<input type="button"
																	       class="button<?php echo $rowimages->id; ?> wp-media-buttons-icon add-video"
																	       id="unique_name_button<?php echo $rowimages->id; ?>"
																	       value="+"/>
																</a>
																<div class="add-image-slide" title="Add image">
																	<img
																		src="<?php echo Portfolio_Gallery()->plugin_url() . '/assets/images/admin_images/icon-img.png'; ?>"
																		title="Add image" alt="" class="plus"/>
																	<input type="button"
																	       class="button<?php echo $rowimages->id; ?> wp-media-buttons-icon add-image"
																	       id="unique_name_button<?php echo $rowimages->id; ?>"
																	       value="+"/>
																</div>
															</div>
														</li>
													</ul>
												</div>
												<div class="image-options">
													<div class="options-container">
														<div>
															<input class="text_area" type="text"
															       placeholder="<?php echo __( 'Title', 'portfolio-gallery' ); ?>"
															       id="titleimage<?php echo $rowimages->id; ?>"
															       name="titleimage<?php echo $rowimages->id; ?>"
															       value="<?php echo htmlspecialchars( $rowimages->name ); ?>">
														</div>
														<div class="description-block">
                                                        <textarea id="im_description<?php echo $rowimages->id; ?>"
                                                                  placeholder="<?php echo __( 'Description', 'portfolio-gallery' ); ?>"
                                                                  name="im_description<?php echo $rowimages->id; ?>"><?php echo esc_html( stripslashes( $rowimages->description ) ); ?></textarea>
														</div>
														<div class="link-block">
															<input class="text_area url-input" type="text"
															       placeholder="<?php echo __( 'URL', 'portfolio-gallery' ); ?>"
															       id="sl_url<?php echo $rowimages->id; ?>"
															       name="sl_url<?php echo $rowimages->id; ?>"
															       value="<?php echo esc_attr( $rowimages->sl_url ); ?>">
															<label class="long"
															       for="sl_link_target<?php echo $rowimages->id; ?>">
																<span><?php echo __( 'Open in new tab', 'portfolio-gallery' ); ?></span>
																<input type="hidden"
																       name="sl_link_target<?php echo $rowimages->id; ?>"
																       value=""/>
																<input <?php if ( $rowimages->link_target == 'on' ) {
																	echo 'checked="checked"';
																} ?>
																	class="link_target" type="checkbox"
																	id="sl_link_target<?php echo $rowimages->id; ?>"
																	name="sl_link_target<?php echo $rowimages->id; ?>"/>
															</label>
														</div>
													</div>
													<div class="category-container">
														<strong><?php echo __( 'Select Categories', 'portfolio-gallery' ); ?></strong>
														<em>(<?php echo __( 'Press Ctrl And Select multiply', 'portfolio-gallery' ); ?>
															)</em>
														<select id="multipleSelect" multiple="multiple" disabled>
															<?php
															$huge_cat = explode( ",", $rowimages->category );
															foreach ( $myrows as $value ) {
																if ( ! empty( $value ) ) {
																	?>
																	<option <?php if ( in_array( str_replace( ' ', '_', $value ), str_replace( ' ', '_', $huge_cat ) ) ) {
																		echo "selected='selected' ";
																	} ?>
																		value="<?php echo esc_attr( str_replace( ' ', '_', $value ) ); ?>">
																		<?php echo str_replace( '_', ' ', $value ); ?>
																	</option>
																	<?php
																}
															}
															$remove_project_safe_link = wp_nonce_url(
																'admin.php?page=portfolios_huge_it_portfolio&id=' . $row->id . '&task=apply&removeslide=' . $rowimages->id,
																'remove_project_' . $rowimages->id,
																'hugeit_portfolio_apply_portfolio_nonce'
															);
															?>
														</select>
														<input type="hidden" id="category<?php echo $rowimages->id; ?>"
														       name="category<?php echo $rowimages->id; ?>"
														       value="<?php echo esc_attr( str_replace( ' ', '_', $rowimages->category ) ); ?>"/>
													</div>
													<div class="remove-image-container">
														<a class="button remove-image"
														   href="<?php echo $remove_project_safe_link; ?>"><?php echo __( 'Remove Project', 'portfolio-gallery' ); ?></a>
													</div>
												</div>
												<div class="clear"></div>
											</li>
											<?php
											break;
										case 'video':
											?>
											<li class='portfolio-item <?php if ( $j % 2 == 0 ) {
												echo "has-background";
											}
											$j ++; ?>' data-portfolio-item-id="<?php echo $rowimages->id; ?>">
												<input class="order_by" type="hidden"
												       name="order_by_<?php echo $rowimages->id; ?>"
												       value="<?php echo esc_attr( $rowimages->ordering ); ?>"/>
												<div class="video-container">
													<ul class="widget-images-list">
														<?php $imgurl = explode( ";", $rowimages->image_url );
														array_pop( $imgurl );
														$i = 0;
														foreach ( $imgurl as $key1 => $img ) {
															$edit_thumb_video_nonce = wp_create_nonce( 'edit_thumb_video_nonce' . $rowimages->id . $i );
															if ( portfolio_gallery_youtube_or_vimeo_portfolio( $img ) != 'image' ) :
																$video_id = portfolio_gallery_get_video_id_from_url( $img );
																if ( portfolio_gallery_youtube_or_vimeo_portfolio( $img ) == 'youtube' ) {
																	$iframe_video_src = "//www.youtube.com/embed/" . $video_id[0] . "?modestbranding=1&showinfo=0&controls=0";
																} else {
																	$iframe_video_src = "//player.vimeo.com/video/" . $video_id[0] . "?title=0&amp;byline=0&amp;portrait=0";
																} ?>
																<li class="editthisvideo editthisimage<?php echo $key; ?><?php if ( $i == 0 ) {
																	echo 'first';
																} ?>" data-video-index="<?php echo $i; ?>"
																    data-iframe-src="<?php echo $iframe_video_src; ?>">
																	<img class="editthisvideo"
																	     src="<?php echo esc_attr( portfolio_gallery_get_image_from_video( $img ) ); ?>"
																	     data-video-src="<?php echo esc_attr( $img ); ?>"
																	     alt="<?php echo esc_attr( $img ); ?>"/>
																	<div
																		class="play-icon <?php echo portfolio_gallery_youtube_or_vimeo_portfolio( $img ) == 'youtube' ? 'youtube-icon' : 'vimeo-icon'; ?>"></div>
																	<a class="thickbox edit-video-button"
																	   data-edit-thumb-video="<?php echo $edit_thumb_video_nonce; ?>"
																	   href="#TB_inline?width=700&height=500&inlineId=portfolio-gallery-edit-video">
																		<input type="button" class="edit-video"
																		       id="edit-video_<?php echo $rowimages->id; ?>_<?php echo $key; ?>"
																		       value="Edit"/>
																	</a>
																	<a href="#remove" title="<?php echo $i; ?>"
																	   class="remove-image">remove</a>
																</li>
																<?php
															else : ?>
																<li class="editthisimage editthisimage<?php echo $key;
																if ( $i == 0 ) {
																	echo 'first';
																} ?>">
																	<img
																		src="<?php echo esc_attr( portfolio_gallery_get_image_by_sizes_and_src( $img, array(), true ) ); ?>"
																		data-img-src="<?php echo esc_attr( $img ); ?>"/>
																	<input type="button" class="edit-image" id=""
																	       value="Edit"/>
																	<a href="#remove" title="<?php echo $i; ?>"
																	   class="remove-image">remove</a>
																</li>
																<?php
															endif;
															$i ++;
														} ?>

														<li class="add-image-box">
															<div class="add-thumb-project">
																<img
																	src="<?php echo Portfolio_Gallery()->plugin_url() . '/assets/images/admin_images/plus.png'; ?>"
																	class="plus" alt=""/>
															</div>
															<div class="add-image-video">
																<input type="hidden"
																       name="imagess<?php echo esc_attr( $rowimages->id ); ?>"
																       id="unique_name<?php echo esc_attr( $rowimages->id ); ?>"
																       class="all-urls"
																       value="<?php echo esc_attr( $rowimages->image_url ); ?>"/>
																<a title="Add video" class="add-video-slide thickbox"
																   data-add-thumb-video-nonce="<?php echo $add_thumb_video_nonce; ?>"
																   href="#TB_inline?width=700&height=500&inlineId=portfolio_gallery_add_videos">
																	<img
																		src="<?php echo esc_attr( Portfolio_Gallery()->plugin_url() . '/assets/images/admin_images/icon-video.png' ); ?>"
																		title="Add video" alt="" class="plus"/>
																	<input type="button"
																	       class="button<?php echo esc_attr( $rowimages->id ); ?> wp-media-buttons-icon add-video"
																	       id="unique_name_button<?php echo esc_attr( $rowimages->id ); ?>"
																	       value="+"/>
																</a>
																<div class="add-image-slide" title="Add image">
																	<img
																		src="<?php echo esc_attr( Portfolio_Gallery()->plugin_url() . '/assets/images/admin_images/icon-img.png' ); ?>"
																		title="Add image" alt="" class="plus"/>
																	<input type="button"
																	       class="button<?php echo $rowimages->id; ?> wp-media-buttons-icon add-image"
																	       id="unique_name_button<?php echo $rowimages->id; ?>"
																	       value="+"/>
																</div>
															</div>
														</li>
													</ul>
												</div>
												<div class="image-options">
													<div class="options-container">
														<div>
															<input class="text_area" type="text"
															       placeholder="<?php echo __( 'Title', 'portfolio-gallery' ); ?>"
															       id="titleimage<?php echo $rowimages->id; ?>"
															       name="titleimage<?php echo $rowimages->id; ?>"
															       value="<?php echo esc_html( stripslashes( $rowimages->name ) ); ?>">
														</div>
														<div class="description-block">
                                                        <textarea id="im_description<?php echo $rowimages->id; ?>"
                                                                  placeholder="<?php echo __( 'Description', 'portfolio-gallery' ); ?>"
                                                                  name="im_description<?php echo $rowimages->id; ?>"><?php echo esc_html( stripslashes( $rowimages->description ) ); ?></textarea>
														</div>
														<div class="link-block">
															<input class="text_area url-input" type="text"
															       placeholder="<?php echo __( 'URL', 'portfolio-gallery' ); ?>"
															       id="sl_url<?php echo $rowimages->id; ?>"
															       name="sl_url<?php echo $rowimages->id; ?>"
															       value="<?php echo esc_attr( $rowimages->sl_url ); ?>">
															<label class="long"
															       for="sl_link_target<?php echo $rowimages->id; ?>">
																<span>Open in new tab</span>
																<input type="hidden"
																       name="sl_link_target<?php echo $rowimages->id; ?>"
																       value=""/>
																<input <?php if ( $rowimages->link_target == 'on' ) {
																	echo 'checked="checked"';
																} ?> class="link_target" type="checkbox"
																     id="sl_link_target<?php echo $rowimages->id; ?>"
																     name="sl_link_target<?php echo $rowimages->id; ?>"/>
															</label>
														</div>
													</div>
													<div class="category-container">
														<strong><?php echo __( 'Select Categories', 'portfolio-gallery' ); ?></strong>
														<em>(<?php echo __( 'Press Ctrl And Select multiply', 'portfolio-gallery' ); ?>
															)</em>
														<select id="multipleSelect" multiple="multiple" disabled>
															<?php
															$huge_cat = explode( ",", $rowimages->category );
															foreach ( $myrows as $value ) {
																if ( ! empty( $value ) ) { ?>
																	<option <?php if ( in_array( str_replace( ' ', '_', $value ), str_replace( ' ', '_', $huge_cat ) ) ) {
																		echo "selected='selected' ";
																	} ?>
																		value="<?php echo esc_attr( str_replace( ' ', '_', $value ) ); ?>">
																		<?php echo str_replace( '_', ' ', $value ); ?>
																	</option>
																	<?php
																}
															}
															$remove_project_safe_link = wp_nonce_url(
																'admin.php?page=portfolios_huge_it_portfolio&id=' . $row->id . '&task=apply&removeslide=' . $rowimages->id,
																'remove_project_' . $rowimages->id,
																'hugeit_portfolio_apply_portfolio_nonce'
															);
															?>
														</select>
														<input type="hidden" id="category<?php echo $rowimages->id; ?>"
														       name="category<?php echo $rowimages->id; ?>"
														       value="<?php echo esc_attr( str_replace( ' ', '_', $rowimages->category ) ); ?>"/>
													</div>
													<div class="remove-image-container">
														<a class="button remove-image"
														   href="<?php echo $remove_project_safe_link; ?>"><?php echo __( 'Remove Project', 'portfolio-gallery' ); ?></a>
													</div>
												</div>
												<div class="clear"></div>
											</li>
											<?php break;
									}
								}
								?>
							</ul>
						</div>
					</div>
					<div id="postbox-container-1" class="postbox-container">
						<div id="side-sortables" class="meta-box-sortables ui-sortable">
							<div id="portfolio-unique-options" class="postbox">
								<h3 class="hndle">
									<span><?php echo __( 'Select The Portfolio/Gallery View', 'portfolio-gallery' ); ?></span>
								</h3>
								<ul id="portfolio-unique-options-list">
									<li>
										<label
											for="huge_it_portfolio_name"><?php echo __( 'Portfolio Name', 'portfolio-gallery' ); ?></label>
										<input type="text" name="name" id="huge_it_portfolio_name"
										       value="<?php echo esc_html( stripslashes( $row->name ) ); ?>"
										       onkeyup="sidebarNameChange(this)">
									</li>
									<li style="display:none;">
										<label
											for="sl_width"><?php echo __( 'The requested action is not valid.', 'portfolio-gallery' ); ?></label>
										<input type="text" name="sl_width" id="sl_width" value="1111"
										       class="text_area"/>
									</li>
									<li style="display:none;">
										<label
											for="sl_height"><?php echo __( 'Height', 'portfolio-gallery' ); ?></label>
										<input type="text" name="sl_height" id="sl_height"
										       value="<?php echo esc_html( stripslashes( $row->sl_height ) ); ?>"
										       class="text_area"/>
									</li>
									<li style="display:none;">
										<label
											for="pause_on_hover"><?php echo __( 'Pause on hover', 'portfolio-gallery' ); ?></label>
										<input type="hidden" value="off" name="pause_on_hover"/>
										<input type="checkbox" name="pause_on_hover" value="on"
										       id="pause_on_hover" <?php if ( $row->pause_on_hover == 'on' ) {
											echo 'checked="checked"';
										} ?> />
									</li>
									<li>
										<label
											for="portfolio_effects_list"><?php echo __( 'Select The View', 'portfolio-gallery' ); ?></label>
										<select name="portfolio_effects_list" id="portfolio_effects_list">
											<option <?php if ( $row->portfolio_list_effects_s == '0' ) {
												echo 'selected';
											} ?>
												value="0"><?php echo __( 'Blocks Toggle Up/Down', 'portfolio-gallery' ); ?></option>
											<option <?php if ( $row->portfolio_list_effects_s == '1' ) {
												echo 'selected';
											} ?>
												value="1"><?php echo __( 'Full-Height Blocks', 'portfolio-gallery' ); ?></option>
											<option <?php if ( $row->portfolio_list_effects_s == '2' ) {
												echo 'selected';
											} ?>
												value="2"><?php echo __( 'Gallery/Content-Popup', 'portfolio-gallery' ); ?></option>
											<option <?php if ( $row->portfolio_list_effects_s == '3' ) {
												echo 'selected';
											} ?>
												value="3"><?php echo __( 'Full-Width Blocks', 'portfolio-gallery' ); ?></option>
											<option <?php if ( $row->portfolio_list_effects_s == '4' ) {
												echo 'selected';
											} ?>
												value="4"><?php echo __( 'FAQ Toggle Up/Down', 'portfolio-gallery' ); ?></option>
											<option <?php if ( $row->portfolio_list_effects_s == '5' ) {
												echo 'selected';
											} ?>
												value="5"><?php echo __( 'Content Slider', 'portfolio-gallery' ); ?></option>
											<option <?php if ( $row->portfolio_list_effects_s == '6' ) {
												echo 'selected';
											} ?>
												value="6"><?php echo __( 'Lightbox-Gallery', 'portfolio-gallery' ); ?></option><option <?php if ( $row->portfolio_list_effects_s == '7' ) {
												echo 'selected';
											} ?>
												value="7"><?php echo __( 'Elastic Grid', 'portfolio-gallery' ); ?></option>
										</select>
									</li>

									<li style="display:none;" class="for-content-slider">
										<label
											for="sl_pausetime"><?php echo __( 'Pause time', 'portfolio-gallery' ); ?></label>
										<input type="text" name="sl_pausetime" id="sl_pausetime"
										       value="<?php echo esc_html( stripslashes( $row->description ) ); ?>"
										       class="text_area"/>
									</li>
									<li style="display:none;" class="for-content-slider">
										<label
											for="sl_changespeed"><?php echo __( 'Change speed', 'portfolio-gallery' ); ?></label>
										<input type="text" name="sl_changespeed" id="sl_changespeed"
										       value="<?php echo esc_html( stripslashes( $row->param ) ); ?>"
										       class="text_area"/>
									</li>
									<li class="no-content-slider no-full-width">
										<label
											for="slider_effect"><?php echo __( 'Show In Center', 'portfolio-gallery' ); ?></label>
										<select id="slider_effect" disabled style="width:103px">
											<option <?php if ( $row->sl_position == 'off' ) {
												echo 'selected';
											} ?> value="off">Off
											</option>
											<option <?php if ( $row->sl_position == 'on' ) {
												echo 'selected';
											} ?> value="on">On
											</option>
										</select>
										<a class="portfolio-pro-link probuttonlink"
										   href="http://huge-it.com/portfolio-gallery/"
										   target="_blank"><span class="portfolio-pro-icon"></span></a>
									</li>
									<li style="display:none;margin-top:10px" class="for-content-slider">
										<label
											for="pause_on_hover"><?php echo __( 'Pause On Hover ', 'portfolio-gallery' ); ?></label>
										<input type="hidden" value="off" name="pause_on_hover"/>
										<input type="checkbox" name="pause_on_hover" value="on"
										       id="pause_on_hover" <?php if ( $row->pause_on_hover == 'on' ) {
											echo 'checked="checked"';
										} ?> />
									</li>
									<li style="display:none;margin-top:10px" class="for-content-slider">
										<label
											for="autoslide"><?php echo __( 'Autoslide ', 'portfolio-gallery' ); ?></label>
										<input type="hidden" value="off" name="autoslide"/>
										<input type="checkbox" name="autoslide" value="on"
										       id="autoslide" <?php if ( $row->autoslide == 'on' ) {
											echo 'checked="checked"';
										} ?> />
									</li>
									<li>
										<label
											for="disable_right_click"><?php echo __( 'Disable Image Right Click', 'portfolio-gallery' ); ?></label>
										<select name="disable_right_click" id="disable_right_click">
											<option <?php if ( get_option( 'portfolio_gallery_disable_right_click' ) == 'off' ) {
												echo 'selected';
											} ?> value="off">Off
											</option>
											<option <?php if ( get_option( 'portfolio_gallery_disable_right_click' ) == 'on' ) {
												echo 'selected';
											} ?> value="on">On
											</option>

										</select>
									</li>
								</ul>
								<div id="major-publishing-actions">
									<div id="publishing-action">
										<input type="button" onclick="portfolioGallerySubmitButton('apply')"
										       value="Save Portfolio"
										       id="save-buttom" class="button button-primary button-large">
									</div>
									<div class="clear"></div>
								</div>
							</div>

							<div class="postbox">
								<div class="inside2">
									<ul>
										<li class="allowIsotope">
											<?php echo __( ' Show Sorting Buttons', 'portfolio-gallery' ); ?> :
											<input type="hidden" value="off" name="ht_show_sorting"/>
											<input type="checkbox"
											       id="ht_show_sorting" <?php if ( $row->ht_show_sorting == 'on' ) {
												echo 'checked="checked"';
											} ?> name="ht_show_sorting" value="on"/>
										</li>
										<li class="allowIsotope">
											<?php echo __( ' Show Category Buttons', 'portfolio-gallery' ); ?> :
											<input type="hidden" value="off" name="ht_show_filtering"/>
											<input type="checkbox"
											       id="ht_show_filtering" <?php if ( $row->ht_show_filtering == 'on' ) {
												echo 'checked="checked"';
											} ?> value="on" disabled/>
											<a class="portfolio-pro-link probuttonlink"
											   href="http://huge-it.com/portfolio-gallery/"
											   target="_blank"><span class="portfolio-pro-icon"></span></a>
										</li>
									</ul>
								</div>
							</div>

							<div class="postbox">
								<h3 class="hndle"><span><?php echo __( 'Categories', 'portfolio-gallery' ); ?>:</span>&nbsp;&nbsp;
									<a class="portfolio-pro-link probuttonlink"
									   href="http://huge-it.com/portfolio-gallery/"
									   target="_blank"><span class="portfolio-pro-icon"></span>
									</a>
								</h3>
								<div class="inside">
									<ul>
										<?php
										$ifforempty = $row->categories;
										$ifforempty = stripslashes( $ifforempty );
										$ifforempty = esc_html( $ifforempty );
										$ifforempty = empty( $ifforempty );
										if ( ! ( $ifforempty ) ) :
											foreach ( $myrows as $value ) :
												if ( ! empty( $value ) ) : ?>
													<li class="hndle">
														<input class="del_val"
														       value="<?php echo str_replace( "_", " ", $value ); ?>"
														       disabled>
														<span id="delete_cat" style="" value="a"><img
																src="<?php echo PORTFOLIO_GALLERY_IMAGES_URL . "/admin_images/delete1.png"; ?>"
																width="9" height="9" value="a"></span>
														<span id="edit_cat" style=""><img
																src='<?php echo PORTFOLIO_GALLERY_IMAGES_URL . "/admin_images/edit3.png"; ?>'
																width="10" height="10"></span>
													</li>
													<?php
												endif;
											endforeach;
										endif;
										?>
										<input type="hidden"
										       value="<?php if ( strpos( $row->categories, ',,' ) !== false ) {
											       $row->categories = str_replace( ",,", ",", $row->categories );
										       }
										       echo esc_attr( $row->categories ); ?>" id="allCategories"
										       name="allCategories">
										<li id="add_cat_input" style="">
											<input type="text" size="12" disabled>
											<a style=""
											   id="add_new_cat_buddon">+<?php echo __( 'Add New Category', 'portfolio-gallery' ); ?></a>
										</li>
									</ul>
									<input type="hidden" value="" id="changing_val">
								</div>
							</div>

							<div class="postbox">
								<h3 class="hndle"><span><?php echo __( 'Loading Icons', 'portfolio-gallery' ); ?></span>
								</h3>
								<div class="inside">
									<ul id="portfolio-unique-options-list" class="for_loading">
										<li>
											<label><?php echo __( ' Show Loading Icon', 'portfolio-gallery' ); ?>
												:</label>
											<input type="hidden" value="off" name="show_loading"/>
											<input type="checkbox"
											       id="show_loading" <?php if ( $row->show_loading == 'on' ) {
												echo 'checked="checked"';
											} ?> name="show_loading" value="on"/>
										</li>
										<li class="loading_opton">
											<label for="portfolio_load_icon"
											       style="width: 100%"><?php echo __( 'Image while portfolio loads:', 'portfolio-gallery' ); ?></label>
											<ul id="portfolio-loading-icon">
												<li <?php if ( $row->loading_icon_type == 1 ) {
													echo 'class="act"';
												} ?>>
													<label for="loading_icon_type_1">
														<div class="image-block-icon">
															<img src="<?php echo $path_site2; ?>/loading/loading-1.svg"
															     alt=""/>
														</div>
														<input type="radio" id="loading_icon_type_1"
														       name="loading_icon_type"
														       value="1" <?php if ( $row->loading_icon_type == 1 ) {
															echo 'checked="checked"';
														} ?>>
													</label>
												</li>
												<li <?php if ( $row->loading_icon_type == 2 ) {
													echo 'class="act"';
												} ?>>
													<label for="loading_icon_type_2">
														<div class="image-block-icon">
															<img src="<?php echo $path_site2; ?>/loading/loading-2.svg"
															     alt=""/>
														</div>
														<input type="radio" id="loading_icon_type_2"
														       name="loading_icon_type"
														       value="2" <?php if ( $row->loading_icon_type == 2 ) {
															echo 'checked="checked"';
														} ?>>
													</label>
												</li>
												<li <?php if ( $row->loading_icon_type == 3 ) {
													echo 'class="act"';
												} ?>>
													<label for="loading_icon_type_3">
														<div class="image-block-icon">
															<img src="<?php echo $path_site2; ?>/loading/loading-3.svg"
															     alt=""/>
														</div>
														<input type="radio" id="loading_icon_type_3"
														       name="loading_icon_type"
														       value="3" <?php if ( $row->loading_icon_type == 3 ) {
															echo 'checked="checked"';
														} ?>>
													</label>
												</li>
												<li <?php if ( $row->loading_icon_type == 4 ) {
													echo 'class="act"';
												} ?>>
													<label for="loading_icon_type_4">
														<div class="image-block-icon">
															<img src="<?php echo $path_site2; ?>/loading/loading-4.svg"
															     alt=""/>
														</div>
														<input type="radio" id="loading_icon_type_4"
														       name="loading_icon_type"
														       value="4" <?php if ( $row->loading_icon_type == 4 ) {
															echo 'checked="checked"';
														} ?>>
													</label>
												</li>
											</ul>
										</li>
									</ul>
								</div>
							</div>

							<div id="portfolio-shortcode-box" class="postbox shortcode ms-toggle">
								<h3 class="hndle"><span><?php echo __( 'Usage', 'portfolio-gallery' ); ?></span></h3>
								<div class="inside">
									<ul>
										<li rel="tab-1" class="selected">
											<h4><?php echo __( 'Shortcode', 'portfolio-gallery' ); ?></h4>
											<p><?php echo __( 'Copy &amp; paste the shortcode directly into any WordPress post or page', 'portfolio-gallery' ); ?>
												.</p>
											<textarea class="full"
											          readonly="readonly">[huge_it_portfolio id="<?php echo $row->id; ?>"]</textarea>
										</li>
										<li rel="tab-2">
											<h4><?php echo __( 'Template Include', 'portfolio-gallery' ); ?></h4>
											<p><?php echo __( 'Copy &amp; paste this code into a template file to include the slideshow within your theme', 'portfolio-gallery' ); ?>
												.</p>
											<textarea class="full" readonly="readonly">&lt;?php echo do_shortcode("[huge_it_portfolio id='<?php echo $row->id; ?>']"); ?&gt;</textarea>
										</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</form>
	</div>
<?php
require_once( PORTFOLIO_GALLERY_TEMPLATES_PATH . DIRECTORY_SEPARATOR . 'admin' . DIRECTORY_SEPARATOR . 'portfolio-gallery-admin-video-add-html.php' );
require_once( PORTFOLIO_GALLERY_TEMPLATES_PATH . DIRECTORY_SEPARATOR . 'admin' . DIRECTORY_SEPARATOR . 'portfolio-gallery-admin-video-edit-html.php' );
?>