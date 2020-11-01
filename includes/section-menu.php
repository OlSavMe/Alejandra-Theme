<div id="mobile-menu">
    <span class="close-cross" onClick="closeMenu()">&times;</span>
    <div class="mobile-menu-content">
        <?php
        wp_nav_menu( array( 
            'theme_location' => 'header-menu',
            'menu_class' => 'mobile-navigation',
            'fallback_cb' => false,
            'container' => false
         ) );
        ?>

        <ul class='mobile-header-some'>
            <?php get_template_part('includes/section', 'some');?>
        </ul>
    </div>
</div>