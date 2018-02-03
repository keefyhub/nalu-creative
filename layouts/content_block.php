<section class="page-content page-content--<?=$background_colour; ?> page-content--min-height" <?= $block_id; ?>>
    <div class="container container--medium">
        <article class="wysiwyg">
            <?= apply_filters('the_content', get_sub_field('content')); ?>
        </article>
    </div>
</section>