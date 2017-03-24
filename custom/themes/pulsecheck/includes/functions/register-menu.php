<?php
class Walker_MM_Menu extends Walker {

    // Tell Walker where to inherit it's parent and id values
    var $db_fields = array(
        'parent' => 'menu_item_parent', 
        'id'     => 'db_id' 
    );

    /**
     * At the start of each element, output a <li> and <a> tag structure.
     * 
     * Note: Menu objects include url and title properties, so we will use those.
     */
    function start_el( &$output, $item, $depth = 0, $args = array(), $id = 0 ) {
        $output .= sprintf( "\n<li class='mm-menu__item'><a class='mm-menu__link' href='%s'%s>%s</a></li>\n",
            $item->url,
            ( $item->object_id === get_the_ID() ) ? ' class="current"' : '',
            $item->title
        );
    }

}

class Main_Menu_Walker extends Walker {

  var $db_fields = array( 'parent' => 'menu_item_parent', 'id' => 'db_id' );
  
  function start_lvl( &$output, $depth = 0, $args = array() ) {
    $indent = str_repeat("\t", $depth);
    $output .= "\n$indent<ul>\n";
  }
  
  function end_lvl( &$output, $depth = 0, $args = array() ) {
    $indent = str_repeat("\t", $depth);
    $output .= "$indent</ul>\n";
  }
  
  function start_el( &$output, $item, $depth = 0, $args = array(), $id = 0 ) {
  
    global $wp_query;
    $indent = ( $depth ) ? str_repeat( "\t", $depth ) : '';
    $class_names = $value = ''; 
    $classes = empty( $item->classes ) ? array() : (array) $item->classes;
    
    /* Add active class */
    if(in_array('current-menu-item', $classes)) {
      $classes[] = 'active';
      unset($classes['current-menu-item']);
    }
    
    /* Check for children */
    $children = get_posts(array('post_type' => 'nav_menu_item', 'nopaging' => true, 'numberposts' => 1, 'meta_key' => '_menu_item_menu_item_parent', 'meta_value' => $item->ID));
    if (!empty($children)) {
      $classes[] = 'has-sub';
    }
    
    $class_names = join( ' ', apply_filters( 'nav_menu_css_class', array_filter( $classes ), $item, $args ) );
    $class_names = $class_names ? ' class="' . esc_attr( $class_names ) . '"' : '';
    
    $id = apply_filters( 'nav_menu_item_id', 'menu-item-'. $item->ID, $item, $args );
    $id = $id ? ' id="' . esc_attr( $id ) . '"' : '';
    
    if (!empty($children)) {
      $output .= $indent . '<li' . $id . $value . $class_names .'>';
    } else {
      $output .= $indent . '<li' . $id . $value . $class_names .'>';
    }
    
    $attributes  = ! empty( $item->attr_title ) ? ' title="'  . esc_attr( $item->attr_title ) .'"' : '';
    $attributes .= ! empty( $item->target )     ? ' target="' . esc_attr( $item->target     ) .'"' : '';
    $attributes .= ! empty( $item->xfn )        ? ' rel="'    . esc_attr( $item->xfn        ) .'"' : '';
    $attributes .= ! empty( $item->url )        ? ' href="'   . esc_attr( $item->url        ) .'"' : '';
    
    if(in_array('menu-item-object-service', $classes) && in_array('active', $classes)) {
    	$serviceid= get_post_meta( $item->ID, '_menu_item_object_id', true );
    	$inactive = get_post_meta( $serviceid, 'rw_menu_inactive', false );
    	$inactiveurl = wp_get_attachment_url( $inactive[0] );
    	$active = get_post_meta( $serviceid, 'rw_menu_active', false );
    	$activeurl = wp_get_attachment_url( $active[0] );
    	$blurb = get_post_meta( $serviceid, 'rw_menu_blurb', false );
      	$item_output = $args->before;
      	$item_output .= '<a'. $attributes .' class="active-service" data-active="'.$activeurl.'" data-inactive="'.$inactiveurl.'"><img src="'.$activeurl.'"><span class="menu-sub-item-title"><span class="menu-title-highlight"></span><span class="the-sub-item-title">';
      	$item_output .= $args->link_before . apply_filters( 'the_title', $item->title, $item->ID ) . $args->link_after;
      	$item_output .= '</span></span><span class="menu-sub-item-blurb">'.$blurb[0].'</span></a>';
      	$item_output .= $args->after;
    } else if (in_array('menu-item-object-service', $classes)) {
		$serviceid= get_post_meta( $item->ID, '_menu_item_object_id', true );
		$inactive = get_post_meta( $serviceid, 'rw_menu_inactive', false );
		$inactiveurl = wp_get_attachment_url( $inactive[0] );
		$active = get_post_meta( $serviceid, 'rw_menu_active', false );
		$activeurl = wp_get_attachment_url( $active[0] );
		$blurb = get_post_meta( $serviceid, 'rw_menu_blurb', false );
	  	$item_output = $args->before;
	  	$item_output .= '<a'. $attributes .' data-active="'.$activeurl.'" data-inactive="'.$inactiveurl.'"><img src="'.$inactiveurl.'"><span class="menu-sub-item-title"><span class="menu-title-highlight"></span><span class="the-sub-item-title">';
	  	$item_output .= $args->link_before . apply_filters( 'the_title', $item->title, $item->ID ) . $args->link_after;
	  	$item_output .= '</span></span><span class="menu-sub-item-blurb">'.$blurb[0].'</span></a>';
	  	$item_output .= $args->after;
    } else if (in_array('menu-item-has-children', $classes) && in_array('menu-item-object-product', $classes)) {
    	$item_output = $args->before;
    	$item_output .= '<a'. $attributes .'><span>';
    	$item_output .= $args->link_before . apply_filters( 'the_title', $item->title, $item->ID ) . $args->link_after;
    	$item_output .= '</span></a><span class="menu-description">' . $item->description . '</span>';
    	$item_output .= $args->after;
    } else {
      $item_output = $args->before;
      $item_output .= '<a'. $attributes .'><span>';
      $item_output .= $args->link_before . apply_filters( 'the_title', $item->title, $item->ID ) . $args->link_after;
      $item_output .= '</span></a>';
      $item_output .= $args->after;
    }

    
    $output .= apply_filters( 'walker_nav_menu_start_el', $item_output, $item, $depth, $args );
  }
  
  function end_el( &$output, $item, $depth = 0, $args = array() ) {
    $output .= "</li>\n";
  }
}
?>