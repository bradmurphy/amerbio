<?php

  /* Template Name: News Page */

?>

<?php include 'header.php';?>

<section class="news">

    <div class="section-hero">

      <div class="section-hero__content">
        <h1 class="section-hero__headline">News & Press</h1>
        <div class="section-hero__divider"></div>

        <div class="section-hero__secondary">
            <p class="site-copy">
                ABO's efforts to screen for and detect colorectal cancer in its earliest stages, using novel optical technology, has captured the attention of the National Institutes of Health, numerous journalists, and politicians.
            </p>
        </div>
      </div>
    </div>

    <div class="news__vision">
      <div class="site-section">
        <div class="section-content">
          <img src="<?php echo esc_url( home_url( '/' ) ); ?>wp-content/themes/site-theme/assets/img/icon-prism.png" alt="icon" class="section-content-icon">

          <div class="section-content__cell">
            <h2 class="site-section__headline">Our Vision</h2>
            <p class="site-copy">
              ABO's efforts to screen for and detect colorectal cancer in its earliest stages, using novel optical technology, has captured the attention of the National Institutes of Health, numerous journalists, and politicians.
            </p>
          </div>
        </div>
      </div>
    </div>

    <div class="site-section">

        <div class="section-content section-content__news">
            <div class="section-side-bar">
                <p class="site-copy site-copy--date">
                    December 10, 2015
                </p>
            </div>

            <div class="section-main">
                <p class="site-copy site-copy--lrg">
                  Healthcare technology incubator MATTER announces American BioOptics as a new member.
                </p>
                <p class="site-copy">
                  American BioOptics has garnered widespread interest in its technology. Most recently, American BioOptics received a grant award from the National Institutes of Health to further its research using advanced optical technology to reduce the rate of missed polyps during a conventional colonoscopy.
                </p>
                <a href="#" class="site-copy site-copy--link">Read more</a>
            </div>
        </div>

        <div class="section-content section-content__news">
            <div class="section-side-bar">
                <p class="site-copy site-copy--date">
                    February 19, 2008
                </p>
            </div>

            <div class="section-main">
                <p class="site-copy site-copy--lrg">
                  American BioOptics, LLC, with Evanston Northwestern Healthcare, receives Small Business Technology Transfer (STTR) award from National Institutes of Health
                </p>
                <a href="#" class="site-copy site-copy--link">Read more</a>
            </div>
        </div>

        <div class="section-content section-content__news">
            <div class="section-side-bar">
                <p class="site-copy site-copy--date">
                    September 4, 2007
                </p>
            </div>

            <div class="section-main">
                <p class="site-copy site-copy--lrg">
                  Governor Blagojevich announces $190,000 in Grants to help four high-growth, tech-based firms advance commercialization efforts in the Chicagoland area
                </p>
                <p class="site-copy">
                  On September, 2007, Illinois Governor Rod R. Blagojevich granted $50,000 to American BioOpticsto help the company advance commercialization efforts and grow its business. His support comes as a part of Opportunity Returns, an economic development strategy designed to create jobs and spur growth.
                </p>
                <a href="#" class="site-copy site-copy--link">Read more</a>
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
