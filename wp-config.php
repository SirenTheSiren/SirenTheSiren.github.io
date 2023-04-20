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
define( 'AUTH_KEY',         'V)!P~|gFUe/Qa=ZgsgE`xoDwWc:c{lPM6LF,.ixu&Y=*$x6B@Hn~Kaf2Oi8E-WH!' );
define( 'SECURE_AUTH_KEY',  'hk[-N@)4.Bt-PDYeQ(Mh6aEABZ`Db4BUXB6#yg`wy2V JwHr-I^uF%kSN)7_&x<W' );
define( 'LOGGED_IN_KEY',    'C3f~J?Bt@{T]NfzOp vF*}Es%L3=o})o1UNnE5EW=p>}a,=1;A$VEP}mfItMUinP' );
define( 'NONCE_KEY',        '`0XG{#;x?X}fpL*OE!#G_k6=U:(T}m,j()iUb=3>lTQ]oC]oWjELh$X6=},8# gg' );
define( 'AUTH_SALT',        '(Egpd/10Ueu8,32>t 6SxPRol&^C[JjI+],mfcF^^PB7[|<+go`05orRmem_c`m`' );
define( 'SECURE_AUTH_SALT', 'el-^~r1{47U<OXH])7Q=PlS.[;nph;`Isw@ /u3T-J(`9(~Z|H`)he(,Zaf%6*v}' );
define( 'LOGGED_IN_SALT',   '.U*Z4){:%#G_QdVnH7LAL,BqTVda7ptV~ /yN}4u;,yB,eh_ZYm],qgAcj.v&qn ' );
define( 'NONCE_SALT',       ']zD=4,7sU9VYN/hu<`*zC@2*P/V.|4tt3VcIyFav{1b|4y9|X}dA;4W;zxs6f*I^' );

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
