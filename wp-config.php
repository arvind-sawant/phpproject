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
define('DB_NAME', 'wpjenkins');

/** MySQL database username */
define('DB_USER', 'admin');

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
define('AUTH_KEY',         'bhBT`.xy$CR1tUQg-OfsI$&yybpV#lr_aU~Nr,bC{%S8h,o,q%s/4Jx?  C$b?D3');
define('SECURE_AUTH_KEY',  '{*%-XE<+hC]ZbxB[] hID1nI8k8hqK/ML4zr#3]`^*!]=XGiMhJ#h5L$G*H)Y6#W');
define('LOGGED_IN_KEY',    '76l^Ik;uYV$w:bR!s+2CITj{~MI~d<A*3fYBM?Z}x/@52[-eSJi_wKP:8)A3L[J)');
define('NONCE_KEY',        'L2m(Ldt(DpxxD81l5<.!Me>W} 2l>lENTwr:6Hfjv3peA!^/invOgt`PP/Gfz(W^');
define('AUTH_SALT',        'F.c#g0h!n*`Wuid( Z{BhC{&89Rg:c OeC{)R6.%)dJZfVDr%^5!m+]R68,}ZHek');
define('SECURE_AUTH_SALT', 'ytY;dLiK%W6XNGqP7Lm(I#JUcHB?<OP*|~z-Ck~1Zwp;X?W(Bu*Cql66G[sieGV_');
define('LOGGED_IN_SALT',   'XPvvr@vq&A:{Cj;+NDGmp5Ti.> &!J-:2XnFIm`5zgn1;M&$u{E1U&q_w_^~S-66');
define('NONCE_SALT',       'o0/5r!}X_4<xqeMEY(amvfp1|-74zHd5M-W3bwu$@/,Z^| .^Sf#_`$AP3q7@U>r');

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

