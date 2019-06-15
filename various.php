<?php
  $title = "Various";
  $industry = "Self Promotion";
  $prev_project = "Gowlings LLP|gowlings";
  $next_project = "Brose";
	include "templates/header.php";
?>

<section id="slideshow"
  <figure class="slide active-slide light-text">
    <img src="assets/various/various_hero.png" class="darken" />
    <figcaption class="overlay">
      <div class="industry">Industry | <?php echo $industry; ?></div>
      <div class="title"><?php echo $title; ?></div>
    </figcaption>
  </figure>
</section>

<section id="project-tagline" class="hidden display-after-load">
  <div class="container">
    <article class="project-description">
      From logos and layouts to giftcards and advertising, here is a small collection 
      of various projects I've created.
    </article>
    <article class="project-components">
      <p>Project Components:</p>
      <ul>
        <li>Logo Concept and Creation</li>
        <li>Art &amp; Creative Direction</li>
        <li>Layout &amp; Graphic Design</li>
      </ul>
    </article>
  </div>
</section>

<section id="project-artwork">
  <img class="lazy" data-src="assets//_1.png">
</section>

<?php
  include "templates/next-prev-project.php";
	include "templates/footer.php";
?>
