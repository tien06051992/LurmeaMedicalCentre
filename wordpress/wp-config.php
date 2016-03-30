<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'agil_lurmeamedicalcentre');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'LQmaqq*>L>b+f5QJA(&Jbt1,ZN8tI[(m2 `]V#UQ{=Ep;vd{#S|VLxqlV+Fk|MXs');
define('SECURE_AUTH_KEY',  'cZfPoOq?|wx4R/dFAcXS?_L|*;08y3p[C[ae1~Y0=jGPSY}>YW2wdY~nILj)|NG,');
define('LOGGED_IN_KEY',    '-5P=UF1]&!((HB{e)Kgp5`}IRkS:,I>Op.dV=A8%ZjcS|x*6)#R`u-}dCyyw|+,<');
define('NONCE_KEY',        '0fzY+}7:5#*bmh`hp2]XLLZ^bN~-9[-7+?Rhy26Zhn.2S]0=NWot$[NSXvq=W@AV');
define('AUTH_SALT',        'n;_T}G>L*[N+ij(@K=|I-(Tz5~||s>Y7R!RmDC/W3:-+E(a|8)NOG$RLU]OnIE}a');
define('SECURE_AUTH_SALT', '0S*6aeJy.5VFF]nvK7u.R}s@ uRpK!bOQ-TN&eM%e?m* }@_^tb[>xoXH18$J$kn');
define('LOGGED_IN_SALT',   '[d%55WZ!<{TLknn-$>!1rM,~*N984Ai2{&tBYl$No;Z_bE{mkD|7%vS$Wh9sh33p');
define('NONCE_SALT',       '%BUkQ<PWE &BmAP(:gQH[?<nztuxu`z2CIZ54(>1&S(C;zGNUaxkZ><ztgGMil-q');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'ags_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
