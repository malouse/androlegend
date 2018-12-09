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
define('AUTH_KEY',         'W9m8~zV8J02{,L/NBs#7U4wJgF&=[[:JM<M{XM]|bb25ZKYzssyN$9Wm5;K@ow`@');
define('SECURE_AUTH_KEY',  'KKxvV?{m}CYq[K>9e0?t1sgE4_+&LlpIq8k{4Bj7RIS9)p95}4a_2I/yhv!}g84l');
define('LOGGED_IN_KEY',    ')sSPnX,dm~=^a|Qu]7GEY7+tG#$EKBH=E-9N|(TRm C)`Ouu2W45^`h8.@Mj^dIF');
define('NONCE_KEY',        'K$QCx!.u3ywA_1BZMWDoy^$,PBv?Kz[6@uRlL%pcYZn?(lJ9-L=(BlkD<M#0$jL1');
define('AUTH_SALT',        '%)z,^Ja u<FUCosZi]1$1w^bHOB!KD#,?]@@@77YCio?@GYQ!{eE>d]~Jof+n}m4');
define('SECURE_AUTH_SALT', 'Lzrj[ CeWtGq2MsFk.x(5/}?(jLZP*&<Y5y(@!7F#(3(6c()S#]!z_k]^kq*)9c@');
define('LOGGED_IN_SALT',   'ns>TWTq|4^YgMB,S@O{r4o|>c}0(&};<kj;3w,wwG 1s:[QVuPQjYwOyc_6 %hkg');
define('NONCE_SALT',       'MGAyDi4w!%*E1PR ;>{s1G*)y0AN(>~12Y!I+n#6J8Lr-:nHn4>pTM39VMP+#)J0');

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
