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
define('DB_NAME', 'wordpresstemplate');

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
define('AUTH_KEY',         'Gg0zat@9_k<%M+4SpCP]wakoC_d5CAM+*Y/n(gYjUeX.w#tn_>Ul8Yn_F+(&:f/I');
define('SECURE_AUTH_KEY',  'wf$E0ZgcM^p&Sg*/C6{++[=Q,XgqyW]-qFH(=S P,ic}qe:g{i@g:<|Xz#2>:K1[');
define('LOGGED_IN_KEY',    'B6]:TpjyMgo<sCH45l8K2_R0C8d .~aWgQ(6H^Grq60VV-3YGqFD(KG_uE,?^IY-');
define('NONCE_KEY',        'Rr,dxQZ>:/jVS+PE=|[{wQ7TH)3<(9I((9W9.+M1,@|3OlNsi}2krq@a(K/g.9f.');
define('AUTH_SALT',        '7:qod|_:KHg(jxyi!4@%}2-M6i;.)w9kw/3p_M#rGKjo;7Iv%`@FLcO}+kHNhs=R');
define('SECURE_AUTH_SALT', '{rxoNX0uU~ii/-f#bwZ>cRH|pS8<F=;jHX$l7y:!1,/z|I5wO)#h;-LO{xrZ$!fT');
define('LOGGED_IN_SALT',   '`Uc4j(RcwZ(]^cn;Jx3)t{%R [dS&(egYf<<B?e2&u!D%Op2^buA[nh3RIu!J~CT');
define('NONCE_SALT',       'w|K6:}<+XxxeR-Ac{%dhc8PKP_c&hkg<ar147<;V+ys+o9k+ Tnj[bI4pc>}K!2^');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_testsite';

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
