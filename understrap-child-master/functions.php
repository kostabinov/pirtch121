<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

function understrap_remove_scripts() {
    wp_dequeue_style( 'understrap-styles' );
    wp_deregister_style( 'understrap-styles' );

    wp_dequeue_script( 'understrap-scripts' );
    wp_deregister_script( 'understrap-scripts' );

    // Removes the parent themes stylesheet and scripts from inc/enqueue.php
}
add_action( 'wp_enqueue_scripts', 'understrap_remove_scripts', 20 );

add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
function theme_enqueue_styles() {

	// Get the theme data
	$the_theme = wp_get_theme();
    wp_enqueue_style( 'child-understrap-styles', get_stylesheet_directory_uri() . '/css/child-theme.min.css', array(), $the_theme->get( 'Version' ) );
    wp_enqueue_script( 'jquery');
    wp_enqueue_script( 'child-understrap-scripts', get_stylesheet_directory_uri() . '/js/child-theme.min.js', array(), $the_theme->get( 'Version' ), true );
    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
        wp_enqueue_script( 'comment-reply' );
    }
}

function add_child_theme_textdomain() {
    load_child_theme_textdomain( 'understrap-child', get_stylesheet_directory() . '/languages' );
}
add_action( 'after_setup_theme', 'add_child_theme_textdomain' );

add_action('acf/init', 'my_acf_init');
function my_acf_init() {
	
	// check function exists
	if( function_exists('acf_register_block') ) {
		
		acf_register_block(array(
			'name'				=> 'homehero',
			'title'				=> __('Hero Section'),
			'description'		=> __('A custom hero section block.'),
			'render_callback'	=> 'my_acf_block_render_callback',
			'category'			=> 'formatting',
			'icon'				=> 'admin-comments',
			'keywords'			=> array( 'homehero', 'quote' ),
		));

		acf_register_block(array(
			'name'				=> 'socialproof',
			'title'				=> __('Logos'),
			'description'		=> __('A custom logos block.'),
			'render_callback'	=> 'my_acf_block_render_callback',
			'category'			=> 'formatting',
			'icon'				=> 'admin-comments',
			'keywords'			=> array( 'socialproof', 'quote' ),
		));
		
		acf_register_block(array(
			'name'				=> 'results',
			'title'				=> __('Results'),
			'description'		=> __('A custom results block.'),
			'render_callback'	=> 'my_acf_block_render_callback',
			'category'			=> 'formatting',
			'icon'				=> 'admin-comments',
			'keywords'			=> array( 'results', 'quote' ),
		));

		acf_register_block(array(
			'name'				=> 'whoitsfor',
			'title'				=> __('Two Columns Section'),
			'description'		=> __('A custom columns block.'),
			'render_callback'	=> 'my_acf_block_render_callback',
			'category'			=> 'formatting',
			'icon'				=> 'admin-comments',
			'keywords'			=> array( 'whoitsfor', 'quote' ),
		));
		
		acf_register_block(array(
			'name'				=> 'simpletext',
			'title'				=> __('Simple text'),
			'description'		=> __('A custom Simple text block.'),
			'render_callback'	=> 'my_acf_block_render_callback',
			'category'			=> 'formatting',
			'icon'				=> 'admin-comments',
			'keywords'			=> array( 'simpletext', 'quote' ),
		));
		
		acf_register_block(array(
			'name'				=> 'conceptsteps',
			'title'				=> __('Concept Steps'),
			'description'		=> __('A custom Concept Steps block.'),
			'render_callback'	=> 'my_acf_block_render_callback',
			'category'			=> 'formatting',
			'icon'				=> 'admin-comments',
			'keywords'			=> array( 'conceptsteps', 'quote' ),
		));
		
		acf_register_block(array(
			'name'				=> 'slider',
			'title'				=> __('Slider'),
			'description'		=> __('A custom Slider block.'),
			'render_callback'	=> 'my_acf_block_render_callback',
			'category'			=> 'formatting',
			'icon'				=> 'admin-comments',
			'keywords'			=> array( 'slider', 'quote' ),
		));
		
		acf_register_block(array(
			'name'				=> 'benefits',
			'title'				=> __('Benefits'),
			'description'		=> __('A custom Benefits block.'),
			'render_callback'	=> 'my_acf_block_render_callback',
			'category'			=> 'formatting',
			'icon'				=> 'admin-comments',
			'keywords'			=> array( 'benefits', 'quote' ),
		));
		
		acf_register_block(array(
			'name'				=> 'features',
			'title'				=> __('Features'),
			'description'		=> __('A custom Features block.'),
			'render_callback'	=> 'my_acf_block_render_callback',
			'category'			=> 'formatting',
			'icon'				=> 'admin-comments',
			'keywords'			=> array( 'features', 'quote' ),
		));
		
		acf_register_block(array(
			'name'				=> 'learnwithus',
			'title'				=> __('Learn With Us'),
			'description'		=> __('A custom Learn With Us block.'),
			'render_callback'	=> 'my_acf_block_render_callback',
			'category'			=> 'formatting',
			'icon'				=> 'admin-comments',
			'keywords'			=> array( 'learnwithus', 'quote' ),
		));
		
		acf_register_block(array(
			'name'				=> 'ouresulthero',
			'title'				=> __('Our Result Hero'),
			'description'		=> __('A custom Our Result Hero block.'),
			'render_callback'	=> 'my_acf_block_render_callback',
			'category'			=> 'formatting',
			'icon'				=> 'admin-comments',
			'keywords'			=> array( 'ouresulthero', 'quote' ),
		));
		
		acf_register_block(array(
			'name'				=> 'threecolumns',
			'title'				=> __('3 columns'),
			'description'		=> __('A custom 3 columns block.'),
			'render_callback'	=> 'my_acf_block_render_callback',
			'category'			=> 'formatting',
			'icon'				=> 'admin-comments',
			'keywords'			=> array( 'threecolumns', 'quote' ),
		));
		
		acf_register_block(array(
			'name'				=> 'twocolumnstextareas',
			'title'				=> __('Two Columns Text WYSIWYG'),
			'description'		=> __('A custom Two Columns Text block.'),
			'render_callback'	=> 'my_acf_block_render_callback',
			'category'			=> 'formatting',
			'icon'				=> 'admin-comments',
			'keywords'			=> array( 'twocolumnstextareas', 'quote' ),
		));
	}
}

function my_acf_block_render_callback( $block ) {
	
	// convert name ("acf/testimonial") into path friendly slug ("testimonial")
	$slug = str_replace('acf/', '', $block['name']);
	
	// include a template part from within the "template-parts/block" folder
	if( file_exists( get_theme_file_path("/template-parts/block/content-{$slug}.php") ) ) {
		include( get_theme_file_path("/template-parts/block/content-{$slug}.php") );
	}
}