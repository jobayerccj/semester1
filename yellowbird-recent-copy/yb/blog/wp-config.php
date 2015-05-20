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
define('DB_NAME', 'yb');

/** MySQL database username */
define('DB_USER', 'yb');

/** MySQL database password */
define('DB_PASSWORD', 'Rtm3zYbmwWHhaHfD');

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
define('AUTH_KEY',         'dLbyc{2dKq:,-(<<WmOWBYqWSt+)QL2Gn^[tD~*ZFGoaq8x0j+48+o0rMW>VZj+$');
define('SECURE_AUTH_KEY',  'AxdBcri:Q,jTO*SLh-0R{|dmX)}T-c&N,DJ|!%f]o(a|sog(Zy,G%aB4J31pFH;%');
define('LOGGED_IN_KEY',    '99vD~;.?9g!S9`R@/7hy;51`,*LUm* gF{Nz&_wZ.I+(=0olFJoz{h`,-`l:PG:[');
define('NONCE_KEY',        'y(cXsTC:On?,h2#18YY&h%nJ-3TS;|+zH?4o>:ryctFy|+jtYt7sEc%$QpzX-{bZ');
define('AUTH_SALT',        'oBD5|]d-T_Rt*A4,.`b!mN/+Wl@#i]a5:}2)lY>T(#%q5~:#COc8Rw%$bZE^@nUo');
define('SECURE_AUTH_SALT', '/Ss];<ljpuWex2y[_eu~-m-qG#?7Ef~W%}k9-c,z|y~2!#kY,QonmYa4n/JrG9T6');
define('LOGGED_IN_SALT',   'rhA;W/w*mfCLodjQ8n|.bO[0$u[5Gq_uZx]o#Q>M}qyiQ(fT;LzoU28Po,J7)4Sm');
define('NONCE_SALT',       '[M%=Dq-a`q;A@rE6T}vy]]:|vPSk wD[bxN,E$ |j+@CBTk|1k@avbq}lKBE<_xq');

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
