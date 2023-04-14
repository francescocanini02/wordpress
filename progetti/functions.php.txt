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

    register_taxonomy(
        'project-category',
        array('project'),
        array(
            'hierarchical' => true,
            'labels' => array(
                'name' => 'Categorie',
                'singular_name' => 'Categoria',
                'search_items' => 'Cerca categoria',
                'all_items' => 'Tutte le categorie',
                'parent_item' => 'Categoria genitore',
                'parent_item_colon' => 'Categoria genitore:',
                'edit_item' => 'Modifica categoria',
                'update_item' => 'Aggiorna categoria',
                'add_new_item' => 'Aggiungi nuova categoria',
                'new_item_name' => 'Nome nuova categoria',
                'menu_name' => 'Categorie'
            ),
            'show_ui' => true,
            'show_admin_column' => true,
            'show_in_rest' => true,
            'query_var' => true,
            'rewrite' => array(
                'slug' => 'progetti/categoria',
                'with_front' => false
            ),
        )
    );
    register_post_type(
        'project',
        array(
            'label' => __('Progetti', LANG_DOMAIN),
            'labels' => array(
                'singular_name' => __('Progetto', LANG_DOMAIN),
                'add_new' => __('Aggiungi progetto', LANG_DOMAIN),
            ),
            'description' => __('Progetti del portfolio', LANG_DOMAIN),
            'public' => true,
            'show_in_menu' => true,
            'show_in_rest' => true,
            'menu_position' => 14,
            'menu_icon' => 'dashicons-admin-multisite',
            'supports' => array(
                'title',
                'editor',
                'revisions',
                'author',
                'thumbnail',
                'custom-fields'
            ),
            'taxonomies' => array('project-category'),
            'has_archive' => true,
            'rewrite' => array(
                'slug' => __('progetti', LANG_DOMAIN)
            )
        )
    );
}

add_action('after_setup_theme', 'theme_setup');


//require_once('widget.php');

/*function immaginificio_widgets_init()
{
register_widget('My_Widget');
}*/

include_once("blocks/blocks.php");