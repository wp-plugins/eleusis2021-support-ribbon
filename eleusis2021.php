<?php
/*
Plugin Name: elEUsis2021 Support Banner
Plugin URI: https://codesigns.gr/
Description: 
Author: Codesigns
Author URI: https://codesigns.gr/
Version: 0.2
License: GPLv2
*/

add_action( 'wp_footer', 'codesigns_eleusis21_show_ribbon', PHP_INT_MAX );
function codesigns_eleusis21_show_ribbon() {
	$ribbon = plugins_url( 'eleusis.png', __FILE__ );
	?>
	<a target="_blank" class="eleusis21-ribbon" href="http://eleusis2021.eu/?utm_source=supporters&utm_medium=ribbon&utm_campaign=supporters"><img src="<?php echo $ribbon; ?>" alt="#ElEUsis2021" style="position: fixed; top: 0; right: 0; z-index: 100000;"></a>
	<?php
}