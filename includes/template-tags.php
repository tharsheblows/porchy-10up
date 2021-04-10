<?php
/**
 * Custom template tags for this theme.
 *
 * This file is for custom template tags only and it should not contain
 * functions that will be used for filtering or adding an action.
 *
 * All functions should be prefixed with PorchyTenUpTheme in order to prevent
 * pollution of the global namespace and potential conflicts with functions
 * from plugins.
 * Example: `tenup_scaffold_function()`
 *
 * @package PorchyTenUpTheme\Template_Tags
 *
 */

namespace PorchyTenUpTheme\TemplateTags;

/**
 * Echos the url of the logo.
 *
 * @return void
 */
function the_logo() {
	echo get_the_logo();
}

/**
 * Returns the url of the logo.
 *
 * @return string|null The url of the logo or null if it does not exist.
 */
function get_the_logo() {
	if ( file_exists( PORCHYUP_THEME_PATH . 'dist/images/logo_transparent_background-300x181.png' ) ){
		return PORCHYUP_THEME_TEMPLATE_URL . '/dist/images/logo_transparent_background-300x181.png';
	}
	return null;
}

/**
 * Echoes the svg of the company logo.
 *
 * @param string $company The filename used for the svg.
 * @return void
 */
function the_company_logo( $company ) {
	if ( file_exists( PORCHYUP_THEME_PATH . "dist/svg/$company.svg" ) ){
		include PORCHYUP_THEME_PATH . "/dist/svg/$company.svg";
	}
}

/**
 * Returns the date format.
 *
 * @return string
 */
function post_date_formatted( $post ) {
	return get_the_date( 'jS F Y', $post );
}
