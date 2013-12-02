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
define('DB_NAME', 'autolawn');

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
define('AUTH_KEY',         'rI%u#-1}&ei]{QmR,`1@+],vk>+zwZ`_UkZcLV,?>-6gYC98D(tX.|^ohyAX#kr<');
define('SECURE_AUTH_KEY',  '-|E^_!^7-L<p,Q%z[PmLfju_M+%:-+[9eXdl{Dbt-BBIoNWKEr1B@W0-(V.r7h2D');
define('LOGGED_IN_KEY',    'a1{GWfkLdz2~E{-A1:V4bff^ulLO|/vI`%aDc46sTUI0Pdza2|+CG%M,$)HYkl|f');
define('NONCE_KEY',        'I@YI%MrW@O~LzPn!#H}&vr4(|W=w/YL@oeA[A>5-=|P1*~2gj$UiG6v1)f:360Ay');
define('AUTH_SALT',        '3=|lK3Ft1GxW&zKRQ{9h|*X?CEcj([;ZsT2/m+,QCm|S6@!yH,b-p!xt/M+~>?jb');
define('SECURE_AUTH_SALT', '1pLO6G`FsQ^G0L]{j(z#s*=6qh!+r|cx<hckf9J1(5 #wk!Wjv)6ovgM)C|A#pJ?');
define('LOGGED_IN_SALT',   '^<D9yaT`_PPKL4+,!d+kb}_TN|*YMg}a&;Yu5HjmH~=G!wl4+!o>[9EP#(cdfKu`');
define('NONCE_SALT',       'xj?AgN;{2!$1}$=3_}Iy.L+A.plS1w^|Am?9+|mHc4+}<nE|cQfa ).j}-8es/IO');

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
