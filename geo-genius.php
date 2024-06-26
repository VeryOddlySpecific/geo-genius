<?php

/**
 * Plugin Name:       GeoGeniusAI
 * Plugin URI:        http://github.com/VeryOddlySpecific/geo-genius/
 * Description:       This is a short description of what the plugin does. It's displayed in the WordPress admin area.
 * Version:           1.0.0
 * Author:            Your Name or Your Company
 * Author URI:        http://github.com/VeryOddlySpecific/
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       geo-genius
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
define( 'GEO_GENIUS_VERSION', '1.0.0' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-geo-genius-activator.php
 */
function activate_geo_genius() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-geo-genius-activator.php';
	Geo_Genius_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-geo-genius-deactivator.php
 */
function deactivate_geo_genius() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-geo-genius-deactivator.php';
	Geo_Genius_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_geo_genius' );
register_deactivation_hook( __FILE__, 'deactivate_geo_genius' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-geo-genius.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_geo_genius() {

	$plugin = new Geo_Genius();
	$plugin->run();

}
run_geo_genius();
