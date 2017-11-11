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
define('DB_NAME', 'first_blog');

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
define('AUTH_KEY',         'z<L|GkuROmHw;_9d(bOMYgB.g)A!wtNrYP}yx|ZYU<6i}hhFt?aEdO@0TTS2{+li');
define('SECURE_AUTH_KEY',  'XIOJ9,x&]382C3&5YY=>E~#MN+mQ*74w#s*KJd]wrKX$Xk;UP3FTn4_Om|VX`>C~');
define('LOGGED_IN_KEY',    'p?x*de4Lh*0;<#fwgkusUfV,Wtq2AFv]QGwq4l!J8eh3ALD?y+LV%m {L$J+(Izg');
define('NONCE_KEY',        'tNjvA_0c}97I ?n3{ ExnW`R]R?<QA*)?@%DIEnxlY8Em+qcH,fT1OjeW0MiNo>G');
define('AUTH_SALT',        'Y}XB`&;Z|J7VFQ>GK>y#d=;lt~x?J4gL-@_?va42n?K#M.`!%Bcppz<-_S/:%_G ');
define('SECURE_AUTH_SALT', '>jRs3pD:3D_fOLT(I1.z47f t|y%t1c>4G?n/N`89h%!EW6<fiy10FLcq=UnABse');
define('LOGGED_IN_SALT',   '2U=a.FKCAsNd6]/eX.<Eq;j6-9ha/V+x_&ueu%lZTb!)gxsSDN^^ab.IM~z#0{&z');
define('NONCE_SALT',       'bc_1[OuB:>Xlfstu:NP_=Ags&&_ Ed)xL`BJ2&?yBh&}+6)MXt;Kpo`&)#hFHp_=');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'fb_';

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
