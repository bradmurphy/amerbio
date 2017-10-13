<?php

  /* Template Name: Product Prevent Page */

?>

<?php include 'header.php';?>

<section class="product-prevent">

    <div class="section-hero">

      <div class="section-hero__content">
        <h3 class="section-hero__headline--sml">The Product</h3>
        <h1 class="section-hero__headline">Preventing Colorectal Cancer</h1>
        <div class="section-hero__divider"></div>

        <div class="section-hero__secondary">
            <p class="site-copy">
              Colorectal cancer screening saves lives. Screening can find precancerous polyps — abnormal growths in the colon or rectum — so that they can be removed before turning into cancer. Screening also helps find colorectal cancer at an early stage, when treatment often leads to a cure.
            </p>
            <p class="site-copy site-copy--cite">(Source: Centers for Disease Control and Prevention)</p>
        </div>
      </div>
    </div>

    <div class="site-section">

        <p class="site-copy site-copy--lrg">Screening Technologies</p>

        <div class="section-content">
            <div class="section-content__cell">
                <p class="site-copy">
                  There are a few important things you can do now to reduce the risk of colorectal cancer in the future.
                </p>
                <p class="site-copy">
                  The United States Preventive Services Task Force recommends one of the following screening technologies for men and women, aged 50 and older:
                </p>
                <ul class="section-content__list">
                  <li class="section-content__list-item">Colonoscopy</li>
                  <li class="section-content__list-item">Sigmoidoscopy</li>
                  <li class="section-content__list-item">Fecal occult blood test (FOBT)</li>
                  <li class="section-content__list-item">Double-contrast barium enema</li>
                </ul>
            </div>

            <div class="section-content__cell">
                <p class="site-copy">
                  Individuals with certain risk factors should begin screening earlier or have screening more often. Talk to your doctor about your own risk and when you should have screening tests.
                </p>
                <p class="site-copy">
                  For more information about colorectal cancer, visit the American Cancer Society on the Web at www.cancer.org.
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
            <h2 class="site-section__headline">A New Method for Screening</h2>

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
