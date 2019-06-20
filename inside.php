<?php
  $title = "inside nightclub";
  $prev_project = "Crayola";
  $next_project = "Vanessa Galle|galle";
	include "templates/header.php";
?>

<section id="slideshow">
  <figure class="slide light-text">
    <div class="lazy darken" data-src="assets/inside/inside_hero.png"></div>
    <figcaption class="overlay">
      <h2 class="industry">Industry | Entertainment</h2>
      <h1 class="title">inside nightclub</h1>
    </figcaption>
  </figure>
</section>

<section id="project-tagline" class="hidden display-after-load">
  <div class="flex-container">
    <article class="left">
      Concept, design and implimentation of the 'inside' wordmark for various applications. 
      Those included: stationary, VIP passes, matchboxes, postcards and advertising.
    </article>
    <article class="right">
      <dl>
        <dt>Project Components:</dt>
        <dd>Logo Design &amp; Creative Direction</dd>
        <dd>Stationary &amp; Print Materials</dd>
        <dd>Advertising Design</dd>
      </dl>
    </article>
  </div>
</section>

<section id="project-artwork">
  <img class="lazy" data-src="assets/inside/inside_1.png">
  <img class="lazy" data-src="assets/inside/inside_2.png">
  <img class="lazy" data-src="assets/inside/inside_3.png">
  <img class="lazy" data-src="assets/inside/inside_4.png">
  <img class="lazy" data-src="assets/inside/inside_5.png">
</section>

<?php
	include "templates/footer.php";
?>
