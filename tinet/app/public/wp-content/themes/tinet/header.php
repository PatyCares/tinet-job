<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>
<body>
    
       
<header class="container site-header">
   <div class="row">
    <div class="col-3">
            <div class="logo">
                <!-- redirecciona a de pagina de inicio -->
                <a href="<?php //echo esc_url(home_url('/') ); ?>">
                <!-- redirecciona a de pagina de inicio -->
                    <img src="<?php echo get_template_directory_uri() ?>/img/logo.svg" alt="" style='width: 118px'>
                </a>
            </div>
        </div>
        <div class="col-9">
           <div class="menu-principal">
            <?php 
                    // función de wordpress para llamar al menu principal y mostrarlo en el front
                            $args = array(
                            'theme_location' => 'menu-principal', 
                            'container' => 'nav',
                            'container_class' => 'menu-principal'
                        );
                        wp_nav_menu($args);
                ?>
           </div>
        </div>
   </div>
        
    </header>
