<?php
	add_theme_support( 'title-tag' );
	function register_my_menu() {
		register_nav_menu('main-menu',__( 'Main Menu' ));
	}
	add_action( 'init', 'register_my_menu' );
	
	function xvilo_get_header(){
		global $post;
		$key = 'header_slider';
		$themeta = get_post_meta($post->ID, $key, TRUE);
		if($themeta != '') {
			putRevSlider($themeta);
		}
	}