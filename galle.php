<?php
  $title = "Vanessa Galle";
  $prev_project = "inside nightclub|inside";
  $next_project = "Aaron Schwartz|aaron";
	include "templates/header.php";
?>

<section id="slideshow">
  <figure class="slide light-text">
    <div class="lazy darken" data-src="assets/galle/galle_hero.png"></div>
    <figcaption class="overlay">
      <h2 class="industry">Industry | Photography</h2>
      <h1 class="title">Vanessa Galle</h1>
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
      <dl>
        <dt>Project Components:</dt>
        <dd>Creative Direction</dd>
        <dd>Concept &amp; Strategy</dd>
        <dd>Print &amp; Graphic Design</dd>
        <dd>Website Design &amp; Development</dd>
      </dl>
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
