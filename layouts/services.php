<section class="services page-content page-content--no-padding" <?= $block_id; ?>>
    <div class="grid grid--vertical-spacing">
        <?php
        $services = get_sub_field('services');
        if ($services):
            $animation_delay = .5;
            foreach ($services as $service):
                ?>

                <article class="services__item col-4 wysiwyg will-animate fadeIn js-animate-when-visible" data-delay-animation="<?= $animation_delay . 's'; ?>">
                    <?= apply_filters('the_content', $service['content']); ?>
                </article>
            <?php
                $animation_delay = $animation_delay + .25;
            endforeach;
        endif;
        ?>
    </div>
</section>