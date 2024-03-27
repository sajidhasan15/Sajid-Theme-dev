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
      <h2>Latest News</h2>
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
                  <?php
                  $args = array(
                        'post_type' => 'post',
                        'posts_per_page' => 3,
                        'category__in' => array( 4, 17, 20 ),
                        'category__not_in' => array( 1 )
                  );

                  $postlist = new WP_Query($args);

                        if($postlist->have_posts()): 
                              while($postlist->have_posts()) : $postlist->the_post();
                              ?>

                              <article class="latest-news">
                                    <?php the_post_thumbnail( 'large' ); ?>
                                    <h3><?php the_title(); ?></h3>
                                    <div class="meta-info">
                                          <p>By <span> <?php the_author_posts_link(); ?></span></p>
                                          <p>Categories: <?php echo the_category(' ');  ?> </p>
                                          <p>Tags: <?php the_tags('', ', '); ?></p>
                                          <p><span> <?php get_the_date(); ?></span></p>
                                    </div>
                                    <?php the_excerpt(); ?>
                              </article>

                              <?php
                              endwhile;
                              wp_reset_postdata();
                        else:
                        ?>
                        <p>Nothing yet to be displayed!</p>
                              <?php endif; ?>
      </div>
    
      </section>
  </div>
 </div>
</div>
<?php get_footer(); ?>