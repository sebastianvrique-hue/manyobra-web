<?php
add_theme_support('title-tag');
add_theme_support('post-thumbnails');

function manyobra_enqueue() {
    wp_enqueue_style('google-fonts',
        'https://fonts.googleapis.com/css2?family=Inter:wght@400..900&display=swap',
        [], null
    );
    wp_enqueue_style('manyobra-main',
        get_template_directory_uri() . '/assets/main.css',
        ['google-fonts'], '3.0'
    );
    wp_enqueue_script('manyobra-main',
        get_template_directory_uri() . '/assets/main.js',
        [], '3.0', true
    );
}
add_action('wp_enqueue_scripts', 'manyobra_enqueue');

/**
 * La portada esta escrita a mano y no usa Elementor, Astra Sites,
 * jQuery ni Font Awesome, pero WordPress los inyecta igual: son
 * ~278 KB de CSS en 14 archivos --que bloquean el renderizado del
 * hero-- mas ~215 KB de JS.
 *
 * Se filtra por prefijo de handle y no por nombre de archivo, para
 * que siga funcionando cuando los plugins se actualicen. La guarda
 * is_front_page() acota todo a una sola pagina.
 */
function manyobra_limpiar_cola() {
    if (!is_front_page()) return;
    $fuera = ['elementor-', 'font-awesome', 'hfe-', 'astra-sites', 'jquery', 'post-'];
    foreach ([wp_styles(), wp_scripts()] as $cola) {
        foreach ($cola->queue as $handle) {
            foreach ($fuera as $prefijo) {
                if (strpos($handle, $prefijo) === 0) { $cola->dequeue($handle); break; }
            }
        }
    }
}
add_action('wp_enqueue_scripts', 'manyobra_limpiar_cola', PHP_INT_MAX);
