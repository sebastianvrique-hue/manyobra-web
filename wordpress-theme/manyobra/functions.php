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
        ['google-fonts'], '3.1'
    );
    wp_enqueue_script('manyobra-main',
        get_template_directory_uri() . '/assets/main.js',
        [], '3.1', true
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

/**
 * Formulario de diagnostico por escrito.
 *
 * Contexto que importa: el formulario anterior de este sitio validaba los
 * campos, mostraba "Mensaje enviado. Te contactamos pronto." y NO enviaba
 * nada a ninguna parte --sin fetch, sin action, sin mailto--. Hubo gente
 * creyendo que habia escrito. Por eso aca:
 *
 *   - El envio se procesa en el servidor (admin-post), no en el navegador.
 *   - El exito solo se muestra si wp_mail() devolvio true.
 *   - Si falla, se dice que fallo y se ofrece WhatsApp. Nunca un falso "listo".
 *
 * Funciona sin JavaScript: es un POST normal que redirige con un parametro.
 */
function manyobra_recibir_diagnostico() {
    $volver = home_url('/#contacto');

    // Nonce: sin esto cualquiera puede postear desde fuera
    if (!isset($_POST['manyobra_nonce']) ||
        !wp_verify_nonce($_POST['manyobra_nonce'], 'manyobra_diagnostico')) {
        wp_safe_redirect($volver . '&diag=error'); exit;
    }

    // Trampa para bots: campo oculto que una persona nunca rellena
    if (!empty($_POST['sitio_web'])) { wp_safe_redirect($volver . '&diag=ok'); exit; }

    $email = sanitize_email(wp_unslash($_POST['email'] ?? ''));
    $zona  = sanitize_text_field(wp_unslash($_POST['zona'] ?? ''));
    $obra  = sanitize_text_field(wp_unslash($_POST['obra'] ?? ''));
    $tel   = sanitize_text_field(wp_unslash($_POST['telefono'] ?? ''));

    if (!is_email($email) || $zona === '') {
        wp_safe_redirect($volver . '&diag=invalido'); exit;
    }

    $para    = get_option('admin_email');
    $asunto  = 'Diagnostico solicitado: ' . $zona . ' (' . ($obra ?: 'sin especificar') . ')';
    $cuerpo  = "Alguien pidio el diagnostico por escrito desde manyobra.cl\n\n"
             . "Email:    $email\n"
             . "Telefono: " . ($tel ?: '-') . "\n"
             . "Zona:     $zona\n"
             . "Obra:     " . ($obra ?: '-') . "\n\n"
             . "Responder con los dos numeros: alcance de la zona y valor de obra promedio.\n";
    $cabeceras = ['Content-Type: text/plain; charset=UTF-8', 'Reply-To: ' . $email];

    $enviado = wp_mail($para, $asunto, $cuerpo, $cabeceras);

    wp_safe_redirect($volver . ($enviado ? '&diag=ok' : '&diag=error'));
    exit;
}
add_action('admin_post_nopriv_manyobra_diagnostico', 'manyobra_recibir_diagnostico');
add_action('admin_post_manyobra_diagnostico',        'manyobra_recibir_diagnostico');
