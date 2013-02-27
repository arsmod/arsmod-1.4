<?php
	
	// Add RSS links to <head> section
	automatic_feed_links();
	
	// Load jQuery
	if ( !is_admin() ) {
	
	   	wp_deregister_script('jquery');
	   	wp_register_script('jquery', ("http://ajax.googleapis.com/ajax/libs/jquery/1.8/jquery.min.js"), false);
	   	wp_enqueue_script('jquery');
	   	
		wp_register_script('library', ("http://library.js.code.arsmod.com/1.0/library.js"), false);
		wp_enqueue_script('library');

		wp_register_script('modernizr', get_bloginfo('template_directory') . ("/js/modernizr-2.0.6.min.js"), false);
		wp_enqueue_script('modernizr');
	   
		wp_register_script('myscript', get_bloginfo('template_directory') . "/js/js.js");
		wp_enqueue_script('myscript');
	   
	}
	
	// Clean up the <head>
	function removeHeadLinks() {
    	remove_action('wp_head', 'rsd_link');
    	remove_action('wp_head', 'wlwmanifest_link');
    }
    add_action('init', 'removeHeadLinks');
    remove_action('wp_head', 'wp_generator');
    
	// Declare sidebar widget zone
    if (function_exists('register_sidebar')) {
    	register_sidebar(array(
    		'name' => 'Sidebar Widgets',
    		'id'   => 'sidebar-widgets',
    		'description'   => 'These are widgets for the sidebar.',
    		'before_widget' => '<div id="%1$s" class="widget %2$s">',
    		'after_widget'  => '</div>',
    		'before_title'  => '<h2>',
    		'after_title'   => '</h2>'
    	));
    }

?>