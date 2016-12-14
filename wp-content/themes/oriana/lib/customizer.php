<?php

function oriana_customizer_config() {
	
    $url  = get_stylesheet_directory_uri() . '/lib/kirki/';

    /**
     * If you need to include Kirki in your theme,
     * then you may want to consider adding the translations here
     * using your textdomain.
     * 
     * If you're using Kirki as a plugin then you can remove these.
     */

    $strings = array(
        'background-color' => __( 'Background Color', 'oriana' ),
        'background-image' => __( 'Background Image', 'oriana' ),
        'no-repeat' => __( 'No Repeat', 'oriana' ),
        'repeat-all' => __( 'Repeat All', 'oriana' ),
        'repeat-x' => __( 'Repeat Horizontally', 'oriana' ),
        'repeat-y' => __( 'Repeat Vertically', 'oriana' ),
        'inherit' => __( 'Inherit', 'oriana' ),
        'background-repeat' => __( 'Background Repeat', 'oriana' ),
        'cover' => __( 'Cover', 'oriana' ),
        'contain' => __( 'Contain', 'oriana' ),
        'background-size' => __( 'Background Size', 'oriana' ),
        'fixed' => __( 'Fixed', 'oriana' ),
        'scroll' => __( 'Scroll', 'oriana' ),
        'background-attachment' => __( 'Background Attachment', 'oriana' ),
        'left-top' => __( 'Left Top', 'oriana' ),
        'left-center' => __( 'Left Center', 'oriana' ),
        'left-bottom' => __( 'Left Bottom', 'oriana' ),
        'right-top' => __( 'Right Top', 'oriana' ),
        'right-center' => __( 'Right Center', 'oriana' ),
        'right-bottom' => __( 'Right Bottom', 'oriana' ),
        'center-top' => __( 'Center Top', 'oriana' ),
        'center-center' => __( 'Center Center', 'oriana' ),
        'center-bottom' => __( 'Center Bottom', 'oriana' ),
        'background-position' => __( 'Background Position', 'oriana' ),
        'background-opacity' => __( 'Background Opacity', 'oriana' ),
        'ON' => __( 'ON', 'oriana' ),
        'OFF' => __( 'OFF', 'oriana' ),
        'all' => __( 'All', 'oriana' ),
        'cyrillic' => __( 'Cyrillic', 'oriana' ),
        'cyrillic-ext' => __( 'Cyrillic Extended', 'oriana' ),
        'devanagari' => __( 'Devanagari', 'oriana' ),
        'greek' => __( 'Greek', 'oriana' ),
        'greek-ext' => __( 'Greek Extended', 'oriana' ),
        'khmer' => __( 'Khmer', 'oriana' ),
        'latin' => __( 'Latin', 'oriana' ),
        'latin-ext' => __( 'Latin Extended', 'oriana' ),
        'vietnamese' => __( 'Vietnamese', 'oriana' ),
        'serif' => _x( 'Serif', 'font style', 'oriana' ),
        'sans-serif' => _x( 'Sans Serif', 'font style', 'oriana' ),
        'monospace' => _x( 'Monospace', 'font style', 'oriana' ),
    );	

	$args = array(
  
        // Change the logo image. (URL) Point this to the path of the logo file in your theme directory
        // The developer recommends an image size of about 250 x 250
        
		'logo_image'   => get_template_directory_uri() . '/assets/images/logo.png',
  
        // The color of active menu items, help bullets etc.
        'color_active' => '#95c837',
		
		// Color used on slider controls and image selects
		'color_accent' => '#e7e7e7',
	
        // Color used for secondary elements and desable/inactive controls
        'color_light'  => '#e7e7e7',
  
        // Color used for button-set controls and other elements
        'color_select' => '#34495e',
		 
        // For the parameter here, use the handle of your stylesheet you use in wp_enqueue
        'stylesheet_id' => 'customize-styles', 
		
        // Only use this if you are bundling the plugin with your theme (see above)
        'url_path'     => get_template_directory_uri() . '/lib/kirki/',

        'textdomain'   => 'oriana',
		
        'i18n'         => $strings,		
	);
	return $args;
}
add_filter( 'kirki/config', 'oriana_customizer_config' );


/**
 * Create the customizer panels and sections
 */
add_action( 'customize_register', 'oriana_add_panels_and_sections' ); 
function oriana_add_panels_and_sections( $wp_customize ) {

	//Add panels

	$wp_customize->add_panel('slider',               array( 'title' => __( 'Slider', 'oriana' ),                  'description' => __( 'Slides details', 'oriana' ),          'priority' => 140));
	
    // Add Sections
	
    $wp_customize->add_section('general',   array('title' => __('General Settings', 'oriana'),            'description' => '',    'priority' => 130,));
    $wp_customize->add_section('homebox',   array('title' => __('Home Box', 'oriana'),                    'description' => '',    'priority' => 130,));	
	$wp_customize->add_section('promo',     array('title' => __('About Oriana Theme', 'oriana'),          'description' => '',    'priority' => 170,));
	
	// slider sections
		
	$wp_customize->add_section('slide1',              array('title' => __('Slide 1', 'oriana'),                   'description' => '',             'panel' => 'slider',		'priority' => 140,));
	$wp_customize->add_section('slide2',              array('title' => __('Slide 2', 'oriana'),                   'description' => '',             'panel' => 'slider',		'priority' => 140,));
	
}


function oriana_custom_setting( $controls ) {

     $copyrights = __('Copyright &copy; 2015 '.get_bloginfo('name'). ' All Rights Reserved.', 'oriana');  
	 $defaulttext = __('Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus laoreet dui lectus, non lacinia augue cursus Pellentesque molestie tincidunt scelerisque. Nunc rhoncus diam eget enim euismod, sed viverra mi venenatis.', 'oriana');

     // General Settings	 
	 
	  $controls[] = array('label' => __('Upload logo', "oriana"),                     'setting' => 'pp_logo_upload',           'type' => 'upload',          'description' => '',                               'default' => '',                                                        'section'     => 'general');	 
	  $controls[] = array('label' => __('Text Logo 1', "oriana"),                     'setting' => 'text_logo_1',              'type' => 'text',            'description' => __( 'Add text color for logo', "oriana"),        'default' => __( 'Oriana', "oriana"),                                       'section'     => 'general');
	  $controls[] = array('label' => __('Text Logo 2', "oriana"),                     'setting' => 'text_logo_2',              'type' => 'text',            'description' => __( 'Add text black for logo', "oriana"),        'default' => __( 'Themes', "oriana"),                                     'section'     => 'general');	
	  $controls[] = array('label' => __('Copyrights text', "oriana"),                 'setting' => 'pp_copyrights',            'type' => 'text',            'description' => __( 'Text in footer left', "oriana"),            'default' => $copyrights,                                               'section'     => 'general');  

     // Home Box 
	 
	  $controls[] = array('label' => __('Home Message Title', "oriana"),              'setting' => 'home_message_title',            'type' => 'text',          'description' => '',     'default' => '',     'section'     => 'homebox');	 
	  $controls[] = array('label' => __('Home Message Button 1 Text', "oriana"),      'setting' => 'home_message_button_1_text',    'type' => 'text',          'description' => '',     'default' => '',     'section'     => 'homebox');
	  $controls[] = array('label' => __('Home Message Button 1 Link', "oriana"),      'setting' => 'home_message_button_1_link',    'type' => 'text',          'description' => '',     'default' => '',     'section'     => 'homebox');	
	  $controls[] = array('label' => __('Home Message Button 2 Text', "oriana"),      'setting' => 'home_message_button_2_text',    'type' => 'text',          'description' => '',     'default' => '',     'section'     => 'homebox');  
	  $controls[] = array('label' => __('Home Message Button 2 Link', "oriana"),      'setting' => 'home_message_button_2_link',    'type' => 'text',          'description' => '',     'default' => '',     'section'     => 'homebox');  

	  $controls[] = array('label' => __('Circles Box Title 1', "oriana"),             'setting' => 'circles_box_title_1',           'type' => 'text',          'description' => '',                                                                                       'default' => '',                 'section'     => 'homebox');	
	  $controls[] = array('label' => __('Circles Box Image 1', "oriana"),             'setting' => 'circles_box_image_1',           'type' => 'text',          'description' => __( 'Select a icons in this list http://fontello.com/ and enter the code', "oriana"),     'default' => 'users',            'section'     => 'homebox');  
	  $controls[] = array('label' => __('Circles Box Content 1', "oriana"),           'setting' => 'circles_box_content_1',         'type' => 'textarea',      'description' => '',                                                                                       'default' => $defaulttext,       'section'     => 'homebox');  
	  $controls[] = array('label' => __('Circles Box Link 1', "oriana"),              'setting' => 'circles_box_link_1',            'type' => 'text',          'description' => '',                                                                                       'default' => '',                 'section'     => 'homebox');  

	  $controls[] = array('label' => __('Circles Box Title 2', "oriana"),             'setting' => 'circles_box_title_2',           'type' => 'text',          'description' => '',                                                                                       'default' => '',                 'section'     => 'homebox');	
	  $controls[] = array('label' => __('Circles Box Image 2', "oriana"),             'setting' => 'circles_box_image_2',           'type' => 'text',          'description' => __( 'Select a icons in this list http://fontello.com/ and enter the code', "oriana"),     'default' => 'cog',              'section'     => 'homebox');  
	  $controls[] = array('label' => __('Circles Box Content 2', "oriana"),           'setting' => 'circles_box_content_2',         'type' => 'textarea',      'description' => '',                                                                                       'default' => $defaulttext,       'section'     => 'homebox');  
	  $controls[] = array('label' => __('Circles Box Link 2', "oriana"),              'setting' => 'circles_box_link_2',            'type' => 'text',          'description' => '',                                                                                       'default' => '',                 'section'     => 'homebox');  

	  $controls[] = array('label' => __('Circles Box Title 3', "oriana"),             'setting' => 'circles_box_title_3',           'type' => 'text',          'description' => '',                                                                                       'default' => '',                 'section'     => 'homebox');	
	  $controls[] = array('label' => __('Circles Box Image 3', "oriana"),             'setting' => 'circles_box_image_3',           'type' => 'text',          'description' => __( 'Select a icons in this list http://fontello.com/ and enter the code', "oriana"),     'default' => 'eye',              'section'     => 'homebox');  
	  $controls[] = array('label' => __('Circles Box Content 3', "oriana"),           'setting' => 'circles_box_content_3',         'type' => 'textarea',      'description' => '',                                                                                       'default' => $defaulttext,       'section'     => 'homebox');  
	  $controls[] = array('label' => __('Circles Box Link 3', "oriana"),              'setting' => 'circles_box_link_3',            'type' => 'text',          'description' => '',                                                                                       'default' => '',                 'section'     => 'homebox');  

	  $controls[] = array('label' => __('Bottom Slug', "oriana"),                     'setting' => 'bottom_slug',                   'type' => 'textarea',          'description' => '',     'default' => $defaulttext,     'section'     => 'homebox');  

     // Slide 1
	 
	 $controls[] = array('label' => __('Title', 'oriana'),                      'setting' => 'slider_title_1',                     'type' => 'text',              'default' => __('Welcome To Oriana Theme', 'oriana' ),      'section' => 'slide1',             'description' => '');
	 $controls[] = array('label' => __('Content of slide', 'oriana'),           'setting' => 'slider_description1',                'type' => 'textarea',          'default' =>  $defaulttext,                                 'section' => 'slide1',             'description' => '');
	 $controls[] = array('label' => __('Upload Image', 'oriana'),               'setting' => 'slider_image_upload1',               'type' => 'upload',            'default' => '',                                            'section' => 'slide1',             'description' => __('Upload image for slide', 'oriana' ));							
	 $controls[] = array('label' => __('Button Text', 'oriana'),                'setting' => 'slider_button_color_text1',          'type' => 'text',              'default' => __('Read More', 'oriana' ),                    'section' => 'slide1',             'description' => '' );
	 $controls[] = array('label' => __('Button Link', 'oriana'),                'setting' => 'slider_button_color_link1',          'type' => 'text',              'default' => '',                                            'section' => 'slide1',             'description' => '' );

	 $controls[] = array('label' => __('Title', 'oriana'),                      'setting' => 'slider_title_2',                     'type' => 'text',              'default' => __('Welcome To Oriana Theme', 'oriana' ),      'section' => 'slide2',             'description' => '');
	 $controls[] = array('label' => __('Content of slide', 'oriana'),           'setting' => 'slider_description2',                'type' => 'textarea',          'default' =>  $defaulttext,                                 'section' => 'slide2',             'description' => '');
	 $controls[] = array('label' => __('Upload Image', 'oriana'),               'setting' => 'slider_image_upload2',               'type' => 'upload',            'default' => '',                                            'section' => 'slide2',             'description' => __('Upload image for slide', 'oriana' ));							
	 $controls[] = array('label' => __('Button Text', 'oriana'),                'setting' => 'slider_button_color_text2',          'type' => 'text',              'default' => __('Read More', 'oriana' ),                    'section' => 'slide2',             'description' => '' );
	 $controls[] = array('label' => __('Button Link', 'oriana'),                'setting' => 'slider_button_color_link2',          'type' => 'text',              'default' => '',                                            'section' => 'slide2',             'description' => '' );
     // Promo
	 $controls[] = array('label' => __( 'Oriana Promo', 'oriana' ),                   'setting' => 'custompromo',              'type' => 'promo',                                                                         'section' => 'promo',              'priority' => 10);
	 	
     return $controls;
}
add_filter( 'kirki/controls', 'oriana_custom_setting' );

