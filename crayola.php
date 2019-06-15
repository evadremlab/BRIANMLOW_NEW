<?php
	$title = "Crayola";
  $prev_project = "Bennett Jones LLP|bennett";
  $next_project = "inside nightclub|inside";
	include "templates/header.php";
?>

<section id="slideshow"
  <figure class="slide active-slide light-text">
    <img src="assets/crayola/crayola_hero.png" class="darken" />
    <figcaption class="overlay">
      <div class="industry">Industry | <?php echo $industry; ?></div>
      <div class="title"><?php echo $title; ?></div>
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
      <p>Project Components:</p>
      <ul>
        <li>Branding &amp; Graphic Design</li>
        <li>Print Design</li>
        <li>Website Concept &amp; Design</li>
        <li>Packaging</li>
        <li>Advertising</li>
      </ul>
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
