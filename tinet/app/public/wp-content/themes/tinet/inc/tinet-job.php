<?php

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
                    
                    
                    
                       

                <div class="d-flex bd-highlight">
                    <div class="p-2 flex-fill bd-highlight">
                        <div class="card col-3">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-8">
                                        <h4><?php the_title(); ?></h4>
                                        <p><?php echo $ubicacion_oferta_laboral; ?></p>
                                        <p><?php echo $fecha_publicacion; ?></p>
                                    </div>
                                    <div class="col-4">
                                    <button data-id="<?php echo $id; ?>" type="button" class="btn btn-primary btn-modal" data-bs-toggle="modal" data-bs-target="#exampleModal_<?php echo $id;?>" data-bs-whatever="@getbootstrap">Open modal</button>
                                    </div>
                                </div>
                            </div>
                        </div> 
                    </div>
                </div>
             
     
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
        
         $args = array(
              'post_type' => 'jobSearch',
              'posts_per_page' => -1 ,
              
            ); 
                  $jobSearch = new WP_Query($args);
                  while($jobSearch -> have_posts() ): $jobSearch -> the_post(); ?>

            <?php 
                $id = get_the_ID();
                $title = get_the_title();
                $funciones_del_cargo = get_field('funciones_del_cargo');
                $requisitos = get_field('requisitos');
                $requisitos_deseables_yo_excluyentes =get_field('requisitos_deseables_yo_excluyentes');
                $beneficio_horarios = get_field('beneficio_horarios');
                $beneficio_salarial = get_field('beneficio_salarial');
                $beneficio_tipo_trabajo = get_field('beneficio_tipo_trabajo');
                
            ?>
           
                        <div class="modal fade" id="exampleModal_<?php echo $id;?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                                <div class="modal-content" style="overflow-y: scroll;">
                                     
                                <h2><?php echo $title; ?></h2>
                                <p><<?php echo $funciones_del_cargo; ?></p>
                                <p><<?php echo $requisitos; ?></p>
                                <p><?php echo $requisitos_deseables_yo_excluyentes; ?></p>
                                <p><?php echo $beneficio_horarios; ?></p>
                                <p><?php echo $beneficio_salarial; ?></p>
                                <p><?php echo $beneficio_tipo_trabajo; ?></p>

                                   
                                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                        Launch demo modal
                                        </button>
                                    
                                </div>
                            </div>
                        </div>
 <!--  -->
 <!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <h2><?php echo $title; ?></h2>
      <?php echo do_shortcode( '[caldera_form id="CF6193ab180b2fc"]' ); ?>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
 <!--  -->
    
            <?php endwhile; wp_reset_postdata(); ?>
<?php
}
