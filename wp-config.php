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
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'live_xl27P' );

/** Database username */
define( 'DB_USER', 'live_user_xl27P' );

/** Database password */
define( 'DB_PASSWORD', 'your-database-password-here' );

/** Database hostname */
define( 'DB_HOST', 'mysql.10web.site' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          '-[,?l.WbB5<Q8QLCA#iAhU0-2U4ky:y[50rxBB:_MAG[*PEFVoQ5+{U:86/;}.<l' );
define( 'SECURE_AUTH_KEY',   '2A 0-.)oIyo5Tm}rXirW<tTEn(Im/]vN)f8=T*_xa$ls[yWcdcnrRF2H$ybrmafE' );
define( 'LOGGED_IN_KEY',     'I@(ypxmfibg,G7aF&cc#cM`c?BIE_y=B# qRv4)U?M%6I3T~Dd`*V3K7O2]JPMd&' );
define( 'NONCE_KEY',         'MH`lH!pKk`v~*32;;.e%2LoTV}AUTY<d|~>EK!SQERkP;YbqXWeiN!pshOy.u/w^' );
define( 'AUTH_SALT',         'B|<O z&%^;/7We  ! xe.Bg-t^K@(o~W!$H)_@u((_%O2G.hMi}/K<*jwmHnVd>R' );
define( 'SECURE_AUTH_SALT',  'j*lv|*X>]<{L$lA!s&ZMe_kLut_~dy;b@$b6gPjXN?{eIxtw_p}B-W$|@w@&y.).' );
define( 'LOGGED_IN_SALT',    '[,Y+m7VR$=5Ympf3fDnXxt}:_6:40ZMN^b!`.]0CY`tt5}9wQ0kM9_o).rM4rlNr' );
define( 'NONCE_SALT',        '+X[2/0QYc*:EY{2{k9rD=kgc8y`W=QQ_5-sWZr5TeIQGU_I:7Ej3g~Fnt!5eQZXb' );
define( 'WP_CACHE_KEY_SALT', '<?QId/?.gj=rZedKU_]JqgWGB^?H[$wyMcLBA>1Pa_S,Lf`e!{:8)sXlCtjC~b)Y' );


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



define( 'WP_MEMORY_LIMIT', '256M' );
define( 'TENWEB_CACHE', '0' );
define( 'TENWEB_CF_STATUS', '1' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
