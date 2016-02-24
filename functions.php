<?php
	add_theme_support( 'title-tag' );
	function register_my_menu() {
		register_nav_menu('main-menu',__( 'Main Menu' ));
	}
	add_action( 'init', 'register_my_menu' );
	
	xvilo_get_header();