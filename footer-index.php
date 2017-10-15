<?php
/**
 * The template for displaying the footer.
 */
?>

    <footer class="site__flex site__column">

      <div class="site__wrap site__flex site__flex-auto site__row site__flex">
        <div class="site__flex site__column footer__container--logo">
          <a href="./">
            <img src="<?php echo esc_url( home_url( '/' ) ); ?>wp-content/themes/site-theme/assets/img/logo.png" class="footer__logo" alt="American Bioptics">
          </a>
          <p class="footer__text">
            This technology is under development for the identification
            of patients at high risk for colon cancer and is not approved for
            distrubution or sale within the United States or internationally.
          </p>
        </div>
        <div class="site__flex site__column site__flex footer__container">
          <span class="footer__text--header">Links</span>
          <a href="./product" class="footer__link">Product</a>
          <a href="./technology" class="footer__link">Technology</a>
          <a href="./company" class="footer__link">Company</a>
          <a href="./press" class="footer__link">News &amp; Press</a>
        </div>
        <div class="site__flex site__column site__flex footer__container">
          <span class="footer__text--header">Social</span>
          <div class="site__flex site__row site__social-container">
            <a href="#" target="_blank">
              <div class="site__social-icon site__social-icon--footer">
                <i class="fa fa-facebook" aria-hidden="true"></i>
              </div>
            </a>
            <a href="#" target="_blank">
              <div class="site__social-icon site__social-icon--footer">
                <i class="fa fa-linkedin" aria-hidden="true"></i>
              </div>
            </a>
            <a href="#" target="_blank">
              <div class="site__social-icon site__social-icon--footer">
                <i class="fa fa-twitter" aria-hidden="true"></i>
              </div>
            </a>
          </div>
        </div>
        <div class="site__flex site__column site__flex footer__container">
          <span class="footer__text--header">Contact Us</span>
          <span class="footer__text--address-header">MATTER</span>
          <span class="footer__text--address-text">222 West Merchandise Mart Plaza</span>
          <span class="footer__text--address-text">Suite 1230</span>
          <span class="footer__text--address-text">Chicago, IL 60654</span>
        </div>
      </div>

      <div class="site__flex site__row footer__container--bottom">
        <span>&copy; American BioOptics 2016</span>
      </div>

    </footer>

  </main>

</body>
</html>
