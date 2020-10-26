
<?php 

/*
Galleria reusable template partial
*/
?>
  <div class="master-galleria">


  <?php 
// Iterating though the Photos posts
$args = array(  
    'post_type' => 'photo', // name of the post type
    'post_status' => 'publish',
    'posts_per_page' => -1, // displays all available posts on one page
    'order' => 'ASC', // earliest on top
);

$the_query = new WP_Query( $args ); ?>

<?php if ( $the_query->have_posts() ) : ?>
<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
<?php $photo = get_field('photo');?> 
<img
src="<?php echo $photo['url'];?>"
      alt="<?php the_title();?>"
    />

<?php endwhile; ?>
<?php wp_reset_postdata(); ?>
 
<?php else : ?>
    <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>
  </div>