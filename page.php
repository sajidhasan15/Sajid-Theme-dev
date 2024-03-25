<?php get_header(); ?>

<!-- Here is custome Header Images -->
<img src="<?php header_image(); ?>" height="<?php get_custom_header()->height; ?>" width="<?php get_custom_header()->width; ?>">

<div id="content" class="site-content">
 <div id="primary" class="content-area">
  <div id="main" class="site-main">
      <div class="container">
            <div class="page-item">
                  <?php
                       
                        while(have_posts()) : the_post();
                        ?>

                        <article>
                              <header>
                                    <h1><?php the_title(); ?></h1>
                              </header>
                              <?php the_content(); ?>
                        </article>

                        <?php
                        endwhile;
                  ?>

            </div>
      </div>
  </div>
 </div>
</div>
<?php get_footer(); ?>