<?php
require_once( __DIR__ . '/vendor/autoload.php' );

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
define('DB_NAME', 'marnell');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'mypassword');

/** MySQL hostname */
define('DB_HOST', '127.0.0.1');

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
define('AUTH_KEY',         'T6}?G{b$pZzQrpIV.mwlAVKspKPjG+OxfpI(^*P.=5injPy<i!2S%zW%<Y}D-|| ');
define('SECURE_AUTH_KEY',  'G/J!i5~+B&+;>9d,TlN+=I* 5o;[%w#X#eu^Ilk!Ykr)~_]:Gm/ENi9(|1u5Y@t,');
define('LOGGED_IN_KEY',    'PA@G&!N$$4/J6dwbUAd4U5(+z-r|y*4V>>O+%.k]b)+N^dsH@)>WvK<pnGLUK{q<');
define('NONCE_KEY',        'J.ceupJ30eI-`PDq@]oLtmNX08JU+-~eR|bYm0^zQ#u3)zI7U>g(c$rgI:`z`K6`');
define('AUTH_SALT',        '(irnLG_rI+W$.KVfoTz(+@+-LvmX i^q(:i87p@qy?Fywz&Tg-ezpd-iGtiw&+%p');
define('SECURE_AUTH_SALT', '>90x|Ay.ICv9G/EiFDli;vG?Gb4OuCm#xu4*#G_%So.j-6^1N;goIqIBViKj]{vA');
define('LOGGED_IN_SALT',   'lo3;MQ@5:x56P9=2f|^T@}nfjH3jk+6-i0|lt;d3}=)-~6]L96R?H%y-cbO2$5xR');
define('NONCE_SALT',       'oC 8)&d!W@lk?Nfj2|gKv%5n+x8vzOCJRJ~-OK_-AcZRN/$n8d,c+nikFjl;N-d1');

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
 * Change this to localize WordPress.  A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de.mo to wp-content/languages and set WPLANG to 'de' to enable German
 * language support.
 */
define ('WPLANG', '');

define( 'WP_CONTENT_URL', 'http://' . $_SERVER['HTTP_HOST'] . '/wp-content' );
define( 'WP_CONTENT_DIR', $_SERVER['DOCUMENT_ROOT'] . '/wp-content' );

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
error_reporting( -1 );
define('WP_DEBUG', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');