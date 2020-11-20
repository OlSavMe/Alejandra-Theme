<?php 


?>

<?php  get_header();?>

<div class="master">
    <div class="img-page-conainer">
        <img src="<?php echo get_template_directory_uri() . '/images/logo-screen.png'; ?>" alt="logo" />
    </div>
</div>

<section class="master-varaus" id="master-varaus">
    <h2><?php echo the_title();?></h2>

    <?php  if (have_posts()) : while (have_posts()) : the_post();?>
    <?php  the_content();?>
    <?php  endwhile; endif;?>
</section>




<?php get_footer();
?>