<?php

// Create Custom Blocks Category
add_filter('block_categories_all', function ($categories) {


	// Adding a new category after Design Blocks.
	$custom_categories[] = array(
		'slug' => 'immaginificio',
		'title' => 'Immaginificio',
		'icon' => ''
	);
	array_splice($categories, 3, 0, $custom_categories);

	return $categories;
});

// Add Custom Blocks
require __DIR__ . '/example-01-basic/index.php';
require __DIR__ . '/example-02-stylesheets/index.php';
require __DIR__ . '/example-03-editable/index.php';
require __DIR__ . '/example-04-controls/index.php';
require __DIR__ . '/example-05-recipe-card/index.php';