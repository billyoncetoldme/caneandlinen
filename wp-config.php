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
define('DB_NAME', 'deedson_caneandline-foundation6');

/** MySQL database username */
define('DB_USER', 'deedson_cnl');

/** MySQL database password */
define('DB_PASSWORD', 'sCDKe2BqNEC5bVXZ');

/** MySQL hostname */
define('DB_HOST', '50.87.151.216');

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
define('AUTH_KEY',         '`&hX_S&?d|1~ ~(6aozGka~t! #R@Y)6;_u5f0:5ZI:w~bG(ocG^v}]6SG4Jq2GJ');
define('SECURE_AUTH_KEY',  'Wn@fn(2ju;%~{^|kHbr4z`#+F!B5up/F5?eyuxOYg:}/K-hjgSP1t@l ?xkPKa  ');
define('LOGGED_IN_KEY',    'Eo=pM-@>Tua^{~,<Nn=w|;Hk)|&tXtDAVkD>Yt0z)W+#b5(sxFF:2J/!ajwsA(`m');
define('NONCE_KEY',        ']*]Dk<R#[]B)E.K2O<SPvcd>-G:b{|iUnD?)XO `|4Tyfou6`mJ5yVwf,U4=3ZT,');
define('AUTH_SALT',        'P=h1#Y)DBKI?zF|AOx[eVa{m6U@,ud~%Cv]#N.aYEUgUrzW~pU5dZ^^$7;z}FjN]');
define('SECURE_AUTH_SALT', '.!3m&r(|-Z&f7zzC b4y=5nUV_rM<iGKmBU|URhZ_|el1#k*_mu5D-0lG-WjCeya');
define('LOGGED_IN_SALT',   'iZ&1dg|4Q.W[au?x3+pnI%-S9&`P:m4i.E{p}-VS& b4^1?r5?Ff^EoY+JJSBvi1');
define('NONCE_SALT',       'Iw-,a;s<s^ja!i{g^WS8g&:Li?!#!m|:>D02O@K8>JOv+b-){(E`[X%Dv8H:T)?j');

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
