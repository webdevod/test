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
define('DB_NAME', 'myapp');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         'a|_lk[7?m&9:y;}-uH{I?((zhVRrp->p6.JKw,;,v<YZgyEUN]U$;!7lxr=&,(.u');
define('SECURE_AUTH_KEY',  'FWcY8Yo0^Mfyiy(2}NbWgEod@7_$e3NRGs4{j2-J{xo)[4&G;[3.fhZ.E@n;GbdY');
define('LOGGED_IN_KEY',    '}6_jTzeA4*u<h^nBg_R{oUr4r`2g^qXF]>b@HkX@Vjg846hUty(.9Y4(seVDyP5q');
define('NONCE_KEY',        '<b9P$r(7JmK.ogewu|eSr>%<BV;kD`$$!s`mPS8!!zh%u$^v284PK6& Ub?OSL#g');
define('AUTH_SALT',        '[~15&9=iM>0?a(x.E&-8S[6$1v`z`%1kE2U%Fv/;%t&&vy$TX-j*J/Vz}GJ0VEF<');
define('SECURE_AUTH_SALT', '!_!KURo)PP$:`.y%;P&WY+~lN4BFv7gG@J6b~emd4O3%7:_[x6NJJ*r$vp ]ULA$');
define('LOGGED_IN_SALT',   '9sOe($4@w)0qzHZYxrQZ0RDa(D0&018Sqw]_5IY(`;xSud%.Fx/k)tJ|3WX9~2R:');
define('NONCE_SALT',       '3%7*^=.OxDn,NHH0?4_hdOBYH s^_*w%7__Ms$[o-aFR*0m_;fC!zkb Hja/Mr94');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'myapp_';

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
