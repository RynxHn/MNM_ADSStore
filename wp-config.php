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
define( 'DB_NAME', 'store' );

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
define( 'AUTH_KEY',         '.D$WM+cs1K,<Hu^EFi3v=|ef(_DP%}p|snNHCZW0<|_2{CX%WMWmPF~w]0#~WnSF' );
define( 'SECURE_AUTH_KEY',  '&ZD|:_Y~=~1[6k+u1_X5(S->d.0F1``VO-z^[>Rb1jDrv6rdDg6S}b5W<D|7-+en' );
define( 'LOGGED_IN_KEY',    'a}Ar}l_&]Nf@UGQ>^BK5:#BN/oXpaSQm8LLWt.G/<p9>Mc+XuvNeGikDt3{f=:%8' );
define( 'NONCE_KEY',        'kxg#_Un^H0=9 <CZj>k5i0Q-nqGl81utd&6zp6_=ySs($/@xar?vU<C$%<jnuvV/' );
define( 'AUTH_SALT',        'du|W%~|1^jNwL!w`J7B]Fi4%w7oM0_J^}W9MdLiwcW|ca^q?jU~@QY*uC*a,Av=-' );
define( 'SECURE_AUTH_SALT', 'GtKg9LT.{y(K&krbJedt%&H6dSMT!Ac) jg01O?8O6+}/ID^LQ;Bz]!#p:5KqgS2' );
define( 'LOGGED_IN_SALT',   'O8)$4sNIXPF%+un.ot,a??r.I4S&Uz4:f9Ot--PVPA^[1M~B[O:5}PC`!v}qA>|1' );
define( 'NONCE_SALT',       '7zCS?cmE+r>D0ku^-k5-Kd8c;:LhQT}^1<!4`qA,vY)|s1R}L8i^dc ,FYX4W^Oe' );

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
