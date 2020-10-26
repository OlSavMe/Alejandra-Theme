<?php

// Loading style and javascript files

function scripts() {
    wp_register_style('style', get_template_directory_uri() . '/dist/app.css', [], 1, 'all');
    wp_enqueue_style('style');

    wp_enqueue_script('jquery');

    wp_register_script('app', get_template_directory_uri() . '/dist/app.js', ['jquery'], 1, true);
    wp_enqueue_style('app');
}

add_action('wp_enqueue_scripts', 'scripts');



// Adding menus 

add_theme_support('menus');

register_nav_menus(

    array (
        'top-menu' => __('Top Menu', 'theme'),
        'footer-menu' => __('Footer Menu', 'theme'),
        // 'mobile-menu' => __('Mobile Menu', 'theme'),
    )
    );

// Disable the Admin Bar

add_filter( 'show_admin_bar', '__return_false' );


// Adding custom posts

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
    );

    register_post_type('master', $args); 

}

add_action('init', 'master_post_type'); // fires after loadng is completed but before any headers sent


function photo_post_type() {

    $args = array (
        'labels'=> array (
            'name' => 'Photos', // label shown in admin menu
            'singular_name' => 'photo', // name for one object of the post type
        ),
        // 'hierarchical' => true,
        'public' => true, // visible both in the admin panel and front end
        'has_archive' => true, // enables archiving of the custom posts
        'menu_icon'   => 'dashicons-format-gallery', // post type icon in admin menu 
        'rewrite' => array('slug' => 'photos','with_front' => false),
        'supports' => array('title', 'editor', 'thumbnail', 'custom-fields'), // features supported by the post type
    );

    register_post_type('photo', $args); 

}

add_action('init', 'photo_post_type'); // fires after loadng is completed but before any headers sent
