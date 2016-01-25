<?php
function enqueue_bootstrap_javascript() {
    wp_enqueue_script( 'custom-script', get_stylesheet_directory_uri() . '/lib/js/bootstrap.min.js', array( 'jquery' ) );
    wp_enqueue_script( 'bootstrap-jquery', get_stylesheet_directory_uri() . '/lib/js/jquery.js' );
}
add_action('wp_enqueue_scripts', 'enqueue_bootstrap_javascript');