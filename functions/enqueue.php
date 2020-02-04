<?php
function theme_styles() {
	global $wp_scripts;

    wp_enqueue_style( 'starter_css', get_template_directory_uri() . '/assets/css/starter.css' );

    // CSS Pages
    $files = scandir( get_stylesheet_directory() . '/assets/css/pages/' );
    foreach($files as $file) {
        if (strpos($file, '.css') !== false) {
            wp_register_style( 'starter-css-pages-' . str_replace('.css', '', $file), get_stylesheet_directory_uri() . '/assets/css/pages/' . $file, array(), filemtime(get_stylesheet_directory() . '/assets/css/pages/' . $file) );
        }
    }
    
}
add_action( 'wp_enqueue_scripts', 'theme_styles');