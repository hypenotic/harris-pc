<?php
/*
* Post Type: Page (Default)
* Dependancies:
* - MetaBox.io (https://metabox.io/) 
* - MB Custom Post Type (https://metabox.io/plugins/custom-post-type/) -> also makes custom taxonimies
* - MB Show Hide (https://metabox.io/plugins/meta-box-show-hide/)
* - MB Group (https://metabox.io/plugins/meta-box-group/)
* Details:
* This files constructs the fields for a default WP 'page'.
*/
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
            array(
               'id'   => $prefix . 'banner_gradient',
               'name' => __( 'Gradient Color', 'textdomain' ),
               'type' => 'color',
            ),
        ),
    );
    // HOME PAGE
    $meta_boxes[] = array(
        'title'      => __( 'Feature Buckets', 'textdomain' ),
        'post_types' => array( 'page'),
        'show'   => array(
            // List of page templates (used for page only). Array. Optional.
            'template'    => array( 'template-home.php' )
        ),
        'fields' => array(
            array(
                'name' => 'Points',
                'id' => $prefix . 'home_points',
                'type' => 'text',
                // Clone whole group?
                'clone'  => true,
                // Drag and drop clones to reorder them?
                'sort_clone' => true,
            ),
        )
    );
    // ABOUT PAGE
    $meta_boxes[] = array(
        'title'      => __( 'Our Story Content', 'textdomain' ),
        'post_types' => array( 'page'),
        'show'   => array(
            // List of page templates (used for page only). Array. Optional.
            'template'    => array( 'template-about.php' )
        ),
        'fields' => array(
            array(
                'name'  => __( 'Our Story Heading', 'textdomain' ),
                'desc'  => '',
                'id'    => $prefix . 'about_os_heading',
                'type'  => 'text',
                'clone' => false,
            ),
            array(
                'name'  => __( 'Our Story Overview', 'textdomain' ),
                'desc'  => '',
                'id'    => $prefix . 'about_os_overview',
                'type'  => 'wysiwyg',
                'clone' => false,
            ),
        )
    );
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
                'type'   => 'group',
                'clone'  => true,
                'sort_clone' => true,
                'collapsible' => true,
                'group_title' => array( 'field' => $prefix . 'TL_date'), // ID of the subfield
                'save_state' => true,
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
    $meta_boxes[] = array(
        'title'      => __( 'Team Content', 'textdomain' ),
        'post_types' => array( 'page'),
        'show'   => array(
            // List of page templates (used for page only). Array. Optional.
            'template'    => array( 'template-about.php', 'template-home.php'  )
        ),
        'fields' => array(
            array(
                'name'  => __( 'Team Section Heading', 'textdomain' ),
                'desc'  => '',
                'id'    => $prefix . 'about_team_heading',
                'type'  => 'text',
                'clone' => false,
            ),
            array(
                'name'  => __( 'Team Section Overview', 'textdomain' ),
                'desc'  => '',
                'id'    => $prefix . 'about_team_overview',
                'type'  => 'wysiwyg',
                'clone' => false,
            ),
        )
    );
    $meta_boxes[] = array(
        'title'      => __( 'Client Content', 'textdomain' ),
        'post_types' => array( 'page'),
        'show'   => array(
            // List of page templates (used for page only). Array. Optional.
            'template'    => array( 'template-about.php' )
        ),
        'fields' => array(
            array(
                'name'  => __( 'Client Section Heading', 'textdomain' ),
                'desc'  => '',
                'id'    => $prefix . 'about_client_heading',
                'type'  => 'text',
                'clone' => false,
            ),
            array(
                'name'  => __( 'Client Section Overview', 'textdomain' ),
                'desc'  => '',
                'id'    => $prefix . 'about_client_overview',
                'type'  => 'wysiwyg',
                'clone' => false,
            ),
        )
    );
    $meta_boxes[] = array(
        'title'      => __( 'Alliance & Partner Content', 'textdomain' ),
        'post_types' => array( 'page'),
        'show'   => array(
            // List of page templates (used for page only). Array. Optional.
            'template'    => array( 'template-about.php' )
        ),
        'fields' => array(
            array(
                'name'  => __( 'A&P Section Heading', 'textdomain' ),
                'desc'  => '',
                'id'    => $prefix . 'about_ap_heading',
                'type'  => 'text',
                'clone' => false,
            ),
            array(
                'name'  => __( 'A&P Section Overview', 'textdomain' ),
                'desc'  => '',
                'id'    => $prefix . 'about_ap_overview',
                'type'  => 'wysiwyg',
                'clone' => false,
            ),
        )
    );
    // BLOG PAGE
    // CONTACT PAGE
    return $meta_boxes;
}
?>