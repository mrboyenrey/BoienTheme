<?php

add_theme_support('custom-logo');

// Add custom image size for the logo
add_image_size('custom-logo-size', 150, 150, true);

// Hook into the 'after_setup_theme' action to set the custom logo size
function set_custom_logo_size() {
    // Replace 'custom-logo-size' with the name of your custom image size
    add_theme_support('custom-logo', array(
        'height'      => 150,
        'width'       => 150,
        'flex-height' => true,
        'flex-width'  => true,
    ));
}
add_action('after_setup_theme', 'set_custom_logo_size'); 
               
 
?>  