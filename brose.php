<?php
  $title = "Brose";
  $industry = "Fashion";
  $prev_project = "Various";
  $next_project = "TUTU Garden|tutu";
	include "templates/header.php";
?>

<section id="slideshow">
  <figure class="slide light-text">
    <div class="lazy darken" data-src="assets/brose/brose_hero.png"></div>
    <figcaption class="overlay">
      <div class="industry">Industry | <?php echo $industry; ?></div>
      <div class="title"><?php echo $title; ?></div>
    </figcaption>
  </figure>
</section>

<section id="project-tagline" class="hidden display-after-load">
  <div class="container">
    <article class="project-description">
      I reworked the existing logo so it would lend itself to various applications 
      and have a stronger presence when used as a stand-alone. The updated logo was used to add elements 
      to the 2017 Fall/Winter Collection Lookbook. A simple, clean approach, finished with die-cut, 
      embossing and vellum to round out the piece.
    </article>
    <article class="project-components">
      <p>Project Components:</p>
      <ul>
        <li>Logo Development</li>
        <li>Concept, Layout, &amp; Design</li>
        <li>Print Production</li>
      </ul>
    </article>
  </div>
</section>

<section id="project-artwork">
  <img class="lazy" data-src="assets/brose/brose_1.png">
  <img class="lazy" data-src="assets/brose/brose_2.png">
  <img class="lazy" data-src="assets/brose/brose_3.png">
  <img class="lazy" data-src="assets/brose/brose_4.png">
  <img class="lazy" data-src="assets/brose/brose_5.png">
  <img class="lazy" data-src="assets/brose/brose_6.png">
  <img class="lazy" data-src="assets/brose/brose_7.png">
  <img class="lazy" data-src="assets/brose/brose_8.png">
  <img class="lazy" data-src="assets/brose/brose_9.png">
  <img class="lazy" data-src="assets/brose/brose_10.png">
  <img class="lazy" data-src="assets/brose/brose_11.png">
  <img class="lazy" data-src="assets/brose/brose_12.png">
</section>

<?php
  include "templates/next-prev-project.php";
	include "templates/footer.php";
?>
