<?php /* Template Name: Custom Home Page */ ?>

<?php get_header(); ?>

<div id="content" class="container"> <!-- Your content goes here -->
<?php
if (have_posts()) :
    while (have_posts()) : the_post();       
        the_content();
    endwhile;
endif;
?> 
</div>  
      
<?php get_footer(); ?>     