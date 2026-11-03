<?php
defined('ABSPATH') || exit;

add_action('init', function () {
    register_post_type('attorney', [
        'labels' => [
            'name'          => 'Attorneys',
            'singular_name' => 'Attorney',
            'add_new_item'  => 'Add New Attorney',
        ],
        'public'       => true,
        'has_archive'  => true,
        'rewrite'      => ['slug' => 'attorneys'],
        'menu_icon'    => 'dashicons-businessperson',
        'supports'     => ['title', 'editor', 'thumbnail'],
        'show_in_rest' => true,
    ]);
});