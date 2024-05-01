<?php


// Enqueue Bootstrap CSS
function enqueue_bootstrap_css() {
    wp_enqueue_style('bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css', array(), '5.3.3', 'all');
}

add_action('wp_enqueue_scripts', 'enqueue_bootstrap_css');

// Enqueue Bootstrap JS and Popper.js (required for Bootstrap's JavaScript)
function enqueue_custom_scripts() {
    // Enqueue Popper.js
    wp_enqueue_script( 'popper-js', 'https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js', array(), null, true );

    // Enqueue Bootstrap JS
    wp_enqueue_script( 'bootstrap-js', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js', array('popper-js'), null, true );
}
add_action( 'wp_enqueue_scripts', 'enqueue_custom_scripts' );



?>