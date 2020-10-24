<?php  get_header();?>

<div class="hero">
  <div class="img-container">
    <img src="<?php echo get_template_directory_uri() . '/images/logo-screen.png'; ?>" alt="logo" />
  </div>
  <div class="arrow-group">
    <a class="hero-button" href="<?php echo site_url('/ajanvaraus')?>">Varaa aika</a>
    <a class='ref' href='#team'>
          <p>Tutustu meihin</p>   
        <img src="<?php echo get_template_directory_uri() . '/images/down-arrow.png'; ?>" alt="down-arrow" />
    </a>
  </div>
</div>



<?php get_template_part('includes/section', 'masters');?>



<section class="team" id="team">

<a href="<?php echo site_url('/valeriia')?>"  class="team-left">
<div class="pic-container">
  <img src="<?php echo get_template_directory_uri() . '/images/valeriia.png'; ?>"  alt="valeriia" />
  </div>
  <h1>VALERIIA</h1>
  <div class="grey-container">
    <ul>
      <li>Bio Suoritus</li>
      <li>Parturi</li>
      <li>Kampaaja</li>
      <li>Varaa aika &rsaquo;</li>
    </ul>
  </div>
</a>

<a href="<?php echo site_url('/valeriia')?>"class="team-right">
    <div class="pic-container">
<img src="<?php echo get_template_directory_uri() . '/images/aiki.png'; ?>"  alt="aiki" />
</div>
  <h1>AIKI</h1>
  <div class="grey-container">
    <ul>
      <li>Mikropigmentoinnit</li>
      <li>Huistenpidennykset</li>
      <li>Ripset</li>
      <li>Kulmat</li>
      <li>Varaa aika &rsaquo;</li>
    </ul>
</div>
</a>


<a href="<?php echo site_url('/valeriia')?>"  class="team-left">
<div class="pic-container">
  <img src="<?php echo get_template_directory_uri() . '/images/elvira.png'; ?>"  alt="elvira" />
</div>
  <h1>ELVIRA</h1>
  <div class="grey-container">
    <ul>
      <li>Kosmetologi</li>
      <li>Varaa aika &rsaquo;</li>
    </ul>
  </div>
</a>



  <div class="team-right">
  <div class="pic-container">
<img src="<?php echo get_template_directory_uri() . '/images/zina.png'; ?>"  alt="zina" />
</div>
<h1>ZINA</h1>
  <div class="grey-container">
    <ul>
      <li>Kynsitekniikko</li>
      <li>Varaa aika &rsaquo;</li>
    </ul>
</div>
</div>

<a href="<?php echo site_url('/valeriia')?>"  class="team-left">
<div class="pic-container">
  <img src="<?php echo get_template_directory_uri() . '/images/alina.png'; ?>"  alt="alina" />
  </div>
  <h1>ALINA</h1>
  
  <div class="grey-container">
    <ul>
      <li>Parturi</li>
      <li>Kampaaja</li>
      <li>Varaa aika &rsaquo;</li>
    </ul>
  </div>
</a> 

    </section>

<section class="story">
<h2>ALEJANDRA KAUNEAUSSALONKI</h2>

<p>Tavoitteemme on pitää kaikki asiakkaamme tyytyväisinä hyvällä palvelulla, mahtavilla eduilla ja herkullisilla makuelämyksillä.
Tämä kokonaisuus on perustettu juuri sinua varten, tehdäksemme arjestasi helpomman ja nautinnollisemman.
</p>
<p>Aloitimme liiketoiminnan uuden Jätkäsaaren ensimmäisten yrittäjien joukossa ja samalla kun Jätkäsaari kehittyy, me kehitymme sen mukana. Meille on tärkeää, että muokkaamme liiketoimintaamme tämän merellisen kaupunginosan mukaisesti, viihtyisäksi kohtaamispaikaksi.
Huolehdi itsestäsi trendikkäillä kauneussalongin palveluilla, nauti samalla maukas kahvikakkusi ja tilaa kauniit kukat rakkaallesi. Kaikki samasta paikasta.
</p>
<p>Tule kokemaan lämmin tunnelmamme suoraan Jätkäsaaren sydämeen!</p>
<div class="photo-container">
    <img class='mobile-pic' src="<?php echo get_template_directory_uri() . '/images/salon.png'; ?>" alt="salon-mobile" />
    <img class='desktop-pic' src="<?php echo get_template_directory_uri() . '/images/salon-screen.png'; ?>" alt="salon" />
</div>
</section>

<?php get_footer();?>
