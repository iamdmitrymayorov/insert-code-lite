<?php
/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * Dashboard. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link        https://dmtrmrv.com
 * @since 0.1.0
 * @package     Insert Code Lite
 *
 * Plugin Name: Insert Code Lite
 * Description: Simple way of adding custom scipts and styles to your website.
 * Version:     0.1.4
 * Author:      Dmitry Mayorov
 * Author URI:  https://dmtrmrv.com/
 * License:     GPL-2.0+
 * License URI: http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain: insert-code-lite
 * Domain Path: /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * The core plugin class that is used to define internationalization,
 * dashboard-specific hooks, and public-facing site hooks.
 */
require_once plugin_dir_path( __FILE__ ) . 'includes/class-insert-code-lite.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since 0.1.0
 */
function run_insert_code_lite() {
	$plugin = new Insert_Code_Lite();
	$plugin->run();
}

run_insert_code_lite();
