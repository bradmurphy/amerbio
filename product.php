<?php

  /* Template Name: Product Page */

?>

<?php include 'header.php';?>

<section class="product">

    <div class="section-hero">

      <div class="section-hero__content">
        <h1 class="section-hero__headline">The Product</h1>
        <div class="section-hero__divider"></div>

        <div class="section-hero__secondary">
            <p class="site-copy">
                Individuals at risk for colon cancer often go undetected, until it's too late.
            </p>
        </div>

        <div class="section-content">
          <div class="section-content__cell">
              <p class="site-copy">
                  The statistics are grim: colorectal canceris the second leading cause of cancer deaths in the United States. More than 150,000 men and women are affected each year. More surprisingly, those who are diagnosed often have no familyhistory of colon cancer, or other identifiable risk factors.
              </p>
          </div>

          <div class="section-content__cell">
              <p class="site-copy">
                  Today colonoscopy is the reliable standard for cancer identification. Regular screening can, in many cases, prevent colorectal cancer altogether. Yet, for reasons both practical and personal, colonoscopy remains underutilized. Research shows that more than half of those who should get screened, don’t.
              </p>
          </div>
        </div>

      </div>
    </div>

    <div class="product__vision">
        <div class="site-section">
          <h1 class="site-section__headline--lrg">Our Vision</h1>
          <p class="site-copy">
            American BioOptics (ABO) envisions a different future — a simple population screening test, providing a more accurate and infinitely more acceptable model for colorectal screening.
          </p>
        </div>
    </div>

    <div class="site-section site-section--product-vision">

        <div class="section-content">
            <div class="section-content__cell">
              <img src="<?php echo esc_url( home_url( '/' ) ); ?>wp-content/themes/site-theme/assets/img/icon-prism.png" alt="icon" class="section-content-icon">

              <div class="copy-cell">
                <p class="site-copy site-copy--lrg">
                    Improved Cancer Screenings
                </p>
                <p class="site-copy">
                  A non-invasive test could greatly simplify the screening process for colorectal cancer. Using a small probe that is inserted just inside the rectum, we envision a test that would be easily administered by a patient’s physician, identifying those patients at high risk for cancer and in need of additional follow-up.
                </p>
                <p class="site-copy">
                  American BioOptics believes that such a test, which would use proprietary optical technology, has the potential to be:
                </p>
                <ul class="section-content__list">
                  <li class="section-content__list-item">Office-based</li>
                  <li class="section-content__list-item">Inexpensive</li>
                  <li class="section-content__list-item">No-prep, and</li>
                  <li class="section-content__list-item">Highly accurate</li>
                </ul>
              </div>
            </div>

            <div class="section-content__cell">
              <img src="<?php echo esc_url( home_url( '/' ) ); ?>wp-content/themes/site-theme/assets/img/icon-development.png" alt="icon" class="section-content-icon">
              <div class="copy-cell">
                <p class="site-copy site-copy--lrg">
                  Development Process
                </p>
                <p class="site-copy">
                  The research team at American BioOptics is committed to innovation. Working in collaboration with Northwestern University and Evanston Northwestern Healthcare, the team has already completed and published a significant amount of early clinical work and begun product development.
                </p>
                <p class="site-copy">
                  Initial results show a high degree of sensitivity and specificity of this non-invasive screening test. Over the next several years, ABO will perform extensive clinical trials, which will lead to an FDA submission and eventual product commercialization.
                </p>
                <p class="site-copy">
                  ABO looks forward to the future, when its technology will save thousands of lives by becoming the first population-wide initial screening test for colorectal cancer.
                </p>
              </div>
            </div>
        </div>

    </div>

    <div class="section-footer">
        <div class="section-footer__content">
            <h2 class="site-section__headline">Participate</h2>

            <p class="site-copy">
                American BioOptics is not actively soliciting participants for trials at this time, though we welcome your interest. If you would like to learn more about our company or if you are interested in future technology trials, please contact us at:
            </p>

            <a href="#" class="technology-footer-cta">
              <button type="button" name="button" class="product-email-cta">
                <img src="<?php echo esc_url( home_url( '/' ) ); ?>wp-content/themes/site-theme/assets/img/icon-email.png" alt="icon" class="section-content-icon section-content-icon--email">
                <span class="site-copy">info@americanbiooptics.com</span>
              </button>
            </a>

            <p class="site-copy site-copy--cite">
              In compliance with all applicable laws and regulations, ABO will maintain your email address, and attempt to respond to queries within a reasonable time frame. ABO will not share your contact information with other groups or institutions.
            </p>
        </div>
    </div>

</section>


<?php include 'footer.php' ?>
