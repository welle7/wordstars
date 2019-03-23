<?php 
function meine_navigation() {
	register_nav_menu('header-nav',__( 'Header Navigation' ));
  }
  add_action( 'init', 'meine_navigation' );
  if ( function_exists('register_sidebar') )
  register_sidebar();
  
  function jquery_init() {
    if( !is_admin()){
		wp_deregister_script('jquery');
		wp_register_script('jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/1.4.4/jquery.min.js', false, '1.4.4', true);
		wp_enqueue_script('jquery');
		wp_enqueue_script( 'wordstars', get_bloginfo( 'template_directory') . '/assets/js/slimbox2.js', array( 'jquery'), '01', true );
		}
}
add_action('init', 'jquery_init');

?>