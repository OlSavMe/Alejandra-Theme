<footer>

    <div class="footer-left">

        <?php
        wp_nav_menu( array( 
            'theme_location' => 'footer-menu',
            'menu_class' => 'footer-navigation',
            'fallback_cb' => false
         ) );
        ?>


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


    <script>
    let slideIndex = 1;
    showSlide(slideIndex);

    function openLightbox() {
        document.getElementById('lightbox').style.display = 'flex';
    }

    function closeLightbox() {
        document.getElementById('lightbox').style.display = 'none';
    }

    function changeSlide(n) {
        showSlide(slideIndex += n);
    };

    function toSlide(n) {
        showSlide(slideIndex = n);
    };

    function showSlide(n) {

        const slides = document.getElementsByClassName('slide');

        if (n > slides.length) {
            slideIndex = 1;
        };

        if (n < 1) {
            slideIndex = slides.length;
        };

        for (let i = 0; i < slides.length; i++) {
            slides[i].style.display = 'none';
        };
        slides[slideIndex - 1].style.display = 'flex';
    };

    // mobile menu with jQuery

    function openMenu() {
        document.getElementById('mobile-menu').style.transform = 'translateX(0)';
    }

    function closeMenu() {
        document.getElementById('mobile-menu').style.transform = 'translateX(-100%)';
    }


    $('ul.mobile-navigation').children().click(function() {
        $('mobile-menu').animate({
            'transform': 'translateX(-100%);'
        }, 1000);
    });
    </script>
</footer>
<?php wp_footer(); ?>
</body>

</html>