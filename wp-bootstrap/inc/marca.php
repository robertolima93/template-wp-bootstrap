<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/* LOGO	 */

//        $wp_customize->add_setting('zerif_logo', array(
//            'sanitize_callback' => 'esc_url_raw'
//        ));

function bwp_customize_register($wp_customize) {

    $wp_customize->add_setting('bwp_logo');
    
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'bwp_logo', array(
        'label' => __('Logo', 'bwp'),
        'section' => 'title_tagline',
        'settings' => 'bwp_logo',
        'priority' => 1,
    )));
}

add_action('customize_register', 'bwp_customize_register');










?>