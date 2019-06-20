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
  <div class="flex-container">
    <article class="left">
      At Bennett Jones, the opportunities were many and varied, ranging from: 
      the design and production of brochures, guides, promotional materials, event invitations, 
      signage, internal marketing collateral, website/social media updates and e-marketing campaigns.
    </article>
    <article class="right">
      <dl>
        <dt>Project Components:</dt>
        <dd>Art &amp; Creative Direction</dd>
        <dd>Branding &amp; Graphic Design</dd>
        <dd>Print &amp; Digital Media</dd>
        <dd>Media Strategy</dd>
        <dd>Advertising</dd>
        <dd>Training &amp; Technical Writing</dd>
        <dd>Automated Marketing Software (Vuture)</dd>
        <dd>Project Management &amp; Tracking (Producteev)</dd>
        <dd>Copywriting</dd>
        <dd>Multilingual Marketing Materials</dd>
      </dl>
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
	include "templates/footer.php";
?>
