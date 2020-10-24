<?php 

/*
Template Name: Master
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

  <div class="team-item-left">
    <div class="pic-container">
      <img
        src="<?php echo get_template_directory_uri() . '/images/valeriia.png'; ?>"
        alt="valeriia"
      />
    </div>
    <div class="grey-container">
        <article class="summary">
      <p>
        <span>Valeriia</span>eiusmod tempor incidi tation ullamco abori nisi ut
        aliquip ex ea commodo consequat. Duis aute irure dolor in
        reprehenderitr. Duis aute irure dolor in
      </p>
</article>
    </div>
    <article class="summary-no-mobile">
      <p>
        <span>Valeriia</span>eiusmod tempor incidi tation ullamco abori nisi ut
        aliquip ex ea commodo consequat. Duis aute irure dolor in
        reprehenderitr. Duis aute irure dolor in
      </p>
</article>
  </div>


    <a class="master-ref" href="#master-varaus">
      <p>Ajanvaraukseen</p>
      <img
        src="<?php echo get_template_directory_uri() . '/images/down-arrow.png'; ?>"
        alt="down-arrow"
    /></a>
 
</div>


<section class="master-info">
  <p>
    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
    quis nostrud exercitation ullamco abori nisi ut aliquip ex ea commodo
    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
    cillum dolore eu fugiat nulla pariatur. lorem ipsum dolor sit amet,
    consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
    dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
    ullamco abori nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor
    in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
    pariatur.
  </p>
  <h2>GALLERIA</h2>
  <div class="master-galleria">
   <img
      src="<?php echo get_template_directory_uri() . '/images/1.png'; ?>"
      alt="eria"/>
     <img
      src="<?php echo get_template_directory_uri() . '/images/3.png'; ?>"
      alt="ia"
    />
    <img
      src="<?php echo get_template_directory_uri() . '/images/8.png'; ?>"
      alt="a"
    />
 <img
   src="<?php echo get_template_directory_uri() . '/images/14.png'; ?>"
   alt="i"
 />
  <img
      src="<?php echo get_template_directory_uri() . '/images/15.png'; ?>"
      alt="l"
    />
    <img
      src="<?php echo get_template_directory_uri() . '/images/20.png'; ?>"
      alt="a"
    />
 
 <img
   src="<?php echo get_template_directory_uri() . '/images/21.png'; ?>"
   alt="g"
 />
  <img
      src="<?php echo get_template_directory_uri() . '/images/22.png'; ?>"
      alt="e"
    />

  </div>
  <h2>TUOTTEET</h2>
  <div class="master-galleria">
<img
      src="<?php echo get_template_directory_uri() . '/images/29.png'; ?>"
      alt="r"

    />
<img
      src="<?php echo get_template_directory_uri() . '/images/28.png'; ?>"
      alt="l"

    />
 <img
      src="<?php echo get_template_directory_uri() . '/images/30.png'; ?>"
      alt="l"
  
    /> <img
      src="<?php echo get_template_directory_uri() . '/images/18.png'; ?>"
      alt="l"

    />

  </div>
</section>



<section class="master-varaus" id="master-varaus">

<h2>AJANVARAUS</h2>
<div class="iframe-container">

  <iframe src="https://phorest.com/book/salons/centrumalejandra#/staffs/QArouUMDQdbe3ztwQAsRDA" width="900" height="800" frameborder="0"></iframe>

</div>
<p>Peruutusten tulee tapahtua 24 tuntia aikaisemmin, peruuttamattomista ajoista veloitamme 100% palvelun hinnasta.</p>
</section>


<?php get_footer();
?>