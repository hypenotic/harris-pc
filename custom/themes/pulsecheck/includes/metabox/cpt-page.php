<?php
add_filter( 'rwmb_meta_boxes', 'pc_register_default' );
function pc_register_default( $meta_boxes ) {
    $prefix = 'rw_';
    // ALL PAGES
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
    // ABOUT PAGE
    $meta_boxes[] = array(
        'title'      => __( 'Timeline', 'textdomain' ),
        'post_types' => array( 'page'),
        'show'   => array(
            // List of page templates (used for page only). Array. Optional.
            'template'    => array( 'template-about.php' )
        ),
        'fields' => array(
            array(
                'name'  => __( 'Heading', 'textdomain' ),
                'desc'  => '',
                'id'    => $prefix . 'timeline_heading',
                'type'  => 'text',
                'clone' => false,
            ),
            // Group
            array(
                'name' => 'Timeline Points', // Optional
                'id' => $prefix . 'TL_points',
                'type' => 'group',
                // Clone whole group?
                'clone'  => true,
                // Drag and drop clones to reorder them?
                'sort_clone' => true,
                // List of sub-fields
                'fields' => array(
                    array(
                        'name' => 'Date',
                        'id' => $prefix . 'TL_date',
                        'type' => 'text',
                    ),
                    array(
                        'name' => 'Description',
                        'id' => $prefix . 'TL_desc',
                        'type' => 'textarea',
                    ),
                ),
            ),
        )
    );
    // BLOG PAGE
    // CONTACT PAGE
    return $meta_boxes;
}
?>