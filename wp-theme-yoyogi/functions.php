<?php
add_theme_support( 'post-thumbnails', array( 'post', 'page' ) );

function custom_theme_assets() {
	wp_enqueue_style( 'style', get_stylesheet_uri() );
}
 