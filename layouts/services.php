<section class="services page-content page-content--no-padding" <?= $block_id; ?>>
    <div class="grid grid--vertical-spacing">
        <?php
        $services = get_sub_field('services');
        if ($services):
            foreach ($services as $service):
                ?>
                <article class="services__item col-4 wysiwyg">
                    <?= apply_filters('the_content', $service['content']); ?>
                </article>
            <?php
            endforeach;
        endif;
        ?>
    </div>
</section>