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
            <li>
                <ul>
                    <?php 
                    if ( function_exists( 'pll_the_languages' ) ) {
                    pll_the_languages( array( 'show_flags' => 0,'show_names' => 1 ) );         
                    }
                    ?>
                </ul>
            </li>
        </ul>
    </div>
</div>