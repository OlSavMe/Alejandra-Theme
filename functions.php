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
        'supports' => array(
            'title',
            'editor',
            'author',
            'thumbnail',
            'trackbacks',
            'custom-fields',
            'comments',
            'revisions',
            'page-attributes',
            'post-formats',
            'custom-fields',),// features supported by the post type
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
        'supports' => array(
            'title',
            'editor',
            'author',
            'thumbnail',
            'trackbacks',
            'custom-fields',
            'comments',
            'revisions',
            'page-attributes',
            'post-formats',
            'custom-fields'),// features supported by the post type
        'show_in_rest' => true, // for API endpoint
    );

    register_post_type('photo', $args); 

}

add_action('init', 'photo_post_type'); // fires after loadng is completed but before any headers sent

// adding thumbnails to the admin post list

if (function_exists('add_theme_support')) {
    add_theme_support( 'post-thumbnails' );
    set_post_thumbnail_size( 100, 100, true ); // default thumbnail size
    add_image_size('my-custom-thumb', 120, 120, true); //custom size
    }

add_filter('manage_posts_columns', 'posts_columns', 5);
add_action('manage_posts_custom_column', 'posts_custom_columns', 5, 2);
 
function posts_columns($defaults){
    $defaults['riv_post_thumbs'] = __('Pic');
    return $defaults;
}
 
function posts_custom_columns($column_name, $id){
    if($column_name === 'riv_post_thumbs'){
        echo the_post_thumbnail();
    }
}


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
            'name' => 'All Contact Info', // label shown in admin menu
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



// Customs posts for Map in Contact page


function map_post_type() {

    $args = array (
        'labels'=> array (
            'name' => 'Map', // label shown in admin menu
            'singular_name' => 'map', // name for one object of the post type
            
        ),
        'public' => true, // visible both in the admin panel and front end
        'has_archive' => true, // enables archiving of the custom posts
        'menu_icon'   => 'dashicons-admin-site', // post type icon in admin menu 
        'rewrite' => array('slug' => 'map','with_front' => false),
        'supports' => array('title', 'editor', 'thumbnail', 'custom-fields'), // features supported by the post type
        'show_in_rest' => true, // for API endpoint
    );

    register_post_type('map', $args); 

}

add_action('init', 'map_post_type');





// Customs posts for Services in Master Profiles

function service_post_type() {

    $args = array (
        'labels'=> array (
            'name' => 'Services and Products', // label shown in admin menu
            'singular_name' => 'service', // name for one object of the post type
            
        ),
        'public' => true, // visible both in the admin panel and front end
        'has_archive' => true, // enables archiving of the custom posts
        'menu_icon'   => 'dashicons-admin-tools', // post type icon in admin menu 
        'rewrite' => array('slug' => 'service','with_front' => false),
        'supports' => array(
            'title',
            'editor',
            'author',
            'thumbnail',
            'trackbacks',
            'custom-fields',
            'comments',
            'revisions',
            'page-attributes',
            'post-formats',
            'custom-fields'),// features supported by the post type
        'show_in_rest' => true, // for API endpoint
    );

    register_post_type('service', $args); 

}

add_action('init', 'service_post_type'); // fires after loadng is completed but before any headers sent



// Adding custom taxonomies for Services and Products

function type_service_taxonomy() {
    $args = array (
        'labels'=> array (
            'name' => 'service types', // label shown in admin menu
            'singular_name' => 'servicetype', 
            
        ),
        'public' => true, // visible both in the admin panel and front end
        'hierarchical' => true, // category-kind taxonomy
        'show_in_rest' => true, // for API endpoint
        

    );

    register_taxonomy('servicetype', array('service'), $args); 
}

add_action('init', 'type_service_taxonomy'); // fires after loadng is completed but before any headers sent


function service_type_master_taxonomy() {
    $args = array (
        'labels'=> array (
            'name' => 'by masters', // label shown in admin menu
            'singular_name' => 'by master', 
        ),
        'public' => true, // visible both in the admin panel and front end
        'hierarchical' => true, // category-kind taxonomy
        'show_in_rest' => true, // for API endpoint
    );

    register_taxonomy('by master', array('service'), $args); 
}

add_action('init', 'service_type_master_taxonomy'); // fires after loadng is completed but before any headers sent


// Modifying display mode of the custom post lists in admin panel


// if (function_exists('add_theme_support')) {
//     add_theme_support('post-thumbnails');
//     set_post_thumbnail_size( 220, 150 );
//     add_image_size('storefront', 620, 270, true);
// }



function my_acf_admin_head() {
    ?>
    <style type="text/css">
.acf-postbox {
  background-color: #d1f9d8 !important;
  color: #000;
  border-radius: 10px;
  padding: 5px;
}

.postbox-container .categorydiv {
  background-color: #d1f9d8;
  color: #000;
  border-radius: 10px;
  padding: 20px;
  font-size: 15px;
}

.acf-postbox .acf-field .acf-label {
  text-transform: uppercase;
}

.acf-postbox .acf-field .acf-label label {
  display: block;
  font-weight: bold;
  font-size: 17px;
  margin: 0 0 3px;
  padding: 0;
}

.acf-postbox .acf-field .acf-field-group {
  border-radius: 10px;
}

.acf-postbox .acf-field .acf-input {
  border-radius: 10px;
}

.postbox-header {
  font-size: 20px;
}

.acf-postbox .acf-field .acf-input a.button {
  border-radius: 3px;
  box-shadow: 0px 1px 4px -2px #333;
  text-shadow: 0px -1px rgb(42, 42, 42);
  color: white;
  background: #1000ef;
  width: 150px;
  font-size: 16px;
  padding: 2px;
  outline: none;
  border-color: none;
  border-style: none;
  text-align: center;
}

    </style>
    <?php
}

add_action('acf/input/admin_head', 'my_acf_admin_head');

