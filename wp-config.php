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
define( 'DB_NAME', 'panorbit' );

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
define( 'AUTH_KEY',         'u)^!MlD_@xhtT(b%8enVF<F/T4+wA=mlvHE`fEt*bY-+`q42-<ykOD{5sDIjt=9?' );
define( 'SECURE_AUTH_KEY',  '*w9L}Hnmh Jv.gPy_}uqY=fcW[7ovb$}<j!otXp(J%H-mEJ8m6d7is@ujk_w=*q2' );
define( 'LOGGED_IN_KEY',    '[Jy}V]FXHk$iZnT57C4/eMITFDFqP4f5B2G&S_B1Wi=!n.A#z39Uy/E,3UK)nX>-' );
define( 'NONCE_KEY',        'TY`vGIEPkVqcK~`y#b<U4Av*%_C68!K(]OcS/YtL8&{:{E}u oHt(KD(p.FRMuY<' );
define( 'AUTH_SALT',        ')eu0+l?akLQpq8&a%nFI?hz>ea<@dMW$8<GB!_G*-|x`DJ9Ku<{_/p7)$J|H!H)9' );
define( 'SECURE_AUTH_SALT', '#h2,*:+.+9YCnm/G2GcZue*%ESdWMi0-dT2pN~K]vTtADrZ&SZ6@B;}+-!&PhgjR' );
define( 'LOGGED_IN_SALT',   '7K[[M.R]kAnIQflQ=f75ei*%|>;)P>S#ikpV 5r.;Tb_9-)eFVZ_WT6=Ydkk+!O+' );
define( 'NONCE_SALT',       's^F`y6jM`$z=VBH?<6 *hWHD3h|s,b |&>e%j2sal>=NU5H`l!jQ-UaA#qo~XhP!' );

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
