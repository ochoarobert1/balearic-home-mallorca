<?php
// Register Custom Post Type
function balearic_custom_post_type()
{
    $labels = array(
        'name'                  => _x('Localizaciones', 'Post Type General Name', 'balearic'),
        'singular_name'         => _x('Localización', 'Post Type Singular Name', 'balearic'),
        'menu_name'             => __('Localizaciones', 'balearic'),
        'name_admin_bar'        => __('Localizaciones', 'balearic'),
        'archives'              => __('Archivo de Localizaciones', 'balearic'),
        'attributes'            => __('Atributos de Localización', 'balearic'),
        'parent_item_colon'     => __('Localización Padre:', 'balearic'),
        'all_items'             => __('Todas las Localizaciones', 'balearic'),
        'add_new_item'          => __('Agregar Nueva Localización', 'balearic'),
        'add_new'               => __('Agregar Nueva', 'balearic'),
        'new_item'              => __('Nueva Localización', 'balearic'),
        'edit_item'             => __('Editar Localización', 'balearic'),
        'update_item'           => __('Actualizar Localización', 'balearic'),
        'view_item'             => __('Ver Localización', 'balearic'),
        'view_items'            => __('Ver Localizaciones', 'balearic'),
        'search_items'          => __('Buscar Localización', 'balearic'),
        'not_found'             => __('No hay resultados', 'balearic'),
        'not_found_in_trash'    => __('No hay resultados en la Papelera', 'balearic'),
        'featured_image'        => __('Portada de Localización', 'balearic'),
        'set_featured_image'    => __('Colocar Portada de Localización', 'balearic'),
        'remove_featured_image' => __('Remover Portada de Localización', 'balearic'),
        'use_featured_image'    => __('Usar como Portada de Localización', 'balearic'),
        'insert_into_item'      => __('Insertar dentro de Localización', 'balearic'),
        'uploaded_to_this_item' => __('Cargado a esta Localización', 'balearic'),
        'items_list'            => __('Listado de Localizaciones', 'balearic'),
        'items_list_navigation' => __('Navegación del Listado de Localizaciones', 'balearic'),
        'filter_items_list'     => __('Filtro del Listado de Localizaciones', 'balearic'),
    );
    $args = array(
        'label'                 => __('Localización', 'balearic'),
        'description'           => __('Localizaciones dentro de la Página', 'balearic'),
        'labels'                => $labels,
        'supports'              => array('title', 'editor', 'thumbnail'),
        'taxonomies'            => array('tipos-localizaciones'),
        'hierarchical'          => false,
        'public'                => true,
        'show_ui'               => true,
        'show_in_menu'          => true,
        'menu_position'         => 15,
        'menu_icon'             => 'dashicons-location',
        'show_in_admin_bar'     => true,
        'show_in_nav_menus'     => true,
        'can_export'            => true,
        'has_archive'           => false,
        'exclude_from_search'   => false,
        'publicly_queryable'    => true,
        'capability_type'       => 'post',
        'show_in_rest'          => true,
    );
    register_post_type('localizaciones', $args);
}
add_action('init', 'balearic_custom_post_type', 0);

// Register Custom Post Type
function booking_custom_post_type() {

	$labels = array(
		'name'                  => _x( 'Bookings', 'Post Type General Name', 'balearic' ),
		'singular_name'         => _x( 'Booking', 'Post Type Singular Name', 'balearic' ),
		'menu_name'             => __( 'Booking', 'balearic' ),
		'name_admin_bar'        => __( 'Booking', 'balearic' ),
		'archives'              => __( 'Archivo de Bookings', 'balearic' ),
		'attributes'            => __( 'Atributos de Booking', 'balearic' ),
		'parent_item_colon'     => __( 'Booking Padre:', 'balearic' ),
		'all_items'             => __( 'Todos los Bookings', 'balearic' ),
		'add_new_item'          => __( 'Agregar Nuevo Booking', 'balearic' ),
		'add_new'               => __( 'Agregar Nuevo', 'balearic' ),
		'new_item'              => __( 'Nuevo Booking', 'balearic' ),
		'edit_item'             => __( 'Editar Booking', 'balearic' ),
		'update_item'           => __( 'Actualizar Booking', 'balearic' ),
		'view_item'             => __( 'Ver Booking', 'balearic' ),
		'view_items'            => __( 'Ver Bookings', 'balearic' ),
		'search_items'          => __( 'Buscar Booking', 'balearic' ),
		'not_found'             => __( 'No hay resultados', 'balearic' ),
		'not_found_in_trash'    => __( 'No hay resultados en Papelera', 'balearic' ),
		'featured_image'        => __( 'Imagen Destacada', 'balearic' ),
		'set_featured_image'    => __( 'Colocar Imagen Destacada', 'balearic' ),
		'remove_featured_image' => __( 'Remover Imagen Destacada', 'balearic' ),
		'use_featured_image'    => __( 'Usar como Imagen Destacada', 'balearic' ),
		'insert_into_item'      => __( 'Insertar en Booking', 'balearic' ),
		'uploaded_to_this_item' => __( 'Cargado en Booking', 'balearic' ),
		'items_list'            => __( 'Listado de Booking', 'balearic' ),
		'items_list_navigation' => __( 'Navegación del Listado de Booking', 'balearic' ),
		'filter_items_list'     => __( 'Filtro del Listado de Booking', 'balearic' ),
	);
	$args = array(
		'label'                 => __( 'Booking', 'balearic' ),
		'description'           => __( 'Booking', 'balearic' ),
		'labels'                => $labels,
		'supports'              => array( 'title' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 16,
		'menu_icon'             => 'dashicons-admin-multisite',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => true,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
		'show_in_rest'          => true,
	);
	register_post_type( 'booking', $args );

}
add_action( 'init', 'booking_custom_post_type', 0 );

// Register Custom Taxonomy
function balearic_custom_taxonomy()
{
    $labels = array(
        'name'                       => _x('Tipos de Localización', 'Taxonomy General Name', 'balearic'),
        'singular_name'              => _x('Tipo de Localización', 'Taxonomy Singular Name', 'balearic'),
        'menu_name'                  => __('Tipo de Localización', 'balearic'),
        'all_items'                  => __('Todos los Tipos', 'balearic'),
        'parent_item'                => __('Tipo Padre', 'balearic'),
        'parent_item_colon'          => __('Tipo Padre:', 'balearic'),
        'new_item_name'              => __('Nuevo Tipo de Localización', 'balearic'),
        'add_new_item'               => __('Agregar Nuevo Tipo', 'balearic'),
        'edit_item'                  => __('Editar Tipo', 'balearic'),
        'update_item'                => __('Actualizar Tipo', 'balearic'),
        'view_item'                  => __('Ver Tipo', 'balearic'),
        'separate_items_with_commas' => __('Separar tipos por comas', 'balearic'),
        'add_or_remove_items'        => __('Agregar o Remover Tipos', 'balearic'),
        'choose_from_most_used'      => __('Escoger de los más usados', 'balearic'),
        'popular_items'              => __('Tipos Populares', 'balearic'),
        'search_items'               => __('Buscar Tipos', 'balearic'),
        'not_found'                  => __('No hay resultados', 'balearic'),
        'no_terms'                   => __('No hay Tipos', 'balearic'),
        'items_list'                 => __('Listado de Tipos', 'balearic'),
        'items_list_navigation'      => __('Navegación del Listado de Tipos', 'balearic'),
    );
    $args = array(
        'labels'                     => $labels,
        'hierarchical'               => true,
        'public'                     => true,
        'show_ui'                    => true,
        'show_admin_column'          => true,
        'show_in_nav_menus'          => true,
        'show_tagcloud'              => true,
        'show_in_rest'               => true,
    );
    register_taxonomy('tipos-localizaciones', array('localizaciones'), $args);
}
add_action('init', 'balearic_custom_taxonomy', 0);

// Register Custom Taxonomy
function balearic_temporadas_custom_taxonomy()
{
    $labels = array(
        'name'                       => _x('Temporadas', 'Taxonomy General Name', 'balearic'),
        'singular_name'              => _x('Temporada', 'Taxonomy Singular Name', 'balearic'),
        'menu_name'                  => __('Temporadas', 'balearic'),
        'all_items'                  => __('Todos las Temporadas', 'balearic'),
        'parent_item'                => __('Temporada Padre', 'balearic'),
        'parent_item_colon'          => __('Temporada Padre:', 'balearic'),
        'new_item_name'              => __('Nueva Temporada', 'balearic'),
        'add_new_item'               => __('Agregar Nueva Temporada', 'balearic'),
        'edit_item'                  => __('Editar Temporada', 'balearic'),
        'update_item'                => __('Actualizar Temporada', 'balearic'),
        'view_item'                  => __('Ver Temporada', 'balearic'),
        'separate_items_with_commas' => __('Separar Temporadas por comas', 'balearic'),
        'add_or_remove_items'        => __('Agregar o Remover Temporadas', 'balearic'),
        'choose_from_most_used'      => __('Escoger de las más usadas', 'balearic'),
        'popular_items'              => __('Temporadas Populares', 'balearic'),
        'search_items'               => __('Buscar Temporadas', 'balearic'),
        'not_found'                  => __('No hay resultados', 'balearic'),
        'no_terms'                   => __('No hay Temporadas', 'balearic'),
        'items_list'                 => __('Listado de Temporadas', 'balearic'),
        'items_list_navigation'      => __('Navegación del Listado de Temporadas', 'balearic'),
    );
    $args = array(
        'labels'                     => $labels,
        'hierarchical'               => true,
        'public'                     => false,
        'meta_box_cb'                => false,
        'show_ui'                    => true,
        'show_admin_column'          => false,
        'show_in_nav_menus'          => true,
        'show_tagcloud'              => true,
        'show_in_rest'               => true,
    );
    register_taxonomy('temporadas', array('localizaciones'), $args);
}

add_action('init', 'balearic_temporadas_custom_taxonomy', 0);

// Register Custom Post Type
function balearic_services_custom_post_type()
{
    $labels = array(
        'name'                  => _x('Servicios', 'Post Type General Name', 'balearic'),
        'singular_name'         => _x('Servicio', 'Post Type Singular Name', 'balearic'),
        'menu_name'             => __('Servicios', 'balearic'),
        'name_admin_bar'        => __('Servicios', 'balearic'),
        'archives'              => __('Archivos de Servicios', 'balearic'),
        'attributes'            => __('Atributos del Servicio', 'balearic'),
        'parent_item_colon'     => __('Servicio Padre:', 'balearic'),
        'all_items'             => __('Todos los Servicios', 'balearic'),
        'add_new_item'          => __('Agregar Nuevo Servicio', 'balearic'),
        'add_new'               => __('Agregar Nuevo', 'balearic'),
        'new_item'              => __('Nuevo Servicio', 'balearic'),
        'edit_item'             => __('Editar Servicio', 'balearic'),
        'update_item'           => __('Actualizar Servicio', 'balearic'),
        'view_item'             => __('Ver Servicio', 'balearic'),
        'view_items'            => __('Ver Servicios', 'balearic'),
        'search_items'          => __('Buscar Servicio', 'balearic'),
        'not_found'             => __('No hay resultados', 'balearic'),
        'not_found_in_trash'    => __('No hay resultados en Papelera', 'balearic'),
        'featured_image'        => __('Ícono del Servicio', 'balearic'),
        'set_featured_image'    => __('Colocar Ícono del Servicio', 'balearic'),
        'remove_featured_image' => __('Remover Ícono del Servicio', 'balearic'),
        'use_featured_image'    => __('Usar como Ícono del Servicio', 'balearic'),
        'insert_into_item'      => __('Insertar en Servicio', 'balearic'),
        'uploaded_to_this_item' => __('Cargado a este Servicio', 'balearic'),
        'items_list'            => __('Listado de Servicios', 'balearic'),
        'items_list_navigation' => __('Navegación del Listado de Servicios', 'balearic'),
        'filter_items_list'     => __('Filtro del Listado de Servicios', 'balearic'),
    );
    $args = array(
        'label'                 => __('Servicio', 'balearic'),
        'description'           => __('Servicios de la Empresa', 'balearic'),
        'labels'                => $labels,
        'supports'              => array('title', 'editor', 'thumbnail'),
        'hierarchical'          => false,
        'public'                => true,
        'show_ui'               => true,
        'show_in_menu'          => true,
        'menu_position'         => 15,
        'menu_icon'             => 'dashicons-format-status',
        'show_in_admin_bar'     => true,
        'show_in_nav_menus'     => true,
        'can_export'            => true,
        'has_archive'           => true,
        'exclude_from_search'   => true,
        'publicly_queryable'    => true,
        'capability_type'       => 'page',
        'show_in_rest'          => true,
    );
    register_post_type('servicios', $args);
}
add_action('init', 'balearic_services_custom_post_type', 0);