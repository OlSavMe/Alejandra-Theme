
<?php 

/*
Galleria of works, reusable template partial
*/
?>
  <!-- <p><?php echo $name;?></p> -->
 



  <?php 
// Iterating though the Photos posts
$args = array(  
    'post_type' => 'photo', // name of the post type
    'post_status' => 'publish',
    'posts_per_page' => 8, // displays all available posts on one page
    'order' => 'ASC', // earliest on top
    'tax_query' => array(
        'relation' => 'AND',
        array(
            'taxonomy' => 'type',
            'field'    => 'slug',
            'terms'    => 'works',
        ),
        array(
            'taxonomy' => 'master',
            'field' => 'slug',
            'terms' => $name
        ),
    ),
);

$the_query = new WP_Query( $args ); ?>

<?php if ( $the_query->have_posts() ) : ?>
    <h2>GALLERIA</h2>
    <div class="master-galleria">
<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
<?php $photo = get_field('photo');?> 
<img
src="<?php echo $photo['url'];?>"
      alt="<?php the_title();?>"
    />

<?php endwhile; ?>
</div>
<?php wp_reset_postdata(); ?>
 
<?php else : ?>
    <p></p>
<?php endif; ?>
 







