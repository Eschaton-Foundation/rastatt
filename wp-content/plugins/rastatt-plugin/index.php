<?php
/*
Plugin Name: Rastatt Plugin
Description: Add Custom Post type & ACF Fields
Author: Thomas Florentin
Version: 1.0
*/

// DEFINE PATHS
define('ESC_DIR', WP_PLUGIN_DIR.'/rastatt-plugin');
define('ESC_PATH', '/'.str_replace(ABSPATH, '', ESC_DIR));
define('ESC_URL', WP_PLUGIN_URL.'/rastatt-plugin');


// ACF
require_once(ESC_DIR.'/acf.php');

// COOKIES
require_once(ESC_DIR.'/cookies.php');

// REQUIRE CUSTOM POST TYPES 
require_once(ESC_DIR.'/cpt/cpt-publication.php');
require_once(ESC_DIR.'/cpt/cpt-studio.php');

require_once(ESC_DIR.'/options.php');
