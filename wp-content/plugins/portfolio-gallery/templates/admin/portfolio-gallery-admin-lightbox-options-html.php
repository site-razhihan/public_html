<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}
$lightbox_options_nonce = wp_create_nonce( 'portfolio_gallery_nonce_save_lightbox_options' );
$portfolio_defaultoptions = portfolio_gallery_get_default_general_options();
?>
<div class="wrap">
	<?php require(PORTFOLIO_GALLERY_TEMPLATES_PATH.DIRECTORY_SEPARATOR.'admin'.DIRECTORY_SEPARATOR.'portfolio-gallery-admin-free-banner.php');?>
	<div style="margin-left: -20px;position: relative" id="poststuff">
		<p class="pro_info">
			<?php _e('These features are available in the Professional version of the plugin only.', 'portfolio-gallery' ); ?>
			<a href="http://huge-it.com/portfolio-gallery/" target="_blank" class="button button-primary">Enable</a>
		</p>
		<form
			action="admin.php?page=Options_portfolio_lightbox_styles&task=save&portfolio_gallery_nonce_save_lightbox_options=<?php echo $lightbox_options_nonce; ?>"
			method="post" id="adminForm" name="adminForm">
			<ul id="lightbox_type">
				<li class="<?php if ( get_option('portfolio_gallery_lightbox_type') == 'new_type' ) {
					echo "active";
				} ?>">
					<label for="new_type">New Type</label>
					<input type="checkbox" name="params[portfolio_gallery_lightbox_type]"
						   id="new_type" <?php if ( get_option('portfolio_gallery_lightbox_type') == 'new_type' ) {
						echo 'checked';
					} ?>
						   value="new_type">
				</li>
				<li class="<?php if ( get_option('portfolio_gallery_lightbox_type') == 'old_type' ) {
					echo "active";
				} ?>">
					<label for="old_type">Old Type</label>
					<input type="checkbox" name="params[portfolio_gallery_lightbox_type]"
						   id="old_type" <?php if ( get_option('portfolio_gallery_lightbox_type') == 'old_type' ) {
						echo 'checked';
					} ?>
						   value="old_type">
				</li>
				<a onclick="document.getElementById('adminForm').submit()" style="margin-left: 20px;"
				   class="save-portfolio-options button-primary"><?php echo __( 'Save', 'portfolio-gallery' ); ?></a>
			</ul>
		<div id="lightbox-options-list"
		     class="unique-type-options-wrapper <?php if ( get_option('portfolio_gallery_lightbox_type') == 'old_type' ) {
			     echo "active";
		     } ?>">
			<div class="portfolio_lightbox_options_grey_overlay"></div>
			<img style="width: 100%;" src="<?php echo esc_attr(PORTFOLIO_GALLERY_IMAGES_URL.'/admin_images/lightbox_options.jpg');?>">
		</div>
		<div id="new-lightbox-options-list"
		class="unique-type-options-wrapper <?php if ( get_option('portfolio_gallery_lightbox_type') == 'new_type' ) {
			echo "active";
		} ?>">
			<div class="portfolio_lightbox_options_grey_overlay"></div>
			<div class="lightbox-options-block">
				<h3>General Options</h3>
				<div class="has-background">
					<label for="portfolio_gallery_lightbox_lightboxView">Lightbox style
						<div class="help">?
							<div class="help-block">
								<span class="pnt"></span>
								<p>Choose the style of your popup</p>
							</div>
						</div>
					</label>
					<select id="portfolio_gallery_lightbox_lightboxView" name="params[portfolio_gallery_lightbox_lightboxView]">
						<option <?php selected( 'view1', get_option('portfolio_gallery_lightbox_lightboxView') ); ?>
							value="view1">1
						</option>
						<option <?php selected( 'view2', get_option('portfolio_gallery_lightbox_lightboxView') ); ?>
							value="view2">2
						</option>
						<option <?php selected( 'view3', get_option('portfolio_gallery_lightbox_lightboxView') ); ?>
							value="view3">3
						</option>
						<option <?php selected( 'view4', get_option('portfolio_gallery_lightbox_lightboxView') ); ?>
							value="view4">4
						</option>
					</select>
				</div>
				<div>
					<label for="portfolio_gallery_lightbox_speed_new">Lightbox open speed
						<div class="help">?
							<div class="help-block">
								<span class="pnt"></span>
								<p>Set lightbox opening speed</p>
							</div>
						</div>
					</label>
					<input type="number" name="params[portfolio_gallery_lightbox_speed_new]" id="portfolio_gallery_lightbox_speed_new"
						   value="<?php echo get_option('portfolio_gallery_lightbox_speed_new'); ?>"
						   class="text">
					<span>ms</span>
				</div>
				<div class="has-background">
					<label for="portfolio_gallery_lightbox_overlayClose_new">Overlay close
						<div class="help">?
							<div class="help-block">
								<span class="pnt"></span>
								<p>Check to enable close by Esc key.</p>
							</div>
						</div>
					</label>
					<input type="hidden" value="false" name="params[portfolio_gallery_lightbox_overlayClose_new]"/>
					<input type="checkbox"
						   id="portfolio_gallery_lightbox_overlayClose_new" <?php if ( get_option('portfolio_gallery_lightbox_overlayClose_new') == 'true' ) {
						echo 'checked="checked"';
					} ?> name="params[portfolio_gallery_lightbox_overlayClose_new]" value="true"/>
				</div>
				<div>
					<label for="portfolio_gallery_lightbox_style">Loop content
						<div class="help">?
							<div class="help-block">
								<span class="pnt"></span>
								<p>Check to enable repeating images after one cycle.</p>
							</div>
						</div>
					</label>
					<input type="hidden" value="false" name="params[portfolio_gallery_lightbox_loop_new]"/>
					<input type="checkbox"
						   id="portfolio_gallery_lightbox_loop_new" <?php if ( get_option('portfolio_gallery_lightbox_loop_new') == 'true' ) {
						echo 'checked="checked"';
					} ?> name="params[portfolio_gallery_lightbox_loop_new]" value="true"/>
				</div>
			</div>
		</form>
			<div class="lightbox-options-block portfolio_lightbox_options_grey_overlay">
				<h3>Dimensions<img src="<?php echo PORTFOLIO_GALLERY_IMAGES_URL.'/admin_images/portfolio-pro-icon.png'; ?>"
								   class="portfolio_gallery_lightbox_pro_logo"></h3>
				<div class="has-background">
					<label for="portfolio_gallery_lightbox_width_new">Lightbox Width
						<div class="help">?
							<div class="help-block">
								<span class="pnt"></span>
								<p>Set the width of the popup in percentages.</p>
							</div>
						</div>
					</label>
					<input type="number"
						   value="<?php echo $portfolio_defaultoptions['portfolio_gallery_lightbox_width_new']; ?>"
						   class="text">
					<span>%</span>
				</div>
				<div>
					<label for="portfolio_gallery_lightbox_height_new">Lightbox Height
						<div class="help">?
							<div class="help-block">
								<span class="pnt"></span>
								<p>Set the height of the popup in percentages.</p>
							</div>
						</div>
					</label>
					<input type="number"
						   value="<?php echo $portfolio_defaultoptions['portfolio_gallery_lightbox_height_new']; ?>"
						   class="text">
					<span>%</span>
				</div>
				<div class="has-background">
					<label for="portfolio_gallery_lightbox_videoMaxWidth">Lightbox Video maximum width
						<div class="help">?
							<div class="help-block">
								<span class="pnt"></span>
								<p>Set the maximum width of the popup in pixels, the height will be fixed automatically.</p>
							</div>
						</div>
					</label>
					<input type="number"
						   value="<?php echo $portfolio_defaultoptions['portfolio_gallery_lightbox_videoMaxWidth']; ?>"
						   class="text">
					<span>px</span>
				</div>
			</div>
			<div class="lightbox-options-block portfolio_lightbox_options_grey_overlay">
				<h3>Slideshow<img src="<?php echo PORTFOLIO_GALLERY_IMAGES_URL.'/admin_images/portfolio-pro-icon.png'; ?>"
								  class="portfolio_gallery_lightbox_pro_logo"></h3>
				<div class="has-background">
					<label for="portfolio_gallery_lightbox_slideshow_new">Slideshow
						<div class="help">?
							<div class="help-block">
								<span class="pnt"></span>
								<p>Set the width of popup</p>
							</div>
						</div>
					</label>
					<input type="hidden" value="false" name="params[portfolio_gallery_lightbox_slideshow_new]"/>
					<input type="checkbox"
						   id="portfolio_gallery_lightbox_slideshow_new" <?php if ( $portfolio_defaultoptions['portfolio_gallery_lightbox_slideshow_new'] == 'true' ) {
						echo 'checked="checked"';
					} ?> name="params[portfolio_gallery_lightbox_slideshow_new]" value="true"/>
				</div>
				<div>
					<label for="portfolio_gallery_lightbox_slideshow_auto_new">Slideshow auto start
						<div class="help">?
							<div class="help-block">
								<span class="pnt"></span>
								<p>Set the width of popup</p>
							</div>
						</div>
					</label>
					<input type="hidden" value="false" name="params[portfolio_gallery_lightbox_slideshow_auto_new]"/>
					<input type="checkbox"
						   id="portfolio_gallery_lightbox_slideshow_auto_new" <?php if ( $portfolio_defaultoptions['portfolio_gallery_lightbox_slideshow_auto_new'] == 'true' ) {
						echo 'checked="checked"';
					} ?> name="params[portfolio_gallery_lightbox_slideshow_auto_new]" value="true"/>
				</div>
				<div class="has-background">
					<label for="portfolio_gallery_lightbox_slideshow_speed_new">Slideshow interval
						<div class="help">?
							<div class="help-block">
								<span class="pnt"></span>
								<p>Set the height of popup</p>
							</div>
						</div>
					</label>
					<input type="number" name="params[portfolio_gallery_lightbox_slideshow_speed_new]"
						   id="portfolio_gallery_lightbox_slideshow_speed_new"
						   value="<?php echo $portfolio_defaultoptions['portfolio_gallery_lightbox_slideshow_speed_new']; ?>"
						   class="text">
					<span>ms</span>
				</div>
			</div>
			<div class="lightbox-options-block portfolio_lightbox_options_grey_overlay" style=" margin-top: -150px;">
				<h3>Advanced Options<img src="<?php echo PORTFOLIO_GALLERY_IMAGES_URL.'/admin_images/portfolio-pro-icon.png'; ?>"
										 class="portfolio_gallery_lightbox_pro_logo"></h3>
				<div class="has-background">
					<label for="portfolio_gallery_lightbox_style">EscKey close
						<div class="help">?
							<div class="help-block">
								<span class="pnt"></span>
								<p>Choose the style of your popup</p>
							</div>
						</div>
					</label>
					<input type="checkbox"
						   id="portfolio_gallery_lightbox_escKey_new"/>
				</div>
				<div>
					<label for="portfolio_gallery_lightbox_keyPress_new">Keyboard navigation
						<div class="help">?
							<div class="help-block">
								<span class="pnt"></span>
								<p>Choose the style of your popup</p>
							</div>
						</div>
					</label>
					<input type="checkbox"
						   id="portfolio_gallery_lightbox_keyPress_new"/>
				</div>
				<div class="has-background">
					<label for="portfolio_gallery_lightbox_arrows">Show Arrows
						<div class="help">?
							<div class="help-block">
								<span class="pnt"></span>
								<p>Choose the style of your popup</p>
							</div>
						</div>
					</label>
					<input type="checkbox"
						   id="portfolio_gallery_lightbox_arrows" checked/>
				</div>
				<div>
					<label for="portfolio_gallery_lightbox_mouseWheel">Mouse Wheel Navigaion
						<div class="help">?
							<div class="help-block">
								<span class="pnt"></span>
								<p>Choose the style of your popup</p>
							</div>
						</div>
					</label>
					<input type="checkbox"
						   id="portfolio_gallery_lightbox_mouseWheel" />
				</div>
				<div class="has-background">
					<label for="portfolio_gallery_lightbox_download">Show Download Button
						<div class="help">?
							<div class="help-block">
								<span class="pnt"></span>
								<p>Choose the style of your popup</p>
							</div>
						</div>
					</label>
					<input type="checkbox"
						   id="portfolio_gallery_lightbox_download" />
				</div>
				<div>
					<label for="portfolio_gallery_lightbox_showCounter">Show Counter
						<div class="help">?
							<div class="help-block">
								<span class="pnt"></span>
								<p>Choose the style of your popup</p>
							</div>
						</div>
					</label>
					<input type="checkbox"
						   id="portfolio_gallery_lightbox_showCounter" />
				</div>
				<div class="has-background">
					<label for="portfolio_gallery_lightbox_sequence_info">Sequence Info text
						<div class="help">?
							<div class="help-block">
								<span class="pnt"></span>
								<p>Choose the style of your popup</p>
							</div>
						</div>
					</label>
					<input type="text"
						   style="width: 13%"
						   value="<?php echo $portfolio_defaultoptions['portfolio_gallery_lightbox_sequence_info']; ?>"
						   class="text">
					X <input type="text"
							 style="width: 13%"
							 value="<?php echo $portfolio_defaultoptions['portfolio_gallery_lightbox_sequenceInfo']; ?>"
							 class="text">
					XX
				</div>
				<div class="has-background">
					<label for="portfolio_gallery_lightbox_slideAnimationType">Transition type
						<div class="help">?
							<div class="help-block">
								<span class="pnt"></span>
								<p>Choose the style of your popup</p>
							</div>
						</div>
					</label>
					<select id="portfolio_gallery_lightbox_slideAnimationType" >
						<option <?php selected( 'effect_1', $portfolio_defaultoptions['portfolio_gallery_lightbox_slideAnimationType'] ); ?>
							value="effect_1">Effect 1
						</option>
						<option <?php selected( 'effect_2', $portfolio_defaultoptions['portfolio_gallery_lightbox_slideAnimationType'] ); ?>
							value="effect_2">Effect 2
						</option>
						<option <?php selected( 'effect_3', $portfolio_defaultoptions['portfolio_gallery_lightbox_slideAnimationType'] ); ?>
							value="effect_3">Effect 3
						</option>
						<option <?php selected( 'effect_4', $portfolio_defaultoptions['portfolio_gallery_lightbox_slideAnimationType'] ); ?>
							value="effect_4">Effect 4
						</option>
						<option <?php selected( 'effect_5', $portfolio_defaultoptions['portfolio_gallery_lightbox_slideAnimationType'] ); ?>
							value="effect_5">Effect 5
						</option>
						<option <?php selected( 'effect_6', $portfolio_defaultoptions['portfolio_gallery_lightbox_slideAnimationType'] ); ?>
							value="effect_6">Effect 6
						</option>
						<option <?php selected( 'effect_7', $portfolio_defaultoptions['portfolio_gallery_lightbox_slideAnimationType'] ); ?>
							value="effect_7">Effect 7
						</option>
						<option <?php selected( 'effect_8', $portfolio_defaultoptions['portfolio_gallery_lightbox_slideAnimationType'] ); ?>
							value="effect_8">Effect 8
						</option>
						<option <?php selected( 'effect_9', $portfolio_defaultoptions['portfolio_gallery_lightbox_slideAnimationType'] ); ?>
							value="effect_9">Effect 9
						</option>
					</select>
				</div>
			</div>
			<div class="lightbox-options-block portfolio_lightbox_options_grey_overlay">
				<h3>Lightbox Watermark styles<img src="<?php echo PORTFOLIO_GALLERY_IMAGES_URL.'/admin_images/portfolio-pro-icon.png'; ?>"
												  class="portfolio_gallery_lightbox_pro_logo"></h3>
				<div class="has-background">
					<label for="portfolio_gallery_lightbox_watermark">Watermark
						<div class="help">?
							<div class="help-block">
								<span class="pnt"></span>
								<p>Set the width of popup</p>
							</div>
						</div>
					</label>
					<input type="checkbox"
						   id="portfolio_gallery_lightbox_watermark"  />
				</div>
				<div>
					<label for="portfolio_gallery_lightbox_watermark_text">Watermark Text
						<div class="help">?
							<div class="help-block">
								<span class="pnt"></span>
								<p>Choose the style of your popup</p>
							</div>
						</div>
					</label>
					<input type="text"  id="portfolio_gallery_lightbox_watermark_text"
						   value="<?php echo $portfolio_defaultoptions['portfolio_gallery_lightbox_watermark_text']; ?>"
						   class="text">
				</div>
				<div class="has-background">
					<label for="portfolio_gallery_lightbox_watermark_textColor">Watermark Text Color
						<div class="help">?
							<div class="help-block">
								<span class="pnt"></span>
								<p>Choose the style of your popup</p>
							</div>
						</div>
					</label>
					<input type="text" class="color" id="portfolio_gallery_lightbox_watermark_textColor"
						   value="#<?php echo $portfolio_defaultoptions['portfolio_gallery_lightbox_watermark_textColor']; ?>"
						   size="10"/>
				</div>
				<div>
					<label for="portfolio_gallery_lightbox_watermark_textFontSize">Watermark Text Font Size
						<div class="help">?
							<div class="help-block">
								<span class="pnt"></span>
								<p>Choose the style of your popup</p>
							</div>
						</div>
					</label>
					<input type="number"
						   id="portfolio_gallery_lightbox_watermark_textFontSize"
						   value="<?php echo $portfolio_defaultoptions['portfolio_gallery_lightbox_watermark_textFontSize']; ?>"
						   class="text">
					<span>px</span>
				</div>
				<div class="has-background">
					<label for="portfolio_gallery_lightbox_watermark_containerBackground">Watermark Background Color
						<div class="help">?
							<div class="help-block">
								<span class="pnt"></span>
								<p>Choose the style of your popup</p>
							</div>
						</div>
					</label>
					<input type="text" class="color" id="portfolio_gallery_lightbox_watermark_containerBackground"
						   value="#<?php echo $portfolio_defaultoptions['portfolio_gallery_lightbox_watermark_containerBackground']; ?>"
						   size="10"/>
				</div>
				<div>
					<label for="portfolio_gallery_lightbox_watermark_containerOpacity">Watermark Background Opacity
						<div class="help">?
							<div class="help-block">
								<span class="pnt"></span>
								<p>Choose the style of your popup</p>
							</div>
						</div>
					</label>
					<div class="slider-container">
						<input id="portfolio_gallery_lightbox_watermark_containerOpacity" data-slider-highlight="true"
							   data-slider-values="0,10,20,30,40,50,60,70,80,90,100" type="text" data-slider="true"
							   value="<?php echo $portfolio_defaultoptions['portfolio_gallery_lightbox_watermark_containerOpacity']; ?>"/>
						<span><?php echo $portfolio_defaultoptions['portfolio_gallery_lightbox_watermark_containerOpacity']; ?>
							%</span>
					</div>
				</div>
				<div class="has-background">
					<label for="portfolio_gallery_lightbox_watermark_containerWidth">Watermark Width
						<div class="help">?
							<div class="help-block">
								<span class="pnt"></span>
								<p>Choose the style of your popup</p>
							</div>
						</div>
					</label>
					<input type="number"
						   id="portfolio_gallery_lightbox_watermark_containerWidth"
						   value="<?php echo $portfolio_defaultoptions['portfolio_gallery_lightbox_watermark_containerWidth']; ?>"
						   class="text">
					<span>px</span>
				</div>
				<div class="has-height">
					<label for="portfolio_gallery_lightbox_watermark_containerWidth">Watermark Position
						<div class="help">?
							<div class="help-block">
								<span class="pnt"></span>
								<p>Choose the style of your popup</p>
							</div>
						</div>
					</label>
					<div>
						<table class="bws_position_table">
							<tbody>
							<tr>
								<td><input type="radio" value="1" id="watermark_top-left"
										<?php if ( $portfolio_defaultoptions['portfolio_gallery_lightbox_watermark_position_new'] == '1' ) {
											echo 'checked="checked"';
										} ?> /></td>
								<td><input type="radio" value="2" id="watermark_top-center"
										<?php if ( $portfolio_defaultoptions['portfolio_gallery_lightbox_watermark_position_new'] == '2' ) {
											echo 'checked="checked"';
										} ?> /></td>
								<td><input type="radio" value="3" id="watermark_top-right"
										<?php if ( $portfolio_defaultoptions['portfolio_gallery_lightbox_watermark_position_new'] == '3' ) {
											echo 'checked="checked"';
										} ?> /></td>
							</tr>
							<tr>
								<td><input type="radio" value="4" id="watermark_middle-left"
										<?php if ( $portfolio_defaultoptions['portfolio_gallery_lightbox_watermark_position_new'] == '4' ) {
											echo 'checked="checked"';
										} ?> /></td>
								<td><input type="radio" value="5" id="watermark_middle-center"
										<?php if ( $portfolio_defaultoptions['portfolio_gallery_lightbox_watermark_position_new'] == '5' ) {
											echo 'checked="checked"';
										} ?> /></td>
								<td><input type="radio" value="6" id="watermark_middle-right"
										<?php if ( $portfolio_defaultoptions['portfolio_gallery_lightbox_watermark_position_new'] == '6' ) {
											echo 'checked="checked"';
										} ?> /></td>
							</tr>
							<tr>
								<td><input type="radio" value="7" id="watermark_bottom-left"
										<?php if ( $portfolio_defaultoptions['portfolio_gallery_lightbox_watermark_position_new'] == '7' ) {
											echo 'checked="checked"';
										} ?> /></td>
								<td><input type="radio" value="8" id="watermark_bottom-center"
										<?php if ( $portfolio_defaultoptions['portfolio_gallery_lightbox_watermark_position_new'] == '8' ) {
											echo 'checked="checked"';
										} ?> /></td>
								<td><input type="radio" value="9" id="watermark_bottom-right"
										<?php if ( $portfolio_defaultoptions['portfolio_gallery_lightbox_watermark_position_new'] == '9' ) {
											echo 'checked="checked"';
										} ?> /></td>
							</tr>
							</tbody>
						</table>
					</div>
				</div>
				<div class="has-background">
					<label for="portfolio_gallery_lightbox_watermark_margin">Watermark Margin
						<div class="help">?
							<div class="help-block">
								<span class="pnt"></span>
								<p>Choose the style of your popup</p>
							</div>
						</div>
					</label>
					<input type="number"
						   id="portfolio_gallery_lightbox_watermark_margin"
						   value="<?php echo $portfolio_defaultoptions['portfolio_gallery_lightbox_watermark_margin']; ?>"
						   class="text">
					<span>px</span>
				</div>
				<div class="has-background" style="display: none">
					<label for="portfolio_gallery_lightbox_watermark_opacity">Watermark Text Opacity
						<div class="help">?
							<div class="help-block">
								<span class="pnt"></span>
								<p>Choose the style of your popup</p>
							</div>
						</div>
					</label>
					<div class="slider-container">
						<input id="portfolio_gallery_lightbox_watermark_opacity" data-slider-highlight="true"
							   data-slider-values="0,10,20,30,40,50,60,70,80,90,100" type="text" data-slider="true"
							   value="<?php echo $portfolio_defaultoptions['portfolio_gallery_lightbox_watermark_opacity']; ?>"/>
						<span><?php echo $portfolio_defaultoptions['portfolio_gallery_lightbox_watermark_opacity']; ?>%</span>
					</div>
				</div>
				<div style="height:auto;">
					<label for="watermark_image_btn">Select Watermark Image
						<div class="help">?
							<div class="help-block">
								<span class="pnt"></span>
								<p>Set the image of Lightbox watermark.</p>
							</div>
						</div>
					</label>
					<img src="<?php echo $portfolio_defaultoptions['portfolio_gallery_lightbox_watermark_img_src_new']; ?>"
						 id="watermark_image_new" style="width:120px;height:auto;">
					<input type="button" class="button wp-media-buttons-icon"
						   style="margin-left: 63%;width: auto;display: inline-block;" id="watermark_image_btn_new"
						   value="Change Image">
					<input type="hidden" id="img_watermark_hidden_new" value="<?php echo $portfolio_defaultoptions['portfolio_gallery_lightbox_watermark_img_src_new']; ?>">
				</div>
			</div>
			<div class="lightbox-options-block portfolio_lightbox_options_grey_overlay" style="margin-top: -400px;">
				<h3>Social Share Buttons<img src="<?php echo PORTFOLIO_GALLERY_IMAGES_URL.'/admin_images/portfolio-pro-icon.png'; ?>"
											 class="portfolio_gallery_lightbox_pro_logo"></h3>
				<div class="has-background">
					<label for="portfolio_gallery_lightbox_socialSharing">Social Share Buttons
						<div class="help">?
							<div class="help-block">
								<span class="pnt"></span>
								<p>Set the width of popup</p>
							</div>
						</div>
					</label>
					<input type="checkbox"  id="portfolio_gallery_lightbox_socialSharing"  />
				</div>
				<div class="social-buttons-list">
					<label>Social Share Buttons List
						<div class="help">?
							<div class="help-block">
								<span class="pnt"></span>
								<p>Choose the style of your popup</p>
							</div>
						</div>
					</label>
					<div>
						<table>
							<tr>
								<td>
									<label for="portfolio_gallery_lightbox_facebookButton">Facebook
										<input type="checkbox"
											   id="portfolio_gallery_lightbox_facebookButton" <?php if ( $portfolio_defaultoptions['portfolio_gallery_lightbox_facebookButton'] == 'true' ) {
											echo 'checked="checked"';
										} ?>  value="true"/></label>
								</td>
								<td>
									<label for="portfolio_gallery_lightbox_twitterButton">Twitter
										<input type="checkbox"
											   id="portfolio_gallery_lightbox_twitterButton" <?php if ( $portfolio_defaultoptions['portfolio_gallery_lightbox_twitterButton'] == 'true' ) {
											echo 'checked="checked"';
										} ?>  value="true"/></label>
								</td>
								<td>
									<label for="portfolio_gallery_lightbox_googleplusButton">Google Plus
										<input type="checkbox"
											   id="portfolio_gallery_lightbox_googleplusButton" <?php if ( $portfolio_defaultoptions['portfolio_gallery_lightbox_googleplusButton'] == 'true' ) {
											echo 'checked="checked"';
										} ?>  value="true"/></label>
								</td>
								<td>
									<label for="portfolio_gallery_lightbox_pinterestButton">Pinterest
										<input type="checkbox"
											   id="portfolio_gallery_lightbox_pinterestButton" <?php if ( $portfolio_defaultoptions['portfolio_gallery_lightbox_pinterestButton'] == 'true' ) {
											echo 'checked="checked"';
										} ?>  value="true"/></label>
								</td>
							</tr>
							<tr>
								<td>
									<label for="portfolio_gallery_lightbox_linkedinButton">Linkedin
										<input type="checkbox"
											   id="portfolio_gallery_lightbox_linkedinButton" <?php if ( $portfolio_defaultoptions['portfolio_gallery_lightbox_linkedinButton'] == 'true' ) {
											echo 'checked="checked"';
										} ?>  value="true"/></label>
								</td>
								<td>
									<label for="portfolio_gallery_lightbox_tumblrButton">Tumblr
										<input type="checkbox"
											   id="portfolio_gallery_lightbox_tumblrButton" <?php if ( $portfolio_defaultoptions['portfolio_gallery_lightbox_tumblrButton'] == 'true' ) {
											echo 'checked="checked"';
										} ?>  value="true"/></label>
								</td>
								<td>
									<label for="portfolio_gallery_lightbox_redditButton">Reddit
										<input type="checkbox"
											   id="portfolio_gallery_lightbox_redditButton" <?php if ( $portfolio_defaultoptions['portfolio_gallery_lightbox_redditButton'] == 'true' ) {
											echo 'checked="checked"';
										} ?>  value="true"/></label>
								</td>
								<td>
									<label for="portfolio_gallery_lightbox_bufferButton">Buffer
										<input type="checkbox"
											   id="portfolio_gallery_lightbox_bufferButton" <?php if ( $portfolio_defaultoptions['portfolio_gallery_lightbox_bufferButton'] == 'true' ) {
											echo 'checked="checked"';
										} ?>  value="true"/></label>
								</td>
							</tr>
							<tr>
								<td>
									<label for="portfolio_gallery_lightbox_vkButton">Vkontakte
										<input type="checkbox"
											   id="portfolio_gallery_lightbox_vkButton" <?php if ( $portfolio_defaultoptions['portfolio_gallery_lightbox_vkButton'] == 'true' ) {
											echo 'checked="checked"';
										} ?>  value="true"/></label>
								</td>
								<td>
									<label for="portfolio_gallery_lightbox_yummlyButton">Yumly
										<input type="checkbox"
											   id="portfolio_gallery_lightbox_yummlyButton" <?php if ( $portfolio_defaultoptions['portfolio_gallery_lightbox_yummlyButton'] == 'true' ) {
											echo 'checked="checked"';
										} ?>  value="true"/></label>
								</td>
								<td>
									<label for="portfolio_gallery_lightbox_diggButton">Digg
										<input type="checkbox"
											   id="portfolio_gallery_lightbox_diggButton" <?php if ( $portfolio_defaultoptions['portfolio_gallery_lightbox_diggButton'] == 'true' ) {
											echo 'checked="checked"';
										} ?>  value="true"/></label>
								</td>
								<td>

								</td>
							</tr>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<input type="hidden" name="option" value=""/>
<input type="hidden" name="task" value=""/>
<input type="hidden" name="controller" value="options"/>
<input type="hidden" name="op_type" value="styles"/>
<input type="hidden" name="boxchecked" value="0"/>