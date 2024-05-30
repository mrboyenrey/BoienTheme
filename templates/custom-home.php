<?php /* Template Name: BT-Home*/ ?>

<?php get_header(); ?>


<!--Home Slider-->
<div id="sliderhome" class="full-container">

<div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="http://boienreyes.net/wp-content/uploads/2024/05/WebDevandDesign.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="http://boienreyes.net/wp-content/uploads/2024/05/GraphicDesign.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="http://boienreyes.net/wp-content/uploads/2024/05/WebDevandDesign.jpg" class="d-block w-100" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
  
<?php
if (have_posts()) :
    while (have_posts()) : the_post();       
        the_content();
    endwhile;
endif;
?> 

      
<?php get_footer(); ?>     