<?php

/**
 * The admin-specific functionality of the plugin.
 *
 * @link       https://dialog-chat.com
 * @since      1.0.0
 *
 * @package    Dialog_Chat
 * @subpackage Dialog_Chat/admin
 */

/**
 * The admin-specific functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the admin-specific stylesheet and JavaScript.
 *
 * @package    Dialog_Chat
 * @subpackage Dialog_Chat/admin
 * @author     Falcon Plugins <falcon@dialog-chat.com>
 */
class Dialog_Chat_Admin {

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

		$this->load_dc_admin_files();

	}

	public function load_dc_admin_files() {

		// Main ADMIN functions init file
		require_once plugin_dir_path( __FILE__ ) . 'partials/class-dialog-chat-admin-main.php';

		$DC_Admin = new Dialog_Chat_Admin_Main();

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
		 * defined in Dialog_Chat_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Dialog_Chat_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_style( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'css/dialog-chat-admin.css', array(), $this->version, 'all' );

		wp_enqueue_style( 'wp-color-picker' );

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
		 * defined in Dialog_Chat_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Dialog_Chat_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_script( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'js/dialog-chat-admin.js', array( 'jquery', 'wp-color-picker' ), $this->version, false );

	}

}