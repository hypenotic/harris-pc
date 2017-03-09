<?php
add_filter( 'rwmb_meta_boxes', 'pc_register_tm' );
function pc_register_tm( $meta_boxes ) {
    $prefix = 'rw_';
    $meta_boxes[] = array(
        'title'      => __( 'Details', 'textdomain' ),
        'post_types' => array( 'team-member'),
        'fields' => array(
            array(
               'id'   => $prefix . 'tm_role',
               'name' => __( 'Role', 'textdomain' ),
               'type' => 'text',
            ),
            array(
               'id'   => $prefix . 'tm_email',
               'name' => __( 'Email', 'textdomain' ),
               'type' => 'text',
            ),
        ),
    );
    return $meta_boxes;
}
?>