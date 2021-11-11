<?php

// Consultas reutilizables 
require get_template_directory() . '/inc/queries.php';


function tinet_setup(){
      //Habilitar imagenes destacadas
      add_theme_support('post-thumbnails');

      //Tamaños personalizados
      add_image_size( 'cajas', 400, 375, true );
      add_image_size( 'mediano', 700, 400, true );
      add_image_size( 'blog', 966, 644, true );

}
add_action('after_setup_theme', 'tinet_setup');


/*CCS y JS */
function tinet_styles() {
    // agregar hoja de estilo
    wp_enqueue_style('bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css', array(), '5.1.3');
    wp_enqueue_style('googlefonts', 'https://fonts.googleapis.com/css2?family=Inter:wght@400;700;900&family=Mulish&display=swap', array(), '1.0.0');
    wp_enqueue_style('bxSliderCSS', 'https://cdnjs.cloudflare.com/ajax/libs/bxslider/4.2.15/jquery.bxslider.min.css', array(), '4.2.15');
    wp_enqueue_style('style', get_stylesheet_uri(), array('bootstrap'),'1.0.0');
    wp_enqueue_script('bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js', array('jquery'), '5.1.3');
    wp_enqueue_script('bxSliderJS', 'https://cdnjs.cloudflare.com/ajax/libs/bxslider/4.2.15/jquery.bxslider.min.js', array('jquery'), '4.2.15', true);
    wp_enqueue_script('scripts', get_template_directory_uri() .'/js/scripts.js', array('jquery', 'bxSliderJS'),'1.0.0',true);
}
add_action('wp_enqueue_scripts','tinet_styles');


//MENU DE NAVEGACION
function tinet_menus() {
    register_nav_menus(array(
        'menu-principal' => __( 'Menu Principal', 'tinet LP' )
    ));
}
add_action('init', 'tinet_menus');

?>