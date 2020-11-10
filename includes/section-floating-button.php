<?php 

/*
Reusable floating phone button template partial
*/
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
<?php if ( $the_query->have_posts() ) : ?>
<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
<?php $fullnumber = get_field('phone_number');?>


<a class="float-button" href="tel:+<?php echo $fullnumber;?>">
    <div class="floating-button">
        <p>&#x2706;</p>
    </div>
</a>
<?php endwhile; ?>
<?php wp_reset_postdata(); ?>
<?php else : ?>
<p></p>
<?php endif; ?>