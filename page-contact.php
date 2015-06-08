<?php get_header();  ?>

<div class="main">
  <div class="container">

    <div class="page-content">

      <?php // Start the loop ?>
      <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

        <?php the_content(); ?>

      <?php endwhile; // end the loop?>

      <div class="form" form method="post" action="mailto:hello@allisontarr.com" enctype="text/plain">
        <!-- <div class="inner-form"> -->
          <!-- <p>More you want to chat about? Shoot me an email.</p> -->
          <!-- <input type="name" placeholder="Name">
          <input type="email" class="email" placeholder="E-mail">
          <textarea name="Message" placeholder="Message" cols="30" rows="10"></textarea>
          <button class="submit">Submit</button> -->
        <!-- </div> /ends .inner-form -->
      </div> <!--ends /.form-->
        
    </div> <!-- /,content -->

  </div> <!-- /.container -->
</div> <!-- /.main -->

<?php get_footer(); ?>