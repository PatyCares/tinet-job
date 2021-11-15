<?php 
function slider_principal() { ?>

<?php  
    $args = array(
        'post_type' => 'slider',
        'posts_per_page' => 3 ); 
            $slider = new WP_Query($args);
			while($slider -> have_posts() ): $slider -> the_post(); ?>

       <div class="col-12" style="position:relative; z-index:2">
            <?php the_post_thumbnail(); ?>
            <div class="text-slider" style="position: absolute; left: 40px; top: 40px; z-index:1">
                <?php the_title(); ?>
                <?php the_content(); ?>
            </div>
       </div> 

        <?php endwhile; wp_reset_postdata(); ?>
<?php
}

function lista_cultura() { ?>

<?php  
    $args = array(
        'post_type' => 'cultura',
        'posts_per_page' => 5,
        'order'   => 'ASC', ); 
        
            $cultura = new WP_Query($args);
			while($cultura -> have_posts() ): $cultura -> the_post(); ?>

        <div class="col">
            <div class="card" style="width: 14rem;">
                <?php the_post_thumbnail(); ?>
                <div class="card-body">
                    <h2 class="card-title"><?php the_title(); ?></h2>
                    <p class="card-text"> <?php the_content(); ?></p>
                </div>
            </div>
        </div>

        <?php endwhile; wp_reset_postdata(); ?>
<?php
}

function nuestra_experiencia() { ?>

    <?php  
        $args = array(
            'post_type' => 'nuestraExp',
            'posts_per_page' => 3,
            'order'   => 'ASC',  ); 
                $nuestraExp = new WP_Query($args);
                while($nuestraExp -> have_posts() ): $nuestraExp -> the_post(); ?>
    
            <div class="col-4">
                <div class="card">
                    <div class="card-body text-center">
                        <img class="img-location" src="<?php echo get_template_directory_uri(); ?>/img/chart-bar.svg">
                        <h2 class="card-title"><?php the_title(); ?></h2>
                        <p class="card-text"> <?php the_content(); ?></p>
                    </div>
                </div>
            </div>
    
            <?php endwhile; wp_reset_postdata(); ?>
<?php
}

function tinet_way() { ?>

    <?php  
        $args = array(
            'post_type' => 'tinetWay',
            'posts_per_page' => 5,
            'order'   => 'ASC',  ); 
                $tinetWay = new WP_Query($args);
                while($tinetWay -> have_posts() ): $tinetWay -> the_post(); ?>
    
            <div class="row">
                <div class="col-12">
                    <div class="card mb-3">
                        <div class="row g-0">
                            <div class="col-md-4">
                                <?php the_post_thumbnail(); ?>
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title"><?php the_title(); ?></h5>
                                    <p class="card-text"><?php the_content(); ?></p>
                                   
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    
            <?php endwhile; wp_reset_postdata(); ?>
<?php
}
function slider_culturaViva() { ?>

    <?php  
        $args = array(
            'post_type' => 'culturaViva',
            'posts_per_page' => 7 ); 
                $culturaViva = new WP_Query($args);
                while($culturaViva -> have_posts() ): $culturaViva -> the_post(); ?>

                <?php 
                    $titulo_slider = get_field('titulo_slider');
				    $texto_secundario_slider = get_field('texto_secundario_slider');
				    $agregar_foto = get_field('agregar_foto');
                    $agregar_nombre =get_field('agregar_nombre');
                    $agregar_cargo = get_field('agregar_cargo');
				    $agregar_testimonio =get_field('agregar_testimonio');
                ?>
           <div class="col-12" style="position:relative; z-index:2">
                <?php the_post_thumbnail(); ?>
                <div class="text-slider" style="position: absolute; top: 2rem; z-index:1">
                    <?php the_title(); ?>
                </div>
                <div class="text-slider-title" style="position: absolute; top: 10rem; z-index:1">
                    <h2><?php echo $titulo_slider;?></h2>
                </div>
                <div class="text-slider-secundary" style="position: absolute; top: 15rem; z-index:1">
                    <h2><?php echo $texto_secundario_slider;?></h2>
                </div>

                <div class="testimonio" style="background: pink; width: 28rem; position: absolute; top: 20rem; z-index:1 ">
                    <p><?php echo $agregar_testimonio;?></p>
                </div>
                <div class="col-4 d-flex" style="position: absolute; top: 30rem; z-index:1">
                    <div class="foto">
                    <?php 
                        if($agregar_foto){
                            echo wp_get_attachment_image($agregar_foto);
				        }?>
                    </div>
                    <div class="datos">
                        <h4><?php echo $agregar_nombre;?></h4>
                        <h3><?php echo $agregar_cargo;?></h3>
                    </div>
                </div>
           </div> 
    
            <?php endwhile; wp_reset_postdata(); ?>
<?php
}

function beneficios() { ?>

    <?php  
        $args = array(
            'post_type' => 'beneficios',
            'posts_per_page' => 13,
             ); 
                $beneficios = new WP_Query($args);
                while($beneficios -> have_posts() ): $beneficios -> the_post(); ?>

                <?php 
                    $titulo_beneficio = get_field('titulo_beneficio');
				    $descripcion_beneficio = get_field('descripcion_beneficio');
				    $titulo_beneficio_2 = get_field('titulo_beneficio_2');
                    $descripcion_beneficio_2 =get_field('descripcion_beneficio_2');
                    $titulo_beneficio_3 = get_field('titulo_beneficio_3');
                    $descripcion_beneficio_3 = get_field('descripcion_beneficio_3');
				    $titulo_beneficio_4 = get_field('titulo_beneficio_4');
                    $descripcion_beneficio_4 = get_field('descripcion_beneficio_4');
                    $titulo_beneficio_5 = get_field('titulo_beneficio_5');
                    $descripcion_beneficio_5 = get_field('descripcion_beneficio_5');
                    $titulo_beneficio_5 = get_field('titulo_beneficio_5');
                    $descripcion_beneficio_5 = get_field('descripcion_beneficio_5');
                    $titulo_beneficio_6 = get_field('titulo_beneficio_6');
                    $descripcion_beneficio_6 = get_field('descripcion_beneficio_6');
                    $titulo_beneficio_7 = get_field('titulo_beneficio_7');
                    $descripcion_beneficio_7 = get_field('descripcion_beneficio_7');
                    $titulo_beneficio_8 = get_field('titulo_beneficio_8');
                    $descripcion_beneficio_8 = get_field('descripcion_beneficio_8');
                    $titulo_beneficio_9 = get_field('titulo_beneficio_9');
                    $descripcion_beneficio_9 = get_field('descripcion_beneficio_9');
                    $titulo_beneficio_10 = get_field('titulo_beneficio_10');
                    $descripcion_beneficio_10 = get_field('descripcion_beneficio_10');
                    $titulo_beneficio_11 = get_field('titulo_beneficio_11');
                    $descripcion_beneficio_11 = get_field('descripcion_beneficio_11');
                    $titulo_beneficio_12 = get_field('titulo_beneficio_12');
                    $descripcion_beneficio_12 = get_field('descripcion_beneficio_12');
                    $titulo_beneficio_13 = get_field('titulo_beneficio_13');
                    $descripcion_beneficio_13 = get_field('descripcion_beneficio_13');
                    $titulo_beneficio_14 = get_field('titulo_beneficio_14');
                    $descripcion_beneficio_14 = get_field('descripcion_beneficio_14');
                    $titulo_beneficio_15 = get_field('titulo_beneficio_15');
                    $descripcion_beneficio_15 = get_field('descripcion_beneficio_15');
                ?>
          <div class="row" style="z-index:2">
                <div class="col-4">
                    <div class="select" tabindex="1">
                        <input class="selectopt" name="test" type="radio" id="opt1" checked>
                        <label for="opt1" class="option"><?php echo $titulo_beneficio;?></label>
                        <input class="selectopt" name="test" type="radio" id="opt2">
                        <label for="opt2" class="option"><?php echo $descripcion_beneficio;?></label>
                    </div>
                </div>
           
                <div class="col-4">
                    <div class="select" tabindex="1">
                        <input class="selectopt" name="test1" type="radio" id="opt1" checked>
                        <label for="opt1" class="option"><?php echo $titulo_beneficio_2;?></label>
                        <input class="selectopt" name="test1" type="radio" id="opt2">
                        <label for="opt2" class="option"><?php echo $descripcion_beneficio_2;?></label>
                    </div>
                </div>

                <div class="col-4">
                    <div class="select" tabindex="1">
                        <input class="selectopt" name="test2" type="radio" id="opt1" checked>
                        <label for="opt1" class="option"><?php echo $titulo_beneficio_3;?></label>
                        <input class="selectopt" name="test2" type="radio" id="opt2">
                        <label for="opt2" class="option"><?php echo $descripcion_beneficio_3;?></label>
                    </div>
                </div>
            </div>

            <div class="row mt-5" style="z-index:1">
                <div class="col-4">
                    <div class="select" tabindex="1">
                        <input class="selectopt" name="test3" type="radio" id="opt1" checked>
                        <label for="opt1" class="option"><?php echo $titulo_beneficio_4;?></label>
                        <input class="selectopt" name="tes3" type="radio" id="opt2">
                        <label for="opt2" class="option"><?php echo $descripcion_beneficio_4;?></label>
                    </div>
                </div>
           
                <div class="col-4">
                    <div class="select" tabindex="1">
                        <input class="selectopt" name="test4" type="radio" id="opt1" checked>
                        <label for="opt1" class="option"><?php echo $titulo_beneficio_5;?></label>
                        <input class="selectopt" name="test4" type="radio" id="opt2">
                        <label for="opt2" class="option"><?php echo $descripcion_beneficio_5;?></label>
                    </div>
                </div>

                <div class="col-4">
                    <div class="select" tabindex="1">
                        <input class="selectopt" name="test5" type="radio" id="opt1" checked>
                        <label for="opt1" class="option"><?php echo $titulo_beneficio_6;?></label>
                        <input class="selectopt" name="test5" type="radio" id="opt2">
                        <label for="opt2" class="option"><?php echo $descripcion_beneficio_6;?></label>
                    </div>
                </div>
            </div>

            <?php endwhile; wp_reset_postdata(); ?>
<?php
}


function job_tinet_destacados() { ?>

    <?php
        //$paged = ( get_query_var( 'paged' ) ) ? absint( get_query_var( 'paged' ) ) : 1;  
        //$post = get_post();
            //return ! empty( $post ) ? $post->ID : int;
        $args = array(
             'post_type' => 'jobSearch',
             'posts_per_page' => -1,
             'orderby' => 'date',
             'order'   => 'DESC',
             //'paged' => $paged, 
            ); 

            
                 $jobSearch = new WP_Query($args);
                 while($jobSearch -> have_posts() ): $jobSearch -> the_post(); ?>

            <?php 
                $id = get_the_ID();
                $ubicacion_oferta_laboral = get_field('ubicacion_oferta_laboral');
                $fecha_publicacion = get_field('fecha_publicacion');
                $funciones_del_cargo = get_field('funciones_del_cargo');
                $requisitos = get_field('requisitos');
                $requisitos_deseables_yo_excluyentes =get_field('requisitos_deseables_yo_excluyentes');
                $beneficio_horarios = get_field('beneficio_horarios');
                $beneficio_salarial = get_field('beneficio_salarial');
                $beneficio_tipo_trabajo = get_field('beneficio_tipo_trabajo');
                  
            ?>

                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-8">
                                        <h3><?php the_title(); ?></h3>
                                        <p><?php echo $ubicacion_oferta_laboral; ?></p>
                                        <p><?php echo $fecha_publicacion;?></p>
                                    </div>
                                    <div class="col-4">
                                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@getbootstrap">Open modal</button>
                                    <?php
                                        //echo '<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@getbootstrap" value="'.get_the_ID().'">Open modal</button>'
                                    ?>
                                    </div>
                                </div>
                            </div>
                        </div> 

                        
                    <?php modal_job(); ?>
     
            <?php endwhile; ?>
            <div class="row d-flex justify-content-center">
                <?php //wpbeginner_numeric_posts_nav($jobSearch); ?>
            </div>

<?php wp_reset_postdata(); ?>          
<?php
}

function job_tinet_tecno() { ?>

    <?php  
        $args = array(
             'post_type' => 'jobSearch',
             'posts_per_page' => 9 ); 
                 $jobSearch = new WP_Query($args);
                 while($jobSearch -> have_posts() ): $jobSearch -> the_post(); ?>

            <?php 
                $ubicacion_oferta_laboral = get_field('ubicacion_oferta_laboral');
                $fecha_publicacion = get_field('fecha_publicacion');
                $categoria_del_trabajo = get_field('categoria_del_trabajo'); ?>

                
                                <?php 
                                 
                                 $categoria_del_trabajo = get_field('categoria_del_trabajo');
                                 if( $categoria_del_trabajo && in_array('tecno', $categoria_del_trabajo) ) { ?>
                                     
                                   <div class="card">
                                        <div class="card-body">
                                            <h3><?php the_title(); ?></h3>
                                            <p><?php echo $ubicacion_oferta_laboral; ?></p>
                                            <p><?php echo $fecha_publicacion; ?></p>
                                        </div>
                                   </div>      
                                 
                                <?php } ?>
              

     
    
            <?php endwhile; wp_reset_postdata(); ?>
<?php
}


function job_tinet_consultoria() { ?>

    <?php  
        $args = array(
             'post_type' => 'jobSearch',
             'posts_per_page' => 9 ); 
                 $jobSearch = new WP_Query($args);
                 while($jobSearch -> have_posts() ): $jobSearch -> the_post(); ?>

            <?php 
                $ubicacion_oferta_laboral = get_field('ubicacion_oferta_laboral');
                $fecha_publicacion = get_field('fecha_publicacion'); ?>

                
                                <?php 
                                 
                                 $categoria_del_trabajo = get_field('categoria_del_trabajo');
                                 if( $categoria_del_trabajo && in_array('consul', $categoria_del_trabajo) ) { ?>
                                     
                                   <div class="card">
                                        <div class="card-body">
                                            <h3><?php the_title(); ?></h3>
                                            <p><?php echo $ubicacion_oferta_laboral; ?></p>
                                            <p><?php echo $fecha_publicacion; ?></p>
                                        </div>
                                   </div>      
                                 
                                <?php } ?>
              

     
    
            <?php endwhile; wp_reset_postdata(); ?>
<?php
}


function job_tinet_comercial() { ?>

    <?php  
        $args = array(
             'post_type' => 'jobSearch',
             'posts_per_page' => 9 ); 
                 $jobSearch = new WP_Query($args);
                 while($jobSearch -> have_posts() ): $jobSearch -> the_post(); ?>

            <?php 
                $ubicacion_oferta_laboral = get_field('ubicacion_oferta_laboral');
                $fecha_publicacion = get_field('fecha_publicacion'); ?>

                
                
                            <?php 
                                 
                                 $categoria_del_trabajo = get_field('categoria_del_trabajo');
                                 if( $categoria_del_trabajo && in_array('come', $categoria_del_trabajo) ) { ?>
                                     
                                   <div class="card">
                                        <div class="card-body">
                                            <h3><?php the_title(); ?></h3>
                                            <p><?php echo $ubicacion_oferta_laboral; ?></p>
                                            <p><?php echo $fecha_publicacion; ?></p>
                                        </div>
                                   </div>      
                                 
                                <?php } ?>
                    
              

     
    
            <?php endwhile; wp_reset_postdata(); ?>
<?php
}


function job_tinet_marketing() { ?>

    <?php  
        $args = array(
             'post_type' => 'jobSearch',
             'posts_per_page' => 9 ); 
                 $jobSearch = new WP_Query($args);
                 while($jobSearch -> have_posts() ): $jobSearch -> the_post(); ?>

            <?php 
                $ubicacion_oferta_laboral = get_field('ubicacion_oferta_laboral');
                $fecha_publicacion = get_field('fecha_publicacion'); ?>

                
                
                            <?php 
                                 
                                 $categoria_del_trabajo = get_field('categoria_del_trabajo');
                                 if( $categoria_del_trabajo && in_array('mark', $categoria_del_trabajo) ) { ?>
                                     
                                   <div class="card">
                                        <div class="card-body">
                                            <h3><?php the_title(); ?></h3>
                                            <p><?php echo $ubicacion_oferta_laboral; ?></p>
                                            <p><?php echo $fecha_publicacion; ?></p>
                                        </div>
                                   </div>      
                                 
                                <?php } ?>
                    
              

     
    
            <?php endwhile; wp_reset_postdata(); ?>
<?php
}

function job_tinet_admin() { ?>

    <?php  
        $args = array(
             'post_type' => 'jobSearch',
             'posts_per_page' => 9 ); 
                 $jobSearch = new WP_Query($args);
                 while($jobSearch -> have_posts() ): $jobSearch -> the_post(); ?>

            <?php 
                $ubicacion_oferta_laboral = get_field('ubicacion_oferta_laboral');
                $fecha_publicacion = get_field('fecha_publicacion'); ?>

                
                
                            <?php 
                                 
                                 $categoria_del_trabajo = get_field('categoria_del_trabajo');
                                 if( $categoria_del_trabajo && in_array('admin', $categoria_del_trabajo) ) { ?>
                                     
                                   <div class="card">
                                        <div class="card-body">
                                            <h3><?php the_title(); ?></h3>
                                            <p><?php echo $ubicacion_oferta_laboral; ?></p>
                                            <p><?php echo $fecha_publicacion; ?></p>
                                        </div>
                                   </div>      
                                 
                                <?php } ?>
                    
              

     
    
            <?php endwhile; wp_reset_postdata(); ?>
<?php
}

function job_tinet_bpo() { ?>

    <?php  
        $args = array(
             'post_type' => 'jobSearch',
             'posts_per_page' => 9 ); 
                 $jobSearch = new WP_Query($args);
                 while($jobSearch -> have_posts() ): $jobSearch -> the_post(); ?>

            <?php 
                $ubicacion_oferta_laboral = get_field('ubicacion_oferta_laboral');
                $fecha_publicacion = get_field('fecha_publicacion'); ?>

                
                
                            <?php 
                                 
                                 $categoria_del_trabajo = get_field('categoria_del_trabajo');
                                 if( $categoria_del_trabajo && in_array('bpo', $categoria_del_trabajo) ) { ?>
                                     
                                   <div class="card">
                                        <div class="card-body">
                                            <h3><?php the_title(); ?></h3>
                                            <p><?php echo $ubicacion_oferta_laboral; ?></p>
                                            <p><?php echo $fecha_publicacion; ?></p>
                                        </div>
                                   </div>      
                                 
                                <?php } ?>
                    
              

     
    
            <?php endwhile; wp_reset_postdata(); ?>
<?php
}


function job_tinet_diseño() { ?>

    <?php  
        $args = array(
             'post_type' => 'jobSearch',
             'posts_per_page' => -1 ); 
                 $jobSearch = new WP_Query($args);
                 while($jobSearch -> have_posts() ): $jobSearch -> the_post(); ?>

            <?php 
                $ubicacion_oferta_laboral = get_field('ubicacion_oferta_laboral');
                $fecha_publicacion = get_field('fecha_publicacion'); ?>

                
                
                            <?php 
                                 
                                 $categoria_del_trabajo = get_field('categoria_del_trabajo');
                                 if( $categoria_del_trabajo && in_array('dise', $categoria_del_trabajo) ) { ?>
                                     
                                   <div class="card">
                                        <div class="card-body">
                                            <h3><?php the_title(); ?></h3>
                                            <p><?php echo $ubicacion_oferta_laboral; ?></p>
                                            <p><?php echo $fecha_publicacion; ?></p>
                                        </div>
                                   </div>      
                                 
                                <?php } ?>
                    
              

     
    
            <?php endwhile; wp_reset_postdata(); ?>
<?php
}

function modal_job() { ?>

<?php 
        global $post;   
        $post->ID();
        global $wp_query; $post_id = $wp_query->get_queried_object_id();
        global $wp_query;  $post_id = $wp_query->post->ID;
        get_the_ID(); 
?>
    
    <?php  
        
         $args = array(
              'post_type' => 'jobSearch',
              'posts_per_page' => -1 ,
              
            ); 
                  $jobSearch = new WP_Query($args);
                  while($jobSearch -> have_posts() ): $jobSearch -> the_post(); ?>

            <?php 
                // $funciones_del_cargo = get_field('funciones_del_cargo');
                // $requisitos = get_field('requisitos');
                // $requisitos_deseables_yo_excluyentes =get_field('requisitos_deseables_yo_excluyentes');
                // $beneficio_horarios = get_field('beneficio_horarios');
                // $beneficio_salarial = get_field('beneficio_salarial');
                // $beneficio_tipo_trabajo = get_field('beneficio_tipo_trabajo');
                
            ?>
           
                        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                                <div class="modal-content">
                                     

                                </div>
                            </div>
                        </div>
     
    
            <?php endwhile; wp_reset_postdata(); ?>
<?php
}

                  