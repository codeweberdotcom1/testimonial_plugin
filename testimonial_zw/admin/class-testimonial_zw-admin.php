<?php

/**
 * The admin-specific functionality of the plugin.
 *
 * @link       z-website.ru
 * @since      1.0.0
 *
 * @package    Testimonial_zw
 * @subpackage Testimonial_zw/admin
 */

/**
 * The admin-specific functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the admin-specific stylesheet and JavaScript.
 *
 * @package    Testimonial_zw
 * @subpackage Testimonial_zw/admin
 * @author     Gladkov Denis <web@dgladkov.ru>
 */
class Testimonial_zw_Admin {

	/**
	 * The ID of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $plugin_name    The ID of this plugin.
	 */
	private $plugin_name;

	/**
	 * The version of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $version    The current version of this plugin.
	 */
	private $version;

	/**
	 * Initialize the class and set its properties.
	 *
	 * @since    1.0.0
	 * @param      string    $plugin_name       The name of this plugin.
	 * @param      string    $version    The version of this plugin.
	 */
	public function __construct( $plugin_name, $version ) {

		$this->plugin_name = $plugin_name;
		$this->version = $version;

	}

	/**
	 * Register the stylesheets for the admin area.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_styles() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Testimonial_zw_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Testimonial_zw_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_style( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'css/testimonial_zw-admin.css', array(), $this->version, 'all' );

	}

	/**
	 * Register the JavaScript for the admin area.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_scripts() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Testimonial_zw_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Testimonial_zw_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_script( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'js/testimonial_zw-admin.js', array( 'jquery' ), $this->version, false );

	}

}
public function add_options_page() {
	
		$this->plugin_screen_hook_suffix = add_options_page(
			__( 'Testimonial_zw Settings', 'testimonial_zw' ),
			__( 'Testimonial_zw', 'testimonial_zw' ),
			'manage_options',
			$this->plugin_name,
			array( $this, 'display_options_page' )
		);
	
	}
/**
	 * Add an options page under the Settings submenu
	 *
	 * @since  1.0.0
	 */
	