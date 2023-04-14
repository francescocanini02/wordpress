<?php

function imm_examples_01_register_block() {
	register_block_type( __DIR__ );
}
add_action( 'init', 'imm_examples_01_register_block' );
