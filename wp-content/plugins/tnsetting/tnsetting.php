<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              tamnghia.com
 * @since             1.0.0
 * @package           Website Setting
 *
 * @wordpress-plugin
 * Plugin Name:       Cấu hình chung cho website
 * Plugin URI:        #
 * Description:       Hiển thị các thông tin cấu hình chung: email, phone, banner,...
 * Version:           1.0.0
 * Author:            Tam Nghia
 * Author URI:        tamnghia.com
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       tnsetting
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
    die;
}


// The current version of the plugin
if ( !defined( 'TNSETTING_PLUGIN_VERSION' ) ) {
    define( 'TNSETTING_PLUGIN_VERSION', '1.0.0' );
}
// The unique identifier of the plugin
if ( !defined( 'TNSETTING_PLUGIN_SLUG' ) ) {
    define( 'TNSETTING_PLUGIN_SLUG', 'tnsetting' );
}
// text doamin for translate
if ( !defined( 'TNSETTING_TEXT_DOMAIN' ) ) {
    define( 'TNSETTING_TEXT_DOMAIN', 'tnsetting' );
}

// Path to the plugin directory
if ( !defined( 'TNSETTING_PLUGIN_DIR' ) ) {
    define( 'TNSETTING_PLUGIN_DIR', plugin_dir_path( __FILE__ ) );
}



/**
 * The code that runs during plugin activation.
 * This action is documented in includes/activator.php
 */
if ( !function_exists( 'TNSetting_activate' ) ) {
    function TNSetting_activate()
    {
        require_once plugin_dir_path(__FILE__) . 'includes/activator.php';
        TNSetting_Activator::activate();
    }
    register_activation_hook( __FILE__, 'TNSetting_activate' );
}
/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/deactivator.php
 */
if ( !function_exists( 'TNSetting_deactivate' ) ) {
    function TNSetting_deactivate()
    {
        require_once plugin_dir_path(__FILE__) . 'includes/deactivator.php';
        TNSetting_Deactivator::deactivate();
    }
    register_deactivation_hook( __FILE__, 'TNSetting_deactivate' );
}



/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-tnsetting.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function custom_admin_css() {
    wp_enqueue_script( 'tnlogin1', plugin_dir_url( __FILE__ ) . 'admin/js/particles.js', array( 'jquery' ), TNSETTING_PLUGIN_VERSION, true );
    wp_enqueue_script( 'tnlogin2', plugin_dir_url( __FILE__ ) . 'admin/js/app1.js',array( 'jquery' ), TNSETTING_PLUGIN_VERSION, true );
    wp_enqueue_style( 'tnlogin',  plugin_dir_url( __FILE__ ) . 'admin/css/admin.css', array(), TNSETTING_PLUGIN_VERSION, 'all' );

}
function my_login_logo_url() {
    return "https://tamnghia.com";
}

function run_setting() {

    $plugin = new TNSetting();
    $plugin->run();
    add_action( 'login_enqueue_scripts', 'custom_admin_css', 10 );
    add_filter( 'login_headerurl', 'my_login_logo_url' );

}
run_setting();



