<?php

// Create Custom Blocks Category
add_filter('block_categories_all', function ($categories) {


    // Adding a new category after Design Blocks.
    $custom_categories[] = array(
        'slug' => 'fracanini',
        'title' => 'fracanini',
        'icon' => ''
    );
    array_splice($categories, 3, 0, $custom_categories);

    return $categories;
});

require __DIR__ . '/example-01-basic/index.php';
require __DIR__ . '/example-02-stylesheets/index.php';