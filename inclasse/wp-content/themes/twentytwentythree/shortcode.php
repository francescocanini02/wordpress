<?php
/**
 * 
 */

add_shortcode('hello-world', 'hello_world_render');
function hello_world_render($atts, $content = null)
{
    /*extract(shortcode_atts(
    array(
    ), $atts));*/

    extract(
        shortcode_atts(
            array(
                'color' => "green",
                'img' => 0
            ),
            $atts
        )
    );

    ob_start();
    ?>
    <p style="color: <?php echo $color; ?>;">Hello world!

    </p>
    <?php
    echo wp_get_attachment_image($img);
    return ob_get_clean();

    /*$output = "<p>Hello world!</p>";
    return $output;*/
}
?>