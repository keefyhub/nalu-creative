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
        <section class="hero-banner" style="background-image: url('<?= PUBLIC_FOLDER; ?>/images/hero-banner.jpg')">
            <video autoplay class="hero-banner__video" loop muted preload="auto">
                <source src="<?= PUBLIC_FOLDER; ?>/videos/banner.mov">
                <source src="<?= PUBLIC_FOLDER; ?>/videos/banner.mp4">
            </video>
            <div class="hero-banner__content">
                <img src="<?= PUBLIC_FOLDER; ?>/images/nalu-creative-large-logo.png">
            </div>
        </section>
        <section class="site-header">
            <nav class="sticky-menu">
            <?php
            wp_nav_menu([
                'menu' => 'Main Menu Left',
                'menu_id' => 'main_menu_left',
                'container' => false,
                'menu_class' => 'main-navigation main-navigation--left'
            ]);
            ?>

            <a class="company-logo" href="<?= site_url(); ?>">
                <img alt="<?= get_bloginfo('name'); ?>" src="<?= PUBLIC_FOLDER; ?>/images/nalu-creative-logo.png">
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

