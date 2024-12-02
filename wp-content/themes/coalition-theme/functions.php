<?php
function coalition_theme_setup() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    register_nav_menus([
        'primary' => __('Primary Menu', 'coalition'),
    ]);
}
add_action('after_setup_theme', 'coalition_theme_setup');

function coalition_enqueue_assets() {
    wp_enqueue_style('coalition-style', get_stylesheet_uri());
    wp_enqueue_script('coalition-scripts', get_template_directory_uri() . '/assets/js/scripts.js', [], null, true);
}
add_action('wp_enqueue_scripts', 'coalition_enqueue_assets');

function coalition_customize_register($wp_customize) {
    $wp_customize->add_setting('site_logo');
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'site_logo', [
        'label' => 'Site Logo',
        'section' => 'title_tagline',
        'settings' => 'site_logo',
    ]));

    $wp_customize->add_section('social_links', [
        'title' => 'Social Media Links',
        'priority' => 30,
    ]);

    $social_media = ['facebook', 'twitter', 'instagram'];
    foreach ($social_media as $network) {
        $wp_customize->add_setting("social_{$network}");
        $wp_customize->add_control("social_{$network}", [
            'label' => ucfirst($network) . ' URL',
            'section' => 'social_links',
            'type' => 'url',
        ]);
    }
}
add_action('customize_register', 'coalition_customize_register');
