<?php
// Disable the file editor
define('DISALLOW_FILE_EDIT', true);

// Disable XML-RPC
add_filter('xmlrpc_enabled', '__return_false');

// Close comments on the front-end
function disable_comments_status()
{
    return false;
}

add_filter('comments_open', 'disable_comments_status', 20, 2);
add_filter('pings_open', 'disable_comments_status', 20, 2);

// Hide existing comments
function disable_comments_hide_existing_comments($comments)
{
    $comments = array();
    return $comments;
}

add_filter('comments_array', 'disable_comments_hide_existing_comments', 10, 2);

// Remove comments page in menu
function disable_comments_admin_menu()
{
    remove_menu_page('edit-comments.php');
}

add_action('admin_menu', 'disable_comments_admin_menu');

// Redirect any user trying to access comments page
function disable_comments_admin_menu_redirect()
{
    global $pagenow;
    if ($pagenow === 'edit-comments.php') {
        wp_redirect(admin_url());
        exit;
    }
}

add_action('admin_init', 'disable_comments_admin_menu_redirect');

// Remove comments metabox from dashboard
function disable_comments_dashboard()
{
    remove_meta_box('dashboard_recent_comments', 'dashboard', 'normal');
}

add_action('admin_init', 'disable_comments_dashboard');

// Remove comments links from admin bar
function disable_comments_admin_bar()
{
    if (is_admin_bar_showing()) {
        remove_action('admin_bar_menu', 'wp_admin_bar_comments_menu', 60);
    }
}

add_action('init', 'disable_comments_admin_bar');

// Image sizes
add_image_size('rectangle', 900, 600, true);
add_image_size('square', 400, 400, true);

// Remove `posts`
function remove_admin_sub_menus()
{
    remove_menu_page('edit.php');
}

add_action('admin_menu', 'remove_admin_sub_menus', 999);

// Remove unwanted columns from admin screen
function remove_columns_from_admin($columns)
{
    unset($columns['tags']);
    unset($columns['wpseo-links']);
    unset($columns['description']);
    unset($columns['wpseo-score']);
    unset($columns['wpseo-title']);
    unset($columns['wpseo-metadesc']);
    unset($columns['wpseo-focuskw']);
    unset($columns['wpseo-score-readability']);
    return $columns;
}

add_filter('manage_edit-page_columns', 'remove_columns_from_admin');
