<?php
/* --------------------------------------------------------------
    1.- LOCALS - GALLERY
-------------------------------------------------------------- */
$cmb_main_locals = new_cmb2_box(array(
    'id'            => $prefix . 'main_locals_metabox',
    'title'         => esc_html__('Galería de Fotos', 'balearic'),
    'object_types'  => array('localizaciones'),
    'context'       => 'side',
    'priority'      => 'high',
    'show_names'    => true,
    'cmb_styles'    => true,
    'closed'        => false
));

$cmb_main_locals->add_field( array(
    'id'   => $prefix . 'main_locals_gallery',
	'name' => esc_html__('Galería de Fotos', 'balearic'),
	'desc' => esc_html__('Seleccione las fotos que deben aparecer en el slider', 'balearic'),
	'type' => 'file_list',
	'preview_size' => array( 50, 50 ), // Default: array( 50, 50 )
	'query_args' => array( 'type' => 'image' ), // Only images attachment
	'text' => array(
		'add_upload_files_text' => 'Replacement', // default: "Add or Upload Files"
		'remove_image_text' => 'Replacement', // default: "Remove Image"
		'file_text' => 'Replacement', // default: "File:"
		'file_download_text' => 'Replacement', // default: "Download"
		'remove_text' => 'Replacement', // default: "Remove"
	),
) );

/* --------------------------------------------------------------
    2.- LOCALS - DETAILS
-------------------------------------------------------------- */
$cmb_main_locals_desc = new_cmb2_box(array(
    'id'            => $prefix . 'main_locals_desc_metabox',
    'title'         => esc_html__('Localizaciones: Especificaciones', 'balearic'),
    'object_types'  => array('localizaciones'),
    'context'       => 'normal',
    'priority'      => 'high',
    'show_names'    => true,
    'cmb_styles'    => true,
    'closed'        => false
));


$group_field_id = $cmb_main_locals_desc->add_field(array(
    'id'            => $prefix . 'locals_desc_group',
    'name'          => esc_html__('Grupos de Especificaciones', 'balearic'),
    'description'   => __('Especificaciones de la Localizacion', 'balearic'),
    'type'          => 'group',
    'options'       => array(
        'group_title'       => __('Detalle {#}', 'balearic'),
        'add_button'        => __('Agregar otro Detalle', 'balearic'),
        'remove_button'     => __('Remover Detalle', 'balearic'),
        'sortable'          => true,
        'closed'            => true,
        'remove_confirm'    => esc_html__('¿Estas seguro de remover este Detalle?', 'balearic')
    )
));

$cmb_main_locals_desc->add_group_field($group_field_id, array(
    'id'        => 'title',
    'name'      => esc_html__('Titulo del Detalle', 'balearic'),
    'desc'      => esc_html__('Ingrese el titulo del Detalle', 'balearic'),
    'type'      => 'text'
));

$cmb_main_locals_desc->add_group_field($group_field_id, array(
    'id'        => 'desc',
    'name'      => esc_html__('Descripción del Detalle', 'balearic'),
    'desc'      => esc_html__('Ingrese la descripción del Detalle', 'balearic'),
    'type'      => 'wysiwyg',
    'options'   => array(
        'textarea_rows' => get_option('default_post_edit_rows', 2),
        'teeny'         => false
    )
));

/* --------------------------------------------------------------
    3.- LOCALS - ADDRESS
-------------------------------------------------------------- */
$cmb_main_locals_dir = new_cmb2_box(array(
    'id'            => $prefix . 'main_locals_dir_metabox',
    'title'         => esc_html__('Localizaciones: Dirección', 'balearic'),
    'object_types'  => array('localizaciones'),
    'context'       => 'normal',
    'priority'      => 'high',
    'show_names'    => true,
    'cmb_styles'    => true,
    'closed'        => false
));

$cmb_main_locals_dir->add_field( array(
    'id'        =>  $prefix . 'googlemaps_link',
    'name'      => esc_html__('Link del Mapa en Google Maps', 'balearic'),
    'desc'      => esc_html__('Ingrese el Link del Mapa en Google Maps', 'balearic'),
    'type'      => 'text_url'
));

$group_field_id = $cmb_main_locals_dir->add_field(array(
    'id'            => $prefix . 'locals_dir_group',
    'name'          => esc_html__('Grupos de Dirección', 'balearic'),
    'description'   => __('Dirección de la Localizacion', 'balearic'),
    'type'          => 'group',
    'options'       => array(
        'group_title'       => __('Dirección {#}', 'balearic'),
        'add_button'        => __('Agregar otro Dirección', 'balearic'),
        'remove_button'     => __('Remover Dirección', 'balearic'),
        'sortable'          => true,
        'closed'            => true,
        'remove_confirm'    => esc_html__('¿Estas seguro de remover este Dirección?', 'balearic')
    )
));

$cmb_main_locals_dir->add_group_field($group_field_id, array(
    'id'        => 'title',
    'name'      => esc_html__('Titulo del Detalle', 'balearic'),
    'desc'      => esc_html__('Ingrese el titulo del Detalle', 'balearic'),
    'type'      => 'text'
));

$cmb_main_locals_dir->add_group_field($group_field_id, array(
    'id'        => 'desc',
    'name'      => esc_html__('Descripción del Detalle', 'balearic'),
    'desc'      => esc_html__('Ingrese la descripción del Detalle', 'balearic'),
    'type'      => 'text'
));

/* --------------------------------------------------------------
    4.- LOCALS - DETAILS
-------------------------------------------------------------- */
$cmb_main_locals_details = new_cmb2_box(array(
    'id'            => $prefix . 'main_locals_details_metabox',
    'title'         => esc_html__('Localizaciones: Detalles', 'balearic'),
    'object_types'  => array('localizaciones'),
    'context'       => 'normal',
    'priority'      => 'high',
    'show_names'    => true,
    'cmb_styles'    => true,
    'closed'        => false
));

$group_field_id = $cmb_main_locals_details->add_field(array(
    'id'            => $prefix . 'locals_details_group',
    'name'          => esc_html__('Grupos de Especificaciones', 'balearic'),
    'description'   => __('Especificaciones de la Localizacion', 'balearic'),
    'type'          => 'group',
    'options'       => array(
        'group_title'       => __('Detalle {#}', 'balearic'),
        'add_button'        => __('Agregar otro Detalle', 'balearic'),
        'remove_button'     => __('Remover Detalle', 'balearic'),
        'sortable'          => true,
        'closed'            => true,
        'remove_confirm'    => esc_html__('¿Estas seguro de remover este Detalle?', 'balearic')
    )
));

$cmb_main_locals_details->add_group_field($group_field_id, array(
    'id'        => 'title',
    'name'      => esc_html__('Titulo del Detalle', 'balearic'),
    'desc'      => esc_html__('Ingrese el titulo del Detalle', 'balearic'),
    'type'      => 'text'
));

$cmb_main_locals_details->add_group_field($group_field_id, array(
    'id'        => 'desc',
    'name'      => esc_html__('Descripción del Detalle', 'balearic'),
    'desc'      => esc_html__('Ingrese la descripción del Detalle', 'balearic'),
    'type'      => 'text'
));

/* --------------------------------------------------------------
    5.- LOCALS - FEATURES
-------------------------------------------------------------- */
$cmb_main_locals_features = new_cmb2_box(array(
    'id'            => $prefix . 'main_locals_features_metabox',
    'title'         => esc_html__('Localizaciones: Beneficios', 'balearic'),
    'object_types'  => array('localizaciones'),
    'context'       => 'normal',
    'priority'      => 'high',
    'show_names'    => true,
    'cmb_styles'    => true,
    'closed'        => false
));

$group_field_id = $cmb_main_locals_features->add_field(array(
    'id'            => $prefix . 'locals_features_group',
    'name'          => esc_html__('Grupos de Beneficios', 'balearic'),
    'description'   => __('Beneficios de la Localizacion', 'balearic'),
    'type'          => 'group',
    'options'       => array(
        'group_title'       => __('Detalle {#}', 'balearic'),
        'add_button'        => __('Agregar otro Detalle', 'balearic'),
        'remove_button'     => __('Remover Detalle', 'balearic'),
        'sortable'          => true,
        'closed'            => true,
        'remove_confirm'    => esc_html__('¿Estas seguro de remover este Detalle?', 'balearic')
    )
));

$cmb_main_locals_features->add_group_field($group_field_id, array(
    'id'        => 'title',
    'name'      => esc_html__('Titulo del Detalle', 'balearic'),
    'desc'      => esc_html__('Ingrese el titulo del Detalle', 'balearic'),
    'type'      => 'text'
));

