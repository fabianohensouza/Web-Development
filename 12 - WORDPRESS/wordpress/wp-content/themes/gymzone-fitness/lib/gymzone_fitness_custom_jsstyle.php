<?php   
/**
 * @package gymzone-fitness
 */
 ?>
 <?php function gymzone_fitness_style_js()
 {
 	wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/lib/bootstrap/css/bootstrap.css');
	wp_enqueue_style( 'font-awesome', get_template_directory_uri() .'/css/font-awesome.css');
	wp_enqueue_style( 'gymzone-fitness-basic-style', get_stylesheet_uri() );
	wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/lib/bootstrap/js/bootstrap.js', array('jquery'));	
	wp_enqueue_script( 'gymzone-fitness-toggle-jquery', get_template_directory_uri() . '/js/gymzone_fitness-toggle.js', array('jquery'));	
 }
 add_action( 'wp_enqueue_scripts', 'gymzone_fitness_style_js' );
?>