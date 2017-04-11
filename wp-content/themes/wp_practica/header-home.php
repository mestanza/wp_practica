<!DOCTYPE html>

<html lang="es">

<head>
<title>Tales os Zestiria - Home</title>

<meta charset="utf-8" />
<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
<!--<link rel="stylesheet" href="<?php bloginfo(stylesheet_url); ?>" /> -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.4/css/bootstrap.min.css" integrity="sha384-2hfp1SzUoho7/TsGGGDaFdsuuDL0LX2hnUp6VkX3CUQ2K4K+xjboZdsXyp4oUHZj" crossorigin="anonymous">
<link rel="shortcut icon" type="image/x-icon" href="http://localhost:8080/wp_practica/wp-content/uploads/2017/02/favicon-16x16.png"/>
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<?php wp_head(); ?>
</head>

  <body>

    <!--
    <nav class="navbar navbar-fixed-top navbar-dark bg-inverse">
      <a class="navbar-brand" href="#">Project name</a>
      <ul class="nav navbar-nav">
        <li class="nav-item active">
          <a class="nav-link" href="#">Home </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">About <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Contact</a>
        </li>
      </ul>
    </nav>
-->

<?php 
        wp_nav_menu(
          array (
            'theme_location' => 'top-menu',
            'container' => 'nav', 
            'menu_class' => 'nav__list'
            )
          );

       ?>
    <!-- Carousel container -->
<div id="my-pics" class="carousel slide" data-ride="carousel" style="width:100%;margin:0; margin-top: 7em;">

<!-- Indicators -->
<ol class="carousel-indicators">
<li data-target="#my-pics" data-slide-to="0" class="active"></li>
<li data-target="#my-pics" data-slide-to="1"></li>
<li data-target="#my-pics" data-slide-to="2"></li>
<li data-target="#my-pics" data-slide-to="3"></li>
</ol>

<!-- Content -->
<div class="carousel-inner responsive" role="listbox">

<!-- Slide 1 -->
<div class="carousel-item active">
<img src="http://localhost:8080/wp_practica/wp-content/uploads/2017/02/img04.jpg" alt="Sunset over beach">
<div class="carousel-caption hidden-xs-down">
<h3>Tales of Zestiria</h3>
<p>Anime Y Videogame.</p>
</div>
</div>


<!-- Slide 4 -->
<div class="carousel-item">
<img src="http://localhost:8080/wp_practica/wp-content/uploads/2017/02/img1-2.jpg" alt="Longtail boats at Phi Phi">
<div class="carousel-caption hidden-xs-down">
<h3>Sistema de Combate</h3>
<p>Decenas de Posibilidades, Opciones y Variantes</p>
</div>
</div>

<!-- Slide 2 -->
<div class="carousel-item" style="width:100%;">
<img src="http://localhost:8080/wp_practica/wp-content/uploads/2017/02/img2.jpg" alt="Rob Roy Glacier" style="width:100%;">
<div class="carousel-caption hidden-xs-down">
<h3>Música</h3>
<p>Una Banda Sonora maravillosa!</p>
</div>
</div>

<!-- Slide 3 -->
<div class="carousel-item">
<img src="http://localhost:8080/wp_practica/wp-content/uploads/2017/02/img3.jpg" alt="Longtail boats at Phi Phi">
<div class="carousel-caption hidden-xs-down">
<h3>Sidequests</h3>
<p>Ejecución y Desarrollo.</p>
</div>
</div>

</div>

<!-- Previous/Next controls -->
<a class="left carousel-control" href="#my-pics" role="button" data-slide="prev">
<span class="icon-prev" aria-hidden="true"></span>
<span class="sr-only">Previous</span>
</a>
<a class="right carousel-control" href="#my-pics" role="button" data-slide="next">
<span class="icon-next" aria-hidden="true"></span>
<span class="sr-only">Next</span>
</a>

</div>

<!-- Center the image -->
<style scoped>
.carousel-item img{
    margin: 0 auto;
}
</style>

</div>