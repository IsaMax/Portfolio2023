<?php

add_theme_support( 'post-thumbnails' );

add_theme_support( 'title-tag' );

register_nav_menus( array(
	'header' => 'Menu Header',
	'footer' => 'Menu Footer',
) );


// Bloque le style de gutenberg en front si non utilisé
function smartwp_remove_wp_block_library_css(){
	wp_dequeue_style( 'wp-block-library' );
	wp_dequeue_style( 'wp-block-library-theme' );
} 

add_action( 'wp_enqueue_scripts', 'smartwp_remove_wp_block_library_css', 100 );