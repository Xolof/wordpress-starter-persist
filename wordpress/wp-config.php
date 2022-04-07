<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wp' );

/** MySQL database username */
define( 'DB_USER', 'wp' );

/** MySQL database password */
define( 'DB_PASSWORD', 'secret' );

/** MySQL hostname */
define( 'DB_HOST', 'mysql' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '^rE@XHi.:k.;K)F57qZf o6Qci314o{I+^K;=tU#f/$6,JQLN_|Pn3+?]0CRymw7' );
define( 'SECURE_AUTH_KEY',  'EkQYueAN {8$ha<=-{QGZ-7=Tv1!(i0VJgu![la:L3#%^<4VNtKDL=k!By6VbN|f' );
define( 'LOGGED_IN_KEY',    'L;x#oe]w73%bL4(0.5lP?+]6Aaz4URY3j-z^OMjkbNuTTy^CU,uf9SBb139l7E4=' );
define( 'NONCE_KEY',        'vNu_e^J9x(ppco<)L8S?4O;R9tIZGVdWVRNC0%-q=AkW!Ry6h`ai1ufEbYU3oCgW' );
define( 'AUTH_SALT',        '$0x>ugar?%aZi/Ip8/AGIzRN;~^m]lTxSY:hH~Yj/jIp[^x|2t1qX{ vru|vlNK,' );
define( 'SECURE_AUTH_SALT', '|zR(j@IwU3^SxgW[i`OGW1lesCKRIel[tOM0qlob3m(vZ+mB`,-u)IVhJnmFRih<' );
define( 'LOGGED_IN_SALT',   '##1Y7$5?:/=ys!gb(Ae<H8sAC&L:B3WnUSsXY~#@P0Q5kh{sNqvI1UrTb]N%!hew' );
define( 'NONCE_SALT',       'TYLt5=k]JfQf25{Ev4O:-KUI{O`&*rX],U_u=LY9hJN6Kys+ujn]oen1jD2=:P7^' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */

define('FS_METHOD', 'direct');

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
