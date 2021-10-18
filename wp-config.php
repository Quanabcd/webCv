<?php

// BEGIN iThemes Security - Do not modify or remove this line
// iThemes Security Config Details: 2
define( 'DISALLOW_FILE_EDIT', true ); // Disable File Editor - Security > Settings > WordPress Tweaks > File Editor
// END iThemes Security - Do not modify or remove this line

/**
 * Cấu hình cơ bản cho WordPress
 *
 * Trong quá trình cài đặt, file "wp-config.php" sẽ được tạo dựa trên nội dung 
 * mẫu của file này. Bạn không bắt buộc phải sử dụng giao diện web để cài đặt, 
 * chỉ cần lưu file này lại với tên "wp-config.php" và điền các thông tin cần thiết.
 *
 * File này chứa các thiết lập sau:
 *
 * * Thiết lập MySQL
 * * Các khóa bí mật
 * * Tiền tố cho các bảng database
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** Thiết lập MySQL - Bạn có thể lấy các thông tin này từ host/server ** //
/** Tên database MySQL */
define( 'DB_NAME', 'web_cv' );

/** Username của database */
define( 'DB_USER', 'root' );

/** Mật khẩu của database */
define( 'DB_PASSWORD', '' );

/** Hostname của database */
define( 'DB_HOST', 'localhost' );

/** Database charset sử dụng để tạo bảng database. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Kiểu database collate. Đừng thay đổi nếu không hiểu rõ. */
define('DB_COLLATE', '');


//define( 'DISALLOW_FILE_EDIT', true ); //ẩn chỉnh theme, plugin
//define('DISALLOW_FILE_MODS',true); //ẩn cài theme,plugin
//define( 'WP_AUTO_UPDATE_CORE', false ); //ẩn update


/**#@+
 * Khóa xác thực và salt.
 *
 * Thay đổi các giá trị dưới đây thành các khóa không trùng nhau!
 * Bạn có thể tạo ra các khóa này bằng công cụ
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * Bạn có thể thay đổi chúng bất cứ lúc nào để vô hiệu hóa tất cả
 * các cookie hiện có. Điều này sẽ buộc tất cả người dùng phải đăng nhập lại.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'w8D/k).IWCpN<fhuDklb3!HL:B}_BZH#1P#&8lP}*W$Z?wt2 k]oRHhGukq4-O?2' );
define( 'SECURE_AUTH_KEY',  '`ST,e[<NV;Z/k1@R)mV$M0WvtRA$g=Vj%sBHpD:>S)bc/4rkC%N]Z2YDL!{yXKUh' );
define( 'LOGGED_IN_KEY',    '_<<;S&T%3vS3CIr7tW}x~bJk4r[0a[h=}S[-a_*RK($Z(*%d?=dZmWtDB]~$.E4`' );
define( 'NONCE_KEY',        'VWQbf.p7Z`RQf8;:g4|U4Pj6(l68OD`EVZb%/(c!S(7e}#]-)v3?8?P0Prs1Gy{V' );
define( 'AUTH_SALT',        '`.,1=R3 bN2Nx>~BF[j1t[~ g@7rzbA9m8EFpu2R}}f*lZi7OeX2Y]Vj Q5-!~ow' );
define( 'SECURE_AUTH_SALT', 'AYk2whL{BVNcg]3.tjRV+MMl|&,GU):Q{/%Lrdq6QC;b?qwzd61cxyRh,G3jkWK6' );
define( 'LOGGED_IN_SALT',   'S0cSobUWTGz88&LqrGp>iwECGe;^Fs-~HU<|2G0sQ:)N#@uj0*[XU[7WgmIcK$V3' );
define( 'NONCE_SALT',       ':^s0)cZ5 kHnOCn$Da,0ukYgzPtKIgZ.kzu$ZK:9BP9y1>WA~(x4,+c]fPJT$:5>' );

/**#@-*/

/**
 * Tiền tố cho bảng database.
 *
 * Đặt tiền tố cho bảng giúp bạn có thể cài nhiều site WordPress vào cùng một database.
 * Chỉ sử dụng số, ký tự và dấu gạch dưới!
 */
$table_prefix  = 'wp_';

/**
 * Dành cho developer: Chế độ debug.
 *
 * Thay đổi hằng số này thành true sẽ làm hiện lên các thông báo trong quá trình phát triển.
 * Chúng tôi khuyến cáo các developer sử dụng WP_DEBUG trong quá trình phát triển plugin và theme.
 *
 * Để có thông tin về các hằng số khác có thể sử dụng khi debug, hãy xem tại Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* Đó là tất cả thiết lập, ngưng sửa từ phần này trở xuống. Chúc bạn viết blog vui vẻ. */

/** Đường dẫn tuyệt đối đến thư mục cài đặt WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Thiết lập biến và include file. */
require_once(ABSPATH . 'wp-settings.php');
