<?php
/**
 * 3dpieces Theme Functions
 *
 * @package 3dpieces
 * @version 1.0.0
 */

// Prevent direct access
if (!defined('ABSPATH')) {
    exit;
}

// Theme constants
define('TDP_VERSION', '1.0.0');
define('TDP_THEME_DIR', get_template_directory());
define('TDP_THEME_URI', get_template_directory_uri());

// Include theme setup functions
require_once TDP_THEME_DIR . '/inc/theme-setup.php';

// Include script and style enqueuing
require_once TDP_THEME_DIR . '/inc/enqueue-scripts.php';

// Include custom post types
require_once TDP_THEME_DIR . '/inc/custom-post-types.php';
