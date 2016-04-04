<?php //front-page, hopefully ?>

<?php get_header(); ?>

<div class="main">
	<div class="container">

		<div class="content clearfix">
			<?php $mainQuery = new WP_Query(
				array(
					'posts_per_page' => 3,
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

				<div class="clearfix photo-highlighted" style="background-image:url(<?= $thumb_url ?>)"></div> <!--/photo-highlighted-->

				<a class="post-link" href="<?php the_permalink(); ?>" title="Permalink to: <?php esc_attr(the_title_attribute()); ?>" rel="bookmark"></a>

				<div class="thumbnail-header">
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
				</div> <!--/.thumbnail-header-->

			</article><!-- #post-## -->
				<?php endwhile; ?>

					<?php wp_reset_postdata(); ?>

			<?php else:  ?>

			<?php endif; ?>

		</div> <!--/.mainContent -->

		<div class="secondContent clearfix">
			<div class="container">

				<p><?php esc_html_e('Hey. You made it.', 'spin') ?></p>

				<p><?php esc_html_e('I’m glad you’re here. This is the space I\'ve created for the stories in my life. Some true and some less true. (I\'ll try to let you know which is which.) I write about travel, mental health, code -- about books, feminism and pop culture. The moments and events that bring me joy.', 'spin') ?></p>

			<?php get_sidebar(); ?>

			</div> <!--/.container-->
		</div> <!--/secondContent-->

	</div> <!-- /.container -->
</div> <!-- /.main -->

<?php get_footer(); ?>
