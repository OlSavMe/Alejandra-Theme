<?php 

/*
Servics fetched by master 
*/
?>
<!-- <p><?php echo $name;?></p> -->

<?php 
// Iterating though the Photos posts
$args = array(  
    'post_type' => 'service', // name of the post type
    'post_status' => 'publish',
    'posts_per_page' => -1, // displays all available posts on one page
    'order' => 'ASC', // earliest on top
    'tax_query' => array(
        'relation' => 'AND',
        array(
            'taxonomy' => 'servicetype',
            'field'    => 'slug',
            'terms'    => 'product',
        ),
        array(
            'taxonomy' => 'by master',
            'field' => 'slug',
            'terms' => $name
        ),
    ),
);

$the_query = new WP_Query( $args ); ?>

<?php if ( $the_query->have_posts() ) : ?>
<h2>TUOTTEET</h2>
<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
<?php $heading = get_field('service_type_name');?>
<?php $main = get_field('service_main_text');?>
<?php $more = get_field('service_read_more');?>
<p class="heading"><?php echo $heading;?></p>
<p><?php echo $main;?></p>

<p class="more"><?php echo $more ;?></p>

<p class="show-more">
    ...Lue lisää
</p>

<?php endwhile; ?>
<?php wp_reset_postdata(); ?>

<?php else : ?>
<p></p>
<?php endif; ?>