<?php
register_nav_menus(
  array(
    'nav-menu' => 'Navbar Menu (Header)',
  )
);


function add_menuclass($ulclass) {
   return preg_replace('/<a /', '<a class="hover:underline"', $ulclass);
}
add_filter('wp_nav_menu','add_menuclass');
