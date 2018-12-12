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
define('DB_NAME', 'androlegend_db');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         '%]7%|ElT9kmzKxcd$/[|@kUg,@ig?#Jn{l>1w5XIwasxq{Rz 2Z BE)Q`Qis#1Qe');
define('SECURE_AUTH_KEY',  'PLsY{w.6N8DCHHvdAlkQz; +(!nTUe/`agO>amq|--B!/mg*6Dg>9Y3$S[Vu=)lH');
define('LOGGED_IN_KEY',    'LQ?%rfoV3h-o$Xi:Zq{XAH5gSNF,3@#mSo:jxM:7mR^Clfy1?^jL{)S-pFZ7Tdo7');
define('NONCE_KEY',        '(B=pEY|Vzy{H[Dk&}6Lc?ka8&YE<J!KV$.x<=KodH^P%J}jSS,q7<H6][2JXqIDU');
define('AUTH_SALT',        '&I,{keu~k$AXOxb:D+#G>rcE}p(TY1;Aon8@vBvm;C &Mu&%nA^*v>PV,Ydpa89W');
define('SECURE_AUTH_SALT', '1?}]x7`jMk~14?at8Qs:iCy:N0s)`F9bpG} eBGr%bW:N#t)P<nZBz`?W^=$$d}M');
define('LOGGED_IN_SALT',   '@+FJqGQ^j?VtQWUctNGv[&fD|<%v{a2d;H$L0ZbT@:zC]&5Zql8clR6BGB(BOMT<');
define('NONCE_SALT',       'kXo$,0Xj^%=X165+K]P5l5Ux+=}T>~#~q(@9s ^zId>lSbT[k%p@}%6Q*ydu6Q=h');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
