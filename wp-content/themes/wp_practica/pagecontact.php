<?php 
/*Template Name: Page Contact */
 ?>


<?php get_header(); ?>


    <div class="container">

 <!--     <div class="starter-template">
        <h1><?php bloginfo(name); ?></h1>
        <p class="lead"><?php bloginfo(description); ?>.</p>
        <p class="lead"><?php bloginfo(stylesheet_directory); ?>.</p>
      </div>

-->
    </div><!-- /.container -->


      <div class="container-fluid" style="margin-top: 2em;">
        <div class="row" style="margin-bottom: 2em;">
          <img style="width: 100%; border-bottom: solid black 5px;" src="http://localhost:8080/wp_practica/wp-content/uploads/2017/02/s_3181_banner.jpeg" class="img-thumbnail card-img mx-auto d-block border-0" alt="Wordpress Carlos Mestanza" style="border: 1px solid black">

        </div>
      </div>

    <div class="container">
      <h1><strong>¡Contactanos!</strong></h1>
    </div>
    <br>

        
          
    <div class="container">
      <div class="row">
        <div class="col-lg-6">
          <form action="mailer.php" method="post" role="static">
            Nombre: <input type="text" name="first_name" class="form-control" placeholder="Introduce tu Nombre"><br>
            Email: <input type="text" name="email" class="form-control" placeholder="Introduce tu Email"><br>
            Mensaje:<br><textarea rows="5" name="message" cols="30" class="form-control" placeholder="Introduce tu Mensaje"></textarea><br>
            <input type="submit" name="submit" value="Enviar">
          </form>
        </div>
        <div class="col-lg-6">
        <br>
        <div class="embed-responsive embed-responsive-4by3">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d143322.87426311485!2d-4.372205366056321!3d55.85538065112135!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x488815562056ceeb%3A0x71e683b805ef511e!2sGlasgow%2C+Reino+Unido!5e0!3m2!1ses-419!2sve!4v1487277308966" width="450" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
      </div>
          <address style="margin-top: 1em;" class="text-justified">Pagina Realizada para Tales of Zestiria, anime donde Sorey es un joven humano que ha crecido rodeado de seres espirituales, llamados “Serafines”, invisibles al ojo humano.
Él cree en la leyenda que cuenta que “En antaño, cualquier humano podía ver a los serafines”, por lo cual su sueño es descifrar los Misterios de la Antigüedad y hacer realidad un mundo donde los humanos y los serafines coexistan.
          </address>
        </div>
      </div>
    </div>
     
    <hr> 
<br>

      </div>


<?php get_footer(); ?>