<?php
	$title = "Contact Me";
	include "templates/header.php";
?>

<style>
  .left {
    color: #000;
    background-color: #fff;
  }
  .right {
    color: #fff;
    font-weight: 200;
    font-size: 1.9rem;
    background-color: #000;
  }
  input, textarea {
    border: 0;
    text-align: left;
    letter-spacing: 2px;
    background-color: transparent;
  }
  input[type=text], textarea {
    width: 100%;
    border-bottom: 1px solid #1feed8;
    /* line-height: normal; */
  }
  input[type=text] {
    padding: 5px 0;
    height: 5rem;
    /* box-shadow: none;
    -webkit-border-radius: 0;
    -moz-border-radius: 0;
    border-radius: 0; */
    /* -moz-background-clip: padding;
    -webkit-background-clip: padding-box;
    background-clip: padding-box; */
  }
  textarea {
    height: 15rem;
    padding: 10px 0;
  }
  input[type=submit] {
    padding: 20px 55px 20px 0;
    text-transform: uppercase;
    display: inline-block;
    /* width: auto; */
    /* line-height: 1; */
    color: #1feed8;
    /* overflow: visible; */
    -webkit-appearance: none;
  }
</style>

<section id="slideshow">
  <figure class="slide light-text">
    <div class="lazy darken" data-src="assets/contact/contact_hero.png"></div>
    <figcaption class="overlay">
      <h1 class="title">Contact Me</h1>
    </figcaption>
  </figure>
</section>

<section id="project-tagline" class="hidden display-after-load">
  <div class="flex-container">
    <article class="left">
      <address>
        18 Yonge Street<br/>
        Toronto, Ontario<br/>
        M5E 1Z8<br/>
        <br/>
        T: <a href="tel:+14165646176">416.564.6176</a><br/>
        E: <a href="mailto:brianmlow72@gmail.com">brianmlow72@gmail.com</a><br/>
        Social: <a href="https://www.linkedin.com/in/brianmlow/">LinkedIn</a>
      </address>
    </article>
    <article class="right">
      <dl class="with-dt-mdash">
        <dt style="font-size:2rem; font-weight:400;">Freelance Inquiries</dt>
      </dl>
      <form action="webformmailer.php" method="post">
        <input type="hidden" name="subject" value="Freelance Inquiry">
        <input type="hidden" name="redirect" value="email-sent.php">
        <input type="hidden" name="form_order" value="alpha">
        <input type="hidden" name="form_delivery" value="hourly_digest">
        <input type="hidden" name="form_format" value="html">
        <input name="name" aria-label="Sender Name" aria-required="true" aria-invalid="false" placeholder="Name*" type="text" style="background-image: url(&quot;data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAABHklEQVQ4EaVTO26DQBD1ohQWaS2lg9JybZ+AK7hNwx2oIoVf4UPQ0Lj1FdKktevIpel8AKNUkDcWMxpgSaIEaTVv3sx7uztiTdu2s/98DywOw3Dued4Who/M2aIx5lZV1aEsy0+qiwHELyi+Ytl0PQ69SxAxkWIA4RMRTdNsKE59juMcuZd6xIAFeZ6fGCdJ8kY4y7KAuTRNGd7jyEBXsdOPE3a0QGPsniOnnYMO67LgSQN9T41F2QGrQRRFCwyzoIF2qyBuKKbcOgPXdVeY9rMWgNsjf9ccYesJhk3f5dYT1HX9gR0LLQR30TnjkUEcx2uIuS4RnI+aj6sJR0AM8AaumPaM/rRehyWhXqbFAA9kh3/8/NvHxAYGAsZ/il8IalkCLBfNVAAAAABJRU5ErkJggg==&quot;); background-repeat: no-repeat; background-attachment: scroll; background-size: 16px 18px; background-position: 98% 50%; cursor: auto;">
        <br/>
        <input name="email" aria-label="Sender Email" placeholder="Email*" type="text">
        <br/>
        <input name="phone" aria-label="Sender Phone" placeholder="Phone" aria-invalid="false" type="text">
        <br/>
        <textarea name="message" aria-label="Message" placeholder="Message" aria-invalid="false" rows="10" cols="50"></textarea>
        <br/>
        <input type="submit" name="submit" value="Send"/>
      </form>
    </article>
  </div>
</section>

<?php
	include "templates/footer.php";
?>
