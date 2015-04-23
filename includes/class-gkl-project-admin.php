<?php
/**
 * Project Admin Theme Controller
 *
 * Class that handles all admin theme functionality.
 *
 * @version   1.0.0
 * @package   gkl_project
 */
class GKL_Project_Admin {
	public function __construct() {
		// ADD ADMIN MENU
		// add_action( 'action_name', array( $this, 'example_function' ) );

		// REQUIRE SHORTCODES, WIDGETS, EDITOR PLUGINS
		// require_once( get_template_directory() . '/extensions/widgets/get-started.php' );
	}

	public function example_function() {
		// Code goes here
	}
}

$gkl_project_admin = new GKL_Project_Admin();
