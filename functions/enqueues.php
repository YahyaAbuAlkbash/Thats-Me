<?php

function tm_load_css(){
  wp_register_style('tailwind',get_template_directory_uri() . '/resources/css/tailwind.css', array(),false, 'all');
  wp_enqueue_style('tailwind');

  wp_register_style('comment-reply',get_template_directory_uri() . '/resources/css/comment-reply.css', array(),false, 'all');
  wp_enqueue_style('comment-reply');
  wp_enqueue_script( 'comment-reply' );

}
add_action('wp_enqueue_scripts','tm_load_css');
