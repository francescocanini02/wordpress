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
                'img' => ''
            ),
            $atts
        )
    );

    ob_start();
    ?>
    <p style="color: <?php echo $color; ?>;">Hello world!</p>
    <?php
    $images = explode(",", $img);
    foreach ($images as $image) {
        echo wp_get_attachment_image($image);
    }
    return ob_get_clean();

    /*$output = "<p>Hello world!</p>";
    return $output;*/
}
?>