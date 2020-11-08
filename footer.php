<footer>

    <div class="footer-left">

        <?php
        wp_nav_menu( array( 
            'theme_location' => 'footer-menu',
            'menu_class' => 'footer-navigation',
            'fallback_cb' => false
         ) );
        ?>



        <?php 

// Fetching Contact info

$args = array(  
    'post_type' => 'some', // name of the post type
    'post_status' => 'publish',
    'posts_per_page' => 1, // only one post is required
    'order' => 'ASC', // earliest on top
);

$the_query = new WP_Query( $args ); ?>

        <ul class="some">
            <?php if ( $the_query->have_posts() ) : ?>
            <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
            <?php $fb = get_field('facebook_url');?>
            <?php $insta = get_field('instagram_url');?>

            <li><a href="<?php echo $fb['url']?>" target="_blank" rel="noopener noreferrer">
                    <img src=" <?php echo get_template_directory_uri() . '/images/fb-icon.png'; ?>" alt="fb-icon" /></a>
            </li>

            <li><a href="<?php echo $insta['url']?>" target="_blank" rel="noopener noreferrer">
                    <img src=" <?php echo get_template_directory_uri() . '/images/inst-icon.png'; ?>"
                        alt="insta-icon" /></a></li>
            <?php endwhile; ?>
            <?php wp_reset_postdata(); ?>

            <?php else : ?>
            <p></p>
            <?php endif; ?>

        </ul>
    </div>



    <div class="footer-right">
        <ul>

            <li><img src="<?php echo get_template_directory_uri() . '/images/footer-logo.png'; ?>" alt="small-logo" />
            </li>
            <li>Alejandra Kauneussalonki</li>
            <li>Välimerenkatu 5, Helsinki</li>
            <?php if ( $the_query->have_posts() ) : ?>
            <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
            <?php $fullnumber = get_field('phone_number');?>
            <?php $shortnumber = get_field('phone_without_prefix');?>
            <li>
                <a href="tel:+<?php echo $fullnumber;?>">
                    <?php echo $shortnumber;?></a>
            </li>
            <?php endwhile; ?>
            <?php wp_reset_postdata(); ?>
            <?php else : ?>
            <p></p>
            <?php endif; ?>

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


    function openLightboxProduct() {
        document.getElementById('lightbox-product').style.display = 'flex';
    }

    function closeLightboxProduct() {
        document.getElementById('lightbox-product').style.display = 'none';
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


    jQuery(document).ready(function(e) {
        jQuery('ul.mobile-navigation').children().click(function() {
            jQuery
                ('mobile-menu').animate({
                    'transform': 'translateX(-100%);'
                }, 1000);

            e.preventDefault();
        });

    });




    jQuery(document).ready(function() {
        jQuery(".show-more").click(function() {
            jQuery(this).prev(".more").slideToggle();
            jQuery(window).scrollTop(jQuery(".more").offset().top - 50);
            jQuery(this).text(function(i, text) {
                return text === "...Lue vähemmän" ? "...Lue lisää" : "...Lue vähemmän";
            });

        });

    });
    </script>




</footer>
<?php wp_footer(); ?>
</body>

</html>