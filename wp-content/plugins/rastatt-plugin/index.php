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


// Options 'from Chips code
require_once(ESC_DIR.'/options.php');

// ACF
require_once(ESC_DIR.'/acf.php');

// COOKIES
require_once(ESC_DIR.'/cookies.php');

// REQUIRE CUSTOM POST TYPES 
require_once(ESC_DIR.'/cpt/cpt-publication.php');
require_once(ESC_DIR.'/cpt/cpt-studio.php');
require_once(ESC_DIR.'/cpt/cpt-exhibitions.php');


function remove_default_post_type($args, $postType) {
    if ($postType === 'post') {
        $args['public']                = false;
        $args['show_ui']               = false;
        $args['show_in_menu']          = false;
        $args['show_in_admin_bar']     = false;
        $args['show_in_nav_menus']     = false;
        $args['can_export']            = false;
        $args['has_archive']           = false;
        $args['exclude_from_search']   = true;
        $args['publicly_queryable']    = false;
        $args['show_in_rest']          = false;
    }

    return $args;
}
add_filter('register_post_type_args', 'remove_default_post_type', 0, 2);


