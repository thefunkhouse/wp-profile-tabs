<?php
/*
Plugin Name: WP Profile Tabs
Plugin URI: http://www.thefunkhouse.co.uk
Description: Add tabs to the profile view to make it easier to view.
Author: Lee Doel
Version: 1.0
Author URI: http://www.thefunkhouse.co.uk
*/

//set paths
$file = dirname(__FILE__) . '/wp-profile-tabs.php.php';
$plugin_url = plugin_dir_url($file);

//add tabs to the profile page
wp_register_script( 'profileTabs', $plugin_url . '/scripts/profile-tabs.js', array('jquery'), NULL );
wp_register_style( 'profileTabs-styles', $plugin_url . '/styles/profile-tabs-styles.css', null, null, 'screen');

// When it's the users list, or your editting another users profile
add_action( 'admin_print_scripts-users.php', 'addJs' );

// When you're editting your own profile
add_action( 'admin_print_scripts-profile.php', 'addJs' );

function addJs() {
	wp_enqueue_script('jquery-ui-core');
    wp_enqueue_script('jquery-ui-tabs');
	wp_enqueue_script('profileTabs');
	wp_enqueue_style('profileTabs-styles');
}
?>