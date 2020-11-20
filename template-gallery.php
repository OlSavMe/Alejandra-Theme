<?php 

/*
Template Name: English Gallery
*/
?>

<?php  get_header();?>

<div class="master">
    <div class="img-page-conainer">
        <img src="<?php echo get_template_directory_uri() . '/images/logo-screen.png'; ?>" alt="logo" />
    </div>
</div>

<section class="master-info">
    <h2 class="page-title"><?php  the_title();?></h2>
    <?php get_template_part('includes/section', 'gallery');?>
</section>

<?php get_template_part('includes/section', 'floating-button');?>
<?php get_footer();
?>