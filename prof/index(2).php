<?php
/**
 * Load all translations for our plugin from the MO file.
 */
function imm_examples_03_load_textdomain() {
	load_theme_textdomain( 'imm-examples', false, __DIR__ . '/languages' );
}
add_action( 'init', 'imm_examples_03_load_textdomain' );

/**
 * Registers all block assets so that they can be enqueued through Gutenberg in
 * the corresponding context.
 *
 * Passes translations to JavaScript.
 */
function imm_examples_03_register_block() {

	if ( ! function_exists( 'register_block_type' ) ) {
		// Gutenberg is not active.
		return;
	}
	register_block_type( __DIR__ );

	if ( function_exists( 'wp_set_script_translations' ) ) {
		wp_set_script_translations( 'imm-examples-03', 'imm-examples' );
	}

}
add_action( 'init', 'imm_examples_03_register_block' );
