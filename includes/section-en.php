<?php  get_header();?>

<div class="hero">
    <div class="img-container">
        <img src="<?php echo get_template_directory_uri() . '/images/logo-screen.png'; ?>" alt="logo" />
    </div>
    <div class="arrow-group">
        <a class="hero-button" href="<?php echo site_url('/en/reservation')?>">Book time</a>
        <a class='ref' href='#team'>
            <p>Get to know us</p>
            <img src="<?php echo get_template_directory_uri() . '/images/down-arrow.png'; ?>" alt="down-arrow" />
        </a>
    </div>
</div>

<section class="team" id="team">
    <?php get_template_part('includes/section', 'masters');?>
</section>

<?php 
// quering the Story post
$args = array(  
    'post_type' => 'story', // name of the post type
    'post_status' => 'publish',
    'posts_per_page' => 1, // only one post is required
    'order' => 'ASC', // earliest on top
);

$the_query = new WP_Query( $args ); ?>


<?php if ( $the_query->have_posts() ) : ?>
<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
<?php $story = get_field('story');?>
<?php $photo = get_field('salon_photo');?>
<?php $mobilephoto = get_field('mobile_photo');?>

<section class="story">
    <h2>ALEJANDRA BEAUTY SALON</h2>

    <?php echo $story;?>


    <div class="photo-container">
        <img class='mobile-pic' src="<?php echo esc_url($mobilephoto['url']);?>" alt="salon-mobile" />
        <img class='desktop-pic' src="<?php echo esc_url($photo['url']);?>" alt="salon" />
    </div>
</section>
<?php endwhile; ?>
<?php wp_reset_postdata(); ?>
<?php else : ?>
<p></p>
<?php endif; ?>
<?php get_template_part('includes/section', 'floating-button');?>
<?php get_footer();?>