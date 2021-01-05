<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="profile" href="http://gmpg.org/xfn/11" />
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
    <?php wp_head(); ?>
  </head>
  <body <?php body_class(); ?>>
    <?php wp_body_open(); ?>

      <!-- Navbar -->
      <div class="w-full flex px-4 pb-8 sm:py-12 font-sans antialiased">
        <div class="container max-w-7xl mx-auto grid grid-cols-1 sm:grid-cols-2 flex items-center ">
          <!-- Logo or Title -->
          <div class="py-5 ">
            <a href="<?php echo esc_url( home_url() ); ?>" class="text-2xl uppercase">
              <?php has_custom_logo() ? the_custom_logo() : bloginfo('name'); ?>
            </a>
          </div>
          <!-- Navbar Menu -->
          <div class="flex sm:justify-end pb-2 sm:py-5">
            <?php
              wp_nav_menu(
                array(
                  'theme_location' =>'nav-menu',
                  'container' => 'ul',
                  'menu_class'=> 'flex gap-4'
                )
              )
             ?>
          </div>
        </div>
      </div>
