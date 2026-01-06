<?php
/**
 * Enqueue scripts and styles
 *
 * @package 3dpieces
 */

if (!defined('ABSPATH')) {
    exit;
}

/**
 * Enqueue theme styles and scripts
 */
function tdp_enqueue_assets() {
    // Google Fonts
    wp_enqueue_style(
        'tdp-google-fonts',
        'https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Space+Grotesk:wght@600;700&display=swap',
        array(),
        null
    );

    // Theme CSS files
    wp_enqueue_style('tdp-variables', TDP_THEME_URI . '/assets/css/variables.css', array(), TDP_VERSION);
    wp_enqueue_style('tdp-base', TDP_THEME_URI . '/assets/css/base.css', array('tdp-variables'), TDP_VERSION);
    wp_enqueue_style('tdp-components', TDP_THEME_URI . '/assets/css/components.css', array('tdp-base'), TDP_VERSION);
    wp_enqueue_style('tdp-layout', TDP_THEME_URI . '/assets/css/layout.css', array('tdp-base'), TDP_VERSION);

    // Main theme stylesheet (loads last)
    wp_enqueue_style('tdp-style', get_stylesheet_uri(), array('tdp-layout'), TDP_VERSION);

    // JavaScript files
    wp_enqueue_script('tdp-main', TDP_THEME_URI . '/assets/js/main.js', array(), TDP_VERSION, true);
    wp_enqueue_script('tdp-animations', TDP_THEME_URI . '/assets/js/animations.js', array(), TDP_VERSION, true);

    // Conditional lightbox script for portfolio pages
    if (is_page('portfolio') || is_singular('portfolio')) {
        wp_enqueue_script('tdp-lightbox', TDP_THEME_URI . '/assets/js/lightbox.js', array(), TDP_VERSION, true);
    }

    // Pass data to JavaScript
    wp_localize_script('tdp-main', 'tdpData', array(
        'ajaxUrl' => admin_url('admin-ajax.php'),
        'nonce'   => wp_create_nonce('tdp_nonce'),
    ));
}
add_action('wp_enqueue_scripts', 'tdp_enqueue_assets');
