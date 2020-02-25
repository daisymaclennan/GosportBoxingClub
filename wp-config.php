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
define( 'DB_NAME', 'gosportboxingclub' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'password' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost:8888' );

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
define( 'AUTH_KEY',         '[j4#&qn6^OyT+P{Z>*hgCCKdFo[mtK5|6)=`&ie*N3@PQam2y0jq=z-4F&)^Uv)*' );
define( 'SECURE_AUTH_KEY',  'R--4,T?#|XJP)HIaT>K}ZX8P=>OHs]%^GXafzD%0bXt-^WKQR91jGpg5n~7B5`1;' );
define( 'LOGGED_IN_KEY',    '%vc2;C^,:8.rN]KCGww:hU`|(RJcP@lNRA,{8No>GPrSp<nq3.DyG&[wxXv&Ln&2' );
define( 'NONCE_KEY',        '3MBQ/^JUd,0a5aLO.r`h,telwA96bnKq7Wug8 0!<b^~se3f`rbnLf;XFL9~oT_1' );
define( 'AUTH_SALT',        'qTnW=~!1}Gb?kg>Je}397gCz}L*Oif{+hRr,#k<Fy%I 2[]JB6sOp}mf8lkP4uu5' );
define( 'SECURE_AUTH_SALT', ']OqRSNZ5N*g-*;BocB6ntAn<3oG;kECl)-`-d%K9LSchZfs*LsgM`&51s)n,Z1)/' );
define( 'LOGGED_IN_SALT',   'Tcj:bHa<6_m?njm+ihTmyQ[fpV4A1o4h~>vmQL_Cs]}td|Zfk{_srTbLYK);:P>{' );
define( 'NONCE_SALT',       '=_f(gz;uEWi70o,zJ}>^0~m-]5>QfJ*{,dR#T6U,rGk@gi0w<0?>8cjOw],[v^sx' );

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
