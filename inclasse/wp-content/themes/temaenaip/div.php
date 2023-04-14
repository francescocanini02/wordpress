<?php
/**
 * 
 */

add_shortcode('div', 'div_render');
function div_render($atts, $content = null)
{
    extract(
        shortcode_atts(
            array(
                'bg_color' => 'transparent',
                'h' => 'auto',
                'w' => 'auto'
            ),
            $atts
        )
    );

    ob_start();
    ?>
    <div style="background-color: <?php echo $bg_color; ?>; height: <?php echo $h; ?>; width: <?php echo $w; ?>;">
        <?php echo $content; ?>
    </div>
    <?php

    return ob_get_clean();

}
?>