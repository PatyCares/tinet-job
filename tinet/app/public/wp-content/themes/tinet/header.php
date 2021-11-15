<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>

    <script>
      smoothScroll.init({
      selector: '[data-scroll]', // Selector for links (must be a class, ID, data attribute, or element tag)
      selectorHeader: null, // Selector for fixed headers (must be a valid CSS selector) [optional]
      speed: 2000, // Integer. How fast to complete the scroll in milliseconds
      easing: 'easeInOutCubic', // Easing pattern to use
      offset: 0, // Integer. How far to offset the scrolling anchor location in pixels
      callback: function ( anchor, toggle ) {} // Function to run after scrolling
      });
    </script>
</head>
<body>
    
       
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container">
    <div class="navbar-brand" href="#">
        <img src="<?php echo get_template_directory_uri() ?>/img/logo.svg" alt="" style='width: 118px'>
    </div>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#secCultura">Cultura</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#secExp">Experiencia</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#secWay">The Tinet Way</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#secCulvi">Cultura Viva</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#secBene">Beneficios</a>
        </li>
        <li class="nav-item">
          <a class="nav-link ofertas" href="#secOfer">Ofertas de Empleo</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
