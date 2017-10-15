<?php

  /* Template Name: News Arhive Page */

?>

<?php include 'header-news.php';?>

<section class="news">

    <div class="section-hero">

      <div class="section-hero__content">
        <h3 class="section-hero__headline--sml">News & Press</h3>
        <h1 class="section-hero__headline">News Archive</h1>
        <div class="section-hero__divider"></div>

        <div class="section-hero__secondary">
            <p class="site-copy">
                Learn about what local news stations and others think about ABO's technology.
            </p>
        </div>
      </div>
    </div>

    <div class="site-section">

      <?php

      global $post;
      $args = array( 'category_name' => 'news' );

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
