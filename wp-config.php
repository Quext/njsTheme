<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'naijastreet' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'GVFTJMRtI^wx`9~wHX+W*P`]V$y~!S(e%q+(6F?a:+<H(f?BuYDyOVbP%YHz%yBT' );
define( 'SECURE_AUTH_KEY',  'mT3DYVE6qHVV|k76OKzb(;&m 5a-8&>bU.}n X_uW$X0R+|!s/?_{SVNn Ww|G+<' );
define( 'LOGGED_IN_KEY',    '|Z3,XQ|c3%.TmNFulhvse({%XU]gY*G?vbM|&|#N.^V8y9aKrDFN,D9Ko:o=LSKV' );
define( 'NONCE_KEY',        'ng,Xd(P7g_1o0rXc8&&Lac6Q<hAmvIxjTGBdPam`/dV:espd[<Tnhf0W20@,/k4W' );
define( 'AUTH_SALT',        't_ z.A;z5b3UD=2c;Dn0oQOyd*s{f}x)-{{Cd=VNjL:^bI76mT- =ctx&X*pD.15' );
define( 'SECURE_AUTH_SALT', 'dj~cXfLlCj<0x*<CM(qMJQqimp]/@X<@)XMw RDBKTb[AROwZA+k9}.T/(^3&eDa' );
define( 'LOGGED_IN_SALT',   'dM$g^5mdS*Em,&t.Cx}fC}4v>kf6*v@dq#h[:G%^p?O95zw/^YFr(%g:H^:7lTj4' );
define( 'NONCE_SALT',       'L)86[+5*PYhpPd&RF>cAoNg*.Uws%|#kXN_-Cm3*Y9p{WW4KXxw!P&|77},1yu;/' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_naijast';

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
