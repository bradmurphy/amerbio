<?php include 'side-nav.php';?>

<header>

  <div class="site__wrap site__flex site__column">
    <div class="site__flex site__row header__container--contact desktop-only">
      <div class="site__flex site__flex-auto">
        <a href="../company-contact" class="header__text--contact">contact us</a>
      </div>
      <div>
        <div class="site__flex site__row site__social-container">
          <a href="#" target="_blank">
            <div class="site__social-icon">
              <i class="fa fa-facebook" aria-hidden="true"></i>
            </div>
          </a>
          <a href="#" target="_blank">
            <div class="site__social-icon">
              <i class="fa fa-linkedin" aria-hidden="true"></i>
            </div>
          </a>
          <a href="#" target="_blank">
            <div class="site__social-icon">
              <i class="fa fa-twitter" aria-hidden="true"></i>
            </div>
          </a>
        </div>
      </div>
    </div>

    <div class="site__flex site__row header__container--nav">
      <i class="fa fa-bars" id="menu-button" aria-hidden="true"></i>
      <a href="../">
        <img src="<?php echo esc_url( home_url( '/' ) ); ?>wp-content/themes/amerbio/assets/img/logo.png" class="header__logo" alt="American Bioptics">
      </a>
      <div class="header__container--nav-block desktop-only">
        <span class="header__text--nav-label">The Product</span>
        <div class="header__container--nav-block--hover">
          <a href="../product" class="header__text--nav-header">The Product</a>
          <a href="../product-data" class="header__text--nav-link">Clinical Trial Data</a>
          <a href="../product-prevent" class="header__text--nav-link">Preventing Cancer</a>
        </div>
      </div>
      <div class="header__container--nav-block desktop-only">
        <span class="header__text--nav-label">The Technology</span>
        <div class="header__container--nav-block--hover">
          <a href="../technology" class="header__text--nav-header">The Technology</a>
          <a href="../technology-details" class="header__text--nav-link">Detailed Explanation</a>
          <a href="../technology-papers" class="header__text--nav-link">Tech Papers</a>
        </div>
      </div>
      <div class="header__container--nav-block desktop-only">
        <span class="header__text--nav-label">The Company</span>
        <div class="header__container--nav-block--hover">
          <a href="../company" class="header__text--nav-header">The Company</a>
          <a href="../company-values" class="header__text--nav-link">Our values</a>
          <a href="../company-team" class="header__text--nav-link">Our Team</a>
          <a href="../company-jobs" class="header__text--nav-link">Jobs</a>
          <a href="../company-contact" class="header__text--nav-link">Contact Us</a>
        </div>
      </div>
      <div class="header__container--nav-block desktop-only">
        <span class="header__text--nav-label">News &amp; Press</span>
        <div class="header__container--nav-block--hover show">
          <a href="../news" class="header__text--nav-header">News &amp; Press</a>
          <a href="../news-archive" class="header__text--nav-link">News Archive</a>
          <a href="../news-press" class="header__text--nav-link">Press Release</a>
        </div>
      </div>
    </div>
  </div>

</header>

<body>
