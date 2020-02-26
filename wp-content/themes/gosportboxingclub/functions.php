<?php

// TODO: Move this to wp-config.php
define('DIST_DIR', 'dist');
define('DIST_PATH', 'wp-content/themes/gosportboxingclub/' . DIST_DIR);
define('ASSET_MANIFEST_PATH', DIST_PATH . '/manifest.json');

//Disables WordPress admin bar
show_admin_bar(false);

//Adds featured image support
add_theme_support( 'post-thumbnails' );

if( function_exists('acf_add_options_page') ) {
	acf_add_options_page();
}
?>
