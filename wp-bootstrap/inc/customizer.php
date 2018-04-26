<?php

/**
 * wp-bootstrap Theme Customizer
 *
 * @package zerif
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
/* * ************** *//// SLIDER  ///***************************************/


function slider($wp_customize) {

    if (class_exists('WP_Customize_Panel')):

        $wp_customize->add_panel(
                'slider', array(
            'priority' => 34,
            'title' => 'Sessão de Slider'
        ));

        $wp_customize->add_section(
                'configslider', array(
            'title' => 'Configuração',
            'description' => 'Ocultar Slider.',
            'priority' => 30,
            'panel' => 'slider'
        ));

        $wp_customize->add_setting(
                'checkboxslider', array(
            'default' => '',
            'transport' => 'refresh',
                )
        );
        $wp_customize->add_control(new WP_Customize_Control(
                $wp_customize, "checkboxslider", array(
            "label" => "Ocultar Slider Post",
            "section" => "configslider",
            "settings" => "checkboxslider",
            "type" => "checkbox",
                )
        ));

        $wp_customize->add_setting(
                'checkbox_slider_interactive', array(
            'default' => '',
            'transport' => 'refresh',
                )
        );
        $wp_customize->add_control(new WP_Customize_Control(
                $wp_customize, "checkbox_slider_interactive", array(
            "label" => "Ocultar Slider Interativo",
            "section" => "configslider",
            "settings" => "checkbox_slider_interactive",
            "type" => "checkbox",
                )
        ));

        $wp_customize->add_section(
                'deescrible', array(
            'title' => 'Descrição',
            'description' => 'Descrição do Slider.',
            'priority' => 30,
            'panel' => 'slider'
        ));

        $wp_customize->add_setting(
                'descri', array(
            'default' => '',
            'transport' => 'refresh',
        ));

        $wp_customize->add_control(new WP_Customize_Control(
                $wp_customize, "descri", array(
            "label" => "Descrição do Slider",
            "section" => "deescrible",
            "settings" => "descri",
            "type" => "text",
                )
        ));
        $wp_customize->add_section(
                'slider', array(
            'title' => 'Slider',
            'description' => 'Inclua slider.',
            'priority' => 40,
            'panel' => 'slider'
        ));

        /*         * ********************* INICIO DA CONFIGURAÇÃO DO PRIMEIRO SLIDER ********************** */


        // Controle do Slider 01  

        $wp_customize->add_setting(
                'slider01', array(
            'default' => '',
            'transport' => 'refresh',
                )
        );

        $wp_customize->add_control(
                new WP_Customize_Image_Control(
                $wp_customize, "slider01", array(
            "label" => "slider 01",
            "section" => "slider", // nome da sessão que deverá aparecer
            "settings" => "slider01",
            "type" => "image",
                )
                )
        );
        // Controle do Titulo do Slider 01  

        $wp_customize->add_setting(
                'titulo01', array(
            'default' => '',
            'transport' => 'refresh',
                )
        );
        $wp_customize->add_control(new WP_Customize_Control(
                $wp_customize, "titulo01", array(
            "label" => "Titulo da postagem",
            "section" => "slider",
            "settings" => "titulo02",
            "type" => "text",
                )
        ));
        // Controle do Texto do Slider 01  

        $wp_customize->add_setting(
                'texto01', array(
            'default' => '',
            'transport' => 'refresh',
                )
        );
        $wp_customize->add_control(new WP_Customize_Control(
                $wp_customize, "texto01", array(
            "label" => "Texto do slider",
            "section" => "slider",
            "settings" => "texto01",
            "type" => "text",
                )
        ));
        // Link do Slider 01 

        $wp_customize->add_setting(
                'link01', array(
            'default' => '',
            'transport' => 'refresh',
        ));
        $wp_customize->add_control(new WP_Customize_Control(
                $wp_customize, "link01", array(
            "label" => "Link da postagem",
            "section" => "slider",
            "settings" => "link01",
            "type" => "text",
                )
        ));

        /*         * ********************* FIM DA CONFIGURAÇÃO DO PRIMEIRO SLIDER ********************** */


        /*         * ********************* INICIO DA CONFIGURAÇÃO DO SEGUNDO SLIDER ********************** */


        // Controle do Slider 02  

        $wp_customize->add_setting(
                'slider02', array(
            'default' => '',
            'transport' => 'refresh',
                )
        );

        $wp_customize->add_control(
                new WP_Customize_Image_Control(
                $wp_customize, "slider02", array(
            "label" => "slider 02",
            "section" => "slider", // nome da sessão que deverá aparecer
            "settings" => "slider02",
            "type" => "image",
                )
                )
        );
        // Controle do Titulo do Slider 02  

        $wp_customize->add_setting(
                'titulo02', array(
            'default' => '',
            'transport' => 'refresh',
                )
        );
        $wp_customize->add_control(new WP_Customize_Control(
                $wp_customize, "titulo02", array(
            "label" => "Titulo da postagem",
            "section" => "slider",
            "settings" => "titulo02",
            "type" => "text",
                )
        ));
        // Controle do Texto do Slider 02  

        $wp_customize->add_setting(
                'texto02', array(
            'default' => '',
            'transport' => 'refresh',
                )
        );
        $wp_customize->add_control(new WP_Customize_Control(
                $wp_customize, "texto02", array(
            "label" => "Texto do slider",
            "section" => "slider",
            "settings" => "texto02",
            "type" => "text",
                )
        ));
        // Link do Slider 02

        $wp_customize->add_setting(
                'link02', array(
            'default' => '',
            'transport' => 'refresh',
        ));
        $wp_customize->add_control(new WP_Customize_Control(
                $wp_customize, "link02", array(
            "label" => "Link da postagem",
            "section" => "slider",
            "settings" => "link02",
            "type" => "text",
                )
        ));

    /*     * ********************* FIM DA CONFIGURAÇÃO DO SEGUNDO SLIDER ********************** */




        /*         * ********************* INICIO DA CONFIGURAÇÃO DO TERCEIRO SLIDER ********************** */


        // Controle do Slider 03  

        $wp_customize->add_setting(
                'slider03', array(
            'default' => '',
            'transport' => 'refresh',
                )
        );

        $wp_customize->add_control(
                new WP_Customize_Image_Control(
                $wp_customize, "slider03", array(
            "label" => "slider 03",
            "section" => "slider", // nome da sessão que deverá aparecer
            "settings" => "slider03",
            "type" => "image",
                )
                )
        );
        // Controle do Titulo do Slider 03  

        $wp_customize->add_setting(
                'titulo03', array(
            'default' => '',
            'transport' => 'refresh',
                )
        );
        $wp_customize->add_control(new WP_Customize_Control(
                $wp_customize, "titulo03", array(
            "label" => "Titulo da postagem",
            "section" => "slider",
            "settings" => "titulo03",
            "type" => "text",
                )
        ));
        // Controle do Texto do Slider 03  

        $wp_customize->add_setting(
                'texto03', array(
            'default' => '',
            'transport' => 'refresh',
                )
        );
        $wp_customize->add_control(new WP_Customize_Control(
                $wp_customize, "texto03", array(
            "label" => "Texto do slider",
            "section" => "slider",
            "settings" => "texto03",
            "type" => "text",
                )
        ));
        // Link do Slider 03

        $wp_customize->add_setting(
                'link03', array(
            'default' => '',
            'transport' => 'refresh',
        ));
        $wp_customize->add_control(new WP_Customize_Control(
                $wp_customize, "link03", array(
            "label" => "Link da postagem",
            "section" => "slider",
            "settings" => "link03",
            "type" => "text",
                )
        ));

    /*     * ********************* FIM DA CONFIGURAÇÃO DO TERCEIRO SLIDER ********************** */



    endif;
}

add_action('customize_register', 'slider');

function out_team_function($wp_customize) {

    if (class_exists('WP_Customize_Panel')):

        $wp_customize->add_panel(
                'painel_out_team', array(
            'priority' => 34,
            'title' => 'Out Team'
        ));

        $wp_customize->add_section(
                'our_team_config', array(
            'title' => 'Configuração',
            'description' => 'Ocultar Our Team.',
            'priority' => 30,
            'panel' => 'painel_out_team'
        ));

        $wp_customize->add_setting(
                'checkbox_our_team', array(
            'default' => '',
            'transport' => 'refresh',
                )
        );
        $wp_customize->add_control(new WP_Customize_Control(
                $wp_customize, "checkbox_our_team", array(
            "label" => "Ocultar Our Team",
            "section" => "our_team_config",
            "settings" => "checkbox_our_team",
            "type" => "checkbox",
                )
        ));


        $wp_customize->add_section(
                'deescrible', array(
            'title' => 'Descrição',
            'description' => 'Descrição do 01.',
            'priority' => 30,
            'panel' => 'painel_out_team'
        ));

        $wp_customize->add_setting(
                'descri_ot', array(
            'default' => '',
            'transport' => 'refresh',
        ));

        $wp_customize->add_control(new WP_Customize_Control(
                $wp_customize, "descri_ot", array(
            "label" => "Descrição do 01",
            "section" => "deescrible",
            "settings" => "descri_ot",
            "type" => "text",
                )
        ));
        $wp_customize->add_section(
                'img_ot', array(
            'title' => 'img ot',
            'description' => 'Inclua img.',
            'priority' => 40,
            'panel' => 'painel_out_team'
        ));

        /*         * ********************* INICIO DA CONFIGURAÇÃO DO PRIMEIRO SLIDER ********************** */


        // Controle do Slider 01  

        $wp_customize->add_setting(
                'our_img01', array(
            'default' => '',
            'transport' => 'refresh',
                )
        );

        $wp_customize->add_control(
                new WP_Customize_Image_Control(
                $wp_customize, "our_img01", array(
            "label" => "img 01",
            "section" => "img_ot", // nome da sessão que deverá aparecer
            "settings" => "our_img01",
            "type" => "image",
                )
                )
        );
        // Controle do Titulo do Slider 01  

        $wp_customize->add_setting(
                'outitulo01', array(
            'default' => '',
            'transport' => 'refresh',
                )
        );
        $wp_customize->add_control(new WP_Customize_Control(
                $wp_customize, "outitulo01", array(
            "label" => "Titulo da postagem",
            "section" => "img_ot",
            "settings" => "outitulo01",
            "type" => "text",
                )
        ));
        // Controle do Texto do Slider 01  

        $wp_customize->add_setting(
                'outexto01', array(
            'default' => '',
            'transport' => 'refresh',
                )
        );
        $wp_customize->add_control(new WP_Customize_Control(
                $wp_customize, "outexto01", array(
            "label" => "Texto do slider",
            "section" => "img_ot",
            "settings" => "outexto01",
            "type" => "text",
                )
        ));
        // Link do Slider 01 

        $wp_customize->add_setting(
                'oulink01', array(
            'default' => '',
            'transport' => 'refresh',
        ));
        $wp_customize->add_control(new WP_Customize_Control(
                $wp_customize, "link01", array(
            "label" => "Link da postagem",
            "section" => "img_ot",
            "settings" => "oilink01",
            "type" => "text",
                )
        ));

        /*         * ********************* FIM DA CONFIGURAÇÃO DO PRIMEIRO SLIDER ********************** */


        /*         * ********************* INICIO DA CONFIGURAÇÃO DO SEGUNDO SLIDER ********************** */


        // Controle do Slider 02  

        $wp_customize->add_setting(
                'slider02', array(
            'default' => '',
            'transport' => 'refresh',
                )
        );

        $wp_customize->add_control(
                new WP_Customize_Image_Control(
                $wp_customize, "slider02", array(
            "label" => "slider 02",
            "section" => "slider", // nome da sessão que deverá aparecer
            "settings" => "slider02",
            "type" => "image",
                )
                )
        );
        // Controle do Titulo do Slider 02  

        $wp_customize->add_setting(
                'titulo02', array(
            'default' => '',
            'transport' => 'refresh',
                )
        );
        $wp_customize->add_control(new WP_Customize_Control(
                $wp_customize, "titulo02", array(
            "label" => "Titulo da postagem",
            "section" => "slider",
            "settings" => "titulo02",
            "type" => "text",
                )
        ));
        // Controle do Texto do Slider 02  

        $wp_customize->add_setting(
                'texto02', array(
            'default' => '',
            'transport' => 'refresh',
                )
        );
        $wp_customize->add_control(new WP_Customize_Control(
                $wp_customize, "texto02", array(
            "label" => "Texto do slider",
            "section" => "slider",
            "settings" => "texto02",
            "type" => "text",
                )
        ));
        // Link do Slider 02

        $wp_customize->add_setting(
                'link02', array(
            'default' => '',
            'transport' => 'refresh',
        ));
        $wp_customize->add_control(new WP_Customize_Control(
                $wp_customize, "link02", array(
            "label" => "Link da postagem",
            "section" => "slider",
            "settings" => "link02",
            "type" => "text",
                )
        ));

    /*     * ********************* FIM DA CONFIGURAÇÃO DO SEGUNDO SLIDER ********************** */




        /*         * ********************* INICIO DA CONFIGURAÇÃO DO TERCEIRO SLIDER ********************** */


        // Controle do Slider 03  

        $wp_customize->add_setting(
                'slider03', array(
            'default' => '',
            'transport' => 'refresh',
                )
        );

        $wp_customize->add_control(
                new WP_Customize_Image_Control(
                $wp_customize, "slider03", array(
            "label" => "slider 03",
            "section" => "slider", // nome da sessão que deverá aparecer
            "settings" => "slider03",
            "type" => "image",
                )
                )
        );
        // Controle do Titulo do Slider 03  

        $wp_customize->add_setting(
                'titulo03', array(
            'default' => '',
            'transport' => 'refresh',
                )
        );
        $wp_customize->add_control(new WP_Customize_Control(
                $wp_customize, "titulo03", array(
            "label" => "Titulo da postagem",
            "section" => "slider",
            "settings" => "titulo03",
            "type" => "text",
                )
        ));
        // Controle do Texto do Slider 03  

        $wp_customize->add_setting(
                'texto03', array(
            'default' => '',
            'transport' => 'refresh',
                )
        );
        $wp_customize->add_control(new WP_Customize_Control(
                $wp_customize, "texto03", array(
            "label" => "Texto do slider",
            "section" => "slider",
            "settings" => "texto03",
            "type" => "text",
                )
        ));
        // Link do Slider 03

        $wp_customize->add_setting(
                'link03', array(
            'default' => '',
            'transport' => 'refresh',
        ));
        $wp_customize->add_control(new WP_Customize_Control(
                $wp_customize, "link03", array(
            "label" => "Link da postagem",
            "section" => "slider",
            "settings" => "link03",
            "type" => "text",
                )
        ));

    /*     * ********************* FIM DA CONFIGURAÇÃO DO TERCEIRO SLIDER ********************** */



    endif;
}

add_action('customize_register', 'out_team_function');
?>
