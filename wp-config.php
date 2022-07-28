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
define( 'DB_NAME', 'dbscribble' );

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
define( 'AUTH_KEY',         'N?k{{Vil?#CQ B(P?+qNl)w[TJs5ssA$u>OoVX{*7ASD#QWq?)n)cE>$ 43mGe!a' );
define( 'SECURE_AUTH_KEY',  'HmwFV@[Jui_wNg2+_K>^1{>g<8T,QIpfG>>/No|viEv!XJ @7|?r-;,E2WX?%1hJ' );
define( 'LOGGED_IN_KEY',    '>=SY4HW?;yy9LiA]V:}%o,AxdD}0]&:B]-81BV[vURko@5T,Ns$emY2:s.Tv&b))' );
define( 'NONCE_KEY',        'MT}i,wB96TMbX7T_oQINw5alxYbZ3t)um3D CH2KmfyhQ0Z?-Ca!Py 3Mfv+]4~k' );
define( 'AUTH_SALT',        ')hipO&??IVKrVNR6n-.dO+u#1D{>B4_tB&?kq_j7~=8d$tqSQhiyzNN_<_10yaRd' );
define( 'SECURE_AUTH_SALT', 'iEPhvA y#:3w=_VT}=!xG@^yZtMI/|tBH)HQ>rA`kvsS/B&$$A +[~@Zae:i->B8' );
define( 'LOGGED_IN_SALT',   'VRpc&*/}cP6z{@/+DG)D77+vZwCH5xx8H(cd]l`V:-|Yh-eHZ3K:xp9Zx:$0[?/[' );
define( 'NONCE_SALT',       'oK0y7|74RSYO1[}R75BDycgU&gD>2BTo|fp0eLWBn3.;cBSa*P}C[_Q4&MI|g?NX' );

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
