<?php
/*
* CPT: Testimonial
* Slug: testimonial
* Dependancies:
* - MetaBox.io (https://metabox.io/) 
* - MB Custom Post Type (https://metabox.io/plugins/custom-post-type/) -> also makes custom taxonimies
* Details:
* This files constructs the fields for a 'testimonial' CPT,
* in this case created by the Metabox.io plugin.
* If your CPT needs custom meta fields, you will need:
* - MB Term Meta (https://metabox.io/plugins/mb-term-meta/)
*/
add_filter( 'rwmb_meta_boxes', 'pc_register_testimonial' );
function pc_register_testimonial( $meta_boxes ) {
    $prefix = 'rw_';
    $meta_boxes[] = array(
        'title'      => __( 'Details', 'textdomain' ),
        'post_types' => array( 'testimonial'),
        'fields' => array(
            array(
                'name'  => __( 'Quotation', 'textdomain' ),
                'desc'  => '',
                'id'    => $prefix . 'quote_body',
                'type'  => 'textarea',
                'clone' => false,
            ),
            array(
                'name'  => __( 'Source', 'textdomain' ),
                'desc'  => '',
                'id'    => $prefix . 'quote_source',
                'type'  => 'text',
                'clone' => false,
            ),
            array(
                'name'  => __( 'Date', 'textdomain' ),
                'desc'  => '',
                'id'    => $prefix . 'quote_date',
                'type'  => 'text',
                'clone' => false,
            ),
        )
    );
    return $meta_boxes;
}
?>