<?php get_header(contact); ?>



  <body>

    <nav class="navbar navbar-fixed-top navbar-dark bg-inverse">
      <a class="navbar-brand" href="#">Project name</a>
      <ul class="nav navbar-nav">
        <li class="nav-item active">
          <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Contact</a>
        </li>
      </ul>
    </nav>



    <div class="container">

      <div class="starter-template">
        <h1><?php bloginfo(name); ?></h1>
        <p class="lead"><?php bloginfo(description); ?>.</p>
        <p class="lead"><?php bloginfo(stylesheet_directory); ?>.</p>
      </div>


    </div><!-- /.container -->
      <div class="container">
        <div class="row">
          <img src="http://localhost:8080/wp_practica/wp-content/uploads/2017/02/zestiria-e1486412985923.png" class="img-thumbnail card-img mx-auto d-block border-0 hidden-xs-down" alt="Wordpress Carlos Mestanza" style="border: 1px solid black">

        </div>


      </div>


<?php get_footer(); ?>