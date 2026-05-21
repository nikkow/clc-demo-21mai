<?php
declare(strict_types=1);

if (!defined('ABSPATH')) {
    exit;
}

$setupTheme = static function (): void {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support(
        'html5',
        [
            'search-form',
            'comment-form',
            'comment-list',
            'gallery',
            'caption',
            'script',
            'style',
        ]
    );
};

add_action('after_setup_theme', $setupTheme);

$enqueueAssets = static function (): void {
    wp_enqueue_style(
        'supermario-plomberie-fonts',
        'https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Manrope:wght@400;600;700;800&display=swap',
        [],
        null
    );

    wp_enqueue_style(
        'supermario-plomberie-style',
        get_stylesheet_uri(),
        ['supermario-plomberie-fonts'],
        (string) wp_get_theme()->get('Version')
    );
};

add_action('wp_enqueue_scripts', $enqueueAssets);
