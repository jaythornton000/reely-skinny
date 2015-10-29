<?php

/* =Styles & Script Libraries */
require_once('inc/enqueue-scripts.php');

/* =Kill the admin bar */
show_admin_bar( false );

/* =Menus */
function rs_register_menus() {
  register_nav_menus(
    array(
      'top-bar-l' => __( 'Top Bar Left' ),
      'top-bar-r' => __( 'Top Bar Right' ),
      'top-bar-mobile' => __( 'Top Bar Mobile' ),
      'footer-nav' => __( 'Footer Menu' )
    )
  );
}
function foundation_top_bar_r() {
    wp_nav_menu(array( 
        'container' => false,                           // remove nav container
        'container_class' => '',                        // class of container
        'menu' => '',                                   // menu name
        'menu_class' => 'top-bar-menu right',           // adding custom nav class
        'theme_location' => 'top-bar-r',                 // where it's located in the theme
        'before' => '',                                 // before each link <a> 
        'after' => '',                                  // after each link </a>
        'link_before' => '',                            // before each link text
        'link_after' => '',                             // after each link text
        'depth' => 5,                                   // limit the depth of the nav
        'fallback_cb' => false,                         // fallback function (see below)
        'walker' => new top_bar_walker()
  ));
}
function foundation_top_bar_l() {
    wp_nav_menu(array( 
        'container' => false,                           // remove nav container
        'container_class' => '',                        // class of container
        'menu' => '',                                   // menu name
        'menu_class' => 'top-bar-menu left',           // adding custom nav class
        'theme_location' => 'top-bar-l',                 // where it's located in the theme
        'before' => '',                                 // before each link <a> 
        'after' => '',                                  // after each link </a>
        'link_before' => '',                            // before each link text
        'link_after' => '',                             // after each link text
        'depth' => 5,                                   // limit the depth of the nav
        'fallback_cb' => false,                         // fallback function (see below)
        'walker' => new top_bar_walker()
  ));
}
function foundation_top_bar_mobile() {
    wp_nav_menu(array( 
        'container' => false,                           // remove nav container
        'container_class' => '',                        // class of container
        'menu' => '',                                   // menu name
        'menu_class' => 'top-bar-menu right',           // adding custom nav class
        'theme_location' => 'top-bar-mobile',                 // where it's located in the theme
        'before' => '',                                 // before each link <a> 
        'after' => '',                                  // after each link </a>
        'link_before' => '',                            // before each link text
        'link_after' => '',                             // after each link text
        'depth' => 5,                                   // limit the depth of the nav
        'fallback_cb' => false,                         // fallback function (see below)
        'walker' => new mobile_top_bar_walker()
  ));
}
add_action( 'init', 'rs_register_menus' );

class top_bar_walker extends Walker_Nav_Menu {
 
    function display_element( $element, &$children_elements, $max_depth, $depth=0, $args, &$output ) {
        $element->has_children = !empty( $children_elements[$element->ID] );
        $element->classes[] = ( $element->current || $element->current_item_ancestor ) ? 'active' : '';
        $element->classes[] = ( $element->has_children ) ? 'has-dropdown' : '';
    
        parent::display_element( $element, $children_elements, $max_depth, $depth, $args, $output );
    }
  
    function start_el( &$output, $object, $depth = 0, $args = array(), $current_object_id = 0 ) {
        $item_html = '';
        parent::start_el( $item_html, $object, $depth, $args ); 
    
        $output .= ( $depth == 0 ) ? '<li class="divider"></li>' : '';
    
        $classes = empty( $object->classes ) ? array() : (array) $object->classes;  
    
        if( in_array('label', $classes) ) {
            $output .= '<li class="divider"></li>';
            $item_html = preg_replace( '/<a[^>]*>(.*)<\/a>/iU', '<label>$1</label>', $item_html );
        }
        
  if ( in_array('divider', $classes) ) {
    $item_html = preg_replace( '/<a[^>]*>( .* )<\/a>/iU', '', $item_html );
  }
    
        $output .= $item_html;
    }
  
    function start_lvl( &$output, $depth = 0, $args = array() ) {
        $output .= "\n<ul class=\"sub-menu dropdown\">\n";
    }
    
}
class mobile_top_bar_walker extends Walker_Nav_Menu {
 
    function display_element( $element, &$children_elements, $max_depth, $depth=0, $args, &$output ) {
        $element->has_children = !empty( $children_elements[$element->ID] );
        $element->classes[] = ( $element->current || $element->current_item_ancestor ) ? 'active' : '';
        $element->classes[] = ( $element->has_children ) ? '' : '';
    
        parent::display_element( $element, $children_elements, $max_depth, $depth, $args, $output );
    }
  
    function start_el( &$output, $object, $depth = 0, $args = array(), $current_object_id = 0 ) {
        $item_html = '';
        parent::start_el( $item_html, $object, $depth, $args ); 
    
        $output .= ( $depth == 0 ) ? '<li class="divider"></li>' : '';
    
        $classes = empty( $object->classes ) ? array() : (array) $object->classes;  
    
        if( in_array('label', $classes) ) {
            $output .= '<li class="divider"></li>';
            $item_html = preg_replace( '/<a[^>]*>(.*)<\/a>/iU', '<label>$1</label>', $item_html );
        }
        
  if ( in_array('divider', $classes) ) {
    $item_html = preg_replace( '/<a[^>]*>( .* )<\/a>/iU', '', $item_html );
  }
    
        $output .= $item_html;
    }
  
    function start_lvl( &$output, $depth = 0, $args = array() ) {
        $output .= "\n<ul class=\"sub-menu\">\n";
    }
    
}

/* =Thumbnails */
add_theme_support( 'post-thumbnails' ); 

/* =Sidebars */
function rs_register_sidebars() {
	register_sidebar(array(
		'id' => 'rs-sidebar',
		'name' => __( 'Sidebar', 'rs' ),
		'description' => __( 'yeah... this one.', 'rs' ),
		'before_widget' => '<div class="widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h4 class="widgettitle">',
		'after_title' => '</h4>',
	));
	register_sidebar(array(
		'id' => 'rs-footer-widgets',
		'name' => __( 'Footer Widgets', 'rs' ),
		'description' => __( 'get down, yo.', 'rs' ),
		'before_widget' => '<div class="footer-widget %2$s large-4 medium-4 small-12 columns">',
		'after_widget' => '</div>',
		'before_title' => '<h4 class="footer-widget-title">',
		'after_title' => '</h4>',
	));
}
add_action( 'widgets_init', 'rs_register_sidebars' );

function rs_create_posttype() {
  register_post_type( 'rs-front-page',
    array(
      'labels' => array(
        'name' => __( 'Home Page' ),
        'singular_name' => __( 'Home Section' )
      ),
      'public' => true,
      'has_archive' => true,
      'rewrite' => array('slug' => 'home'),
      'supports' => array( 'title', 'editor', 'author', 'thumbnail' )
    )
  );
}
add_action( 'init', 'rs_create_posttype' );

function load_my_scripts() {
  wp_enqueue_script(
    'foundation_js',
    get_template_directory_uri() . '/js/foundation.min.js',
    array('jquery'),
    '5.0.2',
    true
  );
  wp_enqueue_script(
    'foundation_init_js',
    get_template_directory_uri() . '/js/foundation_init.js',
    array('foundation_js'),
    '1.0',
    true
  );
}
add_action('wp_enqueue_scripts', 'load_my_scripts',0);

$comments_args = array(
        // change the title of send button 
        'label_submit'=>'Send',
        // change the title of the reply section
        'title_reply'=>'Write a Reply or Comment',
        // remove "Text or HTML to be displayed after the set of comment fields"
        'comment_notes_after' => '',
        // redefine your own textarea (the comment body)
        'comment_field' => '<p class="comment-form-comment"><label for="comment">' . _x( 'Comment', 'noun' ) . '</label><br /><textarea id="comment" name="comment" aria-required="true"></textarea></p>',
);

comment_form($comments_args);

add_filter('widget_text', 'do_shortcode');