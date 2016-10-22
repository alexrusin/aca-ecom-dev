<?php
function aca_enqueue_scripts(){
	wp_enqueue_style( 'fancybox-style', plugins_url( 'css/fancybox.css', dirname(__FILE__) ) );
	wp_enqueue_style( 'aca-style', plugins_url( 'css/aca-style.css', dirname(__FILE__) ) );

	wp_enqueue_script( 'jquery-elevate-zoom', plugins_url( 'js/jquery.elevateZoom-3.0.8.min.js', dirname(__FILE__) ), array( 'jquery'), '20150924', true );
	wp_enqueue_script( 'jquery-fancy-box', plugins_url( 'js/jquery.fancybox.js', dirname(__FILE__) ), array( 'jquery'), '20150924', true );
	wp_enqueue_script( 'elevate-zoom', plugins_url( 'js/elevate-zoom.js', dirname(__FILE__) ), array( 'jquery','jquery-elevate-zoom'), '20150924', true );

}

add_action( 'wp_enqueue_scripts', 'aca_enqueue_scripts' );
