<?php
  $title = "Aaron Schwartz";
  $industry = "Legal";
  $prev_project = "Vanessa Galle|galle";
  $next_project = "Kawasaki";
	include "templates/header.php";
?>

<section id="slideshow"
  <figure class="slide active-slide light-text">
    <img src="assets/aaron/aaron_hero.png" class="darken" />
    <figcaption class="overlay">
      <div class="industry">Industry | <?php echo $industry; ?></div>
      <div class="title"><?php echo $title; ?></div>
    </figcaption>
  </figure>
</section>

<section id="project-tagline" class="hidden display-after-load">
  <div class="container">
    <article class="project-description">
      Aaron Schwartz decided to branch out on his own and required a logo/stationary package 
      that would be used to promote his own legal practice. The final wordmark featured 
      a timeless serif-based typeface in metallic pantones.
    </article>
    <article class="project-components">
      <p>Project Components:</p>
      <ul>
        <li>Logo Concept &amp; Development</li>
        <li>Branding &amp; Graphic Design</li>
        <li>Print Collateral</li>
      </ul>
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
  include "templates/next-prev-project.php";
	include "templates/footer.php";
?>
