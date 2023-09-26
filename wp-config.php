<?php
/** Enable W3 Total Cache */
define('WP_CACHE', true); // Added by W3 Total Cache

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
define('DB_NAME', 'melabaza_web');

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
define('AUTH_KEY',         '4@MW2^%vu_)&E.*($Z6<:Wd{?63>`~-Ei+)x(8=qt/K>q-HV.}![pfp0G*z)GrTy');
define('SECURE_AUTH_KEY',  '.(]>c$$?)a%L%:m=W6)oE;VJhF452~k,><;1[~>:.P1qJVd1>H%R{bkx7y GWT50');
define('LOGGED_IN_KEY',    '5z+Dqvhsr(q@#nOZ@aZ]C@Gd,*iT45yIEILFm|u!>zsWG=S+if7u*C<?FFXIglbG');
define('NONCE_KEY',        'r1.kI>p1sM,(sKM0zPyewTwd{CxBQv*sh,3jF.Ilj2|zFOK461DS5a*uQ*e0wxin');
define('AUTH_SALT',        'pkA{oobHHXFSf*`)[ IJ(hkoc6aq4ZjHDwno#!b:0SHtBp?#uB) z-Ay+sFbH2%o');
define('SECURE_AUTH_SALT', 'd%r:yv:e({]7U]y)qJG/[qWu34%?&UvxBR2kD0u=T/N%$]xL.iHZ+:!;92+s3Rlt');
define('LOGGED_IN_SALT',   'A{<&K ;0Ct$4bMPHJX,6;OTe(d;;hk<4[GhBTkI0H@/8V@i][@+HpZmI.[FDLQ/i');
define('NONCE_SALT',       'm?+%9_OXzpI=4rJ%*y0h5Z;(.@]FDI 1>ErK>mdKKBX^al 8?%x5g9]9|)TBRVwR');

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