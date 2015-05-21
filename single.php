<?php get_header(); ?>

<div class="main">
  <div class="container">

    <div class="content">
      <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

          <?php 
            $thumb_id = get_post_thumbnail_id();
            $thumb_url_array = wp_get_attachment_image_src($thumb_id, 'blog-pull', true);
            $thumb_url = $thumb_url_array[0];
          ?>
        <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

          <div class="hero" id="hero">
            <div class="hero-image clearfix" style="background-image:url(<?= $thumb_url ?>)">
            </div> <!--/hero-image-->

            <a class="post-link" href="<?php the_permalink(); ?>" title="Permalink to: <?php esc_attr(the_title_attribute()); ?>" rel="bookmark"></a>
            
            <div class="hero-content">
              <div class="hero-meta">
                <span class="entry-cat" id="entry-cat">
                  <?php 
                  $category = get_the_category(); 
                  if($category[0]){
                  echo '<a href="'.get_category_link($category[0]->term_id ).'">'.$category[0]->cat_name.'</a>';
                  } ?>
                </span>
                <span class="entry-date"><i class="fa fa-clock-o"></i><?php the_date('F jS, Y', '<p>', '</p>'); ?></span>

              </div> <!--/.meta-data-->
              <h2 class="hero-title">
                <a href="<?php the_permalink(); ?>" title="Permalink to: <?php esc_attr(the_title_attribute()); ?>" rel="bookmark">
                  <?php the_title(); ?>
                </a>
              </h2>
            </div> <!--/.hero-content-->
          </div> <!--/.hero-->

        </div><!-- #post-## -->

        <div id="nav-below" class="navigation">
          <p class="nav-previous"><?php previous_post_link('%link', '&larr; %title'); ?></p>
          <p class="nav-next"><?php next_post_link('%link', '%title &rarr;'); ?></p>
        </div><!-- #nav-below -->

        <?php comments_template( '', true ); ?>

      <?php endwhile; // end of the loop. ?>

    </div> <!-- /.content -->

  </div> <!-- /.container -->
</div> <!-- /.main -->

<?php get_footer(); ?>