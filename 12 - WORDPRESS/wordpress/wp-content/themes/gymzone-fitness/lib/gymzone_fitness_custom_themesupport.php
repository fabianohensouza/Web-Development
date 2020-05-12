<?php   
/**
 * @package gymzone-fitness
 */
 ?>
 <?php
 if ( ! function_exists( 'gymzone_fitness_setup' ) ) :
function gymzone_fitness_setup() {   
	add_theme_support( 'automatic-feed-links' );
	add_theme_support('woocommerce');
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'custom-header' );
	add_theme_support( 'title-tag' );
	register_nav_menus( array(
		'primary' => esc_html__( 'Primary Menu', 'gymzone-fitness' ),
		'footer' => esc_html__( 'Footer Menu', 'gymzone-fitness' ),
	) );
	add_theme_support( 'custom-background', array(
		'default-color' => 'ffffff'
	) );	

	$defaults = array(
			'default-image'          => get_template_directory_uri() .'/images/slider1.jpg',
			'default-text-color' => 'ffffff',
			'width'                  => 1400,
			'height'                 => 500,
			'uploads'                => true,
			'wp-head-callback'   => 'gymzone_fitness_header_style',			
		);
	add_theme_support( 'custom-header', $defaults );
	if ( ! isset( $content_width ) ) $content_width = 900;
} 
endif; // gymzone_fitness_setup
add_action( 'after_setup_theme', 'gymzone_fitness_setup' );
?>
<?php
function gymzone_fitness_header_style() {
	$gymzone_fitness_header_text_color = get_header_textcolor();
	if ( get_theme_support( 'custom-header', 'default-text-color' ) === $gymzone_fitness_header_text_color ) {
		return;
	}
	echo '<style id="gymzone-fitness-custom-header-styles" type="text/css">';
	if ( 'blank' !== $gymzone_fitness_header_text_color ) 
	{
		echo '.logotxt, .logotxt a
			 {
				color: #'.esc_attr( $gymzone_fitness_header_text_color ).'
			}';
	}	
	echo '</style>';	
}