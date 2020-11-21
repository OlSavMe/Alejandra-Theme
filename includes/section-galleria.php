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
    // 'order' => 'ASC', // earliest on top
    'tax_query' => array(
      array(
        'taxonomy' => 'master',
        'field' => 'slug',
        'terms' =>  $name
      ),
    ), 
);

$the_query = new WP_Query( $args ); ?>
    <?php if ( $the_query->have_posts() ) : ?>
    <?php 
  $counter = 0;
  while ( $the_query->have_posts() ) : $the_query->the_post(); $counter++ 
  ?>
    <?php $photo = get_field('photo');?>
    <?php if ($photo):?>
    <img src="<?php echo esc_url($photo['url']);?>" alt="<?php the_title();?>"
        onClick="openLightbox();toSlide(<?php echo $counter; ?>)" />
    <?php endif; ?>
    <?php endwhile; ?>
    <?php wp_reset_postdata(); ?>
    <?php else : ?>
    <p></p>
    <?php endif; ?>
</div>

<div id="lightbox" class='lightbox' onKeyDown="moveKeys()">
    <span class="close pointer" onClick="closeLightbox()">&times;</span>
    <div class="lightbox-content">
        <?php if ( $the_query->have_posts() ) : ?>
        <?php 
  $counter = -1;
  while ( $the_query->have_posts() ) : $the_query->the_post(); $counter++ 
  ?>
        <?php $photo = get_field('photo');?>
        <?php $comments = get_field('photo_comments');?>
        <?php $link = get_field('photo_link');?>
        <div class="slide" onKeyDown="moveKeys()">
            <img src="<?php echo esc_url($photo['url']);?>" alt="<?php the_title();?>" class="image-slide" />
            <section class="slide-comments">
                <div class="comments">
                    <?php echo $comments;?>
                    <a href="<?php echo esc_url($link['url']);?>" target="_blank"
                        rel="noopener noreferrer"><?php echo $link['url'];?></a>
                </div>
            </section>
        </div>
        <?php endwhile; ?>
        <?php wp_reset_postdata(); ?>
        <?php else : ?>
        <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
        <?php endif; ?>
    </div>
    <a class="previous" onClick="changeSlide(-1)">&#10094;</a>
    <a class="next" onClick="changeSlide(1)">&#10095;</a>
</div>