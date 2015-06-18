<?php

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