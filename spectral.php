<?php
  $title = "Spectral Diagnostics";
  $prev_project = "Sony Insider|sony";
  $next_project = "HOK";
	include "templates/header.php";
?>

<section id="slideshow">
  <figure class="slide light-text">
    <div class="lazy darken" data-src="assets/spectral/spectral_hero.png"></div>
    <figcaption class="overlay">
      <h2 class="industry">Industry | Medical</h2>
      <h1 class="title"><?php echo $title; ?></h1>
    </figcaption>
  </figure>
</section>

<section id="project-tagline" class="hidden display-after-load">
  <div class="flex-container">
    <article class="left">
      I was the lead designer for the Spectral Diagnostics Blood Analysis line of products, 
      which included various package designs, supplemental inserts as well as additional 
      product logo concept/development (Decision Point).
    </article>
    <article class="right">
      <dl>
        <dt>Project Components:</dt>
        <dd>Art &amp; Creative Direction</dd>
        <dd>Branding &amp; Graphic Design</dd>
        <dd>Print Design</dd>
        <dd>Press Approvals</dd>
      </dl>
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
	include "templates/footer.php";
?>
