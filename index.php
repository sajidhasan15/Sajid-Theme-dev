<?php get_header(); ?>

<!-- Here is custome Header Images -->
<img src="<?php header_image(); ?>" height="<?php get_custom_header()->height; ?>" width="<?php get_custom_header()->width; ?>">

<div id="content" class="site-content">
 <div id="primary" class="content-area">
  <div id="main" class="site-main">
      <h1>Blog</h1>
      <div class="container">
            <div class="blog-items">
                  <?php
                        if(have_posts()): 
                              while(have_posts()) : the_post();
                              ?>

                              <article>
                                    <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                                    <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(array(275,275)); ?></a>
                                    <div class="meta-info">
                                          <p>Posted in <?php echo get_the_date(); ?></p>
                                          <p>Categories <?php echo the_category(' ');  ?> </p>
                                          <p>Tags <?php the_tags('', ', '); ?></p>
                                    </div>
                                    <?php the_excerpt(); ?>
                              </article>

                              <?php
                              endwhile;
                        else:
                        ?>
                        <p>Nothing yet to be displayed!</p>
                              <?php endif; ?>
            </div>
            <?php get_sidebar(); ?>
      </div>
  </div>
 </div>
</div>
<?php get_footer(); ?>