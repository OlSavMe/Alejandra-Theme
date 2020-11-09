<?php 
// Iterating though the Masters posts
$args = array(  
    'post_type' => 'master', // name of the post type
    'post_status' => 'publish',
    'posts_per_page' => -1, // displays all available posts on one page
    'order' => 'ASC', // earliest on top
);

$the_query = new WP_Query( $args ); ?>

<?php if ( $the_query->have_posts() ) : ?>
<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
<?php $mastercard = get_field('master_card');?>

<a href="<?php echo the_permalink()?>" class="master-card">
    <div class="pic-container">
        <img src="<?php echo $mastercard['master_image']['url'];?>" alt="<?php echo $mastercard['master_name'];?>" />
    </div>
    <h1 class="card-heading"><?php echo $mastercard['master_name'];?></h1>
    <div class="grey-container">
        <p><?php echo $mastercard['master_services'];?></p>
        <p class="varaa">Tutustu & Varaa &rsaquo;</p>
    </div>
</a>

<?php endwhile; ?>
<?php wp_reset_postdata(); ?>

<?php else : ?>
<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>