<?php


if ( ! function_exists( 'neuron_default_setup' ) ) :

	function neuron_default_setup() {
        // Theme Option PHP
        require_once('lib/csf/cs-framework.php');
        // define( 'CS_ACTIVE_FRAMEWORK',  true  );
        // define( 'CS_ACTIVE_METABOX',    true );
        // define( 'CS_ACTIVE_TAXONOMY',   false );
        // define( 'CS_ACTIVE_SHORTCODE',  false );
        // define( 'CS_ACTIVE_CUSTOMIZE',  true );
        // define( 'CS_ACTIVE_LIGHT_THEME',  false  );

        load_theme_textdomain( 'neuron', get_template_directory() . '/languages' );
        // Add default posts and comments RSS feed links to head.
        add_theme_support( 'automatic-feed-links' );
        add_theme_support( 'html5', array( 'search-form' ) );
        add_theme_support( 'title-tag' );
        add_theme_support( 'post-thumbnails' );
		// Enable the use of shortcodes in text widgets.
        add_filter( 'widget_text', 'do_shortcode' );
    // Add support for responsive embedded content.
        add_theme_support( 'responsive-embeds' );

        /*Add post formate*/
        add_theme_support( 'post-formats', array( 'quote', 'gallery', 'image', 'video', 'audio', 'link' ) );
        /*post thumbnail size*/
        set_post_thumbnail_size( 1568, 9999 );
        /*html5 support*/
        add_theme_support(
        	'html5',
        	array(
        		'search-form',
        		'comment-form',
        		'comment-list',
        		'gallery',
        		'caption',
        	)
        );
        /*Add custom logo*/
        add_theme_support(
        	'custom-logo',
        	array(
        		'height'      => 190,
        		'width'       => 190,
        		'flex-width'  => true,
        		'flex-height' => true,
        		'header-text' => array( 'site-title', 'site-description' ),
        	)
        );

        // Add support default header image
        $default_header = array(
        	'default-image'      => get_template_directory_uri() . '/assets/img/photography.png',
        	'default-text-color' => '000',
        	'width'              => 1000,
        	'height'             => 250,
        	'flex-width'         => true,
        	'flex-height'        => true
        );
        add_theme_support( 'custom-header', $default_header);
        // Add support custom background
        $defaults_bg = array(
        	'default-color'          => 'ffffff',
        	'default-image'          => get_template_directory_uri().'/assets/img/photography.png',
        	'default-repeat'         => 'repeat',
        	'default-position-x'     => 'left',
        	'default-position-y'     => 'top',
        	'default-size'           => 'auto',
        	'default-attachment'     => 'scroll',
        	'wp-head-callback'       => '_custom_background_cb',
        	'admin-head-callback'    => '',
        	'admin-preview-callback' => ''
        );
        add_theme_support( 'custom-background', $defaults_bg );


        if(function_exists('register_nav_menus')) {
        	register_nav_menus(
        		array(
        			'header-menu' => esc_html__( 'Header Menu', 'neuron' ),
        			'footer-menu' => esc_html__( 'Footer Menu', 'neuron' )
        		)
        	);
        }/*end if*/
    } /*Theme default function end*/
endif;
add_action( 'after_setup_theme', 'neuron_default_setup' );

function add_theme_scripts() {
   if (function_exists('wp_enqueue_style')) {
      wp_enqueue_style( 'animate', get_template_directory_uri() . '/assets/css/animate.min.css', array(), '1.1', 'all');
      wp_enqueue_style( 'font-awesome', get_template_directory_uri() . '/assets/fonts/font-awesome/css/font-awesome.min.css', array(), '1.1', 'all');
      wp_enqueue_style( 'owl-carousel', get_template_directory_uri() . '/assets/css/owl.carousel.min.css', array(), '1.1', 'all');
      wp_enqueue_style( 'bootsnav', get_template_directory_uri() . '/assets/css/bootsnav.css', array(), '1.1', 'all');
      wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/assets/bootstrap/css/bootstrap.min.css', array(), '1.1', 'all');
      wp_enqueue_style( 'style', get_stylesheet_uri() );
  }
  if (function_exists('wp_enqueue_script')) {
      wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/assets/bootstrap/js/bootstrap.min.js', array ( 'jquery' ), 1.1, true);
      wp_enqueue_script( 'bootsnav', get_template_directory_uri() . '/assets/js/bootsnav.js', array ( 'jquery' ), 1.1, true);
      wp_enqueue_script( 'owl-carousel', get_template_directory_uri() . '/assets/js/owl.carousel.min.js', array ( 'jquery' ), 1.1, true);
      wp_enqueue_script( 'wow', get_template_directory_uri() . '/assets/js/wow.min.js', array ( 'jquery' ), 1.1, true);
      wp_enqueue_script( 'neuron-script', get_template_directory_uri() . '/assets/js/script.js', array ( 'jquery' ), 1.1, true);
  }
  if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
      wp_enqueue_script( 'comment-reply' );
  }
}
add_action( 'wp_enqueue_scripts', 'add_theme_scripts' );

if(!function_exists('neuron_custom_posts')):
    function neuron_custom_posts() {
// Neuron Home Slider
       $slider_labels = array(
          'name'               => __( 'Sliders', 'neuron' ),
          'singular_name'      => __( 'Slider Name', 'neuron' ),
          'add_new'            => _x( 'Add New Slider', 'neuron', 'neuron' ),
          'name_admin_bar'     => _x('Slider', 'neuron'),
          'add_new_item'       => __( 'Add New Slider', 'neuron' ),
          'all_items'          => __( 'All Sliders', 'neuron' ),
          'edit_item'          => __( 'Edit Slider', 'neuron' ),
          'new_item'           => __( 'New Slider', 'neuron' ),
          'view_item'          => __( 'View Slider', 'neuron' ),
          'search_items'       => __( 'Search Sliders', 'neuron' ),
          'not_found'          => __( 'No Sliders found', 'neuron' ),
          'not_found_in_trash' => __( 'No Sliders found in Trash', 'neuron' ),
          'parent_item_colon'  => __( 'Parent Slider:', 'neuron' ),
          'menu_name'          => __( 'Neuron Sliders', 'neuron' ),
      );

       $slider_args = array(
          'labels'              => $slider_labels,
          'hierarchical'        => true,
          'description'         => 'Add home sliders',
          'public'              => false,
          'show_ui'             => true,
          'menu_position'       => null,
          'menu_icon'           => 'dashicons-slides',
          'capability_type'     => 'post',
          'supports'            => array(
             'title',
             'editor',
             'thumbnail',
         ),
      );
       register_post_type( 'sliders', $slider_args );

	// Promo List Item
       $promo_labels = array(
          'name'               => __( 'Promos', 'neuron' ),
          'singular_name'      => __( 'Promo Name', 'neuron' ),
          'add_new'            => _x( 'Add New Promo', 'neuron', 'neuron' ),
          'name_admin_bar'     => _x('Promo', 'neuron'),
          'all_items'          => __( 'All Promos', 'neuron' ),
          'add_new_item'       => __( 'Add New Promo', 'neuron' ),
          'edit_item'          => __( 'Edit Promo', 'neuron' ),
          'new_item'           => __( 'New Promo', 'neuron' ),
          'view_item'          => __( 'View Promo', 'neuron' ),
          'search_items'       => __( 'Search Promos', 'neuron' ),
          'not_found'          => __( 'No Promos found', 'neuron' ),
          'not_found_in_trash' => __( 'No Promos found in Trash', 'neuron' ),
          'parent_item_colon'  => __( 'Parent Slider:', 'neuron' ),
          'menu_name'          => __( 'Neuron Promos', 'neuron' ),
      );

       $args = array(
          'labels'              => $promo_labels,
          'hierarchical'        => true,
          'description'         => 'Add home sliders',
          'public'              => false,
          'show_ui'             => true,
          'menu_position'       => null,
          'menu_icon'           => 'dashicons-welcome-view-site',
          'capability_type'     => 'post',
          'supports'            => array(
             'title',
             'editor',
             'thumbnail',
             'page-attributes',
         ),
      );
       register_post_type( 'promos', $args );

	// Services List Item
       $service_labels = array(
          'name'               => __( 'Services', 'neuron' ),
          'singular_name'      => __( 'Service Name', 'neuron' ),
          'add_new'            => _x( 'Add New Service', 'neuron', 'neuron' ),
          'name_admin_bar'     => _x('Service', 'neuron'),
          'all_items'          => __( 'All Services', 'neuron' ),
          'add_new_item'       => __( 'Add New Service', 'neuron' ),
          'edit_item'          => __( 'Edit Service', 'neuron' ),
          'new_item'           => __( 'New Service', 'neuron' ),
          'view_item'          => __( 'View Service', 'neuron' ),
          'search_items'       => __( 'Search Services', 'neuron' ),
          'not_found'          => __( 'No Services found', 'neuron' ),
          'not_found_in_trash' => __( 'No Services found in Trash', 'neuron' ),
          'parent_item_colon'  => __( 'Parent Slider:', 'neuron' ),
          'menu_name'          => __( 'Neuron Services', 'neuron' ),
      );

       $service_args = array(
          'labels'              => $service_labels,
          'hierarchical'        => false,
          'description'         => 'Add Services Item',
          'public'              => false,
          'show_ui'             => true,
          'menu_position'       => null,
          'menu_icon'           => 'dashicons-welcome-write-blog',
          'capability_type'     => 'post',
          'supports'            => array(
             'title',
             'editor',
             'thumbnail',
             'page-attributes',
         ),
      );
       register_post_type( 'services', $service_args );

	// Portfolio List Item
       $work_labels = array(
          'name'               => __( 'Portfolios', 'neuron' ),
          'singular_name'      => __( 'Service Name', 'neuron' ),
          'add_new'            => _x( 'Add New Portfolio', 'neuron', 'neuron' ),
          'name_admin_bar'     => _x('Portfolio', 'neuron'),
          'all_items'          => __( 'All Portfolios', 'neuron' ),
          'add_new_item'       => __( 'Add New Portfolio', 'neuron' ),
          'edit_item'          => __( 'Edit Portfolio', 'neuron' ),
          'new_item'           => __( 'New Portfolio', 'neuron' ),
          'view_item'          => __( 'View Portfolio', 'neuron' ),
          'search_items'       => __( 'Search Portfolios', 'neuron' ),
          'not_found'          => __( 'No Portfolios found', 'neuron' ),
          'not_found_in_trash' => __( 'No Portfolios found in Trash', 'neuron' ),
          'parent_item_colon'  => __( 'Parent Slider:', 'neuron' ),
          'menu_name'          => __( 'Neuron Portfolios', 'neuron' ),
      );

       $work_args = array(
          'labels'              => $work_labels,
          'hierarchical'        => true,
          'description'         => 'Add Portfolios Item',
          'public'              => true,
          'show_ui'             => true,
          'query_var'           => true,
          'menu_position'       => null,
          'menu_icon'           => 'dashicons-portfolio',
          'capability_type'     => 'post',
          'rewrite'             => array( 'slug' => 'works' ),
          'supports'            => array(
             'title',
             'editor',
             'thumbnail',
         ),
      );
       register_post_type( 'works', $work_args );
   }
endif;
add_action( 'init', 'neuron_custom_posts' );

if(!function_exists('neuron_widgets_init')):
    function neuron_widgets_init() {
        if (function_exists('register_sidebar')) {
    	// Footer Widget 1
            register_sidebar(
                array(
                    'id'            => 'footer_widget_about',
                    'class'         => 'footer_widget_about',
                    'name'          => __( 'Footer Widget One', 'neuron' ),
                    'description'   => __( 'Add footer widget as you like', 'neuron' ),
                    'before_widget' => '<div class="footer-widget about-us">',
                    'after_widget'  => '</div>',
                    'before_title'  => '<h3 class="widget-title">',
                    'after_title'   => '</h3>',
                )
            );
    	// Footer Widget 2
            register_sidebar(
                array(
                    'id'            => 'footer_widget_link',
                    'class'         => 'footer_widget_link',
                    'name'          => __( 'Footer Widget Two', 'neuron' ),
                    'description'   => __( 'Add footer widget as you like', 'neuron' ),
                    'before_widget' => '<div class="footer-widget usefull-link"><ul>',
                    'after_widget'  => '</ul></div>',
                    'before_title'  => '<h3 class="widget-title">',
                    'after_title'   => '</h3>',
                )
            );
    	// Footer Widget 3
            register_sidebar(
                array(
                    'id'            => 'footer_widget_post',
                    'class'         => 'footer_widget_post',
                    'name'          => __( 'Footer Widget Three', 'neuron' ),
                    'description'   => __( 'Add footer widget as you like', 'neuron' ),
                    'before_widget' => '<div class="footer-widget latest-post">',
                    'after_widget'  => '</div>',
                    'before_title'  => '<h3 class="widget-title">',
                    'after_title'   => '</h3>',
                )
            );
    	// Footer Widget 4
            register_sidebar(
                array(
                    'id'            => 'footer_widget_subscribe',
                    'class'         => 'footer_widget_subscribe',
                    'name'          => __( 'Footer Widget Four', 'neuron' ),
                    'description'   => __( 'Add footer widget as you like', 'neuron' ),
                    'before_widget' => '<div class="footer-widget news-letter">',
                    'after_widget'  => '</div>',
                    'before_title'  => '<h3 class="widget-title">',
                    'after_title'   => '</h3>',
                )
            );
        }
    }
endif;

add_action( 'widgets_init', 'neuron_widgets_init' );

// Footer Recent Post Shortcode
function footer_recent_post($atts){
    extract( shortcode_atts( array(
        'count' => 3,
    ), $atts) );
    
    $q = new WP_Query(
        array('posts_per_page' => $count, 'post_type' => 'post')
    );
    
    $list = '<ul>';
    while($q->have_posts()) : $q->the_post();
        $idd = get_the_ID();
        $list .= '
        <li>
        '.get_the_post_thumbnail($idd, 'thumbnail').'
        <p><a href="'.get_permalink().'">'.get_the_title().'</a></p>
        <span>'.get_the_date( 'd M Y' ).'</span>
        </li>
        ';
    endwhile;
    $list.= '</ul>';
    wp_reset_query();
    return $list;
}
add_shortcode('footer_post_list', 'footer_recent_post');
