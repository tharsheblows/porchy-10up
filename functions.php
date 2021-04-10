<?php
/**
 * WP Theme constants and setup functions
 *
 * @package PorchyTenUpTheme
 */

// Useful global constants.
define( 'PORCHYUP_THEME_VERSION', '0.1.0' );
define( 'PORCHYUP_THEME_TEMPLATE_URL', get_template_directory_uri() );
define( 'PORCHYUP_THEME_PATH', get_template_directory() . '/' );
define( 'PORCHYUP_THEME_INC', PORCHYUP_THEME_PATH . 'includes/' );
define( 'PORCHYUP_THEME_BLOCK_DIR', PORCHYUP_THEME_INC . 'blocks/' );

require_once PORCHYUP_THEME_INC . 'core.php';
require_once PORCHYUP_THEME_INC . 'overrides.php';
require_once PORCHYUP_THEME_INC . 'template-tags.php';
require_once PORCHYUP_THEME_INC . 'utility.php';
require_once PORCHYUP_THEME_INC . 'blocks.php';

// Run the setup functions.
PorchyTenUpTheme\Core\setup();
PorchyTenUpTheme\Blocks\setup();

// Require Composer autoloader if it exists.
if ( file_exists( __DIR__ . '/vendor/autoload.php' ) ) {
	require_once __DIR__ . '/vendor/autoload.php';
}

if ( ! function_exists( 'wp_body_open' ) ) {

	/**
	 * Shim for the the new wp_body_open() function that was added in 5.2
	 */
	function wp_body_open() {
		do_action( 'wp_body_open' );
	}
}
