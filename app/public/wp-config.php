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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          '[UxF5wnio DqJoNqF+-+FEKnR!nXug&1.BWNk}-EyYMS8zLDD&JhL!Cp+&Tp;P}M' );
define( 'SECURE_AUTH_KEY',   '%4fik|xy!R(?pqj04VfVM,$eVhvwl1-/GwJ853tPOdpczw+JY 1V+k}9bc(I-svp' );
define( 'LOGGED_IN_KEY',     '7]1rk5,3oMAa)Dp+Sjt:8OMhg~Ilb7:|$x&loM:W<},n6H<{]A0N d|ueo`QXr}w' );
define( 'NONCE_KEY',         'A_r]B3z^d$8|B3RDXg3aZxq3_{,Io)=PgktPoyuHE.y=#MXbN&ul)ByA/L(Ys.~|' );
define( 'AUTH_SALT',         '|9tc6:T[dv!sO1#9BSUL[b@1.#*Z=4XnDXWaPqe{iRK.>x ubgD`</ ./+*d1pb^' );
define( 'SECURE_AUTH_SALT',  'e%xf?$@,G,G8t/G_o#D:*_lK5&HtB_< l)~SGSLLpY>Z,o@cR=sI8G)5jX`)Uymt' );
define( 'LOGGED_IN_SALT',    'oG+zPDN8P@x)|p*c|DO7_rQbZBhd8~klr;}{0DE.G_pg/^&-Q*P~|33%jZg4,qZ9' );
define( 'NONCE_SALT',        'i~)Q{;W>O(xyo:#U@.dngeq!-B>CNgsdGHa3|EYry?+0dFS^X3HJLj| ,`ys#W6l' );
define( 'WP_CACHE_KEY_SALT', 'i&VEfox2PsGu81Iw9I*PrjvvD`xEx^?^8$iO#Lr&p.!q/CQ#jYgST^&f<m)>Zm7+' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
