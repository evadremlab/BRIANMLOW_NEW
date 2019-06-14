<?php
	$title = "TUTU Garden";
  $prev_project = "Brose";
  $next_project = "Bennett Jones LLP|bennett";
	include "templates/header.php";
?>

<section id="slideshow">
  <figure class="slide active-slide light-text">
    <img src="assets/tutu_hero.png" class="darken" />
    <figcaption class="overlay">
      <div class="industry">Industry | Food &amp; Beverage</div>
      <div class="title">TUTU Garden</div>
    </figcaption>
  </figure>
</section>

<section id="project-tagline" class="hidden display-after-load">
  <div class="container">
    <article class="project-description">
      TUTU Garden wanted to rebrand with the goal of appealing and attracting a wider, 
      more tech-savvy customer base. From logo development to web/UI interface, 
      the approach was simple - create a clean, memorable icon to represent the business 
      and incorporate bold colours to empower the brand.
    </article>
    <article class="project-components">
      <p>Project Components:</p>
      <ul>
        <li>Logo Design</li>
        <li>Branding &amp; Graphic Design</li>
        <li>Menu &amp; Stationary Design</li>
        <li>Print Design</li>
        <li>Web, UI/UE Concept &amp; Design</li>
      </ul>
    </article>
  </div>
</section>

<section id="project-artwork">
  <img class="lazy" data-src="assets/tutu_1.png">
  <img class="lazy" data-src="assets/tutu_2.png">
  <img class="lazy" data-src="assets/tutu_4.png">
  <img class="lazy" data-src="assets/tutu_3.png">
  <img class="lazy" data-src="assets/tutu_5.png">
  <img class="lazy" data-src="assets/tutu_7.png">
  <img class="lazy" data-src="assets/tutu_8.png">
</section>

<?php
  include "templates/next-prev-project.php";
	include "templates/footer.php";
?>
