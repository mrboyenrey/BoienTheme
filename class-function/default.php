<?php

// My Main Style
function enqueue_my_styles() {
    wp_enqueue_style('my-custom-style', get_stylesheet_directory_uri() . 'style.css', array(), '1.0', 'all');
}
 
add_action('wp_enqueue_scripts', 'enqueue_my_styles');    

?>