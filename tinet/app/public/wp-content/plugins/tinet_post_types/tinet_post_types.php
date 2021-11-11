<?php
/*
    Plugin Name: tinet - Post Types
    Plugin URI:
    Descripcion: Añade Post Type al sitio tinet de reclutamiento
    Version: 1.0.0
    Author: Patricia Cares
    Author URI: https://www.linkedin.com/in/patricia-nicol-cofr%C3%A9-cares-2b050a19a/
    Text Domain: tinel LP
*/

if(!defined('ABSPATH')) die();

//Custom slider principal
function slider_post_type() {

	$labels = array(
		'name'                  => _x( 'SliderPrincipal', 'Post Type General Name', 'slider' ),
		'singular_name'         => _x( 'SliderPrincipal', 'Post Type Singular Name', 'slider' ),
		'menu_name'             => __( 'SliderPrincipal', 'slider' ),
		'name_admin_bar'        => __( 'SliderPrincipal', 'slider' ),
		'archives'              => __( 'Archivo', 'slider' ),
		'attributes'            => __( 'Atributos', 'slider' ),
		'parent_item_colon'     => __( 'Cultura Padre', 'slider' ),
		'all_items'             => __( 'Todos Los SliderPrincipal', 'slider' ),
		'add_new'               => __( 'Agregar SliderPrincipal', 'slider' ),
		'new_item'              => __( 'Nueva SliderPrincipal', 'slider' ),
		'edit_item'             => __( 'Editar SliderPrincipal', 'slider' ),
		'update_item'           => __( 'Actualizar SliderPrincipal', 'slider' ),
		'view_item'             => __( 'Ver SliderPrincipal', 'slider' ),
		'view_items'            => __( 'Ver SliderPrincipal', 'slider' ),
		'search_items'          => __( 'Buscar SliderPrincipal', 'slider' ),
		'not_found'             => __( 'No Encontrado', 'slider' ),
		'not_found_in_trash'    => __( 'No Encontrado en Papelera', 'slider' ),
		'featured_image'        => __( 'Imagen Destacada', 'slider' ),
		'set_featured_image'    => __( 'Guardar Imagen destacada', 'slider' ),
		'remove_featured_image' => __( 'Eliminar Imagen destacada', 'slider' ),
		'use_featured_image'    => __( 'Utilizar como Imagen Destacada', 'slider' ),
		'insert_into_item'      => __( 'Insertar en SliderPrincipal', 'slider' ),
		'uploaded_to_this_item' => __( 'Agregado en SliderPrincipal', 'slider' ),
		'items_list'            => __( 'Lista de SliderPrincipal', 'slider' ),
		'items_list_navigation' => __( 'Navegación de SliderPrincipal', 'slider' ),
		'filter_items_list'     => __( 'Filtrar SliderPrincipal', 'slider' ),
		
	);
	$args = array(
		'label'                 => __( 'SliderPrincipal', 'slider' ),
		'description'           => __( 'SliderPrincipal para el Sitio Web', 'slider' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail'),
        'hierarchical'          => true, //true = post (no puedes generar elemento padre de un pagina),false = paginas (puedes asignarle elemento padre a la pagina)
		'public'                => true, 
		'show_ui'               => true,
		'show_in_menu'          => true,
        'menu_position'         => 5,
        'menu_icon'             => 'dashicons-slides',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
		'show_in_rest'          => true,
		'rewrite'				=> true,
	);
	register_post_type( 'slider', $args );

}
add_action( 'init', 'slider_post_type', 0 );






//Custom cultura
function cultura_post_type() {

	$labels = array(
		'name'                  => _x( 'Cultura', 'Post Type General Name', 'cultura' ),
		'singular_name'         => _x( 'Cultura', 'Post Type Singular Name', 'cultura' ),
		'menu_name'             => __( 'Cultura', 'cultura' ),
		'name_admin_bar'        => __( 'Cultura', 'cultura' ),
		'archives'              => __( 'Archivo', 'cultura' ),
		'attributes'            => __( 'Atributos', 'cultura' ),
		'parent_item_colon'     => __( 'Cultura Padre', 'cultura' ),
		'all_items'             => __( 'Todas Las Culturas', 'cultura' ),
		'add_new'               => __( 'Agregar Cultura', 'cultura' ),
		'new_item'              => __( 'Nueva Cultura', 'cultura' ),
		'edit_item'             => __( 'Editar Cultura', 'cultura' ),
		'update_item'           => __( 'Actualizar Cultura', 'cultura' ),
		'view_item'             => __( 'Ver Cultura', 'cultura' ),
		'view_items'            => __( 'Ver Cultura', 'cultura' ),
		'search_items'          => __( 'Buscar Cultura', 'cultura' ),
		'not_found'             => __( 'No Encontrado', 'cultura' ),
		'not_found_in_trash'    => __( 'No Encontrado en Papelera', 'cultura' ),
		'featured_image'        => __( 'Imagen Destacada', 'cultura' ),
		'set_featured_image'    => __( 'Guardar Imagen destacada', 'cultura' ),
		'remove_featured_image' => __( 'Eliminar Imagen destacada', 'cultura' ),
		'use_featured_image'    => __( 'Utilizar como Imagen Destacada', 'cultura' ),
		'insert_into_item'      => __( 'Insertar en Cultura', 'cultura' ),
		'uploaded_to_this_item' => __( 'Agregado en Culturas', 'cultura' ),
		'items_list'            => __( 'Lista de Culturas', 'cultura' ),
		'items_list_navigation' => __( 'Navegación de Culturas', 'cultura' ),
		'filter_items_list'     => __( 'Filtrar Culturas', 'cultura' ),
		
	);
	$args = array(
		'label'                 => __( 'Cultura', 'cultura' ),
		'description'           => __( 'Cultura para el Sitio Web', 'cultura' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail'),
        'hierarchical'          => true, //true = post (no puedes generar elemento padre de un pagina),false = paginas (puedes asignarle elemento padre a la pagina)
		'public'                => true, 
		'show_ui'               => true,
		'show_in_menu'          => true,
        'menu_position'         => 6,
        'menu_icon'             => 'dashicons-universal-access-alt',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
		'show_in_rest'          => true,
		'rewrite'				=> true,
	);
	register_post_type( 'cultura', $args );

}
add_action( 'init', 'cultura_post_type', 0 );




//Custom nuestra experiencia
function nuestraExp_post_type() {

	$labels = array(
		'name'                  => _x( 'Nuestra Experiencia', 'Post Type General Name', 'nuestraExp' ),
		'singular_name'         => _x( 'Nuestra Experiencia', 'Post Type Singular Name', 'nuestraExp' ),
		'menu_name'             => __( 'Nuestra Experiencia', 'nuestraExp' ),
		'name_admin_bar'        => __( 'Nuestra Experiencia', 'nuestraExp' ),
		'archives'              => __( 'Archivo', 'nuestraExp' ),
		'attributes'            => __( 'Atributos', 'nuestraExp' ),
		'parent_item_colon'     => __( 'Nuestra Experiencia Padre', 'nuestraExp' ),
		'all_items'             => __( 'Todas Las Nuestra Experiencia', 'nuestraExp' ),
		'add_new'               => __( 'Agregar Nuestra Experiencia', 'nuestraExp' ),
		'new_item'              => __( 'Nueva Nuestra Experiencia', 'nuestraExp' ),
		'edit_item'             => __( 'Editar Nuestra Experiencia', 'nuestraExp' ),
		'update_item'           => __( 'Actualizar Nuestra Experiencia', 'nuestraExp' ),
		'view_item'             => __( 'Ver Nuestra Experiencia', 'nuestraExp' ),
		'view_items'            => __( 'Ver Nuestra Experiencia', 'nuestraExp' ),
		'search_items'          => __( 'Buscar Nuestra Experiencia', 'nuestraExp' ),
		'not_found'             => __( 'No Encontrado', 'nuestraExp' ),
		'not_found_in_trash'    => __( 'No Encontrado en Papelera', 'nuestraExp' ),
		'featured_image'        => __( 'Imagen Destacada', 'nuestraExp' ),
		'set_featured_image'    => __( 'Guardar Imagen destacada', 'nuestraExp' ),
		'remove_featured_image' => __( 'Eliminar Imagen destacada', 'nuestraExp' ),
		'use_featured_image'    => __( 'Utilizar como Imagen Destacada', 'nuestraExp' ),
		'insert_into_item'      => __( 'Insertar en Nuestra Experiencia', 'nuestraExp' ),
		'uploaded_to_this_item' => __( 'Agregado en Nuestra Experiencia', 'nuestraExp' ),
		'items_list'            => __( 'Lista de Nuestra Experiencia', 'nuestraExp' ),
		'items_list_navigation' => __( 'Navegación de Nuestra Experiencia', 'nuestraExp' ),
		'filter_items_list'     => __( 'Filtrar Nuestra Experiencia', 'nuestraExp' ),
		
	);
	$args = array(
		'label'                 => __( 'Nuestra Experiencia', 'nuestraExp' ),
		'description'           => __( 'Nuestra Experiencia para el Sitio Web', 'nuestraExp' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail'),
        'hierarchical'          => true, //true = post (no puedes generar elemento padre de un pagina),false = paginas (puedes asignarle elemento padre a la pagina)
		'public'                => true, 
		'show_ui'               => true,
		'show_in_menu'          => true,
        'menu_position'         => 7,
        'menu_icon'             => 'dashicons-building',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
		'show_in_rest'          => true,
		'rewrite'				=> true,
	);
	register_post_type( 'nuestraExp', $args );

}
add_action( 'init', 'nuestraExp_post_type', 0 );



//Custom the tinet way
function tinetWay_post_type() {

	$labels = array(
		'name'                  => _x( 'Tinet Way', 'Post Type General Name', 'tinetWay' ),
		'singular_name'         => _x( 'Tinet Way', 'Post Type Singular Name', 'tinetWay' ),
		'menu_name'             => __( 'Tinet Way', 'tinetWay' ),
		'name_admin_bar'        => __( 'Tinet Way', 'tinetWay' ),
		'archives'              => __( 'Archivo', 'tinetWay' ),
		'attributes'            => __( 'Atributos', 'tinetWay' ),
		'parent_item_colon'     => __( 'Tinet Way Padre', 'tinetWay' ),
		'all_items'             => __( 'Todos Los Tinet Way', 'tinetWay' ),
		'add_new'               => __( 'Agregar Tinet Way', 'tinetWay' ),
		'new_item'              => __( 'Nueva Tinet Way', 'tinetWay' ),
		'edit_item'             => __( 'Editar Tinet Way', 'tinetWay' ),
		'update_item'           => __( 'Actualizar Tinet Way', 'tinetWay' ),
		'view_item'             => __( 'Ver Tinet Way', 'tinetWay' ),
		'view_items'            => __( 'Ver Tinet Way', 'tinetWay' ),
		'search_items'          => __( 'Buscar Tinet Way', 'tinetWay' ),
		'not_found'             => __( 'No Encontrado', 'tinetWay' ),
		'not_found_in_trash'    => __( 'No Encontrado en Papelera', 'tinetWay' ),
		'featured_image'        => __( 'Imagen Destacada', 'tinetWay' ),
		'set_featured_image'    => __( 'Guardar Imagen destacada', 'tinetWay' ),
		'remove_featured_image' => __( 'Eliminar Imagen destacada', 'tinetWay' ),
		'use_featured_image'    => __( 'Utilizar como Imagen Destacada', 'tinetWay' ),
		'insert_into_item'      => __( 'Insertar en Tinet Way', 'tinetWay' ),
		'uploaded_to_this_item' => __( 'Agregado en Tinet Way', 'tinetWay' ),
		'items_list'            => __( 'Lista de Tinet Way', 'tinetWay' ),
		'items_list_navigation' => __( 'Navegación de Tinet Way', 'tinetWay' ),
		'filter_items_list'     => __( 'Filtrar Tinet Way', 'tinetWay' ),
		
	);
	$args = array(
		'label'                 => __( 'Tinet Way', 'tinetWay' ),
		'description'           => __( 'Tinet Way para el Sitio Web', 'tinetWay' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail'),
        'hierarchical'          => true, //true = post (no puedes generar elemento padre de un pagina),false = paginas (puedes asignarle elemento padre a la pagina)
		'public'                => true, 
		'show_ui'               => true,
		'show_in_menu'          => true,
        'menu_position'         => 8,
        'menu_icon'             => 'dashicons-images-alt2',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
		'show_in_rest'          => true,
		'rewrite'				=> true,
	);
	register_post_type( 'tinetWay', $args );

}
add_action( 'init', 'tinetWay_post_type', 0 );


//Custom cultura viva
function culturaViva_post_type() {

	$labels = array(
		'name'                  => _x( 'Cultura Viva', 'Post Type General Name', 'culturaViva' ),
		'singular_name'         => _x( 'Cultura Viva', 'Post Type Singular Name', 'culturaViva' ),
		'menu_name'             => __( 'Cultura Viva', 'culturaViva' ),
		'name_admin_bar'        => __( 'Cultura Viva', 'culturaViva' ),
		'archives'              => __( 'Archivo', 'culturaViva' ),
		'attributes'            => __( 'Atributos', 'culturaViva' ),
		'parent_item_colon'     => __( 'Cultura Viva', 'culturaViva' ),
		'add_new'               => __( 'Agregar Cultura Viva', 'culturaViva' ),
		'new_item'              => __( 'Nueva Cultura Viva', 'culturaViva' ),
		'edit_item'             => __( 'Editar Cultura Viva', 'culturaViva' ),
		'update_item'           => __( 'Actualizar Cultura Viva', 'culturaViva' ),
		'view_item'             => __( 'Ver Cultura Viva', 'culturaViva' ),
		'view_items'            => __( 'Ver Cultura Viva', 'culturaViva' ),
		'search_items'          => __( 'Buscar Cultura Viva', 'culturaViva' ),
		'not_found'             => __( 'No Encontrado', 'culturaViva' ),
		'not_found_in_trash'    => __( 'No Encontrado en Papelera', 'culturaViva' ),
		'featured_image'        => __( 'Imagen Destacada', 'culturaViva' ),
		'set_featured_image'    => __( 'Guardar Imagen destacada', 'culturaViva' ),
		'remove_featured_image' => __( 'Eliminar Imagen destacada', 'culturaViva' ),
		'use_featured_image'    => __( 'Utilizar como Imagen Destacada', 'culturaViva' ),
		'insert_into_item'      => __( 'Insertar en Cultura Viva', 'culturaViva' ),
		'uploaded_to_this_item' => __( 'Agregado en Cultura Viva', 'culturaViva' ),
		'items_list'            => __( 'Lista de Cultura Viva', 'culturaViva' ),
		'items_list_navigation' => __( 'Navegación de Cultura Viva', 'culturaViva' ),
		'filter_items_list'     => __( 'Filtrar Cultura Viva', 'culturaViva' ),
		
	);
	$args = array(
		'label'                 => __( 'Cultura Viva', 'culturaViva' ),
		'description'           => __( 'Cultura Viva para el Sitio Web', 'culturaViva' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail'),
        'hierarchical'          => true, //true = post (no puedes generar elemento padre de un pagina),false = paginas (puedes asignarle elemento padre a la pagina)
		'public'                => true, 
		'show_ui'               => true,
		'show_in_menu'          => true,
        'menu_position'         => 9,
        'menu_icon'             => 'dashicons-universal-access',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
		'show_in_rest'          => true,
		'rewrite'				=> true,
	);
	register_post_type( 'culturaViva', $args );

}
add_action( 'init', 'culturaViva_post_type', 0 );



//Custom beneficios
function beneficios_post_type() {

	$labels = array(
		'name'                  => _x( 'Beneficios', 'Post Type General Name', 'beneficios' ),
		'menu_name'             => __( 'Beneficios', 'beneficios' ),
		'name_admin_bar'        => __( 'Beneficios', 'beneficios' ),
		'archives'              => __( 'Archivo', 'beneficios' ),
		'attributes'            => __( 'Atributos', 'beneficios' ),
		'parent_item_colon'     => __( 'Beneficios', 'beneficios' ),
		'add_new'               => __( 'Agregar Beneficios', 'beneficios' ),
		'new_item'              => __( 'Nueva Beneficios', 'beneficios' ),
		'edit_item'             => __( 'Editar Beneficios', 'beneficios' ),
		'update_item'           => __( 'Actualizar Beneficios', 'beneficios' ),
		'view_item'             => __( 'Ver Beneficios', 'beneficios' ),
		'view_items'            => __( 'Ver Beneficios', 'beneficios' ),
		'search_items'          => __( 'Buscar Beneficios', 'beneficios' ),
		'not_found'             => __( 'No Encontrado', 'beneficios' ),
		'not_found_in_trash'    => __( 'No Encontrado en Papelera', 'beneficios' ),
		'featured_image'        => __( 'Imagen Destacada', 'beneficios' ),
		'set_featured_image'    => __( 'Guardar Imagen destacada', 'beneficios' ),
		'remove_featured_image' => __( 'Eliminar Imagen destacada', 'beneficios' ),
		'use_featured_image'    => __( 'Utilizar como Imagen Destacada', 'beneficios' ),
		'insert_into_item'      => __( 'Insertar en Beneficios', 'beneficios' ),
		'uploaded_to_this_item' => __( 'Agregado en Beneficios', 'beneficios' ),
		'items_list'            => __( 'Lista de Beneficios', 'beneficios' ),
		'items_list_navigation' => __( 'Navegación de Beneficios', 'beneficios' ),
		'filter_items_list'     => __( 'Filtrar Beneficios', 'beneficios' ),
		
	);
	$args = array(
		'label'                 => __( 'Beneficios', 'beneficios' ),
		'description'           => __( 'Beneficios para el Sitio Web', 'beneficios' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail'),
        'hierarchical'          => true, //true = post (no puedes generar elemento padre de un pagina),false = paginas (puedes asignarle elemento padre a la pagina)
		'public'                => true, 
		'show_ui'               => true,
		'show_in_menu'          => true,
        'menu_position'         => 10,
        'menu_icon'             => 'dashicons-star-filled',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
		'show_in_rest'          => true,
		'rewrite'				=> true,
	);
	register_post_type( 'beneficios', $args );

}
add_action( 'init', 'beneficios_post_type', 0 );