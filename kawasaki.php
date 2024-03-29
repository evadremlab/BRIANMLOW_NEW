<?php
  $title = "Kawasaki";
  $prev_project = "Aaron Schwartz|aaron";
  $next_project = "Stella &amp; Dot|stella";
	include "templates/header.php";
?>

<section id="slideshow">
  <figure class="slide light-text">
    <div class="lazy darken" data-src="assets/kawasaki/kawasaki_hero.png"></div>
    <figcaption class="overlay">
      <h2 class="industry">Industry | Motorcycles</h2>
      <h1 class="title"><?php echo $title; ?></h1>
    </figcaption>
  </figure>
</section>

<section id="project-tagline" class="hidden display-after-load">
  <div class="flex-container">
    <article class="left">
      I was involved in the concept, post-production and layout of the following advertisments. 
      Bikes were on loan, staged and shot in a studio with the backgrounds added later. 
      If I never do a clipping path around a motorcycle again - it'll be too soon.
    </article>
    <article class="right">
      <dl>
        <dt>Project Components:</dt>
        <dd>Concept and Post-Production</dd>
        <dd>Layout &amp; Design</dd>
      </dl>
    </article>
  </div>
</section>

<section id="project-artwork">
  <img class="lazy" data-src="assets/kawasaki/kawasaki_1.png">
  <img class="lazy" data-src="assets/kawasaki/kawasaki_2.png">
  <img class="lazy" data-src="assets/kawasaki/kawasaki_3.png">
</section>

<?php
	include "templates/footer.php";
?>
