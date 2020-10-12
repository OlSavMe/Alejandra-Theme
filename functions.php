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

