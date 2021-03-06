<?php

add_filter( 'rwmb_meta_boxes', 'gotravel_register_meta_boxes' );

function gotravel_register_meta_boxes( $meta_boxes ) {
    $prefix = 'rw_';
    // 1st meta box
    $meta_boxes[] = array(
        'id'         => 'additional',
        'title'      => __( 'Additional Information', 'textdomain' ),
        'post_types' => array( 'tour'),
        'context'    => 'normal',
        'priority'   => 'high',
        'fields' => array(
            array(
                'name'  => 'Gallery',
                'desc'  => 'Format: Image File',
                'id'    => $prefix . 'gallery_thumb',
                'type'  => 'image_advanced',
                'std'   => '',
                'class' => 'custom-class'
                
            ),
             array(
                'name'  => __( 'Tour Includes', 'textdomain' ),
                'desc'  => '',
                'id'    => $prefix . 'includes',
                'type'  => 'wysiwyg',
                'std'   => '',
                'class' => 'custom-class',
                'clone' => false,
            ),
             array(
                'name'  => __( 'Tips for having more fun', 'textdomain' ),
                'desc'  => '',
                'id'    => $prefix . 'thingsdo',
                'type'  => 'wysiwyg',
                'std'   => '',
                'class' => 'custom-class',
                'clone' => false,
            ),
             array(
                'name'  => __( 'Duration', 'textdomain' ),
                'desc'  => '',
                'id'    => $prefix . 'duration',
                'type'  => 'wysiwyg',
                'std'   => '',
                'class' => 'custom-class',
                'clone' => false,
            ),
             array(
                'name'  => __( 'Extras', 'textdomain' ),
                'desc'  => '',
                'id'    => $prefix . 'extras',
                'type'  => 'wysiwyg',
                'std'   => '',
                'class' => 'custom-class',
                'clone' => false,
            ),
              array(
                'name'  => __( 'Prices', 'textdomain' ),
                'desc'  => '',
                'id'    => $prefix . 'prices',
                'type'  => 'textarea',
                'std'   => '',
                'class' => 'custom-class',
                'clone' => false,
            ),
              
                array(
                'name'  => __( 'Minimum', 'textdomain' ),
                'desc'  => '',
                'id'    => $prefix . 'minimum',
                'type'  => 'textarea',
                'std'   => '',
                'class' => 'custom-class',
                'clone' => false,
            ),
           
        )
    );
    // 2nd meta box
    /*$meta_boxes[] = array(
        'title'      => __( 'Media', 'textdomain' ),
        'post_types' => 'movie',
        'fields'     => array(
            array(
                'name' => __( 'URL', 'textdomain' ),
                'id'   => $prefix . 'url',
                'type' => 'text',
            ),
        )
    );*/
    return $meta_boxes;
}

