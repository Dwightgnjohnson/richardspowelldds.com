<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link http://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
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
define('DB_NAME', 'richardspowelldds');

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
define('AUTH_KEY',         '8=wWn.-AfIgo4-4hcA.lo?r>B&QOqi0#yPG)i -ze2Ukr=(M|C*gk[9k8!o}.~n`');
define('SECURE_AUTH_KEY',  'cVw/CL{1fntfjiKk/]~N7*00V{Tmx-n-aCT[n9eO+q|q+6zi zm9v+HGV{0,a*:p');
define('LOGGED_IN_KEY',    '-&-Ksdd{q(9%c-G<3r+SM(sYX E<d7]S!#[Pfi|_9`Pitba(R}/mQN_^mg``beF1');
define('NONCE_KEY',        '4KU-o|1Qb6qTnFuX[66j]u2<DlGSolA-f_p#_%um?&HTqWt(jkjJTea%u[{KxzTY');
define('AUTH_SALT',        'vy++8#&MP./FNbjJMQ}<;F+91x]o[?*h<Bbr>~7>_(J)Qd=wn@qCLKI6B6P9IOeD');
define('SECURE_AUTH_SALT', '0iaP+y72u42bn.AZ5)V#3!yu({N$aWc77f_%:l!K%ze@-L <=ttibCPh^?Htpq-D');
define('LOGGED_IN_SALT',   '`zx!=sVvcXi(9e*7e<31D:tZQ$rX!w~{a-fV^38|+ H!NGg5Vs?5l$5->h-TSy%X');
define('NONCE_SALT',       'O^&+P({kkJ;u>9<A(Q*EV7KAUYbfPjZzv,BVCKtPg{+}6?OW!g%h}%W+Uq&3[%JV');

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
