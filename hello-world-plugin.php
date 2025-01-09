<?php

/**
 * Plugin Name: Hello World Plugin
 * Plugin URI: https://www.hastishah.com
 * Description: This is a simple hello world plugin which creates some information widget to admin dashboard as well as at admin notice.
 * Version: 1.0
 * Author: Hastimal Shah
 * Author URI: https://www.hastishah.com
 * License: GPL2
 * License URI: https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain: hello-world-plugin
 * 
 */

// todo: Add admin notices
add_action( 'admin_notices', 'hw_show_success_message' );
function hw_show_success_message() {
    ?>
    <div class="notice notice-success is-dismissible">
        <p><?php _e( 'Hello World! This is a simple hello world plugin.', 'hello-world-plugin' ); ?></p>
    </div>
    <?php
}

function hw_show_error_message() {
    ?>
    <div class="notice notice-error is-dismissible">
        <p><?php _e( 'Hello World! This is a simple error message.', 'hello-world-plugin' ); ?></p>
    </div>
    <?php
}

function hw_show_information_message() {
    ?>
    <div class="notice notice-info is-dismissible">
        <p><?php _e( 'Hello World! This is a simple Informational message.', 'hello-world-plugin' ); ?></p>
    </div>
    <?php
}

function hw_show_notice_message() {
    ?>
    <div class="notice notice-warning is-dismissible">
        <p><?php _e( 'Hello World! This is a simple Warning message.', 'hello-world-plugin' ); ?></p>
    </div>
    <?php
}


// todo: Add admin dashboard widget
add_action('wp_dashboard_setup', 'hello_world_dashboard_widget');
function hello_world_dashboard_widget() {
    wp_add_dashboard_widget(
        'hello_world_dashboard_widget',
        'Hello World Plugin',
        'hello_world_dashboard_widget_content'
    );
}

function hello_world_dashboard_widget_content() {
    echo '<p>Hello World! This is a simple hello world plugin which creates some information widget to admin dashboard as well as at admin notice.</p>';
}