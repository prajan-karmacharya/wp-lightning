<?php

/**
 * Fired during plugin activation.
 *
 * This class defines all code necessary to run during the plugin's activation.
 *
 * @since      1.0.0
 * @package    WP_Lightning
 * @subpackage WP_Lightning/includes
 */

// Custom Tables
require_once 'db/database-handler.php';

class WP_Lightning_Activator {

	/**
	 * Setup necessary tables during plugin activation
	 *
	 * @since    1.0.0
	 */
	public static function activate() {
		$database_handler = new LNP_DatabaseHandler();
    	$database_handler->init();
	}

}
