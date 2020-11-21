<?php


// Adding custom posts

// Masters posts

function master_post_type() {

$args = array (
'labels'=> array (
'name' => 'Masters', // label shown in admin menu
'singular_name' => 'master', // name for one object of the post type

),
'hierarchical' => true,
'public' => true, // visible both in the admin panel and front end
'has_archive' => true, // enables archiving of the custom posts
'menu_icon' => 'dashicons-universal-access-alt', // post type icon in admin menu
'rewrite' => array('slug' => 'masters','with_front' => false),
'supports' => array(
'title',
'editor',
'author',
'thumbnail',
'custom-fields',
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
'menu_icon' => 'dashicons-format-gallery', // post type icon in admin menu
'rewrite' => array('slug' => 'photos','with_front' => false),
'supports' => array(
'title',
'editor',
'author',
'thumbnail',
'custom-fields',
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



// Custom posts for contact details
function some_post_type() {

$args = array (
'labels'=> array (
'name' => 'All Contact Info', // label shown in admin menu
'singular_name' => 'some', // name for one object of the post type
),
'public' => true, // visible both in the admin panel and front end
'has_archive' => true, // enables archiving of the custom posts
'menu_icon' => 'dashicons-share', // post type icon in admin menu
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
'menu_icon' => 'dashicons-buddicons-community', // post type icon in admin menu
'rewrite' => array('slug' => 'story','with_front' => false),
'supports' => array('title', 'editor', 'thumbnail', 'custom-fields'), // features supported by the post type
'show_in_rest' => true, // for API endpoint
);

register_post_type('story', $args);

}

add_action('init', 'story_post_type');


// Customs posts for Services in Master Profiles

function service_post_type() {

$args = array (
'labels'=> array (
'name' => 'Services and Products', // label shown in admin menu
'singular_name' => 'service', // name for one object of the post type

),
'public' => true, // visible both in the admin panel and front end
'has_archive' => true, // enables archiving of the custom posts
'menu_icon' => 'dashicons-admin-tools', // post type icon in admin menu
'rewrite' => array('slug' => 'service','with_front' => false),
'supports' => array(
'title',
'editor',
'author',
'thumbnail',
'custom-fields',
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