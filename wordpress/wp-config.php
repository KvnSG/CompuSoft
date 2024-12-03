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
define( 'DB_NAME', 'ecommerce' );

/** Database username */
define( 'DB_USER', 'ecommerce' );

/** Database password */
define( 'DB_PASSWORD', '123456' );

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
define( 'AUTH_KEY',         '<]._#);N`gPm!8;yUC:=W[wQNF_Rhbz3H^]u;wXEB&`$wsNr6ZGxPKXoD71QTwgK' );
define( 'SECURE_AUTH_KEY',  '`8Us,<qPnn%)6_K*m/uw6]32N[BoSUvSEXXi}ou%[[x>X~(}Es]`!fZ_{m&ggp,.' );
define( 'LOGGED_IN_KEY',    'm5XMP9d.B 7lc7o545cIio{QgO1(paoZsSDb^}{5%MUF3kQhb=Y&+yehF#E!2^|_' );
define( 'NONCE_KEY',        'K9-Ut()>MD2J[>T ?EC~KRR7L<.fD4aGTUZ|>,RMuEKN9~N5vo;IrHX eFk[M9Ef' );
define( 'AUTH_SALT',        'mySH)qopZn.Jp[l9IS]FHQ-w>^.4xGzF!^4nD$15A/S*NbmS y 25n+i}Ho~x~Av' );
define( 'SECURE_AUTH_SALT', 'AC^=!E-yRh;}Q&wi%9SU=qK>(2$ED0-zWutB%Ai[1n}TLo4&D!,|_CFb^y#y.ggp' );
define( 'LOGGED_IN_SALT',   'E>C,^cj]v!6l]48i:k;|$Bd]wftp)3VE7SF$^jd.sj>V[yAZzwH,J<=YXZih@pk8' );
define( 'NONCE_SALT',       't0b(TL`LlA$Toti^<Ll|C_Czq!?rYua:wzV8?2ohp:JQGxDSf%M|W0Wd&j~H^,/4' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
