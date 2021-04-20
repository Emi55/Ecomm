<?php
/**
 * Functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package WordPress
 * @subpackage My-website
 * @since My-website
 */

 function myportfolio_theme_support(){
 //This adds dynamic title tag support	
 add_theme_support('title-tag');
 add_theme_support('custom-logo');
 add_theme_support('post-thumbnails');
 }

 add_action('after_theme_setup','myportfolio_theme_support');



 function myportfolio_menus(){
	 $locations = array(
		 'primary' => "Desktop Primary Left Slidebar",
		 'footer' => "Footer Menus Items"
	 );
 
register_nav_menus($locations);
 }

 add_action('init', 'myportfolio_menus');


 function myportfolio_register_styles(){


    $version = wp_get_theme()->get('Version');
	wp_enqueue_style('myportfolio-style', get_template_directory_uri() . "/style.css", array('myportfolio-bootsrap'), '1.0' ,'all');
	wp_enqueue_style('myportfolio-bootsrap', "https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css", array() ,$version,'all');
	wp_enqueue_style('myportfolio-fontawesome', "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css", array(), '5.13.0' ,'all');
 }

 add_action('wp_enqueue_scripts', 'myportfolio_forstyle');


 function myportfolio_register_scipts(){

	wp_enqueue_script('myportfolio-jquery','https://code.jquery.com/jquery-3.4.1.slim.min.js', array(),'3.4.1', true);
	wp_enqueue_script('myportfolio-popper','https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js', array(),'1.16.0', true);
	wp_enqueue_script('myportfolio-bootsrap','https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js', array(),'4.4.1', true);
	wp_enqueue_script('myportfolio-main',get_template_directory_uri() . "/assets/js/main.js", array(),'1.0', true);
	
 }

 add_action('wp_enqueue_scripts', 'myportfolio_forstyle');

?> 