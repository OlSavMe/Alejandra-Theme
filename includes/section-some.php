<?php 
// Iterating though the Masters posts
$args = array(  
    'post_type' => 'some', // name of the post type
    'post_status' => 'publish',
    'posts_per_page' => 1, // only one post is required
    'order' => 'ASC', // earliest on top
);

$the_query = new WP_Query( $args ); ?>

<?php if ( $the_query->have_posts() ) : ?>
<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
<?php $fb = get_field('facebook_url');?>
<?php $insta = get_field('instagram_url');?>
<?php $fullnumber = get_field('phone_number');?>
<?php $shortnumber = get_field('phone_without_prefix');?>
<li>
    <a href="tel:+<?php echo $fullnumber;?>">
        <?php echo esc_html($shortnumber);?></a>
</li>
<li><a href="<?php echo esc_url($fb['url']);?>" target="_blank" rel="noopener noreferrer">
        <img src=" <?php echo get_template_directory_uri() . '/images/fb-icon.png'; ?>" alt="fb-icon" /></a></li>

<li><a href="<?php echo esc_url($insta['url']);?>" target="_blank" rel="noopener noreferrer">
        <img src=" <?php echo get_template_directory_uri() . '/images/inst-icon.png'; ?>" alt="insta-icon" /></a></li>
<li></li>
</li>
<?php endwhile; ?>
<?php wp_reset_postdata(); ?>

<?php else : ?>
<p></p>
<?php endif; ?>