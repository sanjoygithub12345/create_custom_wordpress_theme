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
define( 'DB_NAME', 'wordpress_project_one' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '=P#1%Sr#A!LY`H6|Q} AV:Ub~WFX!NQ2h)8$Y^Q?/tN+F~8NA]Pk4K[6_/4f}t$+' );
define( 'SECURE_AUTH_KEY',  '+_VpTu+5CjKC]`)<E:O0`QKyPuD8V@tj4SClFw4mByYGA.08cQtGF;lBqu!T7dh+' );
define( 'LOGGED_IN_KEY',    'gIW`0X*PMcG/@~*s$ZPkzkMiA~F +dFirKfc~^GSaoTNJ6GKjsC?9uADu@~k%)T ' );
define( 'NONCE_KEY',        '#6<(2BOzll-Fqnq?bSS+uJy$}`rwl)[t<L5?DhL(uz{zoGzzWi~rub>pP@Ze+`OP' );
define( 'AUTH_SALT',        '|2#Hd Vu|Fw-l_Q4@}sV5.44y@S)o6dix@D^?E8?@O=oU*JnAzH|@ueXQ_bZs7S$' );
define( 'SECURE_AUTH_SALT', 'i!u%-J4OtbahP}sX6;cgBg_%7|&k5ETKRb?U7O wjR>kuy*}Gd4MQ,BEpz5en=1w' );
define( 'LOGGED_IN_SALT',   'aS_rV#bJOrp,G<:HIvJbJ&;:*tBXXGn;W:-[,S=!7ss1^ojy<tkrtE{x[1xaZ+SA' );
define( 'NONCE_SALT',       'l|&ux9R>9VC`n(Kz4|`(tn,+B.N|h.NuC`U$fZY!b3=~F:26ANQY_!CE@hUQ-d=g' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

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
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
