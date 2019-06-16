<?php
  $title = "Sony Insider";
  $prev_project = "Stella &amp; Dot|stella";
  $next_project = "Spectral Diagnostics|spectral";
	include "templates/header.php";
?>

<section id="slideshow">
  <figure class="slide light-text">
    <div class="lazy darken" data-src="assets/sony/sony_hero.png"></div>
    <figcaption class="overlay">
      <h2 class="industry">Industry | Entertainment</h2>
      <h1 class="title">Sony Insider</h1>
    </figcaption>
  </figure>
</section>

<section id="project-tagline" class="hidden display-after-load">
  <div class="container">
    <article class="project-description">
      I was tasked with the concept, design and development for a newsletter 
      that Sony would send to its subscribers on a quarterly basis, showcasing its upcoming productions 
      at the Sony Centre.
    </article>
    <article class="project-components">
      <p>Project Components:</p>
      <ul>
        <li>Concept, Layout &amp; Graphic Design</li>
        <li>Print Design</li>
      </ul>
    </article>
  </div>
</section>

<section id="project-artwork">
  <img class="lazy" data-src="assets/sony/sony_1.png">
  <img class="lazy" data-src="assets/sony/sony_2.png">
  <img class="lazy" data-src="assets/sony/sony_3.png">
</section>

<?php
  include "templates/next-prev-project.php";
	include "templates/footer.php";
?>
