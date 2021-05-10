<?php
/* --------------------------------------------------------------
    1.- LOCALS - GALLERY
-------------------------------------------------------------- */
$cmb_local_lock = new_cmb2_box(array(
    'id'            => $prefix . 'main_locals_blocker_metabox',
    'title'         => esc_html__('Propiedades Premium', 'balearic'),
    'object_types'  => array('localizaciones'),
    'context'       => 'side',
    'priority'      => 'high',
    'show_names'    => true,
    'cmb_styles'    => true,
    'closed'        => false
));

$cmb_local_lock->add_field(array(
    'id'   => $prefix . 'local_locked',
    'name'      => esc_html__('Esta propiedad es Premium?', 'balearic'),
    'desc'      => esc_html__('Activar si esta propiedad esta bloqueada solo para el acceso VIP', 'balearic'),
    'type'      => 'checkbox'
));

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

$cmb_main_locals->add_field(array(
    'id'   => $prefix . 'main_locals_gallery',
    'name' => esc_html__('Galería de Fotos', 'balearic'),
    'desc' => esc_html__('Seleccione las fotos que deben aparecer en el slider', 'balearic'),
    'type' => 'file_list',
    'preview_size' => array(50, 50), // Default: array( 50, 50 )
    'query_args' => array('type' => 'image'), // Only images attachment
    'text' => array(
        'add_upload_files_text' => 'Replacement', // default: "Add or Upload Files"
        'remove_image_text' => 'Replacement', // default: "Remove Image"
        'file_text' => 'Replacement', // default: "File:"
        'file_download_text' => 'Replacement', // default: "Download"
        'remove_text' => 'Replacement', // default: "Remove"
    ),
));

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

$cmb_main_locals_desc->add_field(array(
    'id'        => $prefix . 'local_id',
    'name'      => esc_html__('ID de Propiedad', 'balearic'),
    'desc'      => esc_html__('Ingrese el ID de la Propiedad', 'balearic'),
    'type'      => 'text'
));

$cmb_main_locals_desc->add_field(array(
    'id'        => $prefix . 'local_price',
    'name'      => esc_html__('Precio de Propiedad', 'balearic'),
    'desc'      => esc_html__('Ingrese el precio de la Propiedad', 'balearic'),
    'type'      => 'text_money',
    'before_field' => '€'
));

$cmb_main_locals_desc->add_field(array(
    'id'        => $prefix . 'local_type',
    'name'      => esc_html__('Tipo de Propiedad', 'balearic'),
    'desc'      => esc_html__('Seleccione el tipo de Propiedad', 'balearic'),
    'type'      => 'select',
    'options'   => array(
        'piso' => 'Piso',
        'chalet' => 'Casas o Chalets',
        'rustico' => 'Casas rústicas',
        'duplex' => 'Dúplex',
        'aticos' => 'Áticos',
        'castillos' => 'Castillos',
    )
));

$cmb_main_locals_desc->add_field(array(
    'id'        => $prefix . 'local_size',
    'name'      => esc_html__('Tamaño de Propiedad', 'balearic'),
    'desc'      => esc_html__('Ingrese el tamaño de la Propiedad (Solo números)', 'balearic'),
    'type'      => 'text'
));

$cmb_main_locals_desc->add_field(array(
    'id'        => $prefix . 'local_room',
    'name'      => esc_html__('Cantidad de Habitaciones de Propiedad', 'balearic'),
    'desc'      => esc_html__('Enumere la cantidad de habitaciones de Propiedad', 'balearic'),
    'type'      => 'text',
    'attributes' => array(
        'type' => 'number',
        'pattern' => '\d*',
    ),
));

$cmb_main_locals_desc->add_field(array(
    'id'        => $prefix . 'local_bath',
    'name'      => esc_html__('Cantidad de baños de Propiedad', 'balearic'),
    'desc'      => esc_html__('Enumere la cantidad de baños de Propiedad', 'balearic'),
    'type'      => 'text',
    'attributes' => array(
        'type' => 'number',
        'pattern' => '\d*',
    ),
));

$cmb_main_locals_desc->add_field(array(
    'id'        => $prefix . 'local_equip',
    'name'      => esc_html__('Equipamiento de Propiedad', 'balearic'),
    'desc'      => esc_html__('Seleccione el Equipamiento de Propiedad', 'balearic'),
    'type'      => 'select',
    'options'   => array(
        'none' => 'No Aplica',
        'amueblado' => 'Amueblado',
        'cocina' => 'Solo cocina amueblada'
    )
));

/* --------------------------------------------------------------
    3.- LOCALS - MICS DETAILS
-------------------------------------------------------------- */
$cmb_main_locals_desc = new_cmb2_box(array(
    'id'            => $prefix . 'main_locals_mics_metabox',
    'title'         => esc_html__('Localizaciones: Miscelaneas', 'balearic'),
    'object_types'  => array('localizaciones'),
    'context'       => 'normal',
    'priority'      => 'high',
    'show_names'    => true,
    'cmb_styles'    => true,
    'closed'        => false
));

$cmb_main_locals_desc->add_field(array(
    'id'        => $prefix . 'local_mics',
    'name'      => esc_html__('Características de Propiedad', 'balearic'),
    'desc'      => esc_html__('Seleccione las características que apliquen a esta Propiedad', 'balearic'),
    'type'    => 'multicheck',
    'options' => array(
        'ascensor' => 'Ascensor',
        'garaje' => 'Plaza de garaje',
        'piscina' => 'Piscina',
        'terraza' => 'Terraza',
        'exterior' => 'Exterior',
        'trastero' => 'Trastero',
        'aire_acondicionado' => 'Aire acondicionado',
        'calefaccion' => 'Calefacción',
        'armarios' => 'Armarios empotrados',
        'jardin' => 'Jardín',
        'mascotas' => 'Admite mascotas',
        'gym' => 'Gim',
        'vista_oceano' => 'Vista al océano',
    ),
));
