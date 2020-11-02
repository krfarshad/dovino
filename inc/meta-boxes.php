<?php 
add_action( 'admin_init', 'service_page_meta_box' );
function service_page_meta_box() {
$service_page_meta_box = array(
  'id'        => 'home_meta',
  'title'     => 'Home meta',
  'pages'     => array( 'page' ),
  'context'   => 'normal',
  'priority'  => 'default',
  'fields'    => array(
    array(
      'id'          => 'home_slider',
      'label'       => 'Home Slider',
      'type'        => 'list-item',
      'settings'    => array( 
        array(
          'id'          => 'img_slider',
          'label'       => 'upload slider image',
          'type'        => 'upload',
        ),
        array(
          'id'          => 'img_alt',
          'label'       => 'image alt',
          'type'        => 'text',
        ),
  
        array(
          'id'          => 'slider_link',
          'label'       => 'slider link',
          'type'        => 'text',
        )
      )
        ),
  

 
    array(
      'id'          => 'home_services',
      'label'       => 'Home Services',
      'type'        => 'list-item',
      'settings'    => array( 
        array(
          'id'          => 'service_title',
          'label'       => 'type for header',
          'type'        => 'text',
        ),
        array(
          'id'          => 'icon_service',
          'label'       => 'choose an icon for service',
          'type'        => 'upload',
        ),

      )
        ),
  
      ));
  
  

$post_id = $_GET['post'] ? $_GET['post'] : $_POST['post_ID'];
$template_file = get_post_meta($post_id, '_wp_page_template', TRUE);

if ($template_file == 'homepage.php') {
    ot_register_meta_box( $service_page_meta_box );
}
}


add_action( 'admin_init', 'portfolio_meta_box' );
function portfolio_meta_box() {
$portfolio_meta_box = array(
'id'        => 'portfolio_items',
'title'     => 'portfolio meta',
'pages'     => array( 'portfolio' ),
'context'   => 'normal',
'priority'  => 'default',

'fields'    => array(
  array(
    'id'          => 'portfolio_link',
    'label'       => 'link of the project ',
    'type'        => 'text',
    'post_type'   => 'portfolio',
      ),

 array(
 'id'          => 'portfolio_equ',
 'label'       => 'equipment',
 'type'        => 'list-item',
 'post_type'   => 'portfolio',
 'settings'    => array( 
   array(
     'id'          => 'portfolio_path',
     'label'       => 'typing the equipment of this project',
     'post_type'   => 'portfolio',
     'type'        => 'text',
   ),
 )
   ),
   array(
     'id'          => 'portfolio_image',
     'label'       => 'complete image ',
     'type'        => 'upload',
     'post_type'   => 'portfolio',
       ),
),

); 

$post_id = $_GET['post'] ? $_GET['post'] : $_POST['post_ID'];
$template_file = get_post_meta($post_id, '_wp_page_template', TRUE);


    ot_register_meta_box( $portfolio_meta_box );

}



add_action( 'admin_init', 'service_template_meta_box' );
function service_template_meta_box() {
$service_template_meta_box = array(

  'id'        => 'service_meta',
  'title'     => 'Service page meta',
  'pages'     => array( 'page' ),
  'context'   => 'normal',
  'priority'  => 'default',
  'fields'    => array(
    array(
      'id'          => 'service_item',
      'label'       => 'Sdrvice Item',
      'type'        => 'list-item',
      'settings'    => array( 
        array(
          'id'          => 'img_service',
          'label'       => 'upload service icon',
          'type'        => 'upload',
        ),
        array(
          'id'          => 'service_title',
          'label'       => 'service title',
          'type'        => 'text',
        ),
  
        array(
          'id'          => 'service_desc',
          'label'       => 'service description',
          'type'        => 'text',
        )
      )
        ),
  
      ));
  
  

$post_id = $_GET['post'] ? $_GET['post'] : $_POST['post_ID'];
$template_file = get_post_meta($post_id, '_wp_page_template', TRUE);

if ($template_file == 'page-service.php') {
    ot_register_meta_box( $service_template_meta_box );
}
}

?>