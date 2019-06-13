<?php
	$title = "urbantilt";
	include "templates/header.php";
?>

<section id="slideshow"
  <figure class="slide active-slide dark-text">
    <img src="assets/slideshow/urbantilt.png" class="darken" />
    <figcaption class="overlay">
      <div class="industry">Industry | Photography</div>
      <div class="title">urbantilt</div>
    </figcaption>
  </figure>
</section>

<section id="project-tagline" class="hidden display-after-load">
  <div class="container">
    <article class="project-description">
      I worked with urbantilt to revamp their existing logo, 
      we added a modern feel by utilizing a bold typeface and accent colour 
      that could then be applied to their promotional materials, website and social media platforms.
    </article>
    <article class="project-components">
      <p>Project Components:</p>
      <ul>
        <li>Art &amp; Creative Direction</li>
        <li>Branding &amp; Graphic Design</li>
        <li>Print Design</li>
      </ul>
    </article>
  </div>
</section>

<section id="project-artwork">
  <img src="assets/empty.gif" data-src="assets/urbantilt_1.png">
  <img src="assets/empty.gif" data-src="assets/urbantilt_2.png">
  <img src="assets/empty.gif" data-src="assets/urbantilt_3.png">
  <img src="assets/empty.gif" data-src="assets/urbantilt_4.png">
  <img src="assets/empty.gif" data-src="assets/urbantilt_5.png">
</section>

<script>
  function onPageLoad() {
    $('#project-artwork img').unveil(); // lazy load images
  }
</script>

<?php
	include "templates/footer.php";
?>
