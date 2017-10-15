<?php

  /* Template Name: News Page */

?>

<?php include 'header-news.php';?>

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

    <div class="site-section">

      <?php if ( have_posts() ) : the_post(); endif; ?>

      <div class="section-content section-content--lrg section-content__news">
          <div class="section-side-bar">
              <p class="site-copy site-copy--date">
                <?php the_date(); ?>
              </p>
          </div>

          <div class="section-main">
              <p class="site-copy site-copy--lrg">
                <?php the_title(); ?>
              </p>
              <p class="site-copy">
                <?php the_content(); ?>
              </p>
              <a href="../news" class="site-copy site-copy--link">Back</a>
          </div>
      </div>

    </div>

</section>


<?php include 'footer.php' ?>
