<?php 

/*
Template Name: Contact
*/
?>

<?php  get_header();?>



<div class="master">
    <div class="img-page-conainer">
        <img src="<?php echo get_template_directory_uri() . '/images/logo-screen.png'; ?>" alt="logo" />
    </div>
</div>

<section class="master-varaus" id="master-varaus">
    <h2 class="page-title"><?php  the_title();?></h2>
    <p>
        We would like to remind you that our opening hours are flexible according to customer needs</p>
    <?php  if (have_posts()) : while (have_posts()) : the_post();?>
    <?php  the_content();?>
    <?php  endwhile; endif;?>

    <?php 

    // Fetching Contact info

$args = array(  
    'post_type' => 'some', // name of the post type
    'post_status' => 'publish',
    'posts_per_page' => 1, // only one post is required
    'order' => 'ASC', // earliest on top
);

$the_query = new WP_Query( $args ); ?>


    <?php if ( $the_query->have_posts() ) : ?>
    <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
    <?php $address = get_field('address');?>
    <?php $map = get_field('map_link');?>

    <p>We are located at: <?php echo $address?></p>
    <iframe src="<?php echo esc_url($map);?>" width="100%" height="500" frameborder="0" style="border:0;"
        allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
    <?php endwhile; ?>
    <?php wp_reset_postdata(); ?>

    <?php else : ?>
    <p></p>
    <?php endif; ?>


</section>

<?php get_template_part('includes/section', 'floating-button');?>
<?php get_footer();?>