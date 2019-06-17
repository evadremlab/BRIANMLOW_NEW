<?php
  $title = "Stella &amp; Dot";
  $prev_project = "Kawasaki";
  $next_project = "Sony Insider|sony";
	include "templates/header.php";
?>

<section id="slideshow">
  <figure class="slide dark-text">
    <div class="lazy darken" data-src="assets/stella/stella_hero.png"></div>
    <figcaption class="overlay">
      <h2 class="industry">Industry | Fashion</h2>
      <h1 class="title">Stella &amp; Dot</h1>
    </figcaption>
  </figure>
</section>

<section id="project-tagline" class="hidden display-after-load">
  <div class="container">
    <article class="project-description">
      I was approached by a Stella &amp; Dot representative to create various marketing pieces 
      to generate buzz for an upcoming tradeshow that would feature their merchandise. 
      Postcards were placed in various retailers and posters were sprinkled in and around 
      the downtown Ottawa area.
    </article>
    <article class="project-components">
      <dl>
        <dt>Project Components:</dt>
        <dd>Concept, Layout &amp; Graphic Design</dd>
        <dd>Print &amp; Signage Design</dd>
      </dl>
    </article>
  </div>
</section>

<section id="project-artwork">
  <img class="lazy" data-src="assets/stella/stella_1.png">
  <img class="lazy" data-src="assets/stella/stella_2.png">
  <img class="lazy" data-src="assets/stella/stella_3.png">
  <img class="lazy" data-src="assets/stella/stella_4.png">
</section>

<?php
  include "templates/next-prev-project.php";
	include "templates/footer.php";
?>
