<?php

class WP_Project_Util {
	/**
	 * Test to see if we're on the production site
	 *
	 * @return bool
	 */
	public static function is_prod() {
		return strpos( $_SERVER['SERVER_NAME'], 'project.com' ) !== false ?: false;
	}
}
