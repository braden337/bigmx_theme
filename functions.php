<?php 


function villo_resources() {

	wp_enqueue_style( "style", get_stylesheet_uri() );
      //wp_enqueue_script(  "jquery"  );

}



$locations = array('header' => __( 'Header Menu' ), 'footer' => __( 'Footer Menu'));

register_nav_menus( $locations );



// Add featured image support

function villo_setup()  {
	add_theme_support('post-thumbnails');
}

add_action( "wp_enqueue_scripts", "villo_resources" );

add_action('after_setup_theme', 'villo_setup' );




// function wp_mediaelement_scripts(){
// 		wp_enqueue_style( 'wp-mediaelement' );
// 		wp_enqueue_script( 'wp-mediaelement' );
// }
// add_action( 'wp_enqueue_scripts', 'wp_mediaelement_scripts' );





?>