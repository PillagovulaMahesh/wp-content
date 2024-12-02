<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<header>
    <div class="container">
        <a href="<?php echo home_url(); ?>">
            <?php if (get_theme_mod('site_logo')) : ?>
                <img src="<?php echo esc_url(get_theme_mod('site_logo')); ?>" alt="<?php bloginfo('name'); ?>">
            <?php else : ?>
                <h1><?php bloginfo('name'); ?></h1>
            <?php endif; ?>
        </a>
        <nav>
            <?php
            wp_nav_menu([
                'theme_location' => 'primary',
                'container' => false,
                'menu_class' => 'menu',
            ]);
            ?>
        </nav>
    </div>
</header>
<main>
