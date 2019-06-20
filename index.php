<?php
	$title = "";
  include "templates/header.php";
  // On OSX, serve using: php -S localhost:8080
?>

<section id="slideshow">
  <figure class="slide dark-text">
    <a href="urbantilt.php">
      <img src="assets/urbantilt/urbantilt_hero.png" />
      <figcaption class="overlay">
        <h2 class="my-work">My Work</h2>
        <h1 class="title">urbantilt</h1>
        <div class="link">View Project</div>
      </figcaption>
    </a>
  </figure>
  <figure class="slide light-text">
    <a href="brose.php">
      <img class="lazy" data-src="assets/brose/brose_hero.png" />
      <figcaption class="overlay">
        <h2 class="my-work">My Work</h2>
        <h1 class="title">Brose</h1>
        <div class="link">View Project</div>
      </figcaption>
    </a>
  </figure>
  <figure class="slide dark-text bennett">
    <a href="bennett.php">
      <img class="lazy" data-src="assets/bennett/bennett_hero.png" />
      <figcaption class="overlay">
        <h2 class="my-work">My Work</h2>
        <h1 class="title">Bennett Jones LLP</h1>
        <div class="link">View Project</div>
      </figcaption>
    </a>
  </figure>
  <figure class="slide light-text">
    <a href="tutu.php">
      <img class="lazy" data-src="assets/tutu/tutu_hero.png" />
      <figcaption class="overlay">
        <h2 class="my-work">My Work</h2>
        <h1 class="title">TUTU Garden</h1>
        <div class="link">View Project</div>
      </figcaption>
    </a>
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
  <div class="flex-container">
    <figure>
      <a href="bennett.php">
        <div class="lazy" data-src="assets/bennett/featured_bennett.png"></div>
        <figcaption class="overlay">
          <h2 class="industry">Industry | Legal</h2>
          <h1 class="title">Bennett Jones LLP</h1>
          <div class="link">View Project</div>
        </figcaption>
      </a>
    </figure>
    <figure>
      <a href="crayola.php">
        <div class="lazy" data-src="assets/crayola/featured_crayola.png"></div>
        <figcaption class="overlay">
          <h2 class="industry">Industry | Consumer Goods</h2>
          <h1 class="title">Crayola</h1>
          <div class="link">View Project</div>
        </figcaption>
      </a>
    </figure>
    <figure>
      <a href="hok.php">
        <div class="lazy" data-src="assets/hok/featured_hok.png"></div>
        <figcaption class="overlay">
          <h2 class="industry">Industry | Architecture</h2>
          <h1 class="title">HOK</h1>
          <div class="link">View Project</div>
        </figcaption>
      </a>
    </figure>
    <figure>
      <a href="tutu.php">
        <div class="lazy" data-src="assets/tutu/featured_tutu.png"></div>
        <figcaption class="overlay">
          <h2 class="industry">Industry | food &amp; Beverage</h2>
          <h1 class="title">TUTU Garden</h1>
          <div class="link">View Project</div>
        </figcaption>
      </a>
    </figure>
    <figure>
      <a href="kawasaki.php">
        <div class="lazy" data-src="assets/kawasaki/featured_kawasaki.png"></div>
        <figcaption class="overlay">
          <h2 class="industry">Industry | Motorcycles</h2>
          <h1 class="title">Kawasaki</h1>
          <div class="link">View Project</div>
        </figcaption>
      </a>
    </figure>
    <figure>
      <a href="spectral.php">
        <div class="lazy" data-src="assets/spectral/featured_spectral.png"></div>
        <figcaption class="overlay">
          <h2 class="industry">Industry | Medical</h2>
          <h1 class="title">Spectral Diagnostics</h1>
          <div class="link">View Project</div>
        </figcaption>
      </a>
    </figure>
    <figure>
      <a href="galle.php">
        <div class="lazy" data-src="assets/galle/featured_galle.png"></div>
        <figcaption class="overlay">
          <h2 class="industry">Industry | Photography</h2>
          <h1 class="title">Vanessa Galle</h1>
          <div class="link">View Project</div>
        </figcaption>
      </a>
    </figure>
    <figure>
      <a href="brose.php">
        <div class="lazy" data-src="assets/brose/featured_brose.png"></div>
        <figcaption class="overlay">
          <h2 class="industry">Industry | Fashion</h2>
          <h1 class="title">Brose</h1>
          <div class="link">View Project</div>
        </figcaption>
      </a>
    </figure>
    <figure>
      <a href="inside.php">
        <div class="lazy" data-src="assets/inside/featured_inside.png"></div>
        <figcaption class="overlay">
          <h2 class="industry">Industry | Entertainment</h2>
          <h1 class="title">inside nightclub</h1>
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
