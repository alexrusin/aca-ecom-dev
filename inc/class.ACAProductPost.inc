<?php

/* 
 * This is class for custom product page.  It extends CustomPost class
 * It takes singula, plural, array of supported fields, and menu icon.  By default
 * it supports only post title and dashicons-cart.  
 */

class ACAProductPost extends CustomPost {
			
	public function __construct($singular, $plural, $supports=array('title'), $menu_icon='dashicons-cart'){
		$this->singular = $singular;
		$this->plural = $plural;
		$this->slug = str_replace(' ', '_', strtolower($singular));
		$this->supports = $supports;
		$this->menu_icon=$menu_icon;
		parent::__construct();

		apply_filters('ht_post_change_args', $this->args);
		
		add_action( 'init', array( $this, 'register_post' ) );		
		
	}

	public function register_post(){
		register_post_type( $this->slug, $this->args );
	}

	public function get_slug(){
		return $this->slug;
	}

}

$aca_custom_post = new ACAProductPost("Product", "Products");