<?php

/**
 * The admin-specific functionality of the plugin.
 *
 * @link       http://example.com
 * @since      1.0.0
 *
 * @package    Geo_Genius
 * @subpackage Geo_Genius/admin
 */

/**
 * The admin-specific functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the admin-specific stylesheet and JavaScript.
 *
 * @package    Geo_Genius
 * @subpackage Geo_Genius/admin
 * @author     Your Name <email@example.com>
 */
class Geo_Genius_Admin {

	/**
	 * The ID of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $geo_genius    The ID of this plugin.
	 */
	private $geo_genius;

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
	 * @param      string    $geo_genius       The name of this plugin.
	 * @param      string    $version    The version of this plugin.
	 */
	public function __construct( $geo_genius, $version ) {

		$this->geo_genius = $geo_genius;
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
		 * defined in Geo_Genius_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Geo_Genius_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_style( $this->geo_genius, plugin_dir_url( __FILE__ ) . 'css/geo-genius-admin.css', array(), $this->version, 'all' );

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
		 * defined in Geo_Genius_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Geo_Genius_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_script( $this->geo_genius, plugin_dir_url( __FILE__ ) . 'js/geo-genius-admin.js', array( 'jquery' ), $this->version, false );

	}

}
