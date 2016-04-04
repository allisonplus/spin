<?php get_header(); ?>

<div class="main">
  <div class="container">

		<div class="four-oh-four">
	    <h1>Uh oh.</h1>
	    <h2>These aren't the droids you're looking for.</h2>
	    <h3>Maybe try again from the <a href="<?php echo home_url( '/' ); ?>" title="<?php bloginfo( 'name', 'display' ); ?>" rel="home">
          homepage</a>?</h3>
	    <img src="<?php bloginfo('template_url')?>/img/droids.png" alt="Several Star Wars droids">

    </div>

  </div> <!-- /.container -->
</div> <!-- /.main -->

<?php get_footer(); ?>
