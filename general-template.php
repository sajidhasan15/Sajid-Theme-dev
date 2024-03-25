<?php
/*
Template Name: General Template
*/ 
?>

<?php get_header(); ?>

<!-- Here is custome Header Images -->
<img src="<?php header_image(); ?>" height="<?php get_custom_header()->height; ?>" width="<?php get_custom_header()->width; ?>"> 

<div id="content" class="site-content">
 <div id="primary" class="content-area">
  <div id="main" class="site-main">
      <div class="container">
            <div class="general-template">
                  <?php
                        if(have_posts()): 
                              while(have_posts()) : the_post();
                              ?>
                         <article>
                                   <h1><?php the_title(); ?></h1>
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
    
  </div>
 </div>
</div>
<?php get_footer(); ?>