<?php 

/*
Template Name: Yhteys
*/
?>

<?php  get_header();?>

<?php 

// Fetching Map Post

$args = array(  
    'post_type' => 'map', // name of the post type
    'post_status' => 'publish',
    'posts_per_page' => 1, // only one post is required
    'order' => 'DESC', // earliest on top
);

$the_query = new WP_Query( $args ); ?>


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


    <p>Palvelemme teitä osoitteessa: Välimerenkatu 5, Helsinki</p>
    <?php if ( $the_query->have_posts() ) : ?>
    <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
    <?php  the_content();?>
    <?php  endwhile; endif;?>

</section>


<?php get_footer();
?>