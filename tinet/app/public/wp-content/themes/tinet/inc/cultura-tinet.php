
<?php
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