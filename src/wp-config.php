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
define( 'DB_USER', 'admin' );

/** Database password */
define( 'DB_PASSWORD', 'admin' );

/** Database hostname */
define( 'DB_HOST', 'database' );

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
define('AUTH_KEY',         'Tvp`ksPY1S%;<zW9Je7hc$3_Bg@!-,$a7Lg}u+WnN@i@O=Y7@AG|$Da~ CkEFpaM');
define('SECURE_AUTH_KEY',  'eh%5~ebQ2v-A;f42h}-&0-aDh_CZdG@<];^c<8?f/UiDd]`IQU/JZ8c0P6>y$=~l');
define('LOGGED_IN_KEY',    'm/bJ>u ([H[RC$ntY:X0Rv/ei%#e+></3WZx|U:#w0ZQ%!Qm(Cx3Q3 ]|Q9l1`~P');
define('NONCE_KEY',        'd>T:+Ghx/Cy8Ic?}PoFO!!%dDrj7,cw`vW);|s;-=zZ_i=v2j{Gc0A(_E+2Fr+5O');
define('AUTH_SALT',        '$VD.UU$:+;Zwk33vEi_-v GB5X*KKq,0Wg45QAaK~nZ,#}]L0#Dgli(gs24S(#/f');
define('SECURE_AUTH_SALT', 'X3=%~97a$Jj)Cf/^1PAxQI<v({X[T/J]t}X.%f8b[|_$P_}KAGS53U~ ]deOoOh1');
define('LOGGED_IN_SALT',   '3@+HBfbw$39Y8|h~z4]_%xi RhHGAn<{7Q7gq*;`<RaCMEYjQ<k42/T}Xbub&OV@');
define('NONCE_SALT',       'a4|HxdWi-m9DS0sE3SZ+}]J6{OqA@f4PX_0c5](GS^/)coR3M:~)>>A:QzX}{>#w');

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
