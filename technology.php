<?php

  /* Template Name: Technology Page */

?>

<?php include 'header-technology.php';?>

<section class="technology">

    <div class="section-hero">

      <div class="section-hero__content">
        <h1 class="section-hero__headline">The Technology</h1>
        <div class="section-hero__divider"></div>

        <div class="section-hero__secondary">
            <p class="site-copy">
                Our cancer screening platform begins with a single focus — To create an office-based, no-prep, non-invasive screening test that can identify patients at high risk for cancer.
            </p>
        </div>
      </div>
    </div>

    <div class="site-section">
        <img src="<?php echo esc_url( home_url( '/' ) ); ?>wp-content/themes/site-theme/assets/img/icon-prism.png" alt="icon" class="section-content-icon">

        <h2 class="site-section__headline">A New Method for Screening</h2>

        <div class="section-content">
            <div class="section-content__cell">
                <p class="site-copy">
                    American BioOptics is pioneering a new method to screen for colon cancer through the development of a minimally intrusive optical diagnostic test. Developed with substantial research funding from the National Science Foundation and the National Institutes of Health, the company’s novel optical technology shines light inside the colon and analyzes how the reflected light interacts with the lining of the colon.
                </p>
            </div>

            <div class="section-content__cell">
                <p class="site-copy">
                    This interaction provides unique insight into abnormalities in healthy appearing tissue that are too small to be seen with an endoscope or microscope. Such subtle changes, including an increase in blood flow to the surface cells lining the colon and changes in the architecture of the cells themselves, can be assessed from the rectum and have been linked to an increased risk of cancer in our early human studies.
                </p>
            </div>
        </div>

    </div>

    <div class="site-section site-section--link">
        <a href="#" class="site-copy site-copy--link">Read about our technology</a>
    </div>

    <div class="section-footer">
        <div class="section-footer__content">
            <img src="<?php echo esc_url( home_url( '/' ) ); ?>wp-content/themes/site-theme/assets/img/icon-email.png" alt="icon" class="section-content-icon section-content-icon--email">
            <h2 class="site-section__headline">Stay in touch</h2>

            <p class="site-copy">
                If you would like to learn more about our company or if you are interested in future technology trials, please sign up for our mailing list by typing your email address below.
            </p>

            <form class="section-form">
                <input class="section-form__input" type="email" placeholder="Type your email here.">
                <button class="section-form__button">Go</button>
            </form>

            <p class="site-copy site-copy--cite">ABO will not share your email address with anyone.</p>
        </div>
    </div>

</section>


<?php include 'footer.php' ?>
