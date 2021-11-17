<?php get_header(); ?>

<div class="container">
    <div class="row carrusel">
        <?php slider_principal(); ?>
    </div>
    
</div>

<div class="container">
    <div class="row" id="secCultura">
        <div class="col-12 text-center">
            <h1>Nuestra cultura nos hace Imparables</h1>
            <p>Nos adaptamos, cambiamos y mejoramos, pero nuestra cultura es nuestro mantra.</p>
        </div>
    </div>
    <div class="row">
        <?php lista_cultura(); ?>
    </div>
</div>

<div class="container">
    <div class="row" id="secExp">
        <div class="col-12 text-center">
            <h1>Nuestra Experiencia</h1>
        </div>
    </div>
    <div class="row">
        <?php nuestra_experiencia();  ?>
    </div>
</div>

<div class="container">
    <div class="row" id="secWay">
        <div class="col-12 text-center">
            <h1>Tinet Way</h1>
            <p>En Tinet nos consideramos un gran equipo que entiende la importancia de cumplir siempre con sus compromisos. Nos enfocamos en cuidar a nuestros clientes y nos apropiamos de sus desafíos para entregarles soluciones de excelencia y enfocadas en la Transformación Digital.</p>
        </div>
    </div>
     
        <?php tinet_way();  ?>
     
</div>

<div class="container">
    <div class="row carrusel-2" id="secCulvi">
        <?php slider_culturaViva(); ?>
    </div>  
</div>

<div class="container">
    <div class="row" id="secBene">
        <div class="col-12 text-center">
            <h1>Pensamos en Todo</h1>
            <p>Nos interesa tu bienestar, sabemos que la vida es un torbellino y las necesidades cambian, es por esto que nuestro beneficios se centran en aquellas cosas que pueden ser importantes para ti en diferentes etapas de tu vida.</p>
        </div>
    </div>
    <?php beneficios(); ?>  
</div>

<div class="container mt-5">
    <div class="row" id="secOfer">
        <div class="col-6">
            aqui va la imagen
        </div>
            <div class="col-6">
                <div class="text-center">
                    <h2>¡Hey!</h2>
                    <h1>Ya nos conoces</h1>
                    <p>Sabes que vivimos a concho esta aventura. Ven y súmate a este gran equipo y se parte de la creación del mañana.</p>
                </div>
            </div>
    </div>

    <div class="row">
        <h2>¿List@ para trabajar en Tinet?</h2>
    </div>

    <div class="row">
    <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>

    <div class="row mt-5">
        <ul class="nav nav-tabs" id="myTab" role="tablist">
            <li class="nav-item" role="presentation">
                <button class="nav-link active" id="destacados-tab" data-bs-toggle="tab" data-bs-target="#destacados" type="button" role="tab" aria-controls="destacados" aria-selected="true">Destacados</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="tecnologia-tab" data-bs-toggle="tab" data-bs-target="#tecnologia" type="button" role="tab" aria-controls="tecnologia" aria-selected="false">Tecnología</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="consultoria-tab" data-bs-toggle="tab" data-bs-target="#consultoria" type="button" role="tab" aria-controls="consultoria" aria-selected="false">Consultoria</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="comercial-tab" data-bs-toggle="tab" data-bs-target="#comercial" type="button" role="tab" aria-controls="comercial" aria-selected="false">Comercial</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="marketing-tab" data-bs-toggle="tab" data-bs-target="#marketing" type="button" role="tab" aria-controls="marketing" aria-selected="false">Marketing</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="administracion-tab" data-bs-toggle="tab" data-bs-target="#administracion" type="button" role="tab" aria-controls="administracion" aria-selected="false">Administración</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="bpo-tab" data-bs-toggle="tab" data-bs-target="#bpo" type="button" role="tab" aria-controls="bpo" aria-selected="false">BPO</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="diseno-tab" data-bs-toggle="tab" data-bs-target="#diseno" type="button" role="tab" aria-controls="diseno" aria-selected="false">Diseño</button>
            </li>
        </ul>
        <div class="tab-content d-inline" id="myTabContent">
            <div class="tab-pane fade show active" id="destacados" role="tabpanel" aria-labelledby="destacados-tab"><?php job_tinet_destacados(); ?></div>
            <div class="tab-pane fade" id="tecnologia" role="tabpanel" aria-labelledby="tecnologia-tab"><?php job_tinet_tecno(); ?></div>
            <div class="tab-pane fade" id="consultoria" role="tabpanel" aria-labelledby="consultoria-tab"><?php job_tinet_consultoria(); ?></div>
            <div class="tab-pane fade" id="comercial" role="tabpanel" aria-labelledby="comercial-tab"><?php job_tinet_comercial(); ?></div>
            <div class="tab-pane fade" id="marketing" role="tabpanel" aria-labelledby="marketing-tab"><?php job_tinet_marketing(); ?></div>
            <div class="tab-pane fade" id="administracion" role="tabpanel" aria-labelledby="administracion-tab"><?php job_tinet_admin(); ?></div>
            <div class="tab-pane fade" id="bpo" role="tabpanel" aria-labelledby="bpo-tab"><?php job_tinet_bpo(); ?></div>
            <div class="tab-pane fade" id="diseno" role="tabpanel" aria-labelledby="diseno-tab"><?php job_tinet_diseño(); ?></div>
        </div>
                
    </div>
    
    <div class="row">
    <?php modal_job(); ?>
    </div>

    <div class="row mt-5">
        <div class="d-flex justify-content-center">
            <!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#sendCV">
  Envíanos tu CV
</button>

<!-- Modal -->
<div class="modal fade" id="sendCV" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <h5 class="" id="exampleModalLabel">¡Para nosotros es un gusto conocerte!</h5></br>
        <p>Envía tu CV o compartenos tu perfil en linkedin.</p>
            <?php echo do_shortcode( '[caldera_form id="CF61942416570b3"]' ); ?>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
        </div>
    </div>
</div>

<?php get_footer();


        
            