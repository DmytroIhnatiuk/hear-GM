<?php
/**
 * hairglobalmedik functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package hairglobalmedik
 */

if (!defined('_S_VERSION')) {
    // Replace the version number of the theme on each release.
    define('_S_VERSION', '1.0.0');
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function hairglobalmedik_setup()
{

    load_theme_textdomain('hairglobalmedik', get_template_directory() . '/languages');

    add_theme_support('automatic-feed-links');

    add_theme_support('title-tag');

    add_theme_support('post-thumbnails');

    // This theme uses wp_nav_menu() in one location.
//	register_nav_menus(
//		array(
//			'menu-1' => esc_html__( 'Primary', 'hairglobalmedik' ),
//		)
//	);


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
            'hairglobalmedik_custom_background_args',
            array(
                'default-color' => 'ffffff',
                'default-image' => '',
            )
        )
    );

    // Add theme support for selective refresh for widgets.
    add_theme_support('customize-selective-refresh-widgets');


}

add_action('after_setup_theme', 'hairglobalmedik_setup');

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function hairglobalmedik_content_width()
{
    $GLOBALS['content_width'] = apply_filters('hairglobalmedik_content_width', 640);
}

add_action('after_setup_theme', 'hairglobalmedik_content_width', 0);
/**
 * Enqueue scripts and styles.
 */

require_once('inc/core/javascript.php');
require_once('inc/core/styles.php');
//require_once('inc/CPT/custom-post-types.php');
add_filter('pll_get_post_types', 'add_cpt_to_pll', 10, 2);

function add_cpt_to_pll($post_types, $is_settings)
{
    if (!$is_settings) {
        $post_types['doctor'] = 'doctor';
        $post_types['hair-transplantation'] = 'hair-transplantation';
    }
//    var_dump($post_types); // Выводим список типов записей для отладки
    return $post_types;
}

require_once('inc/core/core.php');
require_once('inc/project-functions/index.php');


/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if (defined('JETPACK__VERSION')) {
    require get_template_directory() . '/inc/jetpack.php';
}

