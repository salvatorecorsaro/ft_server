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
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'scorsaro' );

/** MySQL database password */
define( 'DB_PASSWORD', 'ft_server' );

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
define('AUTH_KEY',         '*#We-k10W8ZauubT63ErM6W[F+bV{`Iy^[WWfhd-@H6`|pb$wX+*n-Tc+5G?ca1Y');
	define('SECURE_AUTH_KEY',  'k-D^yJ(({SXJJSIgI?@.kDC-1<[+gpNO![UE>F~8,|gc_zF2x*ejg|l7=PWU;de5');
	define('LOGGED_IN_KEY',    'oV[JjQz^dq[|?++WQ%I6fX=N&&o@o{|6 +~iHr!jqH;}!pdQ ,w+?fvKqCi@ZcMR');
	define('NONCE_KEY',        'j>k.s[tHk.,R>lLprR+Sl(XzcXwX?:](uqcYwmXOgf1TL-&Fg/F^D+i/^WI3e@q0');
	define('AUTH_SALT',        'bx >D&ujRHfLl!vgnh70>t?I}{t4s]iQC7sq3Vra-L@jCeY3J*G4y-vGLATR)8<7');
	define('SECURE_AUTH_SALT', 'Y A2>i&R,_*pC3TU}OD6Fdb;Mp&n|(:G~uE~+^DY1;spD2-0it-*On}X&)JE}STS');
	define('LOGGED_IN_SALT',   'g~.!Cb7&? usA97$w_|;gwka$JZ`h;1@0;U[k|roE+j+p0lf$M{GmvYsS_5IH5fc');
	define('NONCE_SALT',       '^;,MF;:TD{}C+?uTje];031Aa|jl`!B8<d|hOlIM?Y%?tx96LG_7g$.YG!]Rn0pc');

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

