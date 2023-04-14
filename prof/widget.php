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
            $post = $query->post;
            echo get_the_title($post->ID);
        }

        echo $args['after_widget'];
    }


    public function update($new_instance, $old_instance)
    {
        $instance = $old_instance;
        $instance['title'] = sanitize_text_field($new_instance['title']);
        return $instance;
    }

    public function form($instance)
    {
        $title = isset($instance['title']) ? esc_attr($instance['title']) : __('Contattaci', LANG_DOMAIN);
        ?>

        <p><label for="<?php echo $this->get_field_id('title'); ?>"><?php _e('Title:'); ?></label>
            <input class="widefat" id="<?php echo $this->get_field_id('title'); ?>"
                name="<?php echo $this->get_field_name('title'); ?>" type="text" value="<?php echo $title; ?>" />
        </p>

        <?php
    }

}