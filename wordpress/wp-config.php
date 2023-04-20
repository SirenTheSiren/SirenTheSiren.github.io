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
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wp' );

/** Database username */
define( 'DB_USER', 'raven' );

/** Database password */
define( 'DB_PASSWORD', 'SirenZen2510!' );

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
define( 'AUTH_KEY',         'OZ*)gMu-&+p{)Fa|+4G@fAGIg@eXTR@hq5o71ea>y:g!=FY-V1DR[1LE+pG~4Kpm' );
define( 'SECURE_AUTH_KEY',  'U/p:ffI+`j2UL_A^9b*Te+G mtFK{X>u~ :VI Q~.$gK34X Z~J]Z]!~VPYmv00N' );
define( 'LOGGED_IN_KEY',    '|s#vo=>siv<A[!VE*z[)Jsk@j10T_n?#(++}e5DeV-&sH63r#egPpj?BNwY^=TJf' );
define( 'NONCE_KEY',        'dQ>E`9OS6D$]/VN,*V~(x0_XwfF.=:t5#nm|O_aPy7P49ovtyGV4&UJl(}5Zk+Na' );
define( 'AUTH_SALT',        'o`ZZ_w5fVJkng2-9b:`R,cEV-.a%}kwqTk:999K/KfUb.>oEQ^gI/{^;Iv2n*eyI' );
define( 'SECURE_AUTH_SALT', '8%Aa0ivqur@;q&{_eV;z;8cfE0LX@`}#Wl5_;o80(uy!fYTKAr?-A?w;m<W],;wO' );
define( 'LOGGED_IN_SALT',   'bFY/fN7GDR3XI-5T@J;PtxxSS.k>|W^iU<3-+,J<FC0->z0^i)&!5^4FwvHkCgGE' );
define( 'NONCE_SALT',       'ed#RB{qeTmh]>R:HZGBkR_`q:FzZA#ow!yMMEGDbm>i?Pw`kP7wQWpAk!*PoHmnz' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
