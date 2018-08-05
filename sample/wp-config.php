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
define( 'DB_NAME', 'homestead' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'SuperSecretRootPassword' );

/** MySQL hostname */
define( 'DB_HOST', 'mysql' );

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
define( 'AUTH_KEY',         'O.?<sIa9J]@bngn`M#hEak(AXfG3?p^qTvnMpvX-=G[@oE7`o:ZpMlhB@JqKyudP' );
define( 'SECURE_AUTH_KEY',  'Rh+l=S_jZrzR*.WMrmZ%c<P=.9dMB.3ZaFdk+>xipf)_*G mx@_&edZE{l8Y@gsm' );
define( 'LOGGED_IN_KEY',    'NWz(Y,jyLUayQtrqi9Cd[2??!/3jS7w~e8kBRD^joxnpe!^J4$6OUpe^2.V#g5qX' );
define( 'NONCE_KEY',        '1U,3<_lO72C+Hw_k#AalD#<|IyC3gly&vna)yRV0h81xRAo!E3!meS*>l5h>m)Zh' );
define( 'AUTH_SALT',        '%C*(nTl{{1s|{=L:hOOjil/,.$[N+tA?z!i!d`)dB35B9,Bq/L8tL!gn}.,{Q=M.' );
define( 'SECURE_AUTH_SALT', 'F*C(K}~f2+WkH/>GX+Dj-`mOb)sin~N&,v6usoKxU9Ux7STW5$7-p){JC{jOba#I' );
define( 'LOGGED_IN_SALT',   'pMQ39usRn)]c4.?iWECU:5ehp* x06^rvek$#6dtq]I/?sokHc~Q dVu&_d!;45C' );
define( 'NONCE_SALT',       '7O[nEDPDWBi+LmK5fC[W-s]72<y5R*+T&HS!Oz@UHB|~U;0x jwKNw44WeenOp8 ' );

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

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
