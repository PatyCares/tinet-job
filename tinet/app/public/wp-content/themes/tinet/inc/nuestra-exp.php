<?php

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