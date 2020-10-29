<?php 

/*
Galleria of products, reusable template partial
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
            'terms'    => 'products',
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

<h2>TUOTTEET</h2>
<div class="master-galleria">
    <?php   
    $counter = 0;
    while ( $the_query->have_posts() ) : $the_query->the_post(); $counter++  
    ?>
    <?php $photo = get_field('photo');?>
    <img src="<?php echo $photo['url'];?>" alt="<?php the_title();?>"
        onClick="openLightbox();toSlide(<?php echo $counter; ?>)" />
    <?php endwhile; ?>
</div>
<div id="lightbox">
    <span class="close pointer" onClick="closeLightbox()">&times;</span>
    <div class="lightbox-content">
        <?php 
  $counter = -1;
  while ( $the_query->have_posts() ) : $the_query->the_post(); $counter++ 
  ?>
        <?php $photo = get_field('photo');?>
        <div class="slide">
            <img src="<?php echo $photo['url'];?>" alt="<?php the_title();?>" class="image-slide" />
        </div>
        <?php endwhile; ?>
    </div>
    <a class="previous" onClick="changeSlide(-1)">&#10094;</a>
    <a class="next" onClick="changeSlide(1)">&#10095;</a>
</div>
<?php wp_reset_postdata(); ?>
<?php else : ?>
<p></p>
<?php endif; ?>