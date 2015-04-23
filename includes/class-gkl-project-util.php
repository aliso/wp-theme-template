<?php
/**
 * Project Utility Class
 *
 * A place for utility functions that don't belong to any specific feature.
 *
 * @version   1.0.0
 * @package   gkl_project
 */
class GKL_Project_Util {
	/**
	 * Test to see if we're on the production site
	 *
	 * @return bool
	 */
	public static function is_prod() {
		return strpos( $_SERVER['SERVER_NAME'], 'project.com' ) !== false ?: false;
	}
}
