<?php
add_filter( 'rwmb_meta_boxes', 'prefix_register_meta_boxes' );
function prefix_register_meta_boxes( $meta_boxes ) {
    $prefix = 'field_prefix_';
    $meta_boxes[] = array(
        'id'         => 'personal',
        'title'      => 'Informações adicionais',
        'post_types' => 'post',
        'context'    => 'normal',
        'priority'   => 'high',

        'fields' => array(
            array(
                'id'  => 'Subtitulo',
                'name'  => __('Subtitulo', 'textdomain'),
                'type'  => 'text',
            ),
            array(
                'id'  => 'Resumo',
                'name'  => __('Resumo','textdomain'),
                'type'  => 'textarea',
            ),

            //VIDEO
            array(
                'id'    => 'oembed',
			    'name'  => 'oEmbed(s)',
			    'type'  => 'oembed',

			    // Input size
			    'size'  => 30,
			            ),
			        )
    );

    // Add more meta boxes if you want
    // $meta_boxes[] = ...

    return $meta_boxes;
}


?>