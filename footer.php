<footer>

    <div class="footer-left">

        <?php wp_nav_menu(

array (
    'theme-location' => 'footer-menu',
    'menu_class' => 'footer-navigation'
)
); ?>
        <ul class="some">
            <li><img src="<?php echo get_template_directory_uri() . '/images/fb-icon.png'; ?>" alt="fb-icon" /></li>
            <li><img src="<?php echo get_template_directory_uri() . '/images/inst-icon.png'; ?>" alt="insta-icon" />
            </li>
        </ul>

    </div>

    <div class="footer-right">
        <ul>
            <li><img src="<?php echo get_template_directory_uri() . '/images/footer-logo.png'; ?>" alt="small-logo" />
            </li>
            <li>Alejandra Kauneussalonki</li>
            <li>Välimerenkatu 5, Helsinki</li>
            <li>040 178 2801</li>
            <li><a href="#">www.alejandra.fi</a></li>
        </ul>
        <ul>
            <li><?php bloginfo('name'); ?> - &copy; <?php echo date('Y'); ?></li>
        </ul>
    </div>
</footer>
<?php wp_footer(); ?>
</body>

</html>