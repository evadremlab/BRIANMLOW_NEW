<?php
  $title = "Bennett Jones LLP";
  $prev_project = "TUTU Garden|tutu";
  $next_project = "HOK";
  include "templates/header.php";
?>

<section id="slideshow">
  <figure class="slide light-text">
    <div class="lazy darken" data-src="assets/bennett/bennett_hero.png"></div>
    <figcaption class="overlay">
      <h2 class="industry">Industry | Legal</h2>
      <h1 class="title">Bennett Jones LLP</h1>
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
  <img class="lazy" data-src="assets/bennett/bennett_1.png">
  <img class="lazy" data-src="assets/bennett/bennett_2.png">
  <div style="text-align:center">
    <iframe src="" width="800" height="400" frameborder="0" webkitallowfullscreen="" mozallowfullscreen="" allowfullscreen=""></iframe>
  </div>
  <img class="lazy" data-src="assets/bennett/bennett_4.png">
  <img class="lazy" data-src="assets/bennett/bennett_4B.png">
  <img class="lazy" data-src="assets/bennett/bennett_5.png">
</section>

<script>
  function onPageLoad() {
    setTimeout(function() { // lazy load the video
      $('iframe').attr('src', 'https://player.vimeo.com/video/143406001');
    }, 100);
  }
</script>

<?php
  include "templates/next-prev-project.php";
	include "templates/footer.php";
?>
