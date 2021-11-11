<?php get_header(); ?>
<div class="container">
    <div class="row carrusel">
        <?php slider_principal(); ?>
    </div>
    
</div>

<div class="container">
    <div class="row">
        <div class="col-12 text-center">
            <h1>Nuestra cultura nos hace Imparables</h1>
            <p>Nos adaptamos, cambiamos y mejoramos, pero nuestra cultura es nuestra mantra.</p>
        </div>
    </div>
    <div class="row">
        <?php lista_cultura(); ?>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-12 text-center">
            <h1>Nuestra Experiencia</h1>
        </div>
    </div>
    <div class="row">
        <?php nuestra_experiencia();  ?>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-12 text-center">
            <h1>Tinet Way</h1>
            <p>En Tinet nos consideramos un gran equipo que entiende la importancia de cumplir siempre con sus compromisos. Nos enfocamos en cuidar a nuestros clientes y nos apropiamos de sus desafíos para entregarles soluciones de excelencia y enfocadas en la Transformación Digital.</p>
        </div>
    </div>
     
        <?php tinet_way();  ?>
     
</div>

<div class="container">
    <div class="row carrusel-2">
        <?php slider_culturaViva(); ?>
    </div>  
</div>

<div class="container">
    <div class="row">
        <div class="col-12 text-center">
            <h1>Pensamos en Todo</h1>
            <p>Nos interesa tu bienestar, sabemos que la vida es un torbellino y las necesidades cambian, es por esto que nuestro beneficios se centran en aquellas cosas que pueden ser importantes para ti en diferentes etapas de tu vida.</p>
        </div>
    </div>
    <?php beneficios(); ?>  
</div>

<div class="container mt-5">
    <div class="row">
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
        <div class="seachr" style="border: 1px solid grey; width: 50rem;">
           busca la oferta del perfil
        </div>
    </div>

    <div class="row mt-5">
        <div class="tab">
                    <button class="tablinks" onclick="openCity(event, 'Destacados')" id="defaultOpen">Destacados</button>
                    <!-- <button class="tablinks" onclick="openCity(event, 'Destacados')">Destacados</button> -->
                    <button class="tablinks" onclick="openCity(event, 'Tecnología')">Tecnología</button>
                    <button class="tablinks" onclick="openCity(event, 'Consultoría')">Consultoría</button>
                    <button class="tablinks" onclick="openCity(event, 'Comercial')">Comercial</button>
                    <button class="tablinks" onclick="openCity(event, 'Marketing')">Marketing</button>
                    <button class="tablinks" onclick="openCity(event, 'Administración')">Administración</button>
                    <button class="tablinks" onclick="openCity(event, 'BPO')">BPO</button>
                    <button class="tablinks" onclick="openCity(event, 'Diseño')">Diseño</button>
        </div>
        
    </div>

    <div class="row">
    
        <?php search_job(); ?>
    </div>
</div>


<?php get_footer();


        
            