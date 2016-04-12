<?php




function my_assets() {

	// removes WP version of jQuery
	wp_deregister_script('jquery');


	// bootstrap style
	//wp_enqueue_style( 'bootstrap-style', get_template_directory_uri().'/bootstrap/css/bootstrap.css' );
	//wp_enqueue_style( 'bootstrap-responsive-style', get_template_directory_uri() . '/bootstrap/css/bootstrap-responsive.css');
	wp_enqueue_style( 'slick-style', get_template_directory_uri() . '/slick/slick.css');


	// jquery script
	wp_enqueue_script( 'jquery', get_template_directory_uri() . '/jquery/jquery-2.2.2.min.js', array( ));

	// bootstrap script
	wp_enqueue_script( 'bootstrap_script', get_template_directory_uri() . '/bootstrap/js/bootstrap.js', array( 'jquery' ));

	// slick script
	wp_enqueue_script( 'slick-script', get_template_directory_uri() . '/slick/slick.js', array( 'jquery' ) );

    // Register the script like this for a theme:
    wp_register_script( 'jkit-script', get_template_directory_uri() . '/jkit/jquery.jkit.1.2.16.js', array( 'jquery' ) );
    // For either a plugin or a theme, you can then enqueue the script:
    wp_enqueue_script( 'jkit-script' );
  
}




add_action( 'wp_enqueue_scripts', 'my_assets' );





/*****************
**** RUSSEL CODE
*****************/

/* Add theme support for custom header ("Display Header Text" is now visible in our options) */
	$defaults = array(
		'default-image'			=>		get_template_directory_uri() . ' /images/test-header-image-400x150.png',
		'width'					=>		'246',
		'height'				=>		'121',
		'flex-height'			=>		'false',
		'flex-width'			=>		'false',
		'uploads'				=>		'true',
		'random-default'		=>		'false',
		'header-text'			=>		'true',
		'default-text-color'	=>		'',
		'wp-head-callback'		=>		'',
		'admin-head-callback'	=>		'',
		'admin-preview-callback'=>		'',
	);
	global $wp_version;
	if (version_compare( $wp_version, '3.4', '>=' )):
		add_theme_support( 'custom-header' , $defaults );
	else :
		add_custom_image_header( $wp_head_callback, $admin_head_callback );
	endif;

/* Add theme support for CUSTOM MENUS (This is the first menu created in the WordPress Dashboard) */
	register_nav_menus( array(
		'header' => __( 'Header Links Menu', 'lifewithstyle'),
		'credits' => __( 'Footer Links Menu', 'lifewithstyle' )
	));
	
/* Add theme support for custom search bar (search.php has not yet been created, WP default is used) */
add_theme_support( 'html5', array( 'search-form' ) );

/** 
 * Custom Login Form
 * 
 * - Redirect the user to the Administration Dashboard Screen after login
 * - Set the ID name for the form: id="loginform-custom".
 * - Change the text labels for the form elements
 * - Prints the "Remember Me" checkbox.
 * - If the user is already logged in, the form does not print; instead they see two links: Log Out | Site Admin
 *
 * This form doesn't appear if you are on the wp-admin page.
 * 
*/
	function display_login() {
		if ( ! is_user_logged_in() ) { // Display WordPress login form
			$args = array(
				'redirect' => admin_url(),
				'form_id' => 'loginform-custom',
				'label_username' => __( 'Username' ),
				'label_password' => __( 'Password' ),
				'label_remember' => __( 'Remember Me' ),
				'label_log_in' => __( 'Log In' ),
				'remember' => true
			);
			wp_login_form( $args );
		} else { // If logged in
			wp_loginout( home_url() ); // Display "Log Out" link.
			echo " | ";
			wp_register('',''); // Display "Site Admin" Link.
		}
	}

/** 
 * ADD SIDEBARS
 * 
 * - wp-includes/widgets.php
 * 
*/
	add_action('widgets_init','my_register_sidebars');
	
	function my_register_sidebars() {
		register_sidebar( /* Register the PRIMARY sidebar */
			array(
			'id' => 'primary',
			'name' => __('Primary'),
			'description' => __('Displayed under the content area.'),
			'before_widget' => '<div id="%1$s" class="widget%2$s">',
			'after_widget' => '</div>',
			'before_title' => '<h3 class="widget-title">',
			'after_title' => '</h3>',
		));
	
	/* Credit: justintadlock.com/archives/2010/11/08/sidebars-in-wordpress */
	}

/** 
 * CONTROLLING THE EXCERPT
 * 
*/
	function custom_excerpt_length( $length ) { // CONTROL LENGTH OF EXCERPT
		return 50;
	}
	add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );

	function new_excerpt_more( $more ) { // CONTROL MORE STRING
		return ' <br/><a class="read-more" href="'. get_permalink( get_the_ID() ) . '">' . __('Read More', 'your-text-domain') . '</a>';
	}
	add_filter( 'excerpt_more', 'new_excerpt_more' );

 
/**
 * FEATURED IMAGE THUMBNAIL
 *
*/
add_theme_support( 'post-thumbnails' ); 
set_post_thumbnail_size( 300, 250, true );
/**********************************/

/**
 * CUSTOM HEADER
 *
*/
$args = array(
	'width'         => 980,
	'height'        => 60,
	'flex-height'   => true,
	'flex-width'    => true,
	'default-image' => get_template_directory_uri() . '/images/test-header-image-400x150.png',
);

global $wp_version;
if ( version_compare( $wp_version, '3.4', '>=' ) ) :
	add_theme_support( 'custom-header', $args );
else :
	add_custom_image_header( $wp_head_callback, $admin_head_callback );
endif;
/****/






/**************************/
/* CUSTOM WALKER FUNCTION */
/**************************/
/*
*
* WordPress uses a special “Walker” class that iterates over each data record and then displays this record accordingly. The cool thing about that is that we can simply create our own custom walker extending that PHP class. That way we dont need to care about fetching the stuff from the database or preparing the data arrays. We only need to extend the part of the wordpress code that outputs the list. So open your functions.php file and add the following code:
* Credit Source: http://www.kriesi.at/archives/improve-your-wordpress-navigation-menu-output
*/

class description_walker extends Walker_Nav_Menu
{
      function start_el(&$output, $item, $depth, $args)
      {
           global $wp_query;
           $indent = ( $depth ) ? str_repeat( "\t", $depth ) : '';

           $class_names = $value = '';

           $classes = empty( $item->classes ) ? array() : (array) $item->classes;

           $class_names = join( ' ', apply_filters( 'nav_menu_css_class', array_filter( $classes ), $item ) );
           $class_names = ' class="'. esc_attr( $class_names ) . '"';

           $output .= $indent . '<li id="menu-item-'. $item->ID . '"' . $value . $class_names .'>';

           $attributes  = ! empty( $item->attr_title ) ? ' title="'  . esc_attr( $item->attr_title ) .'"' : '';
           $attributes .= ! empty( $item->target )     ? ' target="' . esc_attr( $item->target     ) .'"' : '';
           $attributes .= ! empty( $item->xfn )        ? ' rel="'    . esc_attr( $item->xfn        ) .'"' : '';
           $attributes .= ! empty( $item->url )        ? ' href="'   . esc_attr( $item->url        ) .'"' : '';

           $prepend = '';
           $append = '';
           $description  = ! empty( $item->description ) ? '<span>'.esc_attr( $item->description ).'</span>' : '';

           if($depth != 0)
           {
                     $description = $append = $prepend = "";
           }

            $item_output = $args->before;
            $item_output .= '<a'. $attributes .'>';
            $item_output .= $args->link_before .$prepend.apply_filters( 'the_title', $item->title, $item->ID ).$append;
            $item_output .= $description.$args->link_after;
            $item_output .= '</a>';
            $item_output .= $args->after;

            $output .= apply_filters( 'walker_nav_menu_start_el', $item_output, $item, $depth, $args );
            }
}






/*****************************    See for styling admin panel:
 * CUSTOM THEME OPTIONS MENU *    http://www.onextrapixel.com/2009/07/01/how-to-design-and-style-your-wordpress-plugin-admin-panel/
 *****************************
require_once(TEMPLATEPATH . '/functions/options.php'); // See admin-menu.php for the actual options page



?>

/*****************************************/
/* ENABLE SHORTCODE IN WIDGET TEXT ITEMS */
/*****************************************/
add_filter('widget_text', 'do_shortcode');