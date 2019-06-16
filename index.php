<?php
	$title = "";
	include "templates/header.php";
?>

<!-- On OSX, serve using: php -S localhost:8080 -->

<section id="slideshow">
  <figure class="slide dark-text">
    <img src="assets/urbantilt/urbantilt_hero.png" />
    <figcaption class="overlay">
      <div class="industry">Industry | Photography</div>
      <div class="title">urbantilt</div>
      <a href="urbantilt.php" class="link">View Project</a>
    </figcaption>
  </figure>
  <figure class="slide light-text">
    <img class="lazy" data-src="assets/tutu/tutu_hero.png" />
    <figcaption class="overlay">
      <div class="industry">Industry | Food &amp; Beverage</div>
      <div class="title">TUTU Garden</div>
      <a href="tutu.php" class="link">View Project</a>
    </figcaption>
  </figure>
</section>

<section id="site-tagline" class="hidden display-after-load">
  <header>Deep Thoughts &trade;</header>
  <p>
    <!-- random  content here -->
  </p>
</section>

<section id="featured-projects" class="hidden display-after-load">
  <header>Featured Projects</header>
  <div class="container">
    <figure>
      <a href="bennett.php">
        <div class="lazy" data-src="assets/bennett/featured_bennett.png"></div>
        <figcaption class="overlay">
          <div class="industry">Industry | Legal</div>
          <div class="title">Bennett Jones LLP</div>
          <div class="link">View Project</div>
        </figcaption>
      </a>
    </figure>
    <figure>
      <a href="crayola.php">
        <div class="lazy" data-src="assets/crayola/featured_crayola.png"></div>
        <figcaption class="overlay">
          <div class="industry">Industry | Consumer Goods</div>
          <div class="title">Crayola</div>
          <div class="link">View Project</div>
        </figcaption>
      </a>
    </figure>
    <figure>
      <a href="hok.php">
        <div class="lazy" data-src="assets/hok/featured_hok.png"></div>
        <figcaption class="overlay">
          <div class="industry">Industry | Architecture</div>
          <div class="title">HOK</div>
          <div class="link">View Project</div>
        </figcaption>
      </a>
    </figure>
    <figure>
      <a href="tutu.php">
        <div class="lazy" data-src="assets/tutu/featured_tutu.png"></div>
        <figcaption class="overlay">
          <div class="industry">Industry | food &amp; Beverage</div>
          <div class="title">TUTU Garden</div>
          <div class="link">View Project</div>
        </figcaption>
      </a>
    </figure>
    <figure>
      <a href="kawasaki.php">
        <div class="lazy" data-src="assets/kawasaki/featured_kawasaki.png"></div>
        <figcaption class="overlay">
          <div class="industry">Industry | Motorcycles</div>
          <div class="title">Kawasaki</div>
          <div class="link">View Project</div>
        </figcaption>
      </a>
    </figure>
    <figure>
      <a href="spectral.php">
        <div class="lazy" data-src="assets/spectral/featured_spectral.png"></div>
        <figcaption class="overlay">
          <div class="industry">Industry | Medical</div>
          <div class="title">Spectral Diagnostics</div>
          <div class="link">View Project</div>
        </figcaption>
      </a>
    </figure>
    <figure>
      <a href="galle.php">
        <div class="lazy" data-src="assets/galle/featured_galle.png"></div>
        <figcaption class="overlay">
          <div class="industry">Industry | Photography</div>
          <div class="title">Vanessa Galle</div>
          <div class="link">View Project</div>
        </figcaption>
      </a>
    </figure>
    <figure>
      <a href="brose.php">
        <div class="lazy" data-src="assets/brose/featured_brose.png"></div>
        <figcaption class="overlay">
          <div class="industry">Industry | Fashion</div>
          <div class="title">Brose</div>
          <div class="link">View Project</div>
        </figcaption>
      </a>
    </figure>
    <figure>
      <a href="inside.php">
        <div class="lazy" data-src="assets/inside/featured_inside.png"></div>
        <figcaption class="overlay">
          <div class="industry">Industry | Entertainment</div>
          <div class="title">inside nightclub</div>
          <div class="link">View Project</div>
        </figcaption>
      </a>
    </figure>
  </div>
</section>

<script>
  function onPageLoad() {
    displayRandomDeepThought();

    makeSlideshow('#slideshow', {
      auto: { // auto-advancing slides
        speed: 10, // speed to advance slides at in seconds
        pauseOnHover: true // pause advancing on mouseover?
      }
    });
  }
</script>

<?php
	include "templates/footer.php";
?>
