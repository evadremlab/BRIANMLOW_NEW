<?php
	$title = "";
	include "templates/header.php";
?>

<!-- On OSX, serve using: php -S localhost:8080 -->

<section id="slideshow">
  <figure class="slide active-slide dark-text">
    <img src="assets/slideshow/urbantilt.png" />
    <figcaption class="overlay">
      <div class="industry">Industry | Photography</div>
      <div class="title">urbantilt</div>
      <a href="urbantilt.php" class="link">View Project</a>
    </figcaption>
  </figure>
  <figure class="slide light-text">
    <img src="assets/slideshow/tutu.png" />
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
    <article class="inside">
      <div class="mask">
        <div class="overlay">
          <div class="industry">Industry | Legal</div>
          <div class="title">Bennet Jones LLP</div>
          <a href="#" class="link">View Project</a>
        </div>
      </div>
    </article>
    <article class="crayola">
      <div class="mask">
        <div class="overlay">
          <div class="industry">Industry | Consumer Goods</div>
          <div class="title">Crayola</div>
          <a href="#" class="link">View Project</a>
        </div>
      </div>
    </article>
    <article class="inside">
      <div class="mask">
        <div class="overlay">
          <div class="industry">Industry | Architecture</div>
          <div class="title">HOK</div>
          <a href="#" class="link">View Project</a>
        </div>
      </div>
    </article>
    <article class="crayola">
      <div class="mask">
        <div class="overlay">
          <div class="industry">Industry | Food &amp; Beverage</div>
          <div class="title">TUTU Garden</div>
          <a href="tutu.php" class="link">View Project</a>
        </div>
      </div>
    </article>
    <article class="inside">
      <div class="mask">
        <div class="overlay">
          <div class="industry">Industry | Motorcycles</div>
          <div class="title">Kawasaki</div>
          <a href="#" class="link">View Project</a>
        </div>
      </div>
    </article>
    <article class="crayola">
      <div class="mask">
        <div class="overlay">
          <div class="industry">Industry | Medical</div>
          <div class="title">Spectral Diagnostics</div>
          <a href="#" class="link">View Project</a>
        </div>
      </div>
    </article>
    <article class="inside">
      <div class="mask">
        <div class="overlay">
          <div class="industry">Industry | Photography</div>
          <div class="title">Vanessa Galle</div>
          <a href="#" class="link">View Project</a>
        </div>
      </div>
    </article>
    <article class="crayola">
      <div class="mask">
        <div class="overlay">
          <div class="industry">Industry | Legal</div>
          <div class="title">Gowlings LLP</div>
          <a href="#" class="link">View Project</a>
        </div>
      </div>
    </article>
    <article class="inside">
      <div class="mask">
        <div class="overlay">
          <div class="industry">Industry | Entertainment</div>
          <div class="title">Inside Nightclub</div>
          <a href="#" class="link">View Project</a>
        </div>
      </div>
    </article>
  </div>
</section>

<script>
  function onPageLoad() {
    displayRandomDeepThought();

    makeSlideshow('#slideshow', {
      auto: { // auto-advancing slides
        speed: 600, // speed to advance slides at in seconds
        pauseOnHover: true // pause advancing on mouseover?
      }
    });
  }
</script>

<?php
	include "templates/footer.php";
?>
