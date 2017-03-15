<?php
/*
* CPT: Clients, Alliances & Partners
* Slug: client-partner
* Dependancies:
* - MetaBox.io (https://metabox.io/) 
* - MB Custom Post Type (https://metabox.io/plugins/custom-post-type/) -> also makes custom taxonimies
* - MB Show Hide (https://metabox.io/plugins/meta-box-show-hide/)
* - MB Group (https://metabox.io/plugins/meta-box-group/)
* Details:
* This files constructs the fields for a 'client-partner' CPT,
* in this case created by the Metabox.io plugin.
* If your CPT needs custom meta fields, you will need:
* - MB Term Meta (https://metabox.io/plugins/mb-term-meta/)
*/
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
            array(
                'name'  => __( 'Website', 'textdomain' ),
                'desc'  => '',
                'id'    => $prefix . 'cp_website',
                'type'  => 'text',
                'clone' => false,
            ),
            array(
                'name'  => __( 'Logo', 'textdomain' ),
                'desc'  => '',
                'id'    => $prefix . 'cp_logo',
                'type'  => 'file_input',
                'clone' => false,
            ),
        )
    );
    return $meta_boxes;
}
?>