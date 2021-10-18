<?php

/**
 * The admin-specific functionality of the plugin.
 *
 * @link       tamnghia.com
 * @since      1.0.0
 *
 * @package    TNSetting
 * @subpackage TNSetting/admin
 */

/**
 * The admin-specific functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the admin-specific stylesheet and JavaScript.
 *
 * @package    TNSetting
 * @subpackage TNSetting/admin
 * @author     Tam Nghia <dev@tamnghia.com>
 */
class TNSetting_Admin {

    /**
     * The ID of this plugin.
     *
     * @since    1.0.0
     * @access   private
     * @var      string    $plugin_name    The ID of this plugin.
     */
    private $plugin_name;

    /**
     * The version of this plugin.
     *
     * @since    1.0.0
     * @access   private
     * @var      string    $version    The current version of this plugin.
     */
    private $version;

    /**
     * Initialize the class and set its properties.
     *
     * @since    1.0.0
     * @param      string    $plugin_name       The name of this plugin.
     * @param      string    $version    The version of this plugin.
     */
    public function __construct( $plugin_name, $version ) {

        $this->plugin_name = $plugin_name;
        $this->version = $version;
        new TNSetting_OptionPage();
    }

    /**
     * Register the stylesheets for the admin area.
     *
     * @since    1.0.0
     */
    public function enqueue_styles() {

        /**
         * This function is provided for demonstration purposes only.
         *
         * An instance of this class should be passed to the run() function
         * defined in TNSetting_Loader as all of the hooks are defined
         * in that particular class.
         *
         * The TNSetting_Loader will then create the relationship
         * between the defined hooks and the functions defined in this
         * class.
         */
        wp_enqueue_style( 'wp-color-picker' );
        wp_enqueue_style( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'css/admin.css', array(), $this->version, 'all' );

    }

    /**
     * Register the JavaScript for the admin area.
     *
     * @since    1.0.0
     */
    public function enqueue_scripts() {

        /**
         * This function is provided for demonstration purposes only.
         *
         * An instance of this class should be passed to the run() function
         * defined in TNSetting_Loader as all of the hooks are defined
         * in that particular class.
         *
         * The TNSetting_Loader will then create the relationship
         * between the defined hooks and the functions defined in this
         * class.
         */

        wp_enqueue_script( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'js/admin.js', array( 'jquery','wp-color-picker' ), $this->version, false );

    }

}


class TNSetting_OptionPage {

    function __construct() {
        add_action( 'admin_menu', array( $this, 'admin_menu' ) );
    }

    function admin_menu() {
        add_options_page(
            'Cấu hình chung',
            'Cấu hình chung',
            'manage_options',
            TNSETTING_PLUGIN_SLUG,
            array(
                $this,
                'tnsettings_page'
            )
        );
    }

    function get_tnsettings(){
        $lan = '';
        if(isset($_GET["lan"]))
            $lan = $_GET["lan"];
        if($lan=='')
        {
            $alan=explode('-',get_bloginfo("language"));
            if(count($alan)==2)
                $lan= $alan[0];
            else
                $lan=get_bloginfo("language");
        }

        $phone = get_option( 'tnsetting_phone_number'.$lan, false );
        $email = get_option( 'tnsetting_email'.$lan, false );
        $name = get_option( 'tnsetting_name'.$lan, false );
        $address = get_option( 'tnsetting_address'.$lan, false );
        $slogan = get_option( 'tnsetting_slogan'.$lan, false );
        $banner = get_option( 'tnsetting_banner'.$lan, false );
        $fanpage = get_option( 'tnsetting_fanpage'.$lan, false );
        $bando= get_option( 'tnsetting_bando'.$lan, false );
        $facebook = get_option( 'tnsetting_facebook'.$lan, false );
        $youtube= get_option( 'tnsetting_youtube'.$lan, false );
        $twitter = get_option( 'tnsetting_twitter'.$lan, false );
        $footercontent = get_option( 'tnsetting_footercontent'.$lan, false );

        return array(
            'phone' => $phone ? $phone : 'xxxx.xxx.xxx',
            'email' => $email ? $email : '',
            'name' => $name ? $name : '',
            'address' => $address ? $address : 'Việt Nam',
            'slogan' => $slogan ? $slogan : 'Làm Việc Bằng Trái Tim',
            'banner' => $banner ? $banner : '',
            'fanpage' => $fanpage ? $fanpage : '',
            'bando' => $bando ? $bando : '',
            'facebook' => $facebook ? $facebook : '',
            'youtube' => $youtube ? $youtube : '',
            'twitter' => $twitter ? $twitter : '',
            'footercontent' => $footercontent ? $footercontent : '',

        );
    }


    function  tnsettings_page() {
        $action='';
        if(isset($_GET["action"]))
            $action = $_GET["action"];
        if($action=="lang")
        {
            require_once plugin_dir_path(__FILE__) . 'partials/languages.php';
        }
        else
            require_once plugin_dir_path(__FILE__) . 'partials/tnsetting-admin-display.php';
    }
}