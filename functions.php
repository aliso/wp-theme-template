<?php
// Useful global constants
define( 'GKL_PROJECT_ASSETS',   get_template_directory_uri() . '/assets' );
define( 'GKL_PROJECT_INCLUDES', get_template_directory() . '/includes' );

// REQUIRE CLASSES
require_once GKL_PROJECT_INCLUDES . '/class-gkl-project.php';
require_once GKL_PROJECT_INCLUDES . '/class-gkl-project-util.php';

if ( is_admin() ) {
	require_once GKL_PROJECT_INCLUDES . '/class-gkl-project-admin.php';
}

// REQUIRE EXTENSIONS
// require_once( 'extensions/shortcodes/example_shortcode.php' );

/**
 * Custom logging function
 */
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
