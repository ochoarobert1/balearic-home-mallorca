<?php
/* --------------------------------------------------------------
    1.- HOME: SLIDER SECTION
-------------------------------------------------------------- */
$cmb_custom_tax = new_cmb2_box(array(
    'id'            => $prefix . 'custom_tax_metabox',
    'title'         => esc_html__('Tipos de Localizaciones:', 'balearic'),
    'object_types'  => array('term'),
    'taxonomies'    => array('tipos-localizaciones'),
    'context'       => 'normal',
    'priority'      => 'high',
    'show_names'    => true,
    'cmb_styles'    => true,
    'closed'        => false
));

$cmb_custom_tax->add_field(array(
    'id'        => $prefix . 'tax_image',
    'name'      => esc_html__('Imagen Principal', 'balearic'),
    'desc'      => esc_html__('Cargar una imagen para esta taxonomia', 'balearic'),
    'type'      => 'file',

    'options' => array(
        'url' => false
    ),
    'text'    => array(
        'add_upload_file_text' => esc_html__('Cargar Imagen', 'balearic'),
    ),
    'query_args' => array(
        'type' => array(
            'image/gif',
            'image/jpeg',
            'image/png',
            'image/webp'
        )
    ),
    'preview_size' => 'thumbnail'
));
