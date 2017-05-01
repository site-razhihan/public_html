<?php
if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly
}
?>

<div id="huge_it_portfolio" style="display:none;" class="post-content">
	<h3>Select Huge IT Portfolio Gallery to insert into post</h3>
	<?php
	global $wpdb;
	$query        = "SELECT * FROM " . $wpdb->prefix . "huge_itportfolio_portfolios";
	$firstrow     = $wpdb->get_row( $query );
	$container_id = 'huge_it_portfolio';
	if ( isset( $_POST["hugeit_portfolio_id"] ) ) {
		$id = absint( $_POST["hugeit_portfolio_id"] );
	} else {
		$id = $firstrow->id;
	}
	$query                        = "SELECT * FROM " . $wpdb->prefix . "huge_itportfolio_portfolios order by id ASC";
	$shortcodeportfolios          = $wpdb->get_results( $query );
	$query                        = $wpdb->prepare( "SELECT * FROM " . $wpdb->prefix . "huge_itportfolio_portfolios WHERE id= %d", $id );
	$row                          = $wpdb->get_row( $query );
	$shortecode_change_view_nonce = wp_create_nonce( 'shortecode_change_view_nonce' );

	if ( count( $shortcodeportfolios ) ) {
		echo "<select id='huge_it_portfolio-select'  name='hugeit_portfolio_id' change-view-nonce='" . $shortecode_change_view_nonce . "'>";
		foreach ( $shortcodeportfolios as $shortcodeportfolio ) {
			echo "<option value='" . $shortcodeportfolio->id . "'>" . $shortcodeportfolio->name . "</option>";
		}
		echo "</select>";
		echo "<button class='button primary' id='hugeitportfolioinsert'>".__('Insert portfolio gallery','portfolio-gallery')."</button>";
	} else {
		echo "No slideshows found";
	}
	?>
	<!--------------------------------Option's HTML-------------------------------->
	<h3><?php _e('Current Portfolio Options','portfolio-gallery'); ?></h3>
	<ul id="portfolio-unique-options-list">
		<li style="display:none;">
			<label for="sl_width"><?php echo __( 'The requested action is not valid.', 'portfolio-gallery' ); ?></label>
			<input type="text" name="sl_width" id="sl_width" value="1111" class="text_area"/>
		</li>
		<li style="display:none;">
			<label for="sl_height"><?php echo __( 'Height', 'portfolio-gallery' ); ?></label>
			<input type="text" name="sl_height" id="sl_height" value="<?php echo esc_attr( $row->sl_height ); ?>"
			       class="text_area"/>
		</li>
		<li>
			<label for="portfolio_effects_list"><?php echo __( 'Select The View', 'portfolio-gallery' ); ?></label>
			<select name="portfolio_effects_list" id="portfolio_effects_list">
				<option <?php if ( $row->portfolio_list_effects_s == '0' ) {
					echo 'selected';
				} ?> value="0"><?php echo __( 'Blocks Toggle Up/Down', 'portfolio-gallery' ); ?></option>
				<option <?php if ( $row->portfolio_list_effects_s == '1' ) {
					echo 'selected';
				} ?> value="1"><?php echo __( 'Full-Height Blocks', 'portfolio-gallery' ); ?></option>
				<option <?php if ( $row->portfolio_list_effects_s == '2' ) {
					echo 'selected';
				} ?> value="2"><?php echo __( 'Gallery/Content-Popup', 'portfolio-gallery' ); ?></option>
				<option <?php if ( $row->portfolio_list_effects_s == '3' ) {
					echo 'selected';
				} ?> value="3"><?php echo __( 'Full-Width Blocks', 'portfolio-gallery' ); ?></option>
				<option <?php if ( $row->portfolio_list_effects_s == '4' ) {
					echo 'selected';
				} ?> value="4"><?php echo __( 'FAQ Toggle Up/Down', 'portfolio-gallery' ); ?></option>
				<option <?php if ( $row->portfolio_list_effects_s == '5' ) {
					echo 'selected';
				} ?> value="5"><?php echo __( 'Content Slider', 'portfolio-gallery' ); ?></option>
				<option <?php if ( $row->portfolio_list_effects_s == '6' ) {
					echo 'selected';
				} ?> value="6"><?php echo __( 'Lightbox-Gallery', 'portfolio-gallery' ); ?></option>
				<option <?php if ( $row->portfolio_list_effects_s == '7' ) {
					echo 'selected';
				} ?> value="7"><?php echo __( 'Elastic Grid', 'portfolio-gallery' ); ?></option>
			</select>
		</li>
		<li class="allowIsotope">
			<label for="ht_show_sorting"><?php echo __( 'Show Sorting Buttons', 'portfolio-gallery' ); ?></label>
			<input type="checkbox" id="ht_show_sorting" <?php if ( $row->ht_show_sorting == 'on' ) {
				echo 'checked="checked"';
			} ?> name="ht_show_sorting" value="<?php echo $row->ht_show_sorting; ?>"/>
		</li>
		<li style="display:none;" class="for-content-slider">
			<label for="sl_pausetime"><?php echo __( 'Pause time', 'portfolio-gallery' ); ?></label>
			<input type="text" name="sl_pausetime" id="sl_pausetime"
			       value="<?php echo esc_attr( $row->description ); ?>"
			       class="text_area"/>
		</li>
		<li style="display:none;" class="for-content-slider">
			<label for="sl_changespeed"><?php echo __( 'Change speed', 'portfolio-gallery' ); ?></label>
			<input type="text" name="sl_changespeed" id="sl_changespeed" value="<?php echo esc_attr( $row->param ); ?>"
			       class="text_area"/>
		<li style="display:none;margin-top:10px" class="for-content-slider">
			<label for="auto_slide_on"><?php echo __( 'Autoslide ', 'portfolio-gallery' ); ?></label>
			<input type="checkbox" name="pause_on_hover" value="<?php echo esc_attr( $row->pause_on_hover ); ?>"
			       id="auto_slide_on" <?php if ( $row->pause_on_hover == 'on' ) {
				echo 'checked="checked"';
			} ?> />
		</li>
	</ul>
	<!--------------------------------------------------------------------------------->
</div>