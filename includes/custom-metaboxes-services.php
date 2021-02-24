<?php
/* --------------------------------------------------------------
    1.- SERVICIOS: INFORMACION PRINCIPAL
-------------------------------------------------------------- */

$cmb_main_services = new_cmb2_box(array(
    'id'            => $prefix . 'main_services_metabox',
    'title'         => esc_html__('Servicios: Información Principal', 'balearic'),
    'object_types'  => array('servicios'),
    'context'       => 'normal',
    'priority'      => 'high',
    'show_names'    => true,
    'cmb_styles'    => true,
    'closed'        => false
));

$group_field_id = $cmb_main_services->add_field(array(
    'id'            => $prefix . 'services_description_group',
    'name'          => esc_html__('Grupos de Descripciones', 'balearic'),
    'description'   => __('Servicios dentro del Itemr', 'balearic'),
    'type'          => 'group',
    'options'       => array(
        'group_title'       => __('Descripción {#}', 'balearic'),
        'add_button'        => __('Agregar otra Descripción', 'balearic'),
        'remove_button'     => __('Remover Descripción', 'balearic'),
        'sortable'          => true,
        'closed'            => true,
        'remove_confirm'    => esc_html__('¿Estas seguro de remover esta Descripción?', 'balearic')
    )
));

$cmb_main_services->add_group_field($group_field_id, array(
    'id'        => 'desc',
    'name'      => esc_html__('Descripción', 'balearic'),
    'desc'      => esc_html__('Ingrese la descripción', 'balearic'),
    'type'      => 'wysiwyg',
    'options'   => array(
        'textarea_rows' => get_option('default_post_edit_rows', 2),
        'teeny'         => false
    )
));

$cmb_main_services->add_group_field($group_field_id, array(
    'id'        => 'btn_text',
    'name'      => esc_html__('Texto del Botón', 'balearic'),
    'desc'      => esc_html__('Ingrese el Texto del Botón', 'balearic'),
    'type'      => 'text'
));

$cmb_main_services->add_group_field($group_field_id, array(
    'id'        => 'btn_link',
    'name'      => esc_html__('Link URL del Botón', 'balearic'),
    'desc'      => esc_html__('Ingrese el Link URL del Botón', 'balearic'),
    'type'      => 'text_url'
));