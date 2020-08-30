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
define( 'AUTH_KEY',         '!]}m-m8!3ZJ+)pp-OLs0u40W)dJd,ahJJZYOnPU%Lb:U~,WLJ;|VH!4#geiCvVlt' );
define( 'SECURE_AUTH_KEY',  'SbcGXg#fVtOdJ<f]f[3Vk2pY`qDb8ZcQ/$I^O5eI?,pr`~LFO/,J4S:3,VL*cCu2' );
define( 'LOGGED_IN_KEY',    'Z$Ku,RT/MY[R_RtW(gl>lT]m#TuZB;a(Qvt-u@(!-F8b@G#PR`B>&,ej]qt1TxUS' );
define( 'NONCE_KEY',        'FWZ9tf!>]_!V^u3c*3*:Qk<7ED!!2=cTRXZ; e> ^[Vt!@]V/^ uRRT<jbIGaY#X' );
define( 'AUTH_SALT',        ']|LpcGw)f<y5Uu,nnHUz cJ~o%#@;3%29-FHSW6&!ojK:rvDhN!*QuGY(K2qd0ny' );
define( 'SECURE_AUTH_SALT', 'K1A:)6R!!N`:))#)PX,sz]A:Ob M89`b/t}9mbnzRhWsxtnM7}lOBwh@OzaWb]!z' );
define( 'LOGGED_IN_SALT',   '=K%%SZ}9cr_J!g4`g:V-SnKs EMwcTyHE9Z1u)FuVB,Qz[fs[T:/Ec09:~u4|,8.' );
define( 'NONCE_SALT',       'h#&4 &I.w=#|BsOl Cg#uy.^hisO?O%|4 4]2eBd7m~$qg#mgMzP~rRw!@nStpIg' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp2_';

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
