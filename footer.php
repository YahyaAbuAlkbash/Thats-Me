<footer>
  <div class="bg-gray-200 py-8 w-full px-4">
    <div class="container max-w-7xl mx-auto">
      <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-16">
        <div>
          <?php if( is_active_sidebar('footer-left') ): ?>
            <?php dynamic_sidebar('footer-left'); ?>
          <?php endif; ?>
        </div>
        <div>
          <?php if( is_active_sidebar('footer-center') ): ?>
            <?php dynamic_sidebar('footer-center'); ?>
          <?php endif; ?>
        </div>
        <div>
          <?php if( is_active_sidebar('footer-right') ): ?>
            <?php dynamic_sidebar('footer-right'); ?>
          <?php endif; ?>
        </div>
      </div>
    </div>
  </div>
  <div class="bg-gray-700 p-4 text-gray-100">
    <div class="container max-w-7xl mx-auto text-center">
      <a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php bloginfo( 'name' ); ?></a> - &copy; <?php echo date('Y'); ?>
    </div>
  </div>
</footer>
<?php wp_footer(); ?>
</body>
</html>
