<section class="projects page-content page-content--no-padding" <?= $block_id; ?>>
    <div class="grid js-gallery-popup">

        <?php
        $projects = get_sub_field('projects');
        if ($projects):
            $animation_delay = .5;
            foreach ($projects as $project):
                $background_image_src = wp_get_attachment_image_url($project['image'], 'full');
                $background_image = !empty($background_image_src) ? 'style="background-image:url(' . $background_image_src . ')"' : false;
                $rectangle_image = wp_get_attachment_image_url($project['image'], 'rectangle');
                ?>
                <article class="projects__item col-4 js-gallery-popup-item will-animate fadeIn js-animate-when-visible" <?= $background_image; ?> data-image="<?= $rectangle_image; ?>" data-delay-animation="<?= $animation_delay . 's'; ?>">
                    <div class="projects__item-content">
                        <div class="projects__item-description wysiwyg">
                            <?= apply_filters('the_content', $project['content']); ?>
                        </div>
                    </div>
                    <div class="js-mfp-description mfp-hide">
                        <?= apply_filters('the_content', $project['popup_content']); ?>
                    </div>
                </article>
                <?php
                $animation_delay = $animation_delay + .25;
            endforeach;
        endif;
        ?>
    </div>
</section>
