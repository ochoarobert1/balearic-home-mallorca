<?php
// Add Shortcode
function custom_email_title_handler($atts)
{
    // Attributes
	$atts = shortcode_atts(
		array(
			'type' => 'notificacion',
		),
		$atts
	);

    ob_start();
    switch ($atts['type']) {
        case 'register':
            _e('Gracias por registrarte en el sitio', 'balearic');
            break;

        case 'approved':
            _e('Tu registro en el sitio ha sido aprobado', 'balearic');
            break;
        
        case 'reset':
            _e('Tu link del reset de password esta aquí', 'balearic');
            break;

        case 'username':
            _e('Tu nombre de usuario esta aquí', 'balearic');
            break;

        case 'notificacion':
            _e('Nuevo usuario del sitio', 'balearic');
            break;

        default:
            # code...
            break;
    }
    $content = ob_get_clean();

    return $content;
}
add_shortcode('custom_email_title', 'custom_email_title_handler');