<?php
/**
 * Initialize the options before anything else.
 */
add_action( 'admin_init', 'custom_theme_options', 1 );

/**
 * Build the custom settings & update OptionTree.
 */
function custom_theme_options() {
  /**
   * Get a copy of the saved settings array. 
   */
  $saved_settings = get_option( 'option_tree_settings', array() );
  
  /**
   * Custom settings array that will eventually be 
   * passes to the OptionTree Settings API Class.
   */
  $custom_settings = array( 
'contextual_help' => array( 
'sidebar'=> ''
),
'sections'=> array( 
array('id'=>'header','title'=>'header'),
// array('id'=>'typography','title'=>'typography'),
array('id'=>'footer','title'=>'footer'),




),
'settings'=>array( 
    // header
    array(
      'id'          => 'logo_img',
      'label'       => 'upload your custom logo',
      'type'        => 'upload',
      'section'     => 'header',
    ),
    array(
      'id'          => 'typing_title',
      'label'       => 'typing text for header',
      'type'        => 'list-item',
      'section'     => 'header',
      'settings'    => array( 
        array(
          'title'=>'',
          'id'          => 'title_text',
          'label'       => 'text',
          'desc'        => '',
          'std'         => '',
          'type'        => 'text', 
          'class'       => '',
          'desc'        => '',
  
        ),
  
      ),
    ),
        // footer
        array(
          'id'          => 'phone_number',
          'label'       => 'phone number',
          'type'        => 'text',
          'section'     => 'footer',
        ),
        array(
          'id'          => 'email_add',
          'label'       => 'email address',
          'type'        => 'text',
          'section'     => 'footer',
        ),
        array(
          'id'          => 'copyright',
          'label'       => 'copyright',
          'type'        => 'text',
          'section'     => 'footer', 
        ),
  ));



  /* allow settings to be filtered before saving */
  $custom_settings = apply_filters( 'option_tree_settings_args', $custom_settings );
  /* settings are not the same update the DB */
  if ( $saved_settings !== $custom_settings ) {
    update_option( 'option_tree_settings', $custom_settings ); 
  }
}