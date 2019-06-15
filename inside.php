<?php
  $title = "inside nightclub";
  $industry = "Entertainment";
  $prev_project = "Crayola";
  $next_project = "Vanessa Galle|galle";
	include "templates/header.php";
?>

<section id="slideshow"
  <figure class="slide active-slide light-text">
    <img src="assets/inside/inside_hero.png" class="darken" />
    <figcaption class="overlay">
      <div class="industry">Industry | <?php echo $industry; ?></div>
      <div class="title"><?php echo $title; ?></div>
    </figcaption>
  </figure>
</section>

<section id="project-tagline" class="hidden display-after-load">
  <div class="container">
    <article class="project-description">
      Concept, design and implimentation of the 'inside' wordmark for various applications. 
      Those included: stationary, VIP passes, matchboxes, postcards and advertising.
    </article>
    <article class="project-components">
      <p>Project Components:</p>
      <ul>
        <li>Logo Design &amp; Creative Direction</li>
        <li>Stationary &amp; Print Materials</li>
        <li>Advertising Design</li>
      </ul>
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
  include "templates/next-prev-project.php";
	include "templates/footer.php";
?>
