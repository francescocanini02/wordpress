<?php
/**
 * 
 */

add_shortcode('paragrafo', 'paragrafo_render');
function paragrafo_render($atts, $content = null)
{
    extract(
        shortcode_atts(
            array(
                'color' => "green"
            ),
            $atts
        )
    );

    ob_start();
    ?>
    <p style="color: <?php echo $color; ?>;"><?php echo $content; ?></p>
    <?php

    return ob_get_clean();

}
?>