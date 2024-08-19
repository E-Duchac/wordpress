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
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'creativetablescapes' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost:3306' );

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
define( 'AUTH_KEY',         'bX_/Zv VUCEcLs_FYEw*6zkllG;d ujmrp%~f;(b^hWp;VG-Te0<+5zaxmI}[ziu' );
define( 'SECURE_AUTH_KEY',  'Qzwy^V<W^L4O>Rd]RP$FbU=]~p:? Der!sVqOvSy%c $SvQXn=^Yv`_D<Mp^z,p)' );
define( 'LOGGED_IN_KEY',    'DDl57(7 *=D92Ij):tTjc%%^p%_5$}zZh5=a93N]51E6,%XE6Wxi$k`1JFqx)?,e' );
define( 'NONCE_KEY',        'DGCe1%2eQ{UNW-7-<fFF*tDvH{ w3up9Yx6}W>3t(Y}!1?mX KTt(^{GD &)(j}_' );
define( 'AUTH_SALT',        'fyS C]hIz552UUl kzXFmT5caXm&H_mE@/Q;M~B`EIa$2p}wu)UPtSkZ:,B?!mQc' );
define( 'SECURE_AUTH_SALT', 'FEaFZA&Sjrjo+.<]Qa& LMdhl%Q 6qJHL } -YM^8rF, Ct+QW}:%$XWu78xwd>4' );
define( 'LOGGED_IN_SALT',   'l4}COW1@a*Zame!r.xPaRtwr76EdWeXMRe}PL/1* ?-KXm^1CYavLSW)*}0om!5F' );
define( 'NONCE_SALT',       'WX`M?>//EKyF}+.Fqp^E:A+Jh).w}W.K4 u6w_}xeqeXmgLmKopLz;+}G4SUIEN=' );

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
