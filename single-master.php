<?php  get_header();?>
<?php $mastercard = get_field('master_card');?>
<?php $masterprofile = get_field('master_profile');?>

<div class="master">
    <div class="img-page-conainer">
        <img src="<?php echo get_template_directory_uri() . '/images/logo-screen.png'; ?>" alt="logo" />
    </div>

    <div class="team-item-left">
        <div class="pic-container">
            <img src="<?php echo $mastercard['master_image']['url'];?>"
                alt="<?php echo $mastercard['master_name'];?>" />
        </div>
        <div class="grey-container">
            <article class="summary">
                <p>
                    <?php echo $mastercard['summary'];?>
                </p>
            </article>
        </div>
        <article class="summary-no-mobile">
            <p>
                <?php echo $mastercard['summary'];?>
            </p>
        </article>
    </div>

    <a class="master-ref" href="#master-varaus">
        <p>Ajanvaraukseen</p>
        <img src="<?php echo get_template_directory_uri() . '/images/down-arrow.png'; ?>" alt="down-arrow" />
    </a>
</div>

<section class="master-info">
    <?php if ($masterprofile['about']):?>
    <p>
        <?php echo $masterprofile['about'];?>
    </p>
    <?php endif; ?>


    <?php get_template_part('includes/section', 'products');?>
    <?php get_template_part('includes/section', 'services');?>


    <h2>GALLERIA</h2>
    <?php get_template_part('includes/section', 'galleria');?>
</section>

<section class="master-varaus" id="master-varaus">
    <h2>AJANVARAUS</h2>
    <!-- <a href="<?php echo $masterprofile['booking_link']['url'];?>">
        <p>Koko näyttö &rsaquo;</p>
    </a> -->
    <div class="iframe-container">
        <iframe src=" <?php echo $masterprofile['booking_link']['url'];?>" frameborder="0"></iframe>
    </div>
    <p>
        Peruutusten tulee tapahtua 24 tuntia aikaisemmin, peruuttamattomista ajoista
        veloitamme 100% palvelun hinnasta.
    </p>
</section>
<?php get_footer();
?>