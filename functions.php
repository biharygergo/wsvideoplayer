<?php


function my_theme_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'child-style', get_stylesheet_directory_uri() . '/style.css');
    wp_enqueue_script('header-script', get_stylesheet_directory_uri() . '/header.js', array('jquery'));
    wp_localize_script( 'header-script', 'ajax_object',
        array( 'ajax_url' => admin_url( 'admin-ajax.php' ), 'we_value' => 1234 ) );
}
add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );


add_action( 'wp_ajax_proba', 'prefix_ajax_add_foobar' );
add_action( 'wp_ajax_nopriv_proba', 'prefix_ajax_add_foobar' );

function prefix_ajax_add_foobar() {
    // Handle request then generate response using WP_Ajax_Response

    // Don't forget to stop execution afterward
    echo 'haligali';

    die();
}