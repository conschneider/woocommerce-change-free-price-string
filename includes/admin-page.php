<?php

function wcfp_options_page() {

	global $wcfp_options;

	ob_start(); ?>
	<div class="wrap">
		<h2>WooCommerce edit Free! Price</h2>
		
		<form method="post" action="options.php">
		
			<?php settings_fields('wcfp_settings_group'); ?>
		

			<h4><?php _e('Replace "Free!"', 'wcfp_domain'); ?></h4>
			<p>
				<input size="70" id="wcfp_settings[replace_free]" name="wcfp_settings[replace_free]" type="text" value="<?php echo $wcfp_options['replace_free']; ?>"/><br>
				<label class="description" for="wcfp_settings[replace_free]"><?php _e('Enter your replacment text. HTML is allowed', 'wcfp_domain'); ?></label>
			</p>
			
		
			<p class="submit">
				<input type="submit" class="button-primary" value="<?php _e('Save Options', 'wcfp_domain'); ?>" />
			</p>
		
		</form>
		
	</div>
	<?php
	echo ob_get_clean();
}

function wcfp_add_options_link() {
	add_options_page('WooCommerce Change Free! Price', 'WC Free! Price', 'manage_options', 'wcfp-options', 'wcfp_options_page');
}
add_action('admin_menu', 'wcfp_add_options_link');

function wcfp_register_settings() {
	// creates our settings in the options table
	register_setting('wcfp_settings_group', 'wcfp_settings');
}
add_action('admin_init', 'wcfp_register_settings');