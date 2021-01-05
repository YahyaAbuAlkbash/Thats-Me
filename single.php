<?php get_header(); ?>
<div class="w-full flex px-4">
  <div class="container max-w-7xl mx-auto">
    <div class="grid grid-cols-1 lg:grid-cols-3 gap-16">

      <div class="col-span-2">
        <?php get_template_part('sections/section','article'); ?>
      </div>

      <div class="hidden lg:block">
        <?php if( is_active_sidebar('right-blog') ): ?>
          <?php dynamic_sidebar('right-blog'); ?>
        <?php endif; ?>
      </div>

    </div>
  </div>
</div>
<?php get_footer(); ?>
