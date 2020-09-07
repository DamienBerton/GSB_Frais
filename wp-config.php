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
define( 'DB_NAME', 'gsb_frais' );

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
define( 'AUTH_KEY',         '9,ZB6@*Q{FPcmk*$@ThR(o5s,>upp8(JwD3iv:_CB{n1j99(?q;#&=Wjfu.-0nBb' );
define( 'SECURE_AUTH_KEY',  'phXjlga92D/1!rk,ig9uWN]oleAzR3*OS$xnXimoI(uBn$D|BMQz3N2Bfx2-<]03' );
define( 'LOGGED_IN_KEY',    '[HfX+&+XJ|N<&QFsu,>7SAS_j(@k`z(oj8>~!8z}52aeO!W821K$sS^UnWODt9=C' );
define( 'NONCE_KEY',        '2E`Hs#WSd{$&o WYflnw%7EhC3:e@,wR&o9oH-+^%YGMMz9IYF*x]NQHBgoxn+{*' );
define( 'AUTH_SALT',        ' pDy7mJO[r q%:V=/ }h;>OPXsn0[N1BfzIahJi8fbPK2l%C}n2>YIBQ-?b1u!Xe' );
define( 'SECURE_AUTH_SALT', '_64Q~n9rCdqksF/_e5w1:+0-?(L4dpKvDG4*P$-M3ijI=Az+-U}:ko|N^J% T&Zm' );
define( 'LOGGED_IN_SALT',   'SK]KYIW <^9>{av=++BU|MW5SFFv<Rx RZvbcld-cn:gOz?p-q{8zj<^SF]F>Z}`' );
define( 'NONCE_SALT',       '_O+kF yqJ*gS!<EoArB[EIxe$qo?b{ cr!dSG*)2XCRo^WIb}r]Hr%@V&0+2+ig$' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'emhgu_';

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
