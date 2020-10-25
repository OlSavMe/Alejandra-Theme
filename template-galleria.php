<?php 

/*
Template Name: Galleria
*/
?>

<?php  get_header();?>

<?php  if (have_posts()) : while (have_posts()) : the_post();?>
<?php  the_content();?>
<?php  endwhile; endif;?>

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
  <div class="master-galleria">
    <img
      src="<?php echo get_template_directory_uri() . '/images/1.png'; ?>"
      alt="galleria"/>
  <img
      src="<?php echo get_template_directory_uri() . '/images/2.png'; ?>"
      alt="galleria"
      id="galleria"
    />
 
    <img
      src="<?php echo get_template_directory_uri() . '/images/3.png'; ?>"
      alt="galleria"
      id="galleria"
    />

    <img
      src="<?php echo get_template_directory_uri() . '/images/4.png'; ?>"
      alt="galleria"
      id="galleria"
    />
 
 <img
   src="<?php echo get_template_directory_uri() . '/images/5.png'; ?>"
   alt="galleria"
   id="galleria"
 /> <img
      src="<?php echo get_template_directory_uri() . '/images/6.png'; ?>"
      alt="galleria"
      id="galleria"
    /> <img
      src="<?php echo get_template_directory_uri() . '/images/7.png'; ?>"
      alt="galleria"
      id="galleria"
    /> <img
      src="<?php echo get_template_directory_uri() . '/images/8.png'; ?>"
      alt="galleria"
      id="galleria"
    /> <img
      src="<?php echo get_template_directory_uri() . '/images/9.png'; ?>"
      alt="galleria"
      id="galleria"
    />
 
 <img
   src="<?php echo get_template_directory_uri() . '/images/11.png'; ?>"
   alt="galleria"
   id="galleria"
 /><img
      src="<?php echo get_template_directory_uri() . '/images/12.png'; ?>"
      alt="galleria"
      id="galleria"
    /> <img
      src="<?php echo get_template_directory_uri() . '/images/13.png'; ?>"
      alt="galleria"
      id="galleria"
    /> <img
      src="<?php echo get_template_directory_uri() . '/images/14.png'; ?>"
      alt="galleria"
      id="galleria"
    /> <img
      src="<?php echo get_template_directory_uri() . '/images/15.png'; ?>"
      alt="galleria"
      id="galleria"
    />
 
 <img
   src="<?php echo get_template_directory_uri() . '/images/16.png'; ?>"
   alt="galleria"
   id="galleria"
 /> <img
      src="<?php echo get_template_directory_uri() . '/images/20.png'; ?>"
      alt="galleria"
      id="galleria"
    />
  
   

</section>



<?php get_footer();
?>