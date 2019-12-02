<?php
function ja_remove_hentry( $class ) {
	$class = array_diff( $class, array( 'hentry' ) );	
	return $class;
}
add_filter( 'post_class', 'ja_remove_hentry' );

add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );
// End child theme import

// Begin custom image size for Blog Module
add_filter( 'et_pb_blog_image_height', 'blog_size_h' );
add_filter( 'et_pb_blog_image_width', 'blog_size_w' );

// Begin custom image size for Portfolio Module
add_filter( 'et_pb_portfolio_image_height', 'portfolio_size_h' );
add_filter( 'et_pb_portfolio_image_width', 'portfolio_size_w' );

function portfolio_size_h($height) {
	return '225';
}

function portfolio_size_w($width) {
	return '297';
}

add_image_size( 'custom-portfolio-size', 225, 297 );
// End custom image size for Portfolio Module
?>
