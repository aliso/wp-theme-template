<?php
/**
 * Project Admin Theme Controller
 *
 * Class that handles all admin theme functionality.
 *
 * @class     WP_Project_Admin
 * @version   1.0.0
 * @package   lifetouch/assets/classes
 * @category  Class
 * @author    Someone
 */

if ( ! class_exists( 'WP_Project_Admin' ) ) {

	class WP_Project_Admin {
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

	$project_admin = new WP_Project_Admin();
}
