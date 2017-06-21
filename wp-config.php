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
define('DB_NAME', 'umbrella_wp');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
 define('AUTH_KEY',         ',x5&*M77CP6]Yt!I)<ynQMdz3FM>4+@3~vG{t^_cle7%@iYq:/nJ-@IW,Jw|+m=l');
 define('SECURE_AUTH_KEY',  '/L;:BNzJ 2i4kt[{p1|6NI+9(2O?Uwm`!7&U2S9FlC*<URhG1Z/i#R9H<{E5@:uZ');
 define('LOGGED_IN_KEY',    'Vhn:vqb40Sjin=>|K0xv egaBuw}+C)x:>)5!?/%z1H`n`~Z:O!c;(WN30]A+QQT');
 define('NONCE_KEY',        '^Uf?}RA<M|5y&-]4/m~++8/-|/MADHCIHiRP:1wy7=-8IQ[IIWZ0wZ:6N+0S+vM~');
 define('AUTH_SALT',        '<l/-fL^-r-Xwz:xlj#$+]bXaY_+#74H^/J_%Ua4e!jgpTEGlA4q%#C5.?FF#LVqz');
 define('SECURE_AUTH_SALT', '{+~3Q0QTn:oL>ib]:V+A{Dzw8,)yYoQ#kQA({N-,+Mp@7wdx:/-f9MLw;PD!<B{|');
 define('LOGGED_IN_SALT',   'S-!@HaqRL*Ub7xR|KWbwl[y%n+}yXa}t[5_#OaY+r+Q]?G2F^D*rzBNN*B -;tE2');
 define('NONCE_SALT',       '1|P6^G+a^H+w4nj(M54kHTe[pZN!OAh0{k`FNfvX-^7)O-`v6te`#vUzp-v6AG<Q');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'uc_';

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
