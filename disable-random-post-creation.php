<?php
/*
Plugin Name: Disable Gravity Forms Post Creation
Description: Automatically disables Gravity Forms random post creation on the WordPress back-end
Version: 1.0
Author: Shawlorne West
Author URI: https://profiles.wordpress.org/shawwest
*/

class Disable_Gravity_Form_Post_Creation {

    public function __construct() {
        add_action('plugins_loaded', array($this, 'init'));
    }

    public function init() {
        add_filter('gform_disable_post_creation', array($this, 'disable_post_creation'), 10, 3);
    }

    public function disable_post_creation($is_disabled, $form, $entry) {
        return true; // Always return true to disable post creation
    }
}

// Instantiate the plugin class
new Disable_Gravity_Form_Post_Creation();
