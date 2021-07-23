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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'rechord' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'C}4l/V[7AYIMq#VlFGI(-}O9Al^j-TxQms1,LqjEh2s@JxR=~O{aPAgT<|g1v{K6' );
define( 'SECURE_AUTH_KEY',  'GV@[d#LiA97#i1?-J/;WFJvyq;,jKG(aQNo5*J;yj#!}^&P-QBsS~:<VYEAV5J%*' );
define( 'LOGGED_IN_KEY',    'spTH?Fp.J[a{A)r<r[xvod8+wY1ya6k|dSfw]88;e;K%vcI?x9-h8U~0S|kZea?h' );
define( 'NONCE_KEY',        '8(yTyO=/]EtfVt= >7W+2g(R((;mkP~u{7{aT]UdrCBSV?bS4q:6JeNSYLDOkyr]' );
define( 'AUTH_SALT',        '~a&`;5-P#&8Sv6fu>s&kA1)j@d<>,M1C=kpg*JOhn{ycg>YzpKt:bQucUBS-r;gX' );
define( 'SECURE_AUTH_SALT', '&RP uva|vbm$>?%nWi4S>%|FA G]pn6ANzT9D_+[=70|xCbAO!~t}v[H<7w6vWT?' );
define( 'LOGGED_IN_SALT',   'pemJ#!,vB}rPti0$.Me85BU_/hO?qEL1+fQIp%<V]1]0w+CJ|A|D50R:Tmd=~Pr;' );
define( 'NONCE_SALT',       'A[IxmyS2P;KX`$+wjM3:_w5&f|B[BFp4Zy`)$,yV{Ht&oCp`P)DUnWph2k0wKh~.' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 're_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
