<?php if ( ! defined( 'ABSPATH' ) ) { die; } // Cannot access pages directly.

$options      = array();

// Neuron Slider Metabox Section
$options[]    = array(
  'id'        => 'neuron_slider_options',
  'title'     => esc_html__('Custom failds', 'neuron'),
  'post_type' => array('sliders'),
  'context'   => 'normal',
  'priority'  => 'default',
  'sections'  => array(
    array(
      'name'   => 'slider_options',
      'title' => esc_html__('Slider Options', 'neuron'),
      'icon'  => 'fa fa-tint',
      'fields' => array(
        array(
          'id'          => 'slider_btn',
          'type'        => 'text',
          'title'       => 'Button text',
          'desc'        => 'Enter button url',
          'default'     => 'Meet Experts',
          'help'        => esc_html__('Write home page slider button text', 'neuron'),
        ),
        array(
          'id'          => 'slider_btn_url',
          'type'        => 'text',
          'title'       => 'Button url',
          'desc'        => 'Enter button url with http',
          'default'     => 'https://www.yourlink.com',
          'help'        => esc_html__('Write home page slider button url', 'neuron'),
        ),
        array(
          'id'          => 'slider_btn_url_target',
          'type'        => 'switcher',
          'title'       => 'Open link new window',
          'desc'        => 'Switch on for link open new window',
          'default'     => true,
          'help'        => esc_html__('If you want to open link new window, so do on switch', 'neuron'),
        ),
      ),
    ),
  ),
);

// Neuron Portfolio Metabox Section
$options[]    = array(
  'id'        => 'neuron_works_options',
  'title'     => esc_html__('Portfolio metabox', 'neuron'),
  'post_type' => array('works'),
  'context'   => 'normal',
  'priority'  => 'default',
  'sections'  => array(
    array(
      'name'   => 'work_options',
      'title' => esc_html__('Portfolio Options', 'neuron'),
      'icon'  => 'fa fa-tint',
      'fields' => array(
        // Portfolio Category
        array(
          'id'          => 'work_category',
          'type'        => 'text',
          'title'       => esc_html__('Portfolio Category', 'neuron'),
          'desc'        => esc_html__('Write portfolio category', 'neuron'),
          'help'        => esc_html__('Write portfolio category', 'neuron'),
          'default'     => 'Development',
          'attributes'  => array(
            'placeholder' => esc_html__('Write portfolio category', 'neuron'),
          ),
        ),

        // Portfolio details big image
        array(
          'id'          => 'work_details_img',
          'type'        => 'image',
          'title'       => esc_html__('Portfolio details big image', 'neuron'),
          'desc'        => esc_html__('Upload portfolio big image', 'neuron'),
          'help'        => esc_html__('If you want use portfolio big image, you can upload a big image other wish use portfolio default image', 'neuron'),
          'class'       => 'img flueid',
          'add_title'   => 'Upload portfolio details big image',
        ),

        // Portfolio Options / Group
        array(
          'id'          => 'work_options',
          'type'        => 'group',
          'title'       => esc_html__('Portfolio options', 'neuron'),
          'desc'        => esc_html__('Add portfolio option', 'neuron'),
          'help'        => esc_html__('You can add portfolio option here', 'neuron'),
          'button_title'=> 'Add work option',
          'fields'    => array(
            array(
              'id'    => 'option_title',
              'title' => esc_html__('Option title','neuron'),
              'desc' => esc_html__('Add portfolio option title','neuron'),
              'help' => esc_html__('You can add your portfolio option titile, like, Client','neuron'),
              'type'  => 'text',
              'default' => 'Client',
            ),
            array(
              'id'    => 'option_value',
              'title' => esc_html__('Option value','neuron'),
              'desc' => esc_html__('Add portfolio option value','neuron'),
              'help' => esc_html__('You can add your portfolio option value, like, Client Name','neuron'),
              'type'  => 'text',
              'default' => 'ThemeForest',
            ),
          ),
        ),

        // Portfolio social share icons
        array(
          'id'          => 'work_social_icon',
          'type'        => 'group',
          'title'       => esc_html__('Portfolio social share icons', 'neuron'),
          'desc'        => esc_html__('Add portfolio social share icons', 'neuron'),
          'help'        => esc_html__('You can add portfolio social share icons here', 'neuron'),
          'button_title'=> 'Add social icon',
          'accordion_title_auto' => true,
          'fields'    => array(
            array(
              'id'    => 'social_icon',
              'title' => esc_html__('Social icon','neuron'),
              'desc' => esc_html__('Add social icon','neuron'),
              'help' => esc_html__('You can add social icon here','neuron'),
              'type'  => 'icon',
              'default' => 'fa fa-facebook'
            ),
            array(
              'id'    => 'social_url',
              'title' => esc_html__('Social URL','neuron'),
              'desc' => esc_html__('Add social url with http','neuron'),
              'help' => esc_html__('You can add your social profile link from here','neuron'),
              'type'  => 'text',
              'default' => 'https://facebook.com',
              'attributes'  => array(
                'placeholder' => esc_html__('Enter your social url with https', 'neuron'),
              ),
            ),
          ),
        ),

        // Portfolio button switch off notice
        array(
          'id'           => 'work_btn_switch_notice',
          'type'         => 'notice',
          'class'        => 'info',
          'content'      => esc_html__('Now you are success to hide portfolio button', 'neuron'),
          'help'         => esc_html__('Now theme portfolio button is hide', 'neuron'),
          'dependency'   => array( 'work_btn_switch', '!=', 'true' ),
        ),
        
        // Portfolio button switch for on or off
        array(
          'id'          => 'work_btn_switch',
          'type'        => 'switcher',
          'title'       => esc_html__('Hide portfolio button', 'neuron'),
          'desc'        => esc_html__('You can hide portfolio button', 'neuron'),
          'help'        => esc_html__('If you don\'n want portfolio button, you can switch off ', 'neuron'),
          'default'     => true,
        ),

        // Portfolio button text
        array(
          'id'          => 'work_btn_text',
          'type'        => 'text',
          'title'       => esc_html__('Portfolio button text', 'neuron'),
          'desc'        => esc_html__('Write portfolio button text', 'neuron'),
          'help'        => esc_html__('Write portfolio button text', 'neuron'),
          'default'     => 'Visit Website',
          'attributes'  => array(
            'placeholder' => esc_html__('Portfolio button text', 'neuron'),
          ),
          'dependency'   => array( 'work_btn_switch', '!=', false ),
        ),

        // Portfolio button url
        array(
          'id'          => 'work_btn_url',
          'type'        => 'text',
          'title'       => esc_html__('Portfolio button URL', 'neuron'),
          'desc'        => esc_html__('Write portfolio button URL', 'neuron'),
          'help'        => esc_html__('Write portfolio button URL', 'neuron'),
          'default'     => 'https://yourlink.com',
          'attributes'  => array(
            'placeholder' => esc_html__('Enter your url with https', 'neuron'),
          ),
          'dependency'   => array( 'work_btn_switch', '!=', false ),
        ),

        // Portfolio button url target
        array(
          'id'          => 'work_btn_url_target',
          'type'        => 'checkbox',
          'title'       => esc_html__('Open portfolio button URL in new window', 'neuron'),
          'desc'        => esc_html__('When click portfolio button then link open in new window', 'neuron'),
          'help'        => esc_html__('When click portfolio button then link open in new window', 'neuron'),
          'default'     => true,
          'dependency'   => array( 'work_btn_switch', '!=', false ),
        ),

      )
),
),
);


CSFramework_Metabox::instance( $options );
