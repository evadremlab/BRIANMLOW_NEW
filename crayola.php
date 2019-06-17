<?php
  $title = "Crayola";
  $prev_project = "Bennett Jones LLP|bennett";
  $next_project = "inside nightclub|inside";
	include "templates/header.php";
?>

<section id="slideshow">
  <figure class="slide light-text">
    <div class="lazy darken" data-src="assets/crayola/crayola_hero.png"></div>
    <figcaption class="overlay">
      <h2 class="industry">Industry | Consumer Goods</h2>
      <h1 class="title">Crayola</h1>
    </figcaption>
  </figure>
</section>

<section id="project-tagline" class="hidden display-after-load">
  <div class="container">
    <article class="project-description">
      I was fortunate enough to work on a variety of projects for Crayola, 
      ranging from: advertising to package design/development to website concepts and design.
    </article>
    <article class="project-components">
      <dl>
        <dt>Project Components:</dt>
        <dd>Branding &amp; Graphic Design</dd>
        <dd>Print Design</dd>
        <dd>Website Concept &amp; Design</dd>
        <dd>Packaging</dd>
        <dd>Advertising</dd>
      </dl>
    </article>
  </div>
</section>

<section id="project-artwork">
  <img class="lazy" data-src="assets/crayola/crayola_1.png">
  <img class="lazy" data-src="assets/crayola/crayola_2.png">
  <img class="lazy" data-src="assets/crayola/crayola_3.png">
  <img class="lazy" data-src="assets/crayola/crayola_4.png">
  <img class="lazy" data-src="assets/crayola/crayola_5.png">
  <img class="lazy" data-src="assets/crayola/crayola_6.png">
  <img class="lazy" data-src="assets/crayola/crayola_7.png">
</section>

<?php
  include "templates/next-prev-project.php";
	include "templates/footer.php";
?>
