<?php
get_header();
if (have_posts()):
    while (have_posts()): the_post();
        ?>

        <section class="page-content page-content--min-height">
            <div class="container container--medium">
                <div class="wysiwyg u-text-center">
                    <h1 class="title title--with-underline">ALOHA</h1>
                    <p>My name is Jessie Herriott and I am Nalu Creative; a freelance Graphic Designer based in Waterlooville, Hampshire. I have six years experience in the design industry along with a BA (Hons) Degree in Graphic Design from Winchester School of Art.</p>
                    <p>I have been lucky enough to have worked in some well established design studios and have gained great experience from working on many different projects, including; catalogue design, packaging, website design, and branding new and existing companies. I have had the opportunity of working on photo-shoots in London for catalogue projects and art directing a photo-shoot too.</p>
                    <p>Using this experience and knowledge, I have decided to become a freelance graphic designer. So I will be able to offer my clients a one to one bespoke personal service, to help them achieve the vision they have for their company and branding.</p>
                    <p>Nalu Creative is about great design helping your business to flourish.</p>
                </div>
            </div>
        </section>

        <?php
    endwhile;
else:
    echo 'Sorry, no posts matched your criteria';
endif;
get_footer();
