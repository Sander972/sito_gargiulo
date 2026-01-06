<?php
/**
 * Theme Setup Functions
 *
 * @package 3dpieces
 */

if (!defined('ABSPATH')) {
    exit;
}

/**
 * Theme setup
 */
function tdp_theme_setup() {
    // Add theme support
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('html5', array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
        'style',
        'script'
    ));
    add_theme_support('custom-logo', array(
        'height'      => 100,
        'width'       => 400,
        'flex-height' => true,
        'flex-width'  => true,
    ));

    // Register navigation menus
    register_nav_menus(array(
        'primary' => __('Primary Menu', '3dpieces'),
        'footer'  => __('Footer Menu', '3dpieces')
    ));

    // Add custom image sizes
    add_image_size('portfolio-thumb', 600, 400, true);
    add_image_size('portfolio-large', 1200, 800, true);
    add_image_size('portfolio-full', 1920, 1280, true);
}
add_action('after_setup_theme', 'tdp_theme_setup');

/**
 * Register widget areas
 */
function tdp_widgets_init() {
    // Footer widget areas
    register_sidebar(array(
        'name'          => __('Footer Column 1', '3dpieces'),
        'id'            => 'footer-1',
        'description'   => __('Appears in the first footer column', '3dpieces'),
        'before_widget' => '<div id="%1$s" class="footer-widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ));

    register_sidebar(array(
        'name'          => __('Footer Column 2', '3dpieces'),
        'id'            => 'footer-2',
        'description'   => __('Appears in the second footer column', '3dpieces'),
        'before_widget' => '<div id="%1$s" class="footer-widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ));

    register_sidebar(array(
        'name'          => __('Footer Column 3', '3dpieces'),
        'id'            => 'footer-3',
        'description'   => __('Appears in the third footer column', '3dpieces'),
        'before_widget' => '<div id="%1$s" class="footer-widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ));
}
add_action('widgets_init', 'tdp_widgets_init');

/**
 * Set content width
 */
if (!isset($content_width)) {
    $content_width = 1200;
}
