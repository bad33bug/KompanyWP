<?php

function kwp_enqueue_scripts()
{

    //Enqueuing Stylesheet
    wp_enqueue_style('wp-style', get_stylesheet_uri(), NULL, '1.0.1', 'all');
    wp_enqueue_style('kwp-bootstrap', get_template_directory_uri() . '/assets/vendor/bootstrap/css/bootstrap.min.css', NULL, '1.0.1', 'all');
    wp_enqueue_style('kwp-style', get_template_directory_uri() . '/css/kwp-style.css', array('kwp-bootstrap'), '1.0.1', 'all');

    //Enqueuing Scripts
    wp_enqueue_script('kwp-bootstrap', get_template_directory_uri() . '/assets/vendor/bootstrap/js/bootstrap.min.js', NULL, '1.0.1', true);
    wp_enqueue_script('kwp-js', get_template_directory_uri() . 'js/kwp-scripts.js', array('jquery'), '1.0.1', true);
}

add_action('wp_enqueue_scripts', 'kwp_enqueue_scripts');


function kwp_theme_features()
{
    add_theme_support('post-thumbnails');
    add_theme_support( 'html5', array( 'comment-list' ) );
}

add_action('after_setup_theme', 'kwp_theme_features');
