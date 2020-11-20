<?php

require_once('custom-posts.php');

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


// Styling the admin panel

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