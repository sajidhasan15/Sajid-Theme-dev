<?php get_header(); ?>

<div id="primary">
     <div id="main">
          <div class="container">

          <h1>Search results for: <?php echo get_search_query(); ?></h1>
               <?php 

               get_search_form();


               while(have_posts() ): 
                    the_post();
                    get_template_part('template-parts/content', 'search');
               endwhile;
               ?>
          </div>
     </div>
</div>

<?php get_footer(); ?>