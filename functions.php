<?php

/* --------------------------------------------------------------
    ENQUEUE AND REGISTER CSS
-------------------------------------------------------------- */

require_once('includes/wp_enqueue_styles.php');

/* --------------------------------------------------------------
    ENQUEUE AND REGISTER JS
-------------------------------------------------------------- */

if (!is_admin()) add_action('wp_enqueue_scripts', 'balearic_jquery_enqueue');
function balearic_jquery_enqueue()
{
    wp_deregister_script('jquery');
    wp_deregister_script('jquery-migrate');
    if ($_SERVER['REMOTE_ADDR'] == '::1') {
        /*- JQUERY ON LOCAL  -*/
        wp_register_script('jquery', get_template_directory_uri() . '/js/jquery.min.js', false, '3.4.1', false);
        /*- JQUERY MIGRATE ON LOCAL  -*/
        wp_register_script('jquery-migrate', get_template_directory_uri() . '/js/jquery-migrate.min.js',  array('jquery'), '3.1.0', false);
    } else {
        /*- JQUERY ON WEB  -*/
        wp_register_script('jquery', 'https://code.jquery.com/jquery-3.5.1.min.js', false, '3.5.1', false);
        /*- JQUERY MIGRATE ON WEB  -*/
        wp_register_script('jquery-migrate', 'https://code.jquery.com/jquery-migrate-3.1.0.min.js', array('jquery'), '3.1.0', true);
    }
    wp_enqueue_script('jquery');
    wp_enqueue_script('jquery-migrate');
}

/* NOW ALL THE JS FILES */

require_once('includes/wp_enqueue_scripts.php');

/* --------------------------------------------------------------
    ADD CUSTOM WALKER BOOTSTRAP
-------------------------------------------------------------- */

add_action('after_setup_theme', 'balearic_register_navwalker');
function balearic_register_navwalker()
{
    require_once('includes/class-wp-bootstrap-navwalker.php');
}

/* --------------------------------------------------------------
    ADD CUSTOM WORDPRESS FUNCTIONS
-------------------------------------------------------------- */

require_once('includes/wp_custom_functions.php');

/* --------------------------------------------------------------
    ADD REQUIRED WORDPRESS PLUGINS
-------------------------------------------------------------- */

require_once('includes/class-tgm-plugin-activation.php');
require_once('includes/class-required-plugins.php');

/* --------------------------------------------------------------
    ADD CUSTOM WOOCOMMERCE OVERRIDES
-------------------------------------------------------------- */
if (class_exists('WooCommerce')) {
    require_once('includes/wp_woocommerce_functions.php');
}

/* --------------------------------------------------------------
    ADD JETPACK COMPATIBILITY
-------------------------------------------------------------- */
if (defined('JETPACK__VERSION')) {
    require_once('includes/wp_jetpack_functions.php');
}

/* --------------------------------------------------------------
    ADD THEME SUPPORT
-------------------------------------------------------------- */

load_theme_textdomain('balearic', get_template_directory() . '/languages');
add_theme_support('post-formats', array('aside', 'gallery', 'link', 'image', 'quote', 'status', 'video', 'audio'));
add_theme_support('post-thumbnails');
add_theme_support('automatic-feed-links');
add_theme_support('title-tag');
add_theme_support('menus');
add_theme_support('customize-selective-refresh-widgets');
add_theme_support(
    'custom-background',
    array(
        'default-image' => '',    // background image default
        'default-color' => 'ffffff',    // background color default (dont add the #)
        'wp-head-callback' => '_custom_background_cb',
        'admin-head-callback' => '',
        'admin-preview-callback' => ''
    )
);
add_theme_support('custom-logo', array(
    'height'      => 250,
    'width'       => 250,
    'flex-width'  => true,
    'flex-height' => true,
));


add_theme_support('html5', array(
    'search-form',
    'comment-form',
    'comment-list',
    'gallery',
    'caption',
));

/* --------------------------------------------------------------
    ADD NAV MENUS LOCATIONS
-------------------------------------------------------------- */

register_nav_menus(array(
    'header_menu' => __('Menu Header - Principal', 'balearic'),
    'footer_menu' => __('Menu Footer - Principal', 'balearic'),
));

/* --------------------------------------------------------------
    ADD DYNAMIC SIDEBAR SUPPORT
-------------------------------------------------------------- */

add_action('widgets_init', 'balearic_widgets_init');
function balearic_widgets_init()
{
    register_sidebar(array(
        'name' => __('Sidebar Principal', 'balearic'),
        'id' => 'main_sidebar',
        'description' => __('Estos widgets seran vistos en las entradas y páginas del sitio', 'balearic'),
        'before_widget' => '<li id="%1$s" class="widget %2$s">',
        'after_widget'  => '</li>',
        'before_title'  => '<h2 class="widgettitle">',
        'after_title'   => '</h2>',
    ));

    register_sidebars(4, array(
        'name'          => __('Footer Section %d', 'balearic'),
        'id'            => 'sidebar_footer',
        'description'   => __('Footer Section', 'balearic'),
        'before_widget' => '<li id="%1$s" class="widget %2$s">',
        'after_widget'  => '</li>',
        'before_title'  => '<h2 class="widgettitle">',
        'after_title'   => '</h2>'
    ));

    //    register_sidebar( array(
    //        'name' => __( 'Shop Sidebar', 'balearic' ),
    //        'id' => 'shop_sidebar',
    //        'description' => __( 'Estos widgets seran vistos en Tienda y Categorias de Producto', 'balearic' ),
    //        'before_widget' => '<li id='%1$s' class='widget %2$s'>',
    //        'after_widget'  => '</li>',
    //        'before_title'  => '<h2 class='widgettitle'>',
    //        'after_title'   => '</h2>',
    //    ) );

    register_widget('Custom_Social_Widget');
}


/* --------------------------------------------------------------
    CUSTOM ADMIN LOGIN
-------------------------------------------------------------- */

function custom_admin_styles()
{
    $version_remove = NULL;
    wp_register_style('wp-admin-style', get_template_directory_uri() . '/css/custom-wordpress-admin-style.css', false, $version_remove, 'all');
    wp_enqueue_style('wp-admin-style');
}
add_action('login_head', 'custom_admin_styles');
add_action('admin_init', 'custom_admin_styles');


function dashboard_footer()
{
    echo '<span id="footer-thankyou">';
    _e('Gracias por crear con ', 'balearic');
    echo '<a href="http://wordpress.org/" target="_blank">WordPress.</a> - ';
    _e('Tema desarrollado por ', 'balearic');
    echo '<a href="http://robertochoaweb.com/?utm_source=footer_admin&utm_medium=link&utm_content=balearic" target="_blank">Robert Ochoa</a></span>';
}
add_filter('admin_footer_text', 'dashboard_footer');

/* --------------------------------------------------------------
    ADD CUSTOM METABOX
-------------------------------------------------------------- */

require_once('includes/wp_custom_metabox.php');

/* --------------------------------------------------------------
    ADD CUSTOM POST TYPE
-------------------------------------------------------------- */

require_once('includes/wp_custom_post_type.php');

/* --------------------------------------------------------------
    ADD CUSTOM THEME CONTROLS
-------------------------------------------------------------- */

require_once('includes/wp_custom_theme_control.php');

add_filter('get_the_archive_title', function ($title) {
    if (is_category()) {
        $title = single_cat_title('', false);
    } elseif (is_tag()) {
        $title = single_tag_title('', false);
    } elseif (is_author()) {
        $title = '<span class="vcard">' . get_the_author() . '</span>';
    }

    return $title;
});

/* --------------------------------------------------------------
    ADD CUSTOM IMAGE SIZE
-------------------------------------------------------------- */
if (function_exists('add_theme_support')) {
    add_theme_support('post-thumbnails');
    set_post_thumbnail_size(9999, 400, true);
}
if (function_exists('add_image_size')) {
    add_image_size('avatar', 100, 100, true);
    add_image_size('logo', 200, 100, false);
    add_image_size('home_special_img', 900, 600, array('center', 'center'));
    add_image_size('tax_boxed_img', 500, 500, array('center', 'center'));
    add_image_size('tax_boxed_item', 300, 300, array('center', 'center'));
    add_image_size('global_hero', 9999, 300, array('center', 'center'));
}

add_action('pre_get_posts', 'balearic_archive_order');
function balearic_archive_order($query)
{
    if ($query->is_main_query() && !is_admin()) {
        if ($query->is_tax() || $query->is_post_type_archive('servicios')) {
            $query->set('orderby', 'date');
            $query->set('order', 'ASC');
        }
    }
}

/* --------------------------------------------------------------
    AJAX: SEND A MESSAGE
-------------------------------------------------------------- */
add_action('wp_ajax_send_message', 'send_message_callback');
add_action('wp_ajax_nopriv_send_message', 'send_message_callback');

function send_message_callback()
{
    $email = $_POST['form_email'];
    $name = $_POST['form_name'];
    $phone = $_POST['form_phone'];
    $message = $_POST['form_message'];

    ob_start();
    $logo = get_template_directory_uri() . '/images/logo.png';
    require_once get_theme_file_path('/templates/template-contact-email.php');
    $body = ob_get_clean();
    $body = str_replace([
        '{name}',
        '{email}',
        '{phone}',
        '{message}',
        '{logo}'
    ], [
        $name,
        $email,
        $phone,
        $message,
        $logo
    ], $body);
    $path = ABSPATH . WPINC . '/class-phpmailer.php';

    if (file_exists($path)) {
        require_once($path);
        $mail = new PHPMailer;
    } else {
        require_once ABSPATH . WPINC . '/PHPMailer/PHPMailer.php';
        $mail = new PHPMailer\PHPMailer\PHPMailer;
    }

    $mail->isHTML(true);
    $mail->Body = $body;
    $mail->CharSet = 'UTF-8';
    $mail->addAddress(get_option('admin_email'));
    $mail->setFrom("noreply@{$_SERVER['SERVER_NAME']}", esc_html(get_bloginfo('name')));
    $mail->Subject = esc_html__('Balearic Home Mallorca: Nuevo Mensaje', 'balearic');

    if (!$mail->send()) {
        wp_send_json_success(esc_html__("Ha ocurrido un error, por favor intente mas tarde.", 'balearic'), 200);
    } else {
        wp_send_json_success(esc_html__("Gracias por enviar su mensaje, en breve será contactado por uno de nuestros representantes.", 'balearic'), 200);
    }

    wp_die();
}

/* --------------------------------------------------------------
    SOCIAL NETWORK SHORTCODE
-------------------------------------------------------------- */

add_shortcode('bhm_social_networks', 'bhm_social_networks_callback');
function bhm_social_networks_callback()
{
    ob_start();
?>
    <?php $social_settings = get_option('bhm_social_settings'); ?>
    <?php if ($social_settings['facebook'] != '') { ?>
        <a href="<?php echo $social_settings['facebook']; ?>" title="<?php _e('Visita nuestro perfil en Facebook', 'balearic'); ?>" target="_blank"><i class="fa fa-facebook"></i></a>
    <?php } ?>
    <?php if ($social_settings['instagram'] != '') { ?>
        <a href="<?php echo $social_settings['instagram']; ?>" title="<?php _e('Visita nuestro perfil en Instagram', 'balearic'); ?>" target="_blank"><i class="fa fa-instagram"></i></a>
    <?php } ?>
    <?php if ($social_settings['twitter'] != '') { ?>
        <a href="<?php echo $social_settings['twitter']; ?>" title="<?php _e('Visita nuestro perfil en Twitter', 'balearic'); ?>" target="_blank"><i class="fa fa-twitter"></i></a>
    <?php } ?>
    <?php if ($social_settings['linkedin'] != '') { ?>
        <a href="<?php echo $social_settings['linkedin']; ?>" title="<?php _e('Visita nuestro perfil en LinkedIn', 'balearic'); ?>" target="_blank"><i class="fa fa-linkedin"></i></a>
    <?php } ?>
    <?php if ($social_settings['youtube'] != '') { ?>
        <a href="<?php echo $social_settings['youtube']; ?>" title="<?php _e('Visita nuestro perfil en Instagram', 'balearic'); ?>" target="_blank"><i class="fa fa-youtube-play"></i></a>
    <?php } ?>
<?php
    $content = ob_get_clean();
    return $content;
}
