<?php
// Add the custom tinymce buttons
include_once 'custom-buttons.php';

// Editor styles
add_editor_style();

function ss_custom_styles($settings)
{
    $formats = [
        [
            'title' => 'Reduced margin',
            'selector' => '*',
            'classes' => 'reduced-margin'
        ],
        [
            'title' => 'Uppercase',
            'selector' => '*',
            'classes' => 'u-text-uppercase'
        ],
        [
            'title' => 'Title',
            'selector' => '*',
            'classes' => 'title'
        ],
        [
            'title' => 'Title with underline',
            'selector' => '*',
            'classes' => 'title--with-underline'
        ],
        [
            'title' => 'Title centered underline',
            'selector' => '*',
            'classes' => 'title--centered-underline'
        ],
        [
            'title' => 'Button Group',
            'block' => 'div',
            'selector' => '*',
            'classes' => 'button-row',
            'wrapper' => true
        ],
        [
            'title' => 'Button Group Centered',
            'block' => 'div',
            'selector' => '*',
            'classes' => 'button-row u-justify-center',
            'wrapper' => true
        ],
        [
            'title' => 'Standard Button',
            'selector' => 'a',
            'classes' => 'button'
        ],
        [
            'title' => 'Light Button',
            'selector' => 'a',
            'classes' => 'button button--light'
        ],
        [
            'title' => 'List without formatting',
            'selector' => '*',
            'classes' => 'no-list-formatting'
        ],
    ];

    $settings['style_formats'] = json_encode($formats);

    return $settings;
}

add_filter('tiny_mce_before_init', 'ss_custom_styles');

function ss_custom_colours($settings)
{
    $theme_colours = '
			"fff", "white",
			"ededed", "off-white",
			"f5f5f5", "white-smoke",
			"dadcdc", "alto",
			"e0e1e3", "zircon",
			"000", "black",
			"343642", "tuna",
			"333", "mine-shaft",
			"666", "steel",
			"b3b3b3", "nobel",
			"4d5762", "fiord",
			"8e9a9a", "submarine",
			"5c6555", "chicago",
			"86754f", "shadow",
			"d62a34", "valencia",
			"e46870", "light-carmine-pink"
		';

    // build colour grid default+custom colors
    $settings['textcolor_map'] = '[' . $theme_colours . ']';

    // enable 6th row for custom colours in grid
    $settings['textcolor_rows'] = 6;

    return $settings;
}

add_filter('tiny_mce_before_init', 'ss_custom_colours');

function responsive_embed_wrapper($cache)
{
    return '<div class="responsive-video">' . preg_replace('/(width|height|frameborder|scrolling)="\d*"\s/', '', $cache) . '</div>';
}

add_filter('embed_oembed_html', 'responsive_embed_wrapper', 1);
