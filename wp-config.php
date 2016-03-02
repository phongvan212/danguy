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
define('DB_NAME', 'dbdanguy');

/** MySQL database username */
define('DB_USER', 'userdu');

/** MySQL database password */
define('DB_PASSWORD', 'V5fm7U');

/** MySQL hostname */
define('DB_HOST', '192.168.1.22');

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
define('AUTH_KEY',         '4?CMa2fVP.&?v`=h)G>N:$xk(S&UgT]8!nQ:{YhAY].V}6~bk)~CY<p@RZsy51mA');
define('SECURE_AUTH_KEY',  '=-2ZdqM40{#o__%ort-Wuv[/82(0b&s71&[#(m-t.nn}jydY&O1`+Zx]HfC>:Nl5');
define('LOGGED_IN_KEY',    'QC5~nNd`z=}N`MC-?kb2M$:P_CU!)tf+Hb)Iz/Q&Ko7nx|BQbc1bK~_gx5hF^4Xk');
define('NONCE_KEY',        'Ceiy#K|T4j81_M!GS})AUc5))};/@6$pOWrR6(at8u>N0rS W #1,+rCk]1qJk8(');
define('AUTH_SALT',        'sGB^419 u6o@m!skLtczdpA_EpgMyI%!/S6[VQ$psg:dS1kZh[=G90b3&45cNn[,');
define('SECURE_AUTH_SALT', '@t`<T1?`r5]>vW$Tpeo!:y,TJ86MYo[kVZb5eT3^YlZ.21y,H0.)vWbJS/+5MGf1');
define('LOGGED_IN_SALT',   ',OqZz7wkzp/K0=`q2fS^8L]i)E0n&QEBq+f0jUWL<w0DL4e7YH /$mT?d&G2E0+(');
define('NONCE_SALT',       '<4]-oszt4#:zHe<<3)gPqaUpmQ[.-c15>6lhgpj5Ibe-.}Kfh3;z[. 5(s`VC}FO');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'du_';

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
