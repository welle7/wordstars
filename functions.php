<?php 
function meine_navigation() {
	register_nav_menu('header-nav',__( 'Header Navigation' ));
  }
  add_action( 'init', 'meine_navigation' );
?>