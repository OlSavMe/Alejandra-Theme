<?php 

/*
Template Name: Tarjous
*/

?>

<?php  get_header();?>

<div class="master">
    <div class="img-page-conainer">
        <img src="<?php echo get_template_directory_uri() . '/images/logo-screen.png'; ?>" alt="logo" />
    </div>
</div>

<section class="offer-main">

    <?php 
// quering the Story post
$args = array(  
    'post_type' => 'offer', // name of the post type
    'post_status' => 'publish',
    'posts_per_page' => -1, // all published posts
    'order' => 'DESC', // latest on top
);

$the_query = new WP_Query( $args ); ?>


    <?php if ( $the_query->have_posts() ) : ?>
    <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
    <?php $offertext = get_field('offer_text');?>
    <?php $offerimage = get_field('offer_image');?>
    <?php $offerlink= get_field('offer_link');?>

    <section class="single-tarjous">

        <h2 class="page-title"><?php  the_title();?></h2>
        <?php if ($offerimage ):?>
        <div class="offer-photo">
            <img src="<?php echo esc_url($offerimage['url']);?>" alt="offer" />
        </div>
        <?php endif; ?>

        <?php if ($offertext):?>
        <?php echo $offertext;?>
        <?php endif; ?>

        <?php if ($offerlink):?>
        <a href="<?php echo esc_url($offerlink);?>" class="offer-link" target="_blank"
            rel="noopener noreferrer"><?php echo $offerlink;?></a>
        <?php endif; ?>

    </section>
    <?php endwhile; ?>
    <?php wp_reset_postdata(); ?>
    <?php else : ?>
    <p></p>
    <?php endif; ?>
</section>




<?php get_footer();
?>