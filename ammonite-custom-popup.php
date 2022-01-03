<?php
/**
 * Plugin Name:       Ammonite Custom Popup
 * Description:       Adds a custom popup with a newsletter signup form. To use, add the shortcode [ammonite_custom_popup] to any page where you would like this popup to appear.
 * Version:           2.0.0
 * Author:            Daniel Ellis
 * Author URI:        https://danielellisdevelopment.com/
 */

/*
  Basic Security
*/
if ( ! defined( 'ABSPATH' ) ) {
  die;
}

/*
  Plugin Base Class
*/
if ( !class_exists( 'Ammonite_Custom_Popup' ) ) {
  class Ammonite_Custom_Popup {
    public static function register_styles_and_scripts() {
      add_action( 'wp_enqueue_scripts', function() {
        wp_register_script( 'ammonite-custom-popup-script', plugins_url('assets/js/ammonite-custom-popup.js', __FILE__ ), array('jquery'), '2.0.0', true );
        wp_register_style( 'ammonite-custom-popup-styles', plugins_url('assets/css/ammonite-custom-popup.css', __FILE__ ), array(), '2.0.0', 'all' );
      } );
    }

    public static function add_popup_shortcode() {
      // Use [ammonite_custom_popup] to call this shortcode
      add_shortcode( 'ammonite_custom_popup', function() {
        // Enqueue associated styles and scripts
        wp_enqueue_script( 'ammonite-custom-popup-script' );
        wp_enqueue_style( 'ammonite-custom-popup-styles' );

        // Buffer and return shortcode
        ob_start();
        include( 'templates/ammonite-custom-popup-template.php' );
        return ob_get_clean();
      } );
    }
  }

  // Call methods on load here
  Ammonite_Custom_Popup::register_styles_and_scripts();
  Ammonite_Custom_Popup::add_popup_shortcode();
}
