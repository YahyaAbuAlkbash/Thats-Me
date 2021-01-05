<?php

require get_template_directory().'/functions/theme_support.php';
require get_template_directory().'/functions/enqueues.php';
require get_template_directory().'/functions/menus.php';
require get_template_directory().'/functions/sidebars.php';



wp_link_pages();

// Text Domain For Translate
$template_directory = get_template_directory();
load_theme_textdomain( 'thats-me', $template_directory . '/resources/lang' );


function thats_me_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'thats_me_content_width', 750 );
}
add_action( 'after_setup_theme', 'thats_me_content_width', 0 );
