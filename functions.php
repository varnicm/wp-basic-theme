<?php
/**
 * Theme functions and definitions
 */
//**
// Add featured Image
/** */
add_theme_support( 'post-thumbnails' );
/**
 * Register Custom Navigation Walker
 */
function register_navwalker(){
	require_once get_template_directory() . '/inc/class-wp-bootstrap-navwalker.php';
}
add_action( 'after_setup_theme', 'register_navwalker' );
/**
 * Register new Menu
 */
register_nav_menus( array(
    'primary' => __( 'Primary Menu', 'THEMENAME' ),
) );
/**
 * Register footer Widget
 */
//IfDynamicSidebarExists
if(function_exists('register_sidebar')){
//DefineSidebarWidgetArea1
register_sidebar(array(
'name'=>'footer widget',
'description' => 'copyright text',
'before_widget' =>'<div class="block-footer">',
'before_title' =>'<h4 class="block-footer-title">',
'after_title'=> '</h4> <div>',
'after_widget' =>'</div></div>'
));
register_sidebar(array(
    'name'=>'event widget',
    'description' => 'event list',
    'before_widget' =>'<div class="block-footer">',
    'before_title' =>'<h4 class="block-footer-title">',
    'after_title'=> '</h4> <div>',
    'after_widget' =>'</div></div>'
    ));
register_sidebar(array(
    'name'=>'left sidebar',
    'description' => 'left sidebar',
    'before_widget' =>'<div>',
    'before_title' =>'',
    'after_title'=> '<div>',
    'after_widget' =>'</div></div>'
    ));
}











// register custom post type
function custom_post_type_musics() {
    $labels = array(
        'name'                  => 'musics',
        'singular_name'         => 'music',
        'menu_name'             => 'Musics',
        'add_new'               => 'Add New',
        'add_new_item'          => 'Add New music',
        'edit_item'             => 'Edit music',
        'new_item'              => 'New music',
        'view_item'             => 'View music',
        'search_items'          => 'Search musics',
        'not_found'             => 'No musics found',
        'not_found_in_trash'    => 'No musics found in Trash',
        'parent_item_colon'     => 'Parent music:',
        'all_items'             => 'All musics',
        'archives'              => 'music Archives',
        'insert_into_item'      => 'Insert into music',
        'uploaded_to_this_item' => 'Uploaded to this music',
        'featured_image'        => 'Featured Image',
        'set_featured_image'    => 'Set featured image',
        'remove_featured_image' => 'Remove featured image',
        'use_featured_image'    => 'Use as featured image',
        'filter_items_list'     => 'Filter musics list',
        'items_list_navigation' => 'musics list navigation',
        'items_list'            => 'musics list',
    );

    $args = array(
        'labels'              => $labels,
        'public'              => true,
        'publicly_queryable'  => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'query_var'           => true,
        'rewrite'             => array( 'slug' => 'musics' ),
        'capability_type'     => 'post',
        'has_archive'         => true,
        'hierarchical'        => false,
        'menu_position'       => 6,
        'menu_icon'           => 'dashicons-format-audio', 
        'supports'            => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' ),
    );

    register_post_type( 'music', $args );
}
//add_action( 'init', 'custom_post_type_musics' );







?>