<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
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
define( 'DB_NAME', 'mytask' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         '7UV*DcHzn^N/hh,T;6wDPU[!^^KZLFJ!sCw&Q3b1e^2R.7.4Ok5a`I6Rt!+MPsO`' );
define( 'SECURE_AUTH_KEY',  '&qV![.|aqQDb3suG<5@V}etmS<S,6 K|tBN5B*$E5[)#?(<&vk| gBS%Qabb8yU5' );
define( 'LOGGED_IN_KEY',    '<)H]lI7#_7l_yB:$]j8o?jKiYkB?$5s5N3qkN@BYV`Nz*-2iOZ5;:MRQ7Lc/G!qS' );
define( 'NONCE_KEY',        'VN6bkMU.ypYDqf;aL*qLd^y8gldCW^UD/DOANsSOsBIE`XiID2Lc(*,i^{V3;)Jd' );
define( 'AUTH_SALT',        'HLtEX;=(*=,BNq[[EXWwUBE!LW*8{eE.3,S9jFuqfDan=?4WczhwbGBf1mvAI/l8' );
define( 'SECURE_AUTH_SALT', '-{:OyWMWZK=0UD{^|TZ,vLY&%<M8:k*y^&#gv;=g CXF#]V~9z&6S,=(#^<[)51S' );
define( 'LOGGED_IN_SALT',   'T0@]OI?zuEY4aE&nkAw*{d%Ze*uBAP>o~J[FjSRV5#hfqr>IZZSKqM?}[O#<^dj9' );
define( 'NONCE_SALT',       '.E.~K*.%96jw8E ]_FI*?>kY)jx%;y4S2nr;6L0 PI>3dUGy02O1fvw@0gZXh,]K' );

/**#@-*/

/**
 * WordPress database table prefix.
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
