<?php

function balearic_custom_post_type() {

	$labels = array(
		'name'                  => _x( 'Clientes', 'Post Type General Name', 'balearic' ),
		'singular_name'         => _x( 'Cliente', 'Post Type Singular Name', 'balearic' ),
		'menu_name'             => __( 'Clientes', 'balearic' ),
		'name_admin_bar'        => __( 'Clientes', 'balearic' ),
		'archives'              => __( 'Archivo de Clientes', 'balearic' ),
		'attributes'            => __( 'Atributos de Cliente', 'balearic' ),
		'parent_item_colon'     => __( 'Cliente Padre:', 'balearic' ),
		'all_items'             => __( 'Todos los Clientes', 'balearic' ),
		'add_new_item'          => __( 'Agregar Nuevo Cliente', 'balearic' ),
		'add_new'               => __( 'Agregar Nuevo', 'balearic' ),
		'new_item'              => __( 'Nuevo Cliente', 'balearic' ),
		'edit_item'             => __( 'Editar Cliente', 'balearic' ),
		'update_item'           => __( 'Actualizar Cliente', 'balearic' ),
		'view_item'             => __( 'Ver Cliente', 'balearic' ),
		'view_items'            => __( 'Ver Clientes', 'balearic' ),
		'search_items'          => __( 'Buscar Cliente', 'balearic' ),
		'not_found'             => __( 'No hay resultados', 'balearic' ),
		'not_found_in_trash'    => __( 'No hay resultados en Papelera', 'balearic' ),
		'featured_image'        => __( 'Imagen del Cliente', 'balearic' ),
		'set_featured_image'    => __( 'Colocar Imagen del Cliente', 'balearic' ),
		'remove_featured_image' => __( 'Remover Imagen del Cliente', 'balearic' ),
		'use_featured_image'    => __( 'Usar como Imagen del Cliente', 'balearic' ),
		'insert_into_item'      => __( 'Insertar en Cliente', 'balearic' ),
		'uploaded_to_this_item' => __( 'Cargado a este Cliente', 'balearic' ),
		'items_list'            => __( 'Listado de Clientes', 'balearic' ),
		'items_list_navigation' => __( 'Navegación del Listado de Cliente', 'balearic' ),
		'filter_items_list'     => __( 'Filtro del Listado de Clientes', 'balearic' ),
	);
	$args = array(
		'label'                 => __( 'Cliente', 'balearic' ),
		'description'           => __( 'Portafolio de Clientes', 'balearic' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail' ),
		'taxonomies'            => array( 'tipos-de-clientes' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 15,
		'menu_icon'             => 'dashicons-businessperson',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'post',
		'show_in_rest'          => true,
	);
	register_post_type( 'clientes', $args );

}

add_action( 'init', 'balearic_custom_post_type', 0 );