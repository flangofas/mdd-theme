<?php
/**
 * Material Design Dentistry functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Material_Design_Dentistry
 */

if ( ! function_exists( 'material_design_custom_type_slide' ) ) :
	/**
	 * Register a custom post type called "slide".
	 *
	 * @see get_post_type_labels() for label keys.
	 */
	function material_design_custom_type_slide() {
	    $labels = array(
	        'name'                  => _x( 'Slides', 'Post type general name', 'mdd' ),
	        'singular_name'         => _x( 'Slide', 'Post type singular name', 'mdd' ),
	        'menu_name'             => _x( 'Slides', 'Admin Menu text', 'mdd' ),
	        'name_admin_bar'        => _x( 'Slide', 'Add New on Toolbar', 'mdd' ),
	        'add_new'               => __( 'Add New', 'mdd' ),
	        'add_new_item'          => __( 'Add New Slide', 'mdd' ),
	        'new_item'              => __( 'New Slide', 'mdd' ),
	        'edit_item'             => __( 'Edit Slide', 'mdd' ),
	        'view_item'             => __( 'View Slide', 'mdd' ),
	        'all_items'             => __( 'All Slides', 'mdd' ),
	        'search_items'          => __( 'Search Slides', 'mdd' ),
	        'parent_item_colon'     => __( 'Parent Slides:', 'mdd' ),
	        'not_found'             => __( 'No slides found.', 'mdd' ),
	        'not_found_in_trash'    => __( 'No slides found in Trash.', 'mdd' ),
	        'featured_image'        => _x( 'Slide Image', 'Overrides the “Featured Image” phrase for this post type. Added in 4.3', 'mdd' ),
	        'set_featured_image'    => _x( 'Set image', 'Overrides the “Set featured image” phrase for this post type. Added in 4.3', 'mdd' ),
	        'remove_featured_image' => _x( 'Remove image', 'Overrides the “Remove featured image” phrase for this post type. Added in 4.3', 'mdd' ),
	        'use_featured_image'    => _x( 'Use as image', 'Overrides the “Use as featured image” phrase for this post type. Added in 4.3', 'mdd' ),
	        'archives'              => _x( 'Slide archives', 'The post type archive label used in nav menus. Default “Post Archives”. Added in 4.4', 'mdd' ),
	        'insert_into_item'      => _x( 'Insert into slide', 'Overrides the “Insert into post”/”Insert into page” phrase (used when inserting media into a post). Added in 4.4', 'mdd' ),
	        'uploaded_to_this_item' => _x( 'Uploaded to this slide', 'Overrides the “Uploaded to this post”/”Uploaded to this page” phrase (used when viewing media attached to a post). Added in 4.4', 'mdd' ),
	        'filter_items_list'     => _x( 'Filter slides list', 'Screen reader text for the filter links heading on the post type listing screen. Default “Filter posts list”/”Filter pages list”. Added in 4.4', 'mdd' ),
	        'items_list_navigation' => _x( 'Slides list navigation', 'Screen reader text for the pagination heading on the post type listing screen. Default “Posts list navigation”/”Pages list navigation”. Added in 4.4', 'mdd' ),
	        'items_list'            => _x( 'Slides list', 'Screen reader text for the items list heading on the post type listing screen. Default “Posts list”/”Pages list”. Added in 4.4', 'mdd' ),
	    );

	    $args = array(
	        'labels'             => $labels,
	        'public'             => true,
	        'publicly_queryable' => true,
	        'show_ui'            => true,
	        'show_in_menu'       => true,
	        'query_var'          => true,
	        'rewrite'            => array( 'slug' => 'slide' ),
	        'capability_type'    => 'post',
	        'has_archive'        => true,
	        'hierarchical'       => false,
	        'menu_position'      => null,
	        'supports'           => array( 'title', 'editor', 'thumbnail', 'custom-fields', 'page-attributes'),
	    );

	    register_post_type( 'slide', $args );
	}

endif;

add_action( 'init', 'material_design_custom_type_slide' );


if ( ! function_exists( 'material_design_get_sections' ) ) :
	/**
	 * Gather featured pages and add post_thumbnail_url property to WP_Post object.
	 *
	 * @return array Array of WP_Post objects
	 */
	function material_design_get_sections() {
		$args = [
			'sort_column' => 'menu_order',
		];
		$pages = get_pages($args);
		foreach ($pages as $index => $page) {
			if (!get_post_meta( $page->ID, 'featured', true )) {
				unset($pages[$index]);
				continue;
			}
			$page->link = get_page_link($page->ID);
			$page->post_thumbnail_url = get_the_post_thumbnail_url($page->ID);
		}

		return $pages;
	}
endif;

if ( ! function_exists( 'material_design_the_excerpt' ) ) :
	/**
	 * Append read more to page excerpt.
	 *
	 * @param  [type] $excerpt [description]
	 * @return [type]          [description]
	 */
	function material_design_the_excerpt($post) {
		return $post->post_excerpt . '...<a class="read-more" href="'. get_permalink($post->ID) . '">' . __('Read more', 'mmd') . '</a>';
	}
endif;

if ( ! function_exists( 'material_design_add_excerpt_to_pages' ) ) :
	/**
	 * Add excerpt to pages, same as posts.
	 * @return void
	 */
	function material_design_add_excerpt_to_pages() {
		add_post_type_support( 'page', 'excerpt' );
	}
endif;
add_action( 'init', 'material_design_add_excerpt_to_pages' );

if ( ! function_exists( 'material_design_dentistry_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function material_design_dentistry_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on Material Design Dentistry, use a find and replace
	 * to change 'material-design-dentistry' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'material-design-dentistry', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
	add_theme_support( 'title-tag' );

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
	 */
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => esc_html__( 'Primary', 'material-design-dentistry' ),
		'footer-left' => esc_html__( 'Footer left', 'material-design-dentistry' ),
		'footer-social-media' => esc_html__( 'Footer Social Media', 'material-design-dentistry' ),
	) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );

	// Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'material_design_dentistry_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );
}
endif;
add_action( 'after_setup_theme', 'material_design_dentistry_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function material_design_dentistry_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'material_design_dentistry_content_width', 640 );
}
add_action( 'after_setup_theme', 'material_design_dentistry_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function material_design_dentistry_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'material-design-dentistry' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'material-design-dentistry' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'material_design_dentistry_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function material_design_dentistry_scripts() {
	wp_enqueue_script( 'material-design-dentistry-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

	wp_enqueue_script( 'material-design-dentistry-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}

	// Add Material scripts and styles
	if( !is_admin()){
		wp_deregister_script('jquery');
		wp_enqueue_script( 'material-jquery', 'http://code.jquery.com/jquery-2.1.3.min.js', array(), '1.0', false );
	}
	wp_enqueue_style( 'material-icons', 'http://fonts.googleapis.com/icon?family=Material+Icons' );
	wp_enqueue_script( 'material-script', get_template_directory_uri() . '/js/bin/materialize.js', array(), '1.0', false );
	wp_enqueue_script( 'material-custom', get_template_directory_uri() . '/js/theme/init.js', array(), '1.0', false );
	wp_enqueue_script( 'material-custom', get_template_directory_uri() . '/js/theme/navigation.js', array(), '1.0', false );
	wp_enqueue_style( 'material-design-dentistry-style', get_stylesheet_uri() );
	//Remove materialize shorcode plugin's bundle as the project already loads the JS assets.
	wp_deregister_script('M-Script-bundle');
}
add_action( 'wp_enqueue_scripts', 'material_design_dentistry_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';
