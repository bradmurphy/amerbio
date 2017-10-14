<?php include 'side-nav.php';?>

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
          <a href="./product-data.php" class="header__text--nav-link">Clinical Trial Data</a>
          <a href="./product-prevent.php" class="header__text--nav-link">Preventing Cancer</a>
        </div>
      </div>
      <div class="header__container--nav-block">
        <span class="header__text--nav-label">The Technology</span>
        <div class="header__container--nav-block--hover">
          <a href="./technology.php" class="header__text--nav-header">The Technology</a>
          <a href="./technology-details.php" class="header__text--nav-link">Detailed Explanation</a>
          <a href="./technology-papers.php" class="header__text--nav-link">Tech Papers</a>
        </div>
      </div>
      <div class="header__container--nav-block">
        <span class="header__text--nav-label">The Company</span>
        <div class="header__container--nav-block--hover">
          <a href="./company.php" class="header__text--nav-header">The Company</a>
          <a href="./company-values.php" class="header__text--nav-link">Our values</a>
          <a href="./company-team.php" class="header__text--nav-link">Our Team</a>
          <a href="./company-jobs.php" class="header__text--nav-link">Jobs</a>
          <a href="./company-contact.php" class="header__text--nav-link">Contact Us</a>
        </div>
      </div>
      <div class="header__container--nav-block">
        <span class="header__text--nav-label">News &amp; Press</span>
        <div class="header__container--nav-block--hover show">
          <a href="./news" class="header__text--nav-header">News &amp; Press</a>
          <a href="./news-archive" class="header__text--nav-link">News Archive</a>
          <a href="./news-press" class="header__text--nav-link">Press Release</a>
        </div>
      </div>
    </div>
  </div>

</header>

<body <?php body_class(); ?>>
