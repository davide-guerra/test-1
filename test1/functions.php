<?php

// Enqueue parent theme style
function add_parent_style() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri().'/style.css' ); 
}
add_action( 'wp_enqueue_scripts', 'add_parent_style');


// Enqueue child theme style
function add_child_style() {
    wp_enqueue_style( 'child-style', get_stylesheet_uri() );
}
add_action( 'wp_enqueue_scripts', 'add_child_style', 11 );
