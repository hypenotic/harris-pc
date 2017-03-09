<?php
add_filter( 'rwmb_meta_boxes', 'mq_register_default' );
function mq_register_default( $meta_boxes ) {
    $prefix = 'rw_';
    $meta_boxes[] = array(
        'title'      => __( 'Banner', 'textdomain' ),
        'post_types' => array( 'page'),
        'fields' => array(
            array(
               'id'   => $prefix . 'banner_heading',
               'name' => __( 'Heading', 'textdomain' ),
               'type' => 'text',
            ),
            array(
               'id'   => $prefix . 'banner_subheading',
               'name' => __( 'Subheading', 'textdomain' ),
               'type' => 'textarea',
            ),
        ),
    );
    return $meta_boxes;
}
?>