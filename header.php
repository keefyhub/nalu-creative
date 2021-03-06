<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, viewport-fit=cover">
    <title><?php wp_title(); ?></title>
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <?php wp_head(); ?>
</head>
<body <?php body_class('no-js'); ?>>
<script>
    document.getElementsByClassName('no-js')[0].classList.remove('no-js');
</script>
    <main class="site-wrapper">
        <section class="site-header site-header--mobile js-navigation-target will-animate fadeIn js-animate-when-visible">
            <a class="company-logo" href="<?php echo site_url(); ?>">
                <img alt="<?= get_bloginfo('name'); ?> logo" src="<?= PUBLIC_FOLDER; ?>/images/nalu-creative-logo.png">
            </a>
            <a class="navigation-toggle js-navigation-toggle" href="#">
                <span class="navigation-toggle__text">Menu</span>
                <span class="navigation-toggle__bars"></span>
            </a>
            <nav class="sticky-menu">
                <ul class="main-navigation">
                    <?php
                    wp_nav_menu([
                        'menu' => 'Main Menu Left',
                        'menu_id' => 'main_menu_left',
                        'container' => false,
                        'items_wrap' => '%3$s'
                    ]);
                    wp_nav_menu([
                        'menu' => 'Main Menu Right',
                        'menu_id' => 'main_menu_right',
                        'container' => false,
                        'items_wrap' => '%3$s'
                    ]);
                    ?>
                </ul>
            </nav>
        </section>
        <section class="hero-banner will-animate fadeIn js-animate-when-visible" style="background-image: url('<?= PUBLIC_FOLDER; ?>/images/poster.jpg')" data-delay-animation=".5s">
            <video class="hero-banner__video" loop muted preload="auto" poster="<?= PUBLIC_FOLDER; ?>/images/poster.jpg">
                <source src="<?= PUBLIC_FOLDER; ?>/videos/banner-with-overlay.mp4">
            </video>
            <div class="hero-banner__content will-animate fadeIn js-animate-when-visible" data-delay-animation="1s">
                <img alt="<?= get_bloginfo('name'); ?> logo" src="<?= PUBLIC_FOLDER; ?>/images/nalu-creative-large-logo.png">
            </div>
        </section>
        <section class="site-header">
            <nav class="sticky-menu will-animate fadeIn js-animate-when-visible">
            <?php
            wp_nav_menu([
                'menu' => 'Main Menu Left',
                'menu_id' => 'main_menu_left',
                'container' => false,
                'menu_class' => 'main-navigation main-navigation--left'
            ]);
            ?>

            <a class="company-logo" href="<?= site_url(); ?>">
                <img alt="<?= get_bloginfo('name'); ?> logo" src="<?= PUBLIC_FOLDER; ?>/images/nalu-creative-logo.png">
            </a>

            <?php
            wp_nav_menu([
                'menu' => 'Main Menu Right',
                'menu_id' => 'main_menu_right',
                'container' => false,
                'menu_class' => 'main-navigation main-navigation--right'
            ]);
            ?>
            </nav>
        </section>

