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
define('FS_METHOD', 'direct');

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wp_book_store' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '12345' );

/** Database hostname */
define( 'DB_HOST', 'host.docker.internal:3306' );

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
define( 'AUTH_KEY',         'kN!Np3q,Z0:#2I<z+{wAGM5zN_ RGIF$wM%@fb )n[kXb[WK][5qc_~ZuHX1$-}A' );
define( 'SECURE_AUTH_KEY',  '{wQWNO{&{Yf/Dt5X-}`eRZ}L,3+]Az5>+;R/aNnUxGD7jW];5p>Xb,{#RdvwkO3}' );
define( 'LOGGED_IN_KEY',    '74>X(Uw1rLy5z^|HIQ{ym)sxr[sA0nZf,EvoVgmH00B MR0l_FdC0k@hr:3.shgW' );
define( 'NONCE_KEY',        '>7G@tMZTn|JUrB&p <W]~3k$mDjFr#)a>YGbeRi$^sB&1yf,m4YNnJxxacQzcx;M' );
define( 'AUTH_SALT',        'EE>0=P03`3r2NyUgD3v+IkATr}-[:};l0((7n&E1k(P0wjDnh/<kW*i<aHyK-nSu' );
define( 'SECURE_AUTH_SALT', '{byM]5w[I`)*dP_Tg[C~q$JXB5u8gnK&7VEHPQ|%QXA2OD(<j`b:L{fHK=]CdZ/P' );
define( 'LOGGED_IN_SALT',   'CB4=)2IQy8TBUfK%}ftTi<xj ^!RQMY}!:^ &}&$:Q.aQjNc8SLKJU$zlFnAreG$' );
define( 'NONCE_SALT',       '|PtC8rqU`M}mN:?%dBY3HszA=!iqB5H;{@X)[O4F]m>{j`d~yISvqc]yf,hnDl3A' );

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
