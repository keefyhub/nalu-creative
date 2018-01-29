    <?php $site_name = get_bloginfo('name'); ?>
    <section class="site-footer">
        <div class="container">
            <footer class="site-footer__content">
                <a class="company-logo" href="<?= site_url(); ?>">
                    <img alt="<?= $site_name; ?>" src="<?= PUBLIC_FOLDER; ?>/images/nalu-creative-full-logo.png">
                </a>
                <ul class="site-footer__menu">
                    <li class="site-footer__menu-item">&copy; <?= date('Y') . ' ' . $site_name; ?></li>
                    <li class="site-footer__menu-item">Designed by <?= $site_name; ?></li>
                    <li class="site-footer__menu-item">Developed by <a href="//keithlight.co.uk" target="_blank">Keith Light</a></li>
                </ul>
            </footer>
        </div>
    </section>
    </main>
    <?php wp_footer(); ?>
</body>
</html>
