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
define('AUTH_KEY',         ' !}Mn}T.(o3;IT#N^.|X^jq!usI?BFi3w0%z6XR&!zr~sn(|XK1 j^m0g`*eiJo1');
define('SECURE_AUTH_KEY',  '&OKC6T#HyEQ}i>ZXC+XvYzp)&1$&L2C{:.C0A:}-n(M_wv_(Fc^[B]am|8Z~?VS$');
define('LOGGED_IN_KEY',    'o$i0sK<L)8ggX{:kEb4Jc]l|QU?[_zn-5j.Nx3<d;fTH]{+tweaycB*lV!]Dh}Cc');
define('NONCE_KEY',        '*5@J]ruCJ/LgNfJ6>]qe%>F;SRrYp+7Su)VjgHMxBbv+/;*-T~DxMnS~B03Y=}X-');
define('AUTH_SALT',        '_,1IXw+lYfC[WZ^3S>-n,kgo(zA9`$]OfN^,qgBm`6MTVU>~M}9vqEN2[)$JTaHF');
define('SECURE_AUTH_SALT', 'S@SXf<)Cte=Z?B:3t4<]^L,+<K{Pn%c@b/H60Q48TJqQD.7 )cqt:jy1`5}ex6nZ');
define('LOGGED_IN_SALT',   'l7Hwp.enTNS9&Wc?~BhC]XT*%TiX|/%vo$9c6 {T?%{:7cd151*.`g&EK^o5qn}6');
define('NONCE_SALT',       'I!4:b,R!oPL?d6aC__MdW5%T2OvB;cm9e>zE=3h&WkN7wdAp]8@?H0(Nu{-]vLPy');

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
