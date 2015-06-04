<?php get_header();  ?>

<div class="main">
  <div class="container">

    <div class="page-content">

      <div class="info">
        <?php // Start the loop ?>
        <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

          <?php the_content(); ?>

        <?php endwhile; // end the loop?>
      </div> <!--/.info-->

      <div class="user-photo">
        <?php $image = get_field('user-image'); ?>
        <img class="photo" src="<?php echo $image['sizes']['one-hundred'] ?>">
      </div> <!--/.user-photo-->
    </div> <!-- /.page-content -->

  </div> <!-- /.container -->
</div> <!-- /.main -->

<?php get_footer(); ?>