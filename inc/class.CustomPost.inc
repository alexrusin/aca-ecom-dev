<?php

/*This is a parent class for bilding custom posts */ 

abstract class CustomPost {
	protected $singular;
	protected $plural;
	protected $slug; 
	protected $supports;	
	protected $menu_icon; 
	protected $labels;
        public $args;
    function __construct(){
   	$this->labels = array( 
 		'name' 			=> $this->plural, 
 		'singular_name' 	=> $this->singular,
 		'menu_name'		=> $this->plural,
 		'name_admin_bar' => $this->singular, 
 		'add_new' 		=> 'Add New', 
 		'add_new_item'  	=> 'Add New ' . $this->singular, 
 		'edit'		        => 'Edit', 
 		'edit_item'	        => 'Edit ' . $this->singular, 
 		'new_item'	        => 'New ' . $this->singular, 
 		'view' 			=> 'View ' . $this->singular, 
 		'view_item' 		=> 'View ' . $this->singular,
 		'all_items'			=> 'All ' . $this->plural, 
 		'search_items'   	=> 'Search ' . $this->plural, 
 		'parent_item_colon' => 'Parent ' . $this->plural.':', 
 		'not_found' 		=> 'No ' . $this->plural .' found', 
 		'not_found_in_trash' 	=> 'No ' . $this->plural .' in Trash' 
 		); 

   	$this->args = array( 
 		    'labels'              => $this->labels, 
 	        'public'              => true, 
 	        'publicly_queryable'  => true, 
 	        'exclude_from_search' => false, 
 	        'show_in_nav_menus'   => true, 
 	        'show_ui'             => true, 
 	        'show_in_menu'        => true, 
 	        'show_in_admin_bar'   => true, 
 	        'menu_position'       => 5, 
 	        'menu_icon'           => $this->menu_icon, 
 	        'can_export'          => true, 
 	        'delete_with_user'    => false, 
 	        'hierarchical'        => false, 
 	        'has_archive'         => true, 
 	        'query_var'           => true, 
 	        'capability_type'     => 'post', 
 	        'map_meta_cap'        => true, 
 	        // 'capabilities' => array(), 
 	        'rewrite'             => array(  
 	        	'slug' => $this->slug, 
 	        	'with_front' => true, 
 	        	'pages' => true, 
 	        	'feeds' => true, 
  
 	        ), 
 	        'supports' => $this->supports

 	       ); 

    }
    
    abstract function get_slug();

}