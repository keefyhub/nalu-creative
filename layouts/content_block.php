<section class="page-content page-content--<?=$background_colour; ?> page-content--min-height will-animate fadeIn js-animate-when-visible" <?= $block_id; ?>>
    <div class="container container--medium">
        <article class="wysiwyg will-animate fadeIn js-animate-when-visible" data-delay-animation=".5s">
            <?= apply_filters('the_content', get_sub_field('content')); ?>
        </article>
    </div>
</section>