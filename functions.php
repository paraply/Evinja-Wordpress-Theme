<?php

if ( ! isset( $content_width ) ) {
	$content_width = 1000; // Size in pixels. If not set the JetPack tiled galleries will be too small
}

add_filter( 'use_default_gallery_style', '__return_false' ); // We do not want wordpress to style our galleries



//Setup and register support
function evinja_setup() {
    	add_theme_support( 'post-thumbnails' );

	// Register use of menu. This enables the possibility to edit menus from administration panel.
	register_nav_menus( array(
		'primary' => __( 'Primary Menu', 'evinja' ),
	) );
	
        add_theme_support( 'infinite-scroll', array( //requires wp_footer() in footer.php. Can be used with the JetPack plugin.
        'container' => 'content',
        'footer' => false, //othervise default footer will show
        ) );

}
add_action( 'after_setup_theme', 'evinja_setup' );

?>