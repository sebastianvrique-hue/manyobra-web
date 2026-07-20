<?php
add_theme_support('title-tag');
add_theme_support('post-thumbnails');

function manyobra_enqueue() {
    wp_enqueue_style('google-fonts',
        'https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&display=swap',
        [], null
    );
    wp_enqueue_style('manyobra-main',
        get_template_directory_uri() . '/assets/main.css',
        ['google-fonts'], '2.1'
    );
    wp_enqueue_script('manyobra-main',
        get_template_directory_uri() . '/assets/main.js',
        [], '2.1', true
    );
}
add_action('wp_enqueue_scripts', 'manyobra_enqueue');
