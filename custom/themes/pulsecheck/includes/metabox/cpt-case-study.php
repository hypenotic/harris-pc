<?php
add_filter( 'rwmb_meta_boxes', 'pc_register_cs' );
function pc_register_cs( $meta_boxes ) {
    $prefix = 'rw_';
    $meta_boxes[] = array(
        'title'      => __( 'Banner', 'textdomain' ),
        'post_types' => array( 'case-study'),
        'fields' => array(
            array(
               'id'   => $prefix . 'cs_banner_heading',
               'name' => __( 'Heading', 'textdomain' ),
               'type' => 'text',
            ),
            array(
               'id'   => $prefix . 'cs_banner_subheading',
               'name' => __( 'Subheading', 'textdomain' ),
               'type' => 'textarea',
            ),
        ),
    );
    return $meta_boxes;
}
?>