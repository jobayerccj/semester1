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
define('DB_NAME', 'yellowbird');

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
define('AUTH_KEY',         'w.E&^Ek-Zslu!:Hg[W56{1+-kT.D!Qzmb|c6hxVM~bx[#h$7^%@yr}`qQ2m~q4?,');
define('SECURE_AUTH_KEY',  'Q+f0PZ2,fzFq9.3jOoE4 F Ro6gZ)rwLsc=Js&XD%g[DaZD@^+NVh1A!fi)q7zr6');
define('LOGGED_IN_KEY',    'HN<AXwO6]p2h|>;ozJ/5|M,jwO:0UzFVl%av.,(J:cZ3S/K<Gy|bTLT/Ozm!K;,-');
define('NONCE_KEY',        's&vn:1Ic>5N+-p!BwD#J]+:fNE|CbQM0%/BX-AWPZ|;+Jl/;E|+(9^,l?,$-cA)|');
define('AUTH_SALT',        'k<d+;DP2{.Ktn]CU@PTeN# .%tT-jZZgrDDjD!);,%H{oMiKa5Pew9G*0d0!9^ZK');
define('SECURE_AUTH_SALT', 'r2LXxQ]W$ vlqZ=IFaGuxqtUtr(ZKm6E(|!=}w[HUD+aL4W-L53A+2A>QPW{My}>');
define('LOGGED_IN_SALT',   'meN~nbmaTL_<+4{hXzIl;P{xR@~0MVG~!k0<G]:-NgaHttZX0FBZ-TvuGMX/)6j}');
define('NONCE_SALT',       '.KH@AXnzDnjajeTI1_2nmGX }P{UGhKpp4$*EMzJCQwFkk]uf65[n$N<`PDa7T$V');

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
