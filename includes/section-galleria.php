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
    'posts_per_page' => 8, // displays all available posts on one page
    'order' => 'ASC', // earliest on top
    'tax_query' => array(
      array(
        'taxonomy' => 'master',
        'field' => 'slug',
        'terms' => 'common'
      ),
    ), 
);

$the_query = new WP_Query( $args ); ?>

    <?php if ( $the_query->have_posts() ) : ?>
    <?php 
  $counter = -1;
  while ( $the_query->have_posts() ) : $the_query->the_post(); $counter++ 
  ?>
    <?php $photo = get_field('photo');?>
    <img src="<?php echo $photo['url'];?>" alt="<?php the_title();?>"
        onClick="openLightbox();toSlide(<?php echo $counter; ?>)" />
    <?php endwhile; ?>
    <?php wp_reset_postdata(); ?>

    <?php else : ?>
    <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
    <?php endif; ?>
</div>

<div id="lightbox">
    <span class="close pointer" onClick="closeLightbox()">&times;</span>
    <div class="lightbox-content">
        <?php if ( $the_query->have_posts() ) : ?>
        <?php 
  $counter = -1;
  while ( $the_query->have_posts() ) : $the_query->the_post(); $counter++ 
  ?>
        <?php $photo = get_field('photo');?>
        <div class="slide">
            <img src="<?php echo $photo['url'];?>" alt="<?php the_title();?>" class="image-slide" />
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

<script>
let slideIndex = 1;
showSlide(slideIndex);

function openLightbox() {
    document.getElementById('lightbox').style.display = 'flex';
}

function closeLightbox() {
    document.getElementById('lightbox').style.display = 'none';
}

function changeSlide(n) {
    showSlide(slideIndex += n);
};

function toSlide(n) {
    showSlide(slideIndex = n);
};

function showSlide(n) {

    const slides = document.getElementsByClassName('slide');

    if (n > slides.length) {
        slideIndex = 1;
    };

    if (n < 1) {
        slideIndex = slides.length;
    };

    for (let i = 0; i < slides.length; i++) {
        slides[i].style.display = 'none';
    };
    slides[slideIndex - 1].style.display = 'flex';
};
</script>