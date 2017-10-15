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

    <div class="news__vision">
      <div class="site-section">
        <div class="section-content">
          <img src="<?php echo esc_url( home_url( '/' ) ); ?>wp-content/themes/amerbio/assets/img/icon-vision.png" alt="icon" class="section-content-icon">

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

        <?php

        global $post;
        $args = array( 'posts_per_page' => 5, 'category_name' => 'news' );

        $myposts = get_posts( $args );
        foreach ( $myposts as $post ) : setup_postdata( $post ); ?>

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
            </div>
        </div>

        <?php endforeach;
        wp_reset_postdata();?>

    </div>

</section>


<?php include 'footer.php' ?>
