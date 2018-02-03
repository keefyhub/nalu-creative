<?php
add_action('init', 'custom_tinymce_buttons');

function custom_tinymce_buttons()
{
    add_filter('mce_external_plugins', 'custom_add_buttons');
    add_filter('mce_buttons', 'custom_register_buttons');
}

function custom_add_buttons($plugin_array)
{
    $plugin_array['custom_buttons'] = get_template_directory_uri() . '/includes/tinymce/custom-buttons.js';
    return $plugin_array;
}

function custom_register_buttons($buttons)
{
    array_push($buttons, 'add_top_margin');
    array_push($buttons, 'add_bottom_margin');
    array_push($buttons, 'add_left_margin');
    array_push($buttons, 'add_right_margin');
    array_push($buttons, 'add_larger_text');
    array_push($buttons, 'add_smaller_text');
    array_push($buttons, 'styleselect');

    return $buttons;
}


function custom_button_css()
{
    wp_enqueue_style('custom_button_styling', get_template_directory_uri() . '/includes/tinymce/custom-buttons.css');
}

add_action('admin_enqueue_scripts', 'custom_button_css');