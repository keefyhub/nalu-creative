<?php
function wpseo_remove_page_url($link)
{
    $link = preg_replace('~page/(0|[1-9][0-9]*)/?~i', '', $link);

    return $link;
}

add_filter('wpseo_canonical', 'wpseo_remove_page_url');

function move_yoast_to_bottom()
{
    return 'low';
}

add_filter('wpseo_metabox_prio', 'move_yoast_to_bottom');