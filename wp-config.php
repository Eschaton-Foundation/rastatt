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
define( 'DB_NAME', 'eschaton' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

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
define('AUTH_KEY',         'R@v[ l0qmh:nUdDq->|Bpmu&cM$^2Wcew+O{!Nj/-m,7(:1<+;ByO(fn*>9a0p0 ');
	define('SECURE_AUTH_KEY',  '-wrSa7lO08w/?,H:u2-%i4t|s{S|1sobW,Ou9R%g34%tvZ&JjSap6w2SJ:e2z{m.');
	define('LOGGED_IN_KEY',    '[:vsW1y$**>.*|`ZC%~;]fZ1mt|5-NR(-Xp8W^8Q:4JziDD$nX*(F;jK4Jr+B9;j');
	define('NONCE_KEY',        'fO3d4DNKQBxt!|h9QMyI(+*BA9ne86idMUi;|k$mLQ8nf-(lGgv GG0#[HYgH4-|');
	define('AUTH_SALT',        '%ftyX+?0_?ej^.NgvBdvf(5:SV+vD{s#w+6L]Mqk1$MEWqv`LV&<gxwv25]Rk;SZ');
	define('SECURE_AUTH_SALT', '-w|9-n;2M?6~xwHM=yxGW}870Y|m)6h/o6uy{z3X?@G~hc-cBvw^kH^7:6EOu-6&');
	define('LOGGED_IN_SALT',   '>i9rW>G_$&-DZl7xCq+}J+ o+lYT+$:|~ckJ+cM&.##I(05vV.wHlc4jyq:L3c[-');
	define('NONCE_SALT',       '*+Vc}Kn`WCF*.2y9Z-6*2tVDt-v&|Mk;<p]Vv8UUg6!nNo?90a-?:C>W)=a+E^2?');
	

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'prod_';

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
