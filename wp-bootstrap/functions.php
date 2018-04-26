<?php

// Imagens dos posts
add_theme_support('post-thumbnails');

// pega o arquivo no diretorio
require get_template_directory() . '/inc/marca.php';

// pega o arquivo metabox.php
require get_template_directory() . '/inc/metabox.php';

// customizer
require get_template_directory() . '/inc/customizer.php';


// Registrar Custom Navigation Walker 
require get_template_directory() . '/inc/wp-bootstrap-navwalker.php ';

register_nav_menus(array(
    'primary' => __('Primary Menu', 'wp-bootstrap'),
));


register_nav_menus(array(
    'links-utes' => __('Links Úteis Rodape', 'wp-bootstrap'),
));

// Registro de sidebar
//add_action('widgets_init', 'theme_slug_widgets_init');

if (function_exists('register_sidebar')) {


    register_sidebar(array(
        'name' => 'Login',
        'id' => 'login_widgets',
        'description' => __('Formulario de login para o painel admin'),
        'before_title' => '<h2>',
        'after_title' => '</h2>',
    ));




    register_sidebar(array(
        'name' => 'Cadastro',
        'id' => 'widgets_cadastro',
        'description' => __('Formulario de cadastro'),
        'before_title' => '<h2>',
        'after_title' => '</h2>',
    ));


    /* footer widget */


    register_sidebar(array(
        'name' => 'Rodape 1',
        'id' => 'rodape',
        'description' => __('Sobre nós'),
        'before_title' => '<h2>',
        'after_title' => '</h2>',
    ));


    register_sidebar(array(
        'name' => 'instagram',
        'id' => 'instagram_slider',
        'description' => __('Instagram'),
        'before_title' => '<h2>',
        'after_title' => '</h2>',
    ));


    register_sidebar(array(
        'name' => 'Sidebar',
        'id' => 'sidebar_internas',
        'description' => __('Elementos da sidebar single e page'),
        'before_title' => '<h2>',
        'after_title' => '</h2>',
    ));


    register_sidebar(array(
        'name' => 'Our team',
        'id' => 'our-team',
        'description' => __('Our Team'),
        'before_title' => '<h2>',
        'after_title' => '</h2>',
    ));
}

//require get_template_directory().'/inc/customizer.php';

function custom_excerpt_length($length) {
    return 30;
}

add_filter('excerpt_length', 'custom_excerpt_length', 999);
?>