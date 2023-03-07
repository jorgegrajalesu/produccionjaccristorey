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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'produjac' );

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
define( 'AUTH_KEY',         'cP0!!-N* a5{[r7;N0V{KnW4,dGuea&7EHq&CUwn<l(Df4LSRW751AN<Qp;L7iR5' );
define( 'SECURE_AUTH_KEY',  '===Vva_o@jqmzD|r@&7.qeKTlMxOM-~~B3Qpc$ZJ5x]A8z0=q9W cb(+NU4Y3wZ3' );
define( 'LOGGED_IN_KEY',    'k5KVV=A,Qp7TJSolA1mb#E=A+2sstHr9#E>jDRH%GF<l`6=GmrcrQ1AaiLa84QaB' );
define( 'NONCE_KEY',        '+MEg`H|RZz*Z!.y*49l<E]7AtXg/>a$]N`*|_?CM$w{RVF%0_nVVN^_qG}tMb*k_' );
define( 'AUTH_SALT',        'Y VqXi;v*=Z@kwr F?*&w=$MS/3-G+=.uICw;%@5c(9pN+@nlL!)?b_XDiK2wm:r' );
define( 'SECURE_AUTH_SALT', '!yR}zHp,3P=%MeMnFa=*8Jo:bX}wr<;K%`Mp/g7a1(]xNOcLj;WkQ[9taT gBH@]' );
define( 'LOGGED_IN_SALT',   't;f6r7KDoO@}?O8IHLtdL#ot/n`|L^I:e9r5Zk9w*t|W+`qoQ BY`4M^!({GtAO<' );
define( 'NONCE_SALT',       'Zg3$>oH:c|y0df<:[*#kMs$a(cj_U=h$rX`(_3$My_b&/KUfsmL5N9R.mXk@/0Kn' );

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



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
