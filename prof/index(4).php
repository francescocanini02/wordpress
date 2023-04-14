<?php
defined( 'ABSPATH' ) || exit;

/**
 * Load all translations for our plugin from the MO file.
 */
function imm_examples_05_load_textdomain() {
	load_theme_textdomain( 'imm-examples', false, basename( __DIR__ ) . '/languages' );
}
add_action( 'init', 'imm_examples_05_load_textdomain' );

/**
 * Registers all block assets so that they can be enqueued through Gutenberg in
 * the corresponding context.
 *
 * Passes translations to JavaScript.
 */
function imm_examples_05_register_block() {

	if ( ! function_exists( 'register_block_type' ) ) {
		// Gutenberg is not active.
		return;
	}
	// Register the block by passing the location of block.json to register_block_type.
	register_block_type( __DIR__ );

	if ( function_exists( 'wp_set_script_translations' ) ) {
		/**
		 * May be extended to wp_set_script_translations( 'my-handle', 'my-domain',
		 * plugin_dir_path( MY_PLUGIN ) . 'languages' ) ). For details see
		 * https://make.wordpress.org/core/2018/11/09/new-javascript-i18n-support-in-wordpress/
		 */
		wp_set_script_translations( 'imm-examples-05', 'imm-examples' );
	}

}
add_action( 'init', 'imm_examples_05_register_block' );
