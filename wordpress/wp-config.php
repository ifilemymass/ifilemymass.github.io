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
define('DB_NAME', 'db');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         't8g_QMR_Bb v5rkR`QL=w+4Z%lA@~<PLNOUU2un&!-g(`66Q#F.!~v>;L5|r!$a}');
define('SECURE_AUTH_KEY',  'fT^_(2}5t$%kna1f$[T!zl2IV)v-%)s}]](z<1k~a=M+VvHEP:6 .a(iB/oXm+;n');
define('LOGGED_IN_KEY',    '7Q*hKe97?^1!dma~Q7@0/=|oIs|#6_%p#:xpZiQ9mZxiuG]v0L[nv8|O+AL+w4ci');
define('NONCE_KEY',        'VYIhu#~|oW.l$H+7`5EQgOa#P#g]y)>W`[{o~v|}oe2@zvZoWTNu2;c8c`g`k[2e');
define('AUTH_SALT',        'HmZjx ,R-A/e(dz7r(Y1S{n2jv/wblQ(hH:AI!>2$mMTzzxi%Zw]7S2TE6}ugK1S');
define('SECURE_AUTH_SALT', 'f9Kf=qV;J;pD`@k&9!Wk-~iCk3Au$WX_A4/ GaO`%8 8J&=)Doioisc`y!;vDh5S');
define('LOGGED_IN_SALT',   'y.r$M,<n!m>[bY]`I^t$IwiBR:  2iiamP7zpN2V~FnIg;l]I*$0kd^H&ejxaZM1');
define('NONCE_SALT',       'ffwoG Nzc%.HGF{|wgb2odVNF=xWAjkt}?_CS</Z.z6T`xs:U#h*Ez;Vq#)r|)Fj');

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
