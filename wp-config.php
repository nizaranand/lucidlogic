<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'lucidlogic');

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
define('AUTH_KEY',         ',}pDgYk2oZ#X./eVtUh+Z(<&03QMjJ]Z_Gb(syOa82z5o9W3`HQ!N37?hgrb`KdB');
define('SECURE_AUTH_KEY',  '&;#5Vi0P(ls*+Y6/3JNp(kwmM>&N I6hs<`TYi1T1&l7B_/Y/QzD$s~OA63.h*f3');
define('LOGGED_IN_KEY',    '7RW{^0a1*{JN&iC},|Z{m|?g/^7*dcxc=y-m? 1Z_`fU`_j{[f5*)TL2jTZ&UJ^n');
define('NONCE_KEY',        'kiy$N*QHhhgveeCL(kFG3T|/CQcjB<yYocwhv(PoGg0m6nGaX%)|W4k4v+ql*;c$');
define('AUTH_SALT',        'B|R|YI]KUQ{W,mJwAvzu>rBs^>GF]hS{Pb_3|XMN%PiT=$4;P sq +V9[$@2l@W.');
define('SECURE_AUTH_SALT', '.5xu8@J[&a%jq :HKLJmnU[`7f_YJb x~Ai9-g#iv0B[:&DWZaNg}`f!@VN~5,E4');
define('LOGGED_IN_SALT',   'e&[W);6*VWapPq-2Pd,T(4tn^!W8/wQ7Z`o81VOP/TUbQ-ZeqrT8w1VytI)R*OI*');
define('NONCE_SALT',       '5gOB|q(~t=G/QXQOFMLdsdbT?miDz^33kUW)<aI*(X@3p+(8t(X?Co|e]%u%<(PD');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

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
