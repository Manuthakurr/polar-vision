<?php
// ID of the current item in the WordPress Loop
$id = get_the_ID();
$module = [];
// check if the flexible content field has rows of data
$layout = '';
if (have_rows('flexible_layout', $id)) :
    $i = 0;
    // loop through the selected ACF layouts and display the matching partial
    while (have_rows('flexible_layout', $id)) : the_row();
        $slugs = array();
        $layout = get_row_layout();
        $module[] = $layout;
        if (isset($count[$layout]))
            $count[$layout] = $count[$layout] + 1;
        else
            $count[$layout] = 0;

        get_template_part('/template-parts/flexible-layouts/' . $layout, null, array(
            'count' => $count[$layout],
            'position' => $i
        ));
        $i++;
    endwhile;
endif;
?>
