<?php 
if(function_exists("register_field_group"))
{
	register_field_group(array (
		'id' => 'acf_product-fields',
		'title' => 'Product Fields',
		'fields' => array (
			array (
				'key' => 'field_57e54f90a82fe',
				'label' => 'Product Description',
				'name' => 'product_description',
				'type' => 'wysiwyg',
				'instructions' => 'Please describe your product',
				'default_value' => '',
				'toolbar' => 'full',
				'media_upload' => 'yes',
			),
			array (
				'key' => 'field_57e54fc6a82ff',
				'label' => 'Product Price',
				'name' => 'product_price',
				'type' => 'number',
				'instructions' => 'Enter your product price',
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'min' => '',
				'max' => '',
				'step' => '',
			),
			array (
				'key' => 'field_57e8015cecd9f',
				'label' => 'Discount Price',
				'name' => 'discount_price',
				'type' => 'number',
				'instructions' => 'Enter product discount price',
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'min' => '',
				'max' => '',
				'step' => '',
			),
			array (
				'key' => 'field_57e54ff0a8300',
				'label' => 'Shopping Cart Short Code',
				'name' => 'shopping_cart_short_code',
				'type' => 'text',
				'instructions' => 'Please enter your shopping cart short code',
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => '',
			),
			array (
				'key' => 'field_57e55019a8301',
				'label' => 'Product Image 1',
				'name' => 'product_image_1',
				'type' => 'image',
				'instructions' => 'Please upload product image',
				'required' => 1,
				'save_format' => 'object',
				'preview_size' => 'thumbnail',
				'library' => 'all',
			),
			array (
				'key' => 'field_57e5503fa8302',
				'label' => 'Product Image 2',
				'name' => 'product_image_2',
				'type' => 'image',
				'instructions' => 'Please upload product image',
				'save_format' => 'object',
				'preview_size' => 'thumbnail',
				'library' => 'all',
			),
			array (
				'key' => 'field_57e55115e3d79',
				'label' => 'Product Image 3',
				'name' => 'product_image_3',
				'type' => 'image',
				'instructions' => 'Please upload product image',
				'save_format' => 'object',
				'preview_size' => 'thumbnail',
				'library' => 'all',
			),
			array (
				'key' => 'field_57e55114e3d78',
				'label' => 'Product Image 4',
				'name' => 'product_image_4',
				'type' => 'image',
				'instructions' => 'Please upload product image',
				'save_format' => 'object',
				'preview_size' => 'thumbnail',
				'library' => 'all',
			),
		),
		'location' => array (
			array (
				array (
					'param' => 'post_type',
					'operator' => '==',
					'value' => 'product',
					'order_no' => 0,
					'group_no' => 0,
				),
			),
		),
		'options' => array (
			'position' => 'normal',
			'layout' => 'no_box',
			'hide_on_screen' => array (
			),
		),
		'menu_order' => 0,
	));
}

if(function_exists("register_field_group"))
{
	register_field_group(array (
		'id' => 'acf_product-category-field',
		'title' => 'Product Category Field',
		'fields' => array (
			array (
				'key' => 'field_57e551d998d7f',
				'label' => 'Category Image',
				'name' => 'category_image',
				'type' => 'image',
				'instructions' => 'Please upload category image',
				'save_format' => 'object',
				'preview_size' => 'thumbnail',
				'library' => 'all',
			),
		),
		'location' => array (
			array (
				array (
					'param' => 'ef_taxonomy',
					'operator' => '==',
					'value' => 'product_category',
					'order_no' => 0,
					'group_no' => 0,
				),
			),
		),
		'options' => array (
			'position' => 'normal',
			'layout' => 'no_box',
			'hide_on_screen' => array (
			),
		),
		'menu_order' => 0,
	));
}

