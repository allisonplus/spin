<?php //home blog page ?>

<?php get_header(); ?>

<div class="main">
  <div class="container">

    <div class="bp-content clearfix">

    <?php if ( ! have_posts() ) : ?>

    	<article id="post-0" class="post error404 not-found">
    		<h1 class="entry-title">Not Found</h1>
    		<section class="entry-content">
    			<p>Apologies, but no results were found for the requested archive. Perhaps searching will help find a related post.</p>
    			<?php get_search_form(); ?>
    		</section><!-- .entry-content -->
    	</article><!-- #post-0 -->

    <?php endif; // end if there are no posts ?>

    <?php // if there are posts, Start the Loop. ?>

    <?php while ( have_posts() ) : the_post(); ?>

    		<?php 
    			$thumb_id = get_post_thumbnail_id();
    			$thumb_url_array = wp_get_attachment_image_src($thumb_id, 'highlighted', true);
    			$thumb_url = $thumb_url_array[0];
    		?>

			<article class="bp-article"id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

				<div class="bp-photo-highlighted clearfix p" style="background-image:url(<?= $thumb_url ?>)">
				</div> <!--/photo-highlighted-->

				<a class="post-link" href="<?php the_permalink(); ?>" title="Permalink to: <?php esc_attr(the_title_attribute()); ?>" rel="bookmark"></a>
				
				<div class="bp-thumbnail-header">
					<div class="meta-data">
							<span class="entry-cat" id="entry-cat">
								<?php 
								$category = get_the_category(); 
								if($category[0]){
								echo '<a href="'.get_category_link($category[0]->term_id ).'">'.$category[0]->cat_name.'</a>';
								} ?>
							</span>
							<span class="entry-date"><i class="fa fa-clock-o"></i><?php the_date('F jS, Y', '<p>', '</p>'); ?></span>

						</div> <!--/.meta-data-->
			      <h2 class="entry-title">
			        <a href="<?php the_permalink(); ?>" title="Permalink to: <?php esc_attr(the_title_attribute()); ?>" rel="bookmark">
			          <?php the_title(); ?>
			        </a>
			      </h2>
		      <!-- <?php the_excerpt(); ?> -->

		    </div> <!--/.bp-thumbnail-header-->

			</article><!-- #post-## -->

			<?php comments_template( '', true ); ?>

  	<?php endwhile; // End the loop. Whew. ?>

  	<div class="clearfix post-navigation">

			<?php // Display navigation to next/previous pages when applicable ?>
			<?php if (  $wp_query->max_num_pages > 1 ) : ?>
			  <p class="nav-previous"><?php next_posts_link("&laquo; Older Entries"); ?></p>
			  <p class="nav-next"><?php previous_posts_link("Newer Entries &raquo;"); ?></p>
			<?php endif; ?>
		</div> <!--/.post-navigation-->
  		
    </div> <!--/.bp-content -->

  </div> <!-- /.container -->
</div> <!-- /.main -->

<?php get_footer(); ?>