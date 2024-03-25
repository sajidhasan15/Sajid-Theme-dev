<?php get_header(); ?>
<div id="content" class="site-content">
 <div id="primary" class="content-area">
  <div id="main" class="site-main">
   <div class="hero">
    Hero
   </div>
   <section class="services">
    Services
</section>
   <section class="home-blog">
      <div class="container">
            <div class="services-item">
                  <?php 
                  if (is_active_sidebar('services-1')) {
                        dynamic_sidebar('services-1');
                  } ?>
            </div>
            <div class="services-item">
                  <?php 
                  if (is_active_sidebar('services-2')) {
                        dynamic_sidebar('services-2');
                  } ?>
            </div>
            <div class="services-item">
                  <?php 
                  if (is_active_sidebar('services-3')) {
                        dynamic_sidebar('services-3');
                  } ?>
            </div>
            <div class="blog-items">
                  <?php
                        if(have_posts()): 
                              while(have_posts()) : the_post();
                              ?>

                              <article>
                                    <h2><?php the_title(); ?></h2>
                                    <div class="meta-info">
                                          <p>Posted in <?php echo get_the_date(); ?></p>
                                          <p>Categories <?php echo the_category(' ');  ?> </p>
                                          <p>Tags <?php the_tags('', ', '); ?></p>
                                    </div>
                                    <?php the_content(); ?>
                              </article>

                              <?php
                              endwhile;
                        else:
                        ?>
                        <p>Nothing yet to be displayed!</p>
                              <?php endif; ?>
            </div>
      </div>
    
      </section>
  </div>
 </div>
</div>
<?php get_footer(); ?>