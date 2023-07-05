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

//  Theme Related functions. Enqueue styles, scripts, etc
require_once('inc/class.theme-functions.php');

// Functions related to Gutenbug Blocks
require_once('inc/class.gutenburg-blocks.php');

// Functions related to the breadcrumbs & header
require_once('inc/class.page-header.php');

// Functions related to gravity forms
require_once('inc/class.gravity-forms.php');

// Functions related to gravity forms
require_once('inc/class.third-tier-walker-nav-menu.php');
