<?php //home blog page ?>

<?php get_header(); ?>

<div class="main">
  <div class="container">

    <div class="bp-content clearfix">
  		<?php $mainQuery = new WP_Query(
    		array( 
    				// 'posts_per_page' => 6,
    			'showposts'=> 2,
    				) 
  		); ?>


  		<?php if ( $mainQuery->have_posts() ) : ?>

  			<?php while ( $mainQuery->have_posts() ) : $mainQuery->the_post(); ?>
  				<?php 
						$thumb_id = get_post_thumbnail_id();
						$thumb_url_array = wp_get_attachment_image_src($thumb_id, 'highlighted', true);
						$thumb_url = $thumb_url_array[0];
  				?>

			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

				<div class="photo-highlighted clearfix p" style="background-image:url(<?= $thumb_url ?>)">
				</div> <!--/photo-highlighted-->

				<a class="post-link" href="<?php the_permalink(); ?>" title="Permalink to: <?php esc_attr(the_title_attribute()); ?>" rel="bookmark"></a>
				
				<div class="bp-thumbnail-header">
					<h2 class="entry-title">
					  <a href="<?php the_permalink(); ?>" title="Permalink to: <?php esc_attr(the_title_attribute()); ?>" rel="bookmark">
					    <?php the_title(); ?>
					  </a>
					</h2>
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
		      <?php the_excerpt(); ?>

		    </div> <!--/.bp-thumbnail-header-->

			</article><!-- #post-## -->
  			<?php endwhile; ?>

  				<?php wp_reset_postdata(); ?>


  		<?php else:  ?>
  			
  		<?php endif; ?>
  		
  				<?php // Display navigation to next/previous pages when applicable ?>
  				<?php if (  $wp_query->max_num_pages > 1 ) : ?>
  				  <p class="alignleft"><?php next_posts_link("&laquo; Older Entries"); ?></p>
  				  <p class="alignright"><?php previous_posts_link("Newer Entries &raquo;"); ?></p>
  				<?php endif; ?>

    </div> <!--/.content -->

  </div> <!-- /.container -->
</div> <!-- /.main -->

<?php get_footer(); ?>