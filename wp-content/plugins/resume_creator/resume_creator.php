<?php
/*
Plugin Name: Resume Creator
Plugin URI: http://www.brainify.no/
Description: This plugin will help users to create attractive resume
Version: 1.0
Author: Brainify AS
Author URI: http://www.brainify.no/
*/

if (realpath(__FILE__) == realpath($_SERVER['SCRIPT_FILENAME'])) {
  exit('Please don\'t access this file directly.');
}

require_once( plugin_dir_path( __FILE__ ) . 'lib/ResumePlugin.php');

// Initiate the resume plugin class
$resumeObj = new ResumePlugin();

add_action('admin_menu', array($resumeObj, 'resumeAdminMenu'));
add_action("wp_ajax_rc_save_user_meta", array($resumeObj, 'rc_save_user_meta'));