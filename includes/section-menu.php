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
            <li>040 178 2801</li>
            <li><img src=" <?php echo get_template_directory_uri() . '/images/fb-icon.png'; ?>" alt="fb-icon" />
                <img src="<?php echo get_template_directory_uri() . '/images/inst-icon.png'; ?>" alt="insta-icon" />
            <li>Suomi | English</li>
            </li>
        </ul>

    </div>
</div>