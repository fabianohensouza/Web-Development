<?php   
/**
 * @package gymzone-fitness
 */
 ?>
 <?php
function gymzone_fitness_widgets_init() { 	
	
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'gymzone-fitness' ),
		'description'   => esc_html__( 'Appears on sidebar', 'gymzone-fitness' ),
		'id'            => 'sidebar-1',
		'before_widget' => '',		
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3><aside id="" class="widget">',
		'after_widget'  => '</aside>',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'Footer 1', 'gymzone-fitness' ),
		'description'   => esc_html__( 'Appears on footer', 'gymzone-fitness' ),
		'id'            => 'footer-1',
		'before_widget' => '',		
		'before_title'  => '<h1 class="widget-title">',
		'after_title'   => '</h1><aside id="" class="widget">',
		'after_widget'  => '</aside>',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'Footer 2', 'gymzone-fitness' ),
		'description'   => esc_html__( 'Appears on footer', 'gymzone-fitness' ),
		'id'            => 'footer-2',
		'before_widget' => '',		
		'before_title'  => '<h1 class="widget-title">',
		'after_title'   => '</h1><aside id="" class="widget">',
		'after_widget'  => '</aside>',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'Footer 3', 'gymzone-fitness' ),
		'description'   => esc_html__( 'Appears on footer', 'gymzone-fitness' ),
		'id'            => 'footer-3',
		'before_widget' => '',		
		'before_title'  => '<h1 class="widget-title">',
		'after_title'   => '</h1><aside id="" class="widget">',
		'after_widget'  => '</aside>',
	) );		
}
add_action( 'widgets_init', 'gymzone_fitness_widgets_init' );
?>