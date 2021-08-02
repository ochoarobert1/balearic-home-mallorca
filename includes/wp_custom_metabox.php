<?php
function ed_metabox_include_front_page($display, $meta_box)
{
    if (!isset($meta_box['show_on']['key'])) {
        return $display;
    }

    if ('front-page' !== $meta_box['show_on']['key']) {
        return $display;
    }

    $post_id = 0;

    // If we're showing it based on ID, get the current ID
    if (isset($_GET['post'])) {
        $post_id = $_GET['post'];
    } elseif (isset($_POST['post_ID'])) {
        $post_id = $_POST['post_ID'];
    }

    if (!$post_id) {
        return false;
    }

    // Get ID of page set as front page, 0 if there isn't one
    $front_page = get_option('page_on_front');

    // there is a front page set and we're on it!
    return $post_id == $front_page;
}
add_filter('cmb2_show_on', 'ed_metabox_include_front_page', 10, 2);

function be_metabox_show_on_slug($display, $meta_box)
{
    if (!isset($meta_box['show_on']['key'], $meta_box['show_on']['value'])) {
        return $display;
    }

    if ('slug' !== $meta_box['show_on']['key']) {
        return $display;
    }

    $post_id = 0;

    // If we're showing it based on ID, get the current ID
    if (isset($_GET['post'])) {
        $post_id = $_GET['post'];
    } elseif (isset($_POST['post_ID'])) {
        $post_id = $_POST['post_ID'];
    }

    if (!$post_id) {
        return $display;
    }

    $slug = get_post($post_id)->post_name;

    // See if there's a match
    return in_array($slug, (array) $meta_box['show_on']['value']);
}
add_filter('cmb2_show_on', 'be_metabox_show_on_slug', 10, 2);

add_action('cmb2_admin_init', 'balearic_register_custom_metabox');
function balearic_register_custom_metabox()
{
    $prefix = 'bhm_';

    /* --------------------------------------------------------------
    1.- HOME: SLIDER SECTION
-------------------------------------------------------------- */
    $cmb_global_hero = new_cmb2_box(array(
        'id'            => $prefix . 'global_hero_metabox',
        'title'         => esc_html__('Global: Hero con Título', 'balearic'),
        'object_types'  => array('page', 'localizaciones'),
        'context'       => 'side',
        'priority'      => 'high',
        'show_names'    => true,
        'cmb_styles'    => true,
        'closed'        => false
    ));

    $cmb_global_hero->add_field(array(
        'id'        => $prefix . 'global_hero_image',
        'name'      => esc_html__('Imagen de Fondo del Hero', 'balearic'),
        'desc'      => esc_html__('Cargar un fondo para este Item', 'balearic'),
        'type'      => 'file',

        'options' => array(
            'url' => false
        ),
        'text'    => array(
            'add_upload_file_text' => esc_html__('Cargar fondo', 'balearic'),
        ),
        'query_args' => array(
            'type' => array(
                'image/gif',
                'image/jpeg',
                'image/png'
            )
        ),
        'preview_size' => 'thumbnail'
    ));

    /* HOME */
    require_once('custom-metaboxes-home.php');

    /* TAXONOMY */
    require_once('custom-metaboxes-taxonomy.php');

    /* SERVICIOS */
    require_once('custom-metaboxes-services.php');

    /* CONTACTO */
    require_once('custom-metaboxes-contact.php');
    
    /* CONTACTO */
    require_once('custom-metaboxes-localizaciones.php');

     /* CONTACTO */
     require_once('custom-metaboxes-booking.php');
}
