<?php 

/*
Template Name: Galleria
*/
?>

<?php  get_header();?>

<div class="master">
  <div class="img-page-conainer">
    <img
      src="<?php echo get_template_directory_uri() . '/images/logo-screen.png'; ?>"
      alt="logo"
    />
  </div>
</div>

<section class="master-info">
  <h2>GALLERIA</h2>
<?php get_template_part('includes/section', 'galleria');?>
</section>


<?php get_footer();
?>