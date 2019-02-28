<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link https://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'androlegDBs3n09');

/** MySQL database username */
define('DB_USER', 'androlegDBs3n09');

/** MySQL database password */
define('DB_PASSWORD', 'QhlOzLq61L');

/** MySQL hostname */
define('DB_HOST', '127.0.0.1');

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
define('AUTH_KEY',         'EMnQEb7QFWti*e~x;lexLiX2LE.A;L.+O|C5s:|C-s[axlHeSwOGd5]@YrkBfUrN');
define('SECURE_AUTH_KEY',  'JA6TPH*2{iun,bUnQEX3<ESpe9SL]Hha1H6t]*X+t#iWtg@wOkZ@VNgC0C~s[h|-');
define('LOGGED_IN_KEY',    'Z4V8:J!8:,7{n^yXuj^bQc7}J!F3r>^YLAX;<A_9;q#+{jb$3xq.fTqh-t5O1|8-p');
define('NONCE_KEY',        'vRzUrkBRG@4[G|@4w[!uMEX<P<E3P^ynczXunEYU_aTmH6a2PD*{.Ayq<maxTmeV');
define('AUTH_SALT',        'SS-5[G~w_e+pLl1OH~RFc4[G>@4r>@RkZ5OGkC4N[$rIfU^E^3<jzn,gUrQnc7QF');
define('SECURE_AUTH_SALT', 'l@C4R[NBz0|g~1|h~s0oh-V>^Yvj^fXrMjY}F7v}|J^7}kXP<E2q;.A7bTuPEb3la');
define('LOGGED_IN_SALT',   '$b^y6u{.brf$UMfIfUI7;H6W;#K_D5O.A;m.+ax2<iRK!81K:K8w:!Wth~aOoK9V');
define('NONCE_SALT',       '0Nn,ZNkCZN}J8z:|a2]H*u2t#*6mfyPIfEbP{E6pK9W:SOlCZO~5]l*x5tl_aOBz0');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);define('FS_METHOD', 'direct');

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
