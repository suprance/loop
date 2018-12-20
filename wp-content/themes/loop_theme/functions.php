<?php
/**
 * loop_theme functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package loop_theme
 */

/**
 * PRE TAG
 */
  function pre($var){
    echo '<pre>'.var_export( $var, true ).'</pre>';
  }

/**
 * REMOVE GUTENBERG
 */
  add_filter('gutenberg_can_edit_post_type', '__return_false');

/**
 * shortcut img folder
 */
function imgfolder($name){
  return get_stylesheet_directory_uri().'/assets/images/'.$name;
}

if ( ! function_exists( 'loop_theme_setup' ) ) :
  /**
   * Sets up theme defaults and registers support for various WordPress features.
   *
   * Note that this function is hooked into the after_setup_theme hook, which
   * runs before the init hook. The init hook is too late for some features, such
   * as indicating support for post thumbnails.
   */
  function loop_theme_setup() {
    /*
     * Make theme available for translation.
     * Translations can be filed in the /languages/ directory.
     * If you're building a theme based on loop_theme, use a find and replace
     * to change 'loop_theme' to the name of your theme in all the template files.
     */
    load_theme_textdomain( 'loop_theme', get_template_directory() . '/languages' );

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
      'menu-1' => esc_html__( 'Primary', 'loop_theme' ),
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
    add_theme_support( 'custom-background', apply_filters( 'loop_theme_custom_background_args', array(
      'default-color' => 'ffffff',
      'default-image' => '',
    ) ) );

    // Add theme support for selective refresh for widgets.
    add_theme_support( 'customize-selective-refresh-widgets' );

    /**
     * Add support for core custom logo.
     *
     * @link https://codex.wordpress.org/Theme_Logo
     */
    add_theme_support( 'custom-logo', array(
      'height'      => 250,
      'width'       => 250,
      'flex-width'  => true,
      'flex-height' => true,
    ) );
  }
endif;
add_action( 'after_setup_theme', 'loop_theme_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function loop_theme_content_width() {
  // This variable is intended to be overruled from themes.
  // Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
  // phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
  $GLOBALS['content_width'] = apply_filters( 'loop_theme_content_width', 640 );
}
add_action( 'after_setup_theme', 'loop_theme_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function loop_theme_widgets_init() {
  register_sidebar( array(
    'name'          => esc_html__( 'Sidebar', 'loop_theme' ),
    'id'            => 'sidebar-1',
    'description'   => esc_html__( 'Add widgets here.', 'loop_theme' ),
    'before_widget' => '<section id="%1$s" class="widget %2$s">',
    'after_widget'  => '</section>',
    'before_title'  => '<h2 class="widget-title">',
    'after_title'   => '</h2>',
  ) );
}
add_action( 'widgets_init', 'loop_theme_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function loop_theme_scripts_styles() {
  // wp_deregister_script( 'jquery' );
  
  // list here all the css
  wp_enqueue_style('bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.css');
  wp_enqueue_style('fontawesome', get_template_directory_uri() . '/assets/css/fontawesome-all.css');

  wp_enqueue_style('aos-css', get_template_directory_uri() . '/assets/vendor/aos.css');
  wp_enqueue_style('animate-css', get_template_directory_uri() . '/assets/vendor/animate.css');
  wp_enqueue_style('hover-css', get_template_directory_uri() . '/assets/vendor/hover.css');
  wp_enqueue_style('slick-theme-css', get_template_directory_uri() . '/assets/vendor/slick/slick.css');
  wp_enqueue_style('slick-css', get_template_directory_uri() . '/assets/vendor/slick/slick-theme.css');

  // always make this style css on bottom
  wp_enqueue_style( 'main', get_template_directory_uri() . '/assets/css/main.css', array() );
  wp_enqueue_style( 'style', get_template_directory_uri() . '/assets/css/style.css', array() );

  // list here all the js
  wp_enqueue_script('jquery-min', get_template_directory_uri() . '/assets/js/jquery.min.js', array('jquery'), false);
  // wp_enqueue_script('bootstrap-bundle', get_template_directory_uri() . '/assets/vendor/bootstrap.bundle.min.js', array('jquery'), '4', true);
  wp_enqueue_script('bootstrap-popper', get_template_directory_uri() . '/assets/vendor/popper.js', array('jquery'), '4', true);
  wp_enqueue_script('bootstrap-js', get_template_directory_uri() . '/assets/vendor/bootstrap.min.js', array('jquery'), '4', true);
  wp_enqueue_script('slick-js', get_template_directory_uri() . '/assets/vendor/slick/slick.min.js', array('jquery'), '4', true);
  wp_enqueue_script('particles-js', get_template_directory_uri() . '/assets/vendor/particles.min.js', array('jquery'), '4', false);

  // Enqueue Animate on Scroll https://michalsnik.github.io/aos/
  wp_enqueue_script('aos-js', get_template_directory_uri() . '/assets/vendor/aos.js', array('jquery'), '1', true);

  // Enqueue Amchart
  // wp_enqueue_script('amchart-core', get_template_directory_uri() . '/assets/js/core.js', array('jquery'), '1', true);
  // wp_enqueue_script('amchart-charts', get_template_directory_uri() . '/assets/js/charts.js', array('jquery'), '1', true);
  // wp_enqueue_script('amchart-material', get_template_directory_uri() . '/assets/js/material.js', array('jquery'), '1', true);
  // wp_enqueue_script('amchart-animated', get_template_directory_uri() . '/assets/js/animated.js', array('jquery'), '1', true);
  //display chart infos
  // wp_enqueue_script('amchart-data', get_template_directory_uri() . '/assets/js/amchart-candle-stick.js', array('jquery'), '1', true);

  // always make this main JS on bottom
  wp_enqueue_script('main-js', get_template_directory_uri() . '/assets/js/main.js', array('jquery'), '1', true);


  // if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
  //   wp_enqueue_script( 'comment-reply' );
  // }
}
add_action( 'wp_enqueue_scripts', 'loop_theme_scripts_styles' );

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
// if ( defined( 'JETPACK__VERSION' ) ) {
//   require get_template_directory() . '/inc/jetpack.php';
// }
