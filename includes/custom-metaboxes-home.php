<?php
/* --------------------------------------------------------------
    1.- HOME: SLIDER SECTION
-------------------------------------------------------------- */
$cmb_home_hero = new_cmb2_box( array(
    'id'            => $prefix . 'home_hero_metabox',
    'title'         => esc_html__( 'Home: Hero Principal', 'balearic' ),
    'object_types'  => array( 'page' ),
    'show_on'       => array( 'key' => 'page-template', 'value' => 'templates/page-home.php' ),
    'context'       => 'normal',
    'priority'      => 'high',
    'show_names'    => true,
    'cmb_styles'    => true,
    'closed'        => false
) );

$group_field_id = $cmb_home_hero->add_field( array(
    'id'            => $prefix . 'home_slider_group',
    'name'          => esc_html__( 'Grupos de Items', 'balearic' ),
    'description'   => __( 'Items dentro del Itemr', 'balearic' ),
    'type'          => 'group',
    'options'       => array(
        'group_title'       => __( 'Item {#}', 'balearic' ),
        'add_button'        => __( 'Agregar otro Item', 'balearic' ),
        'remove_button'     => __( 'Remover Item', 'balearic' ),
        'sortable'          => true,
        'closed'            => true,
        'remove_confirm'    => esc_html__( '¿Estas seguro de remover este Item?', 'balearic' )
    )
) );

$cmb_home_hero->add_group_field( $group_field_id, array(
    'id'        => 'bg_image',
    'name'      => esc_html__( 'Imagen de Fondo del Item', 'balearic' ),
    'desc'      => esc_html__( 'Cargar un fondo para este Item', 'balearic' ),
    'type'      => 'file',
    'options'   => array(
        'url'   => false
    ),
    'text'      => array(
        'add_upload_file_text' => esc_html__( 'Cargar fondo', 'balearic' ),
    ),
    'query_args' => array(
        'type'  => array(
            'image/gif',
            'image/jpeg',
            'image/png'
        )
    ),
    'preview_size' => 'thumbnail'
) );

$cmb_home_hero->add_group_field( $group_field_id, array(
    'id'        => 'pretitle',
    'name'      => esc_html__( 'Pre-Título del Item', 'balearic' ),
    'desc'      => esc_html__( 'Ingrese el Título del Item', 'balearic' ),
    'type'      => 'text'
) );

$cmb_home_hero->add_group_field( $group_field_id, array(
    'id'        => 'title',
    'name'      => esc_html__( 'Titulo del Item', 'balearic' ),
    'desc'      => esc_html__( 'Ingrese la descripción del Item', 'balearic' ),
    'type'      => 'text'
) );

$cmb_home_hero->add_group_field( $group_field_id, array(
    'id'        => 'button_text',
    'name'      => esc_html__( 'Texto del Boton en Item', 'balearic' ),
    'desc'      => esc_html__( 'Ingrese el Texto del boton correspondiente', 'balearic' ),
    'type'      => 'text'
) );

$cmb_home_hero->add_group_field( $group_field_id, array(
    'id'        => 'button_link',
    'name'      => esc_html__( 'Link del Boton en Item', 'balearic' ),
    'desc'      => esc_html__( 'Ingrese el link de accion del boton correspondiente', 'balearic' ),
    'type'      => 'text'
) );

$cmb_home_hero->add_group_field( $group_field_id, array(
    'id'        => 'button_posttitle',
    'name'      => esc_html__( 'Pre-Título del Item', 'balearic' ),
    'desc'      => esc_html__( 'Ingrese el Título del Item', 'balearic' ),
    'type'      => 'text'
) );

/* --------------------------------------------------------------
    2.- HOME: TWO SIDED CONTENT
-------------------------------------------------------------- */
$cmb_home_twosided = new_cmb2_box( array(
    'id'            => $prefix . 'home_twosided_metabox',
    'title'         => esc_html__( 'Home: Sección de Imagen Lateral', 'balearic' ),
    'object_types'  => array( 'page' ),
    'show_on'       => array( 'key' => 'page-template', 'value' => 'templates/page-home.php' ),
    'context'       => 'normal',
    'priority'      => 'high',
    'show_names'    => true,
    'cmb_styles'    => true,
    'closed'        => false
) );

$cmb_home_twosided->add_field( array(
    'id'        => $prefix . 'twosided_image',
    'name'      => esc_html__( 'Imagen de Fondo del Item', 'balearic' ),
    'desc'      => esc_html__( 'Cargar un fondo para este Item', 'balearic' ),
    'type'      => 'file',

    'options' => array(
        'url' => false
    ),
    'text'    => array(
        'add_upload_file_text' => esc_html__( 'Cargar fondo', 'balearic' ),
    ),
    'query_args' => array(
        'type' => array(
            'image/gif',
            'image/jpeg',
            'image/png'
        )
    ),
    'preview_size' => 'thumbnail'
) );

$cmb_home_twosided->add_field( array(
    'id'        => $prefix . 'twosided_title',
    'name'      => esc_html__( 'Titulo de la Sección', 'balearic' ),
    'desc'      => esc_html__( 'Ingrese la descripción del Item', 'balearic' ),
    'type'      => 'text'
) );

$group_field_id = $cmb_home_twosided->add_field( array(
    'id'            => $prefix . 'twosided_group',
    'name'          => esc_html__( 'Grupos de Items', 'balearic' ),
    'description'   => __( 'Items dentro del Itemr', 'balearic' ),
    'type'          => 'group',
    'options'       => array(
        'group_title'       => __( 'Item {#}', 'balearic' ),
        'add_button'        => __( 'Agregar otro Item', 'balearic' ),
        'remove_button'     => __( 'Remover Item', 'balearic' ),
        'sortable'          => true,
        'closed'            => true,
        'remove_confirm'    => esc_html__( '¿Estas seguro de remover este Item?', 'balearic' )
    )
) );

$cmb_home_twosided->add_group_field( $group_field_id, array(
    'id'        => 'title',
    'name'      => esc_html__( 'Título del Item', 'balearic' ),
    'desc'      => esc_html__( 'Ingrese el Título del Item', 'balearic' ),
    'type'      => 'text'
) );

$cmb_home_twosided->add_group_field( $group_field_id, array(
    'id'        => 'desc',
    'name'      => esc_html__( 'Descripción del Item', 'balearic' ),
    'desc'      => esc_html__( 'Ingrese la descripción del Item', 'balearic' ),
    'type'      => 'wysiwyg',
    'options'   => array(
        'textarea_rows' => get_option('default_post_edit_rows', 2),
        'teeny'         => false
    )
) );

/* --------------------------------------------------------------
    2.- HOME: TWO SIDED CONTENT 2
-------------------------------------------------------------- */
$cmb_home_twosided2 = new_cmb2_box( array(
    'id'            => $prefix . 'home_twosided2_metabox',
    'title'         => esc_html__( 'Home: Sección de Imagen Lateral (Imagen a la Izquierda)', 'balearic' ),
    'object_types'  => array( 'page' ),
    'show_on'       => array( 'key' => 'page-template', 'value' => 'templates/page-home.php' ),
    'context'       => 'normal',
    'priority'      => 'high',
    'show_names'    => true,
    'cmb_styles'    => true,
    'closed'        => false
) );

$cmb_home_twosided2->add_field( array(
    'id'        => $prefix . 'twosided2_image',
    'name'      => esc_html__( 'Imagen de Fondo del Item', 'balearic' ),
    'desc'      => esc_html__( 'Cargar un fondo para este Item', 'balearic' ),
    'type'      => 'file',

    'options' => array(
        'url' => false
    ),
    'text'    => array(
        'add_upload_file_text' => esc_html__( 'Cargar fondo', 'balearic' ),
    ),
    'query_args' => array(
        'type' => array(
            'image/gif',
            'image/jpeg',
            'image/png'
        )
    ),
    'preview_size' => 'thumbnail'
) );

$cmb_home_twosided2->add_field( array(
    'id'        => $prefix . 'twosided2_title',
    'name'      => esc_html__( 'Titulo de la Sección', 'balearic' ),
    'desc'      => esc_html__( 'Ingrese la descripción del Item', 'balearic' ),
    'type'      => 'text'
) );

$group_field_id = $cmb_home_twosided2->add_field( array(
    'id'            => $prefix . 'twosided2_group',
    'name'          => esc_html__( 'Grupos de Items', 'balearic' ),
    'description'   => __( 'Items dentro del Itemr', 'balearic' ),
    'type'          => 'group',
    'options'       => array(
        'group_title'       => __( 'Item {#}', 'balearic' ),
        'add_button'        => __( 'Agregar otro Item', 'balearic' ),
        'remove_button'     => __( 'Remover Item', 'balearic' ),
        'sortable'          => true,
        'closed'            => true,
        'remove_confirm'    => esc_html__( '¿Estas seguro de remover este Item?', 'balearic' )
    )
) );

$cmb_home_twosided2->add_group_field( $group_field_id, array(
    'id'        => 'title',
    'name'      => esc_html__( 'Título del Item', 'balearic' ),
    'desc'      => esc_html__( 'Ingrese el Título del Item', 'balearic' ),
    'type'      => 'text'
) );

$cmb_home_twosided2->add_group_field( $group_field_id, array(
    'id'        => 'desc',
    'name'      => esc_html__( 'Descripción del Item', 'balearic' ),
    'desc'      => esc_html__( 'Ingrese la descripción del Item', 'balearic' ),
    'type'      => 'wysiwyg',
    'options'   => array(
        'textarea_rows' => get_option('default_post_edit_rows', 2),
        'teeny'         => false
    )
) );