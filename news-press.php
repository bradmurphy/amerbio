<?php

  /* Template Name: News Press Page */

?>

<?php include 'header-news.php';?>

<section class="news-press">

    <div class="section-hero">

      <div class="section-hero__content">
        <h3 class="section-hero__headline--sml">News & Press</h3>
        <h1 class="section-hero__headline">Press Release</h1>
      </div>

    </div>

    <div class="site-section">

      <?php

      global $post;
      $args = array( 'category_name' => 'press' );

      $myposts = get_posts( $args );
      foreach ( $myposts as $post ) : setup_postdata( $post ); ?>

      <div class="section-content">
          <div class="section-side-bar">
              <p class="site-copy site-copy--date">
                  For Immediate Release
              </p>
          </div>

          <div class="section-main">
              <p class="site-copy site-copy--lrg">
                <?php the_title(); ?>
              </p>
              <p class="site-copy site-copy--spc">
                <?php the_content(); ?>
              </p>
          </div>
      </div>

      <?php endforeach;
      wp_reset_postdata();?>

    </div>

</section>


<?php include 'footer.php' ?>
