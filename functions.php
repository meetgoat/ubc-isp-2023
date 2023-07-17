<?php
/**
 * UBC IAP Child Theme functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package UBC_IAP
 * @since 1.0.0
 */

define( 'CHILD_THEME_VERSION', '1.0.0' );

// Theme Related functions. Enqueue styles, scripts, etc.
require_once get_stylesheet_directory() . '/inc/class-ubc-isp-theme-colors.php';
require_once get_stylesheet_directory() . '/inc/class-ubc-isp-theme-functions.php';

// Functions related to Gutenbug Blocks.
require_once get_stylesheet_directory() . '/inc/class-ubc-isp-gutenburg-blocks.php';

// Functions related to the breadcrumbs & header.
require_once get_stylesheet_directory() . '/inc/class-ubc-isp-page-header.php';

// Functions related to gravity forms.
require_once get_stylesheet_directory() . '/inc/class-ubc-isp-gravity-forms.php';

// Functions related to gravity forms.
require_once get_stylesheet_directory() . '/inc/class-ubc-isp-sub-menu-walker.php';
