<?php
/*
Plugin Name: WooCommerce Change Free Price String 
Plugin URI: http://conschneider.de/mini-plugin-woocommerce-edit-free-price-string/
Description: WooCommerce Change Free! Price String globally conviently
Author: Con Schneider
Author URI: http://conschneider.de/
Version: 1.0
*/


/******************************
* global variables
******************************/

// retrieve our plugin settings from the options table
$wcfp_options = get_option('wcfp_settings');

/******************************
* includes
******************************/

include('includes/functions.php'); // display functions
include('includes/admin-page.php'); // the plugin options page HTML and save functions

/******************************
* useful settings link
******************************/
add_filter( 'plugin_action_links_' . plugin_basename(__FILE__), 'wcfp_plugin_settings_link' );

function wcfp_plugin_settings_link( $links ) {
   $links[] = '<a href="'. esc_url( get_admin_url(null, 'options-general.php?page=wcfp-options') ) .'">Settings</a>';
   return $links;
}