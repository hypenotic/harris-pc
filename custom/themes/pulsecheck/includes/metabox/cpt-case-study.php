<?php
/*
* CPT: Resource
* Slug: resource
* Dependancies:
* - MetaBox.io (https://metabox.io/) 
* - MB Custom Post Type (https://metabox.io/plugins/custom-post-type/) -> also makes custom taxonimies
* - MB Show Hide (https://metabox.io/plugins/meta-box-show-hide/)
* - MB Group (https://metabox.io/plugins/meta-box-group/)
* Details:
* This files constructs the fields for a 'case-study' CPT,
* in this case created by the Metabox.io plugin.
* If your CPT needs custom meta fields, you will need:
* - MB Term Meta (https://metabox.io/plugins/mb-term-meta/)
*/
add_filter( 'rwmb_meta_boxes', 'pc_register_res' );
function pc_register_res( $meta_boxes ) {
    $prefix = 'rw_';
    $meta_boxes[] = array(
        'title'      => __( 'Details', 'textdomain' ),
        'post_types' => array( 'resource'),
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
            array(
               'id'   => $prefix . 'cs_file',
               'name' => __( 'File', 'textdomain' ),
               'type' => 'file_input',
            ),
        ),
    );
    return $meta_boxes;
}
?>