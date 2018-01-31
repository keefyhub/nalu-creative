<?php
get_header();
if (have_posts()):
    while (have_posts()): the_post();
        ?>

        <section class="page-content page-content--min-height" id="about">
            <div class="container container--medium">
                <article class="wysiwyg u-text-center">
                    <h1 class="title title--with-underline title--centered-underline">ALOHA</h1>
                    <p>My name is Jessie Herriott and I am Nalu Creative; a freelance Graphic Designer based in Waterlooville, Hampshire. I have six years experience in the design industry along with a BA (Hons) Degree in Graphic Design from Winchester School of Art.</p>
                    <p>I have been lucky enough to have worked in some well established design studios and have gained great experience from working on many different projects, including; catalogue design, packaging, website design, and branding new and existing companies. I have had the opportunity of working on photo-shoots in London for catalogue projects and art directing a photo-shoot too.</p>
                    <p>Using this experience and knowledge, I have decided to become a freelance graphic designer. So I will be able to offer my clients a one to one bespoke personal service, to help them achieve the vision they have for their company and branding.</p>
                    <p>Nalu Creative is about great design helping your business to flourish.</p>
                </article>
            </div>
        </section>
        <section class="services page-content page-content--no-padding" id="services">
            <div class="grid grid--vertical-spacing">
                <?php for ($i = 0; $i < 3; $i++): ?>
                    <article class="services__item col-4">
                        <h3 class="title title--with-underline">GRAPHIC DESIGN</h3>
                        <div class="wysiwyg">
                            <p>Having well designed graphics is key to any successful business. Nalu Creative offers a wide range of graphic design services which include;</p>
                            <ul class="no-list-formatting">
                                <li>Branding and Logo</li>
                                <li>Website Design</li>
                                <li>Social Media Imagery Design</li>
                                <li>Stationery</li>
                                <li>Leaflets and Flyers</li>
                                <li>Signage</li>
                                <li>Brochure Design</li>
                                <li>Advert Design</li>
                                <li>Poster Design</li>
                                <li>Packaging Design</li>
                                <li>Large Format</li>
                                <li>Exhibition Stand Designs</li>
                            </ul>
                        </div>
                    </article>
                <?php endfor; ?>
            </div>
        </section>
        <section class="banner u-top-left page-content page-content--no-padding" style="background-image: url('<?= PUBLIC_FOLDER; ?>/images/banner-background-image.jpg')">
            <article class="banner__content">
                <h2 class="title title--with-underline">MULTI-DISCIPLINARY FREELANCE DESIGN AT AN AGENCY STANDARD</h2>
            </article>
        </section>
        <section class="projects page-content page-content--no-padding" id="work">
            <div class="grid js-gallery-popup">
                <?php for ($i = 0; $i < 6; $i++): ?>
                    <article class="projects__item col-4 js-gallery-popup-item" style="background-image: url('<?= PUBLIC_FOLDER; ?>/images/examples-of-work.jpg')" data-image="<?= PUBLIC_FOLDER; ?>/images/examples-of-work.jpg">
                        <div class="projects__item-content">
                            <h3 class="title title--with-underline title--centered-underline">GRAPHIC DESIGN</h3>
                            <div class="projects__item-description wysiwyg u-text-center">
                                <p>Brief description</p>
                            </div>
                        </div>
                        <div class="js-mfp-content mfp-hide">
                            <h2 class="title u-text-uppercase">Nicola Jane <?= $i; ?></h2>
                            <h3 class="title title--with-underline title--centered-underline u-text-uppercase">Catalogue</h3>
                            <p>Nicola Jane is a mastectomy fashion company, who bring out a mail order catalogue yearly showcasing new and classic products. The customer liked their catalogue to look fresh and different from the previous year. The brief included cover design, art working text and imagery, photo editing and print management too. The project involved art-directing a two day photo-shoot in London, the content was carefully planned in advanced using mood boards.</p>
                        </div>
                    </article>
                <?php endfor; ?>
            </div>
        </section>
        <section class="contact page-content page-content--fountain-blue" id="contact">
            <div class="contact__form container container--small">
                <article class="wysiwyg u-text-center">
                    <h1 class="title title--with-underline title--centered-underline">LET'S TALK</h1>
                    <?= do_shortcode('[contact-form-7 id="9" title="Contact form 1" html_class="grid grid--with-gutter grid--vertical-spacing"]'); ?>
                </article>
            </div>
            <div class="contact__links container container--medium">
                <div class="grid grid--with-gutter grid--vertical-spacing inner-content u-text-center wysiwyg">
                    <article class="col-4">
                        <h3 class="title title--with-underline title--centered-underline">CALL</h3>
                        <a href="#">07584 904655</a>
                    </article>
                    <article class="col-4">
                        <h3 class="title title--with-underline title--centered-underline">EMAIL</h3>
                        <a href="#">jessie@nalu-creative.co.uk</a>
                    </article>
                    <article class="col-4">
                        <h3 class="title title--with-underline title--centered-underline">FOLLOW</h3>
                        <ul class="social no-list-formatting">
                            <li class="social__item">
                                <a class="social__link icon-facebook"
                                   href="https://www.facebook.com/Nalu-Creative-1991146944496703/" target="_blank"></a>
                            </li>
                            <li class="social__item">
                                <a class="social__link icon-instagram"
                                   href="https://www.instagram.com/nalu_creative/?hl=en" target="_blank"></a>
                            </li>
                            <li class="social__item">
                                <a class="social__link icon-pinterest"
                                   href="https://www.pinterest.co.uk/nalucreative/pins/" target="_blank"></a>
                            </li>
                        </ul>
                    </article>
                </div>
            </div>
        </section>

        <?php
    endwhile;
else:
    echo 'Sorry, no posts matched your criteria';
endif;
get_footer();
