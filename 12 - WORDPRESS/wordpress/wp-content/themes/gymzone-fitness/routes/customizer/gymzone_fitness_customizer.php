<?php 
add_action( 'customize_register', 'gymzone_fitness_customize_register_custom_controls', 9 );
function gymzone_fitness_customize_register_custom_controls( $wp_customize ) {
    get_template_part( 'routes/proupgrade/gymzone_fitness','sectionpro');
}
function gymzone_fitness_customize_controls_js() {
    $theme = wp_get_theme();
    wp_enqueue_script( 'gymzone-fitness-customizer-section-pro-jquery', get_template_directory_uri() . '/routes/proupgrade/gymzone_fitness_customize-controls.js', array( 'customize-controls' ), $theme->get( 'Version' ), true );
    wp_enqueue_style( 'gymzone-fitness-customizer-section-pro', get_template_directory_uri() . '/routes/proupgrade/gymzone_fitness_customize-controls.css', $theme->get( 'Version' ) );
}
add_action( 'customize_controls_enqueue_scripts', 'gymzone_fitness_customize_controls_js' );
?>
<?php
function gymzone_fitness_enqueue_comments_reply() {
if( get_option( 'thread_comments' ) ) {
wp_enqueue_script( 'comment-reply' );
}
}
add_action( 'comment_form_before', 'gymzone_fitness_enqueue_comments_reply' );
?>
<?php 
if ( ! function_exists( 'gymzone_fitness_sanitize_page' ) ) :
    function gymzone_fitness_sanitize_page( $page_id, $setting ) {
        // Ensure $input is an absolute integer.
        $page_id = absint( $page_id );
        // If $page_id is an ID of a published page, return it; otherwise, return the default.
        return ( 'publish' === get_post_status( $page_id ) ? $page_id : $setting->default );
    }

endif;
function gymzone_fitness_customize_register($wp_customize){

    // Register custom section types.
    $wp_customize->register_section_type( 'gymzone_fitness_Customize_Section_Pro' );

    // Register sections.
    $wp_customize->add_section( new gymzone_fitness_Customize_Section_Pro(
        $wp_customize,
        'theme_go_pro',
        array(
            'priority' => 1,
            'title'    => esc_html__( 'Gymzone Fitness', 'gymzone-fitness' ),
            'pro_text' => esc_html__( 'Upgrade To Pro', 'gymzone-fitness' ),
            'pro_url'  => 'https://themestulip.com/themes/gymzone-fitness-wordpress-theme/',
        )
    ) );
    $wp_customize->add_section('gymzone_fitness_header', array(
        'title'    => esc_html__('Gymzone Fitness Header Phone and Address', 'gymzone-fitness'),
        'description' => '',
        'priority' => 30,
    ));
     $wp_customize->add_section('gymzone_fitness_social', array(
        'title'    => esc_html__('Gymzone Fitness Social Link', 'gymzone-fitness'),
        'description' => '',
        'priority' => 35,
    ));


    //  =============================
    //  = Text Input phone number                =
    //  =============================
    $wp_customize->add_setting('gymzone_fitness_phone', array(
        'default'        => '',
        'sanitize_callback' => 'sanitize_text_field'
    ));
 
    $wp_customize->add_control('gymzone_fitness_phone', array(
        'label'      => esc_html__('Phone Number', 'gymzone-fitness'),
        'section'    => 'gymzone_fitness_header',
        'setting'   => 'gymzone_fitness_phone',
        'type'    => 'number'
    ));
    
    //  =============================
    //  = Text Input Email                =
    //  =============================
    $wp_customize->add_setting('gymzone_fitness_address', array(
        'default'        => '',
        'sanitize_callback' => 'sanitize_email'       
    ));
 
    $wp_customize->add_control('gymzone_fitness_address', array(
        'label'      => esc_html__('Email Address', 'gymzone-fitness'),
        'section'    => 'gymzone_fitness_header',
        'setting'   => 'gymzone_fitness_address',
        'type'    => 'email'
    ));

    //  =============================
    //  = Text Input facebook                =
    //  =============================
    $wp_customize->add_setting('gymzone_fitness_fb', array(
        'default'        => '',
        'sanitize_callback' => 'esc_url_raw'
    ));
 
    $wp_customize->add_control('gymzone_fitness_fb', array(
        'label'      => esc_html__('Facebook', 'gymzone-fitness'),
        'section'    => 'gymzone_fitness_social',
        'setting'   => 'gymzone_fitness_fb',
    ));
    //  =============================
    //  = Text Input Twitter                =
    //  =============================
    $wp_customize->add_setting('gymzone_fitness_twitter', array(
        'default'        => '',
        'sanitize_callback' => 'esc_url_raw'
    ));
 
    $wp_customize->add_control('gymzone_fitness_twitter', array(
        'label'      => esc_html__('Twitter', 'gymzone-fitness'),
        'section'    => 'gymzone_fitness_social',
        'setting'   => 'gymzone_fitness_twitter',
    ));
    //  =============================
    //  = Text Input googleplus                =
    //  =============================
    $wp_customize->add_setting('gymzone_fitness_glplus', array(
        'default'        => '',
        'sanitize_callback' => 'esc_url_raw'
    ));
 
    $wp_customize->add_control('gymzone_fitness_glplus', array(
        'label'      => esc_html__('Google Plus', 'gymzone-fitness'),
        'section'    => 'gymzone_fitness_social',
        'setting'   => 'gymzone_fitness_glplus',
    ));
    //  =============================
    //  = Text Input linkedin                =
    //  =============================
    $wp_customize->add_setting('gymzone_fitness_in', array(
        'default'        => '',
        'sanitize_callback' => 'esc_url_raw'
    ));
 
    $wp_customize->add_control('gymzone_fitness_in', array(
        'label'      => esc_html__('Linkedin', 'gymzone-fitness'),
        'section'    => 'gymzone_fitness_social',
        'setting'   => 'gymzone_fitness_in',
    ));

    //  =============================
    //  = slider section              =
    //  =============================
    $wp_customize->add_section('business_multi_lite_banner', array(
        'title'    => esc_html__('Gymzone Fitness Home Banner Text', 'gymzone-fitness'),
        'description' => esc_html__('add home banner text here.','gymzone-fitness'),
        'priority' => 36,
    ));
   
// Banner heading Text
    $wp_customize->add_setting('banner_heading',array(
            'default'   => null,
            'sanitize_callback' => 'sanitize_text_field'    
    ));
    
    $wp_customize->add_control('banner_heading',array( 
            'type'  => 'text',
            'label' => esc_html__('Add Banner heading here','gymzone-fitness'),
            'section'   => 'business_multi_lite_banner',
            'setting'   => 'banner_heading'
    )); // Banner heading Text

    // Banner heading Text
    $wp_customize->add_setting('banner_sub_heading',array(
            'default'   => null,
            'sanitize_callback' => 'sanitize_text_field'    
    ));
    
    $wp_customize->add_control('banner_sub_heading',array( 
            'type'  => 'text',
            'label' => esc_html__('Add Banner sub heading here','gymzone-fitness'),
            'section'   => 'business_multi_lite_banner',
            'setting'   => 'banner_sub_heading'
    )); // Banner heading Text

  //  =============================
    //  = Footer              =
    //  =============================

    $wp_customize->add_section('gymzone_fitness_footer', array(
        'title'    => esc_html__('Gymzone Fitness Footer', 'gymzone-fitness'),
        'description' => '',
        'priority' => 37,
    ));

	// Footer design and developed
	 $wp_customize->add_setting('gymzone_fitness_design', array(
        'default'        => '',
		'sanitize_callback' => 'sanitize_textarea_field'
    ));
 
    $wp_customize->add_control('gymzone_fitness_design', array(
        'label'      => esc_html__('Design and developed', 'gymzone-fitness'),
        'section'    => 'gymzone_fitness_footer',
        'setting'   => 'gymzone_fitness_design',
		'type'	   =>'textarea'
    ));
	// Footer copyright
	 $wp_customize->add_setting('gymzone_fitness_copyright', array(
        'default'        => '',
		'sanitize_callback' => 'sanitize_textarea_field'       
    ));
 
    $wp_customize->add_control('gymzone_fitness_copyright', array(
        'label'      => esc_html__('Copyright', 'gymzone-fitness'),
        'section'    => 'gymzone_fitness_footer',
        'setting'   => 'gymzone_fitness_copyright',
		'type'	   =>'textarea'
    ));	
}
add_action('customize_register', 'gymzone_fitness_customize_register');
?>