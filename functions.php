<?php
add_action('after_setup_theme', function () {
    add_theme_support('title-tag');      // <title>'ı WordPress yönetsin
    add_theme_support('custom-logo');    // Admin'den logo yüklenebilsin
    add_theme_support('post-thumbnails');

    register_nav_menus([
        'primary' => 'Primary Menu',
        'footer'  => 'Footer Menu',
    ]);
});

add_action('wp_enqueue_scripts', function () {
    $version = wp_get_theme()->get('Version');
    wp_enqueue_style('counsel-style', get_stylesheet_uri(), [], $version);
    wp_enqueue_script(
        'counsel-main',
        [],
        $version,
        ['strategy' => 'defer', 'in_footer' => true]
    );
});