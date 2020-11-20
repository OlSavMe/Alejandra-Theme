<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, minimum-scale=1.0">
    <?php wp_head(); ?>
</head>

<body>
    <header>
        <img class='burger' src="<?php echo get_template_directory_uri() . '/images/burger.png'; ?>" alt="burger"
            onClick="openMenu()" />
        <?php get_template_part('includes/section', 'menu');?>

        <?php
        wp_nav_menu( array( 
            'theme_location' => 'header-menu',
            'menu_class' => 'desktop-navigation',
            'fallback_cb' => false,
            'container' => false
         ) );
        ?>




        <ul class='header-some'>
            <?php get_template_part('includes/section', 'some');?>
            <li>
                <ul>
                    <?php 
                    if ( function_exists( 'pll_the_languages' ) ) {
                    pll_the_languages( array( 'show_flags' => 1,'show_names' => 1 ) );         
                    }
                    ?>
                </ul>
            </li>

        </ul>



    </header>