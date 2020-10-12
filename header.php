
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, minimum-scale=1.0">
    <!-- <title><?php bloginfo('name'); ?> </title> -->
    <?php wp_head(); ?>
</head>
<body>
<header> 
<img class='burger' src="<?php echo get_template_directory_uri() . '/images/burger.png'; ?>" alt="burger" />
    <?php wp_nav_menu(

        array (
            'theme-location' => 'top-menu',
            'menu_class' => 'desktop-navigation'
        )
    ); ?>
   <ul class="phone-some">
            <li>040 178 2801</li>
            <li><img src="<?php echo get_template_directory_uri() . '/images/fb-icon.png'; ?>" alt="fb-icon" /></li>
            <li><img  src="<?php echo get_template_directory_uri() . '/images/inst-icon.png'; ?>" alt="insta-icon" /></li>
            <li></li>
            <li></li>
            <li>Suomi | English</li>
    </ul>
</header>