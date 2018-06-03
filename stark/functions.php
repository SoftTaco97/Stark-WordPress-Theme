<?php

/*** Add Theme support below ***/


// Content Width

if ( ! isset( $content_width ) ) {
	$content_width = 1600;
}


// Adding Feed Link, Title Tags, Navwalker

function stark_setup() {
		
		add_theme_support('automatic-feed-links');
		add_theme_support('title-tag');
        add_theme_support('post-thumbnails');
        // Register Custom Navigation Walker 
        require_once( 'class-wp-bootstrap-navwalker.php' );
    
        register_nav_menus( array(
            'primary' => __( 'Primary Menu', 'Stark' ), ) );
        register_nav_menus( array(
            'secondary' => __( 'Footer Menu', 'Stark' ), ) );
        // Enabling customer headers
        $args = array(
            'flex-width'    => 'true',
            'width'         => 1600,
            'flex-height'   => 'true',
            'height'        => 700,
            'default-image' => get_template_directory_uri() . '/images/pexels-photo-685534.jpeg',
            'uploads'       => true,
        );
    
        add_theme_support( 'custom-header', $args );
        
        // Custom Logo
        add_theme_support( 'custom-logo', array(
            'height'      => 75,
            'width'       => 200,
            'flex-width' => true, ) );
        //Translating 
        load_theme_textdomain( 'stark', get_template_directory() . '/languages' );
	}
	
	add_action('after_setup_theme','stark_setup');

// Adding JS and CSS

function stark_scripts() {

    /* Stylesheets */
    wp_enqueue_style( 'bootstrap-style', get_template_directory_uri() . '/css/bootstrap.min.css' );
    wp_enqueue_style( 'stark-style', get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'font-awesome', 'https://use.fontawesome.com/releases/v5.0.6/css/all.css' );
    wp_enqueue_style( 'roboto-google', 'https://fonts.googleapis.com/css?family=Roboto');
    wp_enqueue_style( 'lobstertwo-google', 'https://fonts.googleapis.com/css?family=Lobster+Two');

    /* Scripts */
    wp_enqueue_script( 'bootstrap-script', get_template_directory_uri() . '/js/bootstrap.min.js', array('jquery'), '3.3.6', true );
    
    // Comment Reply Javascript activation
    if ( (!is_admin()) && is_singular() && comments_open() && get_option('thread_comments') )  wp_enqueue_script( 'comment-reply' );
}

    add_action('wp_enqueue_scripts','stark_scripts');


// Register Sidebars
function stark_sidebars() {

	$args = array(
		'id'            => 'main-sidebar',
		'class'         => 'main-sidebar-area',
		'name'          => __( 'Main Sidebar', 'stark' ),
		'description'   => __( 'The default layout sidebar which appears on archive.php, page.php, and single.php', 'stark' ),
		'before_title'  => '<h3>',
		'after_title'   => '</h3>',
		'before_widget' => '<div id="%1$s" class="sidebar-module %2$s">',
		'after_widget'  => '</div>',
	);
	register_sidebar( $args );

	$args = array(
		'id'            => 'footer-sidebar',
		'class'         => 'footer-widget-area',
		'name'          => __( 'Footer Widget Area', 'stark' ),
		'description'   => __( 'This is the Footer widget area, in footer.php', 'stark' ),
		'before_title'  => '<h3>',
		'after_title'   => '</h3>',
		'before_widget' => '<div id="%1$s" class="sidebar-module %2$s">',
		'after_widget'  => '</div>',
	);
	register_sidebar( $args );
    
     $args = array(
		'id'            => 'footer-center-sidebar',
		'class'         => 'footer-center-widget-area',
		'name'          => __( 'Footer Center Widget Area', 'stark' ),
		'description'   => __( 'The Footer Center Sidebar', 'stark' ),
		'before_title'  => '<h3>',
		'after_title'   => '</h3>',
		'before_widget' => '<div id="%1$s" class="sidebar-module %2$s">',
		'after_widget'  => '</div>',
	);
	register_sidebar( $args );

	$args = array(
		'id'            => 'top-left-sidebar',
		'class'         => 'top-left-widget-area',
		'name'          => __( 'Top left Widget Arera', 'stark' ),
		'description'   => __( 'The Top leftwidget area on the Two Widget Areas on Top page layout', 'stark' ),
		'before_title'  => '<h3>',
		'after_title'   => '</h3>',
		'before_widget' => '<div id="%1$s" class="sidebar-module %2$s">',
		'after_widget'  => '</div>',
	);
	register_sidebar( $args );

	$args = array(
		'id'            => 'top-right-sidebar',
		'class'         => 'top-right-widget-area',
		'name'          => __( 'Top Right Widget Area', 'stark' ),
		'description'   => __( 'The right top widget area on the Two Widget Areas on Top page layout', 'stark' ),
		'before_title'  => '<h3>',
		'after_title'   => '</h3>',
		'before_widget' => '<div id="%1$s" class="sidebar-module %2$s">',
		'after_widget'  => '</div>',
	);
	register_sidebar( $args );
    
    $args = array(
		'id'            => 'main-left-sidebar',
		'class'         => 'main-left-widget-area',
		'name'          => __( 'Main Left Widget Area', 'stark' ),
		'description'   => __( 'The Main Left Sidebar on the homepage', 'stark' ),
		'before_title'  => '<h3>',
		'after_title'   => '</h3>',
		'before_widget' => '<div id="%1$s" class="sidebar-module %2$s">',
		'after_widget'  => '</div>',
	);
	register_sidebar( $args );
    
    $args = array(
		'id'            => 'main-right-sidebar',
		'class'         => 'main-right-widget-area',
		'name'          => __( 'Main Right Widget Area', 'stark' ),
		'description'   => __( 'The Main Right Sidebar on the homepage', 'stark' ),
		'before_title'  => '<h3>',
		'after_title'   => '</h3>',
		'before_widget' => '<div id="%1$s" class="sidebar-module %2$s">',
		'after_widget'  => '</div>',
	);
	register_sidebar( $args );
    

}
add_action( 'widgets_init', 'stark_sidebars' );

// Read more Function

function custom_excerpt_more( $more ) {
	    return '...';
}
add_filter( 'excerpt_more', 'custom_excerpt_more' );

function custom_excerpt_length( $length ) {
	return 25;
}
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );

// Register Custom Post Type - Products
add_action( 'init', 'create_post_type' );
add_post_type_support( 'stark_product', 'thumbnail' );
function create_post_type() {
  register_post_type( 'stark_product',
      array(
         'labels' => array(
         'name' => __( 'Products' ),
         'singular_name' => __( 'Product' )
        ),
      'public' => true,
      'has_archive' => true,
    )
  );
}

// Modifies Comment Form Default Input Fields
add_filter( 'comment_form_default_fields', 'bootstrap3_comment_form_fields' );
  function bootstrap3_comment_form_fields( $fields ) {
      $commenter = wp_get_current_commenter();

      $req      = get_option( 'require_name_email' );
      $aria_req = ( $req ? " aria-required='true'" : '' );
      $html5    = current_theme_supports( 'html5', 'comment-form' ) ? 1 : 0;

      $fields   =  array(
        'author' => '<div class="form-group comment-form-author">' . '<label class="sr-only" for="author">' . __( 'Name' ) . ( $req ? ' <span class="required">*</span>' : '' ) . '</label> ' .
          '<input class="form-control" id="author" name="author" type="text" placeholder="Name *" value="' . esc_attr( $commenter['comment_author'] ) . '" size="30"' . $aria_req . ' /></div>',
          'email'  => '<div class="form-group comment-form-email"><label class="sr-only" for="email">' . __( 'Email' ) . ( $req ? ' <span class="required">*</span>' : '' ) . '</label> ' .
          '<input class="form-control" id="email" name="email" ' . ( $html5 ? 'type="email"' : 'type="text"' ) . ' placeholder="Email *"' . ' value="' . esc_attr(  $commenter['comment_author_email'] ) . '" size="30"' . $aria_req . ' /></div>',
      );

      return $fields;
}

// Modifies Comment Form Textarea Field
add_filter( 'comment_form_defaults', 'bootstrap3_comment_form' );
function bootstrap3_comment_form( $args ) {
    $args['comment_field'] = '<div class="form-group comment-form-comment">
                <label class="sr-only" for="comment">' . _x( 'Comment', 'noun' ) . '</label> 
                <textarea class="form-control" id="comment" name="comment" cols="45" placeholder="Comment" rows="8" aria-required="true"></textarea>
                </div>';
    $args['class_submit'] = 'btn btn-default'; // since WP 4.1
                                            
    return $args;
}

// Moves the Comment textarea to the bottom of the group of Comment Fields
function wpb_move_comment_field_to_bottom( $fields ) {
    $comment_field = $fields['comment'];
    unset( $fields['comment'] );
    $fields['comment'] = $comment_field;
    return $fields;
  }
add_filter( 'comment_form_fields', 'wpb_move_comment_field_to_bottom' );


// Theme Customizer

function stark_customizer_register( $wp_customize ) {

    // Theme Customizer -- Site Identity

    $wp_customize->get_control( 'display_header_text' )->label = __('Display Site Title', 'stark');
    // Changing Tagline to other text
    $wp_customize->get_control( 'blogdescription' )->label = __('Image Text', 'stark');
    // Changing Site Icon to other text
    $wp_customize->get_control( 'site_icon' )->label = __( 'Site Icon (favicon)', 'stark' );
    // Changing Site Identiy Priority
    $wp_customize->get_control( 'blogname' )->priority = 10;// Site Title
    $wp_customize->get_control( 'display_header_text' )->priority = 20;// Display Text
    $wp_customize->get_control( 'blogdescription' )->priority = 30;// Image Text
    $wp_customize->get_control( 'site_icon' )->priority = 40;// Icon
    
    // Theme Customizer -- Colors Section

    // Header Background Color Setting
    $wp_customize->add_setting( 'header_bg_color', array(
		  'default' => '#FFF;'
        ) );

    // Header Background Color Control -- This is a color picker control
    $wp_customize->add_control( 
		new WP_Customize_Color_Control( $wp_customize, 'header_bg_color', 
			array(
		  		'label' => __('Header Background Color', 'stark'),
                'priority' => 10,
				'section' => 'colors',
				'settings' => 'header_bg_color',
			     )    
                                      ) );
    
    // Site Title Background Color
    $wp_customize->add_setting( 'title_bg_color', array(
		  'default' => '#009AB7'
        ) );

    // Site Title Background Color Control -- This is a color picker control
    $wp_customize->add_control( 
		new WP_Customize_Color_Control( $wp_customize, 'title_bg_color', 
			array(
		  		'label' => __('Site Title Background Color', 'stark'),
                'priority' => 10,
				'section' => 'colors',
				'settings' => 'title_bg_color',
			     )    
                                      ) );
    
    // Header Text Color Setting
    $wp_customize->get_setting( 'header_textcolor' )->default = '#ffffff';
    $wp_customize->get_control( 'header_textcolor' )->label = __('Site Title Text Color', 'stark');
    
    
    // Nav Colors
    
    // Nav Text Color Setting
    $wp_customize->add_setting( 'nav_textcolor', array(
		  'default' => '#FFF;'
        ) );

    // Nav Text Color Control -- This is a color picker control
    $wp_customize->add_control( 
		new WP_Customize_Color_Control( $wp_customize, 'nav_textcolor', 
			array(
		  		'label' => __('Menu Text Color', 'stark'),
				'section' => 'colors',
				'settings' => 'nav_textcolor',
			     )    
                                      ) );
    // Nav Background Color
    $wp_customize->add_setting( 'nav_bg_color', array(
		  'default' => '#009AB7;'
        ) );

    // Nav Background Color Control -- This is a color picker control
    $wp_customize->add_control( 
		new WP_Customize_Color_Control( $wp_customize, 'nav_bg_color', 
			array(
		  		'label' => __('Menu Background Color', 'stark'),
				'section' => 'colors',
				'settings' => 'nav_bg_color',
			     )    
                                      ) );
    // Color Bar color
    $wp_customize->add_setting( 'color_bar', array(
		  'default' => '#00768C;'
        ) );

    // Nav Background Color Control -- This is a color picker control
    $wp_customize->add_control( 
		new WP_Customize_Color_Control( $wp_customize, 'color_bar', 
			array(
		  		'label' => __('Color Bar Divider', 'stark'),
				'section' => 'colors',
				'settings' => 'color_bar',
			     )    
                                      ) );
    
    // Home Page Area Colors

    $wp_customize->add_setting('home_area_colors', array(
  		'default'=> 'value1',
        ));

    $wp_customize->add_control( 'home_area_colors', 
                               array(
                                   'label'		 => __('Theme Color', 'stark' ),
                                   'priority'   => 12,
                                   'section'    => 'colors',
                                   'settings'   => 'home_area_colors',
                                   'type'       => 'radio', 
                                   'choices'    => array(
                                       'value1' => __( 'Light(Default)', 'stark' ),
                                       'value2' => __( 'Dark', 'stark' ),
                                   ),
                               )
                              );
    
    // Theme Customizer -- Rename and Describe Header Image Section
    $wp_customize->add_section( 'header_image' , array(
            'title'      => __( 'Hero Image', 'stark' ),
            'description' => __('Change the large hero image that appears on the Home page, and Blog page, if you created one.', 'stark'),
            'priority' => 60,
            ) );
    
    // Theme Customizer -- Rename and Describe Image in Welcome Section
    $wp_customize->add_section( 'main_image' , array(
            'title'      => __( 'Main Image', 'stark' ),
            'description' => __('Change the Large Image that Appears in the Main Section on the Front Page.', 'stark'),
            'priority' => 60,
            ) );
    
    $wp_customize->add_setting(
            'stark_main_image',
            array(
                'default'      => get_template_directory_uri() . '/images/pexels-photo-416754.jpeg',
                'transport'    => 'refresh'
            )
        );

    $wp_customize->add_control(
            new WP_Customize_Image_Control(
                $wp_customize,
                'stark_main_image',
                array(
                    'label'       => __( 'Main Image', 'stark' ),
                    'settings'    => 'stark_main_image', 
                    'section'     => 'stark_additional_area',
                    'description' => __( 'Recommended image size is approximately 500x500', 'stark' ),
                )
            )
        );
    
    // Theme Customizer -- Background Image CSS

    $wp_customize->add_section(
            'stark_additional_area',
            array(
                'title'       => __( 'Additional Section', 'snazzy' ),
                'priority'    => 70,
                'capability'  => 'edit_theme_options',
                'description' => __( 'Change the background image in the Addiontal Information Section of the Home Page', 'stark' ),
            )
        );

    $wp_customize->add_setting(
            'stark_background_image',
            array(
                'default'      => get_template_directory_uri() . '/images/pexels-photo-685530.jpeg',
                'transport'    => 'refresh'
            )
        );

    $wp_customize->add_control(
            new WP_Customize_Image_Control(
                $wp_customize,
                'stark_background_image',
                array(
                    'label'       => __( 'Background Image', 'stark' ),
                    'settings'    => 'stark_background_image', 
                    'section'     => 'stark_additional_area',
                    'description' => __( 'Recommended image size is approximately 1200x785 pixels', 'stark' ),
                )
            )
        );

    
    // Control/Setting for Third Section Call to Action Button
    $wp_customize->add_setting( 'call_to_action_title', array(
		'default'           => __('Testimonial', 'stark'),
		'sanitize_callback' => 'sanitize_text_field',
    ) );
    $wp_customize->add_control( 'call_to_action_title', array(
		'priority'    => 10,
		'section'     => 'stark_additional_area',
		'label'       => __( 'Input a title for the Call to action', 'stark' ),
		'description' => __( 'Call to Action Button defaults with "Testimonial"', 'stark' ),
    ) );

    // Control/Setting for Third Section Call to Action Button Link
    $wp_customize->add_setting( 'call_to_action_link', array(
		'default'           => 'http://yourbusiness.com/shop/',
		'sanitize_callback' => 'esc_url',
    ) );
    $wp_customize->add_control( 'call_to_action_link', array(
		'type'        =>  'url',
		'priority'    => 10,
		'section'     => 'stark_additional_area',
		'label'       => __( 'Link URL for the Call to Action Button', 'stark' ),
		'description' => '',
    ) );

}
add_action( 'customize_register', 'stark_customizer_register' );

// Add CSS from Theme Customizer to wp_head

function stark_customizer_css() {
?>
    <style>
        /*=== Style from The Customizer Colors Section - Header Background Color ===*/

        .navbar {
            background-color: <?php echo get_theme_mod( 'header_bg_color');
            ?>;
            border-color: <?php echo get_theme_mod('header_bg_color');
            ?>;

        }

        div.navbar-header a.navbar-brand {
            color: #<?php header_textcolor();
            ?>;
            background-color: <?php echo get_theme_mod('title_bg_color');
            ?>;
        }

        .nav li a {
            color: <?php echo get_theme_mod('nav_textcolor');
            ?>!important;
        }

        ul.nav.navbar-nav.navbar-right {
            background-color: <?php echo get_theme_mod('nav_bg_color');
            ?>;
        }

        .navbar-default .navbar-nav>.active>a,
        .navbar-default .navbar-nav>.active>a:focus,
        .navbar-default .navbar-nav>.active>a:hover {
            background-color: <?php echo get_theme_mod('nav_bg_color');
            ?>;
        }

        .navbar-nav>li>.dropdown-menu {
            background-color: <?php echo get_theme_mod('nav_bg_color');
            ?>;
            color: <?php echo get_theme_mod('nav_textcolor');
            ?>!important;
        }

        div.container-fluid div.row div.bottomfooter,
        .color {
            background-color: <?php echo get_theme_mod('color_bar');
            ?>!important;
        }

        <?php if (get_theme_mod('home_area_colors')=='value2'): ?>body,
        section#add div.row div.blog,
        section#add div.row div.socialfeed,
        .testimonial {
            background-color: #000 !important;
        }

        h1,
        h2,
        p,
        article,
        article a,
        main section#welcome,
        footer div.row div.social,
        footer div.row div.social a,
        .testimonial a {
            color: #FFF;
        }

        .pager li>a {
            color: #000;
        }

        <?php endif ?><?php if( get_theme_mod( 'stark_background_image')): ?>section#add {
            background-image: url("<?php echo get_theme_mod( 'stark_background_image' ) ?>");
        }

        <?php else: ?>section#add {
            background-image: url("<?php echo get_template_directory_uri() . '/images/placeholder-image.jpg'; ?>");
        }

        <?php endif;
        ?>

    </style>
    <?php
  }
add_action( 'wp_head', 'stark_customizer_css' );

// Dashboard Footer Customization

function stark_footer_admin () {

   echo '<p>'. '<a href="http://www.https://jaredmartinez.webhostingforstudents.com/cas211w/project.com" target="_blank">' . __('Stark Wordpress Theme', 'stark') . '</a>' . __(' | Designed by') . '<a href="http://https://jaredmartinez.webhostingforstudents.com/" target="_blank">' . __(' Martinez Development') . '</a></p>';
}
add_filter('admin_footer_text', 'stark_footer_admin');