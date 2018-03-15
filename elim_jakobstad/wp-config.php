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
define('DB_NAME', 'elim_db');

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
define('AUTH_KEY',         'vUB.:Y+y46cU0!A0p<g_sn98I@,;K _GsD9S3KRm43IBfxdR`s/YNoDSCQU[{|^H');
define('SECURE_AUTH_KEY',  ']7qJo`0HNi.pFf,2fp<fF{F4/G.Rs>up6BCwPy7JJS]]+%|L!6{E}ZvJFy,1MvBX');
define('LOGGED_IN_KEY',    'Hx-+NEkfGReo34Z9zKUj?@Znnk@NCw]oQ9[q;z |T?[?$%Efwq3QR~}JWP=+.B`N');
define('NONCE_KEY',        'a55r[#F4*&-Td;^>0E&Ez~rd5y&99zWVZZ.}T@A4nW[*(G&|v3$}o_^7u~b=GFYN');
define('AUTH_SALT',        '<rxe*vkM29hN$.04=2*p7)?;+ D&dw#U)+aKJWaLK}eimMyb(.6izEp-N-@=?X({');
define('SECURE_AUTH_SALT', '@5U9^U@8u/CrpupsVP}-tylkGaT$|hR>=-CV@#kqEZ3KnO%R]3AOX-5gJb[ldgRs');
define('LOGGED_IN_SALT',   ':tbp0.:5zA,Un$LQWV$_tK3!k>Zn}FQy8Qu)pI?62FA:7bL/.B%*75a6#c?[MG@q');
define('NONCE_SALT',       'Bv>_E0N,k sA7iytV@RN>H3k*k*grh,2a_B hPkQ A{^cjbBJPJ,}z_RRcix/--e');

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
