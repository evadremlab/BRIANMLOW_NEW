<?php
	$title = "Bennett Jones LLP";
  $prev_project = "TUTU Garden|tutu";
  $next_project = "HOK";
  include "templates/header.php";
?>

<section id="slideshow"
  <figure class="slide active-slide light-text">
    <img src="assets/bennett_hero.png" class="darken" />
    <figcaption class="overlay">
      <div class="industry">Industry | Legal</div>
      <div class="title">Bennet Jones LLP</div>
    </figcaption>
  </figure>
</section>

<section id="project-tagline" class="hidden display-after-load">
  <div class="container">
    <article class="project-description">
      At Bennett Jones, the opportunities were many and varied, ranging from: 
      the design and production of brochures, guides, promotional materials, event invitations, 
      signage, internal marketing collateral, website/social media updates and e-marketing campaigns.
    </article>
    <article class="project-components">
      <p>Project Components:</p>
      <ul>
        <li>Art &amp; Creative Direction</li>
        <li>Branding &amp; Graphic Design</li>
        <li>Print &amp; Digital Media</li>
        <li>Media Strategy</li>
        <li>Advertising</li>
        <li>Training &amp; Technical Writing</li>
        <li>Automated Marketing Software (Vuture)</li>
        <li>Project Management &amp; Tracking (Producteev)</li>
        <li>Copywriting</li>
        <li>Multilingual Marketing Materials</li>
      </ul>
    </article>
  </div>
</section>

<section id="project-artwork">
  <img class="lazy" data-src="assets/bennett_1.png">
  <img class="lazy" data-src="assets/bennett_2.png">
  <div style="text-align:center">
    <iframe src="https://player.vimeo.com/video/143406001" width="800" height="400" frameborder="0" webkitallowfullscreen="" mozallowfullscreen="" allowfullscreen=""></iframe>
  </div>
  <img class="lazy" data-src="assets/bennett_4.png">
  <img class="lazy" data-src="assets/bennett_4B.png">
  <img class="lazy" data-src="assets/bennett_5.png">
</section>

<?php
  include "templates/next-prev-project.php";
	include "templates/footer.php";
?>
