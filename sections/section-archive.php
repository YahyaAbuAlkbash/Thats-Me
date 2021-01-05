<?php if( have_posts() ) : while( have_posts() ): the_post(); ?>
    <div class="mb-8">

      <a href="<?php the_permalink(); ?>">
        <?php if( has_post_thumbnail() ) : ?>
          <?php the_post_thumbnail('large', array('class' => 'w-full mb-1')); ?>
        <?php else : ?>
          <img src="<?php echo  esc_url( home_url() ).'/wp-content/themes/thats-me/resources/blog_img.jpg'; ?>" class="w-full mb-1 wp-post-image" alt="">
        <?php endif ?>
      </a>

      <a class="hover:underline" href="<?php the_permalink(); ?>"><h3><?php the_title(); ?></h3></a>
      <p class="py-1"><?php _e( 'by','thats-me') ?> <?php  echo get_the_author_meta('display_name'); ?> - <?php  echo get_the_date(); ?></p>
      <?php
        foreach (get_the_category() as $cat) {
           echo "<a class='text-blue-700 hover:underline' href='".get_tag_link($cat->term_id)."'>". $cat->name ."</a> ";
        }
      ?>
    </div>
<?php endwhile; else: endif; ?>
