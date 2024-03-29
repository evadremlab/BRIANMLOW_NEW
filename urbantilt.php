<?php
  $title = "urbantilt";
  $prev_project = "Spectral Diagnostics|spectral";
  $next_project = "Bombardier";
	include "templates/header.php";
?>

<section id="slideshow">
  <figure class="slide dark-text">
    <div class="lazy darken" data-src="assets/urbantilt/urbantilt_hero.png"></div>
    <figcaption class="overlay">
      <h2 class="industry">Industry | Photography</h2>
      <h1 class="title"><?php echo $title; ?></h1>
    </figcaption>
  </figure>
</section>

<section id="project-tagline" class="hidden display-after-load">
  <div class="flex-container">
    <article class="left">
      I worked with urbantilt to revamp their existing logo, 
      we added a modern feel by utilizing a bold typeface and accent colour 
      that could then be applied to their promotional materials, website and social media platforms.
    </article>
    <article class="right">
      <dl>
        <dt>Project Components:</dt>
          <dd>Art &amp; Creative Direction</dd>
          <dd>Branding &amp; Graphic Design</dd>
          <dd>Print Design</dd>
      </dl>
    </article>
  </div>
</section>

<section id="project-artwork">
  <img class="lazy" data-src="assets/urbantilt/urbantilt_1.png">
  <img class="lazy" data-src="assets/urbantilt/urbantilt_2.png">
  <img class="lazy" data-src="assets/urbantilt/urbantilt_3.png">
  <img class="lazy" data-src="assets/urbantilt/urbantilt_4.png">
  <img class="lazy" data-src="assets/urbantilt/urbantilt_5.png">
</section>

<?php
	include "templates/footer.php";
?>
