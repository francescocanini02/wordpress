<?php

function custom_style()
{
    wp_enqueue_style("wpcf7-custom", get_stylesheet_directory_uri() . "/assets/css/wpcf7.css", array(), null);
    if (is_page_template("chisono")) {
        wp_enqueue_script("custom", get_stylesheet_directory_uri() . "/assets/js/script.js", array(), null);
    }

}
add_action('wp_enqueue_scripts', 'custom_style');


function theme_setup()
{
    if (!defined('LANG_DOMAIN')) {
        define('LANG_DOMAIN', 'temaenaip');
    }

    load_theme_textdomain(LANG_DOMAIN, get_template_directory() . '/languages');
}

add_action('after_setup_theme', 'theme_setup');