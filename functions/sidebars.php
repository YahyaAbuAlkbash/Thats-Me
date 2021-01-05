<?php

//Sidebars
function thats_me_sidebars(){

  register_sidebar(
    array(
      'name' => __( 'Right of Blog','thats-me'),
      'id' => 'right-blog',
      'before_title' => '<h3 class="font-extralight mx-1 my-1">',
      'after_title' => '</h3>',
      'before_widget' =>'<div class="mb-4">',
      'after_widget' =>'</div>',
    )
  );



    register_sidebar(
      array(
        'name' => __( 'Footer Left','thats-me'),
        'id' => 'footer-left',
        'before_title' => '<h4 class="widget_title">',
        'after_title' => '</h4><hr>',
        'before_widget' =>'<div class="mb-4">',
        'after_widget' =>'</div>',
      )
    );

    register_sidebar(
      array(
        'name' => __( 'Footer Center','thats-me'),
        'id' => 'footer-center',
        'before_title' => '<h4 class="widget_title">',
        'after_title' => '</h4><hr>',
        'before_widget' =>'<div class="mb-4">',
        'after_widget' =>'</div>',
      )
    );

    register_sidebar(
      array(
        'name' => __( 'Footer Right','thats-me'),
        'id' => 'footer-right',
        'before_title' => '<h4 class="widget_title">',
        'after_title' => '</h4><hr>',
        'before_widget' =>'<div class="mb-4">',
        'after_widget' =>'</div>',
      )
    );
}
add_action('widgets_init','thats_me_sidebars');
// End Sidebars
