<?php
get_header();
if (have_posts()):
    while (have_posts()): the_post();
        if (have_rows('flexible_layouts')): while (have_rows('flexible_layouts')): the_row();
            $layout_type = get_row_layout();
            $block_id = !empty(get_sub_field('block_id')) ? 'id="' . get_sub_field('block_id') . '"' : false;
            $background_colour = !empty(get_sub_field('background_colour')) ? get_sub_field('background_colour') : false;

            include(locate_template('/layouts/' . $layout_type . '.php'));
        endwhile; endif;
    endwhile;
endif;
get_footer();
