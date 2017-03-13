<?php
add_filter( 'rwmb_meta_boxes', 'pc_register_clientpartner' );
function pc_register_clientpartner( $meta_boxes ) {
    $prefix = 'rw_';
    $meta_boxes[] = array(
        'title'      => __( 'Details', 'textdomain' ),
        'post_types' => array( 'client-partner'),
        'fields' => array(
            array(
                'name'  => __( 'Location', 'textdomain' ),
                'desc'  => '',
                'id'    => $prefix . 'cp_location',
                'type'  => 'text',
                'clone' => false,
            ),
            array(
                'name'  => __( 'Census', 'textdomain' ),
                'desc'  => '',
                'id'    => $prefix . 'cp_census',
                'type'  => 'text',
                'clone' => false,
            ),
            array(
                'name'  => __( 'Install Date', 'textdomain' ),
                'desc'  => '',
                'id'    => $prefix . 'cp_install',
                'type'  => 'text',
                'clone' => false,
            ),
            array(
                'name'  => __( 'HIS', 'textdomain' ),
                'desc'  => '',
                'id'    => $prefix . 'cp_his',
                'type'  => 'text',
                'clone' => false,
            ),
            array(
                'name'  => __( '# of Sites', 'textdomain' ),
                'desc'  => '',
                'id'    => $prefix . 'cp_sites',
                'type'  => 'text',
                'clone' => false,
            ),
        )
    );
    return $meta_boxes;
}
?>