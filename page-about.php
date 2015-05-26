<?php get_header();  ?>

<div class="main">
  <div class="container">

    <div class="page-content">

    <div class="about-photo">
          <?php $bio = get_field('about_photo'); ?>
          <img src="<?php echo $bio['sizes']['square']; ?> " alt="">
        </div>

      <?php // Start the loop ?>
      <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

        <h2><?php the_title(); ?></h2>

        <?php the_content(); ?>

      <?php endwhile; // end the loop?>
        
    </div> <!-- /,content -->

  </div> <!-- /.container -->
</div> <!-- /.main -->

<?php get_footer(); ?>