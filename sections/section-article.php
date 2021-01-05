<?php if( have_posts() ) : while( have_posts() ): the_post(); ?>

  <?php the_post_thumbnail('large', array('class' => 'w-full mb-1')); ?>
  <h1><?php the_title();?></h1>
  <small>by <?php  echo get_the_author_meta('display_name'); ?> - <?php  echo get_the_date(); ?></small>
  <article  class="my-8" id="post-<?php the_ID(); ?>" <?php post_class(); ?> ><?php the_content(); ?></article>
  <?php echo the_tags(); ?>
 <?php endwhile; else: endif;?>


<?php comments_template(); ?>
