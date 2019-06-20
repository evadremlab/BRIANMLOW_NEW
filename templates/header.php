<?php
  include "scripts/functions.php";
  $page_name = strtolower(basename($_SERVER['PHP_SELF'],'.php')) . '-page';
  $version = "?v=20190618"; // so we know they have this latest version of js/css
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Brian M Low | Graphic Design <?php echo $title ?></title>
  <link rel="stylesheet" href="css/bootstrap-reboot.min.css">
  <link rel="stylesheet" href="css/slideshow.css">
  <link rel="stylesheet" href="css/site.css<?php echo $version; ?>">
  <!-- <link rel="stylesheet" href="css/media.css<?php echo $version; ?>"> -->
</head>
<body>
  <header>
    <a href="/" id="site-logo">
      <img src="assets/bml-logo.png">
    </a>
    <img id="menu-toggle" src="assets/menu-toggle.svg" />
  </header>
  <main id="<?php echo $page_name; ?>" role="main">
    <nav id="slideout-menu">
      <ul>
        <li><a href="/">home</a></li>
        <li><a href="about.php">about me</a></li>
        <li><a href="my-work.php">my work</a></li>
        <li><a href="contact.php">contact</a></li>
      </ul>
    </nav>
  