<?php
  $title = "Bombardier";
  $industry = "Aerospace";
  $prev_project = "urbantilt";
  $next_project = "Gowlings LLP|gowlings";
	include "templates/header.php";
?>

<section id="slideshow">
  <figure class="slide light-text">
    <div class="lazy darken" data-src="assets/bombardier/bombardier_hero.png"></div>
    <figcaption class="overlay">
      <div class="industry">Industry | <?php echo $industry; ?></div>
      <div class="title"><?php echo $title; ?></div>
    </figcaption>
  </figure>
</section>

<section id="project-tagline" class="hidden display-after-load">
  <div class="container">
    <article class="project-description">
      I was responsible for the concept and design of Bombardiers' quarterly reports. 
      Other unique opportunities that crossed my desk were to create a logo to mark the production 
      of the 1000th CRJ airliner, and conceptualize/design airplane graphics for Asia-bound aircraft.
    </article>
    <article class="project-components">
      <p>Project Components:</p>
      <ul>
        <li>Logo Concepts</li>
        <li>Graphic &amp; Production Design</li>
        <li>Print Design</li>
      </ul>
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
  include "templates/next-prev-project.php";
	include "templates/footer.php";
?>
