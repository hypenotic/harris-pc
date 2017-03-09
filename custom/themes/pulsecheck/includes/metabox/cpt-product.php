<?php
add_filter( 'rwmb_meta_boxes', 'pc_register_product' );
function pc_register_product( $meta_boxes ) {
    $prefix = 'rw_';
    $meta_boxes[] = array(
        'title'      => __( 'Banner', 'textdomain' ),
        'post_types' => array( 'product'),
        'fields' => array(
            array(
               'id'   => $prefix . 'p_banner_heading',
               'name' => __( 'Heading', 'textdomain' ),
               'type' => 'text',
            ),
            array(
               'id'   => $prefix . 'p_banner_subheading',
               'name' => __( 'Subheading', 'textdomain' ),
               'type' => 'textarea',
            ),
        ),
    );
    return $meta_boxes;
}
?>