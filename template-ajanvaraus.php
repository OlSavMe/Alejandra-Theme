<?php 

/*
Template Name: Ajanvaraus
*/
?>

<?php  get_header();?>

<div class="master">
    <div class="img-page-conainer">
        <img src="<?php echo get_template_directory_uri() . '/images/logo-screen.png'; ?>" alt="logo" />
    </div>
</div>

<section class="master-varaus" id="master-varaus">
    <h2>AJANVARAUS</h2>
    <!-- <a href="https://phorest.com/book/salons/centrumalejandra#/">
        <p>Koko näyttö &rsaquo;</p>
    </a> -->
    <div class="iframe-container">
        <iframe src="http://centrumalejandra.phorest.me/book" width="900" height="auto" frameborder="0"></iframe>
    </div>
    <p>
        Peruutusten tulee tapahtua 24 tuntia aikaisemmin, peruuttamattomista ajoista
        veloitamme 100% palvelun hinnasta.
    </p>
</section>

<?php get_template_part('includes/section', 'floating-button');?>
<?php get_footer();
?>