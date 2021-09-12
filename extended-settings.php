<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://pospi.sk/
 * @since             0.0.1
 * @package           Extended_Settings
 *
 * @wordpress-plugin
 * Plugin Name:       Extended Settings
 * Plugin URI:        https://github.com/pospisk/extended-settings
 * Description:       This is a short description of what the plugin does. It's displayed in the WordPress admin area.
 * Version:           0.0.1
 * Author:            pospisk
 * Author URI:        https://pospi.sk/
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       extended-settings
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * Currently plugin version.
 * Start at version 1.0.0 and use SemVer - https://semver.org
 * Rename this for your plugin and update it as you release new versions.
 */
define( 'EXTENDED_SETTINGS_VERSION', '1.0.0' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-extended-settings-activator.php
 */
function activate_extended_settings() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-extended-settings-activator.php';
	Extended_Settings_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-extended-settings-deactivator.php
 */
function deactivate_extended_settings() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-extended-settings-deactivator.php';
	Extended_Settings_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_extended_settings' );
register_deactivation_hook( __FILE__, 'deactivate_extended_settings' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-extended-settings.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_extended_settings() {

	$plugin = new Extended_Settings();
	$plugin->run();

}
run_extended_settings();
