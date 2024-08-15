<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'anarse' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',         '0iyOR}fXbBuFF-:u|Gr~i j*&D,Ej6J&gg$:}svEOLC%6;M>(Pxw[FNNyx=7agQD' );
define( 'SECURE_AUTH_KEY',  'z@SYg7y2=KqW*/7GCgOBf~kbpf)91I*#c/7ejGH! :.93%nqhz1&if7%Mg|>Lk$U' );
define( 'LOGGED_IN_KEY',    'Ioj4^.4P`1@f9~/8`}Az?*@FDKC_]jN;5CxBmsF?7]KS,lXRGEDd^kHGkF|gX,Lp' );
define( 'NONCE_KEY',        '#7d0_MCFH&$;`%npj|V$gn8v{l]nk(B04G((Gj+kvgJ_H /(^sa}^XIM$1d%!HM~' );
define( 'AUTH_SALT',        '@z$ArbNyy=ogaS0?4T=QXMnr`!;!TPJxjWzQn@ZA(Cr^{<QD>htG5)AmMNg[=mbJ' );
define( 'SECURE_AUTH_SALT', 'c5e3o;,QOz:Noo3zi1*%eXyUZ=VyB`HRuM}~& |41e%B5!1Zj?z_k7Y)v3q0!plS' );
define( 'LOGGED_IN_SALT',   '[Mz4N`Qegsb-c,EW^yC8l6~6G^AR7%|XgW,%w$Aly9eumsA@)A{Q;(s%)h=z6@jr' );
define( 'NONCE_SALT',       'hNd0a5]#2+*a#?Sa3zgU3=63-#2;`$b<bB 4dj3e|_5d>GE3`C9OCEO 0J}*&U|h' );

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
