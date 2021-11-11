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
    <div class="row">
        <?php //beneficios(); ?>
    </div>
</div>


<?php get_footer();