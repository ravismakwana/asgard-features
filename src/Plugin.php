<?php
/**
 * Plugin Class.
 *
 * @package asgard-features
 */

namespace AsgardFeatures;

/**
 * Class Plugin.
 */
class Plugin {

	/**
	 * Constructor.
	 */
	public function __construct() {
		$this->init();
	}

	/**
	 * Initialize plugin
	 */
	private function init() {
		define( 'ASGARD_FEATURES_PLUGIN_PATH', untrailingslashit( plugin_dir_path( __DIR__ ) ) );
		define( 'ASGARD_FEATURES_PLUGIN_URL', untrailingslashit( plugin_dir_url( __DIR__ ) ) );
		define( 'ASGARD_FEATURES_PLUGIN_BUILD_PATH', ASGARD_FEATURES_PLUGIN_PATH . '/assets/build' );
		define( 'ASGARD_FEATURES_PLUGIN_BUILD_URL', ASGARD_FEATURES_PLUGIN_URL . '/assets/build' );
		define( 'ASGARD_FEATURES_PLUGIN_VERSION', '1.0.0' );

		new Assets();
	}
}