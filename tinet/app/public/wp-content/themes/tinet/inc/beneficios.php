<?php
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
         
         <div class="row">
            <div class="col-4">
            <!-- <label class="input-group-text" for="inputGroupSelect01">Options</label> -->
            <select class="form-select" aria-label="Default select example">
                <option selected><?php echo $titulo_beneficio; ?></option>
                <option value="1"><?php echo $descripcion_beneficio; ?></option>
            </select>
            </div>
            <div class="col-4">
            <select class="form-select" aria-label="Default select example">
                <option selected><?php echo $titulo_beneficio_2; ?></option>
                <option value="1"><?php echo $descripcion_beneficio_2; ?></option>
            </select>
            </div>
            <div class="col-4">
            <select class="form-select" aria-label="Default select example">
                <option selected><?php echo $titulo_beneficio_3; ?></option>
                <option value="1"><?php echo $descripcion_beneficio_3; ?></option>
            </select>
            </div>
         </div>

         <div class="row mt-3">
         <div class="col-4">
            <select class="form-select" aria-label="Default select example">
                <option selected><?php echo $titulo_beneficio_4; ?></option>
                <option value="1"><?php echo $descripcion_beneficio_4; ?></option>
            </select>
            </div>
            <div class="col-4">
            <select class="form-select" aria-label="Default select example">
                <option selected><?php echo $titulo_beneficio_5; ?></option>
                <option value="1"><?php echo $descripcion_beneficio_5; ?></option>
            </select>
            </div>
            <div class="col-4">
            <select class="form-select" aria-label="Default select example">
                <option selected><?php echo $titulo_beneficio_6; ?></option>
                <option value="1"><?php echo $descripcion_beneficio_6; ?></option>
            </select>
            </div>
         </div>

         <div class="row mt-3">
         <div class="col-4">
            <select class="form-select" aria-label="Default select example">
                <option selected><?php echo $titulo_beneficio_7; ?></option>
                <option value="1"><?php echo $descripcion_beneficio_7; ?></option>
            </select>
            </div>
            <div class="col-4">
            <select class="form-select" aria-label="Default select example">
                <option selected><?php echo $titulo_beneficio_8; ?></option>
                <option value="1"><?php echo $descripcion_beneficio_8; ?></option>
            </select>
            </div>
            <div class="col-4">
            <select class="form-select" aria-label="Default select example">
                <option selected><?php echo $titulo_beneficio_9; ?></option>
                <option value="1"><?php echo $descripcion_beneficio_9; ?></option>
            </select>
            </div>
         </div>

         <div class="row mt-3">
         <div class="col-4">
            <select class="form-select" aria-label="Default select example">
                <option selected><?php echo $titulo_beneficio_10; ?></option>
                <option value="1"><?php echo $descripcion_beneficio_10; ?></option>
            </select>
            </div>
            <div class="col-4">
            <select class="form-select" aria-label="Default select example">
                <option selected><?php echo $titulo_beneficio_11; ?></option>
                <option value="1"><?php echo $descripcion_beneficio_11; ?></option>
            </select>
            </div>
            <div class="col-4">
            <select class="form-select" aria-label="Default select example">
                <option selected><?php echo $titulo_beneficio_12; ?></option>
                <option value="1"><?php echo $descripcion_beneficio_12; ?></option>
            </select>
            </div>
         </div>

            <?php endwhile; wp_reset_postdata(); ?>
<?php
}
