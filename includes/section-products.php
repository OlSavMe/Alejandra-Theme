<?php 

/*
Servics fetched by master 
*/
?>

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


<?php 
    if ( function_exists( 'pll_current_language' ) ) {
        $currentLanguage  = pll_current_language();
        if ( $currentLanguage == "fi" ) {?>
<h2>TUOTTEET</h2>
<?php
        }
        else { ?>
<h2>PRODUCTS</h2> <?php
        }      
        }
?>

<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
<?php $heading = get_field('service_type_name');?>
<?php $main = get_field('service_main_text');?>
<?php $more = get_field('service_read_more');?>
<?php $link = get_field('link');?>


<p class="heading"><?php echo $heading;?></p>

<p><?php echo $main;?>
    <?php if (!$more):?>
    <a href="<?php echo esc_url($link);?>" target="_blank" rel="noopener noreferrer"><?php echo esc_html($link);?></a>
    <?php endif; ?>
</p>
<?php if ($more):?>
<p class="more"><?php echo esc_html($more);?>
    <a href="<?php echo esc_url($link);?>" target="_blank" rel="noopener noreferrer"><?php echo esc_html($link);?></a>
</p>
<p class="show-more">
    [...]Lue lisää
</p>
<?php endif; ?>

<?php endwhile; ?>
<?php wp_reset_postdata(); ?>

<?php else : ?>
<p></p>
<?php endif; ?>