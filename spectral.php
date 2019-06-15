<?php
  $title = "Spectral Diagnostics";
  $industry = "Medical";
  $prev_project = "Sony Insider|sony";
  $next_project = "HOK";
	include "templates/header.php";
?>

<section id="slideshow"
  <figure class="slide active-slide light-text">
    <img src="assets/spectral/spectral_hero.png" class="darken" />
    <figcaption class="overlay">
      <div class="industry">Industry | <?php echo $industry; ?></div>
      <div class="title"><?php echo $title; ?></div>
    </figcaption>
  </figure>
</section>

<section id="project-tagline" class="hidden display-after-load">
  <div class="container">
    <article class="project-description">
      I was the lead designer for the Spectral Diagnostics Blood Analysis line of products, 
      which included various package designs, supplemental inserts as well as additional 
      product logo concept/development (Decision Point).
    </article>
    <article class="project-components">
      <p>Project Components:</p>
      <ul>
        <li>Art &amp; Creative Direction</li>
        <li>Branding &amp; Graphic Design</li>
        <li>Print Design</li>
        <li>Press Approvals</li>
      </ul>
    </article>
  </div>
</section>

<section id="project-artwork">
  <img class="lazy" data-src="assets/spectral/spectral_1.png">
  <img class="lazy" data-src="assets/spectral/spectral_2.png">
  <img class="lazy" data-src="assets/spectral/spectral_3.png">
  <img class="lazy" data-src="assets/spectral/spectral_4.png">
</section>

<?php
  include "templates/next-prev-project.php";
	include "templates/footer.php";
?>
