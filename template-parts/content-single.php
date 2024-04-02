<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
     <header>
          <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>  
          <div class="meta-info">
                    <p>By <span> <?php the_author_posts_link(); ?></span></p>
                    <?php if( has_category()): ?>
                         <p>Categories <?php echo the_category(' ');  ?> </p>
                    <?php endif; ?>
                    <?php if( has_tag()): ?>
                         <p>Tags <?php the_tags('', ', '); ?></p>
                    <?php endif; ?>
                    <p><span> <?php get_the_date(); ?></span></p>
               </div>
     </header>                      
     <div class="content">
          <?php the_content(); ?>
     </div>  
</article>