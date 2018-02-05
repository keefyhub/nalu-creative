<section
        class="contact page-content page-content--<?= $background_colour; ?> will-animate fadeIn js-animate-when-visible"
        id="contact">
    <div class="contact__form container container--small">
        <article class="wysiwyg will-animate fadeIn js-animate-when-visible" data-delay-animation=".5s">
            <?= apply_filters('the_content', get_sub_field('content')); ?>
        </article>
    </div>
    <div class="contact__links container container--medium">
        <div class="grid grid--with-gutter grid--vertical-spacing inner-content u-text-center wysiwyg">
            <article class="col-4 will-animate fadeIn js-animate-when-visible" data-delay-animation=".25s">
                <h3 class="title title--with-underline title--centered-underline u-text-uppercase">Call</h3>
                <?php
                $phone_number = get_field('phone', 'options');
                ?>
                <a href="tel:<?= str_replace(' ', '', $phone_number); ?>">
                    <?= $phone_number; ?>
                </a>
            </article>
            <article class="col-4 will-animate fadeIn js-animate-when-visible" data-delay-animation=".5s">
                <h3 class="title title--with-underline title--centered-underline u-text-uppercase">Email</h3>
                <?php
                $email = get_field('email', 'options');
                ?>
                <a href="mailto:<?= $email; ?>">
                    <?= $email; ?>
                </a>
            </article>
            <article class="col-4 will-animate fadeIn js-animate-when-visible" data-delay-animation=".75s">
                <h3 class="title title--with-underline title--centered-underline u-text-uppercase">Follow</h3>
                <ul class="social no-list-formatting">
                    <?php
                    $social_accounts = get_field('social_media', 'options');
                    foreach ($social_accounts as $social_account):
                        ?>
                        <li class="social__item">
                            <a class="social__link icon-<?= strtolower($social_account['type']); ?>"
                               href="<?= $social_account['url']; ?>" target="_blank">
                                <span class="u-visually-hidden">
                                    <?= $social_account['type']; ?>
                                </span>
                            </a>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </article>
        </div>
    </div>
</section>