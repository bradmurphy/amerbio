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
<link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,600" rel="stylesheet">

<?php wp_head(); ?>
</head>

<header>

  <div class="site__wrap site__column">
    <div class="site__row header__container--contact">
      <div class="site__flex site__align-left">
        <a href="#" class="header__text--contact">contact us</a>
      </div>
      <div class="site__flex site__align-right">
        social links
      </div>
    </div>
    <div class="site__row header__container--nav">
      <img src="<?php echo esc_url( home_url( '/' ) ); ?>wp-content/themes/site-theme/assets/img/logo.png" class="header__logo" alt="American Bioptics">
      <div class="header__container--nav-block">
        <span class="header__text--nav-label">The Product</span>
        <div class="header__container--nav-block--hover">
          <a href="./product.php" class="header__text--nav-header">The Product</a>
          <a href="./clinical-trial-data.php" class="header__text--nav-link">Clinical Trial Data</a>
          <a href="./preventing-cancer.php" class="header__text--nav-link">Preventing Cancer</a>
        </div>
      </div>
      <div class="header__container--nav-block">
        <span class="header__text--nav-label">The Technology</span>
        <div class="header__container--nav-block--hover">
          <a href="./technology.php" class="header__text--nav-header">The Technology</a>
          <a href="./detailed-explanation.php" class="header__text--nav-link">Detailed Explanation</a>
          <a href="./tech-papers.php" class="header__text--nav-link">Tech Papers</a>
        </div>
      </div>
      <div class="header__container--nav-block">
        <span class="header__text--nav-label">The Company</span>
        <div class="header__container--nav-block--hover show">
          <a href="./company.php" class="header__text--nav-header">The Company</a>
          <a href="./values.php" class="header__text--nav-link">Our values</a>
          <a href="./team.php" class="header__text--nav-link">Our Team</a>
          <a href="./jobs.php" class="header__text--nav-link">Jobs</a>
          <a href="./contact.php" class="header__text--nav-link">Contact Us</a>
        </div>
      </div>
      <div class="header__container--nav-block">
        <span class="header__text--nav-label">News &amp; Press</span>
        <div class="header__container--nav-block--hover">
          <a href="./news" class="header__text--nav-header">News &amp; Press</a>
          <a href="./archive" class="header__text--nav-link">News Archive</a>
          <a href="./press" class="header__text--nav-link">Press Release</a>
        </div>
      </div>
    </div>
  </div>

</header>

<body <?php body_class(); ?>>
