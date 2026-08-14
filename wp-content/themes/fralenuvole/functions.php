<?php

function enqueue_child_theme_styles() {
    // Enqueue parent theme styles
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );

    // Generates a new version number automatically based on the last save time
    $css_version = filemtime( get_stylesheet_directory() . '/style.css' );

    wp_enqueue_style( 'child-style', 
        get_stylesheet_directory_uri() . '/style.css', 
        array( 'parent-style' ), 
        $css_version 
    );
}

add_action( 'wp_enqueue_scripts', 'enqueue_child_theme_styles' );
