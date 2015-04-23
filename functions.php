<?php
// Useful global constants
define( 'PROJECT_ASSETS',   get_template_directory_uri() . '/assets' );
define( 'PROJECT_INCLUDES', get_template_directory() . '/includes' );

// LOGGING FUNCTION
if ( ! function_exists( '_log' ) ) {
	function _log( $message ) {
		if ( true === WP_DEBUG ) {
			if ( is_array( $message ) || is_object( $message ) ) {
				error_log( print_r( $message, true ) );
			} else {
				error_log( $message );
			}
		}
	}
}

// REQUIRE CLASSES
require_once PROJECT_INCLUDES . '/class-project.php';
require_once PROJECT_INCLUDES . '/class-project-util.php';

if ( is_admin() ) {
	require_once PROJECT_INCLUDES . '/class-project-admin.php';
}

// REQUIRE EXTENSIONS
// require_once( 'extensions/shortcodes/example_shortcode.php' );
