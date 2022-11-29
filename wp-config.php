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
define( 'DB_NAME', 'railway' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'q0xKk6K5l3NkiJPIj1NI' );

/** Database hostname */
define( 'DB_HOST', 'containers-us-west-120.railway.app:5605' );

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
define( 'AUTH_KEY',         '&gi[Nx#sX>.(wkWwiuRH.y$]0M$8#y!/DH|vtVnIt_&)lKsg5xGWCMKmFFukC&F2' );
define( 'SECURE_AUTH_KEY',  'x-ucDOT:P`:I_Y<5wp?|n`]+(KAPGt.VPrzMfdeG<g-nB0<B.x7ye91c{D+E0hJy' );
define( 'LOGGED_IN_KEY',    'uR$3^B79as1e|P<^s3SYooe*ek@o*7s+=d~m.o8+vB>o;gpav(*xC;D0e%d$JIY1' );
define( 'NONCE_KEY',        '!C>68sCbth(l3M8kY0nCC61Bs`6AG{(u%K~rdQ?eZgf@dF>&n;K6jEU6*H;ree7%' );
define( 'AUTH_SALT',        'G8{A|qDFSBj{_m(:}:Sj{)/GX~nh[`W3^5(HlYRndbelKtN1PK8@]?7jUBZ?MtK:' );
define( 'SECURE_AUTH_SALT', 'uXW* )<~B*P^7/ji,:;br@OyV%@br2yIfUp],6CIr8]H#b*L<Pxww!67+3Anm?Kp' );
define( 'LOGGED_IN_SALT',   '[0Kh<./ETprsHPN7TH$+ihN^|g]3pICnQ)i)7vGdyAA=29~}w4W)gTP^{cCA[=%x' );
define( 'NONCE_SALT',       ')F~jEd[8O:#E>0XCJv!d:@tgm`HH@LJ2GE#wz,&Kvdv}_Y8*Tzrzb3|qz5G#VvW[' );

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
