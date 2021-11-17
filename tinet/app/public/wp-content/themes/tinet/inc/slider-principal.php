<?php 
function slider_principal() { ?>

<?php  
    $args = array(
        'post_type' => 'slider',
        'posts_per_page' => 3 ); 
            $slider = new WP_Query($args);
			while($slider -> have_posts() ): $slider -> the_post(); ?>

       <div class="col-12" style="position:relative; z-index:2">
            <?php the_post_thumbnail('blog'); ?>
            <div class="text-slider" style="position: absolute; left: 40px; top: 40px; z-index:1">
                <?php the_title(); ?>
                <?php the_content(); ?>
            </div>
       </div> 

        <?php endwhile; wp_reset_postdata(); ?>
<?php
}