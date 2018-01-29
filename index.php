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
        <section class="banner u-top-left page-content page-content--no-padding" style="background-image: url('<?= PUBLIC_FOLDER; ?>/images/banner-background-image.jpg')" id="contact">
            <article class="banner__content">
                <h2 class="title title--with-underline"><strong>MULTI-DISCIPLINARY</strong> FREELANCE DESIGN AT AN <strong>AGENCY STANDARD</strong></h2>
            </article>
        </section>

        <?php
    endwhile;
else:
    echo 'Sorry, no posts matched your criteria';
endif;
get_footer();
