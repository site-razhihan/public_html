<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

class Portfolio_Gallery_Admin {

	/**
	 * Array of pages in admin
	 * @var array
	 */
	public $pages = array();

	/**
	 * Instance of Portfolio_Gallery_General_Options class
	 *
	 * @var Portfolio_Gallery_General_Options
	 */
	public $general_options = null;

	/**
	 * Instance of Portfolio_Gallery_Portfolios class
	 *
	 * @var Portfolio_Gallery_Portfolios
	 */
	public $portfolios = null;

	/**
	 * Instance of Portfolio_Gallery_Lightbox_Options class
	 *
	 * @var Portfolio_Gallery_Lightbox_Options
	 */
	public $lightbox_options = null;

	/**
	 * Instance of Portfolio_Gallery_Featured_Plugins class
	 *
	 * @var Portfolio_Gallery_Featured_Plugins
	 */
	public $featured_plugins = null;

	/**
	 * Instance of Portfolio_Gallery_Featured_Plugins class
	 *
	 * @var Portfolio_Gallery_Featured_Plugins
	 */
	public $licensing = null;

	/**
	 * Portfolio_Gallery_Admin constructor.
	 */
	public function __construct() {
		$this->init();
		add_action( 'admin_menu', array( $this, 'admin_menu' ) );
		add_action( 'wp_loaded', array( $this, 'wp_loaded' ) );
	}

	/**
	 * Initialize Portfolio Gallery's admin
	 */
	protected function init() {
		$this->general_options  = new Portfolio_Gallery_General_Options();
		$this->portfolios       = new Portfolio_Gallery_Portfolios();
		$this->lightbox_options = new Portfolio_Gallery_Lightbox_Options();
		$this->featured_plugins = new Portfolio_Gallery_Featured_Plugins();
		$this->licensing        = new Portfolio_Gallery_Licensing();
	}

	/**
	 * Prints Portfolio Menu
	 */
	public function admin_menu() {
		$this->pages[] = add_menu_page( __( 'Huge-IT Portfolio Gallery', 'portfolio-gallery' ), __( 'Huge-IT Portfolio', 'portfolio-gallery' ), 'delete_pages', 'portfolios_huge_it_portfolio', array(
			Portfolio_Gallery()->admin->portfolios,
			'load_portfolio_page'
		), PORTFOLIO_GALLERY_IMAGES_URL . "/admin_images/huge_it_portfolioLogoHover-for_menu.png" );
		$this->pages[] = add_submenu_page( 'portfolios_huge_it_portfolio', __( 'Portfolios', 'portfolio-gallery' ), __( 'Portfolios', 'portfolio-gallery' ), 'delete_pages', 'portfolios_huge_it_portfolio', array(
			Portfolio_Gallery()->admin->portfolios,
			'load_portfolio_page'
		) );

		$this->pages[] = add_submenu_page( 'portfolios_huge_it_portfolio', __( 'General Options', 'portfolio-gallery' ), __( 'General Options', 'portfolio-gallery' ), 'delete_pages', 'Options_portfolio_styles', array(
			Portfolio_Gallery()->admin->general_options,
			'load_page'
		) );
		$this->pages[] = add_submenu_page( 'portfolios_huge_it_portfolio', __( 'Lightbox Options', 'portfolio-gallery' ), __( 'Lightbox Options', 'portfolio-gallery' ), 'delete_pages', 'Options_portfolio_lightbox_styles', array(
			Portfolio_Gallery()->admin->lightbox_options,
			'load_page'
		) );

		$this->pages[] = add_submenu_page( 'portfolios_huge_it_portfolio', __( 'Featured Plugins', 'portfolio-gallery' ), __( 'Featured Plugins', 'portfolio-gallery' ), 'delete_pages', 'huge_it__portfolio_featured_plugins', array(
			Portfolio_Gallery()->admin->featured_plugins,
			'show_page'
		) );

		$this->pages[] = add_submenu_page( 'portfolios_huge_it_portfolio', __( 'Licensing', 'portfolio-gallery' ), __( 'Licensing', 'portfolio-gallery' ), 'delete_pages', 'huge_it__portfolio_licensing', array(
			Portfolio_Gallery()->admin->licensing,
			'show_page'
		) );
	}


	public function wp_loaded() {
		if ( isset( $_GET['page'] ) && $_GET['page'] == 'portfolios_huge_it_portfolio' ) {
			if ( isset( $_GET['task'] ) ) {
				$task = sanitize_text_field( $_GET['task'] );
				switch ( $task ) {
					case 'add_portfolio':
						$this->add_portfolio();
						break;
					case 'portfolio_video':
						$this->add_video();
						break;
					case 'portfolio_add_thumb_video':
						$this->add_thumb_video();
						break;
					case 'portfolio_video_edit':
						$this->edit_video();
						break;
					case 'remove_portfolio':
						$this->remove_portfolio();
						break;
					case 'duplicate_portfolio_gallery':
						$this->duplicate_portfolio();
						break;
				}
			}

		}
	}

	/**
	 * Add New Portfolio
	 */
	public static function add_portfolio() {
		if ( ! isset( $_REQUEST['hugeit_portfolio_add_portfolio_nonce'] ) || ! wp_verify_nonce( $_REQUEST['hugeit_portfolio_add_portfolio_nonce'], 'add_new_portfolio' ) ) {
			wp_die( 'Security check failure.' );
		}
		global $wpdb;
		$table_name = $wpdb->prefix . "huge_itportfolio_portfolios";
		$wpdb->insert(
			$table_name,
			array(
				'name'                     => 'New portfolio',
				'sl_height'                => '375',
				'sl_width'                 => '600',
				'pause_on_hover'           => 'on',
				'portfolio_list_effects_s' => '2',
				'description'              => '4000',
				'param'                    => '1000',
				'sl_position'              => 'off',
				'ordering'                 => '1',
				'published'                => '300',
				'categories'               => 'My First Category,My Second Category,My Third Category,',
				'ht_show_sorting'          => 'off',
				'ht_show_filtering'        => 'off',
			)
		);

		$apply_portfolio_safe_link = wp_nonce_url(
			'admin.php?page=portfolios_huge_it_portfolio&id=' . $wpdb->insert_id . '&task=apply',
			'apply_portfolio_' . $wpdb->insert_id,
			'hugeit_portfolio_apply_portfolio_nonce'
		);

		$apply_portfolio_safe_link = htmlspecialchars_decode( $apply_portfolio_safe_link );

		header( 'Location: ' . $apply_portfolio_safe_link );
	}

	/**
	 * Insert portfolio video
	 */
	public static function add_video() {
		if ( ! isset( $_GET["id"] ) || ! absint( $_GET['id'] ) || absint( $_GET['id'] ) != $_GET['id'] ) {
			wp_die( '"id" parameter is required to be not negative integer' );
		}
		$id = absint( $_GET["id"] );
		if ( ! isset( $_REQUEST['portfolio_add_video_nonce'] ) || ! wp_verify_nonce( $_REQUEST['portfolio_add_video_nonce'], 'portfolio_add_video_nonce' . $id ) ) {
			wp_die( 'Security check failure' );
		}
		global $wpdb;
		if ( isset( $_POST["huge_it_add_video_input"] ) && $_POST["huge_it_add_video_input"] != '' ) {
			$query        = $wpdb->prepare( "SELECT * FROM " . $wpdb->prefix . "huge_itportfolio_portfolios WHERE id= %d", $id );
			$row          = $wpdb->get_row( $query );
			$query        = $wpdb->prepare( "SELECT * FROM " . $wpdb->prefix . "huge_itportfolio_images where portfolio_id = %d ", $row->id );
			$rowplusorder = $wpdb->get_results( $query );

			foreach ( $rowplusorder as $key => $rowplusorders ) {

				if ( $rowplusorders->ordering == 0 ) {
					$rowplusorderspl = 1;
					$wpdb->query( $wpdb->prepare( "UPDATE " . $wpdb->prefix . "huge_itportfolio_images SET ordering = %d WHERE id = %d ", $rowplusorderspl, $rowplusorders->id ) );
				} else {
					$rowplusorderspl = $rowplusorders->ordering + 1;
					$wpdb->query( $wpdb->prepare( "UPDATE " . $wpdb->prefix . "huge_itportfolio_images SET ordering = %d WHERE id = %d ", $rowplusorderspl, $rowplusorders->id ) );
				}

			}
			$_POST["huge_it_add_video_input"] .= ";";
			$_POST["show_title"]              = sanitize_text_field( $_POST["show_title"] );
			$_POST["show_description"]        = wp_kses_post( $_POST["show_description"] );
			$_POST["huge_it_add_video_input"] = explode( ';', $_POST["huge_it_add_video_input"] );
			$_POST["huge_it_add_video_input"] = array_map( 'esc_url', $_POST["huge_it_add_video_input"] );
			$_POST["huge_it_add_video_input"] = array_map( 'htmlspecialchars_decode', $_POST["huge_it_add_video_input"] );
			$_POST["huge_it_add_video_input"] = implode( ';', $_POST["huge_it_add_video_input"] );

			$_POST["show_url"] = esc_url( $_POST["show_url"] );
			$table_name        = $wpdb->prefix . "huge_itportfolio_images";
			$wpdb->insert(
				$table_name,
				array(
					'name'                  => $_POST["show_title"],
					'portfolio_id'          => $id,
					'description'           => $_POST["show_description"],
					'image_url'             => $_POST["huge_it_add_video_input"],
					'sl_url'                => $_POST["show_url"],
					'sl_type'               => 'video',
					'link_target'           => 'on',
					'ordering'              => '0',
					'published'             => '1',
					'published_in_sl_width' => '1',
					'category'              => '',
				)
			);
		}
		$apply_portfolio_safe_link = wp_nonce_url(
			'admin.php?page=portfolios_huge_it_portfolio&id=' . $id . '&task=apply',
			'apply_portfolio_' . $id,
			'hugeit_portfolio_apply_portfolio_nonce'
		);
		$apply_portfolio_safe_link = htmlspecialchars_decode( $apply_portfolio_safe_link );
		header( 'Location: ' . $apply_portfolio_safe_link );
	}

	/**
	 * Add project thumbnail video
	 */
	public static function add_thumb_video() {
		global $wpdb;
		if ( ! isset( $_GET["id"] ) || ! absint( $_GET['id'] ) || absint( $_GET['id'] ) != $_GET['id'] ) {
			wp_die( '"id" parameter is required to be not negative integer' );
		}
		$id = absint( $_GET["id"] );
		if ( isset( $_POST["huge_it_add_video_input_thumb"] ) && $_POST["huge_it_add_video_input_thumb"] != '' ) {
			if ( ! isset( $_REQUEST['add_thumb_video_nonce'] ) || ! wp_verify_nonce( $_REQUEST['add_thumb_video_nonce'], 'add_thumb_video_nonce' . absint( $_GET['thumb_parent'] ) ) ) {
				wp_die( 'Security check failure' );
			}
			if ( isset( $_GET['thumb_parent'] ) || $_GET['thumb_parent'] != null ) {
				$query          = $wpdb->prepare( "SELECT * FROM " . $wpdb->prefix . "huge_itportfolio_portfolios WHERE id= %d", $id );
				$row            = $wpdb->get_row( $query );
				$project_id     = absint( $_GET['thumb_parent'] );
				$query          = $wpdb->prepare( "SELECT * FROM " . $wpdb->prefix . "huge_itportfolio_images where portfolio_id = %d and id = %d", $row->id, $project_id );
				$get_proj_image = $wpdb->get_row( $query );
				$project_id     = absint( $_GET['thumb_parent'] );
				$get_proj_image->image_url .= sanitize_text_field( $_POST["huge_it_add_video_input_thumb"] ) . ";";
				$wpdb->query( $wpdb->prepare( "UPDATE " . $wpdb->prefix . "huge_itportfolio_images SET image_url = '%s' where portfolio_id = %s and id = %d", $get_proj_image->image_url, $row->id, $project_id ) );
				$apply_portfolio_safe_link = wp_nonce_url(
					'admin.php?page=portfolios_huge_it_portfolio&id=' . $id . '&task=apply',
					'apply_portfolio_' . $id,
					'hugeit_portfolio_apply_portfolio_nonce'
				);
				$apply_portfolio_safe_link = htmlspecialchars_decode( $apply_portfolio_safe_link );
				header( 'Location: ' . $apply_portfolio_safe_link );
			}
		}
	}

	/**
	 * Edit video
	 */
	public static function edit_video() {
		$thumb = sanitize_text_field( $_GET["thumb"] );
		if ( ! isset( $_GET["id"] ) || ! absint( $_GET['id'] ) || absint( $_GET['id'] ) != $_GET['id'] ) {
			wp_die( '"id" parameter is required to be not negative integer' );
		}
		$id = absint( $_GET["id"] );
		if ( ! isset( $_REQUEST['portfolio_video_edit_nonce'] ) || ! wp_verify_nonce( $_REQUEST['portfolio_video_edit_nonce'], 'edit_thumb_video_nonce' . $id . $thumb ) ) {
			wp_die( 'Security check failure' );
		}
		global $wpdb;
		$portfolio_id     = absint( $_GET["portfolio_id"] );
		$query            = $wpdb->prepare( "SELECT * FROM " . $wpdb->prefix . "huge_itportfolio_images where portfolio_id = %s and id = %d", $portfolio_id, $id );
		$get_proj_image   = $wpdb->get_row( $query );
		$input_edit_video = explode( ";", $get_proj_image->image_url );
		if ( isset( $_POST["huge_it_edit_video_input"] ) && $_POST["huge_it_edit_video_input"] != '' ) {
			$input_edit_video[ $thumb ] = sanitize_text_field( $_POST["huge_it_edit_video_input"] );
			array_map( 'esc_url', $input_edit_video );
			$new_url = implode( ";", $input_edit_video );
			$wpdb->query( $wpdb->prepare( "UPDATE " . $wpdb->prefix . "huge_itportfolio_images SET image_url = '%s' where portfolio_id = %s and id = %d", $new_url, $portfolio_id, $id ) );
		}
		$apply_portfolio_safe_link = wp_nonce_url(
			'admin.php?page=portfolios_huge_it_portfolio&id=' . $portfolio_id . '&task=apply',
			'apply_portfolio_' . $portfolio_id,
			'hugeit_portfolio_apply_portfolio_nonce'
		);
		$apply_portfolio_safe_link = htmlspecialchars_decode( $apply_portfolio_safe_link );
		header( 'Location: ' . $apply_portfolio_safe_link );
	}

	/**
	 * Remove video
	 */
	public static function remove_portfolio() {
		if ( ! isset( $_GET["id"] ) || ! absint( $_GET['id'] ) || absint( $_GET['id'] ) != $_GET['id'] ) {
			wp_die( '"id" parameter is required to be not negative integer' );
		}
		$id = absint( $_GET["id"] );
		if ( ! isset( $_REQUEST['hugeit_portfolio_remove_portfolio_nonce'] ) || ! wp_verify_nonce( $_REQUEST['hugeit_portfolio_remove_portfolio_nonce'], 'remove_portfolio_' . $id ) ) {
			wp_die( 'Security check failure' );
		}
		global $wpdb;
		$sql_remov_tag   = $wpdb->prepare( "DELETE FROM " . $wpdb->prefix . "huge_itportfolio_portfolios WHERE id = %d", $id );
		$sql_remov_image = $wpdb->prepare( "DELETE FROM " . $wpdb->prefix . "huge_itportfolio_images WHERE portfolio_id = %d", $id );
		if ( ! $wpdb->query( $sql_remov_tag ) ) {
			setcookie( 'deleted', 'fail', time() + 2 );
		} else {
			$wpdb->query( $sql_remov_image );
			setcookie( 'deleted', 'success', time() + 2 );
		}
		header( 'Location: admin.php?page=portfolios_huge_it_portfolio' );
	}

	/**
	 * Duplicate Portfolio
	 */
	public static function duplicate_portfolio() {
		if ( isset( $_GET['page'] ) && $_GET['page'] == 'portfolios_huge_it_portfolio' ) {
			if ( portfolio_gallery_get_portfolio_task() && portfolio_gallery_get_portfolio_task() == 'duplicate_portfolio_gallery' ) {
				if ( ! isset( $_GET["id"] ) || ! absint( $_GET['id'] ) || absint( $_GET['id'] ) != $_GET['id'] ) {
					wp_die( '"id" parameter is required to be not negative integer' );
				}
				$id = absint( $_GET["id"] );
				if ( ! isset( $_REQUEST['portfolio_gallery_duplicate_nonce'] ) || ! wp_verify_nonce( $_REQUEST['portfolio_gallery_duplicate_nonce'], 'huge_it_portfolio_duplicate_nonce' . $id ) ) {
					wp_die( 'Security check fail' );
				}
				global $wpdb;
				$table_name        = $wpdb->prefix . "huge_itportfolio_portfolios";
				$query             = $wpdb->prepare( "SELECT * FROM " . $table_name . " WHERE id=%d", $id );
				$portfolio_gallery = $wpdb->get_results( $query );
				$wpdb->insert(
					$table_name,
					array(
						'name'                     => $portfolio_gallery[0]->name . ' Copy',
						'sl_height'                => $portfolio_gallery[0]->sl_height,
						'sl_width'                 => $portfolio_gallery[0]->sl_width,
						'pause_on_hover'           => $portfolio_gallery[0]->pause_on_hover,
						'portfolio_list_effects_s' => $portfolio_gallery[0]->portfolio_list_effects_s,
						'description'              => $portfolio_gallery[0]->description,
						'param'                    => $portfolio_gallery[0]->param,
						'sl_position'              => $portfolio_gallery[0]->sl_position,
						'ordering'                 => $portfolio_gallery[0]->ordering,
						'published'                => $portfolio_gallery[0]->published,
						'categories'               => $portfolio_gallery[0]->categories,
						'ht_show_sorting'          => $portfolio_gallery[0]->ht_show_sorting,
						'ht_show_filtering'        => $portfolio_gallery[0]->ht_show_filtering,
						'autoslide'                => $portfolio_gallery[0]->autoslide,
						'show_loading'             => $portfolio_gallery[0]->show_loading,
						'loading_icon_type'        => $portfolio_gallery[0]->loading_icon_type
					)
				);
				$last_key        = $wpdb->insert_id;
				$table_name      = $wpdb->prefix . "huge_itportfolio_images";
				$query           = $wpdb->prepare( "SELECT * FROM " . $table_name . " WHERE portfolio_id=%d", $id );
				$portfolios      = $wpdb->get_results( $query );
				$portfolios_list = "";
				foreach ( $portfolios as $key => $portfolio ) {
					$new_portfolio = "('";
					$new_portfolio .= esc_sql($portfolio->name) . "','" . $last_key . "','" . esc_sql($portfolio->description) . "','" . $portfolio->image_url . "','" .
						$portfolio->sl_url . "','" . $portfolio->sl_type . "','" . $portfolio->link_target . "','" . $portfolio->ordering . "','" .
						$portfolio->published . "','" . $portfolio->published_in_sl_width . "','" . $portfolio->category . "')";
					$portfolios_list .= $new_portfolio . ",";
				}
				$portfolios_list = substr( $portfolios_list, 0, strlen( $portfolios_list ) - 1 );
				$query           = "INSERT into " . $table_name . " (name,portfolio_id,description,image_url,sl_url,sl_type,link_target,ordering,published,published_in_sl_width,category)
					VALUES " . $portfolios_list;
				$wpdb->query( $query );
				wp_redirect( 'admin.php?page=portfolios_huge_it_portfolio' );
			}
		}
	}
}

