<?php

/*our functions for changing the Free! price string*/

//Check if WooCommerce is active
include_once( ABSPATH . 'wp-admin/includes/plugin.php' );
if( is_plugin_active( 'woocommerce/woocommerce.php' ) ) {


	// Hook me in!

	add_filter( 'woocommerce_variable_free_price_html','wcfp_custom_free_price' );
	add_filter( 'woocommerce_free_price_html', 'wcfp_custom_free_price' );
	add_filter( 'woocommerce_variation_free_price_html', 'wcfp_custom_free_price' );
	
	function wcfp_custom_free_price( $price ) {
		//get our options
		$wcfp_options = get_option('wcfp_settings');
		// output custom content
		return $wcfp_options['replace_free'];
	}

}

else {return 'WooCommerce is not active, please install and activate it first';}