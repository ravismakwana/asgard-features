<?php
/**
 * Asgard Features Plugin
 *
 * @package asgard-features
 * @author  Ravi Makwana
 *
 * @wordpress-plugin
 * Plugin Name:       Asgard Features
 * Plugin URI:        https://example.com/plugins/the-basics/
 * Description:       Handle the basics with this plugin.
 * Version:           1.0.0
 * Requires at least: 5.2
 * Requires PHP:      7.2
 * Author:            Ravi Makwana
 * Author URI:        https://author.example.com/
 * License:           GPL v2 or later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:       asgard-features
 * Domain Path:       /languages
 */

/**
 * Bootstrap the plugin.
 */
require_once 'vendor/autoload.php';

use AsgardFeatures\Plugin;

if ( class_exists( 'AsgardFeatures\Plugin' ) ) {
	$the_plugin = new Plugin();
}

register_activation_hook( __FILE__, [ $the_plugin, 'activate' ] );

register_deactivation_hook( __FILE__, [ $the_plugin, 'deactivate' ] );