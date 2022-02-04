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
define( 'DB_NAME', 'Intern' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         'Q3*0{#adHS+NOmq}y>&EtQRn[O@HI?NwQXII>y}h}eXM kFS.D@Po=WKyHgl]>A}' );
define( 'SECURE_AUTH_KEY',  'icS-)X%k,gEQx;}809U9X4Miyn7<iuno(2QW:M@GA*V:|`Y*2K3oT[O(W)cS j3^' );
define( 'LOGGED_IN_KEY',    '1}q[vtyXpjHH+1DXTz:Ja5_)4n]apD#U$+FS6g:7,F(vR.L9Jv`R%$o>y%;-K%{A' );
define( 'NONCE_KEY',        'HQn&r?$>r~v3?b;,0;a!8GBd&JW(G#@6<aW:mn_00(muRn+8HozyqTq@C@aS)jgH' );
define( 'AUTH_SALT',        '|Ik5r$3VEOa*k5EUs2G<TFx%d%=HrULRDSjOX BOno/|?>fZ{}@NN.St fv0(;q:' );
define( 'SECURE_AUTH_SALT', '8,,bcp,8oA ;J&Q2e}-Z7anh4I/h,g$* J|=|)g7Sioks}96T8rX#t>|#NWp L~n' );
define( 'LOGGED_IN_SALT',   'M0h<-@tShf-#&tmY)0Df4J20>yb4zCiF; 1Xy?4F,.p}S-ssNy&g0>,$8fcaYQ.W' );
define( 'NONCE_SALT',       '+~x;aL/@*q3y2xrKzS}c`1/cmmft*k2@``DKq?%pKxf?RM#vwJLA6:<4yJm+A&rc' );

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
