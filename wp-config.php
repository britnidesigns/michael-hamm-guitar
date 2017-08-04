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
define('DB_NAME', 'mhamm');

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
define('AUTH_KEY',         'J5scNOe9xR<~vMMsXK!leN7tY%s,<uidUB&l1AD<8b6Z.rR~Q;s?>b#K5k7{y^FG');
define('SECURE_AUTH_KEY',  '@e|Px^s5cR:eAx-N.nH[!%l>}(3ym1NkfIHq,XeWxgpre>m(N!Q:?CDK56)57+ph');
define('LOGGED_IN_KEY',    ':w-Fn+dz-R7Y2-7(qNN^eCkUnBO2XN|HTKH^PIUs5*YL7S9cCp2dDd?kAV&a=1*l');
define('NONCE_KEY',        'W){v}hzKDSs!2Y}}p2}o;F%}A6Hh]6)4y0QgEmR!DsCQ@AaPTRT_t??)K?q{?#Z-');
define('AUTH_SALT',        '9-)^v^Ak*pbYHG>a[q=@0z.o_jR9B,o[D|),lO7GOOx%WQk(z_x:D---zQzm3f=B');
define('SECURE_AUTH_SALT', 'HkK<R6d]mMLm-:yhK|xJ*{C%;5Il-2|~-ig.)H/jxdy*2.vYq1C5,moGcmA<]_SG');
define('LOGGED_IN_SALT',   'vZ`J}kR$5E:@Uf5-xAk:PWv3^~*mpQSS(*W([q[RP`>W3W+4ppBR<#_}UtL<4!.E');
define('NONCE_SALT',       'n(=smHw&YwWdQta[!UvJ?2F.ec3TvrqHMj/K7p,Pbo[A5T~H<z8`vVGW]A@%h9fb');

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
