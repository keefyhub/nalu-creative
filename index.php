<?php
get_header();
if(have_posts()):
  while(have_posts()): the_post();
  ?>

  <main class="landing-page">
    <div class="landing-page__content">
      <img src="<?= PUBLIC_FOLDER; ?>/images/nalu-creative-logo.png">
      <h1 class="landing-page__content-title">Website coming Soon</h1>
      <ul class="landing-page__list">
        <li class="landing-page__list-item">
          <a class="landing-page__list-link" href="tel:07584904655">T: 07584 904655</a>
        </li>
        <li class="landing-page__list-item">
          <a class="landing-page__list-link" href="mailto:jessie@nalu-creative.co.uk">E: jessie@nalu-creative.co.uk</a>
        </li>
      </ul>
      <ul class="landing-page__social">
        <li class="landing-page__social-item">
          <a class="landing-page__social-link icon-facebook" href="https://www.facebook.com/Nalu-Creative-1991146944496703/" target="_blank"></a>
        </li>
        <li class="landing-page__social-item">
          <a class="landing-page__social-link icon-instagram" href="https://www.instagram.com/nalu_creative/?hl=en" target="_blank"></a>
        </li>
        <li class="landing-page__social-item">
          <a class="landing-page__social-link icon-pinterest" href="https://www.pinterest.co.uk/nalucreative/pins/" target="_blank"></a>
        </li>
      </ul>
    </div>
  </main>

  <?php
  endwhile;
else:
  echo 'Sorry, no posts matched your criteria';
endif;
get_footer();
