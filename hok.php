<?php
  $title = "HOK";
  $prev_project = "Vanessa Galle|galle";
  $next_project = "TUTU Garden|tutu";
	include "templates/header.php";
?>

<section id="slideshow">
  <figure class="slide light-text">
    <div class="lazy darken" data-src="assets/hok/hok_hero.png"></div>
    <figcaption class="overlay">
      <h2 class="industry">Industry | Architecture</h2>
      <h1 class="title">HOK</h1>
    </figcaption>
  </figure>
</section>

<section id="project-tagline" class="hidden display-after-load">
  <div class="container">
    <article class="project-description">
      Having worked for HOK, a global architectural firm, I've had the opportunity to work on many 
      interesting projects ranging from proposal/pitch documents to full project overview guides 
      and support materials, for industries spanning aviation to sports, recreation, 
      entertainment facilities and mixed use towers.
    </article>
    <article class="project-components">
      <p>Project Components:</p>
      <ul>
        <li>Art &amp; Creative Direction</li>
        <li>Branding &amp; Graphic Design</li>
        <li>Print Design</li>
        <li>Large Format Poster Concept and Implementation</li>
      </ul>
    </article>
  </div>
</section>

<section id="project-artwork">
  <img class="lazy" data-src="assets/hok/hok_1.png">
  <img class="lazy" data-src="assets/hok/hok_2.png">
  <img class="lazy" data-src="assets/hok/hok_3.png">
  <img class="lazy" data-src="assets/hok/hok_4.png">
  <img class="lazy" data-src="assets/hok/hok_5.png">
  <img class="lazy" data-src="assets/hok/hok_6.png">
  <img class="lazy" data-src="assets/hok/hok_7.png">
</section>

<?php
  include "templates/next-prev-project.php";
	include "templates/footer.php";
?>
