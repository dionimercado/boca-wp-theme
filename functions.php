<?php

show_admin_bar( false );

function boca_maintenance() {
	if( !is_user_logged_in() && !is_page( '30' ) )
		wp_redirect( get_the_permalink( '30' ) );
}
add_action( 'template_redirect', 'boca_maintenance' );

// Set content width value based on the theme's design
if ( ! isset( $content_width ) )
	$content_width = 1110;

// Register Theme Features
function boca_theme_features()  {

	// Add theme support for Automatic Feed Links
	add_theme_support( 'automatic-feed-links' );

	// Add theme support for Post Formats
	add_theme_support( 'post-formats', array( 'gallery', 'image', 'video' ) );

	// Add theme support for Featured Images
	add_theme_support( 'post-thumbnails');

	// Add theme support for HTML5 Semantic Markup
	add_theme_support( 'html5', array( 'search-form', 'comment-form', 'comment-list', 'gallery', 'caption' ) );

	// Add theme support for document Title tag
	add_theme_support( 'title-tag' );

  // Add support for two custom navigation menus.
  register_nav_menus( array(
      'primary'   => __( 'Primary Menu', 'boca' ),
      'footer-links' => __('Footer Links', 'boca' )
  ) );

	// Register Sidebars
	function boca_sidebars() {

		$args = array(
			'id'            => 'sidebbar',
			'class'         => 'sidebar',
			'name'          => __( 'Sidebar', 'boca' ),
		);
		register_sidebar( $args );

	}
	add_action( 'widgets_init', 'boca_sidebars' );
}
add_action( 'after_setup_theme', 'boca_theme_features' );


// Register Custom Navigation Walker
// require_once get_stylesheet_directory() . '/inc/class-wp-bootstrap-navwalker.php';

/**
 * Enqueue script for child theme
 */
function boca_enqueue_scripts() {
  wp_enqueue_style( 'boca', get_template_directory_uri() . '/style.css', array('bootstrap'), uniqid() );
  wp_enqueue_style( 'bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css' );
  wp_enqueue_style( 'google-fonts', 'https://fonts.googleapis.com/css?family=Poppins:400,600,700' );
	// wp_enqueue_style( 'boca', get_stylesheet_directory_uri() . '/assets/css/boca.css', null, uniqid() );

  wp_enqueue_style( 'fancybox', 'https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.0.47/jquery.fancybox.min.css', array(), '3.3.7', 'all');
  wp_enqueue_style( 'owl-carousel', get_template_directory_uri() . '/assets/css/owl.carousel.min.css', array(), '2.2.1', 'all');
  wp_enqueue_style( 'owl-theme', get_template_directory_uri() . '/assets/css/owl.theme.default.min.css', array(), '2.2.1', 'all');

  wp_enqueue_script( 'fancybox', 'https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.0.47/jquery.fancybox.min.js', array ( 'jquery' ), '3.0.47', true);
  wp_enqueue_script( 'owl-carousel', get_template_directory_uri() . '/assets/js/owl.carousel.min.js', array ( 'jquery' ), '2.2.1', true);
  wp_enqueue_script( 'boca', get_template_directory_uri() . '/assets/js/boca.js', array ( 'jquery' ), uniqid(), true);
}
add_action( 'wp_enqueue_scripts', 'boca_enqueue_scripts', 1000000000 );

?>
