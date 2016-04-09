


<?php











/*********************
SCRIPTS & ENQUEUEING
*********************/

// loading modernizr and jquery, and reply script
function joints_scripts_and_styles() {
  global $wp_styles; // call global $wp_styles variable to add conditional wrapper around ie stylesheet the WordPress way
  if (!is_admin()) {
    $theme_version = wp_get_theme()->Version;

	// removes WP version of jQuery
	wp_deregister_script('jquery');
	
	// loads jQuery 2.1.0
    wp_enqueue_script( 'jquery', get_template_directory_uri() . '/bower_components/foundation/js/vendor/jquery.js', array(), '2.1.0', false );
    
    // modernizr (without media query polyfill)
    wp_enqueue_script( 'modernizr', get_template_directory_uri() . '/bower_components/foundation/js/vendor/modernizr.js', array(), '2.5.3', false );
    
    // adding Foundation scripts file in the footer
    wp_enqueue_script( 'foundation-js', get_template_directory_uri() . '/bower_components/foundation/js/foundation.min.js', array( 'jquery' ), $theme_version, true );

    // register main stylesheet
    wp_enqueue_style( 'bootstrap-stylesheet', get_template_directory_uri() . '/bootstrap/css/bootstrap.css', array('jquery'));
    

    // Register the script like this for a theme:
    wp_register_script( 'bootstrap-script', get_template_directory_uri() . '/jkit/jquery.jkit.1.2.16.js', array( 'jquery' ) );
    // For either a plugin or a theme, you can then enqueue the script:
    wp_enqueue_script( 'bootstrap-script' );

    // Register the script like this for a theme:
    wp_register_script( 'jkit-script', get_template_directory_uri() . '/bootstrap/js/bootstrap.js', array( 'jquery' ) );
    // For either a plugin or a theme, you can then enqueue the script:
    wp_enqueue_script( 'jkit-script' );




    wp_register_script('slick_stylesheet', get_template_directory_uri() . '/slick/slick.css');
    wp_enqueue_script('slick_stylesheet');



    wp_register_script('slick_script', get_template_directory_uri() . '/slick/slick.js', array());
    wp_enqueue_script('slick_script');


   
    // register main stylesheet
    wp_enqueue_style( 'joints-stylesheet', get_template_directory_uri() . '/library/css/style.css', array(), $theme_version, 'all' );
    
    // register main stylesheet
    wp_enqueue_style( 'fonts-stylesheet', 'http://fast.fonts.net/cssapi/1ee17583-7f31-4dae-bcc1-d6e32043405c.css', array(), '', 'all' );

    // register foundation icons
    wp_enqueue_style( 'foundation-icons', get_template_directory_uri() . '/library/css/icons/foundation-icons.css', array(), $theme_version, 'all' );
    wp_enqueue_style( 'foundation-icons', get_template_directory_uri() . '/bootstrap/bootstrap.css', array(), $theme_version, 'all' );

    // comment reply script for threaded comments
    if ( is_singular() AND comments_open() AND (get_option('thread_comments') == 1)) {
      wp_enqueue_script( 'comment-reply' );
    }

    //adding scripts file in the footer
    //wp_enqueue_script( 'joints-js', get_template_directory_uri() . '/library/js/scripts.js', array( 'jquery' ), $theme_version, true );

  }
}





function joints_start() {

    // enqueue base scripts and styles
    add_action('wp_enqueue_scripts', 'joints_scripts_and_styles', 999);

} /* end joints start */








add_action('after_setup_theme','joints_start', 16);






