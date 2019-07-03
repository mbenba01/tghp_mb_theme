<?php


function tghp_theme_setup()
{

  /*
	 * Make theme available for translation.
	 * Translations can be filed at WordPress.org. See: https://translate.wordpress.org/projects/wp-themes/twentyseventeen
	 * If you're building a theme based on Twenty Seventeen, use a find and replace
	 * to change 'twentyseventeen' to the name of your theme in all the template files.
	 */
  load_theme_textdomain('tghp_theme');



  /*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
	 */
  add_theme_support('post-thumbnails');

  add_image_size('tghp_theme-featured-image', 2000, 1200, true);

  add_image_size('tghp_theme-thumbnail-avatar', 100, 100, true);

  // Set the default content width.
  $GLOBALS['content_width'] = 525;


  /*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
  add_theme_support(
    'html5',
    array(
      'comment-form',
      'comment-list',
      'gallery',
      'caption',
    )
  );

  /*
	 * Enable support for Post Formats.
	 *
	 * See: https://codex.wordpress.org/Post_Formats
	 */


  // Define and register starter content to showcase the theme on new sites.
  $starter_content = array(

    // Set up nav menus for each of the two areas registered in the theme.
    'nav_menus'   => array(
      // Assign a menu to the "top" location.
      'top'    => array(
        'name'  => __('Top Menu', 'tghp_theme'),
        'items' => array(
          'link_home', // Note that the core "home" page is actually a link in case a static front page is not used.
          'page_about',
          'page_blog',
          'page_contact',
        ),
      ),

      // Assign a menu to the "social" location.
      'social' => array(
        'name'  => __('Social Links Menu', 'tghp_theme'),
        'items' => array(
          'link_yelp',
          'link_facebook',
          'link_twitter',
          'link_instagram',
          'link_email',
        ),
      ),
    ),
  );

  /**
   * Filters Twenty Seventeen array of starter content.
   *
   * @since Twenty Seventeen 1.1
   *
   * @param array $starter_content Array of starter content.
   */
  $starter_content = apply_filters('tghp_theme_starter_content', $starter_content);

  add_theme_support('starter-content', $starter_content);
}

add_action('after_theme_setup', 'tghp_theme_setup');

// Add default posts and comments RSS feed links to head.
add_theme_support('automatic-feed-links');

/*
  * Let WordPress manage the document title.
  * By adding theme support, we declare that this theme does not use a
  * hard-coded <title> tag in the document head, and expect WordPress to
  * provide it for us.
  */
add_theme_support('title-tag');

// Theme support to the theme
add_theme_support('custom-logo', array(
  'height'      => 100,
  'width'       => 400,
  'flex-height' => true,
  'flex-width'  => true,
  'header-text' => array('site-title', 'site-description'),
));

/**
 * Enable support for header image
 */
add_theme_support('custom-header', array(
  'width'              => 2000,
  'height'             => 1200,
  'flex-height'        => true,
  'flex-height'            => true,
  'video'              => true,
));
/**
 * Add theme support for post formats
 */
add_theme_support(
  'post-formats',
  array(
    'aside',
    'image',
    'video',
    'quote',
    'link',
    'gallery',
    'audio',
  )
);

// Load regular editor styles into the new block-based editor.
add_theme_support('editor-styles');

// Load default block styles.
add_theme_support('wp-block-styles');

// Add support for responsive embeds.
add_theme_support('responsive-embeds');

function register_my_menus()
{
  register_nav_menus(
    array(
      'header-menu' => __('Header Menu'),
      'social-menu' => __('Social Links Menu')
    )
  );
}
add_action('init', 'register_my_menus');

function load_stylesheets()
{

  wp_register_style('google-fonts', '//fonts.googleapis.com/css?family=Playfair+Display:400,700|Poppins:300,400&display=swap');
  wp_enqueue_style('google-fonts');
  wp_register_style('style', get_template_directory_uri() . '/style.css');
  wp_enqueue_style('style');

  wp_register_style('styles', get_template_directory_uri() . '/assets/css/styles.css');
  wp_enqueue_style('styles');
}
add_action('wp_enqueue_scripts', 'load_stylesheets');


function custom_video_header_pages($active)
{
  if (is_home() || is_page($active)) {
    return true;
  }

  return false;
}

add_filter('is_header_video_active', 'custom_video_header_pages');

function partner_post_types()
{
  register_post_type('partner', array(
    'public' => true,
    'exclude_from_search' => true,
    'labels' => array(
      'name' => 'Partners',
      'add_new_item' => 'Add New Partner',
      'edit_item' => 'Edit Partner',
      'all_items' => 'All Partners',
      'singular_name' => 'Partner',
    ),
    'menu_icon' => 'dashicons-format-image
    '
  ));
}

add_action('init', 'partner_post_types');
