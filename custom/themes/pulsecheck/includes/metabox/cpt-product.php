<?php
/*
* CPT: Product
* Slug: product
* Dependancies:
* - MetaBox.io (https://metabox.io/) 
* - MB Custom Post Type (https://metabox.io/plugins/custom-post-type/) -> also makes custom taxonimies
* - MB Show Hide (https://metabox.io/plugins/meta-box-show-hide/)
* - MB Group (https://metabox.io/plugins/meta-box-group/)
* Details:
* This files constructs the fields for a 'product' CPT,
* in this case created by the Metabox.io plugin.
* If your CPT needs custom meta fields, you will need:
* - MB Term Meta (https://metabox.io/plugins/mb-term-meta/)
*/
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
    $meta_boxes[] = array(
        'title'      => __( 'Features List', 'textdomain' ),
        'post_types' => array( 'product'),
        'fields' => array(
            // Group
            array(
                'name' => 'Single Feature', // Optional
                'id' => $prefix . 'feature_list',
                'type' => 'group',
                // Clone whole group?
                'clone'  => true,
                // Drag and drop clones to reorder them?
                'sort_clone' => true,
                // List of sub-fields
                'fields' => array(
                    array(
                        'name' => 'Heading',
                        'id' => $prefix . 'feature_heading',
                        'type' => 'text',
                    ),
                    array(
                        'name' => 'Description',
                        'id' => $prefix . 'feature_desc',
                        'type' => 'wysiwyg',
                    ),
                    // array(
                    //     'name' => 'Points',
                    //     'id' => $prefix . 'feature_points',
                    //     'type' => 'text',
                    //     // Clone whole group?
                    //     'clone'  => true,
                    //     // Drag and drop clones to reorder them?
                    //     'sort_clone' => true,
                    // ),
                    array(
                        'name' => 'Image',
                        'id' => $prefix . 'feature_image',
                        'type' => 'file_input',
                    ),
                ),
            ),
        )
    );
    $meta_boxes[] = array(
        'title'      => __( 'Slider', 'textdomain' ),
        'post_types' => array( 'product'),
        'fields' => array(
            array(
                'name' => 'Heading',
                'id' => $prefix . 'slider_heading',
                'type' => 'text',
            ),
            array(
                'name' => 'Button Text',
                'id' => $prefix . 'slider_btn_txt',
                'type' => 'text',
            ),
            array(
                'name' => 'Button Link',
                'id' => $prefix . 'slider_btn_link',
                'type' => 'text',
            ),
            // Group
            array(
                'name' => 'Single Slide', // Optional
                'id' => $prefix . 'slider_single',
                'type' => 'group',
                // Clone whole group?
                'clone'  => true,
                // Drag and drop clones to reorder them?
                'sort_clone' => true,
                // List of sub-fields
                'fields' => array(
                    array(
                        'name' => 'Heading',
                        'id' => $prefix . 'slide_heading',
                        'type' => 'text',
                    ),
                    array(
                        'name' => 'Content',
                        'id' => $prefix . 'slide_content',
                        'type' => 'wysiwyg',
                    )
                ),
            ),
        )
    );
    $meta_boxes[] = array(
        'title'      => __( 'Recognitions', 'textdomain' ),
        'post_types' => array( 'product'),
        'fields' => array(
            // Group
            array(
                'id' => $prefix . 'recognition_list',
                'type' => 'group',
                // Clone whole group?
                'clone'  => true,
                // Drag and drop clones to reorder them?
                'sort_clone' => true,
                // List of sub-fields
                'fields' => array(
                    array(
                        'name' => 'Name',
                        'id' => $prefix . 'recog_name',
                        'type' => 'text',
                    ),
                    array(
                        'name' => 'Image',
                        'id' => $prefix . 'recog_image',
                        'type' => 'file_input',
                    ),
                ),
            ),
        )
    );
    return $meta_boxes;
}
?>