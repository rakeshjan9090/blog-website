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
define( 'DB_NAME', 'blogwebsite' );

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
define( 'AUTH_KEY',         'E={84fupB~:GYq=S)-3NZcaKKzw1dw0ohg7Vw e.rBI0U{h*ItT%BUkt^0kq77A8' );
define( 'SECURE_AUTH_KEY',  '9-g&+$#GkzKI!Q6]fiwJdWW4(MuSRT]!)[@][nBr3f<h#L16%^z)MIAWf@q-EhDe' );
define( 'LOGGED_IN_KEY',    ']7 l 7i<Qyn[h;iN#65[v!I0:x.Tb5.d~*z?=^z-&!:Kigr*A_`-?nA X#{IV]p)' );
define( 'NONCE_KEY',        '{ckVde9hK@wU*o,``MsYJ-9GsXZax-2y{6Qv%&1S~Q#VBW.KWiHBzZWj=P75P0i/' );
define( 'AUTH_SALT',        'OM*-Ycg;7>:WoGYLADZ!`{998MPgD3x7K)U,Vm=Fr&Di>_ZLEi8)>=>_C_J5f/Nx' );
define( 'SECURE_AUTH_SALT', 'vrEb~*UXa;[`ECD$z>^R&@[:AWe-/}+Zcav+1>OR?cY-~{k$/O#yup !9M(:!;X3' );
define( 'LOGGED_IN_SALT',   'P]1slb6^N3|H<*CuG*,RD=d%HZ[i3y6`no^<#?65-C5.`.6?l7^{v2B/9;}R67|p' );
define( 'NONCE_SALT',       'vCT?v|Uj=a+L4i3F>{gu`rn%OE$ IX%7$E=~#i,C@VUN;7?DLni.hGqh.f=Jvec|' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'blog_';

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
