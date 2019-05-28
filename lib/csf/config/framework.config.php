<?php if ( ! defined( 'ABSPATH' ) ) { die; } // Cannot access pages directly.

$settings           = array(
  'menu_title'      => 'Theme Options',
  'menu_type'       => 'menu', // menu, submenu, options, theme, etc.
  'menu_slug'       => 'theme-options',
  'ajax_save'       => true,
  'show_reset_all'  => true,
  'menu_position'   => 29,
  'framework_title' => 'Neuron Theme Options <small>by <a href="https://www.themechoose.com" target="_blank">ThemeChoose</a></small>',
);

$options        = array();

// Theme Default Options
// ------------------------------
// a option section with tabs   -
// ------------------------------
$options[]   = array(
  'name'     => 'neurotn_default',
  'title'    => esc_html__('General Settings', 'neuron'),
  'icon'     => 'fa fa-cogs',
  'sections' => array(
    // -----------------------------
    // begin: header top options         -
    // -----------------------------
    array(
      'name'      => 'header_top_area',
      'title'     => esc_html__('Header Top Settings','neuron'),
      'icon'      => 'fa fa-check',
      // begin: fields
      'fields'    => array(
        // begin: a field
        array(
          'id'          => 'header_top_switch',
          'type'        => 'switcher',
          'title'       => esc_html__('Hide header top area', 'neuron'),
          'desc'        => esc_html__('You can omit header top area by switch off', 'neuron'),
          'help'        => esc_html__('If you want to hide theme header top area, now click switch off', 'neuron'),
          'default'     => true,
          'label'       => esc_html__('Hide Header top by presing this switch', 'neuron'),
        ),
        array(
          'id'          => 'header_top_switch_notice',
          'type'        => 'notice',
          'class'       => 'warning',
          'content'     => esc_html__('You are success to hide theme header top area', 'neuron'),
          'help'        => esc_html__('Now the theme header top area are hide', 'neuron'),
          'dependency'  => array( 'header_top_switch', '!=', 'true' ),
        ),
        array(
          'id'              => 'header_top_left',
          'type'            => 'group',
          'title'           => esc_html__('Header top left contact', 'neuron'),
          'desc'            => esc_html__('Add header left contact info', 'neuron'),
          'help'            => esc_html__('You can add header top left contact no and email', 'neuron'),
          'button_title'    => esc_html__('Add Contact Info', 'neuron'),
          'accordion_title' => esc_html__('Contact info', 'neuron'),
          'dependency'      => array( 'header_top_switch', '!=', 'false' ),
          'fields'          => array(
            array(
              'id'    => 'header_top_icon',
              'type'  => 'icon',
              'title' => esc_html__('Add icon', 'neuron'),
              'default' => 'fa fa-phone',
            ),
            array(
              'id'    => 'header_top_text',
              'type'  => 'text',
              'title' => esc_html__('Add text', 'neuron'),
              'default' => '+123 213 214'
            ),
          ),
        ),
        array(
          'id'              => 'header_top_social',
          'type'            => 'group',
          'title'           => esc_html__('Header top right social', 'neuron'),
          'desc'            => esc_html__('Add header right social icon and url', 'neuron'),
          'help'            => esc_html__('You can add header top right social icon and text', 'neuron'),
          'button_title'    => esc_html__('Add Social Info', 'neuron'),
          'accordion_title' => esc_html__('Social info', 'neuron'),
          'dependency'      => array( 'header_top_switch', '!=', 'false' ),
          'fields'          => array(
            array(
              'id'    => 'header_top_social_icon',
              'type'  => 'icon',
              'title' => esc_html__('Add icon', 'neuron'),
              'default' => 'fa fa-phone',
            ),
            array(
              'id'    => 'header_top_social_url',
              'type'  => 'text',
              'title' => esc_html__('Add URL', 'neuron'),
              'default' => 'https://google.com'
            ),
          ),
        ),
      ),
    ),
    array(
      'name'      => 'theme_logo',
      'title'     => esc_html__('Theme Logo','neuron'),
      'icon'      => 'fa fa-check',
      // begin: fields
      'fields'    => array(
        array(
          'id'    => 'neuron_logo',
          'type'  => 'image',
          'title'  => esc_html__('Theme Logo', 'neuron'),
          'desc'  => esc_html__('Add your logo', 'neuron'),
          'help'  => esc_html__('You can add logo by upload here', 'neuron'),
          'add_title' => 'Upload logo',
        ),
      ),
    ),
    array(
      'name'      => 'neuron_footer',
      'title'     => esc_html__('Footer Settings','neuron'),
      'icon'      => 'fa fa-check',
      // begin: fields
      'fields'    => array(
        array(
          'id'        => 'footer_copyright',
          'type'      => 'text',
          'title'     => esc_html__('Footer copyright text', 'neuron'),
          'desc'      => esc_html__('Add footer copyright text', 'neuron'),
          'help'      => esc_html__('You can add theme footer copyright text', 'neuron'),
          'default'   => esc_html__('All right reserve Neuron, By ', 'neuron')
        ),
        // copyright text woner hide switch
        array(
          'id'          => 'footer_copyright_woner_switch',
          'type'        => 'switcher',
          'title'       => esc_html__('Hide Footer copyright woner text and link', 'neuron'),
          'desc'        => esc_html__('Hide footer copyright woner text', 'neuron'),
          'help'        => esc_html__('You can add theme footer copyright woner text', 'neuron'),
          'default'     => true,
        ),
        // copyright text woner hide switch notice
        array(
          'id'    => 'footer_copyright_woner_notice',
          'type'  => 'notice',
          'class' => 'warning',
          'content'=> 'You are success to hide footer woner copyright text and link',
          'desc'  => esc_html__('Hide footer copyright woner text', 'neuron'),
          'help'  => esc_html__('Success to hide footer copyright woner text and link', 'neuron'),
          'default'=> true,
          'dependency'  => array( 'footer_copyright_woner_switch', '!=', 'true' ),
        ),
        // copyright text woner link
        array(
          'id'    => 'footer_copyright_woner',
          'type'  => 'text',
          'title'  => esc_html__('Footer copyright woner text', 'neuron'),
          'desc'  => esc_html__('Add footer copyright woner text', 'neuron'),
          'help'  => esc_html__('You can add theme footer copyright woner text', 'neuron'),
          'dependency'  => array( 'footer_copyright_woner_switch', '!=', 'false' ),
          'default' => esc_html__('ThemeFores', 'neuron')
        ),
        // copyright text woner link
        array(
          'id'    => 'footer_copyright_woner_link',
          'type'  => 'text',
          'title'  => esc_html__('Footer copyright woner link', 'neuron'),
          'desc'  => esc_html__('Add footer copyright woner link', 'neuron'),
          'help'  => esc_html__('You can add theme footer copyright text link', 'neuron'),
          'dependency'  => array( 'footer_copyright_woner_switch', '!=', 'false' ),
          'default'   => 'https://www.google.com'
        ),
      ),
    ),
    array(
      'name'      => 'custom_code',
      'title'     => esc_html__('Theme Custom CSS','neuron'),
      'icon'      => 'fa fa-check',
        // begin: fields
      'fields'    => array(
        array(
          'id'    => 'custom_code_editor',
          'type'  => 'wysiwyg',
          'title'  => esc_html__('Add custom style CSS', 'neuron'),
          'desc'  => esc_html__('Add custom css', 'neuron'),
          'help'  => esc_html__('You can add custom css here for style your theme', 'neuron'),
          'settings' => array(
            'textarea_rows' => 20,
            'tinymce'       => false,
            'media_buttons' => false,
          )
        ),
      ),
    ),
  )
);

/*
* Template Home section
*/

$options[]   = array(
  'name'     => 'template_home',
  'title'    => 'Template Home',
  'icon'     => 'fa fa-empire',
  'sections' => array(
    array(
      'name'      => 'template_home_promo',
      'title'     => 'Promo Section',
      'icon'      => 'fa fa-check',
      'fields'    => array(
        // Promo section title
        array(
          'id'        => 'promo_section_titile',
          'type'      => 'wysiwyg',
          'title'     => esc_html__('Promo title', 'neuron'),
          'desc'      => esc_html__('Add promo section title here', 'neuron'),
          'default'   => esc_html__('Welcome to the Neuron Finance', 'neuron'),
          'settings'  => array(
            'textarea_rows' => 2,
            'tinymce'       => true,
            'media_buttons' => true,
          )
        ),
        // Promo section content
        array(
          'id'        => 'promo_section_content',
          'type'      => 'wysiwyg',
          'title'     => esc_html__('Promo content', 'neuron'),
          'desc'      => esc_html__('Add promo section content here', 'neuron'),
          'default'   => esc_html__('This is default content, insert more content from theme option', 'neuron'),
          'settings'  => array(
            'textarea_rows' => 5,
            'tinymce'       => true,
            'media_buttons' => true
          )
        ),
      ),
    ),
    array(
      'name'      => 'template_home_content',
      'title'     => 'Content Section',
      'icon'      => 'fa fa-check',
      'fields'    => array(
        // Content section title
        array(
          'id'        => 'content_section_titile',
          'type'      => 'wysiwyg',
          'title'     => esc_html__('Content title', 'neuron'),
          'desc'      => esc_html__('Add content section title here', 'neuron'),
          'default'   => esc_html__('A Finance Agency Crafting Beautiful & Engaging Online Experiences', 'neuron'),
          'settings'  => array(
            'textarea_rows' => 2,
            'tinymce'       => true,
            'media_buttons' => true
          )
        ),
        // Content section content
        array(
          'id'        => 'content_section_content',
          'type'      => 'wysiwyg',
          'title'     => esc_html__('Home content', 'neuron'),
          'desc'      => esc_html__('Add content section pragraph here', 'neuron'),
          'default'   => esc_html__('This is default content, insert more content from theme option', 'neuron'),
          'settings'  => array(
            'textarea_rows' => 5,
            'tinymce'       => true,
            'media_buttons' => true,
            'wpautop'     => false,
          )
        ),
        // Content section image
        array(
          'id'        => 'content_section_img',
          'type'      => 'image',
          'title'     => esc_html__('Home content image', 'neuron'),
          'desc'      => esc_html__('Add content section image or anything here', 'neuron'),
        ),
      ),
    ),
    // Services Section
    array(
      'name'      => 'template_home_services',
      'title'     => 'Services Section',
      'icon'      => 'fa fa-check',
      'fields'    => array(
        // Services section title
        array(
          'id'        => 'services_section_titile',
          'type'      => 'wysiwyg',
          'title'     => esc_html__('Service title', 'neuron'),
          'desc'      => esc_html__('Add service section title here', 'neuron'),
          'default'   => esc_html__('We Provide Huge Range of Services', 'neuron'),
          'settings'  => array(
            'textarea_rows' => 2,
            'tinymce'       => true,
            'media_buttons' => true,
          )
        ),
        // Services section content
        array(
          'id'        => 'services_section_content',
          'type'      => 'wysiwyg',
          'title'     => esc_html__('Services content', 'neuron'),
          'desc'      => esc_html__('Add services section content here', 'neuron'),
          'default'   => esc_html__('This is default content, insert more content from theme option', 'neuron'),
          'settings'  => array(
            'textarea_rows' => 5,
            'tinymce'       => true,
            'media_buttons' => true
          )
        ),
      ),
    ),
// Home client section
    array(
      'name'      => 'template_home_client',
      'title'     => 'Client Section',
      'icon'      => 'fa fa-check',
      'fields'    => array(
        // Content section title
        array(
          'id'        => 'home_clients',
          'type'      => 'group',
          'title'     => esc_html__('Home client section', 'neuron'),
          'button_title'  => esc_html__('Add New Client', 'neuron'),
          'accordion_title' => esc_html__('Client', 'neur'),
          'fields'  => array(
            array(
              'id'    => 'home_client_img',
              'type'  => 'image',
              'title' => esc_html__('Add client image', 'neuron'),
            ),
            array(
              'id'    => 'home_client_img_url',
              'type'  => 'text',
              'title' => esc_html__('Add client image url', 'neuron'),
              'default' => 'https://www.yourlink.com'
            ),
          )
        ),
      ),
    ),

  )
);

/*
*
*  Template About Section
*  
*/

$options[]    = array(
  'name'       => 'template_about',
  'title'      => esc_html__('Template About', 'neuron'),
  'icon'       => 'fa fa-podcast',
  'sections'   => array(
    array(
      'name'      => 'about_content',
      'title'     => esc_html__('About Content', 'neuron'),
      'icon'      => 'fa fa-check',
      'fields'    => array(
        // About titile
        array(
          'id'          => 'about_content_title',
          'type'        => 'wysiwyg',
          'title'       => esc_html__('About title', 'neuron'),
          'desc'        => esc_html__('Enter about title', 'neuron'),
          'default'     => esc_html__('A Finance Agency Crafting Beautiful & Engaging Online Experiences', 'neuron'),
          'settings'        => array(
            'textarea_rows' => 2,
            'tinymce'       => true,
            'media_buttons' => true,
          )
        ),
        // About content
        array(
          'id'        => 'about_content_content',
          'type'      => 'wysiwyg',
          'title'     => esc_html__('Content section', 'neuron'),
          'desc'      => esc_html__('Enter about content', 'neuron'),
          'default'   => esc_html__('This is default content, insert content theme option', 'neuron'),
          'settings'        => array(
            'textarea_rows' => 5,
            'tinymce'       => true,
            'media_buttons' => true,
            'wpautop'       => false,
          )
        ),
        // About content image
        array(
          'id'        => 'about_content_img',
          'type'      => 'image',
          'title'     => esc_html__('Upload about right image', 'neuron'),
          'desc'      => esc_html__('Upload about right image', 'neuron'),
          'add_title' => 'Upload Image',
        ),
      )
    ),
    // Accordian Section
    array(
      'name'    => 'about_accordian',
      'title'   => esc_html__('About Accordian', 'neuron'),
      'icon'    => 'fa fa-check',
      'fields'  => array(
        array(
          'id'              => 'accordion_contents',
          'type'            => 'group',
          'title'           => esc_html__('Accordian section', 'neuron'),
          'desc'            => esc_html__('Add about accordian', 'neuron'),
          'button_title'    => 'Add New Accordian',
          'accordion_title' => 'About Accordian',
          'fields'      => array(
            array(
              'id'      => 'accordion_title',
              'type'    => 'text',
              'title'   => esc_html__('Accordian title', 'neuron'),
              'default' => esc_html__('Proactively brand holistic applications before', 'neuron')
            ),
            array(
              'id'      => 'accordion_content',
              'type'    => 'textarea',
              'title'   => esc_html__('Accordian content', 'neuron'),
              'default' => esc_html__('This is default content, insert content from theme option', 'neuron'),
            ),
          ),
        ),
        array(
          'id'        => 'accordian_right_title',
          'type'      => 'text',
          'title'     => esc_html__('Accordian right title', 'neuron'),
          'default'   => esc_html__('Know More About Us', 'neuron'),
        ),
        array(
          'id'              => 'accordian_right_content',
          'type'            => 'wysiwyg',
          'title'           => esc_html__('Accordian right pragraph', 'neuron'),
          'default'         => esc_html__('This is default content', 'neuron'),
          'settings'        => array(
            'textarea_rows' => 5,
            'tinymce'       => true,
            'media_buttons' => true,
            'wpautop'       => false,
          )
        ),
        array(
          'id'        => 'about_client_hide',
          'type'      => 'switcher',
          'title'     => esc_html__('Hide client section', 'neuron'),
          'label'     => esc_html__('Hide client section from about page', 'neuron'),
          'default'   => true,
        ),
        array(
          'id'        => 'about_client_hide_notice',
          'type'      => 'notice',
          'class'     => 'warning',
          'content'   => esc_html__('You are success to hide client section', 'neuron'),
          'dependency'=> array('about_client_hide', '==', 'false')
        )
      )
    )
  )
);

/*
* Template Services
*/

$options[]        = array(
  'name'      => 'template_services',
  'title'     => esc_html__('Template Services', 'neuron'),
  'icon'      => 'fa fa-plus-circle',
  'sections'   => array(
    array(
      'name'    => 'service_content',
      'title'   => esc_html__('Services content', 'neuron'),
      'icon'    => 'fa fa-check',
      'fields'  => array(
        array (
          'id'          => 'services_promo_img',
          'type'        => 'image',
          'title'       => esc_html__('Service promo image', 'neuron'),
          'desc'        => esc_html__('Enter services promo image', 'neuron'),
        ),
        array (
          'id'          => 'services_promo_title',
          'type'        => 'wysiwyg',
          'title'       => esc_html__('Service promo title', 'neuron'),
          'desc'        => esc_html__('Enter services promo title', 'neuron'),
          'default'     => esc_html__('This is default title', 'neuron'),
          'settings'    => array(
            'textarea_rows' => 2,
            'tinymce'       => true,
            'media_buttons' => true,
          ),
        ),
        array (
          'id'          => 'services_promo_content',
          'type'        => 'wysiwyg',
          'title'       => esc_html__('Service promo content', 'neuron'),
          'desc'        => esc_html__('Enter services promo content', 'neuron'),
          'default'     => esc_html__('This is default content', 'neuron'),
          'settings'    => array(
            'textarea_rows' => 7,
            'tinymce'       => true,
            'media_buttons' => true,
            'wpautop'       => false,
          ),
        ),
      ),
    ),
  ),
);

/*
*
 *   Template Works Section
 *
 */

$options[] = array(
  'name'    => 'works',
  'title'   => esc_html__('Template Works', 'neuron'),
  'icon'    => 'fa fa-dot-circle-o',
  'sections'=> array(
    array(
      'name'    => 'neuron_works',
      'title'   => esc_html__('Works section', 'neuron'),
      'icon'    => 'fa fa-check',
      'fields'  => array(
        array(
          'id'    => 'work_section_title',
          'type'  => 'wysiwyg',
          'title' => esc_html__('Work section title', 'neuron'),
          'desc'  => esc_html__('Write work section title', 'neuron'),
          'default'   => esc_html__('Check Otut Our Latest portfolios', 'neuron'),
          'settings' => array(
            'textarea_rows' => 2,
            'tinymce'       => true,
            'media_buttons' => true,
          )
        ),
        array(
          'id'    => 'work_section_content',
          'type'  => 'wysiwyg',
          'title' => esc_html__('Work section content', 'neuron'),
          'desc'  => esc_html__('Write work section content', 'neuron'),
          'default'   => esc_html__('This is default content', 'neuron'),
          'settings' => array(
            'textarea_rows' => 5,
            'tinymce'       => true,
            'media_buttons' => true,
          )
        ),
      ),
    ),
    array(
      'name'    => 'work_testimonial',
      'title'   => esc_html__('Work testimonial', 'neuron'),
      'icon'    => 'fa fa-check',
      'fields'  => array(
        array(
          'id'       => 'testimonial_content',
          'type'     => 'wysiwyg',
          'title'    => esc_html__('Testimonial content', 'neuron'),
          'desc'     => esc_html__('Write testimonial quote', 'neuron'),
          'default'  => esc_html__('This is default quote', 'neuron'),
          'settings' => array(
            'textarea_rows' => 5,
            'tinymce'       => true,
            'media_buttons' => true,
            'wpautop'       => true,
          )
        ),
        array(
          'id'       => 'testimonial_title',
          'type'     => 'wysiwyg',
          'title'    => esc_html__('Testimonial title', 'neuron'),
          'desc'     => esc_html__('Write testimonial title', 'neuron'),
          'default'  => esc_html__('Lewis Parsons', 'neuron'),
          'settings' => array(
            'textarea_rows' => 2,
            'tinymce'       => true,
            'media_buttons' => true,
          )
        ),
        array(
          'id'       => 'testimonial_sub_title',
          'type'     => 'wysiwyg',
          'title'    => esc_html__('Testimonial subtitle title', 'neuron'),
          'desc'     => esc_html__('Write testimonial subtitle title', 'neuron'),
          'default'  => esc_html__('CEO, Fintech', 'neuron'),
          'settings' => array(
            'textarea_rows' => 2,
            'tinymce'       => true,
            'media_buttons' => true,
          )
        ),
      )
    )
  )
);

/*
*
* Template Contact Section
*
*/

$options[] =    array(
  'name'    => 'contact_section',
  'title'   => esc_html__('Template Contact', 'neuron'),
  'icon'    => 'fa fa-rocket',
  'sections'=> array(
    array(
      'name'    => 'contact_details',
      'title'   => esc_html__('Contact Details', 'neuron'),
      'icon'    => 'fa fa-check',
      'fields'  => array(
        array(
          'id'    => 'contact_section_title',
          'type'  => 'text',
          'title' => esc_html__('Contact section title', 'neuron'),
          'desc'  => esc_html__('Write contact section title', 'neuron'),
          'default'=> esc_html__('Get In Touch With Us','neuron'),
        ),
        array(
          'id'    => 'contact_section_content',
          'type'  => 'textarea',
          'title' => esc_html__('Contact section content', 'neuron'),
          'desc'  => esc_html__('Write contact section content', 'neuron'),
          'default'=> esc_html__('Holisticly transform excellent systems rather than collaborative leadership. ','neuron'),
        ),
        array(
          'id'    => 'contact_form_short_code',
          'type'  => 'wysiwyg',
          'title' => esc_html__('Contact form short code', 'neuron'),
          'desc'  => esc_html__('Enter contact form short code', 'neuron'),
          'settings' => array(
            'textarea_rows' => 2,
            'tinymce'       => false,
            'media_buttons' => true,
          )
        ),
        array(
          'id'    => 'contact_address',
          'type'  => 'group',
          'title' => esc_html__('Contact address', 'neuron'),
          'desc'  => esc_html__('Write contact address', 'neuron'),
          'button_title'    => 'Add contact',
          'accordion_title' => 'Address Item',
          'fields'    => array(
            array(
              'id'  => 'contact_icon',
              'type'  => 'icon',
              'title'   => esc_html__('Contact Icon', 'neuron'),
              'desc'    => esc_html__('Add contact icon', 'neuron'),
              'default' => 'fa fa-facebook',
            ),
            array(
              'id'  => 'contact_text',
              'type'  => 'textarea',
              'title'   => esc_html__('Contact Text', 'neuron'),
              'desc'    => esc_html__('Add contact text', 'neuron'),
              'default' => '305 Royal Track Suite 019. New York United States of America.',
            ),
          ),
        ),
      )
    )
  )
);

// ------------------------------
// backup                       -
// ------------------------------
$options[]   = array(
  'name'     => 'backup_section',
  'title'    => 'Backup',
  'icon'     => 'fa fa-shield',
  'fields'   => array(

    array(
      'type'    => 'notice',
      'class'   => 'warning',
      'content' => 'You can save your current options. Download a Backup and Import.',
    ),

    array(
      'type'    => 'backup',
    ),

  )
);

CSFramework::instance( $settings, $options );
