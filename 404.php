<?php get_header(); ?>

<div id="content" class="site-content">
 <div id="primary" class="content-area">
  <div id="main" class="site-main">
     <div class="container">
          <div class="error-404">
               <header>
                  <h1> <?php _e('Page not found', 'sajiddev') ?> </h1>
                    <p> <?php _e('Lorem ipsum dolor sit amet consectetur adipisicing elit. Soluta iste voluptates eaque laboriosam facere iusto quidem.', 'sajiddev') ?></p>  
               </header>
               <div class="error">
                    <p><?php _e('How about you doing a search?', 'sajiddev') ?> </p>
                    <?php get_search_form(); ?>
                    <?php the_widget(
                         'WP_Widget_Recent_Posts',
                         array(
                              'title'=> __('Latest Posts', 'sajiddev'),
                              'number'=> 3
                         )
                    ); ?>
               </div>
          </div>
     </div>
  </div>
 </div>
</div>

<?php get_footer(); ?>