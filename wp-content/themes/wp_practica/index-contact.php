<?php get_header(); ?>







<div class="container-fluid">
    
<!-- Carousel container -->
<div id="my-pics" class="carousel slide" data-ride="carousel" style="width:900px;margin:auto;">

<!-- Indicators -->
<ol class="carousel-indicators">
<li data-target="#my-pics" data-slide-to="0" class="active"></li>
<li data-target="#my-pics" data-slide-to="1"></li>
<li data-target="#my-pics" data-slide-to="2"></li>
</ol>

<!-- Content -->
<div class="carousel-inner" role="listbox">

<!-- Slide 1 -->
<div class="carousel-item active">
<img src="http://localhost:8080/wp_practica/wp-content/uploads/2017/02/img1-2.jpg" alt="Sunset over beach">
<div class="carousel-caption">
<h3>Boracay</h3>
<p>White Sand Beach.</p>
</div>
</div>

<!-- Slide 2 -->
<div class="carousel-item">
<img src="http://localhost:8080/wp_practica/wp-content/uploads/2017/02/img2.jpg" alt="Rob Roy Glacier">
<div class="carousel-caption">
<h3>Rob Roy Glacier</h3>
<p>You can almost touch it!</p>
</div>
</div>

<!-- Slide 3 -->
<div class="carousel-item">
<img src="http://localhost:8080/wp_practica/wp-content/uploads/2017/02/img3.jpg" alt="Longtail boats at Phi Phi">
<div class="carousel-caption">
<h3>Phi Phi</h3>
<p>Longtail boats at Phi Phi.</p>
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