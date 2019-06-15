<?php
  $title = "Kawasaki";
  $industry = "Motorcycles";
  $prev_project = "Aaron Schwartz|aaron";
  $next_project = "Stella &amp; Dot|stella";
	include "templates/header.php";
?>

<section id="slideshow"
  <figure class="slide active-slide light-text">
    <img src="assets/kawasaki/kawasaki_hero.png" class="darken" />
    <figcaption class="overlay">
      <div class="industry">Industry | <?php echo $industry; ?></div>
      <div class="title"><?php echo $title; ?></div>
    </figcaption>
  </figure>
</section>

<section id="project-tagline" class="hidden display-after-load">
  <div class="container">
    <article class="project-description">
      I was involved in the concept, post-production and layout of the following advertisments. 
      Bikes were on loan, staged and shot in a studio with the backgrounds added later. 
      If I never do a clipping path around a motorcycle again - it'll be too soon.
    </article>
    <article class="project-components">
      <p>Project Components:</p>
      <ul>
        <li>Concept and Post-Production</li>
        <li>Layout &amp; Design</li>
      </ul>
    </article>
  </div>
</section>

<section id="project-artwork">
  <img class="lazy" data-src="assets/kawasaki/kawasaki_1.png">
  <img class="lazy" data-src="assets/kawasaki/kawasaki_2.png">
  <img class="lazy" data-src="assets/kawasaki/kawasaki_3.png">
</section>

<?php
  include "templates/next-prev-project.php";
	include "templates/footer.php";
?>
