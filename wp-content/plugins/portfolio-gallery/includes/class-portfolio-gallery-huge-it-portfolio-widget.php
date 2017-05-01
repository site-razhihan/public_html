<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}
/**
 * Class Huge_It_Portfolio_Widget
 */
class Portfolio_Gallery_Widget extends WP_Widget {

	/**
	 * Huge_It_Portfolio_Widget constructor.
	 */
	public function __construct() {
		parent::__construct(
			'Portfolio_Gallery_Widget',
			'Huge IT Portfolio',
			array( 'description' => __( 'Huge IT Portfolio', 'huge_it_portfolio' ), )
		);
	}

	/**
	 * Print out the Widget by calling shortcode
	 * @param array $args
	 * @param array $instance
	 */
	public function widget( $args, $instance ) {
		if ( isset( $instance['portfolio_id'] ) ) {
			$portfolio_id = $instance['portfolio_id'];

			$title = apply_filters( 'widget_title', $instance['title'] );

			echo $args['before_widget'];
			if ( ! empty( $title ) ) {
				echo $args['before_title'] . $title .$args['after_title'];
			}

			echo do_shortcode( "[huge_it_portfolio id={$portfolio_id}]" );
			echo $args['after_widget'];
		}
	}

	/**
	 * Update options
	 * @param array $new_instance
	 * @param array $old_instance
	 *
	 * @return array
	 */
	public function update( $new_instance, $old_instance ) {
		$instance                 = array();
		$instance['portfolio_id'] = strip_tags( $new_instance['portfolio_id'] );
		$instance['title']        = strip_tags( $new_instance['title'] );

		return $instance;
	}

	/**
	 * Print out the widget's form HTML
	 *
	 * @param array $instance
	 *
	 * @return string|void
	 */
	public function form( $instance ) {
		$selected_portfolio = 0;
		$title              = "";
		if ( isset( $instance['title'] ) ) {
			$title = $instance['title'];
		}
		if (isset($instance['portfolio_id'])) {
			$selected_portfolio = $instance['portfolio_id'];
		}

		?>
		<p>
		<p>
			<label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php _e( 'Title:' ); ?></label>
			<input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>"
			       name="<?php echo $this->get_field_name( 'title' ); ?>" type="text"
			       value="<?php echo esc_attr( $title ); ?>"/>
		</p>
		<label
			for="<?php echo $this->get_field_id( 'portfolio_id' ); ?>"><?php _e( 'Select portfolio:', 'huge_it_portfolio' ); ?></label>
		<select id="<?php echo $this->get_field_id( 'portfolio_id' ); ?>"
		        name="<?php echo $this->get_field_name( 'portfolio_id' ); ?>">
			<?php
			global $wpdb;
			$query     = "SELECT * FROM " . $wpdb->prefix . "huge_itportfolio_portfolios ";
			$rowwidget = $wpdb->get_results( $query );
			foreach ( $rowwidget as $rowwidgetecho ) { ?>
				<option <?php selected( $selected_portfolio, $rowwidgetecho->id, true); ?> value="<?php echo $rowwidgetecho->id; ?>"><?php echo $rowwidgetecho->name; ?></option>
			<?php } ?>
		</select>
		</p>
		<?php
	}
}