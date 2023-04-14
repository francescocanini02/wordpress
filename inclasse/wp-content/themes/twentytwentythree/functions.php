<?php

function custom_style()
{
    wp_enqueue_style("wpcf7-custom", get_stylesheet_directory_uri() . "/assets/css/wpcf7.css", array(), null);
    wp_enqueue_script("custom", get_stylesheet_directory_uri() . "/assets/js/script.js", array('jquery'), null);

}
add_action('wp_enqueue_scripts', 'custom_style');

include_once("shortcode.php");
include_once("paragrafo.php");