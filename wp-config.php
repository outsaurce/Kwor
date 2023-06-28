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
define( 'DB_NAME', 'kwor' );

/** Database username */
define( 'DB_USER', 'kwor' );

/** Database password */
define( 'DB_PASSWORD', 'Kwornew@123' );

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
define( 'AUTH_KEY',         '}hm!?+GB,d[`W|LN_4z]vx(9:qN>_;/V:]!uDr>`x2 z/)5;iioUIAPsc){t}l;f' );
define( 'SECURE_AUTH_KEY',  ',z0lq/AfL4#QN-_, uPdDA?oaLNojiKfM5XNM6m^ASfL4BWDTaDTP6w 2*|wB66!' );
define( 'LOGGED_IN_KEY',    'M[JEKOdHyrlcM&v6MhskLk3nLp#;=lFO&}VwbJfbg*f3+}1yND1dcIbN4bdyS*&V' );
define( 'NONCE_KEY',        'Cd?ax^^(Z[0i[X {Lb:iT7r=6R<Zp9SBU|1x1X@tQoX?0(J|>0VGl}%vTezz#ytP' );
define( 'AUTH_SALT',        '2NeGWu[8p>u1Yo> 1k=k7+Nnk&Z]Xh!.Nzaz,ZWqeRFPDj7JnJSUl<s8)3cHfB7B' );
define( 'SECURE_AUTH_SALT', 'n>]Ge.)0m&X9)ulRD_MKNLB@M<Vhbm#dN69E=[j?dg*A;!HuKp(n3,luf`h}LF9v' );
define( 'LOGGED_IN_SALT',   'M/9_jGR@Y](M0Q,?dVh],3)Anat2)SNjbTXU.]K)4GvjwH8/sl~3,eP8N/$qPbKA' );
define( 'NONCE_SALT',       'mvviG0CGwpBvr(q}^JJYOuZSy(J&Yd;(98~}6.<y|yQ&1T%lfoF;36=v+ZyPg!sA' );

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
