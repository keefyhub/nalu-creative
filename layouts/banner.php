<?php
$background_image_src = wp_get_attachment_image_url(get_sub_field('image'), 'full');
$background_image = !empty($background_image_src) ? 'style="background-image:url(' . $background_image_src . ')"' : false;
?>

<section class="banner page-content page-content--no-padding" <?= $background_image; ?> <?= $block_id; ?>>
    <article class="banner__content">
        <?= apply_filters('the_content', get_sub_field('content')); ?>
    </article>
</section>