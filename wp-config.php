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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'wordpress_user' );

/** Database password */
define( 'DB_PASSWORD', 'madegree09' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

define('FS_METHOD', 'direct');

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
define( 'AUTH_KEY',         '&Z_?,Bjs[HYy:$#e+Azb4]6q|^6`v)L }<8D)W8n+`:OwG#&gA-s1o2l*g-^hTeQ' );
define( 'SECURE_AUTH_KEY',  'C$KH^|uKjAG{|v0pftw0a[iAC@yXq{->HUm~(/(FOG?)N H1b^~: xQ$3odfQ|Pr' );
define( 'LOGGED_IN_KEY',    't*sV]lw>$RZX=6KV]qxV>*1RP#Pvf,.L*R-:NSOfH$:}1G~Z[TnR$|z-DwC? _al' );
define( 'NONCE_KEY',        'Rq--F.F!? l5D!Gwk|0kl<:WS*HxajkfgFgkZM:$h0q906+<AH$>2l(l!9<lz:|}' );
define( 'AUTH_SALT',        'wK7_6!RgzDv,07l84q%&s5}E~a.)V(L{}p!]7B*UG%jwy_ai7VphG3-i0Ps,q<a.' );
define( 'SECURE_AUTH_SALT', 'sizt;sIuw7p+@NIvE+R%;RkMjC<U86xD8htUMG,!G?;L^yxEf<*>kXPSF3<](0hW' );
define( 'LOGGED_IN_SALT',   'v`M5l+6|yXi4|%e=S7+wiR[<MqGjt=Y?.KJ.u[[ej$C7zOL}upg=`xu~y(&MD.A~' );
define( 'NONCE_SALT',       'tPW?*4J~f[mG)Ic_=?%=`>|tZ;HH ]%;b=V:a2In]|`m?s1ROD[{_$%GB|DH2IU#' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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
