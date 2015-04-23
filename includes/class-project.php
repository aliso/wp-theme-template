<?php
/**
 * Project Theme Controller
 *
 * Class that handles all front end theme functionality.
 *
 * @class     WP_Project
 * @version   1.0.0
 * @package   lifetouch/assets/classes
 * @category  Class
 * @author    Someone
 */
class WP_Project {
	public function __construct() {
		// add_action( 'some_action', array( $this, 'example_function' ) );
	}

	public function example_function( $classes ) {
		// Code goes here
	}
}

$project = new WP_Project();
