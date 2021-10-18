<?php

/**
 * Fired during plugin activation
 *
 * @link       tamnghia.com
 * @since      1.0.0
 *
 * @package    TN Setting
 * @subpackage tnsetting/include
 */

/**
 * Fired during plugin activation.
 *
 * This class defines all code necessary to run during the plugin's activation.
 *
 * @package    TNSetting
 * @subpackage tnsetting/include
 * @author     Tam Nghia <dev@tamnghia.com>
 */
class TNSetting_Activator {

    /**
     * Short Description. (use period)
     *
     * Long Description.
     *
     * @since    1.0.0
     */
    public static function activate() {
        $config = new TNSetting_OptionPage();
        $data = $config->get_tnsettings();
        if(!isset($data['phone'])) update_option( 'tnsetting_phone_number', 'xxxx.xxx.xxx');
        if(!isset($data['email'])) update_option( 'tnsetting_email', '');
        if(!isset($data['name'])) update_option( 'tnsetting_name', '');
        if(!isset($data['address'])) update_option( 'tnsetting_address', 'Việt Nam');
        if(!isset($data['slogan'])) update_option( 'tnsetting_slogan', 'Làm Việc Bằng Trái Tim');
        if(!isset($data['banner'])) update_option( 'tnsetting_banner', '');
        if(!isset($data['footerconent'])) update_option( 'tnsetting_footerconent', '');
    }

}
