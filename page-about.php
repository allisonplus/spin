<?php get_header();  ?>

<div class="main">
  <div class="container">

    <div class="page-content">

    <div class="about-photo">
          <?php while( has_sub_field('images') ): ?>

          <div class="grid js-masonry image">
            <?php $image = get_sub_field('image'); ?>
            <img class="grid-item grid-item--width2" src="<?php echo $image['sizes']['sp-full'] ?>">
          </div>
        <?php endwhile; ?>
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