<?php


// Enqueue Bootstrap CSS
function enqueue_bootstrap_css() {
    wp_enqueue_style('bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css', array(), '5.2.0', 'all');
}

add_action('wp_enqueue_scripts', 'enqueue_bootstrap_css');

// Enqueue Bootstrap JS and Popper.js (required for Bootstrap's JavaScript)
function enqueue_bootstrap_js() {
    // Enqueue Popper.js
    wp_enqueue_script('popper', 'https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js', array('jquery'), '2.9.3', true);

    // Enqueue Bootstrap JS
    wp_enqueue_script('bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js', array('jquery', 'popper'), '5.2.0', true);
}

add_action('wp_enqueue_scripts', 'enqueue_bootstrap_js');   



?>