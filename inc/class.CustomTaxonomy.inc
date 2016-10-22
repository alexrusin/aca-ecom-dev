<?php

class CustomTaxonomy{
	protected $singular;
	protected $plural;
	protected $slug;
	protected $labels;
	private $post_slug;
	public $args;

	public function __construct($singular, $plural, $post_slug, $hierarchical = true) {
	$this->singular = $singular;
	$this->plural = $plural;
	$this->post_slug = $post_slug;
	$this->slug = str_replace( ' ', '_', strtolower($singular));
    $this->labels = array(
 		'name' => $this->plural,
        'singular_name' => $this->singular,
        'search_items' => 'Search ' . $this->plural,
        'popular_items' => 'Popular ' . $this->plural,
 		'all_items' => 'All ' . $this->plural,
 		'parent_item' => null,
 		'parent_item_colon' => null,
 		'edit_item' => 'Edit ' . $this->singular,
 		'update_item' => 'Update ' . $this->singular,
 		'add_new_item' => 'Add New ' . $this->singular,
 		'new_item_name' => 'New ' . $this->singular . ' Name',
 		'separate_items_with_commas' => 'Separate ' . $this->plural . ' with commas',
 		'add_or_remove_items' => 'Add or remove ' . $this->plural,
 		'choose_from_most_used' => 'Choose from the most used ' . $this->plural,
 		'not_found' => 'No ' . $this->plural . ' found.',
 		'menu_name' => $this->plural,
 		);
	
    $this->args = array(
 		'hierarchical' => $hierarchical,
 		'labels' => $this->labels,
 		'show_ui' => true,
 		'show_admin_column' => true,
 		//'update_count_callback' => '_update_post_term_count',
 		'query_var' => true,
 		'rewrite' => array( 'slug' => $this->slug ),
		 );
    
    apply_filters('ht_tax_change_args', $this->args);
	
	add_action( 'init', array($this, 'register_custom_tax') );
	}

	public function register_custom_tax(){
		register_taxonomy( $this->slug, $this->post_slug, $this->args );
 	}
	
}