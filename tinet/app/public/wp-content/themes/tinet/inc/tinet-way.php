<?php
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