<?php

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