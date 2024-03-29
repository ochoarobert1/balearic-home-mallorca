<?php

/* --------------------------------------------------------------
    ENQUEUE AND REGISTER CSS
-------------------------------------------------------------- */

require_once('includes/wp_enqueue_styles.php');

/* --------------------------------------------------------------
    ENQUEUE AND REGISTER JS
-------------------------------------------------------------- */

if (!is_admin()) {
    add_action('wp_enqueue_scripts', 'balearic_jquery_enqueue');
}
function balearic_jquery_enqueue()
{
    wp_deregister_script('jquery');
    wp_deregister_script('jquery-migrate');
    if ($_SERVER['REMOTE_ADDR'] == '::1') {
        /*- JQUERY ON LOCAL  -*/
        wp_register_script('jquery', get_template_directory_uri() . '/js/jquery.min.js', false, '3.4.1', false);
        /*- JQUERY MIGRATE ON LOCAL  -*/
        wp_register_script('jquery-migrate', get_template_directory_uri() . '/js/jquery-migrate.min.js', array('jquery'), '3.1.0', false);
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
    $version_remove = null;
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
    add_image_size('locals_big_image', 700, 500, array('center', 'center'));
    add_image_size('locals_small_image', 150, 150, array('center', 'center'));
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
    ob_start(); ?>
<?php $social_settings = get_option('bhm_social_settings'); ?>
<div class="social-widget-container">
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
</div>
<?php
    $content = ob_get_clean();
    return $content;
}

/* --------------------------------------------------------------
    CLOSED LOCATIONS
-------------------------------------------------------------- */

add_shortcode('closed-locations', 'closed_locations_callback');
function closed_locations_callback()
{
    $arr_locals = new WP_Query(array('post_type' => 'localizaciones', 'posts_per_page' => 3, 'orderby' => 'date', 'order' => 'DESC'));
    if ($arr_locals->have_posts()) :
    ob_start(); ?>
<div class="locals-main-container locals-shortcode-container container">
    <div class="row align-items-top justify-content-between">
        <?php while ($arr_locals->have_posts()) : $arr_locals->the_post(); ?>
        <?php $is_blocked = get_post_meta(get_the_ID(), '_wpmem_block', true); ?>
        <?php if (!is_user_logged_in()) { ?>
        <?php if ($is_blocked == '0') { ?>
        <article class="locals-item col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12">
            <picture>
                <a href="<?php echo get_permalink(); ?>" title="<?php _e('Ver Localización', 'balearic'); ?>">
                    <?php the_post_thumbnail('tax_boxed_item', array('class' => 'img-fluid')); ?>
                </a>
            </picture>
            <header>
                <a href="<?php echo get_permalink(); ?>" title="<?php _e('Ver Localización', 'balearic'); ?>">
                    <h2><?php the_title(); ?></h2>
                </a>
            </header>
        </article>
        <?php } ?>
        <?php } else { ?>
        <article class="locals-item col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12">
            <picture>
                <a href="<?php echo get_permalink(); ?>" title="<?php _e('Ver Localización', 'balearic'); ?>">
                    <?php the_post_thumbnail('tax_boxed_item', array('class' => 'img-fluid')); ?>
                </a>
            </picture>
            <header>
                <a href="<?php echo get_permalink(); ?>" title="<?php _e('Ver Localización', 'balearic'); ?>">
                    <h2><?php the_title(); ?></h2>
                </a>
            </header>
        </article>
        <?php } ?>
        <?php endwhile; ?>
    </div>
</div>
<?php
    $content = ob_get_clean();
    endif;
    wp_reset_query();
    return $content;
}


/* --------------------------------------------------------------
    AJAX: SEND A MESSAGE
-------------------------------------------------------------- */
add_action('wp_ajax_search_filter', 'search_filter_callback');
add_action('wp_ajax_nopriv_search_filter', 'search_filter_callback');

function search_filter_callback()
{
    if (defined('WP_DEBUG') && WP_DEBUG) {
        error_reporting(E_ALL);
        ini_set('display_errors', 1);
    }

    ob_start();

    if (isset($_POST['busqueda_sencilla'])) {
        $busqueda = $_POST['busqueda_sencilla'];
    }

    if (isset($_POST['bhm_local_type'])) {
        $tipo = $_POST['bhm_local_type'];
    }

    if (isset($_POST['bhm_local_price'])) {
        $precio = $_POST['bhm_local_price'];
    }

    if (isset($_POST['bhm_local_size'])) {
        $size = $_POST['bhm_local_size'];
    }

    if (isset($_POST['bhm_local_room'])) {
        $rooms = $_POST['bhm_local_room'];
    }

    if (isset($_POST['bhm_local_bath'])) {
        $baths = $_POST['bhm_local_bath'];
    }

    if (isset($_POST['bhm_local_equip'])) {
        $equip = $_POST['bhm_local_equip'];
    }

    global $wpdb;

    if ($busqueda != '') {
        $arr_posts = array();

        $fivesdrafts = $wpdb->get_results($wpdb->prepare(
            "SELECT ID FROM $wpdb->posts WHERE post_type = 'localizaciones' AND post_title LIKE %s",
            '%' . $busqueda . '%'
        ));

        foreach ($fivesdrafts as $item) {
            array_push($arr_posts, (int) $item->ID);
        }

        $args = array(
            'post_type'     => 'localizaciones',
            'post_status'   => 'publish',
            'orderby' => 'date',
            'order' => 'DESC',
            'post__in' => $arr_posts,
            'meta_query' => array(
                'relation' => 'OR',
                array(
                    'key'     => 'bhm_local_type',
                    'value'   => $tipo,
                    'compare' => 'LIKE',
                ),
                array(
                    'key' => 'bhm_local_price',
                    'value'   => array( $precio ),
                    'type'    => 'numeric',
                    'compare' => '<=',
                ),
                array(
                    'key' => 'bhm_local_size',
                    'value'   => array( $size ),
                    'type'    => 'numeric',
                    'compare' => '<=',
                ),
                array(
                    'key' => 'bhm_local_room',
                    'value'   => array( $rooms ),
                    'type'    => 'numeric',
                    'compare' => '<=',
                ),
                array(
                    'key' => 'bhm_local_bath',
                    'value'   => array( $baths ),
                    'type'    => 'numeric',
                    'compare' => '<=',
                ),
                array(
                    'key' => 'bhm_local_equip',
                    'value'   => array( $equip ),
                    'compare' => 'LIKE',
                ),
            ),
        );
    } else {
        $args = array(
            'post_type'     => 'localizaciones',
            'post_status'   => 'publish',
            'orderby' => 'date',
            'order' => 'DESC',
            'meta_query' => array(
                'relation' => 'OR',
                array(
                    'key'     => 'bhm_local_type',
                    'value'   => $tipo,
                    'compare' => 'LIKE',
                ),
                array(
                    'key' => 'bhm_local_price',
                    'value'   => $precio,
                    'type'    => 'numeric',
                    'compare' => '<=',
                ),
                array(
                    'key' => 'bhm_local_size',
                    'value'   => array( $size ),
                    'type'    => 'numeric',
                    'compare' => '<=',
                ),
                array(
                    'key' => 'bhm_local_room',
                    'value'   => array( $rooms ),
                    'type'    => 'numeric',
                    'compare' => '<=',
                ),
                array(
                    'key' => 'bhm_local_bath',
                    'value'   => array( $baths ),
                    'type'    => 'numeric',
                    'compare' => '<=',
                ),
                array(
                    'key' => 'bhm_local_equip',
                    'value'   => array( $equip ),
                    'compare' => 'LIKE',
                ),
            ),
        );
    }
    $arr_locals = new WP_Query($args);
    if ($arr_locals->have_posts()) :
        while ($arr_locals->have_posts()) : $arr_locals->the_post(); ?>
<article class="locals-item col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12">
    <picture>
        <a href="<?php echo get_permalink(); ?>" title="<?php _e('Ver Localización', 'balearic'); ?>">
            <?php the_post_thumbnail('tax_boxed_item', array('class' => 'img-fluid')); ?>
        </a>
    </picture>
    <header>
        <a href="<?php echo get_permalink(); ?>" title="<?php _e('Ver Localización', 'balearic'); ?>">
            <h2><?php the_title(); ?></h2>
        </a>
    </header>
</article>
<?php
        endwhile; else :
        ?>
<div class="no-results">
    <h3><?php _e('No hay resultados que coincidan con su búsqueda', 'balearic'); ?></h3>
</div>
<?php
    endif;
    wp_reset_query();
    $content = ob_get_clean();
    echo json_encode($content);
    wp_die();
}

/* --------------------------------------------------------------
    WP-MEMBERS OVERRIDES
-------------------------------------------------------------- */
add_action('wp_ajax_login_action', 'login_action_handler');
add_action('wp_ajax_nopriv_login_action', 'login_action_handler');

function login_action_handler()
{
    $user_name = $_POST['user_name'];
    $user_pass = $_POST['user_pass'];
    $found = true;
    $pass = true;
    $activated = true;

    $user_data = get_user_by('email', $user_name);
    if (empty($user_data)) {
        $user_data = get_user_by('login', $user_name);
        if (empty($user_data)) {
            $found = false;
        }
    }

    if ($found == true) {
        if ($user_data && wp_check_password($user_pass, $user_data->data->user_pass, $user_data->ID)) {
            $pass = true;
        } else {
            $pass = false;
        }
    }

    if (($found == true) && ($pass == true)) {
        $active = get_user_meta($user_data->id, 'active', true);
        $isAdmin = user_can($user_data->id, 'manage_options');
        if (($active != 1) && ($isAdmin != true)) {
            $activated = false;
        } else {
            $activated = true;
        }
    }

    if (($found == false) || ($pass == false)) {
        $arrResponse = array('success' => false, 'data' => __('Hay un problema con sus credenciales, por favor revise sus datos', 'balearic'));
        echo json_encode($arrResponse);
    }

    if ($activated == false) {
        $arrResponse = array('success' => false, 'data' => __('Su usuario aun no ha sido activado, por favor revise sus correos para confirmar su suscripción', 'balearic'));
        echo json_encode($arrResponse);
    }

    if (($found == true) && ($pass == true) && ($activated == true)) {
        $creds = array(
            'user_login'    => $user_name,
            'user_password' => $user_pass,
            'remember'      => true
        );
     
        $user = wp_signon($creds, false);

        $arrResponse = array('success' => true, 'data' => __('Has iniciado sesión, en breve serás redireccionado', 'balearic'));
        echo json_encode($arrResponse);
    }

    wp_die();
}



add_action('wp_ajax_register_action', 'register_action_handler');
add_action('wp_ajax_nopriv_register_action', 'register_action_handler');

function register_action_handler()
{
    $user_fname = $_POST['fname'];
    $user_lname = $_POST['lname'];
    $user_email = $_POST['email'];
    $user_pass = $_POST['pass'];
    $user_cpass = $_POST['cpass'];
    $error = false;

    if ($user_pass != $user_cpass) {
        $error = true;
        $arrResponse = array('success' => false, 'data' => __('Las contraseñas no coinciden', 'balearic'));
        echo json_encode($arrResponse);
    } else {
        $exists = email_exists($user_email);
        if ($exists != false) {
            $error = true;
            $arrResponse = array('success' => false, 'data' => __('El correo ya existe dentro de nuestra base de datos', 'balearic'));
            echo json_encode($arrResponse);
        }
    }

    if ($error == false) {
        $username = explode('@', $user_email);
        $userdata = array(
            'user_login'            => $username[0].$username[1],
            'user_email'            => $user_email,
            'first_name'            => $user_fname,
            'last_name'             => $user_lname,
            'user_pass'             => $user_pass,
            'role'                  => 'subscriber'
        );

        $user_id = wp_insert_user($userdata);

        ob_start();
        $logo = get_template_directory_uri() . '/images/logo.png';
        require_once get_theme_file_path('/templates/template-register-email.php');
        $body = ob_get_clean();
        $body = str_replace([
            '{name}',
            '{lastname}',
            '{email}',
            '{logo}',
            '{correo_title}'
        ], [
            $user_fname,
            $user_lname,
            $user_email,
            $logo,
            __('Nuevo Registro', 'balearic')
        ], $body);
        $path = ABSPATH . WPINC . '/class-phpmailer.php';

        if (file_exists($path)) {
            require_once($path);
            $mail = new PHPMailer;
        } else {
            require_once ABSPATH . WPINC . '/PHPMailer/PHPMailer.php';
            $mail = new PHPMailer\PHPMailer\PHPMailer;
        }

        try {
            $mail->isHTML(true);
            $mail->Body = $body;
            $mail->CharSet = 'UTF-8';
            $mail->addAddress($user_email);
            //$mail->addBCC(get_option('admin_email'));
            $mail->addBCC('ochoa.robert1@gmail.com');
            $mail->setFrom("noreply@{$_SERVER['SERVER_NAME']}", esc_html(get_bloginfo('name')));
            $mail->Subject = esc_html__('Balearic Home Mallorca: Nuevo Registro', 'balearic');
    
            $mail->send();

            if (! is_wp_error($user_id)) {
                $arrResponse = array('success' => true, 'data' => __('Te has registrado correctamente, en breve recibiras una confirmación de activación al correo electrónico', 'balearic'));
                echo json_encode($arrResponse);
            }
        } catch (Exception $e) {
            $arrResponse = array('success' => true, 'data' => 'Message could not be sent. Mailer Error:' . $mail->ErrorInfo);
            echo json_encode($arrResponse);
        }
    }
    wp_die();
}

/* --------------------------------------------------------------
    SEASONS: GET CURRENT SEASONS
-------------------------------------------------------------- */
function get_current_season()
{
    $current_season = '';
    $today = date('m/d/Y');
    $arr_temporadas = array();
    $arr_temporadas = get_terms(array('taxonomy' => 'temporadas', 'hide_empty' => false));
    foreach ($arr_temporadas as $term) {
        $begin = get_term_meta($term->term_id, 'bhm_season_begin', true);
        $end = get_term_meta($term->term_id, 'bhm_season_end', true);

        $fecha_inicio = strtotime($begin);
        $fecha_fin = strtotime($end);
        $fecha = strtotime($today);

        if (($fecha >= $fecha_inicio) && ($fecha <= $fecha_fin)) {
            $current_season = $term->term_id;
            break;
        }
    }

    return $current_season;
}

add_action('wp_ajax_register_reservation', 'register_reservation_handler');
add_action('wp_ajax_nopriv_register_reservation', 'register_reservation_handler');

function register_reservation_handler()
{
    $checkin = DateTime::createFromFormat("d/m/Y", $_POST['checkin'])->format('m/d/Y');
    $checkout = DateTime::createFromFormat("d/m/Y", $_POST['checkout'])->format('m/d/Y');
    $adultos = $_POST['qtyadultos'];
    $kids = $_POST['qtykids'];
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $comments = $_POST['comments'];
    $locationID = $_POST['locationID'];

    $post_title = $name . '-' . $checkin  . '-' . $checkout;
    
    $my_post = array(
            'post_type'     => 'booking',
            'post_title'    => wp_strip_all_tags($post_title),
            'post_status'   => 'publish',
            'post_author'   => 1,
            'meta_input' => array(
                'bhm_booking_location' => $locationID,
                'bhm_booking_start' => $checkin,
                'bhm_booking_end' => $checkout,
                'bhm_quantity_adults' => $adultos,
                'bhm_quantity_kids' => $kids,
                'bhm_booking_status' => 'pending',
                'bhm_booking_payment_method' => '',
                'bhm_booking_payment_ref' => '',
                'bhm_booking_payment_date' => '',
                'bhm_booking_fullname' => $name,
                'bhm_booking_phone' => $phone,
                'bhm_booking_email' => $email,
                'bhm_booking_comments' => $comments,
            )
          );
    $id_booking = wp_insert_post($my_post);

    send_admin_booking_email($id_booking);
    wp_die();
}

function send_admin_booking_email($id_booking)
{
    $checkin = get_post_meta($id_booking, 'bhm_booking_start', true);
    $checkout = get_post_meta($id_booking, 'bhm_booking_end', true);
    $adultos = get_post_meta($id_booking, 'bhm_quantity_adults', true);
    $kids = get_post_meta($id_booking, 'bhm_quantity_kids', true);
    $name = get_post_meta($id_booking, 'bhm_booking_fullname', true);
    $phone = get_post_meta($id_booking, 'bhm_booking_phone', true);
    $email = get_post_meta($id_booking, 'bhm_booking_email', true);
    $comments = get_post_meta($id_booking, 'bhm_booking_comments', true);
    $locationID = get_post_meta($id_booking, 'bhm_booking_location', true);

    $logo = get_template_directory_uri() . '/images/logo.png';
    $titulo = esc_html__('Balearic Home Mallorca - Nueva Reserva', 'balearic');
    $locals_titulo = esc_html__('Localización', 'balearic');
    $cantidad_adultos_titulo = esc_html__('Cantidad de Adultos', 'balearic');
    $cantidad_kids_titulo = esc_html__('Cantidad de Niños', 'balearic');
    $nombre_titulo = esc_html__('Nombre', 'balearic');
    $phone_titulo = esc_html__('Teléfono', 'balearic');
    $message_titulo = esc_html__('Comentario Adicional', 'balearic');

    $location = get_post($locationID);
    $fechas = $checkin . ' | ' . $checkout;


    ob_start();
    require_once get_theme_file_path('/templates/template-email-reservation.php');
    $body = ob_get_clean();
    $body = str_replace([
        '{titulo}',
        '{locals_titulo}',
        '{cantidad_adultos_titulo}',
        '{cantidad_kids_titulo}',
        '{nombre_titulo}',
        '{phone_titulo}',
        '{message_titulo}',
        '{locals}',
        '{fechas}',
        '{cantidad_adultos}',
        '{cantidad_kids}',
        '{name}',
        '{email}',
        '{phone}',
        '{message}',
        '{logo}'
        
    ], [
        $titulo,
        $locals_titulo,
        $cantidad_adultos_titulo,
        $cantidad_kids_titulo,
        $nombre_titulo,
        $phone_titulo,
        $message_titulo,
        $location->post_title,
        $fechas,
        $adultos,
        $kids,
        $name,
        $email,
        $phone,
        $comments,
        $logo
        
    ], $body);

    $email_settings = get_option('bhm_email_settings');

    $to = $email_settings['main_email'];
            
    $emailsCC = $email_settings['cc_email'] . ',' . $email;
    $emailsBCC = $email_settings['bcc_email'];
            
    $headers[] = 'Content-Type: text/html; charset=UTF-8';
    $headers[] = 'From: ' . esc_html(get_bloginfo('name')) . ' <noreply@' . strtolower($_SERVER['SERVER_NAME']) . '>';
    $headers[] = 'Cc: ' . $emailsCC;
    $headers[] = 'Bcc: ' . $emailsBCC;
            
    $subject = esc_html__('Balearic Home Mallorca: Nueva Reserva', 'balearic');

    $sent = wp_mail($to, $subject, $body, $headers);

    if ($sent == false) {
        wp_send_json_success(esc_html__("Su reserva ha sido procesada, en breve serás redirigido.", 'balearic'), 200);
    } else {
        wp_send_json_success(esc_html__("Su reserva ha sido procesada, en breve serás redirigido.", 'balearic'), 200);
    }

    wp_die();
}
