<?php
  $title = "Stella &amp; Dot";
  $industry = "Fashion";
  $prev_project = "Kawasaki";
  $next_project = "Sony Insider|sony";
	include "templates/header.php";
?>

<section id="slideshow"
  <figure class="slide active-slide light-text">
    <img src="assets/stella/stella_hero.png" class="darken" />
    <figcaption class="overlay">
      <div class="industry">Industry | <?php echo $industry; ?></div>
      <div class="title"><?php echo $title; ?></div>
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
      <p>Project Components:</p>
      <ul>
        <li>Concept, Layout &amp; Graphic Design</li>
        <li>Print &amp; Signage Design</li>
      </ul>
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
