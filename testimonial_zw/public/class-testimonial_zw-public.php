<?php

/**
 * The public-facing functionality of the plugin.
 *
 * @link       z-website.ru
 * @since      1.0.0
 *
 * @package    Testimonial_zw
 * @subpackage Testimonial_zw/public
 */

/**
 * The public-facing functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the public-facing stylesheet and JavaScript.
 *
 * @package    Testimonial_zw
 * @subpackage Testimonial_zw/public
 * @author     Gladkov Denis <web@dgladkov.ru>
 */
class Testimonial_zw_Public {

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
	 * @param      string    $plugin_name       The name of the plugin.
	 * @param      string    $version    The version of this plugin.
	 */
	public function __construct( $plugin_name, $version ) {

		$this->plugin_name = $plugin_name;
		$this->version = $version;
		  $this->my_plugin_options = get_option($this->plugin_name);


	}

	/**
	 * Register the stylesheets for the public-facing side of the site.
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

		wp_enqueue_style( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'css/testimonial_zw-public.css', array(), $this->version, 'all' );

	}

	/**
	 * Register the JavaScript for the public-facing side of the site.
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

		wp_enqueue_script( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'js/testimonial_zw-public.js', array( 'jquery' ), $this->version, false );

	}
	/**
  * The function of adding text to the footer
  */

  public function add_text_footer(){

   if( !empty($this->my_plugin_options['footer_text']) )
     {
        echo '<h3 class="center">'.$this->my_plugin_options['footer_text'].'</h3>';
     }
  }


}
