<?php

// Loading style and javascript files

function scripts() {
    wp_register_style('style', get_template_directory_uri() . '/dist/app.css', [], 1, 'all');
    wp_enqueue_style('style');

    wp_enqueue_script('jquery');

    wp_register_script('app', get_template_directory_uri() . '/dist/app.js', ['jquery'], 1, true);
    wp_enqueue_script('app');
}

add_action('wp_enqueue_scripts', 'scripts');



// Adding menus 

add_theme_support('menus');


function register_my_menus() {
    register_nav_menus(
      array(
        'header-menu' => __( 'Header Menu' ),
        'footer-menu' => __( 'Footer Menu' ),
       )
     );
   }
   add_action( 'init', 'register_my_menus' );


// Disable the Admin Bar

add_filter( 'show_admin_bar', '__return_false' );


// Adding custom posts

// Master profiles

function master_post_type() {

    $args = array (
        'labels'=> array (
            'name' => 'Masters', // label shown in admin menu
            'singular_name' => 'master', // name for one object of the post type
        ),
        'hierarchical' => true,
        'public' => true, // visible both in the admin panel and front end
        'has_archive' => true, // enables archiving of the custom posts
        'menu_icon'   => 'dashicons-universal-access-alt', // post type icon in admin menu 
        'rewrite' => array('slug' => 'masters','with_front' => false),
        'supports' => array('title', 'editor', 'thumbnail', 'custom-fields'), // features supported by the post type
        'show_in_rest' => true, // for API endpoint
    );

    register_post_type('master', $args); 

}

add_action('init', 'master_post_type'); // fires after loadng is completed but before any headers sent


// Photos for galleries

function photo_post_type() {

    $args = array (
        'labels'=> array (
            'name' => 'Photos', // label shown in admin menu
            'singular_name' => 'photo', // name for one object of the post type
        ),
        'public' => true, // visible both in the admin panel and front end
        'has_archive' => true, // enables archiving of the custom posts
        'menu_icon'   => 'dashicons-format-gallery', // post type icon in admin menu 
        'rewrite' => array('slug' => 'photos','with_front' => false),
        'supports' => array('title', 'editor', 'thumbnail', 'custom-fields'), // features supported by the post type
        'show_in_rest' => true, // for API endpoint
    );

    register_post_type('photo', $args); 

}

add_action('init', 'photo_post_type'); // fires after loadng is completed but before any headers sent



// Adding custom taxonomies

function type_master_taxonomy() {
    $args = array (
        'labels'=> array (
            'name' => 'master', // label shown in admin menu
            'singular_name' => 'master', 
        ),
        'public' => true, // visible both in the admin panel and front end
        'hierarchical' => true, // category-kind taxonomy
        'show_in_rest' => true, // for API endpoint
    );

    register_taxonomy('master', array('photo'), $args); 
}

add_action('init', 'type_master_taxonomy'); // fires after loadng is completed but before any headers sent


function type_photo_taxonomy() {
    $args = array (
        'labels'=> array (
            'name' => 'type', // label shown in admin menu
            'singular_name' => 'type', 
        ),
        'public' => true, // visible both in the admin panel and front end
        'hierarchical' => true, // category-kind taxonomy
        'show_in_rest' => true, // for API endpoint
    );

    register_taxonomy('type', array('photo'), $args); 
}

add_action('init', 'type_photo_taxonomy'); // fires after loadng is completed but before any headers sent


// Custom posts for contact details
function some_post_type() {

    $args = array (
        'labels'=> array (
            'name' => 'SOME and Phone', // label shown in admin menu
            'singular_name' => 'some', // name for one object of the post type
        ),
        'public' => true, // visible both in the admin panel and front end
        'has_archive' => true, // enables archiving of the custom posts
        'menu_icon'   => 'dashicons-share', // post type icon in admin menu 
        'rewrite' => array('slug' => 'some','with_front' => false),
        'supports' => array('title', 'editor', 'thumbnail', 'custom-fields'), // features supported by the post type
        'show_in_rest' => true, // for API endpoint
    );

    register_post_type('some', $args); 

}

add_action('init', 'some_post_type');

// Customs posts for Our Story section


function story_post_type() {

    $args = array (
        'labels'=> array (
            'name' => 'Our Story', // label shown in admin menu
            'singular_name' => 'story', // name for one object of the post type
        ),
        'public' => true, // visible both in the admin panel and front end
        'has_archive' => true, // enables archiving of the custom posts
        'menu_icon'   => 'dashicons-buddicons-community', // post type icon in admin menu 
        'rewrite' => array('slug' => 'story','with_front' => false),
        'supports' => array('title', 'editor', 'thumbnail', 'custom-fields'), // features supported by the post type
        'show_in_rest' => true, // for API endpoint
    );

    register_post_type('story', $args); 

}

add_action('init', 'story_post_type');