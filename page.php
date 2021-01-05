<div class="min-h-screen">

  <?php get_header(); ?>
  
  <div class="w-full flex px-4">
    <article class="container max-w-7xl mx-auto">
      <?php if( have_posts() ) : while( have_posts() ): the_post(); ?>
        <?php the_content(); ?>
      <?php endwhile; else: endif; ?>
    </article>
  </div>

</div>

<?php get_footer(); ?>
