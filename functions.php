<?php 

add_theme_support( 'post-thumbnails' );

function sloven_scripts(){
    //css file 
wp_enqueue_style('icon-file',get_template_directory_uri()."/assets/css/themify-icons.css",array(),'1.5','all');
wp_enqueue_style('flaticon-file',get_template_directory_uri()."/assets/css/flaticon.css",array(),'1.5','all');
wp_enqueue_style('bootstrap-file',get_template_directory_uri()."/assets/css/bootstrap.min.css",array(),'1.5','all');
wp_enqueue_style('animate-file',get_template_directory_uri()."/assets/css/animate.css",array(),'1.5','all');
wp_enqueue_style('carcousel-file',get_template_directory_uri()."/assets/css/owl.carousel.css",array(),'1.5','all');
wp_enqueue_style('theme-file',get_template_directory_uri()."/assets/css/owl.theme.css",array(),'1.5','all');
wp_enqueue_style('slick-file',get_template_directory_uri()."/assets/css/slick.css",array(),'1.5','all');
wp_enqueue_style('stheme.css-file',get_template_directory_uri()."/assets/css/slick-theme.css",array(),'1.5','all');
wp_enqueue_style('swiper-file',get_template_directory_uri()."/assets/css/swiper.min.css",array(),'1.5','all');
wp_enqueue_style('transitons-file',get_template_directory_uri()."/assets/css/owl.transitions.css",array(),'1.5','all');
wp_enqueue_style('fancybox-file',get_template_directory_uri()."/assets/css/jquery.fancybox.css",array(),'1.5','all');
wp_enqueue_style('bxslider-file',get_template_directory_uri()."/assets/css/jquery.bxslider.min.css",array(),'1.5','all');
wp_enqueue_style('default-file',get_template_directory_uri()."/assets/css/odometer-theme-default.css",array(),'1.5','all');
wp_enqueue_style('style-file',get_template_directory_uri()."/assets/css/style.css",array(),'1.5','all');
wp_enqueue_style('responsive-file',get_template_directory_uri()."assets/css/responsive.css",array(),'1.5','all');


//javascript 

wp_enqueue_script('assets/js/jquery.min.js',get_template_directory_uri().'/assets/js/jquery.min.js',true);
wp_enqueue_script('assets/js/bootstrap.min.js',get_template_directory_uri().'/assets/js/bootstrap.min.js',true);
wp_enqueue_script('assets/js/jquery-plugin-collection.js',get_template_directory_uri().'/assets/js/jquery-plugin-collection.js',true);
wp_enqueue_script('assets/js/owl.carousel2.thumbs.min.js',get_template_directory_uri().'/assets/js/owl.carousel2.thumbs.min.js',true);
wp_enqueue_script('assets/js/script.js',get_template_directory_uri().'/assets/js/script.js',array(),true);
   

 // attach with action hook respond.min.js
} 
add_action("wp_enqueue_scripts","sloven_scripts");


   function custom_add_menus()
   {
    add_theme_support('menus');
  
    register_nav_menus(array(
      'header' => 'header menu',
      'footer' => 'footer menu'
    ));
   } 
   add_action('init','custom_add_menus',0);




   
   function sloven_customize_register( $wp_customize ) {

    /*
	//////////////////////////////
	/////// Natta Theme Color
	//////////////////////////////
	*/
	
    $wp_customize->add_section('themecolor', array(
        "title" => __( 'Theme Color', 'natta' ),
		"priority" => 30,
    ));

    // Add setting for Theme Color (ORANGE)
	$wp_customize->add_setting('sloven_theme_color_orange', array(
		'default'           => __( '', 'natta' )
   ));
   
   // Add control for Theme Color (ORANGE)
   $wp_customize->add_control( new WP_Customize_Color_Control(
	   $wp_customize,
	   'sloven_theme_color_orange',
		   array(
			   'label'    => __( 'Select theme color 1', 'natta' ),
			   'section'  => 'themecolor',
			   'settings' => 'sloven_theme_color_orange',
		   )
	));

	// Add setting for Theme Color (GREEN)
	$wp_customize->add_setting('sloven_theme_color_green', array(
		'default'           => __( '', 'natta' )
   ));
   
   // Add control for Theme Color (GREEN)
   $wp_customize->add_control( new WP_Customize_Color_Control(
	   $wp_customize,
	   'sloven_theme_color_green',
		   array(
			   'label'    => __( 'Select theme color 2', 'natta' ),
			   'section'  => 'themecolor',
			   'settings' => 'sloven_theme_color_green',
		   )
	));

	/*
	//////////////////////////////
	/////// sloven Blog
	//////////////////////////////
	*/
	
    $wp_customize->add_section('sloven-blog', array(
        "title" =>__( 'Blog', 'sloven' ),
		"priority" => 30,
		'sanitize_callback' => 'natta_sanitize_checkbox',
	));
	
	// Add setting for Blog Page (Title)
	$wp_customize->add_setting( 'sloven_blog_title', array(
		'capability' => 'edit_theme_options',
		'sanitize_callback' => 'sanitize_text_field',
	));
	  
	// Add control for Blog Page (Title)
	$wp_customize->add_control( 'sloven_blog_title', array(
		'type' => 'text',
		'section' => 'sloven-blog', 
		'label' => __( 'Title' ),
	));

    // Add setting for Blog Page (Recent Post)
	$wp_customize->add_setting('natta_blog_recent', array(
		'capability' => 'edit_theme_options',
   ));
   
    // Add control for Blog Page (Recent Post)
    $wp_customize->add_control( 'natta_blog_recent', array(
		'type' => 'checkbox',
		'section' => 'natta-blog',
		'label' => __( 'Recent Post' ),
		'description' => __( 'Show recent post on post listing page.' ),
	));

	/*
	/////////////////////////
	/////// Natta Contact
	/////////////////////////
	*/

	$wp_customize->add_panel('Awesome_contact_details',array(
		'title'=>'Aweosme Contact Details',
		'description'=> 'Panel to save Natta Contact Details.',
		'priority'=> 30,
	));


	/* Location Sections */
	$wp_customize->add_section('Awesome_address', array(
        "title" => __( 'Location Details', 'natta' ),
		"priority" => 30,
		'panel'=>'Awesome_contact_details',
	));
	
	$wp_customize->add_setting( 'Awesome_address_field', array(
		'capability' => 'edit_theme_options',
		'default' => 'Gandhinagar,pin:380002',
		'sanitize_callback' => 'sanitize_text_field',
	));
	  
	$wp_customize->add_control( 'Awesome_address_field', array(
		'type' => 'textarea',
		'section' => 'Awesome_address', 
		'label' => __( 'Gandhinagar,pin:380002' ),
	));


	/* Phone Sections */
	$wp_customize->add_section('natta_phone', array(
        "title" => __( 'Contact Details', 'natta' ),
		"priority" => 30,
		'panel'=>'natta_contact_details',
	));

	//Checkbox for Header
	$wp_customize->add_setting('show_phone_on_header', array(
		'default'    => 0
	));
	
	$wp_customize->add_control(
		new WP_Customize_Control(
			$wp_customize,
			'show_phone_on_header',
			array(
				'label'     => __('Show on header', 'natta'),
				'section'   => 'natta_phone',
				'settings'  => 'show_phone_on_header',
				'type'      => 'checkbox',
			)
		)
	);
	
	//Phone 1 Setting
	$wp_customize->add_setting( 'natta_phone1_field', array(
		'capability' => 'edit_theme_options',
		'default' => '01252 855433',
	));
	  
	$wp_customize->add_control( 'natta_phone1_field', array(
		'type' => 'text',
		'section' => 'natta_phone', 
		'label' => __( 'Phone Number 1' ),
	));

	//Phone 2 Setting
	$wp_customize->add_setting( 'natta_phone2_field', array(
		'capability' => 'edit_theme_options',
	));
	  
	$wp_customize->add_control( 'natta_phone2_field', array(
		'type' => 'text',
		'section' => 'natta_phone', 
		'label' => __( 'Phone Number 2' ),
	));


	/* Email Sections */
	$wp_customize->add_section('natta_email', array(
        "title" => __( 'Email Details', 'natta' ),
		"priority" => 30,
		'panel'=>'natta_contact_details',
	));

	//Email Setting
	$wp_customize->add_setting( 'natta_email_field', array(
		'capability' => 'edit_theme_options',
		'default' => 'info@natta.co.uk',
		'sanitize_callback' => 'sanitize_text_field',
	));
	  
	$wp_customize->add_control( 'natta_email_field', array(
		'type' => 'text',
		'section' => 'natta_email', 
		'label' => __( 'Email id.' ),
	));


	/* Social Media Section */
	$wp_customize->add_section('natta_social', array(
        "title" => __( 'Social Media Details', 'natta' ),
		"priority" => 30,
		'panel'=>'natta_contact_details',
	));

	//Facebook Setting
	$wp_customize->add_setting( 'natta_facebook_field', array(
		'capability' => 'edit_theme_options',
		'default' => '#facebook',
		'sanitize_callback' => 'sanitize_text_field',
	));
	  
	$wp_customize->add_control( 'natta_facebook_field', array(
		'type' => 'text',
		'section' => 'natta_social', 
		'label' => __( 'Facebook' ),
	));

	//Youtube Setting
	$wp_customize->add_setting( 'natta_youtube_field', array(
		'capability' => 'edit_theme_options',
		'default' => '#youtube',
		'sanitize_callback' => 'sanitize_text_field',
	));
	  
	$wp_customize->add_control( 'natta_youtube_field', array(
		'type' => 'text',
		'section' => 'natta_social', 
		'label' => __( 'Youtube' ),
	));

	//Twitter Setting
	$wp_customize->add_setting( 'natta_twitter_field', array(
		'capability' => 'edit_theme_options',
		'default' => '#twitter',
		'sanitize_callback' => 'sanitize_text_field',
	));
	  
	$wp_customize->add_control( 'natta_twitter_field', array(
		'type' => 'text',
		'section' => 'natta_social', 
		'label' => __( 'Twitter' ),
	));

	//LinkedIn Setting
	$wp_customize->add_setting( 'natta_linkedin_field', array(
		'capability' => 'edit_theme_options',
		'default' => '#linkedin',
		'sanitize_callback' => 'sanitize_text_field',
	));
	  
	$wp_customize->add_control( 'natta_linkedin_field', array(
		'type' => 'text',
		'section' => 'natta_social', 
		'label' => __( 'LinkedIn' ),
	));

	/*
	//////////////////////////////
	/////// Natta Newsletter Form
	//////////////////////////////
	*/
	
    $wp_customize->add_section('natta-newsletter', array(
        "title" => __( 'Newsletter', 'natta' ),
		"priority" => 30,
		'sanitize_callback' => 'natta_sanitize_checkbox',
	));
	
	// Add setting for Newsletter
	$wp_customize->add_setting( 'natta_newsletter_form', array(
		'capability' => 'edit_theme_options',
		'sanitize_callback' => 'sanitize_text_field',
	));
	  
	// Add control for Newsletter
	$wp_customize->add_control( 'natta_newsletter_form', array(
		'type' => 'text',
		'section' => 'natta-newsletter', 
		'label' => __( 'Newsletter Form' ),
	));


	/*
	/////////////////////////
	/////// Natta Footer
	/////////////////////////
	*/

	$wp_customize->add_panel('natta_footer_panel',array(
		'title'=>'Natta Footer',
		'description'=> 'Panel to save Natta Footer Details.',
		'priority'=> 30,
	));

	/* Copyright Section */
	$wp_customize->add_section('natta_footer_copyright', array(
        "title" => __( 'Copyright', 'natta' ),
		"priority" => 30,
		'panel'=>'natta_footer_panel',
	));

	//Copyright Setting
	$wp_customize->add_setting( 'natta_copyright', array(
		'capability' => 'edit_theme_options',
		'default' => 'Copyright Text',
		'sanitize_callback' => 'sanitize_text_field',
	));
	  
	$wp_customize->add_control( 'natta_copyright', array(
		'type' => 'textarea',
		'section' => 'natta_footer_copyright', 
		'label' => __( 'Copyright' ),
	));

	/* Natta Footer Logos */
	$wp_customize->add_section('natta_footer_logos', array(
        "title" => __( 'Natta Footer Logos', 'natta' ),
		"priority" => 30,
		'panel'=>'natta_footer_panel',
	));

	//Checkbox for Header
	$wp_customize->add_setting('show_footer_logos', array(
		'default'    => 0
	));
	
	$wp_customize->add_control(
		new WP_Customize_Control(
			$wp_customize,
			'show_footer_logos',
			array(
				'label'     => __('Hide on footer', 'natta'),
				'section'   => 'natta_footer_logos',
				'settings'  => 'show_footer_logos',
				'type'      => 'checkbox',
			)
		));

	// Footer Logo 1 (Primary) Setting
    $wp_customize->add_setting('natta_footer_logos_1', array(
        'transport'         => 'refresh',
        'height'         => 325,
	));
	
    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'natta_footer_logos_1', array(
        'label'             => __('Logo 1 (Primary)', 'natta'),
        'section'           => 'natta_footer_logos',
        'settings'          => 'natta_footer_logos_1',    
	)));

	// Footer Logo 1 (Primary) URL Setting
	$wp_customize->add_setting( 'natta_footer_logos_url_1', array(
		'capability' => 'edit_theme_options',
		'sanitize_callback' => 'natta_sanitize_url',
	));
	  
	$wp_customize->add_control( 'natta_footer_logos_url_1', array(
		'type' 		=> 'url',
		'section' 	=> 'natta_footer_logos',
		'label'     => __('Logo 1 URL', 'natta'),
	));
	
	// Footer Logo 2 Setting
    $wp_customize->add_setting('natta_footer_logos_2', array(
        'transport'         => 'refresh',
        'height'         => 325,
	));
	
    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'natta_footer_logos_2', array(
        'label'             => __('Logo 2', 'natta'),
        'section'           => 'natta_footer_logos',
        'settings'          => 'natta_footer_logos_2',    
	)));

	// Footer Logo 2 URL Setting
	$wp_customize->add_setting( 'natta_footer_logos_url_2', array(
		'capability' => 'edit_theme_options',
		'sanitize_callback' => 'natta_sanitize_url',
	));
	  
	$wp_customize->add_control( 'natta_footer_logos_url_2', array(
		'type' 		=> 'url',
		'section' 	=> 'natta_footer_logos',
		'label'     => __('Logo 2 URL', 'natta'),
	));
	
	// Footer Logo 3 Setting
    $wp_customize->add_setting('natta_footer_logos_3', array(
        'transport'         => 'refresh',
        'height'         => 325,
	));
	
    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'natta_footer_logos_3', array(
        'label'             => __('Logo 3', 'natta'),
        'section'           => 'natta_footer_logos',
        'settings'          => 'natta_footer_logos_3',    
	)));

	// Footer Logo 3 URL Setting
	$wp_customize->add_setting( 'natta_footer_logos_url_3', array(
		'capability' => 'edit_theme_options',
		'sanitize_callback' => 'natta_sanitize_url',
	));
	  
	$wp_customize->add_control( 'natta_footer_logos_url_3', array(
		'type' 		=> 'url',
		'section' 	=> 'natta_footer_logos',
		'label'     => __('Logo 3 URL', 'natta'),
	));
	
	// Footer Logo 4 Setting
    $wp_customize->add_setting('natta_footer_logos_4', array(
        'transport'         => 'refresh',
        'height'         => 325,
	));
	
    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'natta_footer_logos_4', array(
        'label'             => __('Logo 4', 'natta'),
        'section'           => 'natta_footer_logos',
        'settings'          => 'natta_footer_logos_4',    
	)));

	// Footer Logo 4 URL Setting
	$wp_customize->add_setting( 'natta_footer_logos_url_4', array(
		'capability' => 'edit_theme_options',
		'sanitize_callback' => 'natta_sanitize_url',
	));
	  
	$wp_customize->add_control( 'natta_footer_logos_url_4', array(
		'type' 		=> 'url',
		'section' 	=> 'natta_footer_logos',
		'label'     => __('Logo 4 URL', 'natta'),
	));
	
	// Footer Logo 5 Setting
    $wp_customize->add_setting('natta_footer_logos_5', array(
        'transport'         => 'refresh',
        'height'         => 325,
	));
	
    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'natta_footer_logos_5', array(
        'label'             => __('Logo 5', 'natta'),
        'section'           => 'natta_footer_logos',
        'settings'          => 'natta_footer_logos_5',    
	)));

	// Footer Logo 5 URL Setting
	$wp_customize->add_setting( 'natta_footer_logos_url_5', array(
		'capability' => 'edit_theme_options',
		'sanitize_callback' => 'natta_sanitize_url',
	));
	  
	$wp_customize->add_control( 'natta_footer_logos_url_5', array(
		'type' 		=> 'url',
		'section' 	=> 'natta_footer_logos',
		'label'     => __('Logo 5 URL', 'natta'),
	));
	
	// Footer Logo 6 Setting
    $wp_customize->add_setting('natta_footer_logos_6', array(
        'transport'         => 'refresh',
        'height'         => 325,
	));
	
    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'natta_footer_logos_6', array(
        'label'             => __('Logo 6', 'natta'),
        'section'           => 'natta_footer_logos',
        'settings'          => 'natta_footer_logos_6',    
	)));
	
	// Footer Logo 6 URL Setting
	$wp_customize->add_setting( 'natta_footer_logos_url_6', array(
		'capability' => 'edit_theme_options',
		'sanitize_callback' => 'natta_sanitize_url',
	));
	  
	$wp_customize->add_control( 'natta_footer_logos_url_6', array(
		'type' 		=> 'url',
		'section' 	=> 'natta_footer_logos',
		'label'     => __('Logo 6 URL', 'natta'),
	));


    // Sanitize text
	function natta_sanitize_text( $text ) {
	    return sanitize_text_field( $text );
	}

	// Sanitize URL
	function natta_sanitize_url( $url ) {
		return esc_url_raw( $url );
	}

	// Sanitize Checkbox
	function natta_sanitize_checkbox( $checked ) {
		return ( ( isset( $checked ) && true == $checked ) ? true : false );
	}

}

add_action( 'customize_register', 'natta_customize_register' );

function register_sidebar_widgets(){

   register_sidebar(array(
       'name' => 'Primary slidebar',
       'id' => 'sidebar-1',
       'description' => 'Widget all',
       'before_widget' =>'<li>',
       'after_widget' =>'</li>',
       'before_title' =>'<h2>',
       'after_title' =>'</h2>'   
   ));
}

 function saurav(){
	 $outout='';


 return $output;
 }
 add_shortcode('saurav','saurav');
?>




