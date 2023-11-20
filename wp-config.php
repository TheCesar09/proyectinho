<?php
define( 'WP_CACHE', true );
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
define( 'DB_NAME', 'u783218975_mZdog' );

/** Database username */
define( 'DB_USER', 'u783218975_3coPE' );

/** Database password */
define( 'DB_PASSWORD', 'pERxZWWWhY' );

/** Database hostname */
define( 'DB_HOST', '127.0.0.1' );

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
define( 'AUTH_KEY',          '&k]/vq|0UKWPqpi8dp1pr1VzQLWu/mP[Pk/dBK*V3najj(eIK$EVO@JCdR^x|qts' );
define( 'SECURE_AUTH_KEY',   'PlUtaP&i]HQ7{P6Cwkp6kY>g2<Q8b=j{(^,cYtr{:b=^ WnCid#<-%{b}.ytoy>7' );
define( 'LOGGED_IN_KEY',     'lFO|P[TO@qeYm1hF_M(9WD6~[apLB)L3mR]Y-C&(JGDTO99r.nIH,VWo%MlkH P@' );
define( 'NONCE_KEY',         ' 9lP70zoBNsxnyk,93r)lc$P,L/*M[LFe|~3;EzT^VBPb$)t)|C+_!%V0`K0rJ6s' );
define( 'AUTH_SALT',         ' #]=)G.6 k@MZ;uQt0L([L[GYD{:/Fm}$8nd?s.t02zhzNkILj o[yh!xR]q+(J%' );
define( 'SECURE_AUTH_SALT',  'M)J9o]l$xdxU(Qy?95b6cu;@txW+Gz >zG3aBwXJ{UfgIZ$t{Y3.<wYc3GU;3gT&' );
define( 'LOGGED_IN_SALT',    'Ao(4RZ$+&EL}ianG( ekcA}3w+D$*K+YUZM3~Zxs|5p,-*/9On:CG%WoqXp.X`w~' );
define( 'NONCE_SALT',        '=X3&DAc-e>>fdHIa3EEWWmC|.uYEumM[:]Sbq-(-}e0gTw~Cf4L|4q~VP!O5U_kp' );
define( 'WP_CACHE_KEY_SALT', 'GK6>(Q_ZO%k+fW+b70ivS7sA{5::X|iO6LL2lge%=0g]eJnQ7%$x7kAJ^o/!bEgp' );


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



define( 'FS_METHOD', 'direct' );
define( 'WP_AUTO_UPDATE_CORE', 'minor' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
