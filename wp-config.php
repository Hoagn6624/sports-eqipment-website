<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'HTTTKT' );

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
define( 'AUTH_KEY',         'J2%?WG}PB0:HLUh.EBx,D*b5m)+#Kfbm_U8dW-SZj _Q]W[%;C$:WiA0lV,joM&H' );
define( 'SECURE_AUTH_KEY',  'e&b2G5.Z7X*dhOCV7a,pc2!TJm>Z|:WBLuQ:xhQK%tdM&j:2b1f-KSx;~{n+`..M' );
define( 'LOGGED_IN_KEY',    'v#Pn[!vH~24~!esP)DN8SH$AP+FooyX=@;^^)%$ZT6jEl(M<OmZf#T%b2SqH`D_r' );
define( 'NONCE_KEY',        'at^NPz_@fjt!Z,p2)Bt00 P3Sw].b::$Y_!Q([LKl$=OXtLx=&yHH(K=`+REN_.1' );
define( 'AUTH_SALT',        'V3`H:P|$7SP^(KP6?tAv{#I+_]@,dDX^,d{s#6b<[?Yh?]B|aTxjl<-2`M,pA$=D' );
define( 'SECURE_AUTH_SALT', 'Ys*X;7-26#p<qmo%M~*l#^QlzB=46>_uL,^<Mw_S^L+CL:s#m40EUDd5H%LkZF!@' );
define( 'LOGGED_IN_SALT',   'P_BY<v[}l,Hye6yA;Ri(%-idFxKsidCrGH(UCnaCl5q<vyPliNheCCt/*7f]+&+P' );
define( 'NONCE_SALT',       '^cJ`c??>|]|lV,jv~;urU(y?xJb3`5hbWD60nE0X-+,x8B&<Tp:FnT&+$gx-%(z.' );

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
