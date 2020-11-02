<?php
// constant
define('GTDU',get_template_directory_uri());

// enqueue
function flywp_enqueue_script(){
    // style
    wp_enqueue_style( 'bootstrap',GTDU.'/assets/css/bootstrap.min.css');
    wp_enqueue_style( 'all.min',GTDU.'/assets/css/all.min.css');
    wp_enqueue_style( 'animate',GTDU.'/assets/css/animate.css');
    wp_enqueue_style( 'swiper',GTDU.'/assets/css/swiper.min.css');
    wp_enqueue_style( 'fontello',GTDU.'/assets/css/fontello.css');
    wp_enqueue_style( 'style', get_stylesheet_uri());
    // script
    wp_enqueue_script("jquery");
    wp_enqueue_script( 'all', GTDU.'/assets/js/all.min.js',array(),'1.0.0',true );
    wp_enqueue_script( 'bootstrap', GTDU.'/assets/js/bootstrap.min.js',array(),'1.0.0',true );
    wp_enqueue_script( 'wow', GTDU.'/assets/js/wow.min.js',array(),'1.0.0',true );
    wp_enqueue_script( 'smoothscroll', GTDU.'/assets/js/smoothscroll.js',array(),'1.0.0',true );
    wp_enqueue_script( 'swiper', GTDU.'/assets/js/swiper.min.js',array(),'1.0.0',true );
    wp_enqueue_script( 'typed', GTDU.'/assets/js/typed.js',array(),'1.0.0',true );
    wp_enqueue_script( 'main', GTDU.'/assets/js/main.js',array(),'1.0.0',true );

}
add_action('wp_enqueue_scripts', 'flywp_enqueue_script');
if(is_admin()){
    function dovino_admin_enqueue(){
    wp_enqueue_style('dashicons');
        
    }
    add_action('admin_enqueue_script','dovino_admin_enqueue');
}
// option tree
add_filter( 'ot_show_new_layout', '__return_false' );
add_filter( 'ot_show_pages', '__return_false' );
add_filter( 'ot_theme_mode', '__return_true' );
add_filter( 'ot_meta_boxes', '__return_true' );
include_once( 'inc/option-tree/ot-loader.php' );
include_once( 'inc/theme-options.php' );
include_once( 'inc/meta-boxes.php' );


// after_setup _theme
function flywp_theme_setup(){
    add_theme_support('title-tag');
    add_theme_support( 'post-formats', array( 'aside', 'gallery','video' ) );
      add_theme_support('post-thumbnails');
      register_nav_menus(
          array(
      
        'header_menu' => ' منوی اصلی و منوی موبایل',
        'footer_mwnu' => 'منوی فوتر',
          )
    );
  };
add_action( 'after_setup_theme', 'flywp_theme_setup' );


// svg support

function add_file_types_to_uploads($file_types){
    $new_filetypes = array();
    $new_filetypes['svg'] = 'image/svg+xml';
    $file_types = array_merge($file_types, $new_filetypes );
    return $file_types;
    }
    add_filter('upload_mimes', 'add_file_types_to_uploads');

// post type
function portfolio_register_post_type() {
  $labels = array(
      'name'                  => _x( 'portfolio', 'Post type general name', 'flywp' ),
      'singular_name'         => _x( 'portfolio', 'Post type singular name', 'flywp' ),
      'menu_name'             => _x( 'portfolios', 'Admin Menu text', 'flywp' ),
      'name_admin_bar'        => _x( 'portfolio', 'Add New on Toolbar', 'flywp' ),
      'add_new'               => __( 'Add New', 'flywp' ),
      'add_new_item'          => __( 'Add New portfolio', 'flywp' ),
      'new_item'              => __( 'New portfolio', 'flywp' ),
      'edit_item'             => __( 'Edit portfolio', 'flywp' ),
      'view_item'             => __( 'View portfolio', 'flywp' ),
      'all_items'             => __( 'All portfolios', 'flywp' ),
      'search_items'          => __( 'Search portfolios', 'flywp' ),
      'parent_item_colon'     => __( 'Parent portfolios:', 'flywp' ),
      'not_found'             => __( 'No portfolios found.', 'flywp' ),
      'not_found_in_trash'    => __( 'No portfolios found in Trash.', 'flywp' ),
      'featured_image'        => _x( 'portfolio Cover Image', 'Overrides the “Featured Image” phrase for this post type. Added in 4.3', 'flywp' ),
      'set_featured_image'    => _x( 'Set cover image', 'Overrides the “Set featured image” phrase for this post type. Added in 4.3', 'flywp' ),
      'remove_featured_image' => _x( 'Remove cover image', 'Overrides the “Remove featured image” phrase for this post type. Added in 4.3', 'flywp' ),
      'use_featured_image'    => _x( 'Use as cover image', 'Overrides the “Use as featured image” phrase for this post type. Added in 4.3', 'flywp' ),
      'archives'              => _x( 'portfolio archives', 'The post type archive label used in nav menus. Default “Post Archives”. Added in 4.4', 'flywp' ),
      'insert_into_item'      => _x( 'Insert into portfolio', 'Overrides the “Insert into post”/”Insert into page” phrase (used when inserting media into a post). Added in 4.4', 'flywp' ),
      'uploaded_to_this_item' => _x( 'Uploaded to this portfolio', 'Overrides the “Uploaded to this post”/”Uploaded to this page” phrase (used when viewing media attached to a post). Added in 4.4', 'flywp' ),
      'filter_items_list'     => _x( 'Filter portfolios list', 'Screen reader text for the filter links heading on the post type listing screen. Default “Filter posts list”/”Filter pages list”. Added in 4.4', 'flywp' ),
      'items_list_navigation' => _x( 'portfolios list navigation', 'Screen reader text for the pagination heading on the post type listing screen. Default “Posts list navigation”/”Pages list navigation”. Added in 4.4', 'flywp' ),
      'items_list'            => _x( 'portfolios list', 'Screen reader text for the items list heading on the post type listing screen. Default “Posts list”/”Pages list”. Added in 4.4', 'flywp' ),
  );

  $args = array(
      'labels'             => $labels,
      'public'             => true,
      'publicly_queryable' => true,
      'show_ui'            => true,
      'show_in_rest'       => true,
      'taxonomies'          =>array('cats'),
      'query_var'          => true,
      'rewrite'            => array( 'slug' => 'portfolio' ),
      'capability_type'    => 'post',
      'has_archive'        => true,
      'hierarchical'       => false,
      'menu_position'      => 20,
      'menu_icon'           => 'dashicons-shortcode',
      'supports'           => array( 'title', 'thumbnail', 'comments','equipment' ),
  );

  register_post_type( 'portfolio', $args );
}

add_action( 'init', 'portfolio_register_post_type' );
// register taxonomy
function dovino_create_taxonomies(){
  $labels = array(
    'name'                       => 'cats',
    'singular_name'              => 'cat ',
  );
  $args = array(
    'hierarchical'          => true,
    'labels'                => $labels,
    'show_in_rest'          =>true,
    'show_ui'               => true,
  );
  register_taxonomy( 'cats', 'portfolio', $args );
}
add_action( 'init', 'dovino_create_taxonomies' );

// add_filter( 'use_block_editor_for_post_type', function( $enabled, $post_type ) {
//   return 'page' === $post_type ? false : $enabled;
// }, 10, 2 );
add_filter( 'use_block_editor_for_post_type', function( $enabled, $post_type ) {
  return 'post' === $post_type ? false : $enabled;
}, 10, 2 );

add_filter('excerpt_length','excerpt_length_edit',999);
function excerpt_length_edit($length){
  return 10;
}



add_action('widgets_init', 'widget_call_func');
function widget_call_func(){
	register_sidebar( array(
		'name'          => 'footer menu',
		'id'            => 'footer_quick_menu',
		'before_widget' => '<ul>',
		'after_widget'  => '</ul>',
		'before_title'  => '<div class="footer-title"><h6>',
		'after_title'   => '</h6></div>',
  ) );
  register_sidebar( array(
		'name'          => 'footer text block',
		'id'            => 'footer_aboutus',
		'before_widget' => '<p>',
		'after_widget'  => '</p>',
		'before_title'  => '<div class="footer-title"><h6>',
		'after_title'   => '</h6></div>',
	) );
}



















?>
