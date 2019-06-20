<?php
  $title = "Bombardier";
  $prev_project = "urbantilt";
  $next_project = "Gowlings LLP|gowlings";
	include "templates/header.php";
?>

<section id="slideshow">
  <figure class="slide light-text">
    <div class="lazy darken" data-src="assets/bombardier/bombardier_hero.png"></div>
    <figcaption class="overlay">
      <h2 class="industry">Industry | Aerospace</h2>
      <h1 class="title"><?php echo $title; ?></h1>
    </figcaption>
  </figure>
</section>

<section id="project-tagline" class="hidden display-after-load">
  <div class="flex-container">
    <article class="left">
      I was responsible for the concept and design of Bombardiers' quarterly reports. 
      Other unique opportunities that crossed my desk were to create a logo to mark the production 
      of the 1000th CRJ airliner, and conceptualize/design airplane graphics for Asia-bound aircraft.
    </article>
    <article class="right">
      <dl>
        <dt>Project Components:</dt>
        <dd>Logo Concepts</dd>
        <dd>Graphic &amp; Production Design</dd>
        <dd>Print Design</dd>
      </dl>
    </article>
  </div>
</section>

<section id="project-artwork">
  <img class="lazy" data-src="assets/bombardier/bombardier_1.png">
  <img class="lazy" data-src="assets/bombardier/bombardier_2.png">
  <img class="lazy" data-src="assets/bombardier/bombardier_3.png">
  <img class="lazy" data-src="assets/bombardier/bombardier_4.png">
</section>

<?php
	include "templates/footer.php";
?>
