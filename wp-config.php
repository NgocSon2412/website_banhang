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
define('DB_USER', 'wordpress');

/** MySQL database password */
define('DB_PASSWORD', '123456');

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
define('AUTH_KEY',         'A47-0EnpR_YUm~+?#D84xN[oj0-D)V#/>*Q+=5yoJqwS+sZ6rYV|I1<x5u_=NY(L');
define('SECURE_AUTH_KEY',  'b(sUbZ j7E_%UY]IWGA~:AlUWV?3Emce=LjcQmm@QU+JU:v`B;f!#CUS.n2*s(R]');
define('LOGGED_IN_KEY',    'aI[kXE/@ ;l;+]Q8ha|Zt|-C`gbr;ho-&%.|hz_kA>aWip9#@+RZ:G- Ma.!!.[*');
define('NONCE_KEY',        'SeJ1+&5Y-V)-~OSSrp`fk(TGc>R+:Hp(IgP.Ppai0-6MWLwsCLSqtNSd.-J27-`&');
define('AUTH_SALT',        'Q=y3|+Vv+Vg@oqE7P:%q?C]S)b-[B7W!fP^$k$,jlP&uwAC-t++wIXFH6SUo8lY6');
define('SECURE_AUTH_SALT', ' :U=_`f0tK1+c:Dbq[Wr:E+7t@{<^,ND+`.[$<~!!Wq4MWxM+$]{/M},U+pa~(B*');
define('LOGGED_IN_SALT',   'VIUB_ *x4Yq9U=]xetDo&S]5h7fP!b,l87#2RMHrP,a=Q~o+ *>hP+asm51V8]Vg');
define('NONCE_SALT',       'rkqO<ggIR]|^:nK-WW91t$-}+-eaHf$:pNNBHxU+3x|pEX7R6-g.:}o~f~m09IL]');

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
