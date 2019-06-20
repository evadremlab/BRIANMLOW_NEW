<?php
  $title = "Aaron Schwartz";
  $prev_project = "Vanessa Galle|galle";
  $next_project = "Kawasaki";
	include "templates/header.php";
?>

<section id="slideshow">
  <figure class="slide light-text">
    <div class="lazy darken" data-src="assets/aaron/aaron_hero.png"></div>
    <figcaption class="overlay">
      <h2 class="industry">Industry | Legal</h2>
      <h1 class="title"><?php echo $title; ?></h1>
    </figcaption>
  </figure>
</section>

<section id="project-tagline" class="hidden display-after-load">
  <div class="flex-container">
    <article class="left">
      Aaron Schwartz decided to branch out on his own and required a logo/stationary package 
      that would be used to promote his own legal practice. The final wordmark featured 
      a timeless serif-based typeface in metallic pantones.
    </article>
    <article class="right">
      <dl>
        <dt>Project Components:</dt>
        <dd>Logo Concept &amp; Development</dd>
        <dd>Branding &amp; Graphic Design</dd>
        <dd>Print Collateral</dd>
      </dl>
    </article>
  </div>
</section>

<section id="project-artwork">
  <img class="lazy" data-src="assets/aaron/aaron_1.png">
  <img class="lazy" data-src="assets/aaron/aaron_2.png">
  <img class="lazy" data-src="assets/aaron/aaron_3.png">
  <img class="lazy" data-src="assets/aaron/aaron_4.png">
</section>

<?php
	include "templates/footer.php";
?>
