<article>
     <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
     <?php if ( has_post_thumbnail()): ?>
     <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(array(275,275)); ?></a>
     <?php endif; ?>
     <div class="meta-info">
          <p>Posted in <?php echo get_the_date(); ?></p>
          <p>Categories <?php echo the_category(' ');  ?> </p>
          <p>Tags <?php the_tags('', ', '); ?></p>
     </div>
     <?php the_excerpt(); ?>
</article>