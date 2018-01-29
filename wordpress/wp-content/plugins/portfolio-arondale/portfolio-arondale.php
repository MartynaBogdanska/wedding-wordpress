<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              http://logichunt.com
 * @since             1.0.0
 * @package           Portfolio_Arondale
 *
 * @wordpress-plugin
 * Plugin Name:       Portfolio Arondale
 * Plugin URI:
 * Description:       Smart Portfolio Gallery for Professionals. Responsive Grid system with Filter and Masonry Based on Isotope.

 * Version:           1.1.6
 * Author:            LogicHunt
 * Author URI:        http://logichunt.com
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       portfolio-pro
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-portfolio-pro-activator.php
 */
function activate_portfolio_arondale() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-portfolio-arondale-activator.php';
	Portfolio_Arondale_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-portfolio-pro-deactivator.php
 */
function deactivate_portfolio_arondale() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-portfolio-arondale-deactivator.php';
	Portfolio_Arondale_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_portfolio_arondale' );
register_deactivation_hook( __FILE__, 'deactivate_portfolio_arondale' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-portfolio-arondale.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_portfolio_arondale() {

	$plugin = new Portfolio_Arondale();
	$plugin->run();

}
run_portfolio_arondale();
