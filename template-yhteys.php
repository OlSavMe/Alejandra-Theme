<?php 

/*
Template Name: Yhteys
*/
?>

<?php  get_header();?>



<div class="master">
    <div class="img-page-conainer">
        <img src="<?php echo get_template_directory_uri() . '/images/logo-screen.png'; ?>" alt="logo" />
    </div>
</div>

<section class="master-varaus" id="master-varaus">
    <h2>YHTEYSTIEDOT</h2>
    <p>Haluamme muistuttaa, että aukioloaikamme ovat joustavia asiakkaiden tarpeiden mukaan</p>
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


    <?php endwhile; ?>
    <?php wp_reset_postdata(); ?>

    <?php else : ?>
    <p></p>
    <?php endif; ?>


    <p>Palvelemme teitä osoitteessa: <?php echo $address?></p>

    <?php 

// Fetching Map Post

$args = array(  
    'post_type' => 'map', // name of the post type
    'post_status' => 'publish',
    'posts_per_page' => 1, // only one post is required
    'order' => 'DESC', // earliest on top
);

$the_map_query = new WP_Query( $args ); ?>

    <?php if ( $the_map_query ->have_posts() ) : ?>
    <?php while ( $the_map_query ->have_posts() ) : $the_map_query ->the_post(); ?>
    <?php  the_content();?>
    <?php  endwhile; endif;?>

</section>

<?php get_template_part('includes/section', 'floating-button');?>
<?php get_footer();?>