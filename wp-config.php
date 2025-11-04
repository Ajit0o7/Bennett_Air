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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         'M@j*g6~i#0(9o8M{l([6M9umhG-$9*r5zd//TYMFMquB$RD9U/)HKIbJnr(Xh~eV' );
define( 'SECURE_AUTH_KEY',  'A9On^  QcbHHthg*lJpy]=dwND2:B9HKZC+#sx90L*`%>Q>V:f)t}R~DVHui;ARx' );
define( 'LOGGED_IN_KEY',    '8%aoI2{c&#Ryv&XM.NxVJky/lfdN: BOw48@tL*AE}e`ohe&$Lp9f&iWsKH%X69:' );
define( 'NONCE_KEY',        '1UesYEDH>9X3HVUlvBR;<,tLB6pb6uL!mU7;La/) =Cq.ZJ*ojIYg0niT7YVHMSr' );
define( 'AUTH_SALT',        '|IoTBGA #f_jgykD22*JB_cqgG:k(vhU^n?gPe^Hy;Mn=2ki1tsbw)N)53kx w$D' );
define( 'SECURE_AUTH_SALT', ']*IZ6B(:TWr^`)}e8#yH1Kns(!!v{%-hE9dZv8YsgV*lt8r0pDS{#7I;s?lp}a*5' );
define( 'LOGGED_IN_SALT',   'CXhXwdQ%&>4m<2@AOdKuq7V>`-:4$2`TEhnr!CDunoeP`7O;x879#mgd#>6o;eG8' );
define( 'NONCE_SALT',       'A}D&FJk[oX dDnMwL9{e5>yIW`j[%kDg>^wY*(`.of7$:@+-0k<bhyX!R=eck0lm' );

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
