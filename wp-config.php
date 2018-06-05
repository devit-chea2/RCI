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
define('DB_NAME', 'wordpress');

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
define('AUTH_KEY',         'm<:gLkC8xNWx`G;Jj{L~5=d[X<v=qFt%75Dh<|:{}ME7u$1-#bs?7.Y!:WnfeGh4');
define('SECURE_AUTH_KEY',  '%ZZHI2=a*V5wl*[Tk`D6;2NlNRvLhC6>R]?oD69.Y$|tqM+N0+c257V-Qox:[:De');
define('LOGGED_IN_KEY',    'fxUtq{W+y&O|B/4_mnPbdj-kiKyOo/O:t0mM27:`=5[BD&3&lQT8-QPs6PO`0-.k');
define('NONCE_KEY',        '@Tt3cthGt&;)T*EQ*M[kn$][5Qm RMPep,X:O8kDwj_r<%-(7bG>@}1/b9uj%*8&');
define('AUTH_SALT',        '*qo1JguH/hrZl8r+K:|~>?vDViZub.^jr5esHW3OciAdj3h7ts;Y`DDC(kDu8]B|');
define('SECURE_AUTH_SALT', 'CM/dR[H4<s0MlI{}:^r1?Yl>O[D;!{Qqwaz=A- .[cENM{XVO5jjwLuV6k&5Q6[l');
define('LOGGED_IN_SALT',   ';owL]]I1S-y|jWx4uCmLvjVq}MdSnr^,,dT^uR0!<8d.AfD`d;yYdaL}^=<UCY%>');
define('NONCE_SALT',       'Fahc.msHEw[l,(BOiX>9RmGdn~.t2fQF,VaM2m5wC3BFP%?jR2LYVA|.th(vH!K9');

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
