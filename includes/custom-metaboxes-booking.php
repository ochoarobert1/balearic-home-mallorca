<?php
$arr_locals = new WP_Query(array('post_type' => 'localizaciones', 'posts_per_page' => -1));
while ($arr_locals->have_posts()) : $arr_locals->the_post(); 
$arr_select[get_the_ID()] = get_the_title();
endwhile;
wp_reset_query();


/* --------------------------------------------------------------
    0.- LOCALS - SEASONS
-------------------------------------------------------------- */
$cmb_booking_metabox = new_cmb2_box(array(
    'id'            => $prefix . 'booking_metabox',
    'title'         => esc_html__('Información de Reserva', 'balearic'),
    'object_types'     => array( 'booking' ),
    'context'       => 'normal',
    'priority'      => 'high',
    'show_names'    => true,
    'cmb_styles'    => true,
    'classes'       => 'cmb2-metabox-slim',
    'closed'        => false
));

$cmb_booking_metabox->add_field( array(
    'id'               => $prefix . 'booking_location',
	'name'             => esc_html__('Localidad', 'balearic'),
	'desc'             => esc_html__('Seleccione la localidad que tendra la reserva', 'balearic'),
	'type'             => 'select',
	'show_option_none' => true,
	'default'          => '',
	'options'          => $arr_select
) );

$cmb_booking_metabox->add_field(array(
    'id'        => $prefix . 'booking_start',
    'name'      => esc_html__('Check-In', 'balearic'),
    'desc'      => esc_html__('Selecciona el Check-In', 'balearic'),
    'type'      => 'text_date'
));

$cmb_booking_metabox->add_field(array(
    'id'        => $prefix . 'booking_end',
    'name'      => esc_html__('Check-Out', 'balearic'),
    'desc'      => esc_html__('Selecciona el Check-Out', 'balearic'),
    'type'      => 'text_date'
));

$cmb_booking_metabox->add_field(array(
    'id'        => $prefix . 'quantity_adults',
    'name'      => esc_html__('Cantidad de Adultos', 'balearic'),
    'desc'      => esc_html__('Ingrese la cantidad de Adultos', 'balearic'),
    'type'      => 'text',
    'attributes' => array(
		'type' => 'number',
		'pattern' => '\d*',
	),
	'sanitization_cb' => 'absint',
    'escape_cb'       => 'absint'
));

$cmb_booking_metabox->add_field(array(
    'id'        => $prefix . 'quantity_kids',
    'name'      => esc_html__('Cantidad de Niños', 'balearic'),
    'desc'      => esc_html__('Ingrese la cantidad de Niños', 'balearic'),
    'type'      => 'text',
    'attributes' => array(
		'type' => 'number',
		'pattern' => '\d*',
	),
	'sanitization_cb' => 'absint',
    'escape_cb'       => 'absint'
));

$cmb_booking_metabox->add_field(array(
    'id'        => $prefix . 'booking_comments',
    'name'      => esc_html__('Comentarios / Mensaje Adicional', 'balearic'),
    'desc'      => esc_html__('Ingrese cualquier observación o mensaje necesario para procesar esta reservación', 'balearic'),
    'type'      => 'textarea_small'
));

$cmb_booking_payment_metabox = new_cmb2_box(array(
    'id'            => $prefix . 'booking_payment_metabox',
    'title'         => esc_html__('Información de Pago', 'balearic'),
    'object_types'     => array( 'booking' ),
    'context'       => 'normal',
    'priority'      => 'high',
    'show_names'    => true,
    'cmb_styles'    => true,
    'classes'       => 'cmb2-metabox-slim',
    'closed'        => false
));

$cmb_booking_payment_metabox->add_field( array(
    'id'               => $prefix . 'booking_status',
	'name'             => esc_html__('Status de Reservación', 'balearic'),
	'desc'             => esc_html__('Seleccione el estado actual de la reservación', 'balearic'),
	'type'             => 'select',
	'show_option_none' => true,
	'default'          => 'pending',
	'options'          => array(
		'pending' => __( 'Pendiente de Pago', 'balearic' ),
		'processing' => __( 'Procesando Pago', 'balearic' ),
		'completed'   => __( 'Pago Completado', 'balearic' ),
		'cancelled'     => __( 'Pago Cancelado', 'balearic' ),
	)
) );

$cmb_booking_payment_metabox->add_field(array(
    'id'        => $prefix . 'booking_payment_method',
    'name'      => esc_html__('Método de Pago', 'balearic'),
    'desc'      => esc_html__('Ingrese el metodo de pago usado por el cliente', 'balearic'),
    'type'      => 'text'
));

$cmb_booking_payment_metabox->add_field(array(
    'id'        => $prefix . 'booking_payment_ref',
    'name'      => esc_html__('Referencia', 'balearic'),
    'desc'      => esc_html__('Ingrese la referencia de pago del cliente', 'balearic'),
    'type'      => 'text'
));

$cmb_booking_payment_metabox->add_field(array(
    'id'        => $prefix . 'booking_payment_date',
    'name'      => esc_html__('Fecha del Pago', 'balearic'),
    'desc'      => esc_html__('Selecciona la fecha en la cual el cliente realizó el pago', 'balearic'),
    'type'      => 'text_date'
));



$cmb_booking_user = new_cmb2_box(array(
    'id'            => $prefix . 'booking_user_metabox',
    'title'         => esc_html__('Información del Cliente', 'balearic'),
    'object_types'     => array( 'booking' ),
    'context'       => 'side',
    'priority'      => 'high',
    'show_names'    => true,
    'classes'       => 'cmb2-metabox-slim',
    'closed'        => false
));

$cmb_booking_user->add_field(array(
    'id'        => $prefix . 'booking_fullname',
    'name'      => esc_html__('Nombre y Apellido', 'balearic'),
    'desc'      => esc_html__('Ingrese el nombre completo del cliente', 'balearic'),
    'type'      => 'text'
));

$cmb_booking_user->add_field(array(
    'id'        => $prefix . 'booking_phone',
    'name'      => esc_html__('Teléfono', 'balearic'),
    'desc'      => esc_html__('Ingrese el teléfono del cliente', 'balearic'),
    'type'      => 'text'
));

$cmb_booking_user->add_field(array(
    'id'        => $prefix . 'booking_email',
    'name'      => esc_html__('Correo Electrónico', 'balearic'),
    'desc'      => esc_html__('Ingrese el correo electrónico del cliente', 'balearic'),
    'type'      => 'text_email',
));