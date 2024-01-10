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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         'uekA.AAtYUeWc9&`bD0xG_v*zq4Z~ ks[Rq!RA?C-^W,_18+2Jj>SC1Nn0T#O V7' );
define( 'SECURE_AUTH_KEY',  '<}8xOtlK)yti%6A?j<LX8,DloZ*M~g2SGL@V:ky//n?kKwT/{SQhaNkk]v/EkWyn' );
define( 'LOGGED_IN_KEY',    '{=2q}ro9y!!HO}.K}5P`ZKu}93(xm{;@+z3Q!.myvoo:ZV>HIeCw}U}x]I`Ry8]&' );
define( 'NONCE_KEY',        'YdL=]ERIn`$I;ikz>v}NqeY&3m+gX,1k$74zue)?S@,}(,R9*=cs@Iw&M/pYJkvh' );
define( 'AUTH_SALT',        'Ccn]d?9Nu}jg7=x!}$ieM|U(bwK5ARYtG>VPjSV[g78w7bcOdVkiuxpcz %T}Xb-' );
define( 'SECURE_AUTH_SALT', '2,b65P`h S<recFr^f]/O L(;A?yf3nV.cB(o`wE9c)H9/b#<uro3)tjjTJ>w(mZ' );
define( 'LOGGED_IN_SALT',   '(=WXEG8y@zM odH26pGEM{r*=lVM}XL,:uTUVr`b;Fy&xxB$?(= aNNIGFg>Q[[{' );
define( 'NONCE_SALT',       'C-Y.btHFi|K,qO K8@<}zGluNB|p&T`JpepP~23/oDn3actIbHE.DUc9IhR1.f[*' );

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
