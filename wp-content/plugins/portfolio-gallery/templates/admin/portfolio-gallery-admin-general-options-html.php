<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}
?>

<div class="wrap">
<div>
	<?php require( PORTFOLIO_GALLERY_TEMPLATES_PATH . DIRECTORY_SEPARATOR . 'admin' . DIRECTORY_SEPARATOR . 'portfolio-gallery-admin-free-banner.php' ); ?>
	<div id="poststuff">
		<div id="post-body-content" class="portfolio-options">
			<p class="pro_info">
				These features are available in the Professional version of the plugin only.
				<a href="http://huge-it.com/portfolio-gallery/" target="_blank" class="button button-primary">Enable</a>
			</p>
            <?php $path_site = esc_attr(PORTFOLIO_GALLERY_IMAGES_URL.'/admin_images');
            $portfolio_gallery_get_option=portfolio_gallery_get_default_general_options();?>
            <form action="admin.php?page=Options_portfolio_styles&task=save&portfolio_gallery_nonce_save_gen_options=<?php echo $portfolio_gallery_nonce_save_gen_options; ?>" method="post" id="adminForm"
                  name="adminForm">
                <div id="portfolio-options-list">

                    <ul id="portfolio-view-tabs">
                        <li>
                            <a href="#portfolio-view-options-0"><?php echo __( 'Blocks Toggle Up/Down', 'portfolio-gallery' ); ?></a>
                        </li>
                        <li>
                            <a href="#portfolio-view-options-1"><?php echo __( 'Full-Height Blocks', 'portfolio-gallery' ); ?></a>
                        </li>
                        <li>
                            <a href="#portfolio-view-options-2"><?php echo __( 'Gallery/Content-Popup', 'portfolio-gallery' ); ?></a>
                        </li>
                        <li>
                            <a href="#portfolio-view-options-3"><?php echo __( 'Full-Width Blocks', 'portfolio-gallery' ); ?></a>
                        </li>
                        <li>
                            <a href="#portfolio-view-options-4"><?php echo __( 'FAQ Toggle Up/Down', 'portfolio-gallery' ); ?></a>
                        </li>
                        <li>
                            <a href="#portfolio-view-options-5"><?php echo __( 'Content Slider', 'portfolio-gallery' ); ?></a>
                        </li>
                        <li>
                            <a href="#portfolio-view-options-6"><?php echo __( 'Lightbox-Gallery', 'portfolio-gallery' ); ?></a>
                        </li>
                        <li>
                            <a href="#portfolio-view-options-7"><?php echo __( 'Elastic Grid', 'portfolio-gallery' ); ?></a>
                        </li>
                    </ul>
                    <ul class="options-block" id="portfolio-view-tabs-contents">
                        <div class="portfolio_options_grey_overlay"></div>

                                                <li id="portfolio-view-options-0" class="active">
                                                    <div>
                                                        <h3><?php echo __( 'Element Styles', 'portfolio-gallery' ); ?></h3>
                                                        <div class="has-background">
                                                            <label
                                                                    for="port_natural_size_toggle"><?php echo __( "Element's Image Behaviour", 'portfolio-gallery' ); ?></label>
                                                            <select id="port_natural_size_contentpopup"
                                                                    name="params[portfolio_gallery_port_natural_size_toggle]">
                                                                <option <?php if ( $portfolio_gallery_get_option['portfolio_gallery_port_natural_size_toggle'] == 'resize' ) {
                                                                    echo 'selected="selected"';
                                                                } ?> value="resize"><?php echo __( 'Resize', 'portfolio-gallery' ); ?></option>
                                                                <option <?php if ( $portfolio_gallery_get_option['portfolio_gallery_port_natural_size_toggle'] == 'crop' ) {
                                                                    echo 'selected="selected"';
                                                                } ?> value="crop"><?php echo __( 'Natural', 'portfolio-gallery' ); ?></option>
                                                            </select>
                                                        </div>
                                                        <div>
                                                            <label
                                                                    for="ht_view0_elements_in_center"><?php echo __( 'Show All Elements In Center', 'portfolio-gallery' ); ?></label>
                                                            <input type="hidden" value="off"
                                                                   name="params[portfolio_gallery_ht_view0_elements_in_center]">
                                                            <input type="checkbox"
                                                                   id="ht_view0_elements_in_center" <?php if ( $portfolio_gallery_get_option['portfolio_gallery_ht_view0_elements_in_center'] == 'on' ) {
                                                                echo 'checked="checked"';
                                                            } ?> name="params[portfolio_gallery_ht_view0_elements_in_center]" value="on"/>
                                                        </div>
                                                        <div class="has-background">
                                                            <label
                                                                    for="ht_view0_element_background_color"><?php echo __( 'Element Background Color', 'portfolio-gallery' ); ?></label>
                                                            <input name="params[portfolio_gallery_ht_view0_element_background_color]"
                                                                   type="text" class="color" id="ht_view0_element_background_color"
                                                                   value="#<?php echo $portfolio_gallery_get_option['portfolio_gallery_ht_view0_element_background_color']; ?>"
                                                                   size="10"/>
                                                        </div>
                                                        <div>
                                                            <label
                                                                    for="ht_view0_element_border_width"><?php echo __( 'Element Border Width', 'portfolio-gallery' ); ?></label>
                                                            <input type="text" name="params[portfolio_gallery_ht_view0_element_border_width]"
                                                                   id="ht_view0_element_border_width"
                                                                   value="<?php echo $portfolio_gallery_get_option['portfolio_gallery_ht_view0_element_border_width']; ?>"
                                                                   class="text"/>
                                                            <span>px</span>
                                                        </div>
                                                        <div class="has-background">
                                                            <label
                                                                    for="ht_view0_element_border_color"><?php echo __( 'Element Border Color', 'portfolio-gallery' ); ?></label>
                                                            <input name="params[portfolio_gallery_ht_view0_element_border_color]" type="text"
                                                                   class="color" id="ht_view0_element_border_color"
                                                                   value="#<?php echo $portfolio_gallery_get_option['portfolio_gallery_ht_view0_element_border_color']; ?>"
                                                                   size="10"/>
                                                        </div>
                                                        <div>
                                                            <label
                                                                    for="ht_view0_togglebutton_style"><?php echo __( 'Toggle Button Style', 'portfolio-gallery' ); ?></label>
                                                            <select id="ht_view0_togglebutton_style"
                                                                    name="params[portfolio_gallery_ht_view0_togglebutton_style]">
                                                                <option <?php if ( $portfolio_gallery_get_option['portfolio_gallery_ht_view0_togglebutton_style'] == 'light' ) {
                                                                    echo 'selected="selected"';
                                                                } ?> value="light"><?php echo __( 'Light', 'portfolio-gallery' ); ?></option>
                                                                <option <?php if ( $portfolio_gallery_get_option['portfolio_gallery_ht_view0_togglebutton_style'] == 'dark' ) {
                                                                    echo 'selected="selected"';
                                                                } ?> value="dark"><?php echo __( 'Dark', 'portfolio-gallery' ); ?></option>
                                                            </select>
                                                        </div>
                                                        <div class="has-background">
                                                            <label
                                                                    for="ht_view0_show_separator_lines"><?php echo __( 'Show Separator Lines', 'portfolio-gallery' ); ?></label>
                                                            <input type="hidden" value="off"
                                                                   name="params[portfolio_gallery_ht_view0_show_separator_lines]"/>
                                                            <input type="checkbox"
                                                                   id="ht_view0_show_separator_lines" <?php if ( $portfolio_gallery_get_option['portfolio_gallery_ht_view0_show_separator_lines'] == 'on' ) {
                                                                echo 'checked="checked"';
                                                            } ?> name="params[portfolio_gallery_ht_view0_show_separator_lines]" value="on"/>
                                                        </div>
                                                    </div>
                                                    <div>
                                                        <h3><?php echo __( 'Main Image', 'portfolio-gallery' ); ?></h3>
                                                        <div class="has-background">
                                                            <label
                                                                    for="ht_view0_block_width"><?php echo __( 'Main Image Width', 'portfolio-gallery' ); ?></label>
                                                            <input type="text" name="params[portfolio_gallery_ht_view0_block_width]"
                                                                   id="ht_view0_block_width"
                                                                   value="<?php echo $portfolio_gallery_get_option['portfolio_gallery_ht_view0_block_width']; ?>"
                                                                   class="text"/>
                                                            <span>px</span>
                                                        </div>
                                                        <div>
                                                            <label
                                                                    for="ht_view0_block_height"><?php echo __( 'Main Image Height', 'portfolio-gallery' ); ?></label>
                                                            <input type="text" name="params[portfolio_gallery_ht_view0_block_height]"
                                                                   id="ht_view0_block_height"
                                                                   value="<?php echo $portfolio_gallery_get_option['portfolio_gallery_ht_view0_block_height']; ?>"
                                                                   class="text"/>
                                                            <span>px</span>
                                                        </div>
                                                    </div>
                                                    <div style="margin-top: 14px;">
                                                        <h3>Title</h3>
                                                        <div class="has-background">
                                                            <label
                                                                    for="ht_view0_title_font_size"><?php echo __( 'Title Font Size', 'portfolio-gallery' ); ?></label>
                                                            <input type="text" name="params[portfolio_gallery_ht_view0_title_font_size]"
                                                                   id="ht_view0_title_font_size"
                                                                   value="<?php echo $portfolio_gallery_get_option['portfolio_gallery_ht_view0_title_font_size']; ?>"
                                                                   class="text"/>
                                                            <span>px</span>
                                                        </div>
                                                        <div>
                                                            <label
                                                                    for="ht_view0_title_font_color"><?php echo __( 'Title Font Color', 'portfolio-gallery' ); ?></label>
                                                            <input name="params[portfolio_gallery_ht_view0_title_font_color]" type="text"
                                                                   class="color" id="ht_view0_title_font_color"
                                                                   value="#<?php echo $portfolio_gallery_get_option['portfolio_gallery_ht_view0_title_font_color']; ?>"
                                                                   size="10"/>
                                                        </div>
                                                    </div>

                                                    <div style="margin-top:7px;">
                                                        <h3><?php echo __( 'Sorting styles', 'portfolio-gallery' ); ?></h3>
                                                        <div class="has-background" style="display: none;">
                                                            <label
                                                                    for="ht_view0_show_sorting"><?php echo __( 'Show Sorting', 'portfolio-gallery' ); ?></label>
                                                            <input type="hidden" value="off"
                                                                   name="params[portfolio_gallery_ht_view0_show_sorting]"/>
                                                            <input type="checkbox"
                                                                   id="ht_view0_show_sorting" <?php if ( $portfolio_gallery_get_option['portfolio_gallery_ht_view0_show_sorting'] == 'on' ) {
                                                                echo 'checked="checked"';
                                                            } ?> name="params[portfolio_gallery_ht_view0_show_sorting]" value="on"/>
                                                        </div>
                                                        <div class="has-background">
                                                            <label
                                                                    for="ht_view0_sortbutton_font_size"><?php echo __( 'Sort Button Font Size', 'portfolio-gallery' ); ?></label>
                                                            <input type="text" name="params[portfolio_gallery_ht_view0_sortbutton_font_size]"
                                                                   id="ht_view0_sortbutton_font_size"
                                                                   value="<?php echo $portfolio_gallery_get_option['portfolio_gallery_ht_view0_sortbutton_font_size']; ?>"
                                                                   class="text"/>
                                                            <span>px</span>
                                                        </div>
                                                        <div class="">
                                                            <label
                                                                    for="ht_view0_sortbutton_font_color"><?php echo __( 'Sort Button Font Color', 'portfolio-gallery' ); ?></label>
                                                            <input name="params[portfolio_gallery_ht_view0_sortbutton_font_color]" type="text"
                                                                   class="color" id="ht_view0_sortbutton_font_color"
                                                                   value="#<?php echo $portfolio_gallery_get_option['portfolio_gallery_ht_view0_sortbutton_font_color']; ?>"
                                                                   size="10"/>
                                                        </div>
                                                        <div class="has-background">
                                                            <label
                                                                    for="ht_view0_sortbutton_hover_font_color"><?php echo __( 'Sort Button Font Hover Color', 'portfolio-gallery' ); ?></label>
                                                            <input name="params[portfolio_gallery_ht_view0_sortbutton_hover_font_color]"
                                                                   type="text" class="color" id="ht_view0_sortbutton_hover_font_color"
                                                                   value="#<?php echo $portfolio_gallery_get_option['portfolio_gallery_ht_view0_sortbutton_hover_font_color']; ?>"
                                                                   size="10"/>
                                                        </div>
                                                        <div class="">
                                                            <label
                                                                    for="ht_view0_sortbutton_background_color"><?php echo __( 'Sort Button Background Color', 'portfolio-gallery' ); ?></label>
                                                            <input name="params[portfolio_gallery_ht_view0_sortbutton_background_color]"
                                                                   type="text" class="color" id="ht_view0_sortbutton_background_color"
                                                                   value="#<?php echo $portfolio_gallery_get_option['portfolio_gallery_ht_view0_sortbutton_background_color']; ?>"
                                                                   size="10"/>
                                                        </div>
                                                        <div class="has-background">
                                                            <label
                                                                    for="ht_view0_sortbutton_hover_background_color"><?php echo __( 'Sort Button Background Hover Color', 'portfolio-gallery' ); ?></label>
                                                            <input name="params[portfolio_gallery_ht_view0_sortbutton_hover_background_color]"
                                                                   type="text" class="color" id="ht_view0_sortbutton_hover_background_color"
                                                                   value="#<?php echo $portfolio_gallery_get_option['portfolio_gallery_ht_view0_sortbutton_hover_background_color']; ?>"
                                                                   size="10"/>
                                                        </div>
                                                        <div class="" style="display: none;">
                                                            <label
                                                                    for="ht_view0_sortbutton_border_width"><?php echo __( 'Sort Button Border Width', 'portfolio-gallery' ); ?></label>
                                                            <input type="text" name="params[portfolio_gallery_ht_view0_sortbutton_border_width]"
                                                                   id="ht_view0_sortbutton_border_width"
                                                                   value="<?php echo $portfolio_gallery_get_option['portfolio_gallery_ht_view0_sortbutton_border_width']; ?>"
                                                                   class="text"/>
                                                            <span>px</span>
                                                        </div>
                                                        <div style="display: none;">
                                                            <input name="params[portfolio_gallery_ht_view0_sortbutton_border_color]" type="text"
                                                                   class="color" id="ht_view0_sortbutton_border_color"
                                                                   value="#<?php echo $portfolio_gallery_get_option['portfolio_gallery_ht_view0_sortbutton_border_color']; ?>"
                                                                   size="10"/>
                                                            <label
                                                                    for="ht_view0_sortbutton_border_color"><?php echo __( 'Sort Button Border Color', 'portfolio-gallery' ); ?></label>
                                                        </div>
                                                        <div>
                                                            <label
                                                                    for="ht_view0_sortbutton_border_radius"><?php echo __( 'Sort Button Border Radius', 'portfolio-gallery' ); ?></label>
                                                            <input type="text"
                                                                   name="params[portfolio_gallery_ht_view0_sortbutton_border_radius]"
                                                                   id="ht_view0_sortbutton_border_radius"
                                                                   value="<?php echo $portfolio_gallery_get_option['portfolio_gallery_ht_view0_sortbutton_border_radius']; ?>"
                                                                   class="text"/>
                                                            <span>px</span>
                                                        </div>
                                                        <div class="has-background">
                                                            <label
                                                                    for="ht_view0_sortbutton_border_padding"><?php echo __( 'Sort Button Padding', 'portfolio-gallery' ); ?></label>
                                                            <input type="text"
                                                                   name="params[portfolio_gallery_ht_view0_sortbutton_border_padding]"
                                                                   id="ht_view0_sortbutton_border_padding"
                                                                   value="<?php echo $portfolio_gallery_get_option['portfolio_gallery_ht_view0_sortbutton_border_padding']; ?>"
                                                                   class="text"/>
                                                            <span>px</span>
                                                        </div>
                                                        <div style="display: none;">
                                                            <label
                                                                    for="ht_view0_sortbutton_margin"><?php echo __( 'Sort Button Margins', 'portfolio-gallery' ); ?></label>
                                                            <input type="text" name="params[portfolio_gallery_ht_view0_sortbutton_margin]"
                                                                   id="ht_view0_sortbutton_margin"
                                                                   value="<?php echo $portfolio_gallery_get_option['portfolio_gallery_ht_view0_sortbutton_margin']; ?>"
                                                                   class="text"/>
                                                            <span>px</span>
                                                        </div>
                                                        <div>
                                                            <label
                                                                    for="ht_view0_sorting_float"><?php echo __( 'Sort block Position', 'portfolio-gallery' ); ?></label>
                                                            <select id="ht_view0_sorting_float"
                                                                    name="params[portfolio_gallery_ht_view0_sorting_float]">
                                                                <option <?php if ( $portfolio_gallery_get_option['portfolio_gallery_ht_view0_sorting_float'] == 'left' ) {
                                                                    echo 'selected="selected"';
                                                                } ?> value="left"><?php echo __( 'Left', 'portfolio-gallery' ); ?></option>
                                                                <option <?php if ( $portfolio_gallery_get_option['portfolio_gallery_ht_view0_sorting_float'] == 'right' ) {
                                                                    echo 'selected="selected"';
                                                                } ?> value="right"><?php echo __( 'Right', 'portfolio-gallery' ); ?></option>
                                                                <option <?php if ( $portfolio_gallery_get_option['portfolio_gallery_ht_view0_sorting_float'] == 'top' ) {
                                                                    echo 'selected="selected"';
                                                                } ?> value="top"><?php echo __( 'Top', 'portfolio-gallery' ); ?></option>
                                                            </select>
                                                        </div>
                                                        <div class="has-background">
                                                            <label
                                                                    for="ht_view0_sorting_name_by_default"><?php echo __( 'Sort By Default Bottom Name', 'portfolio-gallery' ); ?></label>
                                                            <input name="params[portfolio_gallery_ht_view0_sorting_name_by_default]" type="text"
                                                                   id="ht_view0_sorting_name_by_default"
                                                                   value="<?php echo esc_attr( $portfolio_gallery_get_option['portfolio_gallery_ht_view0_sorting_name_by_default'] ); ?>"
                                                                   size="10" class="text"/>
                                                        </div>
                                                        <div class="">
                                                            <label
                                                                    for="ht_view0_sorting_name_by_id"><?php echo __( 'Sorting By Date Button Name', 'portfolio-gallery' ); ?></label>
                                                            <input name="params[portfolio_gallery_ht_view0_sorting_name_by_id]" type="text"
                                                                   id="ht_view0_sorting_name_by_id"
                                                                   value="<?php echo esc_attr( $portfolio_gallery_get_option['portfolio_gallery_ht_view0_sorting_name_by_id'] ); ?>"
                                                                   size="10"/>
                                                        </div>
                                                        <div class="has-background">
                                                            <label
                                                                    for="ht_view0_sorting_name_by_name"><?php echo __( 'Sorting By Title Button Name', 'portfolio-gallery' ); ?></label>
                                                            <input name="params[portfolio_gallery_ht_view0_sorting_name_by_name]" type="text"
                                                                   id="ht_view0_sorting_name_by_name"
                                                                   value="<?php echo esc_attr( $portfolio_gallery_get_option['portfolio_gallery_ht_view0_sorting_name_by_name'] ); ?>"
                                                                   size="10"/>
                                                        </div>
                                                        <div class="">
                                                            <label
                                                                    for="ht_view0_sorting_name_by_random"><?php echo __( 'Random Sorting Button Name', 'portfolio-gallery' ); ?></label>
                                                            <input name="params[portfolio_gallery_ht_view0_sorting_name_by_random]" type="text"
                                                                   id="ht_view0_sorting_name_by_random"
                                                                   value="<?php echo esc_attr( $portfolio_gallery_get_option['portfolio_gallery_ht_view0_sorting_name_by_random'] ); ?>"
                                                                   size="10"/>
                                                        </div>
                                                        <div class="has-background">
                                                            <label
                                                                    for="ht_view0_sorting_name_by_asc"><?php echo __( 'Ascending Sorting Button Name', 'portfolio-gallery' ); ?></label>
                                                            <input name="params[portfolio_gallery_ht_view0_sorting_name_by_asc]" type="text"
                                                                   id="ht_view0_sorting_name_by_asc"
                                                                   value="<?php echo esc_attr( $portfolio_gallery_get_option['portfolio_gallery_ht_view0_sorting_name_by_asc'] ); ?>"
                                                                   size="10"/>
                                                        </div>
                                                        <div class="">
                                                            <label
                                                                    for="ht_view0_sorting_name_by_desc"><?php echo __( 'Descending Sorting Button Name', 'portfolio-gallery' ); ?></label>
                                                            <input name="params[portfolio_gallery_ht_view0_sorting_name_by_desc]" type="text"
                                                                   id="ht_view0_sorting_name_by_desc"
                                                                   value="<?php echo esc_attr( $portfolio_gallery_get_option['portfolio_gallery_ht_view0_sorting_name_by_desc'] ); ?>"
                                                                   size="10"/>
                                                        </div>
                                                    </div>

                                                    <div style="margin-top: -600px;">
                                                        <h3><?php echo __( 'Thumbnails', 'portfolio-gallery' ); ?></h3>
                                                        <div class="has-background">
                                                            <label
                                                                    for="ht_view0_show_thumbs"><?php echo __( 'Show Thumbnails', 'portfolio-gallery' ); ?></label>
                                                            <input type="hidden" value="off"
                                                                   name="params[portfolio_gallery_ht_view0_show_thumbs]"/>
                                                            <input type="checkbox"
                                                                   id="ht_view0_show_thumbs" <?php if ( $portfolio_gallery_get_option['portfolio_gallery_ht_view0_show_thumbs'] == 'on' ) {
                                                                echo 'checked="checked"';
                                                            } ?> name="params[portfolio_gallery_ht_view0_show_thumbs]" value="on"/>
                                                        </div>
                                                        <div>
                                                            <label
                                                                    for="ht_view0_thumbs_position"><?php echo __( 'Thumbnails Position', 'portfolio-gallery' ); ?></label>
                                                            <select id="ht_view0_thumbs_position"
                                                                    name="params[portfolio_gallery_ht_view0_thumbs_position]">
                                                                <option <?php if ( $portfolio_gallery_get_option['portfolio_gallery_ht_view0_thumbs_position'] == 'before' ) {
                                                                    echo 'selected="selected"';
                                                                } ?>
                                                                        value="before"><?php echo __( 'Before Description', 'portfolio-gallery' ); ?></option>
                                                                <option <?php if ( $portfolio_gallery_get_option['portfolio_gallery_ht_view0_thumbs_position'] == 'after' ) {
                                                                    echo 'selected="selected"';
                                                                } ?>
                                                                        value="after"><?php echo __( 'After Description', 'portfolio-gallery' ); ?></option>
                                                            </select>
                                                        </div>
                                                        <div class="has-background">
                                                            <label
                                                                    for="ht_view0_thumbs_width"><?php echo __( 'Thumbnails Width', 'portfolio-gallery' ); ?></label>
                                                            <input type="text" name="params[portfolio_gallery_ht_view0_thumbs_width]"
                                                                   id="ht_view0_thumbs_width"
                                                                   value="<?php echo $portfolio_gallery_get_option['portfolio_gallery_ht_view0_thumbs_width']; ?>"
                                                                   class="text"/>
                                                            <span>px</span>
                                                        </div>
                                                    </div>


                                                    <div style="margin-top: -400px;">
                                                        <h3><?php echo __( 'Description', 'portfolio-gallery' ); ?></h3>
                                                        <div class="has-background">
                                                            <label
                                                                    for="ht_view0_show_description"><?php echo __( 'Show Description', 'portfolio-gallery' ); ?></label>
                                                            <input type="hidden" value="off"
                                                                   name="params[portfolio_gallery_ht_view0_show_description]"/>
                                                            <input type="checkbox"
                                                                   id="ht_view0_show_description" <?php if ( $portfolio_gallery_get_option['portfolio_gallery_ht_view0_show_description'] == 'on' ) {
                                                                echo 'checked="checked"';
                                                            } ?> name="params[portfolio_gallery_ht_view0_show_description]" value="on"/>
                                                        </div>
                                                        <div>
                                                            <label
                                                                    for="ht_view0_description_font_size"><?php echo __( 'Description Font Size', 'portfolio-gallery' ); ?></label>
                                                            <input type="text" name="params[portfolio_gallery_ht_view0_description_font_size]"
                                                                   id="ht_view0_description_font_size"
                                                                   value="<?php echo $portfolio_gallery_get_option['portfolio_gallery_ht_view0_description_font_size']; ?>"
                                                                   class="text"/>
                                                            <span>px</span>
                                                        </div>
                                                        <div class="has-background">
                                                            <label
                                                                    for="ht_view0_description_color"><?php echo __( 'Description Font Color', 'portfolio-gallery' ); ?></label>
                                                            <input name="params[portfolio_gallery_ht_view0_description_color]" type="text"
                                                                   class="color" id="ht_view0_description_color"
                                                                   value="#<?php echo $portfolio_gallery_get_option['portfolio_gallery_ht_view0_description_color']; ?>"
                                                                   size="10"/>
                                                        </div>
                                                    </div>

                                                    <div style="margin-top: -198px;">
                                                        <h3><?php echo __( 'Category styles', 'portfolio-gallery' ); ?></h3>

                                                        <div style="display: none;">
                                                            <label
                                                                    for="ht_view0_show_filtering"><?php echo __( 'Show Filtering', 'portfolio-gallery' ); ?></label>
                                                            <input type="hidden" value="off"
                                                                   name="params[portfolio_gallery_ht_view0_show_filtering]"/>
                                                            <input type="checkbox"
                                                                   id="ht_view0_show_filtering" <?php if ( $portfolio_gallery_get_option['portfolio_gallery_ht_view0_show_filtering'] == 'on' ) {
                                                                echo 'checked="checked"';
                                                            } ?> name="params[portfolio_gallery_ht_view0_show_filtering]" value="on"/>
                                                        </div>
                                                        <div class="">
                                                            <label
                                                                    for="ht_view0_cat_all"><?php echo __( 'Show All Category Button Name', 'portfolio-gallery' ); ?></label>
                                                            <input type="text" name="params[portfolio_gallery_ht_view0_cat_all]"
                                                                   id="ht_view0_cat_all"
                                                                   value="<?php echo esc_attr( $portfolio_gallery_get_option['portfolio_gallery_ht_view0_cat_all'] ); ?>"
                                                                   class="text"/>
                                                        </div>
                                                        <div class="has-background">
                                                            <label
                                                                    for="ht_view0_filterbutton_font_size"><?php echo __( 'Filter Button Font Size', 'portfolio-gallery' ); ?></label>
                                                            <input type="text" name="params[portfolio_gallery_ht_view0_filterbutton_font_size]"
                                                                   id="ht_view0_filterbutton_font_size"
                                                                   value="<?php echo $portfolio_gallery_get_option['portfolio_gallery_ht_view0_filterbutton_font_size']; ?>"
                                                                   class="text"/>
                                                            <span>px</span>
                                                        </div>

                                                        <div class="">
                                                            <label
                                                                    for="ht_view0_filterbutton_font_color"><?php echo __( 'Filter Button Font Color', 'portfolio-gallery' ); ?></label>
                                                            <input name="params[portfolio_gallery_ht_view0_filterbutton_font_color]" type="text"
                                                                   class="color" id="ht_view0_filterbutton_font_color"
                                                                   value="#<?php echo $portfolio_gallery_get_option['portfolio_gallery_ht_view0_filterbutton_font_color']; ?>"
                                                                   size="10"/>
                                                        </div>
                                                        <div class="has-background">
                                                            <label
                                                                    for="ht_view0_filterbutton_hover_font_color"><?php echo __( 'Filter Button Font Hover Color', 'portfolio-gallery' ); ?></label>
                                                            <input name="params[portfolio_gallery_ht_view0_filterbutton_hover_font_color]"
                                                                   type="text" class="color" id="ht_view0_filterbutton_hover_font_color"
                                                                   value="#<?php echo $portfolio_gallery_get_option['portfolio_gallery_ht_view0_filterbutton_hover_font_color']; ?>"
                                                                   size="10"/>
                                                        </div>
                                                        <div class="">
                                                            <label
                                                                    for="ht_view0_filterbutton_background_color"><?php echo __( 'Filter Button Background Color', 'portfolio-gallery' ); ?></label>
                                                            <input name="params[portfolio_gallery_ht_view0_filterbutton_background_color]"
                                                                   type="text" class="color" id="ht_view0_filterbutton_background_color"
                                                                   value="#<?php echo $portfolio_gallery_get_option['portfolio_gallery_ht_view0_filterbutton_background_color']; ?>"
                                                                   size="10"/>
                                                        </div>
                                                        <div class="has-background">
                                                            <label
                                                                    for="ht_view0_filterbutton_hover_background_color"><?php echo __( 'Filter Button Background Hover Color', 'portfolio-gallery' ); ?></label>
                                                            <input name="params[portfolio_gallery_ht_view0_filterbutton_hover_background_color]"
                                                                   type="text" class="color" id="ht_view0_filterbutton_hover_background_color"
                                                                   value="#<?php echo $portfolio_gallery_get_option['portfolio_gallery_ht_view0_filterbutton_hover_background_color']; ?>"
                                                                   size="10"/>
                                                        </div>

                                                        <div class="" style="display: none;">
                                                            <label
                                                                    for="ht_view0_filterbutton_border_width"><?php echo __( 'Filter Button Border Width', 'portfolio-gallery' ); ?></label>
                                                            <input type="text"
                                                                   name="params[portfolio_gallery_ht_view0_filterbutton_border_width]"
                                                                   id="ht_view0_filterbutton_border_width"
                                                                   value="<?php echo $portfolio_gallery_get_option['portfolio_gallery_ht_view0_filterbutton_border_width']; ?>"
                                                                   class="text"/>
                                                            <span>px</span>
                                                        </div>
                                                        <div style="display: none;">
                                                            <input name="params[portfolio_gallery_ht_view0_filterbutton_border_color]"
                                                                   type="text" class="color" id="ht_view0_filterbutton_border_color"
                                                                   value="#<?php echo $portfolio_gallery_get_option['portfolio_gallery_ht_view0_filterbutton_border_color']; ?>"
                                                                   size="10"/>
                                                            <label
                                                                    for="ht_view0_filterbutton_border_color"><?php echo __( 'Filter Button Border Color', 'portfolio-gallery' ); ?></label>
                                                        </div>
                                                        <div class="">
                                                            <label
                                                                    for="ht_view0_filterbutton_border_radius"><?php echo __( 'Filter Button Border Radius', 'portfolio-gallery' ); ?></label>
                                                            <input type="text"
                                                                   name="params[portfolio_gallery_ht_view0_filterbutton_border_radius]"
                                                                   id="ht_view0_filterbutton_border_radius"
                                                                   value="<?php echo $portfolio_gallery_get_option['portfolio_gallery_ht_view0_filterbutton_border_radius']; ?>"
                                                                   class="text"/>
                                                            <span>px</span>
                                                        </div>
                                                        <div class="has-background">
                                                            <label
                                                                    for="ht_view0_filterbutton_border_padding"><?php echo __( 'Filter Button Padding', 'portfolio-gallery' ); ?></label>
                                                            <input type="text"
                                                                   name="params[portfolio_gallery_ht_view0_filterbutton_border_padding]"
                                                                   id="ht_view0_filterbutton_border_padding"
                                                                   value="<?php echo $portfolio_gallery_get_option['portfolio_gallery_ht_view0_filterbutton_border_padding']; ?>"
                                                                   class="text"/>
                                                            <span>px</span>
                                                        </div>
                                                        <div style="display: none;">
                                                            <label
                                                                    for="ht_view0_filterbutton_margin"><?php echo __( 'Filter Button Margins', 'portfolio-gallery' ); ?></label>
                                                            <input type="text" name="params[portfolio_gallery_ht_view0_filterbutton_margin]"
                                                                   id="ht_view0_filterbutton_margin"
                                                                   value="<?php echo $portfolio_gallery_get_option['portfolio_gallery_ht_view0_filterbutton_margin']; ?>"
                                                                   class="text"/>
                                                            <span>px</span>
                                                        </div>
                                                        <div class="">
                                                            <label
                                                                    for="ht_view0_filtering_float"><?php echo __( 'Filter block Position', 'portfolio-gallery' ); ?></label>
                                                            <select id="ht_view0_filtering_float"
                                                                    name="params[portfolio_gallery_ht_view0_filtering_float]">
                                                                <option <?php if ( $portfolio_gallery_get_option['portfolio_gallery_ht_view0_filtering_float'] == 'left' ) {
                                                                    echo 'selected="selected"';
                                                                } ?> value="left"><?php echo __( 'Left', 'portfolio-gallery' ); ?></option>
                                                                <option <?php if ( $portfolio_gallery_get_option['portfolio_gallery_ht_view0_filtering_float'] == 'right' ) {
                                                                    echo 'selected="selected"';
                                                                } ?> value="right"><?php echo __( 'Right', 'portfolio-gallery' ); ?></option>
                                                                <option <?php if ( $portfolio_gallery_get_option['portfolio_gallery_ht_view0_filtering_float'] == 'top' ) {
                                                                    echo 'selected="selected"';
                                                                } ?> value="top"><?php echo __( 'Top', 'portfolio-gallery' ); ?></option>
                                                            </select>
                                                        </div>
                                                    </div>

                                                    <div style="margin-top: 15px;">
                                                        <h3><?php _e('Link Button','portfolio-gallery'); ?></h3>
                                                        <div class="has-background">
                                                            <label
                                                                    for="ht_view0_show_linkbutton"><?php echo __( 'Show Link Button', 'portfolio-gallery' ); ?></label>
                                                            <input type="hidden" value="off"
                                                                   name="params[portfolio_gallery_ht_view0_show_linkbutton]"/>
                                                            <input type="checkbox"
                                                                   id="ht_view0_show_linkbutton" <?php if ( $portfolio_gallery_get_option['portfolio_gallery_ht_view0_show_linkbutton'] == 'on' ) {
                                                                echo 'checked="checked"';
                                                            } ?> name="params[portfolio_gallery_ht_view0_show_linkbutton]" value="on"/>
                                                        </div>
                                                        <div>
                                                            <label
                                                                    for="ht_view0_linkbutton_text"><?php echo __( 'Link Button Text', 'portfolio-gallery' ); ?></label>
                                                            <input type="text" name="params[portfolio_gallery_ht_view0_linkbutton_text]"
                                                                   id="ht_view0_linkbutton_text"
                                                                   value="<?php echo esc_attr( $portfolio_gallery_get_option['portfolio_gallery_ht_view0_linkbutton_text'] ); ?>"
                                                                   class="text"/>
                                                        </div>
                                                        <div class="has-background">
                                                            <label
                                                                    for="ht_view0_linkbutton_font_size"><?php echo __( 'Link Button Font Size', 'portfolio-gallery' ); ?></label>
                                                            <input type="text" name="params[portfolio_gallery_ht_view0_linkbutton_font_size]"
                                                                   id="ht_view0_linkbutton_font_size"
                                                                   value="<?php echo $portfolio_gallery_get_option['portfolio_gallery_ht_view0_linkbutton_font_size']; ?>"
                                                                   class="text"/>
                                                            <span>px</span>
                                                        </div>
                                                        <div>
                                                            <label
                                                                    for="ht_view0_linkbutton_color"><?php echo __( 'Link Button Font Color', 'portfolio-gallery' ); ?></label>
                                                            <input name="params[portfolio_gallery_ht_view0_linkbutton_color]" type="text"
                                                                   class="color" id="ht_view0_linkbutton_color"
                                                                   value="#<?php echo $portfolio_gallery_get_option['portfolio_gallery_ht_view0_linkbutton_color']; ?>"
                                                                   size="10"/>
                                                        </div>
                                                        <div class="has-background">
                                                            <label
                                                                    for="ht_view0_linkbutton_font_hover_color"><?php echo __( 'Link Button Font Hover Color', 'portfolio-gallery' ); ?></label>
                                                            <input name="params[portfolio_gallery_ht_view0_linkbutton_font_hover_color]"
                                                                   type="text" class="color" id="ht_view0_linkbutton_font_hover_color"
                                                                   value="#<?php echo $portfolio_gallery_get_option['portfolio_gallery_ht_view0_linkbutton_font_hover_color']; ?>"
                                                                   size="10"/>
                                                        </div>
                                                        <div>
                                                            <label
                                                                    for="ht_view0_linkbutton_background_color"><?php echo __( 'Link Button Background Color', 'portfolio-gallery' ); ?></label>
                                                            <input name="params[portfolio_gallery_ht_view0_linkbutton_background_color]"
                                                                   type="text" class="color" id="ht_view0_linkbutton_background_color"
                                                                   value="#<?php echo $portfolio_gallery_get_option['portfolio_gallery_ht_view0_linkbutton_background_color']; ?>"
                                                                   size="10"/>
                                                        </div>
                                                        <div class="has-background">
                                                            <label
                                                                    for="ht_view0_linkbutton_background_hover_color"><?php echo __( 'Link Button Background Hover Color', 'portfolio-gallery' ); ?></label>
                                                            <input name="params[portfolio_gallery_ht_view0_linkbutton_background_hover_color]"
                                                                   type="text" class="color" id="ht_view0_linkbutton_background_hover_color"
                                                                   value="#<?php echo $portfolio_gallery_get_option['portfolio_gallery_ht_view0_linkbutton_background_hover_color']; ?>"
                                                                   size="10"/>
                                                        </div>

                                                    </div>
                                                </li>

                                                <li id="portfolio-view-options-1">
                                                    <div>
                                                        <h3><?php echo __( 'Element Styles', 'portfolio-gallery' ); ?></h3>
                                                        <div class="has-background">
                                                            <label
                                                                    for="ht_view1_block_width"><?php echo __( 'Block Width', 'portfolio-gallery' ); ?></label>
                                                            <input type="text" name="params[portfolio_gallery_ht_view1_block_width]"
                                                                   id="ht_view1_block_width"
                                                                   value="<?php echo $portfolio_gallery_get_option['portfolio_gallery_ht_view1_block_width']; ?>"
                                                                   class="text"/>
                                                            <span>px</span>
                                                        </div>
                                                        <div>
                                                            <label
                                                                    for="ht_view1_element_background_color"><?php echo __( 'Element Background Color', 'portfolio-gallery' ); ?></label>
                                                            <input name="params[portfolio_gallery_ht_view1_element_background_color]"
                                                                   type="text" class="color" id="ht_view1_element_background_color"
                                                                   value="#<?php echo $portfolio_gallery_get_option['portfolio_gallery_ht_view1_element_background_color']; ?>"
                                                                   size="10"/>
                                                        </div>
                                                        <div class="has-background">
                                                            <label
                                                                    for="ht_view1_element_border_width"><?php echo __( 'Element Border Width', 'portfolio-gallery' ); ?></label>
                                                            <input type="text" name="params[portfolio_gallery_ht_view1_element_border_width]"
                                                                   id="ht_view1_element_border_width"
                                                                   value="<?php echo $portfolio_gallery_get_option['portfolio_gallery_ht_view1_element_border_width']; ?>"
                                                                   class="text"/>
                                                            <span>px</span>
                                                        </div>
                                                        <div>
                                                            <label
                                                                    for="ht_view1_element_border_color"><?php echo __( 'Element Border Color', 'portfolio-gallery' ); ?></label>
                                                            <input name="params[portfolio_gallery_ht_view1_element_border_color]" type="text"
                                                                   class="color" id="ht_view1_element_border_color"
                                                                   value="#<?php echo $portfolio_gallery_get_option['portfolio_gallery_ht_view1_element_border_color']; ?>"
                                                                   size="10"/>
                                                        </div>
                                                        <div class="has-background">
                                                            <label
                                                                    for="ht_view1_show_separator_lines"><?php echo __( 'Show Separator Lines', 'portfolio-gallery' ); ?></label>
                                                            <input type="hidden" value="off"
                                                                   name="params[portfolio_gallery_ht_view1_show_separator_lines]"/>
                                                            <input type="checkbox"
                                                                   id="ht_view1_show_separator_lines" <?php if ( $portfolio_gallery_get_option['portfolio_gallery_ht_view1_show_separator_lines'] == 'on' ) {
                                                                echo 'checked="checked"';
                                                            } ?> name="params[portfolio_gallery_ht_view1_show_separator_lines]" value="on"/>
                                                        </div>
                                                    </div>
                                                    <div>
                                                        <h3><?php echo __( 'Title', 'portfolio-gallery' ); ?></h3>
                                                        <div class="has-background">
                                                            <label
                                                                    for="ht_view1_title_font_size"><?php echo __( 'Title Font Size', 'portfolio-gallery' ); ?></label>
                                                            <input type="text" name="params[portfolio_gallery_ht_view1_title_font_size]"
                                                                   id="ht_view1_title_font_size"
                                                                   value="<?php echo $portfolio_gallery_get_option['portfolio_gallery_ht_view1_title_font_size']; ?>"
                                                                   class="text"/>
                                                            <span>px</span>
                                                        </div>
                                                        <div>
                                                            <label
                                                                    for="ht_view1_title_font_color"><?php echo __( 'Title Font Color', 'portfolio-gallery' ); ?></label>
                                                            <input name="params[portfolio_gallery_ht_view1_title_font_color]" type="text"
                                                                   class="color" id="ht_view1_title_font_color"
                                                                   value="#<?php echo $portfolio_gallery_get_option['portfolio_gallery_ht_view1_title_font_color']; ?>"
                                                                   size="10"/>
                                                        </div>
                                                    </div>
                                                    <div style="margin-top: 14px;">
                                                        <h3><?php echo __( 'Thumbnails', 'portfolio-gallery' ); ?></h3>
                                                        <div class="has-background">
                                                            <label
                                                                    for="ht_view1_show_thumbs"><?php echo __( 'Show Thumbnails', 'portfolio-gallery' ); ?></label>
                                                            <input type="hidden" value="off"
                                                                   name="params[portfolio_gallery_ht_view1_show_thumbs]"/>
                                                            <input type="checkbox"
                                                                   id="ht_view1_show_thumbs" <?php if ( $portfolio_gallery_get_option['portfolio_gallery_ht_view1_show_thumbs'] == 'on' ) {
                                                                echo 'checked="checked"';
                                                            } ?> name="params[portfolio_gallery_ht_view1_show_thumbs]" value="on"/>
                                                        </div>
                                                        <div>
                                                            <label
                                                                    for="ht_view1_thumbs_position"><?php echo __( 'Thumbnails Position', 'portfolio-gallery' ); ?></label>
                                                            <select id="ht_view1_thumbs_position"
                                                                    name="params[portfolio_gallery_ht_view1_thumbs_position]">
                                                                <option <?php if ( $portfolio_gallery_get_option['portfolio_gallery_ht_view1_thumbs_position'] == 'before' ) {
                                                                    echo 'selected="selected"';
                                                                } ?>
                                                                        value="before"><?php echo __( 'Before Description', 'portfolio-gallery' ); ?></option>
                                                                <option <?php if ( $portfolio_gallery_get_option['portfolio_gallery_ht_view1_thumbs_position'] == 'after' ) {
                                                                    echo 'selected="selected"';
                                                                } ?>
                                                                        value="after"><?php echo __( 'After Description', 'portfolio-gallery' ); ?></option>
                                                            </select>
                                                        </div>
                                                        <div class="has-background">
                                                            <label
                                                                    for="ht_view1_thumbs_width"><?php echo __( 'Thumbnails Width', 'portfolio-gallery' ); ?></label>
                                                            <input type="text" name="params[portfolio_gallery_ht_view1_thumbs_width]"
                                                                   id="ht_view1_thumbs_width"
                                                                   value="<?php echo $portfolio_gallery_get_option['portfolio_gallery_ht_view1_thumbs_width']; ?>"
                                                                   class="text"/>
                                                            <span>px</span>
                                                        </div>
                                                    </div>

                                                    <div style="margin-top:-80px;">
                                                        <h3><?php echo __( 'Link Button', 'portfolio-gallery' ); ?></h3>
                                                        <div class="has-background">
                                                            <label
                                                                    for="ht_view1_show_linkbutton"><?php echo __( 'Show Link Button', 'portfolio-gallery' ); ?></label>
                                                            <input type="hidden" value="off"
                                                                   name="params[portfolio_gallery_ht_view1_show_linkbutton]"/>
                                                            <input type="checkbox"
                                                                   id="ht_view1_show_linkbutton" <?php if ( $portfolio_gallery_get_option['portfolio_gallery_ht_view1_show_linkbutton'] == 'on' ) {
                                                                echo 'checked="checked"';
                                                            } ?> name="params[portfolio_gallery_ht_view1_show_linkbutton]" value="on"/>
                                                        </div>
                                                        <div>
                                                            <label
                                                                    for="ht_view1_linkbutton_text"><?php echo __( 'Link Button Text', 'portfolio-gallery' ); ?></label>
                                                            <input type="text" name="params[portfolio_gallery_ht_view1_linkbutton_text]"
                                                                   id="ht_view1_linkbutton_text"
                                                                   value="<?php echo esc_attr( $portfolio_gallery_get_option['portfolio_gallery_ht_view1_linkbutton_text'] ); ?>"
                                                                   class="text"/>
                                                        </div>
                                                        <div class="has-background">
                                                            <label
                                                                    for="ht_view1_linkbutton_font_size"><?php echo __( 'Link Button Font Size', 'portfolio-gallery' ); ?></label>
                                                            <input type="text" name="params[portfolio_gallery_ht_view1_linkbutton_font_size]"
                                                                   id="ht_view1_linkbutton_font_size"
                                                                   value="<?php echo $portfolio_gallery_get_option['portfolio_gallery_ht_view1_linkbutton_font_size']; ?>"
                                                                   class="text"/>
                                                            <span>px</span>
                                                        </div>
                                                        <div>
                                                            <label
                                                                    for="ht_view1_linkbutton_color"><?php echo __( 'Link Button Font Color', 'portfolio-gallery' ); ?></label>
                                                            <input name="params[portfolio_gallery_ht_view1_linkbutton_color]" type="text"
                                                                   class="color" id="ht_view1_linkbutton_color"
                                                                   value="#<?php echo $portfolio_gallery_get_option['portfolio_gallery_ht_view1_linkbutton_color']; ?>"
                                                                   size="10"/>
                                                        </div>
                                                        <div class="has-background">
                                                            <label
                                                                    for="ht_view1_linkbutton_font_hover_color"><?php echo __( 'Link Button Font Hover Color', 'portfolio-gallery' ); ?></label>
                                                            <input name="params[portfolio_gallery_ht_view1_linkbutton_font_hover_color]"
                                                                   type="text" class="color" id="ht_view1_linkbutton_font_hover_color"
                                                                   value="#<?php echo $portfolio_gallery_get_option['portfolio_gallery_ht_view1_linkbutton_font_hover_color']; ?>"
                                                                   size="10"/>
                                                        </div>
                                                        <div>
                                                            <label
                                                                    for="ht_view1_linkbutton_background_color"><?php echo __( 'Link Button Background Color', 'portfolio-gallery' ); ?></label>
                                                            <input name="params[portfolio_gallery_ht_view1_linkbutton_background_color]"
                                                                   type="text" class="color" id="ht_view1_linkbutton_background_color"
                                                                   value="#<?php echo $portfolio_gallery_get_option['portfolio_gallery_ht_view1_linkbutton_background_color']; ?>"
                                                                   size="10"/>
                                                        </div>
                                                        <div class="has-background">
                                                            <label
                                                                    for="ht_view1_linkbutton_background_hover_color"><?php echo __( 'Link Button Background Hover Color', 'portfolio-gallery' ); ?></label>
                                                            <input name="params[portfolio_gallery_ht_view1_linkbutton_background_hover_color]"
                                                                   type="text" class="color" id="ht_view1_linkbutton_background_hover_color"
                                                                   value="#<?php echo $portfolio_gallery_get_option['portfolio_gallery_ht_view1_linkbutton_background_hover_color']; ?>"
                                                                   size="10"/>
                                                        </div>
                                                    </div>


                                                    <div style="margin-top: 14px;">
                                                        <h3><?php echo __( 'Description', 'portfolio-gallery' ); ?></h3>
                                                        <div class="has-background">
                                                            <label
                                                                    for="ht_view1_show_description"><?php echo __( 'Show Description', 'portfolio-gallery' ); ?></label>
                                                            <input type="hidden" value="off"
                                                                   name="params[portfolio_gallery_ht_view1_show_description]"/>
                                                            <input type="checkbox"
                                                                   id="ht_view1_show_description" <?php if ( $portfolio_gallery_get_option['portfolio_gallery_ht_view1_show_description'] == 'on' ) {
                                                                echo 'checked="checked"';
                                                            } ?> name="params[portfolio_gallery_ht_view1_show_description]" value="on"/>
                                                        </div>
                                                        <div>
                                                            <label
                                                                    for="ht_view1_description_font_size"><?php echo __( 'Description Font Size', 'portfolio-gallery' ); ?></label>
                                                            <input type="text" name="params[portfolio_gallery_ht_view1_description_font_size]"
                                                                   id="ht_view1_description_font_size"
                                                                   value="<?php echo $portfolio_gallery_get_option['portfolio_gallery_ht_view1_description_font_size']; ?>"
                                                                   class="text"/>
                                                            <span>px</span>
                                                        </div>
                                                        <div class="has-background">
                                                            <label
                                                                    for="ht_view1_description_color"><?php echo __( 'Description Font Color', 'portfolio-gallery' ); ?></label>
                                                            <input name="params[portfolio_gallery_ht_view1_description_color]" type="text"
                                                                   class="color" id="ht_view1_description_color"
                                                                   value="#<?php echo $portfolio_gallery_get_option['portfolio_gallery_ht_view1_description_color']; ?>"
                                                                   size="10"/>
                                                        </div>
                                                    </div>

                                                    <div style="margin-top:14px;">
                                                        <h3><?php echo __( 'Category styles', 'portfolio-gallery' ); ?></h3>
                                                        <div style="display: none;">
                                                            <label for="ht_view1_show_filtering"
                                                                   style="display: none;"><?php echo __( 'Show Filtering', 'portfolio-gallery' ); ?></label>
                                                            <input type="hidden" value="off"
                                                                   name="params[portfolio_gallery_ht_view1_show_filtering]"/>
                                                            <input type="checkbox"
                                                                   id="ht_view1_show_filtering" <?php if ( $portfolio_gallery_get_option['portfolio_gallery_ht_view1_show_filtering'] == 'on' ) {
                                                                echo 'checked="checked"';
                                                            } ?> name="params[portfolio_gallery_ht_view1_show_filtering]" value="on"/>
                                                        </div>
                                                        <div class="">
                                                            <label
                                                                    for="ht_view1_cat_all"><?php echo __( 'Show All Category Button Name', 'portfolio-gallery' ); ?></label>
                                                            <input type="text" name="params[portfolio_gallery_ht_view1_cat_all]"
                                                                   id="ht_view1_cat_all"
                                                                   value="<?php echo esc_attr( $portfolio_gallery_get_option['portfolio_gallery_ht_view1_cat_all'] ); ?>"
                                                                   class="text"/>
                                                        </div>
                                                        <div class="has-background">
                                                            <label
                                                                    for="ht_view1_filterbutton_font_size"><?php echo __( 'Filter Button Font Size', 'portfolio-gallery' ); ?></label>
                                                            <input type="text" name="params[portfolio_gallery_ht_view1_filterbutton_font_size]"
                                                                   id="ht_view1_filterbutton_font_size"
                                                                   value="<?php echo $portfolio_gallery_get_option['portfolio_gallery_ht_view1_filterbutton_font_size']; ?>"
                                                                   class="text"/>
                                                            <span>px</span>
                                                        </div>
                                                        <div class="">
                                                            <label
                                                                    for="ht_view1_filterbutton_font_color"><?php echo __( 'Filter Button Font Color', 'portfolio-gallery' ); ?></label>
                                                            <input name="params[portfolio_gallery_ht_view1_filterbutton_font_color]" type="text"
                                                                   class="color" id="ht_view1_filterbutton_font_color"
                                                                   value="#<?php echo $portfolio_gallery_get_option['portfolio_gallery_ht_view1_filterbutton_font_color']; ?>"
                                                                   size="10"/>
                                                        </div>
                                                        <div class="has-background">
                                                            <label
                                                                    for="ht_view1_filterbutton_hover_font_color"><?php echo __( 'Filter Button Font Hover Color', 'portfolio-gallery' ); ?></label>
                                                            <input name="params[portfolio_gallery_ht_view1_filterbutton_hover_font_color]"
                                                                   type="text" class="color" id="ht_view1_filterbutton_hover_font_color"
                                                                   value="#<?php echo $portfolio_gallery_get_option['portfolio_gallery_ht_view1_filterbutton_hover_font_color']; ?>"
                                                                   size="10"/>
                                                        </div>
                                                        <div class="">
                                                            <label
                                                                    for="ht_view1_filterbutton_background_color"><?php echo __( 'Filter Button Background Color', 'portfolio-gallery' ); ?></label>
                                                            <input name="params[portfolio_gallery_ht_view1_filterbutton_background_color]"
                                                                   type="text" class="color" id="ht_view1_filterbutton_background_color"
                                                                   value="#<?php echo $portfolio_gallery_get_option['portfolio_gallery_ht_view1_filterbutton_background_color']; ?>"
                                                                   size="10"/>
                                                        </div>
                                                        <div class="has-background">
                                                            <label
                                                                    for="ht_view1_filterbutton_hover_background_color"><?php echo __( 'Filter Button Background Hover Color', 'portfolio-gallery' ); ?></label>
                                                            <input name="params[portfolio_gallery_ht_view1_filterbutton_hover_background_color]"
                                                                   type="text" class="color" id="ht_view1_filterbutton_hover_background_color"
                                                                   value="#<?php echo $portfolio_gallery_get_option['portfolio_gallery_ht_view1_filterbutton_hover_background_color']; ?>"
                                                                   size="10"/>
                                                        </div>
                                                        <div class="" style="display: none;">
                                                            <label
                                                                    for="ht_view1_filterbutton_border_width"><?php echo __( 'Filter Button Border Width', 'portfolio-gallery' ); ?></label>
                                                            <input type="text"
                                                                   name="params[portfolio_gallery_ht_view1_filterbutton_border_width]"
                                                                   id="ht_view1_filterbutton_border_width"
                                                                   value="<?php echo $portfolio_gallery_get_option['portfolio_gallery_ht_view1_filterbutton_border_width']; ?>"
                                                                   class="text"/>
                                                            <span>px</span>
                                                        </div>
                                                        <div style="display: none;">
                                                            <input name="params[portfolio_gallery_ht_view1_filterbutton_border_color]"
                                                                   type="text" class="color" id="ht_view1_filterbutton_border_color"
                                                                   value="#<?php echo $portfolio_gallery_get_option['portfolio_gallery_ht_view1_filterbutton_border_color']; ?>"
                                                                   size="10"/>
                                                            <label
                                                                    for="ht_view1_filterbutton_border_color"><?php echo __( 'Filter Button Border Color', 'portfolio-gallery' ); ?></label>
                                                        </div>
                                                        <div class="">
                                                            <label
                                                                    for="ht_view1_filterbutton_border_radius"><?php echo __( 'Filter Button Border Radius', 'portfolio-gallery' ); ?></label>
                                                            <input type="text"
                                                                   name="params[portfolio_gallery_ht_view1_filterbutton_border_radius]"
                                                                   id="ht_view1_filterbutton_border_radius"
                                                                   value="<?php echo $portfolio_gallery_get_option['portfolio_gallery_ht_view1_filterbutton_border_radius']; ?>"
                                                                   class="text"/>
                                                            <span>px</span>
                                                        </div>
                                                        <div class="has-background">
                                                            <label
                                                                    for="ht_view1_filterbutton_border_padding"><?php echo __( 'Filter Button Padding', 'portfolio-gallery' ); ?></label>
                                                            <input type="text"
                                                                   name="params[portfolio_gallery_ht_view1_filterbutton_border_padding]"
                                                                   id="ht_view1_filterbutton_border_padding"
                                                                   value="<?php echo $portfolio_gallery_get_option['portfolio_gallery_ht_view1_filterbutton_border_padding']; ?>"
                                                                   class="text"/>
                                                            <span>px</span>
                                                        </div>
                                                        <div style="display: none;">
                                                            <label
                                                                    for="ht_view1_filterbutton_margin"><?php echo __( 'Filter Button Margins', 'portfolio-gallery' ); ?></label>
                                                            <input type="text" name="params[portfolio_gallery_ht_view1_filterbutton_margin]"
                                                                   id="ht_view1_filterbutton_margin"
                                                                   value="<?php echo $portfolio_gallery_get_option['portfolio_gallery_ht_view1_filterbutton_margin']; ?>"
                                                                   class="text"/>
                                                            <span>px</span>
                                                        </div>
                                                        <div class="">
                                                            <label
                                                                    for="ht_view1_filtering_float"><?php echo __( 'Filter block Position', 'portfolio-gallery' ); ?></label>
                                                            <select id="ht_view1_filtering_float"
                                                                    name="params[portfolio_gallery_ht_view1_filtering_float]">
                                                                <option <?php if ( $portfolio_gallery_get_option['portfolio_gallery_ht_view1_filtering_float'] == 'left' ) {
                                                                    echo 'selected="selected"';
                                                                } ?> value="left"><?php echo __( 'Left', 'portfolio-gallery' ); ?></option>
                                                                <option <?php if ( $portfolio_gallery_get_option['portfolio_gallery_ht_view1_filtering_float'] == 'right' ) {
                                                                    echo 'selected="selected"';
                                                                } ?> value="right"><?php echo __( 'Right', 'portfolio-gallery' ); ?></option>
                                                                <option <?php if ( $portfolio_gallery_get_option['portfolio_gallery_ht_view1_filtering_float'] == 'top' ) {
                                                                    echo 'selected="selected"';
                                                                } ?> value="top"><?php echo __( 'Top', 'portfolio-gallery' ); ?></option>
                                                            </select>
                                                        </div>


                                                    </div>

                                                    <div style="margin-top: -404px;">
                                                        <h3><?php echo __( 'Sorting Styles', 'portfolio-gallery' ); ?></h3>
                                                        <div class="" style="display: none;">
                                                            <label for="ht_view1_show_sorting"
                                                                   style="display: none;"><?php echo __( 'Show Sorting', 'portfolio-gallery' ); ?></label>
                                                            <input type="hidden" value="off"
                                                                   name="params[portfolio_gallery_ht_view1_show_sorting]"/>
                                                            <input type="checkbox"
                                                                   id="ht_view1_show_sorting" <?php if ( $portfolio_gallery_get_option['portfolio_gallery_ht_view1_show_sorting'] == 'on' ) {
                                                                echo 'checked="checked"';
                                                            } ?> name="params[portfolio_gallery_ht_view1_show_sorting]" value="on"/>
                                                        </div>
                                                        <div class="has-background">
                                                            <label
                                                                    for="ht_view1_sortbutton_font_size"><?php echo __( 'Sort Button Font Size', 'portfolio-gallery' ); ?></label>
                                                            <input type="text" name="params[portfolio_gallery_ht_view1_sortbutton_font_size]"
                                                                   id="ht_view1_sortbutton_font_size"
                                                                   value="<?php echo $portfolio_gallery_get_option['portfolio_gallery_ht_view1_sortbutton_font_size']; ?>"
                                                                   class="text"/>
                                                            <span>px</span>
                                                        </div>
                                                        <div class="">
                                                            <label
                                                                    for="ht_view1_sortbutton_font_color"><?php echo __( 'Sort Button Font Color', 'portfolio-gallery' ); ?></label>
                                                            <input name="params[portfolio_gallery_ht_view1_sortbutton_font_color]" type="text"
                                                                   class="color" id="ht_view1_sortbutton_font_color"
                                                                   value="#<?php echo $portfolio_gallery_get_option['portfolio_gallery_ht_view1_sortbutton_font_color']; ?>"
                                                                   size="10"/>
                                                        </div>
                                                        <div class="has-background">
                                                            <label
                                                                    for="ht_view1_sortbutton_hover_font_color"><?php echo __( 'Sort Button Font Hover Color', 'portfolio-gallery' ); ?></label>
                                                            <input name="params[portfolio_gallery_ht_view1_sortbutton_hover_font_color]"
                                                                   type="text" class="color" id="ht_view1_sortbutton_hover_font_color"
                                                                   value="#<?php echo $portfolio_gallery_get_option['portfolio_gallery_ht_view1_sortbutton_hover_font_color']; ?>"
                                                                   size="10"/>
                                                        </div>
                                                        <div class="">
                                                            <label
                                                                    for="ht_view1_sortbutton_background_color"><?php echo __( 'Sort Button Background Color', 'portfolio-gallery' ); ?></label>
                                                            <input name="params[portfolio_gallery_ht_view1_sortbutton_background_color]"
                                                                   type="text" class="color" id="ht_view1_sortbutton_background_color"
                                                                   value="#<?php echo $portfolio_gallery_get_option['portfolio_gallery_ht_view1_sortbutton_background_color']; ?>"
                                                                   size="10"/>
                                                        </div>
                                                        <div class="has-background">
                                                            <label
                                                                    for="ht_view1_sortbutton_hover_background_color"><?php echo __( 'Sort Button Background Hover Color', 'portfolio-gallery' ); ?></label>
                                                            <input name="params[portfolio_gallery_ht_view1_sortbutton_hover_background_color]"
                                                                   type="text" class="color" id="ht_view1_sortbutton_hover_background_color"
                                                                   value="#<?php echo $portfolio_gallery_get_option['portfolio_gallery_ht_view1_sortbutton_hover_background_color']; ?>"
                                                                   size="10"/>
                                                        </div>
                                                        <div class="has-background" style="display: none;">
                                                            <label
                                                                    for="ht_view1_sortbutton_border_width"><?php echo __( 'Sort Button Border Width', 'portfolio-gallery' ); ?></label>
                                                            <input type="text" name="params[portfolio_gallery_ht_view1_sortbutton_border_width]"
                                                                   id="ht_view1_sortbutton_border_width"
                                                                   value="<?php echo $portfolio_gallery_get_option['portfolio_gallery_ht_view1_sortbutton_border_width']; ?>"
                                                                   class="text"/>
                                                            <span>px</span>
                                                        </div>
                                                        <div style="display: none;">
                                                            <input name="params[portfolio_gallery_ht_view1_sortbutton_border_color]" type="text"
                                                                   class="color" id="ht_view1_sortbutton_border_color"
                                                                   value="#<?php echo $portfolio_gallery_get_option['portfolio_gallery_ht_view1_sortbutton_border_color']; ?>"
                                                                   size="10"/>
                                                            <label
                                                                    for="ht_view1_sortbutton_border_color"><?php echo __( 'Sort Button Border Color', 'portfolio-gallery' ); ?></label>
                                                        </div>
                                                        <div class="">
                                                            <label
                                                                    for="ht_view1_sortbutton_border_radius"><?php echo __( 'Sort Button Border Radius', 'portfolio-gallery' ); ?></label>
                                                            <input type="text"
                                                                   name="params[portfolio_gallery_ht_view1_sortbutton_border_radius]"
                                                                   id="ht_view1_sortbutton_border_radius"
                                                                   value="<?php echo $portfolio_gallery_get_option['portfolio_gallery_ht_view1_sortbutton_border_radius']; ?>"
                                                                   class="text"/>
                                                            <span>px</span>
                                                        </div>
                                                        <div class="has-background">
                                                            <label
                                                                    for="ht_view1_sortbutton_border_padding"><?php echo __( 'Sort Button Padding', 'portfolio-gallery' ); ?></label>
                                                            <input type="text"
                                                                   name="params[portfolio_gallery_ht_view1_sortbutton_border_padding]"
                                                                   id="ht_view1_sortbutton_border_padding"
                                                                   value="<?php echo $portfolio_gallery_get_option['portfolio_gallery_ht_view1_sortbutton_border_padding']; ?>"
                                                                   class="text"/>
                                                            <span>px</span>
                                                        </div>
                                                        <div style="display: none;">
                                                            <label
                                                                    for="ht_view1_sortbutton_margin"><?php echo __( 'Sort Button Margins', 'portfolio-gallery' ); ?></label>
                                                            <input type="text" name="params[portfolio_gallery_ht_view1_sortbutton_margin]"
                                                                   id="ht_view1_sortbutton_margin"
                                                                   value="<?php echo $portfolio_gallery_get_option['portfolio_gallery_ht_view1_sortbutton_margin']; ?>"
                                                                   class="text"/>
                                                            <span>px</span>
                                                        </div>
                                                        <div class="has-background">
                                                            <label
                                                                    for="ht_view1_sorting_name_by_default"><?php echo __( 'Sort By Default Bottom Name', 'portfolio-gallery' ); ?></label>
                                                            <input name="params[portfolio_gallery_ht_view1_sorting_name_by_default]" type="text"
                                                                   id="ht_view1_sorting_name_by_default"
                                                                   value="<?php echo esc_attr( $portfolio_gallery_get_option['portfolio_gallery_ht_view1_sorting_name_by_default'] ); ?>"
                                                                   size="10" class="text"/>
                                                        </div>
                                                        <div class="">
                                                            <label
                                                                    for="ht_view1_sorting_name_by_id"><?php echo __( 'Sorting By Date Button Name', 'portfolio-gallery' ); ?></label>
                                                            <input name="params[portfolio_gallery_ht_view1_sorting_name_by_id]" type="text"
                                                                   id="ht_view1_sorting_name_by_id"
                                                                   value="<?php echo esc_attr( $portfolio_gallery_get_option['portfolio_gallery_ht_view1_sorting_name_by_id'] ); ?>"
                                                                   size="10"/>
                                                        </div>
                                                        <div class="has-background">
                                                            <label
                                                                    for="ht_view1_sorting_name_by_name"><?php echo __( 'Sorting By Title Button Name', 'portfolio-gallery' ); ?></label>
                                                            <input name="params[portfolio_gallery_ht_view1_sorting_name_by_name]" type="text"
                                                                   id="ht_view1_sorting_name_by_name"
                                                                   value="<?php echo esc_attr( $portfolio_gallery_get_option['portfolio_gallery_ht_view1_sorting_name_by_name'] ); ?>"
                                                                   size="10"/>
                                                        </div>
                                                        <div class="">
                                                            <label
                                                                    for="ht_view1_sorting_name_by_random"><?php echo __( 'Random Sorting Button Name', 'portfolio-gallery' ); ?></label>
                                                            <input name="params[portfolio_gallery_ht_view1_sorting_name_by_random]" type="text"
                                                                   id="ht_view1_sorting_name_by_random"
                                                                   value="<?php echo esc_attr( $portfolio_gallery_get_option['portfolio_gallery_ht_view1_sorting_name_by_random'] ); ?>"
                                                                   size="10"/>
                                                        </div>
                                                        <div class="has-background">
                                                            <label
                                                                    for="ht_view1_sorting_name_by_asc"><?php echo __( 'Ascending Sorting Button Name', 'portfolio-gallery' ); ?></label>
                                                            <input name="params[portfolio_gallery_ht_view1_sorting_name_by_asc]" type="text"
                                                                   id="ht_view1_sorting_name_by_asc"
                                                                   value="<?php echo esc_attr( $portfolio_gallery_get_option['portfolio_gallery_ht_view1_sorting_name_by_asc'] ); ?>"
                                                                   size="10"/>
                                                        </div>
                                                        <div class="">
                                                            <label
                                                                    for="ht_view1_sorting_name_by_desc"><?php echo __( 'Descending Sorting Button Name', 'portfolio-gallery' ); ?></label>
                                                            <input name="params[portfolio_gallery_ht_view1_sorting_name_by_desc]" type="text"
                                                                   id="ht_view1_sorting_name_by_desc"
                                                                   value="<?php echo esc_attr( $portfolio_gallery_get_option['portfolio_gallery_ht_view1_sorting_name_by_desc'] ); ?>"
                                                                   size="10"/>
                                                        </div>
                                                        <div class="">
                                                            <label
                                                                    for="ht_view1_sorting_float"><?php echo __( 'Sort block Position', 'portfolio-gallery' ); ?></label>
                                                            <select id="ht_view1_sorting_float"
                                                                    name="params[portfolio_gallery_ht_view1_sorting_float]">
                                                                <option <?php if ( $portfolio_gallery_get_option['portfolio_gallery_ht_view1_sorting_float'] == 'left' ) {
                                                                    echo 'selected="selected"';
                                                                } ?> value="left"><?php echo __( 'Left', 'portfolio-gallery' ); ?></option>
                                                                <option <?php if ( $portfolio_gallery_get_option['portfolio_gallery_ht_view1_sorting_float'] == 'right' ) {
                                                                    echo 'selected="selected"';
                                                                } ?> value="right"><?php echo __( 'Right', 'portfolio-gallery' ); ?></option>
                                                                <option <?php if ( $portfolio_gallery_get_option['portfolio_gallery_ht_view1_sorting_float'] == 'top' ) {
                                                                    echo 'selected="selected"';
                                                                } ?> value="top"><?php echo __( 'Top', 'portfolio-gallery' ); ?></option>
                                                            </select>
                                                        </div>
                                                    </div>

                                                </li>

                                                <li id="portfolio-view-options-2">
                                                    <div>
                                                        <h3><?php echo __( 'Element Styles', 'portfolio-gallery' ); ?></h3>
                                                        <div class="has-background">
                                                            <label
                                                                    for="port_natural_size_contentpopup"><?php echo __( "Element's Image Behaviour", 'portfolio-gallery' ); ?></label>
                                                            <select id="port_natural_size_contentpopup"
                                                                    name="params[portfolio_gallery_port_natural_size_contentpopup]">
                                                                <option <?php if ( $portfolio_gallery_get_option['portfolio_gallery_port_natural_size_contentpopup'] == 'resize' ) {
                                                                    echo 'selected="selected"';
                                                                } ?> value="resize"><?php echo __( 'Resize', 'portfolio-gallery' ); ?></option>
                                                                <option <?php if ( $portfolio_gallery_get_option['portfolio_gallery_port_natural_size_contentpopup'] == 'natural' ) {
                                                                    echo 'selected="selected"';
                                                                } ?>
                                                                        value="natural"><?php echo __( 'Natural', 'portfolio-gallery' ); ?></option>
                                                            </select>
                                                        </div>
                                                        <div>
                                                            <label
                                                                    for="ht_view2_element_width"><?php echo __( "Element's Image Width", 'portfolio-gallery' ); ?></label>
                                                            <input type="text" name="params[portfolio_gallery_ht_view2_element_width]"
                                                                   id="ht_view2_element_width"
                                                                   value="<?php echo $portfolio_gallery_get_option['portfolio_gallery_ht_view2_element_width']; ?>"
                                                                   class="text"/>
                                                            <span>px</span>
                                                        </div>
                                                        <div class="has-background">
                                                            <label
                                                                    for="ht_view2_element_height"><?php echo __( "Element's Image Height", 'portfolio-gallery' ); ?></label>
                                                            <input type="text" name="params[portfolio_gallery_ht_view2_element_height]"
                                                                   id="ht_view2_element_height"
                                                                   value="<?php echo $portfolio_gallery_get_option['portfolio_gallery_ht_view2_element_height']; ?>"
                                                                   class="text"/>
                                                            <span>px</span>
                                                        </div>
                                                        <div>
                                                            <label
                                                                    for="ht_view2_element_background_color"><?php echo __( 'Element Background Color', 'portfolio-gallery' ); ?></label>
                                                            <input name="params[portfolio_gallery_ht_view2_element_background_color]"
                                                                   type="text" class="color" id="ht_view2_element_background_color"
                                                                   value="#<?php echo $portfolio_gallery_get_option['portfolio_gallery_ht_view2_element_background_color']; ?>"
                                                                   size="10"/>
                                                        </div>
                                                        <div class="has-background">
                                                            <label
                                                                    for="ht_view2_element_border_width"><?php echo __( 'Element Border Width', 'portfolio-gallery' ); ?></label>
                                                            <input type="text" name="params[portfolio_gallery_ht_view2_element_border_width]"
                                                                   id="ht_view2_element_border_width"
                                                                   value="<?php echo $portfolio_gallery_get_option['portfolio_gallery_ht_view2_element_border_width']; ?>"
                                                                   class="text"/>
                                                            <span>px</span>
                                                        </div>
                                                        <div>
                                                            <label
                                                                    for="ht_view2_element_border_color"><?php echo __( 'Element Border Color', 'portfolio-gallery' ); ?></label>
                                                            <input name="params[portfolio_gallery_ht_view2_element_border_color]" type="text"
                                                                   class="color" id="ht_view2_element_border_color"
                                                                   value="#<?php echo $portfolio_gallery_get_option['portfolio_gallery_ht_view2_element_border_color']; ?>"
                                                                   size="10"/>
                                                        </div>
                                                        <div class="has-background">
                                                            <label
                                                                    for="ht_view2_element_overlay_color"><?php echo __( "Element's Image Overlay Color", 'portfolio-gallery' ); ?></label>
                                                            <input name="params[portfolio_gallery_ht_view2_element_overlay_color]" type="text"
                                                                   class="color" id="ht_view2_element_overlay_color"
                                                                   value="#<?php echo $portfolio_gallery_get_option['portfolio_gallery_ht_view2_element_overlay_color']; ?>"
                                                                   size="10"/>
                                                        </div>
                                                        <div>
                                                            <label
                                                                    for="ht_view2_zoombutton_style"><?php echo __( "Element's Image Overlay Transparency", 'portfolio-gallery' ); ?></label>
                                                            <div class="slider-container">
                                                                <input name="params[portfolio_gallery_ht_view2_element_overlay_transparency]"
                                                                       id="ht_view2_element_overlay_transparency" data-slider-highlight="true"
                                                                       data-slider-values="0,10,20,30,40,50,60,70,80,90,100" type="text"
                                                                       data-slider="true"
                                                                       value="<?php echo $portfolio_gallery_get_option['portfolio_gallery_ht_view2_element_overlay_transparency']; ?>"/>
                                                                <span><?php echo $portfolio_gallery_get_option['portfolio_gallery_ht_view2_element_overlay_transparency']; ?>
                                                                    %</span>
                                                            </div>
                                                        </div>
                                                        <div class="has-background">
                                                            <label
                                                                    for="ht_view2_zoombutton_style"><?php echo __( 'Zoom Image Style', 'portfolio-gallery' ); ?></label>
                                                            <select id="ht_view2_zoombutton_style"
                                                                    name="params[portfolio_gallery_ht_view2_zoombutton_style]">
                                                                <option <?php if ( $portfolio_gallery_get_option['portfolio_gallery_ht_view2_zoombutton_style'] == 'light' ) {
                                                                    echo 'selected="selected"';
                                                                } ?> value="light"><?php echo __( 'Light', 'portfolio-gallery' ); ?></option>
                                                                <option <?php if ( $portfolio_gallery_get_option['portfolio_gallery_ht_view2_zoombutton_style'] == 'dark' ) {
                                                                    echo 'selected="selected"';
                                                                } ?> value="dark"><?php echo __( 'Dark', 'portfolio-gallery' ); ?></option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div>
                                                        <h3><?php echo __( 'Element Title', 'portfolio-gallery' ); ?></h3>
                                                        <div class="has-background">
                                                            <label
                                                                    for="ht_view2_element_title_font_size"><?php echo __( 'Element Title Font Size', 'portfolio-gallery' ); ?></label>
                                                            <input type="text" name="params[portfolio_gallery_ht_view2_element_title_font_size]"
                                                                   id="ht_view2_element_title_font_size"
                                                                   value="<?php echo $portfolio_gallery_get_option['portfolio_gallery_ht_view2_element_title_font_size']; ?>"
                                                                   class="text"/>
                                                            <span>px</span>
                                                        </div>
                                                        <div>
                                                            <label
                                                                    for="ht_view2_element_title_font_color"><?php echo __( 'Element Title Font Color', 'portfolio-gallery' ); ?></label>
                                                            <input name="params[portfolio_gallery_ht_view2_element_title_font_color]"
                                                                   type="text" class="color" id="ht_view2_element_title_font_color"
                                                                   value="#<?php echo $portfolio_gallery_get_option['portfolio_gallery_ht_view2_element_title_font_color']; ?>"
                                                                   size="10"/>
                                                        </div>
                                                        <div class="has-background">
                                                            <label
                                                                    for="ht_view2_image_title"><?php echo __( 'Image Title', 'portfolio-gallery' ); ?></label>
                                                            <input type="hidden" value="off"
                                                                   name="params[portfolio_gallery_ht_view2_image_title]"/>
                                                            <input type="checkbox"
                                                                   id="ht_view2_image_title" <?php if ( $portfolio_gallery_get_option['portfolio_gallery_ht_view2_image_title'] == 'on' ) {
                                                                echo 'checked="checked"';
                                                            } ?> name="params[portfolio_gallery_ht_view2_image_title]" value="on"/>
                                                        </div>
                                                    </div>
                                                    <div>
                                                        <h3><?php echo __( 'Element Link Button', 'portfolio-gallery' ); ?></h3>
                                                        <div class="has-background">
                                                            <label
                                                                    for="ht_view2_element_show_linkbutton"><?php echo __( 'Show Link Button On Element', 'portfolio-gallery' ); ?></label>
                                                            <input type="hidden" value="off"
                                                                   name="params[portfolio_gallery_ht_view2_element_show_linkbutton]"/>
                                                            <input type="checkbox"
                                                                   id="ht_view2_element_show_linkbutton" <?php if ( $portfolio_gallery_get_option['portfolio_gallery_ht_view2_element_show_linkbutton'] == 'on' ) {
                                                                echo 'checked="checked"';
                                                            } ?> name="params[portfolio_gallery_ht_view2_element_show_linkbutton]" value="on"/>
                                                        </div>
                                                        <div>
                                                            <label
                                                                    for="ht_view2_element_linkbutton_text"><?php echo __( 'Link Button Text', 'portfolio-gallery' ); ?></label>
                                                            <input type="text" name="params[portfolio_gallery_ht_view2_element_linkbutton_text]"
                                                                   id="ht_view2_element_linkbutton_text"
                                                                   value="<?php echo esc_attr( $portfolio_gallery_get_option['portfolio_gallery_ht_view2_element_linkbutton_text'] ); ?>"
                                                                   class="text"/>
                                                        </div>
                                                        <div class="has-background">
                                                            <label
                                                                    for="ht_view2_element_linkbutton_font_size"><?php echo __( 'Link Button Font Size', 'portfolio-gallery' ); ?></label>
                                                            <input type="text"
                                                                   name="params[portfolio_gallery_ht_view2_element_linkbutton_font_size]"
                                                                   id="ht_view2_element_linkbutton_font_size"
                                                                   value="<?php echo $portfolio_gallery_get_option['portfolio_gallery_ht_view2_element_linkbutton_font_size']; ?>"
                                                                   class="text"/>
                                                            <span>px</span>
                                                        </div>
                                                        <div>
                                                            <label
                                                                    for="ht_view2_element_linkbutton_color"><?php echo __( 'Link Button Font Color', 'portfolio-gallery' ); ?></label>
                                                            <input name="params[portfolio_gallery_ht_view2_element_linkbutton_color]"
                                                                   type="text" class="color" id="ht_view2_element_linkbutton_color"
                                                                   value="#<?php echo $portfolio_gallery_get_option['portfolio_gallery_ht_view2_element_linkbutton_color']; ?>"
                                                                   size="10"/>
                                                        </div>
                                                        <div class="has-background">
                                                            <label
                                                                    for="ht_view2_element_linkbutton_background_color"><?php echo __( 'Link Button Background Color', 'portfolio-gallery' ); ?></label>
                                                            <input name="params[portfolio_gallery_ht_view2_element_linkbutton_background_color]"
                                                                   type="text" class="color" id="ht_view2_element_linkbutton_background_color"
                                                                   value="#<?php echo $portfolio_gallery_get_option['portfolio_gallery_ht_view2_element_linkbutton_background_color']; ?>"
                                                                   size="10"/>
                                                        </div>
                                                    </div>

                                                    <div style="margin-top: -36px;">
                                                        <h3><?php echo __( 'Sorting styles', 'portfolio-gallery' ); ?></h3>
                                                        <div class="" style="display: none;">
                                                            <label for="ht_view2_show_sorting"
                                                                   style="display: none;"><?php echo __( 'Show Sorting', 'portfolio-gallery' ); ?></label>
                                                            <input type="hidden" value="off"
                                                                   name="params[portfolio_gallery_ht_view2_show_sorting]"/>
                                                            <input type="checkbox"
                                                                   id="ht_view2_show_sorting" <?php if ( $portfolio_gallery_get_option['portfolio_gallery_ht_view2_show_sorting'] == 'on' ) {
                                                                echo 'checked="checked"';
                                                            } ?> name="params[portfolio_gallery_ht_view2_show_sorting]" value="on"/>
                                                        </div>

                                                        <div class="has-background">
                                                            <label
                                                                    for="ht_view2_sortbutton_font_size"><?php echo __( 'Sort Button Font Size', 'portfolio-gallery' ); ?></label>
                                                            <input type="text" name="params[portfolio_gallery_ht_view2_sortbutton_font_size]"
                                                                   id="ht_view2_sortbutton_font_size"
                                                                   value="<?php echo $portfolio_gallery_get_option['portfolio_gallery_ht_view2_sortbutton_font_size']; ?>"
                                                                   class="text"/>
                                                            <span>px</span>
                                                        </div>
                                                        <div class="">
                                                            <label
                                                                    for="ht_view2_sortbutton_font_color"><?php echo __( 'Sort Button Font Color', 'portfolio-gallery' ); ?></label>
                                                            <input name="params[portfolio_gallery_ht_view2_sortbutton_font_color]" type="text"
                                                                   class="color" id="ht_view2_sortbutton_font_color"
                                                                   value="#<?php echo $portfolio_gallery_get_option['portfolio_gallery_ht_view2_sortbutton_font_color']; ?>"
                                                                   size="10"/>
                                                        </div>
                                                        <div class="has-background">
                                                            <label
                                                                    for="ht_view2_sortbutton_hover_font_color"><?php echo __( 'Sort Button Font Hover Color', 'portfolio-gallery' ); ?></label>
                                                            <input name="params[portfolio_gallery_ht_view2_sortbutton_hover_font_color]"
                                                                   type="text" class="color" id="ht_view2_sortbutton_hover_font_color"
                                                                   value="#<?php echo $portfolio_gallery_get_option['portfolio_gallery_ht_view2_sortbutton_hover_font_color']; ?>"
                                                                   size="10"/>
                                                        </div>
                                                        <div class="">
                                                            <label
                                                                    for="ht_view2_sortbutton_background_color"><?php echo __( 'Sort Button Background Color', 'portfolio-gallery' ); ?></label>
                                                            <input name="params[portfolio_gallery_ht_view2_sortbutton_background_color]"
                                                                   type="text" class="color" id="ht_view2_sortbutton_background_color"
                                                                   value="#<?php echo $portfolio_gallery_get_option['portfolio_gallery_ht_view2_sortbutton_background_color']; ?>"
                                                                   size="10"/>
                                                        </div>
                                                        <div class="has-background">
                                                            <label
                                                                    for="ht_view2_sortbutton_hover_background_color"><?php echo __( 'Sort Button Background Hover Color', 'portfolio-gallery' ); ?></label>
                                                            <input name="params[portfolio_gallery_ht_view2_sortbutton_hover_background_color]"
                                                                   type="text" class="color" id="ht_view2_sortbutton_hover_background_color"
                                                                   value="#<?php echo $portfolio_gallery_get_option['portfolio_gallery_ht_view2_sortbutton_hover_background_color']; ?>"
                                                                   size="10"/>
                                                        </div>
                                                        <div class="" style="display: none;">
                                                            <label
                                                                    for="ht_view2_sortbutton_border_width"><?php echo __( 'Sort Button Border Width', 'portfolio-gallery' ); ?></label>
                                                            <input type="text" name="params[portfolio_gallery_ht_view2_sortbutton_border_width]"
                                                                   id="ht_view2_sortbutton_border_width"
                                                                   value="<?php echo $portfolio_gallery_get_option['portfolio_gallery_ht_view2_sortbutton_border_width']; ?>"
                                                                   class="text"/>
                                                            <span>px</span>
                                                        </div>
                                                        <div style="display: none;">
                                                            <input name="params[portfolio_gallery_ht_view2_sortbutton_border_color]" type="text"
                                                                   class="color" id="ht_view2_sortbutton_border_color"
                                                                   value="#<?php echo $portfolio_gallery_get_option['portfolio_gallery_ht_view2_sortbutton_border_color']; ?>"
                                                                   size="10"/>
                                                            <label
                                                                    for="ht_view2_sortbutton_border_color"><?php echo __( 'Sort Button Border Color', 'portfolio-gallery' ); ?></label>
                                                        </div>
                                                        <div class="">
                                                            <label
                                                                    for="ht_view2_sortbutton_border_radius"><?php echo __( 'Sort Button Border Radius', 'portfolio-gallery' ); ?></label>
                                                            <input type="text"
                                                                   name="params[portfolio_gallery_ht_view2_sortbutton_border_radius]"
                                                                   id="ht_view2_sortbutton_border_radius"
                                                                   value="<?php echo $portfolio_gallery_get_option['portfolio_gallery_ht_view2_sortbutton_border_radius']; ?>"
                                                                   class="text"/>
                                                            <span>px</span>
                                                        </div>
                                                        <div class="has-background">
                                                            <label
                                                                    for="ht_view2_sortbutton_border_padding"><?php echo __( 'Sort Button Padding', 'portfolio-gallery' ); ?></label>
                                                            <input type="text"
                                                                   name="params[portfolio_gallery_ht_view2_sortbutton_border_padding]"
                                                                   id="ht_view2_sortbutton_border_padding"
                                                                   value="<?php echo $portfolio_gallery_get_option['portfolio_gallery_ht_view2_sortbutton_border_padding']; ?>"
                                                                   class="text"/>
                                                            <span>px</span>
                                                        </div>
                                                        <div class="" style="display: none;">
                                                            <label
                                                                    for="ht_view2_sortbutton_margin"><?php echo __( 'Sort Button Margins', 'portfolio-gallery' ); ?></label>
                                                            <input type="text" name="params[portfolio_gallery_ht_view2_sortbutton_margin]"
                                                                   id="ht_view2_sortbutton_margin"
                                                                   value="<?php echo $portfolio_gallery_get_option['portfolio_gallery_ht_view2_sortbutton_margin']; ?>"
                                                                   class="text"/>
                                                            <span>px</span>
                                                        </div>
                                                        <div class="">
                                                            <label
                                                                    for="ht_view2_sorting_float"><?php echo __( 'Sort block Position', 'portfolio-gallery' ); ?></label>
                                                            <select id="ht_view2_sorting_float"
                                                                    name="params[portfolio_gallery_ht_view2_sorting_float]">
                                                                <option <?php if ( $portfolio_gallery_get_option['portfolio_gallery_ht_view2_sorting_float'] == 'left' ) {
                                                                    echo 'selected="selected"';
                                                                } ?> value="left"><?php echo __( 'Left', 'portfolio-gallery' ); ?></option>
                                                                <option <?php if ( $portfolio_gallery_get_option['portfolio_gallery_ht_view2_sorting_float'] == 'right' ) {
                                                                    echo 'selected="selected"';
                                                                } ?> value="right"><?php echo __( 'Right', 'portfolio-gallery' ); ?></option>
                                                                <option <?php if ( $portfolio_gallery_get_option['portfolio_gallery_ht_view2_sorting_float'] == 'top' ) {
                                                                    echo 'selected="selected"';
                                                                } ?> value="top"><?php echo __( 'Top', 'portfolio-gallery' ); ?></option>
                                                            </select>
                                                        </div>
                                                        <div class="has-background">
                                                            <label
                                                                    for="ht_view2_sorting_name_by_default"><?php echo __( 'Sort By Default Bottom Name', 'portfolio-gallery' ); ?></label>
                                                            <input name="params[portfolio_gallery_ht_view2_sorting_name_by_default]" type="text"
                                                                   id="ht_view2_sorting_name_by_default"
                                                                   value="<?php echo esc_attr( $portfolio_gallery_get_option['portfolio_gallery_ht_view2_sorting_name_by_default'] ); ?>"
                                                                   size="10" class="text"/>
                                                        </div>
                                                        <div class="">
                                                            <label
                                                                    for="ht_view2_sorting_name_by_id"><?php echo __( 'Sorting By Date Button Name', 'portfolio-gallery' ); ?></label>
                                                            <input name="params[portfolio_gallery_ht_view2_sorting_name_by_id]" type="text"
                                                                   id="ht_view2_sorting_name_by_id"
                                                                   value="<?php echo esc_attr( $portfolio_gallery_get_option['portfolio_gallery_ht_view2_sorting_name_by_id'] ); ?>"
                                                                   size="10"/>
                                                        </div>
                                                        <div class="has-background">
                                                            <label
                                                                    for="ht_view2_sorting_name_by_name"><?php echo __( 'Sorting By Title Button Name', 'portfolio-gallery' ); ?></label>
                                                            <input name="params[portfolio_gallery_ht_view2_sorting_name_by_name]" type="text"
                                                                   id="ht_view2_sorting_name_by_name"
                                                                   value="<?php echo esc_attr( $portfolio_gallery_get_option['portfolio_gallery_ht_view2_sorting_name_by_name'] ); ?>"
                                                                   size="10"/>
                                                        </div>
                                                        <div class="">
                                                            <label
                                                                    for="ht_view2_sorting_name_by_random"><?php echo __( 'Random Sorting Button Name', 'portfolio-gallery' ); ?></label>
                                                            <input name="params[portfolio_gallery_ht_view2_sorting_name_by_random]" type="text"
                                                                   id="ht_view2_sorting_name_by_random"
                                                                   value="<?php echo esc_attr( $portfolio_gallery_get_option['portfolio_gallery_ht_view2_sorting_name_by_random'] ); ?>"
                                                                   size="10"/>
                                                        </div>
                                                        <div class="has-background">
                                                            <label
                                                                    for="ht_view2_sorting_name_by_asc"><?php echo __( 'Ascending Sorting Button Name', 'portfolio-gallery' ); ?></label>
                                                            <input name="params[portfolio_gallery_ht_view2_sorting_name_by_asc]" type="text"
                                                                   id="ht_view2_sorting_name_by_asc"
                                                                   value="<?php echo esc_attr( $portfolio_gallery_get_option['portfolio_gallery_ht_view2_sorting_name_by_asc'] ); ?>"
                                                                   size="10"/>
                                                        </div>
                                                        <div class="">
                                                            <label
                                                                    for="ht_view2_sorting_name_by_desc"><?php echo __( 'Descending Sorting Button Name', 'portfolio-gallery' ); ?></label>
                                                            <input name="params[portfolio_gallery_ht_view2_sorting_name_by_desc]" type="text"
                                                                   id="ht_view2_sorting_name_by_desc"
                                                                   value="<?php echo esc_attr( $portfolio_gallery_get_option['portfolio_gallery_ht_view2_sorting_name_by_desc'] ); ?>"
                                                                   size="10"/>
                                                        </div>
                                                    </div>

                                                    <div style="margin-top: 14px;">
                                                        <h3><?php echo __( 'Category styles', 'portfolio-gallery' ); ?></h3>

                                                        <div style="display: none;">
                                                            <label for="ht_view2_show_filtering"
                                                                   style="display: none;"><?php echo __( 'Show Filtering', 'portfolio-gallery' ); ?></label>
                                                            <input type="hidden" value="off"
                                                                   name="params[portfolio_gallery_ht_view2_show_filtering]"/>
                                                            <input type="checkbox"
                                                                   id="ht_view2_show_filtering" <?php if ( $portfolio_gallery_get_option['portfolio_gallery_ht_view2_show_filtering'] == 'on' ) {
                                                                echo 'checked="checked"';
                                                            } ?> name="params[portfolio_gallery_ht_view2_show_filtering]" value="on"/>
                                                        </div>
                                                        <div class="">
                                                            <label
                                                                    for="ht_view2_cat_all"><?php echo __( 'Show All Category Button Name', 'portfolio-gallery' ); ?></label>
                                                            <input type="text" name="params[portfolio_gallery_ht_view2_cat_all]"
                                                                   id="ht_view2_cat_all"
                                                                   value="<?php echo esc_attr( $portfolio_gallery_get_option['portfolio_gallery_ht_view2_cat_all'] ); ?>"
                                                                   class="text"/>
                                                        </div>
                                                        <div class="has-background">
                                                            <label
                                                                    for="ht_view2_filterbutton_font_size"><?php echo __( 'Filter Button Font Size', 'portfolio-gallery' ); ?></label>
                                                            <input type="text" name="params[portfolio_gallery_ht_view2_filterbutton_font_size]"
                                                                   id="ht_view2_filterbutton_font_size"
                                                                   value="<?php echo $portfolio_gallery_get_option['portfolio_gallery_ht_view2_filterbutton_font_size']; ?>"
                                                                   class="text"/>
                                                            <span>px</span>
                                                        </div>
                                                        <div class="">
                                                            <label
                                                                    for="ht_view2_filterbutton_font_color"><?php echo __( 'Filter Button Font Color', 'portfolio-gallery' ); ?></label>
                                                            <input name="params[portfolio_gallery_ht_view2_filterbutton_font_color]" type="text"
                                                                   class="color" id="ht_view2_filterbutton_font_color"
                                                                   value="#<?php echo $portfolio_gallery_get_option['portfolio_gallery_ht_view2_filterbutton_font_color']; ?>"
                                                                   size="10"/>
                                                        </div>
                                                        <div class="has-background">
                                                            <label
                                                                    for="ht_view2_filterbutton_hover_font_color"><?php echo __( 'Filter Button Font Hover Color', 'portfolio-gallery' ); ?></label>
                                                            <input name="params[portfolio_gallery_ht_view2_filterbutton_hover_font_color]"
                                                                   type="text" class="color" id="ht_view2_filterbutton_hover_font_color"
                                                                   value="#<?php echo $portfolio_gallery_get_option['portfolio_gallery_ht_view2_filterbutton_hover_font_color']; ?>"
                                                                   size="10"/>
                                                        </div>
                                                        <div class="">
                                                            <label
                                                                    for="ht_view2_filterbutton_background_color"><?php echo __( 'Filter Button Background Color', 'portfolio-gallery' ); ?></label>
                                                            <input name="params[portfolio_gallery_ht_view2_filterbutton_background_color]"
                                                                   type="text" class="color" id="ht_view2_filterbutton_background_color"
                                                                   value="#<?php echo $portfolio_gallery_get_option['portfolio_gallery_ht_view2_filterbutton_background_color']; ?>"
                                                                   size="10"/>
                                                        </div>
                                                        <div class="has-background">
                                                            <label
                                                                    for="ht_view2_filterbutton_hover_background_color"><?php echo __( 'Filter Button Background Hover Color', 'portfolio-gallery' ); ?></label>
                                                            <input name="params[portfolio_gallery_ht_view2_filterbutton_hover_background_color]"
                                                                   type="text" class="color" id="ht_view2_filterbutton_hover_background_color"
                                                                   value="#<?php echo $portfolio_gallery_get_option['portfolio_gallery_ht_view2_filterbutton_hover_background_color']; ?>"
                                                                   size="10"/>
                                                        </div>

                                                        <div class="" style="display: none;">
                                                            <label
                                                                    for="ht_view2_filterbutton_border_width"><?php echo __( 'Filter Button Border Width', 'portfolio-gallery' ); ?></label>
                                                            <input type="text"
                                                                   name="params[portfolio_gallery_ht_view2_filterbutton_border_width]"
                                                                   id="ht_view2_filterbutton_border_width"
                                                                   value="<?php echo $portfolio_gallery_get_option['portfolio_gallery_ht_view2_filterbutton_border_width']; ?>"
                                                                   class="text"/>
                                                            <span>px</span>
                                                        </div>
                                                        <div style="display: none;">
                                                            <input name="params[portfolio_gallery_ht_view2_filterbutton_border_color]"
                                                                   type="text" class="color" id="ht_view2_filterbutton_border_color"
                                                                   value="#<?php echo $portfolio_gallery_get_option['portfolio_gallery_ht_view2_filterbutton_border_color']; ?>"
                                                                   size="10"/>
                                                            <label
                                                                    for="ht_view2_filterbutton_border_color"><?php echo __( 'Filter Button Border Color', 'portfolio-gallery' ); ?></label>
                                                        </div>
                                                        <div class="">
                                                            <label
                                                                    for="ht_view2_filterbutton_border_radius"><?php echo __( 'Filter Button Border Radius', 'portfolio-gallery' ); ?></label>
                                                            <input type="text"
                                                                   name="params[portfolio_gallery_ht_view2_filterbutton_border_radius]"
                                                                   id="ht_view2_filterbutton_border_radius"
                                                                   value="<?php echo $portfolio_gallery_get_option['portfolio_gallery_ht_view2_filterbutton_border_radius']; ?>"
                                                                   class="text"/>
                                                            <span>px</span>
                                                        </div>
                                                        <div class="has-background">
                                                            <label
                                                                    for="ht_view2_filterbutton_border_padding"><?php echo __( 'Filter Button Padding', 'portfolio-gallery' ); ?></label>
                                                            <input type="text"
                                                                   name="params[portfolio_gallery_ht_view2_filterbutton_border_padding]"
                                                                   id="ht_view2_filterbutton_border_padding"
                                                                   value="<?php echo $portfolio_gallery_get_option['portfolio_gallery_ht_view2_filterbutton_border_padding']; ?>"
                                                                   class="text"/>
                                                            <span>px</span>
                                                        </div>
                                                        <div style="display: none;">
                                                            <label
                                                                    for="ht_view2_filterbutton_margin"><?php echo __( 'Filter Button Margins', 'portfolio-gallery' ); ?></label>
                                                            <input type="text" name="params[portfolio_gallery_ht_view2_filterbutton_margin]"
                                                                   id="ht_view2_filterbutton_margin"
                                                                   value="<?php echo $portfolio_gallery_get_option['portfolio_gallery_ht_view2_filterbutton_margin']; ?>"
                                                                   class="text"/>
                                                            <span>px</span>
                                                        </div>
                                                        <div class="">
                                                            <label
                                                                    for="ht_view2_filtering_float"><?php echo __( 'Filter block Position', 'portfolio-gallery' ); ?></label>
                                                            <select id="ht_view2_filtering_float"
                                                                    name="params[portfolio_gallery_ht_view2_filtering_float]">
                                                                <option <?php if ( $portfolio_gallery_get_option['portfolio_gallery_ht_view2_filtering_float'] == 'left' ) {
                                                                    echo 'selected="selected"';
                                                                } ?> value="left"><?php echo __( 'Left', 'portfolio-gallery' ); ?></option>
                                                                <option <?php if ( $portfolio_gallery_get_option['portfolio_gallery_ht_view2_filtering_float'] == 'right' ) {
                                                                    echo 'selected="selected"';
                                                                } ?> value="right"><?php echo __( 'Right', 'portfolio-gallery' ); ?></option>
                                                                <option <?php if ( $portfolio_gallery_get_option['portfolio_gallery_ht_view2_filtering_float'] == 'top' ) {
                                                                    echo 'selected="selected"';
                                                                } ?> value="top"><?php echo __( 'Top', 'portfolio-gallery' ); ?></option>
                                                            </select>
                                                        </div>

                                                    </div>


                                                    <div style="margin-top: 14px;">
                                                        <h3><?php echo __( 'Popup Title', 'portfolio-gallery' ); ?></h3>
                                                        <div class="has-background">
                                                            <label
                                                                    for="ht_view2_popup_title_font_size"><?php echo __( 'Popup Title Font Size', 'portfolio-gallery' ); ?></label>
                                                            <input type="text" name="params[portfolio_gallery_ht_view2_popup_title_font_size]"
                                                                   id="ht_view2_element_title_font_size"
                                                                   value="<?php echo $portfolio_gallery_get_option['portfolio_gallery_ht_view2_popup_title_font_size']; ?>"
                                                                   class="text"/>
                                                            <span>px</span>
                                                        </div>
                                                        <div>
                                                            <label
                                                                    for="ht_view2_popup_title_font_color"><?php echo __( 'Popup Title Font Color', 'portfolio-gallery' ); ?></label>
                                                            <input name="params[portfolio_gallery_ht_view2_popup_title_font_color]" type="text"
                                                                   class="color" id="ht_view2_element_title_font_color"
                                                                   value="#<?php echo $portfolio_gallery_get_option['portfolio_gallery_ht_view2_popup_title_font_color']; ?>"
                                                                   size="10"/>
                                                        </div>
                                                    </div>
                                                    <div style="margin-top: 14px;">
                                                        <h3><?php echo __( 'Popup Thumbnails', 'portfolio-gallery' ); ?></h3>
                                                        <div class="has-background">
                                                            <label
                                                                    for="ht_view2_show_thumbs"><?php echo __( 'Show Thumbnails', 'portfolio-gallery' ); ?></label>
                                                            <input type="hidden" value="off"
                                                                   name="params[portfolio_gallery_ht_view2_show_thumbs]"/>
                                                            <input type="checkbox"
                                                                   id="ht_view2_show_thumbs" <?php if ( $portfolio_gallery_get_option['portfolio_gallery_ht_view2_show_thumbs'] == 'on' ) {
                                                                echo 'checked="checked"';
                                                            } ?> name="params[portfolio_gallery_ht_view2_show_thumbs]" value="on"/>
                                                        </div>
                                                        <div>
                                                            <label
                                                                    for="ht_view2_thumbs_position"><?php echo __( 'Thumbnails Position', 'portfolio-gallery' ); ?></label>
                                                            <select id="ht_view2_thumbs_position"
                                                                    name="params[portfolio_gallery_ht_view2_thumbs_position]">
                                                                <option <?php if ( $portfolio_gallery_get_option['portfolio_gallery_ht_view2_thumbs_position'] == 'before' ) {
                                                                    echo 'selected="selected"';
                                                                } ?>
                                                                        value="before"><?php echo __( 'Before Description', 'portfolio-gallery' ); ?></option>
                                                                <option <?php if ( $portfolio_gallery_get_option['portfolio_gallery_ht_view2_thumbs_position'] == 'after' ) {
                                                                    echo 'selected="selected"';
                                                                } ?>
                                                                        value="after"><?php echo __( 'After Description', 'portfolio-gallery' ); ?></option>
                                                            </select>
                                                        </div>
                                                        <div class="has-background">
                                                            <label
                                                                    for="ht_view2_thumbs_width"><?php echo __( 'Thumbnails Width', 'portfolio-gallery' ); ?></label>
                                                            <input type="text" name="params[portfolio_gallery_ht_view2_thumbs_width]"
                                                                   id="ht_view2_thumbs_width"
                                                                   value="<?php echo $portfolio_gallery_get_option['portfolio_gallery_ht_view2_thumbs_width']; ?>"
                                                                   class="text"/>
                                                            <span>px</span>
                                                        </div>
                                                        <div>
                                                            <label
                                                                    for="ht_view2_thumbs_height"><?php echo __( 'Thumbnails Width', 'portfolio-gallery' ); ?></label>
                                                            <input type="text" name="params[portfolio_gallery_ht_view2_thumbs_height]"
                                                                   id="ht_view2_thumbs_height"
                                                                   value="<?php echo $portfolio_gallery_get_option['portfolio_gallery_ht_view2_thumbs_height']; ?>"
                                                                   class="text"/>
                                                            <span>px</span>
                                                        </div>
                                                    </div>
                                                    <div style="margin-top: 14px;">
                                                        <h3><?php echo __( 'Popup Description', 'portfolio-gallery' ); ?></h3>
                                                        <div class="has-background">
                                                            <label
                                                                    for="ht_view2_show_description"><?php echo __( 'Show Description', 'portfolio-gallery' ); ?></label>
                                                            <input type="hidden" value="off"
                                                                   name="params[portfolio_gallery_ht_view2_show_description]"/>
                                                            <input type="checkbox"
                                                                   id="ht_view2_show_description" <?php if ( $portfolio_gallery_get_option['portfolio_gallery_ht_view2_show_description'] == 'on' ) {
                                                                echo 'checked="checked"';
                                                            } ?> name="params[portfolio_gallery_ht_view2_show_description]" value="on"/>
                                                        </div>
                                                        <div>
                                                            <label
                                                                    for="ht_view2_description_font_size"><?php echo __( 'Description Font Size', 'portfolio-gallery' ); ?></label>
                                                            <input type="text" name="params[portfolio_gallery_ht_view2_description_font_size]"
                                                                   id="ht_view2_description_font_size"
                                                                   value="<?php echo $portfolio_gallery_get_option['portfolio_gallery_ht_view2_description_font_size']; ?>"
                                                                   class="text"/>
                                                            <span>px</span>
                                                        </div>
                                                        <div class="has-background">
                                                            <label
                                                                    for="ht_view2_description_color"><?php echo __( 'Description Font Color', 'portfolio-gallery' ); ?></label>
                                                            <input name="params[portfolio_gallery_ht_view2_description_color]" type="text"
                                                                   class="color" id="ht_view2_description_color"
                                                                   value="#<?php echo $portfolio_gallery_get_option['portfolio_gallery_ht_view2_description_color']; ?>"
                                                                   size="10"/>
                                                        </div>
                                                    </div>
                                                    <div style="margin-top: 28px;">
                                                        <h3><?php echo __( 'Popup Link Button', 'portfolio-gallery' ); ?></h3>
                                                        <div class="has-background">
                                                            <label
                                                                    for="ht_view2_show_popup_linkbutton"><?php echo __( 'Show Link Button', 'portfolio-gallery' ); ?></label>
                                                            <label
                                                                    for="ht_view2_show_popup_linkbutton"><?php echo __( 'Show Link Button', 'portfolio-gallery' ); ?></label>
                                                            <input type="hidden" value="off"
                                                                   name="params[portfolio_gallery_ht_view2_show_popup_linkbutton]"/>
                                                            <input type="checkbox"
                                                                   id="ht_view2_show_popup_linkbutton" <?php if ( $portfolio_gallery_get_option['portfolio_gallery_ht_view2_show_popup_linkbutton'] == 'on' ) {
                                                                echo 'checked="checked"';
                                                            } ?> name="params[portfolio_gallery_ht_view2_show_popup_linkbutton]" value="on"/>
                                                        </div>
                                                        <div>
                                                            <label
                                                                    for="ht_view2_popup_linkbutton_text"><?php echo __( 'Link Button Text', 'portfolio-gallery' ); ?></label>
                                                            <input type="text" name="params[portfolio_gallery_ht_view2_popup_linkbutton_text]"
                                                                   id="ht_view2_popup_linkbutton_text"
                                                                   value="<?php echo esc_attr( $portfolio_gallery_get_option['portfolio_gallery_ht_view2_popup_linkbutton_text'] ); ?>"
                                                                   class="text"/>
                                                        </div>
                                                        <div class="has-background">
                                                            <label
                                                                    for="ht_view2_popup_linkbutton_font_size"><?php echo __( 'Link Button Font Size', 'portfolio-gallery' ); ?></label>
                                                            <input type="text"
                                                                   name="params[portfolio_gallery_ht_view2_popup_linkbutton_font_size]"
                                                                   id="ht_view2_popup_linkbutton_font_size"
                                                                   value="<?php echo $portfolio_gallery_get_option['portfolio_gallery_ht_view2_popup_linkbutton_font_size']; ?>"
                                                                   class="text"/>
                                                            <span>px</span>
                                                        </div>
                                                        <div>
                                                            <label
                                                                    for="ht_view2_popup_linkbutton_color"><?php echo __( 'Link Button Font Color', 'portfolio-gallery' ); ?></label>
                                                            <input name="params[portfolio_gallery_ht_view2_popup_linkbutton_color]" type="text"
                                                                   class="color" id="ht_view2_popup_linkbutton_color"
                                                                   value="#<?php echo $portfolio_gallery_get_option['portfolio_gallery_ht_view2_popup_linkbutton_color']; ?>"
                                                                   size="10"/>
                                                        </div>
                                                        <div class="has-background">
                                                            <label
                                                                    for="ht_view2_popup_linkbutton_font_hover_color"><?php echo __( 'Link Button Font Hover Color', 'portfolio-gallery' ); ?></label>
                                                            <input name="params[portfolio_gallery_ht_view2_popup_linkbutton_font_hover_color]"
                                                                   type="text" class="color" id="ht_view2_popup_linkbutton_font_hover_color"
                                                                   value="#<?php echo $portfolio_gallery_get_option['portfolio_gallery_ht_view2_popup_linkbutton_font_hover_color']; ?>"
                                                                   size="10"/>
                                                        </div>
                                                        <div>
                                                            <label
                                                                    for="ht_view2_popup_linkbutton_background_color"><?php echo __( 'Link Button Background Color', 'portfolio-gallery' ); ?></label>
                                                            <input name="params[portfolio_gallery_ht_view2_popup_linkbutton_background_color]"
                                                                   type="text" class="color" id="ht_view2_popup_linkbutton_background_color"
                                                                   value="#<?php echo $portfolio_gallery_get_option['portfolio_gallery_ht_view2_popup_linkbutton_background_color']; ?>"
                                                                   size="10"/>
                                                        </div>
                                                        <div class="has-background">
                                                            <label
                                                                    for="ht_view2_popup_linkbutton_background_hover_color"><?php echo __( 'Link Button Background Hover Color', 'portfolio-gallery' ); ?></label>
                                                            <input
                                                                    name="params[portfolio_gallery_ht_view2_popup_linkbutton_background_hover_color]"
                                                                    type="text" class="color" id="ht_view2_popup_linkbutton_background_hover_color"
                                                                    value="#<?php echo $portfolio_gallery_get_option['portfolio_gallery_ht_view2_popup_linkbutton_background_hover_color']; ?>"
                                                                    size="10"/>
                                                        </div>
                                                    </div>

                                                    <div style="margin-top: -360px;">
                                                        <h3><?php echo __( 'Popup Styles', 'portfolio-gallery' ); ?></h3>
                                                        <div class="has-background">
                                                            <label
                                                                    for="ht_view2_popup_full_width"><?php echo __( 'Popup Image Full Width', 'portfolio-gallery' ); ?></label>
                                                            <input type="hidden" value="off"
                                                                   name="params[portfolio_gallery_ht_view2_popup_full_width]"/>
                                                            <input type="checkbox"
                                                                   id="ht_view2_popup_full_width" <?php if ( $portfolio_gallery_get_option['portfolio_gallery_ht_view2_popup_full_width'] == 'on' ) {
                                                                echo 'checked="checked"';
                                                            } ?> name="params[portfolio_gallery_ht_view2_popup_full_width]" value="on"/>
                                                        </div>
                                                        <div class="">
                                                            <label
                                                                    for="ht_view2_popup_background_color"><?php echo __( 'Popup Background Color', 'portfolio-gallery' ); ?></label>
                                                            <input name="params[portfolio_gallery_ht_view2_popup_background_color]" type="text"
                                                                   class="color" id="ht_view2_popup_background_color"
                                                                   value="#<?php echo $portfolio_gallery_get_option['portfolio_gallery_ht_view2_popup_background_color']; ?>"
                                                                   size="10"/>
                                                        </div>
                                                        <div class="has-background">
                                                            <label
                                                                    for="ht_view2_popup_overlay_color"><?php echo __( 'Popup Overlay Color', 'portfolio-gallery' ); ?></label>
                                                            <input name="params[portfolio_gallery_ht_view2_popup_overlay_color]" type="text"
                                                                   class="color" id="ht_view2_popup_overlay_color"
                                                                   value="#<?php echo $portfolio_gallery_get_option['portfolio_gallery_ht_view2_popup_overlay_color']; ?>"
                                                                   size="10"/>
                                                        </div>
                                                        <div class="">
                                                            <label
                                                                    for="ht_view2_popup_overlay_transparency_color"><?php echo __( 'Popup Overlay Transparency', 'portfolio-gallery' ); ?></label>
                                                            <div class="slider-container">
                                                                <input
                                                                        name="params[portfolio_gallery_ht_view2_popup_overlay_transparency_color]"
                                                                        id="ht_view2_popup_overlay_transparency_color" data-slider-highlight="true"
                                                                        data-slider-values="0,10,20,30,40,50,60,70,80,90,100" type="text"
                                                                        data-slider="true"
                                                                        value="<?php echo $portfolio_gallery_get_option['portfolio_gallery_ht_view2_popup_overlay_transparency_color']; ?>"/>
                                                                <span><?php echo $portfolio_gallery_get_option['portfolio_gallery_ht_view2_popup_overlay_transparency_color']; ?>
                                                                    %</span>
                                                            </div>
                                                        </div>
                                                        <div class="has-background">
                                                            <label
                                                                    for="ht_view2_popup_closebutton_style"><?php echo __( 'Popup Close Button Style', 'portfolio-gallery' ); ?></label>
                                                            <select id="ht_view2_popup_closebutton_style"
                                                                    name="params[portfolio_gallery_ht_view2_popup_closebutton_style]">
                                                                <option <?php if ( $portfolio_gallery_get_option['portfolio_gallery_ht_view2_popup_closebutton_style'] == 'light' ) {
                                                                    echo 'selected="selected"';
                                                                } ?> value="light"><?php echo __( 'Light', 'portfolio-gallery' ); ?></option>
                                                                <option <?php if ( $portfolio_gallery_get_option['portfolio_gallery_ht_view2_popup_closebutton_style'] == 'dark' ) {
                                                                    echo 'selected="selected"';
                                                                } ?> value="dark"><?php echo __( 'Dark', 'portfolio-gallery' ); ?></option>
                                                            </select>
                                                        </div>
                                                        <div class="">
                                                            <label
                                                                    for="ht_view2_show_separator_lines"><?php echo __( 'Show Separator Lines', 'portfolio-gallery' ); ?></label>
                                                            <input type="hidden" value="off"
                                                                   name="params[portfolio_gallery_ht_view2_show_separator_lines]"/>
                                                            <input type="checkbox"
                                                                   id="ht_view2_show_separator_lines" <?php if ( $portfolio_gallery_get_option['portfolio_gallery_ht_view2_show_separator_lines'] == 'on' ) {
                                                                echo 'checked="checked"';
                                                            } ?> name="params[portfolio_gallery_ht_view2_show_separator_lines]" value="on"/>
                                                        </div>

                                                    </div>

                                                </li>

                                                <li id="portfolio-view-options-3">
                                                    <div>
                                                        <h3><?php echo __( 'Elements Styles', 'portfolio-gallery' ); ?></h3>
                                                        <div class="has-background">
                                                            <label
                                                                    for="ht_view3_mainimage_width"><?php echo __( 'Main Image Width', 'portfolio-gallery' ); ?></label>
                                                            <input type="text" name="params[portfolio_gallery_ht_view3_mainimage_width]"
                                                                   id="ht_view3_mainimage_width"
                                                                   value="<?php echo $portfolio_gallery_get_option['portfolio_gallery_ht_view3_mainimage_width']; ?>"
                                                                   class="text"/>
                                                            <span>px</span>
                                                        </div>
                                                        <div>
                                                            <label
                                                                    for="ht_view3_element_background_color"><?php echo __( 'Element Background Color', 'portfolio-gallery' ); ?></label>
                                                            <input name="params[portfolio_gallery_ht_view3_element_background_color]"
                                                                   type="text" class="color" id="ht_view3_element_background_color"
                                                                   value="#<?php echo $portfolio_gallery_get_option['portfolio_gallery_ht_view3_element_background_color']; ?>"
                                                                   size="10"/>
                                                        </div>
                                                        <div class="has-background">
                                                            <label
                                                                    for="ht_view3_element_border_width"><?php echo __( 'Element Border Width', 'portfolio-gallery' ); ?></label>
                                                            <input type="text" name="params[portfolio_gallery_ht_view3_element_border_width]"
                                                                   id="ht_view3_element_border_width"
                                                                   value="<?php echo $portfolio_gallery_get_option['portfolio_gallery_ht_view3_element_border_width']; ?>"
                                                                   class="text"/>
                                                            <span>px</span>
                                                        </div>
                                                        <div>
                                                            <label
                                                                    for="ht_view3_element_border_color"><?php echo __( 'Element Border Color', 'portfolio-gallery' ); ?></label>
                                                            <input name="params[portfolio_gallery_ht_view3_element_border_color]" type="text"
                                                                   class="color" id="ht_view3_element_border_color"
                                                                   value="#<?php echo $portfolio_gallery_get_option['portfolio_gallery_ht_view3_element_border_color']; ?>"
                                                                   size="10"/>
                                                        </div>
                                                        <div class="has-background">
                                                            <label
                                                                    for="ht_view3_show_separator_lines"><?php echo __( 'Show Separator Lines', 'portfolio-gallery' ); ?></label>
                                                            <input type="hidden" value="off"
                                                                   name="params[portfolio_gallery_ht_view3_show_separator_lines]"/>
                                                            <input type="checkbox"
                                                                   id="ht_view3_show_separator_lines" <?php if ( $portfolio_gallery_get_option['portfolio_gallery_ht_view3_show_separator_lines'] == 'on' ) {
                                                                echo 'checked="checked"';
                                                            } ?> name="params[portfolio_gallery_ht_view3_show_separator_lines]" value="on"/>
                                                        </div>
                                                    </div>
                                                    <div>
                                                        <h3><?php echo __( 'Title', 'portfolio-gallery' ); ?></h3>
                                                        <div class="has-background">
                                                            <label
                                                                    for="ht_view3_title_font_size"><?php echo __( 'Title Font Size', 'portfolio-gallery' ); ?></label>
                                                            <input type="text" name="params[portfolio_gallery_ht_view3_title_font_size]"
                                                                   id="ht_view3_title_font_size"
                                                                   value="<?php echo $portfolio_gallery_get_option['portfolio_gallery_ht_view3_title_font_size']; ?>"
                                                                   class="text"/>
                                                            <span>px</span>
                                                        </div>
                                                        <div>
                                                            <label
                                                                    for="ht_view3_title_font_color"><?php echo __( 'Title Font Color', 'portfolio-gallery' ); ?></label>
                                                            <input name="params[portfolio_gallery_ht_view3_title_font_color]" type="text"
                                                                   class="color" id="ht_view3_title_font_color"
                                                                   value="#<?php echo $portfolio_gallery_get_option['portfolio_gallery_ht_view3_title_font_color']; ?>"
                                                                   size="10"/>
                                                        </div>
                                                    </div>
                                                    <div>
                                                        <h3><?php echo __( 'Thumbnails', 'portfolio-gallery' ); ?></h3>
                                                        <div class="has-background">
                                                            <label
                                                                    for="ht_view3_show_thumbs"><?php echo __( 'Show Thumbnails', 'portfolio-gallery' ); ?></label>
                                                            <input type="hidden" value="off"
                                                                   name="params[portfolio_gallery_ht_view3_show_thumbs]"/>
                                                            <input type="checkbox"
                                                                   id="ht_view3_show_thumbs" <?php if ( $portfolio_gallery_get_option['portfolio_gallery_ht_view3_show_thumbs'] == 'on' ) {
                                                                echo 'checked="checked"';
                                                            } ?> name="params[portfolio_gallery_ht_view3_show_thumbs]" value="on"/>
                                                        </div>
                                                        <div>
                                                            <label
                                                                    for="ht_view3_thumbs_width"><?php echo __( 'Thumbnails Width', 'portfolio-gallery' ); ?></label>
                                                            <input type="text" name="params[portfolio_gallery_ht_view3_thumbs_width]"
                                                                   id="ht_view3_thumbs_width"
                                                                   value="<?php echo $portfolio_gallery_get_option['portfolio_gallery_ht_view3_thumbs_width']; ?>"
                                                                   class="text"/>
                                                            <span>px</span>
                                                        </div>
                                                        <div class="has-background">
                                                            <label
                                                                    for="ht_view3_thumbs_height"><?php echo __( 'Thumbnails Width', 'portfolio-gallery' ); ?></label>
                                                            <input type="text" name="params[portfolio_gallery_ht_view3_thumbs_height]"
                                                                   id="ht_view3_thumbs_height"
                                                                   value="<?php echo $portfolio_gallery_get_option['portfolio_gallery_ht_view3_thumbs_height']; ?>"
                                                                   class="text"/>
                                                            <span>px</span>
                                                        </div>
                                                    </div>

                                                    <div style="margin-top:-80px;">
                                                        <h3><?php echo __( 'Sorting styles', 'portfolio-gallery' ); ?></h3>
                                                        <div class="" style="display: none;">
                                                            <label for="ht_view3_show_sorting"
                                                                   style="display: none;"><?php echo __( 'Show Sorting', 'portfolio-gallery' ); ?></label>
                                                            <input type="hidden" value="off"
                                                                   name="params[portfolio_gallery_ht_view3_show_sorting]"/>
                                                            <input type="checkbox"
                                                                   id="ht_view3_show_sorting" <?php if ( $portfolio_gallery_get_option['portfolio_gallery_ht_view3_show_sorting'] == 'on' ) {
                                                                echo 'checked="checked"';
                                                            } ?> name="params[portfolio_gallery_ht_view3_show_sorting]" value="on"/>
                                                        </div>
                                                        <div class="has-background">
                                                            <label
                                                                    for="ht_view3_sortbutton_font_size"><?php echo __( 'Sort Button Font Size', 'portfolio-gallery' ); ?></label>
                                                            <input type="text" name="params[portfolio_gallery_ht_view3_sortbutton_font_size]"
                                                                   id="ht_view3_sortbutton_font_size"
                                                                   value="<?php echo $portfolio_gallery_get_option['portfolio_gallery_ht_view3_sortbutton_font_size']; ?>"
                                                                   class="text"/>
                                                            <span>px</span>
                                                        </div>
                                                        <div class="">
                                                            <label
                                                                    for="ht_view3_sortbutton_font_color"><?php echo __( 'Sort Button Font Color', 'portfolio-gallery' ); ?></label>
                                                            <input name="params[portfolio_gallery_ht_view3_sortbutton_font_color]" type="text"
                                                                   class="color" id="ht_view3_sortbutton_font_color"
                                                                   value="#<?php echo $portfolio_gallery_get_option['portfolio_gallery_ht_view3_sortbutton_font_color']; ?>"
                                                                   size="10"/>
                                                        </div>
                                                        <div class="has-background">
                                                            <label
                                                                    for="ht_view3_sortbutton_hover_font_color"><?php echo __( 'Sort Button Font Hover Color', 'portfolio-gallery' ); ?></label>
                                                            <input name="params[portfolio_gallery_ht_view3_sortbutton_hover_font_color]"
                                                                   type="text" class="color" id="ht_view3_sortbutton_hover_font_color"
                                                                   value="#<?php echo $portfolio_gallery_get_option['portfolio_gallery_ht_view3_sortbutton_hover_font_color']; ?>"
                                                                   size="10"/>
                                                        </div>
                                                        <div class="">
                                                            <label
                                                                    for="ht_view3_sortbutton_background_color"><?php echo __( 'Sort Button Background Color', 'portfolio-gallery' ); ?></label>
                                                            <input name="params[portfolio_gallery_ht_view3_sortbutton_background_color]"
                                                                   type="text" class="color" id="ht_view3_sortbutton_background_color"
                                                                   value="#<?php echo $portfolio_gallery_get_option['portfolio_gallery_ht_view3_sortbutton_background_color']; ?>"
                                                                   size="10"/>
                                                        </div>
                                                        <div class="has-background">
                                                            <label
                                                                    for="ht_view3_sortbutton_hover_background_color"><?php echo __( 'Sort Button Background Hover Color', 'portfolio-gallery' ); ?></label>
                                                            <input name="params[portfolio_gallery_ht_view3_sortbutton_hover_background_color]"
                                                                   type="text" class="color" id="ht_view3_sortbutton_hover_background_color"
                                                                   value="#<?php echo $portfolio_gallery_get_option['portfolio_gallery_ht_view3_sortbutton_hover_background_color']; ?>"
                                                                   size="10"/>
                                                        </div>
                                                        <div class="" style="display: none;">
                                                            <label
                                                                    for="ht_view3_sortbutton_border_width"><?php echo __( 'Sort Button Border Width', 'portfolio-gallery' ); ?></label>
                                                            <input type="text" name="params[portfolio_gallery_ht_view3_sortbutton_border_width]"
                                                                   id="ht_view3_sortbutton_border_width"
                                                                   value="<?php echo $portfolio_gallery_get_option['portfolio_gallery_ht_view3_sortbutton_border_width']; ?>"
                                                                   class="text"/>
                                                            <span>px</span>
                                                        </div>
                                                        <div style="display: none;">
                                                            <input name="params[portfolio_gallery_ht_view3_sortbutton_border_color]" type="text"
                                                                   class="color" id="ht_view3_sortbutton_border_color"
                                                                   value="#<?php echo $portfolio_gallery_get_option['portfolio_gallery_ht_view3_sortbutton_border_color']; ?>"
                                                                   size="10"/>
                                                            <label
                                                                    for="ht_view3_sortbutton_border_color"><?php echo __( 'Sort Button Border Color', 'portfolio-gallery' ); ?></label>
                                                        </div>
                                                        <div class="">
                                                            <label
                                                                    for="ht_view3_sortbutton_border_radius"><?php echo __( 'Sort Button Border Radius', 'portfolio-gallery' ); ?></label>
                                                            <input type="text"
                                                                   name="params[portfolio_gallery_ht_view3_sortbutton_border_radius]"
                                                                   id="ht_view3_sortbutton_border_radius"
                                                                   value="<?php echo $portfolio_gallery_get_option['portfolio_gallery_ht_view3_sortbutton_border_radius']; ?>"
                                                                   class="text"/>
                                                            <span>px</span>
                                                        </div>
                                                        <div class="has-background">
                                                            <label
                                                                    for="ht_view3_sortbutton_border_padding"><?php echo __( 'Sort Button Padding', 'portfolio-gallery' ); ?></label>
                                                            <input type="text"
                                                                   name="params[portfolio_gallery_ht_view3_sortbutton_border_padding]"
                                                                   id="ht_view3_sortbutton_border_padding"
                                                                   value="<?php echo $portfolio_gallery_get_option['portfolio_gallery_ht_view3_sortbutton_border_padding']; ?>"
                                                                   class="text"/>
                                                            <span>px</span>
                                                        </div>
                                                        <div style="display: none;">
                                                            <label
                                                                    for="ht_view3_sortbutton_margin"><?php echo __( 'Sort Button Margins', 'portfolio-gallery' ); ?></label>
                                                            <input type="text" name="params[portfolio_gallery_ht_view3_sortbutton_margin]"
                                                                   id="ht_view3_sortbutton_margin"
                                                                   value="<?php echo $portfolio_gallery_get_option['portfolio_gallery_ht_view3_sortbutton_margin']; ?>"
                                                                   class="text"/>
                                                            <span>px</span>
                                                        </div>
                                                        <div class="">
                                                            <label
                                                                    for="ht_view3_sorting_float"><?php echo __( 'Sort block Position', 'portfolio-gallery' ); ?></label>
                                                            <select id="ht_view3_sorting_float"
                                                                    name="params[portfolio_gallery_ht_view3_sorting_float]">
                                                                <option <?php if ( $portfolio_gallery_get_option['portfolio_gallery_ht_view3_sorting_float'] == 'left' ) {
                                                                    echo 'selected="selected"';
                                                                } ?> value="left"><?php echo __( 'Left', 'portfolio-gallery' ); ?></option>
                                                                <option <?php if ( $portfolio_gallery_get_option['portfolio_gallery_ht_view3_sorting_float'] == 'right' ) {
                                                                    echo 'selected="selected"';
                                                                } ?> value="right"><?php echo __( 'Right', 'portfolio-gallery' ); ?></option>
                                                                <option <?php if ( $portfolio_gallery_get_option['portfolio_gallery_ht_view3_sorting_float'] == 'top' ) {
                                                                    echo 'selected="selected"';
                                                                } ?> value="top"><?php echo __( 'Top', 'portfolio-gallery' ); ?></option>
                                                            </select>
                                                        </div>
                                                        <div class="has-background">
                                                            <label
                                                                    for="ht_view3_sorting_name_by_default"><?php echo __( 'Sort By Default Bottom Name', 'portfolio-gallery' ); ?></label>
                                                            <input name="params[portfolio_gallery_ht_view3_sorting_name_by_default]" type="text"
                                                                   id="ht_view3_sorting_name_by_default"
                                                                   value="<?php echo esc_attr( $portfolio_gallery_get_option['portfolio_gallery_ht_view3_sorting_name_by_default'] ); ?>"
                                                                   size="10" class="text"/>
                                                        </div>
                                                        <div class="">
                                                            <label
                                                                    for="ht_view3_sorting_name_by_id"><?php echo __( 'Sorting By Date Button Name', 'portfolio-gallery' ); ?></label>
                                                            <input name="params[portfolio_gallery_ht_view3_sorting_name_by_id]" type="text"
                                                                   id="ht_view3_sorting_name_by_id"
                                                                   value="<?php echo esc_attr( $portfolio_gallery_get_option['portfolio_gallery_ht_view3_sorting_name_by_id'] ); ?>"
                                                                   size="10"/>
                                                        </div>
                                                        <div class="has-background">
                                                            <label
                                                                    for="ht_view3_sorting_name_by_name"><?php echo __( 'Sorting By Title Button Name', 'portfolio-gallery' ); ?></label>
                                                            <input name="params[portfolio_gallery_ht_view3_sorting_name_by_name]" type="text"
                                                                   id="ht_view3_sorting_name_by_name"
                                                                   value="<?php echo esc_attr( $portfolio_gallery_get_option['portfolio_gallery_ht_view3_sorting_name_by_name'] ); ?>"
                                                                   size="10"/>
                                                        </div>
                                                        <div class="">
                                                            <label
                                                                    for="ht_view3_sorting_name_by_random"><?php echo __( 'Random Sorting Button Name', 'portfolio-gallery' ); ?></label>
                                                            <input name="params[portfolio_gallery_ht_view3_sorting_name_by_random]" type="text"
                                                                   id="ht_view3_sorting_name_by_random"
                                                                   value="<?php echo esc_attr( $portfolio_gallery_get_option['portfolio_gallery_ht_view3_sorting_name_by_random'] ); ?>"
                                                                   size="10"/>
                                                        </div>
                                                        <div class="has-background">
                                                            <label
                                                                    for="ht_view3_sorting_name_by_asc"><?php echo __( 'Ascending Sorting Button Name', 'portfolio-gallery' ); ?></label>
                                                            <input name="params[portfolio_gallery_ht_view3_sorting_name_by_asc]" type="text"
                                                                   id="ht_view3_sorting_name_by_asc"
                                                                   value="<?php echo esc_attr( $portfolio_gallery_get_option['portfolio_gallery_ht_view3_sorting_name_by_asc'] ); ?>"
                                                                   size="10"/>
                                                        </div>
                                                        <div class="">
                                                            <label
                                                                    for="ht_view3_sorting_name_by_desc"><?php echo __( 'Descending Sorting Button Name', 'portfolio-gallery' ); ?></label>
                                                            <input name="params[portfolio_gallery_ht_view3_sorting_name_by_desc]" type="text"
                                                                   id="ht_view3_sorting_name_by_desc"
                                                                   value="<?php echo esc_attr( $portfolio_gallery_get_option['portfolio_gallery_ht_view3_sorting_name_by_desc'] ); ?>"
                                                                   size="10"/>
                                                        </div>
                                                    </div>

                                                    <div style="margin-top: 14px;">
                                                        <h3><?php echo __( 'Category styles', 'portfolio-gallery' ); ?></h3>

                                                        <div style="display: none;">
                                                            <label for="ht_view3_show_filtering"
                                                                   style="display: none;"><?php echo __( 'Show Filtering', 'portfolio-gallery' ); ?></label>
                                                            <input type="hidden" value="off"
                                                                   name="params[portfolio_gallery_ht_view3_show_filtering]"/>
                                                            <input type="checkbox"
                                                                   id="ht_view3_show_filtering" <?php if ( $portfolio_gallery_get_option['portfolio_gallery_ht_view3_show_filtering'] == 'on' ) {
                                                                echo 'checked="checked"';
                                                            } ?> name="params[portfolio_gallery_ht_view3_show_filtering]" value="on"/>
                                                        </div>
                                                        <div class="">
                                                            <label
                                                                    for="ht_view3_cat_all"><?php echo __( 'Show All Category Button Name', 'portfolio-gallery' ); ?></label>
                                                            <input type="text" name="params[portfolio_gallery_ht_view3_cat_all]"
                                                                   id="ht_view3_cat_all"
                                                                   value="<?php echo esc_attr( $portfolio_gallery_get_option['portfolio_gallery_ht_view3_cat_all'] ); ?>"
                                                                   class="text"/>
                                                        </div>
                                                        <div class="has-background">
                                                            <label
                                                                    for="ht_view3_filterbutton_font_size"><?php echo __( 'Filter Button Font Size', 'portfolio-gallery' ); ?></label>
                                                            <input type="text" name="params[portfolio_gallery_ht_view3_filterbutton_font_size]"
                                                                   id="ht_view3_filterbutton_font_size"
                                                                   value="<?php echo $portfolio_gallery_get_option['portfolio_gallery_ht_view3_filterbutton_font_size']; ?>"
                                                                   class="text"/>
                                                            <span>px</span>
                                                        </div>
                                                        <div>
                                                            <label
                                                                    for="ht_view3_filterbutton_font_color"><?php echo __( 'Filter Button Font Color', 'portfolio-gallery' ); ?></label>
                                                            <input name="params[portfolio_gallery_ht_view3_filterbutton_font_color]" type="text"
                                                                   class="color" id="ht_view3_filterbutton_font_color"
                                                                   value="#<?php echo $portfolio_gallery_get_option['portfolio_gallery_ht_view3_filterbutton_font_color']; ?>"
                                                                   size="10"/>
                                                        </div>
                                                        <div class="has-background">
                                                            <label
                                                                    for="ht_view3_filterbutton_hover_font_color"><?php echo __( 'Filter Button Font Hover Color', 'portfolio-gallery' ); ?></label>
                                                            <input name="params[portfolio_gallery_ht_view3_filterbutton_hover_font_color]"
                                                                   type="text" class="color" id="ht_view3_filterbutton_hover_font_color"
                                                                   value="#<?php echo $portfolio_gallery_get_option['portfolio_gallery_ht_view3_filterbutton_hover_font_color']; ?>"
                                                                   size="10"/>
                                                        </div>
                                                        <div class="">
                                                            <label
                                                                    for="ht_view3_filterbutton_background_color"><?php echo __( 'Filter Button Background Color', 'portfolio-gallery' ); ?></label>
                                                            <input name="params[portfolio_gallery_ht_view3_filterbutton_background_color]"
                                                                   type="text" class="color" id="ht_view3_filterbutton_background_color"
                                                                   value="#<?php echo $portfolio_gallery_get_option['portfolio_gallery_ht_view3_filterbutton_background_color']; ?>"
                                                                   size="10"/>
                                                        </div>
                                                        <div class="has-background">
                                                            <label
                                                                    for="ht_view3_filterbutton_hover_background_color"><?php echo __( 'Filter Button Background Hover Color', 'portfolio-gallery' ); ?></label>
                                                            <input name="params[portfolio_gallery_ht_view3_filterbutton_hover_background_color]"
                                                                   type="text" class="color" id="ht_view3_filterbutton_hover_background_color"
                                                                   value="#<?php echo $portfolio_gallery_get_option['portfolio_gallery_ht_view3_filterbutton_hover_background_color']; ?>"
                                                                   size="10"/>
                                                        </div>
                                                        <div class="has-background" style="display: none;">
                                                            <label
                                                                    for="ht_view3_filterbutton_border_width"><?php echo __( 'Filter Button Border Width', 'portfolio-gallery' ); ?></label>
                                                            <input type="text"
                                                                   name="params[portfolio_gallery_ht_view3_filterbutton_border_width]"
                                                                   id="ht_view3_filterbutton_border_width"
                                                                   value="<?php echo $portfolio_gallery_get_option['portfolio_gallery_ht_view3_filterbutton_border_width']; ?>"
                                                                   class="text"/>
                                                            <span>px</span>
                                                        </div>
                                                        <div style="display: none;">
                                                            <input name="params[portfolio_gallery_ht_view3_filterbutton_border_color]"
                                                                   type="text" class="color" id="ht_view3_filterbutton_border_color"
                                                                   value="#<?php echo $portfolio_gallery_get_option['portfolio_gallery_ht_view3_filterbutton_border_color']; ?>"
                                                                   size="10"/>
                                                            <label
                                                                    for="ht_view3_filterbutton_border_color"><?php echo __( 'Filter Button Border Color', 'portfolio-gallery' ); ?></label>
                                                        </div>
                                                        <div class="">
                                                            <label
                                                                    for="ht_view3_filterbutton_border_radius"><?php echo __( 'Filter Button Border Radius', 'portfolio-gallery' ); ?></label>
                                                            <input type="text"
                                                                   name="params[portfolio_gallery_ht_view3_filterbutton_border_radius]"
                                                                   id="ht_view3_filterbutton_border_radius"
                                                                   value="<?php echo $portfolio_gallery_get_option['portfolio_gallery_ht_view3_filterbutton_border_radius']; ?>"
                                                                   class="text"/>
                                                            <span>px</span>
                                                        </div>
                                                        <div class="has-background">
                                                            <label
                                                                    for="ht_view3_filterbutton_border_padding"><?php echo __( 'Filter Button Padding', 'portfolio-gallery' ); ?></label>
                                                            <input type="text"
                                                                   name="params[portfolio_gallery_ht_view3_filterbutton_border_padding]"
                                                                   id="ht_view3_filterbutton_border_padding"
                                                                   value="<?php echo $portfolio_gallery_get_option['portfolio_gallery_ht_view3_filterbutton_border_padding']; ?>"
                                                                   class="text"/>
                                                            <span>px</span>
                                                        </div>
                                                        <div style="display: none;">
                                                            <label
                                                                    for="ht_view3_filterbutton_margin"><?php echo __( 'Filter Button Margins', 'portfolio-gallery' ); ?></label>
                                                            <input type="text" name="params[portfolio_gallery_ht_view3_filterbutton_margin]"
                                                                   id="ht_view3_filterbutton_margin"
                                                                   value="<?php echo $portfolio_gallery_get_option['portfolio_gallery_ht_view3_filterbutton_margin']; ?>"
                                                                   class="text"/>
                                                            <span>px</span>
                                                        </div>
                                                        <div class="">
                                                            <label
                                                                    for="ht_view3_filtering_float"><?php echo __( 'Filter block Position', 'portfolio-gallery' ); ?></label>
                                                            <select id="ht_view3_filtering_float"
                                                                    name="params[portfolio_gallery_ht_view3_filtering_float]">
                                                                <option <?php if ( $portfolio_gallery_get_option['portfolio_gallery_ht_view3_filtering_float'] == 'left' ) {
                                                                    echo 'selected="selected"';
                                                                } ?> value="left"><?php echo __( 'Left', 'portfolio-gallery' ); ?></option>
                                                                <option <?php if ( $portfolio_gallery_get_option['portfolio_gallery_ht_view3_filtering_float'] == 'right' ) {
                                                                    echo 'selected="selected"';
                                                                } ?> value="right"><?php echo __( 'Right', 'portfolio-gallery' ); ?></option>
                                                                <option <?php if ( $portfolio_gallery_get_option['portfolio_gallery_ht_view3_filtering_float'] == 'top' ) {
                                                                    echo 'selected="selected"';
                                                                } ?> value="top"><?php echo __( 'Top', 'portfolio-gallery' ); ?></option>
                                                            </select>
                                                        </div>

                                                    </div>

                                                    <div>
                                                        <h3><?php echo __( 'Description', 'portfolio-gallery' ); ?></h3>
                                                        <div class="has-background">
                                                            <label
                                                                    for="ht_view3_show_description"><?php echo __( 'Show Description', 'portfolio-gallery' ); ?></label>
                                                            <input type="hidden" value="off"
                                                                   name="params[portfolio_gallery_ht_view3_show_description]"/>
                                                            <input type="checkbox"
                                                                   id="ht_view3_show_description" <?php if ( $portfolio_gallery_get_option['portfolio_gallery_ht_view3_show_description'] == 'on' ) {
                                                                echo 'checked="checked"';
                                                            } ?> name="params[portfolio_gallery_ht_view3_show_description]" value="on"/>
                                                        </div>
                                                        <div>
                                                            <label
                                                                    for="ht_view3_description_font_size"><?php echo __( 'Description Font Size', 'portfolio-gallery' ); ?></label>
                                                            <input type="text" name="params[portfolio_gallery_ht_view3_description_font_size]"
                                                                   id="ht_view3_description_font_size"
                                                                   value="<?php echo $portfolio_gallery_get_option['portfolio_gallery_ht_view3_description_font_size']; ?>"
                                                                   class="text"/>
                                                            <span>px</span>
                                                        </div>
                                                        <div class="has-background">
                                                            <label
                                                                    for="ht_view3_description_color"><?php echo __( 'Description Font Color', 'portfolio-gallery' ); ?></label>
                                                            <input name="params[portfolio_gallery_ht_view3_description_color]" type="text"
                                                                   class="color" id="ht_view3_description_color"
                                                                   value="#<?php echo $portfolio_gallery_get_option['portfolio_gallery_ht_view3_description_color']; ?>"
                                                                   size="10"/>
                                                        </div>
                                                    </div>
                                                    <div style="margin-top: -50px;">
                                                        <h3><?php echo __( 'Link Button', 'portfolio-gallery' ); ?></h3>
                                                        <div class="has-background">
                                                            <label
                                                                    for="ht_view3_show_linkbutton"><?php echo __( 'Show Link Button', 'portfolio-gallery' ); ?></label>
                                                            <input type="hidden" value="off"
                                                                   name="params[portfolio_gallery_ht_view3_show_linkbutton]"/>
                                                            <input type="checkbox"
                                                                   id="ht_view3_show_linkbutton" <?php if ( $portfolio_gallery_get_option['portfolio_gallery_ht_view3_show_linkbutton'] == 'on' ) {
                                                                echo 'checked="checked"';
                                                            } ?> name="params[portfolio_gallery_ht_view3_show_linkbutton]" value="on"/>
                                                        </div>
                                                        <div>
                                                            <label
                                                                    for="ht_view3_linkbutton_text"><?php echo __( 'Link Button Text', 'portfolio-gallery' ); ?></label>
                                                            <input type="text" name="params[portfolio_gallery_ht_view3_linkbutton_text]"
                                                                   id="ht_view3_linkbutton_text"
                                                                   value="<?php echo esc_attr( $portfolio_gallery_get_option['portfolio_gallery_ht_view3_linkbutton_text'] ); ?>"
                                                                   class="text"/>
                                                        </div>
                                                        <div class="has-background">
                                                            <label
                                                                    for="ht_view3_linkbutton_font_size"><?php echo __( 'Link Button Font Size', 'portfolio-gallery' ); ?></label>
                                                            <input type="text" name="params[portfolio_gallery_ht_view3_linkbutton_font_size]"
                                                                   id="ht_view3_linkbutton_font_size"
                                                                   value="<?php echo $portfolio_gallery_get_option['portfolio_gallery_ht_view3_linkbutton_font_size']; ?>"
                                                                   class="text"/>
                                                            <span>px</span>
                                                        </div>
                                                        <div>
                                                            <label
                                                                    for="ht_view3_linkbutton_color"><?php echo __( 'Link Button Font Color', 'portfolio-gallery' ); ?></label>
                                                            <input name="params[portfolio_gallery_ht_view3_linkbutton_color]" type="text"
                                                                   class="color" id="ht_view3_linkbutton_color"
                                                                   value="#<?php echo $portfolio_gallery_get_option['portfolio_gallery_ht_view3_linkbutton_color']; ?>"
                                                                   size="10"/>
                                                        </div>
                                                        <div class="has-background">
                                                            <label
                                                                    for="ht_view3_linkbutton_font_hover_color"><?php echo __( 'Link Button Font Hover Color', 'portfolio-gallery' ); ?></label>
                                                            <input name="params[portfolio_gallery_ht_view3_linkbutton_font_hover_color]"
                                                                   type="text" class="color" id="ht_view3_linkbutton_font_hover_color"
                                                                   value="#<?php echo $portfolio_gallery_get_option['portfolio_gallery_ht_view3_linkbutton_font_hover_color']; ?>"
                                                                   size="10"/>
                                                        </div>
                                                        <div>
                                                            <label
                                                                    for="ht_view3_linkbutton_background_color"><?php echo __( 'Link Button Background Color', 'portfolio-gallery' ); ?></label>
                                                            <input name="params[portfolio_gallery_ht_view3_linkbutton_background_color]"
                                                                   type="text" class="color" id="ht_view3_linkbutton_background_color"
                                                                   value="#<?php echo $portfolio_gallery_get_option['portfolio_gallery_ht_view3_linkbutton_background_color']; ?>"
                                                                   size="10"/>
                                                        </div>
                                                        <div class="has-background">
                                                            <label
                                                                    for="ht_view3_linkbutton_background_hover_color"><?php echo __( 'Link Button Background Hover Color', 'portfolio-gallery' ); ?></label>
                                                            <input name="params[portfolio_gallery_ht_view3_linkbutton_background_hover_color]"
                                                                   type="text" class="color" id="ht_view3_linkbutton_background_hover_color"
                                                                   value="#<?php echo $portfolio_gallery_get_option['portfolio_gallery_ht_view3_linkbutton_background_hover_color']; ?>"
                                                                   size="10"/>
                                                        </div>
                                                    </div>
                                                </li>

                                                <li id="portfolio-view-options-4">
                                                    <div>
                                                        <h3><?php echo __( 'First Shown Block', 'portfolio-gallery' ); ?></h3>
                                                        <div class="has-background">
                                                            <label
                                                                    for="ht_view4_block_width"><?php echo __( 'Block Width', 'portfolio-gallery' ); ?></label>
                                                            <input type="text" name="params[portfolio_gallery_ht_view4_block_width]"
                                                                   id="ht_view4_block_width"
                                                                   value="<?php echo $portfolio_gallery_get_option['portfolio_gallery_ht_view4_block_width']; ?>"
                                                                   class="text"/>
                                                            <span>px</span>
                                                        </div>
                                                        <div>
                                                            <label
                                                                    for="ht_view4_element_background_color"><?php echo __( 'Block Background Color', 'portfolio-gallery' ); ?></label>
                                                            <input name="params[portfolio_gallery_ht_view4_element_background_color]"
                                                                   type="text" class="color" id="ht_view4_element_background_color"
                                                                   value="#<?php echo $portfolio_gallery_get_option['portfolio_gallery_ht_view4_element_background_color']; ?>"
                                                                   size="10"/>
                                                        </div>
                                                        <div class="has-background">
                                                            <label
                                                                    for="ht_view4_element_border_width"><?php echo __( 'Block Border Width', 'portfolio-gallery' ); ?></label>
                                                            <input type="text" name="params[portfolio_gallery_ht_view4_element_border_width]"
                                                                   id="ht_view4_element_border_width"
                                                                   value="<?php echo $portfolio_gallery_get_option['portfolio_gallery_ht_view4_element_border_width']; ?>"
                                                                   class="text"/>
                                                            <span>px</span>
                                                        </div>
                                                        <div>
                                                            <label
                                                                    for="ht_view4_element_border_color"><?php echo __( 'Block Border Color', 'portfolio-gallery' ); ?></label>
                                                            <input name="params[portfolio_gallery_ht_view4_element_border_color]" type="text"
                                                                   class="color" id="ht_view4_element_border_color"
                                                                   value="#<?php echo $portfolio_gallery_get_option['portfolio_gallery_ht_view4_element_border_color']; ?>"
                                                                   size="10"/>
                                                        </div>
                                                    </div>
                                                    <div>
                                                        <h3><?php echo __( 'Title', 'portfolio-gallery' ); ?></h3>
                                                        <div class="has-background">
                                                            <label
                                                                    for="ht_view4_title_font_size"><?php echo __( 'Title Font Size', 'portfolio-gallery' ); ?></label>
                                                            <input type="text" name="params[portfolio_gallery_ht_view4_title_font_size]"
                                                                   id="ht_view4_title_font_size"
                                                                   value="<?php echo $portfolio_gallery_get_option['portfolio_gallery_ht_view4_title_font_size']; ?>"
                                                                   class="text"/>
                                                            <span>px</span>
                                                        </div>
                                                        <div>
                                                            <label
                                                                    for="ht_view4_title_font_color"><?php echo __( 'Title Font Color', 'portfolio-gallery' ); ?></label>
                                                            <input name="params[portfolio_gallery_ht_view4_title_font_color]" type="text"
                                                                   class="color" id="ht_view4_title_font_color"
                                                                   value="#<?php echo $portfolio_gallery_get_option['portfolio_gallery_ht_view4_title_font_color']; ?>"
                                                                   size="10"/>
                                                        </div>
                                                        <div class="has-background">
                                                            <label
                                                                    for="ht_view4_togglebutton_style"><?php echo __( 'Toggle Button Style', 'portfolio-gallery' ); ?></label>
                                                            <select id="ht_view4_togglebutton_style"
                                                                    name="params[portfolio_gallery_ht_view4_togglebutton_style]">
                                                                <option <?php if ( $portfolio_gallery_get_option['portfolio_gallery_ht_view4_togglebutton_style'] == 'light' ) {
                                                                    echo 'selected="selected"';
                                                                } ?> value="light"><?php echo __( 'Light', 'portfolio-gallery' ); ?></option>
                                                                <option <?php if ( $portfolio_gallery_get_option['portfolio_gallery_ht_view4_togglebutton_style'] == 'dark' ) {
                                                                    echo 'selected="selected"';
                                                                } ?> value="dark"><?php echo __( 'Dark', 'portfolio-gallery' ); ?></option>
                                                            </select>
                                                        </div>
                                                    </div>

                                                    <div style="margin-top: 14px;">
                                                        <h3><?php echo __( 'Sorting styles', 'portfolio-gallery' ); ?></h3>
                                                        <div class="" style="display: none;">
                                                            <label for="ht_view4_show_sorting"
                                                                   style="display: none;"><?php echo __( 'Show Sorting', 'portfolio-gallery' ); ?></label>
                                                            <input type="hidden" value="off"
                                                                   name="params[portfolio_gallery_ht_view4_show_sorting]"/>
                                                            <input type="checkbox"
                                                                   id="ht_view4_show_sorting" <?php if ( $portfolio_gallery_get_option['portfolio_gallery_ht_view4_show_sorting'] == 'on' ) {
                                                                echo 'checked="checked"';
                                                            } ?> name="params[portfolio_gallery_ht_view4_show_sorting]" value="on"/>
                                                        </div>

                                                        <div class="has-background">
                                                            <label
                                                                    for="ht_view4_sortbutton_font_size"><?php echo __( 'Sort Button Font Size', 'portfolio-gallery' ); ?></label>
                                                            <input type="text" name="params[portfolio_gallery_ht_view4_sortbutton_font_size]"
                                                                   id="ht_view4_sortbutton_font_size"
                                                                   value="<?php echo $portfolio_gallery_get_option['portfolio_gallery_ht_view4_sortbutton_font_size']; ?>"
                                                                   class="text"/>
                                                            <span>px</span>
                                                        </div>
                                                        <div class="">
                                                            <label
                                                                    for="ht_view4_sortbutton_font_color"><?php echo __( 'Sort Button Font Color', 'portfolio-gallery' ); ?></label>
                                                            <input name="params[portfolio_gallery_ht_view4_sortbutton_font_color]" type="text"
                                                                   class="color" id="ht_view4_sortbutton_font_color"
                                                                   value="#<?php echo $portfolio_gallery_get_option['portfolio_gallery_ht_view4_sortbutton_font_color']; ?>"
                                                                   size="10"/>
                                                        </div>
                                                        <div class="has-background">
                                                            <label
                                                                    for="ht_view4_sortbutton_hover_font_color"><?php echo __( 'Sort Button Font Hover Color', 'portfolio-gallery' ); ?></label>
                                                            <input name="params[portfolio_gallery_ht_view4_sortbutton_hover_font_color]"
                                                                   type="text" class="color" id="ht_view4_sortbutton_hover_font_color"
                                                                   value="#<?php echo $portfolio_gallery_get_option['portfolio_gallery_ht_view4_sortbutton_hover_font_color']; ?>"
                                                                   size="10"/>
                                                        </div>
                                                        <div class="">
                                                            <label
                                                                    for="ht_view4_sortbutton_background_color"><?php echo __( 'Sort Button Background Color', 'portfolio-gallery' ); ?></label>
                                                            <input name="params[portfolio_gallery_ht_view4_sortbutton_background_color]"
                                                                   type="text" class="color" id="ht_view4_sortbutton_background_color"
                                                                   value="#<?php echo $portfolio_gallery_get_option['portfolio_gallery_ht_view4_sortbutton_background_color']; ?>"
                                                                   size="10"/>
                                                        </div>
                                                        <div class="has-background">
                                                            <label
                                                                    for="ht_view4_sortbutton_hover_background_color"><?php echo __( 'Sort Button Background Hover Color', 'portfolio-gallery' ); ?></label>
                                                            <input name="params[portfolio_gallery_ht_view4_sortbutton_hover_background_color]"
                                                                   type="text" class="color" id="ht_view4_sortbutton_hover_background_color"
                                                                   value="#<?php echo $portfolio_gallery_get_option['portfolio_gallery_ht_view4_sortbutton_hover_background_color']; ?>"
                                                                   size="10"/>
                                                        </div>
                                                        <div class="has-background" style="display: none;">
                                                            <label
                                                                    for="ht_view4_sortbutton_border_width"><?php echo __( 'Sort Button Border Width', 'portfolio-gallery' ); ?></label>
                                                            <input type="text" name="params[portfolio_gallery_ht_view4_sortbutton_border_width]"
                                                                   id="ht_view4_sortbutton_border_width"
                                                                   value="<?php echo $portfolio_gallery_get_option['portfolio_gallery_ht_view4_sortbutton_border_width']; ?>"
                                                                   class="text"/>
                                                            <span>px</span>
                                                        </div>
                                                        <div style="display: none;">
                                                            <input name="params[portfolio_gallery_ht_view4_sortbutton_border_color]" type="text"
                                                                   class="color" id="ht_view4_sortbutton_border_color"
                                                                   value="#<?php echo $portfolio_gallery_get_option['portfolio_gallery_ht_view4_sortbutton_border_color']; ?>"
                                                                   size="10"/>
                                                            <label
                                                                    for="ht_view4_sortbutton_border_color"><?php echo __( 'Sort Button Border Color', 'portfolio-gallery' ); ?></label>
                                                        </div>
                                                        <div class="">
                                                            <label
                                                                    for="ht_view4_sortbutton_border_radius"><?php echo __( 'Sort Button Border Radius', 'portfolio-gallery' ); ?></label>
                                                            <input type="text"
                                                                   name="params[portfolio_gallery_ht_view4_sortbutton_border_radius]"
                                                                   id="ht_view4_sortbutton_border_radius"
                                                                   value="<?php echo $portfolio_gallery_get_option['portfolio_gallery_ht_view4_sortbutton_border_radius']; ?>"
                                                                   class="text"/>
                                                            <span>px</span>
                                                        </div>
                                                        <div class="has-background">
                                                            <label
                                                                    for="ht_view4_sortbutton_border_padding"><?php echo __( 'Sort Button Padding', 'portfolio-gallery' ); ?></label>
                                                            <input type="text"
                                                                   name="params[portfolio_gallery_ht_view4_sortbutton_border_padding]"
                                                                   id="ht_view4_sortbutton_border_padding"
                                                                   value="<?php echo $portfolio_gallery_get_option['portfolio_gallery_ht_view4_sortbutton_border_padding']; ?>"
                                                                   class="text"/>
                                                            <span>px</span>
                                                        </div>
                                                        <div style="display: none;">
                                                            <label
                                                                    for="ht_view4_sortbutton_margin"><?php echo __( 'Sort Button Margins', 'portfolio-gallery' ); ?></label>
                                                            <input type="text" name="params[portfolio_gallery_ht_view4_sortbutton_margin]"
                                                                   id="ht_view4_sortbutton_margin"
                                                                   value="<?php echo $portfolio_gallery_get_option['portfolio_gallery_ht_view4_sortbutton_margin']; ?>"
                                                                   class="text"/>
                                                            <span>px</span>
                                                        </div>
                                                        <div class="">
                                                            <label
                                                                    for="ht_view4_sorting_float"><?php echo __( 'Sort block Position', 'portfolio-gallery' ); ?></label>
                                                            <select id="ht_view4_sorting_float"
                                                                    name="params[portfolio_gallery_ht_view4_sorting_float]">
                                                                <option <?php if ( $portfolio_gallery_get_option['portfolio_gallery_ht_view4_sorting_float'] == 'left' ) {
                                                                    echo 'selected="selected"';
                                                                } ?> value="left"><?php echo __( 'Left', 'portfolio-gallery' ); ?></option>
                                                                <option <?php if ( $portfolio_gallery_get_option['portfolio_gallery_ht_view4_sorting_float'] == 'right' ) {
                                                                    echo 'selected="selected"';
                                                                } ?> value="right"><?php echo __( 'Right', 'portfolio-gallery' ); ?></option>
                                                                <option <?php if ( $portfolio_gallery_get_option['portfolio_gallery_ht_view4_sorting_float'] == 'top' ) {
                                                                    echo 'selected="selected"';
                                                                } ?> value="top"><?php echo __( 'Top', 'portfolio-gallery' ); ?></option>
                                                            </select>
                                                        </div>
                                                        <div class="has-background">
                                                            <label
                                                                    for="ht_view4_sorting_name_by_default"><?php echo __( 'Sort By Default Bottom Name', 'portfolio-gallery' ); ?></label>
                                                            <input name="params[portfolio_gallery_ht_view4_sorting_name_by_default]" type="text"
                                                                   id="ht_view4_sorting_name_by_default"
                                                                   value="<?php echo esc_attr( $portfolio_gallery_get_option['portfolio_gallery_ht_view4_sorting_name_by_default'] ); ?>"
                                                                   size="10" class="text"/>
                                                        </div>
                                                        <div class="">
                                                            <label
                                                                    for="ht_view4_sorting_name_by_id"><?php echo __( 'Sorting By Date Button Name', 'portfolio-gallery' ); ?></label>
                                                            <input name="params[portfolio_gallery_ht_view4_sorting_name_by_id]" type="text"
                                                                   id="ht_view4_sorting_name_by_id"
                                                                   value="<?php echo esc_attr( $portfolio_gallery_get_option['portfolio_gallery_ht_view4_sorting_name_by_id'] ); ?>"
                                                                   size="10"/>
                                                        </div>
                                                        <div class="has-background">
                                                            <label
                                                                    for="ht_view4_sorting_name_by_name"><?php echo __( 'Sorting By Title Button Name', 'portfolio-gallery' ); ?></label>
                                                            <input name="params[portfolio_gallery_ht_view4_sorting_name_by_name]" type="text"
                                                                   id="ht_view4_sorting_name_by_name"
                                                                   value="<?php echo esc_attr( $portfolio_gallery_get_option['portfolio_gallery_ht_view4_sorting_name_by_name'] ); ?>"
                                                                   size="10"/>
                                                        </div>
                                                        <div class="">
                                                            <label
                                                                    for="ht_view4_sorting_name_by_random"><?php echo __( 'Random Sorting Button Name', 'portfolio-gallery' ); ?></label>
                                                            <input name="params[portfolio_gallery_ht_view4_sorting_name_by_random]" type="text"
                                                                   id="ht_view4_sorting_name_by_random"
                                                                   value="<?php echo esc_attr( $portfolio_gallery_get_option['portfolio_gallery_ht_view4_sorting_name_by_random'] ); ?>"
                                                                   size="10"/>
                                                        </div>
                                                        <div class="has-background">
                                                            <label
                                                                    for="ht_view4_sorting_name_by_asc"><?php echo __( 'Ascending Sorting Button Name', 'portfolio-gallery' ); ?></label>
                                                            <input name="params[portfolio_gallery_ht_view4_sorting_name_by_asc]" type="text"
                                                                   id="ht_view4_sorting_name_by_asc"
                                                                   value="<?php echo esc_attr( $portfolio_gallery_get_option['portfolio_gallery_ht_view4_sorting_name_by_asc'] ); ?>"
                                                                   size="10"/>
                                                        </div>
                                                        <div class="">
                                                            <label
                                                                    for="ht_view4_sorting_name_by_desc"><?php echo __( 'Descending Sorting Button Name', 'portfolio-gallery' ); ?></label>
                                                            <input name="params[portfolio_gallery_ht_view4_sorting_name_by_desc]" type="text"
                                                                   id="ht_view4_sorting_name_by_desc"
                                                                   value="<?php echo esc_attr( $portfolio_gallery_get_option['portfolio_gallery_ht_view4_sorting_name_by_desc'] ); ?>"
                                                                   size="10"/>
                                                        </div>
                                                    </div>

                                                    <div style="margin-top: -600px;">
                                                        <h3><?php echo __( 'Category styles', 'portfolio-gallery' ); ?></h3>
                                                        <div class="" style="display: none;">
                                                            <label for="ht_view4_show_filtering"
                                                                   style="display: none;"><?php echo __( 'Show Filtering', 'portfolio-gallery' ); ?></label>
                                                            <input type="hidden" value="off"
                                                                   name="params[portfolio_gallery_ht_view4_show_filtering]"/>
                                                            <input type="checkbox"
                                                                   id="ht_view4_show_filtering" <?php if ( $portfolio_gallery_get_option['portfolio_gallery_ht_view4_show_filtering'] == 'on' ) {
                                                                echo 'checked="checked"';
                                                            } ?> name="params[portfolio_gallery_ht_view4_show_filtering]" value="on"/>
                                                        </div>
                                                        <div class="">
                                                            <label
                                                                    for="ht_view4_cat_all"><?php echo __( 'Show All Category Button Name', 'portfolio-gallery' ); ?></label>
                                                            <input type="text" name="params[portfolio_gallery_ht_view4_cat_all]"
                                                                   id="ht_view4_cat_all"
                                                                   value="<?php echo esc_attr( $portfolio_gallery_get_option['portfolio_gallery_ht_view4_cat_all'] ); ?>"
                                                                   class="text"/>
                                                        </div>
                                                        <div class="has-background">
                                                            <label
                                                                    for="ht_view4_filterbutton_font_size"><?php echo __( 'Filter Button Font Size', 'portfolio-gallery' ); ?></label>
                                                            <input type="text" name="params[portfolio_gallery_ht_view4_filterbutton_font_size]"
                                                                   id="ht_view4_filterbutton_font_size"
                                                                   value="<?php echo $portfolio_gallery_get_option['portfolio_gallery_ht_view4_filterbutton_font_size']; ?>"
                                                                   class="text"/>
                                                            <span>px</span>
                                                        </div>
                                                        <div class="">
                                                            <label
                                                                    for="ht_view4_filterbutton_font_color"><?php echo __( 'Filter Button Font Color', 'portfolio-gallery' ); ?></label>
                                                            <input name="params[portfolio_gallery_ht_view4_filterbutton_font_color]" type="text"
                                                                   class="color" id="ht_view4_filterbutton_font_color"
                                                                   value="#<?php echo $portfolio_gallery_get_option['portfolio_gallery_ht_view4_filterbutton_font_color']; ?>"
                                                                   size="10"/>
                                                        </div>
                                                        <div class="has-background">
                                                            <label
                                                                    for="ht_view4_filterbutton_hover_font_color"><?php echo __( 'Filter Button Font Hover Color', 'portfolio-gallery' ); ?></label>
                                                            <input name="params[portfolio_gallery_ht_view4_filterbutton_hover_font_color]"
                                                                   type="text" class="color" id="ht_view4_filterbutton_hover_font_color"
                                                                   value="#<?php echo $portfolio_gallery_get_option['portfolio_gallery_ht_view4_filterbutton_hover_font_color']; ?>"
                                                                   size="10"/>
                                                        </div>
                                                        <div class="">
                                                            <label
                                                                    for="ht_view4_filterbutton_background_color"><?php echo __( 'Filter Button Background Color', 'portfolio-gallery' ); ?></label>
                                                            <input name="params[portfolio_gallery_ht_view4_filterbutton_background_color]"
                                                                   type="text" class="color" id="ht_view4_filterbutton_background_color"
                                                                   value="#<?php echo $portfolio_gallery_get_option['portfolio_gallery_ht_view4_filterbutton_background_color']; ?>"
                                                                   size="10"/>
                                                        </div>
                                                        <div class="has-background">
                                                            <label
                                                                    for="ht_view4_filterbutton_hover_background_color"><?php echo __( 'Filter Button Background Hover Color', 'portfolio-gallery' ); ?></label>
                                                            <input name="params[portfolio_gallery_ht_view4_filterbutton_hover_background_color]"
                                                                   type="text" class="color" id="ht_view4_filterbutton_hover_background_color"
                                                                   value="#<?php echo $portfolio_gallery_get_option['portfolio_gallery_ht_view4_filterbutton_hover_background_color']; ?>"
                                                                   size="10"/>
                                                        </div>
                                                        <div class="" style="display: none;">
                                                            <label
                                                                    for="ht_view4_filterbutton_border_width"><?php echo __( 'Filter Button Border Width', 'portfolio-gallery' ); ?></label>
                                                            <input type="text"
                                                                   name="params[portfolio_gallery_ht_view4_filterbutton_border_width]"
                                                                   id="ht_view4_filterbutton_border_width"
                                                                   value="<?php echo $portfolio_gallery_get_option['portfolio_gallery_ht_view4_filterbutton_border_width']; ?>"
                                                                   class="text"/>
                                                            <span>px</span>
                                                        </div>
                                                        <div style="display: none;">
                                                            <input name="params[portfolio_gallery_ht_view4_filterbutton_border_color]"
                                                                   type="text" class="color" id="ht_view4_filterbutton_border_color"
                                                                   value="#<?php echo $portfolio_gallery_get_option['portfolio_gallery_ht_view4_filterbutton_border_color']; ?>"
                                                                   size="10"/>
                                                            <label
                                                                    for="ht_view4_filterbutton_border_color"><?php echo __( 'Filter Button Border Color', 'portfolio-gallery' ); ?></label>
                                                        </div>
                                                        <div class="">
                                                            <label
                                                                    for="ht_view4_filterbutton_border_radius"><?php echo __( 'Filter Button Border Radius', 'portfolio-gallery' ); ?></label>
                                                            <input type="text"
                                                                   name="params[portfolio_gallery_ht_view4_filterbutton_border_radius]"
                                                                   id="ht_view4_filterbutton_border_radius"
                                                                   value="<?php echo $portfolio_gallery_get_option['portfolio_gallery_ht_view4_filterbutton_border_radius']; ?>"
                                                                   class="text"/>
                                                            <span>px</span>
                                                        </div>
                                                        <div class="has-background">
                                                            <label
                                                                    for="ht_view4_filterbutton_border_padding"><?php echo __( 'Filter Button Padding', 'portfolio-gallery' ); ?></label>
                                                            <input type="text"
                                                                   name="params[portfolio_gallery_ht_view4_filterbutton_border_padding]"
                                                                   id="ht_view4_filterbutton_border_padding"
                                                                   value="<?php echo $portfolio_gallery_get_option['portfolio_gallery_ht_view4_filterbutton_border_padding']; ?>"
                                                                   class="text"/>
                                                            <span>px</span>
                                                        </div>
                                                        <div style="display: none;">
                                                            <label
                                                                    for="ht_view4_filterbutton_margin"><?php echo __( 'Filter Button Margins', 'portfolio-gallery' ); ?></label>
                                                            <input type="text" name="params[portfolio_gallery_ht_view4_filterbutton_margin]"
                                                                   id="ht_view4_filterbutton_margin"
                                                                   value="<?php echo $portfolio_gallery_get_option['portfolio_gallery_ht_view4_filterbutton_margin']; ?>"
                                                                   class="text"/>
                                                            <span>px</span>
                                                        </div>
                                                        <div class="">
                                                            <label
                                                                    for="ht_view4_filtering_float"><?php echo __( 'Filter block Position', 'portfolio-gallery' ); ?></label>
                                                            <select id="ht_view4_filtering_float"
                                                                    name="params[portfolio_gallery_ht_view4_filtering_float]">
                                                                <option <?php if ( $portfolio_gallery_get_option['portfolio_gallery_ht_view4_filtering_float'] == 'left' ) {
                                                                    echo 'selected="selected"';
                                                                } ?> value="left"><?php echo __( 'Left', 'portfolio-gallery' ); ?></option>
                                                                <option <?php if ( $portfolio_gallery_get_option['portfolio_gallery_ht_view4_filtering_float'] == 'right' ) {
                                                                    echo 'selected="selected"';
                                                                } ?> value="right"><?php echo __( 'Right', 'portfolio-gallery' ); ?></option>
                                                                <option <?php if ( $portfolio_gallery_get_option['portfolio_gallery_ht_view4_filtering_float'] == 'top' ) {
                                                                    echo 'selected="selected"';
                                                                } ?> value="top"><?php echo __( 'Top', 'portfolio-gallery' ); ?></option>
                                                            </select>
                                                        </div>

                                                    </div>

                                                    <div style="margin-top: -120px;">
                                                        <h3><?php echo __( 'Link Button', 'portfolio-gallery' ); ?></h3>
                                                        <div class="has-background">
                                                            <label
                                                                    for="ht_view4_show_linkbutton"><?php echo __( 'Show Link Button', 'portfolio-gallery' ); ?></label>
                                                            <input type="hidden" value="off"
                                                                   name="params[portfolio_gallery_ht_view4_show_linkbutton]"/>
                                                            <input type="checkbox"
                                                                   id="ht_view4_show_linkbutton" <?php if ( $portfolio_gallery_get_option['portfolio_gallery_ht_view4_show_linkbutton'] == 'on' ) {
                                                                echo 'checked="checked"';
                                                            } ?> name="params[portfolio_gallery_ht_view4_show_linkbutton]" value="on"/>
                                                        </div>
                                                        <div>
                                                            <label
                                                                    for="ht_view4_linkbutton_text"><?php echo __( 'Link Button Text', 'portfolio-gallery' ); ?></label>
                                                            <input type="text" name="params[portfolio_gallery_ht_view4_linkbutton_text]"
                                                                   id="ht_view4_linkbutton_text"
                                                                   value="<?php echo esc_attr( $portfolio_gallery_get_option['portfolio_gallery_ht_view4_linkbutton_text'] ); ?>"
                                                                   class="text"/>
                                                        </div>
                                                        <div class="has-background">
                                                            <label
                                                                    for="ht_view4_linkbutton_font_size"><?php echo __( 'Link Button Font Size', 'portfolio-gallery' ); ?></label>
                                                            <input type="text" name="params[portfolio_gallery_ht_view4_linkbutton_font_size]"
                                                                   id="ht_view4_linkbutton_font_size"
                                                                   value="<?php echo $portfolio_gallery_get_option['portfolio_gallery_ht_view4_linkbutton_font_size']; ?>"
                                                                   class="text"/>
                                                            <span>px</span>
                                                        </div>
                                                        <div>
                                                            <label
                                                                    for="ht_view4_linkbutton_color"><?php echo __( 'Link Button Font Color', 'portfolio-gallery' ); ?></label>
                                                            <input name="params[portfolio_gallery_ht_view4_linkbutton_color]" type="text"
                                                                   class="color" id="ht_view4_linkbutton_color"
                                                                   value="#<?php echo $portfolio_gallery_get_option['portfolio_gallery_ht_view4_linkbutton_color']; ?>"
                                                                   size="10"/>
                                                        </div>
                                                        <div class="has-background">
                                                            <label
                                                                    for="ht_view4_linkbutton_font_hover_color"><?php echo __( 'Link Button Font Hover Color', 'portfolio-gallery' ); ?></label>
                                                            <input name="params[portfolio_gallery_ht_view4_linkbutton_font_hover_color]"
                                                                   type="text" class="color" id="ht_view4_linkbutton_font_hover_color"
                                                                   value="#<?php echo $portfolio_gallery_get_option['portfolio_gallery_ht_view4_linkbutton_font_hover_color']; ?>"
                                                                   size="10"/>
                                                        </div>
                                                        <div>
                                                            <label
                                                                    for="ht_view4_linkbutton_background_color"><?php echo __( 'Link Button Background Color', 'portfolio-gallery' ); ?></label>
                                                            <input name="params[portfolio_gallery_ht_view4_linkbutton_background_color]"
                                                                   type="text" class="color" id="ht_view4_linkbutton_background_color"
                                                                   value="#<?php echo $portfolio_gallery_get_option['portfolio_gallery_ht_view4_linkbutton_background_color']; ?>"
                                                                   size="10"/>
                                                        </div>
                                                        <div class="has-background">
                                                            <label
                                                                    for="ht_view4_linkbutton_background_hover_color"><?php echo __( 'Link Button Background Hover Color', 'portfolio-gallery' ); ?></label>
                                                            <input name="params[portfolio_gallery_ht_view4_linkbutton_background_hover_color]"
                                                                   type="text" class="color" id="ht_view4_linkbutton_background_hover_color"
                                                                   value="#<?php echo $portfolio_gallery_get_option['portfolio_gallery_ht_view4_linkbutton_background_hover_color']; ?>"
                                                                   size="10"/>
                                                        </div>
                                                    </div>

                                                    <div>
                                                        <h3><?php echo __( 'Description', 'portfolio-gallery' ); ?></h3>
                                                        <div class="has-background">
                                                            <label
                                                                    for="ht_view4_show_description"><?php echo __( 'Show Description', 'portfolio-gallery' ); ?></label>
                                                            <input type="hidden" value="off"
                                                                   name="params[portfolio_gallery_ht_view4_show_description]"/>
                                                            <input type="checkbox"
                                                                   id="ht_view4_show_description" <?php if ( $portfolio_gallery_get_option['portfolio_gallery_ht_view4_show_description'] == 'on' ) {
                                                                echo 'checked="checked"';
                                                            } ?> name="params[portfolio_gallery_ht_view4_show_description]" value="on"/>
                                                        </div>
                                                        <div>
                                                            <label
                                                                    for="ht_view4_description_font_size"><?php echo __( 'Description Font Size', 'portfolio-gallery' ); ?></label>
                                                            <input type="text" name="params[portfolio_gallery_ht_view4_description_font_size]"
                                                                   id="ht_view4_description_font_size"
                                                                   value="<?php echo $portfolio_gallery_get_option['portfolio_gallery_ht_view4_description_font_size']; ?>"
                                                                   class="text"/>
                                                            <span>px</span>
                                                        </div>
                                                        <div class="has-background">
                                                            <label
                                                                    for="ht_view4_description_color"><?php echo __( 'Description Font Color', 'portfolio-gallery' ); ?></label>
                                                            <input name="params[portfolio_gallery_ht_view4_description_color]" type="text"
                                                                   class="color" id="ht_view4_description_color"
                                                                   value="#<?php echo $portfolio_gallery_get_option['portfolio_gallery_ht_view4_description_color']; ?>"
                                                                   size="10"/>
                                                        </div>
                                                    </div>

                                                </li>

                                                <li id="portfolio-view-options-5">
                                                    <div>
                                                        <h3><?php echo __( 'Slider', 'portfolio-gallery' ); ?></h3>
                                                        <div class="has-background">
                                                            <label
                                                                    for="ht_view5_slider_background_color"><?php echo __( 'Slider Background Color', 'portfolio-gallery' ); ?></label>
                                                            <input name="params[portfolio_gallery_ht_view5_slider_background_color]" type="text"
                                                                   class="color" id="ht_view5_slider_background_color"
                                                                   value="#<?php echo $portfolio_gallery_get_option['portfolio_gallery_ht_view5_slider_background_color']; ?>"
                                                                   size="10"/>
                                                        </div>
                                                        <div>
                                                            <label
                                                                    for="ht_view5_icons_style"><?php echo __( 'Icons Style', 'portfolio-gallery' ); ?></label>
                                                            <select id="ht_view5_icons_style"
                                                                    name="params[portfolio_gallery_ht_view5_icons_style]">
                                                                <option <?php if ( $portfolio_gallery_get_option['portfolio_gallery_ht_view5_icons_style'] == 'light' ) {
                                                                    echo 'selected="selected"';
                                                                } ?> value="light">Light
                                                                </option>
                                                                <option <?php if ( $portfolio_gallery_get_option['portfolio_gallery_ht_view5_icons_style'] == 'dark' ) {
                                                                    echo 'selected="selected"';
                                                                } ?> value="dark">Dark
                                                                </option>
                                                            </select>
                                                        </div>
                                                        <div class="has-background">
                                                            <label
                                                                    for="ht_view5_show_separator_lines"><?php echo __( 'Show Separator Lines', 'portfolio-gallery' ); ?></label>
                                                            <input type="hidden" value="off"
                                                                   name="params[portfolio_gallery_ht_view5_show_separator_lines]"/>
                                                            <input type="checkbox"
                                                                   id="ht_view5_show_separator_lines" <?php if ( $portfolio_gallery_get_option['portfolio_gallery_ht_view5_show_separator_lines'] == 'on' ) {
                                                                echo 'checked="checked"';
                                                            } ?> name="params[portfolio_gallery_ht_view5_show_separator_lines]" value="on"/>
                                                        </div>
                                                    </div>
                                                    <div>
                                                        <h3><?php echo __( 'Images', 'portfolio-gallery' ); ?></h3>
                                                        <div class="has-background">
                                                            <label
                                                                    for="ht_view5_main_image_width"><?php echo __( 'Main Image Width', 'portfolio-gallery' ); ?></label>
                                                            <input type="text" name="params[portfolio_gallery_ht_view5_main_image_width]"
                                                                   id="ht_view5_main_image_width"
                                                                   value="<?php echo $portfolio_gallery_get_option['portfolio_gallery_ht_view5_main_image_width']; ?>"
                                                                   class="text"/>
                                                            <span>px</span>
                                                        </div>
                                                        <div>
                                                            <label
                                                                    for="ht_view5_show_thumbs"><?php echo __( 'Show Thumbs', 'portfolio-gallery' ); ?></label>
                                                            <input type="hidden" value="off"
                                                                   name="params[portfolio_gallery_ht_view5_show_thumbs]"/>
                                                            <input type="checkbox"
                                                                   id="ht_view5_show_thumbs" <?php if ( $portfolio_gallery_get_option['portfolio_gallery_ht_view5_show_thumbs'] == 'on' ) {
                                                                echo 'checked="checked"';
                                                            } ?> name="params[portfolio_gallery_ht_view5_show_thumbs]" value="on"/>
                                                        </div>
                                                        <div class="has-background">
                                                            <label
                                                                    for="ht_view5_thumbs_width"><?php echo __( 'Thumbs Width', 'portfolio-gallery' ); ?></label>
                                                            <input type="text" name="params[portfolio_gallery_ht_view5_thumbs_width]"
                                                                   id="ht_view5_thumbs_width"
                                                                   value="<?php echo $portfolio_gallery_get_option['portfolio_gallery_ht_view5_thumbs_width']; ?>"
                                                                   class="text"/>
                                                            <span>px</span>
                                                        </div>
                                                        <div>
                                                            <label
                                                                    for="ht_view5_thumbs_height"><?php echo __( 'Thumbs Height', 'portfolio-gallery' ); ?></label>
                                                            <input type="text" name="params[portfolio_gallery_ht_view5_thumbs_height]"
                                                                   id="ht_view5_thumbs_height"
                                                                   value="<?php echo $portfolio_gallery_get_option['portfolio_gallery_ht_view5_thumbs_height']; ?>"
                                                                   class="text"/>
                                                            <span>px</span>
                                                        </div>
                                                    </div>
                                                    <div style="margin-top:-30px;">
                                                        <h3>Title</h3>
                                                        <div class="has-background">
                                                            <label
                                                                    for="ht_view5_title_font_size"><?php echo __( 'Title Font Size', 'portfolio-gallery' ); ?></label>
                                                            <input type="text" name="params[portfolio_gallery_ht_view5_title_font_size]"
                                                                   id="ht_view5_title_font_size"
                                                                   value="<?php echo $portfolio_gallery_get_option['portfolio_gallery_ht_view5_title_font_size']; ?>"
                                                                   class="text"/>
                                                            <span>px</span>
                                                        </div>
                                                        <div>
                                                            <label
                                                                    for="ht_view5_title_font_color"><?php echo __( 'Title Font Color', 'portfolio-gallery' ); ?></label>
                                                            <input name="params[portfolio_gallery_ht_view5_title_font_color]" type="text"
                                                                   class="color" id="ht_view5_title_font_color"
                                                                   value="#<?php echo $portfolio_gallery_get_option['portfolio_gallery_ht_view5_title_font_color']; ?>"
                                                                   size="10"/>
                                                        </div>
                                                    </div>
                                                    <div>
                                                        <h3><?php echo __( 'Description', 'portfolio-gallery' ); ?></h3>
                                                        <div class="has-background">
                                                            <label
                                                                    for="ht_view5_show_description"><?php echo __( 'Show Description', 'portfolio-gallery' ); ?></label>
                                                            <input type="hidden" value="off"
                                                                   name="params[portfolio_gallery_ht_view5_show_description]"/>
                                                            <input type="checkbox"
                                                                   id="ht_view5_show_description" <?php if ( $portfolio_gallery_get_option['portfolio_gallery_ht_view5_show_description'] == 'on' ) {
                                                                echo 'checked="checked"';
                                                            } ?> name="params[portfolio_gallery_ht_view5_show_description]" value="on"/>
                                                        </div>
                                                        <div>
                                                            <label
                                                                    for="ht_view5_description_font_size"><?php echo __( 'Description Font Size', 'portfolio-gallery' ); ?></label>
                                                            <input type="text" name="params[portfolio_gallery_ht_view5_description_font_size]"
                                                                   id="ht_view5_description_font_size"
                                                                   value="<?php echo $portfolio_gallery_get_option['portfolio_gallery_ht_view5_description_font_size']; ?>"
                                                                   class="text"/>
                                                            <span>px</span>
                                                        </div>
                                                        <div class="has-background">
                                                            <label
                                                                    for="ht_view5_description_color"><?php echo __( 'Description Font Color', 'portfolio-gallery' ); ?></label>
                                                            <input name="params[portfolio_gallery_ht_view5_description_color]" type="text"
                                                                   class="color" id="ht_view5_description_color"
                                                                   value="#<?php echo $portfolio_gallery_get_option['portfolio_gallery_ht_view5_description_color']; ?>"
                                                                   size="10"/>
                                                        </div>
                                                    </div>
                                                    <div style="margin-top:-65px;">
                                                        <h3><?php echo __( 'Link Button', 'portfolio-gallery' ); ?></h3>
                                                        <div class="has-background">
                                                            <label
                                                                    for="ht_view5_show_linkbutton"><?php echo __( 'Show Link Button', 'portfolio-gallery' ); ?></label>
                                                            <input type="hidden" value="off"
                                                                   name="params[portfolio_gallery_ht_view5_show_linkbutton]"/>
                                                            <input type="checkbox"
                                                                   id="ht_view5_show_linkbutton" <?php if ( $portfolio_gallery_get_option['portfolio_gallery_ht_view5_show_linkbutton'] == 'on' ) {
                                                                echo 'checked="checked"';
                                                            } ?> name="params[portfolio_gallery_ht_view5_show_linkbutton]" value="on"/>
                                                        </div>
                                                        <div>
                                                            <label
                                                                    for="ht_view5_linkbutton_text"><?php echo __( 'Link Button Text', 'portfolio-gallery' ); ?></label>
                                                            <input type="text" name="params[portfolio_gallery_ht_view5_linkbutton_text]"
                                                                   id="ht_view5_linkbutton_text"
                                                                   value="<?php echo esc_attr( $portfolio_gallery_get_option['portfolio_gallery_ht_view5_linkbutton_text'] ); ?>"
                                                                   class="text"/>
                                                        </div>
                                                        <div class="has-background">
                                                            <label
                                                                    for="ht_view5_linkbutton_font_size"><?php echo __( 'Link Button Font Size', 'portfolio-gallery' ); ?></label>
                                                            <input type="text" name="params[portfolio_gallery_ht_view5_linkbutton_font_size]"
                                                                   id="ht_view5_linkbutton_font_size"
                                                                   value="<?php echo $portfolio_gallery_get_option['portfolio_gallery_ht_view5_linkbutton_font_size']; ?>"
                                                                   class="text"/>
                                                            <span>px</span>
                                                        </div>
                                                        <div>
                                                            <label
                                                                    for="ht_view5_linkbutton_color"><?php echo __( 'Link Button Font Color', 'portfolio-gallery' ); ?></label>
                                                            <input name="params[portfolio_gallery_ht_view5_linkbutton_color]" type="text"
                                                                   class="color" id="ht_view5_linkbutton_color"
                                                                   value="#<?php echo $portfolio_gallery_get_option['portfolio_gallery_ht_view5_linkbutton_color']; ?>"
                                                                   size="10"/>
                                                        </div>
                                                        <div class="has-background">
                                                            <label
                                                                    for="ht_view5_linkbutton_font_hover_color"><?php echo __( 'Link Button Font Hover Color', 'portfolio-gallery' ); ?></label>
                                                            <input name="params[portfolio_gallery_ht_view5_linkbutton_font_hover_color]"
                                                                   type="text" class="color" id="ht_view5_linkbutton_font_hover_color"
                                                                   value="#<?php echo $portfolio_gallery_get_option['portfolio_gallery_ht_view5_linkbutton_font_hover_color']; ?>"
                                                                   size="10"/>
                                                        </div>
                                                        <div>
                                                            <label
                                                                    for="ht_view5_linkbutton_background_color"><?php echo __( 'Link Button Background Color', 'portfolio-gallery' ); ?></label>
                                                            <input name="params[portfolio_gallery_ht_view5_linkbutton_background_color]"
                                                                   type="text" class="color" id="ht_view5_linkbutton_background_color"
                                                                   value="#<?php echo $portfolio_gallery_get_option['portfolio_gallery_ht_view5_linkbutton_background_color']; ?>"
                                                                   size="10"/>
                                                        </div>
                                                        <div class="has-background">
                                                            <label
                                                                    for="ht_view5_linkbutton_background_hover_color"><?php echo __( 'Link Button Background Hover Color', 'portfolio-gallery' ); ?></label>
                                                            <input name="params[portfolio_gallery_ht_view5_linkbutton_background_hover_color]"
                                                                   type="text" class="color" id="ht_view5_linkbutton_background_hover_color"
                                                                   value="#<?php echo $portfolio_gallery_get_option['portfolio_gallery_ht_view5_linkbutton_background_hover_color']; ?>"
                                                                   size="10"/>
                                                        </div>
                                                    </div>
                                                </li>

                                                <li id="portfolio-view-options-6">
                                                    <div style="margin-top: 0px">
                                                        <h3><?php echo __( 'Title', 'portfolio-gallery' ); ?></h3>
                                                        <div class="has-background">
                                                            <label
                                                                    for="ht_view6_title_font_size"><?php echo __( 'Title Font Size', 'portfolio-gallery' ); ?></label>
                                                            <input type="text" name="params[portfolio_gallery_ht_view6_title_font_size]"
                                                                   id="ht_view6_title_font_size"
                                                                   value="<?php echo $portfolio_gallery_get_option['portfolio_gallery_ht_view6_title_font_size']; ?>"
                                                                   class="text"/>
                                                            <span>px</span>
                                                        </div>
                                                        <div>
                                                            <label
                                                                    for="ht_view6_title_font_color"><?php echo __( 'Title Font Color', 'portfolio-gallery' ); ?></label>
                                                            <input name="params[portfolio_gallery_ht_view6_title_font_color]" type="text"
                                                                   class="color" id="ht_view6_title_font_color"
                                                                   value="#<?php echo $portfolio_gallery_get_option['portfolio_gallery_ht_view6_title_font_color']; ?>"
                                                                   size="10"/>
                                                        </div>
                                                        <div class="has-background">
                                                            <label
                                                                    for="ht_view6_title_font_hover_color"><?php echo __( 'Title Font Hover Color', 'portfolio-gallery' ); ?></label>
                                                            <input name="params[portfolio_gallery_ht_view6_title_font_hover_color]" type="text"
                                                                   class="color" id="ht_view6_title_font_hover_color"
                                                                   value="#<?php echo $portfolio_gallery_get_option['portfolio_gallery_ht_view6_title_font_hover_color']; ?>"
                                                                   size="10"/>
                                                        </div>
                                                        <div>
                                                            <label
                                                                    for="ht_view6_title_background_color"><?php echo __( 'Title Background Color', 'portfolio-gallery' ); ?></label>
                                                            <input name="params[portfolio_gallery_ht_view6_title_background_color]" type="text"
                                                                   class="color" id="ht_view6_title_background_color"
                                                                   value="#<?php echo $portfolio_gallery_get_option['portfolio_gallery_ht_view6_title_background_color']; ?>"
                                                                   size="10"/>
                                                        </div>
                                                        <div class="has-background">
                                                            <label
                                                                    for="ht_view6_title_background_transparency"><?php echo __( 'Title Background Transparency', 'portfolio-gallery' ); ?></label>
                                                            <div class="slider-container">
                                                                <input name="params[portfolio_gallery_ht_view6_title_background_transparency]"
                                                                       id="ht_view6_title_background_transparency" data-slider-highlight="true"
                                                                       data-slider-values="0,10,20,30,40,50,60,70,80,90,100" type="text"
                                                                       data-slider="true"
                                                                       value="<?php echo $portfolio_gallery_get_option['portfolio_gallery_ht_view6_title_background_transparency']; ?>"/>
                                                                <span><?php echo $portfolio_gallery_get_option['portfolio_gallery_ht_view6_title_background_transparency']; ?>
                                                                    %</span>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div style="margin-top: 0px;">
                                                        <h3><?php echo __( 'Image', 'portfolio-gallery' ); ?></h3>
                                                        <div class="has-background">
                                                            <label
                                                                    for="ht_view6_width"><?php echo __( 'Image Width', 'portfolio-gallery' ); ?></label>
                                                            <input type="text" name="params[portfolio_gallery_ht_view6_width]"
                                                                   id="ht_view6_width"
                                                                   value="<?php echo $portfolio_gallery_get_option['portfolio_gallery_ht_view6_width']; ?>"
                                                                   class="text"/>
                                                            <span>px</span>
                                                        </div>
                                                        <div>
                                                            <label
                                                                    for="ht_view6_border_width"><?php echo __( 'Image Border Width', 'portfolio-gallery' ); ?></label>
                                                            <input type="text" name="params[portfolio_gallery_ht_view6_border_width]"
                                                                   id="ht_view6_border_width"
                                                                   value="<?php echo $portfolio_gallery_get_option['portfolio_gallery_ht_view6_border_width']; ?>"
                                                                   class="text"/>
                                                            <span>px</span>
                                                        </div>
                                                        <div class="has-background">
                                                            <label
                                                                    for="ht_view6_border_color"><?php echo __( 'Image Border Color', 'portfolio-gallery' ); ?></label>
                                                            <input name="params[portfolio_gallery_ht_view6_border_color]" type="text"
                                                                   class="color" id="ht_view6_border_color"
                                                                   value="#<?php echo $portfolio_gallery_get_option['portfolio_gallery_ht_view6_border_color']; ?>"
                                                                   size="10"/>
                                                        </div>
                                                        <div>
                                                            <label
                                                                    for="ht_view6_border_radius"><?php echo __( 'Border Radius', 'portfolio-gallery' ); ?></label>
                                                            <input type="text" name="params[portfolio_gallery_ht_view6_border_radius]"
                                                                   id="ht_view6_border_radius"
                                                                   value="<?php echo $portfolio_gallery_get_option['portfolio_gallery_ht_view6_border_radius']; ?>"
                                                                   class="text"/>
                                                            <span>px</span>
                                                        </div>
                                                    </div>

                                                    <div>
                                                        <h3><?php echo __( 'Sorting styles', 'portfolio-gallery' ); ?></h3>
                                                        <div class="" style="display: none;">
                                                            <label for="ht_view6_show_sorting"
                                                                   style="display: none;"><?php echo __( 'Show Sorting', 'portfolio-gallery' ); ?></label>
                                                            <input type="hidden" value="off"
                                                                   name="params[portfolio_gallery_ht_view6_show_sorting]"/>
                                                            <input type="checkbox"
                                                                   id="ht_view6_show_sorting" <?php if ( $portfolio_gallery_get_option['portfolio_gallery_ht_view6_show_sorting'] == 'on' ) {
                                                                echo 'checked="checked"';
                                                            } ?> name="params[portfolio_gallery_ht_view6_show_sorting]" value="on"/>
                                                        </div>

                                                        <div class="has-background">
                                                            <label
                                                                    for="ht_view6_sortbutton_font_size"><?php echo __( 'Sort Button Font Size', 'portfolio-gallery' ); ?></label>
                                                            <input type="text" name="params[portfolio_gallery_ht_view6_sortbutton_font_size]"
                                                                   id="ht_view6_sortbutton_font_size"
                                                                   value="<?php echo $portfolio_gallery_get_option['portfolio_gallery_ht_view6_sortbutton_font_size']; ?>"
                                                                   class="text"/>
                                                            <span>px</span>
                                                        </div>
                                                        <div class="">
                                                            <label
                                                                    for="ht_view6_sortbutton_font_color"><?php echo __( 'Sort Button Font Color', 'portfolio-gallery' ); ?></label>
                                                            <input name="params[portfolio_gallery_ht_view6_sortbutton_font_color]" type="text"
                                                                   class="color" id="ht_view6_sortbutton_font_color"
                                                                   value="#<?php echo $portfolio_gallery_get_option['portfolio_gallery_ht_view6_sortbutton_font_color']; ?>"
                                                                   size="10"/>
                                                        </div>
                                                        <div class="has-background">
                                                            <label
                                                                    for="ht_view6_sortbutton_hover_font_color"><?php echo __( 'Sort Button Font Hover Color', 'portfolio-gallery' ); ?></label>
                                                            <input name="params[portfolio_gallery_ht_view6_sortbutton_hover_font_color]"
                                                                   type="text" class="color" id="ht_view6_sortbutton_hover_font_color"
                                                                   value="#<?php echo $portfolio_gallery_get_option['portfolio_gallery_ht_view6_sortbutton_hover_font_color']; ?>"
                                                                   size="10"/>
                                                        </div>
                                                        <div class="">
                                                            <label
                                                                    for="ht_view6_sortbutton_background_color"><?php echo __( 'Sort Button Background Color', 'portfolio-gallery' ); ?></label>
                                                            <input name="params[portfolio_gallery_ht_view6_sortbutton_background_color]"
                                                                   type="text" class="color" id="ht_view6_sortbutton_background_color"
                                                                   value="#<?php echo $portfolio_gallery_get_option['portfolio_gallery_ht_view6_sortbutton_background_color']; ?>"
                                                                   size="10"/>
                                                        </div>
                                                        <div class="has-background">
                                                            <label
                                                                    for="ht_view6_sortbutton_hover_background_color"><?php echo __( 'Sort Button Background Hover Color', 'portfolio-gallery' ); ?></label>
                                                            <input name="params[portfolio_gallery_ht_view6_sortbutton_hover_background_color]"
                                                                   type="text" class="color" id="ht_view6_sortbutton_hover_background_color"
                                                                   value="#<?php echo $portfolio_gallery_get_option['portfolio_gallery_ht_view6_sortbutton_hover_background_color']; ?>"
                                                                   size="10"/>
                                                        </div>
                                                        <div class="" style="display: none;">
                                                            <label
                                                                    for="ht_view6_sortbutton_border_width"><?php echo __( 'Sort Button Border Width', 'portfolio-gallery' ); ?></label>
                                                            <input type="text" name="params[portfolio_gallery_ht_view6_sortbutton_border_width]"
                                                                   id="ht_view6_sortbutton_border_width"
                                                                   value="<?php echo $portfolio_gallery_get_option['portfolio_gallery_ht_view6_sortbutton_border_width']; ?>"
                                                                   class="text"/>
                                                            <span>px</span>
                                                        </div>
                                                        <div style="display: none;">
                                                            <input name="params[portfolio_gallery_ht_view6_sortbutton_border_color]" type="text"
                                                                   class="color" id="ht_view6_sortbutton_border_color"
                                                                   value="#<?php echo $portfolio_gallery_get_option['portfolio_gallery_ht_view6_sortbutton_border_color']; ?>"
                                                                   size="10"/>
                                                            <label
                                                                    for="ht_view6_sortbutton_border_color"><?php echo __( 'Sort Button Border Color', 'portfolio-gallery' ); ?></label>
                                                        </div>
                                                        <div class="">
                                                            <label
                                                                    for="ht_view6_sortbutton_border_radius"><?php echo __( 'Sort Button Border Radius', 'portfolio-gallery' ); ?></label>
                                                            <input type="text"
                                                                   name="params[portfolio_gallery_ht_view6_sortbutton_border_radius]"
                                                                   id="ht_view6_sortbutton_border_radius"
                                                                   value="<?php echo $portfolio_gallery_get_option['portfolio_gallery_ht_view6_sortbutton_border_radius']; ?>"
                                                                   class="text"/>
                                                            <span>px</span>
                                                        </div>
                                                        <div class="has-background">
                                                            <label
                                                                    for="ht_view6_sortbutton_border_padding"><?php echo __( 'Sort Button Padding', 'portfolio-gallery' ); ?></label>
                                                            <input type="text"
                                                                   name="params[portfolio_gallery_ht_view6_sortbutton_border_padding]"
                                                                   id="ht_view6_sortbutton_border_padding"
                                                                   value="<?php echo $portfolio_gallery_get_option['portfolio_gallery_ht_view6_sortbutton_border_padding']; ?>"
                                                                   class="text"/>
                                                            <span>px</span>
                                                        </div>
                                                        <div style="display: none;">
                                                            <label
                                                                    for="ht_view6_sortbutton_margin"><?php echo __( 'Sort Button Margins', 'portfolio-gallery' ); ?></label>
                                                            <input type="text" name="params[portfolio_gallery_ht_view6_sortbutton_margin]"
                                                                   id="ht_view6_sortbutton_margin"
                                                                   value="<?php echo $portfolio_gallery_get_option['portfolio_gallery_ht_view6_sortbutton_margin']; ?>"
                                                                   class="text"/>
                                                            <span>px</span>
                                                        </div>
                                                        <div class="">
                                                            <label
                                                                    for="ht_view6_sorting_float"><?php echo __( 'Sort block Position', 'portfolio-gallery' ); ?></label>
                                                            <select id="ht_view6_sorting_float"
                                                                    name="params[portfolio_gallery_ht_view6_sorting_float]">
                                                                <option <?php if ( $portfolio_gallery_get_option['portfolio_gallery_ht_view6_sorting_float'] == 'left' ) {
                                                                    echo 'selected="selected"';
                                                                } ?> value="left"><?php echo __( 'Left', 'portfolio-gallery' ); ?></option>
                                                                <option <?php if ( $portfolio_gallery_get_option['portfolio_gallery_ht_view6_sorting_float'] == 'right' ) {
                                                                    echo 'selected="selected"';
                                                                } ?> value="right"><?php echo __( 'Right', 'portfolio-gallery' ); ?></option>
                                                                <option <?php if ( $portfolio_gallery_get_option['portfolio_gallery_ht_view6_sorting_float'] == 'top' ) {
                                                                    echo 'selected="selected"';
                                                                } ?> value="top"><?php echo __( 'Top', 'portfolio-gallery' ); ?></option>
                                                            </select>
                                                        </div>
                                                        <div class="has-background">
                                                            <label
                                                                    for="ht_view6_sorting_name_by_default"><?php echo __( 'Sort By Default Bottom Name', 'portfolio-gallery' ); ?></label>
                                                            <input name="params[portfolio_gallery_ht_view6_sorting_name_by_default]" type="text"
                                                                   id="ht_view6_sorting_name_by_default"
                                                                   value="<?php echo esc_attr( $portfolio_gallery_get_option['portfolio_gallery_ht_view6_sorting_name_by_default'] ); ?>"
                                                                   size="10" class="text"/>
                                                        </div>
                                                        <div class="">
                                                            <label
                                                                    for="ht_view6_sorting_name_by_id"><?php echo __( 'Sorting By Date Button Name', 'portfolio-gallery' ); ?></label>
                                                            <input name="params[portfolio_gallery_ht_view6_sorting_name_by_id]" type="text"
                                                                   id="ht_view6_sorting_name_by_id"
                                                                   value="<?php echo esc_attr( $portfolio_gallery_get_option['portfolio_gallery_ht_view6_sorting_name_by_id'] ); ?>"
                                                                   size="10"/>
                                                        </div>
                                                        <div class="has-background">
                                                            <label
                                                                    for="ht_view6_sorting_name_by_name"><?php echo __( 'Sorting By Title Button Name', 'portfolio-gallery' ); ?></label>
                                                            <input name="params[portfolio_gallery_ht_view6_sorting_name_by_name]" type="text"
                                                                   id="ht_view6_sorting_name_by_name"
                                                                   value="<?php echo esc_attr( $portfolio_gallery_get_option['portfolio_gallery_ht_view6_sorting_name_by_name'] ); ?>"
                                                                   size="10"/>
                                                        </div>
                                                        <div class="">
                                                            <label
                                                                    for="ht_view6_sorting_name_by_random"><?php echo __( 'Random Sorting Button Name', 'portfolio-gallery' ); ?></label>
                                                            <input name="params[portfolio_gallery_ht_view6_sorting_name_by_random]" type="text"
                                                                   id="ht_view6_sorting_name_by_random"
                                                                   value="<?php echo esc_attr( $portfolio_gallery_get_option['portfolio_gallery_ht_view6_sorting_name_by_random'] ); ?>"
                                                                   size="10"/>
                                                        </div>
                                                        <div class="has-background">
                                                            <label
                                                                    for="ht_view6_sorting_name_by_asc"><?php echo __( 'Ascending Sorting Button Name', 'portfolio-gallery' ); ?></label>
                                                            <input name="params[portfolio_gallery_ht_view6_sorting_name_by_asc]" type="text"
                                                                   id="ht_view6_sorting_name_by_asc"
                                                                   value="<?php echo esc_attr( $portfolio_gallery_get_option['portfolio_gallery_ht_view6_sorting_name_by_asc'] ); ?>"
                                                                   size="10"/>
                                                        </div>
                                                        <div class="">
                                                            <label
                                                                    for="ht_view6_sorting_name_by_desc"><?php echo __( 'Descending Sorting Button Name', 'portfolio-gallery' ); ?></label>
                                                            <input name="params[portfolio_gallery_ht_view6_sorting_name_by_desc]" type="text"
                                                                   id="ht_view6_sorting_name_by_desc"
                                                                   value="<?php echo esc_attr( $portfolio_gallery_get_option['portfolio_gallery_ht_view6_sorting_name_by_desc'] ); ?>"
                                                                   size="10"/>
                                                        </div>
                                                    </div>

                                                    <div style="margin-top: -600px">
                                                        <h3><?php echo __( 'Category styles', 'portfolio-gallery' ); ?></h3>
                                                        <div style="display: none;">
                                                            <label for="ht_view6_show_filtering"
                                                                   style="display: none;"><?php echo __( 'Show Filtering', 'portfolio-gallery' ); ?></label>
                                                            <input type="hidden" value="off"
                                                                   name="params[portfolio_gallery_ht_view6_show_filtering]"/>
                                                            <input type="checkbox"
                                                                   id="ht_view6_show_filtering" <?php if ( $portfolio_gallery_get_option['portfolio_gallery_ht_view6_show_filtering'] == 'on' ) {
                                                                echo 'checked="checked"';
                                                            } ?> name="params[portfolio_gallery_ht_view6_show_filtering]" value="on"/>
                                                        </div>
                                                        <div class="">
                                                            <label
                                                                    for="ht_view6_cat_all"><?php echo __( 'Show All Button Name', 'portfolio-gallery' ); ?></label>
                                                            <input type="text" name="params[portfolio_gallery_ht_view6_cat_all]"
                                                                   id="ht_view6_cat_all"
                                                                   value="<?php echo esc_attr( $portfolio_gallery_get_option['portfolio_gallery_ht_view6_cat_all'] ); ?>"
                                                                   class="text"/>
                                                        </div>
                                                        <div class="has-background">
                                                            <label
                                                                    for="ht_view6_filterbutton_font_size"><?php echo __( 'Filter Button Font Size', 'portfolio-gallery' ); ?></label>
                                                            <input type="text" name="params[portfolio_gallery_ht_view6_filterbutton_font_size]"
                                                                   id="ht_view6_filterbutton_font_size"
                                                                   value="<?php echo $portfolio_gallery_get_option['portfolio_gallery_ht_view6_filterbutton_font_size']; ?>"
                                                                   class="text"/>
                                                            <span>px</span>
                                                        </div>
                                                        <div class="">
                                                            <label
                                                                    for="ht_view6_filterbutton_font_color"><?php echo __( 'Filter Button Font Color', 'portfolio-gallery' ); ?></label>
                                                            <input name="params[portfolio_gallery_ht_view6_filterbutton_font_color]" type="text"
                                                                   class="color" id="ht_view6_filterbutton_font_color"
                                                                   value="#<?php echo $portfolio_gallery_get_option['portfolio_gallery_ht_view6_filterbutton_font_color']; ?>"
                                                                   size="10"/>
                                                        </div>
                                                        <div class="has-background">
                                                            <label
                                                                    for="ht_view6_filterbutton_hover_font_color"><?php echo __( 'Filter Button Font Hover Color', 'portfolio-gallery' ); ?></label>
                                                            <input name="params[portfolio_gallery_ht_view6_filterbutton_hover_font_color]"
                                                                   type="text" class="color" id="ht_view6_filterbutton_hover_font_color"
                                                                   value="#<?php echo $portfolio_gallery_get_option['portfolio_gallery_ht_view6_filterbutton_hover_font_color']; ?>"
                                                                   size="10"/>
                                                        </div>
                                                        <div class="">
                                                            <label
                                                                    for="ht_view6_filterbutton_background_color"><?php echo __( 'Filter Button Background Color', 'portfolio-gallery' ); ?></label>
                                                            <input name="params[portfolio_gallery_ht_view6_filterbutton_background_color]"
                                                                   type="text" class="color" id="ht_view6_filterbutton_background_color"
                                                                   value="#<?php echo $portfolio_gallery_get_option['portfolio_gallery_ht_view6_filterbutton_background_color']; ?>"
                                                                   size="10"/>
                                                        </div>
                                                        <div class="has-background">
                                                            <label
                                                                    for="ht_view6_filterbutton_hover_background_color"><?php echo __( 'Filter Button Background Hover Color', 'portfolio-gallery' ); ?></label>
                                                            <input name="params[portfolio_gallery_ht_view6_filterbutton_hover_background_color]"
                                                                   type="text" class="color" id="ht_view6_filterbutton_hover_background_color"
                                                                   value="#<?php echo $portfolio_gallery_get_option['portfolio_gallery_ht_view6_filterbutton_hover_background_color']; ?>"
                                                                   size="10"/>
                                                        </div>

                                                        <div class="" style="display: none;">
                                                            <label
                                                                    for="ht_view6_filterbutton_border_width"><?php echo __( 'Filter Button Border Width', 'portfolio-gallery' ); ?></label>
                                                            <input type="text"
                                                                   name="params[portfolio_gallery_ht_view6_filterbutton_border_width]"
                                                                   id="ht_view6_filterbutton_border_width"
                                                                   value="<?php echo $portfolio_gallery_get_option['portfolio_gallery_ht_view6_filterbutton_border_width']; ?>"
                                                                   class="text"/>
                                                            <span>px</span>
                                                        </div>
                                                        <div style="display: none;">
                                                            <input name="params[portfolio_gallery_ht_view6_filterbutton_border_color]"
                                                                   type="text" class="color" id="ht_view6_filterbutton_border_color"
                                                                   value="#<?php echo $portfolio_gallery_get_option['portfolio_gallery_ht_view6_filterbutton_border_color']; ?>"
                                                                   size="10"/>
                                                            <label
                                                                    for="ht_view6_filterbutton_border_color"><?php echo __( 'Filter Button Border Color', 'portfolio-gallery' ); ?></label>
                                                        </div>
                                                        <div class="">
                                                            <label
                                                                    for="ht_view6_filterbutton_border_radius"><?php echo __( 'Filter Button Border Radius', 'portfolio-gallery' ); ?></label>
                                                            <input type="text"
                                                                   name="params[portfolio_gallery_ht_view6_filterbutton_border_radius]"
                                                                   id="ht_view6_filterbutton_border_radius"
                                                                   value="<?php echo $portfolio_gallery_get_option['portfolio_gallery_ht_view6_filterbutton_border_radius']; ?>"
                                                                   class="text"/>
                                                            <span>px</span>
                                                        </div>
                                                        <div class="has-background">
                                                            <label
                                                                    for="ht_view6_filterbutton_border_padding"><?php echo __( 'Filter Button Padding', 'portfolio-gallery' ); ?></label>
                                                            <input type="text"
                                                                   name="params[portfolio_gallery_ht_view6_filterbutton_border_padding]"
                                                                   id="ht_view6_filterbutton_border_padding"
                                                                   value="<?php echo $portfolio_gallery_get_option['portfolio_gallery_ht_view6_filterbutton_border_padding']; ?>"
                                                                   class="text"/>
                                                            <span>px</span>
                                                        </div>
                                                        <div style="display: none;">
                                                            <label
                                                                    for="ht_view6_filterbutton_margin"><?php echo __( 'Filter Button Margins', 'portfolio-gallery' ); ?></label>
                                                            <input type="text" name="params[portfolio_gallery_ht_view6_filterbutton_margin]"
                                                                   id="ht_view6_filterbutton_margin"
                                                                   value="<?php echo $portfolio_gallery_get_option['portfolio_gallery_ht_view6_filterbutton_margin']; ?>"
                                                                   class="text"/>
                                                            <span>px</span>
                                                        </div>
                                                        <div class="">
                                                            <label
                                                                    for="ht_view6_filtering_float"><?php echo __( 'Filter block Position', 'portfolio-gallery' ); ?></label>
                                                            <select id="ht_view6_filtering_float"
                                                                    name="params[portfolio_gallery_ht_view6_filtering_float]">
                                                                <option <?php if ( $portfolio_gallery_get_option['portfolio_gallery_ht_view6_filtering_float'] == 'left' ) {
                                                                    echo 'selected="selected"';
                                                                } ?> value="left"><?php echo __( 'Left', 'portfolio-gallery' ); ?></option>
                                                                <option <?php if ( $portfolio_gallery_get_option['portfolio_gallery_ht_view6_filtering_float'] == 'right' ) {
                                                                    echo 'selected="selected"';
                                                                } ?> value="right"><?php echo __( 'Right', 'portfolio-gallery' ); ?></option>
                                                                <option <?php if ( $portfolio_gallery_get_option['portfolio_gallery_ht_view6_filtering_float'] == 'top' ) {
                                                                    echo 'selected="selected"';
                                                                } ?> value="top"><?php echo __( 'Top', 'portfolio-gallery' ); ?></option>
                                                            </select>
                                                        </div>

                                                    </div>
                                                </li>

                                                <li id="portfolio-view-options-7">
                                                    <div class="option-single-column">
                                                        <div>
                                                            <h3><?php echo __( 'Element Styles', 'portfolio-gallery' ); ?></h3>
                                                            <div class="has-background">
                                                                <label
                                                                        for="portfolio_gallery_ht_view7_image_behaviour"><?php echo __( "Element's Image Behaviour", 'portfolio-gallery' ); ?></label>
                                                                <select id="portfolio_gallery_ht_view7_image_behaviour"
                                                                        name="params[portfolio_gallery_ht_view7_image_behaviour]">
                                                                    <option <?php if ( $portfolio_gallery_get_option['portfolio_gallery_ht_view7_image_behaviour'] == 'resize' ) {
                                                                        echo 'selected="selected"';
                                                                    } ?>
                                                                            value="resize"><?php echo __( 'Resize', 'portfolio-gallery' ); ?></option>
                                                                    <option <?php if ( $portfolio_gallery_get_option['portfolio_gallery_ht_view7_image_behaviour'] == 'crop' ) {
                                                                        echo 'selected="selected"';
                                                                    } ?>
                                                                            value="crop"><?php echo __( 'Natural', 'portfolio-gallery' ); ?></option>
                                                                </select>
                                                            </div>
                                                            <div>
                                                                <label
                                                                        for="portfolio_gallery_ht_view7_element_width"><?php echo __( 'Element  Width', 'portfolio-gallery' ); ?></label>
                                                                <input type="text" name="params[portfolio_gallery_ht_view7_element_width]"
                                                                       id="portfolio_gallery_ht_view7_element_width"
                                                                       value="<?php echo $portfolio_gallery_get_option['portfolio_gallery_ht_view7_element_width']; ?>"
                                                                       class="text"/>
                                                                <span>px</span>
                                                            </div class="has-background">
                                                            <div class="has-background">
                                                                <label
                                                                        for="portfolio_gallery_ht_view7_element_height"><?php echo __( 'Element Height', 'portfolio-gallery' ); ?></label>
                                                                <input type="text" name="params[portfolio_gallery_ht_view7_element_height]"
                                                                       id="portfolio_gallery_ht_view7_element_height"
                                                                       value="<?php echo $portfolio_gallery_get_option['portfolio_gallery_ht_view7_element_height']; ?>"
                                                                       class="text"/>
                                                                <span>px</span>
                                                            </div>
                                                            <div>
                                                                <label
                                                                        for="portfolio_gallery_ht_view7_element_margin"><?php echo __( 'Margin Between Elements', 'portfolio-gallery' ); ?></label>
                                                                <input type="text" name="params[portfolio_gallery_ht_view7_element_margin]"
                                                                       id="portfolio_gallery_ht_view7_element_margin"
                                                                       value="<?php echo $portfolio_gallery_get_option['portfolio_gallery_ht_view7_element_margin']; ?>"
                                                                       class="text"/>
                                                                <span>px</span>
                                                            </div>
                                                            <div class="has-background">
                                                                <label
                                                                        for="portfolio_gallery_ht_view7_element_hover_effect"><?php echo __( 'Element Hover Effect', 'portfolio-gallery' ); ?></label>
                                                                <input type="hidden" value="false"
                                                                       name="params[portfolio_gallery_ht_view7_element_hover_effect]"/>
                                                                <input type="checkbox"
                                                                       id="portfolio_gallery_ht_view7_element_hover_effect" <?php if ( $portfolio_gallery_get_option['portfolio_gallery_ht_view7_element_hover_effect'] == 'true' ) {
                                                                    echo 'checked="checked"';
                                                                } ?> name="params[portfolio_gallery_ht_view7_element_hover_effect]"
                                                                       value="true"/>
                                                            </div>
                                                            <div >
                                                                <label
                                                                        for="portfolio_gallery_ht_view7_element_overlay_background_color_"><?php echo __( 'Element Overlay Background Color', 'portfolio-gallery' ); ?></label>
                                                                <input
                                                                        name="params[portfolio_gallery_ht_view7_element_overlay_background_color_]"
                                                                        type="text" class="color"
                                                                        id="portfolio_gallery_ht_view7_element_overlay_background_color_"
                                                                        value="#<?php echo $portfolio_gallery_get_option['portfolio_gallery_ht_view7_element_overlay_background_color_']; ?>"
                                                                        size="10"/>
                                                            </div>
                                                            <div class="has-background">
                                                                <label
                                                                        for="portfolio_gallery_ht_view7_element_border_color"><?php echo __( 'Element Border Color', 'portfolio-gallery' ); ?></label>
                                                                <input name="params[portfolio_gallery_ht_view7_element_border_color]"
                                                                       type="text" class="color"
                                                                       id="portfolio_gallery_ht_view7_element_border_color"
                                                                       value="#<?php echo $portfolio_gallery_get_option['portfolio_gallery_ht_view7_element_border_color']; ?>"
                                                                       size="10"/>
                                                            </div>
                                                            <div>
                                                                <label
                                                                        for="portfolio_gallery_ht_view7_element_border_width"><?php echo __( 'Element Border Width', 'portfolio-gallery' ); ?></label>
                                                                <input type="text"
                                                                       name="params[portfolio_gallery_ht_view7_element_border_width]"
                                                                       id="portfolio_gallery_ht_view7_element_border_width"
                                                                       value="<?php echo $portfolio_gallery_get_option['portfolio_gallery_ht_view7_element_border_width']; ?>"
                                                                       class="text"/>
                                                                <span>px</span>
                                                            </div>
                                                            <div class="has-background">
                                                                <label
                                                                        for="portfolio_gallery_ht_view7_element_overlay_opacity"><?php echo __( "Element's Image Overlay Transparency", 'portfolio-gallery' ); ?></label>
                                                                <div class="slider-container">
                                                                    <input name="params[portfolio_gallery_ht_view7_element_overlay_opacity]"
                                                                           id="portfolio_gallery_ht_view7_element_overlay_opacity"
                                                                           data-slider-highlight="true"
                                                                           data-slider-values="0,10,20,30,40,50,60,70,80,90,100" type="text"
                                                                           data-slider="true"
                                                                           value="<?php echo $portfolio_gallery_get_option['portfolio_gallery_ht_view7_element_overlay_opacity']; ?>"/>
                                                                    <span><?php echo $portfolio_gallery_get_option['portfolio_gallery_ht_view7_element_overlay_opacity']; ?>
                                                                        %</span>
                                                                </div>
                                                            </div>
                                                            <div>
                                                                <label
                                                                        for="portfolio_gallery_ht_view7_hover_effect_delay"><?php echo __( 'Element  Hover Effect Delay', 'portfolio-gallery' ); ?></label>
                                                                <input type="text" name="params[portfolio_gallery_ht_view7_hover_effect_delay]"
                                                                       id="portfolio_gallery_ht_view7_hover_effect_delay"
                                                                       value="<?php echo $portfolio_gallery_get_option['portfolio_gallery_ht_view7_hover_effect_delay']; ?>"
                                                                       class="text"/>
                                                                <span>ms</span>
                                                            </div>
                                                            <div class="has-background">
                                                                <label
                                                                        for="portfolio_gallery_ht_view7_hover_effect_inverse"><?php echo __( 'Element Hover Effect Inverse', 'portfolio-gallery' ); ?></label>
                                                                <input type="hidden" value="false"
                                                                       name="params[portfolio_gallery_ht_view7_hover_effect_inverse]"/>
                                                                <input type="checkbox"
                                                                       id="portfolio_gallery_ht_view7_hover_effect_inverse" <?php if ( $portfolio_gallery_get_option['portfolio_gallery_ht_view7_hover_effect_inverse'] == 'true' ) {
                                                                    echo 'checked="checked"';
                                                                } ?> name="params[portfolio_gallery_ht_view7_hover_effect_inverse]"
                                                                       value="true"/>
                                                            </div>
                                                        </div>
                                                        <div>
                                                            <h3><?php echo __( 'Expand Options', 'portfolio-gallery' ); ?></h3>
                                                            <div class="has-background">
                                                                <label
                                                                        for="portfolio_gallery_ht_view7_expanding_speed"><?php echo __( 'Expending Speed', 'portfolio-gallery' ); ?></label>
                                                                <input type="text" name="params[portfolio_gallery_ht_view7_expanding_speed]"
                                                                       id="portfolio_gallery_ht_view7_expanding_speed"
                                                                       value="<?php echo $portfolio_gallery_get_option['portfolio_gallery_ht_view7_expanding_speed']; ?>"
                                                                       class="text"/>
                                                                <span>ms</span>
                                                            </div>
                                                            <div >
                                                                <label
                                                                        for="portfolio_gallery_ht_view7_expand_block_height"><?php echo __( 'Expend Block Height', 'portfolio-gallery' ); ?></label>
                                                                <input type="text" name="params[portfolio_gallery_ht_view7_expand_block_height]"
                                                                       id="portfolio_gallery_ht_view7_expand_block_height"
                                                                       value="<?php echo $portfolio_gallery_get_option['portfolio_gallery_ht_view7_expand_block_height']; ?>"
                                                                       class="text"/>
                                                                <span>px</span>
                                                            </div>
                                                            <div class="has-background">
                                                                <label
                                                                        for="portfolio_gallery_ht_view7_expand_width"><?php echo __( 'Expend Block Width', 'portfolio-gallery' ); ?></label>
                                                                <input type="text" name="params[portfolio_gallery_ht_view7_expand_width]"
                                                                       id="portfolio_gallery_ht_view7_expand_width"
                                                                       value="<?php echo $portfolio_gallery_get_option['portfolio_gallery_ht_view7_expand_width']; ?>"
                                                                       class="text"/>
                                                                <span>%</span>
                                                            </div>
                                                            <div>
                                                                <label
                                                                        for="portfolio_gallery_ht_view7_expand_block_opacity"><?php echo __( "Expand Block Opacity", 'portfolio-gallery' ); ?></label>
                                                                <div class="slider-container">
                                                                    <input name="params[portfolio_gallery_ht_view7_expand_block_opacity]"
                                                                           id="portfolio_gallery_ht_view7_expand_block_opacity"
                                                                           data-slider-highlight="true"
                                                                           data-slider-values="0,10,20,30,40,50,60,70,80,90,100" type="text"
                                                                           data-slider="true"
                                                                           value="<?php echo $portfolio_gallery_get_option['portfolio_gallery_ht_view7_expand_block_opacity']; ?>"/>
                                                                    <span><?php echo $portfolio_gallery_get_option['portfolio_gallery_ht_view7_expand_block_opacity']; ?>
                                                                        %</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div>
                                                            <h3><?php echo __( 'Expand Title', 'portfolio-gallery' ); ?></h3>
                                                            <div class="has-background">
                                                                <label
                                                                        for="portfolio_gallery_ht_view7_expand_block_title_color"><?php echo __( 'Expand Title Color', 'portfolio-gallery' ); ?></label>
                                                                <input name="params[portfolio_gallery_ht_view7_expand_block_title_color]"
                                                                       type="text" class="color"
                                                                       id="portfolio_gallery_ht_view7_expand_block_title_color"
                                                                       value="#<?php echo $portfolio_gallery_get_option['portfolio_gallery_ht_view7_expand_block_title_color']; ?>"
                                                                       size="10"/>
                                                            </div>
                                                            <div>
                                                                <label
                                                                        for="portfolio_gallery_ht_view7_expand_block_title_font_size"><?php echo __( 'Expand Title Font Size', 'portfolio-gallery' ); ?></label>
                                                                <input type="text"
                                                                       name="params[portfolio_gallery_ht_view7_expand_block_title_font_size]"
                                                                       id="portfolio_gallery_ht_view7_expand_block_title_font_size"
                                                                       value="<?php echo $portfolio_gallery_get_option['portfolio_gallery_ht_view7_expand_block_title_font_size']; ?>"
                                                                       class="text"/>
                                                                <span>px</span>
                                                            </div>
                                                        </div>
                                                        <div>
                                                            <h3><?php echo __( 'Category Options', 'portfolio-gallery' ); ?></h3>
                                                            <div class="has-background">
                                                                <label
                                                                        for="portfolio_gallery_ht_view7_filter_all_text"><?php echo __( 'Filter All Button Text', 'portfolio-gallery' ); ?></label>
                                                                <input type="text" name="params[portfolio_gallery_ht_view7_filter_all_text]"
                                                                       id="portfolio_gallery_ht_view7_filter_all_text"
                                                                       value="<?php echo esc_attr( $portfolio_gallery_get_option['portfolio_gallery_ht_view7_filter_all_text'] ); ?>"
                                                                       class="text"/>
                                                            </div>
                                                            <div>
                                                                <label
                                                                        for="portfolio_gallery_ht_view7_show_all_filter_button"><?php echo __( 'Show Filter All Button', 'portfolio-gallery' ); ?></label>
                                                                <input type="hidden" value="off"
                                                                       name="params[portfolio_gallery_ht_view7_show_all_filter_button]">
                                                                <input type="checkbox"
                                                                       id="portfolio_gallery_ht_view7_show_all_filter_button" <?php if ( $portfolio_gallery_get_option['portfolio_gallery_ht_view7_show_all_filter_button'] == 'on' ) {
                                                                    echo 'checked="checked"';
                                                                } ?> name="params[portfolio_gallery_ht_view7_show_all_filter_button]"
                                                                       value="on"/>
                                                            </div>
                                                            <div>
                                                                <label
                                                                        for="portfolio_gallery_ht_view7_filter_effect"><?php echo __( "Filter Effect", 'portfolio-gallery' ); ?></label>
                                                                <select id="portfolio_gallery_ht_view7_filter_effect"
                                                                        name="params[portfolio_gallery_ht_view7_filter_effect]">
                                                                    <option
                                                                            value="popup" <?php selected( $portfolio_gallery_get_option['portfolio_gallery_ht_view7_filter_effect'], 'popup' ); ?> ><?php echo __( 'Popup', 'portfolio-gallery' ); ?></option>
                                                                    <option
                                                                            value="moveup" <?php selected( $portfolio_gallery_get_option['portfolio_gallery_ht_view7_filter_effect'], 'moveup' ); ?> ><?php echo __( 'Moveup', 'portfolio-gallery' ); ?></option>
                                                                    <option
                                                                            value="scaleup" <?php selected( $portfolio_gallery_get_option['portfolio_gallery_ht_view7_filter_effect'], 'scaleup' ); ?> ><?php echo __( 'Scaleup', 'portfolio-gallery' ); ?></option>
                                                                    <option
                                                                            value="fallperspective" <?php selected( $portfolio_gallery_get_option['portfolio_gallery_ht_view7_filter_effect'], 'fallperspective' ); ?> ><?php echo __( 'Fallperspective', 'portfolio-gallery' ); ?></option>
                                                                    <option
                                                                            value="fly" <?php selected( $portfolio_gallery_get_option['portfolio_gallery_ht_view7_filter_effect'], 'fly' ); ?> ><?php echo __( 'Fly', 'portfolio-gallery' ); ?></option>
                                                                    <option
                                                                            value="flip" <?php selected( $portfolio_gallery_get_option['portfolio_gallery_ht_view7_filter_effect'], 'flip' ); ?> ><?php echo __( 'Flip', 'portfolio-gallery' ); ?></option>
                                                                    <option
                                                                            value="helix" <?php selected( $portfolio_gallery_get_option['portfolio_gallery_ht_view7_filter_effect'], 'helix' ); ?> ><?php echo __( 'Helix', 'portfolio-gallery' ); ?></option>
                                                                </select>
                                                            </div>
                                                            <div class="has-background">
                                                                <label
                                                                        for="portfolio_gallery_ht_view7_filter_button_font_color"><?php echo __( 'Filter Button Font Color', 'portfolio-gallery' ); ?></label>
                                                                <input
                                                                        name="params[portfolio_gallery_ht_view7_filter_button_font_color]"
                                                                        type="text" class="color"
                                                                        id="portfolio_gallery_ht_view7_filter_button_font_color"
                                                                        value="#<?php echo $portfolio_gallery_get_option['portfolio_gallery_ht_view7_filter_button_font_color']; ?>"
                                                                        size="10"/>
                                                            </div>
                                                            <div>
                                                                <label
                                                                        for="portfolio_gallery_ht_view7_filter_button_font_hover_color"><?php echo __( 'Filter Button Font Hover Color', 'portfolio-gallery' ); ?></label>
                                                                <input
                                                                        name="params[portfolio_gallery_ht_view7_filter_button_font_hover_color]"
                                                                        type="text" class="color"
                                                                        id="portfolio_gallery_ht_view7_filter_button_font_hover_color"
                                                                        value="#<?php echo $portfolio_gallery_get_option['portfolio_gallery_ht_view7_filter_button_font_hover_color']; ?>"
                                                                        size="10"/>
                                                            </div>
                                                            <div class="has-background">
                                                                <label
                                                                        for="portfolio_gallery_ht_view7_filter_button_background_color"><?php echo __( 'Filter Button Color', 'portfolio-gallery' ); ?></label>
                                                                <input
                                                                        name="params[portfolio_gallery_ht_view7_filter_button_background_color]"
                                                                        type="text" class="color"
                                                                        id="portfolio_gallery_ht_view7_filter_button_background_color"
                                                                        value="#<?php echo $portfolio_gallery_get_option['portfolio_gallery_ht_view7_filter_button_background_color']; ?>"
                                                                        size="10"/>
                                                            </div>
                                                            <div>
                                                                <label
                                                                        for="portfolio_gallery_ht_view7_filter_button_background_hover_color"><?php echo __( 'Filter Button Hover Color', 'portfolio-gallery' ); ?></label>
                                                                <input
                                                                        name="params[portfolio_gallery_ht_view7_filter_button_background_hover_color]"
                                                                        type="text" class="color"
                                                                        id="portfolio_gallery_ht_view7_filter_button_background_hover_color"
                                                                        value="#<?php echo $portfolio_gallery_get_option['portfolio_gallery_ht_view7_filter_button_background_hover_color']; ?>"
                                                                        size="10"/>
                                                            </div>
                                                            <div class="has-background">
                                                                <label
                                                                        for="portfolio_gallery_ht_view7_filter_button_bg_color_active"><?php echo __( 'Filter Button Active Color', 'portfolio-gallery' ); ?></label>
                                                                <input
                                                                        name="params[portfolio_gallery_ht_view7_filter_button_bg_color_active]"
                                                                        type="text" class="color"
                                                                        id="portfolio_gallery_ht_view7_filter_button_bg_color_active"
                                                                        value="#<?php echo $portfolio_gallery_get_option['portfolio_gallery_ht_view7_filter_button_bg_color_active']; ?>"
                                                                        size="10"/>
                                                            </div>
                                                            <div>
                                                                <label
                                                                        for="portfolio_gallery_ht_view7_filter_button_padding"><?php echo __( 'Filter Button Padding', 'portfolio-gallery' ); ?></label>
                                                                <input type="text"
                                                                       name="params[portfolio_gallery_ht_view7_filter_button_padding]"
                                                                       id="portfolio_gallery_ht_view7_filter_button_padding"
                                                                       value="<?php echo $portfolio_gallery_get_option['portfolio_gallery_ht_view7_filter_button_padding']; ?>"
                                                                       class="text"/>
                                                                <span>px</span>
                                                            </div>
                                                            <div class="has-background">
                                                                <label
                                                                        for="portfolio_gallery_ht_view7_filter_button_font_active_color"><?php echo __( 'Filter Button Font Active Color', 'portfolio-gallery' ); ?></label>
                                                                <input
                                                                        name="params[portfolio_gallery_ht_view7_filter_button_font_active_color]"
                                                                        type="text" class="color"
                                                                        id="portfolio_gallery_ht_view7_filter_button_font_active_color"
                                                                        value="#<?php echo $portfolio_gallery_get_option['portfolio_gallery_ht_view7_filter_button_font_active_color']; ?>"
                                                                        size="10"/>
                                                            </div>
                                                            <div>
                                                                <label
                                                                        for="portfolio_gallery_ht_view7_filter_button_radius"><?php echo __( 'Filter Button Border Radius', 'portfolio-gallery' ); ?></label>
                                                                <input type="text"
                                                                       name="params[portfolio_gallery_ht_view7_filter_button_radius]"
                                                                       id="portfolio_gallery_ht_view7_filter_button_radius"
                                                                       value="<?php echo $portfolio_gallery_get_option['portfolio_gallery_ht_view7_filter_button_radius']; ?>"
                                                                       class="text"/>
                                                                <span>px</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="option-single-column">
                                                        <div>
                                                            <h3><?php _e( 'Element Title', 'portfolio-gallery' ); ?></h3>
                                                            <div class="has-background">
                                                                <label
                                                                        for="portfolio_gallery_ht_view7_element_title_font_size"><?php echo __( 'Title Font Size', 'portfolio-gallery' ); ?></label>
                                                                <input type="text"
                                                                       name="params[portfolio_gallery_ht_view7_element_title_font_size]"
                                                                       id="portfolio_gallery_ht_view7_element_title_font_size"
                                                                       value="<?php echo $portfolio_gallery_get_option['portfolio_gallery_ht_view7_element_title_font_size']; ?>"
                                                                       class="text"/>
                                                                <span>px</span>
                                                            </div>
                                                            <div>
                                                                <label
                                                                        for="portfolio_gallery_ht_view7_element_title_font_color"><?php echo __( 'Title Font Color', 'portfolio-gallery' ); ?></label>
                                                                <input name="params[portfolio_gallery_ht_view7_element_title_font_color]"
                                                                       type="text" class="color" id="ht_view0_title_font_color"
                                                                       value="#<?php echo $portfolio_gallery_get_option['portfolio_gallery_ht_view7_element_title_font_color']; ?>"
                                                                       size="10"/>
                                                            </div>
                                                            <div class="has-background">
                                                                <label
                                                                        for="portfolio_gallery_ht_view7_element_title_align"><?php echo __( "Title Alignment", 'portfolio-gallery' ); ?></label>
                                                                <select id="portfolio_gallery_ht_view7_element_title_align"
                                                                        name="params[portfolio_gallery_ht_view7_element_title_align]">
                                                                    <option <?php if ( $portfolio_gallery_get_option['portfolio_gallery_ht_view7_element_title_align'] == 'left' ) {
                                                                        echo 'selected="selected"';
                                                                    } ?>
                                                                            value="left"><?php echo __( 'Left', 'portfolio-gallery' ); ?></option>
                                                                    <option <?php if ( $portfolio_gallery_get_option['portfolio_gallery_ht_view7_element_title_align'] == 'center' ) {
                                                                        echo 'selected="selected"';
                                                                    } ?>
                                                                            value="center"><?php echo __( 'Center', 'portfolio-gallery' ); ?></option>
                                                                    <option <?php if ( $portfolio_gallery_get_option['portfolio_gallery_ht_view7_element_title_align'] == 'right' ) {
                                                                        echo 'selected="selected"';
                                                                    } ?>
                                                                            value="right"><?php echo __( 'Right', 'portfolio-gallery' ); ?></option>
                                                                </select>
                                                            </div>
                                                            <div>
                                                                <label
                                                                        for="portfolio_gallery_ht_view7_element_title_border_width"><?php echo __( 'Element Title Bottom Border Width', 'portfolio-gallery' ); ?></label>
                                                                <input type="text"
                                                                       name="params[portfolio_gallery_ht_view7_element_title_border_width]"
                                                                       id="portfolio_gallery_ht_view7_element_title_border_width"
                                                                       value="<?php echo $portfolio_gallery_get_option['portfolio_gallery_ht_view7_element_title_border_width']; ?>"
                                                                       class="text"/>
                                                                <span>px</span>
                                                            </div>
                                                            <div class="has-background">
                                                                <label
                                                                        for="portfolio_gallery_ht_view7_element_title_border_color"><?php echo __( 'Element Title Bottom Border Color', 'portfolio-gallery' ); ?></label>
                                                                <input name="params[portfolio_gallery_ht_view7_element_title_border_color]"
                                                                       type="text" class="color" id="ht_view0_title_font_color"
                                                                       value="#<?php echo $portfolio_gallery_get_option['portfolio_gallery_ht_view7_element_title_border_color']; ?>"
                                                                       size="10"/>
                                                            </div>
                                                            <div>
                                                                <label
                                                                        for="portfolio_gallery_ht_view7_element_title_margin_top"><?php echo __( 'Element Title Margin Top', 'portfolio-gallery' ); ?></label>
                                                                <input type="text"
                                                                       name="params[portfolio_gallery_ht_view7_element_title_margin_top]"
                                                                       id="portfolio_gallery_ht_view7_element_title_margin_top"
                                                                       value="<?php echo $portfolio_gallery_get_option['portfolio_gallery_ht_view7_element_title_margin_top']; ?>"
                                                                       class="text"/>
                                                                <span>px</span>
                                                            </div>
                                                            <div class="has-background">
                                                                <label
                                                                        for="portfolio_gallery_ht_view7_element_title_padding_top_bottom"><?php echo __( 'Element Title Top Bottom Padding', 'portfolio-gallery' ); ?></label>
                                                                <input type="text"
                                                                       name="params[portfolio_gallery_ht_view7_element_title_padding_top_bottom]"
                                                                       id="portfolio_gallery_ht_view7_element_title_padding_top_bottom"
                                                                       value="<?php echo $portfolio_gallery_get_option['portfolio_gallery_ht_view7_element_title_padding_top_bottom']; ?>"
                                                                       class="text"/>
                                                                <span>px</span>
                                                            </div>
                                                        </div>
                                                        <div >
                                                            <h3><?php echo __( 'Expand Description', 'portfolio-gallery' ); ?></h3>
                                                            <div class="has-background">
                                                                <label
                                                                        for="ht_view0_description_font_size"><?php echo __( 'Expand Description Font Size', 'portfolio-gallery' ); ?></label>
                                                                <input type="text"
                                                                       name="params[portfolio_gallery_ht_view7_expand_block_description_font_size]"
                                                                       id="portfolio_gallery_ht_view7_expand_block_description_font_size"
                                                                       value="<?php echo $portfolio_gallery_get_option['portfolio_gallery_ht_view7_expand_block_description_font_size']; ?>"
                                                                       class="text"/>
                                                                <span>px</span>
                                                            </div>
                                                            <div>
                                                                <label
                                                                        for="portfolio_gallery_ht_view7_expand_block_description_font_color"><?php echo __( 'Description Font Color', 'portfolio-gallery' ); ?></label>
                                                                <input
                                                                        name="params[portfolio_gallery_ht_view7_expand_block_description_font_color]"
                                                                        type="text" class="color"
                                                                        id="portfolio_gallery_ht_view7_expand_block_description_font_color"
                                                                        value="#<?php echo $portfolio_gallery_get_option['portfolio_gallery_ht_view7_expand_block_description_font_color']; ?>"
                                                                        size="10"/>
                                                            </div>
                                                            <div class="has-background">
                                                                <label
                                                                        for="portfolio_gallery_ht_view7_expand_block_background_color"><?php echo __( 'Expand Block Color', 'portfolio-gallery' ); ?></label>
                                                                <input name="params[portfolio_gallery_ht_view7_expand_block_background_color]"
                                                                       type="text" class="color"
                                                                       id="portfolio_gallery_ht_view7_expand_block_background_color"
                                                                       value="#<?php echo $portfolio_gallery_get_option['portfolio_gallery_ht_view7_expand_block_background_color']; ?>"
                                                                       size="10"/>
                                                            </div>
                                                            <div>
                                                                <label
                                                                        for="portfolio_gallery_ht_view7_expand_block_description_text_align"><?php echo __( "Expand Description Text Alignment", 'portfolio-gallery' ); ?></label>
                                                                <select id="portfolio_gallery_ht_view7_expand_block_description_text_align"
                                                                        name="params[portfolio_gallery_ht_view7_expand_block_description_text_align]">
                                                                    <option <?php if ( $portfolio_gallery_get_option['portfolio_gallery_ht_view7_expand_block_description_text_align'] == 'left' ) {
                                                                        echo 'selected="selected"';
                                                                    } ?>
                                                                            value="left"><?php echo __( 'Left', 'portfolio-gallery' ); ?></option>
                                                                    <option <?php if ( $portfolio_gallery_get_option['portfolio_gallery_ht_view7_expand_block_description_text_align'] == 'center' ) {
                                                                        echo 'selected="selected"';
                                                                    } ?>
                                                                            value="center"><?php echo __( 'Center', 'portfolio-gallery' ); ?></option>
                                                                    <option <?php if ( $portfolio_gallery_get_option['portfolio_gallery_ht_view7_expand_block_description_text_align'] == 'right' ) {
                                                                        echo 'selected="selected"';
                                                                    } ?>
                                                                            value="right"><?php echo __( 'Right', 'portfolio-gallery' ); ?></option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div>
                                                            <h3><?php echo __( 'Expand  Thumbnails', 'portfolio-gallery' ); ?></h3>
                                                            <div class="has-background">
                                                                <label
                                                                        for="portfolio_gallery_ht_view7_thumbnail_width"><?php echo __( 'Thumbnail Width', 'portfolio-gallery' ); ?></label>
                                                                <input type="text"
                                                                       name="params[portfolio_gallery_ht_view7_thumbnail_width]"
                                                                       id="portfolio_gallery_ht_view7_thumbnail_width"
                                                                       value="<?php echo $portfolio_gallery_get_option['portfolio_gallery_ht_view7_thumbnail_width']; ?>"
                                                                       class="text"/>
                                                                <span>px</span>
                                                            </div>
                                                            <div>
                                                                <label
                                                                        for="portfolio_gallery_ht_view7_thumbnail_height"><?php echo __( 'Thumbnail Height', 'portfolio-gallery' ); ?></label>
                                                                <input type="text"
                                                                       name="params[portfolio_gallery_ht_view7_thumbnail_height]"
                                                                       id="portfolio_gallery_ht_view7_thumbnail_height"
                                                                       value="<?php echo $portfolio_gallery_get_option['portfolio_gallery_ht_view7_thumbnail_height']; ?>"
                                                                       class="text"/>
                                                                <span>px</span>
                                                            </div>
                                                            <div class="has-background">
                                                                <label
                                                                        for="portfolio_gallery_ht_view7_thumbnail_bg_color"><?php echo __( 'Thumbnail Block Color', 'portfolio-gallery' ); ?></label>
                                                                <input name="params[portfolio_gallery_ht_view7_thumbnail_bg_color]"
                                                                       type="text" class="color"
                                                                       id="portfolio_gallery_ht_view7_thumbnail_bg_color"
                                                                       value="#<?php echo $portfolio_gallery_get_option['portfolio_gallery_ht_view7_thumbnail_bg_color']; ?>"
                                                                       size="10"/>
                                                            </div>
                                                            <div>
                                                                <label
                                                                        for="portfolio_gallery_ht_view7_thumbnail_block_box_shadow"><?php echo __( 'Thumbnail Block Box-Shadow', 'portfolio-gallery' ); ?></label>
                                                                <input type="hidden" value="off"
                                                                       name="params[portfolio_gallery_ht_view7_thumbnail_block_box_shadow]">
                                                                <input type="checkbox"
                                                                       id="portfolio_gallery_ht_view7_thumbnail_block_box_shadow" <?php if ( $portfolio_gallery_get_option['portfolio_gallery_ht_view7_thumbnail_block_box_shadow'] == 'on' ) {
                                                                    echo 'checked="checked"';
                                                                } ?> name="params[portfolio_gallery_ht_view7_thumbnail_block_box_shadow]"
                                                                       value="on"/>
                                                            </div>
                                                        </div>
                                                        <div>
                                                            <h3><?php echo __( 'Link Button', 'portfolio-gallery' ); ?></h3>
                                                            <div class="has-background">
                                                                <label
                                                                        for="portfolio_gallery_ht_view7_expand_block_button_text"><?php echo __( 'Link Button Text', 'portfolio-gallery' ); ?></label>
                                                                <input type="text"
                                                                       name="params[portfolio_gallery_ht_view7_expand_block_button_text]"
                                                                       id="portfolio_gallery_ht_view7_expand_block_button_text"
                                                                       value="<?php echo esc_attr( $portfolio_gallery_get_option['portfolio_gallery_ht_view7_expand_block_button_text'] ); ?>"
                                                                       class="text"/>
                                                            </div>
                                                            <div>
                                                                <label
                                                                        for="portfolio_gallery_ht_view7_expand_block_button_font_size"><?php echo __( 'Link Button Font Size', 'portfolio-gallery' ); ?></label>
                                                                <input type="text"
                                                                       name="params[portfolio_gallery_ht_view7_expand_block_button_font_size]"
                                                                       id="portfolio_gallery_ht_view7_expand_block_button_font_size"
                                                                       value="<?php echo $portfolio_gallery_get_option['portfolio_gallery_ht_view7_expand_block_button_font_size']; ?>"
                                                                       class="text"/>
                                                                <span>px</span>
                                                            </div>
                                                            <div class="has-background">
                                                                <label
                                                                        for="portfolio_gallery_ht_view7_expand_block_button_text_color"><?php echo __( 'Link Button Font Color', 'portfolio-gallery' ); ?></label>
                                                                <input name="params[portfolio_gallery_ht_view7_expand_block_button_text_color]"
                                                                       type="text" class="color"
                                                                       id="portfolio_gallery_ht_view7_expand_block_button_text_color"
                                                                       value="#<?php echo $portfolio_gallery_get_option['portfolio_gallery_ht_view7_expand_block_button_text_color']; ?>"
                                                                       size="10"/>
                                                            </div>
                                                            <div>
                                                                <label
                                                                        for="portfolio_gallery_ht_view7_expand_block_description_font_hover_color"><?php echo __( 'Link Button Font Hover Color', 'portfolio-gallery' ); ?></label>
                                                                <input
                                                                        name="params[portfolio_gallery_ht_view7_expand_block_description_font_hover_color]"
                                                                        type="text" class="color"
                                                                        id="portfolio_gallery_ht_view7_expand_block_description_font_hover_color"
                                                                        value="#<?php echo $portfolio_gallery_get_option['portfolio_gallery_ht_view7_expand_block_description_font_hover_color']; ?>"
                                                                        size="10"/>
                                                            </div>
                                                            <div class="has-background">
                                                                <label
                                                                        for="portfolio_gallery_ht_view7_expand_block_button_background_color"><?php echo __( 'Link Button Background Color', 'portfolio-gallery' ); ?></label>
                                                                <input
                                                                        name="params[portfolio_gallery_ht_view7_expand_block_button_background_color]"
                                                                        type="text" class="color"
                                                                        id="portfolio_gallery_ht_view7_expand_block_button_background_color"
                                                                        value="#<?php echo $portfolio_gallery_get_option['portfolio_gallery_ht_view7_expand_block_button_background_color']; ?>"
                                                                        size="10"/>
                                                            </div>
                                                            <div>
                                                                <label
                                                                        for="portfolio_gallery_ht_view7_expand_block_button_background_hover_color"><?php echo __( 'Link Button Background Hover Color', 'portfolio-gallery' ); ?></label>
                                                                <input
                                                                        name="params[portfolio_gallery_ht_view7_expand_block_button_background_hover_color]"
                                                                        type="text" class="color"
                                                                        id="portfolio_gallery_ht_view7_expand_block_button_background_hover_color"
                                                                        value="#<?php echo $portfolio_gallery_get_option['portfolio_gallery_ht_view7_expand_block_button_background_hover_color']; ?>"
                                                                        size="10"/>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>

                                            <div id="post-body-footer">
                                                <a onclick="document.getElementById('adminForm').submit()"
                                                   class="save-portfolio-options button-primary"><?php echo __( 'Save', 'portfolio-gallery' ); ?></a>
                                                <div class="clear"></div>
                                            </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                </div>
                <input type="hidden" name="option" value=""/>
                <input type="hidden" name="task" value=""/>
                <input type="hidden" name="controller" value="options"/>
                <input type="hidden" name="op_type" value="styles"/>
                <input type="hidden" name="boxchecked" value="0"/>