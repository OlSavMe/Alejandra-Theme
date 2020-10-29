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
    <div class="iframe-container">
        <iframe src="https://phorest.com/book/salons/centrumalejandra#/" width="900" height="800"
            frameborder="0"></iframe>
    </div>
    <p>
        Peruutusten tulee tapahtua 24 tuntia aikaisemmin, peruuttamattomista ajoista
        veloitamme 100% palvelun hinnasta.
    </p>
</section>


<?php get_footer();
?>