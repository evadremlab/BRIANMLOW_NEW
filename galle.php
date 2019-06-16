<?php
  $title = "Galle";
  $industry = "Photography";
  $prev_project = "inside nightclub|inside";
  $next_project = "Aaron Schwartz|aaron";
	include "templates/header.php";
?>

<section id="slideshow">
  <figure class="slide light-text">
    <div class="lazy darken" data-src="assets/galle/galle_hero.png"></div>
    <figcaption class="overlay">
      <div class="industry">Industry | <?php echo $industry; ?></div>
      <div class="title"><?php echo $title; ?></div>
    </figcaption>
  </figure>
</section>

<section id="project-tagline" class="hidden display-after-load">
  <div class="container">
    <article class="project-description">
      Vanessa approached me with a request for a self-promo piece that she could distribute 
      to potential clients. We ultimately decided on a four-panel, double-sided, perfed piece 
      that could double as a CD insert in the future.
    </article>
    <article class="project-components">
      <p>Project Components:</p>
      <ul>
        <li>Creative Direction</li>
        <li>Concept &amp; Strategy</li>
        <li>Print &amp; Graphic Design</li>
        <li>Website Design &amp; Development</li>
      </ul>
    </article>
  </div>
</section>

<section id="project-artwork">
  <img class="lazy" data-src="assets/galle/galle_1.png">
  <img class="lazy" data-src="assets/galle/galle_2.png">
  <img class="lazy" data-src="assets/galle/galle_3.png">
  <img class="lazy" data-src="assets/galle/galle_4.png">
  <img class="lazy" data-src="assets/galle/galle_5.png">
</section>

<?php
  include "templates/next-prev-project.php";
	include "templates/footer.php";
?>
