<?php
/**
 * 
 * Theme Name: Customizer Settings
 * 
 */

 function fn_customizer_settings($wp_customizer){
    //Add header section
    $wp_customizer->add_section('header', array(
        'title'         =>  __('Header Settings', 'Daily'),
        'priority'      =>  70
    ));

    //Add image logo settinig
    $wp_customizer->add_setting('header_image_logo', array(
        'capability'    =>  'edit_theme_options'
    ));

    //Add image control
    $wp_customizer->add_control(new WP_Customize_Image_Control($wp_customizer, 'header_image_logo', array(
        'label'         =>  __('Header Logo', 'Daily'),
        'section'       =>  'header'
    )));
    //Add background settinig
    $wp_customizer->add_setting('header_background', array(
        'capability'    =>  'edit_theme_options'
    ));

    //Add image control
    $wp_customizer->add_control(new WP_Customize_Image_Control($wp_customizer, 'header_background', array(
        'label'         =>  __('Header Background', 'Daily'),
        'section'       =>  'header'
    )));

    //Add header text
    $wp_customizer->add_setting('header_text_field', array(
        'capability'    =>  'edit_theme_options',
        'Default'       =>  'DIGIMEDIA HTML5 TEMPLATE'
    ));

    //Add text Control
    $wp_customizer->add_control('header_text_control', array(
        'label'         =>  __('Header Text', 'Daily'),
        'description'   =>  'Change Header Text',
        'section'      =>  'header',
        'settings'      =>  'header_text_field'
    ));

    //Add header desciption field
    $wp_customizer->add_setting('header_desc_field', array(
        'capability'    =>  'edit_theme_options',
        'Default'       =>  'Please Choose One Of The Three Variations Below.'
    ));

    //Add desciption field Control
    $wp_customizer->add_control('header_description_control', array(
        'label'         =>  __('Header Description', 'Daily'),
        'description'   =>  'Change Header Description',
        'section'      =>  'header',
        'settings'      =>  'header_desc_field'
    ));

    //Add header button text
    $wp_customizer->add_setting('header_button', array(
        'capability'    =>  'edit_theme_options',
        'Default'       =>  'Choose Demo.'
    ));

    //Add button Control
    $wp_customizer->add_control('header_button_control', array(
        'label'         =>  __('Header Button', 'Daily'),
        'description'   =>  'Change Button Text',
        'section'      =>  'header',
        'settings'      =>  'header_button'
    ));

 }
 add_action('customize_register', 'fn_customizer_settings')



?>