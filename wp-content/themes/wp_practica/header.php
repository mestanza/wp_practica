<!DOCTYPE html>

<html lang="es">

<head>
<title>Tales os Zestiria</title>

<meta charset="utf-8" />
<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
<!--<link rel="stylesheet" href="<?php bloginfo(stylesheet_url); ?>" /> -->

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
          <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="contact.php">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Contact</a>
        </li>
      </ul>
    </nav>
    <div class="container-fluid">
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