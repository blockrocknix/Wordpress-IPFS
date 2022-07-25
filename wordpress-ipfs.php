<?php
/**
 * Plugin Name: WordPress IPFS
 * Version: 1.0.0
 * Description: This is Wordpress IPFS uploader Plugin
 * Author: Mauri Lehtola
 * Requires at least: 4.0
 * Tested up to: 4.0
 *
 * Text Domain: wordpress-ipfs
 * Domain Path: /lang/
 *
 * @package WordPress
 * @author Mauri Lehtola
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// Load plugin class files.
require_once 'includes/class-wordpress-plugin-template.php';
require_once 'includes/class-wordpress-plugin-template-settings.php';

// Load plugin libraries.
require_once 'includes/lib/class-wordpress-plugin-template-admin-api.php';
require_once 'includes/lib/class-wordpress-plugin-template-post-type.php';
require_once 'includes/lib/class-wordpress-plugin-template-taxonomy.php';

/**
 * Returns the main instance of Wordpress_IPFS to prevent the need to use globals.
 *
 * @since  1.0.0
 * @return object WordPress_IPFS
 */
function wordpress_plugin_template() {
	$instance = WordPress_IPFS::instance( __FILE__, '1.0.0' );

	if ( is_null( $instance->settings ) ) {
		$instance->settings = WordPress_Plugin_Template_Settings::instance( $instance );
	}

	return $instance;
}

wordpress_plugin_template();
