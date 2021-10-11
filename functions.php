<?php
/**
 * Hamtdaa functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Hamtdaa
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

if ( ! function_exists( 'hamtdaa_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function hamtdaa_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on Hamtdaa, use a find and replace
		 * to change 'hamtdaa' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'hamtdaa', get_template_directory() . '/languages' );

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
		register_nav_menus(
			array(
				'menu-1' => esc_html__( 'Primary', 'hamtdaa' ),
			)
		);

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support(
			'html5',
			array(
				'search-form',
				'comment-form',
				'comment-list',
				'gallery',
				'caption',
				'style',
				'script',
			)
		);

		// Set up the WordPress core custom background feature.
		add_theme_support(
			'custom-background',
			apply_filters(
				'hamtdaa_custom_background_args',
				array(
					'default-color' => 'ffffff',
					'default-image' => '',
				)
			)
		);

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support(
			'custom-logo',
			array(
				'height'      => 250,
				'width'       => 250,
				'flex-width'  => true,
				'flex-height' => true,
			)
		);
	}
endif;
add_action( 'after_setup_theme', 'hamtdaa_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function hamtdaa_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'hamtdaa_content_width', 640 );
}
add_action( 'after_setup_theme', 'hamtdaa_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function hamtdaa_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'hamtdaa' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'hamtdaa' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'hamtdaa_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function hamtdaa_scripts() {
	wp_enqueue_style( 'hamtdaa-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_style_add_data( 'hamtdaa-style', 'rtl', 'replace' );

	wp_enqueue_script( 'hamtdaa-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'hamtdaa_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}


function sendDiscordNotification($message) {
	$curl = curl_init();

	curl_setopt_array($curl, array(
	CURLOPT_URL => 'https://discord.com/api/webhooks/896993066601287690/cCvAgIgGwoWbITkEbZ9jjjYuAc5Ys9cjs_sGHQFmsfPkqqcidCUbPU42pRG9AywJ1_h3',
	CURLOPT_RETURNTRANSFER => true,
	CURLOPT_ENCODING => '',
	CURLOPT_MAXREDIRS => 10,
	CURLOPT_TIMEOUT => 0,
	CURLOPT_FOLLOWLOCATION => true,
	CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
	CURLOPT_CUSTOMREQUEST => 'POST',
	CURLOPT_POSTFIELDS => 'content=' . json_encode($message),
	CURLOPT_HTTPHEADER => array(
		'Content-Type: application/x-www-form-urlencoded',
		'Cookie: __cfruid=b7c5988249f80c89ffd331f22c068727a2dec935-1633930352; __dcfduid=a1b43cfe2a5411ec80a742010a0a03f6; __sdcfduid=a1b43cfe2a5411ec80a742010a0a03f67bbd7f14b1f6a61f55fad2ad19f45cec8be6971574e51671c2f94467de0ec9fd'
	),
	));

	$response = curl_exec($curl);

	curl_close($curl);
	echo $response;
}

// define the mc4wp_form_subscribed callback 
function action_mc4wp_form_subscribed( $form, $subscriber_email_address, $data, $map ) { 
	sendDiscordNotification(obfuscate_email($subscriber_email_address));
}; 
			
// add the action 
add_action( 'mc4wp_form_subscribed', 'action_mc4wp_form_subscribed', 10, 4 );

function obfuscate_email($email)
{
    $em   = explode("@",$email);
    $name = implode('@', array_slice($em, 0, count($em)-1));
    $len  = floor(strlen($name)/2);

    return substr($name,0, $len) . str_repeat('*', $len) . "@" . end($em);   
}