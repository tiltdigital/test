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
define('DB_NAME', 'admin_tiltengine');
 

/** MySQL database username */
define('DB_USER', 'tiltengineuser');

/** MySQL database password */
define('DB_PASSWORD', '76Rfj2@c');

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
define('AUTH_KEY',         'hF2~Y=bXFx8pbRzjJ<Z})MGDeH,)ete5`v$B6x:M*3lCArHcPAls00;~1Ow%MJ#L');
define('SECURE_AUTH_KEY',  'C;Z[qm<12{R(Y )>1,k)#Pk!MF+U;jr@K?W!>bv@=B@SWC6I&Qdm{h6 =!;Bqpg-');
define('LOGGED_IN_KEY',    '{{JiKu_.|p]Ev>NbU.3n/2P|BJt*$0$9|^*>sEoPj iM6G; Mc A<O Ht_g6MrDC');
define('NONCE_KEY',        '|AW.%u)c/5LzwM- ^cW-sC`kgJR5L3PJJejA)+_]|OaxK;{<5jVB1-KE|-[j+<:V');
define('AUTH_SALT',        ':Pz!wv&+:tgL3xXotQ14I$TN;Rt1{H].`bw|LOrdX=aNQZ$Kc7Oaa/W:;<z1^%Ux');
define('SECURE_AUTH_SALT', 'aNA*^#w0/zhz!`[DUT``lRDk&Qrn.6p.6&w0vkc%&<sx<V=oR:AZC`i?NYG7>/G_');
define('LOGGED_IN_SALT',   '/||LQqLcD)L^)q//+Jg@-A~9SPmRce6VtcYMC]C{z[>N${[!b,|Cs 2IC6U{5ikr');
define('NONCE_SALT',       'jhs-b7oUdOmd<x!~[+~81p@bFBR=#m<M*Oga/ixZ9fde}^tbpNspE]F8(:-cqjCw');

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
