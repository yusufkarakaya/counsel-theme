<?php
require_once get_template_directory() . '/inc/post-types.php';
require get_theme_file_path('inc/icons.php');

add_action('after_setup_theme', function () {
    add_theme_support('title-tag');
    add_theme_support('custom-logo');
    add_theme_support('post-thumbnails');

    register_nav_menus([
        'primary' => 'Primary Menu',
        'footer'  => 'Footer Menu',
    ]);
});

add_action('wp_enqueue_scripts', function () {
    wp_enqueue_style(
        'counsel-style',
        get_stylesheet_uri(),
        [],
        filemtime(get_theme_file_path('style.css'))
    );
    wp_enqueue_script(
        'counsel-main',
        get_theme_file_uri('assets/js/main.js'),
        [],
        filemtime(get_theme_file_path('assets/js/main.js')),
        ['strategy' => 'defer', 'in_footer' => true]
    );
});

/**
 * Prints an image from assets/images/, or a CSS placeholder when the file is missing.
 */
function counsel_image($file, $alt = '', $class = '', $placeholder = 'dark')
{
    if (file_exists(get_theme_file_path('assets/images/' . $file))) {
        printf(
            '<img class="%s" src="%s" alt="%s" loading="lazy">',
            esc_attr($class),
            esc_url(get_theme_file_uri('assets/images/' . $file)),
            esc_attr($alt)
        );
        return;
    }

    printf(
        '<div class="ph ph--%s %s" %s>%s</div>',
        esc_attr($placeholder),
        esc_attr($class),
        $alt ? 'role="img" aria-label="' . esc_attr($alt) . '"' : 'aria-hidden="true"',
        $placeholder === 'silhouette' ? counsel_icon('silhouette') : ''
    );
}

/**
 * Returns a style attribute that sets a section background image, if the file exists.
 */
function counsel_bg($file)
{
    if (!file_exists(get_theme_file_path('assets/images/' . $file))) {
        return '';
    }

    $url = esc_url(get_theme_file_uri('assets/images/' . $file));
    return 'style="--bg-image: linear-gradient(var(--overlay-70), var(--overlay-70)), url(\'' . $url . '\')"';
}

/**
 * Permalink of a page by slug, with a pretty-URL fallback when the page doesn't exist.
 */
function counsel_page_url($slug)
{
    $page = get_page_by_path($slug);
    return $page ? get_permalink($page) : home_url('/' . $slug . '/');
}

/**
 * Primary menu fallback when no menu is assigned in Appearance → Menus.
 */
function counsel_nav_fallback()
{
    $items = [
        'Home'       => home_url('/'),
        'Services'   => counsel_page_url('services'),
        'About us'   => counsel_page_url('about'),
        'Contact us' => counsel_page_url('contact'),
    ];

    echo '<ul class="site-nav__list">';
    foreach ($items as $label => $url) {
        $current = $label === 'Home' ? is_front_page() : untrailingslashit($url) === untrailingslashit(get_permalink());
        printf(
            '<li class="%s"><a href="%s">%s</a></li>',
            $current ? 'current-menu-item' : '',
            esc_url($url),
            esc_html($label)
        );
    }
    echo '</ul>';
}

add_filter('acf/settings/save_json', function () {
    return get_stylesheet_directory() . '/acf-json';
});

add_filter('acf/settings/load_json', function ($paths) {
    $paths[] = get_stylesheet_directory() . '/acf-json';
    return $paths;
});