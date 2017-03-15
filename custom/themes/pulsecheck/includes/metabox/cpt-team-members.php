<?php
/*
* CPT: Team Members
* Slug: team-member
* Dependancies:
* - MetaBox.io (https://metabox.io/) 
* - MB Custom Post Type (https://metabox.io/plugins/custom-post-type/) -> also makes custom taxonimies
* - MB Show Hide (https://metabox.io/plugins/meta-box-show-hide/)
* - MB Group (https://metabox.io/plugins/meta-box-group/)
* Details:
* This files constructs the fields for a 'team-member' CPT,
* in this case created by the Metabox.io plugin.
* If your CPT needs custom meta fields, you will need:
* - MB Term Meta (https://metabox.io/plugins/mb-term-meta/)
*/
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