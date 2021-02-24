<?php
/* --------------------------------------------------------------
    1.- CONTACT: MAIN INFO
-------------------------------------------------------------- */
$cmb_main_contact = new_cmb2_box(array(
    'id'            => $prefix . 'main_contact_metabox',
    'title'         => esc_html__('Contacto: Información Principal', 'balearic'),
    'object_types'  => array('page'),
    'show_on'       => array('key' => 'page-template', 'value' => 'templates/page-contact.php'),
    'context'       => 'normal',
    'priority'      => 'high',
    'show_names'    => true,
    'cmb_styles'    => true,
    'closed'        => false
));

$cmb_main_contact->add_field(array(
    'id'        => $prefix . 'main_contact_content',
    'name'      => esc_html__('Contenido de la Sección', 'balearic'),
    'desc'      => esc_html__('Ingrese la descripción del Item', 'balearic'),
    'type'      => 'wysiwyg',
    'options'   => array(
        'textarea_rows' => get_option('default_post_edit_rows', 2),
        'teeny'         => false
    )
));

$group_field_id = $cmb_main_contact->add_field(array(
    'id'            => $prefix . 'main_contact_group',
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

$cmb_main_contact->add_group_field($group_field_id, array(
    'id'        => 'title',
    'name'      => esc_html__('Título del Item', 'balearic'),
    'desc'      => esc_html__('Ingrese el Título del Item', 'balearic'),
    'type'      => 'text'
));

$cmb_main_contact->add_group_field($group_field_id, array(
    'id'        => 'desc',
    'name'      => esc_html__('Descripción del Item', 'balearic'),
    'desc'      => esc_html__('Ingrese la descripción del Item', 'balearic'),
    'type'      => 'wysiwyg',
    'options'   => array(
        'textarea_rows' => get_option('default_post_edit_rows', 2),
        'teeny'         => false
    )
));

$cmb_main_contact->add_field(array(
    'id'        => $prefix . 'main_contact_embed',
    'name'      => esc_html__('Código embed del Mapa', 'balearic'),
    'desc'      => esc_html__('Ingrese la descripción del Item', 'balearic'),
    'type'      => 'textarea_code'
));
