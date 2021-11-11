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