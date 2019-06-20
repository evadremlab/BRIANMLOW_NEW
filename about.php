<?php
	$title = "About Me";
	include "templates/header.php";
?>

<section id="slideshow">
  <figure class="slide light-text">
    <div class="lazy darken" data-src="assets/about/about_me.png"></div>7
    <figcaption class="overlay">
      <h2 class="title"><?php echo $title; ?></h2>
    </figcaption>
  </figure>
</section>

<section id="project-tagline" class="hidden display-after-load">
  <div class="flex-container">
    <article class="left">
      I’m an ambitious, creative, and strategic professional with over 15 years of experience 
      in graphic design, art direction, communication strategy, advertising & editorial design, 
      automated marketing, and project management in legal, corporate and ad agency environments.
    </article>
    <article class="right">
      <dl class="with-dt-mdash">
        <dt>The Goal</dt>
        <div class="item-container">
          <dd>
            My objective is to obtain a design position within a multi-disciplinary environment. 
            A position working collaboratively with an amazing creative team using strong concept, 
            smart design process, development, strategy and marketing.
          </>
        </div>
      </dl>
    </article>
  </div>
</section>

<section id="skills" class="hidden display-after-load">
  <header>Skills</header>
  <div class="flex-container">
    <dl class="with-dt-mdash"><!-- definition list -->
      <dt>Branding</dt><!-- title -->
      <div class="item-container">
        <dd>Brand Strategy</dd><!-- description -->
        <dd>Identity</dd>
        <dd>Graphic Design</dd>
        <dd>Advertising</dd>
        <dd>Collateral</dd>
        <dd>Promotional Items</dd>
      </div>
    </dl>
    <dl class="with-dt-mdash">
      <dt>Environments</dt>
      <div class="item-container">
        <dd>Production Design</dd>
        <dd>Packaging</dd>
        <dd>Architecture</dd>
        <dd>Interiors</dd>
        <dd>Signage</dd>
      </div>
    </dl>
    <dl class="with-dt-mdash">
      <dt>Digital</dt>
      <div class="item-container">
        <dd>Advertising Strategy &amp; Planning</dd>
        <dd>UX Design &amp; Development</dd>
        <dd>Online Advertising</dd>
        <dd>Automated e-Marketing</dd>
      </div>
    </dl>
    <dl class="with-dt-mdash">
      <dt>Marketing</dt>
      <div class="item-container">
        <dd>Strategy</dd>
        <dd>Media Planning</dd>
        <dd>Art Direction</dd>
        <dd>Brochures</dd>
        <dd>Guides</dd>
        <dd>Copywriting</dd>
        <dd>Tradeshow &amp; Event Materials</dd>
        <dd>Holiday Cards</dd>
      </div>
    </dl>
  </div>
</section>

<section id="clients" class="hidden display-after-load">
  <header>Client's I've worked with</header>
  <div class="flex-container">
    <img class="lazy" data-src="assets/logos/logo-rio.png">
    <img class="lazy" data-src="assets/logos/logo-crayola.png">
    <img class="lazy" data-src="assets/logos/logo-stella.png">
    <img class="lazy" data-src="assets/logos/logo-kawasaki.png">
    <img class="lazy" data-src="assets/logos/logo-nutrition.png">
    <img class="lazy" data-src="assets/logos/logo-spectral.png">
    <img class="lazy" data-src="assets/logos/logo-tutu.png">
    <img class="lazy" data-src="assets/logos/logo-brose.png">
    <img class="lazy" data-src="assets/logos/logo-sony.png">
    <img class="lazy" data-src="assets/logos/logo-aaron.png">
    <img class="lazy" data-src="assets/logos/logo-bombardier.png">
    <img class="lazy" data-src="assets/logos/logo-galle.png">
    <img class="lazy" data-src="assets/logos/logo-dental.png">
    <img class="lazy" data-src="assets/logos/logo-magna.png">
    <img class="lazy" data-src="assets/logos/logo-dundee.png">
    <img class="lazy" data-src="assets/logos/logo-emaar.png">
    <img class="lazy" data-src="assets/logos/logo-bell.png">
    <img class="lazy" data-src="assets/logos/logo-corus-OLD.png">
  </div>
</section>

<?php
	include "templates/footer.php";
?>
