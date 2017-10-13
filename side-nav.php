<?php
/**
 * The header for our theme.
 *
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,700" rel="stylesheet">

<?php wp_head(); ?>
</head>
<body>

<!-- Parent Site Container -->
<section class="site__main">

  <!-- Side Nav Container -->
  <aside id="side-menu" class="site__side-nav">
    <!-- Side Nav List -->
    <ul class="side-nav__list">
      <li class="side-nav__headline">company</li>
      <li><a href="./index.html" class="side-nav__link">how it works</a></li>
      <li><a href="./pricing/index.html" class="side-nav__link">pricing</a></li>
      <li><a href="./success-stories/index.html" class="side-nav__link">success stories</a></li>
      <li><a href="./about/index.html" class="side-nav__link">about</a></li>
      <li><a href="./blog/index.html" class="side-nav__link">blog</a></li>
      <li><a href="./press/index.html" class="side-nav__link">press</a></li>
    </ul>

    <!-- Side Nav List -->
    <ul class="side-nav__list">
      <li class="side-nav__headline">info</li>
      <li><a href="https://benefix.us/users/sign_in" target="_blank" class="side-nav__link">sign in</a></li>
      <li><a href="https://benefix.zendesk.com/hc/en-us" target="_blank" class="side-nav__link">help center</a></li>
      <li><a href="./terms/index.html" class="side-nav__link">terms of use</a></li>
      <li><a href="./privacy/index.html" class="side-nav__link">privacy</a></li>
    </ul>

    <!-- Side Nav List -->
    <ul class="side-nav__list">
      <li class="side-nav__headline">social media</li>
      <li class="side-nav__social">
        <a href="https://www.facebook.com/getbenefix/" class="side-nav__social--link" target="_blank">
          <img src="./images/social-fb.png" class="side-nav__social--image"alt="Twitter">
        </a>
        <a href="https://www.instagram.com/getbenefix/" class="side-nav__social--link" target="_blank">
          <img src="./images/social-instagram.png" class="side-nav__social--image" alt="Facebook">
        </a>
      </li>
    </ul>
  </aside>

  <!-- Main Site Container -->
  <main class="site__container">

    <!-- Overlay -->
    <div id="overlay" class="site__container-overlay"></div>
