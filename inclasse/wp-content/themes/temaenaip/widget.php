<?php
/*
 * Questo è un widget
 */

class My_Widget extends WP_Widget
{
    public function __construct()
    {
        $widget_ops = array(
            'classname' => 'custom-widget',
            'description' => __('Questo è un widget di prova', LANG_DOMAIN)
        );
        parent::__construct('custom-widget', __('Il mio Widget', LANG_DOMAIN), $widget_ops);

    }

    public function widget($args, $instance)
    {

        $title = (!empty($instance['title'])) ? $instance['title'] : '';
        $title = apply_filters('widget_title', $title, $instance, $this->id_base);

        echo $args['before_widget'];

        if ($title):
            echo $args['before_title'] . $title . $args['after_title'];
        endif;

        $query = new WP_Query(
            array(
                'post_type' => 'page',
                'post_status' => 'published'
            )
        );

        while ($query->have_posts()) {
            $query->the_post();
            echo get_title();
        }

        echo $args['after_widget'];
    }
}