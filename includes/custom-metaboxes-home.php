<?php
/* --------------------------------------------------------------
    1.- HOME: SLIDER SECTION
-------------------------------------------------------------- */
$cmb_home_hero = new_cmb2_box(array(
    'id'            => $prefix . 'home_hero_metabox',
    'title'         => esc_html__('Home: Hero Principal', 'balearic'),
    'object_types'  => array('page'),
    'show_on'       => array('key' => 'page-template', 'value' => 'templates/page-home.php'),
    'context'       => 'normal',
    'priority'      => 'high',
    'show_names'    => true,
    'cmb_styles'    => true,
    'closed'        => false
));

$cmb_home_hero->add_field(array(
    'id'        => $prefix . 'home_hero_image',
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

/* --------------------------------------------------------------
    2.- HOME: LOCALIZACIONES
-------------------------------------------------------------- */

$cmb_home_locals = new_cmb2_box(array(
    'id'            => $prefix . 'home_locals_metabox',
    'title'         => esc_html__('Home: Localizaciones', 'balearic'),
    'object_types'  => array('page'),
    'show_on'       => array('key' => 'page-template', 'value' => 'templates/page-home.php'),
    'context'       => 'normal',
    'priority'      => 'high',
    'show_names'    => true,
    'cmb_styles'    => true,
    'closed'        => false
));

$cmb_home_locals->add_field(array(
    'id'        => $prefix . 'home_locals_title',
    'name'      => esc_html__('Titulo de la Sección', 'balearic'),
    'desc'      => esc_html__('Ingrese la descripción del Item', 'balearic'),
    'type'      => 'text'
));

/* --------------------------------------------------------------
    3.- HOME: SERVICIOS
-------------------------------------------------------------- */

$cmb_home_services = new_cmb2_box(array(
    'id'            => $prefix . 'home_services_metabox',
    'title'         => esc_html__('Home: Servicios', 'balearic'),
    'object_types'  => array('page'),
    'show_on'       => array('key' => 'page-template', 'value' => 'templates/page-home.php'),
    'context'       => 'normal',
    'priority'      => 'high',
    'show_names'    => true,
    'cmb_styles'    => true,
    'closed'        => false
));

$cmb_home_services->add_field(array(
    'id'        => $prefix . 'home_services_title',
    'name'      => esc_html__('Titulo de la Sección', 'balearic'),
    'desc'      => esc_html__('Ingrese la descripción del Item', 'balearic'),
    'type'      => 'text'
));

$group_field_id = $cmb_home_services->add_field(array(
    'id'            => $prefix . 'home_services_group',
    'name'          => esc_html__('Grupos de Servicios', 'balearic'),
    'description'   => __('Servicios dentro del Item', 'balearic'),
    'type'          => 'group',
    'options'       => array(
        'group_title'       => __('Servicio {#}', 'balearic'),
        'add_button'        => __('Agregar otro Servicio', 'balearic'),
        'remove_button'     => __('Remover Servicio', 'balearic'),
        'sortable'          => true,
        'closed'            => true,
        'remove_confirm'    => esc_html__('¿Estas seguro de remover este Servicio?', 'balearic')
    )
));

$cmb_home_services->add_group_field($group_field_id, array(
    'id'        => 'icon',
    'name'      => esc_html__('Ícono del Servicio', 'balearic'),
    'desc'      => esc_html__('Cargar un Ícono para este Servicio', 'balearic'),
    'type'      => 'file',
    'options'   => array(
        'url'   => false
    ),
    'text'      => array(
        'add_upload_file_text' => esc_html__('Cargar Ícono', 'balearic'),
    ),
    'query_args' => array(
        'type'  => array(
            'image/gif',
            'image/jpeg',
            'image/png'
        )
    ),
    'preview_size' => 'thumbnail'
));

$cmb_home_services->add_group_field($group_field_id, array(
    'id'        => 'title',
    'name'      => esc_html__('Titulo del Servicio', 'balearic'),
    'desc'      => esc_html__('Ingrese la descripción del Servicio', 'balearic'),
    'type'      => 'text'
));

$cmb_home_services->add_group_field($group_field_id, array(
    'id'        => 'button_link',
    'name'      => esc_html__('Link del Servicio', 'balearic'),
    'desc'      => esc_html__('Ingrese el link de accion del boton correspondiente', 'balearic'),
    'type'      => 'text'
));

/* --------------------------------------------------------------
    4.- HOME: CONTACT US
-------------------------------------------------------------- */
$cmb_home_contact = new_cmb2_box(array(
    'id'            => $prefix . 'home_contact_metabox',
    'title'         => esc_html__('Home: Contacto', 'balearic'),
    'object_types'  => array('page'),
    'show_on'       => array('key' => 'page-template', 'value' => 'templates/page-home.php'),
    'context'       => 'normal',
    'priority'      => 'high',
    'show_names'    => true,
    'cmb_styles'    => true,
    'closed'        => false
));

$cmb_home_contact->add_field(array(
    'id'        => $prefix . 'home_contact_content',
    'name'      => esc_html__('Contenido de la Sección', 'balearic'),
    'desc'      => esc_html__('Ingrese la descripción del Item', 'balearic'),
    'type'      => 'wysiwyg',
    'options'   => array(
        'textarea_rows' => get_option('default_post_edit_rows', 2),
        'teeny'         => false
    )
));

$group_field_id = $cmb_home_contact->add_field(array(
    'id'            => $prefix . 'home_contact_group',
    'name'          => esc_html__('Grupos de Items', 'balearic'),
    'description'   => __('Items dentro del Itemr', 'balearic'),
    'type'          => 'group',
    'options'       => array(
        'group_title'       => __('Item {#}', 'balearic'),
        'add_button'        => __('Agregar otro Item', 'balearic'),
        'remove_button'     => __('Remover Item', 'balearic'),
        'sortable'          => true,
        'closed'            => true,
        'remove_confirm'    => esc_html__('¿Estas seguro de remover este Item?', 'balearic')
    )
));

$cmb_home_contact->add_group_field($group_field_id, array(
    'id'        => 'title',
    'name'      => esc_html__('Título del Item', 'balearic'),
    'desc'      => esc_html__('Ingrese el Título del Item', 'balearic'),
    'type'      => 'text'
));

$cmb_home_contact->add_group_field($group_field_id, array(
    'id'        => 'desc',
    'name'      => esc_html__('Descripción del Item', 'balearic'),
    'desc'      => esc_html__('Ingrese la descripción del Item', 'balearic'),
    'type'      => 'wysiwyg',
    'options'   => array(
        'textarea_rows' => get_option('default_post_edit_rows', 2),
        'teeny'         => false
    )
));

$cmb_home_contact->add_field(array(
    'id'        => $prefix . 'home_contact_embed',
    'name'      => esc_html__('Código embed del Mapa', 'balearic'),
    'desc'      => esc_html__('Ingrese la descripción del Item', 'balearic'),
    'type'      => 'textarea_code'
));
